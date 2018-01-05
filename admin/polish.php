<?php

/**

  Webuddha wbTeamPro
  (c)2010 Webuddha.com, The Holodyn Corporation - All Rights Reserved

  CHANGELOG ************

**/

defined('WHMCS_ADMIN') or die('Invalid Access');

/************************************** Errors */
$_ADMINLANG['wbteampro']['error']['default_label'] = 'Komunikaty błędów';
$_ADMINLANG['wbteampro']['error']['license_error'] = 'wbTeamPro Błąd: nie powiodło się sprawdzenie licencji';
$_ADMINLANG['wbteampro']['error']['license_invalid'] = 'wbTeamPro Błąd: błędny klucz licencyjny';
$_ADMINLANG['wbteampro']['error']['license_expired'] = 'wbTeamPro Błąd: licencja wygasła';
$_ADMINLANG['wbteampro']['error']['license_suspended'] = 'wbTeamPro Błąd: licencja została zawieszona';
$_ADMINLANG['wbteampro']['error']['change_error'] = '<b>Błąd podczas zapisywania zmian!</b><br/>Twoje ustawienia NIE zostały zapisane.';
$_ADMINLANG['wbteampro']['error']['permissiondenied'] = 'Brak dostępu';
$_ADMINLANG['wbteampro']['error']['invalidroleid'] = 'Nie masz dostępu do wbTeamPro - skontaktuj się z administratorem';
$_ADMINLANG['wbteampro']['error']['invalidrequest'] = 'Błędne zapytanie bądź format';
$_ADMINLANG['wbteampro']['error']['project_file_path_invalid'] = '<b>Błędne odwołanie do pliku!</b><br>Podano błędną lokalizację katalogu projektu';
$_ADMINLANG['wbteampro']['error']['project_file_path_locked'] = '<b>Brak możliwości zapisu!</b><br>Podana lokalizacja projektu NIE posiada uprawnień do zapisu.';
$_ADMINLANG['wbteampro']['error']['system_tmp_path_invalid'] = '<b>Nieprawidłowa ścieżka tymczasowa!</b><br>Podana lokalizacja katalogu tymczasowego TEMP jest nieprawidłowa.';
$_ADMINLANG['wbteampro']['error']['system_tmp_path_locked'] = '<b>Brak dostępu do zapisu!</b><br>System nie posiada uprawnień do zapisu w katalogu tymczasowym TEMP';
$_ADMINLANG['wbteampro']['error']['plugin_loaderror'] = '<b>Błąd pluginu!</b><br>Podczas ładowania pluginu wystąpił błąd';
$_ADMINLANG['wbteampro']['error']['plugin_protected'] = '<b>Błąd pluginu!</b><br>Podczas próby modyfikacji chronionego pluginu wystąpił błąd.';
$_ADMINLANG['wbteampro']['error']['keeping_project_type'] = 'Wybrany rodzaj projektu "%s" jest aktualnie w użyciu i nie można go usunąć';
$_ADMINLANG['wbteampro']['error']['keeping_project_status'] = 'Wybrany status projektu "%s" jest aktualnie w użyciu i nie można go usunąć';
$_ADMINLANG['wbteampro']['error']['keeping_action_type'] = 'Wybrany rodzaj zadania "%s" jest aktualnie w użyciu i nie można go usunąć';
$_ADMINLANG['wbteampro']['error']['keeping_action_status'] = 'Wybrany status zadania "%s" jest aktualnie w użyciu i nie można go usunąć';
$_ADMINLANG['wbteampro']['error']['keeping_timelog_type'] = 'Wybrany typ timelogu "%s" jest aktualnie w użyciu i nie można go usunąć';
$_ADMINLANG['wbteampro']['error']['record_notfound'] = 'Nie znaleziono';
$_ADMINLANG['wbteampro']['error']['record_undefined'] = 'Niezdefiniowany';
$_ADMINLANG['wbteampro']['error']['record_updatefailed'] = 'Błąd podczas próby aktualizacji';
$_ADMINLANG['wbteampro']['error']['record_incomplete'] = 'Nie wprowadzono wymaganych danych';
$_ADMINLANG['wbteampro']['error']['record_invalidvalue'] = 'Błędne bądź niedozwolone wartości dla %s.';
$_ADMINLANG['wbteampro']['error']['update_check_failed'] = 'Nie udało się uzyskać statusu dostępności aktualizacji.';
$_ADMINLANG['wbteampro']['error']['update_failed'] = '<b>Niepowodzenie aktualizacji</b><br>Podczas próby uaktualnienia wystąpił błąd.<br>Szczegółowy opis problemu znajduje się w logach - przed ponowną próbą należy usunąć przyczynę błędu.';
$_ADMINLANG['wbteampro']['error']['view_layout_not_found'] = 'wbTeamPro Błąd: Nie znaleziono układu/wyglądu (%s)';

/************************************** Alerts */
$_ADMINLANG['wbteampro']['alert']['default_label'] = 'Ostrzeżenia';
$_ADMINLANG['wbteampro']['alert']['project_created'] = '<b>Projekt został utworzony</b><br>Twój nowy projekt został utworzony. Teraz możesz stworzyć listę zadań projektowych';
$_ADMINLANG['wbteampro']['alert']['batch_success'] = '<b>Aktualizacja powiodła się</b><br>Uaktualniono wybrane rekordy!';
$_ADMINLANG['wbteampro']['alert']['change_success'] = '<b>Zmiany zapisane</b><br>Wybrane zmiany zostały wprowadzone!';
$_ADMINLANG['wbteampro']['alert']['delete_success'] = '<b>Usunięto rekordy</b><br>Rekord został usunięty.';
$_ADMINLANG['wbteampro']['alert']['close_success'] = '<b>Rekord zamknięty</b><br>Poprzedni rekord został zamknięty.';
$_ADMINLANG['wbteampro']['alert']['copy_success'] = '<b>Skopiowano</b><br>Wybrany projekt został skopiowany';
$_ADMINLANG['wbteampro']['alert']['update_success'] = '<b>Uaktualniono</b><br>Poprawnie zainstalowano aktualizację!';

/************************************** Notices */
$_ADMINLANG['wbteampro']['notice']['default_label'] = 'Powiadomienie';
$_ADMINLANG['wbteampro']['notice']['superadmin'] = 'Super Admin';
$_ADMINLANG['wbteampro']['notice']['editing_templateproject'] = '<b>Powiadomienie o szablonie</b><br>Edytujesz szablon projektu.';
$_ADMINLANG['wbteampro']['notice']['editing_archiveproject'] = '<b>Powiadomienie o archiwum</b><br>Właśnie przeglądasz<u>archiwum</u> projektów i nie możesz dokonać w nich żadnych zmian.';
$_ADMINLANG['wbteampro']['notice']['server_timezone_na'] = '<b>Brak ustawionej strefy czasowej!</b><br>Twój serwer nie posiada ustawionej strefy czasowej - czas może być błędnie wyświetlany';
$_ADMINLANG['wbteampro']['notice']['action_cancelled'] = '<b>Zadanie anulowane</b><br>Anulowałeś poprzednie zadanie';
$_ADMINLANG['wbteampro']['notice']['plugin_installed'] = '<b>Informacja o pluginach</b><br>Znalezionych pluginów: %1$s, zainstalowanych: %2$s, problem jest z: %3$s.';
$_ADMINLANG['wbteampro']['notice']['file_closed'] = '<b>Zamknięty wątek plików</b><br>Aby wprowadzać zmiany, należy otworzyć ten wątek.';
$_ADMINLANG['wbteampro']['notice']['topic_closed'] = '<b>Zamknięta dyskusja</b><br>Aby wprowadzać zmiany, należy otworzyć tę dyskusję.';
$_ADMINLANG['wbteampro']['notice']['update_started'] = 'Rozpoczęto aktualizację. Proszę NIE odswieżać strony do czasu zakończenia procesu aktualizacji.';
$_ADMINLANG['wbteampro']['notice']['update_backup_first'] = 'Przed rozpoczęciem aktualizacji wykonaj kopię plików swojego systemu WHMCS oraz bazy danych MySQL.';
$_ADMINLANG['wbteampro']['notice']['deprecated'] = '<b>Porzucona funkcjonalność</b><br>W przyszłych wersjach naszego systemu tej funkcjonalności nie będzie.';
$_ADMINLANG['wbteampro']['notice']['plugin_protected'] = '<b>Ostrzeżenie dotyczące ochrony!</b><br>Ten plugin jest chroniony i nie może być wyłączony.';

/************************************** Graph */
$_ADMINLANG['wbteampro']['graph']['label_projectsummary'] = 'Porównanie aktywności w projektach';
$_ADMINLANG['wbteampro']['graph']['label_timelogtwoyearsummary'] = 'Podsumowanie wszystkich zalogowanych godzin';

/************************************** Menu */
$_ADMINLANG['wbteampro']['menu']['projectmanager'] = 'Menadżer projektu';
$_ADMINLANG['wbteampro']['menu']['tablabel'] = 'Projekt';
$_ADMINLANG['wbteampro']['menu']['viewall'] = 'Zobacz wszystkie';
$_ADMINLANG['wbteampro']['menu']['dashboard'] = 'Pulpit';
$_ADMINLANG['wbteampro']['menu']['projects'] = 'Projekty';
$_ADMINLANG['wbteampro']['menu']['assignedprojects'] = 'Przydzielone projekty';
$_ADMINLANG['wbteampro']['menu']['myprojects'] = 'Moje projekty';
$_ADMINLANG['wbteampro']['menu']['newproject'] = 'Nowy projekt';
$_ADMINLANG['wbteampro']['menu']['actions'] = 'Zadania';
$_ADMINLANG['wbteampro']['menu']['incompletetasks'] = 'Zadania niezakończone';
$_ADMINLANG['wbteampro']['menu']['assignedtasks'] = 'Zadania przydzielone';
$_ADMINLANG['wbteampro']['menu']['myactions'] = 'Moje zadania';
$_ADMINLANG['wbteampro']['menu']['files'] = 'Pliki';
$_ADMINLANG['wbteampro']['menu']['myfiles'] = 'Moje pliki';
$_ADMINLANG['wbteampro']['menu']['discussions'] = 'Dyskusje';
$_ADMINLANG['wbteampro']['menu']['mydiscussions'] = 'Moje dyskusje';
$_ADMINLANG['wbteampro']['menu']['tickets'] = 'Zgłoszenia';
$_ADMINLANG['wbteampro']['menu']['mytickets'] = 'Moje zgłoszenia';
$_ADMINLANG['wbteampro']['menu']['timelog'] = 'Time Log';
$_ADMINLANG['wbteampro']['menu']['mytimelog'] = 'Moje Time Logi';
$_ADMINLANG['wbteampro']['menu']['setupmanager'] = 'Menadżer systemu';
$_ADMINLANG['wbteampro']['menu']['archivedprojects'] = 'Projekty zarchiwizowane';
$_ADMINLANG['wbteampro']['menu']['templateprojects'] = 'Szablony projektów';
$_ADMINLANG['wbteampro']['menu']['system'] = 'System';
$_ADMINLANG['wbteampro']['menu']['setup_config'] = 'Konfiguracja';
$_ADMINLANG['wbteampro']['menu']['setup_update'] = 'Sprawdź aktualizacje';
$_ADMINLANG['wbteampro']['menu']['setup_update_avail'] = 'Aktualizacja gotowa';
$_ADMINLANG['wbteampro']['menu']['setup_plugins'] = 'Zarządzanie pluginami';
$_ADMINLANG['wbteampro']['menu']['support'] = 'Pomoc i Wsparcie';

/************************************** JS */
$_ADMINLANG['wbteampro']['js']['tabProject'] = 'Projekt';
$_ADMINLANG['wbteampro']['js']['tabProjects'] = 'Projekty';
$_ADMINLANG['wbteampro']['js']['tabTickets'] = 'Zgłoszenia';
$_ADMINLANG['wbteampro']['js']['loadMsg'] = 'Trwa ładowanie...';
$_ADMINLANG['wbteampro']['js']['titleActiveLogs'] = 'Twoje aktywne Timelogi';
$_ADMINLANG['wbteampro']['js']['noActiveLogs'] = 'Brak aktywnych Timelogów';
$_ADMINLANG['wbteampro']['js']['reqComplete'] = 'Zapytanie ukończone';
$_ADMINLANG['wbteampro']['js']['uiTimelogStart'] = 'Start';
$_ADMINLANG['wbteampro']['js']['uiTimelogSave'] = 'Zapisz';
$_ADMINLANG['wbteampro']['js']['uiTimelogCancel'] = 'Anuluj';
$_ADMINLANG['wbteampro']['js']['uiTicketCreate'] = 'Utwórz';
$_ADMINLANG['wbteampro']['js']['uiTicketCreateOpen'] = 'Utwórz i wejdź';
$_ADMINLANG['wbteampro']['js']['uiTicketCancel'] = 'Anuluj';
$_ADMINLANG['wbteampro']['js']['btnStartTimer'] = 'Stoper - Start';
$_ADMINLANG['wbteampro']['js']['btnStopTimer'] = 'Stoper - Stop';
$_ADMINLANG['wbteampro']['js']['btnViewAll'] = 'Zobacz wszystko';
$_ADMINLANG['wbteampro']['js']['btnCreate'] = 'Utwórz';
$_ADMINLANG['wbteampro']['js']['msgTimelogSaved'] = 'Timelog zapisany - [time]';
$_ADMINLANG['wbteampro']['js']['msgTimelogStopped'] = 'Timelog zatrzymany po upływie [time]';
$_ADMINLANG['wbteampro']['js']['deleteConfirm'] = 'Wybierz OK aby potwierdzić';
$_ADMINLANG['wbteampro']['js']['deletePrompt'] = 'Wpisz SKASUJ aby potwierdzić';
$_ADMINLANG['wbteampro']['js']['deleteAnswer'] = 'SKASUJ';
$_ADMINLANG['wbteampro']['js']['deleteCancelled'] = 'Usuń anulowane';
$_ADMINLANG['wbteampro']['js']['textLimitRemain'] = 'Pozostało [remain] z [limit] możliwych znaków';
$_ADMINLANG['wbteampro']['js']['textLimitReached'] = 'Osiągnięto limit [limit] możliwych znaków';
$_ADMINLANG['wbteampro']['js']['copyPrompt'] = 'Wpisz KOPIUJ aby potwierdzić';
$_ADMINLANG['wbteampro']['js']['copyAnswer'] = 'KOPIUJ';
$_ADMINLANG['wbteampro']['js']['copyCancelled'] = 'Anuluj kopiowanie';
$_ADMINLANG['wbteampro']['js']['ajaxSearchInput'] = 'wpisz, aby wyszukać...';
$_ADMINLANG['wbteampro']['js']['rruleOccurDaily'] = 'dni';
$_ADMINLANG['wbteampro']['js']['rruleOccurWeekly'] = 'tygodni(e)';
$_ADMINLANG['wbteampro']['js']['rruleOccurMonthly'] = 'miesiące(y)';
$_ADMINLANG['wbteampro']['js']['rruleOccurYearly'] = 'lat(a)';
$_ADMINLANG['wbteampro']['js']['rowSelectEmpty'] = 'Wybierz wiersz, aby zarządzać';
$_ADMINLANG['wbteampro']['js']['rowSelectConfirm'] = 'Wybierz OK aby potwierdzić';
$_ADMINLANG['wbteampro']['js']['uiInvoiceCreate'] = 'Utwórz / zmień fakturę (proforma)';
$_ADMINLANG['wbteampro']['js']['uiInvoiceCancel'] = 'Anuluj';
$_ADMINLANG['wbteampro']['js']['uiInvoiceNoItems'] = 'Brak pozycji na fakturze';
$_ADMINLANG['wbteampro']['js']['uiInvoiceSuccess'] = 'Faktura na Timelog została utworzona';
$_ADMINLANG['wbteampro']['js']['uiModifyAccept'] = 'Zastosuj zmiany';
$_ADMINLANG['wbteampro']['js']['uiModifyCancel'] = 'Anuluj';

/************************************** Page Headers */
$_ADMINLANG['wbteampro']['taskheader']['prefix'] = 'wbTeamPro: ';
$_ADMINLANG['wbteampro']['taskheader']['project_edit_archive'] = ' [ARCHIVE]';
$_ADMINLANG['wbteampro']['taskheader']['project_edit_template'] = ' [TEMPLATE]';
$_ADMINLANG['wbteampro']['taskheader']['project_edit_new'] = 'Nowy projekt';
$_ADMINLANG['wbteampro']['taskheader']['project_action_list'] = 'Zadania';
$_ADMINLANG['wbteampro']['taskheader']['project_ticket_list'] = 'Zgłoszenia';
$_ADMINLANG['wbteampro']['taskheader']['project_file_list'] = 'Pliki';
$_ADMINLANG['wbteampro']['taskheader']['project_topic_list'] = 'Dyskusje';
$_ADMINLANG['wbteampro']['taskheader']['project_list'] = 'Wszystkie projekty';
$_ADMINLANG['wbteampro']['taskheader']['action_list'] = 'Wszystkie zadania';
$_ADMINLANG['wbteampro']['taskheader']['file_list'] = 'Wszystkie pliki';
$_ADMINLANG['wbteampro']['taskheader']['topic_list'] = 'Wszystkie tematy';
$_ADMINLANG['wbteampro']['taskheader']['ticket_list'] = 'Wszystkie zgłoszenia';
$_ADMINLANG['wbteampro']['taskheader']['timelog_list'] = 'Wszystkie Timelogi';
$_ADMINLANG['wbteampro']['taskheader']['template_list'] = 'Wszystkie Szablony';
$_ADMINLANG['wbteampro']['taskheader']['archive_list'] = 'Pełne archiwum';

/************************************** Client Profile Tabs */
$_ADMINLANG['wbteampro']['profiletab']['projects'] = 'Projekty';
$_ADMINLANG['wbteampro']['profiletab']['actions'] = 'Zadania';
$_ADMINLANG['wbteampro']['profiletab']['files'] = 'Pliki';
$_ADMINLANG['wbteampro']['profiletab']['topics'] = 'Dyskusje';
$_ADMINLANG['wbteampro']['profiletab']['timelog'] = 'Time Log';
$_ADMINLANG['wbteampro']['profiletab']['tickets'] = 'Zgłoszenia';

/************************************** Project Tabs */
$_ADMINLANG['wbteampro']['projecttab']['details'] = 'Szczegóły';
$_ADMINLANG['wbteampro']['projecttab']['actions'] = 'Zadania';
$_ADMINLANG['wbteampro']['projecttab']['tickets'] = 'Zgłoszenia';
$_ADMINLANG['wbteampro']['projecttab']['files'] = 'Pliki';
$_ADMINLANG['wbteampro']['projecttab']['filesview'] = 'Podgląd pliku';
$_ADMINLANG['wbteampro']['projecttab']['topics'] = 'Dyskusje';
$_ADMINLANG['wbteampro']['projecttab']['topicsview'] = 'Podgląd dyskusji';
$_ADMINLANG['wbteampro']['projecttab']['timelog'] = 'Time Log';

/************************************** Admin Visibility */
$_ADMINLANG['wbteampro']['adminvisible']['all'] = 'Wszystkie';
$_ADMINLANG['wbteampro']['adminvisible']['manager'] = 'Tylko menadżer';
$_ADMINLANG['wbteampro']['adminvisible']['related'] = 'Menadżer i Przypisany';

/************************************** Client Visibility */
$_ADMINLANG['wbteampro']['clientvisible']['hidden'] = 'Ukryty';
$_ADMINLANG['wbteampro']['clientvisible']['visible'] = 'Widoczny';
$_ADMINLANG['wbteampro']['clientvisible']['view'] = 'Zobacz';
$_ADMINLANG['wbteampro']['clientvisible']['modify'] = 'Modyfikuj';
$_ADMINLANG['wbteampro']['clientvisible']['inherit'] = 'Odziedzicz ustawienia';

/************************************** Project Functions */
$_ADMINLANG['wbteampro']['projectfunction']['default'] = 'Domyślne';
$_ADMINLANG['wbteampro']['projectfunction']['template'] = 'Szablon';
$_ADMINLANG['wbteampro']['projectfunction']['archive'] = 'Archiwum';

/************************************** Project Fields */
$_ADMINLANG['wbteampro']['projectsave']['newActionLabel'] = 'Zdefiniuj etap';
$_ADMINLANG['wbteampro']['projectlist']['newproject'] = 'Nowy projekt';
$_ADMINLANG['wbteampro']['projectlist']['newtemplate'] = 'Nowy Szablon';
$_ADMINLANG['wbteampro']['projectfield']['name'] = 'Nazwa projektu';
$_ADMINLANG['wbteampro']['projectfield']['client'] = 'Klient';
$_ADMINLANG['wbteampro']['projectfield']['type'] = 'Rodzaj projektu';
$_ADMINLANG['wbteampro']['projectfield']['contact'] = 'Kontakt klienta';
$_ADMINLANG['wbteampro']['projectfield']['product'] = 'Powiązany produkt';
$_ADMINLANG['wbteampro']['projectfield']['status'] = 'Status';
$_ADMINLANG['wbteampro']['projectfield']['managedby'] = 'Zarządzany przez';
$_ADMINLANG['wbteampro']['projectfield']['visiblestatus'] = 'Dostęp administracyjny';
$_ADMINLANG['wbteampro']['projectfield']['assignedto'] = 'Przydzielony do';
$_ADMINLANG['wbteampro']['projectfield']['datestart'] = 'Date rozpoczęcia';
$_ADMINLANG['wbteampro']['projectfield']['datefinish'] = 'Data zakończenia';
$_ADMINLANG['wbteampro']['projectfield']['details'] = 'Notatki / szczegóły';
$_ADMINLANG['wbteampro']['projectfield']['created'] = 'Utworzony';
$_ADMINLANG['wbteampro']['projectfield']['activity'] = 'Aktywność';
$_ADMINLANG['wbteampro']['projectfield']['modified'] = 'Zmodyfikowany';
$_ADMINLANG['wbteampro']['projectfield']['completed'] = 'Zakończonych';
$_ADMINLANG['wbteampro']['projectfield']['sfcompleted'] = '%1$s z %2$s Zadań, %3$s Etapów, %4$s Grup, %5$s Zadań, Czas, który upłynął: %6$s';
$_ADMINLANG['wbteampro']['projectfield']['namecopysprint'] = '*KOPIUJ* %s';
$_ADMINLANG['wbteampro']['projectfield']['notes'] = 'Notatki prywatne';
$_ADMINLANG['wbteampro']['projectfield']['clientvisible'] = 'Dostęp dla klienta';
$_ADMINLANG['wbteampro']['projectfield']['function'] = 'Funkcje';
$_ADMINLANG['wbteampro']['projectfield']['billable'] = 'Rozliczanie czasu';

/************************************** Copy Fields */
$_ADMINLANG['wbteampro']['copyform']['option_setup'] = 'Opcje kopiowania projektu';
$_ADMINLANG['wbteampro']['copyform']['project_setup'] = 'Ustawienia nowego projektu';
$_ADMINLANG['wbteampro']['copyfield']['newname'] = 'Nazwa nowego projektu';
$_ADMINLANG['wbteampro']['copyfield']['copy_template'] = 'Zapisz jako szablon';
$_ADMINLANG['wbteampro']['copyfield']['copy_actions'] = 'Kopiuj zadania';
$_ADMINLANG['wbteampro']['copyfield']['copy_files'] = 'Kopij wątki plików';
$_ADMINLANG['wbteampro']['copyfield']['copy_topics'] = 'Kopiuj dyskusję';
$_ADMINLANG['wbteampro']['copyfield']['copy_tickets'] = 'Kopiuj powiązane zgłoszenia';
$_ADMINLANG['wbteampro']['copyfield']['copy_timelogs'] = 'Kopiuj Time Logi';

/************************************** File Fields */
$_ADMINLANG['wbteampro']['filelist']['newthread'] = 'Nowa grupa plików';
$_ADMINLANG['wbteampro']['filelist']['appendthread'] = 'Dołącz wątek';
$_ADMINLANG['wbteampro']['filelist']['deletethread'] = 'Usuń wątek';
$_ADMINLANG['wbteampro']['filelist']['clientaccess'] = 'Dostęp dla klienta';
$_ADMINLANG['wbteampro']['filelist']['toggleaccess'] = 'Przełącz dostęp';
$_ADMINLANG['wbteampro']['filelist']['by'] = 'przez';
$_ADMINLANG['wbteampro']['filelist']['on'] = 'on';
$_ADMINLANG['wbteampro']['filefield']['label'] = 'Etykieta/nazwa';
$_ADMINLANG['wbteampro']['filefield']['version'] = 'Wersja';
$_ADMINLANG['wbteampro']['filefield']['file'] = 'Plik';
$_ADMINLANG['wbteampro']['filefield']['mime'] = 'Rodzaj';
$_ADMINLANG['wbteampro']['filefield']['size'] = 'Rozmiar';
$_ADMINLANG['wbteampro']['filefield']['detail'] = 'Szczegóły';
$_ADMINLANG['wbteampro']['filefield']['upload'] = 'Wgraj';
$_ADMINLANG['wbteampro']['filefield']['import'] = 'Importuj';
$_ADMINLANG['wbteampro']['filelist']['status'] = 'Status';
$_ADMINLANG['wbteampro']['filelist']['status_open'] = 'Otwarty';
$_ADMINLANG['wbteampro']['filelist']['status_closed'] = 'Zamknięty';
$_ADMINLANG['wbteampro']['filelist']['expanddetail'] = 'Rozwiń / zwiń';
$_ADMINLANG['wbteampro']['filelist']['count'] = 'Plików: %s';

/************************************** Ticket Fields */
$_ADMINLANG['wbteampro']['ticketlist']['ticket_nonefound'] = 'Brak zgłoszeń';
$_ADMINLANG['wbteampro']['ticketlist']['linkticket'] = 'Powiąż';
$_ADMINLANG['wbteampro']['ticketlist']['newticket'] = 'Nowe';
$_ADMINLANG['wbteampro']['ticketfield']['project'] = 'Projekt';
$_ADMINLANG['wbteampro']['ticketfield']['action'] = 'Zadania';

/************************************** Topic Fields */
$_ADMINLANG['wbteampro']['topiclist']['newthread'] = 'Nowy wątek';
$_ADMINLANG['wbteampro']['topiclist']['appendthread'] = 'Dołącz wątek';
$_ADMINLANG['wbteampro']['topiclist']['deletethread'] = 'Usuń wątek';
$_ADMINLANG['wbteampro']['topiclist']['clientaccess'] = 'Dostęp dla klienta';
$_ADMINLANG['wbteampro']['topiclist']['toggleaccess'] = 'Przełącz dostęp';
$_ADMINLANG['wbteampro']['topiclist']['by'] = 'przez';
$_ADMINLANG['wbteampro']['topiclist']['on'] = 'na';
$_ADMINLANG['wbteampro']['topicfield']['title'] = 'Tytuł';
$_ADMINLANG['wbteampro']['topicfield']['detail'] = 'Szczegóły';
$_ADMINLANG['wbteampro']['topiclist']['status'] = 'Status';
$_ADMINLANG['wbteampro']['topiclist']['status_open'] = 'Otwarta';
$_ADMINLANG['wbteampro']['topiclist']['status_closed'] = 'Zamknięta';
$_ADMINLANG['wbteampro']['topiclist']['expanddetail'] = 'Rozwiń / Zwiń';
$_ADMINLANG['wbteampro']['topiclist']['count'] = 'Wpisów: %s';
$_ADMINLANG['wbteampro']['topiclist']['created'] = 'Zacznij od %s';

/************************************** Action Fields */
$_ADMINLANG['wbteampro']['actionlist']['dispmode'] = 'Format wyświetlania:';
$_ADMINLANG['wbteampro']['actionlist']['listview'] = 'Lista';
$_ADMINLANG['wbteampro']['actionlist']['treeview'] = 'Drzewko';
$_ADMINLANG['wbteampro']['actionlist']['ganttview'] = 'Wykres Gantta';
$_ADMINLANG['wbteampro']['actionlist']['listexpand'] = 'Rozwiń / zwiń wszystkie zadania';
$_ADMINLANG['wbteampro']['actionlist']['listmaskcompleted'] = 'Pokaż / ukryj zadania zakończone';
$_ADMINLANG['wbteampro']['actionlist']['newaction'] = 'Nowe zadanie';
$_ADMINLANG['wbteampro']['actionlist']['addchild'] = 'Dodaj pod-zadanie';
$_ADMINLANG['wbteampro']['actionlist']['stoptimer'] = 'Stoper - stop';
$_ADMINLANG['wbteampro']['actionlist']['starttimer'] = 'Stoper - start';
$_ADMINLANG['wbteampro']['actionlist']['viewlog'] = 'Zobacz Log';
$_ADMINLANG['wbteampro']['actionlist']['delete'] = 'Usuń';
$_ADMINLANG['wbteampro']['actionlist']['totalcomplete'] = 'Projekt ukończony';
$_ADMINLANG['wbteampro']['actionlist']['totalduration'] = 'Całkowity czas trwania';
$_ADMINLANG['wbteampro']['actionlist']['totalelapsed'] = 'Upłynęło łącznie';
$_ADMINLANG['wbteampro']['actionlist']['client_access'] = 'Przełącz dostęp dla klienta';
$_ADMINLANG['wbteampro']['actionfield']['name'] = 'Nazwa';
$_ADMINLANG['wbteampro']['actionfield']['complete'] = 'Ukończonych %';
$_ADMINLANG['wbteampro']['actionfield']['type'] = 'Rodzaj';
$_ADMINLANG['wbteampro']['actionfield']['datestart'] = 'Data startu';
$_ADMINLANG['wbteampro']['actionfield']['status'] = 'Status';
$_ADMINLANG['wbteampro']['actionfield']['datefinish'] = 'Data zakończenia';
$_ADMINLANG['wbteampro']['actionfield']['client'] = 'Klient';
$_ADMINLANG['wbteampro']['actionfield']['managedby'] = 'Zarządzanie przez';
$_ADMINLANG['wbteampro']['actionfield']['maincontact'] = 'Kontakt główny';
$_ADMINLANG['wbteampro']['actionfield']['assignedto'] = 'Przydzielony do';
$_ADMINLANG['wbteampro']['actionfield']['detail'] = 'Notatki / szczegóły';
$_ADMINLANG['wbteampro']['actionfield']['created'] = 'Utworzone';
$_ADMINLANG['wbteampro']['actionfield']['activity'] = 'Aktywność';
$_ADMINLANG['wbteampro']['actionfield']['modified'] = 'Modyfikowane';
$_ADMINLANG['wbteampro']['actionfield']['parentaction'] = 'Powiązanie zadania';
$_ADMINLANG['wbteampro']['actionfield']['clientvisible'] = 'Dostęp klienta';
$_ADMINLANG['wbteampro']['actionfield']['notes'] = 'Prywatne notatki';
$_ADMINLANG['wbteampro']['actionfield']['priority'] = 'Priorytet';
$_ADMINLANG['wbteampro']['actionfield']['billable'] = 'Rozliczanie czasu';
$_ADMINLANG['wbteampro']['actionfield']['duration'] = 'Czas trwania';
$_ADMINLANG['wbteampro']['actionfield']['recurrence'] = 'Cykliczność';
$_ADMINLANG['wbteampro']['actionfield']['summary']['datestart'] = 'Start - cykliczne';
$_ADMINLANG['wbteampro']['actionfield']['summary']['datefinish'] = 'Koniec - cykliczne';
$_ADMINLANG['wbteampro']['actionfield']['occurrence']['datestart'] = 'Start zdarzenia';
$_ADMINLANG['wbteampro']['actionfield']['occurrence']['datefinish'] = 'Koniec zdarzenia';

/************************************** Action Report Labels */
$_ADMINLANG['wbteampro']['actionreport']['schd_on'] = 'W harmonogramie';
$_ADMINLANG['wbteampro']['actionreport']['schd_ahead'] = 'Przed terminem';
$_ADMINLANG['wbteampro']['actionreport']['schd_behind'] = 'Opóźnione';

/************************************** Recurrence Fields */
$_ADMINLANG['wbteampro']['recurrence']['report']['instance'] = 'Występowanie %s z %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['fromdate'] = 'Rozpocznij od %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['daily']['count'] = 'Powtarzaj co %s dni przez %s dni';
$_ADMINLANG['wbteampro']['recurrence']['report']['daily']['until'] = 'Powtarzaj co %s dni aż do %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['weekly']['count'] = 'Powtarzaj co %s tygodni(e) od %s przez %s tygodni(e)';
$_ADMINLANG['wbteampro']['recurrence']['report']['weekly']['until'] = 'Powtarzaj co %s tygodni(e) od %s aż do %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['monthly']['bymonthday']['count'] = 'Powtarzaj %s dnia każdego %s miesiąca przez %s miesięcy';
$_ADMINLANG['wbteampro']['recurrence']['report']['monthly']['bymonthday']['until'] = 'Powtarzaj %s dnia każdego %s miesiąca aż do %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['monthly']['bysetpos']['count'] = 'Powtarzaj %s %s każdego %s miesiąca przez %s miesięcy';
$_ADMINLANG['wbteampro']['recurrence']['report']['monthly']['bysetpos']['until'] = 'Powtarzaj %s %s każdego %s miesiąca przez %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['yearly']['bymonthday']['count'] = 'Powtarzaj %s dnia z %s każdego %s roku przez %s lat(a)';
$_ADMINLANG['wbteampro']['recurrence']['report']['yearly']['bymonthday']['until'] = 'Powtarzaj %s dnia z %s każdego %s roku aż do %s';
$_ADMINLANG['wbteampro']['recurrence']['report']['yearly']['bysetpos']['count'] = 'Powtarzaj %s %s z %s każdego %s roku przez %s lat';
$_ADMINLANG['wbteampro']['recurrence']['report']['yearly']['bysetpos']['until'] = 'Powtarzaj %s %s z %s każdego %s roku aż do %s';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['legend'] = 'Częstotliwość powtarzania';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['daily']['everyxdays'] = '%sPowtórz co%s %s dni)';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['weekly']['everyxweeks'] = '%sPowtórz co%s %s tygodni(e)';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['monthly']['nthofxmonths'] = '%sDnia%s %s każdego %s miesiąca';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['monthly']['nthdayofxmonths'] = '%s%s %s %s każdego %s miesiąca';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['yearly']['nthofxyears'] = '%sW%s %s %s każdego %s roku';
$_ADMINLANG['wbteampro']['recurrence']['rule_patterns']['yearly']['nthdayofxyears'] = '%sW%s %s %s miesiąca: %s co %s lat';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['legend'] = 'Czas trwania powtarzania';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['until'] = '%sPowtarzaj do%s %s';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['count'] = '%sPowtarzaj co%s %s %swystąpień%s';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['occur']['daily'] = 'dni';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['occur']['weekly'] = 'tygodni';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['occur']['monthly'] = 'miesięcy)';
$_ADMINLANG['wbteampro']['recurrence']['rule_duration']['occur']['yearly'] = 'lat';

/************************************** Timelog Fields */
$_ADMINLANG['wbteampro']['timeloglist']['total'] = 'Łącznie';
$_ADMINLANG['wbteampro']['timeloglist']['totalelapsed'] = 'Upłynęło łącznie';
$_ADMINLANG['wbteampro']['timeloglist']['by'] = 'przez';
$_ADMINLANG['wbteampro']['timelogfield']['note'] = 'Uwaga';
$_ADMINLANG['wbteampro']['timelogfield']['type'] = 'Rodzaj';
$_ADMINLANG['wbteampro']['timelogfield']['datestart'] = 'Data startu';
$_ADMINLANG['wbteampro']['timelogfield']['datestop'] = 'Data zakończenia';
$_ADMINLANG['wbteampro']['timelogfield']['duration'] = 'Czas trwania';
$_ADMINLANG['wbteampro']['timelogfield']['owner'] = 'Właściciel';
$_ADMINLANG['wbteampro']['timelogfield']['elapsed'] = 'Czas, jaki upłynął';
$_ADMINLANG['wbteampro']['timelogfield']['billable'] = 'Rozliczany czas';
$_ADMINLANG['wbteampro']['timelogfield']['invoice'] = 'Faktura nr #';

/************************************** Timelog */
$_ADMINLANG['wbteampro']['timelog']['emptynote'] = '~';
$_ADMINLANG['wbteampro']['timelog']['status']['active'] = 'Aktywny';
$_ADMINLANG['wbteampro']['timelog']['status']['complete'] = 'Zakończony';
$_ADMINLANG['wbteampro']['timelog']['elapsed']['all'] = 'Cały zalogowany czas';
$_ADMINLANG['wbteampro']['timelog']['elapsed']['my'] = 'Mój zalogowany czas';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['client'] = 'Klient';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['project'] = 'Projekt';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['action'] = 'Zadanie';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['milestone'] = 'Etap';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['group'] = 'Grupa';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['task'] = 'Zadanie';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['ticket'] = 'Zgłoszenie';
$_ADMINLANG['wbteampro']['timelog']['parent_type']['timelog'] = 'Timelog';

/************************************** Timelog Modal */
$_ADMINLANG['wbteampro']['timelog']['modal']['title'] = 'Rpozcznij nowy Timelog';
$_ADMINLANG['wbteampro']['timelog']['modal']['event'] = 'Uzupełnij opis zdarzenia';
$_ADMINLANG['wbteampro']['timelog']['modal']['type'] = 'Rodzaj zdarzenia';
$_ADMINLANG['wbteampro']['timelog']['modal']['manual'] = 'Określ czas trwania i zapisz jako ukończony';
$_ADMINLANG['wbteampro']['timelog']['modal']['start'] = 'Start';
$_ADMINLANG['wbteampro']['timelog']['modal']['duration'] = 'Czas trwania';
$_ADMINLANG['wbteampro']['timelog']['modal']['durexample'] = 'np: 2 godziny, 5 minut, 10 sekund';
$_ADMINLANG['wbteampro']['timelog']['modal']['owner'] = 'Właściciel';
$_ADMINLANG['wbteampro']['timelog']['modal']['billable'] = 'Czy to będzie płatny czas?';

/************************************** Invoice Modal */
$_ADMINLANG['wbteampro']['invoice']['modal']['title'] = 'Utwórz fakturę';
$_ADMINLANG['wbteampro']['invoice']['modal']['invoicecount'] = 'Numer faktury #{invoice_count}';
$_ADMINLANG['wbteampro']['invoice']['modal']['date'] = 'Data wystawienia';
$_ADMINLANG['wbteampro']['invoice']['modal']['duedate'] = 'Termin płatności';
$_ADMINLANG['wbteampro']['invoice']['modal']['taxrate'] = 'Stawka VAT';
$_ADMINLANG['wbteampro']['invoice']['modal']['applytax'] = 'Dodaj VAT';
$_ADMINLANG['wbteampro']['invoice']['modal']['paymentmethod'] = 'Forma płatności';
$_ADMINLANG['wbteampro']['invoice']['modal']['sendinvoice'] = 'Wyślij fakturę';
$_ADMINLANG['wbteampro']['invoice']['modal']['autoapplycredit'] = 'Uwzględnij depozyt';
$_ADMINLANG['wbteampro']['invoice']['modal']['rate'] = 'Stawka';
$_ADMINLANG['wbteampro']['invoice']['modal']['note'] = 'Notatki';
$_ADMINLANG['wbteampro']['invoice']['modal']['invoiceid'] = 'Dodaj do ID faktury';
$_ADMINLANG['wbteampro']['invoice']['modal']['total_count'] = '# Elementy zamówienia';
$_ADMINLANG['wbteampro']['invoice']['modal']['total_hours'] = 'Łącznie godzin';
$_ADMINLANG['wbteampro']['invoice']['modal']['sub_total'] = 'netto';
$_ADMINLANG['wbteampro']['invoice']['modal']['total_tax'] = 'Łącznie VAT';
$_ADMINLANG['wbteampro']['invoice']['modal']['total'] = 'Kwota łączna';
$_ADMINLANG['wbteampro']['invoice']['modal']['line_total'] = 'Łącznie';
$_ADMINLANG['wbteampro']['invoice']['modal']['checkall'] = 'Sprawdź wszystko';
$_ADMINLANG['wbteampro']['invoice']['modal']['applyall'] = 'Zastosuj do wszystkich';
$_ADMINLANG['wbteampro']['invoice']['modal']['expandall'] = 'Rozwiń / zwiń wszystko';
$_ADMINLANG['wbteampro']['invoice']['modal']['apply'] = 'Zastosuj';
$_ADMINLANG['wbteampro']['invoice']['modal']['customize'] = 'Dostosuj faktury i pozycje';

/************************************** Modify Actions Modal */
$_ADMINLANG['wbteampro']['modifyactions']['modal']['title'] = 'Modyfikacja wielu zadań';
$_ADMINLANG['wbteampro']['modifyactions']['modal']['th-apply'] = 'Zastosuj';
$_ADMINLANG['wbteampro']['modifyactions']['modal']['th-option'] = 'Opcje';
$_ADMINLANG['wbteampro']['modifyactions']['modal']['th-value'] = 'Wartości';

/************************************** Modify Actions Modal */
$_ADMINLANG['wbteampro']['modifytimelogs']['modal']['title'] = 'Modyfikacja wielu Timelogów';
$_ADMINLANG['wbteampro']['modifytimelogs']['modal']['th-apply'] = 'Zastosuj';
$_ADMINLANG['wbteampro']['modifytimelogs']['modal']['th-option'] = 'Opcje';
$_ADMINLANG['wbteampro']['modifytimelogs']['modal']['th-value'] = 'Wartości';

/************************************** Confirm Modal */
$_ADMINLANG['wbteampro']['confirm']['modal']['title'] = 'Potwierdź';
$_ADMINLANG['wbteampro']['confirm']['modal']['delete'] = 'wpisz DELETE aby potwierdzić';

/************************************** Ticket Modal */
$_ADMINLANG['wbteampro']['ticket']['modal']['title'] = 'Otwórz nowe zgłoszenie';
$_ADMINLANG['wbteampro']['ticket']['modal']['client'] = 'Klient';
$_ADMINLANG['wbteampro']['ticket']['modal']['project'] = 'Projekt';
$_ADMINLANG['wbteampro']['ticket']['modal']['deptid'] = 'Dział';
$_ADMINLANG['wbteampro']['ticket']['modal']['priority'] = 'Priorytet';
$_ADMINLANG['wbteampro']['ticket']['modal']['subject'] = 'Temat';
$_ADMINLANG['wbteampro']['ticket']['modal']['message'] = 'Wiadomość';
$_ADMINLANG['wbteampro']['ticket']['modal']['nodept'] = 'Nie znaleziono przypisanych działów';
$_ADMINLANG['wbteampro']['ticket']['modal']['sendemail'] = 'Wyślij na email';

/************************************** Page/List Navigation */
$_ADMINLANG['wbteampro']['filter']['tablabel'] = $_ADMINLANG['global']['searchfilter'];
$_ADMINLANG['wbteampro']['filter']['any'] = $_ADMINLANG['global']['any'];
$_ADMINLANG['wbteampro']['filter']['none'] = $_ADMINLANG['global']['none'];
$_ADMINLANG['wbteampro']['filter']['checkall'] = 'Zaznacz';
$_ADMINLANG['wbteampro']['filter']['uncheckall'] = 'Odznacz';
$_ADMINLANG['wbteampro']['filter']['selectedtext'] = 'Zaznaczonych: #';
$_ADMINLANG['wbteampro']['filter']['search'] = 'Szukaj';
$_ADMINLANG['wbteampro']['filter']['masksearch'] = 'Filtry';
$_ADMINLANG['wbteampro']['filter']['masksearch-placeholder'] = 'Filtrowanie po słowach kluczowych...';
$_ADMINLANG['wbteampro']['filter']['owner'] = 'Właściciel';
$_ADMINLANG['wbteampro']['filter']['admin'] = 'Administrator';
$_ADMINLANG['wbteampro']['filter']['project'] = 'Projekt';
$_ADMINLANG['wbteampro']['filter']['action'] = 'Zadanie';
$_ADMINLANG['wbteampro']['filter']['ticket'] = 'Zgłoszenie';
$_ADMINLANG['wbteampro']['filter']['status'] = 'Status';
$_ADMINLANG['wbteampro']['filter']['client'] = 'Klient';
$_ADMINLANG['wbteampro']['filter']['product'] = 'Produkt';
$_ADMINLANG['wbteampro']['filter']['department'] = 'Dział';
$_ADMINLANG['wbteampro']['filter']['manager'] = 'Menadżer';
$_ADMINLANG['wbteampro']['filter']['assigned'] = 'Przydzielony';
$_ADMINLANG['wbteampro']['filter']['type'] = 'Rodzaj';
$_ADMINLANG['wbteampro']['filter']['level'] = 'Poziom';
$_ADMINLANG['wbteampro']['filter']['flagged'] = 'Oznaczony';
$_ADMINLANG['wbteampro']['filter']['rangestart'] = 'Rozpoczęto po';
$_ADMINLANG['wbteampro']['filter']['rangestop'] = 'Rozpoczęty przed';
$_ADMINLANG['wbteampro']['filter']['percentage'] = 'Ukończono %';
$_ADMINLANG['wbteampro']['filter']['root'] = 'Dostęp administracyjny';
$_ADMINLANG['wbteampro']['filter']['zone'] = 'Strefa';
$_ADMINLANG['wbteampro']['filter']['priority'] = 'Priorytet';
$_ADMINLANG['wbteampro']['filter']['billable'] = 'Płatne';
$_ADMINLANG['wbteampro']['filter']['invoiced'] = 'Fakturowane';
$_ADMINLANG['wbteampro']['filter']['group_mode'] = 'Grupowane jako';
$_ADMINLANG['wbteampro']['filter']['project_type'] = 'Rodzaj projektu';
$_ADMINLANG['wbteampro']['filter']['project_status'] = 'Status projektu';

/************************************** Page/List Navigation */
$_ADMINLANG['wbteampro']['pagenav']['report'] = '%s '.$_ADMINLANG['global']['recordsfound'].', '.$_ADMINLANG['global']['page'].' %s '.$_ADMINLANG['global']['of'].' %s';
$_ADMINLANG['wbteampro']['pagenav']['prev'] = $_ADMINLANG['global']['previouspage'];
$_ADMINLANG['wbteampro']['pagenav']['next'] = $_ADMINLANG['global']['nextpage'];
$_ADMINLANG['wbteampro']['pagenav']['empty'] = $_ADMINLANG['global']['norecordsfound'];
$_ADMINLANG['wbteampro']['pagenav']['jumpto'] = $_ADMINLANG['global']['jumppage'];
$_ADMINLANG['wbteampro']['pagenav']['limit'] = 'Limit';
$_ADMINLANG['wbteampro']['pagenav']['go'] = $_ADMINLANG['global']['go'];
$_ADMINLANG['wbteampro']['pagenav']['export'] = 'Eksportuj';
$_ADMINLANG['wbteampro']['pagenav']['print'] = 'Drukuj';
$_ADMINLANG['wbteampro']['pagenav']['orderby'] = 'Sortuj po %1$s'; // %1$s = Field, %2$s = Direction
$_ADMINLANG['wbteampro']['pagenav']['allMasked'] = '<b>Uwaga</b><br>wszystkie wpisy są zakodowane';

/************************************** Form Button Labels */
$_ADMINLANG['wbteampro']['formnav']['edit'] = 'Edytuj';
$_ADMINLANG['wbteampro']['formnav']['view'] = 'Zobacz';
$_ADMINLANG['wbteampro']['formnav']['copy'] = 'Kopiuj';
$_ADMINLANG['wbteampro']['formnav']['copy_template'] = 'Utwórz projekt';
$_ADMINLANG['wbteampro']['formnav']['archive'] = 'Archiwizuj';
$_ADMINLANG['wbteampro']['formnav']['unarchive'] = 'Cofnij archiwizację';
$_ADMINLANG['wbteampro']['formnav']['save'] = 'Zapisz';
$_ADMINLANG['wbteampro']['formnav']['save_new'] = 'Zapisz i utwórz nowy';
$_ADMINLANG['wbteampro']['formnav']['apply'] = 'Zastosuj';
$_ADMINLANG['wbteampro']['formnav']['close'] = 'Zamknij';
$_ADMINLANG['wbteampro']['formnav']['cancel'] = 'Anuluj';
$_ADMINLANG['wbteampro']['formnav']['delete'] = 'Usuń';
$_ADMINLANG['wbteampro']['formnav']['download'] = 'Pobierz';
$_ADMINLANG['wbteampro']['formnav']['timestart'] = 'Stoper - start';
$_ADMINLANG['wbteampro']['formnav']['timestop'] = 'Stoper - stop';
$_ADMINLANG['wbteampro']['formnav']['submit'] = 'Wyślij';
$_ADMINLANG['wbteampro']['formnav']['invoice'] = 'Faktura';
$_ADMINLANG['wbteampro']['formnav']['reload'] = 'Załaduj ponownie';
$_ADMINLANG['wbteampro']['formnav']['check'] = 'Sprawdź';
$_ADMINLANG['wbteampro']['formnav']['link'] = 'Powiąż';
$_ADMINLANG['wbteampro']['formnav']['unlink'] = 'Usuń powiązanie';

/************************************** Dashboard Blocks */
$_ADMINLANG['wbteampro']['dashhead']['topProjects'] = 'Projekty ostatnio aktywne';
$_ADMINLANG['wbteampro']['dashhead']['topActions'] = 'Zadania z największą aktywnością';
$_ADMINLANG['wbteampro']['dashhead']['myActions'] = 'Zadania przydzielone do Ciebie';
$_ADMINLANG['wbteampro']['dashhead']['touchedActions'] = 'Zadania z ostatnią aktywnością';
$_ADMINLANG['wbteampro']['dashhead']['topTimelog'] = 'Najnowsze zmiany w Timelogu';
$_ADMINLANG['wbteampro']['dashhead']['topTickets'] = 'Najnowsze zmiany w zgłoszeniach';
$_ADMINLANG['wbteampro']['dashhead']['topTopics'] = 'Najnowsze zmiany w Tematach';
$_ADMINLANG['wbteampro']['dashhead']['topFiles'] = 'Najnowsze zmiany w plikach';
$_ADMINLANG['wbteampro']['dashhead']['viewall'] = 'Zobacz wszystko';

/************************************** List Table Headers */
$_ADMINLANG['wbteampro']['listhead']['ordering'] = 'Sortowanie';
$_ADMINLANG['wbteampro']['listhead']['enabled'] = 'Włączone';
$_ADMINLANG['wbteampro']['listhead']['date_created'] = 'Utworzone';
$_ADMINLANG['wbteampro']['listhead']['date_modified'] = 'Zmodyfikowane';
$_ADMINLANG['wbteampro']['listhead']['date_activity'] = 'Aktywność';
$_ADMINLANG['wbteampro']['listhead']['date_start'] = 'Start';
$_ADMINLANG['wbteampro']['listhead']['date_finish'] = 'Do';
$_ADMINLANG['wbteampro']['listhead']['client_name'] = 'Nazwa klienta';
$_ADMINLANG['wbteampro']['listhead']['client_userid'] = 'Klient';
$_ADMINLANG['wbteampro']['listhead']['client_hostingid'] = 'Produkt';
$_ADMINLANG['wbteampro']['listhead']['owner_adminid'] = 'Właściciel';
$_ADMINLANG['wbteampro']['listhead']['manager_adminid'] = 'Menadżer';
$_ADMINLANG['wbteampro']['listhead']['assigned_adminid'] = 'Przydzielony';
$_ADMINLANG['wbteampro']['listhead']['invoice_id'] = 'Faktura';
$_ADMINLANG['wbteampro']['listhead']['range_start'] = 'Rozpoczęte po';
$_ADMINLANG['wbteampro']['listhead']['range_stop'] = 'Rozpoczęte przed';

/************************************** Project List */
$_ADMINLANG['wbteampro']['listhead']['project_name'] = 'Nazwa projektu';
$_ADMINLANG['wbteampro']['listhead']['project_type'] = 'Rodzaj';
$_ADMINLANG['wbteampro']['listhead']['project_status'] = 'Status';
$_ADMINLANG['wbteampro']['listhead']['project_complete'] = '%';
$_ADMINLANG['wbteampro']['listhead']['project_tasks'] = '#';

/************************************** Action List */
$_ADMINLANG['wbteampro']['listhead']['action_name'] = 'Nazwa zadania';
$_ADMINLANG['wbteampro']['listhead']['action_type'] = 'Rodzaj';
$_ADMINLANG['wbteampro']['listhead']['action_status'] = 'Status';
$_ADMINLANG['wbteampro']['listhead']['action_complete'] = '%';
$_ADMINLANG['wbteampro']['listhead']['action_elapsed'] = 'Minęło';
$_ADMINLANG['wbteampro']['listhead']['action_priority'] = 'Priorytet';
$_ADMINLANG['wbteampro']['listhead']['action_duration'] = 'Czas trwania';

/************************************** Timelog List */
$_ADMINLANG['wbteampro']['listhead']['timelog_note'] = 'Notatki w Timelogu';
$_ADMINLANG['wbteampro']['listhead']['timelog_elapsed'] = 'Minęło';
$_ADMINLANG['wbteampro']['listhead']['timelog_start'] = 'Rozpoczęte';
$_ADMINLANG['wbteampro']['listhead']['timelog_type'] = 'Rodzaj';
$_ADMINLANG['wbteampro']['listhead']['timelog_status'] = 'Status';
$_ADMINLANG['wbteampro']['listhead']['timelog_count'] = '# Wpisów';
$_ADMINLANG['wbteampro']['listhead']['timelog_elapsed_total_billable'] = 'Łącznie płatnego czasu';
$_ADMINLANG['wbteampro']['listhead']['timelog_count_billed'] = '# Rozliczony';
$_ADMINLANG['wbteampro']['listhead']['timelog_elapsed_total_billed'] = 'Łącznie rozliczonego';
$_ADMINLANG['wbteampro']['listhead']['timelog_count_unbilled'] = '# W trakcie rozliczania';
$_ADMINLANG['wbteampro']['listhead']['timelog_elapsed_total_unbilled'] = 'Łącznie w trakcie';
$_ADMINLANG['wbteampro']['listhead']['timelog_elapsed_total'] = 'Łącznie';

/************************************** Topic List */
$_ADMINLANG['wbteampro']['listhead']['topic_name'] = 'Wątki w dyskusji';
$_ADMINLANG['wbteampro']['listhead']['topic_activity'] = 'Aktywność';
$_ADMINLANG['wbteampro']['listhead']['topic_posts'] = 'Wpisy';
$_ADMINLANG['wbteampro']['listhead']['topic_status'] = 'Status';

/************************************** Ticket List */
$_ADMINLANG['wbteampro']['listhead']['ticket_title'] = 'Tytuł zgłoszenia';
$_ADMINLANG['wbteampro']['listhead']['ticket_lastreply'] = 'Aktywność';
$_ADMINLANG['wbteampro']['listhead']['ticket_date'] = 'Data zgłoszenia';
$_ADMINLANG['wbteampro']['listhead']['ticket_urgency'] = 'Ważność';
$_ADMINLANG['wbteampro']['listhead']['ticket_submitter'] = 'Zgłaszający';
$_ADMINLANG['wbteampro']['listhead']['ticket_department'] = 'Dział';
$_ADMINLANG['wbteampro']['listhead']['ticket_status'] = 'Status';
$_ADMINLANG['wbteampro']['listhead']['ticket_admin'] = 'Właściciel';
$_ADMINLANG['wbteampro']['listhead']['ticket_flag'] = 'Przydzielone do';

/************************************** File List */
$_ADMINLANG['wbteampro']['listhead']['file_label'] = 'Wątki plików';
$_ADMINLANG['wbteampro']['listhead']['file_latest'] = 'Najnowszy plik';
$_ADMINLANG['wbteampro']['listhead']['file_total'] = 'Pliki';
$_ADMINLANG['wbteampro']['listhead']['file_status'] = 'Status';

/************************************** Plugin List */
$_ADMINLANG['wbteampro']['listhead']['plugin_name'] = 'Nazwa pluginu';
$_ADMINLANG['wbteampro']['listhead']['plugin_zone'] = 'Strefa';
$_ADMINLANG['wbteampro']['listhead']['plugin_element'] = 'Element';

/************************************** Module List
$_ADMINLANG['wbteampro']['listhead']['module_name'] = 'Nazwa modułu';
$_ADMINLANG['wbteampro']['listhead']['module_element'] = 'Element';
$_ADMINLANG['wbteampro']['listhead']['module_position'] = 'Położenie';
 */

/************************************** Setup Tabs */
$_ADMINLANG['wbteampro']['setuptab']['general'] = 'Główne';
$_ADMINLANG['wbteampro']['setuptab']['project'] = 'Projekt';
$_ADMINLANG['wbteampro']['setuptab']['action'] = 'Zadanie';
$_ADMINLANG['wbteampro']['setuptab']['display'] = 'Wyświetlanie';
$_ADMINLANG['wbteampro']['setuptab']['extensions'] = 'Rozszerzenia';

/************************************** Setup Configuration */
$_ADMINLANG['wbteampro']['configtopic']['general_settings'] = 'Ustawienia główne';
$_ADMINLANG['wbteampro']['configtopic']['project_settings'] = 'Ustawienia projektu';
$_ADMINLANG['wbteampro']['configtopic']['action_settings'] = 'Ustawienia zadań';
$_ADMINLANG['wbteampro']['configtopic']['billing_settings'] = 'Ustawienia fakturowania';
$_ADMINLANG['wbteampro']['configtopic']['timelog_settings'] = 'Ustawienia timeloga';
$_ADMINLANG['wbteampro']['configtopic']['billing_resource_rates'] = 'Stawki rozliczenia';
$_ADMINLANG['wbteampro']['configtopic']['billing_resource_rates-help'] = 'Stawka dla rozliczania Timelog jest obliczana na podstawie wartości ustawionych w sekcji Stawka Godzinowa dla ustawień fkaturowania (powyżej), w dalszej kolejności konkretnie wpisana "Stawka godzinowa" (jeśli została zdefiniowana), w dalszej kolejności  specyficzną dla zasobu "Stawkę podstawową" i na końcu stawka Timelog. Ta stawka może być określona kwotowo (np. 100) albo procentowo (np. +10%, -15%) w stosunku do poprzedniej stawki.';
$_ADMINLANG['wbteampro']['configtopic']['billing_lineitem_formats'] = 'Formatowanie pozycji na fakturze';
$_ADMINLANG['wbteampro']['configtopic']['display_settings'] = 'Ustawienia panelu';
$_ADMINLANG['wbteampro']['configtopic']['display_date_formats'] = 'Format wyświetlania daty';
$_ADMINLANG['wbteampro']['configtopic']['display_name_formats'] = 'Format wyświetlania nazw';
$_ADMINLANG['wbteampro']['configtopic']['display_list_settings'] = 'Ustawienia wyświetlania projektów';


/************************************** Setup Configuration */
$_ADMINLANG['wbteampro']['configfield']['version'] = 'Wersja';
$_ADMINLANG['wbteampro']['configfield']['license_key'] = 'Klucz licencyjny';
$_ADMINLANG['wbteampro']['configfield']['license_key-help'] = 'Klucz licencyjny jest wymagany do aktywacji';
$_ADMINLANG['wbteampro']['configfield']['license_key-rekey'] = 'Zmień licencję';
$_ADMINLANG['wbteampro']['configfield']['license_key-confirm'] = 'Aby potwierdzić zmianę klucza licencyjnego wciśnij OK';
$_ADMINLANG['wbteampro']['configfield']['project_file_path'] = 'Ścieżka do plików';
$_ADMINLANG['wbteampro']['configfield']['project_file_path-help'] = 'Względna lub bezwzględna ścieżka systemowa do katalogu, do którego wgrywane są pliki projektów';
$_ADMINLANG['wbteampro']['configfield']['admin_super_roles'] = 'Rola Super Admin';
$_ADMINLANG['wbteampro']['configfield']['admin_super_roles-help'] = 'Pełny dostęp do systemu projektów';
$_ADMINLANG['wbteampro']['configfield']['admin_valid_roles'] = 'Rola Admina';
$_ADMINLANG['wbteampro']['configfield']['admin_valid_roles-help'] = 'Dostęp do projektów własnych i przydzielonych';
$_ADMINLANG['wbteampro']['configfield']['project_link_target'] = 'Otwieranie podstron projektu';
$_ADMINLANG['wbteampro']['configfield']['project_link_target-help'] = 'Domyślnie: w nowym oknie';
$_ADMINLANG['wbteampro']['configfield']['project_link_task'] = 'Domyślny widok projektu';
$_ADMINLANG['wbteampro']['configfield']['project_link_task-help'] = 'Pierwsza zakładka po otwarciu projektu';
$_ADMINLANG['wbteampro']['configfield']['client_link_target'] = 'Otwieranie linków - klienci';
$_ADMINLANG['wbteampro']['configfield']['client_link_target-help'] = 'Domyślnie: w nowym oknie';
$_ADMINLANG['wbteampro']['configfield']['ticket_link_target'] = 'Otwieranie linków - zgłoszenia';
$_ADMINLANG['wbteampro']['configfield']['ticket_link_target-help'] = 'Domyślnie: w nowym oknie';
$_ADMINLANG['wbteampro']['configfield']['page_listing_limit'] = 'Limit wyświetlanych na stronie';
$_ADMINLANG['wbteampro']['configfield']['page_listing_limit-help'] = 'Liczba wyswietlanych zapisów na stronie';
$_ADMINLANG['wbteampro']['configfield']['thread_listing_limit'] = 'Limit wyświetlanych wątków';
$_ADMINLANG['wbteampro']['configfield']['thread_listing_limit-help'] = 'Liczba wpisów pokazywanych na stronie';
$_ADMINLANG['wbteampro']['configfield']['thread_thumbnail_dimension'] = 'Rozmiar miniatury';
$_ADMINLANG['wbteampro']['configfield']['thread_thumbnail_dimension-help'] = 'Rozmiat miniatury obrazków w wątkach plików';
$_ADMINLANG['wbteampro']['configfield']['thread_textcollapse'] = 'Zawijanie treści';
$_ADMINLANG['wbteampro']['configfield']['thread_textcollapse-help'] = 'Zawijanie zbyt długiego tekstu z przyciskiem "Pokaż całość"';
$_ADMINLANG['wbteampro']['configfield']['keepalive_timeout'] = 'Podtrzymywanie sesji';
$_ADMINLANG['wbteampro']['configfield']['keepalive_timeout-help'] = 'Odstęp pomiędzy odpytaniem serwera';
$_ADMINLANG['wbteampro']['configfield']['js_delete_confirm'] = 'Potwierdzenie usunięcia';
$_ADMINLANG['wbteampro']['configfield']['js_delete_confirm-help'] = 'Potwierdzenie wyświetlane przy usuwaniu';
$_ADMINLANG['wbteampro']['configfield']['clientarea_primarynavbar_link'] = 'Pokaż klientowi link';
$_ADMINLANG['wbteampro']['configfield']['clientarea_primarynavbar_link-help'] = 'Pokaż link do zakładki Moje Projekty w menu Panelu Klienta';
$_ADMINLANG['wbteampro']['configfield']['server_timezone'] = 'Strefa czasowa serwera';
$_ADMINLANG['wbteampro']['configfield']['server_timezone-time'] = 'Czas serwera';
$_ADMINLANG['wbteampro']['configfield']['server_timezone-help'] = 'Nadpisz strefę czasową serwera (pozostaw puste dla domyślnej)';
$_ADMINLANG['wbteampro']['configfield']['server_timezone-default'] = 'Domyślne - z serwera';
$_ADMINLANG['wbteampro']['configfield']['cron_adminid'] = 'Ustawienia CRON dla użytkownika Admin';
$_ADMINLANG['wbteampro']['configfield']['cron_adminid-help'] = 'Użyjwaj użytkownika Admin dla odwołań do API WHMCS';
$_ADMINLANG['wbteampro']['configfield']['cron_password'] = 'Hasło dla CRON';
$_ADMINLANG['wbteampro']['configfield']['cron_password-help'] = 'Opcjonalne hasło dla bezpośrednich odwołań do cron.php<br/><small><a href="'. WHMCS_URL .'modules/addons/wbteampro/cron.php?cron_password=xxx" target="_blank">/modules/addons/wbteampro/cron.php?cron_password=xxx</a></small>';
$_ADMINLANG['wbteampro']['configfield']['use_gzhandler'] = 'Kompresja';
$_ADMINLANG['wbteampro']['configfield']['use_gzhandler-help'] = 'Używaj kompresji gzip dla zwiększenia szybkości odpowiedzi';
$_ADMINLANG['wbteampro']['configfield']['system_log_emails'] = 'Email dla wysyłki logów';
$_ADMINLANG['wbteampro']['configfield']['system_log_emails-help'] = 'Zapisuj historię wysyłanych emaili w WHMCS Email Log';
$_ADMINLANG['wbteampro']['configfield']['api_active'] = 'Aktywuj API';
$_ADMINLANG['wbteampro']['configfield']['api_active-help'] = 'Pozwalał na odwołania przez API';
$_ADMINLANG['wbteampro']['configfield']['system_tmp_path'] = 'Ścieżka do folderu tymczasowego';
$_ADMINLANG['wbteampro']['configfield']['system_tmp_path-help'] = 'Względna lub bezwzględna ścieżka do plików tymczasowych';
$_ADMINLANG['wbteampro']['configfield']['otaupdate_autocheck'] = 'Sprawdzaj automatycznie';
$_ADMINLANG['wbteampro']['configfield']['otaupdate_autocheck-help'] = 'Sprawdzanie automatyczne dostępnych aktualizacji';
$_ADMINLANG['wbteampro']['configfield']['otaupdate_releasefilter'] = 'Opcjonalne wersje';
$_ADMINLANG['wbteampro']['configfield']['otaupdate_releasefilter-help'] = 'Możesz wybrać sprawdzanie nieoficjalnych, testowych, wersji';
$_ADMINLANG['wbteampro']['configfield']['timelog_elapsed_format'] = 'Format dla minonego Timeloga';
$_ADMINLANG['wbteampro']['configfield']['timelog_elapsed_format-help'] = 'Domyślnie: automatyczny';
$_ADMINLANG['wbteampro']['configfield']['timelog_ticketreply_autostop'] = 'AutoStop Timeloga przy obsłudze zgłoszeń';
$_ADMINLANG['wbteampro']['configfield']['timelog_ticketreply_autostop-help'] = 'Automatyczne zatrzymywanie Timeloga w przypadku odpisania na zgłoszenie';
$_ADMINLANG['wbteampro']['configfield']['timelog_ticketreply_autostop_onstatus'] = 'Filtrowanie statusów zgłoszeń dla autostopu timeloga';
$_ADMINLANG['wbteampro']['configfield']['timelog_ticketreply_autostop_onstatus-help'] = 'Określ status, jaki powinno mieć zgłoszenie, aby automatycznie zatrzymać timelog';
$_ADMINLANG['wbteampro']['configfield']['project']['adjust_date'] = 'Automatyczna korekta daty';
$_ADMINLANG['wbteampro']['configfield']['project']['adjust_date-help'] = 'Dostosuj daty projektu uwzględniając daty graniczne';
$_ADMINLANG['wbteampro']['configfield']['project']['project_type'] = 'Typy projektu';
$_ADMINLANG['wbteampro']['configfield']['project']['project_type-help'] = 'Dostępne typy projektu (każdy w oddzielnej linii)';
$_ADMINLANG['wbteampro']['configfield']['project']['project_status'] = 'Statusy projektu';
$_ADMINLANG['wbteampro']['configfield']['project']['project_status-help'] = 'Dostępne statusy projektu (każdy w oddzielnej linii)';
$_ADMINLANG['wbteampro']['configfield']['project']['allow_assigned_any-help'] = 'Pozwól przypisać projekt do dowolnego administratora (opcja "dla każdego")';
$_ADMINLANG['wbteampro']['configfield']['project']['allow_assigned_any'] = 'Pozwól na dostęp "dla każdego"';
$_ADMINLANG['wbteampro']['configfield']['action']['max_depth'] = 'Maksymalne zagnieżdżenie';
$_ADMINLANG['wbteampro']['configfield']['action']['max_depth-help'] = 'Maksymalne zagnieżdżenie poziomów zadań w projekcie';
$_ADMINLANG['wbteampro']['configfield']['action']['adjust_date'] = 'Autokorekta dat';
$_ADMINLANG['wbteampro']['configfield']['action']['adjust_date-help'] = 'Automatycznie dostosuj daty zadań do dat granicznych';
$_ADMINLANG['wbteampro']['configfield']['action']['date_start_offset'] = 'Przesunięcie dat dla nowej zadania';
$_ADMINLANG['wbteampro']['configfield']['action']['date_start_offset-help'] = 'Wybierz regułę dla tworzenia daty startu nowego zadania.';
$_ADMINLANG['wbteampro']['configfield']['action']['default_duration'] = 'Czas trwania nowego zadania';
$_ADMINLANG['wbteampro']['configfield']['action']['default_duration-help'] = 'Początkowa długość nowego zadania (w sekundach)';
$_ADMINLANG['wbteampro']['configfield']['action']['finish_offset'] = 'Ustawienie końca nowego zadania';
$_ADMINLANG['wbteampro']['configfield']['action']['finish_offset-help'] = 'Odstęp w sekundach dla końca nowego zadania.';
$_ADMINLANG['wbteampro']['configfield']['action']['finish_conflict'] = 'Konflikt dat końcowych';
$_ADMINLANG['wbteampro']['configfield']['action']['finish_conflict-help'] = 'Odstęp w sekundach w sytuacji konliktu dat końcowych';
$_ADMINLANG['wbteampro']['configfield']['action']['action_type'] = 'Typu zadań';
$_ADMINLANG['wbteampro']['configfield']['action']['action_type-help'] = 'Dostępne typy zadań (każdy w oddzielnej linii)';
$_ADMINLANG['wbteampro']['configfield']['action']['action_status'] = 'Statusy zadań';
$_ADMINLANG['wbteampro']['configfield']['action']['action_status-help'] = 'Dostępne statusy zadań (każdy w oddzielnej linii)';
$_ADMINLANG['wbteampro']['configfield']['action']['insert_position'] = 'Miejsce wstawienia nowego zadania';
$_ADMINLANG['wbteampro']['configfield']['action']['insert_position-help'] = 'Pozycja nowego zadania na liście zadań';
$_ADMINLANG['wbteampro']['configfield']['action']['collapse_complete'] = 'Zwiń zakończone zadania';
$_ADMINLANG['wbteampro']['configfield']['action']['collapse_complete-help'] = 'Początkowo pokaż zakończone zadania w widoku zwiniętym';
$_ADMINLANG['wbteampro']['configfield']['action']['mask_complete'] = 'Ukryj zadania ukończone';
$_ADMINLANG['wbteampro']['configfield']['action']['mask_complete-help'] = 'Początkowo załaduj zakończone zadania w widoku ukrytym';
$_ADMINLANG['wbteampro']['configfield']['action']['allow_assigned_any'] = 'Pozwól na przypisanie "do każdego"';
$_ADMINLANG['wbteampro']['configfield']['action']['allow_assigned_any-help'] = 'Pozwól przypisać zadanie do dowolnego administratora (opcja "dla każdego")';
$_ADMINLANG['wbteampro']['configfield']['action']['status_oncomplete'] = 'Status zadań ukończonych';
$_ADMINLANG['wbteampro']['configfield']['action']['status_oncomplete-help'] = 'Automatycznie zmień status, jeśli wykonano 100% zadania';
$_ADMINLANG['wbteampro']['configfield']['action']['default_recurdays'] = 'Domyślne cykliczne dni robocze';
$_ADMINLANG['wbteampro']['configfield']['action']['default_recurdays-help'] = 'Domyślne dni tygodnia dla podsumowania tygodniowego';
$_ADMINLANG['wbteampro']['configfield']['format']['projectDate'] = 'Daty projektu';
$_ADMINLANG['wbteampro']['configfield']['format']['projectDate-help'] = 'Data utworzenia, modyfikacji, rozpoczęcia i zakończenia projektu';
$_ADMINLANG['wbteampro']['configfield']['format']['timelogDate'] = 'Data i czas dla Timelogu';
$_ADMINLANG['wbteampro']['configfield']['format']['timelogDate-help'] = 'Data startu i zakończenia Timelogu';
$_ADMINLANG['wbteampro']['configfield']['format']['actionDate'] = 'Daty zadania';
$_ADMINLANG['wbteampro']['configfield']['format']['actionDate-help'] = 'Data utworzenia, rozpoczęcia i zakończenia zadania';
$_ADMINLANG['wbteampro']['configfield']['format']['ticketDate'] = 'Daty zgłoszenia';
$_ADMINLANG['wbteampro']['configfield']['format']['ticketDate-help'] = 'Daty utworzenia i odpowiedzi';
$_ADMINLANG['wbteampro']['configfield']['format']['topicDate'] = 'Daty i czas wątków';
$_ADMINLANG['wbteampro']['configfield']['format']['topicDate-help'] = 'Daty utworzenia i zakończenia wątków';
$_ADMINLANG['wbteampro']['configfield']['format']['topicPostDate'] = 'Daty i czas dla tematów w wątkach';
$_ADMINLANG['wbteampro']['configfield']['format']['topicPostDate-help'] = 'Data utworzenia posta w wątku';
$_ADMINLANG['wbteampro']['configfield']['format']['fileDate'] = 'Data i czas wątku plików';
$_ADMINLANG['wbteampro']['configfield']['format']['fileDate-help'] = 'Daty utworzenia i odpowiedzi w wątkach plików';
$_ADMINLANG['wbteampro']['configfield']['format']['filePostDate'] = 'Data i czas wpisów plików';
$_ADMINLANG['wbteampro']['configfield']['format']['filePostDate-help'] = 'Data utworzenia wpisu w wątku plików';

$_ADMINLANG['wbteampro']['configfield']['format']['jsDate'] = 'Format daty w filtrach';
$_ADMINLANG['wbteampro']['configfield']['format']['jsDate-help'] = 'Format daty używany w oknie dialogowym listy filtrów i pól wyboru.';
$_ADMINLANG['wbteampro']['configfield']['format']['jsTime'] = 'Format czasu w filtrach';
$_ADMINLANG['wbteampro']['configfield']['format']['jsTime-help'] = 'Format czasu używany w oknie dialogowym listy filtrów i pól wyboru.';

$_ADMINLANG['wbteampro']['configfield']['format']['adminName'] = 'Nazwa administratora';
$_ADMINLANG['wbteampro']['configfield']['format']['adminName-help'] = 'Lista przypisanych Menadżerów';
$_ADMINLANG['wbteampro']['configfield']['format']['clientName'] = 'Nazwa klienta';
$_ADMINLANG['wbteampro']['configfield']['format']['clientName-help'] = 'Lista wyświetlanych klientów';
$_ADMINLANG['wbteampro']['configfield']['format']['contactName'] = 'Nazwa kontatu';
$_ADMINLANG['wbteampro']['configfield']['format']['contactName-help'] = 'Lista pokazywanych kontaktów';
$_ADMINLANG['wbteampro']['configfield']['format']['ajaxClientList'] = 'Wyszukiwanie klientów - ajax';
$_ADMINLANG['wbteampro']['configfield']['format']['ajaxClientList-help'] = 'Format w dynamicznym wyszukiwaniu klientów';
$_ADMINLANG['wbteampro']['configfield']['timelog']['timelog_type'] = 'Typy Timelogu';
$_ADMINLANG['wbteampro']['configfield']['timelog']['timelog_type-help'] = 'Dostępne opcje dla timelogu (każda w osobnej linii)';
$_ADMINLANG['wbteampro']['configfield']['billing']['hourly_rate'] = 'Stawka godzinowa';
$_ADMINLANG['wbteampro']['configfield']['billing']['hourly_rate-help'] = 'Domyślna stawka rozliczeniowa dla timelogu';
$_ADMINLANG['wbteampro']['configfield']['billing']['email_invoice'] = 'Wyślij fakturę';
$_ADMINLANG['wbteampro']['configfield']['billing']['email_invoice-help'] = 'Domyślna opcja wysłania klientowi faktury po utworzeniu';
$_ADMINLANG['wbteampro']['configfield']['billing']['tax_rate'] = 'Stawka podatku';
$_ADMINLANG['wbteampro']['configfield']['billing']['tax_rate-help'] = 'Domyślna stawka podatku, gdy nie zdefiniowano jej dla klienta';
$_ADMINLANG['wbteampro']['configfield']['billing']['apply_tax'] = 'Dolicz podatek';
$_ADMINLANG['wbteampro']['configfield']['billing']['apply_tax-help'] = 'Domyślnie dla sytuacji doliczania podatku do kwot na fakturze';
$_ADMINLANG['wbteampro']['configfield']['billing']['apply_credits'] = 'Uwzględnij nadpłatę';
$_ADMINLANG['wbteampro']['configfield']['billing']['apply_credits-help'] = 'Domyslne dla sytuacji uwzględnienia nadpłat na kontach klienta';
$_ADMINLANG['wbteampro']['configfield']['billing']['round_elapsed'] = 'ZAokrąglanie czasu';
$_ADMINLANG['wbteampro']['configfield']['billing']['round_elapsed-help'] = 'Zaokrąglij w górę lub w dół (-)do nabliższej minuty';
$_ADMINLANG['wbteampro']['configfield']['billing']['desc_format'] = 'Format pozycji na fakturze'; // Deprecated
$_ADMINLANG['wbteampro']['configfield']['billing']['desc_format-help'] = 'Format opisów elementów zamówienia na fakturze'; // Deprecated
$_ADMINLANG['wbteampro']['configfield']['billing']['default_billable_status'] = 'Domyślny status dla opcji płatnych';
$_ADMINLANG['wbteampro']['configfield']['billing']['default_billable_status-help'] = 'Wartość domyślna dla nowych projektów lub innych timelogów';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['clientsummary'] = 'Podsumowanie klienta';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['clientsummary-help'] = 'Format podsumowania czasu pogrupowanego według klienta';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['projectsummary'] = 'Podsumowanie projektu';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['projectsummary-help'] = 'Format podsumowania czasu pogrupowanego według projektu';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['actionsummary'] = 'Podsumowanie zadań';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['actionsummary-help'] = 'Format podsumowania czasu pogrupowanego według zadań';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['ticketsummary'] = 'Podsumowanie zgłoszeń';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['ticketsummary-help'] = 'Format podsumowania czasu pogrupowanego według zgłoszeń';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['clientsubject'] = 'Zapisy timelogów klienta';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['clientsubject-help'] = 'Format podsumowania timelogów przypisanych do klienta';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['projectsubject'] = 'Zapisy timelogów projektu';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['projectsubject-help'] = 'Format podsumowania timelogów przypisanych do projektu';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['actionsubject'] = 'Zapisy timelogów zadań';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['actionsubject-help'] = 'Format podsumowania timelogów przypisanych do zadań';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['ticketsubject'] = 'Zapisy timelogów zgłoszeń';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['ticketsubject-help'] = 'Format podsumowania timelogów przypisanych do zgłoszeń';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['customfieldlist'] = 'Zmienne w polach niestandardowych (CF)';
$_ADMINLANG['wbteampro']['configfield']['billing']['lineitem_format']['customfieldlist-help'] = 'W zależności od dostępnych informacji, dla elementu zamówienia można użyć niektórych lub wszystkich poniższych zmiennych pól (tzw. Custom Fields), aby dostosować zapisy faktury używane podczas generowania elementów zamówienia.';

/************************************** Extension System */
$_ADMINLANG['wbteampro']['extensionlist']['type_plugin'] = 'Plugin';
$_ADMINLANG['wbteampro']['extensionlist']['type_module'] = 'Moduł';
$_ADMINLANG['wbteampro']['extensionlist']['zone_all'] = 'Wszystkie';
$_ADMINLANG['wbteampro']['extensionlist']['zone_client'] = 'Klient';
$_ADMINLANG['wbteampro']['extensionlist']['zone_admin'] = 'Administrator';
$_ADMINLANG['wbteampro']['extensionlist']['new_module'] = 'Nowy moduł';
$_ADMINLANG['wbteampro']['extensionlist']['install_plugin'] = 'zainstaluj pluginy';
$_ADMINLANG['wbteampro']['extensionfield']['type_plugin'] = 'Plugin';
$_ADMINLANG['wbteampro']['extensionfield']['extension_name'] = 'Nazwa instancji';
$_ADMINLANG['wbteampro']['extensionfield']['extension_enabled'] = 'Włączony';
$_ADMINLANG['wbteampro']['extensionfield']['extension_zone'] = 'Strefa systemowa';
$_ADMINLANG['wbteampro']['extensionfield']['date_created'] = 'Zainstalowany';
$_ADMINLANG['wbteampro']['extensionxml']['name'] = 'Nazwa';
$_ADMINLANG['wbteampro']['extensionxml']['version'] = 'Wersja';
$_ADMINLANG['wbteampro']['extensionxml']['author'] = 'Autor';
$_ADMINLANG['wbteampro']['extensionxml']['created'] = 'Utworzony';
$_ADMINLANG['wbteampro']['extensionxml']['description'] = 'Opis';

/************************************** Setup Update */
$_ADMINLANG['wbteampro']['setupupdate']['package_uptodate'] = 'Posiadasz najnowszą wersję: <b>v%1$s</b>.';
$_ADMINLANG['wbteampro']['setupupdate']['download_available'] = 'Do pobrania jest najnowsza wersja <b>%1$s</b> pakietu <b>v%2$s</b><br/>Możesz zainstalować ją automatycznie, albo pobrać pakiet i ręcznie uaktualnić posiadaną wersję.<br/><br/>'
                                                              . '<button class="btn btn-primary" onclick="%3$s">Zainstaluj automatycznie</button> lub <button class="btn" onclick="%4$s">Tylko pobierz</button>';

/************************************** License First Run */
$_ADMINLANG['wbteampro']['licenseform']['description'] = '<b>Nieprawidłowy klucz licencyjny.</b><br/>Aby kontynuować instalację, prosimy wprowadzić prawidłowy klucz.';
$_ADMINLANG['wbteampro']['licenseform']['success'] = '<b>Licencja zainstalowana</b><br/>Klucz został pomyślnie dodany.';

/************************************** Widgets */
$_ADMINLANG['wbteampro']['widget']['projectactivity']['title'] = 'wbTeamPro: Aktywność w projektach';
$_ADMINLANG['wbteampro']['widget']['projectactivity']['header'] = 'Aktywność w projektach';
$_ADMINLANG['wbteampro']['widget']['actions']['title'] = 'wbTeamPro: Zadania';
$_ADMINLANG['wbteampro']['widget']['actions']['header'] = 'Zadania';
$_ADMINLANG['wbteampro']['widget']['topactions']['title'] = 'wbTeamPro: Zadania z największą aktywnością';
$_ADMINLANG['wbteampro']['widget']['topactions']['header'] = 'Zadania z największą aktywnością';
$_ADMINLANG['wbteampro']['widget']['myactions']['title'] = 'wbTeamPro: Moje zadania';
$_ADMINLANG['wbteampro']['widget']['myactions']['header'] = 'Moje zadania';
$_ADMINLANG['wbteampro']['widget']['touchedactions']['title'] = 'wbTeamPro: Zadania aktywne';
$_ADMINLANG['wbteampro']['widget']['touchedactions']['header'] = 'Zadania - ostatnia aktywność';
$_ADMINLANG['wbteampro']['widget']['actionsannumreview']['title'] = 'wbTeamPro: Zadania - podsumowanie';
$_ADMINLANG['wbteampro']['widget']['actionsannumreview']['header'] = 'Podsumowanie zadań';
$_ADMINLANG['wbteampro']['widget']['timelogbiennium']['title'] = 'wbTeamPro: Timelog';
$_ADMINLANG['wbteampro']['widget']['timelogbiennium']['header'] = 'Timelog';
$_ADMINLANG['wbteampro']['widget']['timelogactivity']['title'] = 'wbTeamPro: aktywność w Timelog';
$_ADMINLANG['wbteampro']['widget']['timelogactivity']['header'] = 'Aktywność w Timelog';
$_ADMINLANG['wbteampro']['widget']['fileactivity']['title'] = 'wbTeamPro: aktywność w plikach';
$_ADMINLANG['wbteampro']['widget']['fileactivity']['header'] = 'Aktywność w plikach';
$_ADMINLANG['wbteampro']['widget']['topicactivity']['title'] = 'wbTeamPro: aktywność w tematach';
$_ADMINLANG['wbteampro']['widget']['topicactivity']['header'] = 'Aktywność w tematach';
$_ADMINLANG['wbteampro']['widget']['topicfeed']['title'] = 'wbTeamPro: Tematy';
$_ADMINLANG['wbteampro']['widget']['topicfeed']['header'] = 'Tematy';
$_ADMINLANG['wbteampro']['widget']['ticketactivity']['title'] = 'wbTeamPro: aktywność w zgłoszeniach';
$_ADMINLANG['wbteampro']['widget']['ticketactivity']['header'] = 'Aktywność w zgłoszeniach';

/************************************** QuickMenu */
$_ADMINLANG['wbteampro']['quickmenu']['delete_rows'] = 'Usuń pozycję';
$_ADMINLANG['wbteampro']['quickmenu']['invoice_rows'] = 'Zafakturuj pozycję';
$_ADMINLANG['wbteampro']['quickmenu']['modify_rows'] = 'Zmodyfikuj pozycję';

// REMOVE ??
$_ADMINLANG['wbteampro']['quickmenu']['set_rows_billable'] = 'Oznacz jako płatne';
$_ADMINLANG['wbteampro']['quickmenu']['unset_rows_billable'] = 'Oznacz jako darmowe';

/************************************** Support Tickets Tab */
$_ADMINLANG['wbteampro']['supporttickets']['ticket_list'] = 'Zgłoszenia w projekcie';
$_ADMINLANG['wbteampro']['supporttickets']['ticket_elapsed'] = 'Czas rozwiązywania zgłoszenia';
$_ADMINLANG['wbteampro']['supporttickets']['timelog_list'] = 'Timelog zgłoszeń';
$_ADMINLANG['wbteampro']['supporttickets']['file_list'] = 'Pliki powiązane z projektem';

/************************************** Select List Options */
$_ADMINLANG['wbteampro']['listoption']['yes'] = 'Tak';
$_ADMINLANG['wbteampro']['listoption']['no'] = 'Nie';
$_ADMINLANG['wbteampro']['listoption']['blank'] = 'Nowe okno';
$_ADMINLANG['wbteampro']['listoption']['self'] = 'To samo okno';
$_ADMINLANG['wbteampro']['listoption']['top'] = 'Aktywne okno';
$_ADMINLANG['wbteampro']['listoption']['parent'] = 'Sąsiednie okno';
$_ADMINLANG['wbteampro']['listoption']['none'] = 'Bez potwierdzenia';
$_ADMINLANG['wbteampro']['listoption']['prompt'] = 'Wpisz aby potwierdzić';
$_ADMINLANG['wbteampro']['listoption']['confirm'] = 'Wybierz OK aby potwierdzić';
$_ADMINLANG['wbteampro']['listoption']['action_priority']['1'] = 'Niski';
$_ADMINLANG['wbteampro']['listoption']['action_priority']['2'] = 'Średni';
$_ADMINLANG['wbteampro']['listoption']['action_priority']['3'] = 'Wysoki';
$_ADMINLANG['wbteampro']['listoption']['level_class']['milestone'] = 'Etap';
$_ADMINLANG['wbteampro']['listoption']['level_class']['group'] = 'Grupa';
$_ADMINLANG['wbteampro']['listoption']['level_class']['task'] = 'Zadanie';
$_ADMINLANG['wbteampro']['listoption']['recur_frequency']['none'] = 'Brak';
$_ADMINLANG['wbteampro']['listoption']['recur_frequency']['daily'] = 'Codziennie';
$_ADMINLANG['wbteampro']['listoption']['recur_frequency']['weekly'] = 'Co tydzień';
$_ADMINLANG['wbteampro']['listoption']['recur_frequency']['monthly'] = 'Co miesiąc';
$_ADMINLANG['wbteampro']['listoption']['recur_frequency']['yearly'] = 'Co rok';
$_ADMINLANG['wbteampro']['listoption']['date_start_offset']['today'] = 'Dzisiaj';
$_ADMINLANG['wbteampro']['listoption']['date_start_offset']['tomorrow'] = 'Jutro';
$_ADMINLANG['wbteampro']['listoption']['date_start_offset']['parent'] = 'Data rozpoczęcia nadrzędnego';
$_ADMINLANG['wbteampro']['listoption']['date_start_offset']['lastsibling'] = 'Data zakończenia ostatniego';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['su'] = 'Niedziela';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['mo'] = 'Poniedziałek';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['tu'] = 'Wtorek';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['we'] = 'Środa';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['th'] = 'Czwartek';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['fr'] = 'Piątek';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['name']['sa'] = 'Sobota';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['su'] = 'Ndz';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['mo'] = 'Pon';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['tu'] = 'Wt';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['we'] = 'Śr';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['th'] = 'Czw';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['fr'] = 'Pt';
$_ADMINLANG['wbteampro']['listoption']['daysofweek']['abbr']['sa'] = 'Sob';
$_ADMINLANG['wbteampro']['listoption']['update_release']['beta'] = 'Beta';
$_ADMINLANG['wbteampro']['listoption']['update_release']['rc'] = 'Prawie gotowe';
$_ADMINLANG['wbteampro']['listoption']['update_release']['stable'] = 'Produkcyjna';
$_ADMINLANG['wbteampro']['listoption']['timelog_group_mode']['timelog'] = 'Timelog';
$_ADMINLANG['wbteampro']['listoption']['timelog_group_mode']['client'] = 'Klient';
$_ADMINLANG['wbteampro']['listoption']['timelog_group_mode']['project'] = 'Projekt';
$_ADMINLANG['wbteampro']['listoption']['timelog_group_mode']['action'] = 'Zadania';
$_ADMINLANG['wbteampro']['listoption']['timelog_group_mode']['ticket'] = 'Zgłoszenie';

/************************************** Dynamic Select List Options */
$_ADMINLANG['wbteampro']['listoption']['project_type']['internal'] = 'Wewnętrzne';
$_ADMINLANG['wbteampro']['listoption']['project_type']['product'] = 'Produkt';
$_ADMINLANG['wbteampro']['listoption']['project_type']['service'] = 'Usługa';
$_ADMINLANG['wbteampro']['listoption']['project_status']['service'] = 'Usługa';
$_ADMINLANG['wbteampro']['listoption']['project_status']['under_review'] = 'Przegląd';
$_ADMINLANG['wbteampro']['listoption']['project_status']['active'] = 'Aktywny';
$_ADMINLANG['wbteampro']['listoption']['project_status']['in_production'] = 'W produkcji';
$_ADMINLANG['wbteampro']['listoption']['project_status']['in_testing'] = 'W testach';
$_ADMINLANG['wbteampro']['listoption']['project_status']['completed'] = 'Zakończony';
$_ADMINLANG['wbteampro']['listoption']['project_status']['closed'] = 'Zamknięty';
$_ADMINLANG['wbteampro']['listoption']['action_type']['planning'] = 'Planowane';
$_ADMINLANG['wbteampro']['listoption']['action_type']['research'] = 'Szukanie rozwiązania';
$_ADMINLANG['wbteampro']['listoption']['action_type']['contact'] = 'Kontakt';
$_ADMINLANG['wbteampro']['listoption']['action_type']['service'] = 'Serwis';
$_ADMINLANG['wbteampro']['listoption']['action_type']['development'] = 'Produkcja';
$_ADMINLANG['wbteampro']['listoption']['action_type']['review'] = 'Przekazane do sprawdzenia';
$_ADMINLANG['wbteampro']['listoption']['action_status']['closed'] = 'Zamknięte';
$_ADMINLANG['wbteampro']['listoption']['action_status']['active'] = 'Aktywne';
$_ADMINLANG['wbteampro']['listoption']['action_status']['progress'] = 'W realizacji';
$_ADMINLANG['wbteampro']['listoption']['action_status']['cancelled'] = 'Anulowane';
$_ADMINLANG['wbteampro']['listoption']['action_status']['complete'] = 'Zakończone';
$_ADMINLANG['wbteampro']['listoption']['timelog_type']['standard'] = 'Standard';
$_ADMINLANG['wbteampro']['listoption']['timelog_type']['in_house'] = 'Wewnętrzne';
$_ADMINLANG['wbteampro']['listoption']['timelog_type']['rush'] = 'Pilne';
$_ADMINLANG['wbteampro']['listoption']['timelog_type']['emergency'] = 'Nagły wypadek';
$_ADMINLANG['wbteampro']['listoption']['insert_position']['first'] = 'Pierwsze';
$_ADMINLANG['wbteampro']['listoption']['insert_position']['last'] = 'Ostatnie';

/** END LANGUAGE **/