<?php 

namespace Controller;

use Lib\ViewModel\ViewModel;
use Model\UserModel;

class UserController
{
	private $viewModel;
	private $userModel;

	public function __construct()
	{
		$this->viewModel = new ViewModel();
		$this->userModel = new UserModel();
	}

	public function index()
	{
		LoginController::isLogged();
		$users = $this->userModel->all();
		$this->viewModel->render('user/index',['users' => $users]);
	}

	public function new()
	{
		LoginController::isLogged();
		$this->viewModel->render('user/new');
	}

	public function edit($id)
	{	
		LoginController::isLogged();
		$user = $this->userModel->findOne($id);
		$this->viewModel->render('user/edit',['user'=>$user]);
	}

	public function create()
	{
		LoginController::isLogged();
		$this->userModel->create($_POST);
		header('location:?r=user');
	}

	public function update()
	{
		LoginController::isLogged();
		$this->userModel->edit($_POST);
		header('location:?r=user');
	}

	public function delete()
	{
		LoginController::isLogged();
		$this->userModel->delete($_POST['id']);
		header('location:?r=user');	
	}
}