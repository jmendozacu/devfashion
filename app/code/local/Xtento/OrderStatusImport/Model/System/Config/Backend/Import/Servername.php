<?php

/**
 * Product:       Xtento_OrderStatusImport (1.3.9)
 * ID:            5WpJHYT/KUnHtZhVZ4u0CQHzafHDF/hDx1bROha0mYM=
 * Packaged:      2015-04-02T20:38:40+00:00
 * Last Modified: 2011-12-30T22:20:05+01:00
 * File:          app/code/local/Xtento/OrderStatusImport/Model/System/Config/Backend/Import/Servername.php
 * Copyright:     Copyright (c) 2015 XTENTO GmbH & Co. KG <info@xtento.com> / All rights reserved.
 */

class Xtento_OrderStatusImport_Model_System_Config_Backend_Import_Servername extends Mage_Core_Model_Config_Data
{

    public function afterLoad()
    {
        $sName1 = Mage::getModel('orderstatusimport/system_config_backend_import_server')->getFirstName();
        $sName2 = Mage::getModel('orderstatusimport/system_config_backend_import_server')->getSecondName();
        if ($sName1 !== $sName2) {
            $this->setValue(sprintf('%s (Main: %s)', $sName1, $sName2));
        } else {
            $this->setValue(sprintf('%s', $sName1));
        }
    }

}
