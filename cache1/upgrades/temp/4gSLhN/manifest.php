<?php

$manifest = array (
     'acceptable_sugar_versions' =>  array (
          'exact_matches' => array (
            0 => "6.5.25", /** DO NOT EDIT THIS VALUE. ANY CHANGE MADE TO THIS VALUE WILL BREAK YOUR SYSTEM */
          ),
      ),
      'acceptable_sugar_flavors' =>
          array(
            'CE', // 'PRO','ENT'
          ),
      'readme'=>'',
      'key'=>'',
      'author' => 'Jason Eggers (eggsurplus solutions, LLC)',
      'description' => 'Assign Security Groups to records to control access',
      'icon' => '',
      'is_uninstallable' => true,
      'name' => 'SecurityGroups - Full Edition',
      'published_date' => '12/18/2014',
      'type' => 'module',
      'version' => '2.8.1',
      'remove_tables' => 'prompt',

      );
$installdefs = array (
    'id' => 'SecurityGroups',
    'beans' =>
        array (
            array (
              'module' => 'SecurityGroups',
              'class' => 'SecurityGroup',
              'path' => 'modules/SecurityGroups/SecurityGroup.php',
              'tab' => true,
            ),
        ),
    'image_dir' => '<basepath>/icons',
    'copy' =>
        array (
            array (
                'from' => '<basepath>/install_dir/modules/SecurityGroups',
                'to' => 'modules/SecurityGroups',
            ),
            array(
                'from' => '<basepath>/include/images/SecurityGroups.gif',
                'to'   => 'themes/default/images/SecurityGroups.gif'
            ),

            /** NEW FILES */
            //defines Group level access to a record
            array(
                'from' => '<basepath>/install_dir/modules/ACLActions/actiondefs.override.php',
                'to'   => 'modules/ACLActions/actiondefs.override.php'
            ),
            array(
                'from' => '<basepath>/install_dir/custom/modules/ACLRoles/metadata/detailviewdefs.php',
                'to'   => 'custom/modules/ACLRoles/metadata/detailviewdefs.php'
            ),
            array(
                'from' => '<basepath>/install_dir/custom/modules/ACLRoles/styles/securitygroups.css',
                'to'   => 'custom/modules/ACLRoles/styles/securitygroups.css'
            ),
            array(
                'from' => '<basepath>/install_dir/custom/modules/ACLRoles/views/view.classic.php',
                'to'   => 'custom/modules/ACLRoles/views/view.classic.php'
            ),
            array(
                'from' => '<basepath>/install_dir/custom/modules/Users/metadata/subpanels/ForSecurityGroups.php',
                'to'   => 'custom/modules/Users/metadata/subpanels/ForSecurityGroups.php'
            ),
            array(
                'from' => '<basepath>/install_dir/include/generic/SugarWidgets/SugarWidgetSubPanelEditSecurityGroupUserButton.php',
                'to'   => 'include/generic/SugarWidgets/SugarWidgetSubPanelEditSecurityGroupUserButton.php'
            ),
            array(
                'from' => '<basepath>/install_dir/custom/modules/Users/Masquerade.php',
                'to'   => 'custom/modules/Users/Masquerade.php'
            ),

            array (
                'from' => '<basepath>/license',
                'to' => 'modules/SecurityGroups',
            ),
            array(
                'from' => '<basepath>/install_dir/custom/modules/Users/Unmasquerade.php',
                'to'   => 'custom/modules/Users/Unmasquerade.php'
            ),
            //group layouts
            array(
                'from' => '<basepath>/install_dir/modules/ModuleBuilder/tpls/addlayout.tpl',
                'to'   => 'modules/ModuleBuilder/tpls/addlayout.tpl'
            ),
            array(
                'from' => '<basepath>/install_dir/modules/ModuleBuilder/tpls/addlayoutdone.tpl',
                'to'   => 'modules/ModuleBuilder/tpls/addlayoutdone.tpl'
            ),
            array(
                'from' => '<basepath>/install_dir/modules/ModuleBuilder/tpls/removegrouplayoutprompt.tpl',
                'to'   => 'modules/ModuleBuilder/tpls/removegrouplayoutprompt.tpl'
            ),
            array(
                'from' => '<basepath>/install_dir/modules/ModuleBuilder/tpls/removelayoutdone.tpl',
                'to'   => 'modules/ModuleBuilder/tpls/removelayoutdone.tpl'
            ),
            array(
                'from' => '<basepath>/install_dir/modules/ModuleBuilder/views/view.addlayout.php',
                'to'   => 'modules/ModuleBuilder/views/view.addlayout.php'
            ),
            array(
                'from' => '<basepath>/install_dir/modules/ModuleBuilder/views/view.addlayoutdone.php',
                'to'   => 'modules/ModuleBuilder/views/view.addlayoutdone.php'
            ),
            array(
                'from' => '<basepath>/install_dir/modules/ModuleBuilder/views/view.removegrouplayoutprompt.php',
                'to'   => 'modules/ModuleBuilder/views/view.removegrouplayoutprompt.php'
            ),
            array(
                'from' => '<basepath>/install_dir/modules/ModuleBuilder/views/view.removelayoutdone.php',
                'to'   => 'modules/ModuleBuilder/views/view.removelayoutdone.php'
            ),

            /** END - NEW FILES */
            /** NOT UPGRADE SAFE CODE - try to make this as upgrade safe as possible */
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/data/SugarBean.php',
                'to'   => 'data/SugarBean.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/data/Relationships/M2MRelationship.php',
                'to'   => 'data/Relationships/M2MRelationship.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/include/export_utils.php',
                'to'   => 'include/export_utils.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/include/utils.php',
                'to'   => 'include/utils.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/include/DetailView/DetailView.php',
                'to'   => 'include/DetailView/DetailView.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/include/EditView/EditView2.php',
                'to'   => 'include/EditView/EditView2.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/include/ListView/ListView.php',
                'to'   => 'include/ListView/ListView.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/include/Smarty/plugins/function.sugar_button.php',
                'to'   => 'include/Smarty/plugins/function.sugar_button.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/ACL/ACLController.php',
                'to'   => 'modules/ACL/ACLController.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/ACLActions/ACLAction.php',
                'to'   => 'modules/ACLActions/ACLAction.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/ACLRoles/EditAllBody.tpl',
                'to'   => 'modules/ACLRoles/EditAllBody.tpl'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/Campaigns/utils.php',
                'to'   => 'modules/Campaigns/utils.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/Campaigns/views/view.detail.php',
                'to'   => 'modules/Campaigns/views/view.detail.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/Emails/EmailUI.php',
                'to'   => 'modules/Emails/EmailUI.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/EmailTemplates/EditView.php',
                'to'   => 'modules/EmailTemplates/EditView.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/EmailTemplates/EmailTemplateFormBase.php',
                'to'   => 'modules/EmailTemplates/EmailTemplateFormBase.php'
            ),
            //following does NOT exist in the Sugar code base yet but may at any time
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/EmailTemplates/views/view.classic.php',
                'to'   => 'modules/EmailTemplates/views/view.classic.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/EmailTemplates/DetailView.html',
                'to'   => 'modules/EmailTemplates/DetailView.html'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/ProspectLists/TargetListUpdate.php',
                'to'   => 'modules/ProspectLists/TargetListUpdate.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/SugarFeed/SugarFeed.php',
                'to'   => 'modules/SugarFeed/SugarFeed.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/SugarFeed/Dashlets/SugarFeedDashlet/SugarFeedDashlet.php',
                'to'   => 'modules/SugarFeed/Dashlets/SugarFeedDashlet/SugarFeedDashlet.php'
            ),
            //javascript changes
            //remove and just add option to any quickcreate/edit(create only) form
            /**
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/jssource/src_files/include/SubPanel/SubPanelTiles.js',
                'to'   => 'jssource/src_files/include/SubPanel/SubPanelTiles.js'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/include/SubPanel/SubPanelTiles.js',
                'to'   => 'include/SubPanel/SubPanelTiles.js'
            ),
            */


            /**
            //needed for application menu extension...not needed in 6.0
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/include/MVC/View/SugarView.php',
                'to'   => 'include/MVC/View/SugarView.php'
            ),
            */
            array(
                'from' => '<basepath>/install_dir/custom/modules/Home/dashlets.php',
                'to'   => 'custom/modules/Home/dashlets.php'
            ),
            //group layouts
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/include/Dashlets/DashletGeneric.php',
                'to'   => 'include/Dashlets/DashletGeneric.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/include/MVC/View/views/view.detail.php',
                'to'   => 'include/MVC/View/views/view.detail.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/include/MVC/View/views/view.edit.php',
                'to'   => 'include/MVC/View/views/view.edit.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/include/MVC/View/views/view.list.php',
                'to'   => 'include/MVC/View/views/view.list.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/include/MVC/View/views/view.popup.php',
                'to'   => 'include/MVC/View/views/view.popup.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/include/EditView/SubpanelQuickCreate.php',
                'to'   => 'include/EditView/SubpanelQuickCreate.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/include/SearchForm/SearchForm2.php',
                'to'   => 'include/SearchForm/SearchForm2.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/include/SugarObjects/templates/basic/vardefs.php',
                'to'   => 'include/SugarObjects/templates/basic/vardefs.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/include/TemplateHandler/TemplateHandler.php',
                'to'   => 'include/TemplateHandler/TemplateHandler.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/Calendar/CalendarActivity.php',
                'to'   => 'modules/Calendar/CalendarActivity.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/Calendar/CalendarDisplay.php',
                'to'   => 'modules/Calendar/CalendarDisplay.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/Calendar/tpls/shared_users.tpl',
                'to'   => 'modules/Calendar/tpls/shared_users.tpl'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/InboundEmail/DetailView.php',
                'to'   => 'modules/InboundEmail/DetailView.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/InboundEmail/InboundEmail.php',
                'to'   => 'modules/InboundEmail/InboundEmail.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/include/utils/activity_utils.php',
                'to'   => 'include/utils/activity_utils.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/ModuleBuilder/controller.php',
                'to'   => 'modules/ModuleBuilder/controller.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/ModuleBuilder/Module/StudioModule.php',
                'to'   => 'modules/ModuleBuilder/Module/StudioModule.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/ModuleBuilder/parsers/views/DeployedMetaDataImplementation.php',
                'to'   => 'modules/ModuleBuilder/parsers/views/DeployedMetaDataImplementation.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/ModuleBuilder/tpls/listView.tpl',
                'to'   => 'modules/ModuleBuilder/tpls/listView.tpl'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/ModuleBuilder/tpls/layoutView.tpl',
                'to'   => 'modules/ModuleBuilder/tpls/layoutView.tpl'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/ModuleBuilder/views/view.dashlet.php',
                'to'   => 'modules/ModuleBuilder/views/view.dashlet.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/ModuleBuilder/views/view.layoutview.php',
                'to'   => 'modules/ModuleBuilder/views/view.layoutview.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/ModuleBuilder/views/view.listview.php',
                'to'   => 'modules/ModuleBuilder/views/view.listview.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/ModuleBuilder/views/view.popupview.php',
                'to'   => 'modules/ModuleBuilder/views/view.popupview.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/ModuleBuilder/views/view.searchview.php',
                'to'   => 'modules/ModuleBuilder/views/view.searchview.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/ModuleBuilder/views/view.wizard.php',
                'to'   => 'modules/ModuleBuilder/views/view.wizard.php'
            ),
            //create rights
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/EmailMarketing/EditView.php',
                'to'   => 'modules/EmailMarketing/EditView.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/Emails/EmailUIAjax.php',
                'to'   => 'modules/Emails/EmailUIAjax.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/include/generic/LayoutManager.php',
                'to'   => 'include/generic/LayoutManager.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/Accounts/Menu.php',
                'to'   => 'modules/Accounts/Menu.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/Activities/Menu.php',
                'to'   => 'modules/Activities/Menu.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/Bugs/Menu.php',
                'to'   => 'modules/Bugs/Menu.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/Calendar/Menu.php',
                'to'   => 'modules/Calendar/Menu.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/Calls/Menu.php',
                'to'   => 'modules/Calls/Menu.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/Campaigns/Menu.php',
                'to'   => 'modules/Campaigns/Menu.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/Cases/Menu.php',
                'to'   => 'modules/Cases/Menu.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/Contacts/Menu.php',
                'to'   => 'modules/Contacts/Menu.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/DocumentRevisions/Menu.php',
                'to'   => 'modules/DocumentRevisions/Menu.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/Documents/Menu.php',
                'to'   => 'modules/Documents/Menu.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/Emails/Menu.php',
                'to'   => 'modules/Emails/Menu.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/Leads/Menu.php',
                'to'   => 'modules/Leads/Menu.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/Meetings/Menu.php',
                'to'   => 'modules/Meetings/Menu.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/Notes/Menu.php',
                'to'   => 'modules/Notes/Menu.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/Project/Menu.php',
                'to'   => 'modules/Project/Menu.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/ProjectTask/Menu.php',
                'to'   => 'modules/ProjectTask/Menu.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/ProspectLists/Menu.php',
                'to'   => 'modules/ProspectLists/Menu.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/Prospects/Menu.php',
                'to'   => 'modules/Prospects/Menu.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/modules/Tasks/Menu.php',
                'to'   => 'modules/Tasks/Menu.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/include/generic/SugarWidgets/SugarWidgetSubPanelTopCreateLeadNameButton.php',
                'to'   => 'include/generic/SugarWidgets/SugarWidgetSubPanelTopCreateLeadNameButton.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/include/generic/SugarWidgets/SugarWidgetSubPanelTopArchiveEmailButton.php',
                'to'   => 'include/generic/SugarWidgets/SugarWidgetSubPanelTopArchiveEmailButton.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/include/generic/SugarWidgets/SugarWidgetSubPanelTopButton.php',
                'to'   => 'include/generic/SugarWidgets/SugarWidgetSubPanelTopButton.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/include/generic/SugarWidgets/SugarWidgetSubPanelTopComposeEmailButton.php',
                'to'   => 'include/generic/SugarWidgets/SugarWidgetSubPanelTopComposeEmailButton.php'
            ),
            array(
                'from' => '<basepath>/install_dir/notupgradesafe/include/generic/SugarWidgets/SugarWidgetSubPanelTopCreateAccountNameButton.php',
                'to'   => 'include/generic/SugarWidgets/SugarWidgetSubPanelTopCreateAccountNameButton.php'
            ),
            //end - create rights

            /** END - NOT UPGRADE SAFE */
        ),
    'layoutdefs' =>
        array (
            array (
              'from' => '<basepath>/install_dir/layoutdefs/Users.php',
              'to_module' => 'Users',
            ),
    /**
            array (
              'from' => '<basepath>/install_dir/layoutdefs/SecurityGroups.php',
              'to_module' => 'securitygroups',
            ),
    */
            array (
              'from' => '<basepath>/install_dir/relationships/Accounts/securitygroups_accountsLayoutdefs.php',
              'to_module' => 'Accounts',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/ACLRoles/securitygroups_aclrolesLayoutdefs.php',
              'to_module' => 'ACLRoles',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/Bugs/securitygroups_bugsLayoutdefs.php',
              'to_module' => 'Bugs',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/Calls/securitygroups_callsLayoutdefs.php',
              'to_module' => 'Calls',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/Campaigns/securitygroups_campaignsLayoutdefs.php',
              'to_module' => 'Campaigns',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/Cases/securitygroups_casesLayoutdefs.php',
              'to_module' => 'Cases',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/Contacts/securitygroups_contactsLayoutdefs.php',
              'to_module' => 'Contacts',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/Documents/securitygroups_documentsLayoutdefs.php',
              'to_module' => 'Documents',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/Emails/securitygroups_emailsLayoutdefs.php',
              'to_module' => 'Emails',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/EmailTemplates/securitygroups_emailtemplatesLayoutdefs.php',
              'to_module' => 'EmailTemplates',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/Leads/securitygroups_leadsLayoutdefs.php',
              'to_module' => 'Leads',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/Meetings/securitygroups_meetingsLayoutdefs.php',
              'to_module' => 'Meetings',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/Notes/securitygroups_notesLayoutdefs.php',
              'to_module' => 'Notes',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/Opportunities/securitygroups_opportunitiesLayoutdefs.php',
              'to_module' => 'Opportunities',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/Project/securitygroups_projectLayoutdefs.php',
              'to_module' => 'Project',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/ProjectTask/securitygroups_project_taskLayoutdefs.php',
              'to_module' => 'ProjectTask',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/ProspectLists/securitygroups_prospect_listLayoutdefs.php',
              'to_module' => 'ProspectLists',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/Prospects/securitygroups_prospectsLayoutdefs.php',
              'to_module' => 'Prospects',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/Tasks/securitygroups_tasksLayoutdefs.php',
              'to_module' => 'Tasks',
            ),

            array (
              'from' => '<basepath>/install_dir/relationships/InboundEmail/securitygroups_inbound_emailLayoutdefs.php',
              'to_module' => 'InboundEmail',
            ),

        ),
    'vardefs' =>
        array (
            array (
              'from' => '<basepath>/install_dir/relationships/Accounts/securitygroups_accountsVardefs.php',
              'to_module' => 'Accounts',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/ACLRoles/securitygroups_aclrolesVardefs.php',
              'to_module' => 'ACLRoles',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/Bugs/securitygroups_bugsVardefs.php',
              'to_module' => 'Bugs',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/Calls/securitygroups_callsVardefs.php',
              'to_module' => 'Calls',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/Campaigns/securitygroups_campaignsVardefs.php',
              'to_module' => 'Campaigns',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/Cases/securitygroups_casesVardefs.php',
              'to_module' => 'Cases',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/Contacts/securitygroups_contactsVardefs.php',
              'to_module' => 'Contacts',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/Documents/securitygroups_documentsVardefs.php',
              'to_module' => 'Documents',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/Emails/securitygroups_emailsVardefs.php',
              'to_module' => 'Emails',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/EmailTemplates/securitygroups_emailtemplatesVardefs.php',
              'to_module' => 'EmailTemplates',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/Leads/securitygroups_leadsVardefs.php',
              'to_module' => 'Leads',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/Meetings/securitygroups_meetingsVardefs.php',
              'to_module' => 'Meetings',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/Notes/securitygroups_notesVardefs.php',
              'to_module' => 'Notes',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/Opportunities/securitygroups_opportunitiesVardefs.php',
              'to_module' => 'Opportunities',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/Project/securitygroups_projectVardefs.php',
              'to_module' => 'Project',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/ProjectTask/securitygroups_project_taskVardefs.php',
              'to_module' => 'ProjectTask',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/ProspectLists/securitygroups_prospect_listVardefs.php',
              'to_module' => 'ProspectLists',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/Prospects/securitygroups_prospectsVardefs.php',
              'to_module' => 'Prospects',
            ),
            array (
              'from' => '<basepath>/install_dir/relationships/Tasks/securitygroups_tasksVardefs.php',
              'to_module' => 'Tasks',
            ),

            array (
              'from' => '<basepath>/install_dir/relationships/InboundEmail/securitygroups_inbound_emailVardefs.php',
              'to_module' => 'InboundEmail',
            ),

        ),
    'relationships' =>
        array (
            array (
              'module' => 'Users',
              'module_vardefs' => '<basepath>/install_dir/relationships/Users/securitygroups_usersVardefs.php',
              'meta_data' => '<basepath>/install_dir/relationships/Users/securitygroups_usersMetaData.php',
            ),
            array(
                'module'=> 'SecurityGroups',
                'meta_data'=>'<basepath>/install_dir/relationships/SecurityGroups/securitygroups_recordsMetaData.php',
            ),
            array(
                'module'=> 'SecurityGroups',
                'meta_data'=>'<basepath>/install_dir/relationships/SecurityGroups/securitygroups_acl_rolesMetaData.php',
            ),
            array(
                'module'=> 'SecurityGroups',
                'meta_data'=>'<basepath>/install_dir/relationships/SecurityGroups/securitygroups_defaultsMetaData.php',
            ),

            array(
                'module'=> 'SecurityGroups',
                'meta_data'=>'<basepath>/install_dir/relationships/SecurityGroups/securitygroups_messageMetaData.php',
            ),

         ),

    'language' =>
        array (
        /** ENGLISH en_us */
            array (
                'from' => '<basepath>/install_dir/language/application/en_us.lang.php',
                'to_module' => 'application',
                'language' => 'en_us',
            ),
            array(
                'from'=> '<basepath>/install_dir/language/modules/Administration/en_us.admin.php',
                'to_module'=> 'Administration',
                'language'=>'en_us'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Accounts/mod_strings_en_us.php',
                  'to_module'=> 'Accounts',
                  'language'=>'en_us'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ACLActions/mod_strings_en_us.php',
                  'to_module'=> 'ACLActions',
                  'language'=>'en_us'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Bugs/mod_strings_en_us.php',
                  'to_module'=> 'Bugs',
                  'language'=>'en_us'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Calendar/mod_strings_en_us.php',
                  'to_module'=> 'Calendar',
                  'language'=>'en_us'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Calls/mod_strings_en_us.php',
                  'to_module'=> 'Calls',
                  'language'=>'en_us'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Campaigns/mod_strings_en_us.php',
                  'to_module'=> 'Campaigns',
                  'language'=>'en_us'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Cases/mod_strings_en_us.php',
                  'to_module'=> 'Cases',
                  'language'=>'en_us'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Contacts/mod_strings_en_us.php',
                  'to_module'=> 'Contacts',
                  'language'=>'en_us'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Documents/mod_strings_en_us.php',
                  'to_module'=> 'Documents',
                  'language'=>'en_us'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Emails/mod_strings_en_us.php',
                  'to_module'=> 'Emails',
                  'language'=>'en_us'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/EmailTemplates/mod_strings_en_us.php',
                  'to_module'=> 'EmailTemplates',
                  'language'=>'en_us'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Leads/mod_strings_en_us.php',
                  'to_module'=> 'Leads',
                  'language'=>'en_us'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Meetings/mod_strings_en_us.php',
                  'to_module'=> 'Meetings',
                  'language'=>'en_us'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Notes/mod_strings_en_us.php',
                  'to_module'=> 'Notes',
                  'language'=>'en_us'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Opportunities/mod_strings_en_us.php',
                  'to_module'=> 'Opportunities',
                  'language'=>'en_us'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Project/mod_strings_en_us.php',
                  'to_module'=> 'Project',
                  'language'=>'en_us'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ProjectTask/mod_strings_en_us.php',
                  'to_module'=> 'ProjectTask',
                  'language'=>'en_us'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ProspectLists/mod_strings_en_us.php',
                  'to_module'=> 'ProspectLists',
                  'language'=>'en_us'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Prospects/mod_strings_en_us.php',
                  'to_module'=> 'Prospects',
                  'language'=>'en_us'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Tasks/mod_strings_en_us.php',
                  'to_module'=> 'Tasks',
                  'language'=>'en_us'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Users/mod_strings_en_us.php',
                  'to_module'=> 'Users',
                  'language'=>'en_us'
            ),
            //group layouts
            array('from'=> '<basepath>/install_dir/language/modules/ModuleBuilder/mod_strings_en_us.php',
                  'to_module'=> 'ModuleBuilder',
                  'language'=>'en_us'
            ),
        /** END ENGLISH en_us */
        /** SPANISH es_es */
            array (
                'from' => '<basepath>/install_dir/language/application/es_es.lang.php',
                'to_module' => 'application',
                'language' => 'es_es',
            ),
            array(
                'from'=> '<basepath>/install_dir/language/modules/Administration/es_es.admin.php',
                'to_module'=> 'Administration',
                'language'=>'es_es'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Accounts/mod_strings_es_es.php',
                  'to_module'=> 'Accounts',
                  'language'=>'es_es'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ACLActions/mod_strings_es_es.php',
                  'to_module'=> 'ACLActions',
                  'language'=>'es_es'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Bugs/mod_strings_es_es.php',
                  'to_module'=> 'Bugs',
                  'language'=>'es_es'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Calendar/mod_strings_es_es.php',
                  'to_module'=> 'Calendar',
                  'language'=>'es_es'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Calls/mod_strings_es_es.php',
                  'to_module'=> 'Calls',
                  'language'=>'es_es'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Campaigns/mod_strings_es_es.php',
                  'to_module'=> 'Campaigns',
                  'language'=>'es_es'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Cases/mod_strings_es_es.php',
                  'to_module'=> 'Cases',
                  'language'=>'es_es'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Contacts/mod_strings_es_es.php',
                  'to_module'=> 'Contacts',
                  'language'=>'es_es'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Documents/mod_strings_es_es.php',
                  'to_module'=> 'Documents',
                  'language'=>'es_es'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Emails/mod_strings_es_es.php',
                  'to_module'=> 'Emails',
                  'language'=>'es_es'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/EmailTemplates/mod_strings_es_es.php',
                  'to_module'=> 'EmailTemplates',
                  'language'=>'es_es'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Leads/mod_strings_es_es.php',
                  'to_module'=> 'Leads',
                  'language'=>'es_es'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Meetings/mod_strings_es_es.php',
                  'to_module'=> 'Meetings',
                  'language'=>'es_es'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Notes/mod_strings_es_es.php',
                  'to_module'=> 'Notes',
                  'language'=>'es_es'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Opportunities/mod_strings_es_es.php',
                  'to_module'=> 'Opportunities',
                  'language'=>'es_es'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Project/mod_strings_es_es.php',
                  'to_module'=> 'Project',
                  'language'=>'es_es'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ProjectTask/mod_strings_es_es.php',
                  'to_module'=> 'ProjectTask',
                  'language'=>'es_es'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ProspectLists/mod_strings_es_es.php',
                  'to_module'=> 'ProspectLists',
                  'language'=>'es_es'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Prospects/mod_strings_es_es.php',
                  'to_module'=> 'Prospects',
                  'language'=>'es_es'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Tasks/mod_strings_es_es.php',
                  'to_module'=> 'Tasks',
                  'language'=>'es_es'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Users/mod_strings_es_es.php',
                  'to_module'=> 'Users',
                  'language'=>'es_es'
            ),
            //group layouts
            array('from'=> '<basepath>/install_dir/language/modules/ModuleBuilder/mod_strings_es_es.php',
                  'to_module'=> 'ModuleBuilder',
                  'language'=>'es_es'
            ),
        /** END SPANISH es_es */
        /** ITALIAN it_it */
            array (
                'from' => '<basepath>/install_dir/language/application/it_it.lang.php',
                'to_module' => 'application',
                'language' => 'it_it',
            ),
            array(
                'from'=> '<basepath>/install_dir/language/modules/Administration/it_it.admin.php',
                'to_module'=> 'Administration',
                'language'=>'it_it'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Accounts/mod_strings_it_it.php',
                  'to_module'=> 'Accounts',
                  'language'=>'it_it'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ACLActions/mod_strings_it_it.php',
                  'to_module'=> 'ACLActions',
                  'language'=>'it_it'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Bugs/mod_strings_it_it.php',
                  'to_module'=> 'Bugs',
                  'language'=>'it_it'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Calendar/mod_strings_it_it.php',
                  'to_module'=> 'Calendar',
                  'language'=>'it_it'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Calls/mod_strings_it_it.php',
                  'to_module'=> 'Calls',
                  'language'=>'it_it'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Campaigns/mod_strings_it_it.php',
                  'to_module'=> 'Campaigns',
                  'language'=>'it_it'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Cases/mod_strings_it_it.php',
                  'to_module'=> 'Cases',
                  'language'=>'it_it'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Contacts/mod_strings_it_it.php',
                  'to_module'=> 'Contacts',
                  'language'=>'it_it'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Documents/mod_strings_it_it.php',
                  'to_module'=> 'Documents',
                  'language'=>'it_it'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Emails/mod_strings_it_it.php',
                  'to_module'=> 'Emails',
                  'language'=>'it_it'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/EmailTemplates/mod_strings_it_it.php',
                  'to_module'=> 'EmailTemplates',
                  'language'=>'it_it'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Leads/mod_strings_it_it.php',
                  'to_module'=> 'Leads',
                  'language'=>'it_it'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Meetings/mod_strings_it_it.php',
                  'to_module'=> 'Meetings',
                  'language'=>'it_it'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Notes/mod_strings_it_it.php',
                  'to_module'=> 'Notes',
                  'language'=>'it_it'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Opportunities/mod_strings_it_it.php',
                  'to_module'=> 'Opportunities',
                  'language'=>'it_it'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Project/mod_strings_it_it.php',
                  'to_module'=> 'Project',
                  'language'=>'it_it'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ProjectTask/mod_strings_it_it.php',
                  'to_module'=> 'ProjectTask',
                  'language'=>'it_it'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ProspectLists/mod_strings_it_it.php',
                  'to_module'=> 'ProspectLists',
                  'language'=>'it_it'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Prospects/mod_strings_it_it.php',
                  'to_module'=> 'Prospects',
                  'language'=>'it_it'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Tasks/mod_strings_it_it.php',
                  'to_module'=> 'Tasks',
                  'language'=>'it_it'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Users/mod_strings_it_it.php',
                  'to_module'=> 'Users',
                  'language'=>'it_it'
            ),
            //group layouts
            array('from'=> '<basepath>/install_dir/language/modules/ModuleBuilder/mod_strings_it_it.php',
                  'to_module'=> 'ModuleBuilder',
                  'language'=>'it_it'
            ),
        /** END ITALIAN it_it */
        /** FRENCH fr_fr */
            array (
                'from' => '<basepath>/install_dir/language/application/fr_fr.lang.php',
                'to_module' => 'application',
                'language' => 'fr_fr',
            ),
            array(
                'from'=> '<basepath>/install_dir/language/modules/Administration/fr_fr.admin.php',
                'to_module'=> 'Administration',
                'language'=>'fr_fr'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Accounts/mod_strings_fr_fr.php',
                  'to_module'=> 'Accounts',
                  'language'=>'fr_fr'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ACLActions/mod_strings_fr_fr.php',
                  'to_module'=> 'ACLActions',
                  'language'=>'fr_fr'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Bugs/mod_strings_fr_fr.php',
                  'to_module'=> 'Bugs',
                  'language'=>'fr_fr'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Calendar/mod_strings_fr_fr.php',
                  'to_module'=> 'Calendar',
                  'language'=>'fr_fr'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Calls/mod_strings_fr_fr.php',
                  'to_module'=> 'Calls',
                  'language'=>'fr_fr'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Campaigns/mod_strings_fr_fr.php',
                  'to_module'=> 'Campaigns',
                  'language'=>'fr_fr'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Cases/mod_strings_fr_fr.php',
                  'to_module'=> 'Cases',
                  'language'=>'fr_fr'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Contacts/mod_strings_fr_fr.php',
                  'to_module'=> 'Contacts',
                  'language'=>'fr_fr'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Documents/mod_strings_fr_fr.php',
                  'to_module'=> 'Documents',
                  'language'=>'fr_fr'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Emails/mod_strings_fr_fr.php',
                  'to_module'=> 'Emails',
                  'language'=>'fr_fr'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/EmailTemplates/mod_strings_fr_fr.php',
                  'to_module'=> 'EmailTemplates',
                  'language'=>'fr_fr'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Leads/mod_strings_fr_fr.php',
                  'to_module'=> 'Leads',
                  'language'=>'fr_fr'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Meetings/mod_strings_fr_fr.php',
                  'to_module'=> 'Meetings',
                  'language'=>'fr_fr'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Notes/mod_strings_fr_fr.php',
                  'to_module'=> 'Notes',
                  'language'=>'fr_fr'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Opportunities/mod_strings_fr_fr.php',
                  'to_module'=> 'Opportunities',
                  'language'=>'fr_fr'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Project/mod_strings_fr_fr.php',
                  'to_module'=> 'Project',
                  'language'=>'fr_fr'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ProjectTask/mod_strings_fr_fr.php',
                  'to_module'=> 'ProjectTask',
                  'language'=>'fr_fr'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ProspectLists/mod_strings_fr_fr.php',
                  'to_module'=> 'ProspectLists',
                  'language'=>'fr_fr'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Prospects/mod_strings_fr_fr.php',
                  'to_module'=> 'Prospects',
                  'language'=>'fr_fr'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Tasks/mod_strings_fr_fr.php',
                  'to_module'=> 'Tasks',
                  'language'=>'fr_fr'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Users/mod_strings_fr_fr.php',
                  'to_module'=> 'Users',
                  'language'=>'fr_fr'
            ),
            //group layouts
            array('from'=> '<basepath>/install_dir/language/modules/ModuleBuilder/mod_strings_fr_fr.php',
                  'to_module'=> 'ModuleBuilder',
                  'language'=>'fr_fr'
            ),
        /** END FRENCH fr_fr */
        /** BRAZILIAN PORTUGESE pt_br*/
            array (
                'from' => '<basepath>/install_dir/language/application/pt_br.lang.php',
                'to_module' => 'application',
                'language' => 'pt_br',
            ),
            array(
                'from'=> '<basepath>/install_dir/language/modules/Administration/pt_br.admin.php',
                'to_module'=> 'Administration',
                'language'=>'pt_br'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Accounts/mod_strings_pt_br.php',
                  'to_module'=> 'Accounts',
                  'language'=>'pt_br'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ACLActions/mod_strings_pt_br.php',
                  'to_module'=> 'ACLActions',
                  'language'=>'pt_br'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Bugs/mod_strings_pt_br.php',
                  'to_module'=> 'Bugs',
                  'language'=>'pt_br'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Calendar/mod_strings_pt_br.php',
                  'to_module'=> 'Calendar',
                  'language'=>'pt_br'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Calls/mod_strings_pt_br.php',
                  'to_module'=> 'Calls',
                  'language'=>'pt_br'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Campaigns/mod_strings_pt_br.php',
                  'to_module'=> 'Campaigns',
                  'language'=>'pt_br'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Cases/mod_strings_pt_br.php',
                  'to_module'=> 'Cases',
                  'language'=>'pt_br'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Contacts/mod_strings_pt_br.php',
                  'to_module'=> 'Contacts',
                  'language'=>'pt_br'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Documents/mod_strings_pt_br.php',
                  'to_module'=> 'Documents',
                  'language'=>'pt_br'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Emails/mod_strings_pt_br.php',
                  'to_module'=> 'Emails',
                  'language'=>'pt_br'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/EmailTemplates/mod_strings_pt_br.php',
                  'to_module'=> 'EmailTemplates',
                  'language'=>'pt_br'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Leads/mod_strings_pt_br.php',
                  'to_module'=> 'Leads',
                  'language'=>'pt_br'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Meetings/mod_strings_pt_br.php',
                  'to_module'=> 'Meetings',
                  'language'=>'pt_br'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Notes/mod_strings_pt_br.php',
                  'to_module'=> 'Notes',
                  'language'=>'pt_br'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Opportunities/mod_strings_pt_br.php',
                  'to_module'=> 'Opportunities',
                  'language'=>'pt_br'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Project/mod_strings_pt_br.php',
                  'to_module'=> 'Project',
                  'language'=>'pt_br'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ProjectTask/mod_strings_pt_br.php',
                  'to_module'=> 'ProjectTask',
                  'language'=>'pt_br'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ProspectLists/mod_strings_pt_br.php',
                  'to_module'=> 'ProspectLists',
                  'language'=>'pt_br'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Prospects/mod_strings_pt_br.php',
                  'to_module'=> 'Prospects',
                  'language'=>'pt_br'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Tasks/mod_strings_pt_br.php',
                  'to_module'=> 'Tasks',
                  'language'=>'pt_br'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Users/mod_strings_pt_br.php',
                  'to_module'=> 'Users',
                  'language'=>'pt_br'
            ),
            //group layouts
            array('from'=> '<basepath>/install_dir/language/modules/ModuleBuilder/mod_strings_pt_br.php',
                  'to_module'=> 'ModuleBuilder',
                  'language'=>'pt_br'
            ),
        /** END BRAZILIAN PORTUGESE pt_br */
        /** German de_de */
            array (
                'from' => '<basepath>/install_dir/language/application/de_de.lang.php',
                'to_module' => 'application',
                'language' => 'de_de',
            ),
            array(
                'from'=> '<basepath>/install_dir/language/modules/Administration/de_de.admin.php',
                'to_module'=> 'Administration',
                'language'=>'de_de'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Accounts/mod_strings_de_de.php',
                  'to_module'=> 'Accounts',
                  'language'=>'de_de'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ACLActions/mod_strings_de_de.php',
                  'to_module'=> 'ACLActions',
                  'language'=>'de_de'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Bugs/mod_strings_de_de.php',
                  'to_module'=> 'Bugs',
                  'language'=>'de_de'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Calendar/mod_strings_de_de.php',
                  'to_module'=> 'Calendar',
                  'language'=>'de_de'
            ),          
            array('from'=> '<basepath>/install_dir/language/modules/Calls/mod_strings_de_de.php',
                  'to_module'=> 'Calls',
                  'language'=>'de_de'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Campaigns/mod_strings_de_de.php',
                  'to_module'=> 'Campaigns',
                  'language'=>'de_de'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Cases/mod_strings_de_de.php',
                  'to_module'=> 'Cases',
                  'language'=>'de_de'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Contacts/mod_strings_de_de.php',
                  'to_module'=> 'Contacts',
                  'language'=>'de_de'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Documents/mod_strings_de_de.php',
                  'to_module'=> 'Documents',
                  'language'=>'de_de'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Emails/mod_strings_de_de.php',
                  'to_module'=> 'Emails',
                  'language'=>'de_de'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/EmailTemplates/mod_strings_de_de.php',
                  'to_module'=> 'EmailTemplates',
                  'language'=>'de_de'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Leads/mod_strings_de_de.php',
                  'to_module'=> 'Leads',
                  'language'=>'de_de'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Meetings/mod_strings_de_de.php',
                  'to_module'=> 'Meetings',
                  'language'=>'de_de'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Notes/mod_strings_de_de.php',
                  'to_module'=> 'Notes',
                  'language'=>'de_de'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Opportunities/mod_strings_de_de.php',
                  'to_module'=> 'Opportunities',
                  'language'=>'de_de'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Project/mod_strings_de_de.php',
                  'to_module'=> 'Project',
                  'language'=>'de_de'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ProjectTask/mod_strings_de_de.php',
                  'to_module'=> 'ProjectTask',
                  'language'=>'de_de'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ProspectLists/mod_strings_de_de.php',
                  'to_module'=> 'ProspectLists',
                  'language'=>'de_de'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Prospects/mod_strings_de_de.php',
                  'to_module'=> 'Prospects',
                  'language'=>'de_de'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Tasks/mod_strings_de_de.php',
                  'to_module'=> 'Tasks',
                  'language'=>'de_de'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Users/mod_strings_de_de.php',
                  'to_module'=> 'Users',
                  'language'=>'de_de'
            ),
            //group layouts
            array('from'=> '<basepath>/install_dir/language/modules/ModuleBuilder/mod_strings_de_de.php',
                  'to_module'=> 'ModuleBuilder',
                  'language'=>'de_de'
            ),
        /** END GERMAN de_de */
        /** German ge_ge */
        /**
            array (
                'from' => '<basepath>/install_dir/language/application/ge_ge.lang.php',
                'to_module' => 'application',
                'language' => 'ge_ge',
            ),
            array(
                'from'=> '<basepath>/install_dir/language/modules/Administration/ge_ge.admin.php',
                'to_module'=> 'Administration',
                'language'=>'ge_ge'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Accounts/mod_strings_ge_ge.php',
                  'to_module'=> 'Accounts',
                  'language'=>'ge_ge'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ACLActions/mod_strings_ge_ge.php',
                  'to_module'=> 'ACLActions',
                  'language'=>'ge_ge'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Bugs/mod_strings_ge_ge.php',
                  'to_module'=> 'Bugs',
                  'language'=>'ge_ge'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Calls/mod_strings_ge_ge.php',
                  'to_module'=> 'Calls',
                  'language'=>'ge_ge'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Campaigns/mod_strings_ge_ge.php',
                  'to_module'=> 'Campaigns',
                  'language'=>'ge_ge'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Cases/mod_strings_ge_ge.php',
                  'to_module'=> 'Cases',
                  'language'=>'ge_ge'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Contacts/mod_strings_ge_ge.php',
                  'to_module'=> 'Contacts',
                  'language'=>'ge_ge'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Documents/mod_strings_ge_ge.php',
                  'to_module'=> 'Documents',
                  'language'=>'ge_ge'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Emails/mod_strings_ge_ge.php',
                  'to_module'=> 'Emails',
                  'language'=>'ge_ge'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/EmailTemplates/mod_strings_ge_ge.php',
                  'to_module'=> 'EmailTemplates',
                  'language'=>'ge_ge'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Leads/mod_strings_ge_ge.php',
                  'to_module'=> 'Leads',
                  'language'=>'ge_ge'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Meetings/mod_strings_ge_ge.php',
                  'to_module'=> 'Meetings',
                  'language'=>'ge_ge'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Notes/mod_strings_ge_ge.php',
                  'to_module'=> 'Notes',
                  'language'=>'ge_ge'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Opportunities/mod_strings_ge_ge.php',
                  'to_module'=> 'Opportunities',
                  'language'=>'ge_ge'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Project/mod_strings_ge_ge.php',
                  'to_module'=> 'Project',
                  'language'=>'ge_ge'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ProjectTask/mod_strings_ge_ge.php',
                  'to_module'=> 'ProjectTask',
                  'language'=>'ge_ge'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ProspectLists/mod_strings_ge_ge.php',
                  'to_module'=> 'ProspectLists',
                  'language'=>'ge_ge'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Prospects/mod_strings_ge_ge.php',
                  'to_module'=> 'Prospects',
                  'language'=>'ge_ge'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Tasks/mod_strings_ge_ge.php',
                  'to_module'=> 'Tasks',
                  'language'=>'ge_ge'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Users/mod_strings_ge_ge.php',
                  'to_module'=> 'Users',
                  'language'=>'ge_ge'
            ),
        */
        /** END GERMAN ge_ge */
        /** RUSSIAN ru_ru */
            array (
                'from' => '<basepath>/install_dir/language/application/ru_ru.lang.php',
                'to_module' => 'application',
                'language' => 'ru_ru',
            ),
            array(
                'from'=> '<basepath>/install_dir/language/modules/Administration/ru_ru.admin.php',
                'to_module'=> 'Administration',
                'language'=>'ru_ru'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Accounts/mod_strings_ru_ru.php',
                  'to_module'=> 'Accounts',
                  'language'=>'ru_ru'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ACLActions/mod_strings_ru_ru.php',
                  'to_module'=> 'ACLActions',
                  'language'=>'ru_ru'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Bugs/mod_strings_ru_ru.php',
                  'to_module'=> 'Bugs',
                  'language'=>'ru_ru'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Calendar/mod_strings_ru_ru.php',
                  'to_module'=> 'Calendar',
                  'language'=>'ru_ru'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Calls/mod_strings_ru_ru.php',
                  'to_module'=> 'Calls',
                  'language'=>'ru_ru'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Campaigns/mod_strings_ru_ru.php',
                  'to_module'=> 'Campaigns',
                  'language'=>'ru_ru'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Cases/mod_strings_ru_ru.php',
                  'to_module'=> 'Cases',
                  'language'=>'ru_ru'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Contacts/mod_strings_ru_ru.php',
                  'to_module'=> 'Contacts',
                  'language'=>'ru_ru'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Documents/mod_strings_ru_ru.php',
                  'to_module'=> 'Documents',
                  'language'=>'ru_ru'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Emails/mod_strings_ru_ru.php',
                  'to_module'=> 'Emails',
                  'language'=>'ru_ru'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/EmailTemplates/mod_strings_ru_ru.php',
                  'to_module'=> 'EmailTemplates',
                  'language'=>'ru_ru'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Leads/mod_strings_ru_ru.php',
                  'to_module'=> 'Leads',
                  'language'=>'ru_ru'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Meetings/mod_strings_ru_ru.php',
                  'to_module'=> 'Meetings',
                  'language'=>'ru_ru'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Notes/mod_strings_ru_ru.php',
                  'to_module'=> 'Notes',
                  'language'=>'ru_ru'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Opportunities/mod_strings_ru_ru.php',
                  'to_module'=> 'Opportunities',
                  'language'=>'ru_ru'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Project/mod_strings_ru_ru.php',
                  'to_module'=> 'Project',
                  'language'=>'ru_ru'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ProjectTask/mod_strings_ru_ru.php',
                  'to_module'=> 'ProjectTask',
                  'language'=>'ru_ru'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ProspectLists/mod_strings_ru_ru.php',
                  'to_module'=> 'ProspectLists',
                  'language'=>'ru_ru'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Prospects/mod_strings_ru_ru.php',
                  'to_module'=> 'Prospects',
                  'language'=>'ru_ru'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Tasks/mod_strings_ru_ru.php',
                  'to_module'=> 'Tasks',
                  'language'=>'ru_ru'
            ),
            /**
            array('from'=> '<basepath>/install_dir/language/modules/Users/mod_strings_ru_ru.php',
                  'to_module'=> 'Users',
                  'language'=>'ru_ru'
            ),
            */
            //group layouts
            array('from'=> '<basepath>/install_dir/language/modules/ModuleBuilder/mod_strings_ru_ru.php',
                  'to_module'=> 'ModuleBuilder',
                  'language'=>'ru_ru'
            ),
        /** END RUSSIAN ru_ru */
        /** UKRAINIAN ua_ua */
            array (
                'from' => '<basepath>/install_dir/language/application/ua_ua.lang.php',
                'to_module' => 'application',
                'language' => 'ua_ua',
            ),
            array(
                'from'=> '<basepath>/install_dir/language/modules/Administration/ua_ua.admin.php',
                'to_module'=> 'Administration',
                'language'=>'ua_ua'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Accounts/mod_strings_ua_ua.php',
                  'to_module'=> 'Accounts',
                  'language'=>'ua_ua'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ACLActions/mod_strings_ua_ua.php',
                  'to_module'=> 'ACLActions',
                  'language'=>'ua_ua'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Bugs/mod_strings_ua_ua.php',
                  'to_module'=> 'Bugs',
                  'language'=>'ua_ua'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Calendar/mod_strings_ua_ua.php',
                  'to_module'=> 'Calendar',
                  'language'=>'ua_ua'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Calls/mod_strings_ua_ua.php',
                  'to_module'=> 'Calls',
                  'language'=>'ua_ua'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Campaigns/mod_strings_ua_ua.php',
                  'to_module'=> 'Campaigns',
                  'language'=>'ua_ua'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Cases/mod_strings_ua_ua.php',
                  'to_module'=> 'Cases',
                  'language'=>'ua_ua'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Contacts/mod_strings_ua_ua.php',
                  'to_module'=> 'Contacts',
                  'language'=>'ua_ua'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Documents/mod_strings_ua_ua.php',
                  'to_module'=> 'Documents',
                  'language'=>'ua_ua'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Emails/mod_strings_ua_ua.php',
                  'to_module'=> 'Emails',
                  'language'=>'ua_ua'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/EmailTemplates/mod_strings_ua_ua.php',
                  'to_module'=> 'EmailTemplates',
                  'language'=>'ua_ua'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Leads/mod_strings_ua_ua.php',
                  'to_module'=> 'Leads',
                  'language'=>'ua_ua'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Meetings/mod_strings_ua_ua.php',
                  'to_module'=> 'Meetings',
                  'language'=>'ua_ua'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Notes/mod_strings_ua_ua.php',
                  'to_module'=> 'Notes',
                  'language'=>'ua_ua'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Opportunities/mod_strings_ua_ua.php',
                  'to_module'=> 'Opportunities',
                  'language'=>'ua_ua'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Project/mod_strings_ua_ua.php',
                  'to_module'=> 'Project',
                  'language'=>'ua_ua'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ProjectTask/mod_strings_ua_ua.php',
                  'to_module'=> 'ProjectTask',
                  'language'=>'ua_ua'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ProspectLists/mod_strings_ua_ua.php',
                  'to_module'=> 'ProspectLists',
                  'language'=>'ua_ua'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Prospects/mod_strings_ua_ua.php',
                  'to_module'=> 'Prospects',
                  'language'=>'ua_ua'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Tasks/mod_strings_ua_ua.php',
                  'to_module'=> 'Tasks',
                  'language'=>'ua_ua'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Users/mod_strings_ua_ua.php',
                  'to_module'=> 'Users',
                  'language'=>'ua_ua'
            ),
            //group layouts
            array('from'=> '<basepath>/install_dir/language/modules/ModuleBuilder/mod_strings_ua_ua.php',
                  'to_module'=> 'ModuleBuilder',
                  'language'=>'ua_ua'
            ),
        /** END UKRAINIAN ua_ua */
        /** Dutch nl_nl */
            array (
                'from' => '<basepath>/install_dir/language/application/nl_nl.lang.php',
                'to_module' => 'application',
                'language' => 'nl_nl',
            ),
            array(
                'from'=> '<basepath>/install_dir/language/modules/Administration/nl_nl.admin.php',
                'to_module'=> 'Administration',
                'language'=>'nl_nl'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Accounts/mod_strings_nl_nl.php',
                  'to_module'=> 'Accounts',
                  'language'=>'nl_nl'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ACLActions/mod_strings_nl_nl.php',
                  'to_module'=> 'ACLActions',
                  'language'=>'nl_nl'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Bugs/mod_strings_nl_nl.php',
                  'to_module'=> 'Bugs',
                  'language'=>'nl_nl'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Calendar/mod_strings_nl_nl.php',
                  'to_module'=> 'Calendar',
                  'language'=>'nl_nl'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Calls/mod_strings_nl_nl.php',
                  'to_module'=> 'Calls',
                  'language'=>'nl_nl'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Campaigns/mod_strings_nl_nl.php',
                  'to_module'=> 'Campaigns',
                  'language'=>'nl_nl'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Cases/mod_strings_nl_nl.php',
                  'to_module'=> 'Cases',
                  'language'=>'nl_nl'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Contacts/mod_strings_nl_nl.php',
                  'to_module'=> 'Contacts',
                  'language'=>'nl_nl'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Documents/mod_strings_nl_nl.php',
                  'to_module'=> 'Documents',
                  'language'=>'nl_nl'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Emails/mod_strings_nl_nl.php',
                  'to_module'=> 'Emails',
                  'language'=>'nl_nl'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/EmailTemplates/mod_strings_nl_nl.php',
                  'to_module'=> 'EmailTemplates',
                  'language'=>'nl_nl'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Leads/mod_strings_nl_nl.php',
                  'to_module'=> 'Leads',
                  'language'=>'nl_nl'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Meetings/mod_strings_nl_nl.php',
                  'to_module'=> 'Meetings',
                  'language'=>'nl_nl'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Notes/mod_strings_nl_nl.php',
                  'to_module'=> 'Notes',
                  'language'=>'nl_nl'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Opportunities/mod_strings_nl_nl.php',
                  'to_module'=> 'Opportunities',
                  'language'=>'nl_nl'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Project/mod_strings_nl_nl.php',
                  'to_module'=> 'Project',
                  'language'=>'nl_nl'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ProjectTask/mod_strings_nl_nl.php',
                  'to_module'=> 'ProjectTask',
                  'language'=>'nl_nl'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ProspectLists/mod_strings_nl_nl.php',
                  'to_module'=> 'ProspectLists',
                  'language'=>'nl_nl'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Prospects/mod_strings_nl_nl.php',
                  'to_module'=> 'Prospects',
                  'language'=>'nl_nl'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Tasks/mod_strings_nl_nl.php',
                  'to_module'=> 'Tasks',
                  'language'=>'nl_nl'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Users/mod_strings_nl_nl.php',
                  'to_module'=> 'Users',
                  'language'=>'nl_nl'
            ),
            //group layouts
            array('from'=> '<basepath>/install_dir/language/modules/ModuleBuilder/mod_strings_nl_nl.php',
                  'to_module'=> 'ModuleBuilder',
                  'language'=>'nl_nl'
            ),
        /** END Dutch nl_nl */
        /** HUNGARIAN hu_hu */
            array (
                'from' => '<basepath>/install_dir/language/application/hu_hu.lang.php',
                'to_module' => 'application',
                'language' => 'hu_hu',
            ),
            array(
                'from'=> '<basepath>/install_dir/language/modules/Administration/hu_hu.admin.php',
                'to_module'=> 'Administration',
                'language'=>'hu_hu'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Accounts/mod_strings_hu_hu.php',
                  'to_module'=> 'Accounts',
                  'language'=>'hu_hu'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ACLActions/mod_strings_hu_hu.php',
                  'to_module'=> 'ACLActions',
                  'language'=>'hu_hu'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Bugs/mod_strings_hu_hu.php',
                  'to_module'=> 'Bugs',
                  'language'=>'hu_hu'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Calendar/mod_strings_hu_hu.php',
                  'to_module'=> 'Calendar',
                  'language'=>'hu_hu'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Calls/mod_strings_hu_hu.php',
                  'to_module'=> 'Calls',
                  'language'=>'hu_hu'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Campaigns/mod_strings_hu_hu.php',
                  'to_module'=> 'Campaigns',
                  'language'=>'hu_hu'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Cases/mod_strings_hu_hu.php',
                  'to_module'=> 'Cases',
                  'language'=>'hu_hu'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Contacts/mod_strings_hu_hu.php',
                  'to_module'=> 'Contacts',
                  'language'=>'hu_hu'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Documents/mod_strings_hu_hu.php',
                  'to_module'=> 'Documents',
                  'language'=>'hu_hu'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Emails/mod_strings_hu_hu.php',
                  'to_module'=> 'Emails',
                  'language'=>'hu_hu'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/EmailTemplates/mod_strings_hu_hu.php',
                  'to_module'=> 'EmailTemplates',
                  'language'=>'hu_hu'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Leads/mod_strings_hu_hu.php',
                  'to_module'=> 'Leads',
                  'language'=>'hu_hu'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Meetings/mod_strings_hu_hu.php',
                  'to_module'=> 'Meetings',
                  'language'=>'hu_hu'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Notes/mod_strings_hu_hu.php',
                  'to_module'=> 'Notes',
                  'language'=>'hu_hu'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Opportunities/mod_strings_hu_hu.php',
                  'to_module'=> 'Opportunities',
                  'language'=>'hu_hu'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Project/mod_strings_hu_hu.php',
                  'to_module'=> 'Project',
                  'language'=>'hu_hu'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ProjectTask/mod_strings_hu_hu.php',
                  'to_module'=> 'ProjectTask',
                  'language'=>'hu_hu'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/ProspectLists/mod_strings_hu_hu.php',
                  'to_module'=> 'ProspectLists',
                  'language'=>'hu_hu'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Prospects/mod_strings_hu_hu.php',
                  'to_module'=> 'Prospects',
                  'language'=>'hu_hu'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Tasks/mod_strings_hu_hu.php',
                  'to_module'=> 'Tasks',
                  'language'=>'hu_hu'
            ),
            array('from'=> '<basepath>/install_dir/language/modules/Users/mod_strings_hu_hu.php',
                  'to_module'=> 'Users',
                  'language'=>'hu_hu'
            ),
            //group layouts
            array('from'=> '<basepath>/install_dir/language/modules/ModuleBuilder/mod_strings_hu_hu.php',
                  'to_module'=> 'ModuleBuilder',
                  'language'=>'hu_hu'
            ),
        /** END HUNGARIAN hu_hu */
        ),

    'administration' =>
        array(
            array(
                'from'=>'<basepath>/install_dir/modules/Administration/securitygroupsadminoption.php',
                'to' => 'modules/Administration/securitygroupsadminoption.php',
            ),
        ),
    'menu'=> array(
        array(
        'from'=> '<basepath>/install_dir/menus/ACLRoles/Menu.php',
        'to_module'=> 'ACLRoles',
        ),
        array(
        'from'=> '<basepath>/install_dir/menus/Users/Menu.php',
        'to_module'=> 'Users',
        ),
        array(
        'from'=> '<basepath>/install_dir/menus/Users/Masquerade.php',
        'to_module'=> 'Users',
        ),

        array(
        'from'=> '<basepath>/install_dir/menus/application/Menu.php',
        'to_module'=> 'application',
        ),

    ),

    'utils' => array(
        array (
            'from' => '<basepath>/install_dir/utils/application/SecurityGroupsUtils.php',
        ),
    ),
    'action_view_map' => array (
        array(
            'from'=> '<basepath>/license_admin/actionviewmap/SecurityGroups_actionviewmap.php',
            'to_module'=> 'SecurityGroups',
        ),
    ),

    'logic_hooks' =>
        array(
            array(
                'module'         => '',
                'hook'           => 'after_ui_footer',
                'order'          => 10,
                'description'    => 'popup_onload',
                'file'           => 'modules/SecurityGroups/AssignGroups.php',
                'class'          => 'AssignGroups',
                'function'       => 'popup_onload',
            ),
            array(
                'module'         => '',
                'hook'           => 'after_ui_frame',
                'order'          => 20,
                'description'    => 'mass_assign',
                'file'           => 'modules/SecurityGroups/AssignGroups.php',
                'class'          => 'AssignGroups',
                'function'       => 'mass_assign',
            ),
            array(
                'module'         => '',
                'hook'           => 'after_save',
                'order'          => 30,
                'description'    => 'popup_select',
                'file'           => 'modules/SecurityGroups/AssignGroups.php',
                'class'          => 'AssignGroups',
                'function'       => 'popup_select',
            ),
            array(
                'module'         => '',
                'hook'           => 'after_ui_frame',
                'order'          => 40,
                'description'    => 'version_check',
                'file'           => 'modules/SecurityGroups/VersionCheck.php',
                'class'          => 'VersionCheck',
                'function'       => 'version_check',
            ),
        ),
);

?>