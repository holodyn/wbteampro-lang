<?php

/**

  Webuddha wbTeamPro
  (c)2010 Webuddha.com, The Holodyn Corporation - All Rights Reserved

  CHANGELOG ************
  v1.0.0 - Provided by M.G. 2017-01-23

**/

defined('WHMCS_CLIENT') or die('Invalid Access');
include('english.php');

/************************************** Menu */
$_LANG['wbteampro_tab'] = 'Meus Projetos';

/************************************** Errors */
$_LANG['wbteampro']['error']['default_label'] = 'Mensagem de erro';
$_LANG['wbteampro']['error']['license_error'] = 'Erro wbTeamPro: Falha na Autorização de Licença';
$_LANG['wbteampro']['error']['license_invalid'] = 'Erro wbTeamPro: Chave de licença inválida';
$_LANG['wbteampro']['error']['license_expired'] = 'Erro wbTeamPro: Chave de Licença Expirada';
$_LANG['wbteampro']['error']['license_suspended'] = 'Erro wbTeamPro: Chave de Licença Suspensa';
$_LANG['wbteampro']['error']['permissiondenied'] = 'Erro wbTeamPro: Permissão negada';
$_LANG['wbteampro']['error']['view_layout_not_found'] = 'Erro wbTeamPro: Exibir layout não encontrado (%s)';

/************************************** Errors */
$_LANG['wbteampro']['alert']['default_label'] = 'Mensagem de Alerta';

/************************************** Notices */
$_LANG['wbteampro']['notice']['default_label'] = 'Aviso';
$_LANG['wbteampro']['notice']['noprojects'] = '<b>Nenhum projeto ativo no momento!</b><br>Não há projetos ativos para exibição';
$_LANG['wbteampro']['notice']['file_closed'] = '<b>Arquivo fechado</b><br>Este tópico está fechado e não pode ser modificado.';
$_LANG['wbteampro']['notice']['topic_closed'] = '<b>Discussão encerrada</b><br>Este tópico está fechado e não pode ser modificado.';
$_LANG['wbteampro']['notice']['ticket_created'] = '<b>Ticket #%s Criado</b><br>O seu ticket foi criado com sucesso.';
$_LANG['wbteampro']['notice']['deprecated'] = '<b>Operação obsoleta</b><br>A solicitação que você fez não estará disponível em futuras versões.';

/************************************** JS */
$_LANG['wbteampro']['js']['tabProject'] = 'Projeto';
$_LANG['wbteampro']['js']['tabProjects'] = 'Projetos';
$_LANG['wbteampro']['js']['tabTickets'] = 'Tickets';
$_LANG['wbteampro']['js']['loadMsg'] = 'Carregando... por favor, aguarde...';
$_LANG['wbteampro']['js']['noActiveLogs'] = 'Timelogs não ativo';
$_LANG['wbteampro']['js']['uiTimelogStart'] = 'Iniciar';
$_LANG['wbteampro']['js']['uiTimelogSave'] = 'Salvar';
$_LANG['wbteampro']['js']['uiTimelogCancel'] = 'Cancelar';
$_LANG['wbteampro']['js']['btnStopTimer'] = 'Parar temporizador';
$_LANG['wbteampro']['js']['btnStartTimer'] = 'Iniciar temporizador';
$_LANG['wbteampro']['js']['msgTimelogSaved'] = 'Timelog Gravado para [time]';
$_LANG['wbteampro']['js']['msgTimelogStopped'] = 'Timelog Parado após [time]';
$_LANG['wbteampro']['js']['deleteConfirm'] = 'Clique em OK para confirmar sua ação';
$_LANG['wbteampro']['js']['deletePrompt'] = 'Digite DELETE para confirmar sua ação';
$_LANG['wbteampro']['js']['deleteAnswer'] = 'DELETE';
$_LANG['wbteampro']['js']['deleteCancelled'] = 'Cancelar Delete';
$_LANG['wbteampro']['js']['textLimitRemain'] = '[remain] de [limit] caracteres';
$_LANG['wbteampro']['js']['textLimitReached'] = 'máximo de caracteres [limit]';

/************************************** Page Headers */
$_LANG['wbteampro']['taskheader']['prefix'] = 'Meus projetos: ';
$_LANG['wbteampro']['taskheader']['project_action_list'] = 'Ações do projeto';
$_LANG['wbteampro']['taskheader']['project_ticket_list'] = 'Tickets do projeto';
$_LANG['wbteampro']['taskheader']['project_file_list'] = 'Arquivos do Projeto';
$_LANG['wbteampro']['taskheader']['project_topic_list'] = 'Conversas do Projeto';
$_LANG['wbteampro']['taskheader']['project_list'] = 'Todos os projetos';
$_LANG['wbteampro']['taskheader']['action_list'] = 'Todas as ações do projeto';
$_LANG['wbteampro']['taskheader']['file_list'] = 'Todos os arquivos do projeto';
$_LANG['wbteampro']['taskheader']['topic_list'] = 'Todos os tópicos do projeto';
$_LANG['wbteampro']['taskheader']['ticket_list'] = 'Todos os Tickets do projeto';
$_LANG['wbteampro']['taskheader']['dashboard'] = 'Painel';
$_LANG['wbteampro']['taskheader']['ticket_create'] = 'Criar novo Ticket';

/************************************** Client Profile Tabs */
$_LANG['wbteampro']['profiletab']['projects'] = 'Projetos';
$_LANG['wbteampro']['profiletab']['actions'] = 'Ações';
$_LANG['wbteampro']['profiletab']['timelog'] = 'Timelog';
$_LANG['wbteampro']['profiletab']['tickets'] = 'Tickets';

/************************************** Project Tabs */
$_LANG['wbteampro']['projecttab']['details'] = 'Detalhes';
$_LANG['wbteampro']['projecttab']['actions'] = 'Ações';
$_LANG['wbteampro']['projecttab']['tickets'] = 'Tickets';
$_LANG['wbteampro']['projecttab']['files'] = 'Arquivos';
$_LANG['wbteampro']['projecttab']['filesview'] = 'Ver arquivos';
$_LANG['wbteampro']['projecttab']['topics'] = 'Conversas';
$_LANG['wbteampro']['projecttab']['topicsview'] = 'Ver conversas';

/************************************** Project Fields */
$_LANG['wbteampro']['projectfield']['name'] = 'Nome do Projeto';
$_LANG['wbteampro']['projectfield']['client'] = 'Cliente';
$_LANG['wbteampro']['projectfield']['type'] = 'Tipo';
$_LANG['wbteampro']['projectfield']['contact'] = 'Contato do Cliente';
$_LANG['wbteampro']['projectfield']['status'] = 'Status';
$_LANG['wbteampro']['projectfield']['status'] = 'Status';
$_LANG['wbteampro']['projectfield']['managedby'] = 'Gerenciado por';
$_LANG['wbteampro']['projectfield']['visiblestatus'] = 'Status Visível';
$_LANG['wbteampro']['projectfield']['assignedto'] = 'Atribuído a';
$_LANG['wbteampro']['projectfield']['datestart'] = 'Data de Início';
$_LANG['wbteampro']['projectfield']['datefinish'] = 'Data Final';
$_LANG['wbteampro']['projectfield']['details'] = 'Notas / Detalhes';
$_LANG['wbteampro']['projectfield']['created'] = 'Criado';
$_LANG['wbteampro']['projectfield']['reviewed'] = 'Revisado';
$_LANG['wbteampro']['projectfield']['modified'] = 'Modificado';
$_LANG['wbteampro']['projectfield']['completed'] = 'Completado';
$_LANG['wbteampro']['projectfield']['sfcompleted'] = '%1$s de %2$s ações, %3$s milestone, %4$s grupo, %5$s conversas';

/************************************** File Fields */
$_LANG['wbteampro']['filelist']['newthread'] = 'Novo Thread';
$_LANG['wbteampro']['filelist']['deletethread'] = 'Delete Thread';
$_LANG['wbteampro']['filelist']['by'] = 'por';
$_LANG['wbteampro']['filelist']['on'] = 'on';
$_LANG['wbteampro']['filelist']['expanddetail'] = 'Alternar visualização';
$_LANG['wbteampro']['filefield']['label'] = 'Label';
$_LANG['wbteampro']['filefield']['version'] = 'Ver';
$_LANG['wbteampro']['filefield']['file'] = 'Arquivo';
$_LANG['wbteampro']['filefield']['mime'] = 'Mime';
$_LANG['wbteampro']['filefield']['size'] = 'Tamanho';
$_LANG['wbteampro']['filefield']['detail'] = 'Detalhe';
$_LANG['wbteampro']['filefield']['upload'] = 'Upload';

/************************************** Ticket Fields */
$_LANG['wbteampro']['ticketlist']['newticket'] = 'Novo Ticket';
$_LANG['wbteampro']['ticketfield']['project'] = 'Projeto';
$_LANG['wbteampro']['ticketfield']['deptid'] = 'Departamento';
$_LANG['wbteampro']['ticketfield']['priority'] = 'Prioridade';
$_LANG['wbteampro']['ticketfield']['subject'] = 'Assunto';
$_LANG['wbteampro']['ticketfield']['message'] = 'Mensagem';
$_LANG['wbteampro']['ticketfield']['attachments'] = 'Anexos';
$_LANG['wbteampro']['ticketfield']['allowedfiletypes'] = 'Extensões de arquivo permitidas';

/************************************** Ticket Priority */
$_LANG['wbteampro']['ticket']['priority']['low'] = 'Baixo';
$_LANG['wbteampro']['ticket']['priority']['medium'] = 'Médio';
$_LANG['wbteampro']['ticket']['priority']['high'] = 'Alto';

/************************************** Topic Fields */
$_LANG['wbteampro']['topiclist']['newthread'] = 'Novo Thread';
$_LANG['wbteampro']['topiclist']['deletethread'] = 'Delete Thread';
$_LANG['wbteampro']['topiclist']['by'] = 'por';
$_LANG['wbteampro']['topiclist']['on'] = 'on';
$_LANG['wbteampro']['topicfield']['title'] = 'Titulo';
$_LANG['wbteampro']['topicfield']['detail'] = 'Detalhe';
$_LANG['wbteampro']['topiclist']['expanddetail'] = 'Alternar visualização';

/************************************** Action Fields */
$_LANG['wbteampro']['actionlist']['dispmode'] = 'Modo de exibição:';
$_LANG['wbteampro']['actionlist']['listview'] = 'Ver lista';
$_LANG['wbteampro']['actionlist']['treeview'] = 'Ver Árvore';
$_LANG['wbteampro']['actionlist']['ganttview'] = 'Gantt View';
$_LANG['wbteampro']['actionlist']['listcollapse'] = 'Recolher tudo';
$_LANG['wbteampro']['actionlist']['listexpand'] = 'Expandir tudo';
$_LANG['wbteampro']['actionlist']['addchild'] = 'Adicionar tudo';
$_LANG['wbteampro']['actionlist']['stoptimer'] = 'Parar temporizador';
$_LANG['wbteampro']['actionlist']['starttimer'] = 'Iniciar temporizador';
$_LANG['wbteampro']['actionlist']['viewlog'] = 'Ver registro';
$_LANG['wbteampro']['actionlist']['delete'] = 'Deletar';
$_LANG['wbteampro']['actionlist']['totalcomplete'] = 'Projeto Completo';
$_LANG['wbteampro']['actionlist']['totalelapsed'] = 'Total de tempo';
$_LANG['wbteampro']['actionfield']['name'] = 'Nome';
$_LANG['wbteampro']['actionfield']['complete'] = '% Completo';
$_LANG['wbteampro']['actionfield']['type'] = 'Tipo';
$_LANG['wbteampro']['actionfield']['datestart'] = 'Data de Início';
$_LANG['wbteampro']['actionfield']['status'] = 'Status';
$_LANG['wbteampro']['actionfield']['datefinish'] = 'Data Final';
$_LANG['wbteampro']['actionfield']['client'] = 'Cliente';
$_LANG['wbteampro']['actionfield']['managedby'] = 'Gerenciado por';
$_LANG['wbteampro']['actionfield']['maincontact'] = 'Contato principal';
$_LANG['wbteampro']['actionfield']['assignedto'] = 'Atribuído a';
$_LANG['wbteampro']['actionfield']['detail'] = 'Detalhe';
$_LANG['wbteampro']['actionfield']['created'] = 'Criado';
$_LANG['wbteampro']['actionfield']['activity'] = 'Atividade';
$_LANG['wbteampro']['actionfield']['modified'] = 'Modificado';
$_LANG['wbteampro']['actionfield']['parentaction'] = 'Ação do pai';

/************************************** Timelog Fields */
$_LANG['wbteampro']['timeloglist']['totalelapsed'] = 'Total decorrido';
$_LANG['wbteampro']['timelogfield']['note'] = 'Nota';
$_LANG['wbteampro']['timelogfield']['datestart'] = 'Data de início';
$_LANG['wbteampro']['timelogfield']['datestop'] = 'Data final';
$_LANG['wbteampro']['timelogfield']['owner'] = 'Proprietário';
$_LANG['wbteampro']['timelogfield']['elapsed'] = 'Tempo decorrido';

/************************************** Timelog */
$_LANG['wbteampro']['timelog']['emptynote'] = '~';
$_LANG['wbteampro']['timelog']['status']['active'] = 'Ativo';
$_LANG['wbteampro']['timelog']['status']['complete'] = 'Completa';
$_LANG['wbteampro']['timelog']['elapsed']['all'] = 'Todos os tempos registrados';
$_LANG['wbteampro']['timelog']['elapsed']['my'] = 'Meu horário registrado';

/************************************** Page/List Navigation */
$_LANG['wbteampro']['filter']['tablabel'] = $_LANG['searchfilter'];
$_LANG['wbteampro']['filter']['any'] = '- Qualquer -';
$_LANG['wbteampro']['filter']['none'] = $_LANG['none'];
$_LANG['wbteampro']['filter']['search'] = 'Pesquisar';
$_LANG['wbteampro']['filter']['owner'] = 'Proprietário';
$_LANG['wbteampro']['filter']['project'] = 'Projeto';
$_LANG['wbteampro']['filter']['status'] = 'Status';
$_LANG['wbteampro']['filter']['client'] = 'Cliente';
$_LANG['wbteampro']['filter']['department'] = 'Departamento';
$_LANG['wbteampro']['filter']['manager'] = 'Gerente';
$_LANG['wbteampro']['filter']['assigned'] = 'Atribuído';
$_LANG['wbteampro']['filter']['type'] = 'Tipo';
$_LANG['wbteampro']['filter']['level'] = 'Nível';
$_LANG['wbteampro']['filter']['flagged'] = 'Sinalização';
$_LANG['wbteampro']['filter']['rangestart'] = 'Iniciado após';
$_LANG['wbteampro']['filter']['rangestop'] = 'Iniciado antes';
$_LANG['wbteampro']['filter']['root'] = 'Root Level';
$_LANG['wbteampro']['filter']['reset'] = 'Reiniciar';

/************************************** Page/List Navigation */
$_LANG['wbteampro']['pagenav']['report'] = '%s '.$_LANG['recordsfound'].', '.$_LANG['page'].' %s '.$_LANG['pageof'].' %s';
$_LANG['wbteampro']['pagenav']['prev'] = '&laquo; '.$_LANG['previouspage'];
$_LANG['wbteampro']['pagenav']['next'] = $_LANG['nextpage'].' &raquo;';
$_LANG['wbteampro']['pagenav']['empty'] = $_LANG['norecordsfound'];
$_LANG['wbteampro']['pagenav']['jumpto'] = 'Ir para Página';
$_LANG['wbteampro']['pagenav']['limit'] = 'Limite';
$_LANG['wbteampro']['pagenav']['go'] = $_LANG['go'];
$_LANG['wbteampro']['pagenav']['export'] = 'Exportar';
$_LANG['wbteampro']['pagenav']['print'] = 'Imprimir';
$_LANG['wbteampro']['pagenav']['orderby'] = 'Ordenar por %1$s'; // %1$s = Campo, %2$s = Direção

/************************************** Form Button Labels */
$_LANG['wbteampro']['formnav']['edit'] = 'Editar';
$_LANG['wbteampro']['formnav']['save'] = 'Salvar';
$_LANG['wbteampro']['formnav']['apply'] = 'Aplicar';
$_LANG['wbteampro']['formnav']['close'] = 'Fechar';
$_LANG['wbteampro']['formnav']['cancel'] = 'Cancelar';
$_LANG['wbteampro']['formnav']['delete'] = 'Deletar';
$_LANG['wbteampro']['formnav']['download'] = 'Download';
$_LANG['wbteampro']['formnav']['timestart'] = 'Iniciar';
$_LANG['wbteampro']['formnav']['timestop'] = 'Parar';

/************************************** Dashboard Blocks */
$_LANG['wbteampro']['dashhead']['viewall'] = 'Ver tudo';
$_LANG['wbteampro']['dashhead']['topProjects'] = 'Atividade recente dos projetos';
$_LANG['wbteampro']['dashhead']['topActions'] = 'Mais Ações Urgentes';
$_LANG['wbteampro']['dashhead']['topTimelog'] = 'Atividades recentes do Timelog';
$_LANG['wbteampro']['dashhead']['topTickets'] = 'Atividade do Ticket';
$_LANG['wbteampro']['dashhead']['topTopics'] = 'Atividade dos Tópicos';
$_LANG['wbteampro']['dashhead']['topFiles'] = 'Atividade dos arquivos';

/************************************** List Table Headers */
$_LANG['wbteampro']['listhead']['project_name'] = 'Nome do projeto';
$_LANG['wbteampro']['listhead']['project_type'] = 'Tipo';
$_LANG['wbteampro']['listhead']['project_status'] = 'Status';
$_LANG['wbteampro']['listhead']['project_complete'] = '%';
$_LANG['wbteampro']['listhead']['project_tasks'] = '#';
$_LANG['wbteampro']['listhead']['date_created'] = 'Criado';
$_LANG['wbteampro']['listhead']['date_modified'] = 'Modificado';
$_LANG['wbteampro']['listhead']['date_activity'] = 'Atividade';
$_LANG['wbteampro']['listhead']['date_start'] = 'Início';
$_LANG['wbteampro']['listhead']['date_finish'] = 'Final';
$_LANG['wbteampro']['listhead']['client_userid'] = 'Cliente';
$_LANG['wbteampro']['listhead']['owner_adminid'] = 'Proprietário';
$_LANG['wbteampro']['listhead']['manager_adminid'] = 'Gerente';
$_LANG['wbteampro']['listhead']['assigned_adminid'] = 'Atribuído';
$_LANG['wbteampro']['listhead']['action_name'] = 'Nome da Ação';
$_LANG['wbteampro']['listhead']['action_type'] = 'Tipo';
$_LANG['wbteampro']['listhead']['action_status'] = 'Status';
$_LANG['wbteampro']['listhead']['action_complete'] = '%';
$_LANG['wbteampro']['listhead']['action_elapsed'] = 'Elapsed';
$_LANG['wbteampro']['listhead']['annual_activity'] = 'Atividade Anual';
$_LANG['wbteampro']['listhead']['timelog_note'] = 'Timelog Note';
$_LANG['wbteampro']['listhead']['timelog_elapsed'] = 'Elapsed';
$_LANG['wbteampro']['listhead']['timelog_start'] = 'Iniciado';
$_LANG['wbteampro']['listhead']['timelog_status'] = 'Status';
$_LANG['wbteampro']['listhead']['topic_name'] = 'Conversa';
$_LANG['wbteampro']['listhead']['topic_activity'] = 'Atividade';
$_LANG['wbteampro']['listhead']['topic_posts'] = 'Posts';
$_LANG['wbteampro']['listhead']['ticket_title'] = 'Título do Ticket';
$_LANG['wbteampro']['listhead']['ticket_lastreply'] = 'Atividade';
$_LANG['wbteampro']['listhead']['ticket_date'] = 'Enviado';
$_LANG['wbteampro']['listhead']['ticket_submitter'] = 'Enviar';
$_LANG['wbteampro']['listhead']['ticket_department'] = 'Departamento';
$_LANG['wbteampro']['listhead']['ticket_status'] = 'Status';
$_LANG['wbteampro']['listhead']['ticket_urgency'] = 'Urgência';
$_LANG['wbteampro']['listhead']['file_label'] = 'Arquivo Thread';
$_LANG['wbteampro']['listhead']['file_latest'] = 'Arquivo mais recente';
$_LANG['wbteampro']['listhead']['file_total'] = 'Arquivos';

/************************************** Navigation Breadcrumbs */
$_LANG['wbteampro']['breadcrumb']['wbteampro'] = 'Meus projetos';
$_LANG['wbteampro']['breadcrumb']['project_list'] = 'Lista de projetos';
$_LANG['wbteampro']['breadcrumb']['action_list'] = 'Lista de Ações';
$_LANG['wbteampro']['breadcrumb']['file_list'] = 'Lista de Arquivos';
$_LANG['wbteampro']['breadcrumb']['topic_list'] = 'Lista de Tópicos';

/************************************** Dynamic Select List Options */
$_LANG['wbteampro']['listoption']['project_type']['internal'] = 'Interno';
$_LANG['wbteampro']['listoption']['project_type']['product'] = 'Produto';
$_LANG['wbteampro']['listoption']['project_type']['service'] = 'Serviço';
$_LANG['wbteampro']['listoption']['project_status']['service'] = 'Serviço';
$_LANG['wbteampro']['listoption']['project_status']['under_review'] = 'Em revisão';
$_LANG['wbteampro']['listoption']['project_status']['active'] = 'Ativo';
$_LANG['wbteampro']['listoption']['project_status']['in_production'] = 'Em produção';
$_LANG['wbteampro']['listoption']['project_status']['in_testing'] = 'Em teste';
$_LANG['wbteampro']['listoption']['project_status']['completed'] = 'Concluído';
$_LANG['wbteampro']['listoption']['project_status']['closed'] = 'Fechado';
$_LANG['wbteampro']['listoption']['action_type']['planning'] = 'Planejamento';
$_LANG['wbteampro']['listoption']['action_type']['research'] = 'Pesquisa';
$_LANG['wbteampro']['listoption']['action_type']['contact'] = 'Contact';
$_LANG['wbteampro']['listoption']['action_type']['service'] = 'Serviço';
$_LANG['wbteampro']['listoption']['action_type']['development'] = 'Desenvolvimento';
$_LANG['wbteampro']['listoption']['action_type']['review'] = 'Revisão';
$_LANG['wbteampro']['listoption']['action_status']['closed'] = 'Fechado';
$_LANG['wbteampro']['listoption']['action_status']['active'] = 'Ativo';
$_LANG['wbteampro']['listoption']['action_status']['progress'] = 'Em progresso';
$_LANG['wbteampro']['listoption']['action_status']['cancelled'] = 'Cancelado';
$_LANG['wbteampro']['listoption']['action_status']['complete'] = 'Completo';

/** END LANGUAGE **/