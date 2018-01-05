<?php

/**

  Webuddha wbTeamPro
  (c)2010 Webuddha.com, The Holodyn Corporation - All Rights Reserved

  CHANGELOG ************

**/

defined('WHMCS_CLIENT') or die('Invalid Access');

/************************************** Menu */
$_LANG['wbteampro_tab'] = 'Projekty';

/************************************** Errors */
$_LANG['wbteampro']['error']['default_label'] = 'Komunikaty błędów';
$_LANG['wbteampro']['error']['license_error'] = 'wbTeamPro Błąd: nie powiodło się sprawdzenie licencji';
$_LANG['wbteampro']['error']['license_invalid'] = 'wbTeamPro Błąd: błędny klucz licencyjny';
$_LANG['wbteampro']['error']['license_expired'] = 'wbTeamPro Błąd: licencja wygasła';
$_LANG['wbteampro']['error']['license_suspended'] = 'wbTeamPro Błąd: licencja została zawieszona';
$_LANG['wbteampro']['error']['permissiondenied'] = 'wbTeamPro Błąd: brak dostępu';
$_LANG['wbteampro']['error']['view_layout_not_found'] = 'wbTeamPro Błąd: wybrany widok nie jest dostępny (%s)';

/************************************** Errors */
$_LANG['wbteampro']['alert']['default_label'] = 'Ostrzeżenie';

/************************************** Notices */
$_LANG['wbteampro']['notice']['default_label'] = 'Powiadomienie';
$_LANG['wbteampro']['notice']['noprojects'] = '<b>Brak aktywnych projektów</b><br>Nie realizujemy obecnie dla Ciebie żadnego zlecenia';
$_LANG['wbteampro']['notice']['file_closed'] = '<b>Wątek został zamknięty</b><br>Ten wątek został zamknięty i nie ma możliwości edycji.';
$_LANG['wbteampro']['notice']['topic_closed'] = '<b><b>Wątek został zamknięty</b><br>Ten wątek został zamknięty i nie ma możliwości edycji.';
$_LANG['wbteampro']['notice']['ticket_created'] = '<b>Zgłoszenie #%s zostało utworzone</b><br>Twoje zgłoszenie zostało przekazane do naszego Zespołu.';
$_LANG['wbteampro']['notice']['deprecated'] = '<b>Porzucona funkcjonalność</b><br>W przyszłych wersjach naszego systemu tej funkcjonalności nie będzie.';

/************************************** JS */
$_LANG['wbteampro']['js']['tabProject'] = 'Projekt';
$_LANG['wbteampro']['js']['tabProjects'] = 'Projekty';
$_LANG['wbteampro']['js']['tabTickets'] = 'Zgłoszenie';
$_LANG['wbteampro']['js']['loadMsg'] = 'Trwa ładowanie...';
$_LANG['wbteampro']['js']['noActiveLogs'] = 'Brak aktywnych timelogów';
$_LANG['wbteampro']['js']['uiTimelogStart'] = 'Start';
$_LANG['wbteampro']['js']['uiTimelogSave'] = 'Zapisz';
$_LANG['wbteampro']['js']['uiTimelogCancel'] = 'Anuluj';
$_LANG['wbteampro']['js']['btnStopTimer'] = 'Stoper - stop';
$_LANG['wbteampro']['js']['btnStartTimer'] = 'Stoper - start';
$_LANG['wbteampro']['js']['msgTimelogSaved'] = 'Timelog zapisał: [time]';
$_LANG['wbteampro']['js']['msgTimelogStopped'] = 'Timelog zatrzymany po upływie [time]';
$_LANG['wbteampro']['js']['deleteConfirm'] = 'Wybierz OK aby potwierdzić';
$_LANG['wbteampro']['js']['deletePrompt'] = 'Wpisz SKASUJ aby potwierdzić';
$_LANG['wbteampro']['js']['deleteAnswer'] = 'SKASUJ';
$_LANG['wbteampro']['js']['deleteCancelled'] = 'Usuń anulowane';
$_LANG['wbteampro']['js']['textLimitRemain'] = 'Pozostało [remain] z [limit] możliwych znaków';
$_LANG['wbteampro']['js']['textLimitReached'] = 'Osiągnięto limit [limit] możliwych znaków';

/************************************** Page Headers */
$_LANG['wbteampro']['taskheader']['prefix'] = 'Moje projekty: ';
$_LANG['wbteampro']['taskheader']['project_action_list'] = 'Działania w projekcie';
$_LANG['wbteampro']['taskheader']['project_ticket_list'] = 'Zgłoszenia';
$_LANG['wbteampro']['taskheader']['project_file_list'] = 'Pliki';
$_LANG['wbteampro']['taskheader']['project_topic_list'] = 'Dyskusje';
$_LANG['wbteampro']['taskheader']['project_list'] = 'Wszystkie projekty';
$_LANG['wbteampro']['taskheader']['action_list'] = 'Wszystkie działania';
$_LANG['wbteampro']['taskheader']['file_list'] = 'Wszystkie pliki';
$_LANG['wbteampro']['taskheader']['topic_list'] = 'Wszystkie tematy';
$_LANG['wbteampro']['taskheader']['ticket_list'] = 'Wszystkie zgłoszenia';
$_LANG['wbteampro']['taskheader']['dashboard'] = 'Pulpit';
$_LANG['wbteampro']['taskheader']['ticket_create'] = 'Nowe zgłoszenie';

/************************************** Client Profile Tabs */
$_LANG['wbteampro']['profiletab']['projects'] = 'Projekty';
$_LANG['wbteampro']['profiletab']['actions'] = 'Działania';
$_LANG['wbteampro']['profiletab']['timelog'] = 'Rejestr czasu';
$_LANG['wbteampro']['profiletab']['tickets'] = 'Zgłoszenia';

/************************************** Project Tabs */
$_LANG['wbteampro']['projecttab']['details'] = 'Szczegóły';
$_LANG['wbteampro']['projecttab']['actions'] = 'Działania';
$_LANG['wbteampro']['projecttab']['tickets'] = 'Zgłoszenia';
$_LANG['wbteampro']['projecttab']['files'] = 'Pliki';
$_LANG['wbteampro']['projecttab']['filesview'] = 'Podgląd pliku';
$_LANG['wbteampro']['projecttab']['topics'] = 'Dyskusje';
$_LANG['wbteampro']['projecttab']['topicsview'] = 'Podgląd dyskusji';

/************************************** Project Fields */
$_LANG['wbteampro']['projectfield']['name'] = 'Nazwa projektu';
$_LANG['wbteampro']['projectfield']['client'] = 'Klient';
$_LANG['wbteampro']['projectfield']['type'] = 'Typ projektu';
$_LANG['wbteampro']['projectfield']['contact'] = 'Kontakt do klienta';
$_LANG['wbteampro']['projectfield']['status'] = 'Status';
$_LANG['wbteampro']['projectfield']['status'] = 'Status';
$_LANG['wbteampro']['projectfield']['managedby'] = 'Zarządzany przez';
$_LANG['wbteampro']['projectfield']['visiblestatus'] = 'Widoczność';
$_LANG['wbteampro']['projectfield']['assignedto'] = 'Przydzielony do';
$_LANG['wbteampro']['projectfield']['datestart'] = 'Start projektu';
$_LANG['wbteampro']['projectfield']['datefinish'] = 'Zakończenie (planowane)';
$_LANG['wbteampro']['projectfield']['details'] = 'Notatki / szczegóły';
$_LANG['wbteampro']['projectfield']['created'] = 'Stworzony';
$_LANG['wbteampro']['projectfield']['reviewed'] = 'Przejrzany';
$_LANG['wbteampro']['projectfield']['modified'] = 'Zmodyfikowany';
$_LANG['wbteampro']['projectfield']['completed'] = 'Ukończonych';
$_LANG['wbteampro']['projectfield']['sfcompleted'] = '%1$s z %2$s działań, %3$s kamieni milowych, %4$s grup, %5$s zadań';

/************************************** File Fields */
$_LANG['wbteampro']['filelist']['newthread'] = 'Nowy wątek';
$_LANG['wbteampro']['filelist']['deletethread'] = 'Skasuj wątek';
$_LANG['wbteampro']['filelist']['by'] = 'by';
$_LANG['wbteampro']['filelist']['on'] = 'on';
$_LANG['wbteampro']['filelist']['expanddetail'] = 'Przełącz widok';
$_LANG['wbteampro']['filefield']['label'] = 'Nazwa';
$_LANG['wbteampro']['filefield']['version'] = 'Wersja';
$_LANG['wbteampro']['filefield']['file'] = 'Plik';
$_LANG['wbteampro']['filefield']['mime'] = 'Typ';
$_LANG['wbteampro']['filefield']['size'] = 'Rozmiar';
$_LANG['wbteampro']['filefield']['detail'] = 'Szczegóły';
$_LANG['wbteampro']['filefield']['upload'] = 'Wgraj';

/************************************** Ticket Fields */
$_LANG['wbteampro']['ticketlist']['newticket'] = 'Nowe zgłoszenie';
$_LANG['wbteampro']['ticketfield']['project'] = 'Projekt';
$_LANG['wbteampro']['ticketfield']['deptid'] = 'Dział';
$_LANG['wbteampro']['ticketfield']['priority'] = 'Priorytet';
$_LANG['wbteampro']['ticketfield']['subject'] = 'Temat';
$_LANG['wbteampro']['ticketfield']['message'] = 'Treść zgłoszenia';
$_LANG['wbteampro']['ticketfield']['attachments'] = 'Załączniki';
$_LANG['wbteampro']['ticketfield']['allowedfiletypes'] = 'Dozwolone pliki';

/************************************** Ticket Priority */
$_LANG['wbteampro']['ticket']['priority']['low'] = 'Niski';
$_LANG['wbteampro']['ticket']['priority']['medium'] = 'Średni';
$_LANG['wbteampro']['ticket']['priority']['high'] = 'Wysoki';

/************************************** Topic Fields */
$_LANG['wbteampro']['topiclist']['newthread'] = 'Nowy wątek';
$_LANG['wbteampro']['topiclist']['deletethread'] = 'Skasuj wątek';
$_LANG['wbteampro']['topiclist']['by'] = 'przez';
$_LANG['wbteampro']['topiclist']['on'] = 'on';
$_LANG['wbteampro']['topicfield']['title'] = 'Tytuł';
$_LANG['wbteampro']['topicfield']['detail'] = 'Szczegóły';
$_LANG['wbteampro']['topiclist']['expanddetail'] = 'Przełącz widok';

/************************************** Action Fields */
$_LANG['wbteampro']['actionlist']['dispmode'] = 'Pokaż:';
$_LANG['wbteampro']['actionlist']['listview'] = 'widok listy';
$_LANG['wbteampro']['actionlist']['treeview'] = 'widok drzewka';
$_LANG['wbteampro']['actionlist']['ganttview'] = 'wykres Gantta';
$_LANG['wbteampro']['actionlist']['listcollapse'] = 'Zwiń wszystko';
$_LANG['wbteampro']['actionlist']['listexpand'] = 'Rozwiń wszystko';
$_LANG['wbteampro']['actionlist']['addchild'] = 'Dodaj pod-zadanie';
$_LANG['wbteampro']['actionlist']['stoptimer'] = 'Stoper - stop';
$_LANG['wbteampro']['actionlist']['starttimer'] = 'Stoper - start';
$_LANG['wbteampro']['actionlist']['viewlog'] = 'Zobacz logi';
$_LANG['wbteampro']['actionlist']['delete'] = 'Skasuj';
$_LANG['wbteampro']['actionlist']['totalcomplete'] = 'Ukończono';
$_LANG['wbteampro']['actionlist']['totalelapsed'] = 'Całkowity czas trwania';
$_LANG['wbteampro']['actionfield']['name'] = 'Nazwa';
$_LANG['wbteampro']['actionfield']['complete'] = 'Ukończono: %';
$_LANG['wbteampro']['actionfield']['type'] = 'Typ';
$_LANG['wbteampro']['actionfield']['datestart'] = 'Data startu';
$_LANG['wbteampro']['actionfield']['status'] = 'Status';
$_LANG['wbteampro']['actionfield']['datefinish'] = 'Data zakończenia';
$_LANG['wbteampro']['actionfield']['client'] = 'Klient';
$_LANG['wbteampro']['actionfield']['managedby'] = 'Zarządzanie przez';
$_LANG['wbteampro']['actionfield']['maincontact'] = 'Kontakt główny';
$_LANG['wbteampro']['actionfield']['assignedto'] = 'Przydzielony do';
$_LANG['wbteampro']['actionfield']['detail'] = 'Szzczegóły';
$_LANG['wbteampro']['actionfield']['created'] = 'Utworzony';
$_LANG['wbteampro']['actionfield']['activity'] = 'Aktywność';
$_LANG['wbteampro']['actionfield']['modified'] = 'Zmodyfikowany';
$_LANG['wbteampro']['actionfield']['parentaction'] = 'Powiązanie zadania';

/************************************** Timelog Fields */
$_LANG['wbteampro']['timeloglist']['totalelapsed'] = 'Całkowity czas trwania';
$_LANG['wbteampro']['timelogfield']['note'] = 'Notatka';
$_LANG['wbteampro']['timelogfield']['datestart'] = 'Data startu';
$_LANG['wbteampro']['timelogfield']['datestop'] = 'Data zakończenia';
$_LANG['wbteampro']['timelogfield']['owner'] = 'Właściciel';
$_LANG['wbteampro']['timelogfield']['elapsed'] = 'Czas, jaki upłynął';

/************************************** Timelog */
$_LANG['wbteampro']['timelog']['emptynote'] = '~';
$_LANG['wbteampro']['timelog']['status']['active'] = 'Aktywny';
$_LANG['wbteampro']['timelog']['status']['complete'] = 'Zakończ';
$_LANG['wbteampro']['timelog']['elapsed']['all'] = 'Cały zalogowany czas';
$_LANG['wbteampro']['timelog']['elapsed']['my'] = 'Mój zalogowany czas';

/************************************** Page/List Navigation */
$_LANG['wbteampro']['filter']['tablabel'] = $_LANG['searchfilter'];
$_LANG['wbteampro']['filter']['any'] = '- Wszystkie -';
$_LANG['wbteampro']['filter']['none'] = $_LANG['none'];
$_LANG['wbteampro']['filter']['search'] = 'Szukaj';
$_LANG['wbteampro']['filter']['owner'] = 'Właściciel';
$_LANG['wbteampro']['filter']['project'] = 'Projekt';
$_LANG['wbteampro']['filter']['status'] = 'Status';
$_LANG['wbteampro']['filter']['client'] = 'Klient';
$_LANG['wbteampro']['filter']['department'] = 'Dział';
$_LANG['wbteampro']['filter']['manager'] = 'Menadżer';
$_LANG['wbteampro']['filter']['assigned'] = 'Przydzielony do';
$_LANG['wbteampro']['filter']['type'] = 'Typ';
$_LANG['wbteampro']['filter']['level'] = 'Poziom';
$_LANG['wbteampro']['filter']['flagged'] = 'Flaga';
$_LANG['wbteampro']['filter']['rangestart'] = 'Rozpoczęty po';
$_LANG['wbteampro']['filter']['rangestop'] = 'Rozpoczęty przed';
$_LANG['wbteampro']['filter']['root'] = 'Poziom administracyjny';
$_LANG['wbteampro']['filter']['reset'] = 'Reset';

/************************************** Page/List Navigation */
$_LANG['wbteampro']['pagenav']['report'] = '%s '.$_LANG['recordsfound'].', '.$_LANG['page'].' %s '.$_LANG['pageof'].' %s';
$_LANG['wbteampro']['pagenav']['prev'] = '&laquo; '.$_LANG['previouspage'];
$_LANG['wbteampro']['pagenav']['next'] = $_LANG['nextpage'].' &raquo;';
$_LANG['wbteampro']['pagenav']['empty'] = $_LANG['norecordsfound'];
$_LANG['wbteampro']['pagenav']['jumpto'] = 'Skocz do strony';
$_LANG['wbteampro']['pagenav']['limit'] = 'Limit';
$_LANG['wbteampro']['pagenav']['go'] = $_LANG['go'];
$_LANG['wbteampro']['pagenav']['export'] = 'Eksport';
$_LANG['wbteampro']['pagenav']['print'] = 'Drukuj';
$_LANG['wbteampro']['pagenav']['orderby'] = 'Sortuj wg %1$s'; // %1$s = Field, %2$s = Direction

/************************************** Form Button Labels */
$_LANG['wbteampro']['formnav']['edit'] = 'Edytuj';
$_LANG['wbteampro']['formnav']['save'] = 'Zapisz';
$_LANG['wbteampro']['formnav']['apply'] = 'Zastosuj';
$_LANG['wbteampro']['formnav']['close'] = 'Wyjdź';
$_LANG['wbteampro']['formnav']['cancel'] = 'Anuluj';
$_LANG['wbteampro']['formnav']['delete'] = 'Skasuj';
$_LANG['wbteampro']['formnav']['download'] = 'Pobierz';
$_LANG['wbteampro']['formnav']['timestart'] = 'Stoper - start';
$_LANG['wbteampro']['formnav']['timestop'] = 'Stoper - stop';

/************************************** Dashboard Blocks */
$_LANG['wbteampro']['dashhead']['viewall'] = 'Zobacz wszystkie';
$_LANG['wbteampro']['dashhead']['topProjects'] = 'Aktualne projekty';
$_LANG['wbteampro']['dashhead']['topActions'] = 'Pilne działania';
$_LANG['wbteampro']['dashhead']['topTimelog'] = 'Ostatnia aktywność timeloga';
$_LANG['wbteampro']['dashhead']['topTickets'] = 'Najnowsze zgłoszenia';
$_LANG['wbteampro']['dashhead']['topTopics'] = 'Najnowsze tematy';
$_LANG['wbteampro']['dashhead']['topFiles'] = 'Najnowsze pliki';

/************************************** List Table Headers */
$_LANG['wbteampro']['listhead']['project_name'] = 'Nazwa projektu';
$_LANG['wbteampro']['listhead']['project_type'] = 'Rodzaj';
$_LANG['wbteampro']['listhead']['project_status'] = 'Status';
$_LANG['wbteampro']['listhead']['project_complete'] = '%';
$_LANG['wbteampro']['listhead']['project_tasks'] = '#';
$_LANG['wbteampro']['listhead']['date_created'] = 'Utworzony';
$_LANG['wbteampro']['listhead']['date_modified'] = 'Zmodyfikowany';
$_LANG['wbteampro']['listhead']['date_activity'] = 'Aktywność';
$_LANG['wbteampro']['listhead']['date_start'] = 'Start';
$_LANG['wbteampro']['listhead']['date_finish'] = 'Do';
$_LANG['wbteampro']['listhead']['client_userid'] = 'Klient';
$_LANG['wbteampro']['listhead']['owner_adminid'] = 'Właściciel';
$_LANG['wbteampro']['listhead']['manager_adminid'] = 'Menadżer';
$_LANG['wbteampro']['listhead']['assigned_adminid'] = 'Przydzielony do';
$_LANG['wbteampro']['listhead']['action_name'] = 'Tytuł zadania';
$_LANG['wbteampro']['listhead']['action_type'] = 'Rodzaj zadania';
$_LANG['wbteampro']['listhead']['action_status'] = 'Status';
$_LANG['wbteampro']['listhead']['action_complete'] = '%';
$_LANG['wbteampro']['listhead']['action_elapsed'] = 'Upłynęło';
$_LANG['wbteampro']['listhead']['annual_activity'] = 'Roczna aktywność';
$_LANG['wbteampro']['listhead']['timelog_note'] = 'Notatki w timelogu';
$_LANG['wbteampro']['listhead']['timelog_elapsed'] = 'Upłynęło';
$_LANG['wbteampro']['listhead']['timelog_start'] = 'Rozpoczęty';
$_LANG['wbteampro']['listhead']['timelog_status'] = 'Status';
$_LANG['wbteampro']['listhead']['topic_name'] = 'Wątki dyskusji';
$_LANG['wbteampro']['listhead']['topic_activity'] = 'Aktywność';
$_LANG['wbteampro']['listhead']['topic_posts'] = 'Posty';
$_LANG['wbteampro']['listhead']['ticket_title'] = 'Tytuł zgłoszenia';
$_LANG['wbteampro']['listhead']['ticket_lastreply'] = 'Aktywność';
$_LANG['wbteampro']['listhead']['ticket_date'] = 'Zgłoszony';
$_LANG['wbteampro']['listhead']['ticket_submitter'] = 'Zgłaszający';
$_LANG['wbteampro']['listhead']['ticket_department'] = 'Dział';
$_LANG['wbteampro']['listhead']['ticket_status'] = 'Status';
$_LANG['wbteampro']['listhead']['ticket_urgency'] = 'Pilność';
$_LANG['wbteampro']['listhead']['file_label'] = 'Pliki';
$_LANG['wbteampro']['listhead']['file_latest'] = 'Najnowszy plik';
$_LANG['wbteampro']['listhead']['file_total'] = 'Plików';

/************************************** Navigation Breadcrumbs */
$_LANG['wbteampro']['breadcrumb']['wbteampro'] = 'Moje projekty';
$_LANG['wbteampro']['breadcrumb']['project_list'] = 'Lista projektów';
$_LANG['wbteampro']['breadcrumb']['action_list'] = 'Lista zadań';
$_LANG['wbteampro']['breadcrumb']['file_list'] = 'Lista plików';
$_LANG['wbteampro']['breadcrumb']['topic_list'] = 'Lista tematów';

/************************************** Dynamic Select List Options */
$_LANG['wbteampro']['listoption']['project_type']['internal'] = 'Wewnętrzny';
$_LANG['wbteampro']['listoption']['project_type']['product'] = 'Produkt';
$_LANG['wbteampro']['listoption']['project_type']['service'] = 'Serwis';
$_LANG['wbteampro']['listoption']['project_status']['service'] = 'Serwis';
$_LANG['wbteampro']['listoption']['project_status']['under_review'] = 'Rozpoznanie';
$_LANG['wbteampro']['listoption']['project_status']['active'] = 'Aktywny';
$_LANG['wbteampro']['listoption']['project_status']['in_production'] = 'W produkcji';
$_LANG['wbteampro']['listoption']['project_status']['in_testing'] = 'Testy końcowe';
$_LANG['wbteampro']['listoption']['project_status']['completed'] = 'Zrobione';
$_LANG['wbteampro']['listoption']['project_status']['closed'] = 'Zamknięte';
$_LANG['wbteampro']['listoption']['action_type']['planning'] = 'Planowanie';
$_LANG['wbteampro']['listoption']['action_type']['research'] = 'Rozpoznanie';
$_LANG['wbteampro']['listoption']['action_type']['contact'] = 'Kontakt';
$_LANG['wbteampro']['listoption']['action_type']['service'] = 'Serwis';
$_LANG['wbteampro']['listoption']['action_type']['development'] = 'Produkcja';
$_LANG['wbteampro']['listoption']['action_type']['review'] = 'Przekazane do sprawdzenia';
$_LANG['wbteampro']['listoption']['action_status']['closed'] = 'Zamknięty';
$_LANG['wbteampro']['listoption']['action_status']['active'] = 'Aktywny';
$_LANG['wbteampro']['listoption']['action_status']['progress'] = 'W trakcie';
$_LANG['wbteampro']['listoption']['action_status']['cancelled'] = 'Anulowany';
$_LANG['wbteampro']['listoption']['action_status']['complete'] = 'Zakończony';

/** END LANGUAGE **/