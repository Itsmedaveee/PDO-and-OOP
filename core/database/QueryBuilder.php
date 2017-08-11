<?php 

use Core\Flash;


class QueryBuilder
{
	public $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function fetchAll($table)
	{
		$statement = $this->pdo->prepare("SELECT * FROM {$table}");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS);
	}

	public function insert($table,$parameters)
	{
		$sql = sprintf(

            'insert into %s (%s) values (%s)',$table,
            implode(',', array_keys($parameters)),
            ':' . implode(', :' , array_keys($parameters))

			);
		try
		{
			$statement = $this->pdo->prepare($sql);
			$statement->execute($parameters);
		}catch(Exception $e)
		{
			die('Whoops! Something went wrong!');
		}
	}

	public function edit($table,$id)
	{
		$statement = $this->pdo->prepare("SELECT * FROM {$table} WHERE id = :id LIMIT 1");
		$statement->execute(['id'=> $id]);
		return $statement->fetch(PDO::FETCH_OBJ);
	}

	public function update($table,$parameters,$allowed,$id)
	{
		$data = $parameters;        
        $values = [];
        $set = "";
        foreach($allowed as $field){
        	if (isset($data[$field])){
        		$set.="`".str_replace("`", "``", $field)."`". "=:$field, ";
        		$values[$field] = $data[$field];
        	}
        }
           $set = substr($set, 0, -2);

		try{            
            $statement = $this->pdo->prepare("UPDATE {$table} SET {$set} WHERE id = {$id}");
            $statement->execute($values);
		}catch(Exception $e){               
               die('Whoops something went wrong');
		}         
	}
	public function destroy($table,$id)
	{
        $statement = $this->pdo->prepare("DELETE FROM {$table} WHERE id = :id");
        $statement->execute(['id' => $id]);
        $statement->rowCount();
	}
	public function login($username,$password)
	{
		/*$statement = $this->pdo->prepare("SELECT * FROM users WHERE username = :username");
		$statement->execute(['username' => $username]);
		$statement->fetch(PDO::FETCH_OBJ);*/

		try {
			$statement = $this->pdo->prepare("SELECT * FROM users WHERE username = :username");
			$statement->execute(['username' => $username]);
			$row = $statement->fetch(PDO::FETCH_ASSOC);

	         if($statement->rowCount() > 0) {
	          	if(password_verify($password, $row['password'])) {
	          		$_SESSION['user_id'] = $row['id'];
	          		$_SESSION['name'] = $row['name'];
	          		$_SESSION['usertype'] = $row['usertype'];
	          	   	
	          	   	return redirect('dashboard');
	          	} else {
	          		Flash::message('danger', 'Not valid');

	          		return redirect('login');
	          	}
	         } else {
	         	Flash::message('danger', 'username or passowrd doesnt exist');

	          	return redirect('login');
	         }
		 } catch(PDOException $e) {
		 	echo $e->getMessage();
		 }
	}

    public function studentsWithCourse() {
		$statement = $this->pdo->prepare("SELECT students.*, courses.title FROM students LEFT JOIN courses ON students.course_id WHERE courses.id = students.course_id");
		$statement->execute();
		return $statement->fetchAll();
	}
}