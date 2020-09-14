<?php

//<fileHeader>
  
//</fileHeader>

class Combustivel extends TRecord
{
    const TABLENAME  = 'combustivel';
    const PRIMARYKEY = 'comcodigo';
    const IDPOLICY   =  'serial'; // {max, serial}
    //<classProperties>
    //</classProperties>
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('comnome');
        parent::addAttribute('comhorario');
        parent::addAttribute('comendereco');
        parent::addAttribute('combairro');
        parent::addAttribute('comcep');
        parent::addAttribute('comdata');
        parent::addAttribute('comfoto1');
        parent::addAttribute('comfoto2');
        parent::addAttribute('comfoto3');
        parent::addAttribute('comcontato');
        parent::addAttribute('comfone');
        parent::addAttribute('unidadeGestora');
        parent::addAttribute('comsobre');
        //<onAfterConstruct>
  
        //</onAfterConstruct>
    }
    //<userCustomFunctions>
   function getFoto1(){
        return $this->getFoto('comfoto1');
    }

    function getFoto2(){
        return $this->getFoto('comfoto2');
    }

    function getFoto3(){
        return $this->getFoto('comfoto3');
    }
    //</userCustomFunctions>
    function getArquivo()
    {
        $file = $this->getDiretorio() . $this->comfoto1;
        if (is_file($file)) {
            return $file;
        }
        return 'files/imagem/galeria.png';
        
        $file = $this->getDiretorio() . $this->comfoto2;
        if (is_file($file)) {
            return $file;
        }
        return 'files/imagem/galeria.png';
        
        $file = $this->getDiretorio() . $this->comfoto3;
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
        $path = 'files/prefeituras/' . $this->unidadeGestora . '/combustivel/';
        if (!file_exists($path)) {
            mkdir($path, 755, true);
        }
        return $path;
    }
}

