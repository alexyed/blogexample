<?php

namespace app\controllers\admin;

use app\controllers\BaseController;
use app\models\User;

class IndexController extends BaseController {

	public function getIndex() {

		return $this->render('admin/index.twig');
	}
}