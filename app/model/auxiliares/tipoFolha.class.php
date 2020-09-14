<?php

         class tipoFolha extends TRecord

         {

              const TABLENAME = 'tipofolha';

              const PRIMARYKEY= 'codigo';

              const IDPOLICY =  'max'; // {max, serial}


                public function __construct($id = NULL, $callObjectLoad = TRUE)

                {

                    parent::__construct($id, $callObjectLoad);

                    parent::addAttribute('descricao');

                    if($id=='0'){
                        $this->descricao = "Normal";
                    }

                }




         }