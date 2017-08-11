    <?php require __DIR__ .    '/../partials/header.php'; ?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Dave Del Rosario</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/dashboard">Home</a></li>
      <li><a href="users/create">Create</a></li>
    
    </ul>
  </div>
</nav>

<div class="container">
    <div class="row">
        <?php require __DIR__ .    '/../partials/sidebar.php'; ?>

        <div class="col-md-8">  
            <div class="panel panel-warning">
                <div class="panel-heading" style="background-color:#EEE8AA">Select Options</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/user">
                      

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Select</label>

                            <div class="col-md-6">
                            <select class="form-control">
                            <?php foreach($data as $user):?>
                                <option value="<?= $user->id; ?>"><?= $user->name; ?></option>
                            <?php endforeach;?>
                            </select>
                            



                               <!--   <div class="form-group">
                  <label>Select</label>
                  <select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select> -->

                              
                            </div>
                        </div>
                       

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                            <!--     <button type="submit" class="btn btn-primary btn-sm">
                                    Submit
                                </button> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>   



    <div class="row">
        <div class="col-md-12">

 <div class="panel panel-warning">
      <div class="panel-heading" style="background-color:#EEE8AA">User Lists</div>
      <div class="panel-body"> 
    
<?php require __DIR__ .    '/../partials/messages.php'; ?>

    <table class="table table-bordered"  id="example1" >
    <thead >
      <tr>
        <th ><strong>ID</strong></th>
        <th><strong>Name</strong></th>
        <th><strong>Username</strong></th>
       <!--  <th><strong>Password</strong></th> -->
        <th><strong>Usertype</strong></th>
        <th><strong>Options</strong></th>

    </thead>
    <tbody>
    <?php foreach($data as $user):?>
      <tr>
        <td><?= $user->id;?></td>

        <td><?= $user->name;?></td>
        <td><?= $user->username;?></td>
     <!--    <td><?= $user->password;?></td> -->
        <td><?= $user->usertype;?></td>  
        <td>
 
        <form class="form-group" method="post" action="user/<?= $user->id; ?>">
        <input type="hidden" name="_method" value="DELETE">
        <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-delete"></i>Delete</button>
        <a class="btn btn-primary btn-xs" href="user/<?= $user->id; ?>/edit"><i class="fa fa-edit"></i>Edit</a>
        <a class="btn btn-warning btn-xs" href="user/<?= $user->id; ?>"><i class="fa fa-show"></i>Show</a>
        </form>
      </tr>
    <?php endforeach;?>
    </tbody>
    </table>
      </div>
    </div>

</div>

</div>
</div>


<?php require __DIR__ .    '/../partials/footer.php'; ?>