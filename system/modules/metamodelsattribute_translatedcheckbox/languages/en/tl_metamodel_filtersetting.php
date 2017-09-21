<?php

/**
 * This file is part of MetaModels/attribute_translatedcheckbox.
 *
 * (c) 2012-2016 The MetaModels team.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    MetaModels
 * @subpackage AttributeTranslatedCheckbox
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @copyright  2012-2016 The MetaModels team.
 * @license    https://github.com/MetaModels/attribute_translatedcheckbox/blob/master/LICENSE LGPL-3.0
 * @filesource
 */

$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['check_ignorepublished'][0] = 'Allow parameter override';
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['check_ignorepublished'][1] =
    'If you check this, filter parameters may override this setting.';
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['check_allowpreview'][0]    = 'Ignore filter in preview mode';
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['check_allowpreview'][1]    =
    'If you check this, this filter will not get applied when an user is in "Front end preview" and has the option ' .
    '"show unpublished items" active.';

$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['typenames']['translatedcheckbox_published'] =
    'Translated published state';
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['typedesc']['translatedcheckbox_published']  =
    '%s <strong>%s</strong> %s <br /> on attribute <em>%s</em>';
