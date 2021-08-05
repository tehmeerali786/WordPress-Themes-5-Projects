
<h2>Comments</h2>
<?php 

		$args = array(


				'walker' => null,
				'max_depth' => '',
				'style' => 'ul',
				'callback' => null,
				'end-callback' => null,
				'type' => 'all',
				'reply_text' => 'Reply',
				'page' => '',
				'per_page' => '',
				'avatar_size' => 32,
				'reverse_top_level' => null,
				'reverse_children' => '',
				'format' => 'html5',
				'short_ping' => false,
				'echo' => true



		); ?>

<?php wp_list_comments($args, $comments); ?>


<?php 
		
		$form_args = array(

			// change the title of send button
			'label_submit' => 'Send',
			// change the title of the reply section
			'title_reply' => 'Write a Reply or Comment',
			// remove 'Text or HTMl to be displayed after the set of comment fields'
			'comment_notes_after' => '',
			// redifine your own text area
			'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _X('Comment', 'noun') . '</label><textarea id="comment" name="comment" cols = 45 rows=8 aria-required="true"></textarea></p>'
		);

		comment_form($form_args);


 ?>