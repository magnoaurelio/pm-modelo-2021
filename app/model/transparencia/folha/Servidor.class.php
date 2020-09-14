<?php
use Adianti\Database\TFilter;

class Servidor extends \Adianti\Database\TRecord
{
const TABLENAME = 'servidor';
const PRIMARYKEY= 'cpfServidor';
const IDPOLICY =  'max'; // {max, serial}

    private $dependentes;

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('matricula');
			parent::addAttribute('rgServidor');
			parent::addAttribute('orgaoExpedidor');
			parent::addAttribute('dataExpeCartDeIdentidade');
			parent::addAttribute('nomeServidor');
			parent::addAttribute('dataNascimento');
			parent::addAttribute('sexo');
			parent::addAttribute('tituloEleitor');
			parent::addAttribute('tipoEstaCivil');
			parent::addAttribute('pisPAsep');
			parent::addAttribute('numeroOrgaoClasse');
			parent::addAttribute('cpfPai');
			parent::addAttribute('nomePai');
			parent::addAttribute('cpfMae');
			parent::addAttribute('nomeMae');
			parent::addAttribute('tipoCadastro');
			parent::addAttribute('codigoUnidGestora');
	}




	function getContracheques(TFilter $filtro){
	    Servidorfolha::where($filtro->dump());
    }

    function getSituacaoFuncional(){
        return SituacaoFuncional::find($this->cpfServidor);
    }

    function getHistoricoFuncional(){
        $repository = new \Adianti\Database\TRepository('Historicofuncional');
        $criteria = new \Adianti\Database\TCriteria();
        $criteria->add(new TFilter("cpfServidor","=", $this->cpfServidor));
        return $repository->load($criteria);
    }

    function getSexo(){
	    return new tipoSexo($this->sexo);
    }

    function getEstadoCivil(){
        return new tipoEstaCivil($this->tipoEstaCivil);
    }


    function getTipoCadastro(){
	    return new tipoCadastro($this->tipoCadastro);
    }


    function getDependentes(){
        $this->buscarDependentes();
        if ($this->dependentes){
            return $this->dependentes;
        }
        return false;
    }


    private function buscarDependentes (){
        $repository = new \Adianti\Database\TRepository("Dependente");
        $criteria = new \Adianti\Database\TCriteria();
        $criteria->add(new TFilter("cpfServidor","=",$this->cpfServidor));
        $this->dependentes = $repository->load($criteria);

    }

    public function delete($id = NULL)
    {
        $id = isset($id) ? $id : $this->matricula;
        SituacaoFuncional::where('cpfServidor', '=', $this->cpfServidor)->delete();
        Pensionista::where('cpfServidor', '=', $this->cpfServidor)->delete();

        parent::delete($id);
    }

}