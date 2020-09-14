<?php

//<fileHeader>
  
//</fileHeader>

class Transportes extends TRecord
{
    const TABLENAME  = 'transportes';
    const PRIMARYKEY = 'trancodigo';
    const IDPOLICY   =  'serial'; // {max, serial}
    
    
    
    //<classProperties>
  
    //</classProperties>
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('trannome');
        parent::addAttribute('tranhorario');
        parent::addAttribute('tranfoto1');
        parent::addAttribute('tranfoto2');
        parent::addAttribute('tranfoto3');
        parent::addAttribute('trandata');
        parent::addAttribute('tranendereco');
        parent::addAttribute('tranbairro');
        parent::addAttribute('trancep');
        parent::addAttribute('trancontato');
        parent::addAttribute('tranfone');
        parent::addAttribute('transobre');
        parent::addAttribute('unidadeGestora');
        //<onAfterConstruct>
  
        //</onAfterConstruct>
    }

    function getFoto1(){
        return $this->getFoto('tranfoto1');
    }

    function getFoto2(){
        return $this->getFoto('tranfoto2');
    }

    function getFoto3(){
        return $this->getFoto('tranfoto3');
    }
    //</userCustomFunctions>
    function getArquivo()
    {
        $file = $this->getDiretorio() . $this->tranfoto1;
        if (is_file($file)) {
            return $file;
        }
        return 'files/imagem/galeria.png';
        
        $file = $this->getDiretorio() . $this->tranfoto2;
        if (is_file($file)) return $file;
        return 'files/imagem/galeria.png';
        
        $file = $this->getDiretorio() . $this->tranfoto3;
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
        $path = 'files/prefeituras/' . $this->unidadeGestora . '/transporte/';
        if (!file_exists($path)) {
            mkdir($path, 755, true);
        }
        return $path;
    }
    
    //<userCustomFunctions>
  
    //</userCustomFunctions>
}

