# Histórico de versões — Primorely

Este documento é a fonte de registro das versões publicadas do Primorely.
Não contém credenciais, tokens, dados de clientes, rotas privadas ou detalhes que reduzam a segurança do sistema.

## Versão atual: 1.20.9 — 02/11/2026

### 1.20.9 — Cabeçalho editável e logo embutido

- O logo do grupo passa a ser anexado dentro do arquivo exportado, sem vínculo externo quebrado.
- O cadastro do grupo permite editar grupos existentes e registrar Responsável LWT, Responsável Stellantis e Setor usados no cabeçalho.

### 1.20.8 — Simplificação do relatório de grupos

- Removida a coluna de código da COMMESSA do relatório consolidado de grupos.
- O logo anexado passa a ser exportado em tamanho fixo pequeno, preservando a imagem original.

### 1.20.7 — Cadastro e consolidação dos grupos de exportação

- O grupo passa a registrar empresa, gestor cliente e logo anexo para o cabeçalho do relatório.
- A exportação consolida todos os colaboradores em uma única tabela, com nome, COMMESSA, competência, total diário e total geral, sem exibir Gestor Micla.

### 1.20.6 — Layout de controle na exportação de grupos

- A exportação por grupo passou a usar o modelo de controle de horas: cabeçalho institucional, responsáveis, mês, ano, COMMESSAS, dias, total diário e total por COMMESSA.

### 1.20.5 — Lista e COMMESSA nos grupos de exportação

- A seleção de colaboradores para grupos de exportação foi organizada em lista, exibindo também suas COMMESSAS.
- O relatório diário de grupos inclui a coluna COMMESSA(s) de cada colaborador.

### 1.20.4 — Grupos de exportação da Gestão DA

- A exportação de relatórios permite criar e reutilizar grupos de colaboradores por usuário.
- Ao escolher um grupo, o Excel apresenta somente seus colaboradores, todos os dias da competência, as horas lançadas em cada dia e o total por colaborador.

### 1.20.3 — Exportação da Gestão DA

- A exportação em Excel passa a manter as horas aprovadas preenchidas manualmente, mesmo sem lançamentos por data.
- O arquivo Excel inclui Gestor Micla e Gestor Cliente sem acrescentar essas colunas à grade.

### 1.20.2 — Equipe do gestor

- A seleção e remoção de colaboradores sob gestão grava imediatamente a equipe, confirma os vínculos persistidos e mantém a posição da lista durante os cliques.
- Cadastro de Colaboradores e Gestão DA passam a refletir a equipe configurada, inclusive colaboradores sem atividade na competência.

### 1.20.1 — Geração Android no Windows

- Ajustada a configuração de compilação e composição do aplicativo Android para permitir a geração do APK no diretório oficial do projeto no Windows, inclusive quando o caminho possui caracteres acentuados e com as versões atuais das ferramentas Android.

### 1.20.0 — Aplicativos nativos do Portal do Colaborador

- Adicionados projetos separados para iOS em SwiftUI e Android em Kotlin com Jetpack Compose.
- A tela inicial traz lançamento rápido em um toque e seleção da atividade quando o colaborador possui mais de uma opção ativa.
- Os aplicativos preservam login, atividades, lançamentos, relatórios e notificações por meio da API já usada pelo Portal.

### 1.19.21 — Visibilidade da auditoria de recuperação

- A área administrativa do Portal exibe as solicitações de recuperação de senha, com resultado de envio, horário e motivo quando não houver envio.

### 1.19.20 — Recuperação de senha auditável

- O colaborador recebe confirmação explícita de que a senha provisória foi enviada ou o motivo objetivo pelo qual não foi enviada.
- Cada solicitação de recuperação passa a ser registrada com usuário, resultado, horário, quantidade de destinatários e origem da solicitação.

### 1.19.19 — Correções de acesso e histórico do Portal do Colaborador

- A recuperação de senha passou a localizar contas vinculadas e e-mails cadastrados também em dados legados, sem alterar a senha quando o envio não for aceito pelo servidor de e-mail.
- O relatório do colaborador voltou a consultar o histórico aprovado completo da competência, inclusive atividades que não fazem mais parte da agenda atual.
- Novas senhas e recuperações do Portal usam hash bcrypt; senhas SHA-256 antigas são atualizadas após um login válido, sem exigir reset.

### 1.19.18 — Estabilidade no envio de alertas por e-mail

- O envio de alertas e os e-mails de teste agora tratam falhas do SMTP com segurança e tentam automaticamente a conexão TLS compatível antes de informar uma falha.

### 1.19.17 — Correção da pesquisa no filtro de colaborador

- A busca no filtro de Colaborador agora oculta corretamente os nomes que não correspondem ao texto informado.

### 1.19.16 — Pesquisa no filtro de colaborador

- O filtro da coluna Colaborador na Gestão DA agora permite pesquisar pelo nome antes de selecionar os registros.

### 1.19.15 — Preparação do Ambiente Simulado PMX Micla

- O botão “Ambiente Simulado PMX Micla” também passa pela tela de carregamento de 10 segundos antes de abrir o simulador.

### 1.19.14 — Tela de preparação do Academy

- O acesso ao Academy agora apresenta uma preparação visual de 10 segundos antes de abrir o ambiente.
- O carregamento informa as etapas de conexão, criação do ambiente, sincronização e configuração do PMX.

### 1.19.13 — Cores distintas para status do portal

- “Reprovado” passou a usar a cor vermelha.
- “Atividade aguardando aprovação” permanece em amarelo, sem ambiguidade visual.

### 1.19.12 — Envio de horas com agenda recuperada

- O Portal informa a COMMESSA junto ao rascunho e recupera o planejamento atual do colaborador quando o identificador antigo foi substituído.
- O envio deixa de ser bloqueado por um ID de planejamento desatualizado enquanto a atividade permanece na agenda do colaborador.

### 1.19.11 — Vínculo em atividades duplicadas

- O tipo PJ/CLT agora é aplicado a todas as atividades do colaborador, preservando todas as linhas ao combinar pesquisa por nome e filtro de vínculo.

### 1.19.10 — Status sem lançamentos

- Planejamentos sem horas lançadas e sem horas aprovadas manualmente não são mais exibidos como aprovados.

### 1.19.9 — Filtro de lançamentos

- Adicionado ao lado de Vínculo o filtro para mostrar todos, somente com lançamentos ou somente sem lançamentos.

### 1.19.8 — Pesquisa da Gestão DA

- Removidos os dropdowns de ação e lançamentos do toolbar.
- Restaurado o campo de pesquisa por nome ou COMMESSA.

### 1.19.7 — Filtro rigoroso de lançamentos

- O filtro de lançamentos agora recalcula as horas efetivas da competência e não classifica linhas zeradas como lançadas.
- Removido o campo de pesquisa textual da Gestão DA; permanecem os filtros por coluna e os filtros de vínculo, ação e lançamentos.

### 1.19.6 — Filtros e identificação da Gestão DA

- Corrigida a identificação de colaboradores no grid, inclusive cadastros legados.
- Filtros de vínculo, status da ação e presença de lançamentos agora são independentes e preservam todas as atividades do mesmo colaborador.

### 1.19.5 — Recuperação de senha por e-mail

- A recuperação encontra também contas vinculadas que já podiam entrar pelo login do sistema e tenta os e-mails principal e adicional cadastrados, sem repetir destinatários.
- A senha provisória só é ativada quando ao menos um endereço é aceito pelo SMTP; falhas de envio e de auditoria ficam registradas para diagnóstico.
- A mensagem de recuperação deixou de referenciar uma imagem não anexada e passou a incluir versões HTML e texto simples.

### 1.19.4 — Cor do cadeado de aprovação

- Corrigida a regra de estilo carregada por último na Gestão DA, que mantinha vermelho o fundo do cadeado de horas aprovadas; o indicador agora usa verde.

### 1.19.3 — Recuperação de senha e consistência dos lançamentos

- O pedido de recuperação orienta a conferência do e-mail cadastrado e preserva a senha atual se o serviço de envio falhar; as falhas ficam registradas para diagnóstico administrativo.
- A agenda do colaborador permanece disponível após alterações na equipe da atividade, e seus lançamentos pendentes seguem para análise.
- Portal e Gestão DA usam o status efetivo do lançamento para exibir aprovação, reprovação e horas; a ação de aprovação volta a funcionar para lançamentos pendentes.
- O cadeado de horas aprovadas usa fundo verde, e as janelas de ação fecham ao clicar fora ou pressionar Escape.

### 1.19.2 — Correções de aprovação e envio de horas

- A gestão passou a salvar as horas aprovadas digitadas diretamente antes de permitir aprovar ou reprovar o lançamento.
- O Portal do colaborador usa somente Enviar horas; o fechamento mensal e suas legendas ficam ocultos, e o cadeado aparece após o envio.

### 1.19.1 — Logo da Micla no simulador

- O cabeçalho do Ambiente Simulado PMX Micla na Academy passou a exibir o logo oficial da Micla no lugar do ícone genérico e do texto PMX Micla.

### 1.19.0 — Ambiente Simulado PMX Micla na Academy

- O módulo de prática da Academy passou a abrir o Ambiente Simulado PMX Micla, com navegação de retorno à página de cursos.
- O simulador CAD educacional foi incluído no pacote da Academy e recebeu identidade PMX Micla, mantendo a versão privada de demonstração.

### 1.18.0 — Laboratório CAD educacional online

- Criado o CAD Lab para prática de esboços, extrusão, sólidos básicos, superfícies adjacentes, costura em casca aberta e arredondamento de arestas verticais.
- Incluídos árvore de modelagem, vistas 3D interativas, desenho técnico cotado em SVG, guia de exercícios e exportação/importação de projeto.

### 1.17.0 — Observabilidade operacional do Flight Deck

- Incluídos 14 processos de análise: sessões administrativas e do Portal, lançamentos e rascunhos recentes, fila de aprovação, alertas, auditoria, banco e catálogo.
- Proteção DDoS, load balancer e rotas São Paulo–Itália aparecem explicitamente como não monitorados enquanto não houver integração com WAF, balanceador e sondas regionais.

### 1.16.4 — Carregador de contingência do Flight Deck

- Adicionado carregador direto no `dev.html`, com timeout e mensagem técnica explícita, independente de arquivos JavaScript externos.

### 1.16.3 — Desempenho do diagnóstico

- O Flight Deck passou a consultar o catálogo de metadados do banco em lote, removendo a inspeção individual que podia atrasar o carregamento.

### 1.16.2 — Inicialização garantida do Flight Deck

- O carregador do Flight Deck passou a utilizar o JavaScript principal já publicado pelo sistema e informa timeout de diagnóstico após 12 segundos.

### 1.16.1 — Correção do Flight Deck

- Corrigido o carregamento do painel de desenvolvimento com um inicializador externo e coleta otimizada dos metadados do banco.

### 1.16.0 — Console de desenvolvimento

- Adicionado o Flight Deck em `dev.html`, um painel externo ao menu para administradores acompanharem conexão, estrutura de tabelas, índices, volumes, rotas e indicadores operacionais.
- O console é somente leitura e não expõe credenciais, tokens, conteúdo de registros ou dados pessoais.

### 1.15.7 — Configurações para contas não administradoras

- Ocultadas as opções Alertas de horas, Segurança e acesso e Sistema e integrações para contas não administradoras.
- A aba Sobre dessas contas exibe somente a versão instalada, sem atalho para o histórico de versões.

### 1.15.6 — Restrição de Perfis de acesso

- O módulo Perfis de acesso passou a ser exclusivo para administradores, inclusive em chamadas diretas à API.

### 1.15.5 — Correção da pesquisa de alertas

- Corrigida a ocultação dos nomes que não correspondem à pesquisa nas listas de destinatários.

### 1.15.4 — Organização das listas de alertas

- Em cada regime, a lista Pode disparar passou a ficar acima da lista Não pode disparar.

### 1.15.3 — Pesquisa de destinatários de alertas

- Incluído campo de pesquisa por nome nas listas Pode disparar e Não pode disparar dos alertas de horas.

### 1.15.2 — Ícone de Relatórios

- Corrigido o ícone da opção Relatórios no menu para exibir um documento com gráfico.

### 1.15.1 — Ordem do menu Configurações

- A opção Sobre permanece sempre como o último item do menu de Configurações.

### 1.15.0 — Controle de destinatários dos alertas de horas

- Incluídas listas de colaboradores CLT e PJ para permitir ou bloquear o disparo dos alertas de horas.
- Bloqueios configurados também são respeitados no disparo manual.

### 1.14.30 — Ícone de Relatórios

- Alterado o ícone do menu Relatórios para um documento de relatório.

### 1.14.29 — Ações e pesquisa de COMMESSA

### 1.14.29 — Ações e pesquisa de COMMESSA

- Incluídos hints nos ícones da coluna Ação e ajustado o estado aprovado para verde com cadeado.
- A pesquisa passou a abrir dentro da lista de substituição de COMMESSA.
- Removido o botão de adicionar colaborador da barra de pesquisa.

### 1.14.28 — Colunas fixas e larguras por usuário

### 1.14.28 — Colunas fixas e larguras por usuário

- Unificado o cálculo das larguras e posições de Total, Horas aprovadas e Ação durante a rolagem e o redimensionamento.
- Corrigida a sobreposição das linhas sobre o cabeçalho Colaborador na rolagem vertical.
- Corrigida a gravação da largura de Colaborador e incluída persistência imediata por usuário, com proteção contra respostas atrasadas.

### 1.14.27 — Pesquisa na substituição de COMMESSA

- Adicionado campo de pesquisa dentro da lista de COMMESSAS disponíveis para substituição na linha do colaborador.

### 1.14.26 — Largura da coluna Ação e cabeçalho Colaborador

### 1.14.26 — Largura da coluna Ação e cabeçalho Colaborador

- Reduzida a coluna Ação para acomodar os dois botões de ícone.
- Corrigido o congelamento vertical do cabeçalho Colaborador sem prender as células do corpo.

### 1.14.25 — Vínculo de atividades para colaboradores sem atividade

### 1.14.25 — Vínculo de atividades para colaboradores sem atividade

- Adicionado botão “+” na célula da COMMESSA de colaboradores sem atividade para pesquisar e vincular uma atividade.
- Após o vínculo, a grade recarrega na ordenação alfabética dos colaboradores com atividade.

### 1.14.24 — Ações compactas na grade

### 1.14.24 — Ações compactas na grade

- Reduzida a coluna Ação para botões de ícone: aprovar, reprovar, aprovado com cadeado e reprovado.
- O estado sem lançamentos mantém apenas o símbolo cinza, sem texto.

### 1.14.23 — Atalho para adicionar colaborador

### 1.14.23 — Atalho para adicionar colaborador

- Ícone de adicionar colaborador movido para junto da pesquisa e simplificado para o símbolo “+”.

### 1.14.22 — Persistência e congelamento da grade

### 1.14.22 — Persistência e congelamento da grade

- A abreviação do código da COMMESSA não usa mais reticências.
- Corrigida a restauração das larguras personalizadas após recarregar a página.
- Congeladas as colunas Total, Horas aprovadas e Ação, além do cabeçalho Colaborador.

### 1.14.21 — Ajustes da grade e horas manuais aprovadas

### 1.14.21 — Ajustes da grade e horas manuais aprovadas

- Corrigidos redimensionamento e gravação das larguras por usuário; colaborador, código e gestor permanecem congelados e alinhados.
- Incluídas dicas com nome completo e código da COMMESSA, e o botão de larguras agora restaura diretamente o padrão.
- Corrigido o posicionamento do filtro de vínculo e o espaçamento entre cabeçalhos dos dias.
- Permitido registrar horas finais em linhas sem lançamentos, com aprovação/reprovação e inclusão nos relatórios de fechamento.

### 1.14.20 — Rolagem contínua da grade

- As colunas da Gestão DA agora se movem juntas na rolagem horizontal, sem espaços em branco.

### 1.14.19 — Posição do filtro de vínculo

- O filtro de vínculo passou a ficar ao lado do campo de pesquisa na Gestão DA.

### 1.14.18 — Ordenação de colaboradores sem atividade

- Colaboradores sem atividades vinculadas agora são exibidos ao final da lista da Gestão DA.

### 1.14.17 — Grade completa da Gestão DA

- Mantido todo o cabeçalho visível durante a rolagem da grade.
- Incluídos colaboradores CLT e PJ sem atividade vinculada, com linha em branco após o nome.
- Adicionados filtro de vínculo e busca de atividades na edição de COMMESSA.

### 1.14.16 — Coluna de horas aprovadas na Gestão DA

- Removida a coluna de horas reprovadas e restaurada a coluna de horas aprovadas na faixa fixa da grade.

### 1.14.15 — Alinhamento e divisórias das colunas congeladas

- Corrigida a diferença de células entre o cabeçalho e as linhas para alinhar os botões sob Ação.
- As divisórias de Total, Horas reprovadas e Ação permanecem visíveis e fixas durante a rolagem, com fundo opaco nos temas claro e escuro.

### 1.14.14 — Faixa fixa de resumo na Gestão DA

- Total, Horas reprovadas e Ação foram reunidas em uma faixa opaca e fixa à direita da grade, impedindo o cruzamento com a agenda durante a rolagem.

### 1.14.13 — Escopo dos filtros da Gestão DA

- Os filtros em estilo planilha ficaram restritos a Colaborador, Código da COMMESSA e Gestor MICLA.

### 1.14.12 — Simplificação do menu de gestão

- Revisão DA passa a se chamar Gestão DA e ganha o endereço `gestao.html`.
- Gestão de Atividades, DA Agenda e a página antiga de Relatórios foram removidas do menu, mas permanecem acessíveis por endereço direto.
- RelV2 foi renomeada para Relatórios e passou a ser a última opção do menu.

### 1.14.11 — Filtros e restrição de gestão na Revisão DA

- Incluídos filtros por coluna no padrão de planilha, com seleção dos valores visíveis e prioridade sobre a busca geral.
- A busca geral passou a considerar também o nome do gestor MICLA.
- Removida a coluna Horas aprovadas da grade.
- Registros sob gestão de Bruno Reis são bloqueados para perfis de gestor na consulta e nas ações da Revisão DA.

### 1.14.10 — Remoção de Horas lançadas da grade

- Removida por completo da grade a coluna Horas lançadas, incluindo cabeçalho e células das linhas.

### 1.14.9 — Fixação das células de resumo na Revisão DA

- Fixadas no corpo da grade as cinco células finais após o calendário, alinhadas aos respectivos cabeçalhos congelados.

### 1.14.8 — Rolagem e colunas finais da Revisão DA

- Preservada a posição da grade durante as atualizações; os totais após o calendário ficam congelados à direita e os cabeçalhos usam o azul do sistema.
- Mantida a coluna Horas lançadas junto às colunas de reprovação, aprovação e ação.

### 1.14.7 — Cabeçalhos e colunas da Revisão DA

- Padronizada a cor dos cabeçalhos, removida a coluna Horas lançadas e movida Ação para a última posição.
- Fixadas à esquerda as colunas Colaborador e Código da COMMESSA, com edição disponível por linha.

### 1.14.6 — Remoção da coluna duplicada na Revisão DA

- Removida a coluna COMMESSA duplicada; permanece somente Código da COMMESSA.

### 1.14.5 — Contraste da edição na Revisão DA

- Adicionado fundo branco e borda sutil ao ícone de edição do código da COMMESSA.

### 1.14.4 — Alinhamento da edição na Revisão DA

- O ícone de edição foi fixado no lado direito da coluna Código da COMMESSA em todas as linhas.

### 1.14.3 — Ação discreta na Revisão DA

- O gerenciamento da COMMESSA passou a usar um ícone compacto de edição ao lado do código.

### 1.14.2 — Ajuste de gestão e larguras na Revisão DA

- Restaurada a coluna COMMESSA entre o código e o gestor MICLA; o comando Editar passou para a célula do código.
- O ajuste de largura passou a ficar restrito a Colaborador, Código da COMMESSA, COMMESSA e Gestor MICLA.

### 1.14.1 — Ajuste de colunas da Revisão DA

- Removida a coluna de nome da COMMESSA; a grade mantém somente o código da COMMESSA, ao lado do colaborador e do gestor MICLA.

### 1.14.0 — Gestão de COMMESSAS na Revisão DA

- Separadas as informações de código e nome da COMMESSA, com a inclusão do gestor MICLA na grade.
- Adicionada a gestão por linha para excluir ou substituir a COMMESSA, sincronizando a agenda e o Portal do Colaborador.
- Incluído ajuste persistente de largura das colunas por usuário e exportação Excel com cabeçalho e linhas destacadas; removida a coluna de horas reprovadas do relatório.

### 1.13.2 — Correção da Revisão DA

- Corrigida a faixa fixa das colunas finais para que divisórias e valores acompanhem a rolagem horizontal.
- Incluídos os estados visuais de aprovação, pendência e ausência de lançamentos, com cadeados e edição orientada após aprovação.
- Destacada em vermelho a ação de reprovar todas as horas da atividade.

### 1.13.1 — Cadeado no menu da Academy

- Academy · EAD passa a exibir o mesmo cadeado do Controle de Ponto e direcionar o acesso pelo menu para a página de manutenção.

### 1.13.0 — EAD autenticado e gestão de acessos

- Academy integrada ao sistema com cursos, videoaulas, materiais de apoio de consulta individual e progresso persistente.
- Adicionados registros de ocorrências, bloqueio do EAD por sinais detectáveis e liberação administrativa com justificativa e histórico nas Configurações.
- A gestão esclarece os limites das proteções de conteúdo e da detecção de capturas em navegadores.

### 1.12.0 — Primorely Academy

- Criada a estrutura inicial da Academy corporativa, com trilhas por software, aulas em vídeo, textos, biblioteca de PDFs, acompanhamento de progresso e certificados.
- A camada visual de login e permissões está preparada, mantendo o acesso aberto até que a administração opte pela ativação.

### 1.11.22 — Formatos do relatório do Portal

- Adicionadas as opções analítica, com horas aprovadas por dia e total por COMMESSA/atividade, e sintética, com o total consolidado por COMMESSA/atividade.

### 1.11.21 — Relatórios aprovados e agilidade na revisão

- DA2 passa a exibir a agenda em ordem alfabética e a busca volta a restaurar todos os registros ao ser limpa.
- O Portal do Colaborador permite baixar o relatório em Excel ou PDF, após avisar que somente horas aprovadas pelo gestor são incluídas.
- Enter e Tab avançam para a próxima célula da grade na Revisão DA.

### 1.11.20 — Sincronização da barra horizontal da Revisão DA

- Corrigida a sincronização do arraste da barra flutuante com a rolagem horizontal da tabela.

### 1.11.19 — Correção da navegação fixa na Revisão DA

- Tornado opaco o fundo das colunas fixas para impedir a sobreposição visual das colunas diárias.
- Corrigida a fixação da barra de rolagem horizontal no rodapé da tela.

### 1.11.18 — Navegação fixa na Revisão DA

- Fixadas as colunas TOTAL, AÇÃO, HORAS LANÇADAS, HORAS REPROVADAS e HORAS APROVADAS à direita da grade.
- Adicionada uma barra de rolagem horizontal fixa no rodapé da tela, sincronizada com a tabela de Revisão DA.

### 1.11.6 — Colunas diárias uniformes da Revisão DA

- Padronizada a largura de todas as colunas de dias da semana e do mês, usando uma única medida que comporta o maior rótulo semanal e preserva o destaque do dia atual.

### 1.11.5 — Sincronização imediata da Revisão DA

- Uniformizada a collation UTF-8 da sessão de gravação e reforçadas as comparações de texto para impedir o erro SQL de collations misturadas.
- Portal do Colaborador e Revisão DA agora se avisam em tempo real após cada alteração; a grade, o Portal e os relatórios passam a refletir a mesma base de lançamentos sem recarga manual.

### 1.11.4 — Cabeçalho simplificado da Revisão DA

- O cabeçalho da primeira coluna foi reduzido para “CÓDIGO DA COMMESSA”.

### 1.11.3 — Gravação e identificação da Revisão DA

- Corrigido o conflito de collations na edição de lançamentos e na sincronização das horas da COMMESSA.
- A linha agora mostra somente primeiro e último nome do colaborador, com o código da COMMESSA no mesmo tamanho de texto; as colunas finais ficaram sem preenchimento.
- A ação por linha mantém o rótulo “Aprovar” e processa todos os lançamentos pendentes daquela atividade.

### 1.11.2 — Grade neutra da Revisão DA

- Removido o preenchimento visual das células de identificação na primeira coluna da Revisão DA, inclusive durante o hover.

### 1.11.1 — Diagramação compacta da Revisão DA

- A identificação do colaborador, COMMESSA e atividade passou a permanecer em uma única linha, sem truncamento do texto.
- As colunas dos dias foram reduzidas para exibir o máximo possível da competência na tela, preservando os destaques de fim de semana e do dia atual.

### 1.11.0 — Revisão DA mensal

- Criado o módulo Revisão DA, com grade mensal por colaborador e COMMESSA, edição decimal, finais de semana diferenciados e destaque de dias úteis anteriores sem lançamento.
- A revisão grava na mesma base do Portal do Colaborador, registra o saldo de correções, notifica o colaborador e atualiza imediatamente as aprovações e os totais operacionais.
- Incluídos relatórios de pendências e de fechamento por atividade, colaborador ou consolidado geral, além do histórico clicável de lançamentos, ajustes e aprovações.

### 1.10.0 — Status e exportação de acessos do Portal

- Corrigida a leitura de último acesso para não indicar que uma conta já concluída ainda não acessou o Portal; contas legadas sem horário passam a exibir acesso confirmado.
- A lista de presença agora prioriza colaboradores com acesso concluído e recebeu exportação em Excel com status e horários.
- A busca de colaboradores passou a respeitar o início do nome digitado e a ordenar os resultados por nome.

### 1.9.0 — Presença e reset seguro de credenciais do Portal

- O disparo de credenciais agora identifica contas que já concluíram o primeiro acesso e exige confirmação explícita antes de substituir a senha e encerrar as sessões normais.
- Incluído painel de presença do Portal, com indicador online em tempo real, último acesso e situação de credencial de todos os colaboradores.
- Adicionado disparo individual de credenciais no cadastro de colaboradores para administradores.

### 1.8.8 — Edição de fechamento na Agenda

- Corrigido o bloqueio visual que ainda desabilitava células fechadas na Gestão de Atividades e atualizado o carregamento do script da agenda para impedir uso de versão armazenada em cache.

### 1.8.7 — Autoridade administrativa na DA2

- Removidas da correção direta do administrador as barreiras de escopo, exclusão pendente e competência encerrada; lançamentos existentes passam a aceitar e gravar imediatamente o valor informado na DA2.

### 1.8.6 — Correção administrativa de fechamento

- Administradores passaram a poder corrigir lançamentos de competências fechadas pela DA2, preservando o fechamento aprovado, histórico e sincronização imediata com módulos e relatórios.

### 1.8.5 — Cadeado vetorial da DA2

- Substituído o emoji por um cadeado desenhado em CSS, no mesmo padrão visual do Portal do Colaborador.

### 1.8.4 — Identificação de fechamento aprovado na DA2

- Incluído cadeado na coluna de fechamento da DA2 quando todos os lançamentos enviados da atividade estiverem aprovados pelo gestor.

### 1.8.3 — Consulta segura de acessos ao Portal

- Adicionado script de consulta que lista colaboradores, respectivos logins do Portal e identifica quem ainda não possui usuário, sem expor senhas ou hashes.

### 1.8.2 — Escopo explícito da agenda RelV2

- Tornada explícita a escolha entre todos os colaboradores e somente os envolvidos em atividades no relatório de agenda mensal.

### 1.8.1 — Filtro mensal da agenda RelV2

- A agenda da RelV2 passou a operar exclusivamente por competência mensal, iniciando no mês vigente.
- Incluído filtro de escopo para todos os registros ou somente atividades envolvidas na agenda.

### 1.8.0 — Agenda diária na RelV2

- Adicionado o relatório de agenda diária por colaborador e COMMESSA, com lançamentos por dia e total mensal.
- Cada atividade vinculada é apresentada em uma linha própria, inclusive quando o colaborador participa de várias atividades.

### 1.7.3 — Precisão de filtros

- A busca da Gestão de Atividades reconhece o nome completo de um colaborador e exibe somente as linhas dele.
- O escopo “Todos os colaboradores” do relatório RelV2 inclui também pessoas sem atividade vinculada ou horas lançadas.

### 1.7.2 — RelV2 e filtro da agenda

- Adicionada à RelV2 a visão “Horas lançadas por colaborador”, com mês vigente ou intervalo personalizado e escopo de todos ou somente envolvidos em atividades.
- Corrigido o filtro de pesquisa da Gestão de Atividades para responder imediatamente à digitação.

### 1.7.1 — Correção de vínculo e lançamentos

- Corrigida a disponibilidade de atividades vinculadas no Portal: uma atividade listada para o colaborador pode criar sua agenda automaticamente no primeiro lançamento.
- Estados legados de aprovação não bloqueiam mais o lançamento; exclusões solicitadas e fechamentos mensais continuam protegidos.
- A DA2 foi incluída no menu lateral com a mesma permissão da Gestão de Atividades.

### 1.7.0 — DA2: agenda operacional detalhada

- Criado o módulo `DA2.html`, uma visão alternativa da Gestão de Atividades com colaborador em destaque, COMMESSA, cliente e gestor na mesma linha.
- Incluídos indicadores de envio ao fechamento mensal e de decisão do gestor, mantendo a tag de status da atividade.
- As edições administrativas da agenda continuam gravadas na fonte operacional compartilhada e refletidas imediatamente nos relatórios.

### 1.6.6 — Correção de acesso ao cadastro de usuários

- Criada uma rota alternativa autenticada para o cadastro de usuários, evitando a resposta HTML 403 gerada pelo servidor antes da API.

### 1.6.5 — Correção crítica de escopo

- Corrigida a regra de visibilidade: quando uma equipe é selecionada para um usuário, somente os colaboradores marcados podem aparecer, inclusive para contas administrativas ou com vínculos automáticos de gestor.

### 1.6.4 — Organização da equipe

- A lista de colaboradores sob gestão foi organizada em grupos, com os selecionados no topo e os disponíveis abaixo, ambos em ordem alfabética.

### 1.6.3 — Configuração da própria conta

- Usuários sem acesso ao módulo Usuários agora podem abrir a configuração da própria conta e alterar somente nome e senha; o login é exibido, mas permanece bloqueado para edição.

### 1.6.2 — Controle de equipe por usuário

- Restaurada a lista de colaboradores sob gestão no cadastro de usuários, com busca, seleção múltipla e aplicação do escopo no mesmo salvamento.

### 1.6.1 — Correção de cadastro

- O CNPJ informado para prestadores PJ deixou de bloquear o salvamento do cadastro; a validação permanece apenas informativa.

### 1.6.0 — Gestão de usuários

- A lista de usuários agora inicia filtrada em **Ativos**, com filtros também para Inativos, Suspensos, Pendentes e todos os status.
- O cadastro passou a oferecer uma mensagem pronta para copiar com nome, login, senha provisória e link do sistema, sem expor senhas já armazenadas.

### 1.5.6 — Correção de carregamento

- Corrigido um erro de sintaxe no Dashboard que interrompia o carregamento de todo o sistema.
- Renovada a referência de arquivos para impedir que o navegador reaproveite o script com falha.

### 1.5.5 — Relatório de credenciais do Portal

- Adicionado relatório em planilha para acompanhar, por colaborador, se as credenciais do Portal foram enviadas, a data do último envio aceito e as tentativas realizadas.
- O relatório pode ser visualizado na Central de Relatórios e exportado para Excel.

### 1.5.4 — Organização dos lançamentos ao vivo

- Lançamentos do mesmo colaborador passaram a ser consolidados por dia, com detalhamento das atividades disponível ao clicar na linha.
- A coluna principal mostra somente o horário, enquanto as datas são separadas visualmente; o gráfico agora ordena os horários e segmenta corretamente os dias.

### 1.5.3 — Legibilidade do Dashboard

- Ajustados contraste, tamanhos de texto e espaçamentos das seções de lançamentos em tempo real e acompanhamento por colaborador.
- Gráficos, indicadores e tabela foram alinhados ao padrão visual corporativo da janela de Configurações, com dados mais fáceis de ler e percorrer.

### 1.5.2 — Retorno do tema e Dashboard moderno

- Restaurada em Configurações a opção individual para ativar o novo tema Aurora e definir o Dashboard moderno como padrão.
- A preferência é ativada por padrão para novas escolhas e pode ser desativada a qualquer momento.

### 1.5.1 — Correção do cadastro PJ

- Corrigida a validação de CNPJ para que um número válido não seja bloqueado pelo status informativo da Receita.
- O campo agora consulta e preenche automaticamente o nome da empresa; o CNPJ `00.000.000/0000-00` é aceito com identificação provisória visível para revisão posterior.
- O modal de cadastro de colaborador foi alinhado ao padrão visual clássico de Configurações.

### 1.5.0 — Ibexy mais completa no Portal do Colaborador

- Simplificada a apresentação da Ibexy, removendo textos redundantes da sua página.
- A assistente passou a orientar detalhadamente sobre lançamentos, cores e legendas, cadeados, fechamento mensal, atividades, relatórios, notificações e acesso, com resposta acolhedora a saudações.

### 1.4.0 — Monitoramento de lançamentos por colaborador

- Dashboard passa a reunir todos os colaboradores com atividades vinculadas em visões de gráfico, lista e detalhamento das atividades.
- O painel compara horas preventivadas e lançadas, destaca quem realizou apontamentos no dia e se atualiza automaticamente a cada 30 segundos.

### 1.3.7 — Padronização e guia de instalação

- Cadastros de colaboradores passam a gravar os campos textuais em letras maiúsculas; os registros existentes também são normalizados.
- A Ibexy reconhece pedidos de instalação do aplicativo, inclusive com erros comuns de digitação, e apresenta um guia ilustrado para Android e iPhone.

### 1.3.6 — Layout clássico da Ibexy no Portal

- Restaurado o layout clássico da Ibexy no Portal do Colaborador, alinhado à Central de Ajuda e ao manual atual do sistema.
- Mantidas as respostas restritas ao Portal e o encaminhamento ao suporte no Teams para perguntas fora do escopo.

### 1.3.5 — Ibexy no Portal do Colaborador

- Adicionada a Ibexy ao Portal do Colaborador, limitada a orientações sobre lançamentos, atividades, relatórios, notificações e acesso.
- Perguntas fora desse escopo passam a direcionar o colaborador para o canal oficial de suporte no Teams.

### 1.3.4 — Cadastro de colaboradores e Central de Cadastros

- Corrigida a inicialização da estrutura de acesso ao Portal durante o cadastro de colaboradores, evitando que a ausência de uma tabela ou coluna do Portal cancele o salvamento.
- Restaurado o layout atual da Central de Cadastros, removendo a camada visual legada que sobrescrevia a interface definida.
- Atualizadas as referências de arquivos para impedir que o navegador reutilize a versão anterior em cache.

### 1.3.3 — Correção crítica do salvamento pelo modal

- Corrigida a rota de gravação de cadastros: requisições de inclusão agora chamam o arquivo da API diretamente, preservando o método `POST`.
- Eliminado o falso sucesso causado pelo redirecionamento de uma pasta da API, que convertia a inclusão em consulta.
- O modal só confirma o salvamento quando a API retorna o identificador do registro efetivamente gravado.

### 1.3.2 — Correção crítica de visibilidade no cadastro

- Corrigido o caso em que um colaborador era gravado com sucesso, mas não aparecia para o usuário que realizou o cadastro.
- O autor do cadastro recebe vínculo de consulta do novo registro sem alterar o gestor selecionado.

### 1.3.1 — Correção do cadastro de colaboradores

- Corrigida a validação invisível de Gestor Micla que bloqueava o salvamento de novos colaboradores.
- O campo agora é exigido somente se estiver configurado como obrigatório.

### 1.3.0 — Lançamentos do Portal em tempo real no Dashboard

- Adicionado painel com indicadores, gráfico por horário e lista dos lançamentos registrados no Portal do Colaborador nas últimas 24 horas.
- Inclusa permissão individual no cadastro de usuários; administradores mantêm acesso permanente.
- A consulta respeita o escopo operacional de direcionamentos do usuário.

### 1.0.4 — Isolamento da agenda por competência

- Corrigida a agenda para exibir cada atividade somente na competência selecionada na tela do colaborador.

## 1.0.3 — 16/09/2026

### 1.0.3 — Competência selecionada na inclusão

- Corrigida a inclusão de atividades para usar a competência aberta na tela do colaborador, preservando a data de criação quando a inclusão ocorre no próprio mês de origem.

## 1.0.2 — 16/09/2026

### 1.0.2 — Atividades pendentes entre competências

- Corrigida a lista de Atividades Disponíveis para exibir COMMESSAs não encerradas, inclusive as iniciadas em competência anterior.
- Atividades carregadas de mês anterior passam a ficar destacadas na agenda e nos lançamentos até serem encerradas.

### 1.0.1 — Correção do onboarding

- Corrigido o encerramento do pop-up de conclusão de cadastro após salvar a nova senha, e-mail e telefone. O colaborador agora segue automaticamente para o portal.

## 1.0.0 — 16/09/2026

Primeira versão aprovada do sistema.

### Destaques desta versão

- Portal do colaborador com agenda mensal, lançamentos, fechamento e relatórios.
- Controle de atividades por competência: uma COMMESSA somente pode ser usada no mês de criação.
- Sinalização de tentativas de inclusão fora da competência para colaborador e gestão.
- Cobrança de fechamento mensal, notificações e e-mails com antecedência configurável.
- Configuração e teste de e-mails de alerta e de fechamento.
- Credenciais do Portal do Colaborador com acesso direto ao portal móvel.
- Onboarding obrigatório no primeiro acesso para nova senha, e-mail e telefone.
- Auditoria, perfis de acesso, gestão de colaboradores e demais módulos administrativos.
- Página pública de versões e seção Sobre nas configurações.

## Política de versionamento

O Primorely usa versionamento semântico: `MAJOR.MINOR.PATCH`.

- **MAJOR**: mudança incompatível, reestruturação importante ou novo ciclo de produto.
- **MINOR**: funcionalidade nova compatível com o sistema atual.
- **PATCH**: correção, melhoria visual, ajuste de regra ou segurança sem quebra de compatibilidade.

Toda mudança futura deve atualizar este documento, a página pública `versoes.html` e o número exibido em Configurações › Sobre antes da entrega.
