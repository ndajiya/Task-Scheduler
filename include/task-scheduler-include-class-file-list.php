<?php 
/**
	Task Scheduler - PHP Class Inclusion Script v1.0.0b11 by miunosoft (Michael Uno) 
	Generated by the PHP Class Inclusion Script Creator
	<http://en.michaeluno.jp/>
	Copyright (c) 2014, Michael Uno; Licensed under GPL v2 or later */
$_aClassFiles = array( 
	"TaskScheduler_AutoLoad"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/boot/TaskScheduler_AutoLoad.php", 
	"TaskScheduler_Bootstrap"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/boot/TaskScheduler_Bootstrap.php", 
	"TaskScheduler_Requirements"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/boot/TaskScheduler_Requirements.php", 
	"TaskScheduler_Debug"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/boot/utility/TaskScheduler_Debug.php", 
	"TaskScheduler_Utility"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/boot/utility/TaskScheduler_Utility.php", 
	"TaskScheduler_WPUtility"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/boot/utility/TaskScheduler_WPUtility.php", 
	"TaskScheduler_WPUtility_Post"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/boot/utility/TaskScheduler_WPUtility_Post.php", 
	"TaskScheduler_Event"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/event/TaskScheduler_Event.php", 
	"TaskScheduler_Event_Exit"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/event/TaskScheduler_Event_Exit.php", 
	"TaskScheduler_Event_Log"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/event/TaskScheduler_Event_Log.php", 
	"TaskScheduler_Event_Routine"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/event/TaskScheduler_Event_Routine.php", 
	"TaskScheduler_Event_Thread"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/event/TaskScheduler_Event_Thread.php", 
	"TaskScheduler_Event_ServerHeartbeat_Checker"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/event/server-heartbeat/TaskScheduler_Event_ServerHeartbeat_Checker.php", 
	"TaskScheduler_Event_ServerHeartbeat_Loader"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/event/server-heartbeat/TaskScheduler_Event_ServerHeartbeat_Loader.php", 
	"TaskScheduler_Event_ServerHeartbeat_Option"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/event/server-heartbeat/TaskScheduler_Event_ServerHeartbeat_Option.php", 
	"TaskScheduler_Event_ServerHeartbeat_Resumer"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/event/server-heartbeat/TaskScheduler_Event_ServerHeartbeat_Resumer.php", 
	"TaskScheduler_ServerHeartbeat"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/event/server-heartbeat/TaskScheduler_ServerHeartbeat.php", 
	"TaskScheduler_Module_Factory"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/module/TaskScheduler_Module_Factory.php", 
	"TaskScheduler_Wizard_Base"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/module/TaskScheduler_Wizard_Base.php", 
	"TaskScheduler_Action_Base"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/module/action/TaskScheduler_Action_Base.php", 
	"TaskScheduler_Wizard_Action_Base"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/module/action/TaskScheduler_Wizard_Action_Base.php", 
	"TaskScheduler_Action_Debug"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/module/action/debug/TaskScheduler_Action_Debug.php", 
	"TaskScheduler_Action_Debug_Wizard"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/module/action/debug/admin/TaskScheduler_Action_Debug_Wizard.php", 
	"TaskScheduler_Action_Email"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/module/action/email/TaskScheduler_Action_Email.php", 
	"TaskScheduler_Action_Email_Thread"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/module/action/email/TaskScheduler_Action_Email_Thread.php", 
	"TaskScheduler_Action_Email_Wizard"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/module/action/email/admin/TaskScheduler_Action_Email_Wizard.php", 
	"TaskScheduler_Action_PostDeleter"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/module/action/post_deleter/TaskScheduler_Action_PostDeleter.php", 
	"TaskScheduler_Action_PostDeleter_Thread"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/module/action/post_deleter/TaskScheduler_Action_PostDeleter_Thread.php", 
	"TaskScheduler_Action_PostDeleter_Wizard"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/module/action/post_deleter/admin/TaskScheduler_Action_PostDeleter_Wizard.php", 
	"TaskScheduler_Action_PostDeleter_Wizard_2"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/module/action/post_deleter/admin/TaskScheduler_Action_PostDeleter_Wizard_2.php", 
	"TaskScheduler_Action_PostDeleter_Wizard_3"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/module/action/post_deleter/admin/TaskScheduler_Action_PostDeleter_Wizard_3.php", 
	"TaskScheduler_Action_HungRoutineHandler_Thread"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/module/action/_hung_routine_handler/TaskScheduler_Action_HungRoutineHandler_Thread.php", 
	"TaskScheduler_Action_RoutineLogDeleter"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/module/action/_routine_log_deleter/TaskScheduler_Action_RoutineLogDeleter.php", 
	"TaskScheduler_Action_RoutineLogDeleter_Thread"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/module/action/_routine_log_deleter/TaskScheduler_Action_RoutineLogDeleter_Thread.php", 
	"TaskScheduler_Occurrence_Base"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/module/occurrence/TaskScheduler_Occurrence_Base.php", 
	"TaskScheduler_Wizard_Occurrence_Base"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/module/occurrence/TaskScheduler_Wizard_Occurrence_Base.php", 
	"TaskScheduler_Occurrence_Constant"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/module/occurrence/constant/TaskScheduler_Occurrence_Constant.php", 
	"TaskScheduler_Occurrence_ExitCode"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/module/occurrence/exit_code/TaskScheduler_Occurrence_ExitCode.php", 
	"TaskScheduler_Occurrence_ExitCode_Wizard"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/module/occurrence/exit_code/admin/TaskScheduler_Occurrence_ExitCode_Wizard.php", 
	"TaskScheduler_Occurrence_FixedInterval"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/module/occurrence/fixed_interval/TaskScheduler_Occurrence_FixedInterval.php", 
	"TaskScheduler_Occurrence_FixedInterval_Wizard"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/module/occurrence/fixed_interval/admin/TaskScheduler_Occurrence_FixedInterval_Wizard.php", 
	"TaskScheduler_Occurrence_SpecificTime"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/module/occurrence/specific_time/TaskScheduler_Occurrence_SpecificTime.php", 
	"TaskScheduler_Occurrence_SpecificTime_Wizard"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/module/occurrence/specific_time/admin/TaskScheduler_Occurrence_SpecificTime_Wizard.php", 
	"TaskScheduler_Occurrence_Volatile"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/module/occurrence/volatile/TaskScheduler_Occurrence_Volatile.php", 
	"TaskScheduler_Log"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/object/log/TaskScheduler_Log.php", 
	"TaskScheduler_Routine"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/object/routine/TaskScheduler_Routine.php", 
	"TaskScheduler_Routine_Base"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/object/routine/TaskScheduler_Routine_Base.php", 
	"TaskScheduler_Routine_Log"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/object/routine/TaskScheduler_Routine_Log.php", 
	"TaskScheduler_Routine_Meta"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/object/routine/TaskScheduler_Routine_Meta.php", 
	"TaskScheduler_Routine_Option"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/object/routine/TaskScheduler_Routine_Option.php", 
	"TaskScheduler_Routine_Taxonomy"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/object/routine/TaskScheduler_Routine_Taxonomy.php", 
	"TaskScheduler_Routine_Thread"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/object/routine/TaskScheduler_Routine_Thread.php", 
	"TaskScheduler_Option"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/option/TaskScheduler_Option.php", 
	"TaskScheduler_PostType_Log"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/post_type/log/TaskScheduler_PostType_Log.php", 
	"TaskScheduler_PostType_Log_Base"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/post_type/log/TaskScheduler_PostType_Log_Base.php", 
	"TaskScheduler_PostType_Routine"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/post_type/routine/TaskScheduler_PostType_Routine.php", 
	"TaskScheduler_PostType_Task"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/post_type/task/TaskScheduler_PostType_Task.php", 
	"TaskScheduler_PostType_Task_Base"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/post_type/task/TaskScheduler_PostType_Task_Base.php", 
	"TaskScheduler_PostType_Thread"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/post_type/thread/TaskScheduler_PostType_Thread.php", 
	"TaskScheduler_PluginUtility"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/utility/TaskScheduler_PluginUtility.php", 
	"TaskScheduler_LogUtility"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/utility/log/TaskScheduler_LogUtility.php", 
	"TaskScheduler_LogUtility_Add"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/utility/log/TaskScheduler_LogUtility_Add.php", 
	"TaskScheduler_LogUtility_Base"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/utility/log/TaskScheduler_LogUtility_Base.php", 
	"TaskScheduler_LogUtility_Get"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/utility/log/TaskScheduler_LogUtility_Get.php", 
	"TaskScheduler_RoutineUtility"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/utility/routine/TaskScheduler_RoutineUtility.php", 
	"TaskScheduler_RoutineUtility_Add"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/utility/routine/TaskScheduler_RoutineUtility_Add.php", 
	"TaskScheduler_RoutineUtility_Base"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/utility/routine/TaskScheduler_RoutineUtility_Base.php", 
	"TaskScheduler_RoutineUtility_Edit"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/utility/routine/TaskScheduler_RoutineUtility_Edit.php", 
	"TaskScheduler_RoutineUtility_Get"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/utility/routine/TaskScheduler_RoutineUtility_Get.php", 
	"TaskScheduler_TaskUtility"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/utility/task/TaskScheduler_TaskUtility.php", 
	"TaskScheduler_TaskUtility_Add"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/utility/task/TaskScheduler_TaskUtility_Add.php", 
	"TaskScheduler_TaskUtility_Base"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/utility/task/TaskScheduler_TaskUtility_Base.php", 
	"TaskScheduler_TaskUtility_Edit"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/utility/task/TaskScheduler_TaskUtility_Edit.php", 
	"TaskScheduler_TaskUtility_Get"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/utility/task/TaskScheduler_TaskUtility_Get.php", 
	"TaskScheduler_ThreadUtility"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/utility/thread/TaskScheduler_ThreadUtility.php", 
	"TaskScheduler_ThreadUtility_Add"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/utility/thread/TaskScheduler_ThreadUtility_Add.php", 
	"TaskScheduler_ThreadUtility_Base"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/utility/thread/TaskScheduler_ThreadUtility_Base.php", 
	"TaskScheduler_ThreadUtility_Edit"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/utility/thread/TaskScheduler_ThreadUtility_Edit.php", 
	"TaskScheduler_ThreadUtility_Get"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/utility/thread/TaskScheduler_ThreadUtility_Get.php", 
	"TaskScheduler_Walker_Log"	=>	TaskScheduler_Registry::$sDirPath . "/include/class/utility/walker/TaskScheduler_Walker_Log.php", 
	"task-scheduler-admin-page-framework.min"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AutocompleteCustomFieldType"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/autocomplete-custom-field-type/TaskScheduler_AutocompleteCustomFieldType.php", 
	"TaskScheduler_DateCustomFieldType"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/date-time-custom-field-types/TaskScheduler_DateCustomFieldType.php", 
	"TaskScheduler_DateRangeCustomFieldType"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/date-time-custom-field-types/TaskScheduler_DateRangeCustomFieldType.php", 
	"TaskScheduler_DateTimeCustomFieldType"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/date-time-custom-field-types/TaskScheduler_DateTimeCustomFieldType.php", 
	"TaskScheduler_DateTimeRangeCustomFieldType"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/date-time-custom-field-types/TaskScheduler_DateTimeRangeCustomFieldType.php", 
	"TaskScheduler_TimeCustomFieldType"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/date-time-custom-field-types/TaskScheduler_TimeCustomFieldType.php", 
	"TaskScheduler_TimeRangeCustomFieldType"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/date-time-custom-field-types/TaskScheduler_TimeRangeCustomFieldType.php", 
	"TaskScheduler_MultipleTextInputFieldType"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/multiple-text-input-filed-type/TaskScheduler_MultipleTextInputFieldType.php", 
	"TaskScheduler_RevealerCustomFieldType"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/revealer-custom-field-type/TaskScheduler_RevealerCustomFieldType.php", 
	"TaskScheduler_AdminPageFramework_Registry_Base"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Registry"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Bootstrap"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Factory_Router"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Factory_Model"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Factory_View"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Factory_Controller"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Factory"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Base"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_MetaBox_Base"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_MetaBox"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_PostType_Router"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_PostType_Model"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_TaxonomyField"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Page_MetaBox"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Page"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Menu"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_MetaBox_Page_Router"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_MetaBox_Page_Model"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_PostType_View"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_PostType_Controller"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_PostType"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Setting_Base"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_MetaBox_Page_View"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_MetaBox_Page_Controller"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_MetaBox_Page"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Setting_Form"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Setting_Port"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Setting_Validation"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Setting"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_NetworkAdmin"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_RegisterClasses"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Utility_Array"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Utility_String"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Utility_Path"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Utility_URL"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Utility"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_WPUtility_URL"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_WPUtility_HTML"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_WPUtility_Page"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_WPUtility_Hook"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_WPUtility_File"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_WPUtility_Option"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_WPUtility_Post"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_WPUtility"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_CustomSubmitFields"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Debug"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Link_Base"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_FormElement_Utility"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_FormElement"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_FieldType_Base"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_FieldType"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_FormField_Base"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_FormField"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_FormTable_Base"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_FormTable"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_ExportOptions"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_ImportOptions"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_HelpPane_Base"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Link_Page"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Link_PostType"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_FormElement_Page"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_FieldType_checkbox"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_FieldType_color"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_FieldType_default"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_FieldType_hidden"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_FieldType_image"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_FieldType_radio"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_FieldType_section_title"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_FieldType_select"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_FieldType_submit"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_FieldType_export"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_FieldType_import"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_FieldType_taxonomy"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_FieldType_text"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_FieldType_file"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_FieldType_number"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_FieldType_textarea"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_HelpPane_MetaBox"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_HelpPane_Page"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_FieldType_posttype"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_FieldType_media"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_FieldType_size"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_HelpPane_MetaBox_Page"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_HelpPane_TaxonomyField"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_HeadTag_Base"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_HeadTag_MetaBox"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_HeadTag_Page"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_HeadTag_MetaBox_Page"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_HeadTag_PostType"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_HeadTag_TaxonomyField"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Message"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Property_Base"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Property_MetaBox"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Property_Page"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Property_NetworkAdmin"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Property_PostType"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Property_MetaBox_Page"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Property_TaxonomyField"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_FieldTypeRegistration"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_WalkerTaxonomyChecklist"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_PageLoadInfo_Base"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_PageLoadInfo_NetworkAdminPage"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_PageLoadInfo_Page"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_PageLoadInfo_PostType"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Script_AttributeUpdator"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Script_RegisterCallback"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Script_RepeatableField"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Script_RepeatableSection"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Script_Sortable"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Script_Tab"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AdminPageFramework_Script_Utility"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/task-scheduler-admin-page-framework.min.php", 
	"TaskScheduler_AutoCompleteCustomFieldType"	=>	TaskScheduler_Registry::$sDirPath . "/include/library/admin-page-framework/autocomplete-custom-field-type/TaskScheduler_AutocompleteCustomFieldType.php", 
);
