<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class cv extends Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->view->pageTitle = "Resume";
		$this->view->css = array('views/cv/index.css');
		$this->view->js = array('module/cv/index.js');
		// $this->view->getcvPageDate = $this->model->getcvPageDate();
		// $this->view->getPersonalInfoPageDate = $this->model->getPersonalInfoPageDate();
		// $this->view->getSkilsDate = $this->model->getSkilsDate();
		// $this->view->getGalleryDate = $this->model->getGalleryDate();
		// $this->view->getEducationDate = $this->model->getEducationDate();
		// $this->view->getWorkExperienceDate = $this->model->getWorkExperienceDate();
		$this->view->render('cv', 'index');
	}
}
