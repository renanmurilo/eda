<?php

   $ftp_server = "179.99.202.249";
   $ftp_user_name = "eda";
   $ftp_user_pass = "EdA$$1960EPmI@@AdE";
   $ftp_port = "38196";

$cHandle = ftp_ssl_connect($ftp_server) or die("O Servidor não pode se conectar ao FTP");

$login_result = ftp_login($cHandle, $ftp_user_name, $ftp_user_pass) or die("O Servidor não pode logar-se no FTP!");
ftp_login($cHandle,$ftp_user_name,$ftp_user_pass);

$dir = "/";

$arq= "LISTA.csv";

$check_file_exist = $dir.$arq;

$contents_on_server = ftp_nlist($cHandle, $dir);

if (!in_array($check_file_exist, $contents_on_server)) 
{
    echo 'Arquivo Inexistente';
}else 
{
    echo ' Arquivo Existente';
}



/*
    
$search="23105995000150_78489";

    $lines = file('LISTA.csv');
    foreach($lines as $line)
    {

       
      // if(strpos($line, $search) !== false)
       // echo $line."<br>";


        if (strpos($line, $search) !== false) {
         
            $pieces = explode(",", $line);
            //echo $line."<br>";
            $busca= $pieces[5]; // piece1
            echo "<a href='arquivo.php?arquivo=$busca.pdf' target='_blank'>".$busca."</a><br><br>";
            //break;
        }
    }
 
 */   
    
?>