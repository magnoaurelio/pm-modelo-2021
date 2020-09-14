<?php
class Dependente extends TRecord
{
const TABLENAME = 'dependente';
const PRIMARYKEY= 'matricula';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('cpfServidor');
			parent::addAttribute('nomeDependente');
			parent::addAttribute('cpfDependente');
			parent::addAttribute('tipoRelaParentesco');
			parent::addAttribute('dataInclusaoDependente');
			parent::addAttribute('invalidoIncapaz');
			parent::addAttribute('dataNascimento');
			parent::addAttribute('codigoUnidGestora');
	}

	function getGrauParentesco(){
	    return new tipoRelaParentesco($this->tipoRelaParentesco);
    }

}