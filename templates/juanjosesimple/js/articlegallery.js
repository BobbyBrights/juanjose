$(function() {
  $(".article-thumbnail").on("click", function( event ){
  	var imgname = jQuery(this).attr('src').split('\/');
  	imgname = imgname[imgname.length-1];
  	jQuery( ".active-image" ).addClass("hidden");
  	jQuery( ".active-image" ).removeClass("active-image");
    jQuery( ".main-image[src*='"+ imgname +"']" ).removeClass("hidden");
    jQuery( ".main-image[src*='"+ imgname +"']" ).addClass("active-image");
    jQuery( ".article-thumbnail:not(.grayscale)" ).addClass("grayscale");
    jQuery(this).removeClass("grayscale");
  });
});