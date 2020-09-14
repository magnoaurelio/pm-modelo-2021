<?php

//<fileHeader>
  
//</fileHeader>

class AlimentosTipo extends TRecord
{
    const TABLENAME  = 'alimentos_tipo';
    const PRIMARYKEY = 'alitipocodigo';
    const IDPOLICY   =  'serial'; // {max, serial}
    
    
    
    //<classProperties>
  
    //</classProperties>
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('alitiponome');
        //<onAfterConstruct>
  
        //</onAfterConstruct>
    }

    
    /**
     * Method getAlimentoss
     */
    public function getAlimentoss()
    {
        $criteria = new TCriteria;
        $criteria->add(new TFilter('alimentos_tipo_id', '=', $this->alitipocodigo));
        return Alimentos::getObjects( $criteria );
    }
    
    //<userCustomFunctions>
  
    //</userCustomFunctions>
}

