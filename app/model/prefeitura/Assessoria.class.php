<?php
/**
 * Assessoria Active Record
 * @author  <your-name-here>
 */
class Assessoria extends TRecord
{
    const TABLENAME = 'assessoria';
    const PRIMARYKEY= 'prenumero';
    const IDPOLICY =  'max'; // {max, serial}
    
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('asstipo');
        parent::addAttribute('assnome');
        parent::addAttribute('asslogo');
        parent::addAttribute('assfoto');
        parent::addAttribute('assendereco');
        parent::addAttribute('assbairro');
        parent::addAttribute('assfone');
        parent::addAttribute('assemail');
        parent::addAttribute('assassessor');
        parent::addAttribute('assusual');
        parent::addAttribute('asssite');
        parent::addAttribute('descricao');
        parent::addAttribute('unidadeGestora');
    }


}
