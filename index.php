<?php
    $crate_dir = str_replace($_SERVER['SCRIPT_NAME'], '/', $_SERVER['SCRIPT_FILENAME']) . "_crate/";
    require($crate_dir . "core.php");
    include($crate_dir . "inc/header.php");
?>
<h1><?php echo $config['PROJECT_NAME']; ?></h1>
<p>Welcome to your project deliverable space. All files and documentation relating to this project can be found in the sections listed on the left.</p>
<h2>Project Contacts</h2>
<div class="section">
    <div class="half vcard">
        <img class="photo" src="http://clearleft.com/img/profiles/small/andybudd.jpg" alt="" width="64" height="64"/>
        <h3><a class="fn url" href="http://clearleft.com/is/andybudd/">Andy Budd</a> &#8212; <span class="role">Project Contact</span></h3>
        <p><a class="email" href="mailto:andy@clearleft.com">andy@clearleft.com</a></p>
    </div>
    <div class="half vcard">
        <img class="photo" src="http://clearleft.com/img/profiles/small/richardrutter.jpg" alt="" width="64" height="64"/>
        <h3><a class="fn url" href="http://clearleft.com/is/richardrutter/">Richard Rutter</a> &#8212; <span class="role">User Experience Design</span></h3>
        <p><a class="email" href="mailto:rich@clearleft.com">rich@clearleft.com</a></p>
    </div>
    <div class="half vcard">
        <img class="photo" src="http://clearleft.com/img/profiles/small/jeremykeith.jpg" alt="" width="64" height="64"/>
        <h3><a class="fn url" href="http://clearleft.com/is/jeremykeith/">Jeremy Keith</a> &#8212; <span class="role">Front-end Development</span></h3>
        <p><a class="email" href="mailto:jeremy@clearleft.com">jeremy@clearleft.com</a></p>
    </div>
    <div class="half vcard">
        <img class="photo" src="http://clearleft.com/img/profiles/small/jamesbox.jpg" alt="" width="64" height="64"/>
        <h3><a class="fn url" href="http://clearleft.com/is/jamesbox/">James Box</a> &#8212; <span class="role">User Experience Design</span></h3>
        <p><a class="email" href="mailto:james@clearleft.com">james@clearleft.com</a></p>
    </div>
    <div class="half vcard">
        <img class="photo" src="http://clearleft.com/img/profiles/small/paullloyd.jpg" alt="" width="64" height="64"/>
        <h3><a class="fn url" href="http://clearleft.com/is/paullloyd/">Paul Lloyd</a> &#8212; <span class="role">Visual Design</span></h3>
        <p><a class="email" href="mailto:paul.lloyd@clearleft.com">paul.lloyd@clearleft.com</a></p>
    </div>
    <div class="half vcard">
        <img class="photo" src="http://clearleft.com/img/profiles/small/jamesbates.jpg" alt="" width="64" height="64"/>
        <h3><a class="fn url" href="http://clearleft.com/is/jamesbates/">James Bates</a> &#8212; <span class="role">Visual Design</span></h3>
        <p><a class="email" href="mailto:james.bates@clearleft.com">james.bates@clearleft.com</a></p>
    </div>
    <div class="half vcard">
        <img class="photo" src="http://clearleft.com/img/profiles/small/katebulpitt.jpg" alt="" width="64" height="64"/>
        <h3><a class="fn url" href="http://clearleft.com/is/katebulpitt/">Kate Bulpitt</a> &#8212; <span class="role">Project Contact</span></h3>
        <p><a class="email" href="mailto:kate@clearleft.com">kate@clearleft.com</a></p>
    </div>
    <div class="half vcard">
        <img class="photo" src="http://clearleft.com/img/profiles/small/michelleoloughlin.jpg" alt="" width="64" height="64"/>
        <h3><a class="fn url" href="http://clearleft.com/is/michelleoloughlin/">Michelle O&#8217;Loughlin</a> &#8212; <span class="role">Visual Design</span></h3>
        <p><a class="email" href="mailto:michelle@clearleft.com">michelle@clearleft.com</a></p>
    </div>
    <div class="half vcard">
        <img class="photo" src="http://clearleft.com/img/profiles/small/harrybrignull.jpg" alt="" width="64" height="64"/>
        <h3><a class="fn url" href="http://clearleft.com/is/harrybrignull/">Harry Brignull</a> &#8212; <span class="role">User Experience Design</span></h3>
        <p><a class="email" href="mailto:harry@clearleft.com">harry@clearleft.com</a></p>
    </div>
    <div class="half vcard">
        <img class="photo" src="http://clearleft.com/img/profiles/small/rifabhunnoo.jpg" alt="" width="64" height="64"/>
        <h3><a class="fn url" href="http://clearleft.com/is/rifabhunnoo/">Rifa Bhunnoo</a> &#8212; <span class="role">Project Manager</span></h3>
        <p><a class="email" href="mailto:rifa@clearleft.com">rifa@clearleft.com</a></p>
    </div>
</div>

<div class="section divide">
    <div class="half">
        <p class="icon basecamp">Questions about this project can be posted on <a href="<?php echo $config['BASECAMP_URL']; ?>">Basecamp</a>.<?php if ($config['SIFTER_URL'] != null) { ?> Bugs and implementation issues can be reported on <a href="<?php echo $config['SIFTER_URL']; ?>">Sifter</a>.<?php } ?></p>
    </div>
    <div class="half">
        <p class="icon tel">You can always give us a call on <strong><a href="tel:+448458386163">+44 (0)845 8386163</a></strong></p>
    </div>
</div>

<?php
    include($crate_dir . 'inc/footer.php');
?>