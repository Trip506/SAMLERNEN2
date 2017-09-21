<?php

/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 *
 * @package     MetaModels
 * @subpackage  AttributeDecimal
 * @author      Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author      Andreas Isaak <andy.jared@googlemail.com>
 * @author      Carolina M. Koehn <office@kikmedia.de>
 * @author      Cliff Parnitzky <github@cliff-parnitzky.de>
 * @author      Stefan Heimes <stefan_heimes@hotmail.com>
 * @copyright   The MetaModels team.
 * @license     LGPL.
 * @filesource
 */

$GLOBALS['TL_DCA']['tl_metamodel_dcasetting']['metasubselectpalettes']['attr_id']['decimal'] = array
(
    'presentation' => array
    (
        'tl_class',
    ),
    'functions'  => array
    (
        'mandatory',
    ),
    'overview' => array
    (
        'filterable',
        'searchable',
    )
);
