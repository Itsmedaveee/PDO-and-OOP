<?php require __DIR__ .    '/../partials/header.php'; ?>
<?php require __DIR__ .    '/../partials/nav.php'; ?>


<div class="container">
    <div class="row">
     <?php require __DIR__ .    '/../partials/sidebar.php'; ?>
        <div class="col-md-8">
            <div class="panel panel-warning">
                <div class="panel-heading" style="background-color:#EEE8AA">Edit Course</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/course/<?= $course->id;?>">
                     <div class="form-group">
                         <input type="hidden" name="_method" value="PATCH">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">

                                <input name="title" id="title" class="form-control" value="<?= $course->title;?>" required="">
                                  
                                </input>

                              
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="course" class="col-md-4 control-label">Course</label>

                            <div class="col-md-6">

                                <input name="course" id="course" class="form-control" value="<?= $course->course;?>" required="">
                                  
                                </input>

                              
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