  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Tablero</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Catalogos</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         
              <li class="nav-heading">Empresas</li>

                <?php if ($_SESSION['id_cargo']!="2")
                { ?>
                <li>
                  <a href="alta-empresas.php">
                    <i class="bi bi-pencil"></i><span>Registrar</span>
                  </a>
                </li>
                <?php } ?>
                <?php if ($_SESSION['id_cargo']!="3")
                { ?>
                  <li>
                    <a href="tables-empresas.php">
                      <i class="bi bi-circle-fill"></i><span>Actualizar</span>
                    </a>
                  </li>                                  
                <?php } ?>
                 
                
                <li class="nav-heading">Indicadores Fiscales</li>
                <?php if ($_SESSION['id_cargo']!="2")
                { ?>
                <li>
                <a href="tables-isr.php">
                      <i class="bi bi-circle"></i><span>Tabla ISR Pers.Fis.</span>
                    </a>
                </li>
                <?php } ?>
                <?php if ($_SESSION['id_cargo']!="3")
                { ?>
                  <li>
                    <a href="tables-inpc.php">
                      <i class="bi bi-circle"></i><span>INPC</span>
                    </a>
                  </li>  
                  <li>
                    <a href="tables-recargo.php">
                      <i class="bi bi-circle"></i><span>Tasa Recargo</span>
                    </a>
                  </li>
                  <li>
                    <a href="tables-indicador.php">
                      <i class="bi bi-circle"></i><span>Otros Indicadores</span>
                    </a>
                  </li>
<!--                   <li>
                    <a href="tables-isr.php">
                      <i class="bi bi-circle"></i><span>Tabla ISR Pers.Fis.</span>
                    </a>
                  </li> --> 
                <?php } ?>

        </ul>
      </li><!-- End Tables Nav -->


      <!-- Captura de datos -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav2" data-bs-toggle="collapse" href="#">
          <i class="bi bi-brush"></i><span>Captura de Datos</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav2">
         
              <li class="nav-heading">Personas Fisicas</li>

                <?php if ($_SESSION['id_cargo']!="2")
                { ?>
                <li>
                  <a href="alta-captura.php">
                    <i class="ri ri-add-circle-line"></i><span>Act. Empresarial y/o Prof.</span>
                  </a>
                </li>
                <?php } ?>
                <?php if ($_SESSION['id_cargo']!="3")
                { ?>
                  <li>
                    <a href="tables-empresas.php">
                      <i class="ri ri-add-circle-fill"></i><span>Intermedio</span>
                    </a>
                  </li>                                  
                <?php } ?>
                 
                <li>
                    <a href="tables-recargo.php">
                      <i class="bi bi-circle"></i><span>ReSiCo</span>
                    </a>
                  </li>
                  <li>
                    <a href="tables-indicador.php">
                      <i class="bi bi-circle"></i><span>Arrendamiento</span>
                    </a>
                  </li>
                                  

                <li class="nav-heading">Indicadores Morales</li>
                <?php if ($_SESSION['id_cargo']!="2")
                { ?>
                <li>
                  <a href="alta-inpcs.php">
                    <i class="bi bi-circle"></i><span>Titulo II y III</span>
                  </a>
                </li>
                <?php } ?>
                <?php if ($_SESSION['id_cargo']!="3")
                { ?>
                  <li>
                    <a href="tables-inpc.php">
                      <i class="bi bi-circle"></i><span>ReSiCo</span>
                    </a>
                  </li>  

                <?php } ?>

        </ul>
      </li><!-- End Tables Nav -->











      <!-- Determinar impuestos -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav2" data-bs-toggle="collapse" href="#">
          <i class="bi bi-exclude"></i><span>Determinar Impuestos</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav2">
         
              <li class="nav-heading">Personas Fisicas</li>

                <?php if ($_SESSION['id_cargo']!="2")
                { ?>
                <li>
                  <a href="alta-empresas.php">
                    <i class="ri ri-add-circle-line"></i><span>Act. Empresarial y/o Prof.</span>
                  </a>
                </li>
                <?php } ?>
                <?php if ($_SESSION['id_cargo']!="3")
                { ?>
                  <li>
                    <a href="tables-empresas.php">
                      <i class="ri ri-add-circle-fill"></i><span>Intermedio</span>
                    </a>
                  </li>                                  
                <?php } ?>
                 
                <li>
                    <a href="tables-recargo.php">
                      <i class="bi bi-circle"></i><span>ReSiCo</span>
                    </a>
                  </li>
                  <li>
                    <a href="tables-indicador.php">
                      <i class="bi bi-circle"></i><span>Arrendamiento</span>
                    </a>
                  </li>
                                  

                <li class="nav-heading">Indicadores Morales</li>
                <?php if ($_SESSION['id_cargo']!="2")
                { ?>
                <li>
                  <a href="alta-inpcs.php">
                    <i class="bi bi-circle"></i><span>Titulo II y III</span>
                  </a>
                </li>
                <?php } ?>
                <?php if ($_SESSION['id_cargo']!="3")
                { ?>
                  <li>
                    <a href="tables-inpc.php">
                      <i class="bi bi-circle"></i><span>ReSiCo</span>
                    </a>
                  </li>  

                <?php } ?>

        </ul>
      </li><!-- End Tables Nav -->


      
      <li class="nav-heading">Pages</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.php">
          <i class="bi bi-person"></i>
          <span>Perfil</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.php">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.php">
          <i class="bi bi-envelope"></i>
          <span>Contacto</span>
        </a>
      </li><!-- End Contact Page Nav -->
    </ul>
  </aside><!-- End Sidebar-->