
    <div class="pagetitle">
      <h1>Mon Profil</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="upload/<?php echo $_SESSION['user']["photo"]?>" alt="Profile" class="rounded-circle" width="100px" height="100px" style="">
              <h2><?php echo $_SESSION['user']["prenom"]." ".$_SESSION['user']["nom"]?></h2>
              <h3><?php echo $_SESSION['user']["libelle"]?></h3>
              <a href="upload/<?php echo $_SESSION['user']["cv"]?>" 
              class="btn btn-primary"><i class=" bi bi-download"></i>
               Voir le CV
              </a>
              
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Aperçu</button>
                </li>
                <li class="nav-item">
                  <button class="nav-link " data-bs-toggle="tab" data-bs-target="#profile-change-password">change password</button>
                </li>
                <li class="nav-item">
                  <button class="nav-link " data-bs-toggle="tab" data-bs-target="#profile-settings">Mettre_a_jour_cv</button>
                </li>


              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Description de mon Parcours</h5>
                  <p class="small fst-italic"><?php echo $_SESSION['user']["description"]?></p>
                  <h5 class="card-title">Détails du Profil</h5>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label ">Nom et Prénom</div>
                      <div class="col-lg-9 col-md-8"><?php echo $_SESSION['user']["prenom"]." ".$_SESSION['user']["nom"]?></div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Email</div>
                      <div class="col-lg-9 col-md-8"><?php echo $_SESSION['user']["email"]?></div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Profil</div>
                      <div class="col-lg-9 col-md-8"><?php echo $_SESSION['user']["libelle"]?></div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Téléphone</div>
                      <div class="col-lg-9 col-md-8"><?php echo $_SESSION['user']["telephone"]?></div>
                    </div>
                    
                </div>
              </div>
           
           
         
         <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form method="POST">

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="ancien_mdp" type="password" class="form-control">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="nouveau_mdp" type="password" class="form-control">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="confirm_mdp" type="password" class="form-control">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" name ="changepass"class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->
           </div>
                
           
              <div class="tab-pane fade pt-3" id="profile-settings">
                  <!-- Change Password Form -->
                  <form method="POST" enctype="multipart/form-data">

                    <div class="row mb-3">
                      <label for="" class="col-md-1 col-lg-1 col-form-label">CV</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="cv" type="file" class="form-control">
                      </div>
                      <div class="text-center">
                      <button type="submit" name ="download" class="btn btn-primary">Mettre_a_jour_cv</button>
                    </div>
                    </div>     
                  </form><!-- End Change Password Form -->
               </div>
          </div>


</section>