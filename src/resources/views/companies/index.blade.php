@extends('layouts.app')

@section('content')
<h1>Companies</h1>

<table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Postcode</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($companies as $company)
      <tr>
        <td>{{ $comanies->companies_name }}</td>
        <td>{{ $comanies->companies_email }}</td>
        <td>{{ $comanies->companies_postcode }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
