<?php

/**
 * This file is part of MetaModels/attribute_checkbox.
 *
 * (c) 2012-2016 The MetaModels team.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    MetaModels
 * @subpackage AttributeCheckbox
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author     Andreas Isaak <info@andreas-isaak.de>
 * @author     David Maack <maack@men-at-work.de>
 * @author     Stefan Heimes <stefan_heimes@hotmail.com>
 * @copyright  2012-2016 The MetaModels team.
 * @license    https://github.com/MetaModels/attribute_checkbox/blob/master/LICENSE LGPL-3.0
 * @filesource
 */

$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['metapalettes']['checkbox_published extends _attribute_']['+config'] =
    array
    (
        'check_ignorepublished',
        'check_allowpreview'
    );

$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['fields']['check_ignorepublished'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['check_ignorepublished'],
    'exclude'   => true,
    'inputType' => 'checkbox',
    'eval'      => array
    (
        'alwaysSave' => true,
        'tl_class'   => 'w50 m12',
    ),
);

$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['fields']['check_allowpreview'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['check_allowpreview'],
    'exclude'   => true,
    'inputType' => 'checkbox',
    'eval'      => array
    (
        'alwaysSave' => true,
        'tl_class'   => 'w50 m12',
    ),
);
