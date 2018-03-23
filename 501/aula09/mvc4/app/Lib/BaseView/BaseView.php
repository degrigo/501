<?php

namespace Lib\BaseView;

class BaseView
{
	private $header = BASEDIR . 'app/View/layout/_header.php';
	private $footer = BASEDIR . 'app/View/layout/_footer.php';

	private function render(string $view, $data = null)
	{
		$container = BASEDIR . 'app/View/' . $view . '.php';
		$this->loadPage($container, $data);
	}

	private function loadPage(string $containe, $data)
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