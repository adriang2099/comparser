<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
 
//+++++++++++++ ParseHub Data ++++++++++++
require_once __DIR__ . '\\..\\..\\..\\..\\..\\autoload.php';
use Parsehub\Parsehub;
$log_path = __DIR__ .  '\\..\\..\\..\\..\\..\\msankhala\\parsehub-php\\log\\parsehub.log';

//yoyopennystock@protonmail.com -> token
$api_key = 'tv7RZAmTbj6t';

//adriang2099@gmail.com -> token
// $api_key = 'tHnGnCTZAg93';

//adriang2099 -> Project -> Dividata
// $project_token = 'tKZ0qSdOU-Gx';

//yoyopennystock@protonmail.com -> Project -> dividend.com 
// $project_token = 't0L6CoB3rzv8';

//yoyopennystock@protonmail.com -> Project -> DividendChannel
$project_token = 'tW8kv-ATr4t3';

$parsehub = new Parsehub($api_key,'',$log_path );

//Get Last ready run Data for a project:
$data =  $parsehub->getLastReadyRunData($project_token);
// var_dump(json_decode ($data, true));

//Get particular Parsehub project, Pass the project_token:
// $project = $parsehub->getProject($project_token);
// var_dump($project->templates_json, 0, );


//---------- Saving Data to DB

/* create a connection */
global $seconddb;
$seconddb->show_errors(true);

// Last Ready Run Data json
$data =  $parsehub->getLastReadyRunData($project_token);

// use json_decode to create an array from json
$data = json_decode($data, true);

// Project Title = table Name in DB
$table = $parsehub->getProject($project_token)->title;

// for ($i=0; $i <sizeof($data['table']); $i++){
	// $exDate = $data['table'][$i]['ex_date'];
	// $cash = $data['table'][$i]['cash'];
	// $seconddb->query($seconddb->prepare( "INSERT INTO " . $table . " (ex_date,cash) VALUES ('" . $exDate . "','" . $cash . "')"));
// }

////////////////// Showing DB errors

$seconddb->print_error();

//-------------- ParseHub Data -------------

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page' );

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.

get_footer();
