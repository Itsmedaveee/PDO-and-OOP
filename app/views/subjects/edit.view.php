<?php require __DIR__ .    '/../partials/header.php'; ?>
<?php require __DIR__ .    '/../partials/nav.php'; ?>


<div class="container">
    <div class="row">   

        <?php require __DIR__ .    '/../partials/sidebar.php'; ?>

        <div class="col-md-8">
            <div class="panel panel-warning">
                <div class="panel-heading">Edit Users</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/subject/<?= $subjects->id;?>">
                                                                                

                        <div class="form-group">
                         <input type="hidden" name="_method" value="PATCH">                                                                         
                            <label for="code" class="col-md-4 control-label">Code</label>

                            <div class="col-md-6">

                                <input name="code" id="code" class="form-control" required="" value="<?php echo $subjects->code;?>">
                                  
                                </input>

                              
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">

                                <input name="title" id="title" class="form-control" required="" value="<?php echo $subjects->title;?>">
                                  
                                </input>

                              
                            </div>
                        </div>

                      


                  <div class="form-group">
                            <label for="year" class="col-md-4 control-label">Year</label>
                            <div class="col-md-6">
                            <select class="form-control" name="year" id="year" value="<?php echo $subjects->year;?>">

                           
                            <option>1st Year</option>
                            <option>2nd Year</option>
                            <option>3rd Year</option>
                            <option>4th Year</option>
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