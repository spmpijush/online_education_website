<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class blog extends Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->view->pageTitle = "Blog";
		$this->view->css = array('views/blog/index.css');
		// $this->view->js = array('module/blog/ui/index.js');
		$this->view->getBlogDate = $this->model->getBlogDate();
		$this->view->getBlogCategoryDate = $this->model->getBlogCategoryDate();
		$this->view->getRecentBlogDate = $this->model->getRecentBlogDate(date('Y-m-d'));
		$this->view->render('blog', 'index');
	}
}
