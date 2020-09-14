<?php
/**
 * Legislacao Active Record
 * @author  <your-name-here>
 */
class Legislacao extends TRecord implements Direcionavel
{
    const TABLENAME = 'legislacao';
    const PRIMARYKEY= 'codigo';
    const IDPOLICY =  'max'; // {max, serial}
    
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('nome');
        parent::addAttribute('datapublicacao');
        parent::addAttribute('tipo');
        parent::addAttribute('anexo');
        parent::addAttribute('numero');
        parent::addAttribute('unidadeGestora');
    }


    function getDiretorio()
    {
        $path = 'files/transparencia/legislacao/';
        if (!file_exists($path))
            mkdir($path,0755,true);
        return $path;
    }

    function get_TipoLegislacao(){
        return new TipoLegislacao($this->tipo);
    }
}
