<?php
//Template Name:Contact Us
get_header();

?>
<?php  echo '123' ?>
<?php
the_field('phoone_number_1',7);
?>
<?php
the_field('phoone_number_2',7);
?>
<br>
<a href="mailto:<?php the_field('email',7);?>">email</a>
<br>
<?php
the_field('email',7);
?>
<br>
<?php
the_field('website_link',7);
?>
<br>

<?php
the_field('address',7);
?>
<br>
<iframe src="<?php the_field('map',7)  ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<?php
the_field('map',7);
?>

<?php

$wpnew=array(
'post_type'=>'news'
'post_status'=>'publish'
)
$newsquery=new wp_query($wpnew);
?>

<?php
get_footer();
?>