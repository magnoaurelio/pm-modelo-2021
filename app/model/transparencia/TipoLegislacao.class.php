<?php
/**
 * TipoLegislacao Active Record
 * @author  <your-name-here>
 */
class TipoLegislacao extends TRecord
{
    const TABLENAME = 'tipo_legislacao';
    const PRIMARYKEY= 'codigo';
    const IDPOLICY =  'max'; // {max, serial}
    
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('descricao');
    }


}
