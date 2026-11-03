<?php
declare(strict_types=1);
$loginFile = __DIR__ . '/login.html';
if (!is_file($loginFile)) {
    http_response_code(500);
    header('Content-Type: text/plain; charset=utf-8');
    echo 'login.html nao encontrado no public_html.';
    exit;
}
header('Content-Type: text/html; charset=utf-8');
header('Cache-Control: no-cache, no-store, must-revalidate');
readfile($loginFile);