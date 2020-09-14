<?php

//<fileHeader>
  
//</fileHeader>

class RedeTipo extends TRecord
{
    const TABLENAME  = 'rede_tipo';
    const PRIMARYKEY = 'redtipocodigo';
    const IDPOLICY   =  'serial'; // {max, serial}
    
    
    
    //<classProperties>
  
    //</classProperties>
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('redtiponome');
        parent::addAttribute('redtipofoto');
        //<onAfterConstruct>
  
        //</onAfterConstruct>
    }

    
    /**
     * Method getRedes
     */
    public function getRedes()
    {
        $criteria = new TCriteria;
        $criteria->add(new TFilter('rede_tipo_id', '=', $this->redtipocodigo));
        return Rede::getObjects( $criteria );
    }
    
    //<userCustomFunctions>
  
    //</userCustomFunctions>
}

