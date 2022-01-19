<div class="col-md-12" >
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="padding: 20px;margin: 15px;">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="ik ik-x"></i>
        </button>
    </div>
    @endif
    @if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="padding: 20px;margin: 15px;">
        {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="ik ik-x"></i>
        </button>

    </div>
    @endif
</div>