$(document).ready(function () {

	if ($(".blocked-access").length == false) {
		$(".single-event-container").click(function () {
			$(this).addClass("animated shake");

			// Wait 600ms and then remove the previously addedd class
			setTimeout(function () {
				$(".single-event-container").removeClass("animated shake");
			}, 600);
		})
	}
});
