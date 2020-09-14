<?php

//<fileHeader>
  
//</fileHeader>

class Rede extends TRecord
{
    const TABLENAME  = 'rede';
    const PRIMARYKEY = 'redcodigo';
    const IDPOLICY   =  'serial'; // {max, serial}
    
    
    private $rede_tipo;
    
    //<classProperties>
  
    //</classProperties>
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('rede_tipo_id');
        parent::addAttribute('unidadeGestora');
        parent::addAttribute('reddata');
        parent::addAttribute('reddata');
        parent::addAttribute('redurl');
        //<onAfterConstruct>
  
        //</onAfterConstruct>
    }

    /**
     * Method set_rede_tipo
     * Sample of usage: $var->rede_tipo = $object;
     * @param $object Instance of RedeTipo
     */
    public function set_rede_tipo(RedeTipo $object)
    {
        $this->rede_tipo = $object;
        $this->rede_tipo_id = $object->redtipocodigo;
    }
    
    /**
     * Method get_rede_tipo
     * Sample of usage: $var->rede_tipo->attribute;
     * @returns RedeTipo instance
     */
    public function get_rede_tipo()
    {
        
        // loads the associated object
        if (empty($this->rede_tipo))
            $this->rede_tipo = new RedeTipo($this->rede_tipo_id);
        
        // returns the associated object
        return $this->rede_tipo;
    }
    
    
    //<userCustomFunctions>
  
    //</userCustomFunctions>
}

