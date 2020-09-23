<?php

$hoje = date('Y-m-d');
$hojePartes = new DataCalendario($hoje);
$data = $hojePartes->getDiaSemana($hoje) . ", " . $hojePartes->getDia() . " de " . $hojePartes->getMes() . " de " . $hojePartes->getAno();

$prefeito = new Prefeito(UNIDADE_GESTORA);
?>
<div class="col-sm-right col-2">

<div id="sidebar" class="pull-left">
         <div class="widget widget-random-post">
             <div class="widget widget-photos" style="text-align: left;">
               <h3 class="widget-title" style="text-align: left;">Administração </h3>
                <div class="col-sm-right col-8">
               <?php
                $prefeitoAdmin = new Prefeito(Prefeito::MUNICIPIO . " ");
                foreach ($prefeitoAdmin->getResult() as $prefeito) {
                
                if ($prefeito['prepartidop'] == 11):
                     $partido = 'pp';
                elseif ($prefeito['prepartidop'] == 15):
                     $partido = 'pmdb';
                endif;
                ?>
               <ul class="list-unstyled clearfix" >
                 <li class="col-sm col-sm-left">
                      <a href="?p=prefeito_gestor&precodigo=<?= $prefeito['precodigo'] ?>" class="pull-left">
                          <img src="<?= FILES . 'prefeituras/'.UNIDADE_GESTORA.'/'. $prefeito['prefotop'] ?>" width="120" height="120" alt="prefeito">
                       </a>
                       <a href="?p=secretaria_geral" class="pull-left">
                          <img src="<?= FILES . 'partido/'. $partido .'/'. $prefeito['preparfoto'] ?>"  width="120" height="30" alt="partido">              
                         <p style="font-size: 12px;">Partido: <?= $prefeito['prepartidop'] ?></p>
                       </a>
                 </li>
               </ul>
             </div>
            <?php } ?>
            <div class="clearfix"></div>
            <?php
           include_once 'include/menu_home_sidebar_secretaria.php';
           ?>
         </div>
         </div>
           
         <!-- widget-random -->
         
        
         <!-- widget-ads -->
         
         <!-- widget-tabs -->

        
       
          <!-- list-posts -->
         <!-- widget-video -->

     </div>
</div>