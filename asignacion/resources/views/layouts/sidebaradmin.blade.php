<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            

            <li>
              <a href="{{URL::action('AlumnoController@index')}}">
                <i class="fa fa-users"></i> 
                <span>Alumnos</span>
              </a>
            </li>
            <li>
              <a href="{{URL::action('TipoMateriaController@index')}}">
                <i class="fa fa-pencil-square"></i> 
                <span>Tipo Materia</span>
              </a>
            </li>
            


            </ul>          
          </ul>
        </section>
        <!-- /.sidebar -->