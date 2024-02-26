/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.0
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2021 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */

$( document ).ready(function() {

    var color1 = tabler.getColor("primary");
    var color2 = tabler.getColor("purple");
    var color3 = tabler.getColor("yellow");
    var color4 = tabler.getColor("green");
    var color5 = tabler.getColor("red");
    var color6 = tabler.getColor("primary", 0.8);
    var color7 = tabler.getColor("gray-300");
    var colors = [color1,color2,color3,color4,color5,color6, color7];

    dc.config.defaultColors(colors);

    // Create the dc.js chart objects & link to div
    var overviewChart           = $('#overview-chart').length ? dc.compositeChart("#overview-chart") : null;
    var yearChart               = $('#year-chart').length ? dc.pieChart("#year-chart") : null;
    var monthChart              = $('#month-chart').length ? dc.barChart("#month-chart") : null;
    var dayOfWeekChart          = $('#day-of-week-chart').length ? dc.rowChart('#day-of-week-chart') : null;
    var conversionTimeChart     = $('#conversion-time-chart').length ? dc.barChart('#conversion-time-chart') : null;
    var conversionTimeLineChart = $('#conversion-time-line-chart').length ? dc.compositeChart("#conversion-time-line-chart") : null;
    var abandonmentChart        = $('#abandonment-chart').length ? dc.pieChart('#abandonment-chart') : null;
    var abandonmentTimeChart    = $('#abandonment-time-chart').length ? dc.compositeChart("#abandonment-time-chart") : null;

    d3.csv(options.endPoint).then(function (data) {

        var parseDate = d3.timeParse("%Y-%m-%d");
        var formatDate = d3.timeFormat("%Y-%m-%d");
        var formatMinute = d3.timeFormat("%M:%S"); // Add %H: to show hours

        data.forEach(function(d) {

            d.users = +d.users;
            d.fills = +d.fills;
            d.conversions = +d.conversions;
            d.conversionTime = +d.conversionTime;
            d.abandonments = d.fills - d.conversions;

            // Individual rates
            d.abandonmentRate = Math.round((d.abandonments) / d.users * 100);

            // Dates
            d.date  = parseDate(d.day);
            d.year  = d.date.getFullYear();
        });

        /**
         * Fields
         */
        function reduceFieldsAdd(fields) {
            return function(p, v) {
                fields.forEach(function(f) {
                    p[f] += v[f];
                });
                return p;
            };
        }
        function reduceFieldsRemove(fields) {
            return function(p, v) {
                fields.forEach(function(f) {
                    p[f] -= v[f];
                });
                return p;
            };
        }
        function reduceFieldsInitial(fields) {
            return function() {
                var ret = {};
                fields.forEach(function(f) {
                    ret[f] = 0;
                });
                return ret;
            };
        }
        var fields = ['users', 'fills', 'conversions'];

        /**
         * Dimensions and Groups
         */

        // Run the data through crossfilter and load our 'facts'
        var facts = crossfilter(data);
        var all = facts.groupAll();
        var dateDim = facts.dimension(function(d) {
            return d.date;
        });
        var usersGroup = dateDim.group().reduceSum(function(d) {
            return d.users;
        });
        var fillsGroup = dateDim.group().reduceSum(function(d) {
            return d.fills;
        });
        var conversionsGroup = dateDim.group().reduceSum(function(d) {
            return d.conversions;
        });
        var yearDim  = facts.dimension(function(d) {
            return d.year;
        });
        var yearTotal = yearDim.group().reduce(reduceFieldsAdd(fields), reduceFieldsRemove(fields), reduceFieldsInitial(fields));
        var months = options.i18n.months;
        var monthOfYear = facts.dimension(function (d) {
            var month = d.date.getMonth();
            return months[month];
        });
        var monthGroup = monthOfYear.group().reduce(reduceFieldsAdd(fields), reduceFieldsRemove(fields), reduceFieldsInitial(fields));
        var dayOfWeek = facts.dimension(function (d) {
            var day = d.date.getDay();
            var name = options.i18n.days;
            return day + '.' + name[day];
        });
        var dayOfWeekGroup = dayOfWeek.group().reduce(reduceFieldsAdd(fields), reduceFieldsRemove(fields), reduceFieldsInitial(fields));
        var conversionTime = facts.dimension(function (d) {

            var interval;

            if ( d.conversionTime < 120) {
                interval = '0 - 2';
            } else if ( d.conversionTime < 240 ) {
                interval = '2 - 4';
            } else if ( d.conversionTime < 360 ) {
                interval = '4 - 6';
            } else if ( d.conversionTime < 600 ) {
                interval = '6 - 10';
            } else {
                interval = '+ 10';
            }

            return interval;
        });
        var conversionTimeGroup = conversionTime.group().reduceSum(function(d) {
            return d.conversions;
        });
        var conversionTimeLineGroup = dateDim.group().reduceSum(function(d) {
            return d.conversionTime;
        });
        // Create "fake groups" and "fake dimensions"
        function regroup(dim, cols) {
            var _groupAll = dim.groupAll().reduce(
                function(p, v) { // add
                    cols.forEach(function(c) {
                        p[c] += v[c];
                    });
                    return p;
                },
                function(p, v) { // remove
                    cols.forEach(function(c) {
                        p[c] -= v[c];
                    });
                    return p;
                },
                function() { // init
                    var p = {};
                    cols.forEach(function(c) {
                        p[c] = 0;
                    });
                    return p;
                });
            return {
                all: function() {
                    // or _.pairs, anything to turn the object into an array
                    return d3.map(_groupAll.value()).entries();
                }
            };
        }
        var vsDim = facts.dimension(function(r) { return r.a; });
        var vsGroup = regroup(vsDim, ['conversions', 'abandonments']);
        var abandonmentGroup = dateDim.group().reduceSum(function(d) {
            return d.abandonmentRate;
        });
        /**
         * Chart Listener
         * Rewrite numbers and rates
         */
        function chartListener() {
            var objs = dateDim.top(Infinity);
            var usersSum = 0, fillsSum = 0, conversionsSum = 0;
            // Sum all values of each column
            $.each(objs, function(index, obj){
                $.each( obj, function( key, value ) {
                    if ( key === "users" ) {
                        usersSum += value;
                    } else if ( key === "fills" ){
                        fillsSum += value;
                    } else if ( key === "conversions" ) {
                        conversionsSum += value;
                    }
                });
            });

            // Percents
            var fillsRate = isNaN(Math.round(fillsSum/usersSum * 100)) ? 0 : Math.round(fillsSum/usersSum * 100),
                completionRate = isNaN(Math.round(conversionsSum/fillsSum * 100)) ? 0 : Math.round(conversionsSum/fillsSum * 100),
                conversionsRate = isNaN(Math.round(conversionsSum/usersSum * 100)) ? 0 : Math.round(conversionsSum/usersSum * 100);
            // Print Sums
            $("#users-number").text(usersSum);
            $("#fills-number").text(fillsSum);
            $("#conversions-number").text(conversionsSum);
            // Print Rates
            $("#fills-rate").text(fillsRate);
            $("#completion-rate").text(completionRate);
            $("#conversion-rate").text(conversionsRate);
        }

        /**
         * Charts
         */
        // Data count
        if ($('.data-count').length) {
            dc.dataCount(".data-count")
                .crossfilter(facts)
                .groupAll(all);
        }

        // Min/Max date for x labels
        var minDate = (typeof dateDim.bottom(1)[0] != 'undefined') ? dateDim.bottom(1)[0].date : 0;
        var maxDate = (typeof dateDim.top(1)[0] != 'undefined') ? dateDim.top(1)[0].date : 0;

        // Overview - Composite Chart
        if ($("#overview").length) {
            overviewChart
                .width($("#overview").width())
                .height(280)
                .x(d3.scaleTime().domain([minDate,maxDate]))
                .elasticY(true)
                .elasticX(true)
                .yAxisPadding(1)
                .legend(dc.legend().x(50).y(20).itemHeight(13).gap(5))
                .renderHorizontalGridLines(true)
                .shareTitle(false)
                .on("preRender", chartListener)
                .brushOn(false)
                .compose([
                    dc.lineChart(overviewChart)
                        .dimension(dateDim)
                        .colors(color1)
                        .curve(d3.curveCardinal.tension(0.5))
                        .title(function (d) {
                            // var date = d.key.getFullYear() + "-" + (d.key.getMonth() + 1) + "-" + d.key.getDate();
                            var date = formatDate(d.key);
                            return " " + date + ": " + d.value + " " + options.i18n.users;
                        })
                        .renderArea(false)
                        .group(usersGroup, options.i18n.users),
                    dc.lineChart(overviewChart)
                        .dimension(dateDim)
                        .colors(color2)
                        .curve(d3.curveCardinal.tension(0.5))
                        .title(function (d) {
                            var date = formatDate(d.key);
                            return " " + date + ": " + d.value + " " + options.i18n.starters;
                        })
                        .renderArea(false)
                        .dashStyle([15,10])
                        .group(fillsGroup, options.i18n.starters),
                    dc.lineChart(overviewChart)
                        .dimension(dateDim)
                        .colors(color3)
                        .curve(d3.curveCardinal.tension(0.5))
                        .title(function (d) {
                            var date = formatDate(d.key);
                            return " " + date + ": " + d.value + " " + options.i18n.conversions;
                        })
                        .renderArea(true)
                        .group(conversionsGroup, options.i18n.conversions)
                ])
                .render();
        }

        // Year - Pie Chart
        if ($("#year").length) {
            var yearWidth = $("#year").width();
            yearChart
                .width(yearWidth).height(230)
                .dimension(yearDim)
                .group(yearTotal)
                .valueAccessor(function (d) {
                    return d.value.conversions;
                })
                .innerRadius(75)
                .renderLabel(false)
                .renderTitle(true)
                .title(function (d) {
                    var title  = d.key + " \n";
                    title += d.value.users + " " + options.i18n.users + " \n";
                    title += d.value.fills + " " + options.i18n.starters + " \n";
                    title += d.value.conversions + " " + options.i18n.conversions;
                    return title;
                })
                .legend(dc.legend().x(Math.round((yearWidth * 50 / 100) - 18)).y(95).itemHeight(13).gap(5))
                .on("filtered", chartListener);
        }

        // Month - Bar Chart
        if ($("#month").length) {
            monthChart
                .width($("#month").width())
                .height(250)
                .dimension(monthOfYear)
                .group(monthGroup)
                .valueAccessor(function (d) {
                    return d.value.conversions;
                })
                .title(function (d) {
                    var title  = d.key + " \n";
                    title += d.value.users + " " + options.i18n.users + " \n";
                    title += d.value.fills + " " + options.i18n.starters + " \n";
                    title += d.value.conversions + " " + options.i18n.conversions;
                    return title;
                })
                .brushOn(false)
                .on('filtered', chartListener)
                .x(d3.scaleBand().domain(months))
                .xUnits(dc.units.ordinal)
                .elasticY(true);
        }

        // Day - Row Chart
        if ($("#week").length) {
            dayOfWeekChart
                .width($("#week").width())
                .height(240)
                .margins({top: 0, left: 10, right: 10, bottom: 20})
                .dimension(dayOfWeek)
                .group(dayOfWeekGroup)
                .valueAccessor(function (d) {
                    return d.value.conversions;
                })
                .label(function (d) {
                    return d.key.split('.')[1];
                })
                .title(function (d) {
                    var title  = d.key.split('.')[1] + " \n";
                    title += d.value.users + " " + options.i18n.users + " \n";
                    title += d.value.fills + " " + options.i18n.starters + " \n";
                    title += d.value.conversions + " " + options.i18n.conversions;
                    return title;
                })
                .on('filtered', chartListener)
                .elasticX(true)
                .xAxis().ticks(4);
        }

        // Conversion Time - Bar Chart
        if ($("#conversion-time").length) {
            conversionTimeChart
                .width($("#conversion-time").width())
                .height(253)
                .group(conversionTimeGroup)
                .dimension(conversionTime)
                .brushOn(false)
                .on('filtered', chartListener)
                .x(d3.scaleBand().domain(['0 - 2', '2 - 4', '4 - 6', '6 - 10', '+ 10']))
                .xAxisLabel(options.i18n.minutes)
                .xUnits(dc.units.ordinal)
                .elasticY(true);
        }

        // Conversion Time - Line Chart
        if ($("#conversion-time-line").length) {
            conversionTimeLineChart
                .width($("#conversion-time-line").width())
                .height(240)
                .x(d3.scaleTime().domain([minDate,maxDate]))
                .elasticY(true)
                .elasticX(true)
                .yAxisPadding(50)
                .yAxisLabel('')
                .legend(dc.legend().x(50).y(20).itemHeight(13).gap(5))
                .renderHorizontalGridLines(true)
                .title(function (d) {
                    var newKey = (d.key.getMonth() + 1) + "/" + d.key.getDate() + "/" + d.key.getFullYear();
                    return " " + newKey + " \n " + formatMinute(new Date(2015, 0, 1, 0, 0, d.value));
                })
                .on("preRender", chartListener)
                .brushOn(false)
                .compose([
                    dc.lineChart(conversionTimeLineChart)
                        .dimension(dateDim)
                        .colors(color2)
                        .renderArea(true)
                        .group(conversionTimeLineGroup, options.i18n.medianPerDay)
                ])
                .render();

            // Customize x axis tick format
            conversionTimeLineChart.yAxis().tickFormat(function(v) {
                return formatMinute(new Date(2015, 0, 1, 0, 0, v));
            });
        }

        // Conversion vs Abandonment - Pie Chart
        if ($("#abandonment").length) {
            var abandonmentWidth = $("#abandonment").width();
            abandonmentChart
                .width(abandonmentWidth)
                .height(230)
                .dimension(vsDim)
                .group(vsGroup)
                .innerRadius(75)
                .renderLabel(false)
                .renderTitle(true)
                .title(function (d) {
                    return d.value + " " + d.key;
                })
                .legend(dc.legend().x(Math.round((abandonmentWidth * 50 / 100) - 43)).y(95).itemHeight(13).gap(5));

            // Disable filter
            abandonmentChart.filter = function() {};
        }

        // Abandonment rate - Line Chart
        if ($("#abandonment-time").length) {
            abandonmentTimeChart
                .width($("#abandonment-time").width())
                .height(240)
                .x(d3.scaleTime().domain([minDate,maxDate]))
                .elasticY(true)
                .elasticX(true)
                .yAxisPadding(50)
                .legend(dc.legend().x(50).y(20).itemHeight(13).gap(5))
                .renderHorizontalGridLines(true)
                .title(function (d) {
                    var newKey = (d.key.getMonth() + 1) + "/" + d.key.getDate() + "/" + d.key.getFullYear();
                    return newKey + "\n" + d.value + "%";
                })
                .on("preRender", chartListener)
                .brushOn(false)
                .compose([
                    dc.lineChart(abandonmentTimeChart)
                        .dimension(dateDim)
                        .colors(color1)
                        .renderArea(true)
                        .group(abandonmentGroup, options.i18n.medianPerDay)
                ])
                .render();

            // customize x axis tick format
            abandonmentTimeChart.yAxis().tickFormat(function(v) {return v + "%";});
        }

        dc.renderAll();

        // Reset all filters
        $("#reset-all").on("click", function (e) {
            e.preventDefault();
            dc.filterAll(null);
            dc.renderAll();
        });

    });

});
