@extends('dashboard',[
'title' => 'LIST DATA TRANSAKSI',
])
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">LIST DATA TRANSAKSI</h6>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
    </div>
    <div class="card-body">
        <div class="row justify-content-end">
            <form action="/rekap" method="GET" class="d-flex justify-content-end px-2">
                <span>Filter</span>
                <div class="form-row px-2">
                    <input type="date" class="form-control col-3 px-4 start_date" name="start_date" id="start_date" value="{{old('start_date')}}">
                    <div class="px-2">
                        <span> S/D </span>
                    </div>
                    <input type="date" class="form-control col-3 -4 end_date" name="end_date" id="end_date">
                    <div class="px-2"></div>
                    <input type="text" class="form-control col-3 -4 end_date" name="nama" id="nama" placeholder="Kategori">
                    <p></p>
                    <div class="px-2">
                        <button class="btn btn-primary" type="submit">Pilih</button>
                    </div>
                </div>
            </form>
        </div>
        </br>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" name="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Kategori</th>
                        <th>Nominal</th>
                    </tr>
                </thead>
                @foreach ($data as $trx)
                <tbody>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $trx->date_paid }}</td>
                    <td>{{ $trx->nama_kategori }}</td>
                    <td>{{ $trx->value_idr }}</td>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex">
            {!! $data->links() !!}
        </div>
    </div>
</div>
<script type="text/javascript">
    var minDate, maxDate;

    // Custom filtering function which will search data in column four between two values
    $.fn.dataTable.ext.search.push(
        function(settings, data, dataIndex) {
            var min = minDate.val();
            var max = maxDate.val();
            var date = new Date(data[4]);

            if (
                (min === null && max === null) ||
                (min === null && date <= max) ||
                (min <= date && max === null) ||
                (min <= date && date <= max)
            ) {
                return true;
            }
            return false;
        }
    );

    $(document).ready(function() {
        // Create date inputs
        minDate = new DateTime($('#min'), {
            format: 'yyyy-mm-dd'
        });
        maxDate = new DateTime($('#max'), {
            format: 'yyyy-mm-dd'
        });

        // DataTables initialisation
        var table = $('#dataTable').DataTable();

        // Refilter the table
        $('#min, #max').on('change', function() {
            table.draw();
        });
    });

    //datepicker
    $(function() {
        $(".datepicker").datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true,
        });
    });
</script>
@endsection