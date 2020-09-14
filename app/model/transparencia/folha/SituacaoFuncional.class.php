<?php
class SituacaoFuncional extends \Adianti\Database\TRecord
{
const TABLENAME = 'situacao_funcional';
const PRIMARYKEY= 'cpfServidor';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{
			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('tipoAtoPessoal');
			parent::addAttribute('dataMoviFuncional');
			parent::addAttribute('codigoCargo');
			parent::addAttribute('codigoLotacao');
			parent::addAttribute('tipoRegiPrevidencia');
			parent::addAttribute('tipoRegiTrabalho');
			parent::addAttribute('tipoVinculo');
			parent::addAttribute('dataNomeacao');
			parent::addAttribute('dataPosse');
            parent::addAttribute('dataExercicio');
            parent::addAttribute('dataExercicio');
            parent::addAttribute('numeroEdital');
	}



    function getCargo(){
        $reposi = new \Adianti\Database\TRepository('Cargo');
        $criterio = new \Adianti\Database\TCriteria();
        $criterio->add(new \Adianti\Database\TFilter('codigoCargo','=', $this->codigoCargo));
        $criterio->add(new \Adianti\Database\TFilter('codigoUnidGestora','=', $this->getUnidadeGestora()));
        $cargo  = $reposi->load($criterio);
        return $cargo ? $cargo[0] : new Cargo();
    }

    function getLotacao(){
        $reposi = new \Adianti\Database\TRepository('Lotacao');
        $criterio = new \Adianti\Database\TCriteria();
        $criterio->add(new \Adianti\Database\TFilter('codigoLotacao','=', $this->codigoLotacao));
        $criterio->add(new \Adianti\Database\TFilter('codigoUnidGestora','=', $this->getUnidadeGestora()));
        $criterio->setProperty('limit' , 1);
        $lotacao  = $reposi->load($criterio);
        return $lotacao ? $lotacao[0] : new Lotacao();
    }

    function getRegimePrevidencia(){
        return tipoRegiPrevidencia::find($this->tipoRegiPrevidencia);
    }

    function getRegimeTrabalho(){
        return  tipoRegiTrabalho::find($this->tipoRegiTrabalho);
    }

    function getVinculo(){
        return  tipoVinculo::find($this->tipoVinculo);
    }

    function getUnidadeGestora(){
        return (new Servidor($this->cpfServidor))->codigoUnidGestora;
    }


}