<?php
/*
Plugin Name: GV Microgrants AMAZONIA PT Questions
Plugin URI: http://globalvoicesonline.org/
Description: Question definitions for the 2014 Global Microgrants competition to override the new defaults in the microgrants theme. New plugins like this should be created each year to override the new questions for the old sites.
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
		'label' => 'Descreva a comunidade amazônica específica com a qual você estará trabalhando',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Team
	 */
	x_add_metadata_field( 'proposal-team', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Quem mais fará parte da equipe ajudando a implementar o projeto?',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Convent Vision
	 */
	x_add_metadata_field( 'proposal-content-vision', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Quais os tipos de notícias, estórias e outros conteúdos a serem criados?',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Connections
	 */
	x_add_metadata_field( 'proposal-connections', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Descreva as conexões que a sua organização já estabeleceu ou planeja estabelecer, e que contribuirão para o sucesso do projeto.',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Participants
	 */
	x_add_metadata_field( 'proposal-participants', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Quantas pessoas você espera que participem do projeto?',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Technical
	 */
	x_add_metadata_field( 'proposal-technical', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Descreva quais tecnologias, ferramentas e mídia com que você vai se concentrar ao treinar membros da comunidade',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Facilities
	 */
	x_add_metadata_field( 'proposal-facilities', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Descreva as instalações onde as oficinas serão conduzidas.',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Relationship
	 */
	x_add_metadata_field( 'proposal-relationship', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Qual é a sua relação atual com a comunidade com a qual pretende trabalhar? O que torna você ou a sua organização apropriado/a a implementar este projeto?',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Challenges
	 */
	x_add_metadata_field( 'proposal-challenges', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Especificamente, quais são os desafios que você prevê ter de enfrentar ao planejar e implementar o seu projeto?',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Impact
	 */
	x_add_metadata_field( 'proposal-impact', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Como vai mensurar e avaliar o impacto de seu projeto especificamente com: seus participantes diretos, a comunidade regional mais ampla e a comunidade digital global?',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Timeline
	 */
	x_add_metadata_field( 'proposal-timeline', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Caso seu projeto seja selecionado pelo Rising Voices, qual seria o cronograma geral de atividades do projeto em 2014-2015?',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Budget
	 */
	x_add_metadata_field( 'proposal-budget', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Apresente um orçamento detalhado de até US$3.500,00 para custos operacionais.',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal Total money requested
	 */
	x_add_metadata_field( 'proposal-total', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Valor total solicitado (em dólares americanos)',
		'field_type' => 'text',
	));
	/**
	 * Proposal Other Resources
	 */
	x_add_metadata_field( 'proposal-otherresources', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Além do financiamento da micro-bolsa, que outro tipo de apoio o Rising Voices poderia oferecer para garantir o sucesso do seu projeto?',
		'field_type' => 'textarea',
	));
	/**
	 * Proposal City
	 */
	x_add_metadata_field( 'proposal-city', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Cidade',
		'field_type' => 'text',
	));
	/**
	 * Proposal Contact
	 */
	x_add_metadata_field( 'proposal-contact', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Nome de contato',
		'field_type' => 'text',
	));
	/**
	 * Proposal Mailing address
	 */
	x_add_metadata_field( 'proposal-address', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Endereço físico',
		'field_type' => 'text',
	));
	/**
	 * Proposal Telephone number
	 */
	x_add_metadata_field( 'proposal-number', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Número de telefone',
		'field_type' => 'text',
	));
	/**
	 * Proposal Email
	 */
	x_add_metadata_field( 'proposal-email', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Seu email',
		'field_type' => 'text',
	));
	/**
	 * Proposal Organization
	 */
	x_add_metadata_field( 'proposal-organization', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Organização',
		'field_type' => 'text',
	));
	/**
	 * Proposal URL
	 */
	x_add_metadata_field( 'proposal-url', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Página da organização na Internet (opcional)',
		'field_type' => 'text',
	));
	/**
	 * Proposal Twitter
	 */
	x_add_metadata_field( 'proposal-twitter', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Conta no Twitter',
		'field_type' => 'text',
	));
	/**
	 * Proposal Facebook
	 */
	x_add_metadata_field( 'proposal-facebook', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Perfil no Facebook',
		'field_type' => 'text',
	));
	/**
	 * Proposal First Time
	 */
	x_add_metadata_field( 'proposal-firsttime', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Esta é a primeira vez que você candidata-se para uma micro-bolsa do Rising Voices?',
		'field_type' => 'text',
	));
	/**
	 * Proposal Private
	 */
	x_add_metadata_field( 'proposal-private', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Não publique esta proposta',
		'field_type' => 'checkbox',
	));
	/**
	 * Proposal Privacy Reason
	 */
	x_add_metadata_field( 'proposal-privacy-reason', array('post'), array(
		'group' => 'gv_custom_metadata_posts',
		'label' => 'Por que você prefere que sua proposta não seja publicada?',
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
		'label' => 'Como você poderia descrever a principal temática do seu projeto?',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'taxonomy' => 'gv_geo',
		'label' => 'Country:',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-city',
		'label' => 'Cidade',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-community',
		'label' => 'Descreva a comunidade amazônica específica com a qual você estará trabalhando',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-team',
		'label' => 'Quem mais fará parte da equipe ajudando a implementar o projeto?',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-content-vision',
		'label' => 'Quais os tipos de notícias, estórias e outros conteúdos a serem criados?',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'taxonomy' => 'gv_tools',
		'label' => 'Escolha a ferramenta ou mídia primária que o seu projeto vai usar.',
		'position' => 'bottom',
	));		

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-tools',
		'label' => 'Other tools',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-connections',
		'label' => 'Descreva as conexões que a sua organização já estabeleceu ou planeja estabelecer, e que contribuirão para o sucesso do projeto.',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-participants',
		'label' => 'Quantas pessoas você espera que participem do projeto?',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-technical',
		'label' => 'Descreva quais tecnologias, ferramentas e mídia com que você vai se concentrar ao treinar membros da comunidade',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-facilities',
		'label' => 'Descreva as instalações onde as oficinas serão conduzidas.',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-relationship',
		'label' => 'Qual é a sua relação atual com a comunidade com a qual pretende trabalhar? O que torna você ou a sua organização apropriado/a a implementar este projeto?',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-challenges',
		'label' => 'Especificamente, quais são os desafios que você prevê ter de enfrentar ao planejar e implementar o seu projeto?',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-impact',
		'label' => 'Como vai mensurar e avaliar o impacto de seu projeto especificamente com: seus participantes diretos, a comunidade regional mais ampla e a comunidade digital global?',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-timeline',
		'label' => 'Caso seu projeto seja selecionado pelo Rising Voices, qual seria o cronograma geral de atividades do projeto em 2014-2015?',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-budget',
		'label' => 'Apresente um orçamento detalhado de até US$3.500,00 para custos operacionais.',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-otherresources',
		'label' => 'Além do financiamento da micro-bolsa, que outro tipo de apoio o Rising Voices poderia oferecer para garantir o sucesso do seu projeto?',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-contact',
		'label' => 'Nome de contato',
		'position' => 'bottom',
	));

//		gv_register_postmeta_insert(array(
//			'postmeta_field_name' => 'proposal-email',
//			'label' => 'Your email address',
//			'position' => 'bottom',
//		));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-organization',
		'label' => 'Organização',
		'position' => 'bottom',
	));

	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-url',
		'label' => 'Página da organização na Internet (opcional)',
		'position' => 'bottom',
		'display' => 'url',
	));
	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-twitter',
		'label' => 'Conta no Twitter',
		'position' => 'bottom',
		'display' => 'url',
	));
	gv_register_postmeta_insert(array(
		'postmeta_field_name' => 'proposal-facebook',
		'label' => 'Perfil no Facebook',
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