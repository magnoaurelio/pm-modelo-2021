<?php

//<fileHeader>
  
//</fileHeader>

class Decreto19 extends TRecord implements Direcionavel
{
    const TABLENAME  = 'decreto19';
    const PRIMARYKEY = 'decreto_id';
    const IDPOLICY   =  'serial'; // {max, serial}
    
    
    private $objeto;
    private $responsavel;
    
    //<classProperties>
  
    //</classProperties>
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('responsavel_id');
        parent::addAttribute('objeto_id');
        parent::addAttribute('dec_numero');
        parent::addAttribute('dec_data');
        parent::addAttribute('dec_lei');
        parent::addAttribute('dec_inicio');
        parent::addAttribute('dec_fim');
        parent::addAttribute('dec_periodo');
        parent::addAttribute('dec_anexo');
        parent::addAttribute('dec_decreto');
        parent::addAttribute('unidadeGestora');
        parent::addAttribute('dec_sobre');
        //<onAfterConstruct>
  
        //</onAfterConstruct>
    }

     function getDiretorio()
    {
        $path = 'files/transparencia/covid/';
        if (!file_exists($path))
            mkdir($path,0755,true);
        return $path;
    }
    /**
     * Method set_objeto
     * Sample of usage: $var->objeto = $object;
     * @param $object Instance of Objeto
     */
    public function set_objeto(Objeto $object)
    {
        $this->objeto = $object;
        $this->objeto_id = $object->objeto_id;
    }
    
    /**
     * Method get_objeto
     * Sample of usage: $var->objeto->attribute;
     * @returns Objeto instance
     */
    public function get_objeto()
    {
        
        // loads the associated object
        if (empty($this->objeto))
            $this->objeto = new Objeto($this->objeto_id);
        
        // returns the associated object
        return $this->objeto;
    }
    /**
     * Method set_responsavel
     * Sample of usage: $var->responsavel = $object;
     * @param $object Instance of Responsavel
     */
    public function set_responsavel(Responsavel $object)
    {
        $this->responsavel = $object;
        $this->responsavel_id = $object->responsavel_id;
    }
    
    /**
     * Method get_responsavel
     * Sample of usage: $var->responsavel->attribute;
     * @returns Responsavel instance
     */
    public function get_responsavel()
    {
        
        // loads the associated object
        if (empty($this->responsavel))
            $this->responsavel = new Responsavel($this->responsavel_id);
        
        // returns the associated object
        return $this->responsavel;
    }


    function toArray(){
        $dados = parent::toArray();
        $dados["responsavel"] =  $this->get_responsavel()->res_orgao;
        $dados["objeto"] =  $this->get_objeto()->obj_nome;
       return $dados;        
    }

    
    
    //<userCustomFunctions>
  
    //</userCustomFunctions>
}


