<?php
namespace app\components\widgets;

use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;

class SideNav extends \kartik\sidenav\SideNav
{
    private static $_validTypes = [
        self::TYPE_DEFAULT,
        self::TYPE_SECONDARY,
        self::TYPE_PRIMARY,
        self::TYPE_INFO,
        self::TYPE_SUCCESS,
        self::TYPE_DANGER,
        self::TYPE_WARNING,
    ];

    /**
     * @throws \Exception
     */
    public function run()
    {
        $heading = '';
        $isBs4 = $this->isBs4();
        $type = in_array($this->type, self::$_validTypes) ? $this->type : self::TYPE_DEFAULT;
        // $color = constant('self::BS_PANEL_' . strtoupper($type));
        $color = constant('self::BS_PANEL');
        $colorCss = static::getCssClass($color);
        if (!empty($this->heading)) {
            $css = [static::getCssClass(self::BS_PANEL_HEADING)];
            if ($isBs4) {
                $css = array_merge($css, explode(' ', $colorCss));
            }
            Html::addCssClass($this->headingOptions, $css);
            $title = $isBs4 ? $this->heading : Html::tag('h3', $this->heading,
                ['class' => static::getCssClass(self::BS_PANEL_TITLE)]);
            $heading = Html::tag('div', $title, $this->headingOptions);
        }
        $body = Html::tag('div', $this->renderMenu(), ['class' => 'table m-0']);
        $css = $isBs4 ? "border-{$type}" : $colorCss;
        Html::addCssClass($this->containerOptions, [static::getCssClass(self::BS_PANEL), $css]);
        echo Html::tag('div', $heading . $body, $this->containerOptions);
    }

    /**
     * Renders the content of a side navigation menu item.
     *
     * @param array $item the menu item to be rendered. Please refer to [[items]] to see what data might be in the item.
     * @return string the rendering result
     * @throws InvalidConfigException
     */
    protected function renderItem($item)
    {
        $this->validateItems($item);
        $isBs4 = $this->isBs4();
        $template = ArrayHelper::getValue($item, 'template', $this->linkTemplate);
        $template = static::setCssClass($template,
            [empty($item['active']) ? $this->addlCssClass : 'active']);
        $url = Url::to(ArrayHelper::getValue($item, 'url', '#'));
        if (empty($item['top'])) {
            if (empty($item['items'])) {
                $template = str_replace('{icon}', $this->indItem . '{icon}', $template);
            } else {
                $template = static::setCssClass($template, 'kv-toggle');
                $openOptions = ($item['active']) ? ['class' => 'opened'] : [
                    'class' => 'opened',
                    'style' => 'display:none',
                ];
                $closeOptions = ($item['active']) ? [
                    'class' => 'closed',
                    'style' => 'display:none',
                ] : ['class' => 'closed'];
                $indicator = Html::tag('span', $this->indMenuOpen, $openOptions) . Html::tag('span',
                        $this->indMenuClose, $closeOptions);
                $template = str_replace('{icon}', $indicator . '{icon}', $template);
            }
        }
        $icon = empty($item['icon']) ? '' : '<span class="' . $this->iconPrefix . $item['icon'] . '"></span> &nbsp;';
        unset($item['icon'], $item['top']);
        return strtr($template, [
            '{url}' => $url,
            '{label}' => $item['label'],
            '{icon}' => $icon,
        ]);
    }
}