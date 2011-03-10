<?php

/**
 * @package commands
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
