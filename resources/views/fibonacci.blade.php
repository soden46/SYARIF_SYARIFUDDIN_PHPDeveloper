@extends('fibtheme',[
'title' => 'PENJUMLAHAN DERET FIBONACCI',
])
@section('content')
<div class="d-flex justify-content-center">
    <form action="{{route('fib')}}" method="GET">
        @csrf
        <h3>PENJUMLAHAN DERET FIBONACCI</h3>
        <br>
        <div class="form-group row">
            <div class="container mb-3">
                <div class="form-group row">
                    <label for="n1" class="col-sm-2 col-form-label">Angka Pertama</label>
                    <div class="col-sm-10">
                        @if(isset($n1))
                        <input type="number" class="form-control" id="n1" name="n1" value="{{old($n1)}}">
                        @else
                        <input type="number" class="form-control" id="n1" name="n1">
                        @endif
                    </div>
                    <label for="n1" class="col-sm-2 col-form-label">Angka Kedua</label>
                    <div class="col-sm-10">
                        @if(isset($n2))
                        <input type="number" class="form-control" id="n2" name="n2" value="{{old($n2)}}">
                        @else
                        <input type="number" class="form-control" id="n2" name="n2">
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        @if(isset($fibo))
                        <label class="col-sm-2 col-form-label">Hasil</label>
                        @foreach($fibo as $fib)
                        {{$fib}}
                        @endforeach
                        @else
                        <textarea class="form-control" id="fibo" name="fibo"></textarea>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary ml-3 float-right" type="submit">Hitung</button>
        <a href="/" type="button" class="btn btn-danger">Kembali Ke Homepage</a>
    </form>
</div>
@endsection