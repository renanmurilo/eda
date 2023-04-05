<!DOCTYPE html>
<!-- saved from url=(0037)http://impeda.com.br/fornos-e-tornos/ -->
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface no-generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths" style="">
   <!--<![endif]-->
   <body class="page-template-default page page-id-2847 page-parent cstmsrch_www.impeda.com.br elementor-default">
      <style>
         .top-box{
         margin-top:30px;
         margin-botton:30px;
         }
         .box{
         width:75%;
         height:40px; 
         background:#f1f2f2;
         }
         .box2{
         width:60%;
         height:40px; 
         background:#f1f2f2;
         }
         .box3{
         width:60%;
         height:40px; 
         background:#f1f2f2;
         }
         @media only screen and (max-width: 600px) {
         .box{
         width:100%;
         height:60px; 
         background:#f1f2f2;
         }
         .box2{
         width:100%;
         height:60px; 
         background:#f1f2f2;
         }
         .box3{
         width:100%;
         height:60px; 
         background:#f1f2f2;
         }
         .top-box{
         margin-top:30px;
         margin-botton:30px;
         }
         .btn{
         width:100%;
         }
         }
      </style>
      <script src="https://kit.fontawesome.com/e7f28a2341.js"></script>
      <style>
         .text-dark{  color:#000;  }
         .fas{ padding:15px;  }
         .form-control{margin-bottom:50px}
      </style>
      
      <div class="main">
         <div class="container">
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
                  <form action="lista.php" method="POST">
                     <div class="top-box">
                        <label>CPF ou CNPJ:</label> 
                        <input id="CPF" name="cpf" type="text" maxlength="14" onkeyup="somenteNumeros(this);" class="box" required>
                     </div>
                     <div class="top-box">
                        <label>Número da nota:</label> 
                        <input  name="num_nota" type="text" maxlength="11" class="box2" required>
                     </div>
                     <!--<div class="top-box">
                        <label>Data da Emissão:</label> 
                        <input  name="data_emissao" type="date" class="box3" required>
                        </div>-->
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
      <!-- FlexSlider -->
      <script type="text/javascript">
         $(window).load(function() {
         $('.flexslider').flexslider({
         animation: "slide",
         prevText: "",
         nextText: "",
         controlNav: false,
         animationLoop: false
         });
         });
      </script>
      <div id="lightboxOverlay" class="lightboxOverlay" style="display: none;"></div>
      <div id="lightbox" class="lightbox" style="display: none;">
         <div class="lb-outerContainer">
            <div class="lb-container">
               <img class="lb-image" src="http://impeda.com.br/fornos-e-tornos/">
               <div class="lb-nav"><a class="lb-prev" href="http://impeda.com.br/fornos-e-tornos/"></a><a class="lb-next" href="http://impeda.com.br/fornos-e-tornos/"></a></div>
               <div class="lb-loader"><a class="lb-cancel"></a></div>
            </div>
         </div>
         <div class="lb-dataContainer">
            <div class="lb-data">
               <div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div>
               <div class="lb-closeContainer"><a class="lb-close"></a></div>
            </div>
         </div>
      </div>
   </body>
</html>