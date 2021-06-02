<!-- header -->
<?= $this->include('layout/header'); ?>
<!-- end header -->

    <div class="container">
      <div class="card mt-3" data-aos="fade-up" data-aos-duration="600">
        <div class="card-body">
          <h1 class="card-title ml-3 text-center">Prakiraan Cuaca Internasional</h1>
          <div class="col-lg-6" style="margin: auto">
            <div class="input-group mb-3">
              <input type="text" class="form-control input-keyword text-center" placeholder="Masukkan Kota" />
              <span class="input-group-append">
                <button class="btn search-btn1" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="row cuaca-container"></div>   
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- script -->
    <script src="<?= base_url('assets/js/script.js')?>"></script>

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
