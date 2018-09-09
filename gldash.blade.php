<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #F6F6F5;
                color: #636b6f;
                font-family: Roboto, bold;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                max-width: 100%;
                overflow-x: hidden;
            }

             /* The sidebar menu */
            .sidenav {
                height: 100%; /* Full-height: remove this if you want "auto" height */
                width: 200px; /* Set the width of the sidebar */
                position: fixed; /* Fixed Sidebar (stay in place on scroll) */
                z-index: 1; /* Stay on top */
                top: 0; /* Stay at the top */
                left: 0;
                background-color: #FF5A74; /* Pink red */
                overflow-x: hidden; /* Disable horizontal scroll */
                padding-top: 40px;
            }

            .PB {
                padding: 10px 10px 10px 60px;
                color: #FFFFFF;
                font-family: Roboto;
                font-weight: bold;
                font-size: 14px;
                position: relative;
                top:-110px;
             
            }

            /* The navigation menu links */
            .sidenav a {
                padding: 20px 20px 20px 40px;
                text-decoration: none;
                font-size: 13px;
                font-family: Roboto;
                color: #FFFFFF;
                display: block;
                position: relative;
                top: -80px;
            }

            /* When you mouse over the navigation links, change their color */
            .sidenav a:hover {
                color: #FF5A74;
                font-weight: bold;
                background-color: #F6F6F5;

            }

            /* Style page content */
            .main {
                margin-left: 160px; /* Same as the width of the sidebar */
                padding: 0px 10px;
            }

            /* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
            @media screen and (max-height: 450px) {
                .sidenav {padding-top: 15px;}
                .sidenav a {font-size: 18px;}
            }

            .header-box {
                margin-left: 200px;
                position: relative;
                padding-top: 5px;
                width: 100%;
                height:80px;
                background-color: #FFFFFF;
                box-shadow: 2px 2px 2px #A09E9E;
            }

            .dashboardtext {
                position: relative;
                top: -15px;
                padding-left: 20px;
                color:#81C8CE;
                font-family: Roboto;
                font-weight:bold;
            }

            .logout-box {
                position: relative;
                left: 900px;
                top: 10px;
                background-color: #F6F6F5;
                width: 150px;
                height: 40px;
                
            }

            .username {
                position: relative;
                left: 20px;
                top: 5px;
                color: #000000;
                font-family: Roboto;
                font-weight: bold; 
                font-size: 12px;
            }

            .user-status {
                position: relative;
                left: 20px;
                top: -5px;
                color: #18BBD5;
                font-family: Roboto;
                font-weight: bold; 
                font-size: 8px;
            }

            .box-A {
                position: relative;
                left: 250px;
                top: 30px;
                background-color: #FFFFFF;
                width: 280px;
                height: 280px;
                
            }

            .A-heading {
                position: relative;
                left: 40px;
                top: 105px;
                color: #000000;
                font-family: Roboto;
                font-weight: bold; 
                font-size: 18px;  
            }

            .A-subheading {
                position: relative;
                left: 40px;
                top: 90px;
                color: #736E6E;
                font-family: Roboto;
                font-style: italic;
                font-weight: bold; 
                font-size: 10px;  
            }

            .box-Aa {
                position: relative;
                left: 0px;
                top: 160px;
                background-color: #43D0BE;
                width: 280px;
                height: 60px;
                
            }

            .A-btext {
               position: relative;
                left: 100px;
                top: 25px;
                color: #FFFFFF;
                font-family: Roboto;
                font-weight: bold; 
                font-size: 12px;  
            }

            .img {
                position: relative;
                top: -34px;
                left: 15px;
             
            }

            .img-sort {
                position: absolute;
                top: 43px;
                left: 1030px;
            }

            .box-B {
                position: absolute;
                left: 570px;
                top: 30px;
                background-color: #FFFFFF;
                width: 280px;
                height: 280px;
                
            }

            .B-heading {
                position: relative;
                left: 40px;
                top: 90px;
                color: #000000;
                font-family: Roboto;
                font-weight: bold; 
                font-size: 18px;  
            }

            .B-subheading {
                position: relative;
                left: 40px;
                top: 75px;
                color: #736E6E;
                font-family: Roboto;
                font-style: italic;
                font-weight: bold; 
                font-size: 10px;  
            }

            .box-Bb {
                position: relative;
                left: 0px;
                top: 142px;
                background-color: #8C64CC;
                width: 280px;
                height: 60px;
                
            }

            .B-btext {
               position: relative;
                left: 75px;
                top: 25px;
                color: #FFFFFF;
                font-family: Roboto;
                font-weight: bold; 
                font-size: 12px;  
            }

             .box-C {
                position: absolute;
                left: 890px;
                top: 30px;
                background-color: #FFFFFF;
                width: 280px;
                height: 280px;
                
            }

            .C-heading {
                position: relative;
                left: 40px;
                top: 90px;
                color: #000000;
                font-family: Roboto;
                font-weight: bold; 
                font-size: 18px;  
            }

            .C-subheading {
                position: relative;
                left: 40px;
                top: 75px;
                color: #736E6E;
                font-family: Roboto;
                font-style: italic;
                font-weight: bold; 
                font-size: 10px;  
            }

            .box-Cc {
                position: relative;
                left: 0px;
                top: 142px;
                background-color: #9BDCF8;
                width: 280px;
                height: 60px;
                
            }

            .C-btext {
               position: relative;
                left: 75px;
                top: 25px;
                color: #FFFFFF;
                font-family: Roboto;
                font-weight: bold; 
                font-size: 12px;  
            }

            .box-organize {
                position: relative;
                left: 30px;
            }

            
        </style>
    </head>
    <body>
       
        <!-- Side Navigation -->
        <div class="sidenav">
        <img class="img" src="img/pblogo.png" style="width: 40px; height: 85px;">
          <p class="PB"> Politeknik Brunei</p>  
          <a href="http://192.168.99.100/gldash">Dashboard</a>
          <a href="#">Attendance</a>
          <a href="#">Schedule</a>
          <a href="glprofile">Profile</a>
        </div>


        <!-- Top header -->
        <div class="header-box">
          <div class="logout-box">
            <p class="username">Lauren William</p>
            <p class="user-status">Student</p>
          </div>
          <p class="dashboardtext">Dashboard</p>
          <img class="img-sort" src="img/sort.png" style="width: 6px; height: 6px;">
        </div>

        <!-- Page Content -->
        <div class="box-organize">
        <div class="box-A">
            <p class="A-heading">Profile</p>
            <p class="A-subheading">Edit Your Profile</p>
            <div class="box-Aa">
                <a href="glprofile" style="text-decoration: none;"><p class="A-btext">View Profile</p></a>
            </div>
        </div>

        <div class="box-B">
            <p class="B-heading">Attendance</p>
            <p class="B-subheading">Monthly Reports</p>
            <div class="box-Bb">
                <p class="B-btext">View Attendance Report</p>
            </div>
        </div>

        <div class="box-C">
            <p class="C-heading"> Class Attendance</p>
            <p class="C-subheading">Update Weekly Class Attendance</p>
            <div class="box-Cc">
                <p class="C-btext">Update Class Attendance</p>
            </div>
        </div>
        </div>


        
    </body>
</html>
