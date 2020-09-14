<?php

         class tipoNatuDespesa extends TRecord

         {

              const TABLENAME = 'tiponatudespesa';

              const PRIMARYKEY= 'codigo';

              const IDPOLICY =  'max'; // {max, serial}


                public function __construct($id = NULL, $callObjectLoad = TRUE)

                {


                    parent::__construct($id, $callObjectLoad);

                    parent::addAttribute('descricao');

                }


         }