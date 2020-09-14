<?php
class Fornecedor extends TRecord
{
const TABLENAME = 'fornecedor';
const PRIMARYKEY= 'cpfCnpjCredor';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('nomeDenoOuRazaJuridica');
			parent::addAttribute('tipoCredor');
			parent::addAttribute('logradouro');
			parent::addAttribute('numero');
			parent::addAttribute('complemento');
			parent::addAttribute('bairro');
			parent::addAttribute('numeroCep');
			parent::addAttribute('municipio');
			parent::addAttribute('estado');
			parent::addAttribute('telefoneFixo');
			parent::addAttribute('telefoneCelular');
			parent::addAttribute('codigoUnidGestora');
	}

}