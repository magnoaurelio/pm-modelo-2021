<?php
/**
 * Atos Active Record
 * @author  <your-name-here>
 */
class Atos extends TRecord
{
    const TABLENAME = 'diario_atos';
    const PRIMARYKEY= 'ato_id';
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
