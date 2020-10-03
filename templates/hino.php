<!DOCTYPE html>
 <?php
$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();
$ano =  $hojePartes->getAno();

$prefeitura = new Prefeitura(UNIDADE_GESTORA);
$prefeito = new Prefeito(UNIDADE_GESTORA);

?> 
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
              <li class="active" >HINO DE AGRICOLÂNDIA</li>
            </ul>
            <article class="post-content">
                 <?php
                $videoBloco = new Videos(Videos::MUNICIPIO . " and vidtipo = '0' ");
                foreach ($videoBloco->getResult() as $video) {
                ?>
              <header class="clearfix">
                <h3 class="title-post">O Hino Oficial de AGRICOLÂNDIA (+ letra) </h3>
              <div class="header-bottom">
                  <p class="kp-metadata style-2">
                   <i class="fa fa-calendar fa-fw fa-lg"></i><span><?=$data?></span>
                   <i class="fa fa-home fa-fw fa-lg"></i><span><?=$data?></span>
                   <i class="fa fa-feed fa-fw fa-lg"></i><span></span>
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
               
               <div class="item pull-left">
                 <p class="kp-metadata style-2">
                    <i class="fa fa-calendar fa-fw fa-lg"></i><span><?=$video['viddata'] ?></span>
                    <i class="fa fa-home fa-fw fa-lg"></i><span><?=$video['videstado']?></span>
                    <i class="fa fa-feed fa-fw fa-lg"></i><span><?=$video['vidmesano']?></span>
                  </p>
                  <!--Z7pFwsX6UVc -->
                     <a href="#" title="Click para Assistir..." class="caption">
                         <iframe width="800" height="425" src="<?= $video['vidurl'] ?>" frameborder="0" allowfullscreen></iframe>
                    </a>
                    <h6>
                        <a href="?p=video_detalhe&vidcodigo=<?= $video['vidcodigo'] ?>"><?= $video["descricao"] ?>
                        </a>
                    </h6>
                    <a href="?p=video_detalhe&vidcodigo=<?= $video['vidcodigo'] ?>" class="continue-reading">Mais ...</a>
            
                    
         
                </div>
            <!-- kp-thumb -->
              <footer>  
              <div class="kp-author">
                  <h3>LETRA OFICIAL</h3>
                  <p><?=$video['vidhino'] ?>"</p>
              </div>
              
                     
             
                   </footer> 
              <!-- entry-content -->
               </div>
              
                <?php
                }
                ?> 
              
              
            </article>
           <div class="related-article">
              <div class="widget-title">ARTIGOS RELACIONADOS</div>
              <div class="owl-carousel owl-carousel-related">
                
                    <div class="item">
                      <a href="#" class="caption">
                        <img src="placeholders/posts/img-18.jpg" alt="">
                        <span class="icon-plus"></span>
                        <p>Pista de COOPER</p>
                      </a>
                    </div>
                    <!-- item -->
                  
                    <div class="item">
                      <a href="#" class="caption">
                        <img src="placeholders/posts/img-35.jpg" alt="">
                        <span class="icon-plus"></span>
                        <p>Vacinação contra o COVID em AGRICOLANDIA</p>
                      </a>
                    </div>
                    <!-- item -->
                 
                    <div class="item">
                      <a href="#" class="caption">
                        <img src="placeholders/posts/img-36.jpg" alt="">
                        <span class="icon-plus"></span>
                        <p>Servidores da Sáude recebem treinamentos</p>
                      </a>
                    </div>
                    <!-- item -->
                
                    <div class="item">
                      <a href="#" class="caption">
                        <img src="placeholders/posts/img-37.jpg" alt="">
                        <span class="icon-plus"></span>
                        <p>Vista panorâmica de AGRICOLANDIA</p>
                      </a>
                    </div>
                    <!-- item -->
                
                    <div class="item">
                      <a href="#" class="caption">
                        <img src="placeholders/posts/img-18.jpg" alt="">
                        <span class="icon-plus"></span>
                        <p>Pista de COOPER</p>
                      </a>
                    </div>
                    <!-- item -->
                 
                    <div class="item">
                      <a href="#" class="caption">
                        <img src="placeholders/posts/img-18.jpg" alt="">
                        <span class="icon-plus"></span>
                        <p>Pista de COOPER</p>
                      </a>
                    </div>
                    <!-- item -->
                  
                    <div class="item">
                      <a href="#" class="caption">
                        <img src="placeholders/posts/img-18.jpg" alt="">
                        <span class="icon-plus"></span>
                        <p>Pista de COOPERk</p>
                      </a>
                    </div>
                    <!-- item -->                 
              
              </div>
              <!-- owl-carousel-related -->
            </div>
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
             <div class="widget widget-ads" style="margin-left: -25px; margin-top: -16px;" >
             <?php
             include 'include/menu_home_clima_2.php';
            //include_once 'include/menu_sidebar_noticia_popular.php';
             ?>
             </div>
             <div class="widget widget-ads" >
             <?php
             include 'include/menu_home_administra.php';
            //include_once 'include/menu_sidebar_noticia_popular.php';
             ?>
             </div>
           <?php
             include 'include/menu_sidebar_propaganda.php';
            
           ?>
           <?php
           include 'include/menu_sidebar_servico.php';
           ?>
       
       
            <!-- widget-video -->

        </div>
        <!-- sidebar -->
        
      <!-- inicio widget-area-5 BOLETIM DE NOTICIAS -->
        <?php // include_once 'include/menu_home_newsletter.php'; ?>
        <!-- fim widget-area-5 -->
        <!-- widget-area-5 -->
    </div>
    <!-- main-content -->
</body>

<!-- Mirrored from upsidethemes.net/demo/news-times/html/single-video.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Aug 2020 12:02:50 GMT -->

