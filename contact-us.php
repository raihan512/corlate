<?php
require_once('functions/manage.php');
get_header();
?>


    <div class="page-title" style="background-image: url(images/page-title.png)">
        <h1>Contact us</h1>
    </div>

    <section id="contact-page">
        <div class="container">
            <div class="large-title text-center">        
                <h2>Drop Your Message</h2>
                <p>All users on MySpace will know that there are millions of people out there. Every day <br> besides so many people joining this community.</p>
            </div> 
            <div class="row contact-wrap">
                <?php
                    if(isset($_POST['submit'])){
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $cell = $_POST['cell'];
                        $sub = $_POST['subject'];
                        $msg = $_POST['message'];
                        
                        $insert = "INSERT INTO corlate_contact(contact_name,contact_email,contact_phone,contact_sub,contact_msg)
                        VALUES ('$name','$email','$cell','$sub','$msg')";
                        
                        if(mysqli_query($con,$insert)){
                            echo "<script>alert('Message send successfully')</script>";
                        }else{
                            echo "<script>alert('message send Failed')</script>";
                        }

                    }
                ?>
                
                <div class="status alert alert-success" style="display: none"></div>
                <form class="contact-form" method="post" action="">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" name="cell" class="form-control">
                        </div>                     
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->


    <?php
get_footer();
?>