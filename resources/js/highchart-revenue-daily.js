    Highcharts.chart('dailyRevenue', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'daily Turn Over - Targ'
    },
    
    xAxis: {
        type: 'category',
        labels: {
            autoRotation: [-45, -90],
            style: {
                fontSize: '13px',
                fontFamily: 'Arial;, sans-serif',
                textTransform: 'uppercase'

            }
        }
    },
    yAxis: {
        
        allowDecimals:false,
        title: {
            text: 'Amount (in Rands)'
        }
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: 'Monthly Turn Over: <b>{point.y:.1f} Rands</b>'
    },
    series: [{
        name: 'Rands',
        colors: [
            '#405365', '#405365', '#405365', '#405365', '#405365', '#405365',
            '#405365', '#405365', '#405365', '#405365', '#405365'
        ],
        colorByPoint: true,
        groupPadding: 0,
        data: [
        
@foreach ($revenue as $taxi)
            ['{{ $taxi->registration }}', {{ $taxi->dailyRevenue }}],
@endforeach            

            
        ],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            // format: '{point.y:.1f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Arial, sans-serif'
            }
        }
    }]
});