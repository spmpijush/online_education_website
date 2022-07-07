<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class singleBlog extends Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->view->pageTitle = "singleBlog";
		$this->view->css = array('views/singleBlog/index.css');
		$this->view->js = array('views/singleBlog/index.js');
		$this->view->getBlogDate = $this->model->getBlogDate($_GET['id']);
		$this->view->getBlogCommentData = $this->model->getBlogCommentData();
		$this->view->getBlogCommentCount = $this->model->getBlogCommentCount();

		$this->view->render('singleBlog', 'index');
	}
	public function save()
	{
		echo json_encode($this->model->save());
	}
}
