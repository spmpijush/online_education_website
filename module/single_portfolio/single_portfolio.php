<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class single_portfolio extends Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->view->pageTitle = "PORTFOLIO";
		$this->view->css = array('views/single_portfolio/index.css');
		$this->view->js = array('views/single_portfolio/index.js');
		$this->view->render('single_portfolio', 'index');
	}

	public function submitQuery()
	{
		echo json_encode($this->model->submitQuery($_POST));
	}
}
