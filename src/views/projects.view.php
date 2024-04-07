<?php
$config = parse_ini_file('../config.ini', true);
$environment = $config['ENVIRONMENT'];
$project = new ProjectModel($projectData);
?>

    <article>
        <div>
        <h2><?php echo $project->get_title()?></h2>
        <p><?php echo $project->get_description()?></p>
        <p><?php echo "Languages: " . $project->get_languages()?></p>
        <a href = <?php echo $project->get_link()?>> Link to the GitHub Repository Code</a> 
        </div>
    </article>