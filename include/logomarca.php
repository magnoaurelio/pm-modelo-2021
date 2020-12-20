
<div id="headline" class="container" style="padding-top: 0px;">
     <?php
                $read = new Read;
                $read->ExeRead("prefeitura", "WHERE precodigo = :precodigo" ,  "precodigo=". PRECODIGO); //
				$prefeitura = $read->getResult()[0];
				//$prebrasao = $prefeitura_inicio['prebrasao'];
				//var_dump($read);
				
       // $cidade = new Cidade;
      //  $prefeitura = new Prefeitura($cidade->precodigo);
       
      ?>
      
    <div class="row-fluid">

        <div class="span6">
            <a href="index.php"> <a href="index.php"><img src="portal/files/prefeituras/<?= $prefeitura['precodigo'] ?>/<?= $prefeitura['prebrasao'] ?>" width="60" height="70"> <img src="images/logo_scmilagres.jpg"/></a>
        </div>
        <div class="span6">
            <img src="images/banner.jpg"/>
           
        </div>


    </div>
</div>
