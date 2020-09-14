<?php
/**
 * Unidade Active Record
 * @author  <your-name-here>
 */
class Unidade extends  \Adianti\Database\TRecord implements Direcionavel
{
    const TABLENAME = 'unidade';
    const PRIMARYKEY= 'uniid';
    const IDPOLICY =  'max'; // {max, serial}
    
    
    private $secretaria;

    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('uninome');
        parent::addAttribute('unilocal');
        parent::addAttribute('unibairro');
        parent::addAttribute('unisec');
        parent::addAttribute('unifuncao');
        parent::addAttribute('unifoto');
        parent::addAttribute('unifone');
        parent::addAttribute('uniemail');
        parent::addAttribute('unitipo');
    }

    function  toArray(){
        $dados = parent::toArray();
        $dados["foto"] = $this->getDiretorio().$dados["unifoto"];
        return $dados;
    }

    
    /**
     * Method set_secretaria
     * Sample of usage: $unidade->secretaria = $object;
     * @param $object Instance of Secretaria
     */
    public function set_secretaria(Secretaria $object)
    {
        $this->secretaria = $object;
        $this->secretaria_id = $object->id;
    }
    
    /**
     * Method get_secretaria
     * Sample of usage: $unidade->secretaria->attribute;
     * @returns Secretaria instance
     */
    public function get_secretaria()
    {
        // loads the associated object
        if (empty($this->secretaria))
            $this->secretaria = new Secretaria($this->unisec);
    
        // returns the associated object
        return $this->secretaria;
    }


    function getDiretorio()
    {
        $path = 'files/prefeituras/' . $this->get_secretaria()->unidadeGestora . '/unidades/';
        return $path;
    }
}
