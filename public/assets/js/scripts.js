'use strict';
jQuery(function($) {
	if (typeof $.fn.Quform === 'function') {
		$('form.quform').Quform();
	}

	// Tooltips
	if(window.tippy) {
		$('.quform-tooltip').each(function () {
			tippy(this, {
				theme: 'quform'
			});
		});
	}

	// Changes subject to a text field when 'Other' is chosen
	if (typeof $.fn.replaceSelectWithTextInput === 'function') {
		$('#subject').replaceSelectWithTextInput({ onValue: 'Other' });
	}
});

(function ($) {
	$(window).on('load', function () {
		// Preload images
		var images = [
			'assets/images/close.png',
			'assets/images/success.png',
			'assets/images/error.png',
			'assets/images/default-loading.gif'
		];

		// Preload images for any active themes
		if ($('.quform-theme-light-light, .quform-theme-light-rounded').length) {
			images = images.concat([
				'quform/themes/light/images/button-active-bg-rep.png',
				'quform/themes/light/images/close.png',
				'quform/themes/light/images/input-active-bg-rep.png'
			]);
		}

		if ($('.quform-theme-dark-dark, .quform-theme-dark-rounded').length) {
			images = images.concat([
				'quform/themes/dark/images/button-active-bg-rep.png',
				'quform/themes/dark/images/close.png',
				'quform/themes/dark/images/input-active-bg-rep.png',
				'quform/themes/dark/images/loading.gif'
			]);
		}

		if ($('.quform-theme-minimal-light').length) {
			images = images.concat([
				'quform/themes/minimal/images/close-light.png'
			]);
		}

		if ($('.quform-theme-minimal-dark').length) {
			images = images.concat([
				'quform/themes/minimal/images/close-dark.png',
				'quform/themes/minimal/images/loading-dark.gif'
			]);
		}

		if (typeof $.preloadImages === 'function') {
			$.preloadImages(images);
		}
	});
})(jQuery);

/* MarineCaddie — dynamic center fill for scrolling ticker text */
(function () {
	function updateScrollTextFill() {
		var sections = document.querySelectorAll('.scroll-section--dynamic');
		if (!sections.length) {
			return;
		}

		var fillLine = window.innerWidth * 0.42;

		sections.forEach(function (section) {
			var texts = section.querySelectorAll('.scroll-text');
			texts.forEach(function (el) {
				var rect = el.getBoundingClientRect();
				if (rect.bottom < 0 || rect.top > window.innerHeight) {
					el.style.setProperty('--fill', '0px');
					el.classList.remove('is-active');
					return;
				}

				var filled = Math.min(rect.width, Math.max(0, fillLine - rect.left));
				el.style.setProperty('--fill', filled + 'px');
				el.classList.toggle('is-active', filled > rect.width * 0.55);
			});
		});

		window.requestAnimationFrame(updateScrollTextFill);
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', function () {
			window.requestAnimationFrame(updateScrollTextFill);
		});
	} else {
		window.requestAnimationFrame(updateScrollTextFill);
	}
})();
