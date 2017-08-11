<?php 

namespace App\Controllers;

use App\Core\App;
use Core\Flash;
use App\Models\User;

class UsersController
{
    public function __construct()
    {
      return User::isLoggged();
    }
public function index()
{
    $data = App::get('database')->fetchAll('users','Users');
    return view('users.index',['data' => $data]);
}

public function store()
{
  // User Registration page
    $hash_password = password_hash($_POST ['password'], PASSWORD_DEFAULT);
    App::get('database')->insert('users',[
      'name'     => $_POST ['name'],                 
      'username' => $_POST['username'],
      'password' => $hash_password,
      'usertype' => $_POST ['usertype']
    ]);
    Flash::message('success', 'User created.');
    return redirect('users');  
}

public function create()
{

  return view('users.create');
}

public function edit($id)
{

   $data = App::get('database')->edit('users', $id); 
   return view('users.edit', ['data' => $data]);
  
}

public function update($id)
{
  
  $allowed = ["name", "username", "password", "usertype"];

  $hash_password = password_hash($_POST ['password'], PASSWORD_DEFAULT);
  
  $updated = App::get('database')->update('users', [
           'name' => $_POST ['name'],
           'username' => $_POST ['username'],
           'password' => $hash_password,
           'usertype' => $_POST ['usertype'],
  ],$allowed,$id);
   Flash::message('success', 'User Successfuly updated.');

  return redirect('/users');
}
public function destroy($id)
{

  App::get('database')->destroy('users',$id);
   Flash::message('success', 'User Successfuly deleted.');

  return redirect('/users');

}

/*public function show($id) 
{

return view('users.show', ['user' => $user]);

}*/

}