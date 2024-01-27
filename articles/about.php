<?php
$navArray= array("Home","Assignments","About Me");
$config= parse_ini_file('../config.ini',true);
$environment= $config['ENVIRONMENT'];
define("URL_ROOT", $config[$environment]["URL_BASE"]);
define("ABS_ROOT",$config[$environment]["ABS_ROOT"]);
?>

<?php include_once(ABS_ROOT. "/src/views/head.view.php"); ?>
<?php include_once(ABS_ROOT. "/src/views/aboutheader.view.php"); ?>
<?php include_once(ABS_ROOT. "/src/views/navigation.view.php"); ?>

    <main>
        <article>
            <h2>About Me</h2>  
        </article>

        <article>
        <img id="AboutMeimg"src="<?php echo URL_ROOT . "/media/me.jpeg"?>" alt="Me"><h3> My name is Talha Shaukat Ali. But I prefer to go by T. The story behind this alias came about when I noticed plenty of people struggling to pronounce or remember my name. It's unique and has a nice ring to it so that's the origin story of "T". </h3>
        </article>

        <article>
            <h3> Since my kindergarten days, I have always been fascinated by how technology works. As a 24 year old man, I have witnessed the drastic change in technology in these last two decades. And I knew one thing for certain, that we are far from reaching the tip of the iceberg. Having an extreme passion to learn more about coding is the first reason I got into computer science. The other reason may not sound as serious as it is related to video games. </h3>
        </article>

        <article>
            <h3> After I graduate, I plan on working for a couple years in Minnesota before moving and hopefully settling down somewhere warmer. As someone who was born in the Middle East, it's no surprise that I can't handle the cold! But on a more serious note, the aim is to gain experience, build up my resume, and keep learning as I go along. The ultimate goal in life is to pay tribute to the younger me. That kid who wanted to grow up and make video games some day but had no idea how. Luckily for us CS majors, the opportunities are endless so long as we have strong knowledge of what we're doing. With all that said, sky's the limit and these last few semesters of college are all about prepping to take off.</h3>
        </article>
    </main>

<?php include_once(ABS_ROOT. "/src/views/footer.view.php"); ?>
</div>
</center>
</body>
</html>