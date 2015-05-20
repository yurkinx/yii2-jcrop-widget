<?php
namespace raoul2000\jcrop;

use yii\web\AssetBundle;

/**
 *
 * @author Raoul <raoul.boulard@gmail.com>
 */
class JCropAsset extends AssetBundle
{
    public $sourcePath = '@bower/jcrop';

	public $css = [
		'css/jquery.Jcrop.css'
	];

	public $js = [
		'js/jquery.Jcrop.js'
	];

	public $depends = [
		'yii\web\JqueryAsset'
	];
}
