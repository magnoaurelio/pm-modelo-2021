<?php

//<fileHeader>
  
//</fileHeader>

class Objeto extends TRecord
{
    const TABLENAME  = 'objeto';
    const PRIMARYKEY = 'objeto_id';
    const IDPOLICY   =  'serial'; // {max, serial}
    
    
    
    //<classProperties>
  
    //</classProperties>
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('obj_nome');
        //<onAfterConstruct>
  
        //</onAfterConstruct>
    }

    
    /**
     * Method getDecretos
     */
    public function getDecretos()
    {
        $criteria = new TCriteria;
        $criteria->add(new TFilter('objeto_id', '=', $this->objeto_id));
        return Decreto::getObjects( $criteria );
    }
    
    //<userCustomFunctions>
  
    //</userCustomFunctions>
}



