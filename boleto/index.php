<!DOCTYPE html>
<html>
   <!--<![endif]-->
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title>Importadora EDA |   FORNOS E TORNOS</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width">
      <meta name="robots" content="index,follow">
      <link href="http://impeda.com.br/wp-content/themes/eda/favicon.ico" rel="shortcut icon" type="image/x-icon">
      <!-- <link rel="stylesheet" href="http://impeda.com.br/wp-content/themes/eda/style.css"> -->
      <!-- <link rel="stylesheet" href="http://impeda.com.br/wp-content/themes/eda/lightbox.css" /> -->
      <!-- <link rel="stylesheet" href="http://impeda.com.br/wp-content/themes/eda/mobile.css" /> -->
      <link rel="stylesheet" type="text/css" href="./Importadora EDA _ FORNOS E TORNOS_files/3wnw5.css" media="all">
      <script async="" src="./Importadora EDA _ FORNOS E TORNOS_files/analytics.js.download"></script><script src="./Importadora EDA _ FORNOS E TORNOS_files/3wnw5.js.download" type="text/javascript"></script>
      <!-- <script src="http://impeda.com.br/wp-content/themes/eda/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script> -->
   </head>
   <body class="page-template-default page page-id-2847 page-parent cstmsrch_www.impeda.com.br elementor-default">
      <div class="main">
         <div class="container">
            <br>
            <div class="six columns text-center-mb">
               <h1>2ª Via de Boleto(s)</h1>
            </div>
            <div class="six columns"></div>
            <hr>
            <br>

            <div class="eight columns offset-by-one">
               <?php
                  if(isset($_GET['baixar'])) {
                  extract($_GET);
                  
                  
                  $arq = $nameFile2;
                  
                  function retorna_extensao($arq){ // função q pega a extensão do arquivo
                  $arr = explode('.', $arq);
                  $num = count($arr)-1;
                  $ext = $arr[$num];
                  return $ext;
                  }
                  $ext = retorna_extensao($arq);
                  switch($ext){
                  case "pdf": $var = "application/pdf";
                  break;
                  case "exe": $var = "application/octet-stream";
                  break;
                  case "zip": $var = "application/zip";
                  break;
                  case "doc": $var = "application/msword";
                  break;
                  case "xls": $var = "application/vnd.ms-excel";
                  break;
                  case "ppt": $var = "application/vnd.ms-powerpoint";
                  break;
                  case "gif": $var = "image/gif";
                  break;
                  case "png": $var = "image/png";
                  break;
                  case "jpeg":
                  case "jpg": $var = "image/jpg";
                  break;
                  default: $var = "application/force-download";
                  }
                  
                  if(file_exists($arq)){ // adição do header para download
                  header("Pragma: public");
                  header("Expires: 0");
                  header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
                  header("Cache-Control: private",false);
                  header("Content-Type: $var");
                  header("Content-Disposition: attachment; filename=\"".basename($arq)."\";" );
                  header("Content-Transfer-Encoding: binary");
                  header("Content-Length: ".filesize($arq));
                  readfile($arq);
                  } else {
                  erro_JS('Erro ao tentar fazer download de arquivo!');
                  }
                  }
                  
                  
                  if(isset($_POST['cpf'])!="") {
                  
                      
                  $cpf=$_POST['cpf'];
                  $cpf = trim($cpf);
                  $cpf = str_replace(".", "", $cpf);
                  $cpf = str_replace(",", "", $cpf);
                  $cpf = str_replace("-", "", $cpf);
                  
                  $data_emissao = str_replace("/", "", $data_emissao);
                  $num_nota=$_POST['num_nota'];
                  $data_emissao=$_POST['data_emissao'];
                  
                  $data_emissao = trim($data_emissao);
                  $data_emissao = str_replace(".", "", $data_emissao);
                  $data_emissao = str_replace(",", "", $data_emissao);
                  $data_emissao = str_replace("-", "", $data_emissao);
                  $data_emissao = str_replace("/", "", $data_emissao);
                  //$nameFile2=$cpf."".$num_nota."".$data_emissao;
                  
                  
                  if (isset($_POST['g-recaptcha-response'])) {
                      $captcha_data = $_POST['g-recaptcha-response'];
                  }
                  
                  // Se nenhum valor foi recebido, o usuário não realizou o captcha
                  if (!$captcha_data) {
                      echo"<script>window.location='index.php';</script>";	
                      exit;
                  }
                  $resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lc4B8sUAAAAAAURD2Vxs5_-ABUZSuhv1aaEOHBZ&response=".$captcha_data."&remoteip=".$_SERVER['REMOTE_ADDR']);
                  
                  //$palavra =$_POST['cpf'];
                  $palavra=$cpf."".$num_nota;
                  $numero = 0; 
                  $diretorio = "boletos/";
                  $pasta="pdfs";
                  foreach (glob($diretorio."*.*") as $arquivo) {
                  $separa = explode("/", $arquivo);
                  if(strstr($separa[1], $palavra)==TRUE) {
                  print "<a href='pdfs/".$separa[1]."' download>".$separa[1]."</a><br>";
                  echo $nomeArquivo ."<br>";
                  $numero++;
                  }
                  }
                  echo "Foram encontrado(s) $numero arquivo(s).";
                  
                  }
                  ?>
               <br>
               <br>
               </script> <script src="https://www.google.com/recaptcha/api.js?hl=pt-BR"></script>
               <div class="top-box form-control">
                  <form action="<?php echo get_home_url(); ?>/boleto/lista.php" method="POST">
                     <div class="top-box">
                        <label>CPF ou CNPJ:</label> 
                        <input id="CPF" name="cpf" type="text" maxlength="14" onkeyup="somenteNumeros(this);" class="box" required>
                     </div>
                     <div class="top-box">
                        <label>Número da nota:</label> 
                        <input  name="num_nota" type="text" maxlength="11" class="box2" required>
                     </div>

                     <div class="top-box">
                        <div class="g-recaptcha " data-sitekey="6Lc4B8sUAAAAAOIbdJNghVCLWQlh9GZyBwqSy1at">&nbsp;</div>
                     </div>
                     <div class="top-box">
                        <input type="submit" class="button left btn" name="busca" value="Enviar">
                     </div>
                     <div>&nbsp;</div>
                  </form>
               </div>
               <script>
                  function somenteNumeros(num) {
                      var er = /[^0-9.]/;
                      er.lastIndex = 0;
                      var campo = num;
                      if (er.test(campo.value)) {
                        campo.value = "";
                      }
                  }
               </script>
            </div>
         </div>

      </div>
      <script src="./Importadora EDA _ FORNOS E TORNOS_files/jquery.min.js.download"></script>
      <script>window.jQuery || document.write('<script src="http://impeda.com.br/wp-content/themes/eda/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
      <script src="./Importadora EDA _ FORNOS E TORNOS_files/lightbox.min.js.download"></script>
      <script src="./Importadora EDA _ FORNOS E TORNOS_files/plugins.js.download"></script>
      <script src="./Importadora EDA _ FORNOS E TORNOS_files/main.js.download"></script>
   </body>
</html>