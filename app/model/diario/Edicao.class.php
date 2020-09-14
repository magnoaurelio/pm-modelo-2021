<?php
/**
 * Edicao Active Record
 * @author  <your-name-here>
 */
class Edicao extends TRecord implements Direcionavel
{
    const TABLENAME = 'diario_edicao';
    const PRIMARYKEY= 'edinumero';
    const IDPOLICY =  'max'; // {max, serial}
    
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('edidata');
        parent::addAttribute('edisituacao');
        parent::addAttribute('capaini');
        parent::addAttribute('capafin');
        parent::addAttribute('publicidade1');
        parent::addAttribute('publicidade2');
        parent::addAttribute('unidadeGestora');
    }

  function get_entidade(){
   return new Entidade($this->entcodigo);
  }

  function get_codigo(){
       return str_pad($this->edinumero, 4, 0,  STR_PAD_LEFT);
  }


  function getPublicacoes(){
      $repo = new \Adianti\Database\TRepository('Publicacao');
      $criteria = new \Adianti\Database\TCriteria();
      $criteria->add(new \Adianti\Database\TFilter("pubedicao", '=', $this->edinumero));
      return $repo->load($criteria);
  }
  
  function get_mes(){
     if(!empty($this->edidata)){
       $m =  explode('-',$this->edidata);
       return DadosFixos::getMes($m[1]);
      }else{
       return '---';
      }
  }
  
   function get_ano(){
     if(!empty($this->edidata)){
       $a =  explode('-',$this->edidata);
       return $a[0];
      }else{
       return '---';
      }
  }

    function getDiretorio()
    {
        $path = 'files/edicoes/' . $this->unidadeGestora . '/';
        if (!file_exists($path))
            mkdir($path, 755, true);
        return $path;
    }

}
