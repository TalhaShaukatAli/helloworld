<?php
$navArray= array("Home","Assignments","Projects","About Me");
$config= parse_ini_file('../config.ini',true);
$environment= $config['ENVIRONMENT'];
define("URL_ROOT", $config[$environment]["URL_BASE"]);
define("ABS_ROOT",$config[$environment]["ABS_ROOT"]);
?>

<?php include_once(ABS_ROOT. "/src/views/head.view.php"); ?>
<?php include_once(ABS_ROOT. "/src/views/assignmentheader.view.php"); ?>
<?php include_once(ABS_ROOT. "/src/views/navigation.view.php"); ?>

    <main>
        <article>
            <h2>Assignment 1</h2>
            <p></p>
        </article>

        <article>
            <h3> Question 1: Why are you taking this class? </h3>
            <p> Answer: It's been a couple years since I worked with front end. Excited to get back into it.</p>
            <p></p>
        </article>

        <article>
            <h3> Question 2: What do you want to take away from this class? </h3>
            <p> Answer: Since I am currently a bit rusty in this department, I'm motivated to sharpen my skillset to new levels by the end of this class.</p>
            <p></p>
        </article>

    </main>

<?php include_once(ABS_ROOT. "/src/views/footer.view.php"); ?>
</div>
</center>
</body>
</html>