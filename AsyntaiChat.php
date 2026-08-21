<?php
/**
 * Asyntai chat widget for Matomo Tag Manager.
 *
 * @link https://asyntai.com
 * @license https://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\AsyntaiChat;

/**
 * The plugin itself holds no logic.
 *
 * Everything it does lives in Template/Tag, which Matomo Tag Manager reads by
 * itself once the plugin is activated. There is no report, no tracker change
 * and no database table, so there is nothing to install or uninstall.
 */
class AsyntaiChat extends \Piwik\Plugin
{
}
