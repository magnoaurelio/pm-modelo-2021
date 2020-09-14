<?php

//<fileHeader>
  
//</fileHeader>

class Povoado extends TRecord
{
    const TABLENAME  = 'povoado';
    const PRIMARYKEY = 'povcodigo';
    const IDPOLICY   =  'serial'; // {max, serial}
    
    
    
    //<classProperties>
  
    //</classProperties>
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('unidadeGestora');
        parent::addAttribute('povnome');
        parent::addAttribute('povdata');
        parent::addAttribute('povzona');
        parent::addAttribute('povdistancia');
        parent::addAttribute('povorientacao');
        parent::addAttribute('povfoto1');
        parent::addAttribute('povfoto2');
        parent::addAttribute('povfoto3');
        parent::addAttribute('povfone');
        parent::addAttribute('povcontato');
        parent::addAttribute('povsobre');
        //<onAfterConstruct>
  
        //</onAfterConstruct>
    }

     function getFoto1(){
        return $this->getFoto('povfoto1');
    }

    function getFoto2(){
        return $this->getFoto('povfoto2');
    }

    function getFoto3(){
        return $this->getFoto('povfoto3');
    }
    //</userCustomFunctions>
    function getArquivo()
    {
        $file = $this->getDiretorio() . $this->povfoto1;
        if (is_file($file)) {
            return $file;
        }
        return 'files/imagem/galeria.png';
        
        $file = $this->getDiretorio() . $this->povfoto2;
        if (is_file($file)) {
            return $file;
        }
        return 'files/imagem/galeria.png';
        
        $file = $this->getDiretorio() . $this->povfoto3;
        if (is_file($file)) {
            return $file;
        }
        return 'files/imagem/galeria.png';
    }
    
   private function getFoto($campo)
    {
        $file = $this->getDiretorio() . $this->$campo;
        if (is_file($file)) {
            return $file;
        }
        return 'files/prefeituras/galeria.png';
    }

        
     public function getDiretorio()
    {
        $path = 'files/prefeituras/' . $this->unidadeGestora . '/povoado/';
        if (!file_exists($path)) {
            mkdir($path, 755, true);
        }
        return $path;
    }
    
    //<userCustomFunctions>
  
    //</userCustomFunctions>
}

