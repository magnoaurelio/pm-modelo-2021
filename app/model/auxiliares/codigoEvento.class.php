<?php

         class codigoEvento extends TRecord

         {

              const TABLENAME = 'codigoevento';

              const PRIMARYKEY= 'codigo';

              const IDPOLICY =  'max'; // {max, serial}


                public function __construct($id = NULL, $callObjectLoad = TRUE)

                {

                    parent::__construct($id, $callObjectLoad);

                    parent::addAttribute('descricao');

                }


         }