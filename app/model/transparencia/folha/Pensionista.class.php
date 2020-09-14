<?php
class Pensionista extends TRecord
{
const TABLENAME = 'pensionista';
const PRIMARYKEY= 'codigo';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
            parent::addAttribute('matricula');
            parent::addAttribute('cpfServidor');
            parent::addAttribute('tipoVinculo');
			parent::addAttribute('tipoRelaParentesco');
			parent::addAttribute('tipoRegiPrevidencia');
	}

	function get_Servidor(){
	  return new Servidor($this->cpfServidor);
    }


    function get_Vinculo(){
        return new tipoVinculo($this->tipoVinculo);
    }

    function get_RelaParentesco(){
        return new tipoRelaParentesco($this->tipoRelaParentesco);
    }

    function get_RegiPrevidencia(){
        return new tipoRegiPrevidencia($this->tipoRegiPrevidencia);
    }



}