SlugWidget
==========
Widget for autogeneration slug

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist heggi/yii2-slugwidget "*"
```

or add

```
"heggi/yii2-slugwidget": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'slug')->widget(\heggi\slugwidget\SlugWidget::className(), ['title' => 'title']) ?>
```