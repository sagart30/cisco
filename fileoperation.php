<?php

error_reporting(0);

if(is_numeric($argv[1])){

	shell_exec("mkdir zipfolder");
	shell_exec("cd zipfolder");

	for($i = 0; $i < $argv[1]; $i++){
		shell_exec("touch txt_$i.txt");
	}

	shell_exec("cd ..");
	shell_exec("zip -r temp.zip zipfolder");
	shell_exec("wget temp.zip");
}
