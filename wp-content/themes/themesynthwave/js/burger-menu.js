jQuery(document).ready(function() {
    jQuery('.toggle-nav').click(function(e) {
      jQuery('#nav-bar-synthwave ul').slideToggle(500);
      e.preventDefault();
    });
});