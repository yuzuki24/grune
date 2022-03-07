@extends('companies.layout')

@section('content')

<div class="container small">
    <h1>Company Add Page</h1>
    <form action="{{ route('companies.store') }}" method="POST">
    @csrf
      <fieldset>
          <div class="form-group">
              <label for="companies_name">{{ __('Name') }}<span class="badge badge-danger ml-2">{{ __('Required') }}</span></label>
              <input type="text" class="form-control" name="name" id="companies_name">
          </div>
          <div class="form-group">
            <label for="companies_email">{{ __('Email') }}<span class="badge badge-danger ml-2">{{ __('Required') }}</span></label>
            <input type="text" class="form-control" name="email" id="companies_email">
        </div>
        <div id="app">
            <div class="form-group">
                <label for="companies_postcode">{{ __('Postcode') }}<span class="badge badge-danger ml-2">{{ __('Required') }}</span></label>
                <input type="text" class="form-control" name='postcode' v-model="postcode" id="companies_postcode">
                <button type="button" @click="onClick">Search</button>
            </div>
            <div class="form-group">
                <span class="badge badge-danger ml-2">{{ __('Required') }}</span>
                {{ Form::select('prefecture', $prefectures, null, ['v-model' => 'prefecture_id', 'name'=>'prefecture_id']) }}

            </div>
            <div class="form-group">
                <label for="companies_city">{{ __('City') }}<span class="badge badge-danger ml-2">{{ __('Required') }}</span></label>
                <input type="text" class="form-control" name="city" v-model="city" id="companies_city">
            </div>
            <div class="form-group">
                <label for="companies_local">{{ __('Local') }}<span class="badge badge-danger ml-2">{{ __('Required') }}</span></label>
                <input type="text" class="form-control" name="local" v-model="local" id="companies_local">
            </div>
        </div>
        <div class="form-group">
            <label for="companies_street_address">{{ __('StreetAddress') }}<span class="badge badge-danger ml-2"></span></label>
            <input type="text" class="form-control" name="street_address" id="companies_street_address">
        </div>

        <div class="form-group">
            <label for="companies_business_hour">{{ __('Business Hour') }}<span class="badge badge-danger ml-2"></span></label>
            <input type="text" class="form-control" name="business_hour" id="companies_business_hour">
        </div>
        <div class="form-group">
            <label for="companies_regular_holiday">{{ __('Regular Holiday') }}<span class="badge badge-danger ml-2"></span></label>
            <input type="text" class="form-control" name="regular_holiday" id="companies_regular_holiday">
        </div>
        <div class="form-group">
            <label for="companies_phone">{{ __('Phone') }}<span class="badge badge-danger ml-2"></span></label>
            <input type="text" class="form-control" name="phone" id="companies_phone">
        </div>
        <div class="form-group">
            <label for="companies_fax">{{ __('Fax') }}<span class="badge badge-danger ml-2"></span></label>
            <input type="text" class="form-control" name="fax" id="companies_fax">
        </div>
        <div class="form-group">
            <label for="companies_url">{{ __('Url') }}<span class="badge badge-danger ml-2"></span></label>
            <input type="text" class="form-control" name="url" id="companies_url">
        </div>
        <div class="form-group">
            <label for="companies_license_number">{{ __('Licence number') }}<span class="badge badge-danger ml-2"></span></label>
            <input type="text" class="form-control" name="license_number" id="companies_license_number">
        </div>
        <div class="form-group">
            <label for="companies_image">{{ __('Image') }}<span class="badge badge-danger ml-2">{{ __('Required') }}</span></label>
            <form action="{{ route('first') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image" id="companies_image">
                {{-- @if($user->image == null)
                <img src="/src/public/img/no-image/no-image.jpg">
                @else
                <img src="/storage/{{$user->image}}">
                @endif --}}
            </form>
        </div>
        <div style="display: flex; justify-content: space-between;">
            <a href="{{ route('companies.index') }}" class="btn btn-outline-secondary" role="button">
                <i class="fa fa-reply mr-1" aria-hidden="true"></i>{{ __('企業一覧へ戻る') }}
            </a>
            <button type="submit" class="btn btn-success">
                {{ __('Submit') }}
            </button>
        </div>
    </fieldset>
    </form>
</div>



@endsection
