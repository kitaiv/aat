<?

require_once '../../../connect.php';

$variables = mysqli_query($connect, "SELECT * FROM `variables`");

$vars = [];

while($var = mysqli_fetch_assoc($variables)){
  $vars[$var['name']] = $var['value'];
}

?>

<div class="content-wrapper">
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-outline card-info">
        <div class="card-header">
          <h3 class="card-title">
            Представництво в судах
          </h3>
        </div>
        <!-- /.card-header -->
        <form action="save-changes.php" method="post">
          <div class="card-body">
              <textarea id="summernote" name="content">
                <?php echo $vars['representation-courts']?>
              </textarea>
          </div>
          <div class="container-fluid">
            <button>Зберегти зміни</button>
          </div>
        </form>
      </div>
    </div>
    <!-- /.col-->
  </div>
  <!-- ./row -->
  <div class="row">
    <div class="col-md-12">
      <div class="card card-outline card-info">
        <div class="card-header">
          <h3 class="card-title">
            CodeMirror
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
              <textarea id="codeMirrorDemo" class="p-3">
<div class="info-box bg-gradient-info">
  <span class="info-box-icon"><i class="far fa-bookmark"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">Bookmarks</span>
    <span class="info-box-number">41,410</span>
    <div class="progress">
      <div class="progress-bar" style="width: 70%"></div>
    </div>
    <span class="progress-description">
      70% Increase in 30 Days
    </span>
  </div>
</div>
              </textarea>
        </div>
        <div class="card-footer">
          Visit <a href="https://codemirror.net/">CodeMirror</a> documentation for more examples and information about the plugin.
        </div>
      </div>
    </div>
    <!-- /.col-->
  </div>
  <!-- ./row -->
</section>
</div>
