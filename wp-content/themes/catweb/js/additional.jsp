<script type="text/javascript">


        $(document).ready(function(){


$("ul.products li.wcspt-has-gallery a").mouseover(function() {
    $("img.wp-post-image", this).removeClass("joomirshow").addClass("joomirhaid");
}).mouseout(function() { 
    $("img.wp-post-image", this).removeClass("joomirhaid").addClass("joomirshow");
});


            $("#simplemodal-login-container").addClass("animated wow fadeInLeft");
            $("#simplemodal-login-overlay").addClass("animated wow fadeInLeft");

$('.basket').css("z-index","10");
$('.search input[name=s]').addClass("haid");
$('.search .search-submit').addClass("haid");
$(".login-search").addClass("col-md-4");
$('.simplemodal-container').addClass("haid");
$('.archive.post-type-archive.post-type-archive-product .shop-whole,.tax-product_cat .shop-whole').addClass("col-xs-12 col-sm-8");
$('.archive.post-type-archive.post-type-archive-product .sidebar,.tax-product_cat .sidebar').addClass("col-xs-12 col-sm-3");

 $('.search-icon').click(function() {
    var $this = $('.search input[name=s]')
                if ($this.hasClass("haid")) {
                    $this.removeClass("haid").addClass("expanded");
                    $(".search-icon").addClass("close-icon");
                    $(".login-search").removeClass("col-md-4");
                    $('.search .search-submit').addClass("expanded");
                    $('.basket').css("z-index","0");
                } else {
                        $this.removeClass("expanded").addClass("haid");
                        $(".search .search-submit").removeClass("expanded").addClass("haid");
                        $(".login-search").addClass("col-md-4");
                            $(".search-icon").removeClass("close-icon");
                            $('.basket').css("z-index","10");
                    }   
                });

$('.widget_aws_widget').addClass("haid");

$('.search-icon').click(function() {
             var $this = $('.widget_aws_widget')
                            if ($this.hasClass("haid")) {
                                $this.removeClass("haid").addClass("expanded");
                                $(".search-icon").addClass("close-icon");
                                
            }else {
                 $this.removeClass("expanded").addClass("haid");
                 $(".search-icon").removeClass("close-icon");
            }

                });

$( "a.cat-post-thumbnail" ).append( "<span></span>" );

            
    });



        </script>
    <script type="text/javascript">
$(document).ready(function()
 {
 
// Hide the toTop button when the page loads.
 $("#toTop").css("display", "none");
 
 // This function runs every time the user scrolls the page.
 $(window).scroll(function(){
 
// Check weather the user has scrolled down (if "scrollTop()"" is more than 0)
 if($(window).scrollTop() > 0){
 
// If it's more than or equal to 0, show the toTop button.
 console.log("is more");
 $("#toTop").fadeIn("slow");
 }
 else {
 // If it's less than 0 (at the top), hide the toTop button.
 console.log("is less");
 $("#toTop").fadeOut("slow");
 
}
 });
 
// When the user clicks the toTop button, we want the page to scroll to the top.
 $("#toTop").click(function(){
 
// Disable the default behaviour when a user clicks an empty anchor link.
 // (The page jumps to the top instead of // animating)
 event.preventDefault();
 
// Animate the scrolling motion.
 $("html, body").animate({
 scrollTop:0
 },"slow");
 
});
 });
</script>
<script type="text/javascript">
jQuery("document").ready(function($){    
    var nav = $('#logo-menu');
    
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            nav.addClass("menumain");
        } else {
            nav.removeClass("menumain");
        }
    });
});
</script>