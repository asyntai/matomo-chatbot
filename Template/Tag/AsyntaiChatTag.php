<?php
/**
 * Asyntai chat widget tag.
 *
 * @link https://asyntai.com
 * @license https://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\AsyntaiChat\Template\Tag;

use Piwik\Settings\FieldConfig;
use Piwik\Validators\NotEmpty;
use Piwik\Plugins\TagManager\Template\Tag\BaseTag;

class AsyntaiChatTag extends BaseTag
{
    public function getCategory()
    {
        // BaseTag defines only ANALYTICS, CUSTOM, DEVELOPERS, ADS, EMAIL,
        // AFFILIATES, REMARKETING, SOCIAL and OTHERS. Any other name is an
        // undefined constant, and Tag Manager then refuses to list ANY tag.
        return self::CATEGORY_SOCIAL;
    }

    public function getIcon()
    {
        return 'plugins/AsyntaiChat/images/icon.png';
    }

    public function getParameters()
    {
        return array(
            $this->makeSetting('asyntaiId', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
                $field->title = 'Asyntai widget ID';
                $field->description = 'Copy it from Install in your Asyntai dashboard. '
                    . 'It is the value of data-asyntai-id in the snippet Asyntai gives you.';
                $field->uiControl = FieldConfig::UI_CONTROL_TEXT;
                $field->validators[] = new NotEmpty();
            }),
        );
    }
}
