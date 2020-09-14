<?php

//<fileHeader>
  
//</fileHeader>

class Fornecedor19 extends TRecord
{
    const TABLENAME  = 'fornecedor19';
    const PRIMARYKEY = 'fornecedor_id';
    const IDPOLICY   =  'serial'; // {max, serial}
    
    
    
    //<classProperties>
  
    //</classProperties>
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('for_nome');
        parent::addAttribute('for_cnpj');
        parent::addAttribute('for_cpf');
        parent::addAttribute('for_cidade');
        parent::addAttribute('for_uf');
        parent::addAttribute('for_fone');
        parent::addAttribute('for_contato');
        parent::addAttribute('for_sobre');
        parent::addAttribute('unidadeGestora');
        //<onAfterConstruct>
  
        //</onAfterConstruct>
    }

    
    /**
     * Method getCovid19s
     */
    public function getCovid19s()
    {
        $criteria = new TCriteria;
        $criteria->add(new TFilter('fornecedor_id', '=', $this->fornecedor_id));
        return Covid19::getObjects( $criteria );
    }
    
    //<userCustomFunctions>
  
    //</userCustomFunctions>
}

