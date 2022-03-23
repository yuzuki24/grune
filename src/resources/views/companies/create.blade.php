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
            <label for="companies_name">{{ __('Name') }}<span class="label label-danger label-required">Required</span></label>
            <input type="text" class="form-control" name="name" id="companies_name"><br>
            @if($errors->has('name'))
            <div class="error-txt">{{ $errors->first('name') }}</div>
            @endif
          </div>
          <div class="form-group">
            <label for="companies_email">{{ __('Email') }}<span class="label label-danger label-required">Required</span></label>
            <input type="text" class="form-control" name="email" id="companies_email">
            @if($errors->has('email'))
            <div class="error-txt">{{ $errors->first('email') }}</div>
            @endif
          </div>
        <div id="app">
            <div class="form-group">
                <label for="companies_postcode">{{ __('Postcode') }}<span class="label label-danger label-required">Required</span></label>
                <input type="text" class="form-control" name='postcode' v-model="postcode" id="companies_postcode" width="50px">
                <button type="button" class="btn btn-primary btn-lg" @click="onClick">Search</button>
                @if($errors->has('postcode'))
                <div class="error-txt">{{ $errors->first('postcode') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="companies_postcode">{{ __('Prefecture') }}<span class="label label-danger label-required">Required</span></label>
                {{ Form::select('prefecture', $prefectures, null, ['v-model' => 'prefecture_id', 'name'=>'prefecture_id']) }}
                @if($errors->has('prefecture'))
                <div class="error-txt">{{ $errors->first('prefecture') }}</div>
                @endif


            </div>
            <div class="form-group">
                <label for="companies_city">{{ __('City') }}<span class="label label-danger label-required">Required</span></label>
                <input type="text" class="form-control" name="city" v-model="city" id="companies_city">
                @if($errors->has('city'))
                <div class="error-txt">{{ $errors->first('city') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="companies_local">{{ __('Local') }}<span class="label label-danger label-required">Required</span></label>
                <input type="text" class="form-control" name="local" v-model="local" id="companies_local">
                @if($errors->has('local'))
                <div class="error-txt">{{ $errors->first('local') }}</div>
                @endif
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
            <label for="companies_image">{{ __('Image') }}<span class="label label-danger label-required">Required</span></label>

                <form action={{route('first')}} method="POST" enctype="multipart/form-data">

                    <img id="img_prv" src="{{ asset('img/no-image/no-image.jpg') }}">

                    <input id="img_upload" type="file" accept="image/*" name="image">
               </form>

               @if($errors->has('image'))
               <div class="error-txt">{{ $errors->first('image') }}</div>
               @endif



        </div>
        <div class="sub">
            <button type="submit" class="btn btn-success">
                {{ __('Submit') }}
            </button>
        </div>
    </fieldset>
    </form>
</div>

<script src="{{ asset('https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js') }}"></script>


<script>

    $('#img_upload').on('change', function (ev) {


        console.log("image is changed");

        var reader = new FileReader();

        var fileName = ev.target.files[0].name;

        reader.onload = function (ev) {
            $('#img_prv').attr('src', ev.target.result).css('width', '150px').css('height', '150px');
        }
        reader.readAsDataURL(this.files[0]);
    })
</script>



@endsection
