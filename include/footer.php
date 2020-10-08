<!-- page-footer -->
<?php

//<?=DataCalendario::date2br($hoje) 
$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();
$ano  = $hojePartes->getAno();

$prefeitura = new Prefeitura(UNIDADE_GESTORA); 
?>
<header id="page-header">
<div class="header-top">
        <div class="container">
            <nav class="pull-left">
                
                <ul class="sf-menu main-menu">
                    <li class="current-menu-item">
                        <a href="./index.php" title="Início" style="font-size: 16px;" class="icon-home kp-icon-home"></a>
                     </li>
                   
                   
                    <li class="current-menu-item">
                        <a href="?p=alimentacao" title="Pontos de Alimentação de: <?= $prefeitura->prenome ?>"><i class="fa fa-cutlery fl-fg"></i></i> Alimentação</a>                            
                    </li>
                     <li class="current-menu-item">
                        <a href="?p=esportes" title="Praças de Esporte de: <?= $prefeitura->prenome ?>"><i class="fa fa-futbol-o fl-fg"></i></i> Esporte</a>                            
                    </li>
                   
                    <li class="current-menu-item">
                       <a href="?p=galeria" title="Fotos de: <?= $prefeitura->prenome ?>"><i class="fa fa-vid fa-picture-o fl-fg"></i> Galeria</a>
                         
                    </li>
                    <li>
                        <a href="?p=contracheque"><i  class="fa fa-bed fl-fg"></i></i> Hotéis</a>
                    </li>
                    
                     <li class="current-menu-item">
                        <a href="?p=igreja"><i  class="fa fa-bell-o fl-fg"></i></i> Igrejas</a>                            
                    </li>
                    <li>
                        <a href="#" title="Notícias Diversas de <?= $prefeitura->prenome ?>"><i  class="fa fa-newspaper-o fl-fg"></i></i> Notícias</a>
                          <ul>
                            <li>
                                <a href="?p=noticia_geral" title="Notícias Diversas de <?= $prefeitura->prenome ?>"><i class="icon-feed2"></i>Notícia Geral</a>
                                <ul>
                                    <li><a href="#"><i class="icon-feed"></i>Caderno</a></li>
                                   
                                </ul>
                            </li>
                            <li>
                                <a href="?p=noticia_bloco"  title="Noticias de: <?= $prefeitura->prenome ?>"><i class="icon-feed2"></i>Notícia Bloco</a>
                                <ul>
                                    <li><a href="#"><i class="icon-feed"></i>Jornal</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                     <li class="current-menu-item">
                        <a href="?p=hotelaria" title="Hotéis e Pensões de: <?= $prefeitura->prenome ?>"><i class="fa fa-home fl-fg"></i></i> Hotelaria</a>                            
                    </li>
                    <li>
                        <a href="?p=video_bloco" title="Vídeos Oficiais de <?= $prefeitura->prenome ?>"><i class="fa fa-vid fa-video-camera fl-fg"></i> Vídeo</a>
                    </li>
                    <li><a href="?p=galeria" title="Galeria de Fotos de <?= $prefeitura->prenome ?>"><i  class="fa fa-bus fl-fg"></i> </i> Turísmo</a></li> 
                    <li><a href="?p=contato" title="Contatos da Administração de <?= $prefeitura->prenome ?>"><i class="icon-phone"></i> Contato</a></li>   
                </ul>
               
            </nav>
            <div class="search-box pull-right">
                <form action="https://upsidethemes.net/" method="post" class="search-form clearfix">
                    <div class="form-group">                    
                        <input type="text"  name="search-text" class="form-control" onBlur="if (this.value == '')
                this.value = this.defaultValue;" onFocus="if (this.value == this.defaultValue)
                this.value = '';" value="Pequisa por Nome" >
                    </div>
                    <button type="submit" class="search-submit"><span class="icon-search"></span></button>
                </form>
            </div>
            <!-- search box -->
        </div>
        <!-- container -->            
    </div>

</header>
<div id="page-footer" class="container">
    <div class="col-sm-left col-8">
     <h4 class="widget-title">Links Importantes e Redes Sociais</h4>
   
     <p class="kp-social">
         <a target="_blank" href="https://www42.bb.com.br/portalbb/daf/beneficiario,802,4647,4652,0,1.bbx" title="Banco do Brasil">
          <img src="./images/social/bb1.jpg" width="35" height="35" alt="BB">
      </a>
      <a target="_blank" href="http://www.caixa.gov.br/" title="Caixa Econômica Federal">
          <img src="./images/social/cef.jpg" width="35" height="35" alt="CAIXA">
      </a>
      <a target="blank" href="http://www.bnb.gov.br/" title="Banco do Nordeste">
          <img src="./images/social/bnb.jpg" width="35" height="35" alt="BNB">
      </a>
      <a target="blank" href="#" title="Ministério Público do Piauí"><img src="./images/social/minpublico.jpg" width="35" height="35" alt="BNB"></a>
      <a target="blank" href="#" title="Tribunal de Contas do Estado do Piauí"><img src="./images/social/tce.jpg" width="35" height="35" alt="BNB"></a>
      <a target="blank" href="#" title="Tribunal Regional Eleitoral - Piauí"><img src="./images/social/trepi.jpg" width="35" height="35" alt="BNB"></a>
      <a target="blank" href="#" title="Senado Federal"><img src="./images/social/senado.jpg" width="35" height="35" alt="CAIXA"></a>
      <a target="blank" href="#" title="Câmara do Deputados"><img src="./images/social/camara.jpg" width="35" height="35" alt="BNB"></a>
      <a target="blank" href="#" title="ALEPI - Assembléia Legislativa do Estado do Piauí"><img src="./images/social/alepi.jpg" width="35" height="35" alt="AMPAR"></a>
      <a target="blank" href="#" title="CNM - Confederação Nacional dos Municípios"><img src="./images/social/cnm.jpg" width="35" height="35" alt="AMPAR"></a>
      <a target="blank" href="#" title="APPM - Associação Piauiense de Prefeitos"><img src="./images/social/appm.jpg" width="35" height="35" alt="APPM"></a>
      <a target="blank" href="#" title="AMPAR - Associação do Municípios da Micro Região do Médio Parnaíba"><img src="./images/social/ampar.jpg" width="35" height="35" alt="AMPAR"></a>
      <a target="blank" href="#" title="AVEP - Associação dos Vereadores do Piauí"><img src="./images/social/avep.jpg" width="35" height="35" alt="AMPAR"></a>
      <a target="blank" href="#" title="MUNICIPIAUÍ - Prefeituras e Câmaras"><img src="./images/social/munpiaui.jpg" width="35" height="35" alt="AMPAR"></a>
      <br><br>
      <a href="#" class="icon-google-plus2"></a>
      <a href="#" class="icon-linkedin"></a>
      <a href="#" class="icon-facebook"></a>
      <a href="#" class="icon-feed"></a>
      <a href="#" class="icon-twitter2"></a>
      <a href="#" class="icon-dribbble"></a>
    </p>
    <ul class="kp-links list-inline">
      <li><a href="#">Site Institucional de <strong>AGRICOLÂNDIA-<?= $ano ?></strong></a></li>
      <li><a href="#">Política de privacidade</a></li>
      <li><a href="#">Seus direitos de privacidade</a></li>
      <li><a href="#">Termos de uso</a></li>
    </ul>
     <p class="copy-center">
        <a href="http://magnusoft.com.br/" target="_blank">
            Copyright &copy; <strong> 2017 - <i class="icon-calendar"></i> <?= $data ?></strong> Todos direitos Reservados. <span>MAGNUSOFT desenvolvimento</span>
            <img src="./images/magnusoft_marca.png" width="120" height="35" alt="MAGNUSOFT">
        </a> 
         
    </p>
    </div>
    
    
    <div class="col-sm-right col-4">
       <?php include 'include/menu_publicidade_home_footer.php'; ?>
        <br>
    </div>
    <hr>
    <br>
    
   
</div>