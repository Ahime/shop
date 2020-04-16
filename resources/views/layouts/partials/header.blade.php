<header class="main-header"> 
    <div class="top-menu">
        <div class="logo2">
            <b>
            <span class="text-success">Ah</span><span class="text-warning">imê</span><span class="text-danger">Shop</span>
            </b>
        </div>
        <div class="time">
            <span id="date_heure"></span>
        </div>
        <div class="pub visible-lg">
            <marquee class="text-muted">Ahimê vous souhaite un bon shopping depuis votre domicile</marquee>
        </div>
        <div class="actions visible-xs">
            <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#exampleModal" style="color: #fff">                       
                <span class="user">
                 <i class="fa fa-user"></i>
                </span>
            </a>
            <span class="cart">
             <i class="fa fa-shopping-cart"></i>
            </span>
        </div>
        <div class="block">
              <span class="country">
                Pays : Bénin
              </span>
              <span class="language">
                Langue : fr
              </span>
        </div>
    </div>
    <div class="logo hidden-xs">
      <a href="{{route('index')}}"><b>Ahimê</b> Shop</a>         
    </div>
                
    <nav class="navbar navbar-static-top">
      	<a href="#" class="sidebar-toggle {{set_active_sidebar('shops.create')}}" data-toggle="offcanvas" role="button">
            <span class="sr-only">Hambergueur</span>
        </a>  
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li id="{{set_active_route('index')}}">
                        <a href="{{ route('index') }}">Accueil<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="">
                        <a href="">A Propos<span class="sr-only">(current)</span></a>
                    </li>
                    <li>
                        <a href="">Services</a>
                    </li>
                    <li id="{{set_active_route('shops.create')}}"">
                        <a href="{{ route('shops.create') }}">Devenir Vendeur</a>
                    </li>
                    <li>
                        <a href="#">Nos Vendeurs</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mon Compte     
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">S'incrire</a></li>
                            <li><a href="#">Créer un compte</a></li>
                            <li><a href="#">Mes Boutiques</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Galerie</a>
                    </li>
                </ul>
                <form class="navbar-form navbar-left hidden-xs" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" id="navbar-search-input" placeholder="Recherche d'article">
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li id="{{set_active_route('users.create')}}">
                        <a href="{{ route('users.create') }}">s'inscrire</a>
                    </li>
                    <li id="">
                        <a href="{{ route('login-form') }}">se connecter</a>
                    </li>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav hidden-xs">
                          <!-- User Account: style can be found in dropdown.less
                            <li class="user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#exampleModal">
                                    <img src="{{ asset('storage/img/user.png') }}" class="user-image" alt="User Image"/>
                                </a>
                            </li>
                          -->
                            <li class="dropdown messages-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  <img src="{{ asset('storage/img/shopping-cart.png') }}" class="user-image" alt="User Image"/>
                                  <span class="label label-warning">4</span>
                                </a>    
                                <ul class="dropdown-menu">
                                    <li class="header">You have 4 messages</li>
                                        <li>
                                          <!-- inner menu: contains the actual data -->
                                            <ul class="menu">
                                                <li><!-- start message -->
                                                    <a href="#">
                                                        <div class="pull-left">
                                                            <img src="{{ asset('storage/img/shopping.png') }}" class="img-circle" alt="User Image"/>
                                                        </div>
                                                        <h4>
                                                          Support Team
                                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                        </h4>
                                                        <p>Why not buy a new awesome theme?</p>
                                                    </a>
                                                </li><!-- end message -->
                                                <li>
                                                    <a href="#">
                                                        <div class="pull-left">
                                                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="user image"/>
                                                        </div>
                                                        <h4>
                                                            Sales Department
                                                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                        </h4>
                                                        <p>Why not buy a new awesome theme?</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="footer"><a href="#">See All Messages</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </ul>        
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
      </nav>
</header>
<aside class="main-sidebar {{set_active_sidebar('shops.create')}}">
    <section class="sidebar {{set_active_sidebar('shops.create')}}">
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Recherche catégories...."/>
            <span class="input-group-btn">
              <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
            </span>
          </div>
        </form>
        <ul class="sidebar-menu">
            <li class="header">NOS CATEGORIES</li>
                <li class="active treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> 
                            <span>Dashboard</span> 
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="index.html">
                                <i class="fa fa-circle-o"></i>
                                Dashboard v1
                            </a>
                        </li>
                        <li class="active">
                          <a href="index2.html">
                              <i class="fa fa-circle-o"></i> 
                              Dashboard v2</a>
                        </li>
                    </ul>
                </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Layout Options</span>
                    <span class="label label-primary pull-right">4</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                      <a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a>
                    </li>
                    <li>
                        <a href="pages/layout/boxed.html">
                            <i class="fa fa-circle-o"></i> Boxed
                        </a>
                    </li>
                    <li>
                        <a href="pages/layout/fixed.html">
                            <i class="fa fa-circle-o"></i> Fixed
                        </a>
                    </li>
                    <li>
                        <a href="pages/layout/collapsed-sidebar.html">
                            <i class="fa fa-circle-o"></i> Collapsed Sidebar
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="pages/widgets.html">
                    <i class="fa fa-th"></i> 
                    <span>Widgets</span> 
                    <small class="label pull-right bg-green">new</small>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Charts</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="pages/charts/morris.html">
                            <i class="fa fa-circle-o"></i> Morris
                        </a>
                    </li>
                    <li>
                        <a href="pages/charts/flot.html">
                            <i class="fa fa-circle-o"></i> Flot
                        </a>
                    </li>
                    <li>
                      <a href="pages/charts/inline.html">
                          <i class="fa fa-circle-o"></i> Inline charts
                      </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>UI Elements</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="pages/UI/general.html">
                            <i class="fa fa-circle-o"></i> General
                        </a>
                    </li>
                    <li>
                        <a href="pages/UI/icons.html">
                            <i class="fa fa-circle-o"></i> Icons
                        </a>
                    </li>
                    <li>
                        <a href="pages/UI/buttons.html">
                            <i class="fa fa-circle-o"></i> Buttons
                        </a>
                    </li>
                    <li>
                        <a href="pages/UI/sliders.html">
                            <i class="fa fa-circle-o"></i> Sliders
                        </a>
                    </li>
                    <li>
                        <a href="pages/UI/timeline.html">
                            <i class="fa fa-circle-o"></i> Timeline
                        </a>
                    </li>
                    <li>
                        <a href="pages/UI/modals.html">
                            <i class="fa fa-circle-o"></i> Modals
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Forms</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="pages/forms/general.html">
                            <i class="fa fa-circle-o"></i> General Elements
                        </a>
                    </li>
                    <li>
                        <a href="pages/forms/advanced.html">
                            <i class="fa fa-circle-o"></i> Advanced Elements
                        </a>
                      </li>
                    <li>
                        <a href="pages/forms/editors.html">
                            <i class="fa fa-circle-o"></i> Editors
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> 
                    <span>Tables</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="pages/tables/simple.html">
                            <i class="fa fa-circle-o"></i> Simple tables
                        </a>
                    </li>
                    <li>
                        <a href="pages/tables/data.html">
                            <i class="fa fa-circle-o"></i> Data tables
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
</aside>
    