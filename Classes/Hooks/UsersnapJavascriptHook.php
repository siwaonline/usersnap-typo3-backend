<?php

namespace SIWA\UsersnapBackend\Hooks;


use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

class UsersnapJavascriptHook
{
    /**
     * reference back to the backend
     *
     * @var \TYPO3\CMS\Backend\Controller\BackendController
     */
    protected $backendReference;

    /**
     * constructPostProcess
     *
     * @param array $config
     * @param \TYPO3\CMS\Backend\Controller\BackendController $backendReference
     */
    public function constructPostProcess($config, &$backendReference)
    {
        $backendReference->addJavascriptFile(
            $GLOBALS['BACK_PATH'] . '../'
            . ExtensionManagementUtility::siteRelPath('siwa_project')
            . 'Resources/Public/JavaScript/usersnap-backend.js'
        );
    }

}