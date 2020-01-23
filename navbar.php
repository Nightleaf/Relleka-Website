<?php
require('config.php');


if ($OLD_NAVIGATION_BAR) {
?>
           
              <div class="navbar navbar-default">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="<?php echo $navigation['home']; ?>"><?php echo $PROJECT_NAME; ?></a>
                </div>
                <center>
                <div class="navbar-collapse collapse navbar-responsive-collapse">
                  <ul class="nav navbar-nav">

                    <li><a href="<?php echo $navigation['forum']; ?>"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Forum</a></li>
                    <li><a href="<?php echo $navigation['highscores']; ?>"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Highscores</a></li>
                    <!--<li><a href="<?php echo $navigation['vote']; ?>"><span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span> Vote</a></li>-->
                    <li><a href="<?php echo $navigation['rules']; ?>"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Rules</a></li>
                    <!--<li><a href="<?php echo $navigation['webclient']; ?>"><span class="glyphicon glyphicon-play" aria-hidden="true"></span> Play</a></li>-->
                    <li><a href="<?php echo $navigation['download']; ?>"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Download</a></li>
                    <li><a href="<?php echo $navigation['premium']; ?>"><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span> Premium Membership</a></li>
                </div>

              </div>

<?php

} else {
?>
<center>
<!-- GOOGLE ADSENSE -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Relleka -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-1163101899718961"
     data-ad-slot="2583147935"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

</center>
      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
              <li><a href="../navbar-static-top/">Static top</a></li>
              <li><a href="../navbar-fixed-top/">Fixed top</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
<?php
}
?>