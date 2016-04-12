</div>
  <!-- /#wrapper -->

  <!-- jQuery -->
  <?=js("jquery.js")?>

  <!-- Bootstrap Core JavaScript -->
  <?=js('bootstrap.min.js')?>

  <!-- MetisMenu -->
  <?=js('plugins/metisMenu/metisMenu.min.js')?>

  <!-- Datatables JS -->
  <?=js('plugins/dataTables/jquery.dataTables.js')?>
  <?=js('plugins/dataTables/dataTables.bootstrap.js')?>

  <!-- Custom Theme JavaScript -->
  <?=js('sb-admin-2.js')?>

  <script>
  $(document).ready(function() {
      $('#tabel').dataTable();
  });

  $(document).ready(function() {
      $('#tabel-simple').dataTable({
        bFilter: false,
        bInfo: false,
        bLengthChange:false,
        pageLength:20,
        language : { emptyTable:'Tidak ada data'},
      });
  });

  $(document).ready(function() {
      $('#tabel-simple2').dataTable({
        bFilter: false,
        bInfo: false,
        bLengthChange:false,
        pageLength:20,
        language : { emptyTable:'Tidak ada data'},
      });
  });
  </script>

</body>

</html>
