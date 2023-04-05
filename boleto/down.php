<?php
//$arquivo=$_GET['arquivo'];
//var_dump($_GET);  
//$cnpj="02172517000193";
//$note="76873";
//$busca=$cnpj."_".$note.".pdf";
//$busca="22131786000119_78301-C.pdf";

$local_file = 'teste/04649305000180_78215-A.pdf';

$server_file = '/04649305000180_78215-A.pdf';

$ftp_server="179.99.202.249"; //exemplo

$conn_id = ftp_ssl_connect($ftp_server,38196)or die("Erro de conexão com  $ftp_server");

$ftp_user_name= "eda";

$ftp_user_pass="EdA$$1960EPmI@@AdE";

$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass) or die("Não foi possível realizar o Login");

ftp_pasv($conn_id, true) or die("Não foi possível mudar para o modo passivo");

if (ftp_get($conn_id, $local_file, $server_file, FTP_ASCII)) {

  echo "Transferência da licença foi executada com sucesso\n";

}
else{

  echo "Verifique e tente novamente\n";
}

ftp_close($conn_id);
/*

$ftp_server = "179.99.202.249";
$ftp_user_name = "eda";
$ftp_user_pass = "EdA$$1960EPmI@@AdE";
$ftp_port = "38196";

    
    // set up basic connection
    $conn_id = ftp_ssl_connect($ftp_server, $ftp_port);
    
    // login with username and password
    $login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
    ftp_set_option($conn_id, FTP_USEPASVADDRESS, false); // set ftp option
    ftp_pasv($conn_id, true); //make connection to passive mode
    
// Informa sucesso ou não da conexão
if (isset($login)) {
    echo "conectado";
}else{
    echo "não conectado";
}

// Habilita o modo Passivo
ftp_pasv($conn_id, true);

// Recebe lista dos arquivos do ftp
$lista = ftp_nlist($conn_id, '/');

// Imprime var_dump
//var_dump($lista);


// Imprime foreach
foreach ($lista as $item) {
        //echo $item . "<br />";
        $local_file=$item;
        $server_file=$item;

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
            if (ftp_get($conn_id, "boletos/$local_file", $server_file, FTP_BINARY)) {
            // echo "Successfully written to $local_file\n";
                echo "<a href='$local_file' download>".substr($$local_file, 16, 34)."</a><br><br>";
            } else {
                echo "There was a problem\n";
            }
            
            // close the connection
            ftp_close($conn_id);
        
}

// Fecha conexão ftp
ftp_close($conn_id);

*/









/*
$ftp_server = "179.99.202.249";
$ftp_user_name = "eda";
$ftp_user_pass = "EdA$$1960EPmI@@AdE";
$ftp_port = "38196";

$conn_id = ftp_ssl_connect($ftp_server, $ftp_port)
    or die("Couldn't connect to $ftp_server");
   
$login_result = ftp_login($conn_id,$ftp_user_name, $ftp_user_pass);
ftp_pasv($conn_id, true); //make connection to passive mode
if ((!$conn_id) || (!$login_result))
    die("FTP Connection Failed");

ftp_sync ("boletos");    // Use "." if you are in the current directory

ftp_close($conn_id); 

// ftp_sync - Copy directory and file structure
function ftp_sync ($dir) {

    global $conn_id;

    if ($dir != ".") {
        if (ftp_chdir($conn_id, $dir) == false) {
            echo ("Change Dir Failed: $dir<BR>\r\n");
            return;
        }
        if (!(is_dir($dir)))
            mkdir($dir);
        chdir ($dir);
    }

    $contents = ftp_nlist($conn_id, ".");
    foreach ($contents as $file) {
   
        if ($file == '.' || $file == '..')
            continue;
       
        if (@ftp_chdir($conn_id, $file)) {
            ftp_chdir ($conn_id, "..");
            ftp_sync ($file);
        }
        else
            ftp_get($conn_id, $file, $file, FTP_BINARY);
    }
       
    ftp_chdir ($conn_id, "..");
    chdir ("..");

}

*/

?>