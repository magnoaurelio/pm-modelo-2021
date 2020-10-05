<?php

$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();
$ano = $hojePartes->getAno();
$prefeitura = new Prefeitura(UNIDADE_GESTORA);
?>
<header id="page-header" style="background-color:#F2F2F2;">
    <div class="header-top">
        <div class="container">
            <nav class="pull-left">
                <ul class="sf-menu main-menu">
                    <li class="current-menu-item">
                        <a href="#">
                            <i class="fa fa-calendar fa-fw fa-lg"></i>
                            <?= $data ?>
                        </a>
                    </li>
                    <li class="current-menu-item">
                        <a href="?p=erro_404">
                            <button style="font-size:14px;">
                                &nbsp<i class="fa fa-key fa-fw  fa-lg" style="font-size:16px; color:green"></i>
                                <strong>ACESSO</strong> &nbsp;
                            </button>
                        </a>
                    </li>
                    <li>
                        <a href="?p=erro_404"><i class="fa fa-money  fa-fw fa-lg"></i> Contra-Cheque</a>
                    </li>
                    <li class="current-menu-item">
                        <a href="index.php"><i class="fa fa-book fa-fw  fa-lg"></i> DIOFE</a>
                    </li>
                    <li>
                        <a href="portal/#/?unidade={unidadeGestora}" title="Transparência e CORONAVÍRUS - COVID 19 de {header_nome}" target="_blank" >
                            <button style="font-size:12px;">
                                &nbsp;<i class="fa fa-medkit" style="font-size:14px; color:red"></i>
                                TRANSCOVID &nbsp;
                            </button>
                        </a>
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
                        <input type="text" name="search-text" class="form-control" onBlur="if (this.value == '')
                this.value = this.defaultValue;" onFocus="if (this.value == this.defaultValue)
                this.value = '';" value="Pequisa por Nome">
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
            <a href="./index.php" title="Brasão Oficial de: <?=$prefeitura->prenome?> ">
                <img src="<?= FILES . 'prefeituras/' . UNIDADE_GESTORA . '/' . $prefeitura->prebrasao?>" width="70" height="70" alt="brasao"
                     class="img-responsive">
            </a>

            <!--p class="kp-social pull-right" >
                <a href="#" class="icon-google-plus2"></a>
                <a href="#" class="icon-linkedin"></a>
                <a href="#" class="icon-facebook"></a>
                <a href="#" class="icon-feed"></a>
                <a href="#" class="icon-twitter2"></a>
                <a href="#" class="icon-dribbble"></a>
            </p-->

            <p class="kp-social pull-right">
                <br>
                <a href="./index.php"><?=$prefeitura->prenome?></a> <!--SANTA CRUZ DOS MILAGRES-->
            </p>

        </div>
        <div class="logo pull-left" style="margin-left: -120px">
            <a href="./index.php" title="Bandeira Oficial de: <?=$prefeitura->prenome?> ">
                <img src="<?= FILES . 'prefeituras/' . UNIDADE_GESTORA . '/' . $prefeitura->prebandeira?>" width="110" height="70" alt="bandeira"
                     class="img-responsive">
            </a>
        </div>

        <div class="logo pull-left" style="margin-left: 00px">
            <a href="./index.php" title="Logomarca Oficial de: <?=$prefeitura->prenome?> ">
                <img src="<?= FILES . 'prefeituras/' . UNIDADE_GESTORA . '/' . $prefeitura->prelogo?>" width="280" height="180" alt="logo"
                     class="img-responsive">
            </a>
        </div>
        <div class="logo pull-right" style="margin-left: 00px">
            <a href="./index.php" title="Imagem  de: <?=$prefeitura->prenome?> ">
                <img src="<?= FILES . 'prefeituras/' . UNIDADE_GESTORA . '/' . $prefeitura->preimagem?>"  alt="imagem"
                     class="img-responsive">
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
                    <a href="index.php"><i class="fa fa-hospital-o"></i></i> Cidade</a>
                    <ul>
                        <li><a href="?p=simbolo" title="Simbolos de: <?=$prefeitura->prenome?> "><i class="fa fa-flag  fl-fg"></i> Simbolos
                                </a></li>
                        <li><a href="?p=historia" title="História de: <?=$prefeitura->prenome?> "><i class="fa fa-history  fl-fg"></i> História
                               </a></li>
                        <li><a href="?p=hino" title="Hino Oficial de: <?=$prefeitura->prenome?> "><i class="fa fa-music fl-fg"></i> Hino Oficial
                                </a></li>
                        <li>
                            <a href="http://www.cidades.ibge.gov.br/xtras/perfil.php?lang=&codmun=<?=$prefeitura->preibge?>&search=piaui|<?=$prefeitura->precidade?>"
                               target="_blank" title="IBGE-Dados Estatísticos de: <?=$prefeitura->prenome?>"><i
                                        class="fa fa-line-chart fl-fg"></i> Perfil IBGE</a></li>
                        <li><a href="https://www.melhoresrotas.com/s/distancia-entre-cidades" target="_blank"
                               title="Distâncias de <?=$prefeitura->prenome?>  a ..."><i class="fa fa-map-o  fl-fg"></i> Mapa-Localização</a></li>
                        <li><a href="?p=esportes" title="Campos de Futebol e Ginásios de ESPORTE de: <?=$prefeitura->prenome?> "><i
                                        class="fa fa-futbol-o fl-fg"></i> Praças de Esportes</a></li>
                        <li><a href="?p=povoado" title="Localidade e Povoados  de: <?=$prefeitura->prenome?> "><i class="fa fa-home fl-fg"></i>
                                Localidades e Povoados</a></li>
                    </ul>
                </li>
                <li class="{gestao_current}">
                    <a href="index.php"><i class="fa fa-line-chart  "></i> Gestão</a>
                    <ul>
                        <li><a href="?p=prefeito" title="Prefeito(a) de: <?=$prefeitura->prenome?>"><i class="icon-user"></i>
                                Prefeito</a></li>
                        <li><a href="?p=prefeito_vice" title="Vice-Prefeito(a) de: <?=$prefeitura->prenome?>"><i
                                        class="fa fa-user-circle-o  fl-fg"></i> Vice</a></li>
                        <li><a href="?p=secretaria_geral"  title="Câmara Municipal de <?=$prefeitura->prenome?>"><i class="icon-home"></i> Secretários e Gestores</a></li>
                        <li><a href="https://www.municipiaui.com/index.php?p=cidade&codigoUnidGestora=<?='1'.substr(UNIDADE_GESTORA,1)?>"
                               title="Câmara Municipal de <?=$prefeitura->prenome?>" target="_blank"><i
                                        class="fa fa-users fl-fg"></i> Câmara Municipal</a></li>

                    </ul>
                </li>

                <li class="{secretaria_current}">
                    <a href="?p=secretaria_geral"><i class="fa fa-university "></i> Secretaria</a>
                    <ul>
                         <?php
                    $secretarias = new Secretaria(Secretaria::MUNICIPIO);
                    foreach ($secretarias->getResult() as $secretaria) {
                        ?>
                        <li>
                            <a title="<?=$secretaria['secnome']?> de <?=$prefeitura->prenome?>" href="?p=secretaria_gestor&prenumero=<?= $secretaria['prenumero'] ?>">
                                <span ><i class="fa fa-university "></i>&nbsp;&nbsp;<?=$secretaria['secnome']?></span>
                             </a>

                            <ul>
                                <li><a href="?p=secretaria_gestor&prenumero=<?= $secretaria['prenumero'] ?>">Unidade A</a></li>
                                
                            </ul>
                        </li>
                      
                          <?php } ?>
                    </ul>
                </li>
                <li class="{{negocio_current}">
                    <a href="?p=agronegocio_exposicao_listagem"> <i class="fa fa-industry "></i> </i> AgroNegócio</a>
                    <ul>
                        <li><a href="?p=agronegocio_exposicao_geral" title="Feiras e Exposição em: <?=$prefeitura->prenome?>"><i
                                        class="fa fa-feed fl-fg"></i> Exposição e Feiras</a></li>
                        <li><a href="?p=agronegocio_produto_listagem" title=" Monocultura em: <?=$prefeitura->prenome?>"><i
                                        class="fa fa-apple fl-fg"></i> Produtos Agrícolas</a>
                            <ul>
                                <li><a href="?p=agronegocio_produto_listagem"><i class="fa fa-bullseye fl-fg"></i> Soja</a>
                                </li>
                                <li><a href="?p=agronegocio_produto_listagem"><i class="fa fa-bullseye fl-fg"></i> Algodão</a>
                                </li>
                                <li><a href="?p=agronegocio_produto_listagem"><i class="fa fa-bullseye fl-fg"></i> Milho</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="?p=agronegocio_produto_listagem" title="Agricultura: <?=$prefeitura->prenome?>"><i
                                        class="fa fa-hand-o-right  fl-fg"></i> Apicultura</a>
                            <ul>
                                <li><a href="?p=agronegocio_produto_listagem"><i class="fa fa-bullseye fl-fg"></i> Mel</a></li>
                            </ul>
                        </li>
                        <li><a href="?p=agronegocio_produto_listagem" title="Agricultura: <?=$prefeitura->prenome?>"><i
                                        class="fa fa-hand-o-right  fl-fg"></i> Bovinocultura</a>
                            <ul>
                                <li><a href="?p=agronegocio_produto_listagem"><i class="fa fa-bullseye fl-fg"></i> Gado
                                        Corte</a></li>
                                <li><a href="?p=agronegocio_produto_listagem"><i class="fa fa-bullseye fl-fg"></i> Gado
                                        Leite</a></li>
                            </ul>
                        </li>
                        <li><a href="?p=agronegocio_produto_listagem" title="Agricultura: <?=$prefeitura->prenome?>"><i
                                        class="fa fa-fish fl-fg"></i> Pisicultura</a>
                            <ul>
                                <li><a href="?p=agronegocio_produto_listagem"><i class="fa fa-bullseye fl-fg"></i> Tilápia</a>
                                </li>
                                <li><a href="?p=agronegocio_produto_listagem"><i class="fa fa-bullseye fl-fg"></i> Tambaqui</a>
                                </li>
                                <li><a href="?p=agronegocio_produto_listagem"><i class="fa fa-bullseye fl-fg"></i> Outros</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="?p=agronegocio_produto_listagem" title="Agricultura: <?=$prefeitura->prenome?>"><i
                                        class="fa fa-hand-o-right  fl-fg"></i> Caprinocultura</a>
                            <ul>
                                <li><a href="?p=agronegocio_produto_listagem"><i class="fa fa-bullseye fl-fg"></i> Cabra</a>
                                </li>
                                <li><a href="?p=agronegocio_produto_listagem"><i class="fa fa-bullseye fl-fg"></i> Ovelha</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="?p=agronegocio_produto_listagem" title="Agricultura Familiar: <?=$prefeitura->prenome?>"><i
                                        class="fa fa-hand-o-right  fl-fg"></i> Horto-Fruto-Granjeiro</a>
                            <ul>
                                <li><a href="?p=agronegocio_produto_listagem"><i class="fa fa-bullseye fl-fg"></i> Arroz</a>
                                </li>
                                <li><a href="?p=agronegocio_produto_listagem"><i class="fa fa-bullseye fl-fg"></i> Frango</a>
                                </li>
                                <li><a href="?p=agronegocio_produto_listagem"><i class="fa fa-bullseye fl-fg"></i> Galinha</a>
                                </li>
                                <li><a href="?p=agronegocio_produto_listagem"><i class="fa fa-bullseye fl-fg"></i> Ovos</a>
                                </li>
                                <li><a href="?p=agronegocio_produto_listagem"><i class="fa fa-bullseye fl-fg"></i> Feijão</a>
                                </li>
                                <li><a href="?p=agronegocio_produto_listagem"><i class="fa fa-bullseye fl-fg"></i> Milho</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="{turismo_current}">
                    <a href="index.php"><i class="fa fa-bus "></i> Turísmo</a>
                    <ul>
                        <li><a href="?p=alimentacao" title="Restaurantes e Casas de Alimentação em: <?=$prefeitura->prenome?>"><i
                                        class="fa fa-cutlery fl-fg"></i> Alimentação</a></li>
                        <li><a href="?p=banco" title="Bancos, Loterias e CASH em: <?=$prefeitura->prenome?>"><i
                                        class="fa fa-money fl-fg"></i> Bancos</a></li>
                        <li><a href="?p=combustivel" title="Postos de Combustíveis em: <?=$prefeitura->prenome?>"><i
                                        class="fa fa-taxi fl-fg"></i> Combustível</a></li>
                        <li><a href="?p=igreja" title="Santuários e Igrejas de: <?=$prefeitura->prenome?>"><i
                                        class="fa fa-bell-o fl-fg"></i> Igrejas</a></li>
                        <li><a href="?p=hotel" title="Hotéis, Pensões e Pousadas em: <?=$prefeitura->prenome?>"><i
                                        class="fa fa-bed fl-fg"></i> Hotelaria</a></li>
                        <li><a href="?p=transporte" title="Transportes Diversos para: <?=$prefeitura->prenome?>"><i
                                        class="fa fa-bus fl-fg"></i> Transportes</a></li>
                        <li><a href="?p=turismo" title="Pontos Turísiticos  Diversos para: <?=$prefeitura->prenome?>"><i
                                        class="fa fa-camera fl-fg"></i> Turísmo e Eventos</a></li>
                       

                    </ul>
                </li>
                <li class="{comunicacao_current}">
                    <a href="index.php"><i class="icon-feed2  "></i> Notícia</a>
                    <ul>
                        <li><a href="?p=galeria" title="Fotos de: <?=$prefeitura->prenome?>"><i
                                        class="fa fa-picture-o fl-fg"></i> Galeria de Fotos</a></li>
                        <li><a href="?p=noticia_geral" title="Noticias Gerais de: <?=$prefeitura->prenome?>"><i
                                        class="fa fa-newspaper-o fl-fg"></i> Notícias Geral</a></li>
                        <li><a href="?p=noticia_bloco" title="Noticias em Bloco de: <?=$prefeitura->prenome?>"><i
                                        class="fa fa-newspaper-o fl-fg"></i> Notícias Diversas</a></li>
                        <li><a href="?p=video_bloco" title="Vídeos Diversos de: <?=$prefeitura->prenome?>"><i
                                        class="fa fa-video-camera fl-fg"></i> Vídeos Diversos </a></li>
                        <li><a href="?p=multimidia"><i class="icon-rss"></i> Multimídia</a></li>
                    </ul>
                </li>

                <li class="{comunicacao_current}">
                    <a href="index.php"> <i class="fa fa-wrench  "></i> Serviço</a>
                    <ul>
                        <li>
                            <a href="?p=contra-cheque" title="Prefeito(a) de: <?=$prefeitura->prenome?>">
                                <i class="fa fa-money fa-fw  fa-lg"></i> Contra-Cheque
                            </a>
                        </li>
                        <li>
                            <a href="?p=diario_oficial" title="Prefeito(a) de: <?=$prefeitura->prenome?>">
                                <i class="fa fa-book fa-fw  fa-lg"></i> Diário Oficial
                            </a>
                        </li>
                        <li>
                            <a href="?p=erro_404" title="Prefeito(a) de: <?=$prefeitura->prenome?>">
                              <i class="fa fa-user fa-fw  fa-lg red "></i> Erro 404
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="{covid_current}">
                    <!--a href="index.php"> <i class="fa fa-medkit"  style="font-size:16px; color:red"></i> COVID</a-->
                    <a href="index.php">
                        <button style="font-size:14px;">
                            &nbsp;<i class="fa fa-medkit" style="font-size:16px; color:red"></i>
                            <strong>COVID</strong> &nbsp;
                        </button>
                    </a>
                </li>
                <li class="{contato_current}">
                    <a href="?p=contato">
                        <button style="font-size:14px;">
                            &nbsp<i class="icon-phone" style="font-size:16px; color:blue"></i>
                            <strong>CONTATO</strong> &nbsp;
                        </button>
                    </a>
                </li>

            </ul>

        </nav>
    </div>
</header>
