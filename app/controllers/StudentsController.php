<?php 


namespace App\Controllers;
use App\Core\App;
use Core\Flash;
use App\Models\User;

class StudentsController
{
	public function __construct()
    {
      return User::isLoggged();
    }
	public function index()
	{
		$students = App::get('database')->studentsWithCourse();

		return view('students.index',['students' => $students]);
	}
	public function create()
	{
		$courses = App::get('database')->fetchAll('courses');
		return view('students.create',['courses' => $courses]);
	}
	public function store()
	{
		App::get('database')->insert('students',[
                
                'stud_no' => $_POST ['stud_no'],
                'fname' => $_POST ['fname'],
                'lname' => $_POST ['lname'],
                'course_id' => $_POST['course'],
			]);
        Flash::message('success','Students successfuly created');
		redirect('students');
	}
	public function edit($id)
	{
		$student = App::get('database')->edit('students',$id);

		return view('students.edit',['student' => $student]);
	}

	public function update($id)
	{
		$allowed = ['stud_no','fname','lname'];
		App::get('database')->update('students',[
                  
                  'stud_no' => $_POST ['stud_no'],
                  'fname' => $_POST ['fname'],
                  'lname' => $_POST ['lname'],

			],$allowed,$id);
        Flash::message('success','Students successfuly updated');
		return redirect('/students');
       
	}
	public function destroy($id)
	{
		App::get('database')->destroy('students',$id);
		Flash::message('success','Students successfuly deleted');
		return redirect('/students');
	}

}