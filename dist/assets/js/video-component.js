$(document).ready(function () {

	$("#bloc-home .button-video").click(function () {
		$("#bloc-home .video-xyz").html("");
		initVideo($("#bloc-home .video-xyz"), "");

	})

	function initVideo(parentContainer, videoSrc) {

		// Clone the prototype node
		var videoContainer = $("#prototype .video-component").clone();


		// Erase all references to the protoypeNode
		videoContainer;

		// Set the component to append to parent src
		parentContainer.append(videoContainer);

		// Set the video src
		videoContainer.find('iframe').attr("src", videoSrc);

		// Active display
		videoContainer.find('iframe').addClass("active-video");

		blockScrolling($("body"));

		$(".video-xyz .closing-button").click(function () {
			$(".video-xyz").html("");
			enableScrolling($("body"));

			// Handle closing video
			$("#fullScreenDiv").removeClass("kill-display");
		});

	}


});
