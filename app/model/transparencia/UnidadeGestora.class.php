<?php
/**
 * UnidadeGestora Active Record
 * @author  <your-name-here>
 */
class UnidadeGestora extends \Adianti\Database\TRecord
{
    const TABLENAME = 'unidade_gestora';
    const PRIMARYKEY= 'codigoUnidGestora';
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
