<?php

//<fileHeader>
  
//</fileHeader>

class Publicidadetipo extends TRecord
{
    const TABLENAME  = 'publicidadetipo';
    const PRIMARYKEY = 'pubtipocodigo';
    const IDPOLICY   =  'max'; // {max, serial}
    
    
    
    //<classProperties>
  
    //</classProperties>
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('pubtiponome');
        //<onAfterConstruct>
  
        //</onAfterConstruct>
    }

    
    /**
     * Method getPublicidades
     */
    public function getPublicidades()
    {
        $criteria = new TCriteria;
        $criteria->add(new TFilter('publicidadetipo_id', '=', $this->pubtipocodigo));
        return Publicidade::getObjects( $criteria );
    }
    
    //<userCustomFunctions>
  
    //</userCustomFunctions>
}

