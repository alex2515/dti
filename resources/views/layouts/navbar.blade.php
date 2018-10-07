        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">NAVEGACIÓN PRINCIPAL</li>
          <li class="{{ active('home') }}"><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i><span>Panel</span></a></li>
          @can('categories.index')
            <li class="{{ active('categories') }}"><a href="{{ route('categories.index') }}"><i class="glyphicon glyphicon-bookmark"></i> <span>Categorías</span></a></li>
          @endcan
          @can('tags.index')
            <li class="{{ active('tags') }}"><a href="{{ route('tags.index') }}"><i class="glyphicon glyphicon-tags"></i> <span>Etiquetas</span></a></li>
          @endcan
          @can('posts.index')
            <li class="{{ active('posts') }}"><a href="{{ route('posts.index') }}"><i class="glyphicon glyphicon-fire"></i> <span>Eventos</span></a></li>
          @endcan
          @can('galleries.index')
            <li class="{{ active('galleries') }}"><a href="{{ route('galleries.index') }}"><i class="glyphicon glyphicon-picture"></i> <span>Galeria</span></a></li>
          @endcan
          @can('services.index')
            <li class="{{ active('services') }}"><a href="{{ route('services.index') }}"><i class="glyphicon glyphicon-education"></i> <span>Servicios</span></a></li>
          @endcan
          @can('portfolios.index')
            <li class="{{ active('portfolios') }}"><a href="{{ route('portfolios.index') }}"><i class="glyphicon glyphicon-folder-open"></i> <span>Portafolios</span></a></li>
          @endcan
          @can('testimonies.index')
            <li class="{{ active('testimonies') }}"><a href="{{ route('testimonies.index') }}"><i class="glyphicon glyphicon-pushpin"></i> <span>Testimonios</span></a></li>
          @endcan
          @can('customers.index')
            <li class="{{ active('customers') }}"><a href="{{ route('customers.index') }}"><i class="fa fa-users"></i> <span>Clientes</span></a></li>
          @endcan
          @can('presentations.index')
            <li class="{{ active('presentations') }}"><a href="{{ route('presentations.index') }}"><i class="glyphicon glyphicon-picture"></i> <span>Presentaciónes</span></a></li>
          @endcan
          @can('companies/1/edit')
            <li class="header">CONFIGURACIÓN</li>
            <li class="{{ active('companies/1/edit') }}"><a href="{{ route('companies/1/edit', 1) }}"><i class="glyphicon glyphicon-tent"></i><span>Datos de Empresa</span></a></li>
          @endcan
          @can('roles.index')
            <li class="{{ active('roles') }}"><a href="{{ route('roles.index') }}"><i class="glyphicon glyphicon-queen"></i> <span>Roles</span></a></li>
          @endcan
          @can('unities.index')
            <li class="{{ active('unities') }}"><a href="{{ route('unities.index') }}"><i class="glyphicon glyphicon-modal-window"></i> <span>Unidades</span></a></li>
          @endcan
          @can('users.index')
            <li class="{{ active('users') }}"><a href="{{ route('users.index') }}"><i class="glyphicon glyphicon-user"></i> <span>Usuarios</span></a></li>
          @endcan
          @can('teams.index')
            <li class="{{ active('teams') }}"><a href="{{ route('teams.index') }}"><i class="glyphicon glyphicon-globe"></i><span>Equipo de Trabajo</span></a></li>
          @endcan
        </ul>