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
                max-width: 100%;
                background-color: #FFFFFF;
                box-shadow: 2px 2px 2px #A09E9E;
            }

            .dashboardtext {
                position: relative;
                top: -15px;
                padding-left: 20px;
                color: #D6D4D4;
                font-family: Roboto;
                font-weight:bold;
            }

            .profiletext {
                position: absolute;
                top: 42px;
                left: 133px;
                color: #81C8CE;
                font-family: Roboto;
                font-weight:bold;
            }

            .text {
                position: absolute;
                top: 85px;
                left: 20px;
                color: #565353;
                font-family: Roboto;
                font-weight:bold;
                font-size: 13px;
            }

            .logout-box {
                position: relative;
                left: 900px;
                top: 10px;
                max-width: 100%;
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

            .status {
                position: absolute;
                top: 130px;
                left: 50px;
                color: #FF5A74;
                font-family: Roboto;
                font-weight:bold;
                font-size: 13px;
                
            }

            .student {
                position: absolute;
                top: 150px;
                left: 50px;
                color: #81C8CE;
                font-family: Roboto;
                font-weight:bold;
                font-style: italic;
                font-size: 13px;
            }

            .userstudent {
                position: absolute;
                top: -22px;
                left: 10px;
                color:#FF5A74;
                font-family: Roboto;
                font-weight:bold;
                font-size: 13px;
                background-color: #F6F6F5; 
            }

            .userbox {
                position: absolute;
                top: 220px;
                left: 50px;
                border: 1px solid #81C8CE;
                border-radius: 25px;
                width: 550px;
                height: 50px;
                box-shadow: 3px 3px 3px #C4C4C4;
            }

            .userstudent {
                position: absolute;
                top: -22px;
                left: 10px;
                color:#FF5A74;
                font-family: Roboto;
                font-weight:bold;
                font-size: 13px;
                background-color: #F6F6F5; 
            }

            .B {
                position: absolute;
                top: 90px;
            }

            
            .C {
                position: absolute;
                top: 180px;
            }

            .D {
                position: absolute;
                top: 270px;  
            }
            
            .save {
                position: absolute;
                left: 60px;
                color: #FFFFFF;
                font-family: Roboto;
                font-weight:bold;
                font-size: 13px; 
            }
            .save-btn {
                position: absolute;
                left: 220px;
                top: 600px;
                background-color: #81C8CE;
                width: 200px;
                height: 40px;
                margin-bottom: 150px;  
            }

            

            .organize {
                position: absolute;
                left: 400px;
                
            }

            

            
        </style>
    </head>
    <body>
       
        <!-- Side Navigation -->
        <div class="sidenav">
        <img class="img" src="img/pblogo.png" style="width: 40px; height: 85px;">
          <p class="PB"> Politeknik Brunei</p>  
          <a href="http://192.168.99.100/mldash">Dashboard</a>
          <a href="#">Attendance</a>
          <a href="#">Schedule</a>
          <a href="mlprofile">Profile</a>
        </div>


        <!-- Top header -->
        <div class="header-box">
          <div class="logout-box">
            <p class="username">Bahit Hamid</p>
            <p class="user-status">Module Lecturer</p>
          </div>
          <p class="dashboardtext">Dashboard &nbsp; &#9658;</p>
          <p class="profiletext">Profile</p>
          <p class="text">Personal Details</p>
          <img class="img-sort" src="img/sort.png" style="width: 6px; height: 6px;">
        </div>

        <!-- Page Content -->
        <div class="organize">
                <p class="status">Status</p>
                <p class="student">Module&nbsp;Lecturer</p>   

            <div class="userbox"> 
                <p class="userstudent">&nbsp;&nbsp;Username&nbsp;&nbsp;</p>   
            </div>
            
            <div class="B">
                <div class="userbox"> 
                    <p class="userstudent">&nbsp;&nbsp;Fullname&nbsp;&nbsp;</p>   
                </div>
            </div>

            <div class="C">
                <div class="userbox"> 
                    <p class="userstudent">&nbsp;&nbsp;Email&nbsp;&nbsp;</p>   
                </div>
            </div>

            <div class="D">
                <div class="userbox"> 
                    <p class="userstudent">&nbsp;&nbsp;Password&nbsp;&nbsp;</p>   
                </div>
            </div>

            <div class="save-btn">
                <p class="save">Save Changes</p>
            </div>
        </div>

            

        



        
    </body>
</html>
