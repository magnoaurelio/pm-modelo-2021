<?php
/**
 * Editais Active Record
 * @author  <your-name-here>
 */
class Editais extends TRecord implements Direcionavel
{
    const TABLENAME = 'editais';
    const PRIMARYKEY= 'codigo';
    const IDPOLICY =  'max'; // {max, serial}
    
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('numeroProcedimento');
        parent::addAttribute('anoProcedimento');
        parent::addAttribute('procedimento');
        parent::addAttribute('objeto');
        parent::addAttribute('modalidade');
        parent::addAttribute('numeroProcessoAdministrativo');
        parent::addAttribute('parecerJuridico');
        parent::addAttribute('edital');
        parent::addAttribute('dataPublicacao');
        parent::addAttribute('ata');
        parent::addAttribute('homologacao');
        parent::addAttribute('valor');
        parent::addAttribute('lote');
        parent::addAttribute('unidadeGestora');
        parent::addAttribute('abertura');
        parent::addAttribute('aviso');
        
    }


    function getDiretorio()
    {
        $path = 'files/transparencia/licitacao/';
        if (!file_exists($path))
            mkdir($path,755,true);
        return $path;
    }

     function setProcedimento(){
        $dispensa = ['6','7','13'];
        $moda = $this->modalidade;
        if (in_array($moda, $dispensa)){
            $this->procedimento =  "Dispensa";
        }elseif ($moda == 9){
            $this->procedimento =  "Sem licitação";
        }elseif ($moda == 8) {
            $this->procedimento = "Inexibilidade";
        }elseif ($moda == 12){
            $this->procedimento =  "Regime Diferenciado de Contratação";
        }else{
            $this->procedimento =  "Licitação";
        }
     }

    function getModalidade(){
        return new tipoModaLicitacao($this->modalidade);
    }


}
