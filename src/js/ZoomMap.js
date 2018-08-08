export default function (idMap) {

    const MapAmerica = svgPanZoom(idMap, {
        zoomEnabled: true,
        controlIconsEnabled: false,
        fit: 1,
        center: true, minZoom: 1,
        maxZoom: 20,
        dblClickZoomEnabled: true
        , mouseWheelZoomEnabled: false,
        preventMouseEventsDefault: false,
        beforePan: beforePan,
        customEventsHandler: {
            init: function (options) {
            },
            destroy: function () {
                this.hammer.destroy()
            }
        }
    });
    MapAmerica.zoom(4);

    document.querySelector('#zoomInMap').addEventListener('click', function () {
        MapAmerica.zoomIn();
    });
    document.querySelector('#zoomOutMap').addEventListener('click', function () {
        MapAmerica.zoomOut();
    });
    document.querySelector('#zoomResetMap').addEventListener('click', function () {

        MapAmerica.zoom(3);
        MapAmerica.center()

    });

    function beforePan(oldPan, newPan) {

        const gutterWidth = 500,
            gutterHeight = 500,
            sizes = this.getSizes(),
            leftLimit = -((sizes.viewBox.x + sizes.viewBox.width) * sizes.realZoom) + gutterWidth,
            rightLimit = sizes.width - gutterWidth - (sizes.viewBox.x * sizes.realZoom),
            topLimit = -((sizes.viewBox.y + sizes.viewBox.height) * sizes.realZoom) + gutterHeight,
            bottomLimit = sizes.height - gutterHeight - (sizes.viewBox.y * sizes.realZoom);
        let customPan = {};
        customPan.x = Math.max(leftLimit, Math.min(rightLimit, newPan.x));
        customPan.y = Math.max(topLimit, Math.min(bottomLimit, newPan.y));
        return customPan
    }
};

