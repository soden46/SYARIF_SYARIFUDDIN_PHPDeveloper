<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function RekapTransaksi(Request $request)
    {
        $start_date = $request['start_date'];
        $end_date = $request['end_date'];
        $nama = $request['nama'];
        if (!empty($request["start_date"]) && !empty($request["end_date"]) && !empty($request["nama"])) {
            $data = DB::table('transaction_details as detail')
                ->select(
                    'detail.*',
                    'head.Description',
                    'head.code',
                    'head.rate_eur',
                    'head.date_paid',
                    'categories.name as nama_kategori'
                )
                ->join('transaction_headers as head', 'detail.transaction_id', '=', 'head.id')
                ->join('ms_categories as categories', 'detail.transaction_category_id', '=', 'categories.id')
                ->where('head.date_paid', '>=', $start_date)
                ->where('head.date_paid', '<=', $end_date)
                ->where('categories.name', $nama)
                ->paginate(5);
            return view('admin.rekap', compact('data'));
        } elseif (!empty($request["start_date"]) && !empty($request["end_date"]) && empty($request["nama"])) {
            $data = DB::table('transaction_details as detail')
                ->select(
                    'detail.*',
                    'head.Description',
                    'head.code',
                    'head.rate_eur',
                    'head.date_paid',
                    'categories.name as nama_kategori'
                )
                ->join('transaction_headers as head', 'detail.transaction_id', '=', 'head.id')
                ->join('ms_categories as categories', 'detail.transaction_category_id', '=', 'categories.id')
                ->where('head.date_paid', '>=', $start_date)
                ->where('head.date_paid', '<=', $end_date)
                ->paginate(5);
            return view('admin.rekap', compact('data'));
        } elseif (!empty($request["start_date"]) && empty($request["end_date"]) && empty($request["nama"])) {
            $data = DB::table('transaction_details as detail')
                ->select(
                    'detail.*',
                    'head.Description',
                    'head.code',
                    'head.rate_eur',
                    'head.date_paid',
                    'categories.name as nama_kategori'
                )
                ->join('transaction_headers as head', 'detail.transaction_id', '=', 'head.id')
                ->join('ms_categories as categories', 'detail.transaction_category_id', '=', 'categories.id')
                ->where('head.date_paid', '>=', $start_date)
                ->paginate(5);
            return view('admin.rekap', compact('data'));
        } elseif (empty($request["start_date"]) && empty($request["end_date"]) && !empty($request["nama"])) {
            $data = DB::table('transaction_details as detail')
                ->select(
                    'detail.*',
                    'head.Description',
                    'head.code',
                    'head.reate_eur',
                    'head.date_paid',
                    'categories.name as nama_kategori'
                )
                ->join('transaction_headers as head', 'detail.transaction_id', '=', 'head.id')
                ->join('ms_categories as categories', 'detail.transaction_category_id', '=', 'categories.id')
                ->where('categories.name', $nama)
                ->paginate(5);
            return view('admin.rekap', compact('data'));
        } elseif (!empty($request["start_date"]) && empty($request["end_date"]) && !empty($request["nama"])) {
            $data = DB::table('transaction_details as detail')
                ->select(
                    'detail.*',
                    'head.Description',
                    'head.code',
                    'head.reate_eur',
                    'head.date_paid',
                    'categories.name as nama_kategori'
                )
                ->join('transaction_headers as head', 'detail.transaction_id', '=', 'head.id')
                ->join('ms_categories as categories', 'detail.transaction_category_id', '=', 'categories.id')
                ->where('head.date_paid', '>=', $start_date)
                ->where('categories.name', $nama)
                ->paginate(5);
            return view('admin.rekap', compact('data'));
        } else {
            $data = DB::table('transaction_details as detail')
                ->select(
                    'detail.*',
                    'head.Description',
                    'head.code',
                    'head.rate_eur',
                    'head.date_paid',
                    'categories.name as nama_kategori'
                )
                ->join('transaction_headers as head', 'detail.transaction_id', '=', 'head.id')
                ->join('ms_categories as categories', 'detail.transaction_category_id', '=', 'categories.id')
                ->paginate(5);
            return view('admin.rekap', compact('data'));
        }
    }

    public function tambah()
    {
        return view('admin.create');
    }
}
