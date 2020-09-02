<br />
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Home</h1>
</div>

<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Current Temperature</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?= $weatherData->main->temp ?> <sup>o</sup>C
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>