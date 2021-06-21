<?php
header("Content-type: text/css; charset: UTF-8");
if(isset($_GET['color']))
{
  $color = '#'.$_GET['color'];
}
else {
  $color = '#0f78f2';
}

if(isset($_GET['footer_color']))
{
  $footer_color = '#'.$_GET['footer_color'];
}
else {
  $footer_color = '#143250';
}

if(isset($_GET['copyright_color']))
{
  $copyright_color = '#'.$_GET['copyright_color'];
}
else {
  $copyright_color = '#02020c';
}

?>
.action-list a  {
  background: <?php echo $color; ?> !important; 
}
.ap-product-categories .cat-box .title {
    color: <?php echo $color; ?> !important;
}
.ap-product-categories .cat-box .icon {
    color: <?php echo $color; ?> !important;
}