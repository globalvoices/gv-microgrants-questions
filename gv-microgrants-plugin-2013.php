<?php
/*
Plugin Name: GV Microgrants Questions 2013
Plugin URI: http://globalvoicesonline.org/
Description: Question definitions for the 2013 Microgrants competition to override the new defaults in the microgrants theme. New plugins like this should be created each year to override the new questions for the old sites.
Author: Jeremy Clarke
Version: 0.1
Author URI: http://simianuprising.com/
*/ 

/**
 * Register custom postmeta fields with the Custom Medatata Manager plugin
 *
 * Convert to some other format if this ever stops working
 * Enabling this plugin will cause these to override the new default
 * questions in the microgrants theme because GV_MICROGRANTS_METADATA_DEFINED 
 * will be true 
 */
function gv_microgrants_2013_custom_metadata_manager_admin_init() {
	/**
	 * Exit if the plugin isn't present
	 */
	if(!function_exists( 'x_add_metadata_field' ) OR !function_exists( 'x_add_metadata_group' ) )
		return;
	
	/**
	 * Register a group for pages and posts
	 */
	x_add_metadata_group('gv_custom_metadata_posts', array('post'), array(
		'label' => 'GV Custom Metadata',
		'priority' => 'high',
	));
	/**
	 * Proposal Community
	 */
	x_add_metadata_field( 'proposal-community', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Describe the specific community with whom you will be working',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Convent Vision
	 */
	x_add_metadata_field( 'proposal-content-vision', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'What kinds of news, stories and other content will be created?',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Tools
	 */
	x_add_metadata_field( 'proposal-tools', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Please describe any technologies and digital tools that you plan to use in the trainings that may not be listed above.',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Connections
	 */
	x_add_metadata_field( 'proposal-connections', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Describe the connections that you or your organization have already established that will contribute to the success of the project',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Participants
	 */
	x_add_metadata_field( 'proposal-participants', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'How many participants do you think will be involved in your project?',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Technical
	 */
	x_add_metadata_field( 'proposal-technical', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Describe which technologies, tools, and media you will focus on when training participants.',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Facilities
	 */
	x_add_metadata_field( 'proposal-facilities', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Describe the facilities where you will hold the workshops.',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Relationship
	 */
	x_add_metadata_field( 'proposal-relationship', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'What is your current relationship with the community with whom you plan to work? What makes you the most appropriate individual or organization to implement this project?',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Challenges
	 */
	x_add_metadata_field( 'proposal-challenges', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'What specific challenges do you expect to face when planning and implementing your project?',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Impact
	 */
	x_add_metadata_field( 'proposal-impact', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'How will you measure and evaluate the project’s impact, specifically: your primary participants, the wider regional community, or the global digital community?',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Timeline
	 */
	x_add_metadata_field( 'proposal-timeline', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => ' If your project were to be selected as a Rising Voices grantee, what would be the general timeline of project activities in 2013?',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Budget
	 */
	x_add_metadata_field( 'proposal-budget', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Detail a specific budget of up to $4,000 USD for operating costs.',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Total money requested
	 */
	x_add_metadata_field( 'proposal-total', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Total amount you are requesting (in US dollars)',
		'field_type' => 'text',
	));
	/**
	 * Proposal Other Resources
	 */
	x_add_metadata_field( 'proposal-otherresources', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Besides the microgrant funding, what other resources and support are you seeking for your project to ensure its success?',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal City
	 */
	x_add_metadata_field( 'proposal-city', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'What locality or neighborhood will your project focus on?',
		'field_type' => 'text',
	));
	/**
	 * Proposal Contact
	 */
	x_add_metadata_field( 'proposal-contact', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Contact name',
		'field_type' => 'text',
	));
	/**
	 * Proposal Mailing address
	 */
	x_add_metadata_field( 'proposal-address', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Mailing Address',
		'field_type' => 'text',
	));
	/**
	 * Proposal Telephone number
	 */
	x_add_metadata_field( 'proposal-number', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Telephone Number',
		'field_type' => 'text',
	));
	/**
	 * Proposal Email
	 */
	x_add_metadata_field( 'proposal-email', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Your email address',
		'field_type' => 'text',
	));
	/**
	 * Proposal Organization
	 */
	x_add_metadata_field( 'proposal-organization', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Organization',
		'field_type' => 'text',
	));
	/**
	 * Proposal Video URL
	 */
	x_add_metadata_field( 'proposal-video', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Video URL (optional)',
		'field_type' => 'text',
	));
	/**
	 * Proposal Audio URL
	 */
	x_add_metadata_field( 'proposal-audio', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Audio URL (optional)',
		'field_type' => 'text',
	));
	/**
	 * Proposal Photographs URL
	 */
	x_add_metadata_field( 'proposal-photos', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Photographs URL (optional)',
		'field_type' => 'text',
	));
	/**
	 * Proposal URL
	 */
	x_add_metadata_field( 'proposal-url', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Project website URL',
		'field_type' => 'text',
	));
	/**
	 * Proposal Twitter
	 */
	x_add_metadata_field( 'proposal-twitter', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Twitter URL',
		'field_type' => 'text',
	));
	/**
	 * Proposal Facebook
	 */
	x_add_metadata_field( 'proposal-facebook', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Facebook URL',
		'field_type' => 'text',
	));
	/**
	 * Proposal Private
	 */
	x_add_metadata_field( 'proposal-private', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Don\'t publish this proposal',
		'field_type' => 'checkbox',
	));
	/**
	 * Proposal Privacy Reason
	 */
	x_add_metadata_field( 'proposal-privacy-reason', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Why don\'t you want us to publish your proposal?',
		'field_type' => 'textarea',
	));

//	/**
//	 * Hide creation/update dates, pages only
//	 */
//	x_add_metadata_field('gv-hide-dates', array( 'page'), array(
//		'group' => 'gv_custom_metadata_posts',
//		'label' => 'Hide dates on post (creation and last updated)',
//		'field_type' => 'checkbox',
//	));

	/**
	 * Set GV_MICROGRANTS_METADATA_DEFINED to true to avoid
	 * default new questions being applied
	 */	
	define('GV_MICROGRANTS_METADATA_DEFINED', true);
}
add_action( 'admin_init', 'gv_microgrants_2013_custom_metadata_manager_admin_init');

/**
 * Register postmeta inserts
 * 
 * These will be auto-inserted into post content
 * 
 * Enabling this plugin will cause these to override the new default
 * questions in the microgrants theme because GV_MICROGRANTS_POSTMETA_INSERTS_DEFINED 
 * will be true
 */
function gv_microgrants_2013_register_postmeta_inserts() {

	if (!function_exists('gv_register_postmeta_insert'))
		return;

	gv_register_postmeta_insert(array(
		'taxonomy' => 'gv_topics',
		'label' => 'Topical focus:',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'taxonomy' => 'gv_geo',
		'label' => 'Country:',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-city',
		'label' => 'What locality or neighborhood will your project focus on?',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-community',
		'label' => 'Describe the specific community with whom you will be working.',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-content-vision',
		'label' => 'What kinds of news, stories and other content will be created?',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'taxonomy' => 'gv_tools',
		'label' => 'What technologies and digital tools do you plan to use in the trainings?',
		'position' => 'bottom',
	));		

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-tools',
		'label' => 'Other tools',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-connections',
		'label' => 'Describe the connections that you or your organization have already established that will contribute to the success of the project.',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-participants',
		'label' => 'How many participants do you think will be involved in your project?',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-technical',
		'label' => 'Describe which technologies, tools, and media you will focus on when training participants.',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-facilities',
		'label' => 'Describe the facilities where you will hold the workshops.',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-relationship',
		'label' => 'What is your current relationship with the community with whom you plan to work? What makes you the most appropriate individual or organization to implement this project?',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-challenges',
		'label' => 'What specific challenges do you expect to face when planning and implementing your project?',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-impact',
		'label' => 'How will you measure and evaluate the project’s impact, specifically: your primary participants, the wider regional community, or the global digital community?',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-timeline',
		'label' => ' If your project were to be selected as a Rising Voices grantee, what would be the general timeline of project activities in 2013?',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-budget',
		'label' => 'Detail a specific budget of up to $4,000 USD for operating costs.',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-otherresources',
		'label' => 'Besides the microgrant funding, what other resources and support are you seeking for your project to ensure its success?',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-contact',
		'label' => 'Contact name',
		'position' => 'bottom',
	));

//		gv_register_postmeta_insert(array(
//			'postmeta_field_name' => 'proposal-email',
//			'label' => 'Your email address',
//			'position' => 'bottom',
//		));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-organization',
		'label' => 'Organization',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-url',
		'label' => 'Link to Existing Project',
		'position' => 'bottom',
		'display' => 'url',
	));
	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-twitter',
		'label' => 'Twitter URL',
		'position' => 'bottom',
		'display' => 'url',
	));
	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-facebook',
		'label' => 'Facebook URL',
		'position' => 'bottom',
		'display' => 'url',
	));

	/**
	 * Set GV_MICROGRANTS_POSTMETA_INSERTS_DEFINED to true to avoid
	 * default new questions being applied
	 */
	define('GV_MICROGRANTS_POSTMETA_INSERTS_DEFINED', true);
}
add_action('init', 'gv_microgrants_2013_register_postmeta_inserts');	
?>
