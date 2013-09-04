<?php
add_action('init','of_options');
if (!function_exists('of_options')) {
function of_options(){

// VARIABLES
$themename = get_theme_data(STYLESHEETPATH . '/style.css');
$themename = $themename['Name'];
$shortname = "of";

// Populate OptionsFramework option in array for use in theme
global $of_options;
$of_options = get_option('of_options');
$GLOBALS['template_path'] = OF_DIRECTORY;

//Access the WordPress Categories via an Array
$of_categories = array();  
$of_categories_obj = get_categories('hide_empty=0');
foreach ($of_categories_obj as $of_cat) {
    $of_categories[$of_cat->cat_ID] = $of_cat->cat_name;}
$categories_tmp = array_unshift($of_categories, "Select a category:");    

//Access the WordPress Pages via an Array
$of_pages = array();
$of_pages_obj = get_pages('sort_column=post_parent,menu_order');    
foreach ($of_pages_obj as $of_page) {
    $of_pages[$of_page->ID] = $of_page->post_name; }
$of_pages_tmp = array_unshift($of_pages, "Select a page:");       

// Image Links to Options
$options_image_link_to = array("image" => "The Image","post" => "The Post"); 

//Testing 
$options_select = array("one","two","three","four","five"); 
$options_radio = array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five"); 
$align_option = array("left" => "Left", "center" => "Center", "right" => "Right"); 
$contact_option = array("no" => "Show no cotact in sidebar", "one" => "Show one contact in sidebar", "two" => "Show two contacts in sidebar"); 

//Stylesheets Reader
$alt_stylesheet_path = OF_FILEPATH . '/styles/';
$alt_stylesheets = array();
if ( is_dir($alt_stylesheet_path) ) {
    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) { 
        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) {
            if(stristr($alt_stylesheet_file, ".css") !== false) {
                $alt_stylesheets[] = $alt_stylesheet_file;
            }
        }    
    }
}

//More Options
$uploads_arr = wp_upload_dir();
$all_uploads_path = $uploads_arr['path'];
$all_uploads = get_option('of_uploads');
$other_entries = array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
$body_repeat = array("no-repeat","repeat-x","repeat-y","repeat");
$body_pos = array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");

// Set the Options Array
$options = array();

/********** 
Begin Adding options here ( IMPORTANT: Add your 1st heading before you add any options )***/

//General Options
$options[] = array( "name" => "General Options",
					"type" => "heading"); 

//logo
$options[] = array( "name" => "Logo",
					"desc" => ".png, .jpg, .gif, etc...",
					"id" => $shortname."_logo",
					"std" => "",
					"type" => "upload");
					
$url =  OF_DIRECTORY . '/admin/images/';

//Favicon
$options[] = array( "name" => "Upload Custom Favicon",
					"desc" => "Upload a 16px x 16px Png/Gif image that will represent your website's favicon.",
					"id" => $shortname."_custom_favicon",
					"std" => "",
					"type" => "upload"); 
					$url =  OF_DIRECTORY . '/admin/images/'; 

//text option
$options[] = array( "name" => "text option",
					"desc" => "Enter text into the field",
					"id" => $shortname."_text-option",
					"std" => "",
					"type" => "text"); 

//textarea option
$options[] = array( "name" => "Textarea Option",
					"desc" => "Enter text into the field, max 200 characters",
					"id" => $shortname."_textarea",
					"std" => "",
					"type" => "textarea"); 

//==========================================================

//Footer options
$options[] = array( "name" => "Footer Options",
					"type" => "heading"); 
					
//Footer logo
$options[] = array( "name" => "Logo",
					"desc" => ".png, .jpg, .gif, etc...",
					"id" => $shortname."_flogo",
					"std" => "",
					"type" => "upload");
					
$url =  OF_DIRECTORY . '/admin/images/';
					
//Copyright
$options[] = array( "name" => "Copyright",
					"desc" => "Enter text into the field",
					"id" => $shortname."_copyright",
					"std" => "",
					"type" => "textarea"); 
					
//==========================================================

//Social media
$options[] = array( "name" => "Social Networks",
					"type" => "heading"); 				

//facebook
$options[] = array( "name" => "Facebook URL",
					"desc" => "Enter text into the field",
					"id" => $shortname."_fburl",
					"std" => "",
					"type" => "text"); 			
//twiiter
$options[] = array( "name" => "Twitter URL",
					"desc" => "Enter text into the field",
					"id" => $shortname."_twurl",
					"std" => "",
					"type" => "text"); 			
//linkedin
$options[] = array( "name" => "Linkedin URL",
					"desc" => "Enter text into the field",
					"id" => $shortname."_inurl",
					"std" => "",
					"type" => "text"); 		
//Youtube
$options[] = array( "name" => "Youtube URL",
					"desc" => "Enter text into the field",
					"id" => $shortname."_youtubeurl",
					"std" => "",
					"type" => "text"); 		
//==========================================================

//Map location
$options[] = array( "name" => "Map Options",
					"type" => "heading"); 
//Latitude 
$options[] = array( "name" => "Latitude",
					"desc" => "Enter text into the field",
					"id" => $shortname."_latitude",
					"std" => "",
					"type" => "text"); 	
//Longitude
$options[] = array( "name" => "Longitude",
					"desc" => "Enter text into the field",
					"id" => $shortname."_longitude",
					"std" => "",
					"type" => "text"); 	

//map icon
$options[] = array( "name" => "Map pin icon",
					"desc" => ".png, .jpg, .gif, etc...",
					"id" => $shortname."_pinicon",
					"std" => "",
					"type" => "upload");
					
$url =  OF_DIRECTORY . '/admin/images/';

//==========================================================

//Slider Options
$options[] = array( "name" => "Slider Options",
					"type" => "heading"); 
					
//Autoplay 
$options[] = array( "name" => "Autoplay [OFF/ON]",
					"desc" => "<p style='padding: 0 0 10px 0; text-align: center; font-size: 17px; line-height: 1.2;'>
					By default the autoplay option is Off. <br />
					Check the checkbox to turn it [OFF/ON].</p>",
					"id" => $shortname."_autoplay",
					"std" => "",
					"type" => "checkbox"); 	
//Slide duration
$options[] = array( "name" => "Sliding Duration",
					"desc" => "Enter text into the field",
					"id" => $shortname."_slidedur",
					"std" => "",
					"type" => "text"); 	
					
/*** Stop adding options ***/

update_option('of_template',$options); 					  
update_option('of_themename',$themename);   
update_option('of_shortname',$shortname);
}
}
?>