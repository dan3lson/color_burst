$(document).ready(function() {
	blink();

	function blink() {
		$("#blink").fadeIn();
		$("#blink").fadeOut();

		setTimeout(blink, 100);
	}

	function scroll_to_section(section) {
		$("html, body").animate({ scrollTop: $(document).height() }, "slow");
	};
});
