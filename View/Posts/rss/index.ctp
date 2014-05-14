<?php

	$this->set('channelData', array(
		'title' => __("Most Recent Posts"),
		'link' => $this->Html->url('/', true),
		'description' => __("Most recent posts."),
		'language' => 'fr-FR'));
	
	foreach ($posts as $post) {
		$postTime = strtotime($post['Post']['created']);

		$postLink = array(
			'controller' => 'posts',
			'action' => 'detail',
			$post['Post']['id']
		);

		// Retire & �chappe tout HTML pour �tre s�r que le contenu va �tre valid�.
		$bodyText = h(strip_tags($post['Post']['body']));
		$bodyText = $this->Text->truncate($bodyText, 400, array(
			'ending' => '...',
			'exact'  => true,
			'html'   => true,
		));

		echo  $this->Rss->item(array(), array(
			'title' => $post['Post']['title'],
			'link' => $postLink,
			'guid' => array('url' => $postLink, 'isPermaLink' => 'true'),
			'description' => $bodyText,
			'pubDate' => $post['Post']['created']
		));
	}
?>