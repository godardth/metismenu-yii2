<?php
/**
 * AssetBundle.php
 * @author Revin Roman http://phptime.ru
 */

namespace rmrevin\yii\fontawesome;

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