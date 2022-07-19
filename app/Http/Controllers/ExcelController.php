<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Imports\EntityImport;
use App\Exports\EntityExport;

class ExcelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function import(Request $request)
    {
        Excel::import(new EntityImport($request->type), $request->file('uploaded_file'));

        return redirect('/')->with('success', 'All good!');
    }

    public function export(Request $request)
    {
        return Excel::download(new EntityExport, 'Entities.xlsx');
    }

    public function index()
    {
        $data = DB::table('entities')->orderBy('barcode')->paginate(10);
        return view('excel-page');
    }
}
