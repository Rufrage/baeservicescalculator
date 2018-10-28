<?php

namespace App\Exports;

use App\Umzug;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UmzugExport implements FromView
{

    public function view(): View
    {
        return view('umzug.export');
        //('exports.invoices', [
       // 'invoices' => Invoice::all()
       // ]);
    }
}
