<?php require __DIR__ .    '/../partials/header.php'; ?>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Dave Del Rosario</a>
    </div>
 
    </ul>
  </div>
</nav>

<div class="container">
    <div class="row">
    
        <div class="col-md-6">
            <div class="panel panel-warning">
                <div class="panel-heading" style="background-color:#EEE8AA">Login</div>

                <div class="panel-body">
                    <?php require __DIR__ .    '/../partials/messages.php'; ?>
                    <form class="form-horizontal" role="form" method="POST" action="login">
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
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
<?php require __DIR__ .    '/../partials/footer.php'; ?>