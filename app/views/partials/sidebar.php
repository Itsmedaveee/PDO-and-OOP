<div class="col-sm-3 col-md-3 sidebar">

            <div class="panel panel-warning">
                <div class="panel-heading" style="background-color: #EEE8AA">Dashboard</div>

                <div class="panel-body">
                      <ul class="nav nav-sidebar">
            <li class="active"><a href="/dashboard"><i class="fa fa-dashboard"></i> Dashboard <span class="sr-only">(current)</span></a></li>
            <li><a href="/users"><i class="fa fa-user"></i> Users</a></li>
            <li><a href="/courses"><i class="fa fa-list"></i> Courses</a></li>
            <li><a href="/subjects"><i class="fa fa-book"></i> Subjects</a></li>
            <li><a href="/students"><i class="fa fa-users"></i> Students</a></li>

            <li>
                <a href="/logout"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                </form>
            </li>
          </ul>
                </div>
            </div>
        </div>