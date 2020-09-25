 <!-- inicio main-top -->
 <div class="main-top">
    <div class="owl-carousel owl-carousel-text"  style="background-color: #eee;">    
        <?php
            $n = 1;
            $noticiasHome = new Noticia(Noticia::MUNICIPIO . " ");
            foreach ($noticiasHome->getResult() as $noticia) {
        ?>                
        <div class="item clearfix">
            <span class="pull-left"><?=$n?></span> 
            <a href="?p=noticia_detalhe&notcodigo=<?= $noticia['notcodigo'] ?>" title="Veja Mais..." class="item-right">
                <p><?= substr(strip_tags($noticia['nottexto']), 0, 80) ?>...</p>
            </a>
        </div>

        <?php 
        $n++;
            } 
        ?>

    </div>
    <!-- owl-carousel-text -->
</div>
<!-- fim main-top -->