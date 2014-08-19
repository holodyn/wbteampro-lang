<?php

/**

  Webuddha wbTeamPro
  (c)2010 Webuddha.com, The Holodyn Corporation - All Rights Reserved

  CHANGELOG ************

**/

defined('WHMCS_CLIENT') or die('Invalid Access');

$_LANG['wbteampro_tab'] = 'הפרויקטים שלי';

$_LANG['wbteampro']['error']['default_label'] = 'הודעת שגיאה';
$_LANG['wbteampro']['error']['license_error'] = 'שגיאה: אישור הרישיון נכשל';
$_LANG['wbteampro']['error']['license_invalid'] = ' שגיאה: מפתח רישיון לא חוקי';
$_LANG['wbteampro']['error']['license_expired'] = 'שגיאה: מפתח הרישיון פג תוקף';
$_LANG['wbteampro']['error']['license_suspended'] = 'שגיאה: מפתח רישיון מושעה';
$_LANG['wbteampro']['error']['permissiondenied'] = 'הרשאה נדחתה';
$_LANG['wbteampro']['alert']['default_label'] = 'הודעת התראה';
$_LANG['wbteampro']['notice']['default_label'] = 'הודעת הבהרות';
$_LANG['wbteampro']['notice']['noprojects'] = '<b> אין פרויקטים פעילים!</b><br> אין פרויקטים פעילים לצפייה'; $_LANG['wbteampro']['notice']['file_closed'] = '<b>קובץ השרשור נסגר</b><br>שרשור זה נסגר ואינו יכול להתעדכן.';
$_LANG['wbteampro']['notice']['topic_closed'] = '<b>שיחת השרשור נסגרה</b><br>שרשור זה נסגר ואינו יכול להתעדכן עוד.';
$_LANG['wbteampro']['notice']['ticket_created'] = '<b>Ticket #%s Created</b><br>פנייתך לשירות הושלמה בהצלחה.';

$_LANG['wbteampro']['js']['tabProject'] = 'פרוייקט';
$_LANG['wbteampro']['js']['tabProjects'] = 'פרוייקטים';
$_LANG['wbteampro']['js']['tabTickets'] = 'פניות לשירות';
$_LANG['wbteampro']['js']['loadMsg'] = 'מעדכן.. אנא המתן..';
$_LANG['wbteampro']['js']['noActiveLogs'] = 'תיעוד זמנים אינו פעיל';
$_LANG['wbteampro']['js']['uiTimelogStart'] = 'התחל';
$_LANG['wbteampro']['js']['uiTimelogSave'] = 'שמור';
$_LANG['wbteampro']['js']['uiTimelogCancel'] = 'בטל';
$_LANG['wbteampro']['js']['btnStopTimer'] = 'הפסק שעון עצר';
$_LANG['wbteampro']['js']['btnStartTimer'] = 'התחל שעון עצר';
$_LANG['wbteampro']['js']['msgTimelogSaved'] = 'תיעוד הזמנים נשמר [time]';
$_LANG['wbteampro']['js']['msgTimelogStopped'] = 'תיעוד הזמנים נפסק לאחר [time]';
$_LANG['wbteampro']['js']['deleteConfirm'] = 'הקש OK לאשר בקשתך';
$_LANG['wbteampro']['js']['deletePrompt'] = 'הקש מחק לאשר בקשתך';
$_LANG['wbteampro']['js']['deleteAnswer'] = 'מחק';
$_LANG['wbteampro']['js']['deleteCancelled'] = 'מחיקה בוטלה';
$_LANG['wbteampro']['js']['textLimitRemain'] = '[remain] מ [limit] תווים נשארו';
$_LANG['wbteampro']['js']['textLimitReached'] = 'מקסימום [limit]תווים נשלחו';

$_LANG['wbteampro']['taskheader']['prefix'] = 'הפרוייקטים שלי: ';
$_LANG['wbteampro']['taskheader']['project_action_list'] = 'פעולות בפרוייקט';
$_LANG['wbteampro']['taskheader']['project_ticket_list'] = 'קריאות שירות בפרוייקט';
$_LANG['wbteampro']['taskheader']['project_file_list'] = 'קבצי הפרוייקט';
$_LANG['wbteampro']['taskheader']['project_topic_list'] = 'שיחות בפרוייקט';
$_LANG['wbteampro']['taskheader']['project_list'] = 'כל הפרוייקטים';
$_LANG['wbteampro']['taskheader']['action_list'] = 'כל פעולות הפרוייקטים';
$_LANG['wbteampro']['taskheader']['file_list'] = 'כל קבצי הפרוייקטים';
$_LANG['wbteampro']['taskheader']['topic_list'] = 'כל נושאי הפרוייקטים';
$_LANG['wbteampro']['taskheader']['ticket_list'] = 'כל קריאות השירות';
$_LANG['wbteampro']['taskheader']['dashboard'] = 'לוח פרוייקטים';
$_LANG['wbteampro']['taskheader']['ticket_create'] = 'צור קריאת שירות';

$_LANG['wbteampro']['profiletab']['projects'] = 'פרוייקטים';
$_LANG['wbteampro']['profiletab']['actions'] = 'פעולות';
$_LANG['wbteampro']['profiletab']['timelog'] = 'תיעוד זמנים';
$_LANG['wbteampro']['profiletab']['tickets'] = 'קריאות שירות';

$_LANG['wbteampro']['projecttab']['details'] = 'פרטים';
$_LANG['wbteampro']['projecttab']['actions'] = 'פעולות';
$_LANG['wbteampro']['projecttab']['tickets'] = 'קריאות שירות';
$_LANG['wbteampro']['projecttab']['files'] = 'קבצים';
$_LANG['wbteampro']['projecttab']['filesview'] = 'לצפייה בקובץ';
$_LANG['wbteampro']['projecttab']['topics'] = 'שיחות';
$_LANG['wbteampro']['projecttab']['topicsview'] = 'צפייה בשיחות';

$_LANG['wbteampro']['projectfield']['name'] = 'שם הפרוייקט';
$_LANG['wbteampro']['projectfield']['client'] = 'לקוח';
$_LANG['wbteampro']['projectfield']['type'] = 'סוג';
$_LANG['wbteampro']['projectfield']['contact'] = 'יצירת קשר ';
$_LANG['wbteampro']['projectfield']['status'] = 'סטטוס';
$_LANG['wbteampro']['projectfield']['status'] = 'סטטוס';
$_LANG['wbteampro']['projectfield']['managedby'] = 'מנוהל ע”י';
$_LANG['wbteampro']['projectfield']['visiblestatus'] = 'מצב גלוי';
$_LANG['wbteampro']['projectfield']['assignedto'] = 'הועבר ל';
$_LANG['wbteampro']['projectfield']['datestart'] = 'תאריך התחלה';
$_LANG['wbteampro']['projectfield']['datefinish'] = 'תאריך סיום';
$_LANG['wbteampro']['projectfield']['details'] = 'הערות.פרטים';
$_LANG['wbteampro']['projectfield']['created'] = 'נוצר';
$_LANG['wbteampro']['projectfield']['reviewed'] = 'נבדקו';
$_LANG['wbteampro']['projectfield']['modified'] = 'השתנה';
$_LANG['wbteampro']['projectfield']['completed'] = 'הושלם';
$_LANG['wbteampro']['projectfield']['sfcompleted'] = '%1$s from %2$s Actions, %3$s Milestone, %4$s Group, %5$s Task';

$_LANG['wbteampro']['filelist']['newthread'] = 'שרשור חדש';
$_LANG['wbteampro']['filelist']['deletethread'] = 'מחק שרשור';
$_LANG['wbteampro']['filelist']['by'] = 'ע”י';
$_LANG['wbteampro']['filelist']['on'] = 'על';
$_LANG['wbteampro']['filelist']['expanddetail'] = 'החלף מצב צפיה';
$_LANG['wbteampro']['filefield']['label'] = 'תווית';
$_LANG['wbteampro']['filefield']['version'] = 'גרסה';
$_LANG['wbteampro']['filefield']['file'] = 'קובץ';
$_LANG['wbteampro']['filefield']['mime'] = 'לחקות';
$_LANG['wbteampro']['filefield']['size'] = 'גודל';
$_LANG['wbteampro']['filefield']['detail'] = 'פרט';
$_LANG['wbteampro']['filefield']['upload'] = 'העלה';

$_LANG['wbteampro']['ticketlist']['newticket'] = 'קריאת שירות חדשה';
$_LANG['wbteampro']['ticketfield']['project'] = 'פרוייקט';
$_LANG['wbteampro']['ticketfield']['deptid'] = 'מחלקה';
$_LANG['wbteampro']['ticketfield']['priority'] = 'עדיפות';
$_LANG['wbteampro']['ticketfield']['subject'] = 'נושא';
$_LANG['wbteampro']['ticketfield']['message'] = 'הודעה';
$_LANG['wbteampro']['ticketfield']['attachments'] = 'קישורים';
$_LANG['wbteampro']['ticketfield']['allowedfiletypes'] = 'אפשר סיומות קבצים';

$_LANG['wbteampro']['ticket']['priority']['low'] = 'נמוך';
$_LANG['wbteampro']['ticket']['priority']['medium'] = 'בינוני';
$_LANG['wbteampro']['ticket']['priority']['high'] = 'גבוה';

$_LANG['wbteampro']['topiclist']['newthread'] = 'שרשור חדש';
$_LANG['wbteampro']['topiclist']['deletethread'] = 'מחק שרשור';
$_LANG['wbteampro']['topiclist']['by'] = 'ע”י';
$_LANG['wbteampro']['topiclist']['on'] = 'על';
$_LANG['wbteampro']['topicfield']['title'] = 'כותרת';
$_LANG['wbteampro']['topicfield']['detail'] = 'פרטים';
$_LANG['wbteampro']['topiclist']['expanddetail'] = 'החלף מצב צפייה';

$_LANG['wbteampro']['actionlist']['dispmode'] = 'מצב תצוגה:';
$_LANG['wbteampro']['actionlist']['listview'] = 'צפייה ברשימה';
$_LANG['wbteampro']['actionlist']['treeview'] = 'תצוגת עץ';
$_LANG['wbteampro']['actionlist']['ganttview'] = 'גנט';
$_LANG['wbteampro']['actionlist']['listcollapse'] = 'כווץ צמתים';
$_LANG['wbteampro']['actionlist']['listexpand'] = 'הרחב צומת';
$_LANG['wbteampro']['actionlist']['addchild'] = 'הוסף ילד';
$_LANG['wbteampro']['actionlist']['stoptimer'] = 'עצור שעון עצר';
$_LANG['wbteampro']['actionlist']['starttimer'] = 'התחל שעון עצר';
$_LANG['wbteampro']['actionlist']['viewlog'] = 'צפה בתיעוד';
$_LANG['wbteampro']['actionlist']['delete'] = 'מחק';
$_LANG['wbteampro']['actionlist']['totalcomplete'] = 'פרוייקט הושלם';
$_LANG['wbteampro']['actionlist']['totalelapsed'] = 'סה”כ הושלם';
$_LANG['wbteampro']['actionfield']['name'] = 'שם';
$_LANG['wbteampro']['actionfield']['complete'] = '% הושלמו';
$_LANG['wbteampro']['actionfield']['type'] = 'סוג';
$_LANG['wbteampro']['actionfield']['datestart'] = 'תארך התחלה';
$_LANG['wbteampro']['actionfield']['status'] = 'סטטוס';
$_LANG['wbteampro']['actionfield']['datefinish'] = 'תאריך סיום';
$_LANG['wbteampro']['actionfield']['client'] = 'לקוח';
$_LANG['wbteampro']['actionfield']['managedby'] = 'מנוהל ע”י';
$_LANG['wbteampro']['actionfield']['maincontact'] = 'יצירת קשר ';
$_LANG['wbteampro']['actionfield']['assignedto'] = 'משוייך ל';
$_LANG['wbteampro']['actionfield']['detail'] = 'פרטים';
$_LANG['wbteampro']['actionfield']['created'] = 'יצירה';
$_LANG['wbteampro']['actionfield']['activity'] = 'פעילות';
$_LANG['wbteampro']['actionfield']['modified'] = 'השתנה';
$_LANG['wbteampro']['actionfield']['parentaction'] = 'פעולת הורה';

$_LANG['wbteampro']['timeloglist']['totalelapsed'] = 'סה"כ זמן שחלף';
$_LANG['wbteampro']['timelogfield']['note'] = 'הערה';
$_LANG['wbteampro']['timelogfield']['datestart'] = 'תאריך ההתחלה';
$_LANG['wbteampro']['timelogfield']['datestop'] = 'עצור תאריך';
$_LANG['wbteampro']['timelogfield']['owner'] = 'בעלים';
$_LANG['wbteampro']['timelogfield']['elapsed'] = 'זמן שחלף';

$_LANG['wbteampro']['timelog']['emptynote'] = '~';
$_LANG['wbteampro']['timelog']['status']['active'] = 'פעיל';
$_LANG['wbteampro']['timelog']['status']['complete'] = 'הושלם';
$_LANG['wbteampro']['timelog']['elapsed']['all'] = 'תיעודים בכל הזמנים';
$_LANG['wbteampro']['timelog']['elapsed']['my'] = 'תיעודים שלי';

$_LANG['wbteampro']['filter']['tablabel'] = $_LANG['searchfilter'];
$_LANG['wbteampro']['filter']['any'] = '- Any -';
$_LANG['wbteampro']['filter']['none'] = $_LANG['אף אחד'];
$_LANG['wbteampro']['filter']['search'] = 'חיפוש';
$_LANG['wbteampro']['filter']['owner'] = 'בעלים';
$_LANG['wbteampro']['filter']['project'] = 'פרויקט';
$_LANG['wbteampro']['filter']['status'] = 'מצב';
$_LANG['wbteampro']['filter']['client'] = 'לקוח';
$_LANG['wbteampro']['filter']['department'] = 'מחלקה';
$_LANG['wbteampro']['filter']['manager'] = 'מנהל';
$_LANG['wbteampro']['filter']['assigned'] = 'שוייך';
$_LANG['wbteampro']['filter']['type'] = 'סוג';
$_LANG['wbteampro']['filter']['level'] = 'רמה';
$_LANG['wbteampro']['filter']['flagged'] = 'שוייך לדגל';
$_LANG['wbteampro']['filter']['rangestart'] = 'התחיל אחרי';
$_LANG['wbteampro']['filter']['rangestop'] = 'התחיל לפני';
$_LANG['wbteampro']['filter']['root'] = 'רמה ראשית';
$_LANG['wbteampro']['filter']['reset'] = 'איפוס';

$_LANG['wbteampro']['pagenav']['report'] = '%s '.$_LANG['recordsfound'].', '.$_LANG['page'].' %s '.$_LANG['pageof'].' %s';
$_LANG['wbteampro']['pagenav']['prev'] = '&laquo; '.$_LANG['previouspage'];
$_LANG['wbteampro']['pagenav']['next'] = $_LANG['nextpage'].' &raquo;';
$_LANG['wbteampro']['pagenav']['empty'] = $_LANG['norecordsfound'];
$_LANG['wbteampro']['pagenav']['jumpto'] = 'עבור לעמוד';
$_LANG['wbteampro']['pagenav']['go'] = $_LANG['go'];
$_LANG['wbteampro']['pagenav']['export'] = 'ייצוא';

$_LANG['wbteampro']['formnav']['edit'] = 'ערוך';
$_LANG['wbteampro']['formnav']['save'] = 'שמור';
$_LANG['wbteampro']['formnav']['apply'] = 'החל';
$_LANG['wbteampro']['formnav']['close'] = 'סגור';
$_LANG['wbteampro']['formnav']['cancel'] = 'בטל';
$_LANG['wbteampro']['formnav']['delete'] = 'מחק';
$_LANG['wbteampro']['formnav']['download'] = 'הורד';
$_LANG['wbteampro']['formnav']['timestart'] = 'הפעל שעון עצר';
$_LANG['wbteampro']['formnav']['timestop'] = 'עצור שעון עצר';

$_LANG['wbteampro']['dashhead']['viewall'] = 'צפה בכל';
$_LANG['wbteampro']['dashhead']['topProjects'] = 'פרוייקטים בעלי פעולות לאחרונה';
$_LANG['wbteampro']['dashhead']['topActions'] = 'פעולות דחופות';
$_LANG['wbteampro']['dashhead']['topTimelog'] = 'תיעודי זמנים אחרונים';
$_LANG['wbteampro']['dashhead']['topTickets'] = 'פעילות בקריאת השירות של הפרוייקט';
$_LANG['wbteampro']['dashhead']['topTopics'] = 'פעילות בנושא הפרוייקט';
$_LANG['wbteampro']['dashhead']['topFiles'] = 'פעילות בקבצי הפרוייקט';

$_LANG['wbteampro']['listhead']['project_name'] = 'שם הפרוייקט';
$_LANG['wbteampro']['listhead']['project_type'] = 'סוג';
$_LANG['wbteampro']['listhead']['project_status'] = 'סטטוס';
$_LANG['wbteampro']['listhead']['project_complete'] = '%';
$_LANG['wbteampro']['listhead']['project_tasks'] = '#';

$_LANG['wbteampro']['listhead']['date_created'] = 'נוצר';
$_LANG['wbteampro']['listhead']['date_modified'] = 'שונה';
$_LANG['wbteampro']['listhead']['date_activity'] = 'פעילות';
$_LANG['wbteampro']['listhead']['date_start'] = 'התחל';
$_LANG['wbteampro']['listhead']['date_finish'] = 'חוב';

$_LANG['wbteampro']['listhead']['client_userid'] = 'לקוח';
$_LANG['wbteampro']['listhead']['owner_adminid'] = 'בעלים';
$_LANG['wbteampro']['listhead']['manager_adminid'] = ' מנהל';
$_LANG['wbteampro']['listhead']['assigned_adminid'] = 'שוייך ל';

$_LANG['wbteampro']['listhead']['action_name'] = 'שם הפעולה';
$_LANG['wbteampro']['listhead']['action_type'] = 'סוג';
$_LANG['wbteampro']['listhead']['action_status'] = 'סטטוס';
$_LANG['wbteampro']['listhead']['action_complete'] = '%';
$_LANG['wbteampro']['listhead']['action_elapsed'] = 'עבר';
$_LANG['wbteampro']['listhead']['annual_activity'] = 'פעילות שנתית';

$_LANG['wbteampro']['listhead']['timelog_note'] = 'הערת תיעוד זמנים';
$_LANG['wbteampro']['listhead']['timelog_elapsed'] = 'עבר';
$_LANG['wbteampro']['listhead']['timelog_start'] = 'התחיל';
$_LANG['wbteampro']['listhead']['timelog_status'] = 'סטטוס';

$_LANG['wbteampro']['listhead']['topic_name'] = 'שיחת שרשור';
$_LANG['wbteampro']['listhead']['topic_activity'] = ' פעילות';
$_LANG['wbteampro']['listhead']['topic_posts'] = 'הודעות';

$_LANG['wbteampro']['listhead']['ticket_title'] = 'כותרת הפנייה';
$_LANG['wbteampro']['listhead']['ticket_lastreply'] = 'פעילות';
$_LANG['wbteampro']['listhead']['ticket_date'] = 'שלח';
$_LANG['wbteampro']['listhead']['ticket_submitter'] = 'מוסר';
$_LANG['wbteampro']['listhead']['ticket_department'] = 'מחלקה';
$_LANG['wbteampro']['listhead']['ticket_status'] = 'סטטוס';
$_LANG['wbteampro']['listhead']['ticket_urgency'] = 'דחיפות';

$_LANG['wbteampro']['listhead']['file_label'] = 'קובץ שרשור';
$_LANG['wbteampro']['listhead']['file_latest'] = 'קובץ אחרון';
$_LANG['wbteampro']['listhead']['file_total'] = 'קבצים';

$_LANG['wbteampro']['breadcrumb']['wbteampro'] = 'הפרוייקטים שלי';
$_LANG['wbteampro']['breadcrumb']['project_list'] = 'רשימת פרוייקטים';
$_LANG['wbteampro']['breadcrumb']['action_list'] = 'רשימת פעולות';
$_LANG['wbteampro']['breadcrumb']['file_list'] = 'רשימת קבצים';
$_LANG['wbteampro']['breadcrumb']['topic_list'] = 'רשימת נושאים';


?>