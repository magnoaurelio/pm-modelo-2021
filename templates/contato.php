<?php

$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();
$ano = $hojePartes->getAno();

$prefeitura = new Prefeitura(UNIDADE_GESTORA);
?>
<div id="main-content" class="container clearfix">
     <?php
        include 'include/menu_home_topo.php';
      ?>
    <!-- main-top -->
    <div id="main-col" class="pull-left">
         <ul class="breadcrumb">
              <li><a href="index.php">Início</a></li>
              <li class="active">Contato <strong><?=$prefeitura->prenome ?></strong></li>
         </ul>
        <article class="post-content">              
          <div id="area-map">
          <!-- area map -->
          
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d304.04004520671606!2d-42.83205274141846!3d-5.070370532901914!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x78e39c53b239e1f%3A0xc837274a8b8d2364!2sMAGNUSOFT+-+Desenvolvimentos!5e0!3m2!1spt-BR!2sbr!4v1537446124674" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen>
          </iframe>
                    <!--iframe src="https://www.google.com/maps/embed?pb=Agricolândia,+PI,+64440-000/@-5.7964947,-42.6692171,15z/data=!3m1!4b1!4m5!3m4!1s0x78556d788213803:0xee35d93ac5de180!8m2!3d-5.7965162!4d-42.6604623?hl=pt-PT" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen>
          </iframe-->

           <!-- fim area map -->
          </div>
          <h3 class="contact-info kp-title">Informações do Contato</h3>
          <div class="entry-content">
            
            <div class="company-info">
             <div class="col-sm-left col-6">
              <span>PREFEITURA MUNICIPAL DE <strong><?=$prefeitura->prenome ?></strong></span>
              <p><?=$prefeitura->preslogan ?></p>
              <ul class="list-unstyled">
                <li>
                    <i class="icon-calendar"> Fundação: </i>
                    <strong><?=DataCalendario::date2br($prefeitura->predata) ?> </strong>
                </li>
                 <li>
                    <i class="icon-home"> Endereço: </i>
                    <strong><?=$prefeitura->preendereco ?></strong>
                </li>
                <li>
                    <i class="icon-home"> Bairro: </i>
                    <strong><?=$prefeitura->prebairro ?> </strong>
                </li>
                <li>
                    <i class="icon-home"> CEP: </i>
                    <strong><?=$prefeitura->precep ?> </strong>
                </li>
                <li>
                    <i class="icon-feed"> Website: </i>
                    <strong> <?=$prefeitura->presite ?></strong>
                </li>
                <li>
                    <i class="icon-calendar"> Horário: </i>
                    <strong><?=$prefeitura->prehorario ?> </strong>
                </li>
                <li>
                    <i class="icon-phone"> Fone: </i>
                    <strong><?=$prefeitura->prefone ?> </strong>
                </li>
                <li>
                    <i class="icon-user"> Nº Eleitores: </i>
                    <strong><?=$prefeitura->preeleitor ?> votos </strong>
                </li>
                <li>
                    <i class="icon-user"> População: </i>
                    <strong><?=$prefeitura->prepopulacao ?> hab </strong>
                </li>
                <li>
                     <i class="icon-email"> E-mail: </i>
                    <strong><?=$prefeitura->preemail ?> </strong>
                    <a href="https://upsidethemes.net/cdn-cgi/l/email-protection#b1dadec1d0c2ded7f1d6dcd0d8dd9fd2dedc"><span class="__cf_email__" data-cfemail="147f7b6475607c717971547379757d783a777b79">[email&#160;protected]</span></a>
                </li>
              </ul>
              </div>
                
               <div class="col-sm-left col-6">
                    <br> <br> 
                   <img src="images/contato.jpg" height="150" alt="">
                     <br><br><br><br> <br><br>

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

          <div class="pt-site">
            <div class="row">
       <!-- AQUI COMEÇA O COMENTARIO DA AMPAR -->
        <div class="col-lg-7 " >
            <img src="imagens/contato.jpg" alt="">
            <?php
            $param = $_POST;         
            
            $EMAIL_RECEPT = [
                ['email' => 'marceloalvessoft@gmail.com', 'nome' => 'Marcelo Alves'],
                ['email' => 'magnusoft1@hotmail.com', 'nome' => 'Magno Aurélio']
            ];
            
            
            if(isset($param['.UNIDADE_GESTORA.']) && $param['.UNIDADE_GESTORA.']):
                $prefeitura = new Prefeitura($param['.UNIDADE_GESTORA.']);
                $EMAIL_RECEPT[] =  ['email' => $prefeitura->preemail, 'nome' => $prefeitura->prenome];
            endif;
            if (isset($param['email']) && !empty($param['email'])):
                try {
                    $mail = new TMail;
                    $mail->setFrom($param['email'], $param['nome']);
                    $mail->setSubject($param['assunto']);
                    $mail->setHtmlBody("<b>Fale Conosco!</b><br><b>Nome Usuário: {$param['nome']} <br>Email do Usuário: {$param['email']}</b><br>{$param['mensagem']}");

                    foreach ($EMAIL_RECEPT as $email):
                        $mail->addAddress($email['email'], $email['nome']);
                    endforeach;
                    $mail->SetUseSmtp();
                    $mail->SetSmtpHost('smtp.gmail.com', 465);
                    $mail->SetSmtpUser('esicouvidoria@gmail.com', 'marcelo10');
                    $mail->send();
                    echo "<p class='alert alert-success'>{$param['nome']}! Obrigado por entrar em contato conosco retornaremos o mais breve possível!<p>";
                } catch (Exception $e) {
                    echo "<p class='alert alert-warning'>{$e->getMessage()}</p>";
                }

            endif;
            ?>
            <form action="?p=contato" method="post">
                <div class="form-group">
                    <label for="email">Nome</label><br><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nome" aria-describedby="emailHelp" placeholder="">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label><br><br>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="">
                </div>
                 <div class="form-group" id="entidade">
                        <label for="entidade">Destino</label><br><br>
                       
                        <select class="form-control"  name=".UNIDADE_GESTORA.">
                            <option value="0">Selecione uma Entidade</option>     
                            <?php
                            $prefeituras = new Prefeitura(null,"ampar");
                            foreach ($prefeituras->getResult() as $prefeitura) {

                                echo "<option  value='{$prefeitura['.UNIDADE_GESTORA.']}'>{$prefeitura['prenome']}</option>";
                            }
                            ?>   
                        </select>
                    </div>
                <div class="form-group">
                    <label for="cidade">Cidade</label><br><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="cidade" aria-describedby="emailHelp" placeholder="">
                </div>
                <div class="form-group">
                    <label for="objeto">Assunto</label><br><br>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="assunto" aria-describedby="emailHelp" placeholder="">
                </div>

                <div class="form-group">
                    <label for="exampleTextarea">Mensagem</label><br><br>
                    <textarea name="mensagem" class="form-control" id="exampleTextarea" rows="3"></textarea>
                </div>

                <button type="submit" name="enviar" value="true" class="btn btn-primary"><i class="fa fa-send"></i> Enviar</button>
            </form>
        </div>
    </div>
           </div>
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
             include_once 'include/menu_publicidade_sidebar.php';
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
        <?php// include_once 'include/menu_home_newsletter.php'; ?>
        <!-- fim widget-area-5 -->
       <!-- widget-area-5 -->
   </div>
   <!-- main-content -->
