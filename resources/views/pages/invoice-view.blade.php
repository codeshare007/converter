@extends("layouts.main")

@section('title', 'View Invoices')

@section('breadcump')
<div class="col-sm-6">
    <h1 class="m-0">{{ __('View Invoices') }}</h1>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('backend.dashboard.index') }}">{{ __('Home') }}</a></li>
        <li class="breadcrumb-item active">{{ __('View Invoices') }}</li>
    </ol>
</div>
@endsection

@section('main')
<div class="row justify-content-center">
    <div class="col-12">
        <!-- small box -->
        <div class="bg-primary p-2 card-header">Selected Invoices</div>
        <form class="small-box p-3">
            <div class="row form-group align-items-end">
                <div class="col-md-3 col-sm-12">
                    <label for="invoiceSearch">Find Invoice</label>
                    <input type="date" class="form-control" id="invoiceSearch" />
                </div>
                <div class="col-md-1 col-sm-12">
                    <button class="btn btn-primary">Go</button>
                </div>
                <div class="col-md-8 col-sm-12">
                    <label>Show</label>
                    <div class="d-flex justify-content-around border p-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="showAll" name="invoiceCheck" checked/>
                            <label for="showAll" class="custom-control-label">All</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="showInvoiceOnly" name="invoiceCheck"/>
                            <label for="showInvoiceOnly" class="custom-control-label">Invoices Only</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="showCreditMemoOnly" name="invoiceCheck"/>
                            <label for="showCreditMemoOnly" class="custom-control-label">Credit Memos Only</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="showHousSalesRep" name="invoiceCheck"/>
                            <label for="showHousSalesRep" class="custom-control-label">Do not Show HOUS Sales Rep</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-4">
                    <div>
                        <label for="invoiceNumber" class="form-control-label">Invoice Number</label>
                        <input type="text" class="form-control form-control-border" id="invoiceNumber" />
                    </div>
                    <div class="mt-1">
                        <label for="invoiceDate" class="form-control-label">Invoice Date</label>
                        <input type="date" class="form-control form-control-border" id="invoiceDate" />
                    </div>
                    <div class="mt-1">
                        <label for="customerName" class="form-control-label">Customer Name</label>
                        <textarea class="form-control form-control-border" id="customerName"></textarea>
                    </div>
                    <div class="mt-1">
                        <label for="salesSubjectTo" class="form-control-label">Sales Subject to Commission</label>
                        <input type="text" class="form-control form-control-border" id="salesSubjectTo" />
                    </div>
                    <div class="mt-1">
                        <label for="memo" class="form-control-label">Memo</label>
                        <textarea type="text" class="form-control form-control-border" id="memo"></textarea>
                    </div>
                    <div class="mt-1">
                        <label for="poNumber" class="form-control-label">PO Number</label>
                        <input type="text" class="form-control form-control-border" id="poNumber" />
                    </div>
                    <div class="mt-1">
                        <label for="assignedRep" class="form-control-label">Assigned Rep</label>
                        <input type="text" class="form-control form-control-border" id="assignedRep" />
                    </div>
                </div>
                <div class="form-group col-4 d-flex flex-column">
                    <div>
                        <label for="shipToName" class="form-control-label">Ship To Name</label>
                        <input type="text" class="form-control form-control-border" id="shipToName" />
                    </div>
                    <div class="mt-1">
                        <label for="shipToCity" class="form-control-label">Ship To City</label>
                        <input type="text" class="form-control form-control-border" id="shipToCity" />
                    </div>
                    <div class="mt-1">
                        <label for="shipToAddress" class="form-control-label">Ship To Address 1</label>
                        <input type="text" class="form-control form-control-border" id="shipToAddress" />
                    </div>
                    <div class="row mt-1">
                        <div class="col-6">
                            <label for="shipToZip" class="form-control-label">Ship To Zip</label>
                            <input type="text" class="form-control form-control-border" id="shipToZip" />
                        </div>
                        <div class="col-6">
                            <label for="billZip" class="form-control-label">Bill Zip</label>
                            <input type="text" class="form-control form-control-border" id="billZip" />
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-6">
                            <label for="dueDate" class="form-control-label">Due Date</label>
                            <input type="date" class="form-control form-control-border" id="dueDate" />
                        </div>
                        <div class="col-6">
                            <label for="paidDate" class="form-control-label">Paid Date</label>
                            <input type="date" class="form-control form-control-border" id="paidDate" />
                        </div>
                    </div>
                    <div class="mt-auto">
                        <div class="row justify-content-around">
                            <button class="btn btn-primary">
                                Show Payments
                            </button>
                            <button class="btn btn-secondary">
                                Edit
                            </button>
                        </div>
                        <div class="row mt-2">
                            <label for="totalComm">Total Commission</label>
                            <input type="text" id="totalComm" class="form-control form-control-border w-50-px"/>
                        </div>
                    </div>
                </div>
                <div class="col-4 d-flex flex-column">
                    <div class="table-responsive" style="height:367px;">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>Salesperson</th>
                                    <th class="w-100">%of Split</th>
                                    <th class="w-100">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <select class="w-100">
                                            <option value="">CMA</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" value="0.00" class="w-100">
                                    </td>
                                    <td>
                                        <input type="text" value="0.00" class="w-100">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-auto mb-5">
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-success">Save and Go To Next Record</button>
                        </div>
                        <div class="d-flex justify-content-center mt-2">
                            <button class="btn btn-danger">Delete Record</button>
                            <button class="btn btn-danger ml-2">Close Form</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2 table-responsive">
                <table class="table table-bordered table-head-fixed">
                    <thead>
                        <tr>
                            <th class="w-100">ItemRefName</th>
                            <th class="w-100">Quantity</th>
                            <th class="w-100">Price</th>
                            <th class="w-100">Amount</th>
                            <th class="w-100">Rate%</th>
                            <th class="w-100">Commission</th>
                            <th class="w-100">Class</th>
                            <th class="w-100">Bonus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <select class="w-100">
                                    <option value="">CMA</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" value="0.00" class="w-100">
                            </td>
                            <td>
                                <input type="text" value="0.00" class="w-100">
                            </td>
                            <td>
                                <input type="text" value="0.00" class="w-100">
                            </td>
                            <td>
                                <select class="w-100">
                                    <option value="">CMA</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" value="0.00" class="w-100">
                            </td>
                            <td>
                                <input type="text" value="0.00" class="w-100">
                            </td>
                            <td>
                                <input type="text" value="0.00" class="w-100">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>
@endsection