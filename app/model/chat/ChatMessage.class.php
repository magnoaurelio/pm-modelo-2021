<?php
/**
 * ChatMessage Active Record
 * @author  <your-name-here>
 */
class ChatMessage extends \Adianti\Database\TRecord
{
    const TABLENAME = 'chat_message';
    const PRIMARYKEY= 'id';
    const IDPOLICY =  'max'; // {max, serial}
    
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('mensagem');
        parent::addAttribute('horario');
        parent::addAttribute('tipo');
        parent::addAttribute('chat_id');
    }


    function toArray()
    {
        $dados =  parent::toArray();
        $dados["horario"] = MDate::datetimeBR($this->horario);
        return $dados;
    }


}
