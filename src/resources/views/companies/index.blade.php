@extends('layouts.app')

@section('content')
<h1>Companies</h1>

<table>
    <a href="{{ route('companies_edit') }}?id={{ $companies->id }}">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Postcode</th>
        <th>Prefecture</th>
        <th>Address</th>
        <th>Updated At<th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($companies as $company)
      <tr>
        <td>{{ $company->name }}</td>
        <td>{{ $company->email }}</td>
        <td>{{ $company->postcode }}</td>
        <td>{{ $companies->prefecture }}</td>
        <td>{{ $companies->address }}</td>
        <td>{{date('Y/m/d', $timestamp)}}</td>
      </tr>

      <a href="{{ route('companies.create') }}">{{ __('新規作成') }}</a>

      @endforeach
    </tbody>
  </table>
@endsection
