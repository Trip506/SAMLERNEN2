<?php

/**
 * This file is part of MetaModels/attribute_translatedlongtext.
 *
 * (c) 2012-2016 The MetaModels team.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * @package     MetaModels
 * @subpackage  AttributeTranslatedLongtext
 * @author      Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author      Andreas Isaak <info@andreas-isaak.de>
 * @author      Christopher Boelter <christopher@boelter.eu>
 * @author      Stefan Heimes <stefan_heimes@hotmail.com>
 * @author      Sven Baumann <baumann.sv@gmail.com>
 * @copyright   2012-2016 The MetaModels team.
 * @license     https://github.com/MetaModels/attribute_translatedlongtext/blob/master/LICENSE LGPL-3.0
 * @filesource
 */

$GLOBALS['TL_DCA']['tl_metamodel_dcasetting']['metasubselectpalettes']['attr_id']['translatedlongtext'] = array
(
    'presentation' => array(
        'tl_class',
        'rte',
        'rows',
        'cols',
    ),
    'functions'    => array(
        'mandatory',
        'allowHtml',
        'preserveTags',
        'decodeEntities',
        'trailingSlash',
        'spaceToUnderscore',
    ),
    'overview'     => array(
        'filterable',
        'searchable'
    )
);
