<?php
class Servidorfolha extends TRecord
{
    const TABLENAME = 'servidorfolha';
    const PRIMARYKEY= 'codigoFolha';
    const IDPOLICY =  'max'; // {max, serial}

    private $eventos;

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('tipoFolha');
			parent::addAttribute('matricula');
			parent::addAttribute('cpfServidor');
			parent::addAttribute('aliquotaPreviPatronal');
			parent::addAttribute('aliquotaPreviServidor');
			parent::addAttribute('remuneracaoTotal');
			parent::addAttribute('remuneracaoLiquida');
			parent::addAttribute('BaseCalcContPrevidenciaria');
			parent::addAttribute('BaseCalcContIRPF');
			parent::addAttribute('BaseCalcFGTS');
			parent::addAttribute('valorFGTS');
			parent::addAttribute('codigoUnidGestora');
			parent::addAttribute('mesReferencia');
			parent::addAttribute('prestacaoConta');

	}

    function getServidor(){
	    return new Servidor($this->cpfServidor);
    }


    function getTipoFolha(){
        return new tipoFolha($this->tipoFolha);
    }

    function getPrestacaoConta(){
        return new PrestacaocontasFolha($this->prestacaoConta);
    }

    function getEventos(){
        $repository = new \Adianti\Database\TRepository('Evento');
        $criteria = new \Adianti\Database\TCriteria();
        $criteria->add(new \Adianti\Database\TFilter('codigoFolha','=',$this->codigoFolha));
        $this->eventos = (array)$repository->load($criteria);
        return $this->eventos;
    }


}