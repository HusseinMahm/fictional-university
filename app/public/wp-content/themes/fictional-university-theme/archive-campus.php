<?php

get_header(); 
pageBanner(array(
  'title'=>'Our Campuses',
  'subtitle'=>'We have several conviently located campuses!'
));?>


<div class="container container--narrow page-section">

<!-- Include this and remove unordered list if including google map
<div class="acf-map">
-->
<ul class="link-list min-list">
<?php

while (have_posts()){
  the_post();?>

    <!-- If using google maps include this and delete list item /tag
    $mapLocation = get_field('map_location');
    <div class="marker" data-lat="< ? php echo $mapLocation['lat']?>" data-lng="< ? php echo $mapLocation['lng']?>"></div>

-->
    <li><a href="<?php the_permalink();?>"><?php the_title(); 
   
    ?></a></li>
<!-- pagination -->
<?php } 
echo paginate_links();
?>

<!-- google maps modification</div>-->
</ul>

</div>
<?php 
get_footer();

?>