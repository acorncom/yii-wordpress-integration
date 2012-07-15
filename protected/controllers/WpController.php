<?php
class WpController extends Controller
{
	public function actionIndex()
	{
		$this->layout = false;
		try {
			$this->render('index');
			Yii::app()->end();
		}
		// if we throw an exception in a Wordpress functions.php on a 404 header, we could use
		// our main error handler to handle the error.  handling logging here as desired and then
		// throw the exception on up the chain and let Yii handle things from here
		catch (Exception $e) {
			throw $e;
		}
	}
}