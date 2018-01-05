<?php

/**

  Webuddha wbTeamPro
  (c)2010 Webuddha.com, The Holodyn Corporation - All Rights Reserved

  CHANGELOG ************

**/

defined('WHMCS_ADMIN') or die('Invalid Access');

/************************************** Errors */
$_ADMINLANG['wbteampro']['error']['default_label'] = 'Error Message';
$_ADMINLANG['wbteampro']['error']['license_error'] = 'wbTeamPro Error: License Authorization Failed';
$_ADMINLANG['wbteampro']['error']['license_invalid'] = 'wbTeamPro Error: Invalid License Key';
$_ADMINLANG['wbteampro']['error']['license_expired'] = 'wbTeamPro Error: License Key Expired';
$_ADMINLANG['wbteampro']['error']['license_suspended'] = 'wbTeamPro Error: License Key Suspended';
$_ADMINLANG['wbteampro']['error']['change_error'] = '<b>Error Saving Changes!</b><br/>Your changes have NOT been saved.';
$_ADMINLANG['wbteampro']['error']['permissiondenied'] = 'Permission Denied';
$_ADMINLANG['wbteampro']['error']['invalidroleid'] = 'Your Administrator Role is Not Permitted to Access wbTeamPro';
$_ADMINLANG['wbteampro']['error']['invalidrequest'] = 'Request Invalid or Bad Format';
$_ADMINLANG['wbteampro']['error']['project_file_path_invalid'] = '<b>Invalid File Path!</b><br>The Project File Path defined is NOT a valid directory.';
$_ADMINLANG['wbteampro']['error']['project_file_path_locked'] = '<b>File Path Not Writable!</b><br>The Project File Path defined is NOT writable.';
$_ADMINLANG['wbteampro']['error']['system_tmp_path_invalid'] = '<b>Invalid File Path!</b><br>The System Temp Path defined is NOT a valid directory.';
$_ADMINLANG['wbteampro']['error']['system_tmp_path_locked'] = '<b>File Path Not Writable!</b><br>The System Temp Path defined is NOT writable.';
$_ADMINLANG['wbteampro']['error']['plugin_loaderror'] = '<b>Plugin Error!</b><br>Error loading the Plugin Object from from.';
$_ADMINLANG['wbteampro']['error']['plugin_protected'] = '<b>Plugin Error!</b><br>Error modifying protected plugin.';
$_ADMINLANG['wbteampro']['error']['keeping_project_type'] = 'The project type "%s" is currently in use and cannot be removed';
$_ADMINLANG['wbteampro']['error']['keeping_project_status'] = 'The project status "%s" is currently in use and cannot be removed';
$_ADMINLANG['wbteampro']['error']['keeping_action_type'] = 'The action type "%s" is currently in use and cannot be removed';
$_ADMINLANG['wbteampro']['error']['keeping_action_status'] = 'The action status "%s" is currently in use and cannot be removed';
$_ADMINLANG['wbteampro']['error']['keeping_timelog_type'] = 'The timelog type "%s" is currently in use and cannot be removed';
$_ADMINLANG['wbteampro']['error']['record_notfound'] = 'Record Not Found';
$_ADMINLANG['wbteampro']['error']['record_undefined'] = 'Record Undefined';
$_ADMINLANG['wbteampro']['error']['record_updatefailed'] = 'Error Updating Record(s)';
$_ADMINLANG['wbteampro']['error']['record_incomplete'] = 'The required data was not provided';
$_ADMINLANG['wbteampro']['error']['record_invalidvalue'] = 'The value provide for %s is invalid or not allowed.';
$_ADMINLANG['wbteampro']['error']['update_check_failed'] = 'Failed to retrieve update status from remote server.';
$_ADMINLANG['wbteampro']['error']['update_failed'] = '<b>Update Failed</b><br>A fatal error has interrupted the update operation.<br>Please review the log and correct any issues before trying again.';
$_ADMINLANG['wbteampro']['error']['view_layout_not_found'] = 'wbTeamPro Error: View Layout Not Found (%s)';
$_ADMINLANG['wbteampro']['error']['demo_restricted'] = '<b>Restricted Mode</b><br>The changes you have attempted are not permitted while the system is operating in Demo mode.';

/************************************** Alerts */
$_ADMINLANG['wbteampro']['alert']['default_label'] = 'Alert Message';
$_ADMINLANG['wbteampro']['alert']['project_created'] = '<b>New Project Created</b><br>Your new project has been created.  You can now create the Action Tree.';
$_ADMINLANG['wbteampro']['alert']['batch_success'] = '<b>Updates Successful</b><br>The updates have been applied the the selected records successfully!';
$_ADMINLANG['wbteampro']['alert']['change_success'] = '<b>Changes Saved</b><br>The changes made to the previous record have been saved.';
$_ADMINLANG['wbteampro']['alert']['toggle_success'] = '<b>Update Success</b><br>The status has been changed successfully!';
$_ADMINLANG['wbteampro']['alert']['delete_success'] = '<b>Record Deleted</b><br>The record has been successfully deleted.';
$_ADMINLANG['wbteampro']['alert']['close_success'] = '<b>Record Closed</b><br>You have successfully closed the previous record.';
$_ADMINLANG['wbteampro']['alert']['copy_success'] = '<b>Copy Success</b><br>The project has been copied successfully.';
$_ADMINLANG['wbteampro']['alert']['update_success'] = '<b>Update Success</b><br>The updated package has been installed successfully!';

/************************************** Notices */
$_ADMINLANG['wbteampro']['notice']['default_label'] = 'Notice Message';
$_ADMINLANG['wbteampro']['notice']['superadmin'] = 'Project Super Admin';
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
$_ADMINLANG['wbteampro']['graph']['label_projectsummary'] = 'A Comparison of Project Activity';
$_ADMINLANG['wbteampro']['graph']['label_timelogtwoyearsummary'] = 'A Summary of Total Hours Logged';

/************************************** Menu */
$_ADMINLANG['wbteampro']['menu']['projectmanager'] = 'Project Manager';
$_ADMINLANG['wbteampro']['menu']['tablabel'] = 'Project';
$_ADMINLANG['wbteampro']['menu']['viewall'] = 'View All';
$_ADMINLANG['wbteampro']['menu']['dashboard'] = 'Dashboard';
$_ADMINLANG['wbteampro']['menu']['projects'] = 'Projects';
$_ADMINLANG['wbteampro']['menu']['assignedprojects'] = 'Assigned Projects';
$_ADMINLANG['wbteampro']['menu']['myprojects'] = 'My Projects';
$_ADMINLANG['wbteampro']['menu']['newproject'] = 'New Project';
$_ADMINLANG['wbteampro']['menu']['actions'] = 'Actions';
$_ADMINLANG['wbteampro']['menu']['incompletetasks'] = 'Incomplete Tasks';
$_ADMINLANG['wbteampro']['menu']['assignedtasks'] = 'Assigned Tasks';
$_ADMINLANG['wbteampro']['menu']['myactions'] = 'My Actions';
$_ADMINLANG['wbteampro']['menu']['files'] = 'Files';
$_ADMINLANG['wbteampro']['menu']['myfiles'] = 'My Files';
$_ADMINLANG['wbteampro']['menu']['discussions'] = 'Discussions';
$_ADMINLANG['wbteampro']['menu']['mydiscussions'] = 'My Discussions';
$_ADMINLANG['wbteampro']['menu']['tickets'] = 'Tickets';
$_ADMINLANG['wbteampro']['menu']['mytickets'] = 'My Tickets';
$_ADMINLANG['wbteampro']['menu']['timelog'] = 'Time Log';
$_ADMINLANG['wbteampro']['menu']['mytimelog'] = 'My Time Logs';
$_ADMINLANG['wbteampro']['menu']['setupmanager'] = 'System Manager';
$_ADMINLANG['wbteampro']['menu']['archivedprojects'] = 'Archived Projects';
$_ADMINLANG['wbteampro']['menu']['templateprojects'] = 'Project Templates';
$_ADMINLANG['wbteampro']['menu']['system'] = 'System';
$_ADMINLANG['wbteampro']['menu']['setup_config'] = 'Configuration';
$_ADMINLANG['wbteampro']['menu']['setup_update'] = 'Check for Updates';
$_ADMINLANG['wbteampro']['menu']['setup_update_avail'] = 'Update Ready';
$_ADMINLANG['wbteampro']['menu']['setup_plugins'] = 'Manage Plugins';
$_ADMINLANG['wbteampro']['menu']['support'] = 'Help & Support';

/************************************** JS */
$_ADMINLANG['wbteampro']['js']['tabProject'] = 'Project';
$_ADMINLANG['wbteampro']['js']['tabProjects'] = 'Projects';
$_ADMINLANG['wbteampro']['js']['tabTickets'] = 'Tickets';
$_ADMINLANG['wbteampro']['js']['loadMsg'] = 'Loading... Please Wait...';
$_ADMINLANG['wbteampro']['js']['titleActiveLogs'] = 'Your Active Timelogs';
$_ADMINLANG['wbteampro']['js']['noActiveLogs'] = 'No Active Timelogs';
$_ADMINLANG['wbteampro']['js']['reqComplete'] = 'Request Complete';
$_ADMINLANG['wbteampro']['js']['uiTimelogStart'] = 'Start';
$_ADMINLANG['wbteampro']['js']['uiTimelogSave'] = 'Save';
$_ADMINLANG['wbteampro']['js']['uiTimelogCancel'] = 'Cancel';
$_ADMINLANG['wbteampro']['js']['uiTicketCreate'] = 'Create';
$_ADMINLANG['wbteampro']['js']['uiTicketCreateOpen'] = 'Create & Open';
$_ADMINLANG['wbteampro']['js']['uiTicketCancel'] = 'Cancel';
$_ADMINLANG['wbteampro']['js']['btnStartTimer'] = 'Start Timer';
$_ADMINLANG['wbteampro']['js']['btnStopTimer'] = 'Stop Timer';
$_ADMINLANG['wbteampro']['js']['btnViewAll'] = 'View All';
$_ADMINLANG['wbteampro']['js']['btnCreate'] = 'Create';
$_ADMINLANG['wbteampro']['js']['msgTimelogSaved'] = 'Timelog Saved for [time]';
$_ADMINLANG['wbteampro']['js']['msgTimelogStopped'] = 'Timelog Stopped after [time]';
$_ADMINLANG['wbteampro']['js']['deleteConfirm'] = 'Select OK to confirm your action';
$_ADMINLANG['wbteampro']['js']['deletePrompt'] = 'Type DELETE to confirm your action';
$_ADMINLANG['wbteampro']['js']['deleteAnswer'] = 'DELETE';
$_ADMINLANG['wbteampro']['js']['deleteCancelled'] = 'Delete Cancelled';
$_ADMINLANG['wbteampro']['js']['textLimitRemain'] = '[remain] of [limit] characters remain';
$_ADMINLANG['wbteampro']['js']['textLimitReached'] = 'maximum [limit] characters reached';
$_ADMINLANG['wbteampro']['js']['copyPrompt'] = 'Type COPY to confirm your action';
$_ADMINLANG['wbteampro']['js']['copyAnswer'] = 'COPY';
$_ADMINLANG['wbteampro']['js']['copyCancelled'] = 'Copy Cancelled';
$_ADMINLANG['wbteampro']['js']['ajaxSearchInput'] = 'type to search...';
$_ADMINLANG['wbteampro']['js']['rruleOccurDaily'] = 'day(s)';
$_ADMINLANG['wbteampro']['js']['rruleOccurWeekly'] = 'week(s)';
$_ADMINLANG['wbteampro']['js']['rruleOccurMonthly'] = 'month(s)';
$_ADMINLANG['wbteampro']['js']['rruleOccurYearly'] = 'years(s)';
$_ADMINLANG['wbteampro']['js']['rowSelectEmpty'] = 'Please Select Row(s) to Manage';
$_ADMINLANG['wbteampro']['js']['rowSelectConfirm'] = 'Select OK to confirm your action';
$_ADMINLANG['wbteampro']['js']['uiInvoiceCreate'] = 'Create / Update Invoice';
$_ADMINLANG['wbteampro']['js']['uiInvoiceCancel'] = 'Cancel';
$_ADMINLANG['wbteampro']['js']['uiInvoiceNoItems'] = 'No Items to Invoice';
$_ADMINLANG['wbteampro']['js']['uiInvoiceSuccess'] = 'The Timelog Invoice(s) have been created Successfully';
$_ADMINLANG['wbteampro']['js']['uiModifyAccept'] = 'Apply Changes';
$_ADMINLANG['wbteampro']['js']['uiModifyCancel'] = 'Cancel';
$_ADMINLANG['wbteampro']['js']['doneEditing'] = 'Done Editing';

/************************************** Page Headers */
$_ADMINLANG['wbteampro']['taskheader']['prefix'] = 'wbTeamPro: ';
$_ADMINLANG['wbteampro']['taskheader']['project_edit_archive'] = ' [ARCHIVE]';
$_ADMINLANG['wbteampro']['taskheader']['project_edit_template'] = ' [TEMPLATE]';
$_ADMINLANG['wbteampro']['taskheader']['project_edit_new'] = 'New Project';
$_ADMINLANG['wbteampro']['taskheader']['project_action_list'] = 'Project Actions';
$_ADMINLANG['wbteampro']['taskheader']['project_ticket_list'] = 'Project Tickets';
$_ADMINLANG['wbteampro']['taskheader']['project_file_list'] = 'Project Files';
$_ADMINLANG['wbteampro']['taskheader']['project_topic_list'] = 'Project Discussions';
$_ADMINLANG['wbteampro']['taskheader']['project_list'] = 'All Projects';
$_ADMINLANG['wbteampro']['taskheader']['action_list'] = 'All Project Actions';
$_ADMINLANG['wbteampro']['taskheader']['file_list'] = 'All Project Files';
$_ADMINLANG['wbteampro']['taskheader']['topic_list'] = 'All Project Topics';
$_ADMINLANG['wbteampro']['taskheader']['ticket_list'] = 'All Project Tickets';
$_ADMINLANG['wbteampro']['taskheader']['timelog_list'] = 'All Project Timelogs';
$_ADMINLANG['wbteampro']['taskheader']['template_list'] = 'All Templates';
$_ADMINLANG['wbteampro']['taskheader']['archive_list'] = 'All Archives';

/************************************** Client Profile Tabs */
$_ADMINLANG['wbteampro']['profiletab']['projects'] = 'Projects';
$_ADMINLANG['wbteampro']['profiletab']['actions'] = 'Actions';
$_ADMINLANG['wbteampro']['profiletab']['files'] = 'Files';
$_ADMINLANG['wbteampro']['profiletab']['topics'] = 'Discussions';
$_ADMINLANG['wbteampro']['profiletab']['timelog'] = 'Time Logs';
$_ADMINLANG['wbteampro']['profiletab']['tickets'] = 'Tickets';

/************************************** Project Tabs */
$_ADMINLANG['wbteampro']['projecttab']['details'] = 'Details';
$_ADMINLANG['wbteampro']['projecttab']['actions'] = 'Actions';
$_ADMINLANG['wbteampro']['projecttab']['tickets'] = 'Tickets';
$_ADMINLANG['wbteampro']['projecttab']['files'] = 'Files';
$_ADMINLANG['wbteampro']['projecttab']['filesview'] = 'File View';
$_ADMINLANG['wbteampro']['projecttab']['topics'] = 'Discussions';
$_ADMINLANG['wbteampro']['projecttab']['topicsview'] = 'Discussion View';
$_ADMINLANG['wbteampro']['projecttab']['timelog'] = 'Time Log';

/************************************** Admin Visibility */
$_ADMINLANG['wbteampro']['adminvisible']['all'] = 'All';
$_ADMINLANG['wbteampro']['adminvisible']['manager'] = 'Manager Only';
$_ADMINLANG['wbteampro']['adminvisible']['related'] = 'Manager & Assigned';

/************************************** Client Visibility */
$_ADMINLANG['wbteampro']['clientvisible']['hidden'] = 'Hidden';
$_ADMINLANG['wbteampro']['clientvisible']['visible'] = 'Visible';
$_ADMINLANG['wbteampro']['clientvisible']['view'] = 'View';
$_ADMINLANG['wbteampro']['clientvisible']['modify'] = 'Modify';
$_ADMINLANG['wbteampro']['clientvisible']['inherit'] = 'Inherit';
$_ADMINLANG['wbteampro']['clientvisible']['toggle_hidden'] = 'Hidden - Make Visible';
$_ADMINLANG['wbteampro']['clientvisible']['toggle_visible'] = 'Visible - Make Hidden';

/************************************** Project Functions */
$_ADMINLANG['wbteampro']['projectfunction']['default'] = 'Default';
$_ADMINLANG['wbteampro']['projectfunction']['template'] = 'Template';
$_ADMINLANG['wbteampro']['projectfunction']['archive'] = 'Archive';

/************************************** Project Fields */
$_ADMINLANG['wbteampro']['projectsave']['newActionLabel'] = 'Define the Milestone';
$_ADMINLANG['wbteampro']['projectlist']['newproject'] = 'New Project';
$_ADMINLANG['wbteampro']['projectlist']['newtemplate'] = 'New Template';
$_ADMINLANG['wbteampro']['projectfield']['name'] = 'Project Name';
$_ADMINLANG['wbteampro']['projectfield']['client'] = 'Client';
$_ADMINLANG['wbteampro']['projectfield']['type'] = 'Type';
$_ADMINLANG['wbteampro']['projectfield']['contact'] = 'Client Contact';
$_ADMINLANG['wbteampro']['projectfield']['product'] = 'Client Product';
$_ADMINLANG['wbteampro']['projectfield']['status'] = 'Status';
$_ADMINLANG['wbteampro']['projectfield']['managedby'] = 'Managed by';
$_ADMINLANG['wbteampro']['projectfield']['visiblestatus'] = 'Admin Access';
$_ADMINLANG['wbteampro']['projectfield']['assignedto'] = 'Assigned to';
$_ADMINLANG['wbteampro']['projectfield']['datestart'] = 'Date Start';
$_ADMINLANG['wbteampro']['projectfield']['datefinish'] = 'Date Finish';
$_ADMINLANG['wbteampro']['projectfield']['details'] = 'Notes / Details';
$_ADMINLANG['wbteampro']['projectfield']['created'] = 'Created';
$_ADMINLANG['wbteampro']['projectfield']['activity'] = 'Activity';
$_ADMINLANG['wbteampro']['projectfield']['modified'] = 'Modified';
$_ADMINLANG['wbteampro']['projectfield']['completed'] = 'Completed';
$_ADMINLANG['wbteampro']['projectfield']['sfcompleted'] = '%1$s from %2$s Actions, %3$s Milestone, %4$s Group, %5$s Task, Time Elapsed: %6$s';
$_ADMINLANG['wbteampro']['projectfield']['namecopysprint'] = '*COPY* %s';
$_ADMINLANG['wbteampro']['projectfield']['notes'] = 'Private Notes';
$_ADMINLANG['wbteampro']['projectfield']['clientvisible'] = 'Client Access';
$_ADMINLANG['wbteampro']['projectfield']['function'] = 'Function';
$_ADMINLANG['wbteampro']['projectfield']['billable'] = 'Billable Time';

/************************************** Copy Fields */
$_ADMINLANG['wbteampro']['copyform']['option_setup'] = 'Project Copy Options';
$_ADMINLANG['wbteampro']['copyform']['project_setup'] = 'New Project Settings';
$_ADMINLANG['wbteampro']['copyfield']['newname'] = 'New Project Name';
$_ADMINLANG['wbteampro']['copyfield']['copy_template'] = 'Save as Template';
$_ADMINLANG['wbteampro']['copyfield']['copy_actions'] = 'Copy Actions';
$_ADMINLANG['wbteampro']['copyfield']['copy_files'] = 'Copy File Threads';
$_ADMINLANG['wbteampro']['copyfield']['copy_topics'] = 'Copy Discussion Threads';
$_ADMINLANG['wbteampro']['copyfield']['copy_tickets'] = 'Copy Ticket Relationships';
$_ADMINLANG['wbteampro']['copyfield']['copy_timelogs'] = 'Copy Time Logs';

/************************************** File Fields */
$_ADMINLANG['wbteampro']['filelist']['newthread'] = 'New Thread';
$_ADMINLANG['wbteampro']['filelist']['appendthread'] = 'Append Thread';
$_ADMINLANG['wbteampro']['filelist']['deletethread'] = 'Delete Thread';
$_ADMINLANG['wbteampro']['filelist']['clientaccess'] = 'Client Access';
$_ADMINLANG['wbteampro']['filelist']['toggleaccess'] = 'Toggle Access';
$_ADMINLANG['wbteampro']['filelist']['by'] = 'by';
$_ADMINLANG['wbteampro']['filelist']['on'] = 'on';
$_ADMINLANG['wbteampro']['filelist']['download'] = 'Download';
$_ADMINLANG['wbteampro']['filelist']['fileview'] = 'View in Browser';
$_ADMINLANG['wbteampro']['filefield']['label'] = 'Label';
$_ADMINLANG['wbteampro']['filefield']['version'] = 'Ver';
$_ADMINLANG['wbteampro']['filefield']['file'] = 'File';
$_ADMINLANG['wbteampro']['filefield']['mime'] = 'Mime';
$_ADMINLANG['wbteampro']['filefield']['size'] = 'Size';
$_ADMINLANG['wbteampro']['filefield']['detail'] = 'Detail';
$_ADMINLANG['wbteampro']['filefield']['upload'] = 'Upload';
$_ADMINLANG['wbteampro']['filefield']['import'] = 'Import';
$_ADMINLANG['wbteampro']['filelist']['status'] = 'Status';
$_ADMINLANG['wbteampro']['filelist']['status_open'] = 'Open';
$_ADMINLANG['wbteampro']['filelist']['status_closed'] = 'Closed';
$_ADMINLANG['wbteampro']['filelist']['expanddetail'] = 'Expand / Collapse';
$_ADMINLANG['wbteampro']['filelist']['count'] = '%s Files';

/************************************** Ticket Fields */
$_ADMINLANG['wbteampro']['ticketlist']['ticket_nonefound'] = 'No Tickets Found';
$_ADMINLANG['wbteampro']['ticketlist']['linkticket'] = 'Link Ticket';
$_ADMINLANG['wbteampro']['ticketlist']['newticket'] = 'New Ticket';
$_ADMINLANG['wbteampro']['ticketfield']['project'] = 'Project';
$_ADMINLANG['wbteampro']['ticketfield']['action'] = 'Action';

/************************************** Topic Fields */
$_ADMINLANG['wbteampro']['topiclist']['newthread'] = 'New Thread';
$_ADMINLANG['wbteampro']['topiclist']['appendthread'] = 'Append Thread';
$_ADMINLANG['wbteampro']['topiclist']['deletethread'] = 'Delete Thread';
$_ADMINLANG['wbteampro']['topiclist']['clientaccess'] = 'Client Access';
$_ADMINLANG['wbteampro']['topiclist']['toggleaccess'] = 'Toggle Access';
$_ADMINLANG['wbteampro']['topiclist']['by'] = 'by';
$_ADMINLANG['wbteampro']['topiclist']['on'] = 'on';
$_ADMINLANG['wbteampro']['topicfield']['title'] = 'Title';
$_ADMINLANG['wbteampro']['topicfield']['detail'] = 'Detail';
$_ADMINLANG['wbteampro']['topiclist']['status'] = 'Status';
$_ADMINLANG['wbteampro']['topiclist']['status_open'] = 'Open';
$_ADMINLANG['wbteampro']['topiclist']['status_closed'] = 'Closed';
$_ADMINLANG['wbteampro']['topiclist']['expanddetail'] = 'Expand / Collapse';
$_ADMINLANG['wbteampro']['topiclist']['count'] = '%s Posts';
$_ADMINLANG['wbteampro']['topiclist']['created'] = 'Started on %s';

/************************************** Action Fields */
$_ADMINLANG['wbteampro']['actionlist']['dispmode'] = 'Display Mode:';
$_ADMINLANG['wbteampro']['actionlist']['listview'] = 'List View';
$_ADMINLANG['wbteampro']['actionlist']['treeview'] = 'Tree View';
$_ADMINLANG['wbteampro']['actionlist']['ganttview'] = 'Gantt View';
$_ADMINLANG['wbteampro']['actionlist']['listexpand'] = 'Expand / Collapse All Nested Tasks';
$_ADMINLANG['wbteampro']['actionlist']['listmaskcompleted'] = 'Show / Hide Completed Tasks';
$_ADMINLANG['wbteampro']['actionlist']['newaction'] = 'New Action';
$_ADMINLANG['wbteampro']['actionlist']['addchild'] = 'Add Child';
$_ADMINLANG['wbteampro']['actionlist']['stoptimer'] = 'Stop Timer';
$_ADMINLANG['wbteampro']['actionlist']['starttimer'] = 'Start Timer';
$_ADMINLANG['wbteampro']['actionlist']['viewlog'] = 'View Log';
$_ADMINLANG['wbteampro']['actionlist']['delete'] = 'Delete';
$_ADMINLANG['wbteampro']['actionlist']['totalcomplete'] = 'Project Complete';
$_ADMINLANG['wbteampro']['actionlist']['totalduration'] = 'Total Duration';
$_ADMINLANG['wbteampro']['actionlist']['totalelapsed'] = 'Total Elapsed';
$_ADMINLANG['wbteampro']['actionlist']['client_access'] = 'Toggle Client Access';
$_ADMINLANG['wbteampro']['actionfield']['name'] = 'Name';
$_ADMINLANG['wbteampro']['actionfield']['complete'] = '% Complete';
$_ADMINLANG['wbteampro']['actionfield']['type'] = 'Type';
$_ADMINLANG['wbteampro']['actionfield']['datestart'] = 'Date Start';
$_ADMINLANG['wbteampro']['actionfield']['status'] = 'Status';
$_ADMINLANG['wbteampro']['actionfield']['datefinish'] = 'Date Finish';
$_ADMINLANG['wbteampro']['actionfield']['client'] = 'Client';
$_ADMINLANG['wbteampro']['actionfield']['managedby'] = 'Managed by';
$_ADMINLANG['wbteampro']['actionfield']['maincontact'] = 'Main Contact';
$_ADMINLANG['wbteampro']['actionfield']['assignedto'] = 'Assigned to';
$_ADMINLANG['wbteampro']['actionfield']['detail'] = 'Notes / Details';
$_ADMINLANG['wbteampro']['actionfield']['created'] = 'Created';
$_ADMINLANG['wbteampro']['actionfield']['activity'] = 'Activity';
$_ADMINLANG['wbteampro']['actionfield']['modified'] = 'Modified';
$_ADMINLANG['wbteampro']['actionfield']['parentaction'] = 'Parent Action';
$_ADMINLANG['wbteampro']['actionfield']['clientvisible'] = 'Client Access';
$_ADMINLANG['wbteampro']['actionfield']['notes'] = 'Private Notes';
$_ADMINLANG['wbteampro']['actionfield']['priority'] = 'Priority';
$_ADMINLANG['wbteampro']['actionfield']['billable'] = 'Billable Time';
$_ADMINLANG['wbteampro']['actionfield']['duration'] = 'Duration';
$_ADMINLANG['wbteampro']['actionfield']['recurrence'] = 'Recurrence';
$_ADMINLANG['wbteampro']['actionfield']['summary']['datestart'] = 'Recurrence Start';
$_ADMINLANG['wbteampro']['actionfield']['summary']['datefinish'] = 'Recurrence Finish';
$_ADMINLANG['wbteampro']['actionfield']['occurrence']['datestart'] = 'Occurrence Start';
$_ADMINLANG['wbteampro']['actionfield']['occurrence']['datefinish'] = 'Occurrence Finish';

/************************************** Report Titles */
$_ADMINLANG['wbteampro']['report']['actionlist']['title'] = 'wbTeamPro: Action Report';
$_ADMINLANG['wbteampro']['report']['actionlist']['description'] = 'This report will generate a table of actions matching your filter criteria.';
$_ADMINLANG['wbteampro']['report']['projectlist']['title'] = 'wbTeamPro: Project Report';
$_ADMINLANG['wbteampro']['report']['projectlist']['description'] = 'This report will generate a table of projects matching your filter criteria.';
$_ADMINLANG['wbteampro']['report']['timeloglist']['title'] = 'wbTeamPro: Timelog Report';
$_ADMINLANG['wbteampro']['report']['timeloglist']['description'] = 'This report will generate a table of timelogs matching your filter criteria.';

/************************************** Action Report Labels */
$_ADMINLANG['wbteampro']['actionreport']['schd_on'] = 'On Schedule';
$_ADMINLANG['wbteampro']['actionreport']['schd_ahead'] = 'Ahead of Schedule';
$_ADMINLANG['wbteampro']['actionreport']['schd_behind'] = 'Behind Schedule';

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
$_ADMINLANG['wbteampro']['timeloglist']['totalelapsed'] = 'Total Elapsed';
$_ADMINLANG['wbteampro']['timeloglist']['by'] = 'by';
$_ADMINLANG['wbteampro']['timelogfield']['note'] = 'Note';
$_ADMINLANG['wbteampro']['timelogfield']['type'] = 'Type';
$_ADMINLANG['wbteampro']['timelogfield']['datestart'] = 'Start Date';
$_ADMINLANG['wbteampro']['timelogfield']['datestop'] = 'Stop Date';
$_ADMINLANG['wbteampro']['timelogfield']['duration'] = 'Duration';
$_ADMINLANG['wbteampro']['timelogfield']['owner'] = 'Owner';
$_ADMINLANG['wbteampro']['timelogfield']['elapsed'] = 'Time Elapsed';
$_ADMINLANG['wbteampro']['timelogfield']['billable'] = 'Billable Time';
$_ADMINLANG['wbteampro']['timelogfield']['invoice'] = 'Invoice #';

/************************************** Timelog */
$_ADMINLANG['wbteampro']['timelog']['emptynote'] = '~';
$_ADMINLANG['wbteampro']['timelog']['status']['active'] = 'Active';
$_ADMINLANG['wbteampro']['timelog']['status']['complete'] = 'Complete';
$_ADMINLANG['wbteampro']['timelog']['elapsed']['all'] = 'All Time Logged';
$_ADMINLANG['wbteampro']['timelog']['elapsed']['my'] = 'My Time Logged';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['client'] = 'Client';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['project'] = 'Project';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['action'] = 'Action';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['milestone'] = 'Milestone';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['group'] = 'Group';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['task'] = 'Task';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['ticket'] = 'Support Ticket';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['timelog'] = 'Timelog';

/************************************** Timelog Modal */
$_ADMINLANG['wbteampro']['timelog']['modal']['title'] = 'Start a New Timelog';
$_ADMINLANG['wbteampro']['timelog']['modal']['event'] = 'Enter Description of Event';
$_ADMINLANG['wbteampro']['timelog']['modal']['type'] = 'Event Type';
$_ADMINLANG['wbteampro']['timelog']['modal']['manual'] = 'Specify Duration & Save as Complete';
$_ADMINLANG['wbteampro']['timelog']['modal']['start'] = 'Start';
$_ADMINLANG['wbteampro']['timelog']['modal']['duration'] = 'Duration';
$_ADMINLANG['wbteampro']['timelog']['modal']['durexample'] = 'ie: 2 hours, 5 minutes, 10 seconds';
$_ADMINLANG['wbteampro']['timelog']['modal']['owner'] = 'Owner';
$_ADMINLANG['wbteampro']['timelog']['modal']['billable'] = 'Will this be Billable Time?';

/************************************** Invoice Modal */
$_ADMINLANG['wbteampro']['invoice']['modal']['title'] = 'Create New Invoice(s)';
$_ADMINLANG['wbteampro']['invoice']['modal']['invoicecount'] = 'Invoice #{invoice_count}';
$_ADMINLANG['wbteampro']['invoice']['modal']['date'] = 'Invoice Date';
$_ADMINLANG['wbteampro']['invoice']['modal']['duedate'] = 'Due Date';
$_ADMINLANG['wbteampro']['invoice']['modal']['taxrate'] = 'Tax Rate';
$_ADMINLANG['wbteampro']['invoice']['modal']['applytax'] = 'Apply Tax';
$_ADMINLANG['wbteampro']['invoice']['modal']['paymentmethod'] = 'Pay Method';
$_ADMINLANG['wbteampro']['invoice']['modal']['sendinvoice'] = 'Send Invoice';
$_ADMINLANG['wbteampro']['invoice']['modal']['autoapplycredit'] = 'Apply Credits';
$_ADMINLANG['wbteampro']['invoice']['modal']['rate'] = 'Rate';
$_ADMINLANG['wbteampro']['invoice']['modal']['note'] = 'Invoice Notes';
$_ADMINLANG['wbteampro']['invoice']['modal']['invoiceid'] = 'Add to Invoice ID';
$_ADMINLANG['wbteampro']['invoice']['modal']['total_count'] = '# Line Items';
$_ADMINLANG['wbteampro']['invoice']['modal']['total_hours'] = 'Total Hours';
$_ADMINLANG['wbteampro']['invoice']['modal']['sub_total'] = 'Sub-Total';
$_ADMINLANG['wbteampro']['invoice']['modal']['total_tax'] = 'Total Tax';
$_ADMINLANG['wbteampro']['invoice']['modal']['total'] = 'Invoice Total';
$_ADMINLANG['wbteampro']['invoice']['modal']['line_total'] = 'Total';
$_ADMINLANG['wbteampro']['invoice']['modal']['checkall'] = 'Check All';
$_ADMINLANG['wbteampro']['invoice']['modal']['applyall'] = 'Apply to All';
$_ADMINLANG['wbteampro']['invoice']['modal']['expandall'] = 'Expand / Collapse All';
$_ADMINLANG['wbteampro']['invoice']['modal']['apply'] = 'Apply';
$_ADMINLANG['wbteampro']['invoice']['modal']['customize'] = 'Customize Invoice & Line Items';

/************************************** Modify Actions Modal */
$_ADMINLANG['wbteampro']['modifyactions']['modal']['title'] = 'Modify Multiple Actions';
$_ADMINLANG['wbteampro']['modifyactions']['modal']['th-apply'] = 'Apply';
$_ADMINLANG['wbteampro']['modifyactions']['modal']['th-option'] = 'Option';
$_ADMINLANG['wbteampro']['modifyactions']['modal']['th-value'] = 'Value';

/************************************** Modify Actions Modal */
$_ADMINLANG['wbteampro']['modifytimelogs']['modal']['title'] = 'Modify Multiple Timelogs';
$_ADMINLANG['wbteampro']['modifytimelogs']['modal']['th-apply'] = 'Apply';
$_ADMINLANG['wbteampro']['modifytimelogs']['modal']['th-option'] = 'Option';
$_ADMINLANG['wbteampro']['modifytimelogs']['modal']['th-value'] = 'Value';

/************************************** Confirm Modal */
$_ADMINLANG['wbteampro']['confirm']['modal']['title'] = 'Confirm Action';
$_ADMINLANG['wbteampro']['confirm']['modal']['delete'] = 'Type DELETE to Confirm';

/************************************** Ticket Modal */
$_ADMINLANG['wbteampro']['ticket']['modal']['title'] = 'Open a New Support Ticket';
$_ADMINLANG['wbteampro']['ticket']['modal']['client'] = 'Client';
$_ADMINLANG['wbteampro']['ticket']['modal']['project'] = 'Project';
$_ADMINLANG['wbteampro']['ticket']['modal']['deptid'] = 'Department';
$_ADMINLANG['wbteampro']['ticket']['modal']['priority'] = 'Priority';
$_ADMINLANG['wbteampro']['ticket']['modal']['subject'] = 'Subject';
$_ADMINLANG['wbteampro']['ticket']['modal']['message'] = 'Message';
$_ADMINLANG['wbteampro']['ticket']['modal']['nodept'] = 'No Department Permissions Found';
$_ADMINLANG['wbteampro']['ticket']['modal']['sendemail'] = 'Send Email';

/************************************** Page/List Navigation */
$_ADMINLANG['wbteampro']['filter']['tablabel'] = $_ADMINLANG['global']['searchfilter'];
$_ADMINLANG['wbteampro']['filter']['any'] = $_ADMINLANG['global']['any'];
$_ADMINLANG['wbteampro']['filter']['none'] = $_ADMINLANG['global']['none'];
$_ADMINLANG['wbteampro']['filter']['checkall'] = 'Check';
$_ADMINLANG['wbteampro']['filter']['uncheckall'] = 'Uncheck';
$_ADMINLANG['wbteampro']['filter']['selectedtext'] = '# selected';
$_ADMINLANG['wbteampro']['filter']['search'] = 'Search';
$_ADMINLANG['wbteampro']['filter']['masksearch'] = 'Filter';
$_ADMINLANG['wbteampro']['filter']['masksearch-placeholder'] = 'filter by keyword...';
$_ADMINLANG['wbteampro']['filter']['owner'] = 'Owner';
$_ADMINLANG['wbteampro']['filter']['admin'] = 'Admin';
$_ADMINLANG['wbteampro']['filter']['project'] = 'Project';
$_ADMINLANG['wbteampro']['filter']['action'] = 'Action';
$_ADMINLANG['wbteampro']['filter']['ticket'] = 'Ticket';
$_ADMINLANG['wbteampro']['filter']['status'] = 'Status';
$_ADMINLANG['wbteampro']['filter']['client'] = 'Client';
$_ADMINLANG['wbteampro']['filter']['product'] = 'Product';
$_ADMINLANG['wbteampro']['filter']['department'] = 'Department';
$_ADMINLANG['wbteampro']['filter']['manager'] = 'Manager';
$_ADMINLANG['wbteampro']['filter']['assigned'] = 'Assigned';
$_ADMINLANG['wbteampro']['filter']['type'] = 'Type';
$_ADMINLANG['wbteampro']['filter']['level'] = 'Level';
$_ADMINLANG['wbteampro']['filter']['flagged'] = 'Flagged';
$_ADMINLANG['wbteampro']['filter']['rangestart'] = 'Started After';
$_ADMINLANG['wbteampro']['filter']['rangestop'] = 'Started Before';
$_ADMINLANG['wbteampro']['filter']['percentage'] = '% Complete';
$_ADMINLANG['wbteampro']['filter']['root'] = 'Root Level';
$_ADMINLANG['wbteampro']['filter']['zone'] = 'Zone';
$_ADMINLANG['wbteampro']['filter']['priority'] = 'Priority';
$_ADMINLANG['wbteampro']['filter']['billable'] = 'Billable';
$_ADMINLANG['wbteampro']['filter']['invoiced'] = 'Invoiced';
$_ADMINLANG['wbteampro']['filter']['group_mode'] = 'Group by';
$_ADMINLANG['wbteampro']['filter']['project_type'] = 'Project Type';
$_ADMINLANG['wbteampro']['filter']['project_status'] = 'Project Status';
$_ADMINLANG['wbteampro']['filter']['project_function'] = 'Project Function';

/************************************** Page/List Navigation */
$_ADMINLANG['wbteampro']['pagenav']['report'] = '%s '.$_ADMINLANG['global']['recordsfound'].', '.$_ADMINLANG['global']['page'].' %s '.$_ADMINLANG['global']['of'].' %s';
$_ADMINLANG['wbteampro']['pagenav']['prev'] = $_ADMINLANG['global']['previouspage'];
$_ADMINLANG['wbteampro']['pagenav']['next'] = $_ADMINLANG['global']['nextpage'];
$_ADMINLANG['wbteampro']['pagenav']['empty'] = $_ADMINLANG['global']['norecordsfound'];
$_ADMINLANG['wbteampro']['pagenav']['jumpto'] = $_ADMINLANG['global']['jumppage'];
$_ADMINLANG['wbteampro']['pagenav']['limit'] = 'Limit';
$_ADMINLANG['wbteampro']['pagenav']['go'] = $_ADMINLANG['global']['go'];
$_ADMINLANG['wbteampro']['pagenav']['export'] = 'Export';
$_ADMINLANG['wbteampro']['pagenav']['print'] = 'Print';
$_ADMINLANG['wbteampro']['pagenav']['orderby'] = 'Order by %1$s'; // %1$s = Field, %2$s = Direction
$_ADMINLANG['wbteampro']['pagenav']['allMasked'] = '<b>Notice</b><br>All Records are Masked';

/************************************** Form Button Labels */
$_ADMINLANG['wbteampro']['formnav']['edit'] = 'Edit';
$_ADMINLANG['wbteampro']['formnav']['view'] = 'View';
$_ADMINLANG['wbteampro']['formnav']['copy'] = 'Copy';
$_ADMINLANG['wbteampro']['formnav']['copy_template'] = 'Create Project';
$_ADMINLANG['wbteampro']['formnav']['archive'] = 'Archive';
$_ADMINLANG['wbteampro']['formnav']['unarchive'] = 'Un-Archive';
$_ADMINLANG['wbteampro']['formnav']['save'] = 'Save';
$_ADMINLANG['wbteampro']['formnav']['save_new'] = 'Save & New';
$_ADMINLANG['wbteampro']['formnav']['apply'] = 'Apply';
$_ADMINLANG['wbteampro']['formnav']['close'] = 'Close';
$_ADMINLANG['wbteampro']['formnav']['cancel'] = 'Cancel';
$_ADMINLANG['wbteampro']['formnav']['delete'] = 'Delete';
$_ADMINLANG['wbteampro']['formnav']['download'] = 'Download';
$_ADMINLANG['wbteampro']['formnav']['timestart'] = 'Start Timer';
$_ADMINLANG['wbteampro']['formnav']['timestop'] = 'Stop Timer';
$_ADMINLANG['wbteampro']['formnav']['submit'] = 'Submit';
$_ADMINLANG['wbteampro']['formnav']['invoice'] = 'Invoice';
$_ADMINLANG['wbteampro']['formnav']['reload'] = 'Reload';
$_ADMINLANG['wbteampro']['formnav']['check'] = 'Check';
$_ADMINLANG['wbteampro']['formnav']['link'] = 'Link';
$_ADMINLANG['wbteampro']['formnav']['unlink'] = 'Unlink';

/************************************** Dashboard Blocks */
$_ADMINLANG['wbteampro']['dashhead']['topProjects'] = 'Projects with Recent Activity';
$_ADMINLANG['wbteampro']['dashhead']['topActions'] = 'Top Rated Actions';
$_ADMINLANG['wbteampro']['dashhead']['myActions'] = 'Tasks Assigned to You';
$_ADMINLANG['wbteampro']['dashhead']['touchedActions'] = 'Actions with Recent Activity';
$_ADMINLANG['wbteampro']['dashhead']['topTimelog'] = 'Recent Timelog Activity';
$_ADMINLANG['wbteampro']['dashhead']['topTickets'] = 'Recent Ticket Activity';
$_ADMINLANG['wbteampro']['dashhead']['topTopics'] = 'Recent Topic Activity';
$_ADMINLANG['wbteampro']['dashhead']['topFiles'] = 'Recent File Activity';
$_ADMINLANG['wbteampro']['dashhead']['viewall'] = 'View All';

/************************************** List Table Headers */
$_ADMINLANG['wbteampro']['listhead']['ordering'] = 'Ordering';
$_ADMINLANG['wbteampro']['listhead']['enabled'] = 'Enabled';
$_ADMINLANG['wbteampro']['listhead']['date_created'] = 'Created';
$_ADMINLANG['wbteampro']['listhead']['date_modified'] = 'Modified';
$_ADMINLANG['wbteampro']['listhead']['date_activity'] = 'Activity';
$_ADMINLANG['wbteampro']['listhead']['date_start'] = 'Start';
$_ADMINLANG['wbteampro']['listhead']['date_finish'] = 'Due';
$_ADMINLANG['wbteampro']['listhead']['client_name'] = 'Client Name';
$_ADMINLANG['wbteampro']['listhead']['client_userid'] = 'Client';
$_ADMINLANG['wbteampro']['listhead']['client_hostingid'] = 'Product';
$_ADMINLANG['wbteampro']['listhead']['owner_adminid'] = 'Owner';
$_ADMINLANG['wbteampro']['listhead']['manager_adminid'] = 'Manager';
$_ADMINLANG['wbteampro']['listhead']['assigned_adminid'] = 'Assigned';
$_ADMINLANG['wbteampro']['listhead']['invoice_id'] = 'Invoice';
$_ADMINLANG['wbteampro']['listhead']['range_start'] = 'Started After';
$_ADMINLANG['wbteampro']['listhead']['range_stop'] = 'Started Before';

/************************************** Project List */
$_ADMINLANG['wbteampro']['listhead']['project_name'] = 'Project Name';
$_ADMINLANG['wbteampro']['listhead']['project_type'] = 'Type';
$_ADMINLANG['wbteampro']['listhead']['project_status'] = 'Status';
$_ADMINLANG['wbteampro']['listhead']['project_complete'] = '%';
$_ADMINLANG['wbteampro']['listhead']['project_tasks'] = '#';

/************************************** Action List */
$_ADMINLANG['wbteampro']['listhead']['action_name'] = 'Action Name';
$_ADMINLANG['wbteampro']['listhead']['action_type'] = 'Type';
$_ADMINLANG['wbteampro']['listhead']['action_status'] = 'Status';
$_ADMINLANG['wbteampro']['listhead']['action_complete'] = '%';
$_ADMINLANG['wbteampro']['listhead']['action_elapsed'] = 'Elapsed';
$_ADMINLANG['wbteampro']['listhead']['action_priority'] = 'Priority';
$_ADMINLANG['wbteampro']['listhead']['action_duration'] = 'Duration';

/************************************** Timelog List */
$_ADMINLANG['wbteampro']['listhead']['timelog_note'] = 'Timelog Note';
$_ADMINLANG['wbteampro']['listhead']['timelog_elapsed'] = 'Elapsed';
$_ADMINLANG['wbteampro']['listhead']['timelog_start'] = 'Started';
$_ADMINLANG['wbteampro']['listhead']['timelog_type'] = 'Type';
$_ADMINLANG['wbteampro']['listhead']['timelog_status'] = 'Status';
$_ADMINLANG['wbteampro']['listhead']['timelog_count'] = '# Records';
$_ADMINLANG['wbteampro']['listhead']['timelog_elapsed_total_billable'] = 'Total Billable';
$_ADMINLANG['wbteampro']['listhead']['timelog_count_billed'] = '# Billed';
$_ADMINLANG['wbteampro']['listhead']['timelog_elapsed_total_billed'] = 'Total Billed';
$_ADMINLANG['wbteampro']['listhead']['timelog_count_unbilled'] = '# Pending';
$_ADMINLANG['wbteampro']['listhead']['timelog_elapsed_total_unbilled'] = 'Total Pending';
$_ADMINLANG['wbteampro']['listhead']['timelog_elapsed_total'] = 'Total';

/************************************** Topic List */
$_ADMINLANG['wbteampro']['listhead']['topic_name'] = 'Discussion Thread';
$_ADMINLANG['wbteampro']['listhead']['topic_activity'] = 'Activity';
$_ADMINLANG['wbteampro']['listhead']['topic_posts'] = 'Posts';
$_ADMINLANG['wbteampro']['listhead']['topic_status'] = 'Status';

/************************************** Ticket List */
$_ADMINLANG['wbteampro']['listhead']['ticket_title'] = 'Ticket Title';
$_ADMINLANG['wbteampro']['listhead']['ticket_lastreply'] = 'Activity';
$_ADMINLANG['wbteampro']['listhead']['ticket_date'] = 'Submitted';
$_ADMINLANG['wbteampro']['listhead']['ticket_urgency'] = 'Urgency';
$_ADMINLANG['wbteampro']['listhead']['ticket_submitter'] = 'Submitter';
$_ADMINLANG['wbteampro']['listhead']['ticket_department'] = 'Department';
$_ADMINLANG['wbteampro']['listhead']['ticket_status'] = 'Status';
$_ADMINLANG['wbteampro']['listhead']['ticket_admin'] = 'Owner';
$_ADMINLANG['wbteampro']['listhead']['ticket_flag'] = 'Assigned';

/************************************** File List */
$_ADMINLANG['wbteampro']['listhead']['file_label'] = 'File Thread';
$_ADMINLANG['wbteampro']['listhead']['file_latest'] = 'Latest File';
$_ADMINLANG['wbteampro']['listhead']['file_total'] = 'Files';
$_ADMINLANG['wbteampro']['listhead']['file_status'] = 'Status';

/************************************** Plugin List */
$_ADMINLANG['wbteampro']['listhead']['plugin_name'] = 'Plugin Name';
$_ADMINLANG['wbteampro']['listhead']['plugin_zone'] = 'Zone';
$_ADMINLANG['wbteampro']['listhead']['plugin_element'] = 'Element';

/************************************** Module List
$_ADMINLANG['wbteampro']['listhead']['module_name'] = 'Module Name';
$_ADMINLANG['wbteampro']['listhead']['module_element'] = 'Element';
$_ADMINLANG['wbteampro']['listhead']['module_position'] = 'Position';
 */

/************************************** Setup Tabs */
$_ADMINLANG['wbteampro']['setuptab']['general'] = 'General';
$_ADMINLANG['wbteampro']['setuptab']['project'] = 'Project';
$_ADMINLANG['wbteampro']['setuptab']['action'] = 'Action';
$_ADMINLANG['wbteampro']['setuptab']['display'] = 'Display';
$_ADMINLANG['wbteampro']['setuptab']['extensions'] = 'Extensions';

/************************************** Setup Configuration */
$_ADMINLANG['wbteampro']['configtopic']['general_settings'] = 'General Settings';
$_ADMINLANG['wbteampro']['configtopic']['project_settings'] = 'Project Settings';
$_ADMINLANG['wbteampro']['configtopic']['action_settings'] = 'Action Settings';
$_ADMINLANG['wbteampro']['configtopic']['billing_settings'] = 'Invoice Settings';
$_ADMINLANG['wbteampro']['configtopic']['timelog_settings'] = 'Timelog Settings';
$_ADMINLANG['wbteampro']['configtopic']['billing_resource_rates'] = 'Custom Billing Rates';
$_ADMINLANG['wbteampro']['configtopic']['billing_resource_rates-help'] = 'Rate evaluation for a timelog is calculated by evaluating values starting with the Invoice Settings "Hourly Rate" (above), then project a specific "Hourly Rate" (if defined), then the resource specific "Base Rate", and finally the Timelog Type rate values. Resource rates are can be either specific dollar value (ie: 75) or an offset to the preceding rate value (ie: +10, -20, +15%, -5%).';
$_ADMINLANG['wbteampro']['configtopic']['billing_lineitem_formats'] = 'Invoice Line Item Formatting';
$_ADMINLANG['wbteampro']['configtopic']['display_settings'] = 'Interface Settings';
$_ADMINLANG['wbteampro']['configtopic']['display_date_formats'] = 'Date Display Format';
$_ADMINLANG['wbteampro']['configtopic']['display_name_formats'] = 'Name Display Format';
$_ADMINLANG['wbteampro']['configtopic']['display_list_settings'] = 'Listing Display Settings';


/************************************** Setup Configuration */
$_ADMINLANG['wbteampro']['configfield']['version'] = 'Version';
$_ADMINLANG['wbteampro']['configfield']['license_key'] = 'License Key';
$_ADMINLANG['wbteampro']['configfield']['license_key-help'] = 'The license key required for activation.';
$_ADMINLANG['wbteampro']['configfield']['license_key-rekey'] = 'Rekey the License';
$_ADMINLANG['wbteampro']['configfield']['license_key-confirm'] = 'This action will remove your current license key.\nClick OK to Continue';
$_ADMINLANG['wbteampro']['configfield']['project_file_path'] = 'Project File Path';
$_ADMINLANG['wbteampro']['configfield']['project_file_path-help'] = 'Relative or Absolute path where project uploads are stored';
$_ADMINLANG['wbteampro']['configfield']['admin_super_roles'] = 'Super Admin Roles';
$_ADMINLANG['wbteampro']['configfield']['admin_super_roles-help'] = 'Can view / modify everything';
$_ADMINLANG['wbteampro']['configfield']['admin_valid_roles'] = 'Valid Admin Roles';
$_ADMINLANG['wbteampro']['configfield']['admin_valid_roles-help'] = 'Can view / modify if owner or assigned';
$_ADMINLANG['wbteampro']['configfield']['project_link_target'] = 'Project Link Target';
$_ADMINLANG['wbteampro']['configfield']['project_link_target-help'] = 'Default: New Window';
$_ADMINLANG['wbteampro']['configfield']['project_link_task'] = 'Default Project View';
$_ADMINLANG['wbteampro']['configfield']['project_link_task-help'] = 'The initial sub-tab when opening a Project';
$_ADMINLANG['wbteampro']['configfield']['client_link_target'] = 'Client Link Target';
$_ADMINLANG['wbteampro']['configfield']['client_link_target-help'] = 'Default: New Window';
$_ADMINLANG['wbteampro']['configfield']['ticket_link_target'] = 'Ticket Link Target';
$_ADMINLANG['wbteampro']['configfield']['ticket_link_target-help'] = 'Default: New Window';
$_ADMINLANG['wbteampro']['configfield']['page_listing_limit'] = 'Page Listing Limit';
$_ADMINLANG['wbteampro']['configfield']['page_listing_limit-help'] = 'The total number of records to show per page';
$_ADMINLANG['wbteampro']['configfield']['thread_listing_limit'] = 'Thread Listing Limit';
$_ADMINLANG['wbteampro']['configfield']['thread_listing_limit-help'] = 'The total number of posts to show on thread pages';
$_ADMINLANG['wbteampro']['configfield']['thread_thumbnail_dimension'] = 'Thread Thumbnail Size';
$_ADMINLANG['wbteampro']['configfield']['thread_thumbnail_dimension-help'] = 'The size of image thumbnails shown in file threads';
$_ADMINLANG['wbteampro']['configfield']['thread_textcollapse'] = 'Thread Text Collapse';
$_ADMINLANG['wbteampro']['configfield']['thread_textcollapse-help'] = 'Collapsed long text with an Expand button';
$_ADMINLANG['wbteampro']['configfield']['keepalive_timeout'] = 'Keepalive Timeout';
$_ADMINLANG['wbteampro']['configfield']['keepalive_timeout-help'] = 'Number of seconds between server pings';
$_ADMINLANG['wbteampro']['configfield']['js_delete_confirm'] = 'Delete Confirmation';
$_ADMINLANG['wbteampro']['configfield']['js_delete_confirm-help'] = 'Confirmation to display on Delete Actions';
$_ADMINLANG['wbteampro']['configfield']['clientarea_primarynavbar_link'] = 'Show Client Nav Link';
$_ADMINLANG['wbteampro']['configfield']['clientarea_primarynavbar_link-help'] = 'Show the "My Projects" link on the client primary navigation bar.';
$_ADMINLANG['wbteampro']['configfield']['server_timezone'] = 'Server Timezone';
$_ADMINLANG['wbteampro']['configfield']['server_timezone-time'] = 'Server Time';
$_ADMINLANG['wbteampro']['configfield']['server_timezone-help'] = 'Override Server Timezone (blank for server default)';
$_ADMINLANG['wbteampro']['configfield']['server_timezone-default'] = 'Server Default';
$_ADMINLANG['wbteampro']['configfield']['cron_adminid'] = 'Cron Admin User';
$_ADMINLANG['wbteampro']['configfield']['cron_adminid-help'] = 'Admin used when executing WHMCS API calls';
$_ADMINLANG['wbteampro']['configfield']['cron_password'] = 'Cron Password';
$_ADMINLANG['wbteampro']['configfield']['cron_password-help'] = 'Optional password for direct cron.php calls<br/><small><a href="'. WHMCS_URL .'modules/addons/wbteampro/cron.php?cron_password=xxx" target="_blank">/modules/addons/wbteampro/cron.php?cron_password=xxx</a></small>';
$_ADMINLANG['wbteampro']['configfield']['use_gzhandler'] = 'Output Compression';
$_ADMINLANG['wbteampro']['configfield']['use_gzhandler-help'] = 'Use the gzip handler to improve response times';
$_ADMINLANG['wbteampro']['configfield']['system_log_emails'] = 'Log Sent Emails';
$_ADMINLANG['wbteampro']['configfield']['system_log_emails-help'] = 'Save email history in the WHMCS Email Log';
$_ADMINLANG['wbteampro']['configfield']['api_active'] = 'API Active';
$_ADMINLANG['wbteampro']['configfield']['api_active-help'] = 'Allow calls through the system API';
$_ADMINLANG['wbteampro']['configfield']['system_tmp_path'] = 'Temporary Storage Path';
$_ADMINLANG['wbteampro']['configfield']['system_tmp_path-help'] = 'Relative or Absolute path where temporary files are written';
$_ADMINLANG['wbteampro']['configfield']['otaupdate_autocheck'] = 'Automatic Check';
$_ADMINLANG['wbteampro']['configfield']['otaupdate_autocheck-help'] = 'Automatically check periodically for software updates.';
$_ADMINLANG['wbteampro']['configfield']['otaupdate_releasefilter'] = 'Optional Releases';
$_ADMINLANG['wbteampro']['configfield']['otaupdate_releasefilter-help'] = 'You may optionally choose to check for un-official upcoming releases.';
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
$_ADMINLANG['wbteampro']['configfield']['project']['allow_assigned_any-help'] = 'Allow a project to be assigned the "Any" admin option';
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
$_ADMINLANG['wbteampro']['configfield']['action']['mask_complete'] = 'Mask Completed Actions';
$_ADMINLANG['wbteampro']['configfield']['action']['mask_complete-help'] = 'Initially load completed action trees in a masked state';
$_ADMINLANG['wbteampro']['configfield']['action']['allow_assigned_any'] = 'Allow Assigned to "Any"';
$_ADMINLANG['wbteampro']['configfield']['action']['allow_assigned_any-help'] = 'Allow actions to be assigned to "Any" admin';
$_ADMINLANG['wbteampro']['configfield']['action']['status_oncomplete'] = 'Action Completed Status';
$_ADMINLANG['wbteampro']['configfield']['action']['status_oncomplete-help'] = 'Automatically assign status when 100% complete';
$_ADMINLANG['wbteampro']['configfield']['action']['default_recurdays'] = 'Default Recurring Workdays';
$_ADMINLANG['wbteampro']['configfield']['action']['default_recurdays-help'] = 'Default weekdays for a Weekly Recurring summary';

$_ADMINLANG['wbteampro']['configfield']['ticket']['automate_timelog'] = 'Automate Ticket View';
$_ADMINLANG['wbteampro']['configfield']['ticket']['automate_timelog-help'] = 'Automatically load or start a timelog when viewing a ticket.';
$_ADMINLANG['wbteampro']['configfield']['timelog']['autostop_timelog'] = 'Stop Timelog on Automation';
$_ADMINLANG['wbteampro']['configfield']['timelog']['autostop_timelog-help'] = 'Automatically stop any running timelogs when automatically starting another.';

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
$_ADMINLANG['wbteampro']['configfield']['format']['jsDate'] = 'Filter / Selector Date Format';
$_ADMINLANG['wbteampro']['configfield']['format']['jsDate-help'] = 'Date format used in the list filters & selector dialog.';
$_ADMINLANG['wbteampro']['configfield']['format']['jsTime'] = 'Filter / Selector Time Format';
$_ADMINLANG['wbteampro']['configfield']['format']['jsTime-help'] = 'Time format used in the list filters & selector dialog.';
$_ADMINLANG['wbteampro']['configfield']['format']['adminName'] = 'Admin Name';
$_ADMINLANG['wbteampro']['configfield']['format']['adminName-help'] = 'Manager/Assigned Display and Select List';
$_ADMINLANG['wbteampro']['configfield']['format']['clientName'] = 'Client Name';
$_ADMINLANG['wbteampro']['configfield']['format']['clientName-help'] = 'Client Display and Search List';
$_ADMINLANG['wbteampro']['configfield']['format']['contactName'] = 'Contact Name';
$_ADMINLANG['wbteampro']['configfield']['format']['contactName-help'] = 'Contact Display and Select List';
$_ADMINLANG['wbteampro']['configfield']['format']['ajaxClientList'] = 'Ajax Client Search';
$_ADMINLANG['wbteampro']['configfield']['format']['ajaxClientList-help'] = 'Dynamic Client Search List Format';
$_ADMINLANG['wbteampro']['configfield']['timelog']['timelog_type'] = 'Timelog Type(s)';
$_ADMINLANG['wbteampro']['configfield']['timelog']['timelog_type-help'] = 'Available timelog type options (one per line)';
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
$_ADMINLANG['wbteampro']['configfield']['billing']['desc_format'] = 'Invoice Item Format'; // Deprecated
$_ADMINLANG['wbteampro']['configfield']['billing']['desc_format-help'] = 'Format for invoice line item descriptions'; // Deprecated
$_ADMINLANG['wbteampro']['configfield']['billing']['default_billable_status'] = 'Default Billable Status';
$_ADMINLANG['wbteampro']['configfield']['billing']['default_billable_status-help'] = 'Default value for new projects or foreign timelogs';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['clientsummary'] = 'Client Summary';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['clientsummary-help'] = 'Format for the summary of time grouped by client';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['projectsummary'] = 'Project Summary';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['projectsummary-help'] = 'Format for the summary of time grouped by project';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['actionsummary'] = 'Action Summary';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['actionsummary-help'] = 'Format for the summary of time grouped by action';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['ticketsummary'] = 'Ticket Summary';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['ticketsummary-help'] = 'Format for the summary of time grouped by ticket';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['clientsubject'] = 'Client Timelog Record';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['clientsubject-help'] = 'Format for a timelog record linked to a client';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['projectsubject'] = 'Project Timelog Record';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['projectsubject-help'] = 'Format for a timelog record linked to a project';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['actionsubject'] = 'Action Timelog Record';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['actionsubject-help'] = 'Format for a timelog record linked to a action';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['ticketsubject'] = 'Ticket Timelog Record';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['ticketsubject-help'] = 'Format for a timelog record linked to a ticket';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['customfieldlist'] = 'Custom Field Variables';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['customfieldlist-help'] = 'Depending on the information available for a line item, some or all of the following field variables may be used to customize theinvoice notation used when generating invoice line items.';

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
$_ADMINLANG['wbteampro']['setupupdate']['package_uptodate'] = 'Your package <b>v%1$s</b> is up-to-date.';
$_ADMINLANG['wbteampro']['setupupdate']['download_available'] = 'Updated <b>%1$s</b> package <b>v%2$s</b> available for download!<br/>You can choose to install the upgrade automatically, or download the package to be installed manually.<br/><br/>'
                                                              . '<button class="btn btn-primary" onclick="%3$s">Install Upgrade</button> or <button class="btn" onclick="%4$s">Download Only</button>';

/************************************** License First Run */
$_ADMINLANG['wbteampro']['licenseform']['description'] = '<b>The license key for your installation is invalid.</b><br/>Please update the following settings to activate your installation.';
$_ADMINLANG['wbteampro']['licenseform']['success'] = '<b>License Installed</b><br/>Your license key has been applied.';

/************************************** Widgets */
$_ADMINLANG['wbteampro']['widget']['projectactivity']['title'] = 'wbTeamPro Project Activity';
$_ADMINLANG['wbteampro']['widget']['projectactivity']['header'] = 'Project Activity';
$_ADMINLANG['wbteampro']['widget']['actions']['title'] = 'wbTeamPro Actions';
$_ADMINLANG['wbteampro']['widget']['actions']['header'] = 'Actions';
$_ADMINLANG['wbteampro']['widget']['topactions']['title'] = 'wbTeamPro Top Rated Actions';
$_ADMINLANG['wbteampro']['widget']['topactions']['header'] = 'Top Rated Actions';
$_ADMINLANG['wbteampro']['widget']['myactions']['title'] = 'wbTeamPro My Actions';
$_ADMINLANG['wbteampro']['widget']['myactions']['header'] = 'My Actions';
$_ADMINLANG['wbteampro']['widget']['touchedactions']['title'] = 'wbTeamPro Action Activity';
$_ADMINLANG['wbteampro']['widget']['touchedactions']['header'] = 'Actions with Recent Activity';
$_ADMINLANG['wbteampro']['widget']['actionsannumreview']['title'] = 'wbTeamPro Action Annum Summary';
$_ADMINLANG['wbteampro']['widget']['actionsannumreview']['header'] = 'Action Annum Summary';
$_ADMINLANG['wbteampro']['widget']['timelogbiennium']['title'] = 'wbTeamPro Timelog Biennium';
$_ADMINLANG['wbteampro']['widget']['timelogbiennium']['header'] = 'Timelog Biennium';
$_ADMINLANG['wbteampro']['widget']['timelogactivity']['title'] = 'wbTeamPro Timelog Activity';
$_ADMINLANG['wbteampro']['widget']['timelogactivity']['header'] = 'Timelog Activity';
$_ADMINLANG['wbteampro']['widget']['fileactivity']['title'] = 'wbTeamPro File Activity';
$_ADMINLANG['wbteampro']['widget']['fileactivity']['header'] = 'File Activity';
$_ADMINLANG['wbteampro']['widget']['topicactivity']['title'] = 'wbTeamPro Topic Activity';
$_ADMINLANG['wbteampro']['widget']['topicactivity']['header'] = 'Topic Activity';
$_ADMINLANG['wbteampro']['widget']['topicfeed']['title'] = 'wbTeamPro Topic Feed';
$_ADMINLANG['wbteampro']['widget']['topicfeed']['header'] = 'Topic Feed';
$_ADMINLANG['wbteampro']['widget']['ticketactivity']['title'] = 'wbTeamPro Ticket Activity';
$_ADMINLANG['wbteampro']['widget']['ticketactivity']['header'] = 'Ticket Activity';

/************************************** QuickMenu */
$_ADMINLANG['wbteampro']['quickmenu']['delete_rows'] = 'Delete Rows';
$_ADMINLANG['wbteampro']['quickmenu']['invoice_rows'] = 'Invoice Rows';
$_ADMINLANG['wbteampro']['quickmenu']['modify_rows'] = 'Modify Rows';

// REMOVE ??
$_ADMINLANG['wbteampro']['quickmenu']['set_rows_billable'] = 'Mark as Billable';
$_ADMINLANG['wbteampro']['quickmenu']['unset_rows_billable'] = 'Mark as NON-Billable';

/************************************** Support Tickets Tab */
$_ADMINLANG['wbteampro']['supporttickets']['ticket_list'] = 'Project Tickets';
$_ADMINLANG['wbteampro']['supporttickets']['ticket_elapsed'] = 'Ticket Time Elapsed';
$_ADMINLANG['wbteampro']['supporttickets']['timelog_list'] = 'Ticket Timelogs';
$_ADMINLANG['wbteampro']['supporttickets']['file_list'] = 'Project Related Files';

/************************************** Select List Options */
$_ADMINLANG['wbteampro']['listoption']['yes'] = 'Yes';
$_ADMINLANG['wbteampro']['listoption']['no'] = 'No';
$_ADMINLANG['wbteampro']['listoption']['blank'] = 'New Window';
$_ADMINLANG['wbteampro']['listoption']['self'] = 'Same Window';
$_ADMINLANG['wbteampro']['listoption']['top'] = 'Top Window';
$_ADMINLANG['wbteampro']['listoption']['parent'] = 'Parent Window';
$_ADMINLANG['wbteampro']['listoption']['none'] = 'No Confirmation';
$_ADMINLANG['wbteampro']['listoption']['prompt'] = 'Type to Confirm';
$_ADMINLANG['wbteampro']['listoption']['confirm'] = 'Click OK to Confirm';
$_ADMINLANG['wbteampro']['listoption']['action_priority']['1'] = 'Low';
$_ADMINLANG['wbteampro']['listoption']['action_priority']['2'] = 'Medium';
$_ADMINLANG['wbteampro']['listoption']['action_priority']['3'] = 'High';
$_ADMINLANG['wbteampro']['listoption']['level_class']['milestone'] = 'Milestone';
$_ADMINLANG['wbteampro']['listoption']['level_class']['group'] = 'Group';
$_ADMINLANG['wbteampro']['listoption']['level_class']['task'] = 'Task';
$_ADMINLANG['wbteampro']['listoption']['recur_frequency']['none'] = 'None';
$_ADMINLANG['wbteampro']['listoption']['recur_frequency']['daily'] = 'Daily';
$_ADMINLANG['wbteampro']['listoption']['recur_frequency']['weekly'] = 'Weekly';
$_ADMINLANG['wbteampro']['listoption']['recur_frequency']['monthly'] = 'Monthly';
$_ADMINLANG['wbteampro']['listoption']['recur_frequency']['yearly'] = 'Yearly';
$_ADMINLANG['wbteampro']['listoption']['date_start_offset']['today'] = 'Today';
$_ADMINLANG['wbteampro']['listoption']['date_start_offset']['tomorrow'] = 'Tomorrow';
$_ADMINLANG['wbteampro']['listoption']['date_start_offset']['parent'] = 'Parent Start Date';
$_ADMINLANG['wbteampro']['listoption']['date_start_offset']['lastsibling'] = 'Last Siblings End Date';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['su'] = 'Sunday';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['mo'] = 'Monday';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['tu'] = 'Tuesday';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['we'] = 'Wednesday';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['th'] = 'Thursday';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['fr'] = 'Friday';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['sa'] = 'Saturday';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['su'] = 'Sun';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['mo'] = 'Mon';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['tu'] = 'Tue';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['we'] = 'Wed';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['th'] = 'Thu';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['fr'] = 'Fri';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['sa'] = 'Sat';
$_ADMINLANG['wbteampro']['listoption']['update_release']['beta'] = 'Beta';
$_ADMINLANG['wbteampro']['listoption']['update_release']['rc'] = 'Release Candidate';
$_ADMINLANG['wbteampro']['listoption']['update_release']['stable'] = 'Stable';
$_ADMINLANG['wbteampro']['listoption']['timelog_group_mode']['timelog'] = 'Timelog';
$_ADMINLANG['wbteampro']['listoption']['timelog_group_mode']['client'] = 'Client';
$_ADMINLANG['wbteampro']['listoption']['timelog_group_mode']['project'] = 'Project';
$_ADMINLANG['wbteampro']['listoption']['timelog_group_mode']['action'] = 'Action';
$_ADMINLANG['wbteampro']['listoption']['timelog_group_mode']['ticket'] = 'Ticket';
$_ADMINLANG['wbteampro']['listoption']['automate_timelog']['none'] = 'Do Nothing';
$_ADMINLANG['wbteampro']['listoption']['automate_timelog']['start'] = 'Start Timelog';
$_ADMINLANG['wbteampro']['listoption']['automate_timelog']['open'] = 'Open Dialog';

/************************************** Dynamic Select List Options */
$_ADMINLANG['wbteampro']['listoption']['project_type']['internal'] = 'Internal';
$_ADMINLANG['wbteampro']['listoption']['project_type']['product'] = 'Product';
$_ADMINLANG['wbteampro']['listoption']['project_type']['service'] = 'Service';
$_ADMINLANG['wbteampro']['listoption']['project_status']['service'] = 'Service';
$_ADMINLANG['wbteampro']['listoption']['project_status']['under_review'] = 'Under Review';
$_ADMINLANG['wbteampro']['listoption']['project_status']['active'] = 'Active';
$_ADMINLANG['wbteampro']['listoption']['project_status']['in_production'] = 'In Production';
$_ADMINLANG['wbteampro']['listoption']['project_status']['in_testing'] = 'In Testing';
$_ADMINLANG['wbteampro']['listoption']['project_status']['completed'] = 'Completed';
$_ADMINLANG['wbteampro']['listoption']['project_status']['closed'] = 'Closed';
$_ADMINLANG['wbteampro']['listoption']['action_type']['planning'] = 'Planning';
$_ADMINLANG['wbteampro']['listoption']['action_type']['research'] = 'Research';
$_ADMINLANG['wbteampro']['listoption']['action_type']['contact'] = 'Contact';
$_ADMINLANG['wbteampro']['listoption']['action_type']['service'] = 'Service';
$_ADMINLANG['wbteampro']['listoption']['action_type']['development'] = 'Development';
$_ADMINLANG['wbteampro']['listoption']['action_type']['review'] = 'Review';
$_ADMINLANG['wbteampro']['listoption']['action_status']['closed'] = 'Closed';
$_ADMINLANG['wbteampro']['listoption']['action_status']['active'] = 'Active';
$_ADMINLANG['wbteampro']['listoption']['action_status']['progress'] = 'Progress';
$_ADMINLANG['wbteampro']['listoption']['action_status']['cancelled'] = 'Cancelled';
$_ADMINLANG['wbteampro']['listoption']['action_status']['complete'] = 'Complete';
$_ADMINLANG['wbteampro']['listoption']['timelog_type']['standard'] = 'Standard';
$_ADMINLANG['wbteampro']['listoption']['timelog_type']['in_house'] = 'In-House';
$_ADMINLANG['wbteampro']['listoption']['timelog_type']['rush'] = 'Rush';
$_ADMINLANG['wbteampro']['listoption']['timelog_type']['emergency'] = 'Emergency';
$_ADMINLANG['wbteampro']['listoption']['insert_position']['first'] = 'First';
$_ADMINLANG['wbteampro']['listoption']['insert_position']['last'] = 'Last';

/** END LANGUAGE **/