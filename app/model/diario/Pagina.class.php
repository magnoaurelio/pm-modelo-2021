<?php
/**
 * DiarioPagina Active Record
 * @author  <your-name-here>
 */
class Pagina extends TRecord implements Direcionavel
{
    const TABLENAME = 'diario_pagina';
    const PRIMARYKEY= 'pagid';
    const IDPOLICY =  'max'; // {max, serial}
    
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('numero');
        parent::addAttribute('publicacao');
        parent::addAttribute('arquivo');
    }
    
    
   function get_Pub(){
       return new Publicacao($this->publicacao);
   }
   
   
   function get_Edicao(){
         $edicao = new Edicao($this->get_Pub()->pubedicao);
         return $edicao;   
   }


    function getDiretorio()
    {
        $path = 'files/paginas/' . $this->unidadeGestora . '/'.$this->get_Edicao()->edinumero."/";
        if (!file_exists($path))
            mkdir($path, 755, true);
        return $path;
    }
}
