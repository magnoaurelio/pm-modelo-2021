<?php
class Historicofuncional extends TRecord
{
const TABLENAME = 'historicofuncional';
const PRIMARYKEY= 'codigo';
const IDPOLICY =  'max'; // {max, serial}

	public function __construct($id = NULL, $callObjectLoad = TRUE)
	{

			parent::__construct($id, $callObjectLoad);
			parent::addAttribute('matricula');
			parent::addAttribute('cpfServidor');
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
            parent::addAttribute('numeroEdital');
			parent::addAttribute('tipoMotiInativacao');
			parent::addAttribute('codigoUnidGestora');
			parent::addAttribute('mesReferencia');
			parent::addAttribute('prestacaoConta');
	}

}