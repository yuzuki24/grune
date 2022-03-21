@extends('companies.layout')

@section('content')

<div class="container small">
    <h1>Company Add Page</h1>
    <div class="back">
        <a href="{{ route('companies.index') }}" class="btn btn-outline-secondary" role="button">
            <i class="fa fa-reply mr-1" aria-hidden="true"></i>{{ __('Back') }}
        </a>
    </div>
    <form action="{{ route('companies.store') }}" method="POST">
    {{--@csrf--}}
      <fieldset>
          <div class="form-group">
              <label for="companies_name">{{ __('Name') }}<span class="badge bg-danger ml-2">{{ __('Required') }}</span></label>
              <input type="text" class="form-control" name="name" id="companies_name">
          </div>
          <div class="form-group">
            <label for="companies_email">{{ __('Email') }}<span class="badge bg-danger ml-2">{{ __('Required') }}</span></label>
            <input type="text" class="form-control" name="email" id="companies_email">
        </div>
        <div id="app">
            <div class="form-group">
                <label for="companies_postcode">{{ __('Postcode') }}<span class="badge bg-danger ml-2">{{ __('Required') }}</span></label>
                <input type="text" class="form-control" name='postcode' v-model="postcode" id="companies_postcode" width="50px">
                <button type="button" class="btn btn-primary btn-lg" @click="onClick">Search</button>
            </div>
            <div class="form-group">
                <label for="companies_postcode">{{ __('Prefecture') }}<span class="badge bg-danger ml-2">{{ __('Required') }}</span></label>
                {{ Form::select('prefecture', $prefectures, null, ['v-model' => 'prefecture_id', 'name'=>'prefecture_id']) }}

            </div>
            <div class="form-group">
                <label for="companies_city">{{ __('City') }}<span class="badge bg-danger ml-2">{{ __('Required') }}</span></label>
                <input type="text" class="form-control" name="city" v-model="city" id="companies_city">
            </div>
            <div class="form-group">
                <label for="companies_local">{{ __('Local') }}<span class="badge bg-danger ml-2">{{ __('Required') }}</span></label>
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
            <label for="companies_image">{{ __('Image') }}<span class="badge bg-danger ml-2">{{ __('Required') }}</span></label>

                <form action={{route('first')}} method="POST" enctype="multipart/form-data">

                    <img id="img_prv" src="{{ asset('img/no-image/no-image.jpg') }}">

                    <input id="img_upload" type="file" accept="image/*" name="image">
               </form>



        </div>
        <div class="sub">
            <button type="submit" class="btn btn-success">
                {{ __('Submit') }}
            </button>
        </div>
    </fieldset>
    </form>
</div>
<script>

    $('#img_upload').on('change', function (ev) {


        console.log("image is changed");

        const reader = new FileReader();

        const fileName = ev.target.files[0].name;

        reader.onload = function (ev) {
            $('#img_prv').attr('src', ev.target.result).css('width', '150px').css('height', '150px');
        }
        reader.readAsDataURL(this.files[0]);
    })
</script>



@endsection
