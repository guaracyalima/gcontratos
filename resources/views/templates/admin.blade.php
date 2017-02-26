<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Proteus - Page - Blank</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <!-- ===== FAVICON =====-->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- ===== CSS =====-->
    <!-- General-->
    <link rel="stylesheet" href="{{ asset('css/admin/basic.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/general.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/theme.css') }}" class="style-theme">
    <link rel="stylesheet" href="{{ asset('css/admin/font-awesome.min.css') }}" class="style-theme">

    <!--[if lt IE 9]>
    <script src="{{ asset('js/admin/respond.min.js') }}"></script>
    <script src="{{ asset('js/admin/html5shiv.min.js') }}"></script>
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
    <!--THEME SETTINGS-->
    <div class="widget-theme-settings t-theme-settings-2"><a href="#" class="theme-settings-toggle"><i class="fa fa-paint-brush"></i></a>
      <div class="theme-settings-wrapper">
        <h3>Theme Settings</h3>
        <div class="theme-collapsible-cointainer">
          <div data-ason-type="scrollbar" data-ason-max-height="400px" class="ason-widget">
            <div id="themeSection1" class="theme-collapsible">Default<span></span></div>
            <div>
              <div class="cont">
                <div class="content"><a href="undefinedpage-blank.html" title="Amber" class="theme-skin-wrapper skin-default tt-theme-settings">
                    <div class="l-row">
                      <div class="l-span-xs-4 theme-skin skin-c-1"></div>
                      <div class="l-span-xs-4 theme-skin skin-c-2"></div>
                      <div class="l-span-xs-4 theme-skin skin-c-3"></div>
                    </div></a><a href="undefinedpage-blank.html" title="Medium Purple" class="theme-skin-wrapper skin-medium-purple tt-theme-settings">
                    <div class="l-row">
                      <div class="l-span-xs-3 theme-skin skin-c-1"></div>
                      <div class="l-span-xs-3 theme-skin skin-c-2"></div>
                      <div class="l-span-xs-3 theme-skin skin-c-3"></div>
                      <div class="l-span-xs-3 theme-skin skin-c-4"></div>
                    </div></a>
                </div>
              </div>
            </div>
            <div id="themeSection2" class="theme-collapsible">Material<span></span></div>
            <div>
              <div class="cont">
                <div class="content">
                  <div title="Material Design Soon" class="theme-skin-wrapper skin-soon tt-theme-settings">
                    <div class="l-row">
                      <div class="l-span-xs-12 theme-skin skin-c-soon">Material Design Soon</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
            <h1><a href="{{ route('admin.home.index') }}"><span class="logo-default visible-default-inline-block"><img src="{{ asset('img/admin/logo.png') }}" alt="Proteus"></span><span class="logo-medium visible-compact-inline-block"><img src="img/logo_medium.png" alt="Proteus" title="PROTEUS"></span>
                <spanl class="logo-small visible-collapsed-inline-block"><img src="img/logo_small.png" alt="Proteus" title="PROTEUS"></spanl></a></h1>
          </div>
        </div>
        <!--Main Menu-->
        <div class="l-side-box">
          <!--MAIN NAVIGATION MENU-->
          <nav class="navigation">
            <ul data-ason-type="menu" class="ason-widget">
              <li><a href="#"><i class="icon fa fa-dashboard"></i><span class="title">Dashboard</span><span class="arrow"><i class="fa fa-angle-left"></i></span><span class="info">2</span></a>
                <ul>
                  <li><a href="index.html"><span class="title">Dashboard 1</span></a>
                  </li>
                  <li><a href="dashboard-2.html"><span class="title">Dashboard 2</span></a>
                  </li>
                </ul>
              </li>
              <li><a href="#"><i class="icon fa fa-pause"></i><span class="title">Layouts</span><span class="arrow"><i class="fa fa-angle-left"></i></span></a>
                <ul>
                  <li><a href="layout-menu.html"><span class="title">Menu</span></a>
                  </li>
                  <li><a href="#"><span class="title">Page</span><span class="arrow"><i class="fa fa-angle-left"></i></span><span class="info">2</span></a>
                    <ul>
                      <li><a href="layout-page-full.html"><span class="title">Full Width</span></a>
                      </li>
                      <li><a href="layout-page-boxed.html"><span class="title">Boxed</span></a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#"><span class="title">Sidebar</span><span class="arrow"><i class="fa fa-angle-left"></i></span><span class="info">6</span></a>
                    <ul>
                      <li><a href="#"><span class="title">Compact</span><span class="arrow"><i class="fa fa-angle-left"></i></span><span class="info">2</span></a>
                        <ul>
                          <li><a href="layout-sidebar-compact-left.html"><span class="title">Left</span></a>
                          </li>
                          <li><a href="layout-sidebar-compact-right.html"><span class="title">Right</span></a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#"><span class="title">Collapsed</span><span class="arrow"><i class="fa fa-angle-left"></i></span><span class="info">2</span></a>
                        <ul>
                          <li><a href="layout-sidebar-collapsed-left.html"><span class="title">Left</span></a>
                          </li>
                          <li><a href="layout-sidebar-collapsed-right.html"><span class="title">Right</span></a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#"><span class="title">Pixel Based</span><span class="arrow"><i class="fa fa-angle-left"></i></span><span class="info">8</span></a>
                        <ul>
                          <li><a href="layout-sidebar-left.html"><span class="title">Left</span></a>
                          </li>
                          <li><a href="layout-sidebar-right.html"><span class="title">Right</span></a>
                          </li>
                          <li><a href="layout-sidebar-2-left.html"><span class="title">2 Left</span></a>
                          </li>
                          <li><a href="layout-sidebar-2-right.html"><span class="title">2 Right</span></a>
                          </li>
                          <li><a href="layout-sidebar-left-right.html"><span class="title">Left and Right</span></a>
                          </li>
                          <li><a href="layout-sidebar-1-left-2-right.html"><span class="title">1 Left and 2 Right</span></a>
                          </li>
                          <li><a href="layout-sidebar-1-right-2-left.html"><span class="title">1 Right and 2 Left</span></a>
                          </li>
                          <li><a href="layout-sidebar-2-left-2-right.html"><span class="title">2 Left and 2 Right</span></a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#"><span class="title">Percentage Based</span><span class="arrow"><i class="fa fa-angle-left"></i></span><span class="info">3</span></a>
                        <ul>
                          <li><a href="layout-sidebar-percent-left.html"><span class="title">Left</span></a>
                          </li>
                          <li><a href="layout-sidebar-percent-right.html"><span class="title">Right</span></a>
                          </li>
                          <li><a href="layout-sidebar-percent-left-right.html"><span class="title">Left and Right</span></a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#"><span class="title">Slide</span><span class="arrow"><i class="fa fa-angle-left"></i></span><span class="info">2</span></a>
                        <ul>
                          <li><a href="layout-sidebar-slide-default.html"><span class="title">Default</span></a>
                          </li>
                          <li><a href="layout-sidebar-slide-static.html"><span class="title">Static</span></a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#"><span class="title">Slide and Push</span><span class="arrow"><i class="fa fa-angle-left"></i></span><span class="info">2</span></a>
                        <ul>
                          <li><a href="layout-sidebar-slide-push-default.html"><span class="title">Default</span></a>
                          </li>
                          <li><a href="layout-sidebar-slide-push-static.html"><span class="title">Static</span></a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#"><span class="title">Header</span><span class="arrow"><i class="fa fa-angle-left"></i></span><span class="info">9</span></a>
                    <ul>
                      <li><a href="layout-header-default.html"><span class="title">Default 1</span></a>
                      </li>
                      <li><a href="layout-header-default-2.html"><span class="title">Default 2</span></a>
                      </li>
                      <li><a href="layout-header-fixed.html"><span class="title">Fixed</span></a>
                      </li>
                      <li><a href="layout-header-fixed-boxed.html"><span class="title">Fixed and Boxed</span></a>
                      </li>
                      <li><a href="layout-header-sticky.html"><span class="title">Sticky</span></a>
                      </li>
                      <li><a href="layout-header-sticky-boxed.html"><span class="title">Sticky and Boxed</span></a>
                      </li>
                      <li><a href="layout-header-slide.html"><span class="title">Slide</span></a>
                      </li>
                      <li><a href="layout-header-slide-push.html"><span class="title">Slide and Push</span></a>
                      </li>
                      <li><a href="layout-header-multiple.html"><span class="title">Multiple</span></a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#"><span class="title">Footer</span><span class="arrow"><i class="fa fa-angle-left"></i></span><span class="info">9</span></a>
                    <ul>
                      <li><a href="layout-footer-default.html"><span class="title">Default 1</span></a>
                      </li>
                      <li><a href="layout-footer-default-2.html"><span class="title">Default 2</span></a>
                      </li>
                      <li><a href="layout-footer-fixed.html"><span class="title">Fixed</span></a>
                      </li>
                      <li><a href="layout-footer-fixed-boxed.html"><span class="title">Fixed and Boxed</span></a>
                      </li>
                      <li><a href="layout-footer-sticky.html"><span class="title">Sticky</span></a>
                      </li>
                      <li><a href="layout-footer-sticky-boxed.html"><span class="title">Sticky and Boxed</span></a>
                      </li>
                      <li><a href="layout-footer-slide.html"><span class="title">Slide</span></a>
                      </li>
                      <li><a href="layout-footer-slide-push.html"><span class="title">Slide and Push</span></a>
                      </li>
                      <li><a href="layout-footer-multiple.html"><span class="title">Multiple</span></a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="#"><i class="icon fa fa-tasks"></i><span class="title">Forms</span><span class="arrow"><i class="fa fa-angle-left"></i></span></a>
                <ul>
                  <li><a href="form-layout.html"><span class="title">Layout</span></a>
                  </li>
                  <li><a href="form-elements.html"><span class="title">Elements</span></a>
                  </li>
                  <li><a href="form-validation.html"><span class="title">Validation</span></a>
                  </li>
                  <li><a href="form-wizard.html"><span class="title">Wizard</span></a>
                  </li>
                  <li><a href="form-upload.html"><span class="title">File upload and WYSIWYG</span></a>
                  </li>
                </ul>
              </li>
              <li><a href="#"><i class="icon fa fa-table"></i><span class="title">Tables</span><span class="arrow"><i class="fa fa-angle-left"></i></span></a>
                <ul>
                  <li><a href="table-basic.html"><span class="title">Basic Table</span></a>
                  </li>
                  <li><a href="table-datatable.html"><span class="title">Data Table</span></a>
                  </li>
                  <li><a href="table-footable.html"><span class="title">Foo Table</span></a>
                  </li>
                </ul>
              </li>
              <li><a href="#"><i class="icon fa fa-bar-chart-o"></i><span class="title">Charts</span><span class="arrow"><i class="fa fa-angle-left"></i></span></a>
                <ul>
                  <li><a href="chart-flot.html"><span class="title">Flot</span></a>
                  </li>
                  <li><a href="chart-c3.html"><span class="title">C3</span></a>
                  </li>
                  <li><a href="chart-morris.html"><span class="title">Morris</span></a>
                  </li>
                  <li><a href="chart-rickshaw.html"><span class="title">Rickshaw</span></a>
                  </li>
                  <li><a href="chart-other.html"><span class="title">Other</span></a>
                  </li>
                </ul>
              </li>
              <li><a href="#"><i class="icon fa fa-tasks"></i><span class="title">UI Elements</span><span class="arrow"><i class="fa fa-angle-left"></i></span><span class="info">24</span></a>
                <ul>
                  <li><a href="ui-grid.html"><span class="title">Grids</span></a>
                  </li>
                  <li><a href="ui-box.html"><span class="title">Boxes and Panels</span></a>
                  </li>
                  <li><a href="ui-draggable.html"><span class="title">Draggables</span></a>
                  </li>
                  <li>
                    <div class="divider"></div>
                  </li>
                  <li><a href="ui-doc.html"><span class="title">Documentation</span></a>
                  </li>
                  <li><a href="ui-typography.html"><span class="title">Typography</span></a>
                  </li>
                  <li>
                    <div class="divider"></div>
                  </li>
                  <li><a href="ui-button.html"><span class="title">Buttons</span></a>
                  </li>
                  <li><a href="ui-icons.html"><span class="title">Icons</span></a>
                  </li>
                  <li>
                    <div class="divider"></div>
                  </li>
                  <li><a href="ui-accordion.html"><span class="title">Accordions</span></a>
                  </li>
                  <li><a href="ui-breadcrumb.html"><span class="title">Breadcrumbs</span></a>
                  </li>
                  <li><a href="ui-pagination.html"><span class="title">Pagination</span></a>
                  </li>
                  <li><a href="ui-progressbar.html"><span class="title">Progressbars</span></a>
                  </li>
                  <li><a href="ui-page-progressbar.html"><span class="title">Page Progressbars</span></a>
                  </li>
                  <li><a href="ui-spinner.html"><span class="title">Spinners</span></a>
                  </li>
                  <li><a href="ui-slider.html"><span class="title">Sliders</span></a>
                  </li>
                  <li><a href="ui-tab.html"><span class="title">Tabs</span></a>
                  </li>
                  <li><a href="ui-tag.html"><span class="title">Tags</span></a>
                  </li>
                  <li><a href="ui-pricing-table.html"><span class="title">Pricing Tables</span></a>
                  </li>
                  <li>
                    <div class="divider"></div>
                  </li>
                  <li><a href="ui-tooltip.html"><span class="title">Tooltips and Popovers</span></a>
                  </li>
                  <li><a href="ui-modal.html"><span class="title">Modals</span></a>
                  </li>
                  <li><a href="ui-notification.html"><span class="title">Notifications</span></a>
                  </li>
                  <li>
                    <div class="divider"></div>
                  </li>
                  <li><a href="ui-calendar.html"><span class="title">Calendar</span></a>
                  </li>
                  <li><a href="ui-date-time.html"><span class="title">Date and Timepicker</span></a>
                  </li>
                  <li>
                    <div class="divider"></div>
                  </li>
                  <li><a href="ui-colorpicker.html"><span class="title">Colorpickers</span></a>
                  </li>
                  <li><a href="ui-map.html"><span class="title">Maps</span></a>
                  </li>
                </ul>
              </li>
              <li><a href="widget.html"><i class="icon fa fa-cogs"></i><span class="title">Widgets</span></a>
              </li>
              <li class="active"><a href="#"><i class="icon fa fa-file-text-o"></i><span class="title">Pages</span><span class="arrow"><i class="fa fa-angle-left"></i></span><span class="info">11</span></a>
                <ul>
                  <li><a href="page-register.html"><span class="title">Register</span></a>
                  </li>
                  <li><a href="page-login.html"><span class="title">Login</span></a>
                  </li>
                  <li><a href="page-forgot-password.html"><span class="title">Forgot Password</span></a>
                  </li>
                  <li><a href="page-change-password.html"><span class="title">Change Password</span></a>
                  </li>
                  <li><a href="page-lock-screen.html"><span class="title">Lock Screen</span></a>
                  </li>
                  <li><a href="page-search.html"><span class="title">Search</span></a>
                  </li>
                  <li><a href="page-profile.html"><span class="title">Profile</span></a>
                  </li>
                  <li><a href="page-invoice.html"><span class="title">Invoice</span></a>
                  </li>
                  <li><a href="page-faqs.html"><span class="title">Faqs</span></a>
                  </li>
                  <li class="active"><a href="page-blank.html"><span class="title">Blank</span></a>
                  </li>
                  <li><a href="#"><span class="title">Error</span><span class="arrow"><i class="fa fa-angle-left"></i></span><span class="info">5</span></a>
                    <ul>
                      <li><a href="page-error-403.html"><span class="title">403</span></a>
                      </li>
                      <li><a href="page-error-404.html"><span class="title">404</span></a>
                      </li>
                      <li><a href="page-error-405.html"><span class="title">405</span></a>
                      </li>
                      <li><a href="page-error-500.html"><span class="title">500</span></a>
                      </li>
                      <li><a href="page-error-503.html"><span class="title">503</span></a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="#"><i class="icon fa fa-puzzle-piece"></i><span class="title">Apps</span><span class="arrow"><i class="fa fa-angle-left"></i></span></a>
                <ul>
                  <li><a href="app-mail.html"><span class="title">Mail App</span></a>
                  </li>
                  <li><a href="#"><span class="title">Music Player App</span><span class="soon last">SOON</span></a>
                  </li>
                  <li><a href="#"><span class="title">Movie App</span><span class="soon last">SOON</span></a>
                  </li>
                  <li><a href="#"><span class="title">Task Manager</span><span class="soon last">SOON</span></a>
                  </li>
                </ul>
              </li>
              <li><a href="#"><i class="icon fa fa-sitemap"></i><span class="title">Menu Levels</span><span class="arrow"><i class="fa fa-angle-left"></i></span></a>
                <ul>
                  <li><a href="#"><span class="title">Menu Level 1.1</span></a>
                  </li>
                  <li><a href="#"><span class="title">Menu Level 1.2</span><span class="arrow"><i class="fa fa-angle-left"></i></span><span class="info">3</span></a>
                    <ul>
                      <li><a href="#"><span class="title">Menu Level 2.1</span></a>
                      </li>
                      <li><a href="#"><span class="title">Menu Level 2.2</span><span class="arrow"><i class="fa fa-angle-left"></i></span><span class="info">3</span></a>
                        <ul>
                          <li><a href="#"><span class="title">Menu Level 3.1</span></a>
                          </li>
                          <li><a href="#"><span class="title">Menu Level 3.2</span></a>
                          </li>
                          <li><a href="#"><span class="title">Menu Level 3.3</span><span class="arrow"><i class="fa fa-angle-left"></i></span><span class="info">4</span></a>
                            <ul>
                              <li><a href="#"><span class="title">Menu Level 4.1</span></a>
                              </li>
                              <li><a href="#"><span class="title">Menu Level 4.2</span></a>
                              </li>
                              <li><a href="#"><span class="title">Menu Level 4.3</span></a>
                              </li>
                              <li><a href="#"><span class="title">Menu Level 4.4</span></a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#"><span class="title">Menu Level 2.3</span></a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#"><span class="title">Menu Level 1.3</span></a>
                  </li>
                  <li><a href="#"><span class="title">Menu Level 1.4</span></a>
                  </li>
                </ul>
              </li>
              <li><a href="#"><i class="icon fa fa-file-o"></i><span class="title">No Menu Levels</span></a>
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

        @yield('content')


        {{--<div class="l-page-header">--}}
          {{--<h2 class="l-page-title"><span>Blank</span> Page</h2>--}}
          {{--<!--BREADCRUMB-->--}}
          {{--<ul class="breadcrumb t-breadcrumb-page">--}}
            {{--<li><a href="index.html">Home</a></li>--}}
            {{--<li>Pages</li>--}}
            {{--<li class="active">Blank</li>--}}
          {{--</ul>--}}
        {{--</div>--}}
        {{--<div class="l-spaced-vertical">--}}
          {{--<div class="l-box no-border">--}}
            {{--<div class="l-spaced">--}}
              {{--<p>This is a <strong> Blank Page</strong>. It's a template for creating pages.</p>--}}
              {{--<p>You will also find a <strong>Sass template</strong> in the modules (<strong>page_blank.scss</strong>) and widgets(<strong>widget_blank.scss</strong>) directories.</p>--}}
              {{--<p>For more information check out the <strong> documentation </strong>.</p>--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
        {{--<!--FOOTER-->--}}
        {{--<footer class="l-footer l-footer-1 t-footer-1">--}}
          {{--<div class="group pt-10 pb-10 ph">--}}
            {{--<div class="copyright pull-left">--}}
              {{--© Copyright 2015--}}
              {{--<a href="#">Proteus.</a>--}}
              {{--Powered by--}}
              {{--<a href="#">LoxDesign.</a>--}}
              {{--All rights reserved.--}}
            {{--</div>--}}
            {{--<div class="version pull-right">v 1.0</div>--}}
          {{--</div>--}}
        {{--</footer>--}}
      {{--</section>--}}
    {{--</section>--}}




    <!-- ===== JS =====-->
    <!-- jQuery-->
    <script src="{{ asset('js/admin/jquery.min.js') }}"></script>
    <script src="{{ asset('js/admin/jquery-migrate.min.js') }}"></script>
    <!-- General-->
    <script src="{{ asset('js/admin/modernizr.min.js') }}"></script>
    <script src="{{ asset('js/admin/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/admin/jquery.asonWidget.js') }}"></script>
    <script src="{{ asset('js/admin/plugins/plugins.js') }}"></script>
    <script src="{{ asset('js/admin/general.js') }}"></script>
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
    <script src="{{ asset('js/admin/plugins/pageprogressbar/pace.min.js') }}"></script>
    <!-- Specific-->
    <script src="{{ asset('js/admin/shared/classie.js') }}"></script>
    <script src="{{ asset('js/admin/shared/jquery.cookie.min.js') }}"></script>
    <script src="{{ asset('js/admin/plugins/accordions/jquery.collapsible.min.js') }}"></script>
    <script src="{{ asset('js/admin/plugins/forms/elements/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ asset('js/admin/plugins/forms/elements/jquery.switchery.min.js') }}"></script>
    <script src="{{ asset('js/admin/plugins/page/jquery.blank.min.js') }}"></script>
    <script src="{{ asset('js/admin/plugins/tooltip/jquery.tooltipster.min.js') }}"></script>
    <script src="{{ asset('js/admin/calls/page.blank.js') }}"></script>
    <script src="{{ asset('js/admin/calls/part.header.1.js') }}"></script>
    <script src="{{ asset('js/admin/calls/part.theme.setting.js') }}"></script>
  </body>
</html>