var GeneralBehaviour = {

    name: "GeneralBehaviour",
    HomePath: "http://localhost:8888/artbox/art2k18/dist/",
    
    RedirectionTool: {
        redirecTo: function (url) {
            document.location.href=url + "?r=t";
        }
    },
    ScrollTool: {
        killScroll: function(domNode) {
            domNode.css({
                overflow: 'hidden',
                height: '100%'
            });
        },
        scrollToTop: function() {
            $('html,body').animate({ scrollTop: 0 }, 'fast');
        },
        enableScroll: function(domNode) {
            domNode.css({
                overflow: 'auto',
                height: '100%'
            });
        }
    }



}