<?php
/**
 * Vereador Active Record
 * @author  <your-name-here>
 */
class Vereador extends TRecord
{
    const TABLENAME = 'vereador';
    const PRIMARYKEY= 'vercodigo';
    const IDPOLICY =  'max'; // {max, serial}
    
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('verdir');
        parent::addAttribute('prever');
        parent::addAttribute('preestado');
        parent::addAttribute('precodigo');
        parent::addAttribute('prenome');
        parent::addAttribute('vercpf');
        parent::addAttribute('vernome');
        parent::addAttribute('verusual');
        parent::addAttribute('versexo');
        parent::addAttribute('verimagem');
        parent::addAttribute('verfoto');
        parent::addAttribute('verendereco');
        parent::addAttribute('verbairro');
        parent::addAttribute('verfone');
        parent::addAttribute('veremail');
        parent::addAttribute('vercelular');
        parent::addAttribute('parcodigo');
        parent::addAttribute('verniver');
        parent::addAttribute('vernatural');
        parent::addAttribute('verestadocivil');
        parent::addAttribute('vergrauinstrucao');
        parent::addAttribute('verocupacao');
    }


    function get_Cidade(){
        return Prefeitura::find($this->precodigo);
    }


   static function ordemOcupacao (){
        $ordem = array();
        for ($i = 1; $i <= 35; $i++){
            $ordem[$i] = $i."ª Ordem";
        }
        return $ordem;
    }

    function getPartido(){
        $partido  = Partido::find($this->parcodigo);
        return  $partido ? $partido : new Partido();
    }



}
