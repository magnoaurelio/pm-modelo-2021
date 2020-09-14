<?php
/**
 * Publicacao Active Record
 * @author  <your-name-here>
 */
class Publicacao extends TRecord implements Direcionavel
{
    const TABLENAME = 'diario_publicacao';
    const PRIMARYKEY= 'pubId';
    const IDPOLICY =  'max'; // {max, serial}
    
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('pubato');
        parent::addAttribute('pubdescricao');
        parent::addAttribute('pubprocesso');
        parent::addAttribute('pubdetalhe');
        parent::addAttribute('pubdata');
        parent::addAttribute('precodigo');
        parent::addAttribute('pubpalavra');
        parent::addAttribute('pubstatus');
        parent::addAttribute('pubarquivo');
        parent::addAttribute('pubedicao');
        parent::addAttribute('pubpagina');
        parent::addAttribute('unidadeGestora');
    }


      public function get_ato(){
        $ato = new Atos($this->pubato);
        return $ato->descricao;

      }


      function get_Edicao(){
          $edicao = new Edicao($this->pubedicao);
          return $edicao;
      }

    function get_UGestora(){
        return new UnidadeGestora($this->unidadeGestora);
    }

    function getFile(){
        return $this->getDiretorio().$this->pubarquivo;
    }


    function getDiretorio()
    {
        $path = 'files/publicacoes/' . $this->unidadeGestora . '/';
        if (!file_exists($path))
            mkdir($path, 755, true);
        return $path;
    }
}
