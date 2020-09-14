<?php

//<fileHeader>
  
//</fileHeader>

class Covid19 extends TRecord implements Direcionavel
{
    const TABLENAME  = 'covid_19';
    const PRIMARYKEY = 'covid_id';
    const IDPOLICY   =  'serial'; // {max, serial}
    
    
    private $modalidade;
    private $aquisicao;
    private $fornecedor;
    private $responsavel;
    
    //<classProperties>
  
    //</classProperties>
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('modalidade_id');
        parent::addAttribute('aquisicao_id');
        parent::addAttribute('fornecedor_id');
        parent::addAttribute('responsavel_id');
        parent::addAttribute('cov_numero');
        parent::addAttribute('cov_data');
        parent::addAttribute('cov_quantidade');
        parent::addAttribute('cov_valor');
        parent::addAttribute('cov_anexo');
        parent::addAttribute('cov_decreto');
        parent::addAttribute('cov_objeto');
        parent::addAttribute('unidadeGestora');
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
     * Method set_modalidade
     * Sample of usage: $var->modalidade = $object;
     * @param $object Instance of Modalidade
     */
    public function set_modalidade(Modalidade $object)
    {
        $this->modalidade = $object;
        $this->modalidade_id = $object->modalidade_id;
    }
    
    /**
     * Method get_modalidade
     * Sample of usage: $var->modalidade->attribute;
     * @returns Modalidade instance
     */
    public function get_modalidade()
    {
        
        // loads the associated object
        if (empty($this->modalidade))
            $this->modalidade = new Modalidade($this->modalidade_id);
        
        // returns the associated object
        return $this->modalidade;
    }
    /**
     * Method set_aquisicao
     * Sample of usage: $var->aquisicao = $object;
     * @param $object Instance of Aquisicao
     */
    public function set_aquisicao(Aquisicao $object)
    {
        $this->aquisicao = $object;
        $this->aquisicao_id = $object->aqusicao_id;
    }
    
    /**
     * Method get_aquisicao
     * Sample of usage: $var->aquisicao->attribute;
     * @returns Aquisicao instance
     */
    public function get_aquisicao()
    {
        
        // loads the associated object
        if (empty($this->aquisicao))
            $this->aquisicao = new Aquisicao($this->aquisicao_id);
        
        // returns the associated object
        return $this->aquisicao;
    }
    /**
     * Method set_fornecedor19
     * Sample of usage: $var->fornecedor19 = $object;
     * @param $object Instance of Fornecedor19
     */
    public function set_fornecedor(Fornecedor19 $object)
    {
        $this->fornecedor = $object;
        $this->fornecedor_id = $object->fornecedor_id;
    }
    
    /**
     * Method get_fornecedor
     * Sample of usage: $var->fornecedor->attribute;
     * @returns Fornecedor19 instance
     */
    public function get_fornecedor()
    {
        
        // loads the associated object
        if (empty($this->fornecedor))
            $this->fornecedor = new Fornecedor19($this->fornecedor_id);
        
        // returns the associated object
        return $this->fornecedor;
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
        $dados["aquisicao"] =  $this->get_aquisicao()->aqu_nome;
        $dados["fornecedor"] =  $this->get_fornecedor()->for_nome;
        $dados["modalidade"] =  $this->get_modalidade()->mod_nome;
        $dados["valor"] =  getCurrency($this->cov_valor);
       return $dados;        
    }




    //<userCustomFunctions>
  
    //</userCustomFunctions>
}


