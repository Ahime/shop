<header class="main-header">
    <a href="{{ route('index') }}" class="logo hidden-xs"><b>Ahimê</b></a>
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Barre de navigation</span>
        </a>
    <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 2 messages</li>
                        <li>
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="{{asset('storage/img/user3-128x128.jpg')}}" class="img-circle" alt="user image"/>
                                        </div>
                                        <h4>
                                            Sales Department
                                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="{{asset('storage/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="user image"/>
                                        </div>
                                        <h4>
                                            Reviewers
                                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">See All Messages</a></li>
                    </ul>
                </li>
        <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">10</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 10 notifications</li>
                        <li>
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user text-red"></i> You changed your username
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">View all</a></li>
                    </ul>
                </li>
        <!-- Tasks: style can be found in dropdown.less -->
                <li class="dropdown tasks-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag-o"></i>
                        <span class="label label-danger">9</span>
                    </a>
                </li>
        <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('storage/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image"/>
                        <span class="hidden-xs">{{$user->username}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="#" class="btn btn-default btn-flat">Voir Profil</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
      
<aside class="main-sidebar">
    <section class="sidebar">
    
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('storage/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{$user->username}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
            </div>
        </div>

        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i>
                    <span>UTILISATEURS</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">  
                    <li>
                        <a href="#">
                            <i class="fa fa-bars"></i> 
                            <span>PERSONNEL</span>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="{{ route('user.liste') }}">
                                        <i class="fa fa-circle-o"></i>
                                        Liste des Personnels
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('users.create') }}">
                                        <i class="fa fa-circle-o"></i>
                                        Ajouter un personnel
                                    </a>
                                </li>
                            </ul>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-bars"></i> 
                            <span>PARTENAIRE</span>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="{{ route('shop.liste') }}">
                                        <i class="fa fa-circle-o"></i>
                                        Liste des vendeurs
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-circle-o"></i>
                                        Agences de transport
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-circle-o"></i>
                                        Ajouter un partenaire
                                    </a>
                                </li>
                            </ul>
                        </a>
                    </li>
                </ul>
            </li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i>
                    <span>BOUTIQUES</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#">
                            <i class="fa fa-circle-o"></i>
                            Liste des boutiques
                        </a>
                    </li>  
                    <li>
                        <a href="#">
                            <i class="fa fa-bars"></i> 
                            <span>Mes Boutiques</span>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-circle-o"></i>
                                        Nom bout1
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-circle-o"></i>
                                        Nom bout2
                                    </a>
                                </li>
                            </ul>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-circle-o"></i>
                            Créer une nouvelle boutique
                        </a>
                    </li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-shopping-cart"></i> <span>ACHATS</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#">
                            <i class="fa fa-circle-o"></i>
                            Voir mes achats
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-circle-o"></i>
                            Mes commandes en cours
                        </a>
                    </li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-bullhorn"></i> <span>VENTES</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#">
                            <i class="fa fa-circle-o"></i>
                            Liste des commandes en cours
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-circle-o"></i>
                            Liste des ventes effectuées
                        </a>
                    </li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-truck"></i> <span>LIVRAISONS</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="p#">
                            <i class="fa fa-circle-o"></i> 
                            Livraisons en cours
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-circle-o"></i>
                            Voir mes livraisons
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-envelope"></i> <span>Messages</span>
                    <small class="label pull-right bg-yellow">12</small>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bell-o"></i>
                    <span>Notifications</span>
                    <span class="label label-primary pull-right">4</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-th"></i> 
                    <span>Widgets</span> <small class="label pull-right bg-green">new</small>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cog"></i> <span>PARAMETRES</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li>
                        <a href="#">
                            <i class="fa fa-circle-o"></i> 
                            Thèmes
                        </a>
                    </li>
                  <li>
                      <a href="#">
                          <i class="fa fa-circle-o"></i>
                          Slider
                      </a>
                  </li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cog"></i> <span>PUBLICATIONS</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li>
                        <a href="#">
                            <i class="fa fa-circle-o"></i> 
                            Booster Ma Boutique
                        </a>
                    </li>
                  <li>
                      <a href="#">
                          <i class="fa fa-circle-o"></i>
                          Publier Une Notification
                      </a>
                  </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-circle-o"></i> 
                    Signaler un problème
                </a>
            </li>
            <li class="header">CONFIDENTIALITE</li>
            <li><a href="{{ route('logout') }}">Déconnexion({{$user->username}})</a></li>
        </ul>
    </section>
</aside>
