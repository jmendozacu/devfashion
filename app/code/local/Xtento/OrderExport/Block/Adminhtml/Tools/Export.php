<?php

/**
 * Product:       Xtento_OrderExport (1.7.5)
 * ID:            5WpJHYT/KUnHtZhVZ4u0CQHzafHDF/hDx1bROha0mYM=
 * Packaged:      2015-04-02T20:38:40+00:00
 * Last Modified: 2013-02-09T23:40:23+01:00
 * File:          app/code/local/Xtento/OrderExport/Block/Adminhtml/Tools/Export.php
 * Copyright:     Copyright (c) 2015 XTENTO GmbH & Co. KG <info@xtento.com> / All rights reserved.
 */

class Xtento_OrderExport_Block_Adminhtml_Tools_Export extends Mage_Adminhtml_Block_Template
{
    public function getProfiles()
    {
        $profileCollection = Mage::getModel('xtento_orderexport/profile')->getCollection();
        $profileCollection->getSelect()->order('name ASC');
        return $profileCollection;
    }

    public function getDestinations()
    {
        $destinationCollection = Mage::getModel('xtento_orderexport/destination')->getCollection();
        $destinationCollection->getSelect()->order('name ASC');
        return $destinationCollection;
    }
}