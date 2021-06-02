<!-- header -->
<?= $this->include('layout/header'); ?>
<!-- end header -->

    <div class="container">
      <div class="card mt-3 col-sm-12 col-md-12 col-lg-12" data-aos="fade-up" data-aos-duration="600" id="profile">
        <div class="card-body">
          <h1 class="card-title text-center">Tentang Kami</h1>
          <hr class="rounded" />

          <!-- Profile -->
          <div class="row cuaca-container">
            <!-- Ardian -->
            <div class="col-md-4 col-sm-4 col-lg-4 mb-3">
              <div class="card" id="about" data-aos="flip-left" data-aos-duration="1200" data-aos-delay="900">
                <div class="card-body">
                  <div class="flex">
                    <img src="<?= base_url('assets/img/profile/ardian.jpg')?>" class="gambar" />
                  </div>
                  <hr class="rounded" />
                  <h4 class="card-title text-center">Achmad Ardian Lestiowo</h4>
                  <br />
                  <ul>
                    <li>Student at Mercu Buana University</li>
                    <li>Enrolled in 2018</li>
                    <li>Studying at Informatics Engineering</li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- Arif -->
            <div class="col-md-4 col-sm-4 col-lg-4 mb-3">
              <div class="card" id="about" data-aos="flip-left" data-aos-duration="1200" data-aos-delay="900">
                <div class="card-body">
                  <div class="flex">
                    <img src="<?= base_url('assets/img/profile/arif.jpg')?>" class="gambar" />
                  </div>
                  <hr class="rounded" />
                  <h4 class="card-title text-center">Arif Yudi Setyo</h4>
                  <br />
                  <ul>
                    <li>Student at Mercu Buana University</li>
                    <li>Enrolled in 2018</li>
                    <li>Studying at Informatics Engineering</li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- Ibrahim -->
            <div class="col-md-4 col-sm-4 col-lg-4 mb-3">
              <div class="card" id="about" data-aos="flip-left" data-aos-duration="1200" data-aos-delay="900">
                <div class="card-body">
                  <div class="flex">
                    <img src="<?= base_url('assets/img/profile/ibrahim.jpg')?>" class="gambar" />
                  </div>
                  <hr class="rounded" />
                  <h4 class="card-title text-center">Mohammad Rahadyan Ibrahim</h4>
                  <ul>
                    <li>Student at Mercu Buana University</li>
                    <li>Enrolled in 2018</li>
                    <li>Studying at Informatics Engineering</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- End Profile -->

          <hr class="rounded" />

          <div class="col-lg-6" style="margin: auto"></div>
        </div>
      </div>

      <footer class="footer">&copy; Copyright 2021</footer>

      <div class="row cuaca-container"></div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Aos js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Aos script -->
    <script>
      AOS.init({
        delay: 500,
      });
    </script>
    <!--  -->
  </body>
</html>
