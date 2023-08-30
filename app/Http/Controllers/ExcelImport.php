<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelImport extends Controller
{
    public function excelViewImport()
    {
        return view('excel-import');
    }


    public function Import( Request $request)
    {
        
        Excel::import(new UsersImport, $request->file('excel_file'));
        
        return redirect('/')->with('success', 'All good!');
    }
}
