<?php
    include 'functions/html-builder.php';
    makeHeader();
?>
<body>

<div class="container-fluid">

    <h1>Building a page with functions</h1>

 <?php makeNavBar(); ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ul>
                    <li><a href="#"></a>No link yet</li>
                    <li><a href="#"></a>Still no link</li>
                </ul>
            </div> <!--col-sm-12-->
        </div> <!--row-->
    </div> <!--container-->

<?php makeFooter(); ?>