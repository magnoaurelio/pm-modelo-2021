<!DOCTYPE html>
  
<?php
$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();

$prefeito = new Prefeito(UNIDADE_GESTORA);

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
              <li class="active" >VICE - PREFEITO(a)</li>
            </ul>
            <article class="post-content">
              
                  <header class="clearfix">
                  <?php
                     $prefeitoAdmin = new Prefeito(Prefeito::MUNICIPIO . " and pretipo = 1 ");
                     foreach ($prefeitoAdmin->getResult() as $prefeito) {

                     if ($prefeito['prepartidop'] == 11):
                          $partido = 'pp';
                          $pagina = '?p=prefeito';

                     elseif ($prefeito['prepartidop'] == 15):
                          $partido = 'pmdb';
                          $pagina = '?p=prefeito_vice';
                     endif;
                     ?>
                <h3 class="title-post" style="color: #9e9e9e;">Vice-Prefeito(a):  &nbsp;&nbsp; 
                  <span >
                <a href="?p=prefeito" title="<?= $prefeito['prenomep'] ?>" >
                       <span ><strong><?= $prefeito['preapep'] ?></strong></span>
                </a>
                &nbsp;&nbsp;
              
                   <a href="?p=secretaria_geral" class="pull-center" title="Site Oficial do <?= $prefeito['prepartidop'] ?> ">
                    <img src="<?= FILES . 'partido/'. $partido .'/'. $prefeito['preparfoto'] ?>"  width="120" height="40" alt="partido">              
                 </a>
                       </span>
                  </h3>
                <!-- header-bottom -->                
            
              <footer>
                   
                <div class="kp-author">
                  <div class="author-body clearfix">
                    <div class="col-sm-right col-12">
                   
                     <div class="item-left" >
                        <a href="<?= $pagina ?>" class="pull-left" title="<?= $prefeito['prenomep'] ?>">
                            <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/'. $prefeito['prefotop'] ?>" width="250" height="250" alt="prefeito">
                            &nbsp;&nbsp;
                         </a>
                       <div class="item-right" >
                       <img src="files/prefeituras/201002/unidade/prefeitura1.jpg"  width="470" height="250"  alt="">
                       </div>
                     
                      </div>
                        <hr style="color-line: #ccc;">
                       <p class="kp-social">
                        <a href="#" class="icon-vimeo2"></a>
                        <a href="#" class="icon-facebook2"></a>
                        <a href="#" class="icon-linkedin3"></a>
                        <a href="#" class="icon-google-plus"></a>
                      
                       </p>
                        <p class="kp-social">
                        <a href="#" class="kp-metadata"><span><i class="icon-phone  fa-lg"></i> <?= $prefeito['prefone'] ?> </span></a>
                        <a href="#" class="kp-metadata"><span><i class="icon-phone2  fa-lg"></i> <?= $prefeito['precelular'] ?> </span></a>
                         <a href="#" class="kp-metadata"><span><i class="icon-email  fa-lg"></i> <?= $prefeito['preemail'] ?> </span></a>
                         <a href="#" class="kp-metadata"><span><i class="icon-email  fa-lg"></i> <?= $prefeito['precep'] ?> </span></a>
                         <a href="#" class="kp-metadata"><span><i class="icon-home  fa-lg"></i> <?= $prefeito['preendereco'] ?> </span></a>
                         <a href="#" class="kp-metadata"><span><i class="icon-home  fa-lg"></i> <?= $prefeito['prebairro'] ?> </span></a>
                     </p>
                      <hr style="color-line: #ccc;">
                      <h6>Sobre:</h6>
                      <p> <?= $prefeito['historico'] ?></p>
                    </div>
                    <!-- item-right -->
                    </div>
                  <!-- author-body -->
                </div>
                 
                  </footer>
                  <?php } ?>
              </header>
               <footer>
              <!-- kp-thumb -->
                  <div class="kp-author">
                   <h3>ASSESSORES DA ADMINISTRAÇÃO </h3>
                  <div class="author-body clearfix">
                    <img src="images/user.png" class="pull-left" alt="">
                    <div class="item-right">
                      <h4><a href="#">Diego</a></h4>
                      <h3><a href="#">Assessor de Comunicação,,</a></h3>
                     
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
                  <div class="author-body clearfix">
                    <img src="images/user.png" class="pull-left" alt="">
                    <div class="item-right">
                      <h4><a href="#">Gustavo</a></h4>
                      <h3><a href="#">Assessor Jurídico,,</a></h3>
                  
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
                  <div class="author-body clearfix">
                    <img src="images/user.png" class="pull-left" alt="">
                    <div class="item-right">
                      <h4><a href="#">Diego</a></h4>
                      <h3><a href="#">Assessor de Comunicação,,</a></h3>
                     
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
                  <div class="author-body clearfix">
                    <img src="images/user.png" class="pull-left" alt="">
                    <div class="item-right">
                      <h4><a href="#">Gustavo</a></h4>
                      <h3><a href="#">Assessor Jurídico,,</a></h3>
                      <p> Assessoria  Jurídica é respnsável pela..</p>
                      <p class="kp-social">
                        <a href="#" class="icon-vimeo2"></a>
                        <a href="#" class="icon-facebook2"></a>
                        <a href="#" class="icon-linkedin3"></a>
                        <a href="#" class="icon-google-plus"></a>
                      </p>
                    </div>
                    <!-- item-right -->
                  </div>
                  <!-- author-body -->
                </div>
              <!-- entry-content -->
               </footer>
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
             <div class="widget widget-ads" >
             <?php
            
             include 'include/menu_publicidade_sidebar.php';
            //  include_once 'include/menu_home_clima_0.php';
             ?>
             </div>
             
             <?php
              include 'include/menu_home_sidebar_adm.php';
             ?>
           
            <!-- widget-video -->

        </div>
        <!-- sidebar -->
        
      <!-- inicio widget-area-5 BOLETIM DE NOTICIAS -->
        <?php include_once 'include/menu_home_newsletter.php'; ?>
        <!-- fim widget-area-5 -->
        <!-- widget-area-5 -->
    </div>
    <!-- main-content -->
</body>

<!-- Mirrored from upsidethemes.net/demo/news-times/html/single-video.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Aug 2020 12:02:50 GMT -->

