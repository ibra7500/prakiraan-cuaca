<!-- header -->
<?= $this->include('layout/header'); ?>
<!-- end header -->

    <div class="container">
      <div class="card mt-3" data-aos="fade-up" data-aos-duration="600">
        <div class="card-body">
          <h1 class="card-title ml-3 text-center">Cuaca Saat ini</h1>
          <div class="col-lg-6" style="margin: auto">
            <div class="input-group mb-3">
              <input type="text" class="form-control input-keyword2 text-center" placeholder="Masukkan Kota" />
              <span class="input-group-append">
                <button class="btn search-btn2" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div id="map" class="map" data-aos="zoom-out-up" data-aos-duration="1200" data-aos-delay="650"></div>

      <div class="row cuaca-container"></div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- script -->
    <script src="<?= base_url('/assets/js/script2.js')?>"></script>

    <!-- Aos js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Aos script -->
    <script>
      AOS.init({
        delay: 500, // values from 0 to 3000, with step 50ms
      });
    </script>

  </body>
</html>
