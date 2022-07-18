<?


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
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
        Excel::import(new EntityImport, $request->file('file')->store('temp'));

        return redirect('/')->with('success', 'All good!');
    }

    public function fileExport(Request $request)
    {
        return Excel::download(new EntityExport, 'Entities.xlsx');
    }

    public function index()
    {
        return view('excel-page');
    }
}
