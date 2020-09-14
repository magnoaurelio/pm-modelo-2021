<?php
/**
 * Videos Active Record
 * @author  <your-name-here>
 */
class Videos extends TRecord
{
    const TABLENAME = 'videos';
    const PRIMARYKEY= 'prenumero';
    const IDPOLICY =  'serial'; // {max, serial}
    
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('vidurl');
        parent::addAttribute('vidurl1');
        parent::addAttribute('videstado');
        parent::addAttribute('viddata');
        parent::addAttribute('usucodigo');
        parent::addAttribute('descricao');
        parent::addAttribute('vidinclui');
        parent::addAttribute('vidaltera');
        parent::addAttribute('videxclui');
        parent::addAttribute('vidmesano');
        parent::addAttribute('vidlibera');
        parent::addAttribute('vidvisualiza');
        parent::addAttribute('unidadeGestora');
    }

    function get_prefeitura(){
        return Prefeitura::getPrefeitura($this->unidadeGestora);
    }


}
