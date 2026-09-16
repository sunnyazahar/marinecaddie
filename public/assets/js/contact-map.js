(function () {
    var wrap = document.querySelector('.contact-map [data-map-lock]');
    var unlock = wrap && wrap.querySelector('[data-map-unlock]');
    var el = document.getElementById('mc-world-map');

    function fail() {
        if (el) {
            el.innerHTML = '<p style="color:#002D5B;padding:2rem;text-align:center;margin:0;">Map failed to load. Please refresh.</p>';
        }
    }

    if (!wrap || !el || typeof maplibregl === 'undefined') {
        fail();
        return;
    }

    var locations = [];
    var dataEl = document.getElementById('mc-presence-map-data');
    try {
        locations = JSON.parse((dataEl && dataEl.textContent) || '[]');
    } catch (e) {
        locations = [];
    }

    var englishName = ['coalesce', ['get', 'name_en'], ['get', 'name:en'], ['get', 'name:latin'], ['get', 'name']];

    function englishStyle(style) {
        var source = style.sources && style.sources.openmaptiles;
        if (source) {
            source.attribution = '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> &copy; <a href="https://openfreemap.org">OpenFreeMap</a>';
        }
        style.layers = (style.layers || []).filter(function (layer) {
            return layer.id !== 'natural_earth';
        });
        style.layers.forEach(function (layer) {
            var paint = layer.paint || {};
            if (layer.id === 'background') {
                paint['background-color'] = '#f2efe9';
            }
            if (layer.id === 'natural_earth') {
                paint['raster-opacity'] = 0;
            }
            if (layer.id === 'water') {
                paint['fill-color'] = '#aad3df';
            }
            if (/^waterway/.test(layer.id) && paint['line-color']) {
                paint['line-color'] = '#aad3df';
            }
            var layout = layer.layout;
            if (!layout || !layout['text-field']) return;
            if (JSON.stringify(layout['text-field']).indexOf('name') === -1) return;
            layout['text-field'] = englishName;
        });
        return style;
    }

    function pinElement(isHq, title) {
        var holder = document.createElement('div');
        holder.className = 'mc-map-pin-wrap' + (isHq ? ' is-hq' : '');
        holder.innerHTML = '<span class="mc-map-pin' + (isHq ? ' mc-map-pin--hq' : '') + '" aria-hidden="true"><span class="mc-map-pin__dot"></span></span>';
        holder.setAttribute('aria-label', title);
        return holder;
    }

    fetch('https://tiles.openfreemap.org/styles/liberty')
        .then(function (res) {
            if (!res.ok) throw new Error('style');
            return res.json();
        })
        .then(function (style) {
            var map = new maplibregl.Map({
                container: el,
                style: englishStyle(style),
                attributionControl: true,
                renderWorldCopies: true,
                minZoom: 1,
                maxZoom: 10,
                scrollZoom: false,
                dragPan: false,
                boxZoom: false,
                doubleClickZoom: false,
                touchZoomRotate: false,
                keyboard: false
            });

            map.addControl(new maplibregl.NavigationControl({ showCompass: false }), 'top-right');

            var bounds = new maplibregl.LngLatBounds();
            var hasPin = false;
            locations.forEach(function (loc) {
                if (loc.lat == null || loc.lng == null) return;
                var lngLat = [Number(loc.lng), Number(loc.lat)];
                bounds.extend(lngLat);
                hasPin = true;
                var isHq = !!loc.hq;
                var title = (loc.label || '') + (loc.city ? ' · ' + loc.city : '');
                var popupHtml = '<strong>' + (loc.label || 'Presence') + '</strong>' +
                    (loc.city ? '<br><span>' + loc.city + '</span>' : '') +
                    (isHq ? '<br><em>Head Office</em>' : '');
                new maplibregl.Marker({
                    element: pinElement(isHq, title),
                    anchor: 'bottom'
                })
                    .setLngLat(lngLat)
                    .setPopup(new maplibregl.Popup({ offset: 8, closeButton: true }).setHTML(popupHtml))
                    .addTo(map);
            });

            function fit() {
                if (hasPin) {
                    map.fitBounds(bounds, {
                        padding: { top: 24, bottom: 96, left: 20, right: 20 },
                        maxZoom: 6,
                        animate: false
                    });
                } else {
                    map.jumpTo({ center: [40, 20], zoom: 3 });
                }
            }

            map.on('load', function () {
                fit();
                map.resize();
            });

            function refreshSize() {
                map.resize();
            }
            setTimeout(refreshSize, 50);
            setTimeout(refreshSize, 300);
            setTimeout(refreshSize, 800);
            window.addEventListener('resize', refreshSize);

            function setInteractive(on) {
                var controls = ['scrollZoom', 'dragPan', 'boxZoom', 'doubleClickZoom', 'touchZoomRotate', 'keyboard'];
                controls.forEach(function (name) {
                    if (!map[name]) return;
                    if (on) map[name].enable();
                    else map[name].disable();
                });
            }

            if (unlock) {
                unlock.addEventListener('click', function () {
                    wrap.classList.add('is-unlocked');
                    setInteractive(true);
                    refreshSize();
                });
            }

            document.addEventListener('click', function (e) {
                if (!wrap.contains(e.target)) {
                    wrap.classList.remove('is-unlocked');
                    setInteractive(false);
                }
            });
        })
        .catch(fail);
})();
