<?php

namespace App\Http\Controllers;

use App\Imports\CountryImport;
use App\Imports\PromoCodesImport;
use App\Imports\StudentImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function __construct(){
        ini_set('max_execution_time', 600);
        ini_set('memory_limit', '60m');
    }

    public function importPromoCodes(Request $request)
    {
        Excel::import(new PromoCodesImport(), '');

        return back()->withSuccess('تم تحديث بيانات الطلاب بنجاح');
    }

    public function importCountries()
    {
        Excel::import(new CountryImport(), 'countries.xlsx');

        dd('Import Done');
    }


}
