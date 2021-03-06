<?php 
require_once('functions/function.php');
needLogged();
if($_SESSION['role_id']== '1' || $_SESSION['role_id']== '2'){
get_header();
get_sidebar();

$id = $_GET['e'];

$sel = "SELECT * FROM banner_image WHERE banner_id='$id'";

$q= mysqli_query($con,$sel);

$data = mysqli_fetch_assoc($q);


if(!empty($_POST)){
    $title = $_POST['title'];
    $sub = $_POST['sub'];
    $url = $_POST['url'];
    $btn = $_POST['btn'];
    $image = $_FILES['pic'];
  $imageName = 'Banner-' . time() . '-' . rand(1,100). '.' . pathinfo($image['name'],PATHINFO_EXTENSION);
    $update = "UPDATE banner_image SET banner_title= '$title', banner_subtitle='$sub', banner_url='$url', banner_btn='$btn', banner_image='$imageName' WHERE banner_id= '$id'";
    if(mysqli_query($con,$update)){
      move_uploaded_file($image['tmp_name'],'banner/' .$imageName);
        header('Location: view-banner.php?v= '.$id);
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
                              <h4 class="card_header_title"><i class="fa fa-gg-circle"></i> Update Banner information</h4>
                        </div>
                        <div class="col-md-4 text-right">
                            <a class="btn btn-sm btn-dark card_top_btn" href="all-banner.php"><i class="fa fa-th"></i> All Banner</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="card-body">
                   <div class="form-group row custom_form_group">
                      <label class="col-sm-3 col-form-label">Title:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="" name="title" value="<?= $data['banner_title']; ?>">
                      </div>
                    </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Subtitle:</label>
                       <div class="col-sm-7">
                         <input type="text" class="form-control" id="" name="sub" value="<?= $data['banner_subtitle']; ?>">
                       </div>
                    </div>
                    <div class="form-group row custom_form_group">
                      <label class="col-sm-3 col-form-label">URL:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="" name="url" value="<?= $data['banner_url'];?>">
                      </div>
                    </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Button:</label>
                       <div class="col-sm-7">
                         <input type="text" class="form-control" id="" name="btn" value="<?= $data['banner_btn']; ?>">
                       </div>
                    </div>

                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Image:</label>
                       <div class="col-sm-7">
                        <img src="banner/<?= $data['banner_image']; ?>" alt="">
                       </div>
                    </div>

                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Change Image:</label>
                       <div class="col-sm-7">
                         <input type="file" name="pic">
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