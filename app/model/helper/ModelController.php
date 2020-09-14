<?php
/**
 * Created by PhpStorm.
 * User: MAGNUSOFT-PC
 * Date: 6/27/2018
 * Time: 9:21 AM
 */

class ModelController
{
    public static function getItens($database, $model, $key, $value, $ordercolumn = NULL, TCriteria $criteria = NULL)
    {

        $key   = trim($key);
        $value = trim($value);
        $items = array();

        if (empty($database))
        {
            throw new Exception(AdiantiCoreTranslator::translate('The parameter (^1) of ^2 is required', 'database', __CLASS__));
        }

        if (empty($model))
        {
            throw new Exception(AdiantiCoreTranslator::translate('The parameter (^1) of ^2 is required', 'model', __CLASS__));
        }

        if (empty($key))
        {
            throw new Exception(AdiantiCoreTranslator::translate('The parameter (^1) of ^2 is required', 'key', __CLASS__));
        }

        if (empty($value))
        {
            throw new Exception(AdiantiCoreTranslator::translate('The parameter (^1) of ^2 is required', 'value', __CLASS__));
        }

        TTransaction::open($database);

        // creates repository
        $repository = new TRepository($model);
        if (is_null($criteria))
        {
            $criteria = new TCriteria;
        }
        $criteria->setProperty('order', isset($ordercolumn) ? $ordercolumn : $key);

        // load all objects
        $collection = $repository->load($criteria, FALSE);

        // add objects to the options
        if ($collection)
        {
            foreach ($collection as $object)
            {
                if (isset($object->$value))
                {
                    $items[$object->$key] = $object->$value;
                }
                else
                {
                    $items[$object->$key] = $object->render($value);
                }
            }

            if (strpos($value, '{') !== FALSE AND is_null($ordercolumn))
            {
                asort($items);
            }
        }
        TTransaction::close();

        return $items;
    }


}