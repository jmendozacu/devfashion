<?php

/**
 * Product:       Xtento_OrderStatusImport (1.3.9)
 * ID:            5WpJHYT/KUnHtZhVZ4u0CQHzafHDF/hDx1bROha0mYM=
 * Packaged:      2015-04-02T20:38:40+00:00
 * Last Modified: 2012-02-24T15:25:14+01:00
 * File:          app/code/local/Xtento/OrderStatusImport/Block/System/Config/Frontend/Mapping/Xml.php
 * Copyright:     Copyright (c) 2015 XTENTO GmbH & Co. KG <info@xtento.com> / All rights reserved.
 */

class Xtento_OrderStatusImport_Block_System_Config_Frontend_Mapping_Xml extends Xtento_OrderStatusImport_Block_System_Config_Frontend_Mapping_Abstract
{
    protected $MAPPING_ID = 'xml';
    protected $DATA_PATH = 'orderstatusimport/processor_xml/import_mapping';
    protected $MAPPING_MODEL = 'orderstatusimport/processor_mapping_fields';
    protected $VALUE_FIELD_NAME = 'XML Node (XPath)';
}
