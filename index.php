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

<!-- Page Content -->
<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Welcome to ------- --------
            </h1>
        </div>
    </div>


    <div class="row">
        <blockquote class="text-center">&ldquo;Whatever the endeavor, it&rsquo;s about learning&rdquo;.</blockquote>
        <p>------------------------------------------------------------------------------------------------------------------------------------------- --------------------------------------------------&hellip;  --------- ------------- ------------ -------------- ------- --------- ------------- ------------ -------------- ------- <strong><span style="text-decoration: underline;">  --------- ------------- ------------ -------------- -------. </span></strong> --------- ------------- ------------ -------------- -------  --------- ------------- ------------ -------------- ------- <strong> --------- ------------- ------------ -------------- -------</strong> <strong> --------- ------------- ------------ -------------- ------- </strong> --------- ------------- ------------ -------------- -------</p>
        <div>
        <p class="indent"><strong>1)&nbsp; </strong><strong>------- -----<span style="text-decoration: underline;">---- &ndash; --------- ------------- ------------ -------------- -------</span>  --------- ------------- ------------ -------------- -------</strong></p>
        <p  class="indent"><strong>2)&nbsp; </strong><strong>------- ----- <span style="text-decoration: underline;">---</span>  --------- ------------- ------------ -------------- -------</strong></p>
        <p  class="indent"><strong>3)&nbsp; </strong><strong>------- -------- <span style="text-decoration: underline;">------</span>  --------- ------------- ------------ -------------- -------</strong></p>
        </div>

        <p> --------- ------------- ------------ -------------- -------&nbsp;  --------- ------------- ------------ -------------- -------  --------- ------------- ------------ -------------- -------  --------- ------------- ------------ -------------- ------- </p>
        <div class="handwriting indent"> --------- ------------- ------------ -------------- -------</div>
        <p class="indent"> --------- ------------- ------------ -------------- -------</p>
    </div>
    <!-- Marketing Icons Section -->




    <hr>

    <!-- Call to Action Section -->
    <div class="well">
        <div class="row">
            <div class="col-md-8">
                <ul>
                    <li> --------- ------------- ------------ -------------- -------</li>
                    <li> --------- ------------- ------------ -------------- ------- <li></li>
                    <li> --------- ------------- ------------ -------------- -------</li>
                </ul>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-default btn-block" href="Contact.php"> --------- ------------- ------------ -------------- -------</a>
            </div>
        </div>
    </div>

</div>
<!-- /.container -->
