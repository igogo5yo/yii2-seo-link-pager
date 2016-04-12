# yii2-seo-link-pager
=====================================
[![Latest Stable Version](https://poser.pugx.org/igogo5yo/yii2-seo-link-pager/v/stable)](https://packagist.org/packages/igogo5yo/yii2-seo-link-pager) [![Total Downloads](https://poser.pugx.org/igogo5yo/yii2-seo-link-pager/downloads)](https://packagist.org/packages/igogo5yo/yii2-seo-link-pager) [![License](https://poser.pugx.org/igogo5yo/yii2-seo-link-pager/license)](https://packagist.org/packages/igogo5yo/yii2-seo-link-pager) [![Dependency Status](https://www.versioneye.com/user/projects/55686ea96365320026021300/badge.svg?style=flat)](https://www.versioneye.com/user/projects/55686ea96365320026021300)

Yii2 link pager with SEO optimization

Please submit issue reports and pull requests to the main repository.
For license information check the [LICENSE](LICENSE.md)-file.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist igogo5yo/yii2-seo-link-pager
```

or add

```
"igogo5yo/yii2-seo-link-pager": ">=1.0"
```

to your `composer.json` file


Example
----

```php
...
'pager' => [
    'class' => igogo5yo\seolinkpager\SeoLinkPager::className(),
    'prevOptions' => ['rel' => 'prev'],
    'nextOptions' => ['rel' => 'next']
],
...
```
