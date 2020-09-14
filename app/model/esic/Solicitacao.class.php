<?php
/**
 * Solicitacao Active Record
 * @author  <your-name-here>
 */
class Solicitacao extends TRecord
{
    const TABLENAME = 'solicitacao';
    const PRIMARYKEY= 'codigo';
    const IDPOLICY =  'max'; // {max, serial}
    
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('tipo');
        parent::addAttribute('unidadeGestora');
        parent::addAttribute('usuario');
        parent::addAttribute('detalhe');
        parent::addAttribute('created');
    }


}
