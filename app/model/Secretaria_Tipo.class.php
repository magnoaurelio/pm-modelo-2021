<?php

class Secretaria_Tipo extends Read
{

    private $properties;
    private $Table = 'secretaria_tipo';
    private $read;
    const MUNICIPIO = " WHERE unidadeGestora = '" . UNIDADE_GESTORA . "' ";

    public function __construct($criterio = null)
    {
        if (is_int($criterio)) {
            parent::ExeRead($this->Table, "WHERE sectipocodigo = :id", "id={$criterio}");
        } else {
            $criterio = $criterio ? $criterio : self::MUNICIPIO;
            parent::ExeRead($this->Table, $criterio);
        }

        $this->read = parent::getResult();
        $this->setParam();
    }

    private function setParam()
    {
        if ($this->read):
            foreach ($this->read as $value) {
                foreach ($value as $key => $campo) {
                    $this->$key = $campo;
                }
            }
        endif;
    }

    public function __set($name, $value)
    {
        // objects and arrays are not set as properties
        if (is_scalar($value)) {
            // store the property's value
            $this->properties[$name] = $value;
        }
    }

    public function __get($name)
    {
        if (isset($this->properties[$name])) {
            return $this->properties[$name];
        }
    }



}
