<?php 

namespace App\Controllers;
use App\Core\App;
use Core\Flash;
use App\Models\User;

class SubjectController
{
	public function __construct()
    {
      return User::isLoggged();
    }
	public function index()
	{
		$subjects = App::get('database')->fetchAll('subjects');
		return view('subjects.index',['subjects' => $subjects]);
	}
	public function create()
	{
		return view('subjects.create');
	}
	public function store()
	{
		App::get('database')->insert('subjects',[
			     'code' => $_POST['code'],                 
                 'title' => $_POST['title'],
                 'year' => $_POST['year'],
			]);
        Flash::message('success', 'Subject created.');
		redirect('/subjects');
	}

	public function edit($id)
	{
		$subjects = App::get('database')->edit('subjects',$id);
		return view('subjects.edit',['subjects' => $subjects]);
	}

	public function update($id)
	{
		$allowed = [
		   'code',
		   'title',
		   'year'
		];
		$updated = App::get('database')->update('subjects',[

                 'code' => $_POST['code'],
                 'title' => $_POST['title'],
                 'year' => $_POST['year'],
			],$allowed,$id);
        Flash::message('success','Subject successfuly Updated');
		return redirect('/subjects');
	}
	public function destroy($id)
	{
		App::get('database')->destroy('subjects',$id);
		Flash::message('success','Subject successfuly deleted');
		return redirect('/subjects');
	}

}

