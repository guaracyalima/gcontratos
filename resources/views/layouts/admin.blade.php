<!DOCTYPE html>
<html lang="en">
<head>
    <title>Frigomil :: Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <!-- ===== FAVICON =====-->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- ===== CSS =====-->
    <!-- General-->
    <link rel="stylesheet" href="{{ asset('admin/css/basic.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/general.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/theme.css') }}" class="style-theme">

    <!--[if lt IE 9]>
    <script src="js/basic/respond.min.js"></script>
    <script src="js/basic/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>

<!--[if lt IE 9]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!--THEME SETTINGS-->
<div class="widget-theme-settings t-theme-settings-1"><a href="#" class="theme-settings-toggle"><i class="fa fa-cog"></i></a>
    <div class="theme-settings-wrapper">
        <h3>General Settings</h3>
        <div class="hide switchery-success"></div>
        <div class="hide switchery-info"></div>
        <div class="hide switchery-warning"></div>
        <div class="theme-settings-row">
            <h4 class="theme-skin-title">Base Font Size</h4>
            <input id="spinnerBaseFont" type="text" value="14" name="spinnerBaseFont" placeholder="Html base font" title="REM based font sizing." class="tt-theme-settings">
        </div>
        <hr>
        <div class="l-row theme-settings-row">
            <div class="l-span-xs-7">
                <label for="boxedLayout">Boxed Layout</label>
            </div>
            <div class="l-span-xs-5 theme-settings-input">
                <input id="boxedLayout" type="checkbox" class="switcheryBoxed">
            </div>
        </div>
        <hr>
        <div class="l-row theme-settings-row">
            <div class="l-span-xs-7">
                <label for="fixedHeader">Fixed Header</label>
            </div>
            <div class="l-span-xs-5 theme-settings-input">
                <input id="fixedHeader" type="checkbox" class="switcheryFixedHeader">
            </div>
        </div>
        <div class="l-row theme-settings-row">
            <div class="l-span-xs-7">
                <label for="stickyHeader">Sticky Header</label>
            </div>
            <div class="l-span-xs-5 theme-settings-input">
                <input id="stickyHeader" type="checkbox" class="switcheryStickyHeader">
            </div>
        </div>
        <hr>
        <div class="l-row theme-settings-row">
            <div class="l-span-xs-7">
                <label for="fixedFooter">Fixed Footer</label>
            </div>
            <div class="l-span-xs-5 theme-settings-input">
                <input id="fixedFooter" type="checkbox" class="switcheryFixedFooter">
            </div>
        </div>
        <div class="l-row theme-settings-row">
            <div class="l-span-xs-7">
                <label for="stickyFooter">Sticky Footer</label>
            </div>
            <div class="l-span-xs-5 theme-settings-input">
                <input id="stickyFooter" type="checkbox" class="switcheryStickyFooter">
            </div>
        </div>
        <hr>
        <div class="l-row theme-settings-row">
            <div class="l-span-xs-7">
                <label>Main Menu</label>
            </div>
            <div class="l-span-xs-5 theme-settings-input"><a href="layout-menu.html" data-placement="left" title="For more Menu Options check out the documentation." class="theme-settings-info tt-theme-settings"><i class="fa fa-info"></i></a></div>
        </div>
        <hr>
        <div class="l-row theme-settings-row">
            <div class="l-span-xs-7">
                <label>Sidebar</label>
            </div>
            <div class="l-span-xs-5 theme-settings-input"><a href="layout-sidebar-left.html" data-placement="left" title="For more Sidebar Options check out the 'Layouts -&gt; Sidebar' section." class="theme-settings-info tt-theme-settings"><i class="fa fa-info"></i></a></div>
        </div>
    </div>
</div>

<!--SECTION-->
<section class="l-main-container">
    <!--Left Sidebar Content-->
    <aside id="sb-left" class="l-sidebar l-sidebar-1 t-sidebar-1">
        <!--Switcher-->
        <div class="l-side-box"><a href="#" data-ason-type="sidebar" data-ason-to-sm="sidebar" data-ason-target="#sb-left" class="sidebar-switcher switcher t-switcher-side ason-widget"><i class="fa fa-bars"></i></a></div>
        <div class="l-side-box">
            <!--Logo-->
            <div class="widget-logo logo-in-side">
                <h1><a href="index.html"><span class="logo-default visible-default-inline-block"><img src="img/logo.png" alt="Proteus"></span><span class="logo-medium visible-compact-inline-block"><img src="img/logo_medium.png" alt="Proteus" title="PROTEUS"></span>
                        <spanl class="logo-small visible-collapsed-inline-block"><img src="img/logo_small.png" alt="Proteus" title="PROTEUS"></spanl></a></h1>
            </div>
        </div>
        <!--Main Menu-->
        <div class="l-side-box">
            <!--MAIN NAVIGATION MENU-->
            <nav class="navigation">
                <ul data-ason-type="menu" class="ason-widget">

                    <li class="active"><a href="#"><i class="icon fa fa-file-text-o"></i><span class="title">Paginas</span><span class="arrow"><i class="fa fa-angle-left"></i></span></a>
                        <ul>
                            <li><a href="{{ url('admin/produtos') }}"><span class="title">Produtos</span></a>
                            </li>
                            <li><a href="{{ url('admin/topo') }}"><span class="title">Header</span></a>
                            </li>
                            <li><a href="{{ url('admin/contato') }}"><span class="title">Contato</span></a>
                            </li>
                            <li><a href="{{ url('admin/sobre') }}"><span class="title">Sobre</span></a>
                            </li>

                        </ul>
                    </li>

                    <li><a href="#"><i class="icon fa fa-cogs"></i><span class="title">Menu</span><span class="arrow"><i class="fa fa-angle-left"></i></span></a>
                        <ul>
                            <li>
                                <a href="{{ route('admin.menu.index') }}">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                    <span class="title">Menu</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li><a href="#"><i class="icon fa fa-sitemap"></i><span class="title">Filiais</span><span class="arrow"><i class="fa fa-angle-left"></i></span></a>
                        <ul>
                            <li><a href="{{route('admin.filial.index')}}"><span class="title">Filiais</span></a>
                            </li>
                        </ul>
                    </li>

                    <li><a href="#"><i class="icon fa fa-puzzle-piece"></i><span class="title">Serviços</span><span class="arrow"><i class="fa fa-angle-left"></i></span></a>
                        <ul>
                            <li>
                                <a href="{{route('admin.servicos.index')}}">
                                    <span class="title">Serviços</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li><a href="#"><i class="icon fa fa-users"></i><span class="title">Redes sociais</span><span class="arrow"><i class="fa fa-angle-left"></i></span></a>
                        <ul>
                            <li>
                                <a href="{{route('admin.social.index')}}">
                                    <i class="fa fa-envelope-open-o" aria-hidden="true"></i>
                                    <span class="title">redes</span></a>
                            </li>
                        </ul>
                    </li>

                    <li><a href="#"><i class="icon fa fa-envelope-o"></i><span class="title">E-mail</span><span class="arrow"><i class="fa fa-angle-left"></i></span></a>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-envelope-open-o" aria-hidden="true"></i>
                                    <span class="title">Emails de exibiçao</span></a>
                            </li>
                            <li><a href="#"><span class="title">Emails do sistema</span></a>
                            </li>
                        </ul>
                    </li>

                    <li><a href="#"><i class="icon fa fa-search"></i><span class="title">SEO</span><span class="arrow"><i class="fa fa-angle-left"></i></span></a>
                        <ul>
                            <li>
                                <a href="layout-menu.html">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                    <span class="title">SEO</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <i class="icon fa fa-phone"></i>
                            <span class="title">Telefones</span>
                            <span class="arrow"><i class="fa fa-angle-left"></i></span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{route('admin.telefone.index')}}">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                    <span class="title">Telefones</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <i class="icon fa fa-user-plus"></i>
                            <span class="title">Clientes</span>
                            <span class="arrow"><i class="fa fa-angle-left"></i>
                            </span>
                        </a>
                        <ul>
                            <li>
                                <a href="layout-menu.html">

                                    <span class="title">Clientes</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!--Main Content-->
    <section class="l-container">
        <!--HEADER-->
        <header class="l-header l-header-1 t-header-1">
            <div class="navbar navbar-ason">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" data-toggle="collapse" data-target="#ason-navbar-collapse" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="index.html" class="navbar-brand widget-logo"><span class="logo-default-header"><img src="img/logo_dark.png" alt="Proteus"></span></a>
                    </div>
                    <div id="ason-navbar-collapse" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li>
                                <!-- Task Widget-->
                                <div class="widget-task task-in-header dropdown dropdown-in-header"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-tasks"></i><span class="label label-danger">4</span></a>
                                    <ul role="menu" class="dropdown-menu">
                                        <li class="dropdown-menu-header">Tasks<span class="label label-danger">4</span></li>
                                        <li>
                                            <div class="l-row">
                                                <div class="l-col-sm-8">Project Overview</div>
                                                <div class="l-col-sm-4 tar">68%</div>
                                            </div>
                                            <div class="progress progress-no-border progress-mini">
                                                <div style="width: 25%" class="progress-bar progress-bar-info"><span class="sr-only">25% Complete (success)</span></div>
                                                <div style="width: 18%" class="progress-bar progress-bar-success"><span class="sr-only">18% Complete (success)</span></div>
                                                <div style="width: 12%" class="progress-bar progress-bar-danger"><span class="sr-only">12% Complete (warning)</span></div>
                                                <div style="width: 16%" class="progress-bar progress-bar-warning"><span class="sr-only">16% Complete (danger)</span></div>
                                            </div>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <div class="l-row">
                                                <div class="l-col-sm-8">Page Design</div>
                                                <div class="l-col-sm-4 tar">75%</div>
                                            </div>
                                            <div class="progress progress-no-border progress-mini">
                                                <div role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;" class="progress-bar progress-bar-info"><span class="sr-only">75% Complete</span></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="l-row">
                                                <div class="l-col-sm-8">Front-End development</div>
                                                <div class="l-col-sm-4 tar">50%</div>
                                            </div>
                                            <div class="progress progress-no-border progress-mini">
                                                <div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;" class="progress-bar progress-bar-success"><span class="sr-only">50% Complete</span></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="l-row">
                                                <div class="l-col-sm-8">Back-End development</div>
                                                <div class="l-col-sm-4 tar">35%</div>
                                            </div>
                                            <div class="progress progress-no-border progress-mini">
                                                <div role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%;" class="progress-bar progress-bar-danger"><span class="sr-only">35% Complete</span></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="l-row">
                                                <div class="l-col-sm-8">Database design</div>
                                                <div class="l-col-sm-4 tar">40%</div>
                                            </div>
                                            <div class="progress progress-no-border progress-mini">
                                                <div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;" class="progress-bar progress-bar-warning"><span class="sr-only">40% Complete</span></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <!-- Message Widget-->
                                <div class="widget-message message-in-header dropdown dropdown-in-header"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-envelope"></i><span class="label label-info">5</span></a>
                                    <ul role="menu" class="dropdown-menu">
                                        <li class="dropdown-menu-header">Messages<span class="label label-info">5</span></li>
                                        <li data-ason-type="scrollbar" class="msg-content ason-widget">
                                            <ul>
                                                <li><a href="#">
                                                        <div class="l-row">
                                                            <div class="l-col-xs-3 msg-image"><img src="img/widgets/user_1.jpg"></div>
                                                            <div class="l-col-xs-7 msg-info">
                                                                <h4>Harold Holland</h4>
                                                                <p>John, don't forget tomorrow we have a meeting</p>
                                                                <div class="time"><i class="fa fa-clock-o"></i><span>&nbsp; 5 minutes ago</span></div>
                                                            </div>
                                                            <div class="l-col-xs-2 msg-status">
                                                                <ul>
                                                                    <li>
                                                                        <div data-toggle="tooltip" data-placement="bottom" title="Mark as read" class="msg-tip"><i class="fa fa-circle-o"></i></div>
                                                                    </li>
                                                                    <li><span class="label label-info">New</span></li>
                                                                </ul>
                                                            </div>
                                                        </div></a></li>
                                                <li><a href="#">
                                                        <div class="l-row">
                                                            <div class="l-col-xs-3 msg-image"><img src="img/widgets/user_2.jpg"></div>
                                                            <div class="l-col-xs-7 msg-info">
                                                                <h4>Barbara Curtis</h4>
                                                                <p>Tomorrow is movie night, don't forget it</p>
                                                                <div class="time"><i class="fa fa-clock-o"></i><span>&nbsp; 40 minutes ago</span></div>
                                                            </div>
                                                            <div class="l-col-xs-2 msg-status">
                                                                <ul>
                                                                    <li>
                                                                        <div data-toggle="tooltip" title="Mark as read" class="msg-tip"><i class="fa fa-circle-o"></i></div>
                                                                    </li>
                                                                    <li><span class="label label-info">New</span></li>
                                                                </ul>
                                                            </div>
                                                        </div></a></li>
                                                <li><a href="#">
                                                        <div class="l-row">
                                                            <div class="l-col-xs-3 msg-image"><img src="img/widgets/user_3.jpg"></div>
                                                            <div class="l-col-xs-7 msg-info">
                                                                <h4>Gary Fernandez</h4>
                                                                <p>Check out our brand new product, you will love it !!!</p>
                                                                <div class="time"><i class="fa fa-clock-o"></i><span>&nbsp; 12:00 AM</span></div>
                                                            </div>
                                                            <div class="l-col-xs-2 msg-status">
                                                                <ul>
                                                                    <li>
                                                                        <div data-toggle="tooltip" title="Mark as read" class="msg-tip"><i class="fa fa-circle-o"></i></div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div></a></li>
                                                <li><a href="#">
                                                        <div class="l-row">
                                                            <div class="l-col-xs-3 msg-image"><img src="img/widgets/user_4.jpg"></div>
                                                            <div class="l-col-xs-7 msg-info">
                                                                <h4>Kristina Wade</h4>
                                                                <p>Congratulation for your new promotion</p>
                                                                <div class="time"><i class="fa fa-clock-o"></i><span>&nbsp; Dec 24, 2014 at 2:32 PM</span></div>
                                                            </div>
                                                            <div class="l-col-xs-2 msg-status">
                                                                <ul>
                                                                    <li>
                                                                        <div data-toggle="tooltip" title="Mark as unread" class="msg-tip"><i class="fa fa-circle"></i></div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div></a></li>
                                                <li><a href="#">
                                                        <div class="l-row">
                                                            <div class="l-col-xs-3 msg-image"><img src="img/widgets/user_5.jpg"></div>
                                                            <div class="l-col-xs-7 msg-info">
                                                                <h4>Eugene Powell</h4>
                                                                <p>Check out our new top selling products</p>
                                                                <div class="time"><i class="fa fa-clock-o"></i><span>&nbsp; Nov 12, 2014 at 8:15 PM</span></div>
                                                            </div>
                                                            <div class="l-col-xs-2 msg-status">
                                                                <ul>
                                                                    <li>
                                                                        <div data-toggle="tooltip" title="Mark as unread" class="msg-tip"><i class="fa fa-circle"></i></div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div></a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-menu-footer"><a href="app-mail.html">View all messages</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <!-- Notification Widget-->
                                <div class="widget-notification notification-in-header dropdown dropdown-in-header"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-bell"></i><span class="label label-success">5</span></a>
                                    <ul role="menu" class="dropdown-menu">
                                        <li class="dropdown-menu-header">Notification<span class="label label-success">5</span></li>
                                        <li class="nft-content">
                                            <ul>
                                                <li><a href="#">
                                                        <div class="l-row">
                                                            <div class="l-col-xs-2 nft-icon text-info"><i class="fa fa-user"></i></div>
                                                            <div class="l-col-xs-6 nft-info">
                                                                <p>New User Sign Up</p>
                                                            </div>
                                                            <div class="l-col-xs-2 time"><span>15 min</span></div>
                                                            <div class="l-col-xs-2 nft-status">
                                                                <div data-toggle="tooltip" title="Mark as read" class="nft-tip"><i class="fa fa-circle-o"></i></div>
                                                            </div>
                                                        </div></a></li>
                                                <li><a href="#">
                                                        <div class="l-row">
                                                            <div class="l-col-xs-2 nft-icon"><i class="fa fa-shopping-cart text-success"></i></div>
                                                            <div class="l-col-xs-6 nft-info">
                                                                <p>New Order</p>
                                                            </div>
                                                            <div class="l-col-xs-2 time"><span>31 min</span></div>
                                                            <div class="l-col-xs-2 nft-status">
                                                                <div data-toggle="tooltip" title="Mark as read" class="nft-tip"><i class="fa fa-circle-o"></i></div>
                                                            </div>
                                                        </div></a></li>
                                                <li><a href="#">
                                                        <div class="l-row">
                                                            <div class="l-col-xs-2 nft-icon"><i class="fa fa-comment text-warning"></i></div>
                                                            <div class="l-col-xs-6 nft-info">
                                                                <p>New Comment</p>
                                                            </div>
                                                            <div class="l-col-xs-2 time"><span>07/02/14</span></div>
                                                            <div class="l-col-xs-2 nft-status">
                                                                <div data-toggle="tooltip" title="Mark as read" class="nft-tip"><i class="fa fa-circle-o"></i></div>
                                                            </div>
                                                        </div></a></li>
                                                <li><a href="#">
                                                        <div class="l-row">
                                                            <div class="l-col-xs-2 nft-icon"><i class="fa fa-database text-danger"></i></div>
                                                            <div class="l-col-xs-6 nft-info">
                                                                <p>Database Updated</p>
                                                            </div>
                                                            <div class="l-col-xs-2 time"><span>09/24/14</span></div>
                                                            <div class="l-col-xs-2 nft-status">
                                                                <div data-toggle="tooltip" title="Mark as unread" class="nft-tip"><i class="fa fa-circle"></i></div>
                                                            </div>
                                                        </div></a></li>
                                                <li><a href="#">
                                                        <div class="l-row">
                                                            <div class="l-col-xs-2 nft-icon"><i class="fa fa-code-fork text-primary"></i></div>
                                                            <div class="l-col-xs-6 nft-info">
                                                                <p>Github Fork Updated</p>
                                                            </div>
                                                            <div class="l-col-xs-2 time"><span>11/12/14</span></div>
                                                            <div class="l-col-xs-2 nft-status">
                                                                <div data-toggle="tooltip" title="Mark as unread" class="nft-tip"><i class="fa fa-circle"></i></div>
                                                            </div>
                                                        </div></a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-menu-footer"><a href="#">View all notifications</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <!-- Search Widget-->
                                <div class="widget-search search-in-header is-search-right t-search-1">
                                    <form role="form" action="page-search.html">
                                        <input type="text" placeholder="Search..." class="form-control">
                                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <!-- Profile Widget-->
                                <div class="widget-profile profile-in-header">
                                    <button type="button" data-toggle="dropdown" class="btn dropdown-toggle"><span class="name">William Jones</span><img src="img/profile/profile.jpg"></button>
                                    <ul role="menu" class="dropdown-menu">
                                        <li><a href="page-profile.html"><i class="fa fa-user"></i>Profile</a></li>
                                        <li><a href="app-mail.html"><i class="fa fa-envelope"></i>Inbox</a></li>
                                        <li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
                                        <li class="lock"><a href="page-lock-screen.html"><i class="fa fa-lock"></i>Log Out</a></li>
                                        <li class="power"><a href="page-login.html"><i class="fa fa-power-off"></i>Sign Out</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <div class="l-page-header">
            <h2 class="l-page-title"><span>Mangue</span> Tecnologia</h2>
        </div>
        <div class="l-spaced-vertical">
            <div class="l-box no-border">
                <div class="l-spaced">


                    @yield('conteudo')


                </div>
            </div>
        </div>




        <!--FOOTER-->
        <footer class="l-footer l-footer-1 t-footer-1">
            <div class="group pt-10 pb-10 ph">
                <div class="copyright pull-left">
                    © Copyright 2015
                    <a href="#">Admin Frigomil.</a>
                    Powered by
                    <a href="#">Mangue Tecnologia.</a>
                    All rights reserved.
                </div>
                <div class="version pull-right">v 1.0</div>
            </div>
        </footer>
    </section>
</section>
<!-- ===== JS =====-->
<!-- jQuery-->
<script src="{{ asset('admin/js/basic/jquery.min.js') }}"></script>
<script src="{{ asset('admin/js/basic/jquery-migrate.min.js') }}"></script>
<!-- General-->
<script src="{{ asset('admin/js/basic/modernizr.min.js') }}"></script>
<script src="{{ asset('admin/js/basic/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/js/shared/jquery.asonWidget.js') }}"></script>
<script src="{{ asset('admin/js/plugins/plugins.js') }}"></script>
<script src="js/general.js"{{ asset('admin/js/general.js') }}></script>
<!-- Semi general-->
<script type="text/javascript">
    var paceSemiGeneral = { restartOnPushState: false };
    if (typeof paceSpecific != 'undefined'){
        var paceOptions = $.extend( {}, paceSemiGeneral, paceSpecific );
        paceOptions = paceOptions;
    }else{
        paceOptions = paceSemiGeneral;
    }

</script>
<script src="{{ asset('admin/js/plugins/pageprogressbar/pace.min.js') }}"></script>
<!-- Specific-->
<script src="{{ asset('admin/js/shared/classie.js') }}"></script>
<script src="{{ asset('admin/js/shared/jquery.cookie.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/accordions/jquery.collapsible.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/forms/elements/jquery.bootstrap-touchspin.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/forms/elements/jquery.switchery.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/page/jquery.blank.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/tooltip/jquery.tooltipster.min.js') }}"></script>
<script src="{{ asset('admin/js/calls/page.blank.js') }}"></script>
<script src="{{ asset('admin/js/calls/part.header.1.js') }}"></script>
<script src="{{ asset('admin/js/calls/part.theme.setting.js') }}"></script>
@yield('js')
</body>
</html>