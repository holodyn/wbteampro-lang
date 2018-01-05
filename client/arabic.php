<?php

/**

  Webuddha wbTeamPro
  (c)2010 Webuddha.com, The Holodyn Corporation - All Rights Reserved

  CHANGELOG ************

**/

defined('WHMCS_CLIENT') or die('Invalid Access');

/************************************** Menu */
$_LANG['wbteampro_tab'] = 'My Projects';

/************************************** Errors */
$_LANG['wbteampro']['error']['default_label'] = 'رسالة خطأ';
$_LANG['wbteampro']['error']['license_error'] = ' خطأ: أخفق تفويض الترخيص';
$_LANG['wbteampro']['error']['license_invalid'] = 'wbTeamPro Error: Invalid License Key';
$_LANG['wbteampro']['error']['license_expired'] = ' خطأ: انتهت صلاحية مفتاح الترخيص';
$_LANG['wbteampro']['error']['license_suspended'] = 'خطأ: تم تعليق مفتاح الترخيص';
$_LANG['wbteampro']['error']['permissiondenied'] = 'خطأ: تم رفض الإذن';
$_LANG['wbteampro']['error']['view_layout_not_found'] = 'خطأ: لم يتم العثور على التنسيق (٪ s)';

/************************************** Errors */
$_LANG['wbteampro']['alert']['default_label'] = 'رسالة تنبيه';

/************************************** Notices */
$_LANG['wbteampro']['notice']['default_label'] = 'اشعار رسالة';
$_LANG['wbteampro']['notice']['noprojects'] = '<b>لا يوجد مشاريع نشطة!</b><br>لا يوجد مشاريع نشطة للعرض ';
$_LANG['wbteampro']['notice']['file_closed'] = '<b>ملف الموضوع مغلق</b><br>هذا الموضوع مغلق ولا يمكن تعديله.';
$_LANG['wbteampro']['notice']['topic_closed'] = '<b>مناقشة الموضوع مغلقة</b><br>هذا الموضوع مغلق ولا يمكن تعديله.';
$_LANG['wbteampro']['notice']['ticket_created'] = '<b>تذكرة #%s انشاء</b><br>تم إنشاء تذكرتك بنجاح.';
$_LANG['wbteampro']['notice']['deprecated'] = '<b>عملية موقوفة</b><br>لن يكون الطلب الذي قدمته متاحا في الإصدارات المستقبلية.';

/************************************** JS */
$_LANG['wbteampro']['js']['tabProject'] = 'مشروع';
$_LANG['wbteampro']['js']['tabProjects'] = 'مشاريع';
$_LANG['wbteampro']['js']['tabTickets'] = 'Tickets';
$_LANG['wbteampro']['js']['loadMsg'] = 'تحميل... الرجاء الانتظار...';
$_LANG['wbteampro']['js']['noActiveLogs'] = 'لا توجد سجلات زمنية نشطة';
$_LANG['wbteampro']['js']['uiTimelogStart'] = 'ابدأ';
$_LANG['wbteampro']['js']['uiTimelogSave'] = 'حفظ';
$_LANG['wbteampro']['js']['uiTimelogCancel'] = 'الغاء';
$_LANG['wbteampro']['js']['btnStopTimer'] = 'ايقاف المؤقت';
$_LANG['wbteampro']['js']['btnStartTimer'] = 'ابدأ المؤقت';
$_LANG['wbteampro']['js']['msgTimelogSaved'] = 'تم حفظ سجل الوقت [time]';
$_LANG['wbteampro']['js']['msgTimelogStopped'] = 'سجل الوقت توقف بعد [time]';
$_LANG['wbteampro']['js']['deleteConfirm'] = 'انقر على موافق لتأكيد الإجراء';
$_LANG['wbteampro']['js']['deletePrompt'] = 'اكتب DELETE لتاكيد طلبك';
$_LANG['wbteampro']['js']['deleteAnswer'] = 'DELETE';
$_LANG['wbteampro']['js']['deleteCancelled'] = 'تم إلغاء الحذف';
$_LANG['wbteampro']['js']['textLimitRemain'] = '[remain] من [limit] الاحرف المتبقية';
$_LANG['wbteampro']['js']['textLimitReached'] = 'الحد الاعلى [limit] تم الوصول إلى الأحرف';

/************************************** Page Headers */
$_LANG['wbteampro']['taskheader']['prefix'] = 'مشروعي: ';
$_LANG['wbteampro']['taskheader']['project_action_list'] = 'إجراءات المشروع';
$_LANG['wbteampro']['taskheader']['project_ticket_list'] = 'تذاكر المشروع';
$_LANG['wbteampro']['taskheader']['project_file_list'] = 'ملفات المشروع';
$_LANG['wbteampro']['taskheader']['project_topic_list'] = 'مناقشات المشروع';
$_LANG['wbteampro']['taskheader']['project_list'] = 'كافة المشاريع';
$_LANG['wbteampro']['taskheader']['action_list'] = 'إجراءات كافة المشاريع';
$_LANG['wbteampro']['taskheader']['file_list'] = 'ملفات كافة المشاريع';
$_LANG['wbteampro']['taskheader']['topic_list'] = 'جميع موضوعات المشروع';
$_LANG['wbteampro']['taskheader']['ticket_list'] = 'جميع تذاكر المشروع';
$_LANG['wbteampro']['taskheader']['dashboard'] = 'لوحة تحكم المشروع';
$_LANG['wbteampro']['taskheader']['ticket_create'] = 'إنشاء تذكرة جديدة';

/************************************** Client Profile Tabs */
$_LANG['wbteampro']['profiletab']['projects'] = 'المشاريع';
$_LANG['wbteampro']['profiletab']['actions'] = 'الإجراءات';
$_LANG['wbteampro']['profiletab']['timelog'] = 'سجل الوقت';
$_LANG['wbteampro']['profiletab']['tickets'] = 'تذاكر';

/************************************** Project Tabs */
$_LANG['wbteampro']['projecttab']['details'] = 'التفاصيل';
$_LANG['wbteampro']['projecttab']['actions'] = 'إجراءات';
$_LANG['wbteampro']['projecttab']['tickets'] = 'تذاكر';
$_LANG['wbteampro']['projecttab']['files'] = 'ملفات';
$_LANG['wbteampro']['projecttab']['filesview'] = 'عرض الملف';
$_LANG['wbteampro']['projecttab']['topics'] = 'مناقشات';
$_LANG['wbteampro']['projecttab']['topicsview'] = 'عرض المناقشات';

/************************************** Project Fields */
$_LANG['wbteampro']['projectfield']['name'] = 'اسم المشروع';
$_LANG['wbteampro']['projectfield']['client'] = 'العميل';
$_LANG['wbteampro']['projectfield']['type'] = 'النوع';
$_LANG['wbteampro']['projectfield']['contact'] = 'جهة اتصال العميل';
$_LANG['wbteampro']['projectfield']['status'] = 'الحالة';
$_LANG['wbteampro']['projectfield']['status'] = 'الحالة';
$_LANG['wbteampro']['projectfield']['managedby'] = 'اديرت من قبل';
$_LANG['wbteampro']['projectfield']['visiblestatus'] = 'الحالة الظاهرة';
$_LANG['wbteampro']['projectfield']['assignedto'] = 'مخصص ل';
$_LANG['wbteampro']['projectfield']['datestart'] = 'تاريخ البدء';
$_LANG['wbteampro']['projectfield']['datefinish'] = 'تاريخ الإنتهاء';
$_LANG['wbteampro']['projectfield']['details'] = 'ملاحظات / تفاصيل';
$_LANG['wbteampro']['projectfield']['created'] = 'تم الإنشاء';
$_LANG['wbteampro']['projectfield']['reviewed'] = 'تمت المراجعة';
$_LANG['wbteampro']['projectfield']['modified'] = 'تم التعديل';
$_LANG['wbteampro']['projectfield']['completed'] = 'اكتمل';
$_LANG['wbteampro']['projectfield']['sfcompleted'] = '%1$s من %2$s الإجراءات, %3$s حدث اساسي, %4$s مجموعة, %5$s مهمة';

/************************************** File Fields */
$_LANG['wbteampro']['filelist']['newthread'] = 'موضوع جديد';
$_LANG['wbteampro']['filelist']['deletethread'] = 'خذف موضوغ';
$_LANG['wbteampro']['filelist']['by'] = 'بواسطة';
$_LANG['wbteampro']['filelist']['on'] = 'على';
$_LANG['wbteampro']['filelist']['expanddetail'] = 'تبديل العرض';
$_LANG['wbteampro']['filefield']['label'] = 'ملصق';
$_LANG['wbteampro']['filefield']['version'] = 'Ver';
$_LANG['wbteampro']['filefield']['file'] = 'ملف';
$_LANG['wbteampro']['filefield']['mime'] = 'امتداد';
$_LANG['wbteampro']['filefield']['size'] = 'حجم';
$_LANG['wbteampro']['filefield']['detail'] = 'وصف';
$_LANG['wbteampro']['filefield']['upload'] = 'رفع';

/************************************** Ticket Fields */
$_LANG['wbteampro']['ticketlist']['newticket'] = 'تذكرة جديدة';
$_LANG['wbteampro']['ticketfield']['project'] = 'مشروع';
$_LANG['wbteampro']['ticketfield']['deptid'] = 'قسم';
$_LANG['wbteampro']['ticketfield']['priority'] = 'اولوية';
$_LANG['wbteampro']['ticketfield']['subject'] = 'موضوع';
$_LANG['wbteampro']['ticketfield']['message'] = 'رسالة';
$_LANG['wbteampro']['ticketfield']['attachments'] = 'مرفقات';
$_LANG['wbteampro']['ticketfield']['allowedfiletypes'] = 'إضافات الملفات المسموح بها';

/************************************** Ticket Priority */
$_LANG['wbteampro']['ticket']['priority']['low'] = 'منخض';
$_LANG['wbteampro']['ticket']['priority']['medium'] = 'متوسط';
$_LANG['wbteampro']['ticket']['priority']['high'] = 'عالي';

/************************************** Topic Fields */
$_LANG['wbteampro']['topiclist']['newthread'] = 'موضوع جديد';
$_LANG['wbteampro']['topiclist']['deletethread'] = 'حذف الموضوع';
$_LANG['wbteampro']['topiclist']['by'] = 'بواسطة';
$_LANG['wbteampro']['topiclist']['on'] = 'على';
$_LANG['wbteampro']['topicfield']['title'] = 'العنوان';
$_LANG['wbteampro']['topicfield']['detail'] = 'وصف';
$_LANG['wbteampro']['topiclist']['expanddetail'] = 'تبديل العرض';

/************************************** Action Fields */
$_LANG['wbteampro']['actionlist']['dispmode'] = 'وضع العرض:';
$_LANG['wbteampro']['actionlist']['listview'] = 'قائمة العرض';
$_LANG['wbteampro']['actionlist']['treeview'] = 'عرض شجري';
$_LANG['wbteampro']['actionlist']['ganttview'] = 'عرض جانت';
$_LANG['wbteampro']['actionlist']['listcollapse'] = 'اغلاق الجميع
';
$_LANG['wbteampro']['actionlist']['listexpand'] = 'فتح الجميع';
$_LANG['wbteampro']['actionlist']['addchild'] = 'اضافه عنصر فرعي';
$_LANG['wbteampro']['actionlist']['stoptimer'] = 'ايقاف المؤقت';
$_LANG['wbteampro']['actionlist']['starttimer'] = 'بدء المؤقت';
$_LANG['wbteampro']['actionlist']['viewlog'] = 'عرض السجل';
$_LANG['wbteampro']['actionlist']['delete'] = 'حذف';
$_LANG['wbteampro']['actionlist']['totalcomplete'] = 'اكتمل المشروع';
$_LANG['wbteampro']['actionlist']['totalelapsed'] = 'المجموع المنقضي';
$_LANG['wbteampro']['actionfield']['name'] = 'الاسم';
$_LANG['wbteampro']['actionfield']['complete'] = '% اكتمل';
$_LANG['wbteampro']['actionfield']['type'] = 'النوع';
$_LANG['wbteampro']['actionfield']['datestart'] = 'تاريخ البدء';
$_LANG['wbteampro']['actionfield']['status'] = 'الحالة';
$_LANG['wbteampro']['actionfield']['datefinish'] = 'تاريخ الإنتهاء';
$_LANG['wbteampro']['actionfield']['client'] = 'العميل';
$_LANG['wbteampro']['actionfield']['managedby'] = 'اديرت بواسطة';
$_LANG['wbteampro']['actionfield']['maincontact'] = 'جهة الاتصال الرئيسية';
$_LANG['wbteampro']['actionfield']['assignedto'] = 'مخصص ل';
$_LANG['wbteampro']['actionfield']['detail'] = 'وصف';
$_LANG['wbteampro']['actionfield']['created'] = 'تم الإنشاء';
$_LANG['wbteampro']['actionfield']['activity'] = 'النشاط';
$_LANG['wbteampro']['actionfield']['modified'] = 'تم التعديل';
$_LANG['wbteampro']['actionfield']['parentaction'] = 'اجراء العنصر الاساسي';

/************************************** Timelog Fields */
$_LANG['wbteampro']['timeloglist']['totalelapsed'] = 'المجموع المنقضي';
$_LANG['wbteampro']['timelogfield']['note'] = 'ملاحظة';
$_LANG['wbteampro']['timelogfield']['datestart'] = 'تاريخ البدء';
$_LANG['wbteampro']['timelogfield']['datestop'] = 'تاريخ التوقف';
$_LANG['wbteampro']['timelogfield']['owner'] = 'المالك';
$_LANG['wbteampro']['timelogfield']['elapsed'] = 'الوقت المنقضي';

/************************************** Timelog */
$_LANG['wbteampro']['timelog']['emptynote'] = '~';
$_LANG['wbteampro']['timelog']['status']['active'] = 'نشطة';
$_LANG['wbteampro']['timelog']['status']['complete'] = 'اكتمل';
$_LANG['wbteampro']['timelog']['elapsed']['all'] = 'كل الوقت المسجل';
$_LANG['wbteampro']['timelog']['elapsed']['my'] = 'سجل الوقت الخاص';

/************************************** Page/List Navigation */
$_LANG['wbteampro']['filter']['tablabel'] = $_LANG['searchfilter'];
$_LANG['wbteampro']['filter']['any'] = '- Any -';
$_LANG['wbteampro']['filter']['none'] = $_LANG['none'];
$_LANG['wbteampro']['filter']['search'] = 'بحث';
$_LANG['wbteampro']['filter']['owner'] = 'المالك';
$_LANG['wbteampro']['filter']['project'] = 'المشروع';
$_LANG['wbteampro']['filter']['status'] = 'الحالة';
$_LANG['wbteampro']['filter']['client'] = 'العميل';
$_LANG['wbteampro']['filter']['department'] = 'قسم';
$_LANG['wbteampro']['filter']['manager'] = 'مدير';
$_LANG['wbteampro']['filter']['assigned'] = 'مسجل';
$_LANG['wbteampro']['filter']['type'] = 'نوع';
$_LANG['wbteampro']['filter']['level'] = 'مستوى';
$_LANG['wbteampro']['filter']['flagged'] = 'اشارة';
$_LANG['wbteampro']['filter']['rangestart'] = 'بدء بعد';
$_LANG['wbteampro']['filter']['rangestop'] = 'بدء قبل';
$_LANG['wbteampro']['filter']['root'] = 'المستوى الاساسي';
$_LANG['wbteampro']['filter']['reset'] = 'إعادة تعيين';

/************************************** Page/List Navigation */
$_LANG['wbteampro']['pagenav']['report'] = '%s '.$_LANG['recordsfound'].', '.$_LANG['page'].' %s '.$_LANG['pageof'].' %s';
$_LANG['wbteampro']['pagenav']['prev'] = '&laquo; '.$_LANG['previouspage'];
$_LANG['wbteampro']['pagenav']['next'] = $_LANG['nextpage'].' &raquo;';
$_LANG['wbteampro']['pagenav']['empty'] = $_LANG['norecordsfound'];
$_LANG['wbteampro']['pagenav']['jumpto'] = 'اذهب اللصفحة';
$_LANG['wbteampro']['pagenav']['limit'] = 'حد';
$_LANG['wbteampro']['pagenav']['go'] = $_LANG['اذهب'];
$_LANG['wbteampro']['pagenav']['export'] = 'تصدير';
$_LANG['wbteampro']['pagenav']['print'] = 'اطبع';
$_LANG['wbteampro']['pagenav']['orderby'] = 'طلب بواسطة %1$s'; // %1$s = حقل, %2$s = اتجاه

/************************************** Form Button Labels */
$_LANG['wbteampro']['formnav']['edit'] = 'تعديل';
$_LANG['wbteampro']['formnav']['save'] = 'حفظ';
$_LANG['wbteampro']['formnav']['apply'] = 'تطبيق';
$_LANG['wbteampro']['formnav']['close'] = 'اغلاق';
$_LANG['wbteampro']['formnav']['cancel'] = 'الغاء';
$_LANG['wbteampro']['formnav']['delete'] = 'حذف';
$_LANG['wbteampro']['formnav']['download'] = 'تنزيل';
$_LANG['wbteampro']['formnav']['timestart'] = 'بدء المؤقت';
$_LANG['wbteampro']['formnav']['timestop'] = 'ايقاف المؤقت';

/************************************** Dashboard Blocks */
$_LANG['wbteampro']['dashhead']['viewall'] = 'عرض الكل';
$_LANG['wbteampro']['dashhead']['topProjects'] = 'المشاريع النشيطة حديثا';
$_LANG['wbteampro']['dashhead']['topActions'] = 'الانشطة الاكثر اهمية';
$_LANG['wbteampro']['dashhead']['topTimelog'] = 'آخر نشاط سجل الوقت';
$_LANG['wbteampro']['dashhead']['topTickets'] = 'نشاط مشروع التذكرة';
$_LANG['wbteampro']['dashhead']['topTopics'] = 'نشاط موضوع المشروع';
$_LANG['wbteampro']['dashhead']['topFiles'] = 'نشاط ملف المشروع';

/************************************** List Table Headers */
$_LANG['wbteampro']['listhead']['project_name'] = 'اسم المشروع';
$_LANG['wbteampro']['listhead']['project_type'] = 'النوع';
$_LANG['wbteampro']['listhead']['project_status'] = 'الحالة';
$_LANG['wbteampro']['listhead']['project_complete'] = '%';
$_LANG['wbteampro']['listhead']['project_tasks'] = '#';
$_LANG['wbteampro']['listhead']['date_created'] = 'تم الإنشاء';
$_LANG['wbteampro']['listhead']['date_modified'] = 'تم التعديل';
$_LANG['wbteampro']['listhead']['date_activity'] = 'النشاط';
$_LANG['wbteampro']['listhead']['date_start'] = 'بدء';
$_LANG['wbteampro']['listhead']['date_finish'] = 'يستحق';
$_LANG['wbteampro']['listhead']['client_userid'] = 'العميل';
$_LANG['wbteampro']['listhead']['owner_adminid'] = 'المالك';
$_LANG['wbteampro']['listhead']['manager_adminid'] = 'مدير';
$_LANG['wbteampro']['listhead']['assigned_adminid'] = 'تعيين';
$_LANG['wbteampro']['listhead']['action_name'] = 'اسم النشاط';
$_LANG['wbteampro']['listhead']['action_type'] = 'النوع';
$_LANG['wbteampro']['listhead']['action_status'] = 'الحالة';
$_LANG['wbteampro']['listhead']['action_complete'] = '%';
$_LANG['wbteampro']['listhead']['action_elapsed'] = 'منقضي';
$_LANG['wbteampro']['listhead']['annual_activity'] = 'النشاط السنوي';
$_LANG['wbteampro']['listhead']['timelog_note'] = 'ملاحظات سجل الوقت';
$_LANG['wbteampro']['listhead']['timelog_elapsed'] = 'منقضي';
$_LANG['wbteampro']['listhead']['timelog_start'] = 'تم البدء';
$_LANG['wbteampro']['listhead']['timelog_status'] = 'الحالة';
$_LANG['wbteampro']['listhead']['topic_name'] = 'موضوع النقاش';
$_LANG['wbteampro']['listhead']['topic_activity'] = 'النشاط';
$_LANG['wbteampro']['listhead']['topic_posts'] = 'المنشورات';
$_LANG['wbteampro']['listhead']['ticket_title'] = 'عنوان التذكرة';
$_LANG['wbteampro']['listhead']['ticket_lastreply'] = 'النشاط';
$_LANG['wbteampro']['listhead']['ticket_date'] = 'تم التقديم';
$_LANG['wbteampro']['listhead']['ticket_submitter'] = 'المقدم';
$_LANG['wbteampro']['listhead']['ticket_department'] = 'قسم';
$_LANG['wbteampro']['listhead']['ticket_status'] = 'الحالة';
$_LANG['wbteampro']['listhead']['ticket_urgency'] = 'ملح';
$_LANG['wbteampro']['listhead']['file_label'] = 'موضوع الملف';
$_LANG['wbteampro']['listhead']['file_latest'] = 'اخر ملف';
$_LANG['wbteampro']['listhead']['file_total'] = 'ملفات';

/************************************** Navigation Breadcrumbs */
$_LANG['wbteampro']['breadcrumb']['wbteampro'] = 'مشروعي';
$_LANG['wbteampro']['breadcrumb']['project_list'] = 'قائمة المشاريع';
$_LANG['wbteampro']['breadcrumb']['action_list'] = 'قائمة النشاطات';
$_LANG['wbteampro']['breadcrumb']['file_list'] = 'قائمة الملفات';
$_LANG['wbteampro']['breadcrumb']['topic_list'] = 'قائمة المواضيع';

/************************************** Dynamic Select List Options */
$_LANG['wbteampro']['listoption']['project_type']['internal'] = 'داخلي';
$_LANG['wbteampro']['listoption']['project_type']['product'] = 'منتج';
$_LANG['wbteampro']['listoption']['project_type']['service'] = 'خدمة';
$_LANG['wbteampro']['listoption']['project_status']['service'] = 'خدمة';
$_LANG['wbteampro']['listoption']['project_status']['under_review'] = 'قيد المراجعة';
$_LANG['wbteampro']['listoption']['project_status']['active'] = 'نشط';
$_LANG['wbteampro']['listoption']['project_status']['in_production'] = 'قيد الانتاج';
$_LANG['wbteampro']['listoption']['project_status']['in_testing'] = 'قيد الاختبار';
$_LANG['wbteampro']['listoption']['project_status']['completed'] = 'اكتمل';
$_LANG['wbteampro']['listoption']['project_status']['closed'] = 'تم الاغلاق';
$_LANG['wbteampro']['listoption']['action_type']['planning'] = 'قيد التخطيط';
$_LANG['wbteampro']['listoption']['action_type']['research'] = 'ابحاث';
$_LANG['wbteampro']['listoption']['action_type']['contact'] = 'جهة اتصال';
$_LANG['wbteampro']['listoption']['action_type']['service'] = 'خدمة';
$_LANG['wbteampro']['listoption']['action_type']['development'] = 'تطوير';
$_LANG['wbteampro']['listoption']['action_type']['review'] = 'مراجعة';
$_LANG['wbteampro']['listoption']['action_status']['closed'] = 'تم الاغلاق';
$_LANG['wbteampro']['listoption']['action_status']['active'] = 'نشط';
$_LANG['wbteampro']['listoption']['action_status']['progress'] = 'التقدم';
$_LANG['wbteampro']['listoption']['action_status']['cancelled'] = 'تم الالغاء';
$_LANG['wbteampro']['listoption']['action_status']['complete'] = 'اكتمل';

/** END LANGUAGE **/

/** By Zain Alqaisi  */