$(window).on("load",function(){
    $(".loading-wrapper").delay("2000").fadeOut("slow");
    $("body").removeClass("preload");
});

var hideNav = function() {
  document.getElementById("page-nav-toggle").checked = false;
}