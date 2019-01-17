<!DOCTYPE html>
<html>
    <head>
        
        <link rel = "stylesheet" type = "text/css" href = "homepagestyle.css"/>
        
        <title>Gamaliel Tellez CS313</title>
    
        <div id="titlediv">
            <h1 id="homepagetitle">Welcome to CS313 Homepage</h1> 
            <a id="assignmentslink" href="assignmentspage.html">Winter 2019 Assigments</a>
        </div>
    
    </head>

    <body>
        <div id="contentdiv">
            <h3 id="mynameheader">My name is Gamaliel Tellez</h3>
            <p id="aboutmetext">
                Hello! it is good to be in this class learning more about web
                development. I'm from Hidalgo, Mexico and this where I'm currently
                living although I normally live in Utah. Some of my hobbies are, when i'm 
                not coding for work or school, playing volleyball, soccer, basketball and 
                hitting the gym. In this picture we were visiting a very cool archeological site
                called Teotihuacan, which is believed to be built around the plan of salvation.
            </p>
            <img src="trishandi.jpg" id="trishandi" width="400" height="400">
        </div>

        <div id="liveclock">
            <h4> My current time in Hidalgo, Mexico is:</h4>
            <?php
              date_default_timezone_set('America/Mexico_City');
              echo $time = date('H:i:s'); 
            ?>
        </div>
    </body>
</html>