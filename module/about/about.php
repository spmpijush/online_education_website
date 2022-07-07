<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class about extends Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->view->pageTitle = "about";
		$this->view->css = array('views/about/index.css');
		$this->view->js = array('module/about/index.js');
		$this->view->getAboutPageDate = $this->model->getAboutPageDate();
		$this->view->getPersonalInfoPageDate = $this->model->getPersonalInfoPageDate();
		$this->view->getSkilsDate = $this->model->getSkilsDate();
		$this->view->getGalleryDate = $this->model->getGalleryDate();
		$this->view->getEducationDate = $this->model->getEducationDate();
		$this->view->getWorkExperienceDate = $this->model->getWorkExperienceDate();
		$this->view->render('about', 'index');
	}
}
