<?php 
require_once('functions/function.php');
needLogged();
if($_SESSION['role_id']== '1' || $_SESSION['role_id']== '2'){
get_header();
get_sidebar();

$id = $_GET['e'];

$sel = "SELECT * FROM admin_user WHERE user_id='$id'";

$q= mysqli_query($con,$sel);

$data = mysqli_fetch_assoc($q);


if(!empty($_POST)){
    $name = $_POST['name'];
    $cell = $_POST['phone'];
    $mail = $_POST['email'];
    $role = $_POST['role'];
    $update = "UPDATE admin_user SET user_name= '$name', user_phone='$cell', user_email='$mail', role_id='$role' WHERE user_id= '$id'";
    if(mysqli_query($con,$update)){
        header('Location: view-user.php?v= '.$id);
    }
}

?>
    <div class="row">
        <div class="col-md-12 main_content">
            <form method="post" action="" id="regForm">
              <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8">
                              <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> Update user information</h4>
                        </div>
                        <div class="col-md-4 text-right">
                            <a class="btn btn-sm btn-dark card_top_btn" href="all-user.php"><i class="fa fa-th"></i> All User</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="card-body">
                   <div class="form-group row custom_form_group">
                      <label class="col-sm-3 col-form-label">Name:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="" name="name" value="<?= $data['user_name']; ?>">
                      </div>
                    </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Phone:</label>
                       <div class="col-sm-7">
                         <input type="text" class="form-control" id="" name="phone" value="<?= $data['user_phone']; ?>">
                       </div>
                    </div>
                    <div class="form-group row custom_form_group">
                      <label class="col-sm-3 col-form-label">Email:</label>
                      <div class="col-sm-7">
                        <input type="email" class="form-control" id="" name="email" value="<?= $data['user_email'];?>">
                      </div>
                    </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Username:</label>
                       <div class="col-sm-7">
                         <input type="text" class="form-control" id="" name="username" value="<?= $data['user_username']; ?>" disabled>
                       </div>
                    </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Role:</label>
                       <div class="col-sm-7">
                         <select name="role" id=""  class="form-control">
                         
                         <?php
                          $select="SELECT * FROM admin_role ORDER BY role_id ASC";
                          $qr = mysqli_query($con,$select);
                          while($urole=mysqli_fetch_assoc($qr)){
                         ?>
                         <option value="<?= $urole['role_id']; ?>" <?php if($urole['role_id']==$data['role_id']) {echo "selected";} ?> > <?= $urole['role_name']; ?> </option>
                         <?php } ?>
                         </select>
                       </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-sm btn-dark submit_btn">Update</button>
                </div>
              </div>
          </form>
        </div>
    </div>
<?php
get_footer();
}else{
  header('Location: index.php');
}
?>