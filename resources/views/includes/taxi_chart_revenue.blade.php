<div class="admin-dashboard-widget">
    <div class="admin-dashboard-col-1"> 
        <div class="admin-dashboard-heading">
            <div class="view-results-heading">
              <i class="fa fa-comments-o"></i>
              <b>Revenue</b>
            </div>
            <div class="view-button-revenue row">
                <button class="page-btn active" onclick="openChart('btndaily')">Daily</button>
                <button class="page-btn" onclick="openChart('btnweekly')">Weekly</button>
                <button class="page-btn" onclick="openChart('btnmonthly')">Monthly</button>
                <button class="page-btn" onclick="openChart('btnannaully')">Annually</button>
            </div>
        </div>

        <div class="admin-dashboard-chart">
            <div id="btndaily" class="chart">
                <div id="dailyRevenue"></div>
            </div>
            <div id="btnweekly" class="chart" style="display:none;">
                <div id="weeklyRevenue"></div>
            </div>
            <div id="btnmonthly" class="chart" style="display:none;">
                <div id="monthlyRevenue"></div>
            </div>
            <div id="btnannaully" class="chart" style="display:none;">
                <div id="annuallyRevenue"></div>
            </div>
        </div>
    </div>
</div>

<!-- DAILY TURNOVER -->
<script type="text/javascript">
    Highcharts.chart('dailyRevenue', {
        chart: {type: 'column'},
        title: {text: 'Daily Turn Over'},
        
        xAxis: {
            type: 'category',
            labels: {
                autoRotation: [-45, -90],
                style: {fontSize: '13px',fontFamily: 'Arial;, sans-serif',textTransform: 'uppercase'}
            }
        },
        yAxis: {
            allowDecimals:false,
            title: {text: 'Amount (in Rands)'}
        },
        legend: {enabled: false},
        tooltip: {pointFormat: 'Monthly Turn Over: <b>{point.y:.1f} Rands</b>'},
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
                style: {fontSize: '13px',fontFamily: 'Arial, sans-serif'}
            }
        }]
    });
</script>

<!-- WEEKLY TURNOVER -->
<script type="text/javascript">
    Highcharts.chart('weeklyRevenue', {
        chart: {type: 'column'},
        title: {text: 'Weekly Turn Over'},
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
            title: {text: 'Amount (in Rands)'}
        },
        legend: {enabled: false},
        tooltip: {
            pointFormat: 'Weekly Turn Over: <b>{point.y:.1f} Rands</b>'
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
                    ['{{ $taxi->registration }}', {{ $taxi->weeklyRevenue }}],
                @endforeach
            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'right',
                // format: '{point.y:.1f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {fontSize: '13px',fontFamily: 'Arial, sans-serif'}
            }
        }]
    });
</script>

<!-- MONTHLY TURNOVER -->
<script type="text/javascript">
    Highcharts.chart('monthlyRevenue', {
        chart: {type: 'column'},
        title: {text: 'Monthly Turn Over'},
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
            title: {text: 'Amount (in Rands)'}
        },
        legend: {enabled: false},
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
                    ['{{ $taxi->registration }}', {{ $taxi->monthlyRevenue }}],
                @endforeach
            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'right',
                // format: '{point.y:.1f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {fontSize: '13px',fontFamily: 'Arial, sans-serif'}
            }
        }]
    });
</script>

<!-- ANNUALLY TURNOVER -->
<script type="text/javascript">
    Highcharts.chart('annuallyRevenue', {
        chart: {type: 'column'},
        title: {text: 'Annually Turn Over'},
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
            title: {text: 'Amount (in Rands)'}
        },
        legend: {enabled: false},
        tooltip: {
            pointFormat: 'Annually Turn Over: <b>{point.y:.1f} Rands</b>'
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
                    ['{{ $taxi->registration }}', {{ $taxi->annuallyRevenue }}],
                @endforeach
            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'right',
                // format: '{point.y:.1f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {fontSize: '13px',fontFamily: 'Arial, sans-serif'}
            }
        }]
    });
</script>

<script>
    function openChart(chartName) {
        let i;
        let x = document.getElementsByClassName("chart");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        document.getElementById(chartName).style.display = "block";
    }
</script>

  


  