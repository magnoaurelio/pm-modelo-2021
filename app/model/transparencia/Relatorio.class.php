<?php
/**
 * Relatorio Active Record
 * @author  <your-name-here>
 */
class Relatorio extends TRecord implements Direcionavel
{
    const TABLENAME = 'relatorio';
    const PRIMARYKEY= 'codigo';
    const IDPOLICY =  'max'; // {max, serial}
    
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('descricao');
        parent::addAttribute('periodo');
        parent::addAttribute('anexo');
        parent::addAttribute('ano');
        parent::addAttribute('unidadeGestora');
    }


    function getDiretorio()
    {
        $path = 'files/transparencia/relatorios/';
        if (!file_exists($path))
            mkdir($path,0755,true);
        return $path;
    }
}
