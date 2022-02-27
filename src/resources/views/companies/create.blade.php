@extends('layouts.app')

@section('content')
<h1>Companies</h1>
@endsection
<div class="container small">
    <h1>Companies登録</h1>
    <form action="{{ route('companies.store') }}" method="POST">
    @csrf
      <fieldset>
          <div class="form-group">
              <label for="companies_name">{{ __('companiesの名称') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
              <input type="text" class="form-control" name="companies_name" id="companies_name">
          </div>
          <div class="form-group">
            <label for="companies_name">{{ __('companiesの名称') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <input type="text" class="form-control" name="companies_name" id="companies_name">
        </div>
        <div class="form-group">
            <label for="companies_name">{{ __('companiesの名称') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <input type="text" class="form-control" name="companies_name" id="companies_name">
        </div>
        <div class="form-group">
            <label for="companies_name">{{ __('companiesの名称') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <input type="text" class="form-control" name="companies_name" id="companies_name">
        </div>
        <div class="form-group">
            <label for="companies_name">{{ __('companiesの名称') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <input type="text" class="form-control" name="companies_name" id="companies_name">
        </div>
        <div class="form-group">
            <label for="companies_name">{{ __('companiesの名称') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <input type="text" class="form-control" name="companies_name" id="companies_name">
        </div>
        <div class="form-group">
            <label for="companies_name">{{ __('companiesの名称') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <input type="text" class="form-control" name="companies_name" id="companies_name">
        </div>
        <div class="form-group">
            <label for="companies_name">{{ __('companiesの名称') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <input type="text" class="form-control" name="companies_name" id="companies_name">
        </div>
        <div class="form-group">
            <label for="companies_name">{{ __('companiesの名称') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <input type="text" class="form-control" name="companies_name" id="companies_name">
        </div>
        <div class="form-group">
            <label for="companies_name">{{ __('companiesの名称') }}<span class="badge badge-danger ml-2">{{ __('必須') }}</span></label>
            <input type="text" class="form-control" name="companies_name" id="companies_name">
        </div>

          <div class="d-flex justify-content-between pt-3">
              <a href="{{ route('companies.index') }}" class="btn btn-outline-secondary" role="button">
                  <i class="fa fa-reply mr-1" aria-hidden="true"></i>{{ __('一覧画面へ') }}
              </a>
              <button type="submit" class="btn btn-success">
                  {{ __('登録') }}
              </button>
          </div>
      </fieldset>
    </form>
  </div>


<a href="{{ route('companies.create') }}">companies</a>

