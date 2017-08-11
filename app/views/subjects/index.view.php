<?php require __DIR__ .    '/../partials/header.php'; ?>



<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Dave Del Rosario</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/dashboard">Home</a></li>
      <li><a href="/create">Create</a></li>
    
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
      <div class="panel-heading" style="background-color:#EEE8AA">Subject Lists</div>
      <div class="panel-body"> 
    
<?php require __DIR__ .    '/../partials/messages.php'; ?>

    <table class="table table-bordered"  id="example1" >
    <thead >
      <tr>
        <th ><strong>ID</strong></th>
        <th><strong>Code</strong></th>
        <th><strong>Title</strong></th>
        <th><strong>Year Level</strong></th>
        <th><strong>Action</strong></th>

    </thead>
    <tbody>
    <?php foreach($subjects as $subject):?>
      <tr>
        <td><?= $subject->id;?></td>
        <td><?= $subject->code;?></td>
        <td><?= $subject->title;?></td>  
        <td><?= $subject->year;?></td>
        <td>
 
        <form class="form-group" method="post" action="subject/<?= $subject->id;?>">
        <input type="hidden" name="_method" value="DELETE">
        <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-delete"></i>Delete</button>
        <a class="btn btn-primary btn-xs" href="subject/<?= $subject->id;?>/edit"><i class="fa fa-edit"></i>Edit</a>
        <!-- <a class="btn btn-warning btn-xs" href="user/"><i class="fa fa-show"></i>Show</a> -->
        </form>
      </tr>
    <?php endforeach;?>
    </tbody>
    </table>
      </div>
    


<?php require __DIR__ .    '/../partials/footer.php'; ?>