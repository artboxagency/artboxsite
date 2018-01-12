var SearchBar = $("#searchbar");
var SearchBarInput = $("#searchbar input");

SearchBarInput.keyup(function() {
    
    var searchValue = SearchBarInput.val();

    // Then Ajax
    $.post( "site-parts/controllers/searchBarController.php", {searchValue: searchValue})
        .done(function(data) {
    });

});

function filterFromLoadedDom() {

}