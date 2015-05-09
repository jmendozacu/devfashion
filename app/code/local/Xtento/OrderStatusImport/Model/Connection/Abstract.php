<?php

/**
 * Product:       Xtento_OrderStatusImport (1.3.9)
 * ID:            5WpJHYT/KUnHtZhVZ4u0CQHzafHDF/hDx1bROha0mYM=
 * Packaged:      2015-04-02T20:38:40+00:00
 * Last Modified: 2012-11-20T13:02:01+01:00
 * File:          app/code/local/Xtento/OrderStatusImport/Model/Connection/Abstract.php
 * Copyright:     Copyright (c) 2015 XTENTO GmbH & Co. KG <info@xtento.com> / All rights reserved.
 */

abstract class Xtento_OrderStatusImport_Model_Connection_Abstract extends Varien_Object
{
    protected $_connection;

    public function preRun() {
        Mage::getModel('orderstatusimport/connection_custom')->preRun($this);
    }

    public function afterRun($files) {
        Mage::getModel('orderstatusimport/connection_custom')->afterRun($this, $files);
    }
}