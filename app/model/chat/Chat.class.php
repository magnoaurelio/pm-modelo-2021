<?php
/**
 * Chat Active Record
 * @author  <your-name-here>
 */
class Chat extends TRecord
{
    const TABLENAME = 'chat';
    const PRIMARYKEY= 'id';
    const IDPOLICY =  'max'; // {max, serial}
    const TIPO_SUPORTE =1;
    const TIPO_USER = 2;
    
    
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('user_id');
        parent::addAttribute('nome');
        parent::addAttribute('email');
        parent::addAttribute('uuid');
        parent::addAttribute('data_create');
        parent::addAttribute('unidadeGestora');
    }

    function get_Usuario(){
        if ($this->user_id){
            return SystemUser::find($this->user_id);
        }
        return null;
    }

    public static function getByUUid($id)
    {
        $repository= new \Adianti\Database\TRepository("Chat");
        $criteria = new \Adianti\Database\TCriteria();
        $criteria->add(new \Adianti\Database\TFilter("uuid","=",$id));
        $collection  = $repository->load($criteria);
        return $collection ? $collection[0] : null;
    }

    function addMsg($mensagem,$tipo){
        $msg = new ChatMessage();
        $msg->chat_id = $this->id;
        $msg->mensagem = $mensagem;
        $msg->tipo = $tipo;
        $msg->store();
        return $msg;
    }

    function getMsgs(){
        $repository= new \Adianti\Database\TRepository("ChatMessage");
        $criteria = new \Adianti\Database\TCriteria();
        $criteria->add(new \Adianti\Database\TFilter("chat_id","=",$this->id));
        $collection  = $repository->load($criteria);
        return $collection;
    }

    function getMsgsSerialized(){
        $repository= new \Adianti\Database\TRepository("ChatMessage");
        $criteria = new \Adianti\Database\TCriteria();
        $criteria->add(new \Adianti\Database\TFilter("chat_id","=",$this->id));
        $collection  = $repository->load($criteria);
        array_walk($collection, function(&$object){
            $object = $object->toArray();
        });
        return $collection;
    }


}
