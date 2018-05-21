<?php 

namespace Controller;

use Lib\ViewModel\ViewModel;
use Model\UserModel;

class LoginController
{
	private $viewModel;
	private $userModel;
	
	public function __construct(){
		$this->viewModel = new ViewModel();
		$this->userModel = new UserModel();
	}

	public function index()
	{
		$this->viewModel->render('login/login');
	}

	public static function isLogged()
	{
		if (!$_SESSION['logged']) {
			header('location:?r=login');
		}
	}
	public static function userLogged()
	{
		return $_SESSION['user'];
	}

	public function login()
	{
		$user = $this->userModel->login($_POST);

		if ($user) {
			$_SESSION['logged'] = true;
			$_SESSION['user'] = $user;
			header('location: ?r=post');
		}
	}

	public function logout()
	{
		session_destroy();
		header('location: ?r=login');
	}
}