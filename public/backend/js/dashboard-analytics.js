$(function () {
    "use strict";



    // chart7





    // chart8
    var ctx = document.getElementById('chart8').getContext('2d');

    var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke1.addColorStop(0, '#005bea');
    gradientStroke1.addColorStop(1, '#00c6fb');

    var gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke2.addColorStop(0, '#ff6a00');
    gradientStroke2.addColorStop(1, '#ee0979');

    var gradientStroke3 = ctx.createLinearGradient(0, 0, 0, 300);
    gradientStroke3.addColorStop(0, '#17ad37');
    gradientStroke3.addColorStop(1, '#98ec2d');

    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Desktop', 'Mobile', 'Tablet'],
            datasets: [{
                data: [155, 120, 110],
                backgroundColor: [
                    gradientStroke1,
                    gradientStroke2,
                    gradientStroke3,
                ],
                borderWidth: 1
            }]
        },
        options: {
            maintainAspectRatio: false,
            cutout: 90,
            plugins: {
                legend: {
                    display: false,
                }
            }

        }
    });









    jQuery("#geographic-map").vectorMap({
        map: "world_mill_en",
        backgroundColor: "transparent",
        borderColor: "#818181",
        borderOpacity: .25,
        borderWidth: 1,
        zoomOnScroll: !1,
        color: "#009efb",
        regionStyle: {
            initial: {
                fill: "#6c757d"
            }
        },
        markerStyle: {
            initial: {
                r: 9,
                fill: "#fff",
                "fill-opacity": 1,
                stroke: "#000",
                "stroke-width": 5,
                "stroke-opacity": .4
            }
        },
        enableZoom: !0,
        hoverColor: "#009efb",
        markers: [{
            latLng: [21, 78],
            name: "I Love My India"
        }],
        // series: {
        // 	regions: [{
        // 		values: {
        // 			IN: "#fb6340",
        // 			US: "#15b70a",
        // 			RU: "#5e72e4",
        // 			AU: "#2dce89"
        // 		}
        // 	}]
        // },
        hoverOpacity: null,
        normalizeFunction: "linear",
        scaleColors: ["#b6d6ff", "#005ace"],
        selectedColor: "#c9dfaf",
        selectedRegions: [],
        showTooltip: !0,
        onRegionClick: function (e, t, o) {
            var r = 'You clicked "' + o + '" which has the code: ' + t.toUpperCase();
            alert(r)
        }
    })




});
