<?php
require_once('functions/function.php');
needLogged();
if($_SESSION['role_id']== '1' || $_SESSION['role_id']== '2'){
get_header();
get_sidebar();
?>
   <div class="row">
        <div class="col-md-12 main_content">
            <div class="card">
              <div class="card-header">
                  <div class="row">
                      <div class="col-md-8">
                            <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> All User Messages</h4>
                      </div>
                      
                      <div class="clearfix"></div>
                  </div>
              </div>
              <div class="card-body">
                  <table class="table table-bordered table-striped table-hover custom_table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Sub</th>
                        <th scope="col">Message</th>
                        <th scope="col">Manage</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      
                      $sel= "SELECT * FROM corlate_contact NATURAL JOIN admin_user ORDER BY contact_id DESC";
                      $q = mysqli_query($con,$sel);
                      while($data=mysqli_fetch_assoc($q)){
                      
                      ?>
                        <tr>
                        <td><?= $data['contact_name']; ?></td>
                          <td><?= $data['contact_phone'] ;?></td>
                          <td><?= $data['contact_email']; ?></td>
                          <td><?= substr($data['contact_sub'],0,10); ?></td>
                          <td><?= substr($data['contact_msg'],0,20); ?></td>
                          <td>
                              <a href="view-message.php?v=<?= $data['user_id']; ?>"><i class="fa fa-eye fa-lg"></i></a>
                              <?php if($_SESSION['role_id'] == '1') { ?>
                              <a href="edit-user.php?e=<?= $data['user_id'] ?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                              <a href="delete-user.php?d=<?= $data['user_id']; ?>"><i class="fa fa-trash fa-lg"></i></a>
                                <?php } ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                  </table>
              </div>
              <div class="card-footer text-center">
                  .
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