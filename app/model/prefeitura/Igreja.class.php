<?php
/**
 * Igreja Active Record
 * @author  <your-name-here>
 */
class Igreja extends TRecord implements Direcionavel
{
    const TABLENAME = 'igreja';
    const PRIMARYKEY= 'igrcodigo';
    const IDPOLICY =  'max'; // {max, serial}
    
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('igrnome');
        parent::addAttribute('igrpadroeiro');
        parent::addAttribute('igrhistorico');
        parent::addAttribute('igrdata');
        parent::addAttribute('igrendereco');
        parent::addAttribute('igrbairro');
        parent::addAttribute('igrcep');
        parent::addAttribute('igrfoto1');
        parent::addAttribute('igrfoto2');
        parent::addAttribute('igrfoto3');
        parent::addAttribute('unidadeGestora');
    }

    private function getFoto($campo)
    {
        $file = $this->getDiretorio() . $this->$campo;
        if (is_file($file)) {
            return $file;
        }
        return 'files/prefeituras/galeria.png';
    }

    function getFoto1(){
        return $this->getFoto('igrfoto1');
    }
    function getFoto2(){
        return $this->getFoto('igrfoto2');
    }
    function getFoto3(){
        return $this->getFoto('igrfoto3');
    }

    public function getDiretorio()
    {
        $path = 'files/prefeituras/' . $this->unidadeGestora . '/igreja/';
        if (!file_exists($path)) {
            mkdir($path, 755, true);
        }
        return $path;
    }


}
