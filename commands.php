<?php
error_reporting(0);

//Shows the amount of disk space used and available on Linux file systems
$output = shell_exec('df');
echo "<pre>$output</pre>";

//Display the amount of disk space used by the specified files and for each subdirectory.
$output = shell_exec('du');
echo "<pre>$output</pre>";


//Inode usage
$output = shell_exec('ls -lai /');
echo "<pre>$output</pre>";

//List of files
$output = shell_exec('ls -a /');
echo "<pre>$output</pre>";


//copy files 
//change to target directory
shell_exec('ftp> cd target-directory');
//Ensure that you have write permission to the target directory.
shell_exec('ftp> ls -l target-directory');
//Set the transfer type to binary.
shell_exec('ftp> binary');
//To copy a single file, use the put command.
shell_exec('ftp> put filename.txt');
//To copy a single file, use the put command.
shell_exec('ftp> bye');


//Using SFTP
shell_exec('sftp remote-system');
shell_exec('Password: password');
shell_exec('sftp> lcd target-directory');
shell_exec('sftp> cd source-directory');
shell_exec('sftp> ls -l');
shell_exec('sftp> get filename.txt');
shell_exec('sftp> bye');

//Using SCP
shell_exec('scp dvader@empire.gov:~/luke.txt dvader@deathstar.com:~/revenge');
