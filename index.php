<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sammy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css.css" />
    <script src="main.js"></script>
</head>
<body background url="foot.jpg">
    <div class="tab-main">
       <p class="tab">
            <button type="button">Contact</button>
        </p>   
        <p class="tab">
            <button type="button">About</button>
        </p>
        <p class="tab">
            <button id="button3" type="button">Home</button>
        </p>
    </div>
    <div class="title">DreamJob</div>

    <h2 id="task">Get connected with companies in need of your skillset and apply by submitting your resume to the provided contact details</h2>
    
   <span id="container">
        <div class="searchBarWrap">
            <input class="searchBar" type="text" name="searchBar" placeholder="Find A Job..." />
        </div>
        <div class="searchBarWrap" id="search">
            <button id="searchBtn">Search</button>
        </div>
   </span>
   <div id="con">
     <div id="footer">
        <p class="tab">Join Chat</p>
        <p class="tab">Blog</p>
        <p class="tab">Speak with an Agent</p>
        <p class="tab">Find Job</p>
     </div>
     <p class="tab">© 2018 Achem Samuel</p>
       <?php
            // Prints the day, date, month, year, time, AM or PM
            echo date("l jS \of F Y h:i:s A") . "<br>";
             ?>
   </div>
</body> 
</html>
