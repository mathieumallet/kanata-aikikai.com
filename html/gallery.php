<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Kanata Aikikai - About Us</title>
<link href="images/styles.css" rel="stylesheet" type="text/css" />
<!--[if gte IE 9]>
<link href="images/stylesie.css" rel="stylesheet" type="text/css" />
<![endif]-->

<link rel="stylesheet" type="text/css" href="ubergallery/UberGallery.css" />
<link rel="stylesheet" type="text/css" href="ubergallery/colorbox/1/colorbox.css" />
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="ubergallery/colorbox/jquery.colorbox.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    $("a[rel='colorbox']").colorbox({maxWidth: "90%", maxHeight: "90%", opacity: ".5"});
});
</script>

</head>
<body style="background:url(images/bodybg-inner.png) repeat-x; background-color:#979797;">
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-bottom:30px;" >
  <tr>
    <td height="228" valign="top"><div style="margin-top:12px;"><img src="images/header-inner.png" width="960" height="230" /></div></td>
  </tr>
  <tr>
    <td><?php include_once('_hmenu.php'); ?></td>
  </tr>
  <tr>
    <td>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td></td>
          </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td>
      <table width="100%" border="0" cellspacing="10" cellpadding="0">
        <tr>
          <td style="vertical-align:top;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <!--<tr>
                <td>
                  <table width="100%" border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td width="60%"><img src="images/inner-pic.png" width="402" height="225" /></td>
                      <td width="40%" valign="top">

                        <h2 class="red-text">Photo Gallery</h2>

<p class="contents">Aikido is a Japanese martial art developed by Morihei Ueshiba O-Sensei in 1942. This effective, yet non-violent system of self defense represents the results of his life-long experience practicing a variety of classical Japanese martial arts.

<p class="contents">Before creating Aikido, O-Sensei trained extensively in several varieties of jujitsu, as well as sword and spear fighting. His martial art, rooted in the matchless fighting techniques of the Samurai, is considered one of the most effective techniques against single or multiple adversaries


                      </td>
                    </tr>
                  </table>
                </td>
              </tr>-->
              <tr>
                <td>

<h2 class="red-text">Dojo Photos</h2>

<p class="contents">

<?php include_once('ubergallery/UberGallery.php'); $gallery = UberGallery::init()->createGallery('topGallery'); ?>

<h2 class="red-text">Individual Albums</h2>

<ul>
  <?php $files = scandir('galleries'); ?>
  <?php foreach ($files as $file): ?>
    <?php $dir = 'galleries/' . $file; ?>
    <?php if (is_dir($dir) && $file != '.' && $file != '..'): ?>
	<li><a href="album.php?album=<?php echo $file; ?>"><?php echo ucwords($file); ?></a>
    <?php endif; ?>
    
  <?php endforeach; ?>
</ul>

<div id="credit"><p class="contents">Gallery powered by <a href="http://www.ubergallery.net">UberGallery</a></p></div>

</p>


		</td>
              </tr>
            </table>
          </td>
          <?php include_once('_sidebar.php'); ?>
        </tr>
      </table>
    </td>
  </tr>
</table>
<div class="footwrapper">
<?php include_once('_footer.php'); ?>
</div>
</body>
</html>