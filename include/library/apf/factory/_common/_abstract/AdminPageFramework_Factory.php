<?php 
/**
	Admin Page Framework v3.8.4b05 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/task-scheduler>
	Copyright (c) 2013-2016, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
abstract class TaskScheduler_AdminPageFramework_Factory_Router {
    public $oProp;
    public $oDebug;
    public $oUtil;
    public $oMsg;
    public $oForm;
    protected $oPageLoadInfo;
    protected $oResource;
    protected $oHeadTag;
    protected $oHelpPane;
    protected $oLink;
    protected $_aSubClassPrefixes = array('oForm' => 'TaskScheduler_AdminPageFramework_Form_', 'oPageLoadInfo' => 'TaskScheduler_AdminPageFramework_PageLoadInfo_', 'oResource' => 'TaskScheduler_AdminPageFramework_Resource_', 'oHelpPane' => 'TaskScheduler_AdminPageFramework_HelpPane_', 'oLink' => 'TaskScheduler_AdminPageFramework_Link_',);
    private $_aSubClassNames = array('oProp' => null, 'oDebug' => 'TaskScheduler_AdminPageFramework_Debug', 'oUtil' => 'TaskScheduler_AdminPageFramework_FrameworkUtility', 'oMsg' => 'TaskScheduler_AdminPageFramework_Message', 'oForm' => null, 'oPageLoadInfo' => null, 'oResource' => null, 'oHelpPane' => null, 'oLink' => null,);
    public $aSubClassNames = array();
    public function __construct($oProp) {
        foreach ($this->_aSubClassPrefixes as $_sObjectVariableName => $_sPrefix) {
            $this->aSubClassNames[$_sObjectVariableName] = $_sPrefix . $this->_sStructureType;
        }
        $this->aSubClassNames = $this->aSubClassNames + $this->_aSubClassNames;
        unset($this->oDebug, $this->oUtil, $this->oMsg, $this->oForm, $this->oPageLoadInfo, $this->oResource, $this->oHelpPane, $this->oLink);
        $this->oProp = $oProp;
        if ($this->oProp->bIsAdmin && !$this->oProp->bIsAdminAjax) {
            if (did_action('current_screen')) {
                $this->_replyToLoadComponents();
            } else {
                add_action('current_screen', array($this, '_replyToLoadComponents'));
            }
        }
        $this->start();
        $this->oUtil->addAndDoAction($this, 'start_' . $this->oProp->sClassName, $this);
    }
    public function _replyToLoadComponents() {
        if (!$this->_isInThePage()) {
            return;
        }
        if (!isset($this->oResource)) {
            $this->oResource = $this->_replyTpSetAndGetInstance_oResource();
        }
        if (!isset($this->oLink)) {
            $this->oLink = $this->_replyTpSetAndGetInstance_oLink();
        }
        if ($this->oUtil->isDebugMode()) {
            $this->oPageLoadInfo = $this->oPageLoadInfo;
        }
    }
    protected function _isInstantiatable() {
        return true;
    }
    public function _isInThePage() {
        return true;
    }
    public function _replyToDetermineToLoad() {
        if (!$this->_isInThePage()) {
            return;
        }
        $this->_setUp();
        $this->oUtil->addAndDoAction($this, "set_up_{$this->oProp->sClassName}", $this);
    }
    protected function _getFormObject() {
        $this->oProp->setFormProperties();
        $_sFormClass = $this->aSubClassNames['oForm'];
        return new $_sFormClass($this->oProp->aFormArguments, $this->oProp->aFormCallbacks, $this->oMsg);
    }
    protected function _getLinkObject() {
        return null;
    }
    protected function _getPageLoadObject() {
        return null;
    }
    public function __get($sPropertyName) {
        if (isset($this->aSubClassNames[$sPropertyName])) {
            return call_user_func(array($this, "_replyTpSetAndGetInstance_{$sPropertyName}"));
        }
    }
    public function _replyTpSetAndGetInstance_oUtil() {
        $_sClassName = $this->aSubClassNames['oUtil'];
        $this->oUtil = new $_sClassName;
        return $this->oUtil;
    }
    public function _replyTpSetAndGetInstance_oDebug() {
        $_sClassName = $this->aSubClassNames['oDebug'];
        $this->oDebug = new $_sClassName;
        return $this->oDebug;
    }
    public function _replyTpSetAndGetInstance_oMsg() {
        $this->oMsg = call_user_func_array(array($this->aSubClassNames['oMsg'], 'getInstance'), array($this->oProp->sTextDomain));
        return $this->oMsg;
    }
    public function _replyTpSetAndGetInstance_oForm() {
        $this->oForm = $this->_getFormObject();
        return $this->oForm;
    }
    public function _replyTpSetAndGetInstance_oResource() {
        if (isset($this->oResource)) {
            return $this->oResource;
        }
        $_sClassName = $this->aSubClassNames['oResource'];
        $this->oResource = new $_sClassName($this->oProp);
        return $this->oResource;
    }
    public function _replyTpSetAndGetInstance_oHeadTag() {
        $this->oHead = $this->_replyTpSetAndGetInstance_oResource();
        return $this->oHead;
    }
    public function _replyTpSetAndGetInstance_oHelpPane() {
        $_sClassName = $this->aSubClassNames['oHelpPane'];
        $this->oHelpPane = new $_sClassName($this->oProp);
        return $this->oHelpPane;
    }
    public function _replyTpSetAndGetInstance_oLink() {
        $this->oLink = $this->_getLinkObject();
        return $this->oLink;
    }
    public function _replyTpSetAndGetInstance_oPageLoadInfo() {
        $this->oPageLoadInfo = $this->_getPageLoadObject();
        return $this->oPageLoadInfo;
    }
    public function __call($sMethodName, $aArguments = null) {
        $_mFirstArg = $this->oUtil->getElement($aArguments, 0);
        switch ($sMethodName) {
            case 'validate':
            case 'content':
                return $_mFirstArg;
        }
        if (has_filter($sMethodName)) {
            return $this->_getAutoCallback($sMethodName, $aArguments);
        }
        $this->_triggerUndefinedMethodWarning($sMethodName);
    }
    private function _getAutoCallback($sMethodName, $aArguments) {
        if (false === strpos($sMethodName, "\\")) {
            return $this->oUtil->getElement($aArguments, 0);
        }
        $_sAutoCallbackMethodName = str_replace('\\', '_', $sMethodName);
        return method_exists($this, $_sAutoCallbackMethodName) ? call_user_func_array(array($this, $_sAutoCallbackMethodName), $aArguments) : $this->oUtil->getElement($aArguments, 0);
    }
    private function _triggerUndefinedMethodWarning($sMethodName) {
        trigger_error(TaskScheduler_AdminPageFramework_Registry::NAME . ': ' . sprintf(__('The method is not defined: %1$s', $this->oProp->sTextDomain), $sMethodName), E_USER_WARNING);
    }
    public function __toString() {
        return TaskScheduler_AdminPageFramework_FrameworkUtility::getObjectInfo($this);
    }
    public function setFooterInfoRight() {
    }
    public function setFooterInfoLeft() {
    }
}
abstract class TaskScheduler_AdminPageFramework_Factory_Model extends TaskScheduler_AdminPageFramework_Factory_Router {
    public function __construct($oProp) {
        parent::__construct($oProp);
        add_filter('field_types_' . $oProp->sClassName, array($this, '_replyToFilterFieldTypeDefinitions'));
    }
    protected function _setUp() {
        $this->setUp();
    }
    public function _replyToFieldsetResourceRegistration($aFieldset) {
        $aFieldset = $aFieldset + array('help' => null, 'title' => null, 'help_aside' => null,);
        if (!$aFieldset['help']) {
            return;
        }
        $this->oHelpPane->_addHelpTextForFormFields($aFieldset['title'], $aFieldset['help'], $aFieldset['help_aside']);
    }
    public function _replyToFilterFieldTypeDefinitions($aFieldTypeDefinitions) {
        if (method_exists($this, 'field_types_' . $this->oProp->sClassName)) {
            return call_user_func_array(array($this, 'field_types_' . $this->oProp->sClassName), array($aFieldTypeDefinitions));
        }
        return $aFieldTypeDefinitions;
    }
    public function _replyToModifySectionsets($aSectionsets) {
        return $this->oUtil->addAndApplyFilter($this, "sections_{$this->oProp->sClassName}", $aSectionsets);
    }
    public function _replyToModifyFieldsets($aFieldsets, $aSectionsets) {
        foreach ($aFieldsets as $_sSectionPath => $_aFields) {
            $_aSectionPath = explode('|', $_sSectionPath);
            $_sFilterSuffix = implode('_', $_aSectionPath);
            $aFieldsets[$_sSectionPath] = $this->oUtil->addAndApplyFilter($this, "fields_{$this->oProp->sClassName}_{$_sFilterSuffix}", $_aFields);
        }
        $aFieldsets = $this->oUtil->addAndApplyFilter($this, "fields_{$this->oProp->sClassName}", $aFieldsets);
        if (count($aFieldsets)) {
            $this->oProp->bEnableForm = true;
        }
        return $aFieldsets;
    }
    public function _replyToModifyFieldsetsDefinitions($aFieldsets) {
        return $this->oUtil->addAndApplyFilter($this, "field_definition_{$this->oProp->sClassName}", $aFieldsets);
    }
    public function _replyToModifyFieldsetDefinitionAfterFormatting($aFieldset) {
        return $this->oUtil->addAndApplyFilter($this, $this->_getHookNameByFieldsetAndPrefix('field_definition_', $aFieldset), $aFieldset, $aFieldset['_subsection_index']);
    }
    public function _replyToModifyFieldsetDefinitionBeforeFormatting($aFieldset) {
        return $this->oUtil->addAndApplyFilter($this, $this->_getHookNameByFieldsetAndPrefix('field_definition_before_formatting_', $aFieldset), $aFieldset);
    }
    private function _getHookNameByFieldsetAndPrefix($sPrefix, $aFieldset) {
        $_sFieldPart = '_' . implode('_', $aFieldset['_field_path_array']);
        $_sSectionPart = implode('_', $aFieldset['_section_path_array']);
        $_sSectionPart = $this->oUtil->getAOrB('_default' === $_sSectionPart, '', '_' . $_sSectionPart);
        return $sPrefix . $this->oProp->sClassName . $_sSectionPart . $_sFieldPart;
    }
    public function _replyToHandleSubmittedFormData($aSavedData, $aArguments, $aSectionsets, $aFieldsets) {
    }
    public function _replyToFormatFieldsetDefinition($aFieldset, $aSectionsets) {
        return $aFieldset;
    }
    public function _replyToFormatSectionsetDefinition($aSectionset) {
        if (empty($aSectionset)) {
            return $aSectionset;
        }
        $aSectionset = $aSectionset + array('_fields_type' => $this->oProp->_sPropertyType, '_structure_type' => $this->oProp->_sPropertyType,);
        return $aSectionset;
    }
    public function _replyToDetermineWhetherToProcessFormRegistration($bAllowed) {
        return $this->_isInThePage();
    }
    public function _replyToGetCapabilityForForm($sCapability) {
        return $this->oProp->sCapability;
    }
    public function _replyToGetSavedFormData() {
        $this->oProp->aOptions = $this->oUtil->addAndApplyFilter($this, 'options_' . $this->oProp->sClassName, $this->oProp->aOptions);
        return $this->oProp->aOptions;
    }
    public function getSavedOptions() {
        return $this->oForm->aSavedData;
    }
    public function getFieldErrors() {
        return $this->oForm->getFieldErrors();
    }
    protected function _getFieldErrors() {
        return $this->oForm->getFieldErrors();
    }
    public function setLastInputs(array $aLastInputs) {
        return $this->oForm->setLastInputs($aLastInputs);
    }
    public function _setLastInput($aLastInputs) {
        return $this->setLastInputs($aLastInputs);
    }
}
abstract class TaskScheduler_AdminPageFramework_Factory_View extends TaskScheduler_AdminPageFramework_Factory_Model {
    public function __construct($oProp) {
        parent::__construct($oProp);
        new TaskScheduler_AdminPageFramework_Factory_View__SettingNotice($this, $this->oProp->sSettingNoticeActionHook);
    }
    public function _replyToGetSectionName() {
        $_aParams = func_get_args() + array(null, null,);
        return $_aParams[0];
    }
    public function _replyToGetInputID() {
        $_aParams = func_get_args() + array(null, null, null, null);
        return $_aParams[0];
    }
    public function _replyToGetInputTagIDAttribute() {
        $_aParams = func_get_args() + array(null, null, null, null);
        return $_aParams[0];
    }
    public function _replyToGetFieldNameAttribute() {
        $_aParams = func_get_args() + array(null, null,);
        return $_aParams[0];
    }
    public function _replyToGetFlatFieldName() {
        $_aParams = func_get_args() + array(null, null,);
        return $_aParams[0];
    }
    public function _replyToGetInputNameAttribute() {
        $_aParams = func_get_args() + array(null, null, null);
        return $_aParams[0];
    }
    public function _replyToGetFlatInputName() {
        $_aParams = func_get_args() + array(null, null, null);
        return $_aParams[0];
    }
    public function _replyToGetInputClassAttribute() {
        $_aParams = func_get_args() + array(null, null, null, null);
        return $_aParams[0];
    }
    public function _replyToDetermineSectionsetVisibility($bVisible, $aSectionset) {
        return $this->_isElementVisible($aSectionset, $bVisible);
    }
    public function _replyToDetermineFieldsetVisibility($bVisible, $aFieldset) {
        return $this->_isElementVisible($aFieldset, $bVisible);
    }
    private function _isElementVisible($aElementDefinition, $bDefault) {
        $aElementDefinition = $aElementDefinition + array('if' => true, 'capability' => '',);
        if (!$aElementDefinition['if']) {
            return false;
        }
        if (!$aElementDefinition['capability']) {
            return true;
        }
        if (!current_user_can($aElementDefinition['capability'])) {
            return false;
        }
        return $bDefault;
    }
    public function isSectionSet(array $aFieldset) {
        $aFieldset = $aFieldset + array('section_id' => null,);
        return $aFieldset['section_id'] && '_default' !== $aFieldset['section_id'];
    }
    public function _replyToGetSectionHeaderOutput($sSectionDescription, $aSectionset) {
        return $this->oUtil->addAndApplyFilters($this, array('section_head_' . $this->oProp->sClassName . '_' . $aSectionset['section_id']), $sSectionDescription);
    }
    public function _replyToGetFieldOutput($sFieldOutput, $aFieldset) {
        $_sSectionPart = $this->oUtil->getAOrB(isset($aFieldset['section_id']) && '_default' !== $aFieldset['section_id'], '_' . $aFieldset['section_id'], '');
        return $this->oUtil->addAndApplyFilters($this, array('field_' . $this->oProp->sClassName . $_sSectionPart . '_' . $aFieldset['field_id']), $sFieldOutput, $aFieldset);
    }
}
abstract class TaskScheduler_AdminPageFramework_Factory_Controller extends TaskScheduler_AdminPageFramework_Factory_View {
    public function start() {
    }
    public function setUp() {
    }
    public function isInThePage() {
        return $this->_isInThePage();
    }
    public function setMessage($sKey, $sMessage) {
        $this->oMsg->set($sKey, $sMessage);
    }
    public function getMessage($sKey = '') {
        return $this->oMsg->get($sKey);
    }
    public function enqueueStyles($aSRCs, $_vArg2 = null) {
    }
    public function enqueueStyle($sSRC, $_vArg2 = null) {
    }
    public function enqueueScripts($aSRCs, $_vArg2 = null) {
    }
    public function enqueueScript($sSRC, $_vArg2 = null) {
    }
    public function addHelpText($sHTMLContent, $sHTMLSidebarContent = "") {
        if (method_exists($this->oHelpPane, '_addHelpText')) {
            $this->oHelpPane->_addHelpText($sHTMLContent, $sHTMLSidebarContent);
        }
    }
    public function addSettingSections() {
        foreach (func_get_args() as $_asSectionset) {
            $this->addSettingSection($_asSectionset);
        }
        $this->_sTargetSectionTabSlug = null;
    }
    public function addSettingSection($aSectionset) {
        if (!is_array($aSectionset)) {
            return;
        }
        $this->_sTargetSectionTabSlug = $this->oUtil->getElement($aSectionset, 'section_tab_slug', $this->_sTargetSectionTabSlug);
        $aSectionset['section_tab_slug'] = $this->oUtil->getAOrB($this->_sTargetSectionTabSlug, $this->_sTargetSectionTabSlug, null);
        $this->oForm->addSection($aSectionset);
    }
    public function addSettingFields() {
        foreach (func_get_args() as $_aFieldset) {
            $this->addSettingField($_aFieldset);
        }
    }
    public function addSettingField($asFieldset) {
        if (method_exists($this->oForm, 'addField')) {
            $this->oForm->addField($asFieldset);
        }
    }
    public function setFieldErrors($aErrors) {
        $this->oForm->setFieldErrors($aErrors);
    }
    public function hasFieldError() {
        return $this->oForm->hasFieldError();
    }
    public function setSettingNotice($sMessage, $sType = 'error', $asAttributes = array(), $bOverride = true) {
        $this->oForm->setSubmitNotice($sMessage, $sType, $asAttributes, $bOverride);
    }
    public function hasSettingNotice($sType = '') {
        return $this->oForm->hasSubmitNotice($sType);
    }
}
abstract class TaskScheduler_AdminPageFramework_Factory extends TaskScheduler_AdminPageFramework_Factory_Controller {
}
