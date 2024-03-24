@extends('laout.main')

@section('tittle')
List Car
@endsection

@section('content')
<h1>List Car</h1>
<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($Car as $mobil)
    <div class="col">
        <div class="card h-100">
            <img src="assets/{{$mobil['Merk']}}.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$mobil['Merk']}}</h5>
                <p class="card-text">{{$mobil['Kode']}},{{$mobil['Tipe']}},{{$mobil['Transmisi']}}</p>
                <a href="Car/Detail/{{$mobil['Kode']}}"><button type="button" class="btn btn-primary">Detail</button></a>
            </div>
        </div>
    </div>
    @endforeach
</div>



@endsection