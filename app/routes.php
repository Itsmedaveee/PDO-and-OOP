<?php 

    
	$router->get('','PagesController@index');
	$router->get('dashboard','PagesController@index');
	$router->get('users','UsersController@index');
    $router->get('users/create', 'UsersController@create');
	$router->post('user','UsersController@store');
    $router->get('user/{id}/edit', 'UsersController@edit');
    $router->patch('user/{id}', 'UsersController@update');
    $router->delete('user/{id}', 'UsersController@destroy');
    $router->get('courses','CourseController@index');
    $router->get('courses/create','CourseController@create');
    $router->post('course','CourseController@store');
    $router->get('course/{id}/edit','CourseController@edit');
    $router->patch('course/{id}','CourseController@update');
    $router->delete('course/{id}','CourseController@destroy');
    $router->get('subjects','SubjectController@index');
    $router->get('create','SubjectController@create');
    $router->post('subject','SubjectController@store');
    $router->get('subject/{id}/edit','SubjectController@edit');
    $router->patch('subject/{id}','SubjectController@update');
    $router->delete('subject/{id}','SubjectController@destroy');
    $router->get('students','StudentsController@index');
    $router->get('students/create','StudentsController@create');
    $router->post('student','StudentsController@store');
    $router->get('student/{id}/edit','StudentsController@edit');
    $router->patch('student/{id}','StudentsController@update');
    $router->delete('student/{id}','StudentsController@destroy');

    $router->get('login','LoginController@index');
    $router->post('login','LoginController@login');

    $router->post('logout','LoginController@logout');
     
         

    