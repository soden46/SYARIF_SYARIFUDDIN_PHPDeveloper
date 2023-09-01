<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\transaction_detail;
use App\Models\transaction_header;
use App\Models\ms_caregory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index(Request $request)
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
            return view('admin.list', compact('data'));
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
            return view('admin.list', compact('data'));
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
            return view('admin.list', compact('data'));
        } elseif (empty($request["start_date"]) && empty($request["end_date"]) && !empty($request["nama"])) {
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
                ->where('categories.name', $nama)
                ->paginate(5);
            return view('admin.list', compact('data'));
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
            return view('admin.list', compact('data'));
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
            return view('admin.list', compact('data'));
        }
    }
    public function create()
    {
        return view('admin.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Description'     => 'required',
            'code'     => 'required',
            'rate_eur'   => 'required',
            'date_paid'   => 'required',
        ]);

        transaction_header::create([
            'Description' => $request->Description,
            'code' => $request->code,
            'rate_eur' => $request->rate_eur,
            'date_paid' => $request->date_paid
        ]);

        $idtrx = transaction_header::where('Description', $request->Description)->value('id');
        if (isset($request->value_idr1)) {
            transaction_detail::create([
                'transaction_id' => $idtrx,
                'transaction_category_id' => 1,
                'name' => $request->transaksi_kategori1,
                'value_idr' => $request->value_idr1
            ]);
        }

        if (isset($request->value_idr2)) {
            transaction_detail::create([
                'transaction_id' => $idtrx,
                'transaction_category_id' => 2,
                'name' => $request->transaksi_kategori2,
                'value_idr' => $request->value_idr1
            ]);
        }
        return redirect()->back()->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show(Request $request, $id)
    {
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
            ->where('detail.id', '=', $id)
            ->first();
        return view('admin.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'Description'     => 'required',
            'code'     => 'required',
            'rate_eur'   => 'required',
            'date_paid'   => 'required',
        ]);
        $detailid = transaction_detail::findOrFail($id)->first();

        transaction_header::where('id', $detailid->transaction_id)->update([
            'Description' => $request->Description,
            'code' => $request->code,
            'rate_eur' => $request->rate_eur,
            'date_paid' => $request->date_paid
        ]);

        $idtrx = transaction_header::where('Description', $request->Description)->value('id');
        if (isset($request->value_idr1)) {
            transaction_detail::findOrFail($id)->update([
                'transaction_id' => $idtrx,
                'transaction_category_id' => 1,
                'name' => $request->transaksi_kategori1,
                'value_idr' => $request->value_idr1
            ]);
        }

        if (isset($request->value_idr2)) {
            transaction_detail::findOrFail($id)->update([
                'transaction_id' => $idtrx,
                'transaction_category_id' => 2,
                'name' => $request->transaksi_kategori2,
                'value_idr' => $request->value_idr1
            ]);
        }
        return redirect()->back()->with('success', 'Data Berhasil Diupdate');
    }

    public function destroy($id)
    {
        $data = transaction_detail::findOrFail($id)->first();
        $data->delete();
        return redirect()->back()->with('success', 'Data Berhasil Dihapus');
    }
}
