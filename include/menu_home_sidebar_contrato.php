
<div id="sidebar" class="pull-right">
<a href="?p=secretaria_geral">
       <h3 class="widget-title">Assessoria Contratada</h3>
    </a>
   <ul class="list-news list-unstyled">
        <?php
         $secretarias = new Secretaria(Secretaria::MUNICIPIO . " and sectipo = 'C' order by rand() limit 1 "); // 
         foreach ($secretarias->getResult() as $secretaria) {
        ?>

        <li>
            <div class="item clearfix">
                <h5>
                    <a  title="Mais Assessores Contratados..." href="?p=secretaria_gestor&prenumero=<?= $secretaria['prenumero'] ?>">
                        <span ><strong><?=$secretaria['secnome']?></strong></span>
                       
                    </a>
                </h5> 
               
                <h6 class="kp-metadata">&nbsp;<i class="icon-user"></i> <span style="font-size: 14px;"> <strong> <?= $secretaria['secusual'] ?></strong></span></h6>
                  <br>
                <a title="Mais Assessores Contratados..." href="?p=secretaria_gestor&prenumero=<?= $secretaria['prenumero'] ?>" class="pull-left">
                    <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/secretaria/'. $secretaria['secfotor'] ?>" width="120" height="120" alt="">
                    <!--span>
                      <i class="icon-images"></i>
                    </span-->
                </a>
                  <h6>
                      
                <div class="item-right">
                    <p class="kp-metadata">&nbsp;<i class="icon-phone"></i> <span> <?= $secretaria['secfone'] ?> </span></p>
                    <p class="kp-metadata">&nbsp;<i class="icon-phone"></i> <span> <?= $secretaria['seccelular'] ?></span></p>
                    <p class="kp-metadata">&nbsp;<i class="icon-email"></i> <span> <?= $secretaria['secemail'] ?></span></p>
                    <p class="kp-metadata">&nbsp;<i class="icon-home"></i> <span> <?= strtolower($secretaria['secendereco']) ?></span></p>
                    <p class="kp-metadata">&nbsp;<i class="icon-home"></i> <span> <?= $secretaria['secbairro'] ?></span></p>
                    <p class="kp-metadata">&nbsp;<i class="fa fa-globe"></i>&nbsp;
                        <span>
                            <a href="<?= $secretaria['secsite'] ?>" target="_blank" title="Acesse Site... "><?= $secretaria['secsite'] ?></a>
                        </span>
                    </p>
                </div>
                   </h6>
            </div>
        </li>
    <?php } ?>

   </ul>
</div>
    <!-- widget-last-post -->
