@extends("layouts.main")

@section('title', 'Get Invoices')

@section('breadcump')
<div class="col-sm-6">
    <h1 class="m-0">{{ __('Get Invoices') }}</h1>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('backend.dashboard.index') }}">{{ __('Home') }}</a></li>
        <li class="breadcrumb-item active">{{ __('Get Invoices') }}</li>
    </ol>
</div>
@endsection

@section('main')
<div class="row justify-content-center">
    <div class="col-lg-10 col-8">
        <!-- small box -->
        <form class="small-box p-3">
            <div class="row form-group">
                <div class="col-6">
                    <label for="fromDate">From Date</label>
                    <input type="date" class="form-control" id="fromDate" />
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                        <label for="thruDate">Thru Date</label>
                        <input type="date" class="form-control" id="thruDate" />
                </div>
                <div class="form-group col-5">
                    <label for="commMethod">Commission Method</label>
                    <select id="commMethod" class="form-control form-control-border">
                        <option value="0">Gross Profit</option>
                        <option value="1">Sales</option>
                    </select>
                </div>
            </div>
            <hr class="">
            <div class="row">
                <div class="col-8">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="selRep" class="custom-control-input custom-control-input-danger custom-control-input-outline"/>
                        <label for="selRep" class="custom-control-label">Select Rep</label>
                    </div>
                    <div>

                    </div>
                </div>
                <div class="col-4">
                    <button class="btn btn-primary">Submit</button>
                    <button class="btn btn-danger ml-3">Exit</button>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="small-box p-3">
                    You can select All Reps, one Rep or multiple Reps 
                    by holding down the control key when you select multiple Reps.
                     Click on the Submit button when you're ready.
                </div>
            </div>
            <hr/>
            <div>
                Awaiting your input
            </div>
        </form>
    </div>
</div>
@endsection