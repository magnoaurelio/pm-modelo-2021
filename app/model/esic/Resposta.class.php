<?php
/**
 * Resposta Active Record
 * @author  <your-name-here>
 */
class Resposta extends TRecord
{
    const TABLENAME = 'resposta';
    const PRIMARYKEY= 'codigo';
    const IDPOLICY =  'max'; // {max, serial}
    
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('solicitacao_id');
        parent::addAttribute('usuario_esic');
        parent::addAttribute('created');
        parent::addAttribute('resposta');
    }


}
