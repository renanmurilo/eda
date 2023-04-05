
<?php
    $arquivo=$_GET['arquivo'];
    $ftp_server = "179.99.202.249";
    $ftp_user_name = "eda";
    $ftp_user_pass = "EdA$$1960EPmI@@AdE";
    $ftp_port = "38196";
    // define some variables
    $local_file = "$arquivo";
    $server_file = $arquivo;
    
    
    // set up basic connection
    $conn_id = ftp_ssl_connect($ftp_server, $ftp_port);
    
    // login with username and password
    $login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
    ftp_set_option($conn_id, FTP_USEPASVADDRESS, false); // set ftp option
    ftp_pasv($conn_id, true); //make connection to passive mode
    
    if ((!$conn_id) || (!$login_result)) {
            die("FTP connection has failed !");
         }
    //     echo "<br />Login Ok.<br />";
    
    // try to download $server_file and save to $local_file
    if (ftp_get($conn_id, $local_file, $server_file, FTP_BINARY)) {
      // echo "baixado com sucesso $local_file\n";
       echo "<a href='$local_file' download>".substr($$local_file, 16, 34)."</a><br><br>";
       
        header("location:$local_file");
    } else {
        echo "Problema no download\n";
    }
    
    // close the connection
    ftp_close($conn_id);


?>