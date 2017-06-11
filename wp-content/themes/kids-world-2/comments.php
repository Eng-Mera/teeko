<?php
if ( post_password_required() ) {
	return;
}?>

<div id="comments" class="comments-area">
    <?php if ( have_comments() ) : ?>


	    <h3><?php comments_number(esc_html__('No Comments','kids-world'), esc_html__('Comment ( 1 )','kids-world'), esc_html__('Comments ( % )','kids-world') );?></h3>

		<?php the_comments_navigation(); ?>

        <ul class="commentlist">
     		<?php wp_list_comments( array( 'callback' => 'kidsworld_comment_style' ) ); ?>
        </ul>

        <?php the_comments_navigation(); ?>

    <?php endif; ?>

	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
        <p class="nocomments"><?php esc_html_e( 'Comments are closed.','kids-world'); ?></p>
    <?php endif;?>    
	
    <?php
	
	$author = "<div class='column dt-sc-one-half first'><p><input id='author' name='author' type='text' placeholder='".esc_html__("Name",'kids-world')."' required /></p></div>";
	$email = "<div class='column dt-sc-one-half'><p> <input id='email' name='email' type='text' placeholder='".esc_html__("Email",'kids-world')."' required /> </p></div>";
	$comment = "<div class='column dt-sc-one-column first'><p><textarea id='comment' name='comment' cols='5' rows='3' placeholder='".esc_html__("Comment",'kids-world')."' ></textarea></p></div>";
	
	$comments_args = array(
		'title_reply' 			=> 	esc_html__( 'Give a Reply','kids-world' ),
		'fields'				=> 	array('author' => $author,'email' => $email),
		'comment_field'			=> 	$comment,
		'comment_notes_before'	=>	'',
		'comment_notes_after'	=>	'',
		'label_submit'			=>	esc_html__('Comment','kids-world'));

	comment_form($comments_args);

	?>

</div><!-- .comments-area -->