<?php
require_once('functions/function.php');
needLogged();
if($_SESSION['role_id']== '1' || $_SESSION['role_id']== '2'){
get_header();
get_sidebar();

$id= $_GET['v'];

$sel= "SELECT * FROM banner_image  WHERE banner_id= '$id'";
$q=mysqli_query($con,$sel);
$data=mysqli_fetch_assoc($q);

?>
    <div class="row">
        <div class="col-md-12 main_content">
            <div class="card">
              <div class="card-header">
                  <div class="row">
                      <div class="col-md-8">
                            <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> View Banner Information</h4>
                      </div>
                      <div class="col-md-4 text-right">
                          <a class="btn btn-sm btn-dark card_top_btn" href="all-banner.php"><i class="fa fa-th"></i> All Banner</a>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>
              <div class="card-body">
                  <div class="row">
                      <div class="col-md-2"></div>
                      <div class="col-md-8">
                          <table class="table table-bordered table-striped table-hover custom_view_table">
                              <tr>
                                  <td>Tittle</td>
                                  <td>:</td>
                                  <td><?= $data['banner_title']; ?></td>
                              </tr>
                              <tr>
                                  <td>Subtitle</td>
                                  <td>:</td>
                                  <td><?= $data['banner_subtitle']; ?></td>
                              </tr>
                              <tr>
                                  <td>Button</td>
                                  <td>:</td>
                                  <td><?= $data['banner_btn']; ?></td>
                              </tr>
                              <tr>
                                  <td>URL</td>
                                  <td>:</td>
                                  <td><?= $data['banner_url']; ?></td>
                              </tr>
                              <tr>
                                  <td>Image</td>
                                  <td>:</td>
                                  <td><img height="350px" width="500px" src="banner/<?= $data['banner_image'];?>" alt=""></td>
                              </tr>
                        
                          </table>
                      </div>
                      <div class="col-md-2"></div>
                  </div>
              </div>
              <div class="card-footer text-center">
              </div>
            </div>
        </div>
    </div>
<?php
get_footer();
}else{
    header('Location: index.php');
  }
?>