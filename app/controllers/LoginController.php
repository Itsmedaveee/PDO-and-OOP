<?php 

namespace App\Controllers;
use App\Core\App;

class LoginController
{
	public function index()
	{
	  return view('login.index');
	}
	public function login()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		// User Registration page
		// $new_password = password_hash($password, PASSWORD_DEFAULT);
		/*App::get('database')->insert('users',[
			'name'     => 'Test',                 
			'username' => $_POST['username'],
			'password' => $new_password,
			'usertype' => 'Admin'
		]);*/

		App::get('database')->login($username,$password);

		/*if ($statement->rowCount() > 0) {
         	return 'test';
         } else {
         	echo 'failed';
         }*/
		// var_dump($test);

	}

	public function logout()
	{
		session_destroy();
		unset($_SESSION['user_id']);
		
		return redirect('login');
	}
}

