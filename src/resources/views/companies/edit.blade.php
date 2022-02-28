@extends('...layouts.layout')

@section('companies_edit')
    投稿編集<br>

    <form action='{{ route('companies_update') }}' method='post'>
        {{ csrf_field() }}
            <input type='hidden' name='id' value='{{ $companies->id }}'><br>
            id:{{ $companies->user_id }}<br>
            Name:<input type='text' name='title' value='{{ $companies->name }}'><br>
            Email:<input type='text' name='email' value='{{ $companies->email }}'><br>
            Postcode:<input type='text' name='postcode' value='{{ $companies->postcode }}'><br>
            Prefecture:<input type='text' name='prefecture_id' value='{{ $companies->prefecture }}'><br>
            Address:<input type='text' name='street_address' value='{{ $companies->address }}'><br>
            UpDated At:<input type='text' name='timestanp' value='{{ $companies->timestanp() }}'><br>
            <input type='submit' value='投稿'>

    </form>
@endsection
