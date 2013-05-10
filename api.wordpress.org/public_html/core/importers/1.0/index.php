<?php

$popular_importers = wporg_api_get_popular_importers();
# unset( $popular_importers['tumblr'] );
echo serialize( array( 'importers' => $popular_importers, 'translated' => false ) );

function __( $string ) { return $string; }

// This function is synced in wp-admin/includes/import.php.

function wporg_api_get_popular_importers() {
	return array(
		// slug => name, description, plugin slug, and register_importer() slug
		'blogger' => array(
			'name' => __( 'Blogger' ),
			'description' => __( 'Install the Blogger importer to import posts, comments, and users from a Blogger blog.' ),
			'plugin-slug' => 'blogger-importer',
			'importer-id' => 'blogger',
		),
		'wpcat2tag' => array(
			'name' => __( 'Categories and Tags Converter' ),
			'description' => __( 'Install the category/tag converter to convert existing categories to tags or tags to categories, selectively.' ),
			'plugin-slug' => 'wpcat2tag-importer',
			'importer-id' => 'wpcat2tag',
		),
		'livejournal' => array(
			'name' => __( 'LiveJournal' ),
			'description' => __( 'Install the LiveJournal importer to import posts from LiveJournal using their API.' ),
			'plugin-slug' => 'livejournal-importer',
			'importer-id' => 'livejournal',
		),
		'movabletype' => array(
			'name' => __( 'Movable Type and TypePad' ),
			'description' => __( 'Install the Movable Type importer to import posts and comments from a Movable Type or TypePad blog.' ),
			'plugin-slug' => 'movabletype-importer',
			'importer-id' => 'mt',
		),
		'opml' => array(
			'name' => __( 'Blogroll' ),
			'description' => __( 'Install the blogroll importer to import links in OPML format.' ),
			'plugin-slug' => 'opml-importer',
			'importer-id' => 'opml',
		),
		'rss' => array(
			'name' => __( 'RSS' ),
			'description' => __( 'Install the RSS importer to import posts from an RSS feed.' ),
			'plugin-slug' => 'rss-importer',
			'importer-id' => 'rss',
		),
		'tumblr' => array(
			'name' => __( 'Tumblr' ),
			'description' => __( 'Install the Tumblr importer to import posts &amp; media from Tumblr using their API.' ),
			'plugin-slug' => 'tumblr-importer',
			'importer-id' => 'tumblr',
		),
		'wordpress' => array(
			'name' => 'WordPress',
			'description' => __( 'Install the WordPress importer to import posts, pages, comments, custom fields, categories, and tags from a WordPress export file.' ),
			'plugin-slug' => 'wordpress-importer',
			'importer-id' => 'wordpress',
		),
	);
}

