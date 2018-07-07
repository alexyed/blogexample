<?php

namespace app\controllers\admin;

use app\controllers\baseController;

class IndexController extends baseController {

	public function getIndex() {

		return $this->render('admin/index.twig');
	}
}