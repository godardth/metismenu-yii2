<?php
/**
 * MetisMenuAsset.php
 * @author Theophile Godard
 */

namespace godardth\yii\metismenu;

/**
 * Class AssetBundle
 * @package rmrevin\yii\fontawesome
 */
class MetisMenuAsset extends \yii\web\AssetBundle
{

    /**
     * @inherit
     */
    public $sourcePath = '@vendor/godardth/yii2-metismenu/metisMenu/dist';

    /**
     * @inherit
     */
    public $css = [
        'metismenu.min.css',
    ];
}