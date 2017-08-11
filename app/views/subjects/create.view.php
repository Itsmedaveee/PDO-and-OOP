<?php require __DIR__ .    '/../partials/header.php'; ?>
<?php require __DIR__ .    '/../partials/nav.php'; ?>


<div class="container">
    <div class="row">
     <?php require __DIR__ .    '/../partials/sidebar.php'; ?>
        <div class="col-md-8">
            <div class="panel panel-warning">
                <div class="panel-heading" style="background-color:#EEE8AA">Create Subjects</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/subject">
                      

                        <div class="form-group">
                            <label for="code" class="col-md-4 control-label">Code</label>

                            <div class="col-md-6">

                                <input name="code" id="code" class="form-control" required="">
                                  
                                </input>

                              
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">

                                <input name="title" id="title" class="form-control" required="">
                                  
                                </input>

                              
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="year" class="col-md-4 control-label">Year Level</label>
                            <div class="col-md-6">
                            <select class="form-control" name="year" id="year">
                           
                            <option>1st year</option>
                            <option>2nd year</option>
                            <option>3rd year</option>
                            <option>4th year</option>

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