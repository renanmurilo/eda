<?php
/*
$ftp_server = "impeda.com.br";
$ftp_user_name = "u789357642.suporte";
$ftp_user_pass = "3NJDT2LGrBJHs7P";
$ftp_port = "21";

$ftp_conn = ftp_connect($ftp_server,$ftp_port) or die("Could not connect to $ftp_server");
$login = ftp_login($ftp_conn, $ftp_user_name, $ftp_user_pass);


$filelist = ftp_nlist($ftp_conn, "/boleto/pdfs");


foreach ($filelist  as $arquivos){

        
        echo $arquivos."<br>";

}


ftp_close($ftp_conn);

*/


//////////////////// server intranet.impeda.com.br
/*
$ftp_server = "179.99.202.249";
$ftp_user_name = "eda";
$ftp_user_pass = "EdA$$1960EPmI@@AdE";
$ftp_port = "38196";

$ftp_conn = ftp_ssl_connect($ftp_server,$ftp_port) or die("Could not connect to $ftp_server");

$login = ftp_login($ftp_conn, $ftp_user_name, $ftp_user_pass);


$filelist = ftp_rawlist($ftp_conn, "/");
*/

/*
foreach ($filelist  as $arquivos){

        echo $arquivos."<br>";

}

*/
/*
ftp_close($ftp_conn);

var_dump($filelist);
*/


$ftp_server = "179.99.202.249";
$ftp_user_name = "eda";
$ftp_user_pass = "EdA$$1960EPmI@@AdE";
$ftp_port = "38196";

$dir = '/';

// set up basic connection
$conn_id = ftp_ssl_connect($ftp_server, $ftp_port);

// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
ftp_set_option($conn_id, FTP_USEPASVADDRESS, false); // set ftp option
ftp_pasv($conn_id, true); //make connection to passive mode

if ((!$conn_id) || (!$login_result)) {
        die("FTP connection has failed !");
     }
     echo "<br />Login Ok.<br />";



$cnpj="02172517000193";
$note="76873";
$busca=$cnpj."_".$note;


// get the file list for /
$file_list = ftp_nlist($conn_id, "/$busca*.pdf");


$totalArquivo=array($file_list);
//print_r($totalArquivo) ;




foreach ($file_list as $arquivo) {

        //echo "<a href='$busca/.pdf' download>".substr($busca, 20, 34)."</a><br><br>";
        echo "<a href='$arquivo' download>".substr($arquivo, 10, 40)."</a><br><br>";


       
    }
    echo "Foram encontrado(s) ".count($file_list)." arquivo(s).";
    echo"<br>";
    echo"<br>";
    echo"<br>";
    echo"<br>";
    echo"<br>";
    echo"<br>";
    echo"<br>";
    echo"<br>";
    echo"<br>";
    echo"<br>";
    echo"<br>";
    echo "<a href=\"index.php\" class=\"button left btn\">Nova Pesquisa</a>";
    echo"<br>";
    echo"<br>";
    echo"<br>";


      
//var_dump($file_list);


// close the connection
ftp_close($conn_id);




?>

