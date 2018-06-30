<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Luckyauth
{
	protected $conf;

	protected $models	= array('users','groups','users_groups','login_histories','login_attempts');

	public function __construct()
	{
		$this->conf = $this->config->item('auth');

		$this->_load_model();
	}

	/**
	 * __get
	 *
	 * Enables the use of CI super-global without having to define an extra variable.
	 *
	 * I can't remember where I first saw this, so thank you if you are the original author. -Militis
	 *
	 * @access	public
	 * @param	$var
	 * @return	mixed
	 */
	public function __get($var)
	{
		return get_instance()->$var;
	}

	public function register()
	{

	}

	public function login_dev()
	{

	}

	public function login()
	{

	}

	public function login_otp()
	{

	}

	protected function _load_model()
	{
		foreach ($this->models as $idxM => $model)
		{
			$this->load->model($model.'_model',$model);
		}
	}
}
