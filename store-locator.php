<?php
    include('includes/header.php');
?>

<div class="container mt-3 mb-5" id="main-page">
    <div class="row justify-content-center">
        <div class="col-12 col-md-12 mb-3 breadcrumb-area">
            <nav  class="breadcrumb d-flex justify-content-center" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb p-2 mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Store Locator</li>
                </ol>
            </nav>
        </div>
        <div class="col-12 col-md-12 mb-4">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12">
                    <nav class="store-locator-nav">
                        <div class="nav nav-tabs border-0" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-map-tab" data-bs-toggle="tab" data-bs-target="#nav-map" type="button" role="tab" aria-controls="nav-map" aria-selected="true"><i class="bi bi-caret-down-fill"></i> Map View</button>
                            <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab" data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-list" aria-selected="false"><i class="bi bi-caret-down-fill"></i>List View</button>
                        </div>
                    </nav>
                </div>
                <div class="col-12 col-md-12 mt-3">    
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-map" role="tabpanel" aria-labelledby="nav-map-tab" tabindex="0">
                            <div class="elfsight-app-4279a773-4cbb-49fc-95e4-e91488d01af9" data-elfsight-app-lazy></div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-list-tab" tabindex="0">

                        </div>
                    </div>
                </div>
                
            </div></>
        </div>
    </div>
</div>

<?php
    include('includes/footer.php');
?>   