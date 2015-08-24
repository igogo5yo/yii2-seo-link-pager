<?php
namespace igogo5yo\seolinkpager;

use yii\widgets\LinkPager;


use Yii;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;


class SeoLinkPager extends LinkPager
{
    /**
     * @var array the HTML attributes for previous link.
     */
    public $prevOptions = ['rel' => 'prev'];

    /**
     * @var array the HTML attributes for next link.
     */
    public $nextOptions = ['rel' => 'next'];

    protected function renderPageButton($label, $page, $class, $disabled, $active)
    {
        $options = ['class' => $class === '' ? null : $class];
        if ($active) {
            Html::addCssClass($options, $this->activePageCssClass);
        }
        if ($disabled) {
            Html::addCssClass($options, $this->disabledPageCssClass);
            return Html::tag('li', Html::tag('span', $label), $options);
        }
        $linkOptions = $this->linkOptions;
        $linkOptions['data-page'] = $page;

        $currentPage = $this->pagination->getPage();
        if ($class == $this->prevPageCssClass || (int)$label == $currentPage) {
            $linkOptions = ArrayHelper::merge($linkOptions, $this->prevOptions);
        } elseif ($class == $this->nextPageCssClass || (int)$label == ($currentPage + 2)) {
            $linkOptions = ArrayHelper::merge($linkOptions, $this->nextOptions);
        }

        return Html::tag('li', Html::a($label, $this->pagination->createUrl($page), $linkOptions), $options);
    }
}
