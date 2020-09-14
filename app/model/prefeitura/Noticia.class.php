<?php

/**
 * Noticia Active Record
 * @author  <your-name-here>
 */
class Noticia extends \Adianti\Database\TRecord implements Direcionavel
{
    const TABLENAME = 'noticia';
    const PRIMARYKEY = 'notcodigo';
    const IDPOLICY = 'max'; // {max, serial}


    private $noticia_fotos;

    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('nottitulo');
        parent::addAttribute('notsubtitulo');
        parent::addAttribute('nottexto');
        parent::addAttribute('notfoto');
        parent::addAttribute('notcategoria');
        parent::addAttribute('notfonte');
        parent::addAttribute('notdata');
        parent::addAttribute('home');
        parent::addAttribute('unidadeGestora');
    }


    public function navNoticia($direction)
    {
        $operator = $direction == "left" ? "<" : ">";
        $repository = new TRepository('Noticia');
        $criteria = new TCriteria;
        $criteria->add(new TFilter('notcodigo', $operator, $this->notcodigo));
        $criteria->add(new TFilter('unidadeGestora', '=', \Adianti\Registry\TSession::getValue('unidadeGestora')));
        if (empty($param['order'])) {
            $param['order'] = 'notcodigo';
            $param['direction'] = $direction === "left" ? "desc" : "asc";
        }
        $criteria->setProperties($param); // order, offset
        $criteria->setProperty('limit', 1);
        $collection = $repository->load($criteria);
        if ($collection) {
            return $collection[0];
        }
        return $this;
    }


    function getFoto()
    {
        $file = $this->getDiretorio() . $this->notfoto;
        if (is_file($file)) {
            return $file;
        }
        return 'files/prefeituras/galeria.png';
    }

    /**
     * Method addNoticiaFoto
     * Add a NoticiaFoto to the Noticia
     * @param $object Instance of NoticiaFoto
     */
    public function addNoticiaFoto(NoticiaFoto $object)
    {
        $object->notcodigo = $this->notcodigo;
        unset($object->nofcodigo);
        $object->store();
    }

    /**
     * Method getNoticiaFotos
     * Return the Noticia' NoticiaFoto's
     * @return Collection of NoticiaFoto
     */
    public function getNoticiaFotos()
    {
        $repository = new TRepository('NoticiaFoto');
        $criteria = new TCriteria;
        $criteria->add(new TFilter('notcodigo', '=', $this->notcodigo));
        return $repository->load($criteria);
    }



    public function setNoticiaFotoList($lista){
        $this->noticia_fotos = $lista;
    }

    /**
     * Reset aggregates
     */
    public function clearParts()
    {
        $repository = new TRepository('NoticiaFoto');
        $criteria = new TCriteria;
        $criteria->add(new TFilter('notcodigo', '=', $this->notcodigo));
        $repository->delete($criteria);
    }

    public function store()
    {
        // store the object itself
        parent::store();

        // delete the related NoticiaFoto objects
        $this->clearParts();
        // store the related NoticiaFoto objects
        if ($this->noticia_fotos) {
            $path  = "tmp/";
            $destino = 'files/noticia/'.$object->unidadeGestora;

          //  if(!file_exists($destino)) mkdir($destino,777,true);
            foreach ($this->noticia_fotos as $noticia_foto) {
                if (is_file($path . $noticia_foto->nofimagem)) {
                    $noticia_foto->nofimagem = File::moveRenomeando($path . $noticia_foto->nofimagem, $destino, true);
                }
                $this->addNoticiaFoto($noticia_foto);
            }
        }

    }

    /**
     * Delete the object and its aggregates
     * @param $id object ID
     */
    public function delete($id = NULL)
    {
        $id = isset($id) ? $id : $this->notcodigo;
        // delete the related NoticiaFoto objects
        $repository = new TRepository('NoticiaFoto');
        $criteria = new TCriteria;
        $criteria->add(new TFilter('notcodigo', '=', $id));
        $repository->delete($criteria);


        // delete the object itself
        parent::delete($id);
    }


    function getDiretorio()
    {
        $path = 'files/noticia/'.$this->unidadeGestora.'/';
        if (!file_exists($path)) {
            mkdir($path, 755, true);
        }
        return $path;
    }
}
