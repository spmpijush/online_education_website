<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class service extends Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->view->pageTitle = "service";
		// $this->view->css = array('views/service/index.css');        
		// $this->view->js = array('module/service/ui/index.js');
		// $this->view->getNotice = $this->model->getNotice();
		// $this->view->getSliderImages = $this->model->getSliderImages();
		// $this->view->getPageData = $this->model->getPageData();
		$this->view->render('service', 'index');
	}
}
