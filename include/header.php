<?php
include_once 'include/head.php';
include_once 'app/control/Router.class.php';
include_once 'app/control/Layout.class.php';
$hoje =  date('d-m-Y');
//$hojePartes =  MDate::datePart($hoje);
//$data = MDate::getDiaSemana($hoje).", ".$hojePartes->dia." de ".MDate::getMeses(1, $hojePartes->mes)." de ".$hojePartes->ano;
//$ano  = $hojePartes->ano;

?>
      
<header id="page-header"> 
    <div class="header-top">
        <div class="container">
            <nav class="pull-left">
                <ul class="sf-menu main-menu">
                    <li class="current-menu-item">
                        <a href="#">
                            <i class="fa fa-calendar fa-fw fa-lg"></i>
                            <?=$hoje ?>
                            {header_data}
                        </a>                            
                    </li>
                    <li class="current-menu-item">
                        <a href="./index-2.html"><i class="fa fa-key fa-fw  fa-lg"></i></i> Acesso</a>                            
                    </li>
                    <li>
                        <a href="?p=contracheque"><i class="fa fa-money  fa-fw fa-lg"></i> Contra-Cheque</a>
                    </li>
                    <li class="current-menu-item">
                        <a href="../index-2.html"><i class="fa fa-book fa-fw  fa-lg"></i> DIOFE</a>                            
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-medkit fa-fw fa-lg"></i> TRANSCOVID19</a>
                    </li>
                    <li>
                     <a href="#"> <i class="fa fa-search-plus fa-fw fa-lg"></i> e_SIC</a>
                        <ul>
                            <li>
                                <a href="#">Menu item</a>
                                <ul>
                                    <li><a href="#">Short</a></li>
                                    <li><a href="#">Short</a></li>
                                    <li><a href="#">Short</a></li>
                                    <li><a href="#">Short</a></li>
                                    <li><a href="#">Short</a></li>
                                </ul>
                            </li>
                       
                        </ul>
                    </li>
                </ul>
                <div class="mobile-menu clearfix">
                    <span>Menu</span>
                    <ul class="toggle-view-menu">
                      <li class="clearfix">
                          <h3><a href="#">Início</a><span>+</span></h3>
                          <div class="menu-panel clearfix">
                              <ul>
                                  <li><a href="#">Index style 1</a></li>
                                  <li><a href="#">Index style 2</a></li>
                                  <li><a href="#">Index style 3</a></li>
                              </ul>
                          </div>
                      </li>
                      <li class="clearfix">
                          <h3><a href="#">Paginas</a><span>+</span></h3> 
                          <div class="menu-panel clearfix">
                              <ul>
                                  <li><a href="#">Sobre page</a></li>
                                  <li><a href="#">Elements page</a></li>
                                  <li><a href="#">404 page</a></li>
                              </ul>
                          </div>
                      </li>
                      <li class="clearfix">
                          <h3><a href="#">Portfolio</a><span>+</span></h3>
                          <div class="menu-panel clearfix">
                              <ul>
                                  <li><a href="#">Portfolio 3 column</a></li>
                                  <li><a href="#">Portfolio 2 column</a></li>
                                  <li><a href="#">Portfolio 1 column</a></li>
                                  <li>
                                      <a href="#">Portfolio detail</a>
                                      <ul>
                                          <li><a href="#">Portfolio single</a></li>
                                          <li><a href="single-full-width.html">Portfolio audio</a></li>
                                          <li><a href="single.html">Portfolio gallery</a></li>
                                          <li><a href="single-video.html">Portfolio video</a></li>
                                          <li><a href="single-audio.html">Portfolio soundcloud</a></li>
                                      </ul>
                                  </li>
                              </ul>
                          </div>
                      </li>
                      <li class="clearfix">
                          <h3><a href="#">Blog</a><span>+</span></h3>     
                          <div class="menu-panel clearfix">
                              <ul>
                                  <li>
                                      <a href="#">Blog style 1</a>
                                      <ul>
                                          <li><a href="#">Width left sidebar</a></li>
                                          <li><a href="#">Width right sidebar</a></li>
                                          <li><a href="#">Width two sidebar</a></li>
                                      </ul>
                                  </li>
                                  <li><a href="../blog-2.html">Blog style 2</a></li>
                                  <li>
                                      <a href="#">Blog style 3</a>
                                      <ul>
                                          <li><a href="#">Width one sidebar</a></li>
                                          <li><a href="#">Width two sidebar</a></li>
                                      </ul>
                                  </li>
                                  <li>
                                      <a href="#">Blog single</a>
                                      <ul>
                                          <li><a href="#">Single style 1</a></li>
                                          <li><a href="#">Single style 2</a></li>
                                          <li><a href="#">Single style 3</a></li>
                                          <li><a href="#">Single style 4</a></li>
                                      </ul>
                                  </li>
                              </ul>
                          </div>
                      </li>
                      <li class="clearfix"><h3><a href="#">Contact</a></h3></li>                   
                    </ul><!--toggle-view-menu-->
                </div><!--mobile-menu-->
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
    <!-- header-top -->
    <div class="header-middle container clearfix">
        
        <div class="logo pull-left">
            <a href="./index.php" title="Brasão Oficial de: ">
               <img src="files/prefeituras/201002/brasao002.jpg" width="70" height="70" alt="brasao" class="img-responsive" >
            </a>
           
            <!--p class="kp-social pull-right" >
                <a href="#" class="icon-google-plus2"></a>
                <a href="#" class="icon-linkedin"></a>
                <a href="#" class="icon-facebook"></a>
                <a href="#" class="icon-feed"></a>
                <a href="#" class="icon-twitter2"></a>
                <a href="#" class="icon-dribbble"></a>
            </p-->
          
             <p class="kp-social pull-right" >
                 <br>
                <a href="./index.php">AGRICOLÂNDIA</a> <!--SANTA CRUZ DOS MILAGRES-->
            </p>
            
        </div>
        <div class="logo pull-left" style="margin-left: -120px">
            <a href="./index.php" title="Bandeira Oficial de: " >
                <img src="files/prefeituras/201002/bandeira002.jpg" width="110" height="70" alt="bandeira" class="img-responsive" >
            </a>
        </div>
         
        <div class="logo pull-left" style="margin-left: 00px">
              <a href="./index.php" title="Logomarca Oficial de: " >
                <img src="files/prefeituras/201002/slogan002.jpg" width="280" height="180" alt="bandeira" class="img-responsive" >
            </a>
        </div>
        <div class="logo pull-right" style="margin-left: 00px">
             <a href="./index.php" title="Imagem Oficial de: " >
                <img src="./images/IMAGEM_TOPO.jpg" width="auto" height="auto" alt="bandeira" class="img-responsive" >
            </a>
        </div>
        <!--p class="kp-social pull-right">
            <a href="#" class="icon-google-plus2"></a>
            <a href="#" class="icon-linkedin"></a>
            <a href="#" class="icon-facebook"></a>
            <a href="#" class="icon-feed"></a>
            <a href="#" class="icon-twitter2"></a>
            <a href="#" class="icon-dribbble"></a>
        </p-->
        
    </div>
    <!-- header-middle -->
    <div class="header-bottom container">
        <nav class="clearfix">
            <a href="./index.php" class="icon-home kp-icon-home"></a>
            <ul class="sf-menu main-menu">
                <li class="{home_current}">
                    <a href="index.php"><i  class="fa fa-hospital-o fa-lg"></i></i> Cidade</a>
                    <ul>
                    <li><a href="./historia" title="História de: "><i class="fa fa-history  fl-fg"></i> História</a></li>
                    <li><a href="./hino" title="Hino Oficial de: "><i class="fa fa-music fl-fg"></i> Hino</a></li>
                    <li><a href="http://www.cidades.ibge.gov.br/xtras/perfil.php?lang=&codmun=2200103&search=piaui|Agricolândia" target="_blank" title="IBGE-Dados Estatísticos de: {header_nome}"><i class="fa fa-line-chart fl-fg"></i> Perfil IBGE</a></li>
                    <li><a href="https://www.melhoresrotas.com/s/distancia-entre-cidades"  target="_blank" title="Distâncias de  a ..."><i class="fa fa-map-o  fl-fg"></i> Mapa-Localização</a></li>
                    <li><a href="?p=esporte" title="Campos de Futebol e Ginásios de ESPORTE de: "><i class="fa fa-futbol-o fl-fg"></i> Esportes</a></li>
                    <li><a href="?p=povoado" title="Localidade e Povoados  de: "><i class="fa fa-home fl-fg"></i> Localidades e Povoados</a></li>
                    </ul>
                </li>
                <li  class="{gestao_current}">
                    <a href="index.php"><i  class="fa fa-line-chart   fa-lg"></i> Gestão</a>
                    <ul>
                        <li><a href="?p=erro_404" title="Prefeito(a) de: {header_nome}"><i class="icon-user"></i> Prefeito</a></li>
                        <li><a href="contact.html" title="Vice-Prefeito(a) de: {header_nome}"><i class="fa fa-user-circle-o  fl-fg"></i> Vice</a></li>
                        <li><a href="element.html"><i class="icon-home"></i> Secretários e Gestores</a></li>
                        <li><a href="https://www.municipiaui.com/index.php?p=cidade&codigoUnidGestora=101002" title="Câmara Municipal de {header_nome}" target="_blank" ><i class="fa fa-users fl-fg"></i> Câmara Municipal</a></li>

                    </ul>
                </li>
              
                <li class="{secretaria_current}">
                    <a href="index.php"><i  class="fa fa-university  fa-lg"></i></i> Secretarias</a>
                    <ul>
                        <li><a href="category.html"><i  class="fa fa-university fl-fg"></i> Secretarios</a></li>
                        <li><a href="category-2.html"><i  class="fa fa-university fl-fg"></i> Unidades</a></li>
                    </ul>
                </li>
                <li class="{{negocio_current}">
                    <a href="index.php"> <i class="fa fa-industry fl-fg"></i> </i> Negócios</a>
                    <ul>
                        <li><a href="#"  title="Feiras em: {header_nome}"><i  class="fa fa-bullseye fl-fg"></i> Feiras Agrícolas</a></li>
                        <li><a href="#"  title="Exposição em: {header_nome}"><i class="fa fa-calculator fl-fg"></i> Exposição</a></li>
                        <li><a href="#"  title="Festejos: {header_nome}"><i class="fa fa-hand-o-right  fl-fg"></i> Festejos</a></li>
                    </ul>
                </li>
                 <li class="{turismo_current}">
                    <a href="index.php"><i  class="fa fa-bus  fa-lg"></i> </i> Turísmo</a>
                    <ul>
                        <li><a href="?p=alimentacao" title="Restaurantes e Casas de Alimentação em: {header_nome}"><i class="fa fa-cutlery fl-fg"></i> Alimentação</a></li>
                        <li><a href="?p=banco" title="Bancos, Loterias e CASH em: {header_nome}"><i class="fa fa-money fl-fg"></i> Bancos</a></li>
                        <li><a href="?p=combustivel" title="Postos de Combustíveis em: {header_nome}"><i class="fa fa-filter fl-fg"></i> Combustível</a></li>
                        <li><a href="?p=igreja" title="Santuários e Igrejas de: {header_nome}"><i  class="fa fa-bell-o fl-fg"></i> Igrejas</a></li>
                        <li><a href="?p=hotel" title="Hotéis, Pensões e Pousadas em: {header_nome}"><i  class="fa fa-bed fl-fg"></i> Hotelaria</a></li>
                        <li><a href="?p=transporte" title="Transportes Diversos para: {header_nome}"><i  class="fa fa-taxi fl-fg"></i> Transportes</a></li>
                        <li><a href="?p=turismo" title="Pontos Turísiticos  Diversos para: {header_nome}"><i  class="fa fa-camera fl-fg"></i> Turísmo</a></li>
                    </ul>
                </li>
                <li class="{comunicacao_current}">
                    <a href="index.php"><i class="icon-feed2  fa-lg"></i> Comunicação</a>
                    <ul>
                        <li><a href="?p=galeria" title="Fotos de: {header_nome}"><i class="fa fa-vid fa-picture-o fl-fg"></i> Galeria de Fotos</a></li>
                        <li><a href="?p=noticia_geral" title="Noticias Gerais de: {header_nome}"><i  class="fa fa-newspaper-o fl-fg"></i> Notícias Geral</a></li>
                        <li><a href="?p=noticia_bloco" title="Noticias em Bloco de: {header_nome}"><i  class="fa fa-newspaper-o fl-fg"></i> Notícias Bloco</a></li>
                        <li><a href="?p=video" title="Vídeos Diversos de: {header_nome}"><i class="fa fa-vid fa-video-camera fl-fg"></i> Vídeos </a></li>
                        <li><a href="?p=multimidia"><i class="icon-rss"></i> Multimídia</a></li>
                    </ul>
                </li>
                
                 <li class="{comunicacao_current}">
                    <a href="index.php"> <i class="fa fa-wrench  fa-lg"></i> Serviços</a>
                    <ul>
                        <li><a href="?p=erro_404" title="Prefeito(a) de: {header_nome}"><i class="fa fa-user fa-fw  fa-lg"></i> Erro 404</a></li>
                    </ul>
                </li>
                <li class="{covid_current}">
                    <a href="index.php"> <i class="fa fa-medkit  fa-lg"></i> COVID</a>
                </li>   
                <li class="{contato_current}">
                    <a href="?p=contato"><i class="icon-phone  fa-lg"></i> Contato</a>
                </li> 
                   
            </ul>
          
        </nav>
    </div>
</header>

 