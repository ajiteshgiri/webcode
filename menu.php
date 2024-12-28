
<?php
$uri = $_SERVER['REQUEST_URI'];
$homeUrl='/webcode/';
?>






<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
 <div class="container">

      <div class="navbar-header">
           <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
           </button>

           <!-- lOGO TEXT HERE -->
           <a href="<?php echo $homeUrl; ?>" class="navbar-brand">Blog Website</a>
      </div>

      <!-- MENU LINKS -->
      <div class="collapse navbar-collapse">
           <ul class="nav navbar-nav navbar-nav-first">
           <?php if ($uri == $homeUrl): ?>
                <li class="active"><a href="<?php echo $homeUrl; ?>">Home</a></li>
                <li><a href="<?php echo $homeUrl; ?>blog">Blog</a></li>
                <li><a href="<?php echo $homeUrl; ?>about-us">About Us</a></li>
                <li><a href="<?php echo $homeUrl; ?>team">Team</a></li>
                <li><a href="<?php echo $homeUrl; ?>contact">Contact Us</a></li>
                <?php elseif ($uri == $homeUrl .'blog'): ?>
                <li><a href="<?php echo $homeUrl; ?>">Home</a></li>
                <li class="active"><a href="<?php echo $homeUrl; ?>blog">Blog</a></li>
                <li><a href="<?php echo $homeUrl; ?>about-us">About Us</a></li>
                <li><a href="<?php echo $homeUrl; ?>team">Team</a></li>
                <li><a href="<?php echo $homeUrl; ?>contact">Contact Us</a></li>
                <?php elseif ($uri == $homeUrl .'about-us'): ?>
                <li><a href="<?php echo $homeUrl; ?>">Home</a></li>
                <li><a href="<?php echo $homeUrl; ?>blog">Blog</a></li>
                <li class="active"><a href="<?php echo $homeUrl; ?>about-us">About Us</a></li>
                <li><a href="<?php echo $homeUrl; ?>team">Team</a></li>
                <li><a href="<?php echo $homeUrl; ?>contact">Contact Us</a></li>
                <?php elseif ($uri == $homeUrl .'team'): ?>
                <li><a href="<?php echo $homeUrl; ?>">Home</a></li>
                <li><a href="<?php echo $homeUrl; ?>blog">Blog</a></li>
                <li><a href="<?php echo $homeUrl; ?>about-us">About Us</a></li>
                <li class="active"><a href="<?php echo $homeUrl; ?>team">Team</a></li>
                <li><a href="<?php echo $homeUrl; ?>contact">Contact Us</a></li>
                <?php elseif ($uri == $homeUrl .'contact'): ?>
                <li><a href="<?php echo $homeUrl; ?>">Home</a></li>
                <li><a href="<?php echo $homeUrl; ?>blog">Blog</a></li>
                <li><a href="<?php echo $homeUrl; ?>about-us">About Us</a></li>
                <li><a href="<?php echo $homeUrl; ?>team">Team</a></li>
                <li class="active"><a href="<?php echo $homeUrl; ?>contact">Contact Us</a></li>
            <?php endif; ?>
           </ul>
      </div>

 </div>
</section>
