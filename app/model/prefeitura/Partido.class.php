<?php
/**
 * Partido Active Record
 * @author  <your-name-here>
 */
class Partido extends TRecord implements Direcionavel
{
    const TABLENAME = 'partido';
    const PRIMARYKEY= 'parcodigo';
    const IDPOLICY =  'max'; // {max, serial}
    
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('parnome');
        parent::addAttribute('parsigla');
        parent::addAttribute('parsite');
        parent::addAttribute('parlogo');
        parent::addAttribute('parativop');
        parent::addAttribute('parativov');
        parent::addAttribute('parquant');
    }


    public function getDiretorio(){
        $path = 'files/partido/'.strtolower($this->parsigla)."/";
        if (!file_exists($path))
            mkdir($path,755,true);
        return $path;
    }


    public function get_Logo(){
        $file = $this->getDiretorio().$this->parlogo;
        if(is_file($file)) return $file;
        return PATH_IMG_PADRAO.'bandeira.gif';
    }

    function serializer(){
        $dados = $this->toArray();
        $dados["parlogo"] =  $this->get_Logo();
        return $dados;
    }
}
