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

<h2>List Files Parameters</h2>
<p>Use the options array to specify the <code>url</code>, <code>prefix</code> and <code>sort</code> for the list files function.</p> 
<pre><code>list_files(array(
    'prefix' => "spreadsheet",
    'sort' => array('spreadsheet.xls', 'spreadsheet.numbers','spreadsheet.xlsx')
))</code></pre>
<ul class="files">
<?php list_files(array('prefix' => "spreadsheet", 'sort' => array('spreadsheet.xls', 'spreadsheet.numbers','spreadsheet.xlsx'))); ?>
</ul>

<?php
    include($crate_dir . 'inc/footer.php');
?>