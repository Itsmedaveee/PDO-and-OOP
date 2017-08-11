<?php 

namespace App\Controllers;

use App\Core\App;
use App\Models\User;


class PagesController
{
	public function __construct()
    {
      return User::isLoggged();
    }
	public function index()
	{
		return view('dashboard.index');
	}
}