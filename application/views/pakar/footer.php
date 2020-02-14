 </div>  
      </div>
    </div>
    <footer id="page-wrapper-footer">
      <div class="text-footer">
        <p class="text-center">
          Copyright &copy 2019
        </p>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://ajax.googleleapis.com/ajax/libs/jquery/1/12/4/jquery.min.js"></script> -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.4.1.js') ?> "></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?> "></script>
    
    <!-- data tables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <!-- thetable merupakan id dari table -->
    <script>
      $(document).ready(function() {
        $('#thetable').DataTable();
      } );
    </script>

    <!-- ckeditor -->
    <script src="<?php echo base_url('assets/ckeditor/ckeditor.js') ?>"></script>
    <script>
      CKEDITOR.replace("theeditor");
    </script>
    <!-- membuat js untuk memunculkan collapse pada div sidebar collapse ketika dibuka di mobile -->
    <script src="<?php echo base_url('assets/js/sendiri.js') ?> "></script>

  </body>
</html>