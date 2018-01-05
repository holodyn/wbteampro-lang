<?php

/**

  Webuddha wbTeamPro
  (c)2010 Webuddha.com, The Holodyn Corporation - All Rights Reserved

  CHANGELOG ************
  v1.0.0 - Provided by A.R.

**/

defined('WHMCS_CLIENT') or die('Invalid Access');
include('english.php');

/************************************** Menu */
$_LANG['wbteampro_tab'] = 'My Projects';

/************************************** Errors */
$_LANG['wbteampro']['error']['default_label'] = 'Mensaje de Error';
$_LANG['wbteampro']['error']['license_error'] = 'Error de wbTeamPro: Autorización de Licencia Fallida';
$_LANG['wbteampro']['error']['license_invalid'] = 'Error de wbTeamPro: Clave de Licencia Inválida';
$_LANG['wbteampro']['error']['license_expired'] = 'Error de wbTeamPro: La Clave de Licencia Expiró';
$_LANG['wbteampro']['error']['license_suspended'] = 'Error de wbTeamPro: La Clave de Licencia está suspendida';
$_LANG['wbteampro']['error']['permissiondenied'] = 'Error de wbTeamPro: Permiso Denegado';
$_LANG['wbteampro']['error']['view_layout_not_found'] = 'Error de wbTeamPro: Vista Layout No Encontrada (%s)';

/************************************** Errors */
$_LANG['wbteampro']['alert']['default_label'] = 'Mensaje de Alerta';

/************************************** Notices */
$_LANG['wbteampro']['notice']['default_label'] = 'Mensaje de Aviso';
$_LANG['wbteampro']['notice']['noprojects'] = '<b>No hay Proyectos Activos!</b><br>No hay proyectos activos para ver';
$_LANG['wbteampro']['notice']['file_closed'] = '<b>Hilo de Archivo Cerrado</b><br>Este hilo ha sido cerrado y no puede ser modificado.';
$_LANG['wbteampro']['notice']['topic_closed'] = '<b>Hilo de Discusión Cerrado</b><br>Éste hilo ha sido cerrado y no puede ser modificado.';
$_LANG['wbteampro']['notice']['ticket_created'] = '<b>Ticket #%s Creado</b><br>Su ticket ha sido creado satisfactoriamente.';
$_LANG['wbteampro']['notice']['deprecated'] = '<b>Operación Deprecada</b><br>La solicitud que acaba de realizar no estará permitida en próximas versiones.';

/************************************** JS */
$_LANG['wbteampro']['js']['tabProject'] = 'Proyecto';
$_LANG['wbteampro']['js']['tabProjects'] = 'Proyectos';
$_LANG['wbteampro']['js']['tabTickets'] = 'Tickets';
$_LANG['wbteampro']['js']['loadMsg'] = 'Cargando... Por favor espere...';
$_LANG['wbteampro']['js']['noActiveLogs'] = 'No hay Registros de Tiempo Activos';
$_LANG['wbteampro']['js']['uiTimelogStart'] = 'Comenzar';
$_LANG['wbteampro']['js']['uiTimelogSave'] = 'Guardar';
$_LANG['wbteampro']['js']['uiTimelogCancel'] = 'Cancelar';
$_LANG['wbteampro']['js']['btnStopTimer'] = 'Detener Contador';
$_LANG['wbteampro']['js']['btnStartTimer'] = 'Comenzar Contador';
$_LANG['wbteampro']['js']['msgTimelogSaved'] = 'Registro de Tiempo Guardado para [time]';
$_LANG['wbteampro']['js']['msgTimelogStopped'] = 'Registro de Tiempo Detenido luego de [time]';
$_LANG['wbteampro']['js']['deleteConfirm'] = 'Haga Click en OK para confirmar la acción';
$_LANG['wbteampro']['js']['deletePrompt'] = 'Escribar ELIMINAR para confirmar la acción';
$_LANG['wbteampro']['js']['deleteAnswer'] = 'ELIMINAR';
$_LANG['wbteampro']['js']['deleteCancelled'] = 'Borrado Cancelado';
$_LANG['wbteampro']['js']['textLimitRemain'] = '[remain] de [limit] caracteres restantes';
$_LANG['wbteampro']['js']['textLimitReached'] = 'máximo de [limit] caracteres alcanzados';

/************************************** Page Headers */
$_LANG['wbteampro']['taskheader']['prefix'] = 'Mis Proyectos: ';
$_LANG['wbteampro']['taskheader']['project_action_list'] = 'Acciones del Proyecto';
$_LANG['wbteampro']['taskheader']['project_ticket_list'] = 'Tickets del Proyecto';
$_LANG['wbteampro']['taskheader']['project_file_list'] = 'Archivos del Proyecto';
$_LANG['wbteampro']['taskheader']['project_topic_list'] = 'Discusiones del Proyecto';
$_LANG['wbteampro']['taskheader']['project_list'] = 'Todos los Proyectos';
$_LANG['wbteampro']['taskheader']['action_list'] = 'Todas las Acciones del Proyecto';
$_LANG['wbteampro']['taskheader']['file_list'] = 'Todos los Archivos del Proyecto';
$_LANG['wbteampro']['taskheader']['topic_list'] = 'Todos los Temas del Proyecto';
$_LANG['wbteampro']['taskheader']['ticket_list'] = 'Todos los Tickets del Proyecto';
$_LANG['wbteampro']['taskheader']['dashboard'] = 'Panel del Proyecto';
$_LANG['wbteampro']['taskheader']['ticket_create'] = 'Crear un Nuevo Ticket';

/************************************** Client Profile Tabs */
$_LANG['wbteampro']['profiletab']['projects'] = 'Proyectos';
$_LANG['wbteampro']['profiletab']['actions'] = 'Acciones';
$_LANG['wbteampro']['profiletab']['timelog'] = 'Registro de Tiempo';
$_LANG['wbteampro']['profiletab']['tickets'] = 'Tickets';

/************************************** Project Tabs */
$_LANG['wbteampro']['projecttab']['details'] = 'Detalles';
$_LANG['wbteampro']['projecttab']['actions'] = 'Acciones';
$_LANG['wbteampro']['projecttab']['tickets'] = 'Tickets';
$_LANG['wbteampro']['projecttab']['files'] = 'Archivos';
$_LANG['wbteampro']['projecttab']['filesview'] = 'Vista de Archivo';
$_LANG['wbteampro']['projecttab']['topics'] = 'Discusiones';
$_LANG['wbteampro']['projecttab']['topicsview'] = 'Vista de Discusión';

/************************************** Project Fields */
$_LANG['wbteampro']['projectfield']['name'] = 'Nombre de Proyecto';
$_LANG['wbteampro']['projectfield']['client'] = 'Cliente';
$_LANG['wbteampro']['projectfield']['type'] = 'Tipo';
$_LANG['wbteampro']['projectfield']['contact'] = 'Contacto del Cliente';
$_LANG['wbteampro']['projectfield']['status'] = 'Estado';
$_LANG['wbteampro']['projectfield']['status'] = 'Estado';
$_LANG['wbteampro']['projectfield']['managedby'] = 'A cargo de';
$_LANG['wbteampro']['projectfield']['visiblestatus'] = 'Estado Visible';
$_LANG['wbteampro']['projectfield']['assignedto'] = 'Asignado a';
$_LANG['wbteampro']['projectfield']['datestart'] = 'Fecha de Comienzo';
$_LANG['wbteampro']['projectfield']['datefinish'] = 'Fecha de Finalización';
$_LANG['wbteampro']['projectfield']['details'] = 'Notas / Detalles';
$_LANG['wbteampro']['projectfield']['created'] = 'Creado';
$_LANG['wbteampro']['projectfield']['reviewed'] = 'Revisado';
$_LANG['wbteampro']['projectfield']['modified'] = 'Modificado';
$_LANG['wbteampro']['projectfield']['completed'] = 'Completado';
$_LANG['wbteampro']['projectfield']['sfcompleted'] = '%1$s de %2$s Acciones, %3$s Meta, %4$s Grupo, %5$s Tarea';

/************************************** File Fields */
$_LANG['wbteampro']['filelist']['newthread'] = 'Nuevo Hilo';
$_LANG['wbteampro']['filelist']['deletethread'] = 'Eliminar Hilo';
$_LANG['wbteampro']['filelist']['by'] = 'por';
$_LANG['wbteampro']['filelist']['on'] = 'en';
$_LANG['wbteampro']['filelist']['expanddetail'] = 'Cambiar Vista';
$_LANG['wbteampro']['filefield']['label'] = 'Etiqueta';
$_LANG['wbteampro']['filefield']['version'] = 'Ver';
$_LANG['wbteampro']['filefield']['file'] = 'Archivo';
$_LANG['wbteampro']['filefield']['mime'] = 'Mime';
$_LANG['wbteampro']['filefield']['size'] = 'Tamaño';
$_LANG['wbteampro']['filefield']['detail'] = 'Detalle';
$_LANG['wbteampro']['filefield']['upload'] = 'Cargar';

/************************************** Ticket Fields */
$_LANG['wbteampro']['ticketlist']['newticket'] = 'Nuevo Ticket';
$_LANG['wbteampro']['ticketfield']['project'] = 'Proyecto';
$_LANG['wbteampro']['ticketfield']['deptid'] = 'Departamento';
$_LANG['wbteampro']['ticketfield']['priority'] = 'Prioridad';
$_LANG['wbteampro']['ticketfield']['subject'] = 'Asunto';
$_LANG['wbteampro']['ticketfield']['message'] = 'Mensaje';
$_LANG['wbteampro']['ticketfield']['attachments'] = 'Adjuntos';
$_LANG['wbteampro']['ticketfield']['allowedfiletypes'] = 'Extensiones de Archivos Permitidas';

/************************************** Ticket Priority */
$_LANG['wbteampro']['ticket']['priority']['low'] = 'Baja';
$_LANG['wbteampro']['ticket']['priority']['medium'] = 'Normal';
$_LANG['wbteampro']['ticket']['priority']['high'] = 'Alta';

/************************************** Topic Fields */
$_LANG['wbteampro']['topiclist']['newthread'] = 'Nuevo Hilo';
$_LANG['wbteampro']['topiclist']['deletethread'] = 'Eliminar Hilo';
$_LANG['wbteampro']['topiclist']['by'] = 'por';
$_LANG['wbteampro']['topiclist']['on'] = 'en';
$_LANG['wbteampro']['topicfield']['title'] = 'Titulo';
$_LANG['wbteampro']['topicfield']['detail'] = 'Detalle';
$_LANG['wbteampro']['topiclist']['expanddetail'] = 'Cambiar Vista';

/************************************** Action Fields */
$_LANG['wbteampro']['actionlist']['dispmode'] = 'Display Mode:';
$_LANG['wbteampro']['actionlist']['listview'] = 'Vista de Lista';
$_LANG['wbteampro']['actionlist']['treeview'] = 'Vista de Arbol';
$_LANG['wbteampro']['actionlist']['ganttview'] = 'Vista de Gantt';
$_LANG['wbteampro']['actionlist']['listcollapse'] = 'Esconder TODOS Nodos';
$_LANG['wbteampro']['actionlist']['listexpand'] = 'Desplegar TODOS los Nodos';
$_LANG['wbteampro']['actionlist']['addchild'] = 'Agregar Hijo';
$_LANG['wbteampro']['actionlist']['stoptimer'] = 'Detener Contador';
$_LANG['wbteampro']['actionlist']['starttimer'] = 'Comenzar Contador';
$_LANG['wbteampro']['actionlist']['viewlog'] = 'Ver Registro';
$_LANG['wbteampro']['actionlist']['delete'] = 'Eliminar';
$_LANG['wbteampro']['actionlist']['totalcomplete'] = 'Proyecto Completado';
$_LANG['wbteampro']['actionlist']['totalelapsed'] = 'Total Transcurrido';
$_LANG['wbteampro']['actionfield']['name'] = 'Nombre';
$_LANG['wbteampro']['actionfield']['complete'] = '% Completado';
$_LANG['wbteampro']['actionfield']['type'] = 'Tipo';
$_LANG['wbteampro']['actionfield']['datestart'] = 'Fecha de Comienzo';
$_LANG['wbteampro']['actionfield']['status'] = 'Estado';
$_LANG['wbteampro']['actionfield']['datefinish'] = 'Fecha de Finalización';
$_LANG['wbteampro']['actionfield']['client'] = 'Cliente';
$_LANG['wbteampro']['actionfield']['managedby'] = 'A cargo de';
$_LANG['wbteampro']['actionfield']['maincontact'] = 'Contacto Principal';
$_LANG['wbteampro']['actionfield']['assignedto'] = 'Asignado a';
$_LANG['wbteampro']['actionfield']['detail'] = 'Detalle';
$_LANG['wbteampro']['actionfield']['created'] = 'Creado';
$_LANG['wbteampro']['actionfield']['activity'] = 'Actividad';
$_LANG['wbteampro']['actionfield']['modified'] = 'Modificado';
$_LANG['wbteampro']['actionfield']['parentaction'] = 'Acción Predecesora';

/************************************** Timelog Fields */
$_LANG['wbteampro']['timeloglist']['totalelapsed'] = 'Total Transcurrido';
$_LANG['wbteampro']['timelogfield']['note'] = 'Nota';
$_LANG['wbteampro']['timelogfield']['datestart'] = 'Fecha de Comienzo';
$_LANG['wbteampro']['timelogfield']['datestop'] = 'Fecha de Parada';
$_LANG['wbteampro']['timelogfield']['owner'] = 'Propietario';
$_LANG['wbteampro']['timelogfield']['elapsed'] = 'Tiempo Transcurrido';

/************************************** Timelog */
$_LANG['wbteampro']['timelog']['emptynote'] = '~';
$_LANG['wbteampro']['timelog']['status']['active'] = 'Activo';
$_LANG['wbteampro']['timelog']['status']['complete'] = 'Completado';
$_LANG['wbteampro']['timelog']['elapsed']['all'] = 'Todo el Tiempo Registrado';
$_LANG['wbteampro']['timelog']['elapsed']['my'] = 'Mi Tiempo Registrado';

/************************************** Page/List Navigation */
$_LANG['wbteampro']['filter']['tablabel'] = $_LANG['searchfilter'];
$_LANG['wbteampro']['filter']['any'] = '- Cualquiera -';
$_LANG['wbteampro']['filter']['none'] = $_LANG['none'];
$_LANG['wbteampro']['filter']['search'] = 'Buscar';
$_LANG['wbteampro']['filter']['owner'] = 'Propietario';
$_LANG['wbteampro']['filter']['project'] = 'Proyect';
$_LANG['wbteampro']['filter']['status'] = 'Estado';
$_LANG['wbteampro']['filter']['client'] = 'Cliente';
$_LANG['wbteampro']['filter']['department'] = 'Departmento';
$_LANG['wbteampro']['filter']['manager'] = 'Manager';
$_LANG['wbteampro']['filter']['assigned'] = 'Asignado';
$_LANG['wbteampro']['filter']['type'] = 'Tipo';
$_LANG['wbteampro']['filter']['level'] = 'Nivel';
$_LANG['wbteampro']['filter']['flagged'] = 'Marcado';
$_LANG['wbteampro']['filter']['rangestart'] = 'Comenado Después de';
$_LANG['wbteampro']['filter']['rangestop'] = 'Comenzado Antes de';
$_LANG['wbteampro']['filter']['root'] = 'Nivel de Root';
$_LANG['wbteampro']['filter']['reset'] = 'Reiniciar';

/************************************** Page/List Navigation */
$_LANG['wbteampro']['pagenav']['report'] = '%s '.$_LANG['recordsfound'].', '.$_LANG['page'].' %s '.$_LANG['pageof'].' %s';
$_LANG['wbteampro']['pagenav']['prev'] = '&laquo; '.$_LANG['previouspage'];
$_LANG['wbteampro']['pagenav']['next'] = $_LANG['nextpage'].' &raquo;';
$_LANG['wbteampro']['pagenav']['empty'] = $_LANG['norecordsfound'];
$_LANG['wbteampro']['pagenav']['jumpto'] = 'Saltar a la Página';
$_LANG['wbteampro']['pagenav']['limit'] = 'Limit';
$_LANG['wbteampro']['pagenav']['go'] = $_LANG['go'];
$_LANG['wbteampro']['pagenav']['export'] = 'Exportar';
$_LANG['wbteampro']['pagenav']['print'] = 'Imprimir';
$_LANG['wbteampro']['pagenav']['orderby'] = 'Ordenar por %1$s'; // %1$s = Field, %2$s = Direction

/************************************** Form Button Labels */
$_LANG['wbteampro']['formnav']['edit'] = 'Editar';
$_LANG['wbteampro']['formnav']['save'] = 'Guardar';
$_LANG['wbteampro']['formnav']['apply'] = 'Aplicar';
$_LANG['wbteampro']['formnav']['close'] = 'Cerrar';
$_LANG['wbteampro']['formnav']['cancel'] = 'Cancelar';
$_LANG['wbteampro']['formnav']['delete'] = 'Eliminar';
$_LANG['wbteampro']['formnav']['download'] = 'Descargar';
$_LANG['wbteampro']['formnav']['timestart'] = 'Comenzar Contador';
$_LANG['wbteampro']['formnav']['timestop'] = 'Detener Contador';

/************************************** Dashboard Blocks */
$_LANG['wbteampro']['dashhead']['viewall'] = 'Ver Todos';
$_LANG['wbteampro']['dashhead']['topProjects'] = 'Proyecto con Actividad Reciente';
$_LANG['wbteampro']['dashhead']['topActions'] = 'Acciones más Urgentes';
$_LANG['wbteampro']['dashhead']['topTimelog'] = 'Registro de Actividad Reciente';
$_LANG['wbteampro']['dashhead']['topTickets'] = 'Actividad de Tickets del Proyecto';
$_LANG['wbteampro']['dashhead']['topTopics'] = 'Actividad de Temas del Proyecto';
$_LANG['wbteampro']['dashhead']['topFiles'] = 'Actividad de Archivos del Proyecto';

/************************************** List Table Headers */
$_LANG['wbteampro']['listhead']['project_name'] = 'Nombre del Proyecto';
$_LANG['wbteampro']['listhead']['project_type'] = 'Tupo';
$_LANG['wbteampro']['listhead']['project_status'] = 'Estado';
$_LANG['wbteampro']['listhead']['project_complete'] = '%';
$_LANG['wbteampro']['listhead']['project_tasks'] = '#';
$_LANG['wbteampro']['listhead']['date_created'] = 'Creado';
$_LANG['wbteampro']['listhead']['date_modified'] = 'Modificado';
$_LANG['wbteampro']['listhead']['date_activity'] = 'Actividad';
$_LANG['wbteampro']['listhead']['date_start'] = 'Start';
$_LANG['wbteampro']['listhead']['date_finish'] = 'Due';
$_LANG['wbteampro']['listhead']['client_userid'] = 'Cliente';
$_LANG['wbteampro']['listhead']['owner_adminid'] = 'Propietario';
$_LANG['wbteampro']['listhead']['manager_adminid'] = 'Manager';
$_LANG['wbteampro']['listhead']['assigned_adminid'] = 'Asignado';
$_LANG['wbteampro']['listhead']['action_name'] = 'Nombre de Acción';
$_LANG['wbteampro']['listhead']['action_type'] = 'Tipo';
$_LANG['wbteampro']['listhead']['action_status'] = 'Estado';
$_LANG['wbteampro']['listhead']['action_complete'] = '%';
$_LANG['wbteampro']['listhead']['action_elapsed'] = 'Transcurrido';
$_LANG['wbteampro']['listhead']['annual_activity'] = 'Actividad Anual';
$_LANG['wbteampro']['listhead']['timelog_note'] = 'Timelog Note';
$_LANG['wbteampro']['listhead']['timelog_elapsed'] = 'Transcurrido';
$_LANG['wbteampro']['listhead']['timelog_start'] = 'Started';
$_LANG['wbteampro']['listhead']['timelog_status'] = 'Estado';
$_LANG['wbteampro']['listhead']['topic_name'] = 'Hilo de la Discusión';
$_LANG['wbteampro']['listhead']['topic_activity'] = 'Actividad';
$_LANG['wbteampro']['listhead']['topic_posts'] = 'Posts';
$_LANG['wbteampro']['listhead']['ticket_title'] = 'Titulo del Ticket';
$_LANG['wbteampro']['listhead']['ticket_lastreply'] = 'Actividad';
$_LANG['wbteampro']['listhead']['ticket_date'] = 'Submitted';
$_LANG['wbteampro']['listhead']['ticket_submitter'] = 'Remitente';
$_LANG['wbteampro']['listhead']['ticket_department'] = 'Departmento';
$_LANG['wbteampro']['listhead']['ticket_status'] = 'Estado';
$_LANG['wbteampro']['listhead']['ticket_urgency'] = 'Urgencia';
$_LANG['wbteampro']['listhead']['file_label'] = 'Hilo de Archivo';
$_LANG['wbteampro']['listhead']['file_latest'] = 'Último Archivo';
$_LANG['wbteampro']['listhead']['file_total'] = 'Archivos';

/************************************** Navigation Breadcrumbs */
$_LANG['wbteampro']['breadcrumb']['wbteampro'] = 'Mis Proyectos';
$_LANG['wbteampro']['breadcrumb']['project_list'] = 'Listar Proyectos';
$_LANG['wbteampro']['breadcrumb']['action_list'] = 'Listar Acciones';
$_LANG['wbteampro']['breadcrumb']['file_list'] = 'Listar Archivos';
$_LANG['wbteampro']['breadcrumb']['topic_list'] = 'Listar Temas';

/************************************** Dynamic Select List Options */
$_LANG['wbteampro']['listoption']['project_type']['internal'] = 'Interno';
$_LANG['wbteampro']['listoption']['project_type']['product'] = 'Producto';
$_LANG['wbteampro']['listoption']['project_type']['service'] = 'Servicio';
$_LANG['wbteampro']['listoption']['project_status']['service'] = 'Servicio';
$_LANG['wbteampro']['listoption']['project_status']['under_review'] = 'En Revisión';
$_LANG['wbteampro']['listoption']['project_status']['active'] = 'Activo';
$_LANG['wbteampro']['listoption']['project_status']['in_production'] = 'En Producción';
$_LANG['wbteampro']['listoption']['project_status']['in_testing'] = 'En Pruebas';
$_LANG['wbteampro']['listoption']['project_status']['completed'] = 'Completado';
$_LANG['wbteampro']['listoption']['project_status']['closed'] = 'Cerrado';
$_LANG['wbteampro']['listoption']['action_type']['planning'] = 'En Planificación';
$_LANG['wbteampro']['listoption']['action_type']['research'] = 'Investigación';
$_LANG['wbteampro']['listoption']['action_type']['contact'] = 'Contacto';
$_LANG['wbteampro']['listoption']['action_type']['service'] = 'Servicio';
$_LANG['wbteampro']['listoption']['action_type']['development'] = 'Desarrollo';
$_LANG['wbteampro']['listoption']['action_type']['review'] = 'Revisión';
$_LANG['wbteampro']['listoption']['action_status']['closed'] = 'Cerrado';
$_LANG['wbteampro']['listoption']['action_status']['active'] = 'Activo';
$_LANG['wbteampro']['listoption']['action_status']['progress'] = 'Progreso';
$_LANG['wbteampro']['listoption']['action_status']['cancelled'] = 'Cancelado';
$_LANG['wbteampro']['listoption']['action_status']['complete'] = 'Completado';

/** END LANGUAGE **/
