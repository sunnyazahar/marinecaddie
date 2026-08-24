(function () {
    var wrap = document.querySelector('.contact-map [data-map-lock]');
    var unlock = wrap && wrap.querySelector('[data-map-unlock]');
    var el = document.getElementById('mc-world-map');
    if (!wrap || !el || typeof L === 'undefined') {
        if (el) {
            el.innerHTML = '<p style="color:#fff;padding:2rem;text-align:center;margin:0;">Map failed to load. Please refresh.</p>';
        }
        return;
    }

    var locations = [];
    var dataEl = document.getElementById('mc-presence-map-data');
    try {
        locations = JSON.parse((dataEl && dataEl.textContent) || '[]');
    } catch (e) {
        locations = [];
    }

    var map = L.map(el, {
        scrollWheelZoom: false,
        zoomControl: true,
        attributionControl: true,
        worldCopyJump: true,
        minZoom: 1,
        maxZoom: 10,
        zoomSnap: 0.25,
        zoomDelta: 0.5
    });

    var tiles = L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> &copy; <a href="https://carto.com/">CARTO</a>',
        subdomains: 'abcd',
        maxZoom: 19
    });
    tiles.on('tileerror', function () {
        if (map._mcFallbackTiles) return;
        map._mcFallbackTiles = true;
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap',
            maxZoom: 19
        }).addTo(map);
    });
    tiles.addTo(map);

    function makePinIcon(isHq) {
        return L.divIcon({
            className: 'mc-map-pin-wrap' + (isHq ? ' is-hq' : ''),
            html: '<span class="mc-map-pin' + (isHq ? ' mc-map-pin--hq' : '') + '" aria-hidden="true"><span class="mc-map-pin__dot"></span></span>',
            iconSize: isHq ? [36, 48] : [30, 40],
            iconAnchor: isHq ? [18, 48] : [15, 40],
            popupAnchor: [0, isHq ? -42 : -36]
        });
    }

    var bounds = [];
    locations.forEach(function (loc) {
        if (loc.lat == null || loc.lng == null) return;
        var latlng = [Number(loc.lat), Number(loc.lng)];
        bounds.push(latlng);
        var isHq = !!loc.hq;
        var title = (loc.label || '') + (loc.city ? ' · ' + loc.city : '');
        var popup = '<strong>' + (loc.label || 'Presence') + '</strong>' +
            (loc.city ? '<br><span>' + loc.city + '</span>' : '') +
            (isHq ? '<br><em>Head Office</em>' : '');
        L.marker(latlng, {
            icon: makePinIcon(isHq),
            title: title,
            riseOnHover: true,
            zIndexOffset: isHq ? 500 : 100
        }).addTo(map).bindPopup(popup);
    });

    if (bounds.length) {
        map.fitBounds(bounds, {
            paddingTopLeft: [20, 24],
            paddingBottomRight: [20, 96],
            maxZoom: 6,
            animate: false
        });
    } else {
        map.setView([20, 40], 3);
    }

    function refreshSize() {
        map.invalidateSize(true);
    }
    setTimeout(refreshSize, 50);
    setTimeout(refreshSize, 300);
    setTimeout(refreshSize, 800);
    window.addEventListener('resize', refreshSize);

    if (unlock) {
        unlock.addEventListener('click', function () {
            wrap.classList.add('is-unlocked');
            map.scrollWheelZoom.enable();
            map.dragging.enable();
            refreshSize();
        });
    }

    document.addEventListener('click', function (e) {
        if (!wrap.contains(e.target)) {
            wrap.classList.remove('is-unlocked');
            map.scrollWheelZoom.disable();
        }
    });
})();
