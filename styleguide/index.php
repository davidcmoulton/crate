<?php
    $crate_dir = str_replace($_SERVER['SCRIPT_NAME'], '/', $_SERVER['SCRIPT_FILENAME']) . "_crate/";
    require($crate_dir . "core.php");
    include($crate_dir . "inc/header.php");
?>
<h1>Styleguide</h1>
<p>The following styles are currently available for use in Crate.</p>

<h2>Code Examples</h2>
<p>Lorem ipsum dolor sit amet, an est errem utroque instructior:</p>
<code class="codex">&lt;div class=&quot;section&quot;&gt;
    &lt;div class=&quot;half&quot;&gt;
        &lt;p&gt;Content goes here&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;half&quot;&gt;
        &lt;p&gt;Content goes here&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</code>

<h2>Page List</h2>
<ul class="pages">
    <li><a href="#">Benefit Calculator</a></li>
    <li><a href="#">Savings Clock</a></li>
    <li><a href="#">Benefit Calculator (Iteration 2)</a></li>
    <li><a href="#">Savings Clock (Iteration 2)</a></li>
</ul>

<h2>File List</h2>
<p>The following document extentions are supported with custom icons. Unknown files will appear alongside a generic icon.</p>
<ul class="files">
    <li><a class="icon file" href="document.doc">document.doc<span class="meta"><strong>Updated:</strong> 22 June 2011, 15:35</span></a></li>
    <li><a class="icon file" href="document.docx">document.docx<span class="meta"><strong>Updated:</strong> 22 June 2011, 15:35</span></a></li>
    <li><a class="icon file" href="document.pages">document.pages<span class="meta"><strong>Updated:</strong> 22 June 2011, 15:35</span></a></li>
    <li><a class="icon file" href="document.pdf">document.pdf<span class="meta"><strong>Updated:</strong> 22 June 2011, 15:35</span></a></li>
    <li><a class="icon file" href="hypertext.html">hypertext.html<span class="meta"><strong>Updated:</strong> 22 June 2011, 15:35</span></a></li>
    <li><a class="icon file" href="image.jpg">image.jpg<span class="meta"><strong>Updated:</strong> 22 June 2011, 15:35</span></a></li>
    <li><a class="icon file" href="image.png">image.png<span class="meta"><strong>Updated:</strong> 22 June 2011, 15:35</span></a></li>
    <li><a class="icon file" href="outline.oo3">outline.oo3<span class="meta"><strong>Updated:</strong> 22 June 2011, 15:35</span></a></li>
    <li><a class="icon file" href="presentation.key">presentation.key<span class="meta"><strong>Updated:</strong> 22 June 2011, 15:35</span></a></li>
    <li><a class="icon file" href="presentation.ppt">presentation.ppt<span class="meta"><strong>Updated:</strong> 22 June 2011, 15:35</span></a></li>
    <li><a class="icon file" href="presentation.pptx">presentation.pptx<span class="meta"><strong>Updated:</strong> 22 June 2011, 15:35</span></a></li>
    <li><a class="icon file" href="spreadsheet.numbers">spreadsheet.numbers<span class="meta"><strong>Updated:</strong> 22 June 2011, 15:35</span></a></li>
    <li><a class="icon file" href="spreadsheet.xls">spreadsheet.xls<span class="meta"><strong>Updated:</strong> 22 June 2011, 15:35</span></a></li>
    <li><a class="icon file" href="spreadsheet.xlsx">spreadsheet.xlsx<span class="meta"><strong>Updated:</strong> 22 June 2011, 15:35</span></a></li>
    <li><a class="icon file" href="text.txt">text.txt<span class="meta"><strong>Updated:</strong> 22 June 2011, 15:35</span></a></li>
    <li><a class="icon file" href="wireframe.graffle">wireframe.graffle<span class="meta"><strong>Updated:</strong> 22 June 2011, 15:35</span></a></li>
    <li><a class="icon file" href="unknown.file">unknown.file<span class="meta"><strong>Updated:</strong> 22 June 2011, 15:35</span></a></li>
</ul>

<h2>50/50 Section</h2>
<div class="section">
    <div class="half">
        <p>Lorem ipsum dolor sit amet, an est errem utroque instructior. Docendi epicuri euripidis mei in, modo cibo minimum an sea. Et noluisse gubergren vel, falli quando denique mea ei, eum facer postulant te. No per antiopam perpetua corrumpit, vel ut populo iriure, lorem voluptatibus ut ius</p>
    </div>
    <div class="half">
        <p>Lorem ipsum dolor sit amet, an est errem utroque instructior. Docendi epicuri euripidis mei in, modo cibo minimum an sea. Et noluisse gubergren vel, falli quando denique mea ei, eum facer postulant te. No per antiopam perpetua corrumpit, vel ut populo iriure, lorem voluptatibus ut ius</p>
    </div>
</div>

<h2>50/50 Section (With Page List)</h2>
<div class="section">
    <div class="half">
        <p>Lorem ipsum dolor sit amet, an est errem utroque instructior. Docendi epicuri euripidis mei in, modo cibo minimum an sea. Et noluisse gubergren vel, falli quando denique mea ei, eum facer postulant te. No per antiopam perpetua corrumpit, vel ut populo iriure, lorem voluptatibus ut ius</p>
    </div>
    <div class="half">
        <ul class="pages">
            <li><a href="#">Benefit Calculator</a></li>
            <li><a href="#">Savings Clock</a></li>
            <li><a href="#">Benefit Calculator (Iteration 2)</a></li>
            <li><a href="#">Savings Clock (Iteration 2)</a></li>
        </ul>
    </div>
</div>

<h2>33/33/33 Section</h2>
<div class="section">
    <div class="third">
        <p>Lorem ipsum dolor sit amet, an est errem utroque instructior. Docendi epicuri euripidis mei in, modo cibo minimum an sea. Et noluisse gubergren vel, falli quando denique mea ei, eum facer postulant te. No per antiopam perpetua corrumpit, vel ut populo iriure, lorem voluptatibus ut ius</p>
    </div>
    <div class="third">
        <p>Lorem ipsum dolor sit amet, an est errem utroque instructior. Docendi epicuri euripidis mei in, modo cibo minimum an sea. Et noluisse gubergren vel, falli quando denique mea ei, eum facer postulant te. No per antiopam perpetua corrumpit, vel ut populo iriure, lorem voluptatibus ut ius</p>
    </div>
    <div class="third">
        <p>Lorem ipsum dolor sit amet, an est errem utroque instructior. Docendi epicuri euripidis mei in, modo cibo minimum an sea. Et noluisse gubergren vel, falli quando denique mea ei, eum facer postulant te. No per antiopam perpetua corrumpit, vel ut populo iriure, lorem voluptatibus ut ius</p>
    </div>
</div>

<h2>66/33 Section</h2>
<div class="section">
    <div class="two-thirds">
        <p>Lorem ipsum dolor sit amet, an est errem utroque instructior. Docendi epicuri euripidis mei in, modo cibo minimum an sea. Et noluisse gubergren vel, falli quando denique mea ei, eum facer postulant te. No per antiopam perpetua corrumpit, vel ut populo iriure, lorem voluptatibus ut ius</p>
    </div>
    <div class="third">
        <p>Lorem ipsum dolor sit amet, an est errem utroque instructior. Docendi epicuri euripidis mei in, modo cibo minimum an sea. Et noluisse gubergren vel, falli quando denique mea ei, eum facer postulant te. No per antiopam perpetua corrumpit, vel ut populo iriure, lorem voluptatibus ut ius</p>
    </div>
</div>

<h2>66/33 Section (With Page List)</h2>
<div class="section">
    <div class="two-thirds">
        <p>Lorem ipsum dolor sit amet, an est errem utroque instructior. Docendi epicuri euripidis mei in, modo cibo minimum an sea. Et noluisse gubergren vel, falli quando denique mea ei, eum facer postulant te. No per antiopam perpetua corrumpit, vel ut populo iriure, lorem voluptatibus ut ius</p>
    </div>
    <div class="third">
        <ul class="pages">
            <li><a href="#">Benefit Calculator</a></li>
            <li><a href="#">Savings Clock</a></li>
            <li><a href="#">Benefit Calculator (Iteration 2)</a></li>
            <li><a href="#">Savings Clock (Iteration 2)</a></li>
        </ul>
    </div>
</div>
<?php
    include($crate_dir . 'inc/footer.php');
?>