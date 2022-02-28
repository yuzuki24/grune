@extends('...layouts.layout')

@section('companies_edit')
    投稿編集<br>

    <form action='{{ route("companies_update",$companies -> id )}}' method='post'>
        @csrf
            Name:<input type='text' name='name' value='{{ $companies->name }}'><br>
            Email:<input type='text' name='email' value='{{ $companies->email }}'><br>
            Postcode:<input type='text' name='postcode' value='{{ $companies->postcode }}'><br>
            Prefecture:<input type='text' name='prefecture_id' value='{{ $companies->prefecture }}'><br>
            Address:<input type='text' name='street_address' value='{{ $companies->address }}'><br>

    </form>
@endsection
