function getChartColorsArray(e) {
    if (null !== document.getElementById(e)) {
        var t = document.getElementById(e).getAttribute("data-colors");
        if (t) return (t = JSON.parse(t)).map(function(e) {
            var t = e.replace(" ", "");
            return -1 === t.indexOf(",") ? getComputedStyle(document.documentElement).getPropertyValue(t) || t : 2 == (e = e.split(",")).length ? "rgba(" + getComputedStyle(document.documentElement).getPropertyValue(e[0]) + "," + e[1] + ")" : t
        });
        console.warn("data-colors Attribute not found on:", e)
    }
}
var options, chart, linechartcustomerColors = getChartColorsArray("projects-overview-chart"),
    isApexSeriesData = (linechartcustomerColors && (options = {
        series: [{
            name: "Male",
            type: "bar",
            data: [925, 858, 674, 887, 754, 403, 524, 257, 957, 436]
        },{
            name: "Female",
            type: "bar",
            data: [118, 112, 117, 217, 121, 211, 115, 129, 127, 129]
        }, {
            name: "Undisclosed",
            type: "area",
            data: [34, 65, 46, 68, 49, 61, 42, 44, 78, 52]
        },{
            name: "Other",
            type: "area",
            data: [4, 6, 4, 8, 9, 1, 2, 4, 8, 2]
        }],
        chart: {
            height: 350,
            type: "line",
            toolbar: {
                show: !1
            }
        },
        title: {
            text: 'No. of users by age group and gender',
            align: 'center'
        },
        stroke: {
            curve: "smooth",
            dashArray: [0, 0, 1],
            width: [0, 0, 1]
        },
        fill: {
            opacity: [1, 1, .1]
        },
        markers: {
            size: [0, 0, 4],
            strokeWidth: 2,
            hover: {
                size: 4
            }
        },
        xaxis: {
            categories: ["10", "20", "30", "40", "50", "60", "70", "80", "90", "100"],
            axisTicks: {
                show: !1
            },
            axisBorder: {
                show: !1
            }
        },
        grid: {
            show: !0,
            xaxis: {
                lines: {
                    show: !0
                }
            },
            yaxis: {
                lines: {
                    show: !1
                }
            },
            padding: {
                top: 0,
                right: -2,
                bottom: 15,
                left: 10
            }
        },
        legend: {
            show: !0,
            horizontalAlign: "center",
            offsetX: 0,
            offsetY: -5,
            markers: {
                width: 9,
                height: 9,
                radius: 6
            },
            itemMargin: {
                horizontal: 10,
                vertical: 0
            }
        },
        plotOptions: {
            bar: {
                columnWidth: "30%",
                barHeight: "70%"
            }
        },
        colors: linechartcustomerColors,
        tooltip: {
            shared: !0,
            y: [{
                formatter: function(e) {
                    return void 0 !== e ? e.toFixed(0) : e
                }
            }, {
                formatter: function(e) {
                    return void 0 !== e ? "$" + e.toFixed(2) + "k" : e
                }
            }, {
                formatter: function(e) {
                    return void 0 !== e ? e.toFixed(0) : e
                }
            }]
        }
    }, (chart = new ApexCharts(document.querySelector("#projects-overview-chart"), options)).render()), {});

function scrollToBottom(r) {
    setTimeout(function() {
        var e = document.getElementById(r).querySelector("#chat-conversation .simplebar-content-wrapper") ? document.getElementById(r).querySelector("#chat-conversation .simplebar-content-wrapper") : "",
            t = document.getElementsByClassName("chat-conversation-list")[0] ? document.getElementById(r).getElementsByClassName("chat-conversation-list")[0].scrollHeight - window.innerHeight + 850 : 0;
        t && e.scrollTo({
            top: t,
            behavior: "smooth"
        })
    }, 100)
}
scrollToBottom(currentChatId);