<?php

namespace heggi\slugwidget;

class SpeakingUrlAsset extends \yii\web\AssetBundle {
    
    public $sourcePath = '@bower/speakingurl';
    
    public $js = [
        'lib/speakingurl.js'
    ];
    
    public $publishOptions = [
        'only' => ['speakingurl.js','speakingurl.min.js']
    ];
    
    public function init() {
        $this->js = [YII_ENV_DEV ?'lib/speakingurl.js':'speakingurl.min.js'];
        parent::init();
    }
}
