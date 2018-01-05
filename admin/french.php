<?php

/**

  Webuddha wbTeamPro
  (c)2010 Webuddha.com, The Holodyn Corporation - All Rights Reserved

  CHANGELOG ************

**/

defined('WHMCS_ADMIN') or die('Invalid Access');
include('english.php');

/************************************** Errors */
$_ADMINLANG['wbteampro']['error']['default_label'] = 'Message d\'erreur';
$_ADMINLANG['wbteampro']['error']['license_error'] = 'Erreur wbTeamPro: Échec de l\'autorisation de licence';
$_ADMINLANG['wbteampro']['error']['license_invalid'] = 'Erreur wbTeamPro: Clé de licence invalide';
$_ADMINLANG['wbteampro']['error']['license_expired'] = 'Erreur wbTeamPro: Clé de licence expirée';
$_ADMINLANG['wbteampro']['error']['license_suspended'] = 'Erreur wbTeamPro: Clé de licence suspendue';
$_ADMINLANG['wbteampro']['error']['change_error'] = '<b>Erreur lors de la sauvegarde des changements!</b><br/>Vos changements n\'ont pas été enregistrés.';
$_ADMINLANG['wbteampro']['error']['permissiondenied'] = 'Authorisation refusée';
$_ADMINLANG['wbteampro']['error']['invalidroleid'] = 'Votre rôle d\'administrateur n\'est pas autorisé à accéder à wbTeamPro';
$_ADMINLANG['wbteampro']['error']['invalidrequest'] = 'Requête non valide ou mauvais format';
$_ADMINLANG['wbteampro']['error']['project_file_path_invalid'] = '<b>Chemin de fichier invalide!</b><br>Le chemin de fichier pour ce projet n\'est PAS un répertoire valide.';
$_ADMINLANG['wbteampro']['error']['project_file_path_locked'] = '<b>Chemin de fichier inaccessible en écriture!</b><br>Le chemin de fichier pour ce projet n\'est PAS accessible en écriture.';
$_ADMINLANG['wbteampro']['error']['system_tmp_path_invalid'] = '<b>Chemin de fichier invalide!</b><br>Le chemin d\'accès système défini n\'est PAS un répertoire valide.';
$_ADMINLANG['wbteampro']['error']['system_tmp_path_locked'] = '<b>Chemin de fichier inaccessible en écriture!</b><br>Le chemin d\'accès système défini n\'est PAS accessible en écriture.';
$_ADMINLANG['wbteampro']['error']['plugin_loaderror'] = '<b>Erreur Plugin!</b><br>Erreur lors du chargement de l\'objet Plugin.';
$_ADMINLANG['wbteampro']['error']['plugin_protected'] = '<b>Erreur Plugin!</b><br>Erreur lors de la modification d\'un plugin protégé.';
$_ADMINLANG['wbteampro']['error']['keeping_project_type'] = 'Le type du projet "%s" est actuellement en cours d\'utilisation et ne peut pas être retiré';
$_ADMINLANG['wbteampro']['error']['keeping_project_status'] = 'Le status du projet "%s" est actuellement en cours d\'utilisation et ne peut pas être retiré';
$_ADMINLANG['wbteampro']['error']['keeping_action_type'] = 'Le type d\'action "%s" est actuellement en cours d\'utilisation et ne peut pas être retiré';
$_ADMINLANG['wbteampro']['error']['keeping_action_status'] = 'Le status d\'action "%s" est actuellement en cours d\'utilisation et ne peut pas être retiré';
$_ADMINLANG['wbteampro']['error']['keeping_timelog_type'] = 'Le type de timelog "%s" est actuellement en cours d\'utilisation et ne peut pas être retiré';
$_ADMINLANG['wbteampro']['error']['record_notfound'] = 'Enregistrement non trouvé';
$_ADMINLANG['wbteampro']['error']['record_undefined'] = 'Enregistrement non défini';
$_ADMINLANG['wbteampro']['error']['record_updatefailed'] = 'Erreur lors de la mise à jour d\'un ou plusieurs enregistrement(s) (records)';
$_ADMINLANG['wbteampro']['error']['record_incomplete'] = 'Les données requises n\'ont pas été fournies';
$_ADMINLANG['wbteampro']['error']['record_invalidvalue'] = 'La valeur fournie pour %s n\'est pas valide ou n\'est pas autorisée.';
$_ADMINLANG['wbteampro']['error']['update_check_failed'] = 'Impossible de récupérer l\'état de mise à jour du serveur distant.';
$_ADMINLANG['wbteampro']['error']['update_failed'] = '<b>Echec de la mise à jour</b><br>Une erreur fatale a interrompu le processus de mise à jour.<br>Veuillez consulter le journal (log) et corriger les éventuels problèmes avant de réessayer.';
$_ADMINLANG['wbteampro']['error']['view_layout_not_found'] = 'Erreur wbTeamPro: Vue disposition non trouvée (%s)';

/************************************** Alerts */
$_ADMINLANG['wbteampro']['alert']['default_label'] = 'Message d\'alerte';
$_ADMINLANG['wbteampro']['alert']['project_created'] = '<b>Nouveau projet crée</b><br>Votre nouveau projet a été crée.  Vous pouvez maintenant créer votre arborescence d\'actions.';
$_ADMINLANG['wbteampro']['alert']['batch_success'] = '<b>Mises à jour réussies</b><br>The updates have been applied the the selected records successfully!';
$_ADMINLANG['wbteampro']['alert']['change_success'] = '<b>Changements enregistrés</b><br>Les changements effectués sur le précédent record ont été enregistrés.';
$_ADMINLANG['wbteampro']['alert']['delete_success'] = '<b>Record supprimé</b><br>Le record a été supprimé avec succès.';
$_ADMINLANG['wbteampro']['alert']['close_success'] = '<b>Record fermé</b><br>Vous avez fermé le précédent record avec succès.';
$_ADMINLANG['wbteampro']['alert']['copy_success'] = '<b>Copie réussie</b><br>Le projet a été copié avec succès.';
$_ADMINLANG['wbteampro']['alert']['update_success'] = '<b>Mise à jour réussie</b><br>La mise à jour du package a été installée avec succès!';

/************************************** Notices */
$_ADMINLANG['wbteampro']['notice']['default_label'] = 'Message d\'avertissement';
$_ADMINLANG['wbteampro']['notice']['superadmin'] = 'Projet Super Admin';
$_ADMINLANG['wbteampro']['notice']['editing_templateproject'] = '<b>Information template</b><br>Vous éditez un template de Projet.';
$_ADMINLANG['wbteampro']['notice']['editing_archiveproject'] = '<b>Information archive</b><br>Vous <u>Regardez</u> un projet archivé, vous ne pouvez donc pas faire de modifications.';
$_ADMINLANG['wbteampro']['notice']['server_timezone_na'] = '<b>Le Timezone du serveur n\'est pas défini!</b><br>Vous n\'avez pas défini de Time Zone. La précision de la date peut en être affectée.';
$_ADMINLANG['wbteampro']['notice']['action_cancelled'] = '<b>Actions Supprimée</b><br>Vous avez supprimé l\'action précédente.';
$_ADMINLANG['wbteampro']['notice']['plugin_installed'] = '<b>Nouveau résultat du plugin</b><br>%1$s plugins trouvés, %2$s installés, %3$s échoué.';
$_ADMINLANG['wbteampro']['notice']['file_closed'] = '<b>Fil du fichier fermé</b><br>Pour faire des changements, veuillez ouvrir ce fil.';
$_ADMINLANG['wbteampro']['notice']['topic_closed'] = '<b>Fil de discussion fermé</b><br>Pour faire des changements, veuillez ouvrir ce fil.';
$_ADMINLANG['wbteampro']['notice']['update_started'] = 'Votre mise à jour a démarrée. Ne PAS recharger cette page jusqu\'à ce que le processus soit terminé.';
$_ADMINLANG['wbteampro']['notice']['update_backup_first'] = 'Prenez le temps de faire une sauvegarde de votre base de données MySQL et de vos fichier système WHMCS avant de lancer une mise à jour automatique.';
$_ADMINLANG['wbteampro']['notice']['deprecated'] = '<b>Opération obsolète</b><br>La requête que vous venez d\'effectuer ne sera plus disponible dans de futures versions.';
$_ADMINLANG['wbteampro']['notice']['plugin_protected'] = '<b>Information de protection!</b><br>Ce plugin est protégé et ne peut pas être désactivé.';

/************************************** Graph */
$_ADMINLANG['wbteampro']['graph']['label_projectsummary'] = 'Une comparaison de l\'activité du projet';
$_ADMINLANG['wbteampro']['graph']['label_timelogtwoyearsummary'] = 'Un sommaire du total d\'heures passées en étant connecté';

/************************************** Menu */
$_ADMINLANG['wbteampro']['menu']['projectmanager'] = 'Gestionnaire de projets';
$_ADMINLANG['wbteampro']['menu']['tablabel'] = 'Projet';
$_ADMINLANG['wbteampro']['menu']['viewall'] = 'Voir tout';
$_ADMINLANG['wbteampro']['menu']['dashboard'] = 'Dashboard';
$_ADMINLANG['wbteampro']['menu']['projects'] = 'Projets';
$_ADMINLANG['wbteampro']['menu']['assignedprojects'] = 'Mes projets (assignés)';
$_ADMINLANG['wbteampro']['menu']['myprojects'] = 'Mes projets (personnels)';
$_ADMINLANG['wbteampro']['menu']['newproject'] = 'Créer un nouveau projet';
$_ADMINLANG['wbteampro']['menu']['actions'] = 'Actions';
$_ADMINLANG['wbteampro']['menu']['incompletetasks'] = 'Tâches incomplètes';
$_ADMINLANG['wbteampro']['menu']['assignedtasks'] = 'Mes tâches assignées';
$_ADMINLANG['wbteampro']['menu']['myactions'] = 'Mes Actions';
$_ADMINLANG['wbteampro']['menu']['files'] = 'Fichiers';
$_ADMINLANG['wbteampro']['menu']['myfiles'] = 'Mes fichiers';
$_ADMINLANG['wbteampro']['menu']['discussions'] = 'Discussions';
$_ADMINLANG['wbteampro']['menu']['mydiscussions'] = 'Mes discussions';
$_ADMINLANG['wbteampro']['menu']['tickets'] = 'Tickets';
$_ADMINLANG['wbteampro']['menu']['mytickets'] = 'Mes tickets';
$_ADMINLANG['wbteampro']['menu']['timelog'] = 'Timer';
$_ADMINLANG['wbteampro']['menu']['mytimelog'] = 'Mes timers';
$_ADMINLANG['wbteampro']['menu']['setupmanager'] = 'Gestion système';
$_ADMINLANG['wbteampro']['menu']['archivedprojects'] = 'Projets archivés';
$_ADMINLANG['wbteampro']['menu']['templateprojects'] = 'Templates de projet';
$_ADMINLANG['wbteampro']['menu']['system'] = 'Système';
$_ADMINLANG['wbteampro']['menu']['setup_config'] = 'Configuration';
$_ADMINLANG['wbteampro']['menu']['setup_update'] = 'Vérifier les mises à jour';
$_ADMINLANG['wbteampro']['menu']['setup_update_avail'] = 'Mise à jour prête';
$_ADMINLANG['wbteampro']['menu']['setup_plugins'] = 'Gérer les plugins';
$_ADMINLANG['wbteampro']['menu']['support'] = 'Aide et support';

/************************************** JS */
$_ADMINLANG['wbteampro']['js']['tabProject'] = 'Projet';
$_ADMINLANG['wbteampro']['js']['tabProjects'] = 'Projets';
$_ADMINLANG['wbteampro']['js']['tabTickets'] = 'Tickets';
$_ADMINLANG['wbteampro']['js']['loadMsg'] = 'Chargement... Veuillez patienter...';
$_ADMINLANG['wbteampro']['js']['titleActiveLogs'] = 'Vos timer en cours';
$_ADMINLANG['wbteampro']['js']['noActiveLogs'] = 'Pas de timers actifs';
$_ADMINLANG['wbteampro']['js']['reqComplete'] = 'Requête terminée';
$_ADMINLANG['wbteampro']['js']['uiTimelogStart'] = 'Démarrer';
$_ADMINLANG['wbteampro']['js']['uiTimelogSave'] = 'Enregistrer';
$_ADMINLANG['wbteampro']['js']['uiTimelogCancel'] = 'Annuler';
$_ADMINLANG['wbteampro']['js']['uiTicketCreate'] = 'Créer';
$_ADMINLANG['wbteampro']['js']['uiTicketCreateOpen'] = 'Créer et ouvrir';
$_ADMINLANG['wbteampro']['js']['uiTicketCancel'] = 'Annuler';
$_ADMINLANG['wbteampro']['js']['btnStartTimer'] = 'Démarrer le Timer';
$_ADMINLANG['wbteampro']['js']['btnStopTimer'] = 'Arrêter le Timer';
$_ADMINLANG['wbteampro']['js']['btnViewAll'] = 'Voir tout';
$_ADMINLANG['wbteampro']['js']['btnCreate'] = 'Créer';
$_ADMINLANG['wbteampro']['js']['msgTimelogSaved'] = 'Timer enregistré pour [time]';
$_ADMINLANG['wbteampro']['js']['msgTimelogStopped'] = 'Timer arrêté après [time]';
$_ADMINLANG['wbteampro']['js']['deleteConfirm'] = 'Cliquez sur OK pour confirmer votre action';
$_ADMINLANG['wbteampro']['js']['deletePrompt'] = 'Tapez DELETE pour confirmer votre action';
$_ADMINLANG['wbteampro']['js']['deleteAnswer'] = 'DELETE';
$_ADMINLANG['wbteampro']['js']['deleteCancelled'] = 'Suppression annulée';
$_ADMINLANG['wbteampro']['js']['textLimitRemain'] = '[remain] de [limit] caractères restants';
$_ADMINLANG['wbteampro']['js']['textLimitReached'] = 'limite de [limit] caractères atteinte';
$_ADMINLANG['wbteampro']['js']['copyPrompt'] = 'Tapez COPY afin de confirmer votre action';
$_ADMINLANG['wbteampro']['js']['copyAnswer'] = 'COPY';
$_ADMINLANG['wbteampro']['js']['copyCancelled'] = 'Copie annulée';
$_ADMINLANG['wbteampro']['js']['ajaxSearchInput'] = 'Tapez dans la recherche...';
$_ADMINLANG['wbteampro']['js']['rruleOccurDaily'] = 'jour(s)';
$_ADMINLANG['wbteampro']['js']['rruleOccurWeekly'] = 'semaine(s)';
$_ADMINLANG['wbteampro']['js']['rruleOccurMonthly'] = 'mois';
$_ADMINLANG['wbteampro']['js']['rruleOccurYearly'] = 'année(s)';
$_ADMINLANG['wbteampro']['js']['rowSelectEmpty'] = 'Veuillez selectionner la/les colonne(s) à gérer';
$_ADMINLANG['wbteampro']['js']['rowSelectConfirm'] = 'Choisissez OK pour confirmer votre action';
$_ADMINLANG['wbteampro']['js']['uiInvoiceCreate'] = 'Créer / Mettre à jour une facture';
$_ADMINLANG['wbteampro']['js']['uiInvoiceCancel'] = 'Annuler';
$_ADMINLANG['wbteampro']['js']['uiInvoiceNoItems'] = 'Aucun élément à facturer';
$_ADMINLANG['wbteampro']['js']['uiInvoiceSuccess'] = 'Le Timer de facture(s) a été créée avec succès';
$_ADMINLANG['wbteampro']['js']['uiModifyAccept'] = 'Appliquer les changements';
$_ADMINLANG['wbteampro']['js']['uiModifyCancel'] = 'Annuler';

/************************************** Page Headers */
$_ADMINLANG['wbteampro']['taskheader']['prefix'] = 'wbTeamPro: ';
$_ADMINLANG['wbteampro']['taskheader']['project_edit_archive'] = ' [ARCHIVE]';
$_ADMINLANG['wbteampro']['taskheader']['project_edit_template'] = ' [TEMPLATE]';
$_ADMINLANG['wbteampro']['taskheader']['project_edit_new'] = 'Nouveau projet';
$_ADMINLANG['wbteampro']['taskheader']['project_action_list'] = 'Actions du projet';
$_ADMINLANG['wbteampro']['taskheader']['project_ticket_list'] = 'Tickets du projet';
$_ADMINLANG['wbteampro']['taskheader']['project_file_list'] = 'Fichiers du projet';
$_ADMINLANG['wbteampro']['taskheader']['project_topic_list'] = 'Discussions du projet';
$_ADMINLANG['wbteampro']['taskheader']['project_list'] = 'Tous les projets';
$_ADMINLANG['wbteampro']['taskheader']['action_list'] = 'Toutes les actions du projet';
$_ADMINLANG['wbteampro']['taskheader']['file_list'] = 'Tous les fichiers du projet';
$_ADMINLANG['wbteampro']['taskheader']['topic_list'] = 'Toutes les discussions du projet';
$_ADMINLANG['wbteampro']['taskheader']['ticket_list'] = 'Tous les tickets du projet';
$_ADMINLANG['wbteampro']['taskheader']['timelog_list'] = 'Tous les Timers du projet';
$_ADMINLANG['wbteampro']['taskheader']['template_list'] = 'Tous les templates';
$_ADMINLANG['wbteampro']['taskheader']['archive_list'] = 'Toutes les archives';

/************************************** Client Profile Tabs */
$_ADMINLANG['wbteampro']['profiletab']['projects'] = 'Projets';
$_ADMINLANG['wbteampro']['profiletab']['actions'] = 'Actions';
$_ADMINLANG['wbteampro']['profiletab']['files'] = 'Fichiers';
$_ADMINLANG['wbteampro']['profiletab']['topics'] = 'Discussions';
$_ADMINLANG['wbteampro']['profiletab']['timelog'] = 'Timers';
$_ADMINLANG['wbteampro']['profiletab']['tickets'] = 'Tickets';

/************************************** Project Tabs */
$_ADMINLANG['wbteampro']['projecttab']['details'] = 'Détails';
$_ADMINLANG['wbteampro']['projecttab']['actions'] = 'Actions';
$_ADMINLANG['wbteampro']['projecttab']['tickets'] = 'Tickets';
$_ADMINLANG['wbteampro']['projecttab']['files'] = 'Fichiers';
$_ADMINLANG['wbteampro']['projecttab']['filesview'] = 'Vue fichier';
$_ADMINLANG['wbteampro']['projecttab']['topics'] = 'Discussions';
$_ADMINLANG['wbteampro']['projecttab']['topicsview'] = 'Vue discussion';
$_ADMINLANG['wbteampro']['projecttab']['timelog'] = 'Timer';

/************************************** Admin Visibility */
$_ADMINLANG['wbteampro']['adminvisible']['all'] = 'Tous';
$_ADMINLANG['wbteampro']['adminvisible']['manager'] = 'Manageur seulement';
$_ADMINLANG['wbteampro']['adminvisible']['related'] = 'Manageur et personnes assignées';

/************************************** Client Visibility */
$_ADMINLANG['wbteampro']['clientvisible']['hidden'] = 'Caché';
$_ADMINLANG['wbteampro']['clientvisible']['visible'] = 'Visible';
$_ADMINLANG['wbteampro']['clientvisible']['view'] = 'Lecture seulement';
$_ADMINLANG['wbteampro']['clientvisible']['modify'] = 'Lecture et écriture';
$_ADMINLANG['wbteampro']['clientvisible']['inherit'] = 'Hérité du parent';

/************************************** Project Functions */
$_ADMINLANG['wbteampro']['projectfunction']['default'] = 'Par défaut';
$_ADMINLANG['wbteampro']['projectfunction']['template'] = 'Template';
$_ADMINLANG['wbteampro']['projectfunction']['archive'] = 'Archive';

/************************************** Project Fields */
$_ADMINLANG['wbteampro']['projectsave']['newActionLabel'] = 'Définissez une action principale';
$_ADMINLANG['wbteampro']['projectlist']['newproject'] = 'Nouveau projet';
$_ADMINLANG['wbteampro']['projectlist']['newtemplate'] = 'Nouveau template';
$_ADMINLANG['wbteampro']['projectfield']['name'] = 'Nom du projet';
$_ADMINLANG['wbteampro']['projectfield']['client'] = 'Client';
$_ADMINLANG['wbteampro']['projectfield']['type'] = 'Type';
$_ADMINLANG['wbteampro']['projectfield']['contact'] = 'Contact client';
$_ADMINLANG['wbteampro']['projectfield']['product'] = 'Produit client';
$_ADMINLANG['wbteampro']['projectfield']['status'] = 'État';
$_ADMINLANG['wbteampro']['projectfield']['managedby'] = 'Gérer par';
$_ADMINLANG['wbteampro']['projectfield']['visiblestatus'] = 'Accès admin';
$_ADMINLANG['wbteampro']['projectfield']['assignedto'] = 'Assigné à';
$_ADMINLANG['wbteampro']['projectfield']['datestart'] = 'Date de début';
$_ADMINLANG['wbteampro']['projectfield']['datefinish'] = 'Date de fin';
$_ADMINLANG['wbteampro']['projectfield']['details'] = 'Notes / Détails';
$_ADMINLANG['wbteampro']['projectfield']['created'] = 'Créé';
$_ADMINLANG['wbteampro']['projectfield']['activity'] = 'Activité';
$_ADMINLANG['wbteampro']['projectfield']['modified'] = 'Modifié';
$_ADMINLANG['wbteampro']['projectfield']['completed'] = 'Terminé';
$_ADMINLANG['wbteampro']['projectfield']['sfcompleted'] = '%1$s de %2$s Actions, %3$s Action principale, %4$s Groupe, %5$s Tâche, Temps passé: %6$s';
$_ADMINLANG['wbteampro']['projectfield']['namecopysprint'] = '*COPY* %s';
$_ADMINLANG['wbteampro']['projectfield']['notes'] = 'Notes privées';
$_ADMINLANG['wbteampro']['projectfield']['clientvisible'] = 'Accès client';
$_ADMINLANG['wbteampro']['projectfield']['function'] = 'Fonction';
$_ADMINLANG['wbteampro']['projectfield']['billable'] = 'Temps facturable';

/************************************** Copy Fields */
$_ADMINLANG['wbteampro']['copyform']['option_setup'] = 'Options de copie du projet';
$_ADMINLANG['wbteampro']['copyform']['project_setup'] = 'Réglages du nouveau projet';
$_ADMINLANG['wbteampro']['copyfield']['newname'] = 'Nouveau nom du projet';
$_ADMINLANG['wbteampro']['copyfield']['copy_template'] = 'Enregistrer en tant que template';
$_ADMINLANG['wbteampro']['copyfield']['copy_actions'] = 'Copier les actions';
$_ADMINLANG['wbteampro']['copyfield']['copy_files'] = 'Copier les fils de fichier';
$_ADMINLANG['wbteampro']['copyfield']['copy_topics'] = 'Copier les fils de discussions';
$_ADMINLANG['wbteampro']['copyfield']['copy_tickets'] = 'Copier les relations avec les tickets';
$_ADMINLANG['wbteampro']['copyfield']['copy_timelogs'] = 'Copier les timers';

/************************************** File Fields */
$_ADMINLANG['wbteampro']['filelist']['newthread'] = 'Nouveau fil';
$_ADMINLANG['wbteampro']['filelist']['appendthread'] = 'Ajouter un fil';
$_ADMINLANG['wbteampro']['filelist']['deletethread'] = 'Supprimer un fil';
$_ADMINLANG['wbteampro']['filelist']['clientaccess'] = 'Accès client';
$_ADMINLANG['wbteampro']['filelist']['toggleaccess'] = 'Modifier l\'accès';
$_ADMINLANG['wbteampro']['filelist']['by'] = 'par';
$_ADMINLANG['wbteampro']['filelist']['on'] = 'le';
$_ADMINLANG['wbteampro']['filefield']['label'] = 'Label';
$_ADMINLANG['wbteampro']['filefield']['version'] = 'Ver';
$_ADMINLANG['wbteampro']['filefield']['file'] = 'Fichier';
$_ADMINLANG['wbteampro']['filefield']['mime'] = 'Mime';
$_ADMINLANG['wbteampro']['filefield']['size'] = 'Taille';
$_ADMINLANG['wbteampro']['filefield']['detail'] = 'Détail';
$_ADMINLANG['wbteampro']['filefield']['upload'] = 'Uploader';
$_ADMINLANG['wbteampro']['filefield']['import'] = 'Importer';
$_ADMINLANG['wbteampro']['filelist']['status'] = 'État';
$_ADMINLANG['wbteampro']['filelist']['status_open'] = 'Ouvert';
$_ADMINLANG['wbteampro']['filelist']['status_closed'] = 'Fermé';
$_ADMINLANG['wbteampro']['filelist']['expanddetail'] = 'Agrandir / Réduire';
$_ADMINLANG['wbteampro']['filelist']['count'] = '%s Fichiers';

/************************************** Ticket Fields */
$_ADMINLANG['wbteampro']['ticketlist']['ticket_nonefound'] = 'Aucun tickets trouvés';
$_ADMINLANG['wbteampro']['ticketlist']['linkticket'] = 'Lien de ticket';
$_ADMINLANG['wbteampro']['ticketlist']['newticket'] = 'Noueau ticket';
$_ADMINLANG['wbteampro']['ticketfield']['project'] = 'Projet';
$_ADMINLANG['wbteampro']['ticketfield']['action'] = 'Action';

/************************************** Topic Fields */
$_ADMINLANG['wbteampro']['topiclist']['newthread'] = 'Nouveau fil';
$_ADMINLANG['wbteampro']['topiclist']['appendthread'] = 'Ajouter un fil';
$_ADMINLANG['wbteampro']['topiclist']['deletethread'] = 'Supprimer un fil';
$_ADMINLANG['wbteampro']['topiclist']['clientaccess'] = 'Accès client';
$_ADMINLANG['wbteampro']['topiclist']['toggleaccess'] = 'Modifier l\'accès';
$_ADMINLANG['wbteampro']['topiclist']['by'] = 'par';
$_ADMINLANG['wbteampro']['topiclist']['on'] = 'le';
$_ADMINLANG['wbteampro']['topicfield']['title'] = 'Titre';
$_ADMINLANG['wbteampro']['topicfield']['detail'] = 'Détail';
$_ADMINLANG['wbteampro']['topiclist']['status'] = 'État';
$_ADMINLANG['wbteampro']['topiclist']['status_open'] = 'Ouvert';
$_ADMINLANG['wbteampro']['topiclist']['status_closed'] = 'Fermé';
$_ADMINLANG['wbteampro']['topiclist']['expanddetail'] = 'Agrandir / Réduire';
$_ADMINLANG['wbteampro']['topiclist']['count'] = '%s Messages';
$_ADMINLANG['wbteampro']['topiclist']['created'] = 'Commencé le %s';

/************************************** Action Fields */
$_ADMINLANG['wbteampro']['actionlist']['dispmode'] = 'Mode d\'affichage:';
$_ADMINLANG['wbteampro']['actionlist']['listview'] = 'Vue liste';
$_ADMINLANG['wbteampro']['actionlist']['treeview'] = 'Vue arborescence';
$_ADMINLANG['wbteampro']['actionlist']['ganttview'] = 'Vue Gantt';
$_ADMINLANG['wbteampro']['actionlist']['listexpand'] = 'Agrandir / Réduire toutes les tâches imbriquées';
$_ADMINLANG['wbteampro']['actionlist']['listmaskcompleted'] = 'Afficher / Masquer les tâches terminées';
$_ADMINLANG['wbteampro']['actionlist']['newaction'] = 'Nouvelle action';
$_ADMINLANG['wbteampro']['actionlist']['addchild'] = 'Ajouter une action imbriquée';
$_ADMINLANG['wbteampro']['actionlist']['stoptimer'] = 'Arrêter le timer';
$_ADMINLANG['wbteampro']['actionlist']['starttimer'] = 'Démarrer le timer';
$_ADMINLANG['wbteampro']['actionlist']['viewlog'] = 'Voir le journal d\'activités';
$_ADMINLANG['wbteampro']['actionlist']['delete'] = 'Supprimer';
$_ADMINLANG['wbteampro']['actionlist']['totalcomplete'] = 'Projet terminé';
$_ADMINLANG['wbteampro']['actionlist']['totalduration'] = 'Durée totale';
$_ADMINLANG['wbteampro']['actionlist']['totalelapsed'] = 'Total écoulé';
$_ADMINLANG['wbteampro']['actionlist']['client_access'] = 'Changer l\'accès client';
$_ADMINLANG['wbteampro']['actionfield']['name'] = 'Nom';
$_ADMINLANG['wbteampro']['actionfield']['complete'] = '% terminé';
$_ADMINLANG['wbteampro']['actionfield']['type'] = 'Type';
$_ADMINLANG['wbteampro']['actionfield']['datestart'] = 'Date de début';
$_ADMINLANG['wbteampro']['actionfield']['status'] = 'État';
$_ADMINLANG['wbteampro']['actionfield']['datefinish'] = 'Date de fin';
$_ADMINLANG['wbteampro']['actionfield']['client'] = 'Client';
$_ADMINLANG['wbteampro']['actionfield']['managedby'] = 'Gérer par';
$_ADMINLANG['wbteampro']['actionfield']['maincontact'] = 'Contact principal';
$_ADMINLANG['wbteampro']['actionfield']['assignedto'] = 'Assigné à';
$_ADMINLANG['wbteampro']['actionfield']['detail'] = 'Notes / Détails';
$_ADMINLANG['wbteampro']['actionfield']['created'] = 'Créé';
$_ADMINLANG['wbteampro']['actionfield']['activity'] = 'Activité';
$_ADMINLANG['wbteampro']['actionfield']['modified'] = 'Modifié';
$_ADMINLANG['wbteampro']['actionfield']['parentaction'] = 'Action parente';
$_ADMINLANG['wbteampro']['actionfield']['clientvisible'] = 'Accès client';
$_ADMINLANG['wbteampro']['actionfield']['notes'] = 'Notes privées';
$_ADMINLANG['wbteampro']['actionfield']['priority'] = 'Priorité';
$_ADMINLANG['wbteampro']['actionfield']['billable'] = 'Temps facturable';
$_ADMINLANG['wbteampro']['actionfield']['duration'] = 'Durée';
$_ADMINLANG['wbteampro']['actionfield']['recurrence'] = 'Récurrence';
$_ADMINLANG['wbteampro']['actionfield']['summary']['datestart'] = 'Début de la récurrence';
$_ADMINLANG['wbteampro']['actionfield']['summary']['datefinish'] = 'Fin de la récurrence';
$_ADMINLANG['wbteampro']['actionfield']['occurrence']['datestart'] = 'Début de l\'ocurrence';
$_ADMINLANG['wbteampro']['actionfield']['occurrence']['datefinish'] = 'Fin de l\'ocurrence';

/************************************** Action Report Labels */
$_ADMINLANG['wbteampro']['actionreport']['schd_on'] = 'Dans les délais';
$_ADMINLANG['wbteampro']['actionreport']['schd_ahead'] = 'En avance';
$_ADMINLANG['wbteampro']['actionreport']['schd_behind'] = 'En retard';

/************************************** Recurrence Fields */
$_ADMINLANG['wbteampro']['recurrence']['report']['instance'] = 'Occurrence %s de %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['fromdate'] = 'À partir de %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['daily']['count'] = 'Répétez tous les %s jours pendant %s jours';
$_ADMINLANG['wbteampro']['recurrence']['report']['daily']['until'] = 'Répétez tous les %s jours jusqu\'à %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['weekly']['count'] = 'Répétez toutes les %s semaines sur %s pendant %s semaines';
$_ADMINLANG['wbteampro']['recurrence']['report']['weekly']['until'] = 'Répétez toutes les %s semaines sur %s jusqu\'à %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['monthly']['bymonthday']['count'] = 'Répéter l\'opération %s jour tous les %s mois pendant %s mois';
$_ADMINLANG['wbteampro']['recurrence']['report']['monthly']['bymonthday']['until'] = 'Répéter l\'opération %s jour tous les %s mois jusqu\'à %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['monthly']['bysetpos']['count'] = 'Répéter l\'opération %s %s tous les %s mois pendant %s mois';
$_ADMINLANG['wbteampro']['recurrence']['report']['monthly']['bysetpos']['until'] = 'Répéter l\'opération %s %s tous les %s mois jusqu\'à %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['yearly']['bymonthday']['count'] = 'Répéter l\'opération %s jour de %s tous les %s année(s) pendant %s année(s)';
$_ADMINLANG['wbteampro']['recurrence']['report']['yearly']['bymonthday']['until'] = 'Répéter l\'opération %s jour de %s tous les %s année(s) jusqu\'à %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['yearly']['bysetpos']['count'] = 'Répéter l\'opération %s %s de %s tous les %s année(s) pendant %s année(s)';
$_ADMINLANG['wbteampro']['recurrence']['report']['yearly']['bysetpos']['until'] = 'Répéter l\'opération %s %s de %s tous les %s année(s) jusqu\'à %s';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['legend'] = 'Fréquence de la récurrence';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['daily']['everyxdays'] = '%sReproduire tous les%s %s jour(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['weekly']['everyxweeks'] = '%sReproduire tous les%s %s semaine(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['monthly']['nthofxmonths'] = '%sJour%s %s de tous les %s mois(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['monthly']['nthdayofxmonths'] = '%sLe%s %s %s de tous les %s mois';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['yearly']['nthofxyears'] = '%sLe%s %s le %s tous les %s an(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['yearly']['nthdayofxyears'] = '%sPour le%s %s %s de %s tous les %s an(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['legend'] = 'Durée de la récurrence';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['until'] = '%sRépéter jusqu\'à%s %s';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['count'] = '%sRépéter pendant%s %s %soccurrence(s)%s';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['occur']['daily'] = 'jour(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['occur']['weekly'] = 'semaine(s)';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['occur']['monthly'] = 'mois';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['occur']['yearly'] = 'année(s)';

/************************************** Timelog Fields */
$_ADMINLANG['wbteampro']['timeloglist']['total'] = 'Total';
$_ADMINLANG['wbteampro']['timeloglist']['totalelapsed'] = 'Total écoulé';
$_ADMINLANG['wbteampro']['timeloglist']['by'] = 'par';
$_ADMINLANG['wbteampro']['timelogfield']['note'] = 'Note';
$_ADMINLANG['wbteampro']['timelogfield']['type'] = 'Type';
$_ADMINLANG['wbteampro']['timelogfield']['datestart'] = 'Date de début';
$_ADMINLANG['wbteampro']['timelogfield']['datestop'] = 'Date de fin';
$_ADMINLANG['wbteampro']['timelogfield']['duration'] = 'Durée';
$_ADMINLANG['wbteampro']['timelogfield']['owner'] = 'Propriétaire';
$_ADMINLANG['wbteampro']['timelogfield']['elapsed'] = 'Temps écoulé';
$_ADMINLANG['wbteampro']['timelogfield']['billable'] = 'Temps facturable';
$_ADMINLANG['wbteampro']['timelogfield']['invoice'] = 'Facture #';

/************************************** Timelog */
$_ADMINLANG['wbteampro']['timelog']['emptynote'] = '~';
$_ADMINLANG['wbteampro']['timelog']['status']['active'] = 'Actif';
$_ADMINLANG['wbteampro']['timelog']['status']['complete'] = 'Terminé';
$_ADMINLANG['wbteampro']['timelog']['elapsed']['all'] = 'Temps total passé en étant connecté';
$_ADMINLANG['wbteampro']['timelog']['elapsed']['my'] = 'Mon temps passé en étant connecté';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['client'] = 'Client';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['project'] = 'Projet';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['action'] = 'Action';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['milestone'] = 'Action principale';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['group'] = 'Groupe';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['task'] = 'Tâche';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['ticket'] = 'Ticket de support';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['timelog'] = 'Timer';

/************************************** Timelog Modal */
$_ADMINLANG['wbteampro']['timelog']['modal']['title'] = 'Démarrer un nouveau timer';
$_ADMINLANG['wbteampro']['timelog']['modal']['event'] = 'Entrer la description de l\'événement';
$_ADMINLANG['wbteampro']['timelog']['modal']['type'] = 'Type d\'événement';
$_ADMINLANG['wbteampro']['timelog']['modal']['manual'] = 'Specifier une durée & Enregistrer en tant que Terminé';
$_ADMINLANG['wbteampro']['timelog']['modal']['start'] = 'Démarrer';
$_ADMINLANG['wbteampro']['timelog']['modal']['duration'] = 'Durée';
$_ADMINLANG['wbteampro']['timelog']['modal']['durexample'] = 'Ex: 2h, 5min, 10s';
$_ADMINLANG['wbteampro']['timelog']['modal']['owner'] = 'Propriétaire';
$_ADMINLANG['wbteampro']['timelog']['modal']['billable'] = 'Est-ce que ce temps sera facturable?';

/************************************** Invoice Modal */
$_ADMINLANG['wbteampro']['invoice']['modal']['title'] = 'Créer nouvelle(s) facture(s)';
$_ADMINLANG['wbteampro']['invoice']['modal']['invoicecount'] = 'Facture #{invoice_count}';
$_ADMINLANG['wbteampro']['invoice']['modal']['date'] = 'Date de la facture';
$_ADMINLANG['wbteampro']['invoice']['modal']['duedate'] = 'Date d\'échéance';
$_ADMINLANG['wbteampro']['invoice']['modal']['taxrate'] = 'Taux d\'imposition';
$_ADMINLANG['wbteampro']['invoice']['modal']['applytax'] = 'Appliquer la taxe';
$_ADMINLANG['wbteampro']['invoice']['modal']['paymentmethod'] = 'Méthode de paiement';
$_ADMINLANG['wbteampro']['invoice']['modal']['sendinvoice'] = 'Envoyer la facture';
$_ADMINLANG['wbteampro']['invoice']['modal']['autoapplycredit'] = 'Appliquer les crédits';
$_ADMINLANG['wbteampro']['invoice']['modal']['rate'] = 'Taux';
$_ADMINLANG['wbteampro']['invoice']['modal']['note'] = 'Notes de facturation';
$_ADMINLANG['wbteampro']['invoice']['modal']['invoiceid'] = 'Ajouter à l\'ID de facture';
$_ADMINLANG['wbteampro']['invoice']['modal']['total_count'] = '# éléments de campagne';
$_ADMINLANG['wbteampro']['invoice']['modal']['total_hours'] = 'Heures totales';
$_ADMINLANG['wbteampro']['invoice']['modal']['sub_total'] = 'Sous-Total';
$_ADMINLANG['wbteampro']['invoice']['modal']['total_tax'] = 'Taxe totale';
$_ADMINLANG['wbteampro']['invoice']['modal']['total'] = 'Total facture';
$_ADMINLANG['wbteampro']['invoice']['modal']['line_total'] = 'Total';
$_ADMINLANG['wbteampro']['invoice']['modal']['checkall'] = 'Cocher tout';
$_ADMINLANG['wbteampro']['invoice']['modal']['applyall'] = 'Appliquer à tous';
$_ADMINLANG['wbteampro']['invoice']['modal']['expandall'] = 'Agrandir / Réduire tout';
$_ADMINLANG['wbteampro']['invoice']['modal']['apply'] = 'Appliquer';
$_ADMINLANG['wbteampro']['invoice']['modal']['customize'] = 'Personnaliser la facture et les éléments de campagne';

/************************************** Modify Actions Modal */
$_ADMINLANG['wbteampro']['modifyactions']['modal']['title'] = 'Modifier plusieurs actions';
$_ADMINLANG['wbteampro']['modifyactions']['modal']['th-apply'] = 'Appliquer';
$_ADMINLANG['wbteampro']['modifyactions']['modal']['th-option'] = 'Option';
$_ADMINLANG['wbteampro']['modifyactions']['modal']['th-value'] = 'Valeur';

/************************************** Modify Actions Modal */
$_ADMINLANG['wbteampro']['modifytimelogs']['modal']['title'] = 'Modifier plusieurs Timers';
$_ADMINLANG['wbteampro']['modifytimelogs']['modal']['th-apply'] = 'Appliquer';
$_ADMINLANG['wbteampro']['modifytimelogs']['modal']['th-option'] = 'Option';
$_ADMINLANG['wbteampro']['modifytimelogs']['modal']['th-value'] = 'Valeur';

/************************************** Confirm Modal */
$_ADMINLANG['wbteampro']['confirm']['modal']['title'] = 'Confirmer l\'action';
$_ADMINLANG['wbteampro']['confirm']['modal']['delete'] = 'Tapez DELETE pour confirmer';

/************************************** Ticket Modal */
$_ADMINLANG['wbteampro']['ticket']['modal']['title'] = 'Ouvrir un nouveau ticket de support';
$_ADMINLANG['wbteampro']['ticket']['modal']['client'] = 'Client';
$_ADMINLANG['wbteampro']['ticket']['modal']['project'] = 'Projet';
$_ADMINLANG['wbteampro']['ticket']['modal']['deptid'] = 'Département';
$_ADMINLANG['wbteampro']['ticket']['modal']['priority'] = 'Priorité';
$_ADMINLANG['wbteampro']['ticket']['modal']['subject'] = 'Sujet';
$_ADMINLANG['wbteampro']['ticket']['modal']['message'] = 'Message';
$_ADMINLANG['wbteampro']['ticket']['modal']['nodept'] = 'Aucune autorisation de département trouvée';
$_ADMINLANG['wbteampro']['ticket']['modal']['sendemail'] = 'Envoyer email';

/************************************** Page/List Navigation */
$_ADMINLANG['wbteampro']['filter']['tablabel'] = $_ADMINLANG['global']['searchfilter'];
$_ADMINLANG['wbteampro']['filter']['any'] = $_ADMINLANG['global']['any'];
$_ADMINLANG['wbteampro']['filter']['none'] = $_ADMINLANG['global']['none'];
$_ADMINLANG['wbteampro']['filter']['checkall'] = 'Cocher';
$_ADMINLANG['wbteampro']['filter']['uncheckall'] = 'Décocher';
$_ADMINLANG['wbteampro']['filter']['selectedtext'] = '# sélectionné';
$_ADMINLANG['wbteampro']['filter']['search'] = 'Rechercher';
$_ADMINLANG['wbteampro']['filter']['masksearch'] = 'Filtrer';
$_ADMINLANG['wbteampro']['filter']['masksearch-placeholder'] = 'Filtrer par mot clé...';
$_ADMINLANG['wbteampro']['filter']['owner'] = 'Propriétaire';
$_ADMINLANG['wbteampro']['filter']['admin'] = 'Admin';
$_ADMINLANG['wbteampro']['filter']['project'] = 'Projet';
$_ADMINLANG['wbteampro']['filter']['action'] = 'Action';
$_ADMINLANG['wbteampro']['filter']['ticket'] = 'Ticket';
$_ADMINLANG['wbteampro']['filter']['status'] = 'État';
$_ADMINLANG['wbteampro']['filter']['client'] = 'Client';
$_ADMINLANG['wbteampro']['filter']['product'] = 'Produit';
$_ADMINLANG['wbteampro']['filter']['department'] = 'Département';
$_ADMINLANG['wbteampro']['filter']['manager'] = 'Manageur';
$_ADMINLANG['wbteampro']['filter']['assigned'] = 'Assigné';
$_ADMINLANG['wbteampro']['filter']['type'] = 'Type';
$_ADMINLANG['wbteampro']['filter']['level'] = 'Niveau';
$_ADMINLANG['wbteampro']['filter']['flagged'] = 'Marqué';
$_ADMINLANG['wbteampro']['filter']['rangestart'] = 'Commencé après';
$_ADMINLANG['wbteampro']['filter']['rangestop'] = 'Commencé avant';
$_ADMINLANG['wbteampro']['filter']['percentage'] = '% Terminé';
$_ADMINLANG['wbteampro']['filter']['root'] = 'Niveau de la racine';
$_ADMINLANG['wbteampro']['filter']['zone'] = 'Zone';
$_ADMINLANG['wbteampro']['filter']['priority'] = 'Priorité';
$_ADMINLANG['wbteampro']['filter']['billable'] = 'Facturable';
$_ADMINLANG['wbteampro']['filter']['invoiced'] = 'Facturé';
$_ADMINLANG['wbteampro']['filter']['group_mode'] = 'Grouper par';
$_ADMINLANG['wbteampro']['filter']['project_type'] = 'Type de projet';
$_ADMINLANG['wbteampro']['filter']['project_status'] = 'État du projet';

/************************************** Page/List Navigation */
$_ADMINLANG['wbteampro']['pagenav']['report'] = '%s '.$_ADMINLANG['global']['recordsfound'].', '.$_ADMINLANG['global']['page'].' %s '.$_ADMINLANG['global']['of'].' %s';
$_ADMINLANG['wbteampro']['pagenav']['prev'] = $_ADMINLANG['global']['previouspage'];
$_ADMINLANG['wbteampro']['pagenav']['next'] = $_ADMINLANG['global']['nextpage'];
$_ADMINLANG['wbteampro']['pagenav']['empty'] = $_ADMINLANG['global']['norecordsfound'];
$_ADMINLANG['wbteampro']['pagenav']['jumpto'] = $_ADMINLANG['global']['jumppage'];
$_ADMINLANG['wbteampro']['pagenav']['limit'] = 'Limite';
$_ADMINLANG['wbteampro']['pagenav']['go'] = $_ADMINLANG['global']['go'];
$_ADMINLANG['wbteampro']['pagenav']['export'] = 'Exporter';
$_ADMINLANG['wbteampro']['pagenav']['print'] = 'Imprimer';
$_ADMINLANG['wbteampro']['pagenav']['orderby'] = 'Trier par %1$s'; // %1$s = Field, %2$s = Direction
$_ADMINLANG['wbteampro']['pagenav']['allMasked'] = '<b>Information</b><br>Tous les enregistrements sont masqués';

/************************************** Form Button Labels */
$_ADMINLANG['wbteampro']['formnav']['edit'] = 'Modifier';
$_ADMINLANG['wbteampro']['formnav']['view'] = 'Vue';
$_ADMINLANG['wbteampro']['formnav']['copy'] = 'Copie';
$_ADMINLANG['wbteampro']['formnav']['copy_template'] = 'Créer projet';
$_ADMINLANG['wbteampro']['formnav']['archive'] = 'Archive';
$_ADMINLANG['wbteampro']['formnav']['unarchive'] = 'Désarchiver';
$_ADMINLANG['wbteampro']['formnav']['save'] = 'Enregistrer';
$_ADMINLANG['wbteampro']['formnav']['save_new'] = 'Enregistrer et Nouveau';
$_ADMINLANG['wbteampro']['formnav']['apply'] = 'Appliquer';
$_ADMINLANG['wbteampro']['formnav']['close'] = 'Fermer';
$_ADMINLANG['wbteampro']['formnav']['cancel'] = 'Annuler';
$_ADMINLANG['wbteampro']['formnav']['delete'] = 'Supprimer';
$_ADMINLANG['wbteampro']['formnav']['download'] = 'Télécharger';
$_ADMINLANG['wbteampro']['formnav']['timestart'] = 'Démarrer le timer';
$_ADMINLANG['wbteampro']['formnav']['timestop'] = 'Arrêter le timer';
$_ADMINLANG['wbteampro']['formnav']['submit'] = 'Soumettre';
$_ADMINLANG['wbteampro']['formnav']['invoice'] = 'Facture';
$_ADMINLANG['wbteampro']['formnav']['reload'] = 'Recharger';
$_ADMINLANG['wbteampro']['formnav']['check'] = 'Cocher';
$_ADMINLANG['wbteampro']['formnav']['link'] = 'Associer';
$_ADMINLANG['wbteampro']['formnav']['unlink'] = 'Dissocier';

/************************************** Dashboard Blocks */
$_ADMINLANG['wbteampro']['dashhead']['topProjects'] = 'Récentes activités de projets';
$_ADMINLANG['wbteampro']['dashhead']['topActions'] = 'Actions les mieux notées';
$_ADMINLANG['wbteampro']['dashhead']['myActions'] = 'Tâches qui vous sont assignées';
$_ADMINLANG['wbteampro']['dashhead']['touchedActions'] = 'Actions récentes';
$_ADMINLANG['wbteampro']['dashhead']['topTimelog'] = 'Timers récents';
$_ADMINLANG['wbteampro']['dashhead']['topTickets'] = 'Tickets récents';
$_ADMINLANG['wbteampro']['dashhead']['topTopics'] = 'Sujets récents';
$_ADMINLANG['wbteampro']['dashhead']['topFiles'] = 'Récentes opérations de fichiers';
$_ADMINLANG['wbteampro']['dashhead']['viewall'] = 'Voir tout';

/************************************** List Table Headers */
$_ADMINLANG['wbteampro']['listhead']['ordering'] = 'Ordre';
$_ADMINLANG['wbteampro']['listhead']['enabled'] = 'Activé';
$_ADMINLANG['wbteampro']['listhead']['date_created'] = 'Créé';
$_ADMINLANG['wbteampro']['listhead']['date_modified'] = 'Modifié';
$_ADMINLANG['wbteampro']['listhead']['date_activity'] = 'Activité';
$_ADMINLANG['wbteampro']['listhead']['date_start'] = 'Démarrer';
$_ADMINLANG['wbteampro']['listhead']['date_finish'] = 'Échéance';
$_ADMINLANG['wbteampro']['listhead']['client_name'] = 'Nom du client';
$_ADMINLANG['wbteampro']['listhead']['client_userid'] = 'Client';
$_ADMINLANG['wbteampro']['listhead']['client_hostingid'] = 'Produit';
$_ADMINLANG['wbteampro']['listhead']['owner_adminid'] = 'Propriétaire';
$_ADMINLANG['wbteampro']['listhead']['manager_adminid'] = 'Manageur';
$_ADMINLANG['wbteampro']['listhead']['assigned_adminid'] = 'Assigné';
$_ADMINLANG['wbteampro']['listhead']['invoice_id'] = 'Facture';
$_ADMINLANG['wbteampro']['listhead']['range_start'] = 'Commencé après';
$_ADMINLANG['wbteampro']['listhead']['range_stop'] = 'Commencé avant';

/************************************** Project List */
$_ADMINLANG['wbteampro']['listhead']['project_name'] = 'Nom du projet';
$_ADMINLANG['wbteampro']['listhead']['project_type'] = 'Type';
$_ADMINLANG['wbteampro']['listhead']['project_status'] = 'État';
$_ADMINLANG['wbteampro']['listhead']['project_complete'] = '%';
$_ADMINLANG['wbteampro']['listhead']['project_tasks'] = '#';

/************************************** Action List */
$_ADMINLANG['wbteampro']['listhead']['action_name'] = 'Nom de l\'action';
$_ADMINLANG['wbteampro']['listhead']['action_type'] = 'Type';
$_ADMINLANG['wbteampro']['listhead']['action_status'] = 'État';
$_ADMINLANG['wbteampro']['listhead']['action_complete'] = '%';
$_ADMINLANG['wbteampro']['listhead']['action_elapsed'] = 'Écoulé';
$_ADMINLANG['wbteampro']['listhead']['action_priority'] = 'Priorité';
$_ADMINLANG['wbteampro']['listhead']['action_duration'] = 'Durée';

/************************************** Timelog List */
$_ADMINLANG['wbteampro']['listhead']['timelog_note'] = 'Note de timelog';
$_ADMINLANG['wbteampro']['listhead']['timelog_elapsed'] = 'Écoulé';
$_ADMINLANG['wbteampro']['listhead']['timelog_start'] = 'Commencé';
$_ADMINLANG['wbteampro']['listhead']['timelog_type'] = 'Type';
$_ADMINLANG['wbteampro']['listhead']['timelog_status'] = 'État';
$_ADMINLANG['wbteampro']['listhead']['timelog_count'] = '# Enregistrements';
$_ADMINLANG['wbteampro']['listhead']['timelog_elapsed_total_billable'] = 'Total facturable';
$_ADMINLANG['wbteampro']['listhead']['timelog_count_billed'] = '# Facturable';
$_ADMINLANG['wbteampro']['listhead']['timelog_elapsed_total_billed'] = 'Total facturé';
$_ADMINLANG['wbteampro']['listhead']['timelog_count_unbilled'] = '# En attente';
$_ADMINLANG['wbteampro']['listhead']['timelog_elapsed_total_unbilled'] = 'Total en attente';
$_ADMINLANG['wbteampro']['listhead']['timelog_elapsed_total'] = 'Total';

/************************************** Topic List */
$_ADMINLANG['wbteampro']['listhead']['topic_name'] = 'Sujet de discussion';
$_ADMINLANG['wbteampro']['listhead']['topic_activity'] = 'Activité';
$_ADMINLANG['wbteampro']['listhead']['topic_posts'] = 'Messages';
$_ADMINLANG['wbteampro']['listhead']['topic_status'] = 'État';

/************************************** Ticket List */
$_ADMINLANG['wbteampro']['listhead']['ticket_title'] = 'Titre du ticket';
$_ADMINLANG['wbteampro']['listhead']['ticket_lastreply'] = 'Activité';
$_ADMINLANG['wbteampro']['listhead']['ticket_date'] = 'Soumis';
$_ADMINLANG['wbteampro']['listhead']['ticket_urgency'] = 'Urgence';
$_ADMINLANG['wbteampro']['listhead']['ticket_submitter'] = 'Auteur';
$_ADMINLANG['wbteampro']['listhead']['ticket_department'] = 'Département';
$_ADMINLANG['wbteampro']['listhead']['ticket_status'] = 'État';
$_ADMINLANG['wbteampro']['listhead']['ticket_admin'] = 'Propriétaire';
$_ADMINLANG['wbteampro']['listhead']['ticket_flag'] = 'Assigné';

/************************************** File List */
$_ADMINLANG['wbteampro']['listhead']['file_label'] = 'Fil de fichier';
$_ADMINLANG['wbteampro']['listhead']['file_latest'] = 'Dernier fichier';
$_ADMINLANG['wbteampro']['listhead']['file_total'] = 'Fichiers';
$_ADMINLANG['wbteampro']['listhead']['file_status'] = 'État';

/************************************** Plugin List */
$_ADMINLANG['wbteampro']['listhead']['plugin_name'] = 'Nom du plugin';
$_ADMINLANG['wbteampro']['listhead']['plugin_zone'] = 'Zone';
$_ADMINLANG['wbteampro']['listhead']['plugin_element'] = 'Élément';

/************************************** Module List
$_ADMINLANG['wbteampro']['listhead']['module_name'] = 'Module Name';
$_ADMINLANG['wbteampro']['listhead']['module_element'] = 'Element';
$_ADMINLANG['wbteampro']['listhead']['module_position'] = 'Position';
 */

/************************************** Setup Tabs */
$_ADMINLANG['wbteampro']['setuptab']['general'] = 'General';
$_ADMINLANG['wbteampro']['setuptab']['project'] = 'Projet';
$_ADMINLANG['wbteampro']['setuptab']['action'] = 'Action';
$_ADMINLANG['wbteampro']['setuptab']['display'] = 'Affichage';
$_ADMINLANG['wbteampro']['setuptab']['extensions'] = 'Extensions';

/************************************** Setup Configuration */
$_ADMINLANG['wbteampro']['configtopic']['general_settings'] = 'Réglages globaux';
$_ADMINLANG['wbteampro']['configtopic']['project_settings'] = 'Réglages de projet';
$_ADMINLANG['wbteampro']['configtopic']['action_settings'] = 'Réglages d\'action';
$_ADMINLANG['wbteampro']['configtopic']['billing_settings'] = 'Réglages de facture';
$_ADMINLANG['wbteampro']['configtopic']['timelog_settings'] = 'Réglages de timer';
$_ADMINLANG['wbteampro']['configtopic']['billing_resource_rates'] = 'Taux de facturation personnalisés';
$_ADMINLANG['wbteampro']['configtopic']['billing_resource_rates-help'] = 'L\'évaluation des taux pour un timelog est calculée en évaluant les valeurs qui commencent avec les paramètres de facturation «Taux horaire» (ci-dessus), ensuite projette un «taux horaire» specifique (si défini), puis le «taux de base» spécifique à la ressource et enfin les valeurs de taux de type de timelog. Les taux de ressources peuvent être soit une valeur en dollars (Ex: 75) soit un décalage par rapport à la valeur du taux précédent (Ex: +10, -20, + 15%, -5%).';
$_ADMINLANG['wbteampro']['configtopic']['billing_lineitem_formats'] = 'Formatage d\'élément de ligne de facture';
$_ADMINLANG['wbteampro']['configtopic']['display_settings'] = 'Réglages de l\'interface';
$_ADMINLANG['wbteampro']['configtopic']['display_date_formats'] = 'Format d\'affichage des dates';
$_ADMINLANG['wbteampro']['configtopic']['display_name_formats'] = 'Nom de format d\'affichage';
$_ADMINLANG['wbteampro']['configtopic']['display_list_settings'] = 'Liste des paramètres d\'affichage';


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