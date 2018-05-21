<?php 

namespace Controller;

use Lib\ViewModel\ViewModel;

class HomeController
{
	private $viewModel;
	
	public function __construct(){
		$this->viewModel = new ViewModel();
	}
	public function index()
	{
		$this->viewModel->render('home/index');
	}
}