<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <title>AdminLTE 2 | Blank Page</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/all-skins.min.css') }}">

        {{-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --}}
        {{-- WARNING: Respond.js doesn't work if you view the page via file:// --}}

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">  {{-- Site wrapper --}}

            <header class="main-header"> {{-- Logo --}}
                <a href="../../index2.html" class="logo">
                    <span class="logo-mini"><b>S</b></span>     {{-- mini logo for sidebar mini 50x50 pixels --}}
                    <span class="logo-lg"><b>S</b>ijot</span>   {{-- logo for regular state and mobile devices --}}
                </a>
        
                <nav class="navbar navbar-static-top"> {{-- Header Navbar: style can be found in header.less --}}

                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> {{-- Sidebar toggle button--}}
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown notifications-menu">  {{-- Notifications: style can be found in dropdown.less --}}
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">10</span>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                    <li>
                                        <ul class="menu"> {{-- inner menu: contains the actual data --}}
                                            <li><a href="#"><i class="fa fa-users text-aqua"></i> 5 new members joined today</a></li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">View all</a></li>
                                </ul>
                            </li>
                            <li class="dropdown user user-menu"> {{-- User Account: style can be found in dropdown.less --}}
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{ asset('img/user.jpg') }}" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Alexander Pierce</span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="user-header"> {{-- User image --}}
                                        <img src="{{ asset('img/user.jpg') }}" class="img-circle" alt="User Image">

                                        <p>
                                            Alexander Pierce - Web Developer
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>
                                    <li class="user-body"> {{-- Menu Body --}}
                                        <div class="row">
                                            <div class="col-xs-4 text-center"><a href="#">Followers</a></div>
                                            <div class="col-xs-4 text-center"><a href="#">Sales</a></div>
                                            <div class="col-xs-4 text-center"><a href="#">Friends</a></div>
                                        </div> {{-- /.row --}}
                                    </li>
                                    <li class="user-footer"> {{-- Menu Footer --}}
                                        <div class="pull-left"><a href="#" class="btn btn-default btn-flat">Profile</a></div>
                                        <div class="pull-right"><a href="#" class="btn btn-default btn-flat">Sign out</a></div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a></li>
                        </ul>
                    </div>
                </nav>
            </header>

            {{-- =============================================== --}}

            <aside class="main-sidebar"> {{-- Left side column. contains the sidebar --}}
                <section class="sidebar"> {{-- sidebar: style can be found in sidebar.less --}}
                    <div class="user-panel"> {{-- Sidebar user panel --}}
                        <div class="pull-left image">
                            <img src="{{ asset('img/user.jpg') }}" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Alexander Pierce</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <form action="#" method="get" class="sidebar-form"> {{-- search form --}}
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form> {{-- /.search form --}}
                    
                    <ul class="sidebar-menu"> {{-- sidebar menu: : style can be found in sidebar.less --}}
                        <li class="header">MAIN NAVIGATION</li>
                        <li>
                            <a href="../../documentation/index.html">
                                <i class="fa fa-book" aria-hidden="true"></i> <span>Verhuringen</span>
                            </a>
                        </li>
                    </ul>
                </section> {{-- /.sidebar --}}
            </aside>

            {{-- =============================================== --}}

            <div class="content-wrapper"> {{-- Content Wrapper. Contains page content --}}
                <section class="content-header">  {{-- Content Header (Page header) --}}
                    <h1> Blank page <small>it all starts here</small></h1>

                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Examples</a></li>
                        <li class="active">Blank page</li>
                    </ol>
                </section>

                <section class="content"> {{-- Main content --}}
                    <div class="box"> {{-- Default box --}}
                        <div class="box-header with-border">
                            <h3 class="box-title">Title</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>

                        <div class="box-body">
                           Start creating your amazing application!
                        </div> {{-- /.box-body --}}

                        <div class="box-footer">
                            Footer
                        </div> {{-- /.box-footer --}}
                    </div> {{-- /.box --}}
                </section> {{-- /.content --}}
            </div> {{-- /.content-wrapper --}}

            <footer class="main-footer">
                <div class="pull-right hidden-xs"> <b>Versie</b> 2.3.12 </div>
                <strong>Copyright &copy; 2014-{{ date('Y') }} <a href="mailto:Topairy@gmail.com">Tim Joosten</a>.</strong> Alle rechten voorbehouden.
            </footer>
        </div> {{-- ./wrapper --}}

        <script src="{{ asset('js/jquery.js') }}"></script>                                                     {{-- Jquery 2.2.3 --}}
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>             {{-- Bootstrap 3.3.6 --}}
        <script src="{{ asset('js/slimscroll.js') }}"></script>                                                 {{-- SlimScroll --}}
        <script src="{{ asset('js/fastclick.js') }}"></script>                                                  {{-- FastClick --}}
        <script src="{{ asset('js/backend.min.js') }}"></script>                                                {{-- AdminLTE App --}}
    </body>
</html>