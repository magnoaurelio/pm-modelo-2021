<?php
class Historicopessoal extends TRecord
{
const TABLENAME = 'historicopessoal';
const PRIMARYKEY= 'codigo';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('matricula');
			parent::addAttribute('cpfServidor');
			parent::addAttribute('tipoEscolaridade');
			parent::addAttribute('dataAlteracao');
			parent::addAttribute('logradouro');
			parent::addAttribute('numero');
			parent::addAttribute('complemento');
			parent::addAttribute('bairro');
			parent::addAttribute('numeroCep');
			parent::addAttribute('municipio');
			parent::addAttribute('estado');
			parent::addAttribute('telefoneFixo');
			parent::addAttribute('telefoneCelular');
			parent::addAttribute('codigoBanco');
			parent::addAttribute('codigoAgencia');
			parent::addAttribute('numeroContBancaria');
			parent::addAttribute('codigoUnidGestora');
			parent::addAttribute('mesReferencia');
			parent::addAttribute('prestacaoConta');
	}

}