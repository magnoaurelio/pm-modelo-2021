<!DOCTYPE html>
  
<?php
include './include/head.php';

$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();

//$agronegociotipotipo = new AgronegocioTipo(UNIDADE_GESTORA);
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
             <?php
                    $agronegociotipoAgro = new AgronegocioTipo(AgronegocioTipo::MUNICIPIO," WHERE order by agrotiponome");
                    foreach ($agronegociotipoAgro->getResult() as $agronegociotipo) {
                             $agroprocodigo = $agronegociotipo['agronegocio_produto_id'];
                          
              ?>
             <ul class="breadcrumb">
              <li><a href="index.php">Início</a></li>
              <li class="active" >AGRONEGÓCIO PRODUTOS AGRÍCOLAS</li>
            </ul>
            <article class="post-content">
              
              <header class="clearfix">
                <h3 class="title-post">
                 <a href="?p=agronegocio_produto_detalhe&agrotipocodigo=<?= $agronegociotipo['agrotipocodigo'] ?>" title=" Veja mais... <?= $agronegociotipo['agrotiponome'] ?>">
                  <span style="color: #9e9e9e;" >
                      <strong><?=$agronegociotipo['agrotiponome']?></strong>:
                  </span>
                  </a>
                    <?php
                    $agroproduto= new AgronegocioProduto("WHERE agroprocodigo = $agroprocodigo  ");
                    foreach ($agroproduto->getResult() as $agroproduto) {
                       $agropronome = $agroproduto['agropronome'];
                      // var_dump($agropronome);
                     ?>
                     <a href="?p=agronegocio_produto_detalhe&agrotipocodigo=<?= $agronegociotipo['agrotipocodigo'] ?>" title=" Veja mais... <?= $agronegociotipo['agrotiponome'] ?>">
                       <?= $agropronome  ?> 
                     </a>
                     <?php } ?>
                </h3>
               
                <!-- header-bottom -->                
            
              <footer>
                <div class="kp-author">
                  <div class="author-body clearfix">
                      <a href="?p=agronegocio_produto_detalhe&agrotipocodigo=<?= $agronegociotipo['agrotipocodigo'] ?>" title=" Veja mais...  <?= $agronegociotipo['agrotiponome'] ?>">
                           <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/agronegocio/'. $agronegociotipo['agrotipofoto1'] ?>" width="250" height="250" alt="">
                      </a>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <a href="?p=agronegocio_produto_detalhe&agrotipocodigo=<?= $agronegociotipo['agrotipocodigo'] ?>" title=" Veja mais... <?= $agronegociotipo['agrotiponome'] ?>">
                       <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/agronegocio/'. $agronegociotipo['agrotipofoto2'] ?>"  width="470" height="250" alt="">
                       </a>
                        
                      <span>
                      <a href="#" class="item-left">
                        <!--img src="files/partido/pp/logo_num_pp.jpg" class="img-responsive"  alt=""-->
                        <!--p style="font-size: 12px;">Partido:<br> PP 11</p-->
                      </a>
                       </span>   
                      
                      <div class="item-right">
                      <h4>
                          <a href="?p=agronegocio_produto_detalhe&agrotipocodigo=<?= $agronegociotipo['agrotipocodigo'] ?>" title=" Veja mais... <?= $agronegociotipo['agrotiponome'] ?>">
                              <?= $agronegociotipo['agrotiponome'] ?>
                          </a>
                      </h4>
                      <h3>
                          <a href="?p=agronegocio_produto_detalhe&agrotipocodigo=<?= $agronegociotipo['agrotipocodigo'] ?>" title=" Veja mais... <?= $agronegociotipo['agrotiponome'] ?>">
                             <?= $agronegociotipo['agrotiponome'] ?> 
                          </a>
                      </h3>
                      <p class="kp-social">
                        <a href="#" class="icon-vimeo2"></a>
                        <a href="#" class="icon-facebook2"></a>
                        <a href="#" class="icon-linkedin3"></a>
                        <a href="#" class="icon-google-plus"></a>
                       <hr style="color-line: #ccc;">
                       <p class="kp-social">
                        <a href="#" class="kp-metadata"><span><i class="icon-phone  fa-lg"></i> <?=DataCalendario::date2br($agronegociotipo['agrotipodata'] ) ?> </span></a>
                         <!--a href="#" class="kp-metadata"><span><i class="icon-email  fa-lg"></i> seduc@agricolandia.pi.gov.br </span></a>
                         <a href="#" class="kp-metadata"><span><i class="icon-home  fa-lg"></i> Rua da flores 735 </span></a>
                         <a href="#" class="kp-metadata"><span><i class="icon-phone2  fa-lg"></i> 86 3255-2587 </span></a-->
                     </p>
                       <hr style="color-line: #ccc;">
                        <p> <?= $agronegociotipo['agrotiposobre'] ?>
                        </p>
                    </div>
                 
                    <!-- item-right -->
                  </div>
              
                  <!-- author-body -->
                </div>
               </footer>
                
              </header>
             
              
                
             
            </article>
       
            <!-- related-article -->
           
            <!-- comments -->
            
            <div class="clearfix"></div>
               <!-- inicio widget-area-4 -->
           <?php } ?>
           <!-- fim widget-area-4 -->
            <!-- widget-area-4 -->
            
        </div>
        <!-- main-col -->
        <div id="sidebar" class="pull-left">
            <!-- inicio sidebar -->
             <div class="widget widget-ads" style="margin-left: -25px; margin-top: -16px;" >
             <?php
             include_once 'include/menu_home_clima_2.php';
            //include_once 'include/menu_sidebar_noticia_popular.php';
             ?>
             </div>
              <div class="widget widget-ads" >
             <?php
          //   include_once 'include/menu_home_administra.php';
        //     include_once 'include/menu_sidebar_noticia_popular.php';
             ?>
             </div>
             <?php
             include_once 'include/menu_publicidade_sidebar.php';
             ?>
             <?php
         //    include_once 'include/menu_sidebar_randon.php';
        //     include_once 'include/menu_sidebar_servico.php';
             ?>
           
                <?php
            include_once 'include/menu_home_video.php';
       //     include_once 'include/menu_sidebar_foto_noticia.php';
         ?>
               <?php
             include_once 'include/menu_sidebar_mapa_localizacao.php';
            //include_once 'include/menu_sidebar_noticia_popular.php';
             ?>
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

