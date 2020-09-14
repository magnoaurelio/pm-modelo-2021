<?php

         class tipoEvento extends TRecord

         {

              const TABLENAME = 'tipoevento';

              const PRIMARYKEY= 'codigo';

              const IDPOLICY =  'max'; // {max, serial}

              const VENCIMENTO = 1;
              const DESCONTO = 2;


                public function __construct($id = NULL, $callObjectLoad = TRUE)

                {


                    parent::__construct($id, $callObjectLoad);

                    parent::addAttribute('descricao');

                }


         }