<?php

$outfitters_config = array(
    'name' => 'SecurityGroups', //The matches the id value in your manifest file. This allow the library to lookup addon version from upgrade_history, so you can see what version of addon your customers are using
    'shortname' => 'securitysuite', //The short name of the Add-on. e.g. For the url https://www.sugaroutfitters.com/addons/sugaroutfitters the shortname would be sugaroutfitters


    'public_key' => 'ed757ceaef6ab1ada555d0da1c8cb74e', //The public key associated with the group

    'api_url' => 'https://www.sugaroutfitters.com/api/v1',
    'validate_users' => false,
    'validation_frequency' => 'weekly', //default: weekly options: hourly, daily, weekly
    'continue_url' => 'index.php?module=SecurityGroups&action=info', //[optional] Will show a button after license validation that will redirect to this page. Could be used to redirect to a configuration page such as index.php?module=MyCustomModule&action=config
);

