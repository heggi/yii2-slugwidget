<?php

namespace heggi\slugwidget;
use yii\widgets\InputWidget;
use yii\bootstrap\Html;

class SlugWidget extends InputWidget {
    
    public $title = '';

    public function run() {

        $title_id = Html::getInputId($this->model, $this->title);
        $slug_id = Html::getInputId($this->model, $this->attribute);

        echo '<div class="input-group">';
        echo Html::activeInput('text', $this->model, $this->attribute, \yii\helpers\ArrayHelper::merge($this->options, ['readonly' => 'readonly', 'class' => 'form-control']));
        echo '<span class="input-group-btn">
                <button class="btn btn-raised unlockslug" type="button">Изменить</button>
            </span>
        </div>';

        $view = $this->getView();
        $view->registerAssetBundle(SpeakingUrlAsset::className());
        $view->registerJs(<<<JS
$('input#{$title_id}').blur(function(){
    var slug = $('input#{$slug_id}');
    if(slug.val().length == 0) {
        slug.val( getSlug( $('input#{$title_id}').val() ) );
    }
});
$('.unlockslug').click(function(){
    $('input#{$slug_id}').prop('readonly', false);
});
JS
, $view::POS_READY);
    }
}