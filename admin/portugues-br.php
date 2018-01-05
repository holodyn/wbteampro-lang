<?php

/**

  Webuddha wbTeamPro
  (c)2010 Webuddha.com, The Holodyn Corporation - All Rights Reserved

  CHANGELOG ************
  v2.0.0 - Provided by M.G. 2017-01-23

**/

defined('WHMCS_ADMIN') or die('Invalid Access');
include('english.php');

/************************************** Errors */
$_ADMINLANG['wbteampro']['error']['default_label'] = 'Mensagem de erro';
$_ADMINLANG['wbteampro']['error']['license_error'] = 'Erro wbTeamPro: Falha na autorização de licença';
$_ADMINLANG['wbteampro']['error']['license_invalid'] = 'Erro WbTeamPro: Chave de licença inválida';
$_ADMINLANG['wbteampro']['error']['license_expired'] = 'Erro WbTeamPro: Chave de licença expirada';
$_ADMINLANG['wbteampro']['error']['license_suspended'] = 'Erro WbTeamPro: Chave de licença suspensa';
$_ADMINLANG['wbteampro']['error']['change_error'] = '<b>Erro ao salvar alterações!</b><br/>Suas alterações não foram salvas.';
$_ADMINLANG['wbteampro']['error']['permissiondenied'] = 'Permissão negada';
$_ADMINLANG['wbteampro']['error']['invalidroleid'] = 'Sua função de administrador não é permitida para acessar wbTeamPro';
$_ADMINLANG['wbteampro']['error']['invalidrequest'] = 'Solicitar formato inválido ou incorreto';
$_ADMINLANG['wbteampro']['error']['project_file_path_invalid'] = '<b>Caminho de arquivo inválido!</b><br>O caminho do arquivo de projeto definido não é um diretório válido.';
$_ADMINLANG['wbteampro']['error']['project_file_path_locked'] = '<b>Caminho de arquivo não gravável!</b><br>O caminho do arquivo de projeto definido não é gravável.';
$_ADMINLANG['wbteampro']['error']['system_tmp_path_invalid'] = '<b>Caminho de arquivo inválido!</b><br>O Caminho de arquivo definido não é um diretório válido.';
$_ADMINLANG['wbteampro']['error']['system_tmp_path_locked'] = '<b>Caminho de arquivo não gravável!</b><br>O Caminho de arquivo definido não é gravável.';
$_ADMINLANG['wbteampro']['error']['plugin_loaderror'] = '<b>Erro do Plugin!</b><br>Erro ao carregar o plugin de.';
$_ADMINLANG['wbteampro']['error']['plugin_protected'] = '<b>Erro do Plugin!</b><br>Erro ao modificar o plugin protegido.';
$_ADMINLANG['wbteampro']['error']['keeping_project_type'] = 'O tipo de projeto "%s" está em uso e não pode ser removido';
$_ADMINLANG['wbteampro']['error']['keeping_project_status'] = 'O status do projeto "%s" está em uso e não pode ser removido';
$_ADMINLANG['wbteampro']['error']['keeping_action_type'] = 'O tipo de ação "%s" está em uso e não pode ser removido';
$_ADMINLANG['wbteampro']['error']['keeping_action_status'] = 'O status da ação "%s" está em uso e não pode ser removido';
$_ADMINLANG['wbteampro']['error']['keeping_timelog_type'] = 'O tipo de timelog "%s" está em uso e não pode ser removido';
$_ADMINLANG['wbteampro']['error']['record_notfound'] = 'Registro não encontrado';
$_ADMINLANG['wbteampro']['error']['record_undefined'] = 'Record Undefined';
$_ADMINLANG['wbteampro']['error']['record_updatefailed'] = 'Erro ao atualizar registro(s)';
$_ADMINLANG['wbteampro']['error']['record_incomplete'] = 'Os dados necessários não foram fornecidos';
$_ADMINLANG['wbteampro']['error']['record_invalidvalue'] = 'O valor fornecido para %s é inválido ou não é permitido.';
$_ADMINLANG['wbteampro']['error']['update_check_failed'] = 'Falha ao recuperar status de atualização do servidor remoto.';
$_ADMINLANG['wbteampro']['error']['update_failed'] = '<b>Atualização falhou</b><br>Um erro fatal interrompeu a operação de atualização.<br>Revise o registro e corrija quaisquer problemas antes de tentar novamente.';
$_ADMINLANG['wbteampro']['error']['view_layout_not_found'] = 'Erro WbTeamPro: Layout de exibição não encontrado (%s)';

/************************************** Alerts */
$_ADMINLANG['wbteampro']['alert']['default_label'] = 'Alerta';
$_ADMINLANG['wbteampro']['alert']['project_created'] = '<b>Novo projeto criado</b><br>Seu novo projeto foi criado. Agora você pode criar a Árvore de Ação.';
$_ADMINLANG['wbteampro']['alert']['batch_success'] = '<b>Atualizações bem-sucedidas</b><br>As atualizações foram aplicadas os registros selecionados com êxito!';
$_ADMINLANG['wbteampro']['alert']['change_success'] = '<b>Mudanças salvas</b><br>As alterações feitas no registro anterior foram salvas.';
$_ADMINLANG['wbteampro']['alert']['delete_success'] = '<b>Registro excluído</b><br>O registro foi excluído com êxito.';
$_ADMINLANG['wbteampro']['alert']['close_success'] = '<b>Registro fechado</b><br>Você fechou com êxito o registro anterior.';
$_ADMINLANG['wbteampro']['alert']['copy_success'] = '<b>Copiar Sucesso</b><br>O projeto foi copiado com sucesso.';
$_ADMINLANG['wbteampro']['alert']['update_success'] = '<b>Atualização feita com sucesso</b><br>O pacote atualizado foi instalado com êxito!';

/************************************** Notices */
$_ADMINLANG['wbteampro']['notice']['default_label'] = 'Aviso';
$_ADMINLANG['wbteampro']['notice']['superadmin'] = 'Administrador';
$_ADMINLANG['wbteampro']['notice']['editing_templateproject'] = '<b>Observação de modelo</b><br>Você está editando um modelo de projeto.';
$_ADMINLANG['wbteampro']['notice']['editing_archiveproject'] = '<b>Arquivo</b><br>Você está <u>exibindo</u> um Arquivo de Projeto e não pode fazer alterações.';
$_ADMINLANG['wbteampro']['notice']['server_timezone_na'] = '<b>Fuso horário do servidor Indefinido!</b><br>Você não especificou um fuso horário. a data exata pode estar incorreta.';
$_ADMINLANG['wbteampro']['notice']['action_cancelled'] = '<b>Ação cancelada</b><br>Você cancelou a ação anterior.';
$_ADMINLANG['wbteampro']['notice']['plugin_installed'] = '<b>Novos Resultados de Plugins</b><br>%1$s plugins encontrados, %2$s instalado, %3$s falhou.';
$_ADMINLANG['wbteampro']['notice']['file_closed'] = '<b>Arquivo de Tópico Fechado</b><br>Abra este tópico para fazer alterações.';
$_ADMINLANG['wbteampro']['notice']['topic_closed'] = '<b>Conversa Fechada</b><br>Abra este tópico para fazer alterações.';
$_ADMINLANG['wbteampro']['notice']['update_started'] = 'Sua atualização foi iniciada. Não recarregue esta página até que o processo tenha sido concluído.';
$_ADMINLANG['wbteampro']['notice']['update_backup_first'] = 'Certifique-se de BACKUP seu banco de dados MySQL e sistema de arquivos WHMCS antes de executar uma atualização automática.';
$_ADMINLANG['wbteampro']['notice']['deprecated'] = '<b>Operação obsoleta</b><br>A solicitação que você fez não estará disponível em futuras versões.';
$_ADMINLANG['wbteampro']['notice']['plugin_protected'] = '<b>Aviso de Proteção!</b><br>Este plugin está protegido e não pode ser desativado.';

/************************************** Graph */
$_ADMINLANG['wbteampro']['graph']['label_projectsummary'] = 'Uma Comparação da Atividade do Projeto';
$_ADMINLANG['wbteampro']['graph']['label_timelogtwoyearsummary'] = 'Um resumo das horas totais registradas';

/************************************** Menu */
$_ADMINLANG['wbteampro']['menu']['projectmanager'] = 'Gerenciador de Projeto';
$_ADMINLANG['wbteampro']['menu']['tablabel'] = 'Projeto';
$_ADMINLANG['wbteampro']['menu']['viewall'] = 'Ver tudo';
$_ADMINLANG['wbteampro']['menu']['dashboard'] = 'Painel';
$_ADMINLANG['wbteampro']['menu']['projects'] = 'Projetos';
$_ADMINLANG['wbteampro']['menu']['assignedprojects'] = 'Projetos Atribuídos';
$_ADMINLANG['wbteampro']['menu']['myprojects'] = 'Menus projetos';
$_ADMINLANG['wbteampro']['menu']['newproject'] = 'Novo projeto';
$_ADMINLANG['wbteampro']['menu']['actions'] = 'Ações';
$_ADMINLANG['wbteampro']['menu']['incompletetasks'] = 'Tarefas incompletas';
$_ADMINLANG['wbteampro']['menu']['assignedtasks'] = 'Tarefas atribuídas';
$_ADMINLANG['wbteampro']['menu']['myactions'] = 'Minhas Ações';
$_ADMINLANG['wbteampro']['menu']['files'] = 'Arquivos';
$_ADMINLANG['wbteampro']['menu']['myfiles'] = 'Meus arquivos';
$_ADMINLANG['wbteampro']['menu']['discussions'] = 'Conversas';
$_ADMINLANG['wbteampro']['menu']['mydiscussions'] = 'Minhas conversas';
$_ADMINLANG['wbteampro']['menu']['tickets'] = 'Tickets';
$_ADMINLANG['wbteampro']['menu']['mytickets'] = 'Meus Tickets';
$_ADMINLANG['wbteampro']['menu']['timelog'] = 'Registros de tempo';
$_ADMINLANG['wbteampro']['menu']['mytimelog'] = 'Meus registros de tempo';
$_ADMINLANG['wbteampro']['menu']['setupmanager'] = 'Gerenciador do sistema';
$_ADMINLANG['wbteampro']['menu']['archivedprojects'] = 'Meus arquivos';
$_ADMINLANG['wbteampro']['menu']['templateprojects'] = 'Modelos do Projeto';
$_ADMINLANG['wbteampro']['menu']['system'] = 'Sistema';
$_ADMINLANG['wbteampro']['menu']['setup_config'] = 'Configurações';
$_ADMINLANG['wbteampro']['menu']['setup_update'] = 'Verificar atualizações';
$_ADMINLANG['wbteampro']['menu']['setup_update_avail'] = 'Atualizar';
$_ADMINLANG['wbteampro']['menu']['setup_plugins'] = 'Gerenciar Plugins';
$_ADMINLANG['wbteampro']['menu']['support'] = 'Ajuda e Suporte';

/************************************** JS */
$_ADMINLANG['wbteampro']['js']['tabProject'] = 'Projeto';
$_ADMINLANG['wbteampro']['js']['tabProjects'] = 'Projetos';
$_ADMINLANG['wbteampro']['js']['tabTickets'] = 'Tickets';
$_ADMINLANG['wbteampro']['js']['loadMsg'] = 'Carregando, por favor aguarde...';
$_ADMINLANG['wbteampro']['js']['titleActiveLogs'] = 'Timelogs ativos';
$_ADMINLANG['wbteampro']['js']['noActiveLogs'] = 'Timelogs desativados';
$_ADMINLANG['wbteampro']['js']['reqComplete'] = 'Pedido concluído';
$_ADMINLANG['wbteampro']['js']['uiTimelogStart'] = 'Iniciar';
$_ADMINLANG['wbteampro']['js']['uiTimelogSave'] = 'Salvar';
$_ADMINLANG['wbteampro']['js']['uiTimelogCancel'] = 'Cancelar';
$_ADMINLANG['wbteampro']['js']['uiTicketCreate'] = 'Criar';
$_ADMINLANG['wbteampro']['js']['uiTicketCreateOpen'] = 'Criar e abrir';
$_ADMINLANG['wbteampro']['js']['uiTicketCancel'] = 'Cancelar';
$_ADMINLANG['wbteampro']['js']['btnStartTimer'] = 'Iniciar tempo';
$_ADMINLANG['wbteampro']['js']['btnStopTimer'] = 'Parar tempo';
$_ADMINLANG['wbteampro']['js']['btnViewAll'] = 'Ver tudo';
$_ADMINLANG['wbteampro']['js']['btnCreate'] = 'Criar';
$_ADMINLANG['wbteampro']['js']['msgTimelogSaved'] = 'Timelog salvo por [time]';
$_ADMINLANG['wbteampro']['js']['msgTimelogStopped'] = 'Timelog Stopped after [time]';
$_ADMINLANG['wbteampro']['js']['deleteConfirm'] = 'Selecione OK para confirmar sua ação';
$_ADMINLANG['wbteampro']['js']['deletePrompt'] = 'Digite DELETE para confirmar sua ação';
$_ADMINLANG['wbteampro']['js']['deleteAnswer'] = 'DELETE';
$_ADMINLANG['wbteampro']['js']['deleteCancelled'] = 'Cancelar Delete';
$_ADMINLANG['wbteampro']['js']['textLimitRemain'] = '[remain] de [limit] caracteres permanecem';
$_ADMINLANG['wbteampro']['js']['textLimitReached'] = 'máximo [limit] caracteres permanecem';
$_ADMINLANG['wbteampro']['js']['copyPrompt'] = 'Digite COPY para confirmar sua ação';
$_ADMINLANG['wbteampro']['js']['copyAnswer'] = 'COPY';
$_ADMINLANG['wbteampro']['js']['copyCancelled'] = 'Cópia cancelada';
$_ADMINLANG['wbteampro']['js']['ajaxSearchInput'] = 'Digite para pesquisar...';
$_ADMINLANG['wbteampro']['js']['rruleOccurDaily'] = 'dia(s)';
$_ADMINLANG['wbteampro']['js']['rruleOccurWeekly'] = 'semana(s)';
$_ADMINLANG['wbteampro']['js']['rruleOccurMonthly'] = 'mês(s)';
$_ADMINLANG['wbteampro']['js']['rruleOccurYearly'] = 'anos(s)';
$_ADMINLANG['wbteampro']['js']['rowSelectEmpty'] = 'Selecione uma linha(s) para gerenciar';
$_ADMINLANG['wbteampro']['js']['rowSelectConfirm'] = 'Selecione OK para confirmar sua ação';
$_ADMINLANG['wbteampro']['js']['uiInvoiceCreate'] = 'Criar / Atualizar fatura';
$_ADMINLANG['wbteampro']['js']['uiInvoiceCancel'] = 'Cancelar';
$_ADMINLANG['wbteampro']['js']['uiInvoiceNoItems'] = 'Nenhum item para fatura';
$_ADMINLANG['wbteampro']['js']['uiInvoiceSuccess'] = 'A(s) fatura(s) de Timelog foram criadas com êxito';
$_ADMINLANG['wbteampro']['js']['uiModifyAccept'] = 'Aplicar mudanças';
$_ADMINLANG['wbteampro']['js']['uiModifyCancel'] = 'Cancelar';

/************************************** Page Headers */
$_ADMINLANG['wbteampro']['taskheader']['prefix'] = 'wbTeamPro: ';
$_ADMINLANG['wbteampro']['taskheader']['project_edit_archive'] = ' [ARCHIVE]';
$_ADMINLANG['wbteampro']['taskheader']['project_edit_template'] = ' [TEMPLATE]';
$_ADMINLANG['wbteampro']['taskheader']['project_edit_new'] = 'Novo projeto';
$_ADMINLANG['wbteampro']['taskheader']['project_action_list'] = 'Ações do projeto';
$_ADMINLANG['wbteampro']['taskheader']['project_ticket_list'] = 'Tickets do projeto';
$_ADMINLANG['wbteampro']['taskheader']['project_file_list'] = 'Arquivos do projeto';
$_ADMINLANG['wbteampro']['taskheader']['project_topic_list'] = 'Conversas do projeto';
$_ADMINLANG['wbteampro']['taskheader']['project_list'] = 'Todos os projetos';
$_ADMINLANG['wbteampro']['taskheader']['action_list'] = 'Todas as ações do projeto';
$_ADMINLANG['wbteampro']['taskheader']['file_list'] = 'Todos os arquivos do projeto';
$_ADMINLANG['wbteampro']['taskheader']['topic_list'] = 'Todos os tópicos do projeto';
$_ADMINLANG['wbteampro']['taskheader']['ticket_list'] = 'Todos os ingressos para projeto';
$_ADMINLANG['wbteampro']['taskheader']['timelog_list'] = 'Todos Timelogs do projeto';
$_ADMINLANG['wbteampro']['taskheader']['template_list'] = 'Todos os modelos';
$_ADMINLANG['wbteampro']['taskheader']['archive_list'] = 'Todos os arquivos';

/************************************** Client Profile Tabs */
$_ADMINLANG['wbteampro']['profiletab']['projects'] = 'Projetos';
$_ADMINLANG['wbteampro']['profiletab']['actions'] = 'Ações';
$_ADMINLANG['wbteampro']['profiletab']['files'] = 'Arquivos';
$_ADMINLANG['wbteampro']['profiletab']['topics'] = 'Conversas';
$_ADMINLANG['wbteampro']['profiletab']['timelog'] = 'Time Logs';
$_ADMINLANG['wbteampro']['profiletab']['tickets'] = 'Tickets';

/************************************** Project Tabs */
$_ADMINLANG['wbteampro']['projecttab']['details'] = 'Detalhes';
$_ADMINLANG['wbteampro']['projecttab']['actions'] = 'Ações';
$_ADMINLANG['wbteampro']['projecttab']['tickets'] = 'Tickets';
$_ADMINLANG['wbteampro']['projecttab']['files'] = 'Arquivos';
$_ADMINLANG['wbteampro']['projecttab']['filesview'] = 'Ver arquivos';
$_ADMINLANG['wbteampro']['projecttab']['topics'] = 'Conversas';
$_ADMINLANG['wbteampro']['projecttab']['topicsview'] = 'Ver conversas';
$_ADMINLANG['wbteampro']['projecttab']['timelog'] = 'Time Log';

/************************************** Admin Visibility */
$_ADMINLANG['wbteampro']['adminvisible']['all'] = 'Tudo';
$_ADMINLANG['wbteampro']['adminvisible']['manager'] = 'Apenas gerente';
$_ADMINLANG['wbteampro']['adminvisible']['related'] = 'Gerente & Atribuído';

/************************************** Client Visibility */
$_ADMINLANG['wbteampro']['clientvisible']['hidden'] = 'Escondido';
$_ADMINLANG['wbteampro']['clientvisible']['visible'] = 'Visível';
$_ADMINLANG['wbteampro']['clientvisible']['view'] = 'Ver';
$_ADMINLANG['wbteampro']['clientvisible']['modify'] = 'Modificar';
$_ADMINLANG['wbteampro']['clientvisible']['inherit'] = 'Herdar';

/************************************** Project Functions */
$_ADMINLANG['wbteampro']['projectfunction']['default'] = 'Padrão';
$_ADMINLANG['wbteampro']['projectfunction']['template'] = 'Modelo';
$_ADMINLANG['wbteampro']['projectfunction']['archive'] = 'Arquivo';

/************************************** Project Fields */
$_ADMINLANG['wbteampro']['projectsave']['newActionLabel'] = 'Defina o Milestone';
$_ADMINLANG['wbteampro']['projectlist']['newproject'] = 'Novo projeto';
$_ADMINLANG['wbteampro']['projectlist']['newtemplate'] = 'Novo modelo';
$_ADMINLANG['wbteampro']['projectfield']['name'] = 'Nome do projeto';
$_ADMINLANG['wbteampro']['projectfield']['client'] = 'Cliente';
$_ADMINLANG['wbteampro']['projectfield']['type'] = 'Tipo';
$_ADMINLANG['wbteampro']['projectfield']['contact'] = 'Contato do cliente';
$_ADMINLANG['wbteampro']['projectfield']['product'] = 'Produto Cliente';
$_ADMINLANG['wbteampro']['projectfield']['status'] = 'Status';
$_ADMINLANG['wbteampro']['projectfield']['managedby'] = 'Gerenciado por';
$_ADMINLANG['wbteampro']['projectfield']['visiblestatus'] = 'Acesso Admin';
$_ADMINLANG['wbteampro']['projectfield']['assignedto'] = 'Atribuído a';
$_ADMINLANG['wbteampro']['projectfield']['datestart'] = 'Data de Início';
$_ADMINLANG['wbteampro']['projectfield']['datefinish'] = 'Data de Final';
$_ADMINLANG['wbteampro']['projectfield']['details'] = 'Notas / Detalhes';
$_ADMINLANG['wbteampro']['projectfield']['created'] = 'Criado';
$_ADMINLANG['wbteampro']['projectfield']['activity'] = 'Atividade';
$_ADMINLANG['wbteampro']['projectfield']['modified'] = 'Modificado';
$_ADMINLANG['wbteampro']['projectfield']['completed'] = 'Concluído';
$_ADMINLANG['wbteampro']['projectfield']['sfcompleted'] = '%1$s de %2$s ações, %3$s milestone, %4$s grupo, %5$s tarefa, tempo decorrido: %6$s';
$_ADMINLANG['wbteampro']['projectfield']['namecopysprint'] = '*COPY* %s';
$_ADMINLANG['wbteampro']['projectfield']['notes'] = 'Notas particulares';
$_ADMINLANG['wbteampro']['projectfield']['clientvisible'] = 'Acesso para cliente';
$_ADMINLANG['wbteampro']['projectfield']['function'] = 'Função';
$_ADMINLANG['wbteampro']['projectfield']['billable'] = 'Hora de faturar';

/************************************** Copy Fields */
$_ADMINLANG['wbteampro']['copyform']['option_setup'] = 'Opções de cópia do projeto';
$_ADMINLANG['wbteampro']['copyform']['project_setup'] = 'Novas configurações do projeto';
$_ADMINLANG['wbteampro']['copyfield']['newname'] = 'Nome do novo projeto';
$_ADMINLANG['wbteampro']['copyfield']['copy_template'] = 'Salvar como modelo';
$_ADMINLANG['wbteampro']['copyfield']['copy_actions'] = 'Ações de cópia';
$_ADMINLANG['wbteampro']['copyfield']['copy_files'] = 'Copiar Arquivo de tópicos';
$_ADMINLANG['wbteampro']['copyfield']['copy_topics'] = 'Copiar tópicos de conversas';
$_ADMINLANG['wbteampro']['copyfield']['copy_tickets'] = 'Copiar relacionamentos de Tickets';
$_ADMINLANG['wbteampro']['copyfield']['copy_timelogs'] = 'Copiar Timelogs';

/************************************** File Fields */
$_ADMINLANG['wbteampro']['filelist']['newthread'] = 'Novo tópico';
$_ADMINLANG['wbteampro']['filelist']['appendthread'] = 'Adicionar tópico';
$_ADMINLANG['wbteampro']['filelist']['deletethread'] = 'Apagar tópico';
$_ADMINLANG['wbteampro']['filelist']['clientaccess'] = 'Acesso para Cliente';
$_ADMINLANG['wbteampro']['filelist']['toggleaccess'] = 'Alternar acesso';
$_ADMINLANG['wbteampro']['filelist']['by'] = 'por';
$_ADMINLANG['wbteampro']['filelist']['on'] = 'on';
$_ADMINLANG['wbteampro']['filefield']['label'] = 'Etiqueta';
$_ADMINLANG['wbteampro']['filefield']['version'] = 'Ver';
$_ADMINLANG['wbteampro']['filefield']['file'] = 'Arquivo';
$_ADMINLANG['wbteampro']['filefield']['mime'] = 'Mime';
$_ADMINLANG['wbteampro']['filefield']['size'] = 'Tamanho';
$_ADMINLANG['wbteampro']['filefield']['detail'] = 'Detalhe';
$_ADMINLANG['wbteampro']['filefield']['upload'] = 'Upload';
$_ADMINLANG['wbteampro']['filefield']['import'] = 'Importar';
$_ADMINLANG['wbteampro']['filelist']['status'] = 'Status';
$_ADMINLANG['wbteampro']['filelist']['status_open'] = 'Aberto';
$_ADMINLANG['wbteampro']['filelist']['status_closed'] = 'Fechado';
$_ADMINLANG['wbteampro']['filelist']['expanddetail'] = 'Expandir / Recolher';
$_ADMINLANG['wbteampro']['filelist']['count'] = '%s Arquivos';

/************************************** Ticket Fields */
$_ADMINLANG['wbteampro']['ticketlist']['ticket_nonefound'] = 'Nenhum Ticket encontrado';
$_ADMINLANG['wbteampro']['ticketlist']['linkticket'] = 'Link Ticket';
$_ADMINLANG['wbteampro']['ticketlist']['newticket'] = 'Novo Ticket';
$_ADMINLANG['wbteampro']['ticketfield']['project'] = 'Projeto';
$_ADMINLANG['wbteampro']['ticketfield']['action'] = 'Ação';

/************************************** Topic Fields */
$_ADMINLANG['wbteampro']['topiclist']['newthread'] = 'Novo tópico';
$_ADMINLANG['wbteampro']['topiclist']['appendthread'] = 'Adicionar tópico';
$_ADMINLANG['wbteampro']['topiclist']['deletethread'] = 'Apagar tópico';
$_ADMINLANG['wbteampro']['topiclist']['clientaccess'] = 'Acesso para Cliente';
$_ADMINLANG['wbteampro']['topiclist']['toggleaccess'] = 'Alternar acesso';
$_ADMINLANG['wbteampro']['topiclist']['by'] = 'por';
$_ADMINLANG['wbteampro']['topiclist']['on'] = 'on';
$_ADMINLANG['wbteampro']['topicfield']['title'] = 'Titulo';
$_ADMINLANG['wbteampro']['topicfield']['detail'] = 'Detalhe';
$_ADMINLANG['wbteampro']['topiclist']['status'] = 'Status';
$_ADMINLANG['wbteampro']['topiclist']['status_open'] = 'Aberto';
$_ADMINLANG['wbteampro']['topiclist']['status_closed'] = 'Fechado';
$_ADMINLANG['wbteampro']['topiclist']['expanddetail'] = 'Expandir / Recolher';
$_ADMINLANG['wbteampro']['topiclist']['count'] = '%s Postagens';
$_ADMINLANG['wbteampro']['topiclist']['created'] = 'Iniciado em %s';

/************************************** Action Fields */
$_ADMINLANG['wbteampro']['actionlist']['dispmode'] = 'Modo de exibição:';
$_ADMINLANG['wbteampro']['actionlist']['listview'] = 'Exibição de lista';
$_ADMINLANG['wbteampro']['actionlist']['treeview'] = 'Vista da árvore';
$_ADMINLANG['wbteampro']['actionlist']['ganttview'] = 'Visualizar gantt';
$_ADMINLANG['wbteampro']['actionlist']['listexpand'] = 'Expandir / Fechar todas as tarefas aninhadas';
$_ADMINLANG['wbteampro']['actionlist']['listmaskcompleted'] = 'Mostrar / Ocultar tarefas concluídas';
$_ADMINLANG['wbteampro']['actionlist']['newaction'] = 'Nova ação';
$_ADMINLANG['wbteampro']['actionlist']['addchild'] = 'Adicionar filho';
$_ADMINLANG['wbteampro']['actionlist']['stoptimer'] = 'Parar temporizador';
$_ADMINLANG['wbteampro']['actionlist']['starttimer'] = 'Temporizador de início';
$_ADMINLANG['wbteampro']['actionlist']['viewlog'] = 'Ver Log';
$_ADMINLANG['wbteampro']['actionlist']['delete'] = 'Deletar';
$_ADMINLANG['wbteampro']['actionlist']['totalcomplete'] = 'Projeto concluído';
$_ADMINLANG['wbteampro']['actionlist']['totalduration'] = 'Duração total';
$_ADMINLANG['wbteampro']['actionlist']['totalelapsed'] = 'Total transcorrido';
$_ADMINLANG['wbteampro']['actionlist']['client_access'] = 'Alternar acesso ao cliente';
$_ADMINLANG['wbteampro']['actionfield']['name'] = 'Nome';
$_ADMINLANG['wbteampro']['actionfield']['complete'] = '% Completo';
$_ADMINLANG['wbteampro']['actionfield']['type'] = 'Tipo';
$_ADMINLANG['wbteampro']['actionfield']['datestart'] = 'Data de início';
$_ADMINLANG['wbteampro']['actionfield']['status'] = 'Status';
$_ADMINLANG['wbteampro']['actionfield']['datefinish'] = 'Data final';
$_ADMINLANG['wbteampro']['actionfield']['client'] = 'Cliente';
$_ADMINLANG['wbteampro']['actionfield']['managedby'] = 'Gerenciado por';
$_ADMINLANG['wbteampro']['actionfield']['maincontact'] = 'Contato principal';
$_ADMINLANG['wbteampro']['actionfield']['assignedto'] = 'Atribuído a';
$_ADMINLANG['wbteampro']['actionfield']['detail'] = 'Notas / Detalhes';
$_ADMINLANG['wbteampro']['actionfield']['created'] = 'Criado';
$_ADMINLANG['wbteampro']['actionfield']['activity'] = 'Atividade';
$_ADMINLANG['wbteampro']['actionfield']['modified'] = 'Modificado';
$_ADMINLANG['wbteampro']['actionfield']['parentaction'] = 'Ação dos pais';
$_ADMINLANG['wbteampro']['actionfield']['clientvisible'] = 'Acesso para Cliente';
$_ADMINLANG['wbteampro']['actionfield']['notes'] = 'Notas particulares';
$_ADMINLANG['wbteampro']['actionfield']['priority'] = 'Prioridade';
$_ADMINLANG['wbteampro']['actionfield']['billable'] = 'Hora de faturar';
$_ADMINLANG['wbteampro']['actionfield']['duration'] = 'Duração';
$_ADMINLANG['wbteampro']['actionfield']['recurrence'] = 'Recorrência';
$_ADMINLANG['wbteampro']['actionfield']['summary']['datestart'] = 'Início da Recorrência';
$_ADMINLANG['wbteampro']['actionfield']['summary']['datefinish'] = 'Recorrência concluída';
$_ADMINLANG['wbteampro']['actionfield']['occurrence']['datestart'] = 'Início da ocorrência';
$_ADMINLANG['wbteampro']['actionfield']['occurrence']['datefinish'] = 'Final da ocorrência';

/************************************** Action Report Labels */
$_ADMINLANG['wbteampro']['actionreport']['schd_on'] = 'No horário';
$_ADMINLANG['wbteampro']['actionreport']['schd_ahead'] = 'Antes do previsto';
$_ADMINLANG['wbteampro']['actionreport']['schd_behind'] = 'Após o previsto';

/************************************** Recurrence Fields */
$_ADMINLANG['wbteampro']['recurrence']['report']['instance'] = 'Ocorrência %s de %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['fromdate'] = 'Iniciando em %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['daily']['count'] = 'Repitir a cada %s dias para %s dias';
$_ADMINLANG['wbteampro']['recurrence']['report']['daily']['until'] = 'Repitir a cada %s dias até %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['weekly']['count'] = 'Repitir a cada %s semanas em %s para %s semanas';
$_ADMINLANG['wbteampro']['recurrence']['report']['weekly']['until'] = 'Repitir a cada %s semanas em %s até %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['monthly']['bymonthday']['count'] = 'Repetir %s dias a cada %s mês(es) para %s mês(es)';
$_ADMINLANG['wbteampro']['recurrence']['report']['monthly']['bymonthday']['until'] = 'Repetir %s dias a cada %s mês(es) até %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['monthly']['bysetpos']['count'] = 'Repetir %s %s every %s mês(es) for %s mês(es)';
$_ADMINLANG['wbteampro']['recurrence']['report']['monthly']['bysetpos']['until'] = 'Repetir %s %s cada %s mês(s) até %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['yearly']['bymonthday']['count'] = 'Repetir %s dia para %s cada %s ano(s) para %s ano(s)';
$_ADMINLANG['wbteampro']['recurrence']['report']['yearly']['bymonthday']['until'] = 'Repetir %s dia para %s cada %s ano(s) até %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['yearly']['bysetpos']['count'] = 'Repetir %s %s para %s cada %s anos(s) por %s ano(s)';
$_ADMINLANG['wbteampro']['recurrence']['report']['yearly']['bysetpos']['until'] = 'Repetir %s %s para %s cada %s ano(s) até %s';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['legend'] = 'Frequência de Recorrência';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['daily']['everyxdays'] = '%sOcorrência%s %s dia(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['weekly']['everyxweeks'] = '%sSe repetem a cada%s %s semana(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['monthly']['nthofxmonths'] = '%sDia%s %s de cada %s mês(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['monthly']['nthdayofxmonths'] = '%sO%s %s %s de cada %s mês(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['yearly']['nthofxyears'] = '%sem%s %s a %s cada %s ano(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['yearly']['nthdayofxyears'] = '%sNo%s %s %s de %s cada %s ano(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['legend'] = 'Duração da Recorrência';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['until'] = '%sRepita até%s %s';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['count'] = '%sRepita para%s %s %ocorrência(s)%s';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['occur']['daily'] = 'dia(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['occur']['weekly'] = 'semana(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['occur']['monthly'] = 'mês(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['occur']['yearly'] = 'ano(s)';

/************************************** Timelog Fields */
$_ADMINLANG['wbteampro']['timeloglist']['total'] = 'Total';
$_ADMINLANG['wbteampro']['timeloglist']['totalelapsed'] = 'Total decorrido';
$_ADMINLANG['wbteampro']['timeloglist']['by'] = 'por';
$_ADMINLANG['wbteampro']['timelogfield']['note'] = 'Nota';
$_ADMINLANG['wbteampro']['timelogfield']['type'] = 'Tipo';
$_ADMINLANG['wbteampro']['timelogfield']['datestart'] = 'Data de início';
$_ADMINLANG['wbteampro']['timelogfield']['datestop'] = 'Data final';
$_ADMINLANG['wbteampro']['timelogfield']['duration'] = 'Duração';
$_ADMINLANG['wbteampro']['timelogfield']['owner'] = 'Proprietário';
$_ADMINLANG['wbteampro']['timelogfield']['elapsed'] = 'Tempo decorrido';
$_ADMINLANG['wbteampro']['timelogfield']['billable'] = 'Hora de faturar';
$_ADMINLANG['wbteampro']['timelogfield']['invoice'] = 'Fatura #';

/************************************** Timelog */
$_ADMINLANG['wbteampro']['timelog']['emptynote'] = '~';
$_ADMINLANG['wbteampro']['timelog']['status']['active'] = 'Ativo';
$_ADMINLANG['wbteampro']['timelog']['status']['complete'] = 'Completo';
$_ADMINLANG['wbteampro']['timelog']['elapsed']['all'] = 'Todos os tempos registrados';
$_ADMINLANG['wbteampro']['timelog']['elapsed']['my'] = 'Meu tempo registrado';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['client'] = 'Cliente';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['project'] = 'Projeto';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['action'] = 'Ação';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['milestone'] = 'Milestone';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['group'] = 'Grupo';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['task'] = 'Tarefa';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['ticket'] = 'Ticket de suporte';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['timelog'] = 'Timelog';

/************************************** Timelog Modal */
$_ADMINLANG['wbteampro']['timelog']['modal']['title'] = 'Começar novo Timelog';
$_ADMINLANG['wbteampro']['timelog']['modal']['event'] = 'Insira a descrição do evento';
$_ADMINLANG['wbteampro']['timelog']['modal']['type'] = 'Tipo de evento';
$_ADMINLANG['wbteampro']['timelog']['modal']['manual'] = 'Especifique duração e salve como concluído';
$_ADMINLANG['wbteampro']['timelog']['modal']['start'] = 'Início';
$_ADMINLANG['wbteampro']['timelog']['modal']['duration'] = 'Duração';
$_ADMINLANG['wbteampro']['timelog']['modal']['durexample'] = 'ie: 2 horas, 5 minutos, 10 segundos';
$_ADMINLANG['wbteampro']['timelog']['modal']['owner'] = 'Proprietário';
$_ADMINLANG['wbteampro']['timelog']['modal']['billable'] = 'Será este o tempo facturável?';

/************************************** Invoice Modal */
$_ADMINLANG['wbteampro']['invoice']['modal']['title'] = 'Criar nova fatura(s)';
$_ADMINLANG['wbteampro']['invoice']['modal']['invoicecount'] = 'Fatura #{invoice_count}';
$_ADMINLANG['wbteampro']['invoice']['modal']['date'] = 'Data da fatura';
$_ADMINLANG['wbteampro']['invoice']['modal']['duedate'] = 'Data de Vencimento';
$_ADMINLANG['wbteampro']['invoice']['modal']['taxrate'] = 'Taxa de imposto';
$_ADMINLANG['wbteampro']['invoice']['modal']['applytax'] = 'Apply Tax';
$_ADMINLANG['wbteampro']['invoice']['modal']['paymentmethod'] = 'Pay Method';
$_ADMINLANG['wbteampro']['invoice']['modal']['sendinvoice'] = 'Enviar fatura';
$_ADMINLANG['wbteampro']['invoice']['modal']['autoapplycredit'] = 'Aplicar créditos';
$_ADMINLANG['wbteampro']['invoice']['modal']['rate'] = 'Taxa';
$_ADMINLANG['wbteampro']['invoice']['modal']['note'] = 'Notas sobre faturas';
$_ADMINLANG['wbteampro']['invoice']['modal']['invoiceid'] = 'Adicionar à fatura ID';
$_ADMINLANG['wbteampro']['invoice']['modal']['total_count'] = '# Itens de linha';
$_ADMINLANG['wbteampro']['invoice']['modal']['total_hours'] = 'Total de horas';
$_ADMINLANG['wbteampro']['invoice']['modal']['sub_total'] = 'Sub-Total';
$_ADMINLANG['wbteampro']['invoice']['modal']['total_tax'] = 'Total de imposto';
$_ADMINLANG['wbteampro']['invoice']['modal']['total'] = 'Total da fatura';
$_ADMINLANG['wbteampro']['invoice']['modal']['line_total'] = 'Total';
$_ADMINLANG['wbteampro']['invoice']['modal']['checkall'] = 'Verificar todos';
$_ADMINLANG['wbteampro']['invoice']['modal']['applyall'] = 'Aplicar a todos';
$_ADMINLANG['wbteampro']['invoice']['modal']['expandall'] = 'Expandir / Recolher tudo';
$_ADMINLANG['wbteampro']['invoice']['modal']['apply'] = 'Aplicar';
$_ADMINLANG['wbteampro']['invoice']['modal']['customize'] = 'Personalizar faturas e itens de linha';

/************************************** Modify Actions Modal */
$_ADMINLANG['wbteampro']['modifyactions']['modal']['title'] = 'Modificar ações múltiplas';
$_ADMINLANG['wbteampro']['modifyactions']['modal']['th-apply'] = 'Aplicar';
$_ADMINLANG['wbteampro']['modifyactions']['modal']['th-option'] = 'Opção';
$_ADMINLANG['wbteampro']['modifyactions']['modal']['th-value'] = 'Valor';

/************************************** Modify Actions Modal */
$_ADMINLANG['wbteampro']['modifytimelogs']['modal']['title'] = 'Modificar vários Timelogs';
$_ADMINLANG['wbteampro']['modifytimelogs']['modal']['th-apply'] = 'Aplicar';
$_ADMINLANG['wbteampro']['modifytimelogs']['modal']['th-option'] = 'Opção';
$_ADMINLANG['wbteampro']['modifytimelogs']['modal']['th-value'] = 'Valor';

/************************************** Confirm Modal */
$_ADMINLANG['wbteampro']['confirm']['modal']['title'] = 'Confirmar ação';
$_ADMINLANG['wbteampro']['confirm']['modal']['delete'] = 'Digite DELETE para confirmar';

/************************************** Ticket Modal */
$_ADMINLANG['wbteampro']['ticket']['modal']['title'] = 'Abrir um novo ticket de suporte';
$_ADMINLANG['wbteampro']['ticket']['modal']['client'] = 'Cliente';
$_ADMINLANG['wbteampro']['ticket']['modal']['project'] = 'Projeto';
$_ADMINLANG['wbteampro']['ticket']['modal']['deptid'] = 'Departamento';
$_ADMINLANG['wbteampro']['ticket']['modal']['priority'] = 'Prioridade';
$_ADMINLANG['wbteampro']['ticket']['modal']['subject'] = 'Assunto';
$_ADMINLANG['wbteampro']['ticket']['modal']['message'] = 'Menssagem';
$_ADMINLANG['wbteampro']['ticket']['modal']['nodept'] = 'Nenhuma permissão de departamento encontrada';
$_ADMINLANG['wbteampro']['ticket']['modal']['sendemail'] = 'Enviar E-mail';

/************************************** Page/List Navigation */
$_ADMINLANG['wbteampro']['filter']['tablabel'] = $_ADMINLANG['global']['searchfilter'];
$_ADMINLANG['wbteampro']['filter']['any'] = $_ADMINLANG['global']['any'];
$_ADMINLANG['wbteampro']['filter']['none'] = $_ADMINLANG['global']['none'];
$_ADMINLANG['wbteampro']['filter']['checkall'] = 'Maracr';
$_ADMINLANG['wbteampro']['filter']['uncheckall'] = 'Desmarque';
$_ADMINLANG['wbteampro']['filter']['selectedtext'] = '# selecionado';
$_ADMINLANG['wbteampro']['filter']['search'] = 'Pesquisar';
$_ADMINLANG['wbteampro']['filter']['masksearch'] = 'Filtro';
$_ADMINLANG['wbteampro']['filter']['masksearch-placeholder'] = 'Filtrar por palavra-chave...';
$_ADMINLANG['wbteampro']['filter']['owner'] = 'Proprietário';
$_ADMINLANG['wbteampro']['filter']['admin'] = 'Admin';
$_ADMINLANG['wbteampro']['filter']['project'] = 'Projeto';
$_ADMINLANG['wbteampro']['filter']['action'] = 'Ação';
$_ADMINLANG['wbteampro']['filter']['ticket'] = 'Ticket';
$_ADMINLANG['wbteampro']['filter']['status'] = 'Status';
$_ADMINLANG['wbteampro']['filter']['client'] = 'Cliente';
$_ADMINLANG['wbteampro']['filter']['product'] = 'Produto';
$_ADMINLANG['wbteampro']['filter']['department'] = 'Departamento';
$_ADMINLANG['wbteampro']['filter']['manager'] = 'Gerente';
$_ADMINLANG['wbteampro']['filter']['assigned'] = 'Atribuído';
$_ADMINLANG['wbteampro']['filter']['type'] = 'Tipo';
$_ADMINLANG['wbteampro']['filter']['level'] = 'Nível';
$_ADMINLANG['wbteampro']['filter']['flagged'] = 'Sinalizado';
$_ADMINLANG['wbteampro']['filter']['rangestart'] = 'Começou depois';
$_ADMINLANG['wbteampro']['filter']['rangestop'] = 'Começou antes';
$_ADMINLANG['wbteampro']['filter']['percentage'] = '% Completo';
$_ADMINLANG['wbteampro']['filter']['root'] = 'Nível de raiz';
$_ADMINLANG['wbteampro']['filter']['zone'] = 'Zona';
$_ADMINLANG['wbteampro']['filter']['priority'] = 'Prioridade';
$_ADMINLANG['wbteampro']['filter']['billable'] = 'Faturável';
$_ADMINLANG['wbteampro']['filter']['invoiced'] = 'Faturado';
$_ADMINLANG['wbteampro']['filter']['group_mode'] = 'Agrupar por';
$_ADMINLANG['wbteampro']['filter']['project_type'] = 'Tipo de projeto';
$_ADMINLANG['wbteampro']['filter']['project_status'] = 'Status do projeto';

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
$_ADMINLANG['wbteampro']['pagenav']['orderby'] = 'Ordenar por %1$s'; // %1$s = Campo, %2$s = Direção
$_ADMINLANG['wbteampro']['pagenav']['allMasked'] = '<b>Aviso prévio</b><br>Todos os registros estão mascarados';

/************************************** Form Button Labels */
$_ADMINLANG['wbteampro']['formnav']['edit'] = 'Editar';
$_ADMINLANG['wbteampro']['formnav']['view'] = 'Visualizar';
$_ADMINLANG['wbteampro']['formnav']['copy'] = 'Copiar';
$_ADMINLANG['wbteampro']['formnav']['copy_template'] = 'Criar projeto';
$_ADMINLANG['wbteampro']['formnav']['archive'] = 'Arquivo';
$_ADMINLANG['wbteampro']['formnav']['unarchive'] = 'Desarquivar';
$_ADMINLANG['wbteampro']['formnav']['save'] = 'Salvar';
$_ADMINLANG['wbteampro']['formnav']['save_new'] = 'Salvar e Novo';
$_ADMINLANG['wbteampro']['formnav']['apply'] = 'Aplicar';
$_ADMINLANG['wbteampro']['formnav']['close'] = 'Fechar';
$_ADMINLANG['wbteampro']['formnav']['cancel'] = 'Cancelar';
$_ADMINLANG['wbteampro']['formnav']['delete'] = 'Deletar';
$_ADMINLANG['wbteampro']['formnav']['download'] = 'Download';
$_ADMINLANG['wbteampro']['formnav']['timestart'] = 'Iniciar temporizador';
$_ADMINLANG['wbteampro']['formnav']['timestop'] = 'Parar temporizador';
$_ADMINLANG['wbteampro']['formnav']['submit'] = 'Enviar';
$_ADMINLANG['wbteampro']['formnav']['invoice'] = 'Fatura';
$_ADMINLANG['wbteampro']['formnav']['reload'] = 'Recarregar';
$_ADMINLANG['wbteampro']['formnav']['check'] = 'Verificar';
$_ADMINLANG['wbteampro']['formnav']['link'] = 'Link';
$_ADMINLANG['wbteampro']['formnav']['unlink'] = 'Unlink';

/************************************** Dashboard Blocks */
$_ADMINLANG['wbteampro']['dashhead']['topProjects'] = 'Projetos com atividade recente';
$_ADMINLANG['wbteampro']['dashhead']['topActions'] = 'Principais ações avaliadas';
$_ADMINLANG['wbteampro']['dashhead']['myActions'] = 'Tarefas atribuídas a você';
$_ADMINLANG['wbteampro']['dashhead']['touchedActions'] = 'Ações com atividade recente';
$_ADMINLANG['wbteampro']['dashhead']['topTimelog'] = 'Atividade recente com Timelog';
$_ADMINLANG['wbteampro']['dashhead']['topTickets'] = 'Atividade recente do Ticket';
$_ADMINLANG['wbteampro']['dashhead']['topTopics'] = 'Atividade recente do tópico';
$_ADMINLANG['wbteampro']['dashhead']['topFiles'] = 'Atividade recente de arquivos';
$_ADMINLANG['wbteampro']['dashhead']['viewall'] = 'Ver tudo';

/************************************** List Table Headers */
$_ADMINLANG['wbteampro']['listhead']['ordering'] = 'Ordenar';
$_ADMINLANG['wbteampro']['listhead']['enabled'] = 'Ativado';
$_ADMINLANG['wbteampro']['listhead']['date_created'] = 'Criado';
$_ADMINLANG['wbteampro']['listhead']['date_modified'] = 'Modificado';
$_ADMINLANG['wbteampro']['listhead']['date_activity'] = 'Atividade';
$_ADMINLANG['wbteampro']['listhead']['date_start'] = 'Início';
$_ADMINLANG['wbteampro']['listhead']['date_finish'] = 'Final';
$_ADMINLANG['wbteampro']['listhead']['client_name'] = 'Nome do Cliente';
$_ADMINLANG['wbteampro']['listhead']['client_userid'] = 'Cliente';
$_ADMINLANG['wbteampro']['listhead']['client_hostingid'] = 'Produto';
$_ADMINLANG['wbteampro']['listhead']['owner_adminid'] = 'Proprietário';
$_ADMINLANG['wbteampro']['listhead']['manager_adminid'] = 'Gerente';
$_ADMINLANG['wbteampro']['listhead']['assigned_adminid'] = 'Atribuído';
$_ADMINLANG['wbteampro']['listhead']['invoice_id'] = 'Fatura';
$_ADMINLANG['wbteampro']['listhead']['range_start'] = 'Começou depois';
$_ADMINLANG['wbteampro']['listhead']['range_stop'] = 'Começou antes';

/************************************** Project List */
$_ADMINLANG['wbteampro']['listhead']['project_name'] = 'Nome do Projeto';
$_ADMINLANG['wbteampro']['listhead']['project_type'] = 'Tipo';
$_ADMINLANG['wbteampro']['listhead']['project_status'] = 'Status';
$_ADMINLANG['wbteampro']['listhead']['project_complete'] = '%';
$_ADMINLANG['wbteampro']['listhead']['project_tasks'] = '#';

/************************************** Action List */
$_ADMINLANG['wbteampro']['listhead']['action_name'] = 'Nome da ação';
$_ADMINLANG['wbteampro']['listhead']['action_type'] = 'Tipo';
$_ADMINLANG['wbteampro']['listhead']['action_status'] = 'Status';
$_ADMINLANG['wbteampro']['listhead']['action_complete'] = '%';
$_ADMINLANG['wbteampro']['listhead']['action_elapsed'] = 'Decorrência';
$_ADMINLANG['wbteampro']['listhead']['action_priority'] = 'Prioridade';
$_ADMINLANG['wbteampro']['listhead']['action_duration'] = 'Duração';

/************************************** Timelog List */
$_ADMINLANG['wbteampro']['listhead']['timelog_note'] = 'Nota de Timelog';
$_ADMINLANG['wbteampro']['listhead']['timelog_elapsed'] = 'Decorrência';
$_ADMINLANG['wbteampro']['listhead']['timelog_start'] = 'Início';
$_ADMINLANG['wbteampro']['listhead']['timelog_type'] = 'Tipo';
$_ADMINLANG['wbteampro']['listhead']['timelog_status'] = 'Status';
$_ADMINLANG['wbteampro']['listhead']['timelog_count'] = '# Registros';
$_ADMINLANG['wbteampro']['listhead']['timelog_elapsed_total_billable'] = 'Total faturável';
$_ADMINLANG['wbteampro']['listhead']['timelog_count_billed'] = '# Faturado';
$_ADMINLANG['wbteampro']['listhead']['timelog_elapsed_total_billed'] = 'Total faturado';
$_ADMINLANG['wbteampro']['listhead']['timelog_count_unbilled'] = '# Pendente';
$_ADMINLANG['wbteampro']['listhead']['timelog_elapsed_total_unbilled'] = 'Total Pendente';
$_ADMINLANG['wbteampro']['listhead']['timelog_elapsed_total'] = 'Total';

/************************************** Topic List */
$_ADMINLANG['wbteampro']['listhead']['topic_name'] = 'Lista de Discussão';
$_ADMINLANG['wbteampro']['listhead']['topic_activity'] = 'Atividade';
$_ADMINLANG['wbteampro']['listhead']['topic_posts'] = 'Postagens';
$_ADMINLANG['wbteampro']['listhead']['topic_status'] = 'Status';

/************************************** Ticket List */
$_ADMINLANG['wbteampro']['listhead']['ticket_title'] = 'Título do Ticket';
$_ADMINLANG['wbteampro']['listhead']['ticket_lastreply'] = 'Atividade';
$_ADMINLANG['wbteampro']['listhead']['ticket_date'] = 'Submetido';
$_ADMINLANG['wbteampro']['listhead']['ticket_urgency'] = 'Urgência';
$_ADMINLANG['wbteampro']['listhead']['ticket_submitter'] = 'Enviado';
$_ADMINLANG['wbteampro']['listhead']['ticket_department'] = 'Departamento';
$_ADMINLANG['wbteampro']['listhead']['ticket_status'] = 'Status';
$_ADMINLANG['wbteampro']['listhead']['ticket_admin'] = 'Proprietário';
$_ADMINLANG['wbteampro']['listhead']['ticket_flag'] = 'Atribuído';

/************************************** File List */
$_ADMINLANG['wbteampro']['listhead']['file_label'] = 'File Thread';
$_ADMINLANG['wbteampro']['listhead']['file_latest'] = 'Arquivo mais recente';
$_ADMINLANG['wbteampro']['listhead']['file_total'] = 'Arquivos';
$_ADMINLANG['wbteampro']['listhead']['file_status'] = 'Status';

/************************************** Plugin List */
$_ADMINLANG['wbteampro']['listhead']['plugin_name'] = 'Nome do Plugin';
$_ADMINLANG['wbteampro']['listhead']['plugin_zone'] = 'Zona';
$_ADMINLANG['wbteampro']['listhead']['plugin_element'] = 'Elemento';

/************************************** Module List */
$_ADMINLANG['wbteampro']['listhead']['module_name'] = 'Nome do módulo';
$_ADMINLANG['wbteampro']['listhead']['module_element'] = 'Elemento';
$_ADMINLANG['wbteampro']['listhead']['module_position'] = 'Posição';

/************************************** Setup Tabs */
$_ADMINLANG['wbteampro']['setuptab']['general'] = 'Geral';
$_ADMINLANG['wbteampro']['setuptab']['project'] = 'Projeto';
$_ADMINLANG['wbteampro']['setuptab']['action'] = 'Ações';
$_ADMINLANG['wbteampro']['setuptab']['display'] = 'Display';
$_ADMINLANG['wbteampro']['setuptab']['extensions'] = 'Extensões';

/************************************** Setup Configuration */
$_ADMINLANG['wbteampro']['configtopic']['general_settings'] = 'Configurações Gerais';
$_ADMINLANG['wbteampro']['configtopic']['project_settings'] = 'Configurações do projeto';
$_ADMINLANG['wbteampro']['configtopic']['action_settings'] = 'Configurações de Ação';
$_ADMINLANG['wbteampro']['configtopic']['billing_settings'] = 'Configurações de fatura';
$_ADMINLANG['wbteampro']['configtopic']['timelog_settings'] = 'Configurações do Timelog';
$_ADMINLANG['wbteampro']['configtopic']['billing_resource_rates'] = 'Taxas de faturamento personalizadas';
$_ADMINLANG['wbteampro']['configtopic']['billing_resource_rates-help'] = 'A avaliação de taxa para um timelog é calculada avaliando valores começando com as "Taxa de Hora" das Configurações de Fatura (acima), então projete uma "Taxa de Hora" específica (se definida), então o recurso específico "Taxa Básica" e finalmente o Tipo Timelog Valores de taxa. As taxas de recursos podem ser um valor em dólar específico (ou seja: 75) ou uma contrapartida do valor da taxa anterior (ou seja: +10, -20, + 15%, -5%).';
$_ADMINLANG['wbteampro']['configtopic']['billing_lineitem_formats'] = 'Formatação de itens de linha de faturamento';
$_ADMINLANG['wbteampro']['configtopic']['display_settings'] = 'Configurações da interface';
$_ADMINLANG['wbteampro']['configtopic']['display_date_formats'] = 'Formato de exibição da data';
$_ADMINLANG['wbteampro']['configtopic']['display_name_formats'] = 'Nome Formato de exibição';
$_ADMINLANG['wbteampro']['configtopic']['display_list_settings'] = 'Definições de visualização da listagem';


/************************************** Setup Configuration */
$_ADMINLANG['wbteampro']['configfield']['version'] = 'Versão';
$_ADMINLANG['wbteampro']['configfield']['license_key'] = 'Chave de licença';
$_ADMINLANG['wbteampro']['configfield']['license_key-help'] = 'A chave de licença necessária para a ativação.';
$_ADMINLANG['wbteampro']['configfield']['license_key-rekey'] = 'Reescrever licença';
$_ADMINLANG['wbteampro']['configfield']['license_key-confirm'] = 'Esta ação removerá sua chave de licença atual.\nClique em OK para continuar';
$_ADMINLANG['wbteampro']['configfield']['project_file_path'] = 'Caminho do arquivo do projeto';
$_ADMINLANG['wbteampro']['configfield']['project_file_path-help'] = 'Caminho relativo ou Absoluto onde os carregamentos do projeto são armazenados';
$_ADMINLANG['wbteampro']['configfield']['admin_super_roles'] = 'Funções Super Admin';
$_ADMINLANG['wbteampro']['configfield']['admin_super_roles-help'] = 'Pode ver / modificar tudo';
$_ADMINLANG['wbteampro']['configfield']['admin_valid_roles'] = 'Funções de administrador válidas';
$_ADMINLANG['wbteampro']['configfield']['admin_valid_roles-help'] = 'Pode ver / modificar se proprietário ou atribuído';
$_ADMINLANG['wbteampro']['configfield']['project_link_target'] = 'Meta do link do projeto';
$_ADMINLANG['wbteampro']['configfield']['project_link_target-help'] = 'Padrão: Nova janela';
$_ADMINLANG['wbteampro']['configfield']['project_link_task'] = 'Exibição de projeto padrão';
$_ADMINLANG['wbteampro']['configfield']['project_link_task-help'] = 'A sub-aba inicial ao abrir um Projeto';
$_ADMINLANG['wbteampro']['configfield']['client_link_target'] = 'Cliente link de destino';
$_ADMINLANG['wbteampro']['configfield']['client_link_target-help'] = 'Padrão: Nova janela';
$_ADMINLANG['wbteampro']['configfield']['ticket_link_target'] = 'Ticket Link Target';
$_ADMINLANG['wbteampro']['configfield']['ticket_link_target-help'] = 'Padrão: Nova janela';
$_ADMINLANG['wbteampro']['configfield']['page_listing_limit'] = 'Limite da lista de páginas';
$_ADMINLANG['wbteampro']['configfield']['page_listing_limit-help'] = 'O número total de registros a mostrar por página';
$_ADMINLANG['wbteampro']['configfield']['thread_listing_limit'] = 'Limite da Lista de Linhas';
$_ADMINLANG['wbteampro']['configfield']['thread_listing_limit-help'] = 'O número total de postagens a serem exibidas nas páginas de discussão';
$_ADMINLANG['wbteampro']['configfield']['thread_thumbnail_dimension'] = 'Tamanho da Miniatura';
$_ADMINLANG['wbteampro']['configfield']['thread_thumbnail_dimension-help'] = 'O tamanho das miniaturas das imagens mostradas nos tópicos do arquivo';
$_ADMINLANG['wbteampro']['configfield']['thread_textcollapse'] = 'Recolher texto de linha';
$_ADMINLANG['wbteampro']['configfield']['thread_textcollapse-help'] = 'Texto longo colapsado com um botão Expandir';
$_ADMINLANG['wbteampro']['configfield']['keepalive_timeout'] = 'Keepalive Timeout';
$_ADMINLANG['wbteampro']['configfield']['keepalive_timeout-help'] = 'Número de segundos entre pings de servidor';
$_ADMINLANG['wbteampro']['configfield']['js_delete_confirm'] = 'Confirmação de exclusão';
$_ADMINLANG['wbteampro']['configfield']['js_delete_confirm-help'] = 'Confirmação a ser exibida em Excluir ações';
$_ADMINLANG['wbteampro']['configfield']['clientarea_primarynavbar_link'] = 'Mostrar link de comunicação do cliente';
$_ADMINLANG['wbteampro']['configfield']['clientarea_primarynavbar_link-help'] = 'Mostrar o link "Meus projetos" na barra de navegação principal do cliente.';
$_ADMINLANG['wbteampro']['configfield']['server_timezone'] = 'Fuso horário do servidor';
$_ADMINLANG['wbteampro']['configfield']['server_timezone-time'] = 'Hora do servidor';
$_ADMINLANG['wbteampro']['configfield']['server_timezone-help'] = 'Substituir o fuso horário do servidor (em branco para o padrão do servidor)';
$_ADMINLANG['wbteampro']['configfield']['server_timezone-default'] = 'Padrão do servidor';
$_ADMINLANG['wbteampro']['configfield']['cron_adminid'] = 'Cron Admin Usuário';
$_ADMINLANG['wbteampro']['configfield']['cron_adminid-help'] = 'Admin usado ao executar chamadas da API do WHMCS';
$_ADMINLANG['wbteampro']['configfield']['cron_password'] = 'Senha Cron';
$_ADMINLANG['wbteampro']['configfield']['cron_password-help'] = 'Senha opcional para ligações em cron.php<br/><small><a href="'. WHMCS_URL .'modules/addons/wbteampro/cron.php?cron_password=xxx" target="_blank">/modules/addons/wbteampro/cron.php?cron_password=xxx</a></small>';
$_ADMINLANG['wbteampro']['configfield']['use_gzhandler'] = 'Compressão de Saída';
$_ADMINLANG['wbteampro']['configfield']['use_gzhandler-help'] = 'Use o manipulador gzip para melhorar os tempos de resposta';
$_ADMINLANG['wbteampro']['configfield']['system_log_emails'] = 'E-mails enviados por log';
$_ADMINLANG['wbteampro']['configfield']['system_log_emails-help'] = 'Salvar histórico de e-mails no log de e-mail do WHMCS';
$_ADMINLANG['wbteampro']['configfield']['api_active'] = 'API Ativo';
$_ADMINLANG['wbteampro']['configfield']['api_active-help'] = 'Salvar histórico de e-mails no log de e-mail do WHMCS';
$_ADMINLANG['wbteampro']['configfield']['system_tmp_path'] = 'Caminho de armazenamento temporário';
$_ADMINLANG['wbteampro']['configfield']['system_tmp_path-help'] = 'Caminho relativo ou Absoluto onde os arquivos temporários são gravados';
$_ADMINLANG['wbteampro']['configfield']['otaupdate_autocheck'] = 'Verificação automática';
$_ADMINLANG['wbteampro']['configfield']['otaupdate_autocheck-help'] = 'Verificar periodicamente atualizações de software.';
$_ADMINLANG['wbteampro']['configfield']['otaupdate_releasefilter'] = 'Versões opcionais';
$_ADMINLANG['wbteampro']['configfield']['otaupdate_releasefilter-help'] = 'Opcionalmente, você pode optar por verificar se há atualizações não oficiais.';
$_ADMINLANG['wbteampro']['configfield']['timelog_elapsed_format'] = 'Formado de decorrêncoa Timelog';
$_ADMINLANG['wbteampro']['configfield']['timelog_elapsed_format-help'] = 'Padrão: Automático';
$_ADMINLANG['wbteampro']['configfield']['timelog_ticketreply_autostop'] = 'Ticket Timelog AutoStop';
$_ADMINLANG['wbteampro']['configfield']['timelog_ticketreply_autostop-help'] = 'Parar automaticamente logs de tempo ao responder a um ticket';
$_ADMINLANG['wbteampro']['configfield']['timelog_ticketreply_autostop_onstatus'] = 'Filtro de Status do Ticket para Timelog AutoStop';
$_ADMINLANG['wbteampro']['configfield']['timelog_ticketreply_autostop_onstatus-help'] = 'Especifique os status do ticket que acionará o recurso Timelog AutoStop (nenhum para todos)';
$_ADMINLANG['wbteampro']['configfield']['project']['adjust_date'] = 'Data(s) de ajuste(s) automático';
$_ADMINLANG['wbteampro']['configfield']['project']['adjust_date-help'] = 'Ajustar datas de projeto para acomodar os limites de data de árvore de ação';
$_ADMINLANG['wbteampro']['configfield']['project']['project_type'] = 'Tipo de Projeto(s)';
$_ADMINLANG['wbteampro']['configfield']['project']['project_type-help'] = 'Tipos de projetos disponíveis (um por linha)';
$_ADMINLANG['wbteampro']['configfield']['project']['project_status'] = 'Status do projeto(s)';
$_ADMINLANG['wbteampro']['configfield']['project']['project_status-help'] = 'Status de projetos disponíveis (um por linha)';
$_ADMINLANG['wbteampro']['configfield']['project']['allow_assigned_any-help'] = 'Permitir que um projeto seja atribuído a opção de administração "Qualquer"';
$_ADMINLANG['wbteampro']['configfield']['project']['allow_assigned_any'] = 'Permitir atribuído a "Qualquer"';
$_ADMINLANG['wbteampro']['configfield']['action']['max_depth'] = 'Profundidade de ação máxima (#)';
$_ADMINLANG['wbteampro']['configfield']['action']['max_depth-help'] = 'A profundidade máxima das ações do projeto';
$_ADMINLANG['wbteampro']['configfield']['action']['adjust_date'] = 'Data(s) ajuste(s) automático';
$_ADMINLANG['wbteampro']['configfield']['action']['adjust_date-help'] = 'Ajustar datas de ação para limites de data de sub-ação';
$_ADMINLANG['wbteampro']['configfield']['action']['date_start_offset'] = 'Nova ação Data Início Offset';
$_ADMINLANG['wbteampro']['configfield']['action']['date_start_offset-help'] = 'Selecionar regra para criar nova ação Datas de início.';
$_ADMINLANG['wbteampro']['configfield']['action']['default_duration'] = 'Nova Duração da Ação';
$_ADMINLANG['wbteampro']['configfield']['action']['default_duration-help'] = 'Valor da duração inicial para novas ações (segundos).';
$_ADMINLANG['wbteampro']['configfield']['action']['finish_offset'] = 'Nova ação final Offset';
$_ADMINLANG['wbteampro']['configfield']['action']['finish_offset-help'] = 'Offset para a data de término em novas ações (segundos)';
$_ADMINLANG['wbteampro']['configfield']['action']['finish_conflict'] = 'Terminar Conflito';
$_ADMINLANG['wbteampro']['configfield']['action']['finish_conflict-help'] = 'Offset para data de término no conflito de data (segundos)';
$_ADMINLANG['wbteampro']['configfield']['action']['action_type'] = 'Tipo(s) de ação(ões)';
$_ADMINLANG['wbteampro']['configfield']['action']['action_type-help'] = 'Tipos de ação disponíveis (um por linha)';
$_ADMINLANG['wbteampro']['configfield']['action']['action_status'] = 'Status da ação(ões)';
$_ADMINLANG['wbteampro']['configfield']['action']['action_status-help'] = 'Status de projetos disponíveis (um por linha)';
$_ADMINLANG['wbteampro']['configfield']['action']['insert_position'] = 'Nova ação Inserir posição';
$_ADMINLANG['wbteampro']['configfield']['action']['insert_position-help'] = 'Posição da nova ação na lista filho';
$_ADMINLANG['wbteampro']['configfield']['action']['collapse_complete'] = 'Recolher ações concluídas';
$_ADMINLANG['wbteampro']['configfield']['action']['collapse_complete-help'] = 'Inicialmente carregar árvores de ação concluídas em um estado recolhido';
$_ADMINLANG['wbteampro']['configfield']['action']['mask_complete'] = 'Máscara concluída ações';
$_ADMINLANG['wbteampro']['configfield']['action']['mask_complete-help'] = 'Inicialmente carregar as árvores de ação concluídas em um estado mascarado';
$_ADMINLANG['wbteampro']['configfield']['action']['allow_assigned_any'] = 'Permitir atribuído a "Qualquer"';
$_ADMINLANG['wbteampro']['configfield']['action']['allow_assigned_any-help'] = 'Permitir que as ações sejam atribuídas a "Qualquer" admin';
$_ADMINLANG['wbteampro']['configfield']['action']['status_oncomplete'] = 'Ação Concluído Status';
$_ADMINLANG['wbteampro']['configfield']['action']['status_oncomplete-help'] = 'Atribuir status automaticamente quando 100% concluído';
$_ADMINLANG['wbteampro']['configfield']['action']['default_recurdays'] = 'Períodos de trabalho recorrentes padrão';
$_ADMINLANG['wbteampro']['configfield']['action']['default_recurdays-help'] = 'Dias de semana padrão para um resumo periódico semanal';
$_ADMINLANG['wbteampro']['configfield']['format']['projectDate'] = 'Data do projeto';
$_ADMINLANG['wbteampro']['configfield']['format']['projectDate-help'] = 'Data de criação, modificação, início e término do projeto';
$_ADMINLANG['wbteampro']['configfield']['format']['timelogDate'] = 'Data / Hora do Timelog';
$_ADMINLANG['wbteampro']['configfield']['format']['timelogDate-help'] = 'Datas de início e fim do Timelog';
$_ADMINLANG['wbteampro']['configfield']['format']['actionDate'] = 'Data da ação';
$_ADMINLANG['wbteampro']['configfield']['format']['actionDate-help'] = 'Acção criada, início e datas de fim';
$_ADMINLANG['wbteampro']['configfield']['format']['ticketDate'] = 'Data do Ticket';
$_ADMINLANG['wbteampro']['configfield']['format']['ticketDate-help'] = 'Data de Tickets criado e respostas';
$_ADMINLANG['wbteampro']['configfield']['format']['topicDate'] = 'Tópico Tópico Data / Hora';
$_ADMINLANG['wbteampro']['configfield']['format']['topicDate-help'] = 'Tópico Criado e Respondeu datas';
$_ADMINLANG['wbteampro']['configfield']['format']['topicPostDate'] = 'Tópico Data / Hora';
$_ADMINLANG['wbteampro']['configfield']['format']['topicPostDate-help'] = 'Data criada Tópico de mensagem';
$_ADMINLANG['wbteampro']['configfield']['format']['fileDate'] = 'Data / Hora do arquivo';
$_ADMINLANG['wbteampro']['configfield']['format']['fileDate-help'] = 'File Thread Created and Replied dates';
$_ADMINLANG['wbteampro']['configfield']['format']['filePostDate'] = 'Data / hora do arquivo';
$_ADMINLANG['wbteampro']['configfield']['format']['filePostDate-help'] = 'Data de criação do tópico da mensagem';

$_ADMINLANG['wbteampro']['configfield']['format']['jsDate'] = 'Filtar / Selecionar Formado Data';
$_ADMINLANG['wbteampro']['configfield']['format']['jsDate-help'] = 'Formato de data usado na lista de filtros & diálogo de seletor.';
$_ADMINLANG['wbteampro']['configfield']['format']['jsTime'] = 'Filtar / Selecionar Formado Hora';
$_ADMINLANG['wbteampro']['configfield']['format']['jsTime-help'] = 'Formato de hora usado na lista de filtros e diálogo do seletor.';

$_ADMINLANG['wbteampro']['configfield']['format']['adminName'] = 'Nome do ddministrador';
$_ADMINLANG['wbteampro']['configfield']['format']['adminName-help'] = 'Gerente / Atribuído Exibir e selecionar na lista';
$_ADMINLANG['wbteampro']['configfield']['format']['clientName'] = 'Nome do cliente';
$_ADMINLANG['wbteampro']['configfield']['format']['clientName-help'] = 'Exibição do cliente e lista de pesquisa';
$_ADMINLANG['wbteampro']['configfield']['format']['contactName'] = 'Nome de contato';
$_ADMINLANG['wbteampro']['configfield']['format']['contactName-help'] = 'Exibir e selecionar lista de contato';
$_ADMINLANG['wbteampro']['configfield']['format']['ajaxClientList'] = 'Ajax Pesquisa de clientes';
$_ADMINLANG['wbteampro']['configfield']['format']['ajaxClientList-help'] = 'Formato da lista de pesquisa dinâmica de clientes';
$_ADMINLANG['wbteampro']['configfield']['timelog']['timelog_type'] = 'Timelog Tipo(s)';
$_ADMINLANG['wbteampro']['configfield']['timelog']['timelog_type-help'] = 'Opções disponíveis do tipo timelog (uma por linha)';
$_ADMINLANG['wbteampro']['configfield']['billing']['hourly_rate'] = 'Taxa horária';
$_ADMINLANG['wbteampro']['configfield']['billing']['hourly_rate-help'] = 'Taxa de faturamento padrão por hora de entrada do timelog';
$_ADMINLANG['wbteampro']['configfield']['billing']['email_invoice'] = 'Enviar fatura';
$_ADMINLANG['wbteampro']['configfield']['billing']['email_invoice-help'] = 'Predefinição para opção de factura de cliente de e-mail após a criação';
$_ADMINLANG['wbteampro']['configfield']['billing']['tax_rate'] = 'Taxa de imposto';
$_ADMINLANG['wbteampro']['configfield']['billing']['tax_rate-help'] = 'Valor padrão a ser usado para taxa de imposto quando não definido pelo cliente';
$_ADMINLANG['wbteampro']['configfield']['billing']['apply_tax'] = 'Aplicar imposto';
$_ADMINLANG['wbteampro']['configfield']['billing']['apply_tax-help'] = 'Padrão para opção de marcar entradas para imposto';
$_ADMINLANG['wbteampro']['configfield']['billing']['apply_credits'] = 'Aplicar créditos';
$_ADMINLANG['wbteampro']['configfield']['billing']['apply_credits-help'] = 'Opção padrão para aplicar os créditos do cliente à fatura';
$_ADMINLANG['wbteampro']['configfield']['billing']['round_elapsed'] = 'Tempo Reduzido';
$_ADMINLANG['wbteampro']['configfield']['billing']['round_elapsed-help'] = 'Arredonda o valor para cima ou (-) até o minuto mais próximo';
$_ADMINLANG['wbteampro']['configfield']['billing']['desc_format'] = 'Formato do item da fatura'; // Deprecated
$_ADMINLANG['wbteampro']['configfield']['billing']['desc_format-help'] = 'Formato para descrições de itens de linha de faturamento'; // Deprecated
$_ADMINLANG['wbteampro']['configfield']['billing']['default_billable_status'] = 'Status de cobrança padrão';
$_ADMINLANG['wbteampro']['configfield']['billing']['default_billable_status-help'] = 'Valor padrão para novos projetos ou timelogs estrangeiros';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['clientsummary'] = 'Resumo do cliente';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['clientsummary-help'] = 'Formato para o resumo do tempo agrupado pelo cliente';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['projectsummary'] = 'Resumo do projeto';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['projectsummary-help'] = 'Formato para o resumo de tempo agrupado por projeto';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['actionsummary'] = 'Resumo da Ação';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['actionsummary-help'] = 'Formato para o resumo do tempo agrupado por ação';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['ticketsummary'] = 'Resumo do Ticket';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['ticketsummary-help'] = 'Formato para o resumo do tempo agrupado por Ticket';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['clientsubject'] = 'Registro de Timelog do cliente';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['clientsubject-help'] = 'Formato para um registro de timelog ligado a um cliente';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['projectsubject'] = 'Registro de Timelog do Projeto';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['projectsubject-help'] = 'Formato para um registro de timelog ligado a um projeto';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['actionsubject'] = 'Registro de Timelog de Ação';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['actionsubject-help'] = 'Formato para um registro de timelog vinculado a uma ação';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['ticketsubject'] = 'Ticket Timelog Record';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['ticketsubject-help'] = 'Formato para um registro de timelog ligado a um ticket';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['customfieldlist'] = 'Campos personalizados';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['customfieldlist-help'] = 'Dependendo das informações disponíveis para um item de linha, algumas ou todas as variáveis de campo a seguir podem ser usadas para personalizar a notação de nota utilizada na geração de itens de linha de faturamento.';

/************************************** Extension System */
$_ADMINLANG['wbteampro']['extensionlist']['type_plugin'] = 'Plugin';
$_ADMINLANG['wbteampro']['extensionlist']['type_module'] = 'Modulo';
$_ADMINLANG['wbteampro']['extensionlist']['zone_all'] = 'Tudo';
$_ADMINLANG['wbteampro']['extensionlist']['zone_client'] = 'Cliente';
$_ADMINLANG['wbteampro']['extensionlist']['zone_admin'] = 'Administrador';
$_ADMINLANG['wbteampro']['extensionlist']['new_module'] = 'Novo modulo';
$_ADMINLANG['wbteampro']['extensionlist']['install_plugin'] = 'Instalar Plugins';
$_ADMINLANG['wbteampro']['extensionfield']['type_plugin'] = 'Plugin';
$_ADMINLANG['wbteampro']['extensionfield']['extension_name'] = 'Nome da Instância';
$_ADMINLANG['wbteampro']['extensionfield']['extension_enabled'] = 'Habilitar';
$_ADMINLANG['wbteampro']['extensionfield']['extension_zone'] = 'Zona do sistema';
$_ADMINLANG['wbteampro']['extensionfield']['date_created'] = 'Instalado';
$_ADMINLANG['wbteampro']['extensionxml']['name'] = 'Nome';
$_ADMINLANG['wbteampro']['extensionxml']['version'] = 'Versão';
$_ADMINLANG['wbteampro']['extensionxml']['author'] = 'Autor';
$_ADMINLANG['wbteampro']['extensionxml']['created'] = 'Criado';
$_ADMINLANG['wbteampro']['extensionxml']['description'] = 'Descrição';

/************************************** Setup Update */
$_ADMINLANG['wbteampro']['setupupdate']['package_uptodate'] = 'Seu pacote <b>v%1$s</b> está atualizado.';
$_ADMINLANG['wbteampro']['setupupdate']['download_available'] = 'Atualizada <b>%1$s</b> pacote <b>v%2$s</b> Disponível para download! <br/> Você pode optar por instalar a atualização automaticamente ou fazer o download do pacote a ser instalado manualmente.<br/><br/>'
                                                              . '<button class="btn btn-primary" onclick="%3$s">Instalar atualização</button> ou <button class="btn" onclick="%4$s">Download</button>';

/************************************** License First Run */
$_ADMINLANG['wbteampro']['licenseform']['description'] = '<b>A chave de licença para sua instalação é inválida.</b><br/>Atualize as seguintes configurações para ativar sua instalação.';
$_ADMINLANG['wbteampro']['licenseform']['success'] = '<b>Licença instalada</b><br/>Sua chave de licença foi aplicada.';

/************************************** Widgets */
$_ADMINLANG['wbteampro']['widget']['projectactivity']['title'] = 'Atividade do Projeto wbTeamPro';
$_ADMINLANG['wbteampro']['widget']['projectactivity']['header'] = 'Atividade do Projeto';
$_ADMINLANG['wbteampro']['widget']['actions']['title'] = 'Ações wbTeamPro';
$_ADMINLANG['wbteampro']['widget']['actions']['header'] = 'Ações';
$_ADMINLANG['wbteampro']['widget']['topactions']['title'] = 'Principais ações avaliadas wbTeamPro';
$_ADMINLANG['wbteampro']['widget']['topactions']['header'] = 'Principais ações avaliadas';
$_ADMINLANG['wbteampro']['widget']['myactions']['title'] = 'Minha ações wbTeamPro';
$_ADMINLANG['wbteampro']['widget']['myactions']['header'] = 'Minha ações';
$_ADMINLANG['wbteampro']['widget']['touchedactions']['title'] = 'Ação de atividade wbTeamPro';
$_ADMINLANG['wbteampro']['widget']['touchedactions']['header'] = 'Ações com atividade recente';
$_ADMINLANG['wbteampro']['widget']['actionsannumreview']['title'] = 'Ação no Sumário wbTeamPro';
$_ADMINLANG['wbteampro']['widget']['actionsannumreview']['header'] = 'Ação no Sumário';
$_ADMINLANG['wbteampro']['widget']['timelogbiennium']['title'] = 'Bienal de Timelog wbTeamPro';
$_ADMINLANG['wbteampro']['widget']['timelogbiennium']['header'] = 'Bienal de Timelog';
$_ADMINLANG['wbteampro']['widget']['timelogactivity']['title'] = 'Atividade Timelog wbTeamPro';
$_ADMINLANG['wbteampro']['widget']['timelogactivity']['header'] = 'Atividade Timelog';
$_ADMINLANG['wbteampro']['widget']['fileactivity']['title'] = 'Atividade de arquivowbTeamPro';
$_ADMINLANG['wbteampro']['widget']['fileactivity']['header'] = 'Atividade de arquivo';
$_ADMINLANG['wbteampro']['widget']['topicactivity']['title'] = 'Atividade do tópico wbTeamPro ';
$_ADMINLANG['wbteampro']['widget']['topicactivity']['header'] = 'Atividade do tópico';
$_ADMINLANG['wbteampro']['widget']['topicfeed']['title'] = 'Feed do tópico wbTeamPro';
$_ADMINLANG['wbteampro']['widget']['topicfeed']['header'] = 'Feed do tópico';
$_ADMINLANG['wbteampro']['widget']['ticketactivity']['title'] = 'Atividade do tópico wbTeamPro';
$_ADMINLANG['wbteampro']['widget']['ticketactivity']['header'] = 'Atividade do tópico';

/************************************** QuickMenu */
$_ADMINLANG['wbteampro']['quickmenu']['delete_rows'] = 'Deletar linhas';
$_ADMINLANG['wbteampro']['quickmenu']['invoice_rows'] = 'Faturar linhas';
$_ADMINLANG['wbteampro']['quickmenu']['modify_rows'] = 'Modificar linhas';

// REMOVE ??
$_ADMINLANG['wbteampro']['quickmenu']['set_rows_billable'] = 'Marcar como faturado';
$_ADMINLANG['wbteampro']['quickmenu']['unset_rows_billable'] = 'Marcar como não faturado';

/************************************** Support Tickets Tab */
$_ADMINLANG['wbteampro']['supporttickets']['ticket_list'] = 'Tickets de projeto';
$_ADMINLANG['wbteampro']['supporttickets']['ticket_elapsed'] = 'Tempo decorrido do Ticket';
$_ADMINLANG['wbteampro']['supporttickets']['timelog_list'] = 'Ticket Timelogs';
$_ADMINLANG['wbteampro']['supporttickets']['file_list'] = 'Arquivos relacionados ao projeto';

/************************************** Select List Options */
$_ADMINLANG['wbteampro']['listoption']['yes'] = 'Sim';
$_ADMINLANG['wbteampro']['listoption']['no'] = 'Não';
$_ADMINLANG['wbteampro']['listoption']['blank'] = 'Em uma nova janela';
$_ADMINLANG['wbteampro']['listoption']['self'] = 'Na mesma janela';
$_ADMINLANG['wbteampro']['listoption']['top'] = 'Uma janela acima';
$_ADMINLANG['wbteampro']['listoption']['parent'] = 'Janela pai';
$_ADMINLANG['wbteampro']['listoption']['none'] = 'Sem confirmação';
$_ADMINLANG['wbteampro']['listoption']['prompt'] = 'Digite para confirmar';
$_ADMINLANG['wbteampro']['listoption']['confirm'] = 'Clique em OK para Confirmar';
$_ADMINLANG['wbteampro']['listoption']['action_priority']['1'] = 'Baixo';
$_ADMINLANG['wbteampro']['listoption']['action_priority']['2'] = 'Médio';
$_ADMINLANG['wbteampro']['listoption']['action_priority']['3'] = 'Alto';
$_ADMINLANG['wbteampro']['listoption']['level_class']['milestone'] = 'Milestone';
$_ADMINLANG['wbteampro']['listoption']['level_class']['group'] = 'Grupo';
$_ADMINLANG['wbteampro']['listoption']['level_class']['task'] = 'Tarefa';
$_ADMINLANG['wbteampro']['listoption']['recur_frequency']['none'] = 'Nenhum';
$_ADMINLANG['wbteampro']['listoption']['recur_frequency']['daily'] = 'Diariamente';
$_ADMINLANG['wbteampro']['listoption']['recur_frequency']['weekly'] = 'Semanal';
$_ADMINLANG['wbteampro']['listoption']['recur_frequency']['monthly'] = 'Por mês';
$_ADMINLANG['wbteampro']['listoption']['recur_frequency']['yearly'] = 'Anual';
$_ADMINLANG['wbteampro']['listoption']['date_start_offset']['today'] = 'Hoje';
$_ADMINLANG['wbteampro']['listoption']['date_start_offset']['tomorrow'] = 'Amanhã';
$_ADMINLANG['wbteampro']['listoption']['date_start_offset']['parent'] = 'Data de início dos pais';
$_ADMINLANG['wbteampro']['listoption']['date_start_offset']['lastsibling'] = 'Data de término';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['su'] = 'domingo';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['mo'] = 'segunda-feira';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['tu'] = 'terça-feira';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['we'] = 'quarta-feira';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['th'] = 'quinta-feira';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['fr'] = 'sexta-feira';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['sa'] = 'sábado';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['su'] = 'dom';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['mo'] = 'seg';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['tu'] = 'ter';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['we'] = 'qua';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['th'] = 'qui';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['fr'] = 'sex';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['sa'] = 'sab';
$_ADMINLANG['wbteampro']['listoption']['update_release']['beta'] = 'Beta';
$_ADMINLANG['wbteampro']['listoption']['update_release']['rc'] = 'Versão candidata';
$_ADMINLANG['wbteampro']['listoption']['update_release']['stable'] = 'Estável';
$_ADMINLANG['wbteampro']['listoption']['timelog_group_mode']['timelog'] = 'Timelog';
$_ADMINLANG['wbteampro']['listoption']['timelog_group_mode']['client'] = 'Cliente';
$_ADMINLANG['wbteampro']['listoption']['timelog_group_mode']['project'] = 'Projeto';
$_ADMINLANG['wbteampro']['listoption']['timelog_group_mode']['action'] = 'Ação';
$_ADMINLANG['wbteampro']['listoption']['timelog_group_mode']['ticket'] = 'Ticket';

/************************************** Dynamic Select List Options */
$_ADMINLANG['wbteampro']['listoption']['project_type']['internal'] = 'Interno';
$_ADMINLANG['wbteampro']['listoption']['project_type']['product'] = 'Produto';
$_ADMINLANG['wbteampro']['listoption']['project_type']['service'] = 'Serviço';
$_ADMINLANG['wbteampro']['listoption']['project_status']['service'] = 'Serviço';
$_ADMINLANG['wbteampro']['listoption']['project_status']['under_review'] = 'Em revisão';
$_ADMINLANG['wbteampro']['listoption']['project_status']['active'] = 'Ativo';
$_ADMINLANG['wbteampro']['listoption']['project_status']['in_production'] = 'Em produção';
$_ADMINLANG['wbteampro']['listoption']['project_status']['in_testing'] = 'Em testes';
$_ADMINLANG['wbteampro']['listoption']['project_status']['completed'] = 'Concluído';
$_ADMINLANG['wbteampro']['listoption']['project_status']['closed'] = 'Fechado';
$_ADMINLANG['wbteampro']['listoption']['action_type']['planning'] = 'Planejamento';
$_ADMINLANG['wbteampro']['listoption']['action_type']['research'] = 'Pesquisa';
$_ADMINLANG['wbteampro']['listoption']['action_type']['contact'] = 'Contato';
$_ADMINLANG['wbteampro']['listoption']['action_type']['service'] = 'Serviço';
$_ADMINLANG['wbteampro']['listoption']['action_type']['development'] = 'Desenvolvimento';
$_ADMINLANG['wbteampro']['listoption']['action_type']['review'] = 'Revisão';
$_ADMINLANG['wbteampro']['listoption']['action_status']['closed'] = 'Fechado';
$_ADMINLANG['wbteampro']['listoption']['action_status']['active'] = 'Ativo';
$_ADMINLANG['wbteampro']['listoption']['action_status']['progress'] = 'Progresso';
$_ADMINLANG['wbteampro']['listoption']['action_status']['cancelled'] = 'Cancelado';
$_ADMINLANG['wbteampro']['listoption']['action_status']['complete'] = 'Completo';
$_ADMINLANG['wbteampro']['listoption']['timelog_type']['standard'] = 'Padrão';
$_ADMINLANG['wbteampro']['listoption']['timelog_type']['in_house'] = 'Em casa';
$_ADMINLANG['wbteampro']['listoption']['timelog_type']['rush'] = 'Rush';
$_ADMINLANG['wbteampro']['listoption']['timelog_type']['emergency'] = 'Emergência';
$_ADMINLANG['wbteampro']['listoption']['insert_position']['first'] = 'Primeiro';
$_ADMINLANG['wbteampro']['listoption']['insert_position']['last'] = 'Último';

/** END LANGUAGE **/