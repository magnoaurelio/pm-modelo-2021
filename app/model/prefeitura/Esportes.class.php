<?php

//<fileHeader>
  
//</fileHeader>

class Esportes extends TRecord
{
    const TABLENAME  = 'esportes';
    const PRIMARYKEY = 'espcodigo';
    const IDPOLICY   =  'serial'; // {max, serial}
    
    
    private $esporte_tipo;
    
    //<classProperties>
  
    //</classProperties>
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('esporte_tipo_id');
        parent::addAttribute('espnome');
        parent::addAttribute('espusual');
        parent::addAttribute('espendereco');
        parent::addAttribute('espbairro');
        parent::addAttribute('espcep');
        parent::addAttribute('espfoto1');
        parent::addAttribute('espfoto2');
        parent::addAttribute('espfoto3');
        parent::addAttribute('espdata');
        parent::addAttribute('espsobre');
        parent::addAttribute('unidadeGestora');
        //<onAfterConstruct>
  
        //</onAfterConstruct>
    }

    
    /**
     * Method set_esporte_tipo
     * Sample of usage: $var->esporte_tipo = $object;
     * @param $object Instance of EsporteTipo
     */
    public function set_esporte_tipo(EsporteTipo $object)
    {
        $this->esporte_tipo = $object;
        $this->esporte_tipo_id = $object->esptipocodigo;
    }
    
    /**
     * Method get_esporte_tipo
     * Sample of usage: $var->esporte_tipo->attribute;
     * @returns EsporteTipo instance
     */
    public function get_esporte_tipo()
    {
        
        // loads the associated object
        if (empty($this->esporte_tipo)) {
            $this->esporte_tipo = new EsporteTipo($this->esporte_tipo_id);
        }

        // returns the associated object
        return $this->esporte_tipo;
    }
    
    
    //<userCustomFunctions>
  function getArquivo()
    {
        $file = $this->getDiretorio() . $this->espfoto1;
        if (is_file($file)) {
            return $file;
        }
        return 'files/imagem/galeria.png';
        
        $file = $this->getDiretorio() . $this->espfoto2;
        if (is_file($file)) {
            return $file;
        }
        return 'files/imagem/galeria.png';
        
        $file = $this->getDiretorio() . $this->espfoto3;
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

    function getFoto1(){
        return $this->getFoto('espfoto1');
    }
    function getFoto2(){
        return $this->getFoto('espfoto2');
    }
    function getFoto3(){
        return $this->getFoto('espfoto3');
    }

        
     public function getDiretorio()
    {
        $path = 'files/prefeituras/' . $this->unidadeGestora . '/esporte/';
        if (!file_exists($path)) {
            mkdir($path, 755, true);
        }
        return $path;
    }
    //</userCustomFunctions>
}





