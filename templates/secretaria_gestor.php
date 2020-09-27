<!DOCTYPE html>
  
<?php
$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();
$ano  = $hojePartes->getAno();
$secretaria =  new Secretaria(intval($_GET['prenumero']));

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
              <li class="active" >SECRETARIAS</li>
            </ul>
           <article class="post-content">
              <header class="clearfix">
                  <h3>
                      <a href="?p=secretaria_geral&prenumero=<?= $secretaria->prenumero ?>" title="<?= $secretaria->secsecretario ?>">
                          <span style="color: #9e9e9e;" ><strong><?=$secretaria->secnome?></strong>:</span>
                        &nbsp;&nbsp; <span ><strong><?=$secretaria->secusual?></strong></span>
                    </a>
                   </h3> 
                <!-- header-bottom -->                
            
              <footer>
                <div class="kp-author">
                  <div class="author-body clearfix">
                      <a href="?p=secretaria_geral" class="pull-left">
                        <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/secretaria/'. $secretaria->secfotor ?>" width="250" height="250" alt="">
                      </a>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <a href="?p=secretaria_geral" title="Página deste Gestor...">
                           <img src="files/prefeituras/201002/unidade/prefeitura1.jpg"  width="470" height="250" alt="">
                       </a>
                      <span>
                      <a href="#" class="item-left">
                      
                      </a>
                       </span>   
                      
                      <div class="item-right">
                      <h5> 
                        <a href="?p=secretaria_geral&prenumero=<?= $secretaria->prenumero ?>">
                            <span ><strong><?=$secretaria->secusual?></strong></span>
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
                         <a href="#" class="kp-metadata"><span><i class="icon-phone  fa-lg"></i>&nbsp;&nbsp;<?= $secretaria->secfone ?> </span></a>
                         <a href="#" class="kp-metadata"><span><i class="icon-email  fa-lg"></i>&nbsp;&nbsp;<?= $secretaria->seccelular ?> </span></a>
                         <a href="#" class="kp-metadata"><span><i class="icon-home  fa-lg"></i>&nbsp;&nbsp;<?= $secretaria->secemail ?></span></a>
                         <a href="#" class="kp-metadata"><span><i class="icon-phone2  fa-lg"></i>&nbsp;&nbsp;<?= strtolower($secretaria->secendereco) ?> </span></a>
                         <a href="#" class="kp-metadata"><span><i class="icon-phone2  fa-lg"></i>&nbsp;&nbsp;<?= $secretaria->secbairro ?> </span></a>
                       </p>
                        <hr style="color-line: #ccc;">
                      <h6>Sobre:</h6>
                      <p> <?= $secretaria->descricao ?></p>
                    </div>
                 
                    <!-- item-right -->
                  </div>
              
                  <!-- author-body -->
                </div>
                  </footer>
              </header>
           
            </article>
       
            <!-- related-article -->
            <article class="post-content">
            <footer>
              <!-- kp-thumb -->
                  <div class="kp-author">
                  <h4>Diretores e Assessores</h4>
                  <div class="author-body clearfix">
                      <img src="images/user.png" class="pull-left" width="100" height="100" alt="">
                    <div class="item-right">
                      <h4><a href="#">Maria Luiza</a></h4>
                      <h3><a href="#">Diretora da Unidade Escolar UE EVARISTO...</a></h3>
                       <p class="kp-social">
                        <a href="#" class="icon-vimeo2"></a>
                        <a href="#" class="icon-facebook2"></a>
                        <a href="#" class="icon-linkedin3"></a>
                        <a href="#" class="icon-google-plus"></a>
                      </p>
                      <hr style="color-line: #ccc;">
                      <p class="kp-social">
                        <a href="#" class="kp-metadata"><span><i class="icon-phone  fa-lg"></i> 86 3255-2587 </span></a>
                        <a href="#" class="kp-metadata"><span><i class="icon-email  fa-lg"></i> seduc@agricolandia.pi.gov.br </span></a>
                         <a href="#" class="kp-metadata"><span><i class="icon-home  fa-lg"></i> Rua da flores 735 </span></a>
                         <a href="#" class="kp-metadata"><span><i class="icon-phone  fa-lg"></i> 86 3255-2587 </span></a>
                     </p>
                      <hr style="color-line: #ccc;">
                      <p> Assessor de Comunicação é respnsável pela..</p>
                     
                    </div>
                    <!-- item-right -->
                  </div>
                  <!-- author-body -->
                </div>
              <!-- entry-content -->
               </footer>
            <!-- comments -->
            </article>
            <div class="clearfix"></div>
               <!-- inicio widget-area-4 -->
             <?php //include_once 'include/menu_home_foto_inspiradora.php'; ?>
           <!-- fim widget-area-4 -->
            <!-- widget-area-4 -->
            
        </div>
        <!-- main-col -->
        <div id="sidebar" class="pull-left" style="margin-top: -12px;">
            <!-- inicio sidebar -->
           
             <?php
             include_once 'include/menu_home_sidebar_adm.php';
            //include_once 'include/menu_sidebar_noticia_popular.php';
             ?>
            
              <?php
          //  include_once 'include/menu_sidebar_propaganda.php';
             ?>
         <!-- widget-ads -->
            
        
       
            <!-- widget-video -->

        </div>
        <!-- sidebar -->
        
      <!-- inicio widget-area-5 BOLETIM DE NOTICIAS -->
        <?php include_once 'include/menu_home_unidade.php'; ?>
        <!-- fim widget-area-5 -->
        <!-- widget-area-5 -->
    </div>
    <!-- main-content -->
</body>

<!-- Mirrored from upsidethemes.net/demo/news-times/html/single-video.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Aug 2020 12:02:50 GMT -->

