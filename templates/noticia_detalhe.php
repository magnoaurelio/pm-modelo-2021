<?php
    $noticia =  new Noticia(intval($_GET['notcodigo']));
?>
<body class="page-full-width">
 
    <!-- page-header -->
    <div id="main-content" class="container clearfix">
         <?php
          include 'include/menu_home_topo.php';
        ?>
        <!-- main-top -->
        <div id="main-col" class="pull-left">
            <ul class="breadcrumb">
              <li><a href="index.php">Início</a></li>
              <li class="active">Notícia Detalhe</li>
            </ul>
            <article class="post-content">
              
              <header class="clearfix">
                  <h3 class="title-post"><?= strtoupper($noticia['nottitulo'])?> </h3>
                <div class="header-bottom">
                  <p class="kp-metadata style-2">
                  <i class="fa fa-calendar fa-fw fa-lg"></i><span><?= $noticia['notdata'] ?></span>
                  <i class="fa fa-home fa-fw fa-lg"></i><span><?=$noticia['notcategoria']?></span>
                  <i class="fa fa-feed fa-fw fa-lg"></i><span><?=$noticia['notfonte']?></span>
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
                <img src="<?= FILES . 'noticia/' . UNIDADE_GESTORA . '/' . $noticia['notfoto'] ?>" alt="">
              </div>
              <!-- kp-thumb -->
              <div class="entry-content">
                  <?=$noticia['nottexto']?>
              </div>
              <!-- entry-content -->
              
              <ul class="page-numbers clearfix">
                  <li><span>Page:</span></li>
                  <li><a href="#" class="page-numbers">1</a></li>
                  <li><span class="page-numbers current">2</span></li>
                  <li><a href="#" class="page-numbers">3</a></li>
              </ul>
                 <div class="related-article">
              <div class="widget-title">FOTOS RELACIONADAS</div>
              <div class="owl-carousel owl-carousel-related">
                
                    <div class="item">
                      <a href="#" class="caption">
                        <img src="placeholders/posts/img-18.jpg" alt="">
                        <span class="icon-plus"></span>
                        <p>1914 translation by H. Rack</p>
                      </a>
                    </div>
                    <!-- item -->
                  
                    <div class="item">
                      <a href="#" class="caption">
                        <img src="placeholders/posts/img-35.jpg" alt="">
                        <span class="icon-plus"></span>
                        <p>1914 translation by H. Rack</p>
                      </a>
                    </div>
                    <!-- item -->
                 
                    <div class="item">
                      <a href="#" class="caption">
                        <img src="placeholders/posts/img-36.jpg" alt="">
                        <span class="icon-plus"></span>
                        <p>1914 translation by H. Rack</p>
                      </a>
                    </div>
                    <!-- item -->
                
                    <div class="item">
                      <a href="#" class="caption">
                        <img src="placeholders/posts/img-37.jpg" alt="">
                        <span class="icon-plus"></span>
                        <p>1914 translation by H. Rack</p>
                      </a>
                    </div>
                    <!-- item -->
                
                    <div class="item">
                      <a href="#" class="caption">
                        <img src="placeholders/posts/img-18.jpg" alt="">
                        <span class="icon-plus"></span>
                        <p>1914 translation by H. Rack</p>
                      </a>
                    </div>
                    <!-- item -->
                 
                    <div class="item">
                      <a href="#" class="caption">
                        <img src="placeholders/posts/img-18.jpg" alt="">
                        <span class="icon-plus"></span>
                        <p>1914 translation by H. Rack</p>
                      </a>
                    </div>
                    <!-- item -->
                  
                    <div class="item">
                      <a href="#" class="caption">
                        <img src="placeholders/posts/img-18.jpg" alt="">
                        <span class="icon-plus"></span>
                        <p>1914 translation by H. Rack</p>
                      </a>
                    </div>
                    <!-- item -->                 
              
              </div>
              <!-- owl-carousel-related -->
            </div>
              
              
              <footer>
                <ul class="pager-page list-unstyled clearfix">
                  <li class="prev pull-left">
                    <h3><span class="icon-double-angle-left"></span><a href="#">previous article</a></h3>
                    <a href="#">1914 translation by H. Rackham</a>
                  </li>
                  <li class="next pull-right">
                    <h3><a href="#">next Article</a> <span class="icon-double-angle-right"></span></h3>
                    <a href="#">US labour market shows strong rise: 236,000</a>
                  </li>
                </ul>
                <div class="kp-author">
                  <h3>about author</h3>
                  <div class="author-body clearfix">
                    <img src="placeholders/avartar/img.jpg" class="pull-left" alt="">
                    <div class="item-right">
                      <h3><a href="#">Jolie Angelina</a></h3>
                      <p>Etiam varius dui eget lorem elementum eget mattis sapien interdum. In hac habitasse platea dictumst.</p>
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
                <!-- kp-author -->
              </footer>
            </article>
           
            <!-- related-article -->
            <div id="comments">
              <h3 class="comments-title kp-title">1 comments</h3>
              <ul class="comment-list">
                <li class="comment">
                  <article class="comment-body">
                    <figure class="pull-left">
                      <img src="placeholders/avartar/img-1.jpg"  alt="">
                    </figure>
                    <div class="comment-content item-right">
                      <header class="clearfix">
                        <h4>Jolie Angelina</h4>
                        <p class="kp-metadata">10 September, 2013 at 5:26 pm</p>
                        <p class="reply">
                          <a href="#" class="edit-link">Edit /</a>
                          <a href="#" class="reply-link">Reply</a>
                        </p>
                      </header>
                      <div class="entry-content">
                        <p>Etiam varius dui eget lorem elementum eget mattis sapien interdum. In hac habitasse platea dictumst. Morbi sed nisi est, vitae convallis nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo ante, consectetur sit amet vulputate vel, dapibus sit amet lectus. Etiam varius dui eget lorem elementum eget mattis sapien interdum. In hac habitasse platea dictumst. Morbi sed nisi est, vitae convallis nulla.</p>
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
                            <p class="kp-metadata">10 September, 2013 at 5:26 pm</p>
                            <p class="reply">
                              <a href="#" class="edit-link">Editar /</a>
                              <a href="#" class="reply-link">Reply</a>
                            </p>
                          </header>
                          <div class="entry-content">
                            <p>Etiam varius dui eget lorem elementum eget mattis sapien interdum. In hac habitasse platea dictumst. Morbi sed nisi est, vitae convallis nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo ante, consectetur sit amet vulputate vel, dapibus sit amet lectus. Etiam varius dui eget lorem elementum eget mattis sapien interdum. In hac habitasse platea dictumst. Morbi sed nisi est, vitae convallis nulla.</p>
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
                        <p class="kp-metadata">10 September, 2013 at 5:26 pm</p>
                        <p class="reply">
                          <a href="#" class="edit-link">Edit /</a>
                          <a href="#" class="reply-link">Reply</a>
                        </p>
                      </header>
                      <div class="entry-content">
                        <p>Etiam varius dui eget lorem elementum eget mattis sapien interdum. In hac habitasse platea dictumst. Morbi sed nisi est, vitae convallis nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo ante, consectetur sit amet vulputate vel, dapibus sit amet lectus. Etiam varius dui eget lorem elementum eget mattis sapien interdum. In hac habitasse platea dictumst. Morbi sed nisi est, vitae convallis nulla.</p>
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
                        <p class="kp-metadata">10 September, 2013 at 5:26 pm</p>
                        <p class="reply">
                          <a href="#" class="edit-link">Edit /</a>
                          <a href="#" class="reply-link">Reply</a>
                        </p>
                      </header>
                      <div class="entry-content">
                        <p>Etiam varius dui eget lorem elementum eget mattis sapien interdum. In hac habitasse platea dictumst. Morbi sed nisi est, vitae convallis nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo ante, consectetur sit amet vulputate vel, dapibus sit amet lectus. Etiam varius dui eget lorem elementum eget mattis sapien interdum. In hac habitasse platea dictumst. Morbi sed nisi est, vitae convallis nulla.</p>
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
              <h3 id="reply-title" class="comment-reply-title kp-title">Deixe uma resposta</h3>
              
              <form action="https://upsidethemes.net/" method="post" class="comment-form clearfix">
                <p class="comment-notes">Your email address will not be published. Required fields are marked<span>*</span></p>
                <div class="pull-left">
                  <div class="form-group">
                    <label for="name">Name <span>*</span></label>
                    <input class="form-control" name="name" type="text" id="name">
                  </div>
                  <div class="form-group">
                    <label for="name">Email <span>*</span></label>
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
                    <label for="textarea">Your comment <span>*</span></label>
                    <textarea class="form-control" name="message" id="textarea"></textarea>
                  </div>
                  <input type="submit" id="input-submit" value="post comment">
                </div>
              </form>
              <div id="response"></div>
            </div>
            <!-- respond -->
            </div>
            <!-- comments -->
            
            <div class="clearfix"></div>
            
        </div>
        <!-- main-col -->
        
        
        <div class="widget-area-5">
           <?php include_once 'include/menu_home_newsletter.php'; ?>
          <!-- widget-newsletter -->

          <!-- widget-morenews -->
        </div>
        <!-- widget-area-5 -->
    </div>
    <!-- main-content -->
   
    
</body>
