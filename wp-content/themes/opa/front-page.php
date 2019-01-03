<?php
// Use Blade
/* Template Name: front Page */
use \Library\Blade;
$lang = icl_get_languages('skip_missing=0');
if($lang['en']["active"]==1){
    
    $lan = "geo";
    $url = $lang["ka"]["url"];
}
else{
    $lan = "eng";
    $url = $lang["en"]["url"];

}
// var_dump($lang["ka"]["url"]);
$main_title = get_field("main_title");
$main_title_description = get_field("main_title_description");
$main_description = get_field("main_description");
$main_features = get_field("main_features");
// main_feature_one ,main_feature_icon
$button_one_url = get_field("button_one_url");
$button_one_text = get_field("button_one_text");
$button_two_url = get_field("button_two_url");
$button_two_text = get_field("button_two_text");
$button_three_url = get_field("button_three_url");
$button_three_text = get_field("button_three_text");
$button_four_url = get_field("button_four_url");
$button_four_text = get_field("button_four_text");
$video_holder_main_title = get_field("video_holder_main_title");
$video_holder_main_text = get_field("video_holder_main_text");
$video_holder = get_field("video_holder");
if (strpos($video_holder,'v=')!==false)
{
    $video_holder = substr($video_holder, strpos($video_holder,'v=')+2);
    if (strpos($video_holder,'&')!==false)
    {
        $video_holder = substr($video_holder, 0, strpos($video_holder,'&'));
    }
}
$image_holder = get_field("image_holder");
$secondary_title = get_field("secondary_title");
$secondary_description = get_field("secondary_description");
$secondary_features = get_field("secondary_features");
$features_with_image = get_field("features_with_image");
// feature_with_image_image,feature_with_image_title,feature_with_image_text
$third_title = get_field("third_title");
$third_text = get_field("third_text");
$third_features = get_field("third_features");
// third_feature_text, third_feature_icon
$fourth_title = get_field("fourth_title");
$fourth_text = get_field("fourth_text");
$main_background = get_field("main_background");
$facebook = get_field("facebook");
$linkedin = get_field("linkedin");
// postis id unda gadavce meore parametrad gadatargmnili postis id gadavce get fields apply filter worpress function wpml filter
// echo "<h1>".$main_page_title."</h1>";
// echo "<p>".$main_page_descr."</p>";
$image_holder_in_video_box = get_field("image_holder_in_video_box");
$socials_text = get_field("socials_text");


Blade::loadPage( 'pages.front-page',[
	"lan" => $lan,
	"url" => $url,

	"main_title" => $main_title ,
	"main_title_description" => $main_title_description ,
	"main_description" => $main_description ,
	"main_features" => $main_features ,
	"button_one_url" => $button_one_url ,
	"button_one_text" => $button_one_text ,
	"button_two_url" => $button_two_url ,
	"button_two_text" => $button_two_text ,
	"button_three_url" => $button_three_url ,
	"button_three_text" => $button_three_text ,
	"button_four_url" => $button_four_url ,
	"button_four_text" => $button_four_text ,
	"video_holder_main_title" => $video_holder_main_title ,
	"video_holder_main_text" => $video_holder_main_text ,
	"video_holder" => $video_holder ,
	"image_holder" => $image_holder ,
	"secondary_title" => $secondary_title ,
	"secondary_description" => $secondary_description ,
	"secondary_features" => $secondary_features ,
	"features_with_image" => $features_with_image ,
	"third_title" => $third_title ,
	"third_text" => $third_text ,
	"third_features" => $third_features ,
	"fourth_title" => $fourth_title ,
	"fourth_text" => $fourth_text ,
	"main_background" => $main_background ,
	"facebook" => $facebook,
	"linkedin" => $linkedin,
	"main_background" => $main_background,
	"socials_text" => $socials_text,
	"image_holder_in_video_box" => $image_holder_in_video_box
]);