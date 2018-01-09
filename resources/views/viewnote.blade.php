<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
                            <li><a href="/home">Home </a></li>
                            <li><a href="/taskbook">Task </a></li>
                            <li><a class="menu-top-active" href="/note">Notes </a></li>
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
                    <h4 class="page-head-line">Note</h4>

               </div>
<div class="triangles">
        <div class="triangle demo-arrow-up" style="border-bottom: 50px solid #49C69E !important;"></div>
        </div>
            </div>
            <div class="alert alert-warning" style="color: #FFF;background-color: #49C69E !important;border-color: #49C69E !important;">
            <div class="row">
                <div class="col-md-12">
                    <div class="choose">
                        <div class="c1">
                        <a href="/note">Create a new note...</a><br><br>
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" style="color: #49C69E !important;background-color:#fff;border:none;" aria-expanded="false">Notes List <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        @foreach($notes as $notes)
                                        <li><a href="/viewnote/{{ $notes->id }}">{{ $notes->title_notes }} </a></li>
                                        @endforeach
                                    </ul>
                            </div>
                        </div>
                        </div>
                            <div class="input">
                                        <form method="POST" action="{{ url('/savenote') }}">
                                        <div class="act"><a href="{{ url('/editnote/'.$data->id) }}">
                                        <i class="fa fa-pencil-square-o"></i></a></td>
                                        <a href="{{ url('/deletenote/'.$data->id) }}" onclick="return confirm('Sure delete it?')">
                                        <i class="fa fa-trash"></i></a></div>
                                    <b><input style="background-color: #49C69E !important;font-size:14pt;color:#fff;text-align:center;" class="inp" type="text" name="title_notes" placeholder=" Title Note" value="{{ $data->title_notes}}" readonly /></b><br><br>
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <label style="font-size:12pt;">Note Description</label>
                                            <textarea style=" background-color: #49C69E !important; color:#fff;" class="form-control ckeditor" name="content" rows="6" readonly>{!! $data->content !!}</textarea><br>
                                            
                                              </div>
                                          </form>
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
