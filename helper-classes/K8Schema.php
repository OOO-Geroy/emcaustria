<?php
class K8Schema
{
	#Returns json markup for FAQ page
	static function getFaqPage( $args ){
		extract( $args );
		unset( $args );
		$datta = array(
			"@context" => "https://schema.org",
			"@type" => "FAQPage"
		);
		foreach ($k8_acf_faq as $value) {
			$datta['mainEntity'][] = array(
				'@type' => 'Question',
				'name' => wp_strip_all_tags( $value['quest'], true ),
				'acceptedAnswer' => array(
					'@type' => 'Answer',
					'text' => wp_strip_all_tags( $value['ans'], true )
				)
			);
		}
		return json_encode($datta, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
	}
}