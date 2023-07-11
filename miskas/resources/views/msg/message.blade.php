@if(session()->has('success'))
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                {{session()->get('success')}}
            </div>
        </div>
    </div>
</div>
@endif
@if(session()->has('info'))
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="alert alert-info" role="alert">
                {{session()->get('info')}}
            </div>
        </div>
    </div>
</div>
@endif
@if(session()->has('warning'))
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="alert alert-warning" role="alert">
                {{session()->get('warning')}}
            </div>
        </div>
    </div>
</div>
@endif