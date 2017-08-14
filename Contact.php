<?php

require_once('lyt/template.php');
# trick to execute 1st time, but not 2nd so you don't have an inf loop
if (!isset($TPL)) {
    $TPL = new PageTemplate();
    $TPL->PageTitle = "Learner Maturity";
    $TPL->ContentHead = "lyt/includes.php";
    $TPL->ContentHeader = "lyt/header.php";
    $TPL->ContentFooter = "lyt/footer.php";
    $TPL->ContentBody = __FILE__;
    include "layout.php";
    exit;
}
?>

<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Contact Dave</h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">
        <!-- Map Column -->
        <div class="col-md-8">
            <!-- Embedded Google Map -->
            <iframe src="" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-md-4">
            <img src="img/goals.jpg" alt="" class="img-rounded img-responsive">
        </div>
        <!-- Contact Details Column -->
        <div class="col-md-4">
            <h3>Contact Details</h3>
            <p>
                <br>
            </p>
            <p><i class="fa fa-phone"></i>
                <abbr title="Phone">P</abbr>: </p>
            <p><i class="fa fa-envelope-o"></i>
                <abbr title="Email">E</abbr>: <a href=""></a>
            </p>
            <p><i class="fa fa-clock-o"></i>
                <abbr title="Hours">H</abbr>: By appointment</p>
            <ul class="list-unstyled list-inline list-social-icons hidden">
                <li>
                    <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                </li>
            </ul>
        </div>

    </div>
    <!-- /.row -->

    <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">About Traveling</h3>
                </div>
                <div class="panel-body">
                    I live in ---------. -----------------------------------------------------------------------------------------:<br/><br/>
                    <span class="bold">For Consultations:</span>  ------------------- --------- ----------------------- -------------------- ---------------------- ---------<br/><br/>
                    <span class="bold">For Group Presentations:</span> --------------------------------------------------------- -------------- ------------------- -------- ---------- ------- ----

                </div>
            </div>


        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <h3>Send Me a Message</h3>
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Full Name:</label>
                        <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Phone Number:</label>
                        <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Email Address:</label>
                        <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Message:</label>
                        <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                    </div>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>

    </div>
    <!-- /.row -->

    <hr>
</div>
<!-- /.container -->

<!-- Contact Form JavaScript -->
