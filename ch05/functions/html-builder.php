<?php
/**
 * Created by PhpStorm.
 * User: Charlie Wallin
 * Date: 2/15/17
 * Time: 9:19 AM
 *
 */


/*
 * Functions to build a Web Page
 */

/*
 *  Name:           makeHeader()
 *  Desc:           Function to create a generic HTML header
 *  Arguments:      None
 *  Returns:        None
 */

function makeHeader() {
    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WEB 182</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>';
}

/*
 *  Name:           makeFooter()
 *  Desc:           Function to create a generic HTML footer
 *  Arguments:      None
 *  Returns:        None
 */

function makeFooter() {
    echo '</div> <!--container-fluid--> 
</body>
</html>';

}

/*
 *  Name:           makeNavBar()
 *  Desc:           Function to create a generic HTML navBar
 *  Arguments:      None
 *  Returns:        None
 */

function makeNavBar()
{
    echo '<nav class="navbar navbar-default" >
        <div class="container-fluid" >
            <ul class="nav navbar-nav" >
               <!--The following line uses a relative path to find
                the web182 and my - code folders . The two dots mean
                go up one level in the directory tree . So the ../../
                means to go up two levels in the directory tree . -->
                <li ><a href = "../../" > WEB 182 </a ></li >
                <li ><a href = "../" > My Code </a ></li >
            </ul >
        </div >
    </nav >';
}