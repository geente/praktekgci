<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Statistic</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Tagihan</a></div>
                <div class="breadcrumb-item">Statistic</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Statistics</h2>
            <p class="section-lead">The chat component and is equipped with a JavaScript API, making it easy for you to integrate with Back-end.</p>

            <div class="row">
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Summary</h4>
                            <div class="card-header-action">
                                <a href="#summary-chart" data-tab="summary-tab" class="btn active">Chart</a>
                                <a href="#summary-text" data-tab="summary-tab" class="btn">Text</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="summary">
                                <div class="summary-info" data-tab-group="summary-tab" id="summary-text">
                                    <h4>$1,858</h4>
                                    <div class="text-muted">Sold 4 items on 2 customers</div>
                                    <div class="d-block mt-2">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                                <div class="summary-chart active" data-tab-group="summary-tab" id="summary-chart">
                                    <canvas id="myChart" height="180"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $this->load->view('dist/_partials/footer'); ?>

<script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            datasets: [{
                label: 'Statistics',
                data: [460, 458, 330, 502, 430, 610, 488],
                borderWidth: 2,
                backgroundColor: 'rgba(63,82,227,.8)',
                borderWidth: 0,
                borderColor: 'transparent',
                pointBorderWidth: 0,
                pointRadius: 3.5,
                pointBackgroundColor: 'transparent',
                pointHoverBackgroundColor: 'rgba(63,82,227,.8)',
            }, {
                label: 'Statistics',
                data: [390, 600, 390, 280, 600, 430, 638],
                borderWidth: 2,
                backgroundColor: 'rgba(254,86,83,.7)',
                borderWidth: 0,
                borderColor: 'transparent',
                pointBorderWidth: 0,
                pointRadius: 3.5,
                pointBackgroundColor: 'transparent',
                pointHoverBackgroundColor: 'rgba(254,86,83,.8)',
            }]
        },
        options: {
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        drawBorder: false,
                        color: '#f2f2f2',
                    },
                    ticks: {
                        beginAtZero: true,
                        stepSize: 200,
                        callback: function(value, index, values) {
                            return '$' + value;
                        }
                    }
                }],
                xAxes: [{
                    gridLines: {
                        display: false,
                        tickMarkLength: 15,
                    }
                }]
            },
        }
    });
</script>