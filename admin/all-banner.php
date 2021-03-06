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
                            <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> All Banner Information</h4>
                      </div>
                      <div class="col-md-4 text-right">
                        <?php if($_SESSION['role_id']== '1') { ?>
                          <a class="btn btn-sm btn-dark card_top_btn" href="add-banner.php"><i class="fa fa-th"></i> Add Banner</a>
                          <?php } ?>
                      </div>
                      <div class="clearfix"></div>
                  </div>
              </div>
              <div class="card-body">
                  <table class="table table-bordered table-striped table-hover custom_table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Sub Title</th>
                        <th scope="col">Button</th>
                        <th scope="col">URL</th>
                        <th scope="col">Image</th>
                        <th scope="col">Manage</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      
                      $sel= "SELECT * FROM banner_image ORDER BY banner_id DESC";
                      $q = mysqli_query($con,$sel);
                      while($data=mysqli_fetch_assoc($q)){
                      
                      ?>
                        <tr>
                        <td><?= $data['banner_title']; ?></td>
                          <td><?= $data['banner_subtitle'] ;?></td>
                          <td><?= $data['banner_btn']; ?></td>
                          <td><?= $data['banner_url']; ?></td>
                          <td><img height="50px" width="50px" src="banner/<?= $data['banner_image'];?>" alt=""></td>
     
                          <td>
                              <a href="view-banner.php?v=<?= $data['banner_id']; ?>"><i class="fa fa-eye fa-lg"></i></a>
                              <?php if($_SESSION['role_id'] == '1') { ?>
                              <a href="edit-banner.php?e=<?= $data['banner_id'] ?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                              <a href="delete-banner.php?d=<?= $data['banner_id']; ?>"><i class="fa fa-trash fa-lg"></i></a>
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