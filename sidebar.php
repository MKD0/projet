  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a <?=(!empty($_SESSION) && $_SESSION["user"]["libelle"]=="RH") ?"":"hidden" ?> class="nav-link " href="?page=dashboard" >
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li  <?=(!empty($_SESSION) && $_SESSION["user"]["libelle"]=="ADMIN") ?"hidden":"" ?>  class="nav-item">
        <a class="nav-link " href="?page=accueil">
          <i class="bi bi-grid"></i>
          <span>Accueil</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a  <?=(!empty($_SESSION) && $_SESSION["user"]["libelle"]=="CANDIDAT") ?"":"hidden" ?>  class="nav-link " href="?page=accueil">
          <i class="bi bi-grid"></i>
          <span>Mes candidatures</span>
        </a>
      </li><!-- End Dashboard Nav -->
      

      <li <?=(!empty($_SESSION) && $_SESSION["user"]["libelle"]=="RH") ?"":"hidden" ?>   class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Offre</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="?page=pageOffreEm">
              <i class="bi bi-circle"></i><span>Offre emploie</span>
            </a>
          </li>
          
         <!--<li>
            <a href="components-accordion.html">
              <i class="bi bi-circle"></i><span>Offre Stage</span>
            </a>
          </li>-->
          
        </ul>
     <!-- </li> End Components Nav -->

      <li  <?=(!empty($_SESSION) && $_SESSION["user"]["libelle"]!="CANDIDAT") ?"":"hidden" ?>   class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav2" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Paramétre</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li <?=( $_SESSION["user"]["libelle"]=="RH"|| $_SESSION["user"]["libelle"]=="ADMIN") ?"":"hidden" ?>  >
            <a href="?page=utilisateur">
              <i class="bi bi-circle"></i><span>Utilisateur</span>
            </a>
          </li>
          <li <?=($_SESSION["user"]["libelle"]=="ADMIN") ?"":"hidden" ?>>
            <a href="?page=profil">
              <i class="bi bi-circle"></i><span>Profil</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Components Nav -->

   

     

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
