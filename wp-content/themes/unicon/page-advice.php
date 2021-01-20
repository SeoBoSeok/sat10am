<?php get_header(); 

// Layout
$sidebar = get_post_meta( get_the_ID(), 'minti_layout', true );

if($sidebar == 'default'){
	$sidebarlayout = 'sixteen columns';
} 
elseif($sidebar == 'fullwidth'){
	$sidebarlayout = 'page-section nopadding';
}
elseif($sidebar == 'sidebar-left'){
	$sidebarlayout = 'sidebar-left twelve alt columns';
}
elseif($sidebar == 'sidebar-right'){
	$sidebarlayout = 'sidebar-right twelve alt columns';
} 
else{
	$sidebarlayout = 'sixteen columns';
} ?>

<div id="page-wrap" <?php if($sidebar != 'fullwidth'){ echo 'class="container"'; } ?> style="text-align:center;background-color:#f9f9f9;" >

	<div id="content" class="<?php echo esc_attr($sidebarlayout); ?>">
    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfoWUiIeEJpB6HcjNjMyySEXzKyniUH-WYvxKzPtv93Ka_dbA/viewform?embedded=true" width="640" height="635" frameborder="0" marginheight="0" marginwidth="0">로드 중…</iframe>
    </div> <!-- end content -->
    
</div> <!-- end page-wrap -->
	
<?php get_footer(); ?>    