<?php

//<fileHeader>
  
//</fileHeader>

class Modalidade extends TRecord
{
    const TABLENAME  = 'modalidade';
    const PRIMARYKEY = 'modalidade_id';
    const IDPOLICY   =  'serial'; // {max, serial}
    
    
    
    //<classProperties>
  
    //</classProperties>
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('mod_nome');
        //<onAfterConstruct>
  
        //</onAfterConstruct>
    }

    
    /**
     * Method getCovid19s
     */
    public function getCovid19s()
    {
        $criteria = new TCriteria;
        $criteria->add(new TFilter('modalidade_id', '=', $this->modalidade_id));
        return Covid19::getObjects( $criteria );
    }
    
    //<userCustomFunctions>
  
    //</userCustomFunctions>
}

