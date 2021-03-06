<?= $this->extend('layouts/backend') ?>


<?= $this->section('content')?>


<div class="content-header">
                        <h4 class="title is-4">Dashboard</h4>
                        <span class="separator"></span>
                        <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
                            <ul>
                                <li>
                                    <a href="#">General</a>
                                </li>
                                <li class="is-active">
                                    <a href="#" aria-current="page">Dashboard</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="content-body">
                        <div class="columns">
                            <div class="column">
                                <div class="box quick-stats has-background-primary has-text-white">
                                    <div class="quick-stats-icon">
                                        <span class="icon is-large">
                                            <i class="fa fa-3x fa-users"></i>
                                        </span>
                                    </div>
                                    <div class="quick-stats-content">
                                        <h3 class="title is-4">Users</h3>
                                        <div class="inlinesparkline-bar"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="box quick-stats has-background-info has-text-white">
                                    <div class="quick-stats-icon">
                                        <span class="icon is-large">
                                            <i class="fa fa-3x fa-server"></i>
                                        </span>
                                    </div>
                                    <div class="quick-stats-content">
                                        <h3 class="title is-4">Server</h3>
                                        <div class="inlinesparkline-bar"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="box quick-stats has-background-danger has-text-white">
                                    <div class="quick-stats-icon">
                                        <span class="icon is-large">
                                            <i class="fa fa-3x fa-bar-chart"></i>
                                        </span>
                                    </div>
                                    <div class="quick-stats-content">
                                        <h3 class="title is-4">Revenue</h3>
                                        <div class="inlinesparkline-line"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="box quick-stats has-background-warning has-text-white">
                                    <div class="quick-stats-icon">
                                        <span class="icon is-large">
                                            <i class="fa fa-3x fa-bell"></i>
                                        </span>
                                    </div>
                                    <div class="quick-stats-content">
                                        <h3 class="title is-4">Alert</h3>
                                        <div class="inlinesparkline-line"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="columns">
                            <div class="column">
                                <div class="card">
                                    <div class="card-content">
                                        <p class="title is-4">Visits</p>
                                        <canvas id="chart1"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="card">
                                    <div class="card-content">
                                        <p class="title is-4">Conversion</p>
                                        <canvas id="chart2"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="columns">
                            <div class="column">
                                <div class="card">
                                    <div class="card-image">
                                        <figure class="image is-4by3">
                                            <img src="assets/images/admin/masjid/masjid-terapung.jpg" alt="Placeholder image">
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="media">
                                            <div class="media-left">
                                                <figure class="image is-48x48">
                                                    <img src="assets/images/admin/user.png" alt="Placeholder image">
                                                </figure>
                                            </div>
                                            <div class="media-content">
                                                <p class="title is-4">Fulan Bin Fulan</p>
                                                <p class="subtitle is-6">@fulanBinFulan</p>
                                            </div>
                                        </div>

                                        <div class="content">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis
                                            mauris.
                                            <a>@bulmaio</a>.
                                            <a href="#">#css</a>
                                            <a href="#">#responsive</a>
                                            <br>
                                            <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="card">
                                    <div class="card-image">
                                        <figure class="image is-4by3">
                                            <img src="assets/images/admin/masjid/mesjid-raya.jpg" alt="Placeholder image">
                                        </figure>
                                    </div>
                                    <div class="card-content is-paddingless">
                                        <table class="table is-fullwidth is-hoverable">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="icon">
                                                            <i class="fa fa-book"></i>
                                                        </span>
                                                        Three
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="icon">
                                                            <i class="fa fa-book"></i>
                                                        </span>
                                                        Five
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="icon">
                                                            <i class="fa fa-book"></i>
                                                        </span>
                                                        Seven
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="icon">
                                                            <i class="fa fa-book"></i>
                                                        </span>
                                                        Ten
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="icon">
                                                            <i class="fa fa-book"></i>
                                                        </span>
                                                        Twelve
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="card">
                                    <div class="card-image">
                                        <figure class="image is-4by3">
                                            <img src="assets/images/admin/masjid/mosq3.jpg" alt="Placeholder image">
                                        </figure>
                                    </div>
                                    <div class="card-content is-paddingless">
                                        <table class="table is-fullwidth is-hoverable">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="icon">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                                        Muhammad ibn ʿAbdullāh (PBUH)
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="icon">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                                        Abu Bakar As Shidiq
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="icon">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                                        Umar Bin Khattab
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="icon">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                                        Usman Bin Affan
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="icon">
                                                            <i class="fa fa-user"></i>
                                                        </span>
                                                        Said Bin zaid
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




<?= $this->endSection()?>



<?= $this->section('scripts')?>
<script>
        $(document).ready(function() {
            let bar = {
                type: 'bar',
                height: 40,
                barWidth: 4,
                barColor: '#fff',
                barSpacing: 3
            };

            let line = {
                type: 'line',
                width: 150,//73
                height: 36,
                lineColor: '#fff',
                fillColor: 'rgba(0,0,0,0)',
                lineWidth: 2,
                maxSpotColor: 'rgba(255,255,255,0.4)',
                minSpotColor: 'rgba(255,255,255,0.4)',
                spotColor: 'rgba(255,255,255,0.4)',
                spotRadius: 3,
                highlightSpotColor: '#fff',
                highlightLineColor: 'rgba(255,255,255,0.4)'
            };
            // $(item).find('.sparkline-bar-stats').sparkline('html', chart === 'bar' ? bar : line);
            
            function data() {
                return Array.from({length: 22}, () => Math.floor(Math.random() * 40));
            }

            $('.inlinesparkline-bar').each(function() {
                $(this).sparkline(data(), bar);
            });

            $('.inlinesparkline-line').each(function() {
                $(this).sparkline(data(), line);
            });

            var ctx1 = document.getElementById('chart2').getContext('2d');
            window.myBar = new Chart(ctx1, {
                type: 'bar',
                data: {
                    "labels": ["January", "February", "March", "April", "May", "June", "July"],
                    "datasets": [{
                        "label": "Dataset 1",
                        "backgroundColor": "rgb(255, 99, 132)",
                        "stack": "Stack 0",
                        "data": [-49, -7, -21, 23, 76, -29, 0]
                    }, {
                        "label": "Dataset 2",
                        "backgroundColor": "rgb(54, 162, 235)",
                        "stack": "Stack 0",
                        "data": [25, -77, -35, -77, -81, 2, 54]
                    }, {
                        "label": "Dataset 3",
                        "backgroundColor": "rgb(75, 192, 192)",
                        "stack": "Stack 1",
                        "data": [43, -6, -98, -22, 24, -51, 6]
                    }]
                },
                options: {
                    title: {
                        display: false,
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: false
                    },
                    responsive: true,
                    scales: {
                        xAxes: [{
                            stacked: true,
                        }],
                        yAxes: [{
                            stacked: true
                        }]
                    },
                    legend: {
                        display: false
                    },
                }
            });

            var ctx2 = document.getElementById('chart1').getContext('2d');
            window.myLine = new Chart(ctx2, {
                type: 'line',
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"],
                    datasets: [{
                        backgroundColor: 'rgba(255, 99, 132, 0.5)',
                        borderColor: 'rgb(255, 99, 132)',
                        data: [-60.21, 67.03, -66.63, 97.27, -39.65, 6.71, 6.14, 98.68],
                        label: 'Dataset',
                        fill: 'start'
                    }]
                },
                options: {
                    title: {
                        display: false
                    },
                    legend: {
                        display: false
                    },
                }
            });
        });
    </script>
<?= $this->endSection()?>