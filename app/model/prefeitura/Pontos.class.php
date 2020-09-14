<?php

//<fileHeader>
//</fileHeader>

class Pontos extends TRecord
{
    const TABLENAME  = 'pontos';
    const PRIMARYKEY = 'poncodigo';
    const IDPOLICY   =  'serial'; // {max, serial}
    
    
    
    //<classProperties>
  
    //</classProperties>
    /** AdiantiFileSaveTrait.php 
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('unidadeGestora');
        parent::addAttribute('ponnome');
        parent::addAttribute('pontipo');
        parent::addAttribute('ponendereco');
        parent::addAttribute('ponbairro');
        parent::addAttribute('ponhorario');
        parent::addAttribute('pondata');
        parent::addAttribute('ponfoto1');
        parent::addAttribute('ponfoto2');
        parent::addAttribute('ponfoto3');
        parent::addAttribute('ponsobre');
        //<onAfterConstruct>
  
        //</onAfterConstruct>
    }
 function getFoto1(){
        return $this->getFoto('ponfoto1');
    }

    function getFoto2(){
        return $this->getFoto('ponfoto2');
    }

    function getFoto3(){
        return $this->getFoto('ponfoto3');
    }
    //</userCustomFunctions>
    function getArquivo()
    {
        $file = $this->getDiretorio() . $this->ponfoto1;
        if (is_file($file)) {
            return $file;
        }
        return 'files/imagem/galeria.png';
        
        $file = $this->getDiretorio() . $this->ponfoto2;
        if (is_file($file)) {
            return $file;
        }
        return 'files/imagem/galeria.png';
        
        $file = $this->getDiretorio() . $this->ponfoto3;
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
        $path = 'files/prefeituras/' . $this->unidadeGestora . '/ponto/';
        if (!file_exists($path)) {
            mkdir($path, 755, true);
        }
        return $path;
    }
    
    
    
    //<userCustomFunctions>
  
    //</userCustomFunctions>
}
