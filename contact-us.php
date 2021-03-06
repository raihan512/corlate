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
                        $name = htmlentities($_POST['name'],ENT_QUOTES); //htmlentities().ENT_QUOTES is used to avoid taking script from users
                        $email = htmlentities($_POST['email'],ENT_QUOTES);
                        $cell = htmlentities($_POST['cell'],ENT_QUOTES);
                        $sub = htmlentities($_POST['subject'],ENT_QUOTES);
                        $msg = htmlentities($_POST['message'],ENT_QUOTES);
                        $mess = 'Name:' . $name . '\n' . 'Email:' . $email . '\n' . 'Phone:' . $cell . '\n' . 'Sub:' . $sub .   '\n' . 'Message:' . $mess ;
                        
                
                        $insert = "INSERT INTO corlate_contact(contact_name,contact_email,contact_phone,contact_sub,contact_msg)
                        VALUES ('$name','$email','$cell','$sub','$msg')";
                        
                        if(mysqli_query($con,$insert)){
                            // send email
                            mail("raihangazi1024@gmail.com","My Website message",$mess);
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