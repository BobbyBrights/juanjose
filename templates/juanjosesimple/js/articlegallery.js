function preload(arrayOfImages) {
    $(arrayOfImages).each(function(){
        $('<img/>')[0].src = this;
        // Alternatively you could use:
        // (new Image()).src = this;
    });
}

$(function() {
  $(".article-thumbnail").on("click", function( event ){
  	var imgname = jQuery(this).attr('src').split('\/');
  	imgname = imgname[imgname.length-1];
    //$( "input[name*='man']" )
  });
});