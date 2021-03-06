<?php

/**
 * @defgroup plugins_themes_default_manuscript Default theme plugin
 */

/**
 * @file plugins/themes/defaultManuscript/index.php
 *
 * Copyright (c) 2014-2018 Simon Fraser University Library
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_themes_defaultManuscript
 * @brief Wrapper for default manuscript theme plugin.
 *
 */

require_once('DefaultManuscriptChildThemePlugin.inc.php');

return new DefaultManuscriptChildThemePlugin();

?>
