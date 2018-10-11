<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <style>
            body {
                background-color: #fafafa;
                font-family: 'Raleway', sans-serif;
                margin:0;
            }
            #header {
                background-color: #0c79c3;
                padding:20px;
                border-bottom: 4px solid #1089E2;
                margin-bottom:70px;
            }

            #header .top-header {
                padding-top: 20px;
                border-bottom: 4px solid #0c6eb6;
                padding-bottom: 20px;
            }
            .logo img {
                margin-left: 8%;
            }
            .sidebar-page{
                border: 1px solid #e2e2e2;
            }
            .sidebar-page{
                border: 1px solid #e2e2e2;
                background-color: #fff;
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
                border-radius: 3px;
                margin-right: 5px;
                margin-bottom: 40px;
                margin-left:30px;
                margin-top:10px;
                width:300px;
            }
            .sidebar-page .sidebar-title {
                display: block;
                border-bottom: 1px solid #e2e2e2;
                font-size: 20px;
                padding: 15px 16px 13px 16px;
            }
            .sidebar-page ul{
                padding: 0;
                list-style-type: none;
                height:343px;
                margin-top:-4px;
            }
            .sidebar-page ul li a {
                font-size: 17px;
                color: #3D3D3D;
                padding: 14px 16px 10px 16px;
                border-bottom: 1px solid #e2e2e2;
                display: block;
            }
            .sidebar-page ul li a:hover,.sidebar-page ul li a.current{
                background-color: #0e7ac4;
                color: #fff;
            }
            .sidebar-page ul li .glyphicon{
                font-size: 16px;
                color:#1473b3;
                margin-right: 18px;
            }
            .sidebar-page ul li a:hover .glyphicon{
                color:#fff;
            }
            a {
                text-decoration: none !important;

            }
            .sidebar-page .textwidget{
                font-size: 17px;
                padding: 18px 19px 22px 19px;
                line-height: 1.6em;
                color: #0d0d0d;
            }
            #sidebar img {
                max-width: 100%;
                height: auto;
                margin-left:150px;
            }
            #footer_bottom {
                background-color: #0e639d;
                padding-top: 13px;
                padding-bottom: 17px;
                margin-top:70px;
            }
            #footer_bottom .copyright {
                text-align: center;
                font-size: 16px;
                color: #81ccff;
            }
            #footer_bottom .copyright a {
                color: #fff;
                font-size: 19px;
            }
            .blog{
                width:850px;
                height:1700px;
                border:1px solid #e2e2e2;
                float:right;
                margin-right:100px;
                background-color:white;
            }
            #blog_text{
                padding: 20px;
            }
            .page-wrapper{
                min-height: 1800px;

            }
        </style>
    </head>
    <body>
        <div  id="header">
            <div class="logo">
                <img src="<?php echo base_url(); ?>images/logo.png" alt="Formget logo">
            </div>

        </div>
        <div class="page-wrapper "> 
            <div class="blog "></div>

            <div id="sidebar" class="sidebar">
                <!--Sidebar-->
                <div class="sidebar-page">
                    <span class="sidebar-title">FormGet Tutorials</span>
                    <div class="feature-menu">
                        <ul><li><a href="php">php</a></li>
                            <li><a href="css">css</a></li>
                            <li><a href="javascript">Javascript</a></li>
                            <li><a href="codeigniter">CodeIgniter</a></li>
                            <li><a href="html5">HTML5</a></li>
                            <li><a href="mysql">mysql</a></li>
                            <li><a href="mailget">mailget</a></li>
                            <li><a href="others">Others</a></li>
                        </ul>
                    </div>
                </div>
                <!--/Sidebar-->
                <!--Sidebar-->

                <!--/Sidebar-->
                <!--    <div class="sidebar-banner">
                        <a href="#"><img src="<?php echo base_url(); ?>images/formget_add.jpg" alt=""> </a>
                    </div>-->
            </div>
            <!--<div style="height: 10000px ; background-color:  lemonchiffon"></div>-->
        </div>


        <div id="footer_bottom" class="footer-bottom">
            <div class="container">
                <div >
                    <div>
                        <div class="copyright">2014 © <a href="#">FormGet.com</a> All rights reserved.</div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>