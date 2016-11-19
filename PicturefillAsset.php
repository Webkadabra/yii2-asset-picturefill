<?php
namespace yii\assets\picturefill;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class PicturefillAsset
 * @package yii\assets\picturefill
 * @author sergii gamaiunov <hello@webkadabra.com>
 */
class PicturefillAsset extends AssetBundle
{
    public $jsOptions = [
        'async' => 'async',
    ];

    public $sourcePath = '@bower/picturefill/dist';

    public $js = ['picturefill.min.js'];

    /**
     * Registers this asset bundle with a view and element HTML5 shiv
     * @param View $view the view to be registered with
     * @return static the registered asset bundle instance
     */
    public static function register($view)
    {
        // Picture element HTML5 shiv
        $view->registerJs('document.createElement( "picture" );', View::POS_HEAD);
        return parent::register($view);
    }
}