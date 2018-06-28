<?php
if (! defined('sugarEntry') || ! sugarEntry)
	die('Not A Valid Entry Point');


function pre_install() {
	//This is to put temporary fixes to bugs in Sugar that cause either Sugar not to work or SecuritySuite

	//uninstall doesn't restore original files
	/**
	echo "Fixing <a href='http://www.sugarcrm.com/crm/support/bugs.html?task=view&caseID=b3d05c10-9141-368b-3b22-4c83db78835d'>Sugar Bug #39490</a> until fix is made...<br/>";
	$filename = 'ModuleInstall/ModuleInstaller.php';
	*/
/**
	$base_tmp_upgrade_dir   = sugar_cached('upgrades/temp');

	//this has been fixed as of 6.5.5
	echo "Fixing ModuleInstaller.php issue so that modules uninstall correctly...";
	$filename = 'ModuleInstall/ModuleInstaller.php';
	$source = $base_tmp_upgrade_dir .'/'. $_REQUEST['unzip_dir'] . '/sugarfix/'.$filename;
	$dest = $filename;

	echo "Copying $source to $dest<br/>";
	copy( $source, $dest );
*/
/**
	echo "Fixing Sugar bug where after_ui_frame logic hook is called twice on page load until fix is made...<br/>";
	$filename = 'include/MVC/View/SugarView.php';
	$source = $_REQUEST['unzip_dir'] . '/sugarfix/'.$filename;
	$dest = $filename;

	echo "Copying $source to $dest<br/>";
	copy( $source, $dest );
*/


}
?>