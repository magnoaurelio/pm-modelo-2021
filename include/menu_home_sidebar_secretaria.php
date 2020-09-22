<div class="col-sm-right col-2">

<div id="sidebar" class="pull-left">
        <div class="widget widget-last-post" style="width: 350px; margin-left: -60px;">
                <h3 class="widget-title">Secretarias e Gestores</h3>
                <ul class="list-news list-unstyled">
                    <?php
                    $secretarias = new Secretaria(Secretaria::MUNICIPIO);
                    foreach ($secretarias->getResult() as $secretaria) {
                        ?>
                     
                        <li>
                            <div class="item clearfix">
                                <h5><a href="?p=secretaria_geral"><span ><strong><?=$secretaria['secnome']?></strong></span></a></h5> 
                                <h6 class="kp-metadata">&nbsp;<i class="icon-user"></i> <span style="font-size: 14px;"> <strong> <?= $secretaria['secusual'] ?></strong></span></h6>

                                <a href="?p=secretaria_gestor" class="pull-left">
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
            <!-- widget-last-post -->
           
           
        </div>
</div>