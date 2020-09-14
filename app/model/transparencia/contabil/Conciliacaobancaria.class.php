<?php
class Conciliacaobancaria extends TRecord
{
const TABLENAME = 'conciliacaobancaria';
const PRIMARYKEY= 'codigo';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('codigoBanco');
			parent::addAttribute('codigoAgencia');
			parent::addAttribute('numeroContBancaria');
			parent::addAttribute('tipoContBancaria');
			parent::addAttribute('numeroSequencial');
			parent::addAttribute('tipoConcBancaria');
			parent::addAttribute('descricaoSobrValoConciliado');
			parent::addAttribute('dataFatoConciliado');
			parent::addAttribute('numeroChequeDocumento');
			parent::addAttribute('numeroDocDebiAutomatico');
			parent::addAttribute('valorConciliado');
			parent::addAttribute('codigoUnidGestora');
			parent::addAttribute('mesReferencia');
			parent::addAttribute('prestacaoConta');
	}

}