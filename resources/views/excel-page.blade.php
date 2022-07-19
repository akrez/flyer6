@extends('layouts.adminlte2.dashboard')

@section('content')
<div class="container">
    <div class="col-md-10">
        <div class="row justify-content-center" style="margin-top: 4%">
            <div class="card">
                <div class="card-header bgsize-primary-4 white card-header">
                    <h4 class="card-title">Import Data From Excel</h4>
                </div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    <br>
                    @endif
                    <form action='{{url("/excel-page/import")}}' method="post" enctype="multipart/form-data">
                        @csrf
                        <fieldset>
                            <table class="table">
                                <tr>
                                    <th>excel file</th>
                                    <th>type</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td> <input type="file" required class="form-control" name="uploaded_file" id="uploaded_file">
                                        @if ($errors->has('uploaded_file'))
                                        <p class="text-right mb-0">
                                            <small class="danger text-muted" id="file-error">{{ $errors->first('uploaded_file') }}</small>
                                        </p>
                                        @endif
                                    </td>
                                    <td> <select required class="form-control" name="type" id="type">
                                            <option selected disabled>select type</option>
                                            <option value="reseller">Reseller</option>
                                            <option value="asset">Asset</option>
                                            <option value="parts">Parts</option>
                                            <option value="rawMat">Raw material</option>
                                        </select>
                                    </td>
                                    <td> <button class="btn btn-primary square" type="submit" id="button-import">
                                            <i class="ft-upload mr-1"></i> Upload
                                        </button>
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="row justify-content-left">
            <div class="col-md-12">
                <br />
                <div class="card">
                    <div class="card-header bgsize-primary-4 white card-header">
                        <h4 class="card-title">Entities Table</h4>
                    </div>
                    <div class="card-body">
                        <div class=" card-content table-responsive">
                            <table id="show_table" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <th>title</th>
                                    <th>barcode</th>
                                    <th>quantity</th>
                                    <th>place</th>
                                    <th>last changed at</th>
                                    <th>description</th>
                                </thead>
                                <tbody>
                                    @if(!empty($data) && $data->count())
                                    @foreach($data as $row)
                                    <tr>
                                        <td>{{ $row->title }}</td>
                                        <td>{{ $row->barcode }}</td>
                                        <td>{{ $row->qty }}</td>
                                        <td>{{ $row->place }}</td>
                                        <td>{{ $row->updated_at }}</td>
                                        <td>{{ $row->description }}</td>
                                    </tr>
                                    @endforeach
                                    {{  $data ?? '' ->links() }}
                                    @else
                                    <tr>
                                        <td colspan="10">There are no data.</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                            
                        </div>
                        <div class="pull-right">

                            <a href='{{url("/excel-page/export")}}' class="btn btn-primary">Downoad all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection