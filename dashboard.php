<?php 
require_once("model/utilisateurModel.php");
$TotalRH = RHcount();
$TotalCandidat =  Candidatcount();
$pourcentRH = pourcentageRH();
$pourcentcandidat = pourcentageCandidat();
?>

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
               

                <div class="card-body">
                  <h5 class="card-title">Nombre de RH</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $TotalRH ?></h6>
                      <span class="text-success small pt-1 fw-bold"><?php echo $pourcentRH ?>%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>
                
              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

               
                <div class="card-body">
                  <h5 class="card-title">Offres Postulées</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>$3,264</h6>
                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            
            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

               

                <div class="card-body">
                  <h5 class="card-title">Nombre de Candidats</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $TotalCandidat ?></h6>
                      <span class="text-danger small pt-1 fw-bold"><?php echo $pourcentcandidat ?>%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            
         

        