<?php 

namespace App\Controllers;
use App\Core\App;
use App\Models\Course;
use Core\Flash;
use App\Models\User;

class CourseController
{
	 public function __construct()
    {
      return User::isLoggged();
    }
	public function index()
	{
		$courses = App::get('database')->fetchAll('courses','Course');

		return view('course.index',['courses' => $courses]);
	}
	public function create()
	{
		return view('course.create');
	}
	public function store()
	{
		 App::get('database')->insert('courses',[
             
             'title' => $_POST['title'],
             'course' => $_POST['course'],

 			]);
        Flash::message('success','Courses successfuly created'); 
		redirect('courses');
	}
	public function edit($id)
	{
		$course = App::get('database')->edit('courses', $id);
		return view('course.edit',['course' => $course]);
	}
	public function update($id)
	{
		$allowed = ["title","course"];
		$updates = App::get('database')->update('courses',[
             
             'title' => $_POST['title'],
             'course' => $_POST['course'],
                    
			],$allowed,$id);
        Flash::message('success','Courses success updated');
		return redirect('/courses');
	}
	public function destroy($id)
	{
		App::get('database')->destroy('courses',$id);
		Flash::message('success','Courses successfuly deleted');
		return redirect('/courses');
	}
}

