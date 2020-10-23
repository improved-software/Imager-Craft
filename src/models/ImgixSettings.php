<?php

namespace aelvan\imager\models;

use craft\base\Model;

class ImgixSettings extends Model
{
    public $domains = [];
    public $useHttps = true;
    public $signKey = '';
    public $sourceIsWebProxy = false;
    public $useCloudSourcePath = true;
    public $addPath = null;
    public $shardStrategy = 'cycle';
    public $getExternalImageDimensions = true;
    public $defaultParams = [];
    public $excludeFromPurge = false;
    public $apiKey = '';
    // The folder path removed from the URL by the external source
    public $removePath = null;

    public function __construct($config = [])
    {
        if (!empty($config)) {
            \Yii::configure($this, $config);
        }
    }
}
