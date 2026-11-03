<?php
declare(strict_types=1);
header('Content-Type: text/html; charset=utf-8');

function h($value): string { return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8'); }
function read_env_file(string $file): array {
    if (!is_file($file) || !is_readable($file)) return [];
    $out = [];
    foreach (file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) ?: [] as $line) {
        $line = trim((string)$line);
        if ($line === '' || str_starts_with($line, '#') || !str_contains($line, '=')) continue;
        [$k, $v] = array_pad(explode('=', $line, 2), 2, '');
        $out[trim($k)] = trim($v, " \t\n\r\0\x0B\"'");
    }
    return $out;
}
function cfg_value(array $config, array $env, string $key): string {
    $v = getenv($key);
    if ($v !== false && trim((string)$v) !== '') return trim((string)$v);
    if (isset($env[$key]) && trim((string)$env[$key]) !== '') return trim((string)$env[$key]);
    if (isset($config[$key]) && trim((string)$config[$key]) !== '') return trim((string)$config[$key]);
    return '';
}

$root = __DIR__;
$required = [
    'index.php',
    'login.html',
    'dashboard.html',
    'assets/primorely-plain.js',
    'assets/primorely-plain.css',
    'img/logocolor.png',
    'api/auth/index.php',
    'api/_shared/config.php',
    'api/_shared/crud.php',
];
$checks = [];
foreach ($required as $file) {
    $path = $root . '/' . $file;
    $checks[] = ['item' => $file, 'ok' => is_file($path), 'detail' => is_file($path) ? filesize($path) . ' bytes' : 'nao encontrado'];
}

$dbStatus = ['ok' => false, 'detail' => 'nao testado'];
try {
    $configFile = $root . '/api/_shared/config.php';
    $config = is_file($configFile) ? require $configFile : [];
    if (!is_array($config)) $config = [];
    $env = array_merge(read_env_file($root . '/.env'), read_env_file(dirname($root) . '/.env'));
    $host = cfg_value($config, $env, 'MYSQL_HOST') ?: 'localhost';
    $port = cfg_value($config, $env, 'MYSQL_PORT') ?: '3306';
    $db = cfg_value($config, $env, 'MYSQL_DATABASE') ?: cfg_value($config, $env, 'MYSQL_DB');
    $user = cfg_value($config, $env, 'MYSQL_USER');
    $pass = cfg_value($config, $env, 'MYSQL_PASSWORD');
    $charset = cfg_value($config, $env, 'MYSQL_CHARSET') ?: 'utf8mb4';
    if ($db === '' || $user === '' || $pass === '' || str_contains($db, 'u000000000') || str_contains($pass, 'troque_')) {
        $dbStatus = ['ok' => false, 'detail' => 'Credenciais MySQL ainda nao configuradas em api/_shared/config.php ou .env.'];
    } elseif (!extension_loaded('pdo_mysql')) {
        $dbStatus = ['ok' => false, 'detail' => 'Extensao PHP pdo_mysql nao habilitada.'];
    } else {
        $pdo = new PDO("mysql:host={$host};port={$port};dbname={$db};charset={$charset}", $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_TIMEOUT => 10]);
        $row = $pdo->query('SELECT DATABASE() AS db, NOW() AS now_time')->fetch();
        $dbStatus = ['ok' => true, 'detail' => 'Conectado em ' . ($row['db'] ?? '') . ' - ' . ($row['now_time'] ?? '')];
        foreach (['usuarios', 'perfis_acesso'] as $tableName) {
            $stmt = $pdo->prepare('select count(*) from information_schema.tables where table_schema = database() and table_name = ?');
            $stmt->execute([$tableName]);
            $exists = ((int)$stmt->fetchColumn()) > 0;
            $checks[] = ['item' => 'tabela: ' . $tableName, 'ok' => $exists, 'detail' => $exists ? 'existe no banco' : 'nao encontrada; execute newDB/update2.sql'];
        }
    }
} catch (Throwable $e) {
    $dbStatus = ['ok' => false, 'detail' => $e->getMessage()];
}
?><!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Diagnostico Primorely</title>
  <style>body{font-family:Arial,sans-serif;margin:0;background:#f8fafc;color:#111827;padding:28px}main{max-width:980px;margin:auto;background:#fff;border:1px solid #d1d5db;border-radius:8px;padding:24px}h1{font-size:24px;margin:0 0 8px}p{color:#4b5563}table{width:100%;border-collapse:collapse;margin-top:18px}th,td{text-align:left;border-bottom:1px solid #e5e7eb;padding:10px;font-size:14px}.ok{color:#047857;font-weight:700}.bad{color:#b91c1c;font-weight:700}code{background:#f3f4f6;padding:2px 5px;border-radius:4px}.box{border:1px solid #e5e7eb;border-radius:8px;padding:12px;margin-top:16px;background:#f9fafb}</style>
</head>
<body><main>
  <h1>Diagnostico Primorely</h1>
  <p>Confirma se o pacote JS + PHP foi enviado completo para o <code>public_html</code>.</p>
  <div class="box"><strong>PHP:</strong> <?= h(PHP_VERSION) ?><br><strong>Pasta:</strong> <?= h(__DIR__) ?><br><strong>Banco:</strong> <span class="<?= $dbStatus['ok'] ? 'ok' : 'bad' ?>"><?= $dbStatus['ok'] ? 'OK' : 'ERRO' ?></span> - <?= h($dbStatus['detail']) ?></div>
  <table><thead><tr><th>Arquivo</th><th>Status</th><th>Detalhe</th></tr></thead><tbody><?php foreach ($checks as $check): ?><tr><td><?= h($check['item']) ?></td><td class="<?= $check['ok'] ? 'ok' : 'bad' ?>"><?= $check['ok'] ? 'OK' : 'FALTANDO' ?></td><td><?= h($check['detail']) ?></td></tr><?php endforeach; ?></tbody></table>
  <p>Se algum arquivo aparecer como <strong>FALTANDO</strong>, o upload ficou incompleto. Se o banco aparecer como <strong>ERRO</strong>, ajuste as credenciais MySQL.</p>
</main></body></html>