<?php


$ftp_server = "179.99.202.249";
$ftp_user_name = "eda";
$ftp_user_pass = "EdA$$1960EPmI@@AdE";
$ftp_port = "38196";

$conn_id = ftp_ssl_connect($ftp_server, $ftp_port)
    or die("Couldn't connect to $ftp_server");


// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
ftp_set_option($conn_id, FTP_USEPASVADDRESS, false); // set ftp option
ftp_pasv($conn_id, true); //make connection to passive mode
// get the file list for /
$buff = ftp_rawlist($conn_id, 'teste/');

// close the connection
ftp_close($conn_id);

// output the buffer
var_dump($buff);


?>