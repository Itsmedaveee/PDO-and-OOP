<?php require __DIR__ .    '/../partials/header.php'; ?>
<?php require __DIR__ .    '/../partials/nav.php'; ?>


<div class="container">
    <div class="row">
     <?php require __DIR__ .    '/../partials/sidebar.php'; ?>
        <div class="col-md-8">
            <div class="panel panel-warning">
                <div class="panel-heading" style="background-color:#EEE8AA">Edit Students</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/student/<?= $student->id;?>">
                      

                        <div class="form-group">
                        <input type="hidden" name="_method" value="PATCH">
                            <label for="stud_no" class="col-md-4 control-label">Student No</label>

                            <div class="col-md-6">

                                <input name="stud_no" id="stud_no" class="form-control" required="" value="<?= $student->stud_no;?>">
                                  
                                </input>

                              
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fname" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">

                                <input name="fname" id="fname" class="form-control" required="" value="<?= $student->fname;?>">
                                  
                                </input>

                              
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lname" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input type="text" name="lname" id="lname" class="form-control" required="" value="<?= $student->lname;?>">

                             
                                    <span class="help-block">
                                        <strong></strong>
                                    </span>
                               
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
<?php require __DIR__ .    '/../partials/footer.php'; ?>