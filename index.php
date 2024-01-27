<?php
$navArray= array("Home","Assignments","About Me");
define("URL_ROOT","http://localhost:3000");
define("ABS_ROOT",$_SERVER['DOCUMENT_ROOT']);
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