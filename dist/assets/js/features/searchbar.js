var SearchBar = $("#searchbar");
var SearchBarInput = $("#searchbar input");
var SearchContainer =  $("#search-bar-result").clone();

// Define ajax call
AjaxGet = function (url, datas) {
    var result = $.ajax({
        type: "GET",
        url: url,
        param: {},
        data:  {"searchValue": datas},
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        async: false,
        success: function (data) {
            
      }
    }) .responseText ;
    return  result;
}
//    'site-parts/controllers/searchBarController.php', // Le fichier cible côté serveur.
SearchBarInput.keyup(function() {
    
    var searchValue = SearchBarInput.val();
    
    // If Empty kill display
    if(searchValue.length == 0) {

        $(".search-result").html("");
    }
    // Then Ajax
    if(searchValue.length >= 3) {

        var datas = AjaxGet("site-parts/controllers/searchBarController.php", searchValue);
        datasJ = JSON.parse(datas);
        buildSearchGallery(datasJ);
        
    } 

});

function buildSearchGallery(json) {
    
    
    // Delete all inner dom content
    $(".search-result").html("");
    $(".search-result").append("<div class='grid' id='search-result-container'> </div>");
    
    // Loop through all object
    $.each(json, function(index, values) {
                
        // Check if some elements are there
        if(values.length >= 1) {
            
            for(var i = 0; i < values.length; i++) {
                // Get current news // item and send it to create thumbnail
                createThumbnail(values[i]);
            }

        } 
        
        if(values.length == 0) {
            
        }
    }); 

}

function createThumbnail(thumbnailInfos) {
    
    // Clone prototype node 
    var thumbnailClone = $(".prototype.search-result-thumbnail").clone();
    
    thumbnailClone.removeClass("prototype");
    
    // Print the thumbnail related infos
    thumbnailClone.find("a").attr('href', 'site-parts/blog.php?article=' + thumbnailInfos.id)
    thumbnailClone.find("h3").html(thumbnailInfos.thumbnailTitle);
    thumbnailClone.find("img").attr( 'src', thumbnailInfos.imgsrc);
    $("#search-result-container").append(thumbnailClone);

}

function noDatas(msg) {
    
    $("#search-result-container").html("");
    
    // Clone prototype node 
    var thumbnailClone = $(".prototype.search-result-thumbnail").clone();    
    thumbnailClone.removeClass("prototype");
    thumbnailClone.find("h3").html(msg)
    
    $("#search-result-container").append(thumbnailClone);

}