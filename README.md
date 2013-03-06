This based off of what I wrote up here:
http://www.yiiframework.com/wiki/322/integrating-wordpress-and-yii-still-another-approach-using-yii-as-the-router-controller/

1. Pull down the repo
2. Do a git submodule init / update
3. Set your root directory to the Wordpress folder
4. Do a config / setup of Wordpress
	- make sure specify an active theme (i've had to toggle between 2011 and 2012 to make sure things worked properly)
	- make sure the General Settings for WordPress are setup as follows:
		WordPress Address (URL): http://<domain info>/wordpress
		Site Address (URL): http://<domain info>

5. Setup a config/mode.php file with DEVELOPMENT in it
6. Make the protected/runtime folder and data/assets folders (if not available)
	- and make sure runtime is server writeable

7. Should now be able to load your Yii/Wordpress app at your root directory folder