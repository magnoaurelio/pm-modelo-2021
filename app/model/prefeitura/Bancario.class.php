<?php
/**
 * Bancario Active Record
 * @author  Marcelo Alves
 */
class Bancario extends TRecord  implements Direcionavel
{
    const TABLENAME = 'bancario';
    const PRIMARYKEY= 'bancodigo';
    const IDPOLICY =  'max'; // {max, serial}


    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('bannome');
        parent::addAttribute('bantipo');
        parent::addAttribute('banfoto1');
        parent::addAttribute('banfoto2');
        parent::addAttribute('banfoto3');
        parent::addAttribute('bansite');
        parent::addAttribute('banendereco');
        parent::addAttribute('banbairro');
        parent::addAttribute('bannumero');
        parent::addAttribute('bancep');
        parent::addAttribute('bansobre');
        parent::addAttribute('banfone');
        parent::addAttribute('bancelular');
        parent::addAttribute('unidadeGestora');
        parent::addAttribute('banbanco');
    }


    private function getFoto($campo)
    {
        $file = $this->getDiretorio() . $this->$campo;
        if (is_file($file)) {
            return $file;
        }
        return 'files/prefeituras/user.png';
    }

    function getFoto1(){
        return $this->getFoto('banfoto1');
    }

    function getFoto2(){
        return $this->getFoto('banfoto2');
    }

    function getFoto3(){
        return $this->getFoto('banfoto3');
    }


    public function getDiretorio()
    {
        $path = 'files/prefeituras/' . $this->unidadeGestora . '/bancario/';
        if (!file_exists($path)) {
            mkdir($path, 755, true);
        }
        return $path;
    }

    public function get_Banco(){
        return new Banco($this->banbanco);
    }
}
