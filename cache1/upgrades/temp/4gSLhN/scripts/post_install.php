<?php
if (! defined('sugarEntry') || ! sugarEntry)
    die('Not A Valid Entry Point');

?>


<?php

function post_install() {
    //eggsurplus: set up default config options

    require_once('modules/Administration/Administration.php');
    global $sugar_config;

    require_once('modules/Configurator/Configurator.php');
    $cfg = new Configurator();
    
    /** If this is the first install set some default settings */
    if(!array_key_exists('securitysuite_additive',$sugar_config) ) {
        // save securitysuite_additive setting
        $cfg->config['securitysuite_additive'] = true;
        // save securitysuite_user_role_precedence setting
        $cfg->config['securitysuite_user_role_precedence'] = true;
        // save securitysuite_user_popup setting
        $cfg->config['securitysuite_user_popup'] = true;
        // save securitysuite_popup_select setting
        $cfg->config['securitysuite_popup_select'] = false;
        // save securitysuite_inherit_creator setting
        $cfg->config['securitysuite_inherit_creator'] = true;
        // save securitysuite_inherit_parent setting
        $cfg->config['securitysuite_inherit_parent'] = true;
        // save securitysuite_inherit_assigned setting
        $cfg->config['securitysuite_inherit_assigned'] = true;
        // save securitysuite_strict_rights setting
        $cfg->config['securitysuite_strict_rights'] = false;
        
        $cfg->config['securitysuite_shared_calendar_hide_restricted'] = true;

        //ksort($sugar_config);
        //write_array_to_file('sugar_config', $sugar_config, 'config.php');
    }

    if(!array_key_exists('securitysuite_strict_rights',$sugar_config) ) {
        // save securitysuite_strict_rights setting
        $cfg->config['securitysuite_strict_rights'] = true;

        //ksort($sugar_config);
        //write_array_to_file('sugar_config', $sugar_config, 'config.php');
    }

    if(!array_key_exists('securitysuite_filter_user_list',$sugar_config) ) {
        // save securitysuite_filter_user_list setting
        $cfg->config['securitysuite_filter_user_list'] = false;

        //ksort($sugar_config);
        //write_array_to_file('sugar_config', $sugar_config, 'config.php');
    }
    
    if(!isset($cfg->config['addAjaxBannedModules'])) {
        $cfg->config['addAjaxBannedModules'] = array();
    }
    $cfg->config['addAjaxBannedModules'][] = 'SecurityGroups';

    $cfg->config['securitysuite_version'] = '6.5.20';

    

    $cfg->handleOverride();    
    
 

    //repair roles
    include("modules/ACL/install_actions.php");

    echo "
        <script>
        document.location = 'index.php?module=SecurityGroups&action=license';
        </script>"
    ;



}
