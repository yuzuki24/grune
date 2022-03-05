@extends('layouts.app')

@section('content')

<div class="container small">
    <h2>企業情報編集</h2>
    <div>
        <form action='{{ route("companies.store", $company->id )}}' method='post'>
            @csrf
            <fieldset>
                <div class="form-group">
                    <label for="companies_name">{{ __('Name') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                    <input type="text" class="form-control" name="name" id="companies_name" value='{{ $company->name }}'>
                </div>
                <div class="form-group">
                    <label for="companies_email">{{ __('Email') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                    <input type="text" class="form-control" name="email" id="companies_email" value='{{ $company->email }}'>
                </div>
                <div class="form-group">
                    <label for="companies_postcode">{{ __('Postcode') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                    <input type="text" class="form-control" name="postcode" id="companies_postcode" value='{{ $company->postcode }}'>
                </div>
                <div class="form-group">
                    {{-- {{ Form::select('prefecture', $prefectures, $company->prefecture, ['name' => 'prefecture_id']) }} --}}
                </div>
                <div class="form-group">
                    <label for="companies_city">{{ __('City') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                    <input type="text" class="form-control" name="city" id="companies_city" value='{{ $company->city }}'>
                </div>
                <div class="form-group">
                    <label for="companies_local">{{ __('Local') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                    <input type="text" class="form-control" name="local" id="companies_local" value='{{ $company->local }}'>
                </div>
                <div class="form-group">
                    <label for="companies_street_address">{{ __('StreetAddress') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                    <input type="text" class="form-control" name="street_address" id="companies_street_address" value='{{ $company->street_address }}'>
                </div>
                <div class="form-group">
                    <label for="companies_business_hour">{{ __('Business Hour') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                    <input type="text" class="form-control" name="business_hour" id="companies_business_hour" value='{{ $company->business_hour }}'>
                </div>
                <div class="form-group">
                    <label for="companies_regular_holiday">{{ __('Regular Holiday') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                    <input type="text" class="form-control" name="regular_holiday" id="companies_regular_holiday" value='{{ $company->regular_holiday }}'>
                </div>
                <div class="form-group">
                    <label for="companies_phone">{{ __('Phone') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                    <input type="text" class="form-control" name="phone" id="companies_phone" value='{{ $company->phone }}'>
                </div>
                <div class="form-group">
                    <label for="companies_fax">{{ __('Fax') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                    <input type="text" class="form-control" name="fax" id="companies_fax" value='{{ $company->fax }}'>
                </div>
                <div class="form-group">
                    <label for="companies_url">{{ __('Url') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                    <input type="text" class="form-control" name="url" id="companies_url" value='{{ $company->url }}'>
                </div>
                <div class="form-group">
                    <label for="companies_license_number">{{ __('Licence number') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                    <input type="text" class="form-control" name="license_number" id="companies_license_number" value='{{ $company->license_number }}'>
                </div>
                <div class="form-group">
                    <label for="companies_image">{{ __('Image') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
                    <input type="text" class="form-control" name="image" id="companies_image" value='{{ $company->image }}'>
                </div>
                <div style="display: flex; justify-content: space-between;">
                    <a href="{{ route('companies.index') }}" class="btn btn-outline-secondary" role="button">
                        <i class="fa fa-reply mr-1" aria-hidden="true"></i>{{ __('企業一覧へ戻る') }}
                    </a>
                    <button type="submit" class="btn btn-success">
                        {{ __('編集') }}
                    </button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection
