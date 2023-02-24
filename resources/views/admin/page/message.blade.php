@if (session('success'))
<div class="row mb-5">
    <div class="col-lg-2">
        <div class="card alert border p-0 mb-0">
            <div class="card-header bg-soft-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="font-size-16 text-success my-1">Success Alert</h5>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <div class="mb-4">
                        <i class="mdi mdi-checkbox-marked-circle-outline display-4 text-success"></i>
                    </div>
                    {{-- <h4 class="alert-heading font-18">{{session('success')}}</h4>
                    <p>Placed your Order successfully</p> --}}
                    
                </div>
            </div>
        </div>    
    </div>
</div>    
@endif
@if (session('error'))
    
    <div class="row mb-5">
        <div class="col-lg-2">
            <div class="card alert border mt-4 mt-lg-0 p-0 mb-0">
                <div class="card-header bg-soft-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="font-size-16 text-danger my-1">Danger Alert</h5>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <div class="mb-4">
                            <i class="mdi mdi-alert-outline display-4 text-danger"></i>
                        </div>
                        {{-- <h4 class="alert-heading font-18">{{session('error')}}</h4>
                        <p>Sorry ! Product not available</p> --}}
                        
                    </div>
                </div>
            </div>   
        </div>
    </div>     

@endif




