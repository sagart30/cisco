<?php
error_reporting(0);

$cores = shell_exec("nproc --all");
$arr_load = explode(" ", shell_exec("cat /proc/loadavg"));
if(is_numeric($arr_load[0])){
	($arr_load[0] - $cores < 0.0000){
	shell_exec("service httpd restart");
	}
}
