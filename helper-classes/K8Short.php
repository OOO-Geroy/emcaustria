<?php
class K8Short
{
	public $true_icon;
	public $false_icon;
	public $notset_icon;

	public $tbl_end;
	public $templ_url;

	public $td;
	public $_td;

	public $tr;
	public $_tr;

	public $b;
	public $_b;

	public $s;
	public $_s;

	public $mark1;
	public $_mark1;

	public $_ul;

	public $url;

	public function __construct($atts)
	{
		$this->url = '#';

		$this->true_icon = $atts['true'];
		$this->false_icon = $atts['false'];
		$this->notset_icon = $atts['notset'];

		$this->tbl_end = '</tbody></table></div>';
		$this->templ_url = get_template_directory() . '/templz/shortcodes/';

		$this->th = '<th scope="col">';
		$this->_th = '</th>';

		$this->td = '<td>';
		$this->_td = '</td>';

		$this->tr = '<tr>';
		$this->_tr = '</tr>';

		$this->b = '<b>';
		$this->_b = '</b>';

		$this->s = '<strong>';
		$this->_s = '</strong>';

		$this->mark1 = '<h3 class="mark">';
		$this->_mark1 = '</a></h3>';

		$this->em = '<em>';
		$this->_em = '</em>';

		$this->_ul = '</ul>';
		$this->_li = '</li>';

		/**
		 * [K8_SHORT_FAQ] generates schema markup for FAQ pages
		 */
		add_shortcode('K8_SHORT_FAQ', array($this, 'faq'));
		add_shortcode('EMC_SHORT_YT', array($this, 'yt'));
	}

	public function tbl_start($attr = array())
	{
		$str = '<div class="k8_tbl-resp %s"><table class="k8_compare-tbl mtb-30"><tbody>';
		(isset($attr['add_clss'])) ? $add_clss = $attr['add_clss'] : $add_clss = '';
		return sprintf($str, $add_clss);
	}
	// generates schema markup for FAQ pages
	// [K8_SHORT_FAQ]
	public function faq($atts, $content, $tag)
	{
		$a = shortcode_atts(array(
			'output' => 'design1',
			'vpnid' => get_the_ID(),
		), $atts);
		$q_o = get_queried_object();
		$k8_acf_faq = get_field('k8_acf_faq', $q_o->ID);
		if (strpos($_SERVER['REQUEST_URI'], '/amp/')) {
			$a["output"] = 'amp/' . $a["output"];
		}
		ob_start();
		if ($k8_acf_faq && is_array($k8_acf_faq) && count($k8_acf_faq) > 0) :
			include $this->templ_url . $tag . '/' . $a["output"] . '.php';
			$schema = K8Schema::getFaqPage([
				'k8_acf_faq' => $k8_acf_faq
			]);
			echo '<script type="application/ld+json">' . $schema . '</script>';
		endif;
		$html = ob_get_clean();
		return $html;
	}

	public function yt($atts, $content, $tag)
	{
		$a = shortcode_atts(array(
			'id' => 'dkPLIw9aZwY',
			'output' => 'design1',
		), $atts);
		$img_name = 'maxresdefault.jpg';
		if (!url_exists("http://img.youtube.com/vi/" . $a['id'] . "/maxresdefault.jpg"))
			$img_name = 'hqdefault.jpg';

		ob_start();
		include $this->templ_url . $tag . '/' . $a["output"] . '.php';
		$html = ob_get_clean();

		return sprintf(
			$html,
			$a['id'],
			$a['id'],
			$img_name
		);
	}
}

new K8Short([
	'true' => '&#10004;',
	'false' => '&#10008;',
	'notset' => '&#9866;'
]);
