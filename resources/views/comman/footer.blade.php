
<!-- /.page-wrapper -->
<!-- jQuery -->

<script src="{{ asset('public/admin/vendor/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap Javascript -->
<script src="{{ asset('public/admin/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- Chartjs-->
<script src="{{ asset('public/admin/vendor/chart.js/dist/Chart.min.js') }}"></script>

<!-- Easy Pie Chart-->
<script src="{{ asset('public/admin/vendor/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>

<!-- Bootstrap Switch-->
<script src="{{ asset('public/admin/vendor/bootstrap-switch/dist/js/bootstrap-switch.min.js') }}"></script>

<!-- Color Variables -->
<script src="{{ asset('public/admin/scripts/colors.min.js') }}"></script>

<!-- Collapsible Menu Plugin -->
<script src="{{ asset('public/admin/scripts/collapsibleMenu.min.js') }}"></script>

<!-- Collapsible Sidebar Plugin -->
<script src="{{ asset('public/admin/scripts/sidebar.js') }}"></script>

<!-- Panel Actions -->
<script src="{{ asset('public/admin/scripts/panel.min.js') }}"></script>

<!-- Class Toggle Plugin -->
<script src="{{ asset('public/admin/scripts/classtoggle.min.js') }}"></script>

<!-- Initialize Emphasize -->
<script src="{{ asset('public/admin/scripts/init.js') }}"></script>

<!-- Chartist -->
<script src="{{ asset('public/admin/vendor/chartist/dist/chartist.min.js') }}"></script>
<!-- jQuery SlimScroll -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('public/admin/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/js/bootstrap-switch.js" data-turbolinks-track="true"></script>
<!-- Sweet Alert -->
<script src="{{ asset('public/admin/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>

<!-- Toastr -->
<script src="{{ asset('public/admin/vendor/toastr/toastr.min.js') }}"></script>

<!-- Icheck Checkboxes -->
<script src="{{ asset('public/admin/vendor/iCheck/icheck.min.js') }}"></script>
<script src="{{ asset('public/admin/vendor/d3/d3.min.js') }}"></script>
<script src="{{ asset('public/admin/vendor/c3/c3.min.js') }}"></script>
<script>
$(function() {
    var ctx = $('#chart-line');
    var salesChart = new Chart(ctx, {
        'type': 'line',
        data: {
            labels: ["0","1","2", "3","4", "5","6","7","8", "9","0","1","2", "3","4", "5","6","7","8", "9"],
            datasets:[
                {
                    label:'Performance Score',
                    data:[200,250,340,160,150,170,200,180,210, 150,200,290,260,330,350,300,340,400,500,600 ],
                    borderColor: "rgba(119,95,238,1)",
                    backgroundColor: "rgba(119,95,238,1)",
                    lineTension: 0,
                    pointRadius:0

                }
            ],


        },
        options: {
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    gridLines: {
                        tickMarkLength:0,
                        drawBorder:false,
                        color: 'rgba(240,240,240,1)',
                        zeroLineColor: 'rgba(240,240,240,1)',
                        display:false
                    },
                    ticks: {
                        beginAtZero:true,
                        autoSkip:false,
                        display: false,
                        stepSize:50,

                    }
                }],
                xAxes: [{
                    gridLines: {
                        display:false,
                        tickMarkLength:0,
                        drawBorder:false,
                        color: 'rgba(240,240,240,1)',
                        zeroLineColor: 'rgba(240,240,240,1)',
                    },
                    ticks: {
                        beginAtZero:true,
                        display: false,

                    }

                }]
            },
            legend: {
                display: false,
                position: 'top',
                fullWidth: false,
                labels: {
                    boxWidth:14
                }

            }
        }
    })

    var ctx = $('#chart-line2');
    var salesChart = new Chart(ctx, {
        'type': 'line',
        data: {
            labels: ["0","1","2", "3","4", "5","6","7","8", "9","0","1","2", "3","4", ],
            datasets:[
                {
                    label:'Performance Score',
                    data:[200,250,340,210, 250,200,400,500,400,290,260,340,330,350,300],
                    borderColor: "rgba(30,126,239,0.9)",
                    backgroundColor: "rgba(30,126,239,0.9)",
                    lineTension: 0,
                    pointRadius:0,

                }
            ],


        },
        options: {
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    gridLines: {
                        tickMarkLength:0,
                        drawBorder:false,
                        color: 'rgba(240,240,240,1)',
                        zeroLineColor: 'rgba(240,240,240,1)',
                        display:false
                    },
                    ticks: {
                        beginAtZero:true,
                        autoSkip:false,
                        display: false,
                        stepSize:50,

                    }
                }],
                xAxes: [{
                    gridLines: {
                        display:false,
                        tickMarkLength:0,
                        drawBorder:false,
                        color: 'rgba(240,240,240,1)',
                        zeroLineColor: 'rgba(240,240,240,1)',
                    },
                    ticks: {
                        beginAtZero:true,
                        display: false,

                    }

                }]
            },
            legend: {
                display: false,
                position: 'top',
                fullWidth: false,
                labels: {
                    boxWidth:14
                }

            }
        }
    })

    var ctx = $('#chart-line3');
    var salesChart = new Chart(ctx, {
        'type': 'line',
        data: {
            labels: ["0","1","2", "3","4", "5","6","7","8", "9","0","1","2", "3","4", ],
            datasets:[
                {
                    label:'Performance Score',
                    data:[200,250,240,250, 220,200,300,400,300,190,160,240,330,350,300],
                    borderColor: "rgba(38,193,177,0.9)",
                    backgroundColor: "rgba(38,193,177,0.9)",
                    lineTension: 0,
                    pointRadius:0,

                }
            ],


        },
        options: {
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    gridLines: {
                        tickMarkLength:0,
                        drawBorder:false,
                        color: 'rgba(240,240,240,1)',
                        zeroLineColor: 'rgba(240,240,240,1)',
                        display:false
                    },
                    ticks: {
                        beginAtZero:true,
                        autoSkip:false,
                        display: false,
                        stepSize:50,

                    }
                }],
                xAxes: [{
                    gridLines: {
                        display:false,
                        tickMarkLength:0,
                        drawBorder:false,
                        color: 'rgba(240,240,240,1)',
                        zeroLineColor: 'rgba(240,240,240,1)',
                    },
                    ticks: {
                        beginAtZero:true,
                        display: false,

                    }

                }]
            },
            legend: {
                display: false,
                position: 'top',
                fullWidth: false,
                labels: {
                    boxWidth:14
                }

            }
        }
    })

    var ctx = $('#chart-bar');
    var salesChart = new Chart(ctx, {
        'type': 'bar',
        data: {
            labels: ["Jan","Feb","March","April", "May"],
            datasets:[
                {
                    label:'Performance Score',
                    data:[100,50,180,70,80],
                    borderColor:"rgba(38,193,177,1)",
                    backgroundColor: "rgba(38,193,177,1)",


                    lineTension: 0.3,
                    borderWidth:1,

                },

                {
                    label:'Performance Score',
                    data:[200,100,180,50,90],
                    borderColor:"rgba(30,126,239,1)",
                    backgroundColor: "rgba(30,126,239,1)",
                    lineTension: 0.3,
                    borderWidth:1,

                },
                {
                    label:'Performance Score',
                    data:[400,150,280,130,300],
                    borderColor: 'rgba(115,89,238,1)',
                    backgroundColor: "rgba(115,89,238,1)",

                    lineTension: 0.3,
                    borderWidth:1,

                },

            ],


        },
        options: {



            maintainAspectRatio: false,

            scales: {
                yAxes: [{
                    gridLines: {
                        tickMarkLength:0,
                        drawBorder:false,
                        color: 'rgba(240,240,240,1)',
                        zeroLineColor: 'rgba(240,240,240,1)',
                    },
                    ticks: {
                        beginAtZero:true,
                        autoSkip:true,
                        stepSize: 100,
                        display: true,
                        padding: 10,

                    }
                }],
                xAxes: [{
                  categoryPercentage: 0.7,
                    gridLines: {
                        tickMarkLength:10,
                        drawBorder:false,
                        color: 'rgba(240,240,240,0)',
                        zeroLineColor: 'rgba(240,240,240,1)',
                        display: true,
                    },
                    ticks: {
                        beginAtZero:true,
                        display: true,

                    }

                }]
            },
            legend: {
                display: false,

            }
        }
    })

    var chart = c3.generate({
    bindto: '#donut-chart',
    data: {
        columns: [
            ['Retweets', 0],
            ['Shares', 100],
            ['Sale', 160],
            ['Revenue', 80],


        ],
        colors: {
            'Retweets': '#FC5F7C',
            'Shares': '#1E88E5',
            'Sale': '#7359EE',
            'Revenue': 'rgba(38,193,177,0.9)',

        },
        type: 'donut'
    }
    });


    $('.easyPieChart').easyPieChart({
        size:28,
        scaleColor:false,
        lineWidth:2,
        barColor:'#fff',
        trackColor: 'rgba(0,0,0,0.1)',
    });
});
</script>
</body>
</html>
