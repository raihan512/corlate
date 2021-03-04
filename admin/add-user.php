<?php 

require_once('functions/function.php');
needLogged();
if($_SESSION['role_id']== '1'){
get_header();
get_sidebar();

if(!empty($_POST)){
  $date = date('Y/m/d h:i:s', time() + 5*3600 );
  $name = $_POST['name'];
  $cell = $_POST['phone'];
  $mail = $_POST['email'];
  $username = $_POST['username'];
  $pw = md5($_POST['pass']);
  $rpw = md5($_POST['repass']);
  $role = $_POST['role'];
  $image = $_FILES['pic'];
  if(!empty($image['name'])){
  $imageName = 'user-' . time() . '-' . rand(). '.' . pathinfo($image['name'],PATHINFO_EXTENSION) ;
  }else{
    $imageName = '';
  }
  $insert = "INSERT INTO admin_user(user_name,user_phone,user_email,user_username,user_password,role_id,user_image,user_reg_time) 
  Value ('$name','$cell','$mail','$username','$pw','$role','$imageName','$date')";

  if(!empty($role)){
    if(mysqli_query($con,$insert)){
      move_uploaded_file($image['tmp_name'],'users/' .$imageName);
      header('Location: all-user.php');
    }else{
      echo 'User Registration Failed';
    }
  }else{
    echo "Please Add a role";
  }
                  
}

?>
    <div class="row">
        <div class="col-md-12 main_content">
            <form method="post" action="" id="regForm" enctype="multipart/form-data">
              <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8">
                              <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> User Registration</h4>
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
                        <input type="text" class="form-control" id="" name="name">
                      </div>
                    </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Phone:</label>
                       <div class="col-sm-7">
                         <input type="text" class="form-control" id="" name="phone">
                       </div>
                    </div>
                    <div class="form-group row custom_form_group">
                      <label class="col-sm-3 col-form-label">Email:</label>
                      <div class="col-sm-7">
                        <input type="email" class="form-control" id="" name="email">
                      </div>
                    </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Username:</label>
                       <div class="col-sm-7">
                         <input type="text" class="form-control" id="" name="username">
                       </div>
                    </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Password:</label>
                       <div class="col-sm-7">
                         <input type="password" class="form-control" id="pw" name="pass">
                       </div>
                    </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Confirm-Password:</label>
                       <div class="col-sm-7">
                         <input type="password" class="form-control" id="" name="repass">
                       </div>
                    </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Role:</label>
                       <div class="col-sm-7">
                         <select name="role" id=""  class="form-control">
                         <option value="">Select Role</option>
                         <?php
                          $select="SELECT * FROM admin_role ORDER BY role_id ASC";
                          $qr = mysqli_query($con,$select);
                          while($urole=mysqli_fetch_assoc($qr)){
                         ?>
                         <option value="<?= $urole['role_id']; ?>"><?= $urole ['role_name']; ?></option>
                         <?php } ?>
                         </select>
                       </div>
                    </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Image:</label>
                       <div class="col-sm-7">
                         <input type="file" id="" name="pic">
                       </div>
                    </div>
                    
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-sm btn-dark submit_btn">REGISTRATION</button>
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