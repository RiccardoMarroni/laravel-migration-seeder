@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="container">
    <h1>Trains</h1>
    
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Azienda</th>
      <th scope="col">Stazione di partenza</th>
      <th scope="col">Stazione di arrivo</th>
      <th scope="col">Partenza</th>
      <th scope="col">Arrivo</th>
      <th scope="col">Numero treno</th>
      <th scope="col">Vagoni totali</th>
      <th scope="col">In ritardo</th>
      <th scope="col">Cancellato</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($trains as $train)
    <tr>
      <th scope="row">{{$train->id}}</th>
      <td>{{$train->company}}</td>
      <td>{{$train->start_station}}</td>
      <td>{{$train->end_station}}</td>
      <td>{{$train->departure}}</td>
      <td>{{$train->arrival}}</td>
      <td>{{$train->train_number}}</td>
      <td>{{$train->wagons}}</td>
      <td>{{$train->on_time}}</td>
      <td>{{$train->deleted}}</td>
    </tr>
    @endforeach
</table>
    
   
</section>

@endsection
