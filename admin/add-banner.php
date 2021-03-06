<?php 

require_once('functions/function.php');
needLogged();
if($_SESSION['role_id']== '1'){
get_header();
get_sidebar();

if(!empty($_POST)){
 
  $title = $_POST['title'];
  $sub = $_POST['subtitle'];
  $btn = $_POST['button'];
  $url = $_POST['url'];
  $image = $_FILES['pic'];
  $imageName = 'Banner-' . time() . '-' . rand(1,100). '.' . pathinfo($image['name'],PATHINFO_EXTENSION);

  $insert = "INSERT INTO banner_image(banner_title,banner_subtitle,banner_btn,banner_url,banner_image) 
  Value ('$title','$sub','$btn','$url','$imageName')";


    if(mysqli_query($con,$insert)){
      move_uploaded_file($image['tmp_name'],'banner/' .$imageName);
      header('Location: all-banner.php');
    }else{
      echo 'Banner add Failed';
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
                              <h4 class="card_header_title"><i class="fa fa-gg-circle"></i>ADD Banner</h4>
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
                        <input type="text" class="form-control" id="" name="title">
                      </div>
                    </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">Subtitle:</label>
                       <div class="col-sm-7">
                         <input type="text" class="form-control" id="" name="subtitle">
                       </div>
                    </div>
                    <div class="form-group row custom_form_group">
                      <label class="col-sm-3 col-form-label">Button:</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="" name="button">
                      </div>
                    </div>
                    <div class="form-group row custom_form_group">
                       <label class="col-sm-3 col-form-label">URL:</label>
                       <div class="col-sm-7">
                         <input type="text" class="form-control" id="" name="url">
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
                    <button type="submit" class="btn btn-sm btn-dark submit_btn">Add Banner</button>
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