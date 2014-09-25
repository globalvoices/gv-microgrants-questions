<?php
/*
Plugin Name: GV Microgrants AMAZONIA ES Questions
Plugin URI: http://globalvoicesonline.org/
Description: Question definitions for the 2014 Global Microgrants competition to override the new defaults in the microgrants theme. New plugins like this should be created each year to override the new questions for the old sites.
Author: Jeremy Clarke
Version: 0.1
Author URI: http://simianuprising.com/
*/ 

/**
 * Change sponsors logo directory to use old one and add some CSS to have the right background
 * 
 * Needed to avoid re-creating the logos as light on dark
 * 
 * @global type $gv
 * @param type $param
 */
function gv_microgrants_amazonia_es_fake_functionsphp($param) {
	global $gv;
	if (is_object($gv)) :
		$gv->dir['sponsor_badges'] = $gv->dir['static'] . "img/tmpl/funders/";
	endif;
	echo "<style type='text/css'>.sponsors-badges{background:#f7f7f7;padding:.75rem;}</style>";
}
add_action('wp_head', 'gv_microgrants_amazonia_es_fake_functionsphp');

/**
 * Register custom postmeta fields with the Custom Medatata Manager plugin
 *
 * Convert to some other format if this ever stops working
 * Enabling this plugin will cause these to override the new default
 * questions in the microgrants theme because GV_MICROGRANTS_METADATA_DEFINED 
 * will be true 
 */
function gv_microgrants_2014_global_custom_metadata_manager_admin_init() {
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
		'label' => 'Descripción de la comunidad amazónica específica con la que va a trabajar.',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Team
	 */
	x_add_metadata_field( 'proposal-team', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => '¿Quiénes serán parte del equipo que ayudará a implementar el proyecto?',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Convent Vision
	 */
	x_add_metadata_field( 'proposal-content-vision', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => '¿Qué tipo de noticias, historias y otros contenidos digitales se crearán en el proyecto?',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Connections
	 */
	x_add_metadata_field( 'proposal-connections', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Describa las conexiones que su organización ya haya establecido o que se propongan establecer para contribuir al éxito del proyecto.',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Participants
	 */
	x_add_metadata_field( 'proposal-participants', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => '¿Cuantas personas participarán en las capacitaciones del proyecto?',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Technical
	 */
	x_add_metadata_field( 'proposal-technical', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Describa las herramientas tecnológicas y medios de comunicación digitales en los cuales se enfocará la capacitación a los miembros de la comunidad.',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Facilities
	 */
	x_add_metadata_field( 'proposal-facilities', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Describa las instalaciones donde se llevarán a cabo los talleres.',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Relationship
	 */
	x_add_metadata_field( 'proposal-relationship', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => '¿Cuál es su relación actual con la comunidad con la que deseas trabajar? ¿Por qué considera que su organización es la más adecuada para la ejecución de este proyecto?',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Challenges
	 */
	x_add_metadata_field( 'proposal-challenges', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'En concreto, ¿cuáles son los desafíos que preveen tendrán que enfrentar en la planificación e implementación de su proyecto?',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Impact
	 */
	x_add_metadata_field( 'proposal-impact', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => '¿Cómo va a medir y evaluar el impacto de su proyecto concretamene en sus participantes directos, en la comunidad regional más amplia y en la comunidad digital mundial?',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Timeline
	 */
	x_add_metadata_field( 'proposal-timeline', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Si su proyecto es seleccionado por Rising Voices, ¿cuál sería el cronograma general de actividades en el periodo 2014-2015?',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Budget
	 */
	x_add_metadata_field( 'proposal-budget', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Proporcione un presupuesto detallado de hasta US$3,500.00 para gastos de funcionamiento.',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Total money requested
	 */
	x_add_metadata_field( 'proposal-total', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Cantidad total solicitada (en dólares americanos)',
		'field_type' => 'text',
	));
	/**
	 * Proposal Other Resources
	 */
	x_add_metadata_field( 'proposal-otherresources', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Además de la financiación de microbecas, ¿qué otro tipo de apoyo considera que  Rising Voices pueda brindar a  su proyecto para garantizar su éxito?',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal City
	 */
	x_add_metadata_field( 'proposal-city', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Ciudad',
		'field_type' => 'text',
	));
	/**
	 * Proposal Contact
	 */
	x_add_metadata_field( 'proposal-contact', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Nombre de Contacto',
		'field_type' => 'text',
	));
	/**
	 * Proposal Mailing address
	 */
	x_add_metadata_field( 'proposal-address', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Dirección Postal',
		'field_type' => 'text',
	));
	/**
	 * Proposal Telephone number
	 */
	x_add_metadata_field( 'proposal-number', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Número de teléfono',
		'field_type' => 'text',
	));
	/**
	 * Proposal Email
	 */
	x_add_metadata_field( 'proposal-email', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Su correo electrónico (e-mail)',
		'field_type' => 'text',
	));
	/**
	 * Proposal Organization
	 */
	x_add_metadata_field( 'proposal-organization', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Organización',
		'field_type' => 'text',
	));
	/**
	 * Proposal URL
	 */
	x_add_metadata_field( 'proposal-url', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Sitio web de la organización (opcional)',
		'field_type' => 'text',
	));
	/**
	 * Proposal Twitter
	 */
	x_add_metadata_field( 'proposal-twitter', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Twitter URLCuenta en Twitter',
		'field_type' => 'text',
	));
	/**
	 * Proposal Facebook
	 */
	x_add_metadata_field( 'proposal-facebook', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Perfil en Facebook',
		'field_type' => 'text',
	));
	/**
	 * Proposal First Time
	 */
	x_add_metadata_field( 'proposal-firsttime', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Esta es la primera vez que postules para un micro-subvención de Rising Voices?',
		'field_type' => 'text',
	));
	/**
	 * Proposal Private
	 */
	x_add_metadata_field( 'proposal-private', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'No publicar esta propuesta',
		'field_type' => 'checkbox',
	));
	/**
	 * Proposal Privacy Reason
	 */
	x_add_metadata_field( 'proposal-privacy-reason', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => '¿Por qué no quieres que publiquemos su propuesta?',
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
add_action( 'admin_init', 'gv_microgrants_2014_global_custom_metadata_manager_admin_init');

/**
 * Register postmeta inserts
 * 
 * These will be auto-inserted into post content
 * 
 * Enabling this plugin will cause these to override the new default
 * questions in the microgrants theme because GV_MICROGRANTS_POSTMETA_INSERTS_DEFINED 
 * will be true
 */
function gv_microgrants_2014_global_register_postmeta_inserts() {

	if (!function_exists('gv_register_postmeta_insert'))
		return;
	
	gv_register_postmeta_insert(array(
		'taxonomy' => 'gv_topics',
		'label' => '¿Cómo describiría el tema principal de su proyecto?:',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'taxonomy' => 'gv_geo',
		'label' => 'País:',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-city',
		'label' => 'Ciudad',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-community',
		'label' => 'Descripción de la comunidad amazónica específica con la que va a trabajar.',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-team',
		'label' => '¿Quiénes serán parte del equipo que ayudará a implementar el proyecto?',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-content-vision',
		'label' => '¿Qué tipo de noticias, historias y otros contenidos digitales se crearán en el proyecto?',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'taxonomy' => 'gv_tools',
		'label' => 'Elija la principal herramienta o medio de comunicación digital que su proyecto va a usar.',
		'position' => 'bottom',
	));		

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-tools',
		'label' => 'Other tools',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-connections',
		'label' => 'Describa las conexiones que su organización ya haya establecido o que se propongan establecer para contribuir al éxito del proyecto.',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-participants',
		'label' => '¿Cuantas personas participarán en las capacitaciones del proyecto?',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-technical',
		'label' => 'Describa las herramientas tecnológicas y medios de comunicación digitales en los cuales se enfocará la capacitación a los miembros de la comunidad.',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-facilities',
		'label' => 'Describa las instalaciones donde se llevarán a cabo los talleres.',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-relationship',
		'label' => '¿Cuál es su relación actual con la comunidad con la que deseas trabajar? ¿Por qué considera que su organización es la más adecuada para la ejecución de este proyecto?',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-challenges',
		'label' => 'En concreto, ¿cuáles son los desafíos que preveen tendrán que enfrentar en la planificación e implementación de su proyecto?',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-impact',
		'label' => '¿Cómo va a medir y evaluar el impacto de su proyecto concretamene en sus participantes directos, en la comunidad regional más amplia y en la comunidad digital mundial?',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-timeline',
		'label' => 'Si su proyecto es seleccionado por Rising Voices, ¿cuál sería el cronograma general de actividades en el periodo 2014-2015?',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-budget',
		'label' => 'Proporcione un presupuesto detallado de hasta US$3,500.00 para gastos de funcionamiento.',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-otherresources',
		'label' => 'Además de la financiación de microbecas, ¿qué otro tipo de apoyo considera que  Rising Voices pueda brindar a  su proyecto para garantizar su éxito?',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-contact',
		'label' => 'Nombre de Contacto',
		'position' => 'bottom',
	));

//		gv_register_postmeta_insert(array(
//			'postmeta_field_name' => 'proposal-email',
//			'label' => 'Your email address',
//			'position' => 'bottom',
//		));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-organization',
		'label' => 'Organización',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-url',
		'label' => 'Sitio web de la organización (opcional)',
		'position' => 'bottom',
		'display' => 'url',
	));
	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-twitter',
		'label' => 'Cuenta en Twitter',
		'position' => 'bottom',
		'display' => 'url',
	));
	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-facebook',
		'label' => 'Perfil en Facebook',
		'position' => 'bottom',
		'display' => 'url',
	));

	/**
	 * Set GV_MICROGRANTS_POSTMETA_INSERTS_DEFINED to true to avoid
	 * default new questions being applied
	 */
	define('GV_MICROGRANTS_POSTMETA_INSERTS_DEFINED', true);
}
add_action('init', 'gv_microgrants_2014_global_register_postmeta_inserts');