<?php

/**
 * Product:       Xtento_OrderExport (1.7.5)
 * ID:            5WpJHYT/KUnHtZhVZ4u0CQHzafHDF/hDx1bROha0mYM=
 * Packaged:      2015-04-02T20:38:40+00:00
 * Last Modified: 2014-06-15T14:17:11+02:00
 * File:          app/code/local/Xtento/OrderExport/Helper/Entity.php
 * Copyright:     Copyright (c) 2015 XTENTO GmbH & Co. KG <info@xtento.com> / All rights reserved.
 */

class Xtento_OrderExport_Helper_Entity extends Mage_Core_Helper_Abstract
{
    public function getPluralEntityName($entity) {
        return $entity;
    }

    public function getEntityName($entity) {
        $entities = Mage::getModel('xtento_orderexport/export')->getEntities();
        if (isset($entities[$entity])) {
            return rtrim($entities[$entity], 's');
        }
        return ucfirst($entity);
    }
}