<?php

    /*
        Core Setup File
        @Version: 1.0.0
    */

    define('ROOTDIR', __DIR__);
    
    if(!file_exists(ROOTDIR . '/config.php')){
        die('Create new configuration page.');
    }
    require_once(ROOTDIR . '/config.php');

    require_once(ROOTDIR . '/engine/hewparg.fw.php');
?>