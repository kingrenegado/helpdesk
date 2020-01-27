 <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/user.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido Usuario: </span>
                <h2><?php echo $_SESSION['nombre'] ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Opciones</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php" ><i class="fa fa-home"></i> Inicio </a>
                  </li>
                  <li><a><i class="fas fa-users"></i> Usuarios <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="lista_usuarios.php"><i class="fas fa-users"></i> Lista de Usuarios</a></li>
                       <li><a href="lista_usuarios_baja.php"><i class="fas fa-users"></i> Usuarios Dados de Baja</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fas fa-sticky-note"></i> Reportes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="lista_reportes.php"><i class="fas fa-list-ol"></i> Lista de reportes</a></li>
                      <li><a href="lista_reportes_soluc.php"><i class="fas fa-check"></i> Reportes Solucionados</a></li>
                       <li><a href="lista_reportes_espera_confir.php"><i class="fas fa-user-clock"></i> Reportes con espera de confirmación</a></li>
                      <li><a href="lista_reportes_soluc_temp.php"><i class="fas fa-clock"></i> Reportes con Solucion Temporal</a></li>
                      <li><a href="agregar_tipo_reporte.php"><i class="fas fa-plus"></i> Añadir Tipo de Reporte </a></li>
                      <li><a href="reporte.php"><i class="fas fa-ban"></i> Confirmación de Reportes </a></li>
                       <li><a href="all_reportes.php"><i class="fas fa-list-ol"></i> Todos los reportes</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fas fa-user-alt"></i> Perfil <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="profile.php"><i class="far fa-user-circle"></i> Ver perfil</a></li>
                    </ul>
                  </li>
                 <li><a><i class="fas fa-warehouse"></i> Áreas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="lista_area.php"><i class="fas fa-clipboard-list"></i> Lista de Áreas</a></li>
                      <li><a href="lista_area_baja.php"><i class="fas fa-clipboard-list"></i> Lista de Áreas Eliminadas</a></li>
                    </ul>
                  </li>
                   <li><a><i class="fas fa-user-tie"></i> Puestos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="lista_puestos.php"><i class="fas fa-clipboard-list"></i> Lista de Puestos</a></li>
                      <li><a href="lista_puestos_baja.php"><i class="fas fa-clipboard-list"></i> Lista de Puestos Eliminados</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
               
                  
                  
                        </li>
                    </ul>
                  </li>                  
                  
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->