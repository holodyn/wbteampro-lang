<?php

/**

  Webuddha wbTeamPro
  (c)2010 Webuddha.com, The Holodyn Corporation - All Rights Reserved

  CHANGELOG ************
  v1.0.0 - Provided by A.R.

**/

defined('WHMCS_ADMIN') or die('Invalid Access');
include('english.php');

/************************************** Errors */
$_ADMINLANG['wbteampro']['error']['default_label'] = 'Mensaje de Error';
$_ADMINLANG['wbteampro']['error']['license_error'] = 'Error de wbTeamPro: Autorización de Licencia Fallida';
$_ADMINLANG['wbteampro']['error']['license_invalid'] = 'Error de wbTeamPro: Clave de Licencia Inválida';
$_ADMINLANG['wbteampro']['error']['license_expired'] = 'Error de wbTeamPro: La Clave de Licencia Expiró';
$_ADMINLANG['wbteampro']['error']['license_suspended'] = 'Error de wbTeamPro: La Clave de Licencia está suspendida';
$_ADMINLANG['wbteampro']['error']['change_error'] = '<b>Error al Guardar los Cambios!</b><br/>Sus cambios NO han sido guardados.';
$_ADMINLANG['wbteampro']['error']['permissiondenied'] = 'Permiso Denegado';
$_ADMINLANG['wbteampro']['error']['invalidroleid'] = 'Su Rol de Administración No Tiene Permitido Acceder a wbTeamPro';
$_ADMINLANG['wbteampro']['error']['invalidrequest'] = 'Solicitud Inválida o Formato Incorrecto';
$_ADMINLANG['wbteampro']['error']['project_file_path_invalid'] = '<b>Ruta de Archivo Inválida!</b><br>La ruta definida del Archivo del Proyecto NO es un directorio válido.';
$_ADMINLANG['wbteampro']['error']['project_file_path_locked'] = '<b>La Ruta del Archivo no es Editable!</b><br>La ruta definida del Archivo del Proyecto NO es editable.';
$_ADMINLANG['wbteampro']['error']['system_tmp_path_invalid'] = '<b>Ruta de Archivo Inválida</b><br>La Ruta Temporal del sistema NO es un directorio válido.';
$_ADMINLANG['wbteampro']['error']['system_tmp_path_locked'] = '<b>Ruta de Archivo No editable!</b><br>The System Temp Path defined is NOT writable.';
$_ADMINLANG['wbteampro']['error']['plugin_loaderror'] = '<b>Error de Plugin!</b><br>Error loading the Plugin Object from from.';
$_ADMINLANG['wbteampro']['error']['plugin_protected'] = '<b> Error de Plugin!</b><br> Error al modificar el plugin protegido.';
$_ADMINLANG['wbteampro']['error']['keeping_project_type'] = 'El/Los tipo "%s" de proyecto esta actualmente en uso y no puede ser removido';
$_ADMINLANG['wbteampro']['error']['keeping_project_status'] = 'El/Los estado "%s" de proyecto esta actualmente en uso y no puede ser removido';
$_ADMINLANG['wbteampro']['error']['keeping_action_type'] = 'El/Los tipo "%s" de acción esta actualmente en uso y no puede ser removido';
$_ADMINLANG['wbteampro']['error']['keeping_action_status'] = 'El/Los estado "%s" de acción esta actualmente en uso y no puede ser removido';
$_ADMINLANG['wbteampro']['error']['keeping_timelog_type'] = 'El/Los tipo "%s" de registro de tiempos esta actualmente en uso y no puede ser removido';
$_ADMINLANG['wbteampro']['error']['record_notfound'] = 'Registro no encontrado';
$_ADMINLANG['wbteampro']['error']['record_undefined'] = 'Registro Indefinido';
$_ADMINLANG['wbteampro']['error']['record_updatefailed'] = 'Error al Actualizar el/los Registro(s)';
$_ADMINLANG['wbteampro']['error']['record_incomplete'] = "No se facilitaron los datos necesarios";
$_ADMINLANG['wbteampro']['error']['record_invalidvalue'] = 'El valor proporcionado para %s no es válido o no se permite.';
$_ADMINLANG['wbteampro']['error']['update_check_failed'] = 'No se pudo recuperar el estado de la actualización desde el servidor remoto.';
$_ADMINLANG['wbteampro']['error']['update_failed'] = '<b>La actualización falló </b><br>Un error fatal ha interrumpido la operación de actualización.<br>Por favor rever el ingreso y corregir cualquier problema antes de intentar nuevamente.';
$_ADMINLANG['wbteampro']['error']['view_layout_not_found'] = 'wbTeamPro Error: Vista de Layout no Encontrada (%s)';

/************************************** Alerts */
$_ADMINLANG['wbteampro']['alert']['default_label'] = 'Alert Message';
$_ADMINLANG['wbteampro']['alert']['project_created'] = '<b>New Project Created</b><br>Your new project has been created.  You can now create the Action Tree.';
$_ADMINLANG['wbteampro']['alert']['batch_success'] = '<b>Updates Successful</b><br>The updates have been applied the the selected records successfully!';
$_ADMINLANG['wbteampro']['alert']['change_success'] = '<b>Changes Saved</b><br>The changes made to the previous record have been saved.';
$_ADMINLANG['wbteampro']['alert']['delete_success'] = '<b>Record Deleted</b><br>The record has been successfully deleted.';
$_ADMINLANG['wbteampro']['alert']['close_success'] = '<b>Record Closed</b><br>You have successfully closed the previous record.';
$_ADMINLANG['wbteampro']['alert']['copy_success'] = '<b>Copy Success</b><br>The project has been copied successfully.';
$_ADMINLANG['wbteampro']['alert']['update_success'] = '<b>Update Success</b><br>The updated package has been installed successfully!';

/************************************** Notices */
$_ADMINLANG['wbteampro']['notice']['default_label'] = 'Aviso de Mensaje';
$_ADMINLANG['wbteampro']['notice']['superadmin'] = 'Super Admin de Proyecto';
$_ADMINLANG['wbteampro']['notice']['editing_templateproject'] = '<b>Template Notice</b><br>You are Editing a Project Template.';
$_ADMINLANG['wbteampro']['notice']['editing_archiveproject'] = '<b>Archive Notice</b><br>You are <u>Viewing</u> a Project Archive and cannot make changes.';
$_ADMINLANG['wbteampro']['notice']['server_timezone_na'] = '<b>Server Timezone Undefined!</b><br>You have not specified a Time Zone. Date Accuracy may be affected.';
$_ADMINLANG['wbteampro']['notice']['action_cancelled'] = '<b>Action Cancelled</b><br>You have cancelled the previous action.';
$_ADMINLANG['wbteampro']['notice']['plugin_installed'] = '<b>New Plugin Results</b><br>%1$s plugins found, %2$s installed, %3$s failed.';
$_ADMINLANG['wbteampro']['notice']['file_closed'] = '<b>File Thread Closed</b><br>Please Open this thread to make changes.';
$_ADMINLANG['wbteampro']['notice']['topic_closed'] = '<b>Discussion Thread Closed</b><br>Please Open this thread to make changes.';
$_ADMINLANG['wbteampro']['notice']['update_started'] = 'Your update has been started. Do NOT reload this page until the process has been completed.';
$_ADMINLANG['wbteampro']['notice']['update_backup_first'] = 'Make sure to BACKUP your MySQL Database and WHMCS Filesystem before you perform an automatic upgrade.';
$_ADMINLANG['wbteampro']['notice']['deprecated'] = '<b>Deprecated Operation</b><br>The request you have made will not be available in future versions.';
$_ADMINLANG['wbteampro']['notice']['plugin_protected'] = '<b>Protection Notice!</b><br>This plugin is protected and cannot be disabled.';

/************************************** Graph */
$_ADMINLANG['wbteampro']['graph']['label_projectsummary'] = 'Comparación de la actividad del proyecto';
$_ADMINLANG['wbteampro']['graph']['label_timelogtwoyearsummary'] = 'Resumen de las horas totales registradas';

/************************************** Menu */
$_ADMINLANG['wbteampro']['menu']['projectmanager'] = 'Gerente de proyecto';
$_ADMINLANG['wbteampro']['menu']['tablabel'] = 'Proyecto';
$_ADMINLANG['wbteampro']['menu']['viewall'] = 'Ver todo';
$_ADMINLANG['wbteampro']['menu']['dashboard'] = 'Tablero de Control';
$_ADMINLANG['wbteampro']['menu']['projects'] = "Proyectos";
$_ADMINLANG['wbteampro']['menu']['assignedprojects'] = 'Proyectos Asignados';
$_ADMINLANG['wbteampro']['menu']['myprojects'] = 'Mis proyectos';
$_ADMINLANG['wbteampro']['menu']['newproject'] = 'Nuevo proyecto';
$_ADMINLANG['wbteampro']['menu']['actions'] = 'Acciones';
$_ADMINLANG['wbteampro']['menu']['incompletetasks'] = 'Tareas incompletas';
$_ADMINLANG['wbteampro']['menu']['assignedtasks'] = 'Tareas asignadas';
$_ADMINLANG['wbteampro']['menu']['myactions'] = 'Mis acciones';
$_ADMINLANG['wbteampro']['menu']['files'] = 'Archivos';
$_ADMINLANG['wbteampro']['menu']['myfiles'] = 'Mis archivos';
$_ADMINLANG['wbteampro']['menu']['discussions'] = 'Discusiones';
$_ADMINLANG['wbteampro']['menu']['mydiscussions'] = 'Mis discusiones';
$_ADMINLANG['wbteampro']['menu']['tickets'] = 'Tickets';
$_ADMINLANG['wbteampro']['menu']['mytickets'] = 'Mis Tickets';
$_ADMINLANG['wbteampro']['menu']['timelog'] = 'Registro de Tiempos';
$_ADMINLANG['wbteampro']['menu']['mytimelog'] = 'Mis Registros de Tiempos';
$_ADMINLANG['wbteampro']['menu']['setupmanager'] = 'Administrador del Sistema';
$_ADMINLANG['wbteampro']['menu']['archivedprojects'] = 'Proyectos Archivados';
$_ADMINLANG['wbteampro']['menu']['templateprojects'] = 'Plantillas de Proyectos';
$_ADMINLANG['wbteampro']['menu']['system'] = 'Sistema';
$_ADMINLANG['wbteampro']['menu']['setup_config'] = 'Configuración';
$_ADMINLANG['wbteampro']['menu']['setup_update'] = 'Buscar actualizaciones';
$_ADMINLANG['wbteampro']['menu']['setup_update_avail'] = 'Actualización lista';
$_ADMINLANG['wbteampro']['menu']['setup_plugins'] = 'Administrar Plugins';
$_ADMINLANG['wbteampro']['menu']['support'] = 'Ayuda & Soporte';

/************************************** JS */
$_ADMINLANG['wbteampro']['js']['tabProject'] = 'Proyecto';
$_ADMINLANG['wbteampro']['js']['tabProjects'] = 'Proyectos';
$_ADMINLANG['wbteampro']['js']['tabTickets'] = 'Tickets';
$_ADMINLANG['wbteampro']['js']['loadMsg'] = 'Cargando... Por favor Espere...';
$_ADMINLANG['wbteampro']['js']['titleActiveLogs'] = 'Sus Registros de Tiempo Activos';
$_ADMINLANG['wbteampro']['js']['noActiveLogs'] = 'No hay Registros de Tiempo Activos';
$_ADMINLANG['wbteampro']['js']['reqComplete'] = 'Solicitud Completa';
$_ADMINLANG['wbteampro']['js']['uiTimelogStart'] = 'Comenzar';
$_ADMINLANG['wbteampro']['js']['uiTimelogSave'] = 'Guardar';
$_ADMINLANG['wbteampro']['js']['uiTimelogCancel'] = 'Cancelar';
$_ADMINLANG['wbteampro']['js']['uiTicketCreate'] = 'Crear';
$_ADMINLANG['wbteampro']['js']['uiTicketCreateOpen'] = 'Crear & Abrir';
$_ADMINLANG['wbteampro']['js']['uiTicketCancel'] = 'Cancelar';
$_ADMINLANG['wbteampro']['js']['btnStartTimer'] = 'Comenzar Temporizador';
$_ADMINLANG['wbteampro']['js']['btnStopTimer'] = 'Finalizar Temporizador';
$_ADMINLANG['wbteampro']['js']['btnViewAll'] = 'Ver Todo';
$_ADMINLANG['wbteampro']['js']['btnCreate'] = 'Crear';
$_ADMINLANG['wbteampro']['js']['msgTimelogSaved'] = 'Registro de Tiempos Guardado para [tiempo]';
$_ADMINLANG['wbteampro']['js']['msgTimelogStopped'] = 'Registro de Tiempos Detenido después de [tiempo]';
$_ADMINLANG['wbteampro']['js']['deleteConfirm'] = 'Seleccione Aceptar para confirmar la acción';
$_ADMINLANG['wbteampro']['js']['deletePrompt'] = 'Escriba ELIMINAR para confirmar su acción';
$_ADMINLANG['wbteampro']['js']['deleteAnswer'] = 'ELIMINAR';
$_ADMINLANG['wbteampro']['js']['deleteCancelled'] = 'Eliminar cancelado';
$_ADMINLANG['wbteampro']['js']['textLimitRemain'] = '[Permanecen] de [límite] los caracteres permanecen';
$_ADMINLANG['wbteampro']['js']['textLimitReached'] = 'Máximo [límite] de caracteres alcanzados';
$_ADMINLANG['wbteampro']['js']['copyPrompt'] = 'Escriba COPIAR para confirmar su acción';
$_ADMINLANG['wbteampro']['js']['copyAnswer'] = 'COPIAR';
$_ADMINLANG['wbteampro']['js']['copyCancelled'] = 'Copia cancelada';
$_ADMINLANG['wbteampro']['js']['ajaxSearchInput'] = 'escribe para buscar...';
$_ADMINLANG['wbteampro']['js']['rruleOccurDaily'] = 'día(s)';
$_ADMINLANG['wbteampro']['js']['rruleOccurWeekly'] = 'semana(s)';
$_ADMINLANG['wbteampro']['js']['rruleOccurMonthly'] = 'mes(es)';
$_ADMINLANG['wbteampro']['js']['rruleOccurYearly'] = 'año(s)';
$_ADMINLANG['wbteampro']['js']['rowSelectEmpty'] = 'Por favor Seleccione la(s) Fila(s) a Manejar';
$_ADMINLANG['wbteampro']['js']['rowSelectConfirm'] = 'Seleccione Aceptar para confirmar la acción';
$_ADMINLANG['wbteampro']['js']['uiInvoiceCreate'] = 'Crear / actualizar factura';
$_ADMINLANG['wbteampro']['js']['uiInvoiceCancel'] = 'Cancelar';
$_ADMINLANG['wbteampro']['js']['uiInvoiceNoItems'] = 'No hay Items a Facturar';
$_ADMINLANG['wbteampro']['js']['uiInvoiceSuccess'] = 'La(s) factura(s) del Registro de Tiempos se han creado con éxito';
$_ADMINLANG['wbteampro']['js']['uiModifyAccept'] = 'Aplicar cambios';
$_ADMINLANG['wbteampro']['js']['uiModifyCancel'] = 'Cancelar';

/************************************** Page Headers */
$_ADMINLANG['wbteampro']['taskheader']['prefix'] = 'wbTeamPro: ';
$_ADMINLANG['wbteampro']['taskheader']['project_edit_archive'] = ' [ARCHIVO]';
$_ADMINLANG['wbteampro']['taskheader']['project_edit_template'] = ' [PLANTILLA]';
$_ADMINLANG['wbteampro']['taskheader']['project_edit_new'] = 'Nuevo Proyecto';
$_ADMINLANG['wbteampro']['taskheader']['project_action_list'] = 'Acciones de Proyecto';
$_ADMINLANG['wbteampro']['taskheader']['project_ticket_list'] = 'Tickets de Proyecto';
$_ADMINLANG['wbteampro']['taskheader']['project_file_list'] = 'Archivos de Proyecto';
$_ADMINLANG['wbteampro']['taskheader']['project_topic_list'] = 'Discuciones de Proyecto';
$_ADMINLANG['wbteampro']['taskheader']['project_list'] = 'Todos los Proyectos';
$_ADMINLANG['wbteampro']['taskheader']['action_list'] = 'Todas las Acciones de Proyecto';
$_ADMINLANG['wbteampro']['taskheader']['file_list'] = 'Todos los Archivos de Proyecto';
$_ADMINLANG['wbteampro']['taskheader']['topic_list'] = 'Todos los temas del Proyecto';
$_ADMINLANG['wbteampro']['taskheader']['ticket_list'] = 'Todos los tickets del Proyecto';
$_ADMINLANG['wbteampro']['taskheader']['timelog_list'] = 'Todos los Registros de tiempo del Proyecto';
$_ADMINLANG['wbteampro']['taskheader']['template_list'] = 'Todas las Plantillas';
$_ADMINLANG['wbteampro']['taskheader']['archive_list'] = 'Todos los Archivos';

/************************************** Client Profile Tabs */
$_ADMINLANG['wbteampro']['profiletab']['projects'] = "Proyectos";
$_ADMINLANG['wbteampro']['profiletab']['actions'] = 'Acciones';
$_ADMINLANG['wbteampro']['profiletab']['files'] = 'Archivos';
$_ADMINLANG['wbteampro']['profiletab']['topics'] = 'Discuciones';
$_ADMINLANG['wbteampro']['profiletab']['timelog'] = 'Registros de Tiempo';
$_ADMINLANG['wbteampro']['profiletab']['tickets'] = 'Tickets';

/************************************** Project Tabs */
$_ADMINLANG['wbteampro']['projecttab']['details'] = 'Detalles';
$_ADMINLANG['wbteampro']['projecttab']['actions'] = 'Acciones';
$_ADMINLANG['wbteampro']['projecttab']['tickets'] = 'Tickets';
$_ADMINLANG['wbteampro']['projecttab']['files'] = 'Archivos';
$_ADMINLANG['wbteampro']['projecttab']['filesview'] = 'Vista del Archivo';
$_ADMINLANG['wbteampro']['projecttab']['topics'] = 'Discuciones';
$_ADMINLANG['wbteampro']['projecttab']['topicsview'] = 'Vista de Discucion';
$_ADMINLANG['wbteampro']['projecttab']['timelog'] = 'Registro de Tiempo';

/************************************** Admin Visibility */
$_ADMINLANG['wbteampro']['adminvisible']['all'] = 'Todo';
$_ADMINLANG['wbteampro']['adminvisible']['manager'] = 'Solo Administrador';
$_ADMINLANG['wbteampro']['adminvisible']['related'] = 'Administrador & Asignado';

/************************************** Client Visibility */
$_ADMINLANG['wbteampro']['clientvisible']['hidden'] = 'Escondido';
$_ADMINLANG['wbteampro']['clientvisible']['visible'] = 'Visible';
$_ADMINLANG['wbteampro']['clientvisible']['view'] = 'Ver';
$_ADMINLANG['wbteampro']['clientvisible']['modify'] = 'Modificar';
$_ADMINLANG['wbteampro']['clientvisible']['inherit'] = 'Heredar';

/************************************** Project Functions */
$_ADMINLANG['wbteampro']['projectfunction']['default'] = 'Por Defecto';
$_ADMINLANG['wbteampro']['projectfunction']['template'] = 'Plantilla';
$_ADMINLANG['wbteampro']['projectfunction']['archive'] = 'Archivo';

/************************************** Project Fields */
$_ADMINLANG['wbteampro']['projectsave']['newActionLabel'] = 'Definir el hito';
$_ADMINLANG['wbteampro']['projectlist']['newproject'] = 'Nuevo proyecto';
$_ADMINLANG['wbteampro']['projectlist']['newtemplate'] = 'Nueva plantilla';
$_ADMINLANG['wbteampro']['projectfield']['name'] = 'Nombre del proyecto';
$_ADMINLANG['wbteampro']['projectfield']['client'] = 'Cliente';
$_ADMINLANG['wbteampro']['projectfield']['type'] = 'Tipo';
$_ADMINLANG['wbteampro']['projectfield']['contact'] = 'Contacto de Cliente';
$_ADMINLANG['wbteampro']['projectfield']['product'] = 'Producto del Cliente';
$_ADMINLANG['wbteampro']['projectfield']['status'] = 'Estado';
$_ADMINLANG['wbteampro']['projectfield']['managedby'] = 'Administrado por';
$_ADMINLANG['wbteampro']['projectfield']['visiblestatus'] = 'Acceso como Admin';
$_ADMINLANG['wbteampro']['projectfield']['assignedto'] = 'Asignado a';
$_ADMINLANG['wbteampro']['projectfield']['datestart'] = 'Fecha de Inicio';
$_ADMINLANG['wbteampro']['projectfield']['datefinish'] = 'Fecha de Finalización';
$_ADMINLANG['wbteampro']['projectfield']['details'] = 'Notas / Detalles';
$_ADMINLANG['wbteampro']['projectfield']['created'] = 'Creado';
$_ADMINLANG['wbteampro']['projectfield']['activity'] = 'Actividad';
$_ADMINLANG['wbteampro']['projectfield']['modified'] = 'Modificado';
$_ADMINLANG['wbteampro']['projectfield']['completed'] = 'Completo';
$_ADMINLANG['wbteampro']['projectfield']['sfcompleted'] = '%1$s desde %2$s Acciones, %3$s Hito, %4$s Group, %5$s Tarea, Tiempo Transcurrido: %6$s';
$_ADMINLANG['wbteampro']['projectfield']['namecopysprint'] = '*COPIA* %s';
$_ADMINLANG['wbteampro']['projectfield']['notes'] = 'Notas Privadas';
$_ADMINLANG['wbteampro']['projectfield']['clientvisible'] = 'Acceso de cliente';
$_ADMINLANG['wbteampro']['projectfield']['function'] = 'Función';
$_ADMINLANG['wbteampro']['projectfield']['billable'] = 'Tiempo a facturar';

/************************************** Copy Fields */
$_ADMINLANG['wbteampro']['copyform']['option_setup'] = 'Opciones de Copia de Proyecto';
$_ADMINLANG['wbteampro']['copyform']['project_setup'] = 'Configuración del nuevo proyecto';
$_ADMINLANG['wbteampro']['copyfield']['newname'] = 'Nombre del nuevo proyecto';
$_ADMINLANG['wbteampro']['copyfield']['copy_template'] = 'Guardar como plantilla';
$_ADMINLANG['wbteampro']['copyfield']['copy_actions'] = 'Acciones de copia';
$_ADMINLANG['wbteampro']['copyfield']['copy_files'] = 'Hilos de archivo de copia';
$_ADMINLANG['wbteampro']['copyfield']['copy_topics'] = 'Copiar Temas de Discusión';
$_ADMINLANG['wbteampro']['copyfield']['copy_tickets'] = 'Copyar Relaciones de Ticket';
$_ADMINLANG['wbteampro']['copyfield']['copy_timelogs'] = 'Copiar Registro de Tiempos';

/************************************** File Fields */
$_ADMINLANG['wbteampro']['filelist']['newthread'] = 'Nuevo Hilo';
$_ADMINLANG['wbteampro']['filelist']['appendthread'] = 'Añadir tema';
$_ADMINLANG['wbteampro']['filelist']['deletethread'] = 'Eliminar tema';
$_ADMINLANG['wbteampro']['filelist']['clientaccess'] = 'Acceso de cliente';
$_ADMINLANG['wbteampro']['filelist']['toggleaccess'] = 'Alternar acceso';
$_ADMINLANG['wbteampro']['filelist']['by'] = 'por';
$_ADMINLANG['wbteampro']['filelist']['on'] = 'sobre';
$_ADMINLANG['wbteampro']['filefield']['label'] = 'Etiqueta';
$_ADMINLANG['wbteampro']['filefield']['version'] = 'Ver';
$_ADMINLANG['wbteampro']['filefield']['file'] = 'Archivo';
$_ADMINLANG['wbteampro']['filefield']['mime'] = 'Mime';
$_ADMINLANG['wbteampro']['filefield']['size'] = 'Tamaño';
$_ADMINLANG['wbteampro']['filefield']['detail'] = 'Detalle';
$_ADMINLANG['wbteampro']['filefield']['upload'] = 'Actualizar';
$_ADMINLANG['wbteampro']['filefield']['import'] = 'Importar';
$_ADMINLANG['wbteampro']['filelist']['status'] = 'Estado';
$_ADMINLANG['wbteampro']['filelist']['status_open'] = 'Abrir';
$_ADMINLANG['wbteampro']['filelist']['status_closed'] = 'Cerrado';
$_ADMINLANG['wbteampro']['filelist']['expanddetail'] = 'Expandir / Colapsar';
$_ADMINLANG['wbteampro']['filelist']['count'] = '%s Archivos';

/************************************** Ticket Fields */
$_ADMINLANG['wbteampro']['ticketlist']['ticket_nonefound'] = 'No se encontraron Tickets';
$_ADMINLANG['wbteampro']['ticketlist']['linkticket'] = 'Ticket de Enlace';
$_ADMINLANG['wbteampro']['ticketlist']['newticket'] = 'Nuevo Ticket';
$_ADMINLANG['wbteampro']['ticketfield']['project'] = 'Proyecto';
$_ADMINLANG['wbteampro']['ticketfield']['action'] = 'Acción';

/************************************** Topic Fields */
$_ADMINLANG['wbteampro']['topiclist']['newthread'] = 'Nuevo hilo';
$_ADMINLANG['wbteampro']['topiclist']['appendthread'] = 'Añadir tema';
$_ADMINLANG['wbteampro']['topiclist']['deletethread'] = 'Eliminar tema';
$_ADMINLANG['wbteampro']['topiclist']['clientaccess'] = 'Acceso de cliente';
$_ADMINLANG['wbteampro']['topiclist']['toggleaccess'] = 'Alternar acceso';
$_ADMINLANG['wbteampro']['topiclist']['by'] = 'por';
$_ADMINLANG['wbteampro']['topiclist']['on'] = 'sobre';
$_ADMINLANG['wbteampro']['topicfield']['title'] = 'Titulo';
$_ADMINLANG['wbteampro']['topicfield']['detail'] = 'Detalle';
$_ADMINLANG['wbteampro']['topiclist']['status'] = 'Estado';
$_ADMINLANG['wbteampro']['topiclist']['status_open'] = 'Abierto';
$_ADMINLANG['wbteampro']['topiclist']['status_closed'] = 'Cerrado';
$_ADMINLANG['wbteampro']['topiclist']['expanddetail'] = 'Expandir / Colapsar';
$_ADMINLANG['wbteampro']['topiclist']['count'] = '%s Publicaciones';
$_ADMINLANG['wbteampro']['topiclist']['created'] = 'Comenzado en %s';

/************************************** Action Fields */
$_ADMINLANG['wbteampro']['actionlist']['dispmode'] = 'Modo Display:';
$_ADMINLANG['wbteampro']['actionlist']['listview'] = 'Vista de Lista';
$_ADMINLANG['wbteampro']['actionlist']['treeview'] = 'Vista del Arbol';
$_ADMINLANG['wbteampro']['actionlist']['ganttview'] = 'Vista de Gantt';
$_ADMINLANG['wbteampro']['actionlist']['listexpand'] = 'Expandir / Colapsar todas las tareas anidadas';
$_ADMINLANG['wbteampro']['actionlist']['listmaskcompleted'] = 'Mostrar / Ocultar Tareas Completadas';
$_ADMINLANG['wbteampro']['actionlist']['newaction'] = "Nueva Acción";
$_ADMINLANG['wbteampro']['actionlist']['addchild'] = 'Añadir hijo';
$_ADMINLANG['wbteampro']['actionlist']['stoptimer'] = 'Detener temporizador';
$_ADMINLANG['wbteampro']['actionlist']['starttimer'] = 'Iniciar Temporizador';
$_ADMINLANG['wbteampro']['actionlist']['viewlog'] = 'Ver registro';
$_ADMINLANG['wbteampro']['actionlist']['delete'] = 'Borrar';
$_ADMINLANG['wbteampro']['actionlist']['totalcomplete'] = 'Proyecto Completo';
$_ADMINLANG['wbteampro']['actionlist']['totalduration'] = 'Duración total';
$_ADMINLANG['wbteampro']['actionlist']['totalelapsed'] = 'Total transcurrido';
$_ADMINLANG['wbteampro']['actionlist']['client_access'] = 'Alternar acceso de cliente';
$_ADMINLANG['wbteampro']['actionfield']['name'] = 'Nombre';
$_ADMINLANG['wbteampro']['actionfield']['complete'] = '% Completo';
$_ADMINLANG['wbteampro']['actionfield']['type'] = 'Tipo';
$_ADMINLANG['wbteampro']['actionfield']['datestart'] = 'Fecha de inicio';
$_ADMINLANG['wbteampro']['actionfield']['status'] = 'Estado';
$_ADMINLANG['wbteampro']['actionfield']['datefinish'] = 'Finalización de la fecha';
$_ADMINLANG['wbteampro']['actionfield']['client'] = 'Cliente';
$_ADMINLANG['wbteampro']['actionfield']['managedby'] = 'Gestionado por';
$_ADMINLANG['wbteampro']['actionfield']['maincontact'] = 'Contacto principal';
$_ADMINLANG['wbteampro']['actionfield']['assignedto'] = 'Asignado a';
$_ADMINLANG['wbteampro']['actionfield']['detail'] = 'Notas / Detalles';
$_ADMINLANG['wbteampro']['actionfield']['created'] = 'Creado';
$_ADMINLANG['wbteampro']['actionfield']['activity'] = 'Actividad';
$_ADMINLANG['wbteampro']['actionfield']['modified'] = 'Modificado';
$_ADMINLANG['wbteampro']['actionfield']['parentaction'] = 'Acción de los padres';
$_ADMINLANG['wbteampro']['actionfield']['clientvisible'] = 'Acceso de cliente';
$_ADMINLANG['wbteampro']['actionfield']['notes'] = 'Notas Privadas';
$_ADMINLANG['wbteampro']['actionfield']['priority'] = 'Prioridad';
$_ADMINLANG['wbteampro']['actionfield']['billable'] = 'Tiempo facturable';
$_ADMINLANG['wbteampro']['actionfield']['duration'] = 'Duración';
$_ADMINLANG['wbteampro']['actionfield']['recurrence'] = 'Recurrencia';
$_ADMINLANG['wbteampro']['actionfield']['summary']['datestart'] = 'Inicio de la recurrencia';
$_ADMINLANG['wbteampro']['actionfield']['summary']['datefinish'] = 'Finalización de la recurrencia';
$_ADMINLANG['wbteampro']['actionfield']['occurrence']['datestart'] = 'Inicio de Ocurrencia';
$_ADMINLANG['wbteampro']['actionfield']['occurrence']['datefinish'] = 'Finalización de ocurrencia';

/************************************** Action Report Labels */
$_ADMINLANG['wbteampro']['actionreport']['schd_on'] = 'En tiempo';
$_ADMINLANG['wbteampro']['actionreport']['schd_ahead'] = 'Antes de Tiempo';
$_ADMINLANG['wbteampro']['actionreport']['schd_behind'] = 'Retrasado';

/************************************** Recurrence Fields */
$_ADMINLANG['wbteampro']['recurrence']['report']['instance'] = 'Occurrence %s of %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['fromdate'] = 'Starting on %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['daily']['count'] = 'Repeat every %s days for %s days';
$_ADMINLANG['wbteampro']['recurrence']['report']['daily']['until'] = 'Repeat every %s days until %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['weekly']['count'] = 'Repeat every %s weeks on %s for %s weeks';
$_ADMINLANG['wbteampro']['recurrence']['report']['weekly']['until'] = 'Repeat every %s weeks on %s until %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['monthly']['bymonthday']['count'] = 'Repeat on the %s day every %s month(s) for %s month(s)';
$_ADMINLANG['wbteampro']['recurrence']['report']['monthly']['bymonthday']['until'] = 'Repeat on the %s day every %s month(s) until %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['monthly']['bysetpos']['count'] = 'Repeat on the %s %s every %s months(s) for %s month(s)';
$_ADMINLANG['wbteampro']['recurrence']['report']['monthly']['bysetpos']['until'] = 'Repeat on the %s %s every %s months(s) until %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['yearly']['bymonthday']['count'] = 'Repeat on the %s day of %s every %s years(s) for %s year(s)';
$_ADMINLANG['wbteampro']['recurrence']['report']['yearly']['bymonthday']['until'] = 'Repeat on the %s day of %s every %s years(s) until %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['yearly']['bysetpos']['count'] = 'Repeat on the %s %s of %s every %s years(s) for %s year(s)';
$_ADMINLANG['wbteampro']['recurrence']['report']['yearly']['bysetpos']['until'] = 'Repeat on the %s %s of %s every %s years(s) until %s';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['legend'] = 'Recurrence Frequency';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['daily']['everyxdays'] = '%sRecur every%s %s day(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['weekly']['everyxweeks'] = '%sRecur every%s %s weeks(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['monthly']['nthofxmonths'] = '%sDay%s %s of every %s month(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['monthly']['nthdayofxmonths'] = '%sThe%s %s %s of every %s month(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['yearly']['nthofxyears'] = '%sOn%s %s the %s every %s year(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['yearly']['nthdayofxyears'] = '%sOn the%s %s %s of %s every %s year(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['legend'] = 'Recurrence Duration';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['until'] = '%sRepeat until%s %s';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['count'] = '%sRepeat for%s %s %soccurrence(s)%s';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['occur']['daily'] = 'day(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['occur']['weekly'] = 'week(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['occur']['monthly'] = 'month(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['occur']['yearly'] = 'years(s)';

/************************************** Timelog Fields */
$_ADMINLANG['wbteampro']['timeloglist']['total'] = 'Total';
$_ADMINLANG['wbteampro']['timeloglist']['totalelapsed'] = 'Total Transcurrido';
$_ADMINLANG['wbteampro']['timeloglist']['by'] = 'por';
$_ADMINLANG['wbteampro']['timelogfield']['note'] = 'Nota';
$_ADMINLANG['wbteampro']['timelogfield']['type'] = 'Tipo';
$_ADMINLANG['wbteampro']['timelogfield']['datestart'] = 'Fecha de Inicio';
$_ADMINLANG['wbteampro']['timelogfield']['datestop'] = 'Fecha de Finalización';
$_ADMINLANG['wbteampro']['timelogfield']['duration'] = 'Duración';
$_ADMINLANG['wbteampro']['timelogfield']['owner'] = 'Dueño';
$_ADMINLANG['wbteampro']['timelogfield']['elapsed'] = 'Tiempo Transcurrido';
$_ADMINLANG['wbteampro']['timelogfield']['billable'] = 'Tiempo a Facturar';
$_ADMINLANG['wbteampro']['timelogfield']['invoice'] = 'Factura #';

/************************************** Timelog */
$_ADMINLANG['wbteampro']['timelog']['emptynote'] = '~';
$_ADMINLANG['wbteampro']['timelog']['status']['active'] = 'Activo';
$_ADMINLANG['wbteampro']['timelog']['status']['complete'] = 'Completo';
$_ADMINLANG['wbteampro']['timelog']['elapsed']['all'] = 'Todo el tiempo registrado';
$_ADMINLANG['wbteampro']['timelog']['elapsed']['my'] = 'Mi tiempo registrado';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['client'] = 'Cliente';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['project'] = 'Proyecto';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['action'] = 'Acción';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['milestone'] = 'Hito';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['group'] = 'Grupo';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['task'] = 'Tarea';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['ticket'] = 'Ticket de Soporte';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['timelog'] = 'Registro de Tiempos';

/************************************** Timelog Modal */
$_ADMINLANG['wbteampro']['timelog']['modal']['title'] = 'Iniciar un nuevo Registro de Tiempo';
$_ADMINLANG['wbteampro']['timelog']['modal']['event'] = 'Introduzca la descripción del evento';
$_ADMINLANG['wbteampro']['timelog']['modal']['type'] = 'Tipo de evento';
$_ADMINLANG['wbteampro']['timelog']['modal']['manual'] = 'Especificar Duración y Guardar como Completo';
$_ADMINLANG['wbteampro']['timelog']['modal']['start'] = 'Comenzar';
$_ADMINLANG['wbteampro']['timelog']['modal']['duration'] = 'Duración';
$_ADMINLANG['wbteampro']['timelog']['modal']['durexample'] = 'Es decir: 2 horas, 5 minutos, 10 segundos';
$_ADMINLANG['wbteampro']['timelog']['modal']['owner'] = 'Dueño';
$_ADMINLANG['wbteampro']['timelog']['modal']['billable'] = '¿Esto será el tiempo facturable?';

/************************************** Invoice Modal */
$_ADMINLANG['wbteampro']['invoice']['modal']['title'] = 'Crear nueva(s) factura(s)';
$_ADMINLANG['wbteampro']['invoice']['modal']['invoicecount'] = 'Factura #{invoice_count}';
$_ADMINLANG['wbteampro']['invoice']['modal']['date'] = 'Fecha de la factura';
$_ADMINLANG['wbteampro']['invoice']['modal']['duedate'] = 'Fecha de vencimiento';
$_ADMINLANG['wbteampro']['invoice']['modal']['taxrate'] = 'Tasa de impuesto';
$_ADMINLANG['wbteampro']['invoice']['modal']['applytax'] = 'Aplicar Impuestos';
$_ADMINLANG['wbteampro']['invoice']['modal']['paymentmethod'] = 'Método de pago';
$_ADMINLANG['wbteampro']['invoice']['modal']['sendinvoice'] = 'Enviar factura';
$_ADMINLANG['wbteampro']['invoice']['modal']['autoapplycredit'] = 'Aplicar Créditos';
$_ADMINLANG['wbteampro']['invoice']['modal']['rate'] = 'Tarifa';
$_ADMINLANG['wbteampro']['invoice']['modal']['note'] = 'Notas de factura';
$_ADMINLANG['wbteampro']['invoice']['modal']['invoiceid'] = 'Añadir a ID de factura';
$_ADMINLANG['wbteampro']['invoice']['modal']['total_count'] = '# Items de Linea';
$_ADMINLANG['wbteampro']['invoice']['modal']['total_hours'] = 'Horas totales';
$_ADMINLANG['wbteampro']['invoice']['modal']['sub_total'] = 'Sub-Total';
$_ADMINLANG['wbteampro']['invoice']['modal']['total_tax'] = 'Total impuestos';
$_ADMINLANG['wbteampro']['invoice']['modal']['total'] = 'Total de la factura';
$_ADMINLANG['wbteampro']['invoice']['modal']['line_total'] = 'Total';
$_ADMINLANG['wbteampro']['invoice']['modal']['checkall'] = 'Verificar todo';
$_ADMINLANG['wbteampro']['invoice']['modal']['applyall'] = 'Aplica a todo';
$_ADMINLANG['wbteampro']['invoice']['modal']['expandall'] = 'Expandir / Contraer Todo';
$_ADMINLANG['wbteampro']['invoice']['modal']['apply'] = 'Aplicar';
$_ADMINLANG['wbteampro']['invoice']['modal']['customize'] = 'Personalizar la factura y los elementos de línea';

/************************************** Modify Actions Modal */
$_ADMINLANG['wbteampro']['modifyactions']['modal']['title'] = 'Modificar Acciones Múltiples';
$_ADMINLANG['wbteampro']['modifyactions']['modal']['th-apply'] = 'Aplicar';
$_ADMINLANG['wbteampro']['modifyactions']['modal']['th-option'] = 'Opción';
$_ADMINLANG['wbteampro']['modifyactions']['modal']['th-value'] = 'Valor';

/************************************** Modify Actions Modal */
$_ADMINLANG['wbteampro']['modifytimelogs']['modal']['title'] = 'Modificar Acciones Múltiples';
$_ADMINLANG['wbteampro']['modifytimelogs']['modal']['th-apply'] = 'Aplicar';
$_ADMINLANG['wbteampro']['modifytimelogs']['modal']['th-option'] = 'Opción';
$_ADMINLANG['wbteampro']['modifytimelogs']['modal']['th-value'] = 'Valor';

/************************************** Confirm Modal */
$_ADMINLANG['wbteampro']['confirm']['modal']['title'] = 'Confirmar acción';
$_ADMINLANG['wbteampro']['confirm']['modal']['delete'] = 'Escriba ELIMINAR para confirmar';

/************************************** Ticket Modal */
$_ADMINLANG['wbteampro']['ticket']['modal']['title'] = 'Abrir un nuevo ticket de soporte';
$_ADMINLANG['wbteampro']['ticket']['modal']['client'] = 'Cliente';
$_ADMINLANG['wbteampro']['ticket']['modal']['project'] = 'Proyecto';
$_ADMINLANG['wbteampro']['ticket']['modal']['deptid'] = 'Departamento';
$_ADMINLANG['wbteampro']['ticket']['modal']['priority'] = 'Prioridad';
$_ADMINLANG['wbteampro']['ticket']['modal']['subject'] = 'Asunto';
$_ADMINLANG['wbteampro']['ticket']['modal']['message'] = 'Mensaje';
$_ADMINLANG['wbteampro']['ticket']['modal']['nodept'] = 'No se encontraron Permisos de Departamento';
$_ADMINLANG['wbteampro']['ticket']['modal']['sendemail'] = 'Enviar Email';

/************************************** Page/List Navigation */
$_ADMINLANG['wbteampro']['filter']['tablabel'] = $_ADMINLANG['global']['searchfilter'];
$_ADMINLANG['wbteampro']['filter']['any'] = $_ADMINLANG['global']['any'];
$_ADMINLANG['wbteampro']['filter']['none'] = $_ADMINLANG['global']['none'];
$_ADMINLANG['wbteampro']['filter']['checkall'] = 'Corroborado';
$_ADMINLANG['wbteampro']['filter']['uncheckall'] = 'No Corroborado';
$_ADMINLANG['wbteampro']['filter']['selectedtext'] = '# seleccionado';
$_ADMINLANG['wbteampro']['filter']['search'] = 'Buscar';
$_ADMINLANG['wbteampro']['filter']['masksearch'] = 'Filtro';
$_ADMINLANG['wbteampro']['filter']['masksearch-placeholder'] = 'filtrar por palabra clave...';
$_ADMINLANG['wbteampro']['filter']['owner'] = 'Dueño';
$_ADMINLANG['wbteampro']['filter']['admin'] = 'Administrador';
$_ADMINLANG['wbteampro']['filter']['project'] = 'Proyecto';
$_ADMINLANG['wbteampro']['filter']['action'] = 'Acción';
$_ADMINLANG['wbteampro']['filter']['ticket'] = 'Ticket';
$_ADMINLANG['wbteampro']['filter']['status'] = 'Estado';
$_ADMINLANG['wbteampro']['filter']['client'] = 'Cliente';
$_ADMINLANG['wbteampro']['filter']['product'] = 'Producto';
$_ADMINLANG['wbteampro']['filter']['department'] = 'Departamento';
$_ADMINLANG['wbteampro']['filter']['manager'] = 'Encargado';
$_ADMINLANG['wbteampro']['filter']['assigned'] = 'Asignado';
$_ADMINLANG['wbteampro']['filter']['type'] = 'Tipo';
$_ADMINLANG['wbteampro']['filter']['level'] = 'Nivel';
$_ADMINLANG['wbteampro']['filter']['flagged'] = 'Marcado';
$_ADMINLANG['wbteampro']['filter']['rangestart'] = 'Comenzado después';
$_ADMINLANG['wbteampro']['filter']['rangestop'] = 'Comenzado antes';
$_ADMINLANG['wbteampro']['filter']['percentage'] = '% Completo';
$_ADMINLANG['wbteampro']['filter']['root'] = 'Nivel de Raíz';
$_ADMINLANG['wbteampro']['filter']['zone'] = 'Zona';
$_ADMINLANG['wbteampro']['filter']['priority'] = 'Prioridad';
$_ADMINLANG['wbteampro']['filter']['billable'] = 'Facturable';
$_ADMINLANG['wbteampro']['filter']['invoiced'] = 'Facturado';
$_ADMINLANG['wbteampro']['filter']['group_mode'] = 'Agrupado por';
$_ADMINLANG['wbteampro']['filter']['project_type'] = 'Tipo de Proyecto';
$_ADMINLANG['wbteampro']['filter']['project_status'] = 'Estado de Proyecto';

/************************************** Page/List Navigation */
$_ADMINLANG['wbteampro']['pagenav']['report'] = '%s '.$_ADMINLANG['global']['recordsfound'].', '.$_ADMINLANG['global']['page'].' %s '.$_ADMINLANG['global']['of'].' %s';
$_ADMINLANG['wbteampro']['pagenav']['prev'] = $_ADMINLANG['global']['previouspage'];
$_ADMINLANG['wbteampro']['pagenav']['next'] = $_ADMINLANG['global']['nextpage'];
$_ADMINLANG['wbteampro']['pagenav']['empty'] = $_ADMINLANG['global']['norecordsfound'];
$_ADMINLANG['wbteampro']['pagenav']['jumpto'] = $_ADMINLANG['global']['jumppage'];
$_ADMINLANG['wbteampro']['pagenav']['limit'] = 'Límite';
$_ADMINLANG['wbteampro']['pagenav']['go'] = $_ADMINLANG['global']['go'];
$_ADMINLANG['wbteampro']['pagenav']['export'] = 'Exportar';
$_ADMINLANG['wbteampro']['pagenav']['print'] = 'Imprimir';
$_ADMINLANG['wbteampro']['pagenav']['orderby'] = 'Ordenar por %1$s'; // %1$s = Field, %2$s = Direction
$_ADMINLANG['wbteampro']['pagenav']['allMasked'] = '<b>Notice</b><br>Todos los registros estan marcados';

/************************************** Form Button Labels */
$_ADMINLANG['wbteampro']['formnav']['edit'] = 'Editar';
$_ADMINLANG['wbteampro']['formnav']['view'] = 'Ver';
$_ADMINLANG['wbteampro']['formnav']['copy'] = 'Copiar';
$_ADMINLANG['wbteampro']['formnav']['copy_template'] = 'Crear Proyecto';
$_ADMINLANG['wbteampro']['formnav']['archive'] = 'Archivar';
$_ADMINLANG['wbteampro']['formnav']['unarchive'] = 'No Archivar';
$_ADMINLANG['wbteampro']['formnav']['save'] = 'Guardar';
$_ADMINLANG['wbteampro']['formnav']['save_new'] = 'Guardar y Nuevo';
$_ADMINLANG['wbteampro']['formnav']['apply'] = 'Aplicar';
$_ADMINLANG['wbteampro']['formnav']['close'] = 'Cerrar';
$_ADMINLANG['wbteampro']['formnav']['cancel'] = 'Cancelar';
$_ADMINLANG['wbteampro']['formnav']['delete'] = 'Eliminar';
$_ADMINLANG['wbteampro']['formnav']['download'] = 'Descargar';
$_ADMINLANG['wbteampro']['formnav']['timestart'] = 'Comenzar Temporizador';
$_ADMINLANG['wbteampro']['formnav']['timestop'] = 'Finalizar Temporizador';
$_ADMINLANG['wbteampro']['formnav']['submit'] = 'Enviar';
$_ADMINLANG['wbteampro']['formnav']['invoice'] = 'Factura';
$_ADMINLANG['wbteampro']['formnav']['reload'] = 'Recargar';
$_ADMINLANG['wbteampro']['formnav']['check'] = 'Corroborar';
$_ADMINLANG['wbteampro']['formnav']['link'] = 'Enlazar';
$_ADMINLANG['wbteampro']['formnav']['unlink'] = 'desenlazar';

/************************************** Dashboard Blocks */
$_ADMINLANG['wbteampro']['dashhead']['topProjects'] = 'Proyectos con actividad reciente';
$_ADMINLANG['wbteampro']['dashhead']['topActions'] = "Acciones más valoradas";
$_ADMINLANG['wbteampro']['dashhead']['myActions'] = 'Tareas asignadas a usted';
$_ADMINLANG['wbteampro']['dashhead']['touchedActions'] = 'Acciones con Actividad Reciente';
$_ADMINLANG['wbteampro']['dashhead']['topTimelog'] = 'Actividad reciente de Registro de Tiempos';
$_ADMINLANG['wbteampro']['dashhead']['topTickets'] = 'Actividad reciente de tickets';
$_ADMINLANG['wbteampro']['dashhead']['topTopics'] = 'Actividad reciente del tema';
$_ADMINLANG['wbteampro']['dashhead']['topFiles'] = 'Actividad de archivo reciente';
$_ADMINLANG['wbteampro']['dashhead']['viewall'] = 'Ver Todo';

/************************************** List Table Headers */
$_ADMINLANG['wbteampro']['listhead']['ordering'] = 'Ordenando';
$_ADMINLANG['wbteampro']['listhead']['enabled'] = 'Habilitado';
$_ADMINLANG['wbteampro']['listhead']['date_created'] = 'Creado';
$_ADMINLANG['wbteampro']['listhead']['date_modified'] = 'Modificado';
$_ADMINLANG['wbteampro']['listhead']['date_activity'] = 'Actividad';
$_ADMINLANG['wbteampro']['listhead']['date_start'] = 'Comienzo';
$_ADMINLANG['wbteampro']['listhead']['date_finish'] = 'Deuda';
$_ADMINLANG['wbteampro']['listhead']['client_name'] = 'Nombre del Cliente';
$_ADMINLANG['wbteampro']['listhead']['client_userid'] = 'Cliente';
$_ADMINLANG['wbteampro']['listhead']['client_hostingid'] = 'Producto';
$_ADMINLANG['wbteampro']['listhead']['owner_adminid'] = 'Dueño';
$_ADMINLANG['wbteampro']['listhead']['manager_adminid'] = 'Administrador';
$_ADMINLANG['wbteampro']['listhead']['assigned_adminid'] = 'Asignado';
$_ADMINLANG['wbteampro']['listhead']['invoice_id'] = 'Factura';
$_ADMINLANG['wbteampro']['listhead']['range_start'] = 'Comenzado Despues';
$_ADMINLANG['wbteampro']['listhead']['range_stop'] = 'Comenzado Antes';

/************************************** Project List */
$_ADMINLANG['wbteampro']['listhead']['project_name'] = 'Nombre del proyecto';
$_ADMINLANG['wbteampro']['listhead']['project_type'] = 'Tipo';
$_ADMINLANG['wbteampro']['listhead']['project_status'] = 'Estado';
$_ADMINLANG['wbteampro']['listhead']['project_complete'] = '%';
$_ADMINLANG['wbteampro']['listhead']['project_tasks'] = '#';

/************************************** Action List */
$_ADMINLANG['wbteampro']['listhead']['action_name'] = 'Nombre de la acción';
$_ADMINLANG['wbteampro']['listhead']['action_type'] = 'Tipo';
$_ADMINLANG['wbteampro']['listhead']['action_status'] = 'Estado';
$_ADMINLANG['wbteampro']['listhead']['action_complete'] = '%';
$_ADMINLANG['wbteampro']['listhead']['action_elapsed'] = 'Transcurrido';
$_ADMINLANG['wbteampro']['listhead']['action_priority'] = 'Prioridad';
$_ADMINLANG['wbteampro']['listhead']['action_duration'] = 'Duración';

/************************************** Timelog List */
$_ADMINLANG['wbteampro']['listhead']['timelog_note'] = 'Nota de Registro de Tiempo';
$_ADMINLANG['wbteampro']['listhead']['timelog_elapsed'] = 'Transcurrido';
$_ADMINLANG['wbteampro']['listhead']['timelog_start'] = 'Comenzado';
$_ADMINLANG['wbteampro']['listhead']['timelog_type'] = 'Tipo';
$_ADMINLANG['wbteampro']['listhead']['timelog_status'] = 'Estado';
$_ADMINLANG['wbteampro']['listhead']['timelog_count'] = '# Registros';
$_ADMINLANG['wbteampro']['listhead']['timelog_elapsed_total_billable'] = 'Total Facturable';
$_ADMINLANG['wbteampro']['listhead']['timelog_count_billed'] = '# Facturado';
$_ADMINLANG['wbteampro']['listhead']['timelog_elapsed_total_billed'] = 'Total Facturado';
$_ADMINLANG['wbteampro']['listhead']['timelog_count_unbilled'] = '# Pendiente';
$_ADMINLANG['wbteampro']['listhead']['timelog_elapsed_total_unbilled'] = 'Total Pendiente';
$_ADMINLANG['wbteampro']['listhead']['timelog_elapsed_total'] = 'Total';

/************************************** Topic List */
$_ADMINLANG['wbteampro']['listhead']['topic_name'] = 'Hilo de discusión';
$_ADMINLANG['wbteampro']['listhead']['topic_activity'] = 'Actividad';
$_ADMINLANG['wbteampro']['listhead']['topic_posts'] = 'Publicaciones';
$_ADMINLANG['wbteampro']['listhead']['topic_status'] = 'estado';

/************************************** Ticket List */
$_ADMINLANG['wbteampro']['listhead']['ticket_title'] = 'Tituylo de Ticket';
$_ADMINLANG['wbteampro']['listhead']['ticket_lastreply'] = 'Actividad';
$_ADMINLANG['wbteampro']['listhead']['ticket_date'] = 'Enviado';
$_ADMINLANG['wbteampro']['listhead']['ticket_urgency'] = 'Urgencia';
$_ADMINLANG['wbteampro']['listhead']['ticket_submitter'] = 'Emisor';
$_ADMINLANG['wbteampro']['listhead']['ticket_department'] = 'Departamento';
$_ADMINLANG['wbteampro']['listhead']['ticket_status'] = 'Estado';
$_ADMINLANG['wbteampro']['listhead']['ticket_admin'] = 'Dueño';
$_ADMINLANG['wbteampro']['listhead']['ticket_flag'] = 'Asignado';

/************************************** File List */
$_ADMINLANG['wbteampro']['listhead']['file_label'] = 'Archivo del hilo';
$_ADMINLANG['wbteampro']['listhead']['file_latest'] = 'Último Archivo';
$_ADMINLANG['wbteampro']['listhead']['file_total'] = 'Archivos';
$_ADMINLANG['wbteampro']['listhead']['file_status'] = 'Estado';

/************************************** Plugin List */
$_ADMINLANG['wbteampro']['listhead']['plugin_name'] = 'Nombre del Plugin';
$_ADMINLANG['wbteampro']['listhead']['plugin_zone'] = 'Zona';
$_ADMINLANG['wbteampro']['listhead']['plugin_element'] = 'Elemento';

/************************************** Module List
$_ADMINLANG['wbteampro']['listhead']['module_name'] = 'Nombre del Módulo';
$_ADMINLANG['wbteampro']['listhead']['module_element'] = 'Elemento';
$_ADMINLANG['wbteampro']['listhead']['module_position'] = 'Posición';
 */

/************************************** Setup Tabs */
$_ADMINLANG['wbteampro']['setuptab']['general'] = 'General';
$_ADMINLANG['wbteampro']['setuptab']['project'] = 'Proyecto';
$_ADMINLANG['wbteampro']['setuptab']['action'] = 'Acción';
$_ADMINLANG['wbteampro']['setuptab']['display'] = 'Mostrar';
$_ADMINLANG['wbteampro']['setuptab']['extensions'] = 'Extensiones';

/************************************** Setup Configuration */
$_ADMINLANG['wbteampro']['configtopic']['general_settings'] = 'Configuración general';
$_ADMINLANG['wbteampro']['configtopic']['project_settings'] = 'Configuración del proyecto';
$_ADMINLANG['wbteampro']['configtopic']['action_settings'] = 'Ajustes de acción';
$_ADMINLANG['wbteampro']['configtopic']['billing_settings'] = 'Configuración de factura';
$_ADMINLANG['wbteampro']['configtopic']['timelog_settings'] = 'Configuración del Registro de Tiempo';
$_ADMINLANG['wbteampro']['configtopic']['billing_resource_rates'] = 'Tarifas de facturación personalizadas';
$_ADMINLANG['wbteampro']['configtopic']['billing_resource_rates-help'] = 'La evaluación de la tarifa para un registro de tiempo se calcula evaluando los valores comenzando con los ajustes de facturación "Tarifa por Hora" (arriba), luego se proyecta una "Tarifa por Hora" específica (si está definida), despues el recurso específico "Tarifa de Base" y finalmente los valores de las tarifas de los tipos de registro de tiempos. Las tasas de recursos pueden ser un valor específico en dólares (ejemplo, 75) o una compensación con el valor de la tasa anterior (ejemplo: +10, -20, + 15%, -5%)';
$_ADMINLANG['wbteampro']['configtopic']['billing_lineitem_formats'] = 'Formato de elemento de línea de factura';
$_ADMINLANG['wbteampro']['configtopic']['display_settings'] = 'Ajustes de la interfaz';
$_ADMINLANG['wbteampro']['configtopic']['display_date_formats'] = 'Formato de visualización de fecha';
$_ADMINLANG['wbteampro']['configtopic']['display_name_formats'] = 'Nombre del formato de visualización';
$_ADMINLANG['wbteampro']['configtopic']['display_list_settings'] = 'Listado de configuraciones de visualización';

/************** Setup Configuration */
$_ADMINLANG['wbteampro']['configfield']['version'] = 'versión';
$_ADMINLANG['wbteampro']['configfield']['license_key'] = 'Clave de Licencia';
$_ADMINLANG['wbteampro']['configfield']['license_key-help'] = 'La Clave de Licencia Requerida para la activación.';
$_ADMINLANG['wbteampro']['configfield']['license_key-rekey'] = 'Generar nueva Clave de Licencia';
$_ADMINLANG['wbteampro']['configfield']['license_key-confirm'] = 'Esta acción quitará su actual clave de licencia.\nHacer click en OK para continuar';
$_ADMINLANG['wbteampro']['configfield']['project_file_path'] = 'Ruta del Archivo de Proyecto';
$_ADMINLANG['wbteampro']['configfield']['project_file_path-help'] = 'Ruta relativa o absoluta donde las actualizaciones de proyecto con guardadas';
$_ADMINLANG['wbteampro']['configfield']['admin_super_roles'] = 'Roles de Súper Admin';
$_ADMINLANG['wbteampro']['configfield']['admin_super_roles-help'] = 'Puede ver / modificar todo';
$_ADMINLANG['wbteampro']['configfield']['admin_valid_roles'] = 'Roles Validos de Admin';
$_ADMINLANG['wbteampro']['configfield']['admin_valid_roles-help'] = 'Puede ver / modificar si es dueño o asignado';
$_ADMINLANG['wbteampro']['configfield']['project_link_target'] = ' Objetivo del enlace del proyecto ';
$_ADMINLANG['wbteampro']['configfield']['project_link_target-help'] = 'Por Defecto: Nueva Ventana';
$_ADMINLANG['wbteampro']['configfield']['project_link_task'] = 'Vista de Proyecto por Defecto';
$_ADMINLANG['wbteampro']['configfield']['project_link_task-help'] = 'La sub-pestaña inicial al abrir un proyecto';
$_ADMINLANG['wbteampro']['configfield']['client_link_target'] = 'Objetivo de enlace de cliente';
$_ADMINLANG['wbteampro']['configfield']['client_link_target-help'] = 'Por Defecto: Nueva Ventana';
$_ADMINLANG['wbteampro']['configfield']['ticket_link_target'] = 'Objetivo del enlace de tickets';
$_ADMINLANG['wbteampro']['configfield']['ticket_link_target-help'] = 'Por Defecto: Nueva Ventana';
$_ADMINLANG['wbteampro']['configfield']['page_listing_limit'] = 'Límite de listado de páginas';
$_ADMINLANG['wbteampro']['configfield']['page_listing_limit-help'] ='El número total de registros que se muestran por página';
$_ADMINLANG['wbteampro']['configfield']['thread_listing_limit'] = 'Límite de lista de hilos';
$_ADMINLANG['wbteampro']['configfield']['thread_listing_limit-help'] = 'El número total de publicaciones que se mostrarán en las páginas de hilos';
$_ADMINLANG['wbteampro']['configfield']['thread_thumbnail_dimension'] = 'Tamaño miniatura de la rosca';
$_ADMINLANG['wbteampro']['configfield']['thread_thumbnail_dimension-help'] = 'El tamaño miniatura de las imágenes mostradas en los subprocesos del archivo';
$_ADMINLANG['wbteampro']['configfield']['thread_textcollapse'] = 'Thread Text Collapse';
$_ADMINLANG['wbteampro']['configfield']['thread_textcollapse-help'] = 'Texto largo colapsado con un botón de Expandir';
$_ADMINLANG['wbteampro']['configfield']['keepalive_timeout'] = 'Mantener con vida el tiempo de espera';
$_ADMINLANG['wbteampro']['configfield']['keepalive_timeout-help'] = 'Número de segundos entre pings de servidor';
$_ADMINLANG['wbteampro']['configfield']['js_delete_confirm'] = 'Eliminar confirmación';
$_ADMINLANG['wbteampro']['configfield']['js_delete_confirm-help'] = 'Confirmación para mostrar en Eliminar Acciones';
$_ADMINLANG['wbteampro']['configfield']['clientarea_primarynavbar_link'] ='Mostrar enlace de navegación del cliente';
$_ADMINLANG['wbteampro']['configfield']['clientarea_primarynavbar_link-help'] = 'Mostrar el link de “Mis Proyectos” en la barra primaria de navegación del cliente.';
$_ADMINLANG['wbteampro']['configfield']['server_timezone'] = 'Uso Horario del Servidor';
$_ADMINLANG['wbteampro']['configfield']['server_timezone-time'] = 'Hora del Servidor';
$_ADMINLANG['wbteampro']['configfield']['server_timezone-help'] = 'Anular el Uso horario del Servidor (Dejar en blanco para usar por defecto)';
$_ADMINLANG['wbteampro']['configfield']['server_timezone-default'] = 'Servidor por defecto';
$_ADMINLANG['wbteampro']['configfield']['cron_adminid'] = 'Usuario Cron Admin';
$_ADMINLANG['wbteampro']['configfield']['cron_adminid-help'] = 'Admin usado cuando se ejecutan llamadas API a WHMCS';
$_ADMINLANG['wbteampro']['configfield']['cron_password'] = 'Contraseña Cron';
$_ADMINLANG['wbteampro']['configfield']['cron_password-help'] = 'Contraseña Opcional para llamadas directas a cron.php <br/><small><a href="'. WHMCS_URL .'modules/addons/wbteampro/cron.php?cron_password=xxx" target="_blank">/modules/addons/wbteampro/cron.php?cron_password=xxx</a></small>';
$_ADMINLANG['wbteampro']['configfield']['use_gzhandler'] = 'Compresión de salida';
$_ADMINLANG['wbteampro']['configfield']['use_gzhandler-help'] = 'Utilice el controlador gzip para mejorar los tiempos de respuesta';
$_ADMINLANG['wbteampro']['configfield']['system_log_emails'] = 'Registro de Emails enviados';
$_ADMINLANG['wbteampro']['configfield']['system_log_emails-help'] = 'Guardar el historial de emails en el registro de email de WHMCS';
$_ADMINLANG['wbteampro']['configfield']['api_active'] = 'API Activo';
$_ADMINLANG['wbteampro']['configfield']['api_active-help'] = 'Permitir llamadas a través del sistema API';
$_ADMINLANG['wbteampro']['configfield']['system_tmp_path'] = 'Ruta de almacenamiento temporal';
$_ADMINLANG['wbteampro']['configfield']['system_tmp_path-help'] = 'Ruta relativa o absoluta donde se escriben archivos temporales';
$_ADMINLANG['wbteampro']['configfield']['otaupdate_autocheck'] = 'Automatic Check';
$_ADMINLANG['wbteampro']['configfield']['otaupdate_autocheck-help'] = 'Comprobación automática de actualización de software diariamente.';
$_ADMINLANG['wbteampro']['configfield']['otaupdate_releasefilter'] = 'Lanzamientos opcionales';
$_ADMINLANG['wbteampro']['configfield']['otaupdate_releasefilter-help'] = 'Opcionalmente, puede optar por comprobar si hay actualizaciones no oficiales.';
$_ADMINLANG['wbteampro']['configfield']['timelog_elapsed_format'] ='Formato de tiempo transcurrido. ';
$_ADMINLANG['wbteampro']['configfield']['timelog_elapsed_format-help'] = 'Por Defecto: Automático.';
$_ADMINLANG['wbteampro']['configfield']['timelog_ticketreply_autostop'] = 'Parada automática del registro de tiempo';
$_ADMINLANG['wbteampro']['configfield']['timelog_ticketreply_autostop-help'] = 'Detener automáticamente los registros de tiempo al responder a un ticket';
$_ADMINLANG['wbteampro']['configfield']['timelog_ticketreply_autostop_onstatus'] = 'Filtro de estado de Ticket para a parada automática del registro de tiempo';
$_ADMINLANG['wbteampro']['configfield']['timelog_ticketreply_autostop_onstatus-help'] = 'Especifique los estados de los tickets que activarán la función parada automática del registro de tiempo (ninguno para todos)';
$_ADMINLANG['wbteampro']['configfield']['project']['adjust_date'] = 'Auto Ajustar Fecha(s)';
$_ADMINLANG['wbteampro']['configfield']['project']['adjust_date-help'] = 'Ajustar las fechas de proyecto para acomodar los límites de las fechas de árbol de acciones';
$_ADMINLANG['wbteampro']['configfield']['project']['project_type'] = 'Tipo de Proyecto(s)';
$_ADMINLANG['wbteampro']['configfield']['project']['project_type-help'] = 'Tipos de proyectos disponibles (uno por línea)';
$_ADMINLANG['wbteampro']['configfield']['project']['project_status'] = 'Estado de Proyecto(s)';
$_ADMINLANG['wbteampro']['configfield']['project']['project_status-help'] = 'Estado de proyectos disponibles (uno por línea)';
$_ADMINLANG['wbteampro']['configfield']['project']['allow_assigned_any-help'] = 'Permitir que un proyecto se le asigna la opción "cualquier" admin';
$_ADMINLANG['wbteampro']['configfield']['project']['allow_assigned_any'] = 'Permitir asignar a "Cualquiera"';
$_ADMINLANG['wbteampro']['configfield']['action']['max_depth'] = 'Profundidad máxima de acción (#)';
$_ADMINLANG['wbteampro']['configfield']['action']['max_depth-help'] = "La profundidad máxima de las acciones del proyecto";
$_ADMINLANG['wbteampro']['configfield']['action']['adjust_date'] = 'Fecha(s) Auto Ajustable(s)';
$_ADMINLANG['wbteampro']['configfield']['action']['adjust_date-help'] = 'Ajustar las fechas de acción a los límites de la fecha de la subacción';
$_ADMINLANG['wbteampro']['configfield']['action']['date_start_offset'] = 'Nueva fecha de inicio de la acción';
$_ADMINLANG['wbteampro']['configfield']['action']['date_start_offset-help'] = 'Seleccione la regla para crear una nueva acción de Comenzar Fechas.';
$_ADMINLANG['wbteampro']['configfield']['action']['default_duration'] = 'Nueva duración de Acción';
$_ADMINLANG['wbteampro']['configfield']['action']['default_duration-help'] = 'Valor de duración inicial de las nuevas acciones (segundos).';
$_ADMINLANG['wbteampro']['configfield']['action']['finish_offset'] = 'Nueva Acción Finaliza Desplazamiento';
$_ADMINLANG['wbteampro']['configfield']['action']['finish_offset-help'] = 'Compensación para la fecha de finalización de las nuevas acciones (segundos)';
$_ADMINLANG['wbteampro']['configfield']['action']['finish_conflict'] = 'Terminar Conflicto';
$_ADMINLANG['wbteampro']['configfield']['action']['finish_conflict-help'] = 'Desplazamiento para la fecha de finalización en el conflicto de fecha (segundos)';
$_ADMINLANG['wbteampro']['configfield']['action']['action_type'] = 'Tipo(s) de Accion(es)';
$_ADMINLANG['wbteampro']['configfield']['action']['action_type-help'] = 'Tipos de acciones disponibles (uno por línea)';
$_ADMINLANG['wbteampro']['configfield']['action']['action_status'] = 'Estado de Acción(es)';
$_ADMINLANG['wbteampro']['configfield']['action']['action_status-help'] = 'Estado de proyectos disponibles (uno por línea)';
$_ADMINLANG['wbteampro']['configfield']['action']['insert_position'] = 'Nueva Posición de Inserción de Acción';
$_ADMINLANG['wbteampro']['configfield']['action']['insert_position-help'] = 'Posición de la nueva acción en la lista de niños';
$_ADMINLANG['wbteampro']['configfield']['action']['collapse_complete'] = 'Contraer Acciones Completas';
$_ADMINLANG['wbteampro']['configfield']['action']['collapse_complete-help'] = 'Cargar inicialmente los árboles de acción completados en un estado colapsado';
$_ADMINLANG['wbteampro']['configfield']['action']['mask_complete'] = 'Máscara de Acciones Completadas';
$_ADMINLANG['wbteampro']['configfield']['action']['mask_complete-help'] = 'Cargar inicialmente los árboles de acción completados en un estado enmascarado';
$_ADMINLANG['wbteampro']['configfield']['action']['allow_assigned_any'] = 'Permitir asignado a “Cualquiera”';
$_ADMINLANG['wbteampro']['configfield']['action']['allow_assigned_any-help'] = 'Permitir que las acciones sean asignadas a "Cualquier" administrador';
$_ADMINLANG['wbteampro']['configfield']['action']['status_oncomplete'] = 'Estado de acción competa';
$_ADMINLANG['wbteampro']['configfield']['action']['status_oncomplete-help'] = 'Asignar automáticamente el estado cuando se completa al 100%';
$_ADMINLANG['wbteampro']['configfield']['action']['default_recurdays'] = 'Días hábiles periódicos predeterminados';
$_ADMINLANG['wbteampro']['configfield']['action']['default_recurdays-help'] = 'Días de semana predeterminados para un resumen semanal recurrente';
$_ADMINLANG['wbteampro']['configfield']['format']['projectDate'] = 'Fecha de Proyecto';
$_ADMINLANG['wbteampro']['configfield']['format']['projectDate-help'] = 'Fecha de creación, modificación, inicio y finalización del proyecto';
$_ADMINLANG['wbteampro']['configfield']['format']['timelogDate'] = 'Fecha / Hora de Registro de Tiempo';
$_ADMINLANG['wbteampro']['configfield']['format']['timelogDate-help'] = 'Fechas de Inicio y fin del Registro de Tiempo';
$_ADMINLANG['wbteampro']['configfield']['format']['actionDate'] = 'Fecha de Acción';
$_ADMINLANG['wbteampro']['configfield']['format']['actionDate-help'] = 'Fechas de Creación, comienzo, y finalización de la Acción';
$_ADMINLANG['wbteampro']['configfield']['format']['ticketDate'] = 'Fecha de Ticket';
$_ADMINLANG['wbteampro']['configfield']['format']['ticketDate-help'] = 'Fechas de creación y respuesta del Ticket';
$_ADMINLANG['wbteampro']['configfield']['format']['topicDate'] = 'Fecha / Hora del hilo del Tema';
$_ADMINLANG['wbteampro']['configfield']['format']['topicDate-help'] = 'Fechas de creación y respuesta del hilo del Tema';
$_ADMINLANG['wbteampro']['configfield']['format']['topicPostDate'] = 'Fecha / Hora de Publicación del Tema';
$_ADMINLANG['wbteampro']['configfield']['format']['topicPostDate-help'] = 'Fecha de Creación de la Publicación del Hilo del Tema';
$_ADMINLANG['wbteampro']['configfield']['format']['fileDate'] = 'Fecha / Hora del Archivo de Hilo';
$_ADMINLANG['wbteampro']['configfield']['format']['fileDate-help'] = 'Fechas de Creacion de Archivo y Respuestas en el Hilo';
$_ADMINLANG['wbteampro']['configfield']['format']['filePostDate'] = 'Fecha / hora de publicación del archivo';
$_ADMINLANG['wbteampro']['configfield']['format']['filePostDate-help'] = 'File Thread Post Created date';

$_ADMINLANG['wbteampro']['configfield']['format']['jsDate'] = 'Formato de fecha del filtro / selector';
$_ADMINLANG['wbteampro']['configfield']['format']['jsDate-help'] = 'Formato de fecha usado en la lista de filtros y cuadro de diálogo selector.';
$_ADMINLANG['wbteampro']['configfield']['format']['jsTime'] = 'Formato de hora del filtro / selector';
$_ADMINLANG['wbteampro']['configfield']['format']['jsTime-help'] = 'Formato de hora utilizado en la lista de filtros y cuadro de diálogo del selector.';

$_ADMINLANG['wbteampro']['configfield']['format']['adminName'] = 'Nombre del administrador';
$_ADMINLANG['wbteampro']['configfield']['format']['adminName-help'] = 'Mostrar Administrador / Asignado y seleccionar lista';
$_ADMINLANG['wbteampro']['configfield']['format']['clientName'] = 'Nombre del cliente';
$_ADMINLANG['wbteampro']['configfield']['format']['clientName-help'] = 'Visualización del cliente y lista de búsqueda';
$_ADMINLANG['wbteampro']['configfield']['format']['contactName'] = 'Nombre de contacto';
$_ADMINLANG['wbteampro']['configfield']['format']['contactName-help'] = 'Mostrar contacto y seleccionar lista';
$_ADMINLANG['wbteampro']['configfield']['format']['ajaxClientList'] = 'Búsqueda de clientes de Ajax';
$_ADMINLANG['wbteampro']['configfield']['format']['ajaxClientList-help'] = 'Formato de lista de búsqueda de cliente dinámica';
$_ADMINLANG['wbteampro']['configfield']['timelog']['timelog_type'] = 'Tipo(s) de Tiempo(s) de Registro';
$_ADMINLANG['wbteampro']['configfield']['timelog']['timelog_type-help'] = 'Opciones de tipo de tiempo de registro disponibles (una por línea)';
$_ADMINLANG['wbteampro']['configfield']['billing']['hourly_rate'] = 'Tarifa por hora';
$_ADMINLANG['wbteampro']['configfield']['billing']['hourly_rate-help'] = 'Tasa de facturación por defecto por hora de entrada de tiempo de trabajo';
$_ADMINLANG['wbteampro']['configfield']['billing']['email_invoice'] = 'Enviar factura';
$_ADMINLANG['wbteampro']['configfield']['billing']['email_invoice-help'] = 'Predeterminado para la opción de enviar un email al cliente con la factura una vez creada';
$_ADMINLANG['wbteampro']['configfield']['billing']['tax_rate'] = 'Tasa Impositiva';
$_ADMINLANG['wbteampro']['configfield']['billing']['tax_rate-help'] = 'Valor por defecto a utilizar para la tasa impositiva cuando no se define el cliente';
$_ADMINLANG['wbteampro']['configfield']['billing']['apply_tax'] = 'Aplicar Impuestos';
$_ADMINLANG['wbteampro']['configfield']['billing']['apply_tax-help'] = 'Valor predeterminado para la opción de marcar entradas para impuestos';
$_ADMINLANG['wbteampro']['configfield']['billing']['apply_credits'] = 'Aplicar Créditos';
$_ADMINLANG['wbteampro']['configfield']['billing']['apply_credits-help'] = 'Predeterminado para la opción de aplicar créditos del cliente a la factura';
$_ADMINLANG['wbteampro']['configfield']['billing']['round_elapsed'] = 'Redondear tiempo transcurrido';
$_ADMINLANG['wbteampro']['configfield']['billing']['round_elapsed-help'] = 'Redondear el valor hacia arriba o (-) hacia abajo, hasta el minuto más cercano';
$_ADMINLANG['wbteampro']['configfield']['billing']['desc_format'] = 'Formato de artículo de factura'; // Deprecated
$_ADMINLANG['wbteampro']['configfield']['billing']['desc_format-help'] = 'Formato para las descripciones de elementos de línea de factura'; // Deprecated
$_ADMINLANG['wbteampro']['configfield']['billing']['default_billable_status'] = 'Estado facturable predeterminado';
$_ADMINLANG['wbteampro']['configfield']['billing']['default_billable_status-help'] = 'Valor predeterminado para nuevos proyectos o cronogramas externos';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['clientsummary'] = 'Resumen de Cliente';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['clientsummary-help'] = 'Formato para el resumen del tiempo agrupado por Cliente';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['projectsummary'] = 'Resumen de Proyecto';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['projectsummary-help'] = 'Formato para el resumen del tiempo agrupado por Proyecto';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['actionsummary'] = 'Resumen de Acción';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['actionsummary-help'] = 'Formato para el resumen del tiempo agrupado por acción';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['ticketsummary'] = 'Resumen de Ticket';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['ticketsummary-help'] = 'Formato para el resumen del tiempo agrupado por ticket';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['clientsubject'] = 'Registro de Tiempo del cliente';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['clientsubject-help'] = 'Formato para un registro de tiempo vinculado a un cliente';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['projectsubject'] = 'Registro de Tiempo de Proyecto';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['projectsubject-help'] = 'Formato para un registro de tiempo vinculado a un proyecto';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['actionsubject'] = 'Registro de Tiempo de Acción';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['actionsubject-help'] = 'Formato para un registro de tiempo vinculado a una acción';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['ticketsubject'] = 'Tiempo de Registro del Ticket';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['ticketsubject-help'] = 'Formato para un registro de tiempo vinculado a un ticket';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['customfieldlist'] = 'Variables de campo personalizadas';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['customfieldlist-help'] = 'Dependiendo de la información disponible para una línea de pedido, algunas o todas las siguientes variables de campo se pueden utilizar para personalizar la notación de la factura utilizada al generar elementos de línea de factura.';

/************** Extension System */
$_ADMINLANG['wbteampro']['extensionlist']['type_plugin'] = 'Plugin';
$_ADMINLANG['wbteampro']['extensionlist']['type_module'] = 'Módulo';
$_ADMINLANG['wbteampro']['extensionlist']['zone_all'] = 'Todo';
$_ADMINLANG['wbteampro']['extensionlist']['zone_client'] = 'Cliente';
$_ADMINLANG['wbteampro']['extensionlist']['zone_admin'] = 'Administrador';
$_ADMINLANG['wbteampro']['extensionlist']['new_module'] = 'Nuevo Módulo';
$_ADMINLANG['wbteampro']['extensionlist']['install_plugin'] = 'Instalar Plugins';
$_ADMINLANG['wbteampro']['extensionfield']['type_plugin'] = 'Plugin';
$_ADMINLANG['wbteampro']['extensionfield']['extension_name'] = 'Nombre de instancia';
$_ADMINLANG['wbteampro']['extensionfield']['extension_enabled'] = 'Habilitado';
$_ADMINLANG['wbteampro']['extensionfield']['extension_zone'] = 'Zona del sistema';
$_ADMINLANG['wbteampro']['extensionfield']['date_created'] = 'Instalado';
$_ADMINLANG['wbteampro']['extensionxml']['name'] = 'Nombre';
$_ADMINLANG['wbteampro']['extensionxml']['version'] = 'Versión';
$_ADMINLANG['wbteampro']['extensionxml']['author'] = 'Autor';
$_ADMINLANG['wbteampro']['extensionxml']['created'] = 'Creado';
$_ADMINLANG['wbteampro']['extensionxml']['description'] = 'Descripción';

/************** Setup Update */
$_ADMINLANG['wbteampro']['setupupdate']['package_uptodate'] = 'su paquete <b>v%1$s</b> está actualizado.';
$_ADMINLANG['wbteampro']['setupupdate']['download_available'] = 'Paquete <b>%1$s</b> actualizado <b>v%2$s</b> habilitado para la descarga!<br/>Puede elegir instalar la actualización, o descargar el paquete para que sea instalado manualmente.<br/><br/>'
                                                              . '<button class="btn btn-primary" onclick="%3$s">Install Upgrade</button> or <button class="btn" onclick="%4$s">Download Only</button>';

/************************************** License First Run */
$_ADMINLANG['wbteampro']['licenseform']['description'] = '<b>La clave de licencia para su instalación es inválida.</b><br/>Por favor actualice los siguientes ajustes para activar su instalación.';
$_ADMINLANG['wbteampro']['licenseform']['success'] = '<b>Licencia Instalada</b><br/>Su Clave de Licencia ha sido aplicada.';

/************************************** Widgets */
$_ADMINLANG['wbteampro']['widget']['projectactivity']['title'] = 'Actividad de Proyecto wbTeamPro';
$_ADMINLANG['wbteampro']['widget']['projectactivity']['header'] = 'Actividad de Proyecto';
$_ADMINLANG['wbteampro']['widget']['actions']['title'] = 'wbTeamPro Acciones';
$_ADMINLANG['wbteampro']['widget']['actions']['header'] = 'Acciones';
$_ADMINLANG['wbteampro']['widget']['topactions']['title'] = 'Acciones mejor valoradas wbTeamPro';
$_ADMINLANG['wbteampro']['widget']['topactions']['header'] = 'Acciones mejor valoradas';
$_ADMINLANG['wbteampro']['widget']['myactions']['title'] = ' Mis Acciones wbTeamPro';
$_ADMINLANG['wbteampro']['widget']['myactions']['header'] = 'Mis Acciones';
$_ADMINLANG['wbteampro']['widget']['touchedactions']['title'] = 'Actividad de Acción wbTeamPro';
$_ADMINLANG['wbteampro']['widget']['touchedactions']['header'] = 'Acciones con Actividad Reciente';
$_ADMINLANG['wbteampro']['widget']['actionsannumreview']['title'] = ' Acción de Resumen Anual wbTeamPro';
$_ADMINLANG['wbteampro']['widget']['actionsannumreview']['header'] = 'Acción de Resumen Anual';
$_ADMINLANG['wbteampro']['widget']['timelogbiennium']['title'] = 'wbTeamPro Timelog Biennium';
$_ADMINLANG['wbteampro']['widget']['timelogbiennium']['header'] = 'Timelog Biennium';
$_ADMINLANG['wbteampro']['widget']['timelogactivity']['title'] = ' Actividad de Tiempo de Registro wbTeamPro';
$_ADMINLANG['wbteampro']['widget']['timelogactivity']['header'] = 'Actividad de Tiempo de Registro';
$_ADMINLANG['wbteampro']['widget']['fileactivity']['title'] = ' Actividad del Archivo wbTeamPro';
$_ADMINLANG['wbteampro']['widget']['fileactivity']['header'] = 'Actividad del Archivo';
$_ADMINLANG['wbteampro']['widget']['topicactivity']['title'] = ' Actividad del Tema wbTeamPro';
$_ADMINLANG['wbteampro']['widget']['topicactivity']['header'] = 'Actividad del Tema';
$_ADMINLANG['wbteampro']['widget']['topicfeed']['title'] = 'Alimentación del Tema wbTeamPro';
$_ADMINLANG['wbteampro']['widget']['topicfeed']['header'] = 'Alimentación de Tema';
$_ADMINLANG['wbteampro']['widget']['ticketactivity']['title'] = 'Actividad de Ticket wbTeamPro';
$_ADMINLANG['wbteampro']['widget']['ticketactivity']['header'] = 'Actividad de Ticket';

/************************************** QuickMenu */
$_ADMINLANG['wbteampro']['quickmenu']['delete_rows'] = 'Eliminar Filas';
$_ADMINLANG['wbteampro']['quickmenu']['invoice_rows'] = 'Filas de facturas';
$_ADMINLANG['wbteampro']['quickmenu']['modify_rows'] = 'Modificar filas';

// REMOVE ??
$_ADMINLANG['wbteampro']['quickmenu']['set_rows_billable'] = "Marcar como facturable";
$_ADMINLANG['wbteampro']['quickmenu']['unset_rows_billable'] = 'Marcar como NO facturable';

/************************************** Support Tickets Tab */
$_ADMINLANG['wbteampro']['supporttickets']['ticket_list'] = 'Tickets de Proyecto';
$_ADMINLANG['wbteampro']['supporttickets']['ticket_elapsed'] = 'Tiempo de ticket transcurrido';
$_ADMINLANG['wbteampro']['supporttickets']['timelog_list'] = 'Ticket de Registros de Tiempo';
$_ADMINLANG['wbteampro']['supporttickets']['file_list'] = 'Archivos relacionados con el proyecto';

/************************************** Select List Options */
$_ADMINLANG['wbteampro']['listoption']['yes'] = 'Si';
$_ADMINLANG['wbteampro']['listoption']['no'] = 'No';
$_ADMINLANG['wbteampro']['listoption']['blank'] = 'Nueva Ventana';
$_ADMINLANG['wbteampro']['listoption']['self'] = 'Misma Ventana';
$_ADMINLANG['wbteampro']['listoption']['top'] = 'Ventana Superior';
$_ADMINLANG['wbteampro']['listoption']['parent'] = 'Ventana de Padres';
$_ADMINLANG['wbteampro']['listoption']['none'] = 'No hay confirmación';
$_ADMINLANG['wbteampro']['listoption']['prompt'] = 'Tipiar para confirmar';
$_ADMINLANG['wbteampro']['listoption']['confirm'] = 'Hacer Click en OK para confirmar';
$_ADMINLANG['wbteampro']['listoption']['action_priority']['1'] = 'Bajo';
$_ADMINLANG['wbteampro']['listoption']['action_priority']['2'] = 'Medio';
$_ADMINLANG['wbteampro']['listoption']['action_priority']['3'] = 'Alto';
$_ADMINLANG['wbteampro']['listoption']['level_class']['milestone'] = 'Hito';
$_ADMINLANG['wbteampro']['listoption']['level_class']['group'] = 'Grupo';
$_ADMINLANG['wbteampro']['listoption']['level_class']['task'] = 'Tarea';
$_ADMINLANG['wbteampro']['listoption']['recur_frequency']['none'] = 'Ninguno';
$_ADMINLANG['wbteampro']['listoption']['recur_frequency']['daily'] = 'Diariamente';
$_ADMINLANG['wbteampro']['listoption']['recur_frequency']['weekly'] = 'Semanalmente';
$_ADMINLANG['wbteampro']['listoption']['recur_frequency']['monthly'] = 'Mensualmente';
$_ADMINLANG['wbteampro']['listoption']['recur_frequency']['yearly'] = 'Anualmente';
$_ADMINLANG['wbteampro']['listoption']['date_start_offset']['today'] = 'Hoy';
$_ADMINLANG['wbteampro']['listoption']['date_start_offset']['tomorrow'] = 'Mañana';
$_ADMINLANG['wbteampro']['listoption']['date_start_offset']['parent'] = 'Fecha de inicio de los padres';
$_ADMINLANG['wbteampro']['listoption']['date_start_offset']['lastsibling'] = 'Fecha de finalización de los últimos hermanos';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['su'] = 'Domingo';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['mo'] = 'Lunes';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['tu'] = 'Martes';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['we'] = 'Miércoles';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['th'] = 'Jueves';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['fr'] = 'Viernes';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['sa'] = 'Sábado';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['su'] = 'Dom';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['mo'] = 'Lun';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['tu'] = 'Mar';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['we'] = 'Mie';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['th'] = 'Jue';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['fr'] = 'Vie';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['sa'] = 'Sab';
$_ADMINLANG['wbteampro']['listoption']['update_release']['beta'] = 'Beta';
$_ADMINLANG['wbteampro']['listoption']['update_release']['rc'] = 'Liberar Candidato';
$_ADMINLANG['wbteampro']['listoption']['update_release']['stable'] = 'Estable';
$_ADMINLANG['wbteampro']['listoption']['timelog_group_mode']['timelog'] = 'Registro de tiempo';
$_ADMINLANG['wbteampro']['listoption']['timelog_group_mode']['client'] = 'Cliente';
$_ADMINLANG['wbteampro']['listoption']['timelog_group_mode']['project'] = 'Projecto';
$_ADMINLANG['wbteampro']['listoption']['timelog_group_mode']['action'] = 'Acción';
$_ADMINLANG['wbteampro']['listoption']['timelog_group_mode']['ticket'] = 'Ticket';

/************************************** Dynamic Select List Options */
$_ADMINLANG['wbteampro']['listoption']['project_type']['internal'] = 'Interno';
$_ADMINLANG['wbteampro']['listoption']['project_type']['product'] = 'Producto';
$_ADMINLANG['wbteampro']['listoption']['project_type']['service'] = 'Servicio';
$_ADMINLANG['wbteampro']['listoption']['project_status']['service'] = 'Servicio';
$_ADMINLANG['wbteampro']['listoption']['project_status']['under_review'] = 'Bajo Revisión';
$_ADMINLANG['wbteampro']['listoption']['project_status']['active'] = 'Activo';
$_ADMINLANG['wbteampro']['listoption']['project_status']['in_production'] = 'En Producción';
$_ADMINLANG['wbteampro']['listoption']['project_status']['in_testing'] = 'En Prueba';
$_ADMINLANG['wbteampro']['listoption']['project_status']['completed'] = 'Completo';
$_ADMINLANG['wbteampro']['listoption']['project_status']['closed'] = 'Cerrado';
$_ADMINLANG['wbteampro']['listoption']['action_type']['planning'] = 'Planeamiento';
$_ADMINLANG['wbteampro']['listoption']['action_type']['research'] = 'Búsqueda';
$_ADMINLANG['wbteampro']['listoption']['action_type']['contact'] = 'Contacto';
$_ADMINLANG['wbteampro']['listoption']['action_type']['service'] = 'Servicio';
$_ADMINLANG['wbteampro']['listoption']['action_type']['development'] = 'Desarrollo';
$_ADMINLANG['wbteampro']['listoption']['action_type']['review'] = 'Rever';
$_ADMINLANG['wbteampro']['listoption']['action_status']['closed'] = 'Cerrado';
$_ADMINLANG['wbteampro']['listoption']['action_status']['active'] = 'Activo';
$_ADMINLANG['wbteampro']['listoption']['action_status']['progress'] = 'Progreso';
$_ADMINLANG['wbteampro']['listoption']['action_status']['cancelled'] = 'Cancelado';
$_ADMINLANG['wbteampro']['listoption']['action_status']['complete'] = 'Completar';
$_ADMINLANG['wbteampro']['listoption']['timelog_type']['standard'] = 'Estándar';
$_ADMINLANG['wbteampro']['listoption']['timelog_type']['in_house'] = 'Interno';
$_ADMINLANG['wbteampro']['listoption']['timelog_type']['rush'] = 'Apuro';
$_ADMINLANG['wbteampro']['listoption']['timelog_type']['emergency'] = 'Emergencia';
$_ADMINLANG['wbteampro']['listoption']['insert_position']['first'] = 'Primero';
$_ADMINLANG['wbteampro']['listoption']['insert_position']['last'] = 'Último';

/** END LANGUAGE **/
