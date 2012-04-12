<?php

class WpFallbackController extends Controller
{
	public function actionIndex()
	{
		$this->layout = false;
		$this->render('index');
	}
}