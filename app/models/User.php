<?php 

namespace App\Models;

class User 
{
	public static function isLoggged()
	{
		if(empty($_SESSION['user_id']))
        {
          return redirect('login');
        }
	}
    /*public $name;
    public $username;
    public $password;

    public function __construct($name,$usernme,$password)
    {
    	$this->name = $name;
    	$this->username = $username;
    	$this->password = $password;
    }*/
}