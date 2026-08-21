(function () {
    return function (parameters, TagManager) {

        this.fire = function () {
            var widgetId = parameters.get('asyntaiId');
            if (!widgetId) {
                return;
            }

            var doc = parameters.document || document;
            var win = parameters.window || window;

            // A container can fire the same tag twice, for example on a page
            // view trigger and again after a history change. Two copies of the
            // widget would draw two chat bubbles, so the load runs once only.
            if (win.asyntaiTagLoaded) {
                return;
            }
            win.asyntaiTagLoaded = true;

            var load = function () {
                var script = doc.createElement('script');
                script.src = 'https://widget.asyntai.com/static/js/chat-widget.js';
                script.async = true;
                script.setAttribute('data-asyntai-id', widgetId);
                doc.head.appendChild(script);
            };

            // Asyntai loads after the page itself, so the widget never competes
            // with the site's own content for bandwidth. This mirrors the
            // snippet Asyntai hands out for a manual installation.
            if (doc.readyState === 'complete') {
                load();
            } else {
                win.addEventListener('load', load);
            }
        };
    };
})();
