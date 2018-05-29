<?php 

namespace Lib\ViewModel;

class ViewModel
{
	private $header;
	private $footer;
	private $basedir;

	public function __construct()
	{
		global $config;
		$this->header = $config['basedir'].'/app/View/layout/header.php';
		$this->footer = $config['basedir'].'/app/View/layout/footer.php';
		$this->basedir = $config['basedir'];
	}

	public function render(string $view, array $data = null)
	{
		$container = $this->basedir.'/app/View/'.$view.'.php';
		$this->loadPage($container,$data);
	}

	private function loadPage(string $container,array $data = null)
	{
		if (is_array($data)) {
			extract($data);
			unset($data);
		}
		include $this->header;
		include $container;
		include $this->footer;
	}
}