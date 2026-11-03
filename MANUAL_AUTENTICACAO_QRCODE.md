# Manual de autenticação por QR Code

## Como funciona

O QR Code adiciona uma confirmação em duas etapas somente para administradores.

1. O administrador faz login no Primorely.
2. O sistema mostra um QR Code temporário, válido por cinco minutos.
3. O validador abre o subdomínio auth, faz login e lê o QR com a câmera.
4. O celular mostra um número aleatório de dois dígitos.
5. O computador mostra três números.
6. O administrador seleciona o mesmo número exibido no celular.
7. O acesso é liberado.

Usuários não administradores continuam usando o login normal.

## Estrutura

Sistema principal:

- api/auth/index.php: login dos usuários Primorely.
- api/verificacao-admin/index.php: criação e confirmação do desafio QR.
- api/_shared/config.php: URL do subdomínio e segredo compartilhado.
- assets/primorely-plain.js: QR mostrado ao administrador.

Subdomínio:

- auth/index.html: tela de login e câmera.
- auth/styles.css: estilos.
- auth/app.js: leitor de QR.
- auth/auth.php: autenticação nativa, sem banco de dados.
- auth/.env: configurações privadas.

## Publicar o subdomínio

1. Crie o subdomínio, por exemplo auth.seudominio.com.br.
2. Aponte a raiz do subdomínio para a pasta auth.
3. Ative SSL. A câmera só funciona por HTTPS.

No arquivo api/_shared/config.php, configure:

    ADMIN_QR_PAGE_URL = https://auth.seudominio.com.br/

## Configurar auth/.env

Preencha a URL da API principal e a conta nativa:

    AUTH_API_URL=https://seudominio.com.br/api/verificacao-admin
    AUTH_NATIVE_USER=master
    AUTH_NATIVE_PASSWORD_HASH=bba32046875a0a6d59e3c00a551756d16a78e775ce8c0e8d8dc96c09709eb85a
    AUTH_NATIVE_SECRET=primorely-auth-validator-2026-change-this-secret

O subdomínio auth não consulta banco de dados para autenticar o usuário nativo.

## Segredo compartilhado

O valor abaixo deve ser exatamente igual nos dois locais:

    auth/.env
    AUTH_NATIVE_SECRET=seu_segredo

    api/_shared/config.php
    AUTH_NATIVE_VALIDATOR_SECRET=seu_segredo

Se os valores forem diferentes, a API recusará a confirmação do QR.

## Credencial inicial

    Usuário: master
    Senha: Primorely@Master2026!

A senha é validada pelo hash SHA-256 armazenado no arquivo auth/.env.

Para alterar a senha, gere o SHA-256 da nova senha e substitua o valor de AUTH_NATIVE_PASSWORD_HASH.

Exemplo SQL para gerar o hash:

    SELECT SHA2('MinhaNovaSenhaForte', 256);

## Exemplo de uso

No computador:

1. Faça login com um usuário do perfil Admin.
2. Leia o QR Code com o celular validador.
3. Aguarde as três opções de número aparecerem.
4. Escolha a opção mostrada no celular.

Exemplo no computador:

    12   47   83

Exemplo no celular:

    47

Neste caso, clique em 47 no computador.

No celular:

1. Abra https://auth.seudominio.com.br/.
2. Entre com usuário master e a senha nativa.
3. Clique em Abrir camera.
4. Autorize a câmera.
5. Aponte para o QR Code do computador.
6. Leia o número exibido e informe ao administrador.

Também é possível ler o QR usando a câmera padrão do celular. Ao abrir a página pelo link do QR, faça login e clique em Confirmar QR recebido.

## Problemas frequentes

### A câmera abre e não lê

- Use HTTPS.
- Libere a permissão de câmera.
- Use Chrome ou Edge atualizado.
- Centralize o QR Code e mantenha boa iluminação.
- Aguarde dois segundos após a abertura da câmera.

O leitor usa jsQR e o leitor nativo do navegador como alternativa.

### O QR fica aguardando no computador

- Confirme que o subdomínio auth foi publicado.
- Verifique ADMIN_QR_PAGE_URL.
- Verifique AUTH_API_URL.
- Confira se o QR ainda está dentro do prazo de cinco minutos.

### A confirmação foi recusada

Confira se AUTH_NATIVE_SECRET e AUTH_NATIVE_VALIDATOR_SECRET são idênticos.

## Checklist

- Subdomínio auth criado.
- Pasta auth publicada como raiz.
- HTTPS ativo.
- ADMIN_QR_PAGE_URL configurado.
- AUTH_API_URL configurado.
- Segredos idênticos.
- Login master testado.
- Câmera autorizada.
