<?php if ($_GET['ajax'] != "true") { ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $config['CLIENT_NAME']; ?> &#8212; <?php echo $config['PROJECT_NAME']; ?></title>
    <link rel="stylesheet" href="/_crate/c/core.css">
    <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <div class="rail-container">
        <div class="rail">
            <hgroup class="project-name">
                <a href="/">
                    <h1><?php echo $config['CLIENT_NAME']; ?></h1>
                    <h2><?php echo $config['PROJECT_NAME']; ?></h2>
                </a>
            </hgroup>
            <ol class="project-nav" role="navigation">
                <?php foreach ($directories as $directory) { ?><li<?php if ($_SERVER['REQUEST_URI'] == '/'.$directory.'/') { ?> class="selected"<?php } ?>><a href="/<?php echo $directory; ?>/"><?php echo ucwords(str_replace("-", " ", $directory)); ?></a></li><?php echo "\n                "; } ?>

            </ol>
            <?php 
            exec("git log -1 --pretty=format:'%cr||%h' --abbrev-commit", $git, $status);
            $git = explode("||", $git[0]);
            $last_updated = $git[0];
            $hash = $git[1];
            ?>
            <?php if (!empty($last_updated) || !empty($hash)) { ?>
            <dl class="project-meta">
                <dt>Last updated:</dt>
                <dd><?php echo $last_updated ?></dd>
                <dt>Commit hash:</dt>
                <dd><?php echo $hash ?></dd>
            </dl>
            <?php } ?>
        </div>
    </div><!-- /.rail-container -->

    <div class="page-container">
        <div class="page">
<?php } ?>