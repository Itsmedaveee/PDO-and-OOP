<?php require __DIR__ .    '/../partials/header.php'; ?>



<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Dave Del Rosario</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/dashboard">Home</a></li>
      <li><a href="students/create">Create</a></li>
    
    </ul>
  </div>
</nav>






<div class="container">
    <div class="row">
        <?php require __DIR__ .    '/../partials/sidebar.php'; ?>

        <div class="col-md-8">  
        
              
                
               


    <div class="row">
        <div class="col-md-12">

 <div class="panel panel-warning">
      <div class="panel-heading" style="background-color:#EEE8AA">Students Lists</div>
      <div class="panel-body"> 
    
<?php require __DIR__ .    '/../partials/messages.php'; ?>

    <table class="table table-bordered"  id="example1" >
    <thead >
      <tr>
        <th ><strong>ID</strong></th>
        <th><strong>Student No</strong></th>
        <th><strong>First Name</strong></th>
        <th><strong>Last Name</strong></th>
        <th><strong>Course</strong></th>
        <th><strong>Action</strong></th>

    </thead>
    <tbody>
    <?php foreach($students as $student):?>
      <tr>
        <td><?= $student['id'];?></td>
        <td><?= $student['stud_no'];?></td>
        <td><?= $student['fname'];?></td>  
        <td><?= $student['lname'];?></td>
        <td><?= $student['title'];?></td>
        <td>
 
        <form class="form-group" method="post" action="student/<?= $student['id'];?>">
        <input type="hidden" name="_method" value="DELETE">
        <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-delete"></i>Delete</button>
        <a class="btn btn-primary btn-xs" href="student/<?= $student['id']; ?>/edit"><i class="fa fa-edit"></i>Edit</a>
        <!-- <a class="btn btn-warning btn-xs" href="user/"><i class="fa fa-show"></i>Show</a> -->
        </form>
      </tr>
    <?php endforeach;?>
    </tbody>
    </table>
      </div>
    


<?php require __DIR__ .    '/../partials/footer.php'; ?>