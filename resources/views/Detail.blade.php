@extends('laout.main')

@section('tittle')
dashboard
@endsection

@section('content')
<h1>List Car</h1>
<div class="row row-cols-1 row-cols-md-3 g-4">

    <div class="col">
        <div class="card h-100">
            <img src="assets/{{$Detail['Merk']}}.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$Detail['Merk']}}</h5>
                <p class="card-text">kode:{{$Detail['Kode']}}</p>
                <p class="card-text">Tipe:{{$Detail['Tipe']}},</p>
                <p class="card-text">Transmisi:{{$Detail['Transmisi']}}</p>
                <p class="card-text">Deskripsi:{{$Detail['Deskripsi']}}</p>
                <a href="/Car"><button type="button" class="btn btn-primary">Back</button></a>
            </div>
        </div>
    </div>

</div>



@endsection