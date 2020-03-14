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
              <tr>
                <td>

<?php $path = preg_replace('/[^a-zA-Z0-9 \']/',"",$_GET['album']); ?>

<h2 class="red-text"><?php echo $path; ?></h2>

<p class="contents"><?php include_once('ubergallery/UberGallery.php'); $gallery = UberGallery::init()->createGallery('galleries/' . $path); ?></p>

<p class="contents">Click <a href="gallery.php">here</a> to return to the main gallery.</p>

<div id="credit"><p class="contents">Gallery powered by <a href="http://www.ubergallery.net">UberGallery</a></p></div>

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
