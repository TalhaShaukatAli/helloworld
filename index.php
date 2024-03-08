<?php
$navArray= array("Home","Assignments","Projects","About Me");
$config= parse_ini_file('config.ini',true);
$environment= $config['ENVIRONMENT'];
define("URL_ROOT", $config[$environment]["URL_BASE"]);
define("ABS_ROOT", $config[$environment]["ABS_ROOT"]);
?>

<?php include_once(ABS_ROOT. "/src/views/head.view.php"); ?>
<?php include_once(ABS_ROOT. "/src/views/homeheader.view.php"); ?>
<?php include_once(ABS_ROOT. "/src/views/navigation.view.php"); ?>


    <main>
        <div>
            <h2>Main Content Section</h2>

        </div>

    </main>

    <?php include_once(ABS_ROOT. "/src/views/footer.view.php"); ?>
</div>
</body>
</html>