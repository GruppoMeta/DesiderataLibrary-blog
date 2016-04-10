<?php
class desiderataLibrary_modules_blog_views_components_RssFeed extends org_glizy_components_Component
{

	function process()
	{
		$this->_content = $this->_parent->loadContent($this->getId())!="0";
	}

	function render_html()
	{
		if ($this->_content)
		{
			$defaultUrl = GLZ_HOST.'/feed.php';

			$header = '';
			$header .= '<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="'.$defaultUrl.'?type=rss2" />';
			$header .= '<link rel="alternate" type="text/xml" title="RSS .92" href="'.$defaultUrl.'?type=rss092" />';
			$header .= '<link rel="alternate" type="application/atom+xml" href="'.$defaultUrl.'?type=atom030" />';

			$this->addOutputCode($header, 'head');
			$output = __Link::makeSimpleLink('', $defaultUrl, 'RSS Feed', '', '', array('icon' => 'icon-rss'));
			$this->addOutputCode($output);
		}
	}

	public static function translateForMode_edit($node) {
		$attributes = array();
		$attributes['id'] = $node->getAttribute('id');
		$attributes['label'] = $node->getAttribute('label');
		$attributes['data'] = "type=checkbox";
		return org_glizy_helpers_Html::renderTag('glz:Checkbox', $attributes);
    }
}
