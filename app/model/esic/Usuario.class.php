<?php
/**
 * Usuario Active Record
 * @author  <your-name-here>
 */
class Usuario extends TRecord
{
    const TABLENAME = 'usuario';
    const PRIMARYKEY= 'codigo';
    const IDPOLICY =  'max'; // {max, serial}
    
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('nome');
        parent::addAttribute('email');
        parent::addAttribute('telefone');
        parent::addAttribute('created');
        parent::addAttribute('senha');
        parent::addAttribute('cidade');
        parent::addAttribute('estado');
    }


}
