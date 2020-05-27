<?php
error_reporting(0);

//Command to monitro server performance
$output = shell_exec("top");
echo "<pre>".$output."</pre>";

//Process consumes more memory
$output1 = shell_exec("ps -eo pid,ppid,cmd,%mem,%cpu --sort=-%mem | head");
echo "<pre>".$output1."</pre>";

