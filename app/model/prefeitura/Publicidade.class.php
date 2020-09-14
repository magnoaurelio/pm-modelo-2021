<?php
/**
 * Publicidade Active Record
 * @author  <your-name-here>
 */
class Publicidade extends TRecord implements Direcionavel
{
    const TABLENAME = 'publicidade';
    const PRIMARYKEY= 'pubcodigo';
    const IDPOLICY =  'max';

    public $unidadeGestora; // {max, serial}
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('pubimagem');
        parent::addAttribute('pubtipocodigo');
        parent::addAttribute('unidadeGestora');
        parent::addAttribute('pubgeral');
        parent::addAttribute('pubativa');
        parent::addAttribute('pubdata');
    }

 public function getDiretorio()
    {
      
        $path = 'files/prefeituras/'. \Adianti\Registry\TSession::getValue('unidadeGestora') . '/publicidade/';
     //   $path = 'files/publicidade/' . $this->unidadeGestora . '/';
          //   var_dump($path);

        if (!file_exists($path)) {
            mkdir($path, 755, true);
        }
        return $path;
    }
   
    public function set_unidadeGestora(Prefeitura $object)
    {
        $this->unidadeGestora = $object;
        $this->unidadeGestora = $object->unidadeGestora;
    }
    /**
     * Method get_fk_unidadeGestora
     * Sample of usage: $var->fk_unidadeGestora->attribute;
     * @returns Prefeitura instance
     */
    public function get_unidadeGestora()
    {
        
        // loads the associated object
        if (empty($this->unidadeGestora))
            $this->unidadeGestora = new Prefeitura($this->unidadeGestora);
        
        // returns the associated object
        return $this->unidadeGestora;
    }
    
    public  static  function publicidadeMeioEsquerda(){
        $repo = new \Adianti\Database\TRepository('Publicidade');
        $tipo =  'ES';
        $criteria =  self::filterPublicidade($tipo);
        if (!$repo->count($criteria)){
            $criteria = self::filterPublicidade($tipo,false);
        }
        $collection  =  $repo->load($criteria);
        return $collection ? $collection[0]->getImagem(): Publicidade::getImagemPadrao($tipo);
    }
     
    
    public  static  function publicidadeMeioSuperior(){
        $repo = new \Adianti\Database\TRepository('Publicidade');
        $tipo =  'MS';
        $criteria =  self::filterPublicidade($tipo);
        if (!$repo->count($criteria)){
            $criteria = self::filterPublicidade($tipo,false);
        }
        $collection  =  $repo->load($criteria);
        return $collection ? $collection[0]->getImagem(): Publicidade::getImagemPadrao($tipo);
    }

    public  static  function publicidadeRodape(){
        $repo = new \Adianti\Database\TRepository('Publicidade');
        $tipo =  'RO';
        $criteria =  self::filterPublicidade($tipo);
        if (!$repo->count($criteria)){
            $criteria = self::filterPublicidade($tipo,false);
        }
        $collection  =  $repo->load($criteria);
        return $collection ? $collection[0]->getImagem(): Publicidade::getImagemPadrao($tipo);
    }


    public  static  function publicidadeMeioInferior(){
        $repo = new \Adianti\Database\TRepository('Publicidade');
        $tipo =  'MI';
        $criteria =  self::filterPublicidade($tipo);
        if (!$repo->count($criteria)){
            $criteria = self::filterPublicidade($tipo,false);
        }
        $collection  =  $repo->load($criteria);
        return $collection ? $collection[0]->getImagem(): Publicidade::getImagemPadrao($tipo);
    }

    public  static  function publicidadeTopHeader(){

        $repo = new \Adianti\Database\TRepository('Publicidade');
        $tipo =  'TO';
        $criteria =  self::filterPublicidade($tipo);
        if (!$repo->count($criteria)){
            $criteria = self::filterPublicidade($tipo,false);
        }
        $collection  =  $repo->load($criteria);
        return $collection ? $collection[0]->getImagem() : Publicidade::getImagemPadrao($tipo);
    }

   

    static function filterPublicidade($tipo, $unidadeGestora = true, $limit=1, $order='pubcodigo', $direction='desc'){
        $criteria = new \Adianti\Database\TCriteria();
        if ($unidadeGestora)
            $criteria->add(new \Adianti\Database\TFilter('unidadeGestora','=',\Adianti\Registry\TSession::getValue('unidadeGestora')));
        else{
            $criteria->add(new \Adianti\Database\TFilter('pubgeral','=',1));
        }
        $criteria->add(new \Adianti\Database\TFilter('pubtipocodigo','=',$tipo));
        $criteria->add(new \Adianti\Database\TFilter('pubativa','=',1));
        $param =  array();
        if (empty($param['order']))
        {
            $param['order'] = $order;
            $param['direction'] = $direction;
        }
        $criteria->setProperties($param); // order, offset
        $criteria->setProperty('limit', $limit);

        return $criteria;
    }

    public function getImagem()
    {
       return $this->getDiretorio().$this->pubimagem;
    }

    static function getImagemPadrao($key){
         $IMAGENS = [
            "MS" => "app/templates/theme5/images/banner_portal_970x120.gif",
            "MI" => "app/templates/theme5/images/banner_portal_970x120.gif",
            "RO" => "app/templates/theme5/images/banner_portal_300x250.gif",
            "ES" => "app/templates/theme5/images/banner_portal_336x280.jpg",
            "TO" => ""
        ];

         return $IMAGENS[$key];
    }
}
