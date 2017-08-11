<script src="/public/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/public/bootstrap/js/bootstrap.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Slimscroll -->
<script src="/public/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/public/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/public/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/public/dist/js/demo.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="/public/plugins/fullcalendar/fullcalendar.min.js"></script>
<!-- Page specific script -->

<!-- jQuery 2.2.3 -->
<script src="/public/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/public/bootstrap/js/bootstrap.min.js"></script>
<script src="/public/js/calendar.js"></script>
<script src="/public/js/datepicker.js"></script>
<!-- AdminLTE App -->
<script src="/public/dist/js/app.min.js"></script>

  <script src="/public/datatables/jquery.dataTables.min.js"></script>
  <script src="/public/datatables/dataTables.bootstrap.min.js"></script>

  <script>
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
  </script>
  
  <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
        });
      });
    </script>

</body>
</html>