<?php
/**
 * Aditivo Active Record
 * @author  <your-name-here>
 */
class Aditivo extends TRecord implements Direcionavel
{
    const TABLENAME = 'aditivo';
    const PRIMARYKEY= 'codigo';
    const IDPOLICY =  'serial'; // {max, serial}
    
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('contratoCodigo');
        parent::addAttribute('assinatura');
        parent::addAttribute('unidadeGestora');
        parent::addAttribute('tipoAditivo');
        parent::addAttribute('aditivo');
        parent::addAttribute('detalhe');
    }

    function get_Contrato(){
        return new Contrato($this->contratoCodigo);
    }

    static function getTipoAditivo($id=null){
        $tipos = [
            1=> "Valor Aditivado",
            2=> "Prazo Aditivado"
        ];
        if ($id) return $tipos[$id];
        return $tipos;
    }


    function getDiretorio()
    {
        $path = 'files/transparencia/aditivo/';
        if (!file_exists($path))
            mkdir($path,755,true);
        return $path;
    }
}
