<?php

//<fileHeader>
  
//</fileHeader>

class Alimentos extends TRecord
{
    const TABLENAME  = 'alimentos';
    const PRIMARYKEY = 'alicodigo';
    const IDPOLICY   =  'serial'; // {max, serial}
    
    
    private $alimentos_tipo;
    
    //<classProperties>
  
    //</classProperties>
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('alimentos_tipo_id');
        parent::addAttribute('unidadeGestora');
        parent::addAttribute('alinome');
        parent::addAttribute('aliendereco');
        parent::addAttribute('alibairro');
        parent::addAttribute('alihorario');
        parent::addAttribute('alidata');
        parent::addAttribute('alicontato');
        parent::addAttribute('alifone');
        parent::addAttribute('alifoto1');
        parent::addAttribute('alifoto2');
        parent::addAttribute('alifoto3');
        parent::addAttribute('alisobre');
        //<onAfterConstruct>
  
        //</onAfterConstruct>
    }

    /**
     * Method set_alimentos_tipo
     * Sample of usage: $var->alimentos_tipo = $object;
     * @param $object Instance of AlimentosTipo
     */
    public function set_alimentos_tipo(AlimentosTipo $object)
    {
        $this->alimentos_tipo = $object;
        $this->alimentos_tipo_id = $object->alitipocodigo;
    }
    
    /**
     * Method get_alimentos_tipo
     * Sample of usage: $var->alimentos_tipo->attribute;
     * @returns AlimentosTipo instance
     */
    public function get_alimentos_tipo()
    {
        
        // loads the associated object
        if (empty($this->alimentos_tipo)) {
            $this->alimentos_tipo = new AlimentosTipo($this->alimentos_tipo_id);
        }

        // returns the associated object
        return $this->alimentos_tipo;
    }
    
    
    //<userCustomFunctions>
   function getFoto1(){
        return $this->getFoto('alifoto1');
    }

    function getFoto2(){
        return $this->getFoto('alifoto2');
    }

    function getFoto3(){
        return $this->getFoto('alifoto3');
    }
    //</userCustomFunctions>
    function getArquivo()
    {
        $file = $this->getDiretorio() . $this->alifoto1;
        if (is_file($file)) {
            return $file;
        }
        return 'files/imagem/galeria.png';
        
        $file = $this->getDiretorio() . $this->alifoto2;
        if (is_file($file)) {
            return $file;
        }
        return 'files/imagem/galeria.png';
        
        $file = $this->getDiretorio() . $this->alifoto3;
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
        $path = 'files/prefeituras/' . $this->unidadeGestora . '/alimento/';
        if (!file_exists($path)) {
            mkdir($path, 755, true);
        }
        return $path;
    }
    
    //</userCustomFunctions>
}

