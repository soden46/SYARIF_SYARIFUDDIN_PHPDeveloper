@extends('dashboard',[
'title' => 'INPUT DATA TRANSAKSI',
])
@section('content')
<form action="{{route('list.store')}}" method="POST">
    @csrf
    @method('POST')
    <h3>INPUT DATA TRANSAKSI</h3>
    <br>
    @include('components.alert-dismissible')
    <div class="form-group row">
        <div class="container mb-3">
            <div class="row">
                <div class="col">
                    <div class="form-row">
                        <label for="Description">Description</label>
                        <div class="col">
                            <textarea class="form-control" id="Description" name="Description" rows="8"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col align-self-end">
                    <div class="form-group row">
                        <label for="code" class="col-sm-2 col-form-label">Code</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="code" name="code">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rate_eur" class="col col-form-label">Rate Euro</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="rate_eur" name="rate_eur">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date_paid" class="col col-form-label">Date Paid</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="date_paid" name="date_paid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <span> Data Transaksi</span>
                <div class="card mb-3">
                    <select class="form-control col-4 mb-3">
                        <option id="nama_kategori">Income</option>
                    </select>
                    <table class="table table-bordered" id="myTable1">
                        <thead>
                            <tr>
                                <th class="text-center1">Nama Transaksi</th>
                                <th class="text-center1">Nominal (IDR)</th>
                            </tr>
                        </thead>
                        <tbody id="tbody1">

                        </tbody>

                    </table>
                    <div class="col lg-3">
                        <button class="btn btn-md btn-primary ml-3 float-right" id="addBtn1" type="button">
                            Tambah
                        </button>
                    </div>
                </div>
                <div class="card mb-3">
                    <select class="form-control col-4 mb-3">
                        <option id="nama_kategori">Expense</option>
                    </select>
                    <table class="table table-bordered" id="myTable2">
                        <thead>
                            <tr>
                                <th class="text-center2">Nama Transaksi</th>
                                <th class="text-center2">Nominal (IDR)</th>
                            </tr>
                        </thead>
                        <tbody id="tbody2">

                        </tbody>

                    </table>
                    <div class="col lg-3">
                        <button class="btn btn-md btn-primary ml-3 float-right" id="addBtn2" type="button">
                            Tambah
                        </button>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary ml-3 float-right" type="submit">Simpan</button>
        </div>
    </div>
</form>
<script>
    $(document).ready(function() {

        // Denotes total number of rows
        var rowIdx = 0;

        // jQuery button click event to add a row
        $('#addBtn1').on('click', function() {

            // Adding a row inside the tbody.
            $('#tbody1').append(`<tr id="R${++rowIdx}">
             <td class="row-index text-center1">
             <input type="text" id="transaksi_kategori1" name="transaksi_kategori1"></input>
             </td>
              <td class="row-index text-center1">
             <input type="text" id="value_idr1" name="value_idr1"></input>
             </td>
              </tr>`);
        });
        // jQuery button click event to remove a row.
        $('#tbody1').on('click', '.remove', function() {

            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest('tr').nextAll();

            // Iterating across all the rows 
            // obtained to change the index
            child.each(function() {

                // Getting <tr> id.
                var id = $(this).attr('id');

                // Getting the <p> inside the .row-index class.
                var idx = $(this).children('.row-index').children('p');

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(1));

                // Modifying row index.
                idx.html(`Row ${dig - 1}`);

                // Modifying row id.
                $(this).attr('id', `R${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest('tr').remove();

            // Decreasing total number of rows by 1.
            rowIdx--;
        });
    });
    $(document).ready(function() {

        // Denotes total number of rows
        var rowIdx = 0;

        // jQuery button click event to add a row
        $('#addBtn2').on('click', function() {

            // Adding a row inside the tbody.
            $('#tbody2').append(`<tr id="R${++rowIdx}">
             <td class="row-index text-center1">
             <input type="text" id="transaksi_kategori2" name="transaksi_kategori2"></input>
             </td>
              <td class="row-index text-center1">
             <input type="text" id="value_idr2" name="value_idr2"></input>
             </td>
              </tr>`);
        });
        // jQuery button click event to remove a row.
        $('#tbody2').on('click', '.remove', function() {

            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest('tr').nextAll();

            // Iterating across all the rows 
            // obtained to change the index
            child.each(function() {

                // Getting <tr> id.
                var id = $(this).attr('id');

                // Getting the <p> inside the .row-index class.
                var idx = $(this).children('.row-index').children('p');

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(1));

                // Modifying row index.
                idx.html(`Row ${dig - 1}`);

                // Modifying row id.
                $(this).attr('id', `R${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest('tr').remove();

            // Decreasing total number of rows by 1.
            rowIdx--;
        });
    });
</script>
@endsection