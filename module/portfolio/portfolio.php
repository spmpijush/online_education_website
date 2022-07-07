<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class portfolio extends Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->view->pageTitle = "PORTFOLIO";
		$this->view->css = array('views/portfolio/index.css');
		$this->view->js = array('views/portfolio/index.js');
		$this->view->getPortfolioDate = $this->model->getPortfolioDate();
		$this->view->render('portfolio', 'index');
	}

	public function submitQuery()
	{
		echo json_encode($this->model->submitQuery($_POST));
	}
}
