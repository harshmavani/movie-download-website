<?php
if (isset($_POST['submit'])) {

    if (($_POST['name'] == "") || ($_POST['email'] == "") || ($_POST['subject'] == "") || ($_POST['message'] == "")){
        $msg =  "<p class='alert alert-danger pt-1 pb-1' style='padding:8!important;'>"."Please fill all filds"."</p>";
    }
    else{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $mailTo = "projectsmash.online@gmail.com";
        $headers ="From: ". $email;
        $txt ="you have received an email from ". $name.".\n". "$subject"."\n". "$message";
        mail($mailTo, $name, $txt ,$headers); 
        $msg = "<p class='alert alert-success pt-1 pb-1' style='padding:8!important;'>"."Sent sucessfully"."</p>";
        
        echo "<script>window.open('https://moviesarea.online','_self')</script>";

    }
}
?>
<style type="text/css">
    label{
        margin-top: 15px;
    }

</style>
<!--Section: Contact v.2-->

<div class="mb-4 col-lg-12 col-md-12 col-sm-12 col-xs-12 border_box">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5 border_box">Do you have any questions? Please contact us. Our team will come back to you within
        a matter of days to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-12 mb-md-0 mb-5" style="text-align: left;">
            <form id="contact-form" class="" name="contact-form" method="post">

                <!--Grid row-->
                <div class="row" >

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="" >Your name</label>
                            <input type="text" id="name" name="name" class="form-control" autocomplete="on" required="required">
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="email" class="">Your email</label>
                            <input type="email" id="email" name="email" class="form-control" required="required">
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="subject" class="">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control" required="required">
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message">Your message</label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" style="height: 125px;" required="required"></textarea>
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <div class="" style="text-align: right;">
                    <button class="btn btn-primary" name="submit" id="submit" style="margin-top: 25px;">Send Message</button>
                </div>

            </form>

            <div class="status" style="margin: 15px;"><?php if(!empty($msg)){echo $msg ;} ?></div>
        </div>
        <!--Grid column-->

    </div>

</div>
<!--Section: Contact v.2-->
