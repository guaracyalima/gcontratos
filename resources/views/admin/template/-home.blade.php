<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Azulão :: Admin - Home</title>
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
    <link rel="stylesheet" href="{{ asset('admin/css/addons/fonts/artill-clean-icons.css') }}" class="style-theme">

    <!-- Specific-->
    <link rel="stylesheet" href="{{ asset('admin/css/addons/theme/syntaxhighlighter.css') }}" class="style-theme-addon"/>
    <!--[if lt IE 9]>
    <script src="{{ asset('admin/js/basic/respond.min.js')}}"></script>
    <script src="{{ asset('admin/js/basic/html5shiv.min.js')}}"></script>
    <![endif]-->
  </head>
  <body>

    <!--[if lt IE 9]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

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

              <li class=""><a href="#"><i class="icon fa fa-file-text-o"></i><span class="title">Seções</span><span class="arrow"><i class="fa fa-angle-left"></i></span></a>
                <ul>
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
      <!--Left Sidebar Content-->
      <aside class="l-sidebar l-sidebar-3 t-sidebar-3 z-index-99">
        <!--User Profile-->
        <div class="l-side-box">
          <div class="widget-profile-2 profile-2-in-side t-profile-2-1">
            <div class="profile-2-img"><a href="page-profile.html"><img src="img/profile/profile.jpg"></a><a href="page-profile.html" class="edit-profile"><i class="fa fa-edit"></i></a></div>
            <ul class="profile-2-info">
              <li>
                <h3>{{ Auth::user()->name }}</h3>
              </li>
              <li><a href="{{ route('logout') }}">Sair</a></li>
            </ul>
          </div>
        </div>
        <!--Social Stats-->
        <div class="l-side-box">
          <div class="widget-social social-in-side t-social-facebook">
            <div class="social-icon"><i class="fa fa-facebook"></i></div>
            <div class="social-info"><span>76547</span> Curtidas
            </div>
          </div>
        </div>
        <div class="l-side-box">
          <div class="widget-social social-in-side t-social-twitter">
            <div class="social-icon"><i class="fa fa-twitter"></i></div>
            <div class="social-info"><span>34756</span> Seguidores
            </div>
          </div>
        </div>
        <div class="l-side-box">
          <div class="widget-social social-in-side t-social-youtube">
            <div class="social-icon"><i class="fa fa-youtube"></i></div>
            <div class="social-info"><span>12478</span> Inscritos
            </div>
          </div>
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
          <h2 class="l-page-title"><span>Mangue </span>Tecnologia</h2>
          <!--BREADCRUMB-->
        </div>


        <div class="widget-page-summary">
          <div class="l-col-lg-4">
            <h2 class="page-title">Welcome to <span>Proteus</span>.</h2>
            <h4 class="page-sub-title">Your <span id="rotating-text">Emacs</span> Admin Web App.</h4><a href="#" class="page-summary-info-switcher"><i class="fa fa-bars"></i></a>
          </div>
          <div class="l-col-lg-8 page-summary-info">
            <!-- Page Summary Settings-->
            <div class="page-summary-settings">
              <ul class="update-status-settings">
                <li><a href="#" title="Update charts" class="chart-toggle tt-bottom"><i class="fa fa-refresh"></i></a></li>
                <li>
                  <ul class="time-status-toggle">
                    <li title="Toggle unit" class="tt-bottom">
                      <div class="hide switcheryUnits"></div>
                      <input id="switcheryUnits" type="checkbox">
                    </li>
                    <li class="last-status"><a href="#" title="Use your location" class="current-weather-location tt-bottom"><i class="fa fa-compass"></i></a></li>
                  </ul>
                </li>
                <li class="last">
                  <div class="hide switcherySettings"></div>
                  <input id="switcherySettings" type="checkbox">
                </li>
              </ul>
            </div>
            <div class="l-row">
              <!-- Page Summary Charts-->
              <div class="summary-chart chart-views l-col-md-4">
                <div class="l-row">
                  <div class="l-col-xl-5 l-col-md-6 l-col-sm-5">
                    <div class="chart-info"><a href="#" title="Update total views" class="update-chart-views tt-top"><i class="fa fa-eye"></i></a><span>2,453</span>
                      <p>Total Views</p>
                    </div>
                  </div>
                  <div class="l-col-xl-7 l-col-md-6 l-col-sm-7">
                    <div class="hide rickshaw-views"></div>
                    <div id="rickshawViews"></div>
                  </div>
                </div>
              </div>
              <div class="summary-chart chart-followers l-col-md-4">
                <div class="l-row">
                  <div class="l-col-sm-5">
                    <div class="chart-info"><a href="#" title="Update followers" class="update-chart-followers tt-top"><i class="fa fa-users"></i></a><span>473</span>
                      <p>Followers</p>
                    </div>
                  </div>
                  <div class="l-col-sm-7">
                    <div class="hide rickshaw-followers"></div>
                    <div id="rickshawFollowers"></div>
                  </div>
                </div>
              </div>
              <div class="summary-chart chart-comments l-col-md-4">
                <div class="l-row">
                  <div class="l-col-sm-5">
                    <div class="chart-info"><a href="#" title="Update comments" class="update-chart-comments tt-top"><i class="fa fa-comments"></i></a><span>695</span>
                      <p>Comments</p>
                    </div>
                  </div>
                  <div class="l-col-sm-7">
                    <div class="hide rickshaw-comments"></div>
                    <div id="rickshawComments"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="l-row">
              <!-- Page Summary Clock-->
              <div class="summary-time-status clock-wrapper l-col-md-8 l-col-sm-6">
                <div id="clock"></div>
              </div>
              <!-- Page Summary Weather-->
              <div class="summary-time-status weather-wrapper l-col-md-4 l-col-sm-6">
                <div id="weather">
                  <div class="l-span-sm-6 l-span-xs-12">
                    <div class="weather-location">Austin, Tx</div>
                    <div class="weather-description">Scattered Thunderstorms</div>
                  </div>
                  <div class="l-span-sm-3 l-span-xs-9">
                    <div class="weather-temp">65°F</div>
                  </div>
                  <div class="l-span-sm-3 l-span-xs-3">
                    <div class="weather-icon"><i class="ac ac-0"></i></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="l-spaced-vertical">
          <div class="l-box no-border">
            <div class="l-spaced">
              <div class="syntax-wrapper">
                <div class="syntax-info">
                  <div class="mv">
                    <p>Listagem dos dados cadastrados no site <strong> www.azulao.com.br</strong>.</p>
                  </div>
                </div>

                <div class="table-responsive">
                  <div class="l-spaced">
                    <div class="l-row">
                      <div class="l-box">
                        <div class="l-box-header">
                          <h2 class="l-box-title"><span>Contato</span></h2>
                          <ul class="l-box-options">
                            <li><a href="#"><i class="fa fa-cogs"></i></a></li>
                            <li><a href="#" data-ason-type="fullscreen" data-ason-target=".l-box" data-ason-content="true" class="ason-widget"></a></li>
                            <li><a href="#" data-ason-type="refresh" data-ason-target=".l-box" data-ason-duration="1000" class="ason-widget"><i class="fa fa-rotate-right"></i></a></li>
                            <li><a href="#" data-ason-type="toggle" data-ason-find=".l-box" data-ason-target=".l-box-body" data-ason-content="true" data-ason-duration="200" class="ason-widget"></a></li>
                            <li><a href="#" data-ason-type="delete" data-ason-target=".l-box" data-ason-content="true" data-ason-animation="fadeOut" class="ason-widget"></a></li>
                          </ul>
                        </div>
                        <div class="l-box-body">
                          <div class="l-spaced">
                            <div class="doc doc-info doc-border doc-left l-spaced-bottom">Dados de contato cadastrados</div>

                          </div>
                          <table id="fooTableId" data-filter="#filter" data-page-size="5" class="table table-hover label-container">
                            <thead>
                            <tr class="active">
                              <th data-toggle="true">Telefone</th>
                              <th data-hide="phone">Endereço</th>
                              <th>Status</th>
                              <th>Ação</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>

                            </tr>

                            </tbody>
                            <tfoot class="hide-if-no-paging">
                            <tr>
                              <td colspan="5" class="tac">
                                <ul class="pagination"></ul>
                              </td>
                            </tr>
                            </tfoot>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!--FOOTER-->
        <footer class="l-footer l-footer-1 t-footer-1">
          <div class="group pt-10 pb-10 ph">
            <div class="copyright pull-left">
              © Copyright 2015
              <a href="#">Azulão Malharia</a>
              Powered by
              <a href="#">Mangue Tecnologia</a>
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
    <script src="{{ asset('admin/js/general.js') }}"></script>
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
    <script src="{{ asset('admin/js/plugins/syntaxhighlighter/shCore.js') }}"></script>
    <script src="{{asset('admin/js/plugins/syntaxhighlighter/shBrushJScript.js')}}"></script>
    <script src="{{asset('admin/js/plugins/syntaxhighlighter/shBrushXml.js')}}"></script>
    <script src="{{asset('admin/js/plugins/syntaxhighlighter/shBrushCss.js')}}"></script>
    <script src="{{asset('admin/js/plugins/syntaxhighlighter/shBrushPhp.js')}}"></script>
    <script src="{{asset('admin/js/plugins/syntaxhighlighter/shBrushPlain.js')}}"></script>
    <script src="{{asset('admin/js/calls/syntaxhighlighter.js')}}"></script>
    <script src="{{asset('admin/js/plugins/accordions/jquery.collapsible.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins/forms/elements/jquery.bootstrap-touchspin.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins/forms/elements/jquery.switchery.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins/tooltip/jquery.tooltipster.min.js')}}"></script>
    <script src="{{asset('admin/js/calls/part.header.1.js')}}"></script>
    <script src="{{asset('admin/js/calls/part.theme.setting.js')}}"></script>
    <script src="{{asset('admin/js/plugins/charts/c3/c3.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins/charts/c3/d3.v3.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins/charts/other/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins/charts/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins/datetime/jqClock.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins/forms/elements/jquery.bootstrap-touchspin.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins/forms/elements/jquery.checkBo.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins/forms/elements/jquery.switchery.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins/table/footable.all.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins/tabs/jquery.easyResponsiveTabs.js')}}"></script>
    <script src="{{asset('admin/js/calls/dashboard.1.js')}}"></script>
    <script src="{{asset('admin/js/plugins/textrotator/jquery.simple-text-rotator.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins/tooltip/jquery.tooltipster.min.js')}}"></script>
    <script src="{{asset('admin/js/plugins/weather/jquery.simpleWeather.min.js')}}"></script>
    <script src="{{asset('admin/js/calls/part.header.1.js')}}"></script>
    <script src="{{asset('admin/js/calls/part.sidebar.2.js')}}"></script>
    <script src="{{asset('admin/js/calls/part.theme.setting.js')}}"></script>
    <script src="{{asset('admin/js/calls/shared.tooltipster.js')}}"></script>
  </body>
</html>