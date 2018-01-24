// Define Behaviour
$("#search-item").click(function() {

    $("#searchbar").toggleClass("active-searchbar");
    $(this).toggleClass("active-search-logo");
    $("#search-bar-term").toggleClass("active-search");
});

