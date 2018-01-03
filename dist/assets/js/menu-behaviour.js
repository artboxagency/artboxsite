$( document ).ready(function() {
	var counter = 0;
	$(".menu-hambuger").click(function() {



		if(counter % 2 == 0) {
			blockScrolling($("body"));
			$(this).addClass("activated-menu-container");
			$(this).find($("span")).addClass("active-menu");
			$("#menu-container").addClass("display-menu-mobile");

		} else {
			enableScrolling($("body"));
			$(this).removeClass("activated-menu-container");
			$(this).find($("span")).removeClass("active-menu");
			$("#menu-container").removeClass("display-menu-mobile");

		}
		counter++;

	});

	$(".menu-item").click(function() {

		if(counter % 2 == 1) {
			$("#menu-container").removeClass("display-menu-mobile");
			$(".menu-hambuger span").removeClass("active-menu");
			$(".menu-hambuger").removeClass("activated-menu-container");
			enableScrolling($("body"));
		}
		counter++;
	});
})