<?php
class Orcamento extends TRecord
{
const TABLENAME = 'orcamento';
const PRIMARYKEY= 'codigo';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('anoVigeLoa');
			parent::addAttribute('dataPublLoa');
			parent::addAttribute('percentualAutoSuplLoa');
			parent::addAttribute('numeroLoa');
			parent::addAttribute('dataPublLdo');
			parent::addAttribute('numeroLdo');
			parent::addAttribute('numeroLeiPpa');
			parent::addAttribute('dataPublPpa');
			parent::addAttribute('numeroLeiAltePpa');
			parent::addAttribute('dataPublAltePpa');
			parent::addAttribute('valorRecePrevista');
			parent::addAttribute('valorDespFixada');
			parent::addAttribute('metaResuPrimEmValoCorrente');
			parent::addAttribute('metaResuNomiEmValoCorrente');
			parent::addAttribute('codigoUnidGestora');
			parent::addAttribute('mesReferencia');
			parent::addAttribute('prestacaoConta');
	}




}