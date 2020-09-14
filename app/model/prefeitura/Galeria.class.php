<?php

//<fileHeader>
  
//</fileHeader>

class Galeria extends TRecord
{
    const TABLENAME  = 'galeria';
    const PRIMARYKEY = 'galcodigo';
    const IDPOLICY   =  'serial'; // {max, serial}
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('galnome');
        parent::addAttribute('galarquivo');
        parent::addAttribute('galdata');
        parent::addAttribute('galsobre');
        parent::addAttribute('unidadeGestora');
        //<onAfterConstruct>
  
        //</onAfterConstruct>
    }

    function getArquivo()
    {
        $file = $this->getDiretorio() . $this->galarquivo;
        if (is_file($file)) {
            return $file;
        }
        return 'files/imagem/galeria.png';
    }
    
    
     public function getDiretorio()
    {
        $path = 'files/prefeituras/' . $this->unidadeGestora . '/galeria/';
        if (!file_exists($path)) {
            mkdir($path, 755, true);
        }
        return $path;
    }
    
    //<userCustomFunctions>
  
    //</userCustomFunctions>
}


