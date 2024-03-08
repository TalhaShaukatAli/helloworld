<?php
$navArray= array("Home","Assignments","Projects","About Me");
$config= parse_ini_file('../config.ini',true);
$environment= $config['ENVIRONMENT'];
define("URL_ROOT", $config[$environment]["URL_BASE"]);
define("ABS_ROOT",$config[$environment]["ABS_ROOT"]);
?>

<?php include_once(ABS_ROOT. "/src/views/head.view.php"); ?>
<?php include_once(ABS_ROOT. "/src/views/projectsheader.view.php"); ?>
<?php include_once(ABS_ROOT. "/src/views/navigation.view.php"); ?>

    <main>
        <article>
            <h2>My Projects</h2>  
        </article>

        <div>
            <h3> Assignment 3 - Portfolio Website Refactored </h3>
            <p> One of my first projects involved making a portfolio website in my Advanced Web Progamming class. We were assigned a task to use PHP and CSS to construct a website with three pages. A home page, an assignments page, and an about me page. As someone who had minimal experience in PHP and CSS at the time, it was still faily simple to get it done. The task assigned to us a couple weeks later involved refactoring the porfolio website using objects. This is also when URL_ROOT and ABS_PATH was introduced to us. Using all of the tools at our disposal, we implemented objects into our portfolio website code. The page you are currently reading this on is an advanced stage of the website which also contains a projects page. </p>
            <h5>Languages Used: PHP, CSS </h5>
            <h5><a href= "https://cs.bemidjistate.edu/tr7251ub"> Website Live Version </a></h5>
            
        </div>

        <div>
            <h3><br> Banking App </h3>
            <p> <p> One of my personal favorites is a banking app that I made with some of my peers in my Advanced Web Programming class. The task was to create a website that included a login page, an account summary page, and a transfers page. The login page would ask a user to put in their username and password. After that, the account summary page is displayed which shows three checking accounts and a total sum underneath. The transfers page allows the user to transfer a certain amount from one account to another under the condition that the account used for transfering money has sufficient funds.
            <h5> Languages Used: PHP, CSS </h5>
            <h5><a href= "https://cs.bemidjistate.edu/tr7251ub/Banking-App"> Website Live Version </a></h5>
            <h5><a href= "https://github.com/SaMoBTW/Banking-App"> Link to the GitHub Repository Code </a><h5>
        </div>

        <div>
            <h3><br> Assignment 5 - Objects </h3>
            <p> In an in-class assignment, we experimented with the use of a database. Initially, we started working with functions but were given an assignment to refactor everything from functions to objects. A DbService class and object was used to contain all methods that were related to databases. Similarly, an ApplicantService class was used to contain all methods related to applicants. A new Applicant class was constructed to handle methods specific to an individual applicant. This included class properties such as name, level, experience, and skills and methods for retrieving these properties. Lastly, the index.php file needed refactoring to call appropriate methods. A live web version of this project does not exist. But the link to the GitHub repository can be found below.</p>
            <h5> Languages Used: PHP, CSS </h5>
            <h5><a href= "https://github.com/TalhaShaukatAli/Assignment5"> Link to the GitHub Repository Code </a><h5>
        </div>

        <div>
            <h3><br> Flappy Beaver - Video Game </h3>
            <p> As a Bemidji State student, the beaver is our mascot. This inspired me ages ago to make a mobile game that resembles the games Geometry Dash and Flappy Bird. A 2D pixelated beaver would be jumping over various obstacles every time the user taps the screen. Additionally, there would be a counter on the screen that increases by 1 every time the user successfully jumps over an obstacle. To casually throw shade at other universities' mascosts, I could implement power-ups and funny pop-up texts if the user jumps and lands on their heads. A quirky and fun idea that I want to work on during the summer. </p>
            <h5> Possible Languages: Kotlin, Unity, GDScript </h5>
        </div>

        <div>
            <h3><br> The Traveller - Video Game </h3>
            <p> STORY: In the distant future, the living conditions on Earth are not optimal anymore. With intense climates around the globe and scarce natural resources, the protagonist is sent off with a group to explore the galaxy in hopes of finding a habitable world for mankind to survive. They will be faced with challenges, grief, and loss. But they must overcome these hurdles as the weight of mankind's legacy rests on their shoulders.</p>
            <p> This is undoubtedly going to be one of my biggest projects. As a fan of sci-fi and dystopian worlds, I was inspired by the movie Interstellar before having this idea. Unlike the previous mobile game, this will be on a much larger scale with a larger team working on it. One of my goals in life is to take part in making a triple-A game. And as someone hoping to one day work in the video-game industry, it's nice to have my sights set on something that excites me. </p>
            <h5> Possible Languages: C++, Python, JavaScript, Kotlin </h5>
                <br>
        </div>

    </main>

<?php include_once(ABS_ROOT. "/src/views/footer.view.php"); ?>
</div>
</center>
</body>
</html>