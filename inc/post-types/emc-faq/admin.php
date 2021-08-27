<?
add_action('edit_form_after_title', 'pre_title_emc_faq');

function pre_title_emc_faq()
{
	global $post, $wp_meta_boxes;

	if ($post->post_type == "emc_faq") { ?>
		<div>
		<input value='[K8_SHORT_FAQ id="<?= $post->ID ?>"]' width="300" height="40" readonly style="
			height: 40px;
			width: 300px;
			margin-top: 15px;
			padding: 10px;
			font-size: 18px;
			border: none;
			background: #fafafa;
		"
		onclick="this.select(); document.execCommand('copy');">
		</div>

	<? }
}