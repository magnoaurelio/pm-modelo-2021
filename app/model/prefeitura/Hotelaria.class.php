<?php
/**
 * Hotelaria Active Record
 * @author  <your-name-here>
 */
class Hotelaria extends TRecord  implements Direcionavel
{
    const TABLENAME = 'hotelaria';
    const PRIMARYKEY= 'hotcodigo';
    const IDPOLICY =  'max';

  
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('unidadeGestora');
        parent::addAttribute('hotnome');
        parent::addAttribute('hotdata');
        parent::addAttribute('hottipo');
        parent::addAttribute('hotquartos');
        parent::addAttribute('hotfoto1');
        parent::addAttribute('hotfoto2');
        parent::addAttribute('hotfoto3');
        parent::addAttribute('hotsite');
        parent::addAttribute('hotemail');
        parent::addAttribute('hotendereco');
        parent::addAttribute('hotbairro');
        parent::addAttribute('hotnumero');
        parent::addAttribute('hotcep');
        parent::addAttribute('hotresponsavel');
        parent::addAttribute('hotsobre');
        parent::addAttribute('hotfone');
        parent::addAttribute('hotcelular');
        parent::addAttribute('hotfacebook');
        parent::addAttribute('hotinstagram');
        parent::addAttribute('hottwiter');
        parent::addAttribute('hothasntag');
       
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
        return $this->getFoto('hotfoto1');
    }

    function getFoto2(){
        return $this->getFoto('hotfoto2');
    }

    function getFoto3(){
        return $this->getFoto('hotfoto3');
    }


    public function getDiretorio()
    {
        $path = 'files/prefeituras/' . $this->unidadeGestora . '/hotelaria/';
        if (!file_exists($path)) {
            mkdir($path, 755, true);
        }
        return $path;
    }
}
