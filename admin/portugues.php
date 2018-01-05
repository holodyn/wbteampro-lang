<?php

/**

  Webuddha wbTeamPro
  (c)2010 Webuddha.com, The Holodyn Corporation - All Rights Reserved

  CHANGELOG ************
  v1.0.0 - Provided by L.L. 2014-07-29

**/

defined('WHMCS_ADMIN') or die('Invalid Access');
include('english.php');

/************************************** Errors */
$_ADMINLANG['wbteampro']['error']['default_label'] = 'Mensagem de Erro';
$_ADMINLANG['wbteampro']['error']['license_error'] = 'wbTeamPro Erro: Falha na Licen&ccedil;a';
$_ADMINLANG['wbteampro']['error']['license_invalid'] = 'wbTeamPro Erro: Chave de Licen&ccedil;a Inv&aacute;lida';
$_ADMINLANG['wbteampro']['error']['license_expired'] = 'wbTeamPro Erro: A chave de Licen&ccedil;a Expirou';
$_ADMINLANG['wbteampro']['error']['license_suspended'] = 'wbTeamPro Erro: Chave de Licen&ccedil;a Suspenssa ';
$_ADMINLANG['wbteampro']['error']['change_error'] = '<b>Erro ao Salvar Altera&ccedil;&otilde;es!</b><br/>Suas altera&ccedil;&otilde;es N&Aacute;O foram salvas.';
$_ADMINLANG['wbteampro']['error']['permissiondenied'] = 'Permiss&aacute;o Negada';
$_ADMINLANG['wbteampro']['error']['invalidroleid'] = 'Seu tipo de usu&aacute;rio n&aacute;o tem permiss&aacute;o para acessar o wbTeamPro';
$_ADMINLANG['wbteampro']['error']['invalidrequest'] = 'Requisi&ccedil;&aacute;o Inv&aacute;lida ou Formato Inv&aacute;lido';
$_ADMINLANG['wbteampro']['error']['project_file_path_invalid'] = '<b>Caminho de Arquivo Inv&aacute;lido!</b><br>O caminho do arquivo definido no projeto n&aacute;o possue um diret&oacute;rio v&aacute;lido.';
$_ADMINLANG['wbteampro']['error']['project_file_path_locked'] = '<b>O diret&oacute;rio do arquivo est&aacute; sem permiss&aacute;o de escrita!</b><br>A Pasta do projeto est&aacute; SEM permiss&aacute;o de escrita.';
$_ADMINLANG['wbteampro']['error']['system_tmp_path_invalid'] = '<b>Caminho Inv&aacute;lido!</b><br>A pasta Tempor&aacute;ria do sistema definida N&Aacute;O foi encontrada.';
$_ADMINLANG['wbteampro']['error']['system_tmp_path_locked'] = '<b>Caminho do arquivo sem permiss&aacute;o de escrita!</b><br>A pasta Tempor&aacute;ria definida N&Aacute;O tem permiss&aacute;o de escrita.';
$_ADMINLANG['wbteampro']['error']['plugin_loaderror'] = '<b>Erro no Plugin!</b><br>Erro ao carregar o Plugin.';
$_ADMINLANG['wbteampro']['error']['keeping_project_type'] = 'O tipo de projeto "%s" est&aacute; atualmente em uso e n&aacute;o pode ser removido';
$_ADMINLANG['wbteampro']['error']['keeping_project_status'] = 'A situa&ccedil;&aacute;o do projeto "%s" est&aacute; atualmente em uso e n&aacute;o pode ser removida';
$_ADMINLANG['wbteampro']['error']['keeping_action_type'] = 'O tipo da a&ccedil;&aacute;o "%s" est&aacute; atualmente em uso e n&aacute;o pode ser removida';
$_ADMINLANG['wbteampro']['error']['keeping_action_status'] = 'A situa&ccedil;&aacute;o da a&ccedil;&aacute;o "%s" est&aacute; atualmente em uso e n&aacute;o pode ser removida';
$_ADMINLANG['wbteampro']['error']['record_notfound'] = 'Registro n&aacute;o encontrado';
$_ADMINLANG['wbteampro']['error']['record_undefined'] = 'Registro indefinido';
$_ADMINLANG['wbteampro']['error']['record_updatefailed'] = 'Erro atualizando Registro(s)';
$_ADMINLANG['wbteampro']['error']['record_incomplete'] = 'O dado necess&aacute;rio n&aacute;o foi fornecido';
$_ADMINLANG['wbteampro']['error']['record_invalidvalue'] = 'O valor fornecido para %s &eacute; inv&aacute;lido ou n&aacute;o permitido.';
$_ADMINLANG['wbteampro']['error']['update_check_failed'] = 'Falha ao tentar checar atualiza&ccedil;&aacute;o do remoto.';

/************************************** Alerts */
$_ADMINLANG['wbteampro']['alert']['default_label'] = 'Mensagem de Alerta';
$_ADMINLANG['wbteampro']['alert']['project_created'] = '<b>Novo Projeto Criado</b><br>Seu novo projeto foi criado. Voc&ecirc; poder&aacute; agora criar suas a&ccedil;&otilde;es.';
$_ADMINLANG['wbteampro']['alert']['change_success'] = '<b>ALtera&ccedil;&otilde;es Salvas</b><br>Altera&ccedil;&otilde;es salvas com sucesso.';
$_ADMINLANG['wbteampro']['alert']['delete_success'] = '<b>Registro Deletado</b><br>Registro deletado com sucesso.';
$_ADMINLANG['wbteampro']['alert']['close_success'] = '<b>Registro Fechado</b><br>Registro anterior fechado com sucesso.';
$_ADMINLANG['wbteampro']['alert']['copy_success'] = '<b>Projeto</b><br>O projeto foi copiado com sucesso.';

/************************************** Notices */
$_ADMINLANG['wbteampro']['notice']['default_label'] = 'Comunicado';
$_ADMINLANG['wbteampro']['notice']['superadmin'] = 'Projeto Super Admin';
$_ADMINLANG['wbteampro']['notice']['editing_templateproject'] = '<b>Comunicado de Template</b><br>Voc&ecirc; est&aacute; Editando um Template de Projeto.';
$_ADMINLANG['wbteampro']['notice']['editing_archiveproject'] = '<b>Comunicado de Arquivamento</b><br>Voc&ecirc; est&aacute; <u>Visualizando</u> um Projeto Arquivado e n&aacute;o pode efetuar altera&ccedil;&otilde;es.';
$_ADMINLANG['wbteampro']['notice']['server_timezone_na'] = '<b>Hor&aacute;rio do Servidor INdefinido!</b><br>Voc&ecirc; n&aacute;o especificou a Zona de Hor&aacute;rio. A precis&aacute;o da data pode ser afetada.';
$_ADMINLANG['wbteampro']['notice']['action_cancelled'] = '<b>A&ccedil;&aacute;o Cancelada</b><br>Voc&ecirc; cancelou a a&ccedil;&aacute;o anterior.';
$_ADMINLANG['wbteampro']['notice']['plugin_installed'] = '<b>Resultados do novo Plugin</b><br>%1$s plugins encontrados, %2$s instalados, %3$s falhas.';
$_ADMINLANG['wbteampro']['notice']['file_closed'] = '<b>T&oacute;pico "arquivo" Fechado</b><br>Pro favor abra este t&oacute;pico para alterar.';
$_ADMINLANG['wbteampro']['notice']['topic_closed'] = '<b>T&oacute;pico de Discu&ccedil;&otilde;es Fechado</b><br>Por favor abra este t&oacute;pico para alterar.';
$_ADMINLANG['wbteampro']['notice']['update_started'] = 'Atualiza&ccedil;&aacute;o Iniciada. N&aacute;o recarregue esta p&aacute;gina at&eacute; que o processo esteja completo.';
$_ADMINLANG['wbteampro']['notice']['update_backup_first'] = 'Tenha certeza de efetuar BACKUP da dua base de dados e arquivos do WHMCS antes que voc&ecirc; efetue a atualiza&ccedil;&aacute;o autom&aacute;tica.';

/************************************** Graph */
$_ADMINLANG['wbteampro']['graph']['label_projectsummary'] = 'Uma compara&ccedil;&aacute;o de Atividade de Projeto';
$_ADMINLANG['wbteampro']['graph']['label_timelogtwoyearsummary'] = 'Resumo do total de horas trabalhadas';

/************************************** Menu */
$_ADMINLANG['wbteampro']['menu']['projectmanager'] = 'Gestor de Projeto';
$_ADMINLANG['wbteampro']['menu']['tablabel'] = 'Projeto';
$_ADMINLANG['wbteampro']['menu']['viewall'] = 'Ver todos';
$_ADMINLANG['wbteampro']['menu']['dashboard'] = 'Dashboard';
$_ADMINLANG['wbteampro']['menu']['projects'] = 'Projetos';
$_ADMINLANG['wbteampro']['menu']['assignedprojects'] = 'Projetos Atribu&iacute;dos';
$_ADMINLANG['wbteampro']['menu']['myprojects'] = 'Meus Projetos';
$_ADMINLANG['wbteampro']['menu']['newproject'] = 'Novo Projeto';
$_ADMINLANG['wbteampro']['menu']['actions'] = 'A&ccedil;&otilde;es';
$_ADMINLANG['wbteampro']['menu']['incompletetasks'] = 'Tarefas Incompletas';
$_ADMINLANG['wbteampro']['menu']['assignedtasks'] = 'Tarefas Atribu&iacute;das';
$_ADMINLANG['wbteampro']['menu']['myactions'] = 'Minhas A&ccedil;&otilde;es';
$_ADMINLANG['wbteampro']['menu']['files'] = 'Arquivos';
$_ADMINLANG['wbteampro']['menu']['myfiles'] = 'Meus Arquivos';
$_ADMINLANG['wbteampro']['menu']['discussions'] = 'Coment&aacute;rios';
$_ADMINLANG['wbteampro']['menu']['mydiscussions'] = 'Meus Coment&aacute;rios';
$_ADMINLANG['wbteampro']['menu']['tickets'] = 'Tickets';
$_ADMINLANG['wbteampro']['menu']['mytickets'] = 'Meus Tickets';
$_ADMINLANG['wbteampro']['menu']['timelog'] = 'Time Log';
$_ADMINLANG['wbteampro']['menu']['mytimelog'] = 'Meus Time Logs';
$_ADMINLANG['wbteampro']['menu']['setupmanager'] = 'Gerenciar Sistema';
$_ADMINLANG['wbteampro']['menu']['archivedprojects'] = 'Projetos Arquivados';
$_ADMINLANG['wbteampro']['menu']['templateprojects'] = 'Projetos Templates';
$_ADMINLANG['wbteampro']['menu']['system'] = 'Sistema';
$_ADMINLANG['wbteampro']['menu']['setup_config'] = 'Configura&ccedil;&aacute;o';
$_ADMINLANG['wbteampro']['menu']['setup_update'] = 'Verificar Atualiza&ccedil;&otilde;es';
$_ADMINLANG['wbteampro']['menu']['setup_update_avail'] = 'Atualiza&ccedil;&otilde;es Prontas';
$_ADMINLANG['wbteampro']['menu']['setup_plugins'] = 'Gerenciar Plugins';
$_ADMINLANG['wbteampro']['menu']['support'] = 'Ajuda & Suporte';

/************************************** JS */
$_ADMINLANG['wbteampro']['js']['tabProject'] = 'Projeto';
$_ADMINLANG['wbteampro']['js']['tabProjects'] = 'Projetos';
$_ADMINLANG['wbteampro']['js']['tabTickets'] = 'Tickets';
$_ADMINLANG['wbteampro']['js']['loadMsg'] = 'Carregando... Favor Aguardar...';
$_ADMINLANG['wbteampro']['js']['noActiveLogs'] = 'Timelogs Inativos';
$_ADMINLANG['wbteampro']['js']['reqComplete'] = 'Requisi&ccedil;&aacute;o Completa';
$_ADMINLANG['wbteampro']['js']['uiTimelogStart'] = 'Iniciar';
$_ADMINLANG['wbteampro']['js']['uiTimelogSave'] = 'Salvar';
$_ADMINLANG['wbteampro']['js']['uiTimelogCancel'] = 'Cancelar';
$_ADMINLANG['wbteampro']['js']['uiTicketCreate'] = 'Criar';
$_ADMINLANG['wbteampro']['js']['uiTicketCreateOpen'] = 'Criar & Abrir';
$_ADMINLANG['wbteampro']['js']['uiTicketCancel'] = 'Cancelar';
$_ADMINLANG['wbteampro']['js']['btnStartTimer'] = 'Iniciar Temporizador';
$_ADMINLANG['wbteampro']['js']['btnStopTimer'] = 'Parar Temporizador';
$_ADMINLANG['wbteampro']['js']['msgTimelogSaved'] = 'Timelog Salvo em [time]';
$_ADMINLANG['wbteampro']['js']['msgTimelogStopped'] = 'Timelog Parado ap&oacute;s [time]';
$_ADMINLANG['wbteampro']['js']['deleteConfirm'] = 'Selecione OK para confirmar sua a&ccedil;&aacute;o';
$_ADMINLANG['wbteampro']['js']['deletePrompt'] = 'Insira DELETAR para confirmar sua a&ccedil;&atilde;o';
$_ADMINLANG['wbteampro']['js']['deleteAnswer'] = 'DELETAR';
$_ADMINLANG['wbteampro']['js']['deleteCancelled'] = 'Exclus&atilde;o Cancelada';
$_ADMINLANG['wbteampro']['js']['textLimitRemain'] = '[remain] de [limit] caracteres restantes';
$_ADMINLANG['wbteampro']['js']['textLimitReached'] = 'm&aacute;ximo de [limit] caracteres atingido';
$_ADMINLANG['wbteampro']['js']['copyPrompt'] = 'Insira COPIAR para confirmar sua a&ccedil;&atilde;o';
$_ADMINLANG['wbteampro']['js']['copyAnswer'] = 'COPIAR';
$_ADMINLANG['wbteampro']['js']['copyCancelled'] = 'Copia Cancelada';
$_ADMINLANG['wbteampro']['js']['ajaxSearchInput'] = 'Preencha para procurar...';
$_ADMINLANG['wbteampro']['js']['rruleOccurDaily'] = 'dia(s)';
$_ADMINLANG['wbteampro']['js']['rruleOccurWeekly'] = 'semana(s)';
$_ADMINLANG['wbteampro']['js']['rruleOccurMonthly'] = 'm&ecirc;s(s)';
$_ADMINLANG['wbteampro']['js']['rruleOccurYearly'] = 'anos(s)';
$_ADMINLANG['wbteampro']['js']['rowSelectEmpty'] = 'Por favor selecione a(s) linha(s) para gerenciar';
$_ADMINLANG['wbteampro']['js']['rowSelectConfirm'] = 'Selecione OK para confirmar sua a&ccedil;&atilde;o';
$_ADMINLANG['wbteampro']['js']['uiInvoiceCreate'] = 'Criar / Atualizar Fatura';
$_ADMINLANG['wbteampro']['js']['uiInvoiceCancel'] = 'Cancelar';
$_ADMINLANG['wbteampro']['js']['uiInvoiceNoItems'] = 'Sem itens para Faturar';
$_ADMINLANG['wbteampro']['js']['uiInvoiceSuccess'] = 'Fatura(s) do(s) Timelog(s) criada(s) com sucesso ';
$_ADMINLANG['wbteampro']['js']['uiModifyAccept'] = 'Aplicar Altera&ccedil;&otilde;es';
$_ADMINLANG['wbteampro']['js']['uiModifyCancel'] = 'Cancelar';

/************************************** Page Headers */
$_ADMINLANG['wbteampro']['taskheader']['prefix'] = 'Gerenciador de Projetos: ';
$_ADMINLANG['wbteampro']['taskheader']['project_edit_archive'] = ' [ARQUIVO]';
$_ADMINLANG['wbteampro']['taskheader']['project_edit_template'] = ' [TEMPLATE]';
$_ADMINLANG['wbteampro']['taskheader']['project_edit_new'] = 'Novo Projeto';
$_ADMINLANG['wbteampro']['taskheader']['project_action_list'] = 'A&ccedil;&otilde;es do projeto';
$_ADMINLANG['wbteampro']['taskheader']['project_ticket_list'] = 'Tickets do Projeto';
$_ADMINLANG['wbteampro']['taskheader']['project_file_list'] = 'Arquivos do Projeto';
$_ADMINLANG['wbteampro']['taskheader']['project_topic_list'] = 'Coment&aacute;rios do Projeto';
$_ADMINLANG['wbteampro']['taskheader']['project_list'] = 'Todos os Projetos';
$_ADMINLANG['wbteampro']['taskheader']['action_list'] = 'Todas A&ccedil;&otilde;es dos Projetos';
$_ADMINLANG['wbteampro']['taskheader']['file_list'] = 'Todos Arquivos dos Projetos';
$_ADMINLANG['wbteampro']['taskheader']['topic_list'] = 'Todos T&oacute;picos do Projeto';
$_ADMINLANG['wbteampro']['taskheader']['ticket_list'] = 'Todos Tickets do Projeto';
$_ADMINLANG['wbteampro']['taskheader']['timelog_list'] = 'Todos Timelogs do Projeto';
$_ADMINLANG['wbteampro']['taskheader']['template_list'] = 'Todos os Templates';
$_ADMINLANG['wbteampro']['taskheader']['archive_list'] = 'Todos Arquivos';

/************************************** Client Profile Tabs */
$_ADMINLANG['wbteampro']['profiletab']['projects'] = 'Projetos';
$_ADMINLANG['wbteampro']['profiletab']['actions'] = 'A&ccedil;&otilde;es';
$_ADMINLANG['wbteampro']['profiletab']['files'] = 'Arquivos';
$_ADMINLANG['wbteampro']['profiletab']['topics'] = 'Coment&aacute;rios';
$_ADMINLANG['wbteampro']['profiletab']['timelog'] = 'Time Logs';
$_ADMINLANG['wbteampro']['profiletab']['tickets'] = 'Tickets';

/************************************** Project Tabs */
$_ADMINLANG['wbteampro']['projecttab']['details'] = 'Detalhes';
$_ADMINLANG['wbteampro']['projecttab']['actions'] = 'A&ccedil;&otilde;es';
$_ADMINLANG['wbteampro']['projecttab']['tickets'] = 'Tickets';
$_ADMINLANG['wbteampro']['projecttab']['files'] = 'Arquivos';
$_ADMINLANG['wbteampro']['projecttab']['filesview'] = 'Visualizar Arquivo';
$_ADMINLANG['wbteampro']['projecttab']['topics'] = 'Coment&aacute;rios';
$_ADMINLANG['wbteampro']['projecttab']['topicsview'] = 'Visualizar COment&aacute;rios';
$_ADMINLANG['wbteampro']['projecttab']['timelog'] = 'Time Log';

/************************************** Admin Visibility */
$_ADMINLANG['wbteampro']['adminvisible']['all'] = 'Todos';
$_ADMINLANG['wbteampro']['adminvisible']['manager'] = 'Somente Gerente';
$_ADMINLANG['wbteampro']['adminvisible']['related'] = 'Gerente & Atribu&iacute;do';

/************************************** Client Visibility */
$_ADMINLANG['wbteampro']['clientvisible']['hidden'] = 'Oculto';
$_ADMINLANG['wbteampro']['clientvisible']['visible'] = 'Vis&iacute;vel';
$_ADMINLANG['wbteampro']['clientvisible']['view'] = 'Ver';
$_ADMINLANG['wbteampro']['clientvisible']['modify'] = 'Modificar';
$_ADMINLANG['wbteampro']['clientvisible']['inherit'] = 'Herdar';

/************************************** Project Functions */
$_ADMINLANG['wbteampro']['projectfunction']['default'] = 'Padr&atilde;o';
$_ADMINLANG['wbteampro']['projectfunction']['template'] = 'Template';
$_ADMINLANG['wbteampro']['projectfunction']['archive'] = 'Arquivo';

/************************************** Project Fields */
$_ADMINLANG['wbteampro']['projectsave']['newActionLabel'] = 'Defina a Etapa';
$_ADMINLANG['wbteampro']['projectlist']['newproject'] = 'Novo Projeto';
$_ADMINLANG['wbteampro']['projectlist']['newtemplate'] = 'Novo Template';
$_ADMINLANG['wbteampro']['projectfield']['name'] = 'Nome do Projeto';
$_ADMINLANG['wbteampro']['projectfield']['client'] = 'Cliente';
$_ADMINLANG['wbteampro']['projectfield']['type'] = 'Tipo';
$_ADMINLANG['wbteampro']['projectfield']['contact'] = 'Cliente Contato';
$_ADMINLANG['wbteampro']['projectfield']['status'] = 'Situa&ccedil;&atilde;o';
$_ADMINLANG['wbteampro']['projectfield']['managedby'] = 'Gerenciado por';
$_ADMINLANG['wbteampro']['projectfield']['visiblestatus'] = 'Acesso Admin';
$_ADMINLANG['wbteampro']['projectfield']['assignedto'] = 'Atribu&iacute;do para';
$_ADMINLANG['wbteampro']['projectfield']['datestart'] = 'Data de In&iacute;cio';
$_ADMINLANG['wbteampro']['projectfield']['datefinish'] = 'Data de Finaliza&ccedil;&atilde;o';
$_ADMINLANG['wbteampro']['projectfield']['details'] = 'Notas / Detalhes';
$_ADMINLANG['wbteampro']['projectfield']['created'] = 'Criado';
$_ADMINLANG['wbteampro']['projectfield']['activity'] = 'Atividade';
$_ADMINLANG['wbteampro']['projectfield']['modified'] = 'Modificado';
$_ADMINLANG['wbteampro']['projectfield']['completed'] = 'Completo';
$_ADMINLANG['wbteampro']['projectfield']['sfcompleted'] = '%1$s de %2$s A&ccedil;&otilde;es, %3$s Etapas, %4$s Grupo, %5$s Tarefa, Tempo Decorrido: %6$s';
$_ADMINLANG['wbteampro']['projectfield']['namecopysprint'] = '*COPIA* %s';
$_ADMINLANG['wbteampro']['projectfield']['notes'] = 'Notas Privadas';
$_ADMINLANG['wbteampro']['projectfield']['clientvisible'] = 'Accesso Cliente';
$_ADMINLANG['wbteampro']['projectfield']['function'] = 'Fun&ccedil;&atilde;o';
$_ADMINLANG['wbteampro']['projectfield']['billable'] = 'Tempo Fatur&aacute;vel';

/************************************** Copy Fields */
$_ADMINLANG['wbteampro']['copyform']['option_setup'] = 'Op&ccedil;&otilde;es para C&oacute;pia de Projeto';
$_ADMINLANG['wbteampro']['copyform']['project_setup'] = 'Novas Configura&ccedil;&otilde;es do Projeto';
$_ADMINLANG['wbteampro']['copyfield']['newname'] = 'Novo Nome do Projeto';
$_ADMINLANG['wbteampro']['copyfield']['copy_template'] = 'Salvar como Template';
$_ADMINLANG['wbteampro']['copyfield']['copy_actions'] = 'Copiar A&ccedil;&otilde;es';
$_ADMINLANG['wbteampro']['copyfield']['copy_files'] = 'Copiar Galeria de Arquivos';
$_ADMINLANG['wbteampro']['copyfield']['copy_topics'] = 'Copiar Coment&aacute;rios Armazenados';
$_ADMINLANG['wbteampro']['copyfield']['copy_tickets'] = 'Copiar Hist&oacute;rico dos Tickets';
$_ADMINLANG['wbteampro']['copyfield']['copy_timelogs'] = 'Copiar Time Logs';

/************************************** File Fields */
$_ADMINLANG['wbteampro']['filelist']['newthread'] = 'Novo T&oacute;pico';
$_ADMINLANG['wbteampro']['filelist']['appendthread'] = 'Acrescentar T&oacute;pico';
$_ADMINLANG['wbteampro']['filelist']['deletethread'] = 'Excluir T&oacute;pico';
$_ADMINLANG['wbteampro']['filelist']['clientaccess'] = 'Acesso Cliente';
$_ADMINLANG['wbteampro']['filelist']['toggleaccess'] = 'Acesso Alternado';
$_ADMINLANG['wbteampro']['filelist']['by'] = 'por';
$_ADMINLANG['wbteampro']['filelist']['on'] = 'no';
$_ADMINLANG['wbteampro']['filefield']['label'] = 'Etiqueta';
$_ADMINLANG['wbteampro']['filefield']['version'] = 'Vers&atilde;o';
$_ADMINLANG['wbteampro']['filefield']['file'] = 'Arquivo';
$_ADMINLANG['wbteampro']['filefield']['mime'] = 'Mime';
$_ADMINLANG['wbteampro']['filefield']['size'] = 'Tamanho';
$_ADMINLANG['wbteampro']['filefield']['detail'] = 'Detalhe';
$_ADMINLANG['wbteampro']['filefield']['upload'] = 'Upload';
$_ADMINLANG['wbteampro']['filelist']['status'] = 'Situa&ccedil;&atilde;o';
$_ADMINLANG['wbteampro']['filelist']['status_open'] = 'Aberto';
$_ADMINLANG['wbteampro']['filelist']['status_closed'] = 'Fechado';
$_ADMINLANG['wbteampro']['filelist']['expanddetail'] = 'Expandir / Comprimir';
$_ADMINLANG['wbteampro']['filelist']['count'] = '%s Arquivos';

/************************************** Ticket Fields */
$_ADMINLANG['wbteampro']['ticketlist']['linkticket'] = 'Link';
$_ADMINLANG['wbteampro']['ticketlist']['newticket'] = 'Novo Ticket';
$_ADMINLANG['wbteampro']['ticketfield']['project'] = 'Projeto';
$_ADMINLANG['wbteampro']['ticketfield']['action'] = 'A&ccedil;&atilde;o';

/************************************** Topic Fields */
$_ADMINLANG['wbteampro']['topiclist']['newthread'] = 'Novo T&oacute;pico';
$_ADMINLANG['wbteampro']['topiclist']['appendthread'] = 'Acrescentar T&oacute;pico';
$_ADMINLANG['wbteampro']['topiclist']['deletethread'] = 'Excluir T&oacute;pico';
$_ADMINLANG['wbteampro']['topiclist']['clientaccess'] = 'Acesso Cliente';
$_ADMINLANG['wbteampro']['topiclist']['toggleaccess'] = 'Acesso Alternado';
$_ADMINLANG['wbteampro']['topiclist']['by'] = 'por';
$_ADMINLANG['wbteampro']['topiclist']['on'] = 'no';
$_ADMINLANG['wbteampro']['topicfield']['title'] = 'T&iacute;tulo';
$_ADMINLANG['wbteampro']['topicfield']['detail'] = 'Detalhe';
$_ADMINLANG['wbteampro']['topiclist']['status'] = 'Situa&ccedil;&atilde;o';
$_ADMINLANG['wbteampro']['topiclist']['status_open'] = 'Aberto';
$_ADMINLANG['wbteampro']['topiclist']['status_closed'] = 'Fechado';
$_ADMINLANG['wbteampro']['topiclist']['expanddetail'] = 'Expandir / Comprimir';
$_ADMINLANG['wbteampro']['topiclist']['count'] = '%s Postagens';
$_ADMINLANG['wbteampro']['topiclist']['created'] = 'Iniciado em %s';

/************************************** Action Fields */
$_ADMINLANG['wbteampro']['actionlist']['dispmode'] = 'Modo de Visualiza&ccedil;&atilde;o:';
$_ADMINLANG['wbteampro']['actionlist']['listview'] = 'Visualiza&ccedil;&atilde;o da Lista';
$_ADMINLANG['wbteampro']['actionlist']['treeview'] = 'Visualiza&ccedil;&atilde;o da Hierarquia';
$_ADMINLANG['wbteampro']['actionlist']['ganttview'] = 'Visualiza&ccedil;&atilde;o Gr&aacute;fica';
$_ADMINLANG['wbteampro']['actionlist']['listcollapse'] = 'Comprimir todos os N&oacute;s';
$_ADMINLANG['wbteampro']['actionlist']['listexpand'] = 'Expandir todos os N&oacute;s';
$_ADMINLANG['wbteampro']['actionlist']['newaction'] = 'Nova A&ccedil;&atilde;o';
$_ADMINLANG['wbteampro']['actionlist']['addchild'] = 'Adicionar Filho';
$_ADMINLANG['wbteampro']['actionlist']['stoptimer'] = 'Parar o Temporizador';
$_ADMINLANG['wbteampro']['actionlist']['starttimer'] = 'Iniciar o Temporizador';
$_ADMINLANG['wbteampro']['actionlist']['viewlog'] = 'Visualizar Log';
$_ADMINLANG['wbteampro']['actionlist']['delete'] = 'Excluir';
$_ADMINLANG['wbteampro']['actionlist']['totalcomplete'] = 'Projeto Completo';
$_ADMINLANG['wbteampro']['actionlist']['totalelapsed'] = 'Total Decorrido';
$_ADMINLANG['wbteampro']['actionlist']['client_access'] = 'Acesso Alternado do Cliente';
$_ADMINLANG['wbteampro']['actionfield']['name'] = 'Nome';
$_ADMINLANG['wbteampro']['actionfield']['complete'] = '% Completo';
$_ADMINLANG['wbteampro']['actionfield']['type'] = 'Tipo';
$_ADMINLANG['wbteampro']['actionfield']['datestart'] = 'Data de In&iacute;cio';
$_ADMINLANG['wbteampro']['actionfield']['status'] = 'Situa&ccedil;&atilde;o';
$_ADMINLANG['wbteampro']['actionfield']['datefinish'] = 'Data de Finaliza&ccedil;&atilde;o';
$_ADMINLANG['wbteampro']['actionfield']['client'] = 'Cliente';
$_ADMINLANG['wbteampro']['actionfield']['managedby'] = 'Gerenciado por';
$_ADMINLANG['wbteampro']['actionfield']['maincontact'] = 'COntato Principal';
$_ADMINLANG['wbteampro']['actionfield']['assignedto'] = 'Atribu&iacute;do para';
$_ADMINLANG['wbteampro']['actionfield']['detail'] = 'Notas / Detalhes';
$_ADMINLANG['wbteampro']['actionfield']['created'] = 'Criado';
$_ADMINLANG['wbteampro']['actionfield']['activity'] = 'Atividade';
$_ADMINLANG['wbteampro']['actionfield']['modified'] = 'Modificada';
$_ADMINLANG['wbteampro']['actionfield']['parentaction'] = 'A&ccedil;&atilde;o Superior';
$_ADMINLANG['wbteampro']['actionfield']['clientvisible'] = 'Acesso Cliente';
$_ADMINLANG['wbteampro']['actionfield']['notes'] = 'Notas Privadas';
$_ADMINLANG['wbteampro']['actionfield']['priority'] = 'Prioridade';
$_ADMINLANG['wbteampro']['actionfield']['billable'] = 'Tempo Fatur&aacute;vel';

$_ADMINLANG['wbteampro']['actionfield']['duration'] = 'Dura&ccedil;ao';
$_ADMINLANG['wbteampro']['actionfield']['recurrence'] = 'Retorno';
$_ADMINLANG['wbteampro']['actionfield']['summary']['datestart'] = 'Iniciar Recorr&ecirc;ncia';
$_ADMINLANG['wbteampro']['actionfield']['summary']['datefinish'] = 'Finalizar Recorr&ecirc;ncia';
$_ADMINLANG['wbteampro']['actionfield']['occurrence']['datestart'] = 'Iniciar Ocorr&ecirc;ncia';
$_ADMINLANG['wbteampro']['actionfield']['occurrence']['datefinish'] = 'Finalizar Ocorr&ecirc;ncia';

/************************************** Recurrence Fields */
$_ADMINLANG['wbteampro']['recurrence']['report']['instance'] = 'Ocorr&ecirc;ncia %s de %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['fromdate'] = 'Iniciando em %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['daily']['count'] = 'Repetir a cada %s dias por %s days';
$_ADMINLANG['wbteampro']['recurrence']['report']['daily']['until'] = 'Repetir a cada %s dias at&eacute; %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['weekly']['count'] = 'Repetir a cada %s semanas em %s por %s semanas';
$_ADMINLANG['wbteampro']['recurrence']['report']['weekly']['until'] = 'Repetir a cada %s semanas em %s at&eacute; %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['monthly']['bymonthday']['count'] = 'Repetir a cada %s semanas em %s por %s semanas';
$_ADMINLANG['wbteampro']['recurrence']['report']['monthly']['bymonthday']['until'] = 'Repetir a cada %s semanas em %s at&eacute; %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['monthly']['bysetpos']['count'] = 'Repetir a cada %s semanas em %s por %s semanas';
$_ADMINLANG['wbteampro']['recurrence']['report']['monthly']['bysetpos']['until'] = 'Repetir a cada %s semanas em %s at&eacute; %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['yearly']['bymonthday']['count'] = 'Repetir a cada %s semanas em %s por %s semanas';
$_ADMINLANG['wbteampro']['recurrence']['report']['yearly']['bymonthday']['until'] = 'Repetir a cada %s semanas em %s at&eacute; %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['yearly']['bysetpos']['count'] = 'Repetir a cada %s semanas em %s por %s semanas';
$_ADMINLANG['wbteampro']['recurrence']['report']['yearly']['bysetpos']['until'] = 'Repetir a cada %s semanas em %s at&eacute; %s';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['legend'] = 'Frequência Recorrente';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['daily']['everyxdays'] = '%s Reincidir todo %s %s dia(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['weekly']['everyxweeks'] = '%s Reincidir todo %s %s semana(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['monthly']['nthofxmonths'] = '%sDia%s %s de cada %s mês/meses';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['monthly']['nthdayofxmonths'] = '%sO%s %s %s de cada %s mês/meses';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['yearly']['nthofxyears'] = '%sEm%s %s o %s cada %s ano(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['yearly']['nthdayofxyears'] = '%sNo%s %s %s de %s cada %s ano(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['legend'] = 'Dura&ccedil;&acirc;o Recorrente';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['until'] = '%sRepetir at&eacute;%s %s';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['count'] = '%sRepetir por%s %s %socorr&ecirc;ncia(s)%s';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['occur']['daily'] = 'dia(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['occur']['weekly'] = 'semana(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['occur']['monthly'] = 'm&ecirc;s(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['occur']['yearly'] = 'Ano(s)';

/************************************** Timelog Fields */
$_ADMINLANG['wbteampro']['timeloglist']['totalelapsed'] = 'Total Decorrido';
$_ADMINLANG['wbteampro']['timeloglist']['by'] = 'por';
$_ADMINLANG['wbteampro']['timelogfield']['note'] = 'Nota';
$_ADMINLANG['wbteampro']['timelogfield']['datestart'] = 'Data de In&iacute;cio';
$_ADMINLANG['wbteampro']['timelogfield']['datestop'] = 'Data de Parada';
$_ADMINLANG['wbteampro']['timelogfield']['owner'] = 'Propriet&aacute;rio';
$_ADMINLANG['wbteampro']['timelogfield']['elapsed'] = 'Tempo Decorrido';
$_ADMINLANG['wbteampro']['timelogfield']['billable'] = 'Fatur&aacute;vel';
$_ADMINLANG['wbteampro']['timelogfield']['invoice'] = 'Fatura #';

/************************************** Timelog */
$_ADMINLANG['wbteampro']['timelog']['emptynote'] = '~';
$_ADMINLANG['wbteampro']['timelog']['status']['active'] = 'Ativo';
$_ADMINLANG['wbteampro']['timelog']['status']['complete'] = 'Completo';
$_ADMINLANG['wbteampro']['timelog']['elapsed']['all'] = 'Tempo total Trabalhado';
$_ADMINLANG['wbteampro']['timelog']['elapsed']['my'] = 'Meu tempo Trabalhando';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['milestone'] = 'Etapa';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['group'] = 'Grupo';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['task'] = 'Tarefa';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['ticket'] = 'Ticket de Suporte';

/************************************** Timelog Modal */
$_ADMINLANG['wbteampro']['timelog']['modal']['title'] = 'Iniciar um Novo Timelog';
$_ADMINLANG['wbteampro']['timelog']['modal']['event'] = 'Entre a Descri&ccedil;&atilde;o do Evento';
$_ADMINLANG['wbteampro']['timelog']['modal']['manual'] = 'Especifique a Dura&ccedil;&atilde;o & Salve como Completo';
$_ADMINLANG['wbteampro']['timelog']['modal']['start'] = 'Inicio';
$_ADMINLANG['wbteampro']['timelog']['modal']['duration'] = 'Dura&ccedil;&atilde;o';
$_ADMINLANG['wbteampro']['timelog']['modal']['durexample'] = 'ex: 2 horas, 5 minutos, 10 segundos';
$_ADMINLANG['wbteampro']['timelog']['modal']['owner'] = 'Propriet&aacute;rio';
$_ADMINLANG['wbteampro']['timelog']['modal']['billable'] = 'Este ser&aacute; cobrado?';

/************************************** Invoice Modal */
$_ADMINLANG['wbteampro']['invoice']['modal']['title'] = 'Criar uma Nova Fatura';
$_ADMINLANG['wbteampro']['invoice']['modal']['date'] = 'Data da Fatura';
$_ADMINLANG['wbteampro']['invoice']['modal']['duedate'] = 'Data de Vencimento';
$_ADMINLANG['wbteampro']['invoice']['modal']['taxrate'] = 'Taxa de Imposto';
$_ADMINLANG['wbteampro']['invoice']['modal']['applytax'] = 'Aplicar Imposto';
$_ADMINLANG['wbteampro']['invoice']['modal']['paymentmethod'] = 'M&eacute;todo de Pagamento';
$_ADMINLANG['wbteampro']['invoice']['modal']['sendinvoice'] = 'Enviar Fatura';
$_ADMINLANG['wbteampro']['invoice']['modal']['autoapplycredit'] = 'Aplicar Cr&eacute;ditos';
$_ADMINLANG['wbteampro']['invoice']['modal']['rate'] = 'Custo por hora';
$_ADMINLANG['wbteampro']['invoice']['modal']['invoiceid'] = 'Adicionar na Fatura ID';

/************************************** Modify Actions Modal */
$_ADMINLANG['wbteampro']['modifyactions']['modal']['title'] = 'Modificar Multiplas A&ccedil;&otilde;es';
$_ADMINLANG['wbteampro']['modifyactions']['modal']['th-apply'] = 'Aplicar';
$_ADMINLANG['wbteampro']['modifyactions']['modal']['th-option'] = 'Op&ccedil;&atilde;o';
$_ADMINLANG['wbteampro']['modifyactions']['modal']['th-value'] = 'Valor';

/************************************** Confirm Modal */
$_ADMINLANG['wbteampro']['confirm']['modal']['title'] = 'Confirmar A&ccedil;&acirc;o';
$_ADMINLANG['wbteampro']['confirm']['modal']['delete'] = 'Insira DELETE para Confirmar';

/************************************** Ticket Modal */
$_ADMINLANG['wbteampro']['ticket']['modal']['title'] = 'Abrir um Novo Ticket de Suporte';
$_ADMINLANG['wbteampro']['ticket']['modal']['client'] = 'Cliente';
$_ADMINLANG['wbteampro']['ticket']['modal']['project'] = 'Projeto';
$_ADMINLANG['wbteampro']['ticket']['modal']['deptid'] = 'Departmento';
$_ADMINLANG['wbteampro']['ticket']['modal']['priority'] = 'Prioridade';
$_ADMINLANG['wbteampro']['ticket']['modal']['subject'] = 'Assunto';
$_ADMINLANG['wbteampro']['ticket']['modal']['message'] = 'Mensagem';
$_ADMINLANG['wbteampro']['ticket']['modal']['nodept'] = 'Nenhum Departamento com Permiss&atilde; encontrado';
$_ADMINLANG['wbteampro']['ticket']['modal']['sendemail'] = 'Enviar E-mail';

/************************************** Page/List Navigation */
$_ADMINLANG['wbteampro']['filter']['tablabel'] = $_ADMINLANG['global']['searchfilter'];
$_ADMINLANG['wbteampro']['filter']['any'] = $_ADMINLANG['global']['any'];
$_ADMINLANG['wbteampro']['filter']['none'] = $_ADMINLANG['global']['none'];
$_ADMINLANG['wbteampro']['filter']['checkall'] = 'Selecionar';
$_ADMINLANG['wbteampro']['filter']['uncheckall'] = 'Desselecionar';
$_ADMINLANG['wbteampro']['filter']['selectedtext'] = '# selecionado';
$_ADMINLANG['wbteampro']['filter']['search'] = 'Procurar';
$_ADMINLANG['wbteampro']['filter']['owner'] = 'Propriet&aacute;rio';
$_ADMINLANG['wbteampro']['filter']['admin'] = 'Admin';
$_ADMINLANG['wbteampro']['filter']['project'] = 'Projeto';
$_ADMINLANG['wbteampro']['filter']['action'] = 'A&ccedil;&atilde;o';
$_ADMINLANG['wbteampro']['filter']['status'] = 'Situa&ccedil;&atilde;o';
$_ADMINLANG['wbteampro']['filter']['client'] = 'Client';
$_ADMINLANG['wbteampro']['filter']['department'] = 'Departamento';
$_ADMINLANG['wbteampro']['filter']['manager'] = 'Gerente';
$_ADMINLANG['wbteampro']['filter']['assigned'] = 'Atribu&iacute;do';
$_ADMINLANG['wbteampro']['filter']['type'] = 'Tipo';
$_ADMINLANG['wbteampro']['filter']['level'] = 'N&iacute;vel';
$_ADMINLANG['wbteampro']['filter']['flagged'] = 'Sinalizado';
$_ADMINLANG['wbteampro']['filter']['rangestart'] = 'Iniciado Depois';
$_ADMINLANG['wbteampro']['filter']['rangestop'] = 'Iniciado Antes';
$_ADMINLANG['wbteampro']['filter']['percentage'] = '% Completo';
$_ADMINLANG['wbteampro']['filter']['root'] = 'N&iacute;vel Raiz';
$_ADMINLANG['wbteampro']['filter']['zone'] = 'Zona';
$_ADMINLANG['wbteampro']['filter']['priority'] = 'Prioridade';

/************************************** Page/List Navigation */
$_ADMINLANG['wbteampro']['pagenav']['report'] = '%s '.$_ADMINLANG['global']['recordsfound'].', '.$_ADMINLANG['global']['page'].' %s '.$_ADMINLANG['global']['of'].' %s';
$_ADMINLANG['wbteampro']['pagenav']['prev'] = $_ADMINLANG['global']['previouspage'];
$_ADMINLANG['wbteampro']['pagenav']['next'] = $_ADMINLANG['global']['nextpage'];
$_ADMINLANG['wbteampro']['pagenav']['empty'] = $_ADMINLANG['global']['norecordsfound'];
$_ADMINLANG['wbteampro']['pagenav']['jumpto'] = $_ADMINLANG['global']['jumppage'];
$_ADMINLANG['wbteampro']['pagenav']['limit'] = 'Limite';
$_ADMINLANG['wbteampro']['pagenav']['go'] = $_ADMINLANG['global']['go'];
$_ADMINLANG['wbteampro']['pagenav']['export'] = 'Exportar';
$_ADMINLANG['wbteampro']['pagenav']['print'] = 'Imprimir';
$_ADMINLANG['wbteampro']['pagenav']['orderby'] = 'Ordenar por %1$s'; // %1$s = Field, %2$s = Direction

/************************************** Form Button Labels */
$_ADMINLANG['wbteampro']['formnav']['edit'] = 'Editar';
$_ADMINLANG['wbteampro']['formnav']['copy'] = 'Copiar';
$_ADMINLANG['wbteampro']['formnav']['copy_template'] = 'Criar Projeto';
$_ADMINLANG['wbteampro']['formnav']['archive'] = 'Arquivar';
$_ADMINLANG['wbteampro']['formnav']['unarchive'] = 'Desarquivar';
$_ADMINLANG['wbteampro']['formnav']['save'] = 'Salvar';
$_ADMINLANG['wbteampro']['formnav']['apply'] = 'Aplicar';
$_ADMINLANG['wbteampro']['formnav']['close'] = 'Fechar';
$_ADMINLANG['wbteampro']['formnav']['cancel'] = 'Cancelar';
$_ADMINLANG['wbteampro']['formnav']['delete'] = 'Excluir';
$_ADMINLANG['wbteampro']['formnav']['download'] = 'Download';
$_ADMINLANG['wbteampro']['formnav']['timestart'] = 'Iniciar Temporizador';
$_ADMINLANG['wbteampro']['formnav']['timestop'] = 'Para Temporizador';
$_ADMINLANG['wbteampro']['formnav']['submit'] = 'Prosseguir';
$_ADMINLANG['wbteampro']['formnav']['invoice'] = 'Fatura';
$_ADMINLANG['wbteampro']['formnav']['reload'] = 'Recarregar';
$_ADMINLANG['wbteampro']['formnav']['link'] = 'Link';
$_ADMINLANG['wbteampro']['formnav']['unlink'] = 'Deslinkar';

/************************************** Dashboard Blocks */
$_ADMINLANG['wbteampro']['dashhead']['topProjects'] = 'Projetos com Atividade Recente';
$_ADMINLANG['wbteampro']['dashhead']['topActions'] = 'A&ccedil;&otilde;es mais Qualificadas';
$_ADMINLANG['wbteampro']['dashhead']['myActions'] = 'Tarefas Atrib&iacute;das &agrave; Voc&ecirc;';
$_ADMINLANG['wbteampro']['dashhead']['touchedActions'] = 'A&ccedil;&otilde;es com Atividade Recente';
$_ADMINLANG['wbteampro']['dashhead']['topTimelog'] = 'Atividades Recentes do Temporizador';
$_ADMINLANG['wbteampro']['dashhead']['topTickets'] = 'Atividades Recentes dos Tickets';
$_ADMINLANG['wbteampro']['dashhead']['topTopics'] = 'Atividades Recentes dos Coment&aacute;rios';
$_ADMINLANG['wbteampro']['dashhead']['topFiles'] = 'Atividade Recente de Arquivos';
$_ADMINLANG['wbteampro']['dashhead']['viewall'] = 'Visualizar Todos';

/************************************** List Table Headers */
$_ADMINLANG['wbteampro']['listhead']['ordering'] = 'Ordenado';
$_ADMINLANG['wbteampro']['listhead']['enabled'] = 'Abilitado';
$_ADMINLANG['wbteampro']['listhead']['date_created'] = 'Criado';
$_ADMINLANG['wbteampro']['listhead']['date_modified'] = 'Modificado';
$_ADMINLANG['wbteampro']['listhead']['date_activity'] = 'Atividade';
$_ADMINLANG['wbteampro']['listhead']['date_start'] = 'Iniciado';
$_ADMINLANG['wbteampro']['listhead']['date_finish'] = 'Feito';
$_ADMINLANG['wbteampro']['listhead']['client_userid'] = 'Cliente';
$_ADMINLANG['wbteampro']['listhead']['owner_adminid'] = 'Propriet&aacute;rio';
$_ADMINLANG['wbteampro']['listhead']['manager_adminid'] = 'Gerente';
$_ADMINLANG['wbteampro']['listhead']['assigned_adminid'] = 'Atribu&iacute;do';
$_ADMINLANG['wbteampro']['listhead']['invoice_id'] = 'Fatura';

/************************************** Project List */
$_ADMINLANG['wbteampro']['listhead']['project_name'] = 'Nome do Projeto';
$_ADMINLANG['wbteampro']['listhead']['project_type'] = 'Tipo';
$_ADMINLANG['wbteampro']['listhead']['project_status'] = 'Situa&ccedil;&atilde;o';
$_ADMINLANG['wbteampro']['listhead']['project_complete'] = '%';
$_ADMINLANG['wbteampro']['listhead']['project_tasks'] = '#';

/************************************** Action List */
$_ADMINLANG['wbteampro']['listhead']['action_name'] = 'Nome da A&ccedil;&atilde;o';
$_ADMINLANG['wbteampro']['listhead']['action_type'] = 'Tipo';
$_ADMINLANG['wbteampro']['listhead']['action_status'] = 'Situa&ccedil;&atilde;o';
$_ADMINLANG['wbteampro']['listhead']['action_complete'] = '%';
$_ADMINLANG['wbteampro']['listhead']['action_elapsed'] = 'Decorrido';
$_ADMINLANG['wbteampro']['listhead']['action_priority'] = 'Prioridade';
$_ADMINLANG['wbteampro']['listhead']['action_duration'] = 'Dura&ccedil;&atilde;o';

/************************************** Timelog List */
$_ADMINLANG['wbteampro']['listhead']['timelog_note'] = 'Nota do Temporizador';
$_ADMINLANG['wbteampro']['listhead']['timelog_elapsed'] = 'Decorrido';
$_ADMINLANG['wbteampro']['listhead']['timelog_start'] = 'Iniciado';
$_ADMINLANG['wbteampro']['listhead']['timelog_status'] = 'Situa&ccedil;&atilde;o';

/************************************** Topic List */
$_ADMINLANG['wbteampro']['listhead']['topic_name'] = 'T&oacute;picos de Coment&aacute;rio';
$_ADMINLANG['wbteampro']['listhead']['topic_activity'] = 'Atividade';
$_ADMINLANG['wbteampro']['listhead']['topic_posts'] = 'Postagens';
$_ADMINLANG['wbteampro']['listhead']['topic_status'] = 'Situa&ccedil;&atilde;o';

/************************************** Ticket List */
$_ADMINLANG['wbteampro']['listhead']['ticket_title'] = 'T&iacute;tulo do Ticket';
$_ADMINLANG['wbteampro']['listhead']['ticket_lastreply'] = 'Atividade';
$_ADMINLANG['wbteampro']['listhead']['ticket_date'] = 'Enviado';
$_ADMINLANG['wbteampro']['listhead']['ticket_urgency'] = 'Urg&ecirc;ncia';
$_ADMINLANG['wbteampro']['listhead']['ticket_submitter'] = 'Enviado por';
$_ADMINLANG['wbteampro']['listhead']['ticket_department'] = 'Departamento';
$_ADMINLANG['wbteampro']['listhead']['ticket_status'] = 'Situa&ccedil;&otilde;o';

/************************************** File List */
$_ADMINLANG['wbteampro']['listhead']['file_label'] = 'T&oacute;pico do Arquivo';
$_ADMINLANG['wbteampro']['listhead']['file_latest'] = '&Uacute;ltimo Arquivo';
$_ADMINLANG['wbteampro']['listhead']['file_total'] = 'Arquivos';
$_ADMINLANG['wbteampro']['listhead']['file_status'] = 'Situação';

/************************************** Plugin List */
$_ADMINLANG['wbteampro']['listhead']['plugin_name'] = 'Nome do Plugin';
$_ADMINLANG['wbteampro']['listhead']['plugin_zone'] = '&Aadute;rea';
$_ADMINLANG['wbteampro']['listhead']['plugin_element'] = 'Elemento';

/************************************** Module List
$_ADMINLANG['wbteampro']['listhead']['module_name'] = 'Module Name';
$_ADMINLANG['wbteampro']['listhead']['module_element'] = 'Element';
$_ADMINLANG['wbteampro']['listhead']['module_position'] = 'Position';
 */

/************************************** Setup Tabs */
$_ADMINLANG['wbteampro']['setuptab']['general'] = 'Geral';
$_ADMINLANG['wbteampro']['setuptab']['project'] = 'Projeto';
$_ADMINLANG['wbteampro']['setuptab']['action'] = 'A&ccedil;&atilde;o';
$_ADMINLANG['wbteampro']['setuptab']['display'] = 'Visualizar';
$_ADMINLANG['wbteampro']['setuptab']['extensions'] = 'Extens&otilde;es';

/************************************** Setup Configuration */
$_ADMINLANG['wbteampro']['configfield']['version'] = 'Vers&atilde;o';
$_ADMINLANG['wbteampro']['configfield']['license_key'] = 'Chave de Licen&ccedil;a';
$_ADMINLANG['wbteampro']['configfield']['license_key-help'] = 'A licen&ccedil;a necess&aaculte;ria para ativa&ccedil;&atilde;o.';
$_ADMINLANG['wbteampro']['configfield']['license_key-rekey'] = 'Refazer a Licen&ccedil;a';
$_ADMINLANG['wbteampro']['configfield']['license_key-confirm'] = 'Esta ativa&ccedil;&atilde;o remover&aacute; sua licen&ccedil;a atual.\nClique OK para Continuar';
$_ADMINLANG['wbteampro']['configfield']['project_file_path'] = 'Caminho do Arquivo';
$_ADMINLANG['wbteampro']['configfield']['project_file_path-help'] = 'Caminho Relativo ou Absoluto onde os uploads do projeto est&atilde;o armazenados';
$_ADMINLANG['wbteampro']['configfield']['admin_super_roles'] = 'Regras do Super Admin';
$_ADMINLANG['wbteampro']['configfield']['admin_super_roles-help'] = 'Pode visualizar / modificar qualquer coisa';
$_ADMINLANG['wbteampro']['configfield']['admin_valid_roles'] = 'Regras de Admin V&aacute;lidas';
$_ADMINLANG['wbteampro']['configfield']['admin_valid_roles-help'] = 'Pode visualizar / modificar se proprietário ou atribu&iacute;do';
$_ADMINLANG['wbteampro']['configfield']['project_link_target'] = 'Destino do Projeto';
$_ADMINLANG['wbteampro']['configfield']['project_link_target-help'] = 'Padr&acedil;o: Nova Janela';
$_ADMINLANG['wbteampro']['configfield']['project_link_task'] = 'Padr&acedil;o: Visualizar Projeto';
$_ADMINLANG['wbteampro']['configfield']['project_link_task-help'] = 'A primeira sub-tab quando abrir um Projeto';
$_ADMINLANG['wbteampro']['configfield']['client_link_target'] = 'Link de Destino do Cliente';
$_ADMINLANG['wbteampro']['configfield']['client_link_target-help'] = 'Padr&acedil;o: Nova Janela';
$_ADMINLANG['wbteampro']['configfield']['ticket_link_target'] = 'Link de Destino do Ticket';
$_ADMINLANG['wbteampro']['configfield']['ticket_link_target-help'] = 'Padr&acedil;o: Nova Janela';
$_ADMINLANG['wbteampro']['configfield']['page_listing_limit'] = 'Limite de Listagem da P&aacute;gina';
$_ADMINLANG['wbteampro']['configfield']['page_listing_limit-help'] = 'Número total de registros mostrador por p&aacute;gina';
$_ADMINLANG['wbteampro']['configfield']['thread_listing_limit'] = 'Limite para listar t&oacute;picos';
$_ADMINLANG['wbteampro']['configfield']['thread_listing_limit-help'] = 'Total de postagens mostradas nas linhas das p&aacute;ginas';
$_ADMINLANG['wbteampro']['configfield']['thread_thumbnail_dimension'] = 'Tamanho das Mininhaturas';
$_ADMINLANG['wbteampro']['configfield']['thread_thumbnail_dimension-help'] = 'Tamanho das mininhaturas da imagens mostrada no t&oacute;pico de Arquivos';
$_ADMINLANG['wbteampro']['configfield']['thread_textcollapse'] = 'Texto do T&oacute;pico Contra&iacute;do';
$_ADMINLANG['wbteampro']['configfield']['thread_textcollapse-help'] = 'Texto longo contra&iacute;do com um bot&atilde;o de Expans&atilde;o';
$_ADMINLANG['wbteampro']['configfield']['keepalive_timeout'] = 'Manter tempo limite ativo';
$_ADMINLANG['wbteampro']['configfield']['keepalive_timeout-help'] = 'N&uacute;mero de segundos entre pings de servidor';
$_ADMINLANG['wbteampro']['configfield']['js_delete_confirm'] = 'Confirma&ccedil.&atilde;o de Exclus&atilde;o';
$_ADMINLANG['wbteampro']['configfield']['js_delete_confirm-help'] = 'Confirma&ccedil;&atilde;o mostrada na Exclus&atilde;o de uma A&ccedil;&atilde;o';
$_ADMINLANG['wbteampro']['configfield']['server_timezone'] = 'Localiza&ccedil;&atilde;o do Servidor';
$_ADMINLANG['wbteampro']['configfield']['server_timezone-time'] = 'Rel&oacute;gio do Servidor';
$_ADMINLANG['wbteampro']['configfield']['server_timezone-help'] = 'Sobrescrever a localiza&ccedil;&atilde;o do Servidor (Em branco para padr&acedil;o do servidor)';
$_ADMINLANG['wbteampro']['configfield']['server_timezone-default'] = 'Padr&acedil;o do Servidor';
$_ADMINLANG['wbteampro']['configfield']['cron_adminid'] = 'Cron Admin User';
$_ADMINLANG['wbteampro']['configfield']['cron_adminid-help'] = 'Administrador utilizado quando executar as chamadas de API';
$_ADMINLANG['wbteampro']['configfield']['cron_password'] = 'Senha Cron';
$_ADMINLANG['wbteampro']['configfield']['cron_password-help'] = 'Senha Opcinal para chamadas cron.php<br/><small>/modules/addons/wbteampro/cron.php?cron_password=xxx</small>';
$_ADMINLANG['wbteampro']['configfield']['use_gzhandler'] = 'Sa&iacute;da para compre&ccedil;&atilde;o';
$_ADMINLANG['wbteampro']['configfield']['use_gzhandler-help'] = 'Use o gzip para melhorar o tempo de resposta';
$_ADMINLANG['wbteampro']['configfield']['system_log_emails'] = 'Log para envio de E-mails';
$_ADMINLANG['wbteampro']['configfield']['system_log_emails-help'] = 'Salve o hist&oacute;rico no log de e-mail do WHMCS';
$_ADMINLANG['wbteampro']['configfield']['api_active'] = 'API Ativa';
$_ADMINLANG['wbteampro']['configfield']['api_active-help'] = 'Autoriza chamadas atrav&eacute;s da API do sistema';
$_ADMINLANG['wbteampro']['configfield']['system_tmp_path'] = 'Caminho para armazenamento tempor&aacute;ria';
$_ADMINLANG['wbteampro']['configfield']['system_tmp_path-help'] = 'Relative or Absolute path where temporary files are written';
$_ADMINLANG['wbteampro']['configfield']['timelog_elapsed_format'] = 'Timelog Elapsed Format';
$_ADMINLANG['wbteampro']['configfield']['timelog_elapsed_format-help'] = 'Default: Automatic';
$_ADMINLANG['wbteampro']['configfield']['timelog_ticketreply_autostop'] = 'Ticket Timelog AutoStop';
$_ADMINLANG['wbteampro']['configfield']['timelog_ticketreply_autostop-help'] = 'Automatically stop time logs when replying to a ticket';
$_ADMINLANG['wbteampro']['configfield']['timelog_ticketreply_autostop_onstatus'] = 'Ticket Status Filter for Timelog AutoStop';
$_ADMINLANG['wbteampro']['configfield']['timelog_ticketreply_autostop_onstatus-help'] = 'Specify the Ticket Statuses that will trigger the Timelog AutoStop feature (none for all)';
$_ADMINLANG['wbteampro']['configfield']['project']['adjust_date'] = 'Auto Adjust Date(s)';
$_ADMINLANG['wbteampro']['configfield']['project']['adjust_date-help'] = 'Adjust project dates to accommodate action tree date boundaries';
$_ADMINLANG['wbteampro']['configfield']['project']['project_type'] = 'Project Type(s)';
$_ADMINLANG['wbteampro']['configfield']['project']['project_type-help'] = 'Available project types (one per line)';
$_ADMINLANG['wbteampro']['configfield']['project']['project_status'] = 'Project Status(s)';
$_ADMINLANG['wbteampro']['configfield']['project']['project_status-help'] = 'Available project statuses (one per line)';
$_ADMINLANG['wbteampro']['configfield']['project']['allow_assigned_any-help'] = 'All the project to be assigned to "Any" admin';
$_ADMINLANG['wbteampro']['configfield']['project']['allow_assigned_any'] = 'Allow Assigned to "Any"';
$_ADMINLANG['wbteampro']['configfield']['action']['max_depth'] = 'Max Action Depth (#)';
$_ADMINLANG['wbteampro']['configfield']['action']['max_depth-help'] = 'The maximum depth of project actions';
$_ADMINLANG['wbteampro']['configfield']['action']['adjust_date'] = 'Auto Adjust Date(s)';
$_ADMINLANG['wbteampro']['configfield']['action']['adjust_date-help'] = 'Adjust action dates to sub-action date boundaries';
$_ADMINLANG['wbteampro']['configfield']['action']['date_start_offset'] = 'New Action Date Start Offset';
$_ADMINLANG['wbteampro']['configfield']['action']['date_start_offset-help'] = 'Select rule for creating new action Start Dates.';
$_ADMINLANG['wbteampro']['configfield']['action']['default_duration'] = 'New Action Duration';
$_ADMINLANG['wbteampro']['configfield']['action']['default_duration-help'] = 'Initial duration value for new actions (seconds).';
$_ADMINLANG['wbteampro']['configfield']['action']['finish_offset'] = 'New Action Finish Offset';
$_ADMINLANG['wbteampro']['configfield']['action']['finish_offset-help'] = 'Offset for finish date on new actions (seconds)';
$_ADMINLANG['wbteampro']['configfield']['action']['finish_conflict'] = 'Finish Conflict';
$_ADMINLANG['wbteampro']['configfield']['action']['finish_conflict-help'] = 'Offset for finish date on date conflict (seconds)';
$_ADMINLANG['wbteampro']['configfield']['action']['action_type'] = 'Action Type(s)';
$_ADMINLANG['wbteampro']['configfield']['action']['action_type-help'] = 'Available action types (one per line)';
$_ADMINLANG['wbteampro']['configfield']['action']['action_status'] = 'Action Status(s)';
$_ADMINLANG['wbteampro']['configfield']['action']['action_status-help'] = 'Available project statuses (one per line)';
$_ADMINLANG['wbteampro']['configfield']['action']['insert_position'] = 'New Action Insert Postion';
$_ADMINLANG['wbteampro']['configfield']['action']['insert_position-help'] = 'Position of new action in child list';
$_ADMINLANG['wbteampro']['configfield']['action']['collapse_complete'] = 'Collapse Completed Actions';
$_ADMINLANG['wbteampro']['configfield']['action']['collapse_complete-help'] = 'Initially load completed action trees in a collapsed state';
$_ADMINLANG['wbteampro']['configfield']['action']['allow_assigned_any'] = 'Allow Assigned to "Any"';
$_ADMINLANG['wbteampro']['configfield']['action']['allow_assigned_any-help'] = 'Allow actions to be assigned to "Any" admin';
$_ADMINLANG['wbteampro']['configfield']['action']['status_oncomplete'] = 'Action Completed Status';
$_ADMINLANG['wbteampro']['configfield']['action']['status_oncomplete-help'] = 'Automatically assign status when 100% complete';
$_ADMINLANG['wbteampro']['configfield']['action']['default_recurdays'] = 'Default Recurring Workdays';
$_ADMINLANG['wbteampro']['configfield']['action']['default_recurdays-help'] = 'Default weekdays for a Weekly Recurring summary';
$_ADMINLANG['wbteampro']['configfield']['format']['projectDate'] = 'Project Date';
$_ADMINLANG['wbteampro']['configfield']['format']['projectDate-help'] = 'Project Created, Modified, Start, and End dates';
$_ADMINLANG['wbteampro']['configfield']['format']['timelogDate'] = 'Timelog Date / Time';
$_ADMINLANG['wbteampro']['configfield']['format']['timelogDate-help'] = 'Timelog Start and End dates';
$_ADMINLANG['wbteampro']['configfield']['format']['actionDate'] = 'Action Date';
$_ADMINLANG['wbteampro']['configfield']['format']['actionDate-help'] = 'Action Created, Start, and End dates';
$_ADMINLANG['wbteampro']['configfield']['format']['ticketDate'] = 'Ticket Date';
$_ADMINLANG['wbteampro']['configfield']['format']['ticketDate-help'] = 'Ticket Created and Replied dates';
$_ADMINLANG['wbteampro']['configfield']['format']['topicDate'] = 'Topic Thread Date / Time';
$_ADMINLANG['wbteampro']['configfield']['format']['topicDate-help'] = 'Topic Thread Created and Replied dates';
$_ADMINLANG['wbteampro']['configfield']['format']['topicPostDate'] = 'Topic Post Date / Time';
$_ADMINLANG['wbteampro']['configfield']['format']['topicPostDate-help'] = 'Topic Thread Post Created date';
$_ADMINLANG['wbteampro']['configfield']['format']['fileDate'] = 'File Thread Date / Time';
$_ADMINLANG['wbteampro']['configfield']['format']['fileDate-help'] = 'File Thread Created and Replied dates';
$_ADMINLANG['wbteampro']['configfield']['format']['filePostDate'] = 'File Post Date / Time';
$_ADMINLANG['wbteampro']['configfield']['format']['filePostDate-help'] = 'File Thread Post Created date';
$_ADMINLANG['wbteampro']['configfield']['format']['adminName'] = 'Admin Name';
$_ADMINLANG['wbteampro']['configfield']['format']['adminName-help'] = 'Manager/Assigned Display and Select List';
$_ADMINLANG['wbteampro']['configfield']['format']['clientName'] = 'Client Name';
$_ADMINLANG['wbteampro']['configfield']['format']['clientName-help'] = 'Client Display and Search List';
$_ADMINLANG['wbteampro']['configfield']['format']['contactName'] = 'Contact Name';
$_ADMINLANG['wbteampro']['configfield']['format']['contactName-help'] = 'Contact Display and Select List';
$_ADMINLANG['wbteampro']['configfield']['format']['ajaxClientList'] = 'Ajax Client Search';
$_ADMINLANG['wbteampro']['configfield']['format']['ajaxClientList-help'] = 'Dynamic Client Search List Format';
$_ADMINLANG['wbteampro']['configfield']['billing']['hourly_rate'] = 'Hourly Rate';
$_ADMINLANG['wbteampro']['configfield']['billing']['hourly_rate-help'] = 'Default billing rate per timelog entry hour';
$_ADMINLANG['wbteampro']['configfield']['billing']['email_invoice'] = 'Send Invoice';
$_ADMINLANG['wbteampro']['configfield']['billing']['email_invoice-help'] = 'Default for option to email client invoice upon creation';
$_ADMINLANG['wbteampro']['configfield']['billing']['tax_rate'] = 'Tax Rate';
$_ADMINLANG['wbteampro']['configfield']['billing']['tax_rate-help'] = 'Default amount to use for tax rate when not client defined';
$_ADMINLANG['wbteampro']['configfield']['billing']['apply_tax'] = 'Apply Tax';
$_ADMINLANG['wbteampro']['configfield']['billing']['apply_tax-help'] = 'Default for option to mark entries for tax';
$_ADMINLANG['wbteampro']['configfield']['billing']['apply_credits'] = 'Apply Credits';
$_ADMINLANG['wbteampro']['configfield']['billing']['apply_credits-help'] = 'Default for option to apply client credits to invoice';
$_ADMINLANG['wbteampro']['configfield']['billing']['round_elapsed'] = 'Round Elapsed Time';
$_ADMINLANG['wbteampro']['configfield']['billing']['round_elapsed-help'] = 'Round the value up or (-) down to the nearest minute';
$_ADMINLANG['wbteampro']['configfield']['billing']['desc_format'] = 'Invoice Item Format';
$_ADMINLANG['wbteampro']['configfield']['billing']['desc_format-help'] = 'Format for invoice line item descriptions';
$_ADMINLANG['wbteampro']['configfield']['billing']['default_billable_status'] = 'Default Billable Status';
$_ADMINLANG['wbteampro']['configfield']['billing']['default_billable_status-help'] = 'Default value for new projects or foreign timelogs';

/************************************** Extension System */
$_ADMINLANG['wbteampro']['extensionlist']['type_plugin'] = 'Plugin';
$_ADMINLANG['wbteampro']['extensionlist']['type_module'] = 'Module';
$_ADMINLANG['wbteampro']['extensionlist']['zone_all'] = 'All';
$_ADMINLANG['wbteampro']['extensionlist']['zone_client'] = 'Client';
$_ADMINLANG['wbteampro']['extensionlist']['zone_admin'] = 'Admin';
$_ADMINLANG['wbteampro']['extensionlist']['new_module'] = 'New Module';
$_ADMINLANG['wbteampro']['extensionlist']['install_plugin'] = 'Install Plugins';
$_ADMINLANG['wbteampro']['extensionfield']['type_plugin'] = 'Plugin';
$_ADMINLANG['wbteampro']['extensionfield']['extension_name'] = 'Instance Name';
$_ADMINLANG['wbteampro']['extensionfield']['extension_enabled'] = 'Enabled';
$_ADMINLANG['wbteampro']['extensionfield']['extension_zone'] = 'System Zone';
$_ADMINLANG['wbteampro']['extensionfield']['date_created'] = 'Installed';
$_ADMINLANG['wbteampro']['extensionxml']['name'] = 'Name';
$_ADMINLANG['wbteampro']['extensionxml']['version'] = 'Version';
$_ADMINLANG['wbteampro']['extensionxml']['author'] = 'Author';
$_ADMINLANG['wbteampro']['extensionxml']['created'] = 'Created';
$_ADMINLANG['wbteampro']['extensionxml']['description'] = 'Description';

/************************************** Setup Update */
$_ADMINLANG['wbteampro']['setupupdate']['package_uptodate'] = 'Your package <b>v%1$s</b> is is up-to-date.';
$_ADMINLANG['wbteampro']['setupupdate']['download_available'] = 'Updated <b>%1$s</b> package <b>v%2$s</b> available for download!<br/>You can choose to install the upgrade automatically, or download the package to be installed manually.<br/><br/>'
                                                              . '<button class="btn btn-primary" onclick="%3$s">Install Upgrade</button> or <button class="btn" onclick="%4$s">Download Only</button>';

/************************************** License First Run */
$_ADMINLANG['wbteampro']['licenseform']['description'] = '<b>The license key for your installation is invalid.</b><br/>Please update the following settings to activate your installation.';
$_ADMINLANG['wbteampro']['licenseform']['success'] = '<b>License Installed</b><br/>Your license key has been applied.';

/************************************** Widgets */
$_ADMINLANG['wbteampro']['widget']['projectactivity'] = 'Hist&oacute;rico do Projeto';
$_ADMINLANG['wbteampro']['widget']['topactions'] = 'A&ccedil;&otilde;es mais Recentes';
$_ADMINLANG['wbteampro']['widget']['myactions'] = 'Minhas A&ccedil;&otilde;es';
$_ADMINLANG['wbteampro']['widget']['actionsannumreview'] = 'Resumo de A&ccedil;&otilde;es Anual';
$_ADMINLANG['wbteampro']['widget']['timelogbiennium'] = 'Timelog Bianual';
$_ADMINLANG['wbteampro']['widget']['timelogactivity'] = 'Hist&oacute;rico do Timelog';
$_ADMINLANG['wbteampro']['widget']['fileactivity'] = 'Hist&oacute;rico dos Arquivos';
$_ADMINLANG['wbteampro']['widget']['topicactivity'] = 'Hist&oacute;rico dos T&oacute;picos';
$_ADMINLANG['wbteampro']['widget']['ticketactivity'] = 'Hist&oacute;rico dos Tickets';

/************************************** QuickMenu */
$_ADMINLANG['wbteampro']['quickmenu']['delete_rows'] = 'Excluir Registros';
$_ADMINLANG['wbteampro']['quickmenu']['invoice_rows'] = 'Faturar Registros';
$_ADMINLANG['wbteampro']['quickmenu']['modify_rows'] = 'Modificar Registros';

/************************************** Support Tickets Tab */
$_ADMINLANG['wbteampro']['supporttickets']['ticket_list'] = 'Ticket do Projeto';
$_ADMINLANG['wbteampro']['supporttickets']['ticket_elapsed'] = 'Tempo Decorrido do Ticket';
$_ADMINLANG['wbteampro']['supporttickets']['timelog_list'] = 'Ticket Timelogs';
$_ADMINLANG['wbteampro']['supporttickets']['file_list'] = 'Arquivos Relatados do Projeto';

/************************************** Select List Options */
$_ADMINLANG['wbteampro']['listoption']['yes'] = 'Sim';
$_ADMINLANG['wbteampro']['listoption']['no'] = 'N&atilde;o';
$_ADMINLANG['wbteampro']['listoption']['blank'] = 'Nova Janela';
$_ADMINLANG['wbteampro']['listoption']['self'] = 'Mesma Janela';
$_ADMINLANG['wbteampro']['listoption']['top'] = 'Janela Topo';
$_ADMINLANG['wbteampro']['listoption']['parent'] = 'Janela Superior';
$_ADMINLANG['wbteampro']['listoption']['none'] = 'Sem COnfirma&ccedil;&atilde;o';
$_ADMINLANG['wbteampro']['listoption']['prompt'] = 'Digite para Confirmar';
$_ADMINLANG['wbteampro']['listoption']['confirm'] = 'Clique OK para Confirmar';
$_ADMINLANG['wbteampro']['listoption']['action_priority']['1'] = 'Baixa';
$_ADMINLANG['wbteampro']['listoption']['action_priority']['2'] = 'Media';
$_ADMINLANG['wbteampro']['listoption']['action_priority']['3'] = 'Alta';
$_ADMINLANG['wbteampro']['listoption']['level_class']['milestone'] = 'Etapa';
$_ADMINLANG['wbteampro']['listoption']['level_class']['group'] = 'Grupo';
$_ADMINLANG['wbteampro']['listoption']['level_class']['task'] = 'Tarefa';
$_ADMINLANG['wbteampro']['listoption']['recur_frequency']['none'] = 'Nenhuma';
$_ADMINLANG['wbteampro']['listoption']['recur_frequency']['daily'] = 'Diariamente';
$_ADMINLANG['wbteampro']['listoption']['recur_frequency']['weekly'] = 'Semanalmente';
$_ADMINLANG['wbteampro']['listoption']['recur_frequency']['monthly'] = 'Mensalmente';
$_ADMINLANG['wbteampro']['listoption']['recur_frequency']['yearly'] = 'Recentemente';
$_ADMINLANG['wbteampro']['listoption']['date_start_offset']['today'] = 'Hoje';
$_ADMINLANG['wbteampro']['listoption']['date_start_offset']['tomorrow'] = 'Amanh&atilde;';
$_ADMINLANG['wbteampro']['listoption']['date_start_offset']['parent'] = 'Parent Start Date';
$_ADMINLANG['wbteampro']['listoption']['date_start_offset']['lastsibling'] = 'Last Siblings End Date';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['su'] = 'Domingo';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['mo'] = 'Segunda-Feira';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['tu'] = 'Ter&ccedil;a-Feira';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['we'] = 'Quarta-Feira';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['th'] = 'Quinta-Feira';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['fr'] = 'Sexta-Feira';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['sa'] = 'S&aacute;bado';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['su'] = 'Dom';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['mo'] = 'Seg';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['tu'] = 'Ter';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['we'] = 'Qua';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['th'] = 'Qui';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['fr'] = 'Sex';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['sa'] = 'Sab';

/************************************** Dynamic Select List Options */
$_ADMINLANG['wbteampro']['listoption']['project_type']['internal'] = 'Interno';
$_ADMINLANG['wbteampro']['listoption']['project_type']['product'] = 'Produto';
$_ADMINLANG['wbteampro']['listoption']['project_type']['service'] = 'Servi&ccedil;o';
$_ADMINLANG['wbteampro']['listoption']['project_status']['service'] = 'Servi&ccedil;o';
$_ADMINLANG['wbteampro']['listoption']['project_status']['under_review'] = 'Em Revis&atilde;o';
$_ADMINLANG['wbteampro']['listoption']['project_status']['active'] = 'Ativo';
$_ADMINLANG['wbteampro']['listoption']['project_status']['in_production'] = 'Produ&ccedil;&atilde;o';
$_ADMINLANG['wbteampro']['listoption']['project_status']['in_testing'] = 'Teste';
$_ADMINLANG['wbteampro']['listoption']['project_status']['completed'] = 'Completo';
$_ADMINLANG['wbteampro']['listoption']['project_status']['closed'] = 'Fechado';
$_ADMINLANG['wbteampro']['listoption']['action_type']['planning'] = 'Planejando';
$_ADMINLANG['wbteampro']['listoption']['action_type']['research'] = 'An&aacute;lise';
$_ADMINLANG['wbteampro']['listoption']['action_type']['contact'] = 'Contato';
$_ADMINLANG['wbteampro']['listoption']['action_type']['service'] = 'Servi&ccedil;o';
$_ADMINLANG['wbteampro']['listoption']['action_type']['development'] = 'Desenvolvimento';
$_ADMINLANG['wbteampro']['listoption']['action_type']['review'] = 'Revis&atilde;o';
$_ADMINLANG['wbteampro']['listoption']['action_status']['closed'] = 'Fechado';
$_ADMINLANG['wbteampro']['listoption']['action_status']['active'] = 'Ativo';
$_ADMINLANG['wbteampro']['listoption']['action_status']['progress'] = 'Progresso';
$_ADMINLANG['wbteampro']['listoption']['action_status']['cancelled'] = 'Cancelado';
$_ADMINLANG['wbteampro']['listoption']['action_status']['complete'] = 'Completo';
$_ADMINLANG['wbteampro']['listoption']['insert_position']['first'] = 'Primeiro';
$_ADMINLANG['wbteampro']['listoption']['insert_position']['last'] = 'Último';

/** END LANGUAGE **/