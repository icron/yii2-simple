<?php
namespace oneui\widgets;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;

class Menu extends \yii\widgets\Menu
{
    public $options = [
        'class' => 'nav nav-pills nav-sub-header push',
    ];

    public $submenuTemplate = "\n<ul class=\"dropdown-menu\">\n{items}\n</ul>\n";

    public $submenuLink = '<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="{url}">{label} <span class="caret"></span></a>';

    /**
     * @param array $item
     * @return string
     */
    protected function renderItem($item)
    {
        $icon = ArrayHelper::remove($item, 'icon', '');
        if ($icon) {
            $icon = Html::tag('i', '', ['class' => $icon]) . ' ';
        }
        $linkTemplate = $this->linkTemplate;
        if (!empty($item['items'])) {
            $linkTemplate = $this->submenuLink;
        }
        if (isset($item['url'])) {
            $template = ArrayHelper::getValue($item, 'template', $linkTemplate);

            return strtr($template, [
                '{url}' => Html::encode(Url::to($item['url'])),
                '{label}' => $icon . $item['label'],
            ]);
        } else {
            $template = ArrayHelper::getValue($item, 'template', $this->labelTemplate);

            return strtr($template, [
                '{label}' => $icon . $item['label'],
            ]);
        }
    }

    protected function hasChildren()
    {

    }
}