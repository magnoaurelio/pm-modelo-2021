<!DOCTYPE html>
  
<?php

//$secretaria =  new Secretaria(intval($_GET['prenumero']));
//include_once 'include/head.php';
//include_once 'app/control/Router.class.php';
//include_once 'app/control/Layout.class.php';
$hoje =  date('d-m-Y');
//$hojePartes =  MDate::datePart($hoje);
//$data = MDate::getDiaSemana($hoje).", ".$hojePartes->dia." de ".MDate::getMeses(1, $hojePartes->mes)." de ".$hojePartes->ano;
//$ano  = $hojePartes->ano;

?>  
<!-- Mirrored from upsidethemes.net/demo/news-times/html/single-video.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Aug 2020 12:02:50 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<body class="kp-single">
    <!-- page-header -->
    <div id="main-content" class="container clearfix">
       <?php
        include 'include/menu_home_topo.php';
        ?>
        <!-- main-top -->
        <div id="main-col" class="pull-left">
             <ul class="breadcrumb">
              <li><a href="index.php">Início</a></li>
              <li class="active" >SECRETARIAS GERAL</li>
            </ul>
            <article class="post-content">
              <?php
                    $secretarias = new Secretaria(Secretaria::MUNICIPIO);
                    foreach ($secretarias->getResult() as $secretaria) {
              ?>
              <header class="clearfix">
                  <h3>
                      <a href="?p=secretaria_gestor&prenumero=<?= $secretaria['prenumero'] ?>">
                        <span ><strong><?=$secretaria['secnome']?></strong></span>
                    </a>
                   </h3> 
                <!-- header-bottom -->                
            
              <footer>
                <div class="kp-author">
                  <div class="author-body clearfix">
                      <a href="?p=secretaria_gestor&prenumero=<?= $secretaria['prenumero'] ?>" class="pull-left">
                        <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/secretaria/'. $secretaria['secfotor'] ?>" width="250" height="250" alt="">
                      </a>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <a href="?p=secretaria_gestor&prenumero=<?= $secretaria['prenumero'] ?>" title="Página deste Gestor...">
                           <img src="files/prefeituras/201002/unidade/prefeitura1.jpg"  width="470" height="250" alt="">
                       </a>
                      <span>
                      <a href="#" class="item-left">
                      
                      </a>
                       </span>   
                      
                      <div class="item-right">
                      <h5> 
                        <a href="?p=secretaria_gestor&prenumero=<?= $secretaria['prenumero'] ?>">
                            <span ><strong><?=$secretaria['secusual']?></strong></span>
                        </a>
                      </h5>
                      <h3><a href="#">Secretário(a) Municipal</a></h3>
                      <p class="kp-social">
                        <a href="#" class="icon-vimeo2"></a>
                        <a href="#" class="icon-facebook2"></a>
                        <a href="#" class="icon-linkedin3"></a>
                        <a href="#" class="icon-google-plus"></a>
                       <hr style="color-line: #ccc;">
                       <p class="kp-social">
                         <a href="#" class="kp-metadata"><span><i class="icon-phone  fa-lg"></i>&nbsp;&nbsp;<?= $secretaria['secfone'] ?> </span></a>
                         <a href="#" class="kp-metadata"><span><i class="icon-email  fa-lg"></i>&nbsp;&nbsp;<?= $secretaria['seccelular'] ?> </span></a>
                         <a href="#" class="kp-metadata"><span><i class="icon-home  fa-lg"></i>&nbsp;&nbsp;<?= $secretaria['secemail'] ?></span></a>
                         <a href="#" class="kp-metadata"><span><i class="icon-phone2  fa-lg"></i>&nbsp;&nbsp;<?= strtolower($secretaria['secendereco']) ?> </span></a>
                         <a href="#" class="kp-metadata"><span><i class="icon-phone2  fa-lg"></i>&nbsp;&nbsp;<?= $secretaria['secbairro'] ?> </span></a>
                       </p>
                       <hr style="color-line: #ccc;">
                        <p> Prefeito de 1ª gestão.. Prefeito de 1ª gestão..Prefeito de 1ª gestão..Prefeito de 1ª gestão..Prefeito de 1ª gestão..Prefeito de 1ª gestão..Prefeito de 1ª gestão....</p>
                    </div>
                 
                    <!-- item-right -->
                  </div>
              
                  <!-- author-body -->
                </div>
                  </footer>
              </header>
              <?php } ?>  
            </article>
       
            <!-- related-article -->
           
            <!-- comments -->
            
            <div class="clearfix"></div>
               <!-- inicio widget-area-4 -->
             <?php //include_once 'include/menu_home_foto_inspiradora.php'; ?>
           <!-- fim widget-area-4 -->
            <!-- widget-area-4 -->
            
        </div>
        <!-- main-col -->
        <div id="sidebar" class="pull-left">
            <!-- inicio sidebar -->
             <?php
             include_once 'include/menu_sidebar_propaganda.php';
             ?>
             <div class="widget widget-ads" style="margin-left: -25px; margin-top: -16px;" >
             <?php
             include_once 'include/menu_home_clima_2.php';
            //include_once 'include/menu_sidebar_noticia_popular.php';
             ?>
             </div>
              <div class="widget widget-ads" >
             <?php
             include_once 'include/menu_home_sidebar_adm.php';
            // include_once 'include/menu_sidebar_noticia_popular.php';
             ?>
             </div>
            <div class="widget widget-ads" >
              
        <!-- fim sidebar -->
        <!-- widget-random -->
         <!-- widget-ads -->
            
        
       
            <!-- widget-video -->

        </div>
        <!-- sidebar -->
        
      <!-- inicio widget-area-5 BOLETIM DE NOTICIAS -->
        <?php// include_once 'include/menu_home_unidade.php'; ?>
        <!-- fim widget-area-5 -->
        <!-- widget-area-5 -->
    </div>
    <!-- main-content -->
</body>

<!-- Mirrored from upsidethemes.net/demo/news-times/html/single-video.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Aug 2020 12:02:50 GMT -->

