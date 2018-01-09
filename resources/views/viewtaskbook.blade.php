@foreach($taskbook as $taskbook)@endforeach
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <script src="dp/jquery.min.js" type="text/javascript"></script>
    <script src="dp/zebra_datepicker.js" type="text/javascript"></script>
    <link href="dp/css/metallic.css" rel="stylesheet" type="text/css"></link>
    
    <script>
    $(document).ready(function() {
    $('input.datepicker').Zebra_DatePicker();
    });
    </script>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Kings Task Management</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="/css/style.css" rel="stylesheet" />
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    Managing tasks fun now, with Kings!
                </div>

            </div>
        </div>
    </header>
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/home">
                        <img class="logo" src="/img/logoktm.png" />
                </a>

            </div>

            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                            </a>
                            <div class="dropdown-menu dropdown-settings">
                                <div class="media">
                                    <a class="media-left" href="#">
                                    @foreach($user as $photo)
                                        <img src="{{ url('images/'.$photo->profile_photo) }}" class="img-rounded" />
                                    @endforeach
                                    </a>
                                    <div class="media-body">
                                        @foreach($user as $user)
                                        <h4 class="media-heading">{{ $user->first_name}}&nbsp;{{ $user->last_name }} </h4>
                                        <h5>{{ $user->gender }}</h5>
                                        @endforeach
                                    </div>
                                </div>
                                <hr />
                                <a href="{{ url('/profile/'.$user->id) }}" class="btn btn-info btn-sm">Full Profile</a>&nbsp; <a href="/logout" class="btn btn-danger btn-sm">Logout</a>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a  href="/home">Home </a></li>
                            <li><a class="menu-top-active" href="/taskbook">Task </a></li>
                            <li><a href="/note">Notes </a></li>
                            <li><a href="/file">File </a></li>
                            <li><a href="/taskline">Task Line </a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">TASK BOOK</h4>

                </div>
                <div class="triangles">
        <div class="triangle demo-arrow-up" style="border-bottom: 50px solid #6CB9BF !important;"></div>
        </div>
            </div>
            <div class="alert alert-warning" style="color: #FFF !important;background-color: #6CB9BF !important;border-color: #6CB9BF !important;">
    
            
            <div class="row">
                <div class="col-md-12">
                    <div class="choose">
                        <div class="c1">
                        <a style="color: #fff !important;" href="/task">Create a new task...</a><br><br>
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" aria-expanded="false" style="background-color: #fff !important;color: #6CB9BF !important; border:none;">Tasks List <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        
                                        <li><a href="/viewtask/{{ $taskbook->idtask }}">{{ $taskbook->title_task }} </a></li>
                                        <li class="divider"></li>
                                        
                                    </ul>
                            </div>
                        </div>
                        <br><br>
                        <div class="c2">
                        <a style="color: #fff !important;" href="/taskbook">Create a new taskbook...</a><br>
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" aria-expanded="false" style="background-color: #fff !important;color: #6CB9BF !important; border:none;">Task Books List <span class="caret"></span></button>
                                  
                                   <ul class="dropdown-menu">
                                        
                                        <li><a href="/viewtaskbook/{{ $taskbook->idtaskbook }}">{{ $taskbook->title_task_book }} </a></li>
                                        <li class="divider"></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                            <div class="input">
                                        <form method="POST" action="{{ url('/savetaskbook') }}">
                                        <div class="act"><a href="{{ url('/edittaskbook/'.$taskbook->idtaskbook) }}">
                                        <i class="fa fa-pencil-square-o"></i></a></td>
                                        <a href="{{ url('/deletetaskbook/'.$taskbook->idtaskbook) }}" onclick="return confirm('Sure delete it?')">
                                        <i class="fa fa-trash"></i></a></div>
                                    
                                            <b><input style=" background-color: #6CB9BF !important;text-align:center;font-size:14pt;" class="inp" type="text" name="title_task_book" placeholder=" Title Task Book" value="{{ $taskbook->title_task_book }}" /></b><br>
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <label style="font-size:12pt;"><b>Priority &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
                                            <input style=" background-color: #6CB9BF !important;text-align:center;font-size:12pt;width:85%;" class="inp" type="text" name="title_task" value="{{ $taskbook->tbpriority }}" readonly  /><br>
                                            <b style="font-size:12pt;">To Do List&nbsp;&nbsp;&nbsp;:</b>
                                            <li style="color:white;font-size:12pt;margin-left:110px;"><a href="/viewtask/{{ $taskbook->idtask }}" style="color:white;">{{ $taskbook->title_task }} </a></li><br>
                                            <input style=" background-color: #6CB9BF !important;width:42.5%;"  class="datepicker" type="text" name="start" value="{{ $taskbook->tbstart }}" /> <b style="font-size:12pt">Date Range</b>
                                            <input style=" background-color: #6CB9BF !important;width:42%;"  class="datepicker" type="text" name="finish" value="{{ $taskbook->tbfinish }}" /><br><br>
                                            <B><label style="font-size:12pt">Task Description</label></B>
                                            <textarea style=" background-color: #6CB9BF !important;"  class="form-control ckeditor" name="content" rows="6">{!! $taskbook->tbcontent !!}</textarea><br>
                                            </form>
                                      </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>


    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   &copy; 2015 KingsTM | By : DesignBootstrap
                </div>

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src=" /js/bootstrap.js"></script>
</body>
</html>
