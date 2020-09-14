<?php

         class tipoNatuLancamento extends TRecord

         {

              const TABLENAME = 'tiponatulancamento';

              const PRIMARYKEY= 'codigo';

              const IDPOLICY =  'max'; // {max, serial}

             const DEBITO = 1;
             const CREDITO = 2;


                public function __construct($id = NULL, $callObjectLoad = TRUE)

                {


                    parent::__construct($id, $callObjectLoad);

                    parent::addAttribute('descricao');

                }




         }