@extends('layouts.main')

@section('content')
  <main class="container">
    <h1>home</h1>
    <table class="table table-dark table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Country</th>
          <th scope="col">City</th>
          <th scope="col">Hotel</th>
          <th scope="col">Price per night</th>
          <th scope="col">Is available</th>
          <th scope="col">Flight included</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($voyages as $voyage)
          <tr>
            <th scope="row">{{ $voyage->id }}</th>
            <td>{{ $voyage->country }}</td>
            <td>{{ $voyage->city }}</td>
            <td>{{ $voyage->hotel }}</td>
            <td>{{ $voyage->price_per_night }}</td>
            <td>{{ $voyage->is_available }}</td>
            <td>{{ $voyage->flight_included }}</td>
          </tr>
         @endforeach
      </tbody>
    </table>
  </main>
@endsection