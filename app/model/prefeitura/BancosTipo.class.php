<?php

//<fileHeader>
  
//</fileHeader>

class BancosTipo extends TRecord
{
    const TABLENAME  = 'bancostipo';
    const PRIMARYKEY = 'bantipocodigo';
    const IDPOLICY   =  'serial'; // {max, serial}
    
    
    
    //<classProperties>
  
    //</classProperties>
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('bantiponome');
        parent::addAttribute('bantipotipo');
        parent::addAttribute('bantipologo');
        parent::addAttribute('bantiposigla');
        //<onAfterConstruct>
  
        //</onAfterConstruct>
    }

    
    /**
     * Method getBancos
     */
    public function getBancos()
    {
        $criteria = new TCriteria;
        $criteria->add(new TFilter('banco_tipo_id', '=', $this->bantipocodigo));
        return Banco::getObjects( $criteria );
    }
    
    //<userCustomFunctions>
  
    //</userCustomFunctions>
}
