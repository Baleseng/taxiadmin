Highcharts.chart('container-weekly', {
    chart: {
        type: 'area'
    },
    title: {
        text: 'Overall Weekly Turn'
    },

    credits: {
        enabled: false
    },
    
    xAxis: {
        categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat']
    },
    yAxis: {
        title: {
            text: 'Amount (in Rands)'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: false
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Previous Week',
        color: '#f26522',
        data: [16000, 18000, 23000, 27000, 32000, 15000, 14000]
    }, {
        name: 'Current Week',
        color: '#405365',
        data: [14000, 17000, 16000, .0, 0,0, 0]
    }]
});