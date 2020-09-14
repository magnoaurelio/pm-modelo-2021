<?php
/**
 * Links Active Record
 * @author  <your-name-here>
 */
class Links extends TRecord implements Direcionavel
{
    const TABLENAME = 'links';
    const PRIMARYKEY= 'lincodigo';
    const IDPOLICY =  'max'; // {max, serial}
    
    
    private $artista;

    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('lintipo');
        parent::addAttribute('linnome');
        parent::addAttribute('linurl');
        parent::addAttribute('linresponsavel');
        parent::addAttribute('linusual');
        parent::addAttribute('lincontato');
        parent::addAttribute('linemail');
        parent::addAttribute('linimagem');
        parent::addAttribute('linfoto');
        parent::addAttribute('unidadeGestora');
    }

    private function getImg($campo)
    {
        $file = $this->getDiretorio() . $this->$campo;
        if (is_file($file)) return $file;
        return 'files/prefeituras/user.png';
    }

    function getFoto(){
        return $this->getImg('linfoto');
    }
    function getImagem(){
        return $this->getImg('linimagem');
    }

    public function getDiretorio()
    {
        $path = 'files/links/';
        if (!file_exists($path))
            mkdir($path, 755, true);
        return $path;
    }
}