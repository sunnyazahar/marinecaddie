'use strict';
jQuery(function($) {
	if (typeof $.fn.Quform === 'function') {
		$('form.quform').Quform();
	}

	if (window.tippy) {
		$('.quform-tooltip').each(function () {
			tippy(this, {
				theme: 'quform'
			});
		});
	}

	if (typeof $.fn.replaceSelectWithTextInput === 'function') {
		$('#subject').replaceSelectWithTextInput({ onValue: 'Other' });
	}
});

(function ($) {
	$(window).on('load', function () {
		var images = [
			'assets/images/close.png',
			'assets/images/success.png',
			'assets/images/error.png',
			'assets/images/default-loading.gif'
		];

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

/* MarineCaddie — ticker fill only while visible (avoid permanent rAF CPU) */
(function () {
	var sections = null;
	var rafId = 0;
	var running = false;

	function updateScrollTextFill() {
		rafId = 0;
		if (!sections || !sections.length) {
			running = false;
			return;
		}

		var fillLine = window.innerWidth * 0.42;
		var anyVisible = false;

		for (var s = 0; s < sections.length; s++) {
			var section = sections[s];
			var texts = section.querySelectorAll('.scroll-text');
			for (var i = 0; i < texts.length; i++) {
				var el = texts[i];
				var rect = el.getBoundingClientRect();
				if (rect.bottom < 0 || rect.top > window.innerHeight) {
					el.style.setProperty('--fill', '0px');
					el.classList.remove('is-active');
					continue;
				}
				anyVisible = true;
				var filled = Math.min(rect.width, Math.max(0, fillLine - rect.left));
				el.style.setProperty('--fill', filled + 'px');
				el.classList.toggle('is-active', filled > rect.width * 0.55);
			}
		}

		if (anyVisible && running) {
			rafId = window.requestAnimationFrame(updateScrollTextFill);
		} else {
			running = false;
		}
	}

	function start() {
		if (running) return;
		running = true;
		if (!rafId) {
			rafId = window.requestAnimationFrame(updateScrollTextFill);
		}
	}

	function stop() {
		running = false;
		if (rafId) {
			window.cancelAnimationFrame(rafId);
			rafId = 0;
		}
	}

	function init() {
		sections = document.querySelectorAll('.scroll-section--dynamic');
		if (!sections.length) return;

		if ('IntersectionObserver' in window) {
			var io = new IntersectionObserver(function (entries) {
				var visible = entries.some(function (e) { return e.isIntersecting; });
				if (visible) start();
				else stop();
			}, { rootMargin: '80px 0px' });
			for (var i = 0; i < sections.length; i++) {
				io.observe(sections[i]);
			}
		} else {
			start();
			window.addEventListener('scroll', start, { passive: true });
		}
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', init);
	} else {
		init();
	}
})();

/* Owl carousel nav: remove presentation role + name buttons */
(function ($) {
	function labelOwlNav($root) {
		$root.find('.owl-prev').each(function () {
			this.removeAttribute('role');
			if (!this.getAttribute('aria-label')) {
				this.setAttribute('aria-label', 'Previous slide');
			}
		});
		$root.find('.owl-next').each(function () {
			this.removeAttribute('role');
			if (!this.getAttribute('aria-label')) {
				this.setAttribute('aria-label', 'Next slide');
			}
		});
	}

	$(function () {
		$('.owl-carousel').each(function () {
			labelOwlNav($(this));
		});
		$(document).on('initialized.owl.carousel refreshed.owl.carousel', '.owl-carousel', function () {
			labelOwlNav($(this));
		});
	});
})(jQuery);
