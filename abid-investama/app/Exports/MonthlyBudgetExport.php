<?php

namespace App\Exports;

use App\Models\Monthly_budget;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Support\Facades\DB;


class MonthlyBudgetExport implements FromCollection, WithHeadings, WithMapping
{
    protected $search;
    protected $sort;

    public function __construct($search, $sort)
    {
        $this->search = $search;
        $this->sort = $sort;
    }

    public function collection()
    {
        // Buat query dengan join dan select
        $query = DB::table('monthly_budget')
            ->join('lokasi', 'monthly_budget.id_lokasi', '=', 'lokasi.id')
            ->join('request_item', 'monthly_budget.id_permintaan', '=', 'request_item.id')
            ->select('monthly_budget.*', 'lokasi.nama as nama_lokasi', 'request_item.nama_permintaan as permintaan');

        // Penerapan pencarian
        if ($this->search) {
            $query->where(function ($q) {
                $q->where('lokasi.nama', 'like', '%' . $this->search . '%') // Pencarian di kolom nama dari tabel lokasi
                    ->orWhere('request_item.nama_permintaan', 'like', '%' . $this->search . '%'); // Pencarian di kolom nama_permintaan dari tabel request_item
            });
        }

        // Kembalikan hasil query
        return $query->get();
    }


    public function headings(): array
    {
        return [
            'Nama Lokasi',
            'Nama Permintaan',
            'Nama',
            'Bagian',
            'Tanggal',
            'Keterangan',
            'Stock',
            'FPB',
            'Summary',
        ];
    }

    public function map($monthlyBudget): array
    {
        return [
            $monthlyBudget->lokasi->nama ?? 'N/A',
            $monthlyBudget->request_item->nama_permintaan ?? 'N/A',
            $monthlyBudget->nama,
            $monthlyBudget->bagian,
        ];
    }
}
