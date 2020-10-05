<!DOCTYPE html>

<?php
include './include/head.php';

$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();

$agronegociotipo = new AgronegocioTipo(intval($_GET['agrotipocodigo']));
$agroprocodigo = $agronegociotipo->agronegocio_produto_id;

?>  
<!-- Mirrored from upsidethemes.net/demo/news-times/html/single-agroeo.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Aug 2020 12:02:50 GMT -->
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
               //     $agronegociotipoAgro = new Agronegocio(Agronegocio::MUNICIPIO,'and agrocodigo = $agrocodigo');
               //    foreach ( $agronegociotipoAgro->getResult() as  $agronegociotipo) {
              ?>
             <ul class="breadcrumb">
              <li><a href="index.php">Início</a></li>
              <li class="active" >AGRONEGÓCIO PRODUTOS AGRÍCOLAS</li>
            </ul>
           
            <article class="post-content">
              
              <header class="clearfix">
                  
                <h3 class="title-post">
                    <span style="color: #9e9e9e;" >
                         <?= strtoupper( $agronegociotipo->agrotiponome) ?> :  
                 <?php
                    $agroproduto= new AgronegocioProduto("WHERE agroprocodigo = $agroprocodigo  ");
                    foreach ($agroproduto->getResult() as $agroproduto) {
                       $agropronome = $agroproduto['agropronome'];
                      // var_dump($agropronome);
                     ?>
                    &nbsp; <a href="#">   <?= $agropronome  ?> </a>
                     <?php } ?>
                    </span>
                 </h3>
                <div class="header-bottom">
                 <p class="kp-metadata style-2">
                     <a href="#" class="kp-metadata"><span><i class="icon-phone  fa-lg"></i> <?=DataCalendario::date2br( $agronegociotipo->agrotipodata ) ?> </span></a>
                  </p>
               
                <p class="kp-share">
                  <span>Compartilhar:</span> 
                  <a href="#" class="icon-facebook3"></a>
                  <a href="#" class="icon-twitter"></a>
                  <a href="#" class="icon-google-plus3"></a>
                  <a href="#" class="icon-pinterest"></a>
                  <a href="#" class="icon-linkedin2"></a>
                </p>
                </div>
                <!-- header-bottom -->                
              </header>
              <div class="kp-thumb">
                <div class="agroeo-wrapper">
                    <a href="?p=agronegocio_exposicao_detalhe&agrocodigo=<?=  $agronegociotipo->agrotipocodigo ?>" title=" Veja mais...  <?=  $agronegociotipo->agrotiponome ?>">
                           <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/agronegocio/'.  $agronegociotipo->agrotipofoto1 ?>" width="250" height="250" alt="">
                      </a>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <a href="?p=agronegocio_exposicao_detalhe&agrocodigo=<?=  $agronegociotipo->agrotipocodigo ?>" title=" Veja mais... <?=  $agronegociotipo->agrotiponome ?>">
                       <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/agronegocio/'.  $agronegociotipo->agrotipofoto2 ?>"  width="470" height="250" alt="">
                       </a>
                    <h6>
                        <a href="#"><?= $agronegociotipo->agrotiposobre ?></a>
                    </h6>    
                </div>
              </div>
         
              
              <!-- entry-content -->
              

              
              
               <footer>
             
                <!-- kp-author -->
              </footer>
            </article>
            <!-- related-article -->
            <div id="comments">
              <h3 class="comments-title kp-title">1 comentários</h3>
              <ul class="comment-list">
                <li class="comment">
                  <article class="comment-body">
                    <figure class="pull-left">
                      <img src="placeholders/avartar/img-1.jpg"  alt="">
                    </figure>
                    <div class="comment-content item-right">
                      <header class="clearfix">
                        <h4>Jolie Angelina</h4>
                        <p class="kp-metadata">  <i class="fa fa-calendar fa-fw fa-lg"></i>
                            <?=$hoje ?>
                            {header_data}
                        </p>
                        <p class="reply">
                         <a href="#" class="edit-link">Editar /</a>
                          <a href="#" class="reply-link">Voltar</a>
                        </p>
                      </header>
                      <div class="entry-content">
                            <p>Etiam varius dui eget lorem elementum eget mattis sapien interdum.</p>
                      </div>
                      <!-- comment-content -->
                      
                    </div>
                    <!-- comment-body -->
                  </article>             
                  
                  <ul class="children">
                    <li class="comment">
                      <article class="comment-body">
                        <figure class="pull-left">
                          <img src="placeholders/avartar/img-7.jpg"  alt="">
                        </figure>
                        <div class="comment-content item-right">
                          <header class="clearfix">
                            <h4>Jolie Angelina</h4>
                           <p class="kp-metadata">  <i class="fa fa-calendar fa-fw fa-lg"></i>
                            <?=$hoje ?>
                            {header_data}
                           </p>
                            <p class="reply">
                             <a href="#" class="edit-link">Editar /</a>
                          <a href="#" class="reply-link">Voltar</a>
                            </p>
                          </header>
                          <div class="entry-content">
                            <p>Etiam varius dui eget lorem elementum eget mattis sapien interdum.</p>
                          </div>
                          <!-- comment-content -->
                          
                        </div>
                        <!-- comment-body -->
                      </article>
                    </li>
                  </ul>
                </li>
                <li class="comment">                  
                  <article class="comment-body">
                    <figure class="pull-left">
                      <img src="placeholders/avartar/img-8.jpg"  alt="">
                    </figure>
                    <div class="comment-content item-right">
                      <header class="clearfix">
                        <h4>Jolie Angelina</h4>
                       <p class="kp-metadata">  <i class="fa fa-calendar fa-fw fa-lg"></i>
                            <?=$hoje ?>
                            {header_data}
                        </p>
                        <p class="reply">
                        <a href="#" class="edit-link">Editar /</a>
                          <a href="#" class="reply-link">Voltar</a>
                        </p>
                      </header>
                      <div class="entry-content">
                            <p>Etiam varius dui eget lorem elementum eget mattis sapien interdum.</p>
                      </div>
                      <!-- comment-content -->
                      
                    </div>
                    <!-- comment-body -->
                  </article>
                  <ul class="children">
                    <li class="comment">
                      <article class="comment-body">
                    <figure class="pull-left">
                      <img src="placeholders/avartar/img-9.jpg"  alt="">
                    </figure>
                    <div class="comment-content item-right">
                      <header class="clearfix">
                        <h4>Jolie Angelina</h4>
                       <p class="kp-metadata">  <i class="fa fa-calendar fa-fw fa-lg"></i>
                            <?=$hoje ?>
                            {header_data}
                        </p>
                        <p class="reply">
                          <a href="#" class="edit-link">Editar /</a>
                          <a href="#" class="reply-link">Voltar</a>
                        </p>
                      </header>
                      <div class="entry-content">
                            <p>Etiam varius dui eget lorem elementum eget mattis sapien interdum.</p>
                      </div>
                      <!-- comment-content -->
                      
                    </div>
                    <!-- comment-body -->
                  </article>
                    </li>
                  </ul>
                </li>
              </ul>
              <div class="pagination kopa-comment-pagination">
                <a class="prev page-numbers" href="#comments">« Anterior</a>
                <a class="page-numbers" href="#comments">1</a>
                <span class="page-numbers current">2</span>
                <a class="next page-numbers" href="#comments">Próximo »</a>
              </div>
              <!-- pagination kopa-comment-pagination-->
              <div id="respond">
              <h3 id="reply-title" class="comment-reply-title kp-title">DEIXE UMA RESPOSTA</h3>
              
                  <form action="https://upsidethemes.net/" method="post" class="contact-form clearfix">
            <p class="comment-notes">Seu endereço de e-mail não será publicado. Os campos obrigatórios estão marcados<span>*</span></p>
            <div class="pull-left">
              <div class="form-group">
                <label for="name">Nome <span>*</span></label>
                <input class="form-control" name="name" type="text" id="name">
              </div>
              <div class="form-group">
                <label for="name">E-mail <span>*</span></label>
                <input class="form-control" name="email" type="text" id="email">
              </div>
              <div class="form-group">
                <label for="name">Website</label>
                <input class="form-control" type="text" id="website">
              </div>
            </div>
            <!-- pull-left -->
            <div class="pull-right">
              <div class="form-group">
                <label for="textarea">Seu Comentário <span>*</span></label>
                <textarea class="form-control" name="message" id="textarea"></textarea>
              </div>
              <input type="submit" id="input-submit" value="postar comentário">
            </div>
          </form>
              <div id="response"></div>
            </div>
            <!-- respond -->
            </div>
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
               include 'include/menu_sidebar_propaganda.php';
 
              ?>
            <div class="widget widget-ads" >
             <?php
             include_once 'include/menu_home_clima_1.php';
            //include_once 'include/menu_sidebar_noticia_popular.php';
             ?>
             </div>
           
           <?php
       //      include_once 'include/menu_sidebar_servico.php';
            //include_once 'include/menu_sidebar_noticia_popular.php';
             ?>

        <!-- fim sidebar -->
        <!-- widget-random -->
         <!-- widget-ads -->
            
            <?php
      //      include_once 'include/menu_sidebar_noticia_popular.php';
           ?>
         <!-- widget-random -->
          <?php
        //    include_once 'include/menu_sidebar_randon.php';
      //     ?>
         <!-- widget-tabs -->
          
           
          <?php
            include_once 'include/menu_sidebar_mapa_localizacao.php';
           ?>
            <!-- widget-agroeo -->

        </div>
        <!-- sidebar -->
        
      <!-- inicio widget-area-5 BOLETIM DE NOTICIAS -->
        <?php include_once 'include/menu_home_newsletter.php'; ?>
        <!-- fim widget-area-5 -->
        <!-- widget-area-5 -->
    </div>
    <!-- main-content -->
</body>

<!-- Mirrored from upsidethemes.net/demo/news-times/html/single-agroeo.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Aug 2020 12:02:50 GMT -->

