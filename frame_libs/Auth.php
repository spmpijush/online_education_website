<?php if($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class Auth {
	
	public static function checkLogin() 
	{
		Session::init();
		$logged = Session::get('id_user');
		
		if($logged == false) {
			Session::destroy($logged);
			header('Location: '. URL .'admin');
			exit;
		}
	}
}