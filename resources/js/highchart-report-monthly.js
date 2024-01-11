Highcharts.chart('container-monthly', {
    chart: {
        type: 'area'
    },
    title: {
        text: 'Overall Monthly Turn'
    },
    credits: {
        enabled: false
    },
    
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
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
        name: 'Previous Year',
        color: '#f26522',
        data: [16000, 18000, 23000, 27000, 32000, 15000, 14000, 20000, 25000.5, 29000.2,
            22000.0, 17000.8]
    }, {
        name: 'Current Year',
        color: '#405365',
        data: [20000, 30000, 10000, 40000, 18000, 14000, 17000, 16000, .0, 0,
            0, 0]
    }]
});