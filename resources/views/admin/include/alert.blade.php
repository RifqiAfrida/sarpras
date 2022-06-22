@if (session('success'))
    <div class="alert alert-success alert-dismissible text-white text-bold m-3 mb-1 " role="alert">
        <span class="text-sm">{{ session('success')}}</span>
        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif