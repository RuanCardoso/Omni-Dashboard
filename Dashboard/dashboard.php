<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
</head>

<body>
    <div id="sidebar"><?php include 'sidebar.html'; ?></div>
    <h2>Overview</h2>
    <div class="row">
        <div class="col-md-2 mb-4">
            <div class="card shadow-lg border-0 text-white">
                <div class="card-header border-0 shadow-sm text-dark text-muted">Online now</div>
                <div class="card-stripe-blue"></div>
                <div class="card-body">
                    <h5 class="card-title text-dark text-nowrap fs-18" id="online-count">0 players simultaneously</h5>
                </div>
            </div>
        </div>
        <div class="col-md-2 mb-4">
            <div class="card shadow-lg border-0 text-white">
                <div class="card-header border-0 shadow-sm text-dark text-muted">Peak today</div>
                <div class="card-stripe-blue"></div>
                <div class="card-body">
                    <h5 class="card-title text-dark text-nowrap fs-18" id="online-today-count">0 players</h5>
                </div>
            </div>
        </div>
        <div class="col-md-2 mb-4">
            <div class="card shadow-lg border-0 text-white">
                <div class="card-header border-0 shadow-sm text-dark text-muted">Peak this month</div>
                <div class="card-stripe-blue"></div>
                <div class="card-body">
                    <h5 class="card-title text-dark text-nowrap fs-18" id="monthly-average">0 players</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="divider"></div>
    <h2 class="mt-2">Network Statistics</h2>
    <div class="col-md-7">
        <div class="card shadow-lg border-0 text-white">
            <div class="card-header border-0 shadow-sm text-dark text-muted">Bandwidth - is measured in kilobytes per second</div>
            <div class="card-stripe-blue"></div>
            <div class="card-body">
                <canvas class="bandwidth-chart" id="bandwidthchart"></canvas>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <script src="/js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="/js//bandwidth.js"></script>
</body>

</html>