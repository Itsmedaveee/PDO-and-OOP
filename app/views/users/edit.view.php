<?php require __DIR__ .    '/../partials/header.php'; ?>
<?php require __DIR__ .    '/../partials/nav.php'; ?>


<div class="container">
    <div class="row">   

        <?php require __DIR__ .    '/../partials/sidebar.php'; ?>

        <div class="col-md-8">
            <div class="panel panel-warning">
                <div class="panel-heading">Edit Users</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/user/<?php echo $data->id;?>">
                                                                                

                        <div class="form-group">
                         <input type="hidden" name="_method" value="PATCH">                                                                         
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">

                                <input name="name" id="name" class="form-control" required="" value="<?php echo $data->name;?>">
                                  
                                </input>

                              
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">

                                <input name="username" id="username" class="form-control" required="" value="<?php echo $data->username;?>">
                                  
                                </input>

                              
                            </div>
                        </div>

                      


                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="text" name="password" id="password" class="form-control" required="" value="<?php echo $data->password;?>">

                             
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                               
                            </div>
                        </div>

                  <div class="form-group">
                            <label for="usertype" class="col-md-4 control-label">Options</label>
                            <div class="col-md-6">

                            <select class="form-control" name="usertype" id="usertype" value="<?= $data->usertype;?>">    
                                <option <?= $data->usertype == 'Admin' ? 'selected' : ''; ?>>Admin</option>
                                <option <?= $data->usertype == 'Registrar' ? 'selected' : ''; ?>>Registrar</option>
                                <option <?= $data->usertype == 'Faculty' ? 'selected' : ''; ?>>Faculty</option>
                            </select>

                            </div>
                            </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

<?php require __DIR__ .    '/../partials/footer.php'; ?>