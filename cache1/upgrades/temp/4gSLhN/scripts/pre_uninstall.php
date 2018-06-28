Running pre_uninstall...
<?php
if (! defined('sugarEntry') || ! sugarEntry)
	die('Not A Valid Entry Point');


function pre_uninstall() {

	//a couple of custom metadata files do not get properly removed
	$rel_name = "securitygroups_message";
	$filename = "$rel_name.php";
	
			foreach (array($filename , "custom" . $filename) as $fn) {
				// remove the table dictionary extension
				if ( file_exists("custom/Extension/application/Ext/TableDictionary/$fn"))
				    unlink("custom/Extension/application/Ext/TableDictionary/$fn");
				
				if (file_exists("custom/metadata/{$rel_name}MetaData.php")) 
					unlink( "custom/metadata/{$rel_name}MetaData.php" );
			}
	$rel_name = "securitygroups_defaults";
	$filename = "$rel_name.php";			
	
			foreach (array($filename , "custom" . $filename) as $fn) {
				// remove the table dictionary extension
				if ( file_exists("custom/Extension/application/Ext/TableDictionary/$fn"))
				    unlink("custom/Extension/application/Ext/TableDictionary/$fn");
				
				if (file_exists("custom/metadata/{$rel_name}MetaData.php")) 
					unlink( "custom/metadata/{$rel_name}MetaData.php" );
			}
	$rel_name = "securitygroups_records";
	$filename = "$rel_name.php";			
	
			foreach (array($filename , "custom" . $filename) as $fn) {
				// remove the table dictionary extension
				if ( file_exists("custom/Extension/application/Ext/TableDictionary/$fn"))
				    unlink("custom/Extension/application/Ext/TableDictionary/$fn");
				
				if (file_exists("custom/metadata/{$rel_name}MetaData.php")) 
					unlink( "custom/metadata/{$rel_name}MetaData.php" );
			}
}
?>