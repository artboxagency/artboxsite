var GeneralBehaviour = {

    name: "GeneralBehaviour",
    
    killScroll: function(domNode) {
        domNode.css({
            overflow: 'hidden',
            height: '100%'
        });
    },

    enableScroll: function(domNode) {
        domNode.css({
            overflow: 'auto',
            height: '100%'
        });
    }

}