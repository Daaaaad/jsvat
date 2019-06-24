<?php

class Address extends AddressCore
{
    /**
     * Address constructor.
     * @param null $id_address
     * @param null $id_lang
     */
    public function __construct($id_address = null, $id_lang = null)
    {
        self::$definition['fields']['vat_number'] = array('type' => self::TYPE_STRING, 'validate' => 'isVat');
        parent::__construct($id_address, $id_lang);
    }
}