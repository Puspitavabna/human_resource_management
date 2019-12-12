
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Free HTML5 Bootstrap Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <link href="{{ asset('user/css/bootstrap-cerulean.min.css')}}" rel="stylesheet">
    <link href="{{ asset('user/css/charisma-app.css')}}" rel="stylesheet">
    <link href="{{ asset('user/bower_components/fullcalendar/dist/fullcalendar.css')}}" rel='stylesheet'>
    <link href="{{ asset('user/bower_components/fullcalendar/dist/fullcalendar.print.css')}}" rel='stylesheet' media='print'>
    <link href="{{ asset('user/bower_components/chosen/chosen.min.css')}}" rel='stylesheet'>
    <link href="{{ asset('user/bower_components/colorbox/example3/colorbox.css')}}" rel='stylesheet'>
    <link href="{{ asset('user/bower_components/responsive-tables/responsive-tables.css')}}" rel='stylesheet'>
    <link href="{{ asset('user/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css')}}" rel='stylesheet'>
    <link href="{{ asset('user/css/jquery.noty.css')}}" rel='stylesheet'>
    <link href="{{ asset('user/css/noty_theme_default.css')}}" rel='stylesheet'>
    <link href="{{ asset('user/css/elfinder.min.css')}}" rel='stylesheet'>
    <link href="{{ asset('user/css/elfinder.theme.css')}}" rel='stylesheet'>
    <link href="{{ asset('user/css/jquery.iphone.toggle.css')}}" rel='stylesheet'>
    <link href="{{ asset('user/css/uploadify.css')}}" rel='stylesheet'>
    <link href="{{ asset('user/css/animate.min.css')}}" rel='stylesheet'>

    <script src="{{ asset('user/bower_components/jquery/jquery.min.js')}}"></script>

    <!--[if lt IE 9]>
        <!--<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>-->


    <link rel="shortcut icon" href="{{ asset('user/img/favicon.ico')}}">
</head>
<body>

<div class="navbar navbar-default" role="navigation">
    <div class="navbar-inner">
        <button type="button" class="navbar-toggle pull-left animated flip">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"> <img alt="Charisma Logo" src="{{asset("user/img/logo20.png")}}" class="hidden-xs" />
            <span>Exam</span></a>
        <div class="btn-group pull-right">
            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <span class="hidden-xs">{{ Auth::user()->name }}</span>
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">Profile</a></li>
                <li class="divider"></li>
                <li>
                    <a href="{{ route('admin.logout') }}"
                       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="ch-container">
    <div class="row">
        <!-- sidebar -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">
                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="{{ route('admin.index') }}"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        </li>
                        <li><a class="ajax-link" href="#"><i class="glyphicon glyphicon-eye-open"></i><span> User </span></a>
                        </li>
                        <li><a class="ajax-link" href="{{ route('quiz_topic.index') }}"><i class="glyphicon glyphicon-edit"></i><span> Quiz Topics</span></a></li>
                        <li><a class="ajax-link" href="{{ route('admin_quiz_topic.index') }}"><i class="glyphicon glyphicon-list-alt"></i><span> Add Quiz Topics</span></a>
                        </li>
                        <li><a class="ajax-link" href="{{ route('admin_quiz_question.index') }}"><i class="glyphicon glyphicon-list-alt"></i><span> Add Quiz Question</span></a>
                        </li>
                        <li><a class="ajax-link" href="{{ route('quiz_result.index') }}"><i class="glyphicon glyphicon-font"></i><span> Quiz Result</span></a>
                        </li>
                        <li><a class="ajax-link" href="{{ route('admin_quiz_answer.index') }}"><i class="glyphicon glyphicon-picture"></i><span> Quiz Answer</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- sidebar -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>
        <div id="content" class="col-lg-10 col-sm-10">

            @yield('content')




        </div>
    </div>

    <div class="row">
        {{--<div class="col-md-9 col-lg-9 col-xs-9 hidden-xs">--}}
            {{--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>--}}

            {{--<ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-5108790028230107" data-ad-slot="3193373905"></ins>--}}
            {{--<script>--}}
                {{--(adsbygoogle = window.adsbygoogle || []).push({});--}}
            {{--</script>--}}
        {{--</div>--}}
    </div>

    <hr>
    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="https://usman.it" target="_blank">Muhammad
                Usman</a> 2012 - 2015</p>
        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a href="https://usman.it/free-responsive-admin-template">Charisma</a></p>
    </footer>
</div>

<script src="{{ asset('user/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<script src="{{ asset('user/js/jquery.cookie.js')}}"></script>

<script src="{{ asset('user/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{ asset('user/bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>

<script src="{{ asset('user/js/jquery.dataTables.min.js')}}"></script>

<script src="{{ asset('user/bower_components/chosen/chosen.jquery.min.js')}}"></script>

<script src="{{ asset('user/bower_components/colorbox/jquery.colorbox-min.js')}}"></script>

<script src="{{ asset('user/js/jquery.noty.js')}}"></script>

<script src="{{ asset('user/bower_components/responsive-tables/responsive-tables.js')}}"></script>

<script src="{{ asset('user/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js')}}"></script>
<script src="{{ asset('user/js/jquery.raty.min.js')}}"></script>

<script src="{{ asset('user/js/jquery.iphone.toggle.js')}}"></script>

<script src="{{ asset('user/js/jquery.autogrow-textarea.js')}}"></script>

<script src="{{ asset('user/js/jquery.uploadify-3.1.min.js')}}"></script>

<script src="{{ asset('user/js/jquery.history.js')}}"></script>

<script src="{{ asset('user/js/charisma.js')}}"></script>
</body>
</html>
