<?php

$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();

$prefeitura = new Prefeitura(UNIDADE_GESTORA);
?>
<div class="widget widget-random-post" style="margin-left: -20px;">
    <div class="widget widget-photos" >
      <h3 class="widget-title">Administração </h3>
       <div class="col-sm-right col-6">
      <ul class="list-unstyled clearfix" >
        <li class="col-sm col-sm-right">
          <ul class="list-unstyled">
            <li>
              <a href="?p=prefeito" class="caption">
                   <br>
                  <img src="files/prefeituras/201002/prefeito002.jpg" width="180" height="180" class="img-responsive"  alt="">

                <p style="font-size: 12px;">Prefeito:<br> Walter Alencar</p>
                <span class="icon-plus"></span>
              </a>
              <a href="#" class="caption">
                <br>
                <img src="files/partido/pp/logo_num_pp.jpg" class="img-responsive"  alt="">
                <p style="font-size: 12px;">Partido:<br> PP 11</p>
                <span class="icon-plus"></span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
      <div class="col-sm-right col-6">
       <ul class="list-unstyled clearfix" style="text-align: left;">
        <li class="col-sm col-sm-right">
          <ul class="list-unstyled">
            <li>
              <a href="?p=prefeito_vice" class="caption">
                <br>
                <img src="files/prefeituras/201002/viceprefeito002.jpg" width="200" height="200" class="img-responsive"  alt="">
                <p style="font-size: 12px;">Vice:<br> Dr. Raimundo</p>
                <span class="icon-plus"></span>
              </a>
                <a href="#" class="caption">
                <br>
                <img src="files/partido/pmdb/logo_num_mdb_15.jpg" class="img-responsive" alt="">
                <p style="font-size: 12px;">Partido:<br> MDB 15</p>
                <span class="icon-plus"></span>
              </a>
            </li>
          </ul>
        </li>
       </ul>

      <!--a href="gallery.html" class="to-gallery">galeria</a-->
    </div>

     <div class="clearfix"></div>
    <div class="col-sm-right col-12">

    <a href="?p=secretaria_geral" > 
        <h3 class="widget-title" style="text-align: left;">Secretarias e Gestores</h3>
    </a>

    <div class="widget widget-last-post" style="width: 350px; margin-left: 0px;">
                 
                <ul class="list-news list-unstyled">
                    <?php
                    $secretarias = new Secretaria(Secretaria::MUNICIPIO);
                    foreach ($secretarias->getResult() as $secretaria) {
                        ?>
                     
                        <li>
                            <div class="item clearfix">
                                <h5>
                                    <a href="?p=secretaria_gestor&prenumero=<?= $secretaria['prenumero'] ?>">
                                        <span ><strong><?=$secretaria['secnome']?></strong></span>
                                    </a>
                                </h5> 
                                <h6 class="kp-metadata">&nbsp;<i class="icon-user"></i> <span style="font-size: 14px;"> <strong> <?= $secretaria['secusual'] ?></strong></span></h6>

                                <a href="?p=secretaria_gestor&prenumero=<?= $secretaria['prenumero'] ?>" class="pull-left">
                                    <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/secretaria/'. $secretaria['secfotor'] ?>" width="90" height="90" alt="">
                                    <!--span>
                                      <i class="icon-images"></i>
                                    </span-->
                                </a>
                                <div class="item-right">
                                    <p class="kp-metadata">&nbsp;<i class="icon-phone"></i> <span> <?= $secretaria['secfone'] ?> </span></p>
                                    <p class="kp-metadata">&nbsp;<i class="icon-phone"></i> <span> <?= $secretaria['seccelular'] ?></span></p>
                                    <p class="kp-metadata">&nbsp;<i class="icon-email"></i> <span> <?= $secretaria['secemail'] ?></span></p>
                                    <p class="kp-metadata">&nbsp;<i class="icon-home"></i> <span> <?= strtolower($secretaria['secendereco']) ?></span></p>
                                    <p class="kp-metadata">&nbsp;<i class="icon-home"></i> <span> <?= $secretaria['secbairro'] ?></span></p>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                   
                </ul>
        </div>
   </div>
</div>
</div>
