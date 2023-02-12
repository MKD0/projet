
  <div class="container">

<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

        <div class="d-flex justify-content-center py-4">
          <a href="" class="logo d-flex align-items-center w-auto">
            <img src="" alt="">
            <span class="d-none d-lg-block">WORKSPACE</span>
          </a>
        </div><!-- End Logo -->

        <div class="card mb-3">

          <div class="card-body">

            <div class="pt-4 pb-2">
              <h5 class="card-title text-center pb-0 fs-4">Création de compte</h5>
            </div>

            <form onsubmit="return validateForm() " class="row g-3 needs-validation" novalidate method="POST" enctype="multipart/form-data" id="myForm">

              <div class="col-12">
                <label for="yourName" class="form-label">Nom</label>
                <input type="text" name="nom" class="form-control" id="yourName" required>

              </div>
              <div class="col-12">
                <label for="yourName" class="form-label">Prenom</label>
                <input type="text" name="prenom" class="form-control" id="yourName" required>
              </div>

              <div class="col-12">
                <label for="yourEmail" class="form-label">Email</label>
                <input type="email" name="email" class="form-control"  id="yourEmail" required>
     
              </div>

              <div class="col-12">
                <label for="yourUsername" class="form-label" >Login</label>
                <div class="input-group has-validation">
                <input type="text" name="login" class="form-control" id="yourUsername" required>
                  
                </div>
              </div>

              <div class="col-12">
                <label for="yourPassword" class="form-label">mot de pass</label>
                <input type="password" name="mdp" class="form-control" id="yourPassword" required>
                <div class="invalid-feedback">Please enter your password!</div>
              </div>
              <div class="col-12">
                <label for="yourPassword" class="form-label">Profi</label>
                <input type="number" name="idProfil" value=4 hidden>
              </div>
              <div class="col-12">
                <label for="yourName" class="form-label">Téléphone</label>
                <input type="number" name="telephone" class="form-control" id="yourName" required>
                
              </div>
              <div class="col-12">
              <label for="">Description</label>
            <textarea name="description" class="form-control"  id="" cols="30" rows="5"></textarea>
              </div>
              <div class="col-12">
               <label for="" class="form-label">Photo</label>
                <input type="file" name="photo" class="form-control" id="" required>
                <label for="" class="form-label">CV</label>
                <input type="file" name="cv" class="form-control" id="" required>
              </div>
              <div class="col-12">
                <button class="btn btn-primary w-100" type="submit" name="inscrire">s'inscrire</button>
              </div>
            </form>

          </div>
        </div>

        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
          Designed by L2 GL</a>
        </div>

      </div>
    </div>
  </div>

</section>

</div>




