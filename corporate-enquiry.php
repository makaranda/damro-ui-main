<?php
    include('includes/header.php');
?>

<div class="container mt-3 mb-4" id="main-page">
    <div class="row justify-content-center">
        <div class="col-12 col-md-12 mb-3 breadcrumb-area">
            <nav  class="breadcrumb d-flex justify-content-center" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb p-2 mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Corporate Enquiry</li>
                </ol>
            </nav>
        </div>
        <div class="col-12 col-md-12">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 mt-1 p-4 border shadow bg-light">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Organization / Company <span class="required-field">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone Number <span class="required-field">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email <span class="required-field">*</span></label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email <span class="required-field">*</span></label>
                            <textarea rows="4" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include('includes/footer.php');
?>   