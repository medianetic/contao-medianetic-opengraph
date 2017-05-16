<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @package   OpenGraph
 * @author    Nick Weschkalnies
 * @license   GNU/LGPL
 * @copyright Nick Weschkalnies
 */

$GLOBALS['TL_HOOKS']['parseFrontendTemplate'][] = array('OpenGraph', 'addOpenGraphTags');
