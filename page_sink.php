<?php
/**
* Template Name: Kitchen Sink
* Description: This page is for demonstration purposes only. It should be removed before deploying.
*/ 


add_action( 'wp_enqueue_scripts', 'kitchen_sink_fonts' );
function kitchen_sink_fonts() {

$font1 = the_field('font_1');
$font_weight1 = the_field('font_weight1');

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=$font1:$font_weight1', array(), CHILD_THEME_VERSION );
}

add_action( 'genesis_entry_content', 'sink_loop' );
function sink_loop() { ?>

<style type="text/css">
.special-color {
    background-color: <?php the_field('color'); ?>;
}


/* Color Blocks */

.color-block {
	background-color: <?php the_sub_field('color'); ?>;
	height: 125px;
	text-align: center;
	width: 48%;
	float: left;
	margin: 0 1% 1% 0;
	padding: 5px;
}

.dark {
	color: #fff;
}

.light {
	color: #111;
}

.post-edit-link {
	display:none;
}

h1, h2, h3, h4, h5, h6 {
	font-family: <?php the_field('font_1'); ?>;
}

</style>

<?php

// check if the repeater field has rows of data
if( have_rows('colors') ):

 	// loop through the rows of data
    while ( have_rows('colors') ) : the_row(); ?>

		<div class="color-block" style="background-color:<?php the_sub_field('color'); ?>;">

			<?php if( get_sub_field('dark_indicator') )
			{ ?>
			    <div class="dark">
			    	<strong><?php the_sub_field('color_role'); ?></strong><br />
			    	<?php the_sub_field( 'color_name' ); ?><br />
			    	<?php the_sub_field( 'color' ); ?><br />
			    	rgb( <?php the_sub_field( 'color_rgb' ); ?>) 
			    </div>
			<?php    
			}

			else

			{ ?>
			    <div class="light">
			    	<strong><?php the_sub_field('color_role'); ?></strong> <br /> 
			    	<?php the_sub_field( 'color_name' ); ?><br />
			    	<?php the_sub_field( 'color' ); ?><br />
			    	rgb( <?php the_sub_field( 'color_rgb' ); ?>)  
			    </div>
			<?php  
			} ?>
		</div>

    <?php
    endwhile; ?>
		<div style="clear:both;"/> 
<?php else :

    // no rows found

endif;

?>


<h1>Header One (36px)</h1>
<h2>Header Two (30px)</h2>
<h3>Header Three (24px)</h3>
<h4>Header Four (20px)</h4>
<h5>Header Five (18px)</h5>
<h6>Header Six (16px)</h6>
Paragraph text (18px)
<h2>Header Two: Nuts &amp; Bolts</h2>
Here is a paragraph that lays out all of the <strong>below items</strong> in natural conversation. It's sometimes <em>easier to style</em> when you see it as it will appear on the page. <em><strong>For this reason</strong></em>, I have gone through <a href="#">the trouble</a> to create this paragraph. It should have everything you need to get an idea of what you're working with.
<ul>
	<li><strong>This is some bold text</strong></li>
	<li><em>This is some italicized text</em></li>
	<li>This is some underlined text</li>
	<li><del>Strikethrough that text yo!</del></li>
	<li><a href="#">This is a link.</a></li>
	<li><em><strong>This is some text with the works--hold the strikethrough.</strong></em></li>
</ul>
<h3>Header 3: Let's Talk About Lists</h3>
An unordered list
<ul>
	<li>Scripture Reference: Genesis 1:1</li>
	<li>Genesis 14:3 - 27:4</li>
	<li>List item 3</li>
	<li>List item 4</li>
</ul>
An ordered List! Oh yeah
<ol>
	<li>List item one</li>
	<li>List item two</li>
	<li>List item three</li>
	<li>List item four</li>
</ol>
<h4>Header Four: How About Fonts</h4>
<a href="https://www.google.com/fonts/specimen/Source+Sans+Pro">Source Sans Pro</a>
<a href="https://www.google.com/fonts/specimen/Source+Serif+Pro">Source Serif Pro</a>
<h5>Header 5 Buttons</h5>
<a class="button-small" href="#">Small Button</a>
<a class="button-medium" href="#">Medium Button</a>
<a class="button-large" href="#">Large Button</a>
<table>
<tbody>
<tr>
<th>Name</th>
<th>Position</th>
<th>Birthplace</th>
<th>Degree</th>
</tr>
<tr>
<td>Jon</td>
<td>Linebacker</td>
<td>Arizona</td>
<td>Business</td>
</tr>
<tr>
<td>Jon</td>
<td>Linebacker</td>
<td>Arizona</td>
<td>Business</td>
</tr>
<tr>
<td>Jon</td>
<td>Linebacker</td>
<td>Arizona</td>
<td>Business</td>
</tr>
<tr>
<td>Jon</td>
<td>Linebacker</td>
<td>Arizona</td>
<td>Business</td>
</tr>
<tr>
<td>Jon</td>
<td>Linebacker</td>
<td>Arizona</td>
<td>Business</td>
</tr>
</tbody>
</table>

<hr />

<h2>Heading Two: Colors</h2>


<hr />

<h2>Header Two Column Classes</h2>
Below are examples of column classes that are available in the Genesis Framework style sheet.
<h3>Two-Columns</h3>
<div class="one-half first">

This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind.

</div>
<div class="one-half">

This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind.

</div>
<div></div>
<h3>Three-Columns</h3>
<div class="one-third first">

This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what is on your mind.

</div>
<div class="one-third">

This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what is on your mind.

</div>
<div class="one-third">

This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what is on your mind.

</div>
<div></div>
<h3>Four-Columns</h3>
<div class="one-fourth first">

This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind.

</div>
<div class="one-fourth">

This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind.

</div>
<div class="one-fourth">

This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind.

</div>
<div class="one-fourth">

This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind.

</div>
<div></div>
<h3>Six-Columns</h3>
<div class="one-sixth first">

This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what is on your mind.

</div>
<div class="one-sixth">

This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what is on your mind.

</div>
<div class="one-sixth">

This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what is on your mind.

</div>
<div class="one-sixth">

This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what is on your mind.

</div>
<div class="one-sixth">

This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what is on your mind.

</div>
<div class="one-sixth">

This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what is on your mind.

</div>


<?php

} 
genesis();