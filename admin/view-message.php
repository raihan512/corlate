<?php
require_once('functions/function.php');
needLogged();
if($_SESSION['role_id']== '1' || $_SESSION['role_id']== '2'){
get_header();
get_sidebar();

$id= $_GET['v'];

$sel= "SELECT * FROM corlate_contact NATURAL JOIN admin_user WHERE user_id= '$id'";
$q=mysqli_query($con,$sel);
$data=mysqli_fetch_assoc($q);

?>
    <div class="row">
        <div class="col-md-12 main_content">
            <div class="card">
              <div class="card-header">
                  <div class="row">
                      <div class="col-md-8">
                            <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> View User Information</h4>
                      </div>
                      <div class="col-md-4 text-right">
                          <a class="btn btn-sm btn-dark card_top_btn" href="all-user.php"><i class="fa fa-th"></i> All User</a>
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
                                  <td>Name</td>
                                  <td>:</td>
                                  <td><?= $data['contact_name']; ?></td>
                              </tr>
                              <tr>
                                  <td>Phone</td>
                                  <td>:</td>
                                  <td><?= $data['contact_phone']; ?></td>
                              </tr>
                              <tr>
                                  <td>Email</td>
                                  <td>:</td>
                                  <td><?= $data['contact_email']; ?></td>
                              </tr>
                              <tr>
                                  <td>Subject</td>
                                  <td>:</td>
                                  <td><?= $data['contact_sub']; ?></td>
                              </tr>
                              <tr>
                                  <td>User Message</td>
                                  <td>:</td>
                                  <td><?= $data['contact_msg']; ?></td>
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