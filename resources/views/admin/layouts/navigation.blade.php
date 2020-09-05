<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">

                    <img style="width: 100%;" src="../../consto/images/logo_vivi.png">

                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
           
                    <li>
                        <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
                    </li>



                    <li class="{{ isActiveRoute(['noticias','n_lista','n_nueva','n_secciones']) }}">
                        <a href="index.html"><i class="fas fa-newspaper"></i><span class="nav-label">Noticias</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            
                            <li class="{{ isActiveRoute(['n_lista']) }}"><a href="{{ route('n_lista') }}">Mis Noticias</a></li>
                            <li class="{{ isActiveRoute(['n_nueva']) }}"><a href="{{ route('n_nueva') }}">Nueva Noticia</a></li>
                            <li class="{{ isActiveRoute(['n_secciones']) }}"><a href="{{ route('n_secciones') }}">Secciones</a></li>

                        </ul>
                    </li>

                    <li class="{{ isActiveRoute(['modelos','m_lista','m_nueva']) }}">
                        <a href="index.html"><i class="fas fa-home"></i><span class="nav-label">Modelos</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="{{ isActiveRoute(['m_lista']) }}"><a href="{{ route('m_lista') }}">Lisa Modelos</a></li>
                            <li class="{{ isActiveRoute(['m_nueva']) }}"><a href="{{ route('m_nueva') }}">Nuevo Modelo</a></li>

                        </ul>
                    </li>
                  
                    <li>
                        <a href="metrics.html"><i class="fa fa-pie-chart"></i> <span class="nav-label">Analitic</span>  </a>
                    </li>
                    <li>
                        <a href="widgets.html"><i class="fa fa-flask"></i> <span class="nav-label">Configuracion</span></a>
                    </li>




        </ul>

    </div>
</nav>
