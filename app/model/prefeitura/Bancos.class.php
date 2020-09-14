<?php

//<fileHeader>
  
//</fileHeader>

class Bancos extends TRecord
{
    const TABLENAME  = 'bancos';
    const PRIMARYKEY = 'bancodigo';
    const IDPOLICY   =  'serial'; // {max, serial}
    
    
    private $bancos_tipo;
    
    //<classProperties>
  
    //</classProperties>
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('bancos_tipo_id');
        parent::addAttribute('unidadeGestora');
        parent::addAttribute('bannome');
        parent::addAttribute('bandata');
        parent::addAttribute('banfoto1');
        parent::addAttribute('banfoto2');
        parent::addAttribute('banfoto3');
        parent::addAttribute('bansite');
        parent::addAttribute('banendereco');
        parent::addAttribute('banbairro');
        parent::addAttribute('bannumero');
        parent::addAttribute('bancep');
        parent::addAttribute('banfone');
        parent::addAttribute('bancelular');
        parent::addAttribute('banbanco');
        parent::addAttribute('bancontato');
        parent::addAttribute('bansobre');
        //<onAfterConstruct>
  
        //</onAfterConstruct>
    }

    /**
     * Method set_bancos_tipo
     * Sample of usage: $var->bancos_tipo = $object;
     * @param $object Instance of BancosTipo
     */
    public function set_bancos_tipo(BancosTipo $object)
    {
        $this->bancos_tipo = $object;
        $this->bancos_tipo_id = $object->bantipocodigo;
    }
    
    /**
     * Method get_bancos_tipo
     * Sample of usage: $var->bancos_tipo->attribute;
     * @returns BancosTipo instance
     */
    public function get_bancos_tipo()
    {
        
        // loads the associated object
        if (empty($this->bancos_tipo)) {
            $this->bancos_tipo = new BancosTipo($this->bancos_tipo_id);
        }

        // returns the associated object
        return $this->bancos_tipo;
    }
     function getArquivo()
    {
        $file = $this->getDiretorio() . $this->banfoto1;
        if (is_file($file)) {
            return $file;
        }
        return 'files/imagem/galeria.png';
        
        $file = $this->getDiretorio() . $this->banfoto2;
        if (is_file($file)) {
            return $file;
        }
        return 'files/imagem/galeria.png';
        
        $file = $this->getDiretorio() . $this->banfoto3;
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
        return 'files/imagem/galeria.png';
    }
    function getBancoFoto1(){
        return $this->getFoto('banfoto1');
    }

    function getFoto2(){
        return $this->getFoto('banfoto2');
    }

    function getFoto3(){
        return $this->getFoto('banfoto3');
    }
    //<userCustomFunctions>
     public function getDiretorio()
    {
        $path = 'files/prefeituras/' . $this->unidadeGestora . '/banco/';
        if (!file_exists($path)) {
            mkdir($path, 755, true);
        }
        return $path;
    }
    //</userCustomFunctions>
}

