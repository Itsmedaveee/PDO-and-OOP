<?php require __DIR__ .    '/../partials/header.php'; ?>
<?php require __DIR__ .    '/../partials/nav.php'; ?>


<div class="container">
    <div class="row">
     <?php require __DIR__ .    '/../partials/sidebar.php'; ?>
        <div class="col-md-8">
            <div class="panel panel-warning">
                <div class="panel-heading" style="background-color:#EEE8AA">Create Users</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/user">
                      

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">

                                <input name="name" id="name" class="form-control" required="">
                                  
                                </input>

                              
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">

                                <input name="username" id="username" class="form-control" required="">
                                  
                                </input>

                              
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" name="password" id="password" class="form-control" required="">

                             
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                               
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="usertype" class="col-md-4 control-label">Options</label>
                            <div class="col-md-6">
                            <select class="form-control" name="usertype" id="usertype">

                           
                            <option>Admin</option>
                            <option>Registrar</option>
                            <option>Faculty</option>
                        
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