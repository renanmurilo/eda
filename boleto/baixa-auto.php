<?php



/*

Não apague esse arquivo. 
ele é usado para download da lista.csv ftp para o domínio.
Dúvidas entrar em contato 
evaldo@snieto.com.br
11 97643-4429


*/

$local_file = 'LISTA.csv';
$server_file = 'LISTA.csv';
$ftp_server="179.99.202.249";
$ftp_user_name="eda";
$ftp_porta="38196";
$ftp_user_pass="EdA$$1960EPmI@@AdE";


try
{
    $conn_id = ftp_ssl_connect($ftp_server,$ftp_porta);
    
    // login with username and password
    $login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
    
    // turn passive mode on
    ftp_pasv($conn_id, true);
    
    // try to download $server_file and save to $local_file
    if (ftp_get($conn_id, $local_file, $server_file, FTP_BINARY)) {
        echo "Successfully written to $local_file\n";
    
        $to = "eda.matias@impeda.com.br";
        $subject = "Boleto: LISTA.csv copiado com sucesso";
        $txt = "Arquivo LISTA.csv copiado com sucesso para o site via FTP.";
        $headers = "From: impeda@impeda.com.br";
    
        /*mail($to,$subject,$txt,$headers);*/
    }
    else {
        echo "There was a problem\n";
        $to = "eda.matias@impeda.com.br";
        $subject = "Boleto: falha na cópia do LISTA.csv";
        $txt = "Erro ao copiar arquivo LISTA.csv para o site via FTP.";
        $headers = "From: impeda@impeda.com.br";
    
        mail($to,$subject,$txt,$headers);
    }
    // close the connection
    ftp_close($conn_id);
}
catch (Exception $e)
{
    echo $e->getMessage() . "\n";
}


?>