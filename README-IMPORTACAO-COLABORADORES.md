# Modelo de importação de colaboradores

Use a planilha [modelo-importacao-colaboradores-sql.csv](./img/modelo-importacao-colaboradores-sql.csv) no Excel.

1. Abra o arquivo no Excel e habilite a edição.
2. Preencha uma linha para cada colaborador, a partir da linha 2.
3. Copie a fórmula da coluna `SCRIPT_SQL_PHP_MYADMIN` para todas as linhas preenchidas. Ela cria os comandos SQL automaticamente.
4. Copie os resultados da última coluna para um novo arquivo com extensão `.sql`.
5. No phpMyAdmin, selecione o banco do sistema, clique em **Importar** e envie esse arquivo `.sql`.

Observações:

- Use `CLT` ou `PJ` em `tipoContrato`.
- Em `portalAcesso`, use `Ativo` ou `Suspenso`. Este status é separado do campo `status` do cadastro.
- A senha do portal é criada como provisória e exigirá alteração no primeiro acesso.
- Para evitar duplicidade, use um e-mail diferente para cada colaborador. O script associa o acesso do portal ao colaborador pelo e-mail.
