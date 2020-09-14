<?php
/**
 * NoticiaFoto Active Record
 * @author  <your-name-here>
 */
class NoticiaFoto extends TRecord implements Direcionavel
{
    const TABLENAME = 'noticia_foto';
    const PRIMARYKEY= 'nofcodigo';
    const IDPOLICY =  'max'; // {max, serial}
    
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('nofimagem');
        parent::addAttribute('noflegenda');
        parent::addAttribute('noffonte');
        parent::addAttribute('notcodigo');
        parent::addAttribute('unidadeGestora');
    }


    function getDiretorio()
    {
        $path = 'files/noticia/'.$this->unidadeGestora.'/';
        if (!file_exists($path))
            mkdir($path,755,true);
        return $path;
    }
}
