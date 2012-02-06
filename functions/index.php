<?php
    $crate_dir = str_replace($_SERVER['SCRIPT_NAME'], '/', $_SERVER['SCRIPT_FILENAME']) . "_crate/";
    require($crate_dir . "core.php");
    include($crate_dir . "inc/header.php");
?>
<h1>Functions</h1>
<p>The following functions are currently available for use in Crate.</p>

<h2>List All Files</h2>
<p>Use the <code>list_files</code> function to list all files in a folder.</p>
<ul class="files">
<?php list_files(); ?>
</ul>

<h2>List Files With Prefix</h2>
<p>Use the <code>list_files_with_prefix</code> function to list files in a folder prefixed with a certain value. In this example we only wish to show files prefixed with 'spreadsheet'.</p>
<ul class="files">
<?php list_files_with_prefix("spreadsheet"); ?>
</ul>

<?php
    include($crate_dir . 'inc/footer.php');
?>