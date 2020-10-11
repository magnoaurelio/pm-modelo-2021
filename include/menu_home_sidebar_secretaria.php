  <?php
 // $secretaria = new Secretaria(UNIDADE_GESTORA);
    ?>
<div class="widget widget-last-post" >
    <a href="?p=secretaria_geral">
       <h3 class="widget-title">Secretarias e Gestores</h3>
    </a>
   <ul class="list-news list-unstyled">
        <?php
         $secretarias = new Secretaria(Secretaria::MUNICIPIO . " and sectipo = 'S' "); // 
         foreach ($secretarias->getResult() as $secretaria) {
        ?>

        <li>
            <div class="item clearfix">
                <h5>
                    <a href="?p=secretaria_gestor&prenumero=<?= $secretaria['prenumero'] ?>">
                        <span ><strong><?=$secretaria['secnome']?></strong></span>
                    </a>
                </h5> 
                <h5 class="kp-metadata">&nbsp;<i class="icon-user"></i> <span style="font-size: 14px;"> <strong> <?= $secretaria['secusual'] ?></strong></span></h5>

                <a href="?p=secretaria_gestor&prenumero=<?= $secretaria['prenumero'] ?>" class="pull-left">
                    <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/secretaria/'. $secretaria['secfotor'] ?>" width="90" height="90" alt="">
                </a>
                <h6>
                <div class="item-right">
                    
                    <p class="kp-metadata">&nbsp;<i class="icon-phone"></i> <span> <?= $secretaria['secfone'] ?> </span></p>
                    <p class="kp-metadata">&nbsp;<i class="icon-phone"></i> <span> <?= $secretaria['seccelular'] ?></span></p>
                    <p class="kp-metadata">&nbsp;<i class="icon-email"></i> <span> <?= $secretaria['secemail'] ?></span></p>
                    <p class="kp-metadata">&nbsp;<i class="icon-home"></i> <span> <?= strtolower($secretaria['secendereco']) ?></span></p>
                    <p class="kp-metadata">&nbsp;<i class="icon-home"></i> <span> <?= $secretaria['secbairro'] ?></span></p>
                   
                </div>
                    </h6>
            </div>
        </li>
    <?php } ?>

   </ul>
</div>
    <!-- widget-last-post -->
