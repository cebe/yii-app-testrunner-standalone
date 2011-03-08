<?php
/**
 * Created by JetBrains PhpStorm.
 * User: cbrandt
 * Date: 08.03.2011
 * Time: 20:44
 * To change this template use File | Settings | File Templates.
 */

class StandaloneTestRunnerCommand extends TestrunnerCommand
{


	public function run($includePath='', $path=null)
	{
		// basePath
		if (!is_null($path)) {
			if ($path{0} != '/') {
				$path = $_SERVER['PWD'] . '/' . $path;
			}
			Yii::app()->testCollector->basePath = $path;
		}
		$this->p(" - base Path is '" . Yii::app()->testCollector->basePath . "'\n", 2);

		$this->handleIncludePath($includePath);

	}

}
