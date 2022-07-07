<?php if($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class pages extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index($params = "") {
		$this->view->page = $this->model->page($params);
		$this->view->pageTitle = $this->view->page['page_title'];
		$this->view->render('pages', 'index');
	}
}