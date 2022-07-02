@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show d-flex justify-content-between align-items-center"
        role="alert">
        {{ session('success') }}
        <button type="button" class="btn btn-close " data-bs-dismiss="alert" aria-label="Close">&times</button>
    </div>
@endif
