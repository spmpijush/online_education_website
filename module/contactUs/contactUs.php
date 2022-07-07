<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class contactUs extends Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->view->pageTitle = "Contact us";
		$this->view->css = array('views/contactUs/index.css');
		$this->view->js = array('views/contactUs/index.js');
		$this->view->render('contactUs', 'index');
	}

	public function submitQuery()
	{
		echo json_encode($this->model->submitQuery($_POST));
	}
}
