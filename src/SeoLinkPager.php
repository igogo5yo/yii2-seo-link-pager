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
        $options = $this->linkContainerOptions;
        $linkWrapTag = ArrayHelper::remove($options, 'tag', 'li');
        Html::addCssClass($options, empty($class) ? $this->pageCssClass : $class);

        if ($active) {
            Html::addCssClass($options, $this->activePageCssClass);
        }
        if ($disabled) {
            Html::addCssClass($options, $this->disabledPageCssClass);
            $disabledItemOptions = $this->disabledListItemSubTagOptions;
            $tag = ArrayHelper::remove($disabledItemOptions, 'tag', 'span');

            return Html::tag($linkWrapTag, Html::tag($tag, $label, $disabledItemOptions), $options);
        }
        $linkOptions = $this->linkOptions;
        $linkOptions['data-page'] = $page;

        $currentPage = $this->pagination->getPage();
        if ($class == $this->prevPageCssClass || (int)$label == $currentPage) {
            $linkOptions = ArrayHelper::merge($linkOptions, $this->prevOptions);
        }
        if ($class == $this->nextPageCssClass || (int)$label == ($currentPage + 2)) {
            $linkOptions = ArrayHelper::merge($linkOptions, $this->nextOptions);
        }

        return Html::tag($linkWrapTag, Html::a($label, $this->pagination->createUrl($page), $linkOptions), $options);
    }
}
