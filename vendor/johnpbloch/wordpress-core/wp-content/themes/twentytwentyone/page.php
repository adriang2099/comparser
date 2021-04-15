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
 
require_once __DIR__ . '\\..\\..\\..\\..\\..\\autoload.php';

use Parsehub\Parsehub;

//ParseHub Data
$log_path = __DIR__ . '\\..\\..\\..\\..\\..\\msankhala\\parsehub-php\\log\\parsehub.log';


$api_key = 'tv7RZAmTbj6t';
$project_token = 'tsg8JSyA8TXn';
$parsehub = new Parsehub($api_key,'',$log_path );

//Get Last ready run Data for a project:
// $data =  $parsehub->getLastReadyRunData($project_token);
// var_dump(json_decode ($data, true));

//Get particular Parsehub project, Pass the project_token:
$project = $parsehub->getProject($project_token);
var_dump($project->templates_json);


//ParseHub Data

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
