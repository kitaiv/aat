<?php
      include_once "../../../../admin/adminPanel/admin-header.php";
      include_once "../../../../admin/adminPanel/sidebar.php";
      include_once "edit.php";
?>
<footer class="main-footer">
  <div class="float-right d-none d-sm-block">
    <b>Version</b> 3.1.0
  </div>
  <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<? $_SERVER[DOCUMENT_ROOT]?>/aat/admin/adminPanel/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<? $_SERVER[DOCUMENT_ROOT]?>/aat/admin/adminPanel/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<? $_SERVER[DOCUMENT_ROOT]?>/aat/admin/adminPanel/dist/js/adminlte.min.js"></script>
<!-- Summernote -->
<script src="<? $_SERVER[DOCUMENT_ROOT]?>/aat/admin/adminPanel/plugins/summernote/summernote-bs4.min.js"></script>
<!-- CodeMirror -->
<script src="<? $_SERVER[DOCUMENT_ROOT]?>/aat/admin/adminPanel/plugins/codemirror/codemirror.js"></script>
<script src="<? $_SERVER[DOCUMENT_ROOT]?>/aat/admin/adminPanel/plugins/codemirror/mode/css/css.js"></script>
<script src="<? $_SERVER[DOCUMENT_ROOT]?>/aat/admin/adminPanel/plugins/codemirror/mode/xml/xml.js"></script>
<script src="<? $_SERVER[DOCUMENT_ROOT]?>/aat/admin/adminPanel/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<? $_SERVER[DOCUMENT_ROOT]?>/aat/admin/adminPanel/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
</body>
</html>

