<?php

// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future.

//Swapnil start 6 june 2011

 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['after_save'][] = Array(1, 'handleactivity', 'custom/modules/test_New_Module/HandleActivity.php','HandleActivity', 'handleactivities');
$hook_array['after_save'][] = Array(2, 'handleactivity2', 'custom/modules/test_New_Module/HandleActivity2.php','HandleActivity2', 'handleactivities2');

$hook_array['after_save'][] = Array(3, 'handleactivity3', 'custom/modules/test_New_Module/HandleActivity3.php','HandleActivity3', 'handleactivities3');

?>