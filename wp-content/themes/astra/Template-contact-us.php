<?php
//Template Name:Contact Us
get_header();

?>




<?php

$wpnew=array(
'post_type'=>'news',
'post_status'=>'publish'
);
$newsquery=new wp_query($wpnew);
while($newsquery->have_posts()){
	$newsquery->the_post();
}
?>
<h2><?php the_title()?></h2>
<?php  discription() ?>
<?php
get_footer();
?>