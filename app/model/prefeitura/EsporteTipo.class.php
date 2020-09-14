<?php

//<fileHeader>
  
//</fileHeader>

class EsporteTipo extends TRecord
{
    const TABLENAME  = 'esporte_tipo';
    const PRIMARYKEY = 'esptipocodigo';
    const IDPOLICY   =  'serial'; // {max, serial}
    
    
    
    //<classProperties>
  
    //</classProperties>
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('esptiponome');
        parent::addAttribute('esptipofoto');
        //<onAfterConstruct>
  
        //</onAfterConstruct>
    }

    
    /**
     * Method getEsportess
     */
    public function getEsportess()
    {
        $criteria = new TCriteria;
        $criteria->add(new TFilter('esporte_tipo_id', '=', $this->esptipocodigo));
        return Esportes::getObjects( $criteria );
    }
    
    //<userCustomFunctions>
  
    //</userCustomFunctions>
}


