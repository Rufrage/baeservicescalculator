<?php

namespace App\Http\Controllers;

use App\Exports\UmzugExport;
use App\Umzug;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class UmzugExportController extends Controller
{
    public function export()
    {
        return Excel::download(new UmzugExport(), 'umzug.xlsx');
    }
}
