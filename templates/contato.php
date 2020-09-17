<?php

$hoje =  date('d-m-Y');
//$hojePartes =  MDate::datePart($hoje);
//$data = MDate::getDiaSemana($hoje).", ".$hojePartes->dia." de ".MDate::getMeses(1, $hojePartes->mes)." de ".$hojePartes->ano;
//$ano  = $hojePartes->ano;
?>
<div id="main-content" class="container clearfix">
     <?php
        include 'include/menu_home_topo.php';
      ?>
    <!-- main-top -->
    <div id="main-col" class="pull-left">
         <ul class="breadcrumb">
              <li><a href="index.php">Início</a></li>
              <li class="active">Contato</li>
         </ul>
        <article class="post-content">              
          <div id="area-map">
          <!-- area map -->
          
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d304.04004520671606!2d-42.83205274141846!3d-5.070370532901914!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x78e39c53b239e1f%3A0xc837274a8b8d2364!2sMAGNUSOFT+-+Desenvolvimentos!5e0!3m2!1spt-BR!2sbr!4v1537446124674" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen>
          </iframe>
           <!-- fim area map -->
          </div>
          <h3 class="contact-info kp-title">Informações do Contato</h3>
          <div class="entry-content">
            <p>Agricolândia é um município brasileiro do estado do Piauí. Localiza-se a uma latitude 05º47'56" sul e a uma longitude 42º40'08" oeste, estando a uma altitude média de 230 metros. Sua população estimada em 2010 é de 5 080 habitantes.</p>
            <p>Agricolândia é um município brasileiro do estado do Piauí. Localiza-se a uma latitude 05º47'56" sul e a uma longitude 42º40'08" oeste, estando a uma altitude média de 230 metros. Sua população estimada em 2010 é de 5 080 habitantes.</p>
            <p>Agricolândia é um município brasileiro do estado do Piauí. Localiza-se a uma latitude 05º47'56" sul e a uma longitude 42º40'08" oeste, estando a uma altitude média de 230 metros. Sua população estimada em 2010 é de 5 080 habitantes.</p>
            <div class="company-info">
             <div class="col-sm-left col-6">
              <span>PREFEITURA MUNICIPAL DE AGRICOLANDIA</span>
              <ul class="list-unstyled">
                 <li>
                    <i class="icon-home"> Endereço: </i>
                    <strong></strong>
                </li>
                <li>
                    <i class="icon-folder-open"> Bairro: </i>
                    <strong> </strong>
                </li>
                <li>
                    <i class="icon-google-plus"> Website: </i>
                    <strong> www.magnusoft.com.br</strong>
                </li>
                <li>
                    <i class="icon-calendar"> Horário: </i>
                    <strong> </strong>
                </li>
                <li>
                    <i class="icon-phone"> Fone: </i>
                    <strong> </strong>
                </li>
                <li><a href="https://upsidethemes.net/cdn-cgi/l/email-protection#b1dadec1d0c2ded7f1d6dcd0d8dd9fd2dedc"><span class="__cf_email__" data-cfemail="147f7b6475607c717971547379757d783a777b79">[email&#160;protected]</span></a></li>
              </ul>
              </div>
               <div class="col-sm-left col-6">
                   <img src="images/contato.jpg" height="150" alt="">
               </div>
            </div>
            <!-- company-info -->
          </div>
          <!-- entry-content -->
       </article>
        <br>
        <div id="comments">
         <div id="respond">
          <h3 id="reply-title" class="comment-reply-title kp-title">ENVIE-NOS MENSAGEM</h3>

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

    </div>
    <!-- main-col -->
    <div id="sidebar" class="pull-left">
          <div class="widget widget-ads" style="margin-top: -16px; margin-left: -25px">
             <?php
             include_once 'include/menu_home_clima_2.php';
            //include_once 'include/menu_sidebar_noticia_popular.php';
             ?>
          </div>
         <?php
             include_once 'include/menu_sidebar_mapa_localizacao.php';
             include_once 'include/menu_sidebar_propaganda.php';
             ?>
        
           
            
           <?php
             include_once 'include/menu_sidebar_servico.php';
            //include_once 'include/menu_sidebar_noticia_popular.php';
             ?>


         <?php
           // include_once 'include/menu_home_video.php';
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
