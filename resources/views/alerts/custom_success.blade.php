@if (session('success'))
    <div class="alert alert-success font-weight-bold alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" data-dismiss="alert" aria-label="Close" class="close btn-close">
            <i class="now-ui-icons btn-close ui-1_simple-remove"></i>
        </button>
    </div>
@endif
