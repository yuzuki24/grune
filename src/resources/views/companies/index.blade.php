@extends('companies.layout')

@section('content')


<h1>Companies</h1>

    <div style="display:flex; justify-content:center;">
        <div style="width:1080px;">
            <div style="display:flex; justify-content:end;">
                <a href="{{ route('companies.create') }}" class="btn btn-primary btn-lg">{{ __('Add Page') }}</a>

            </div>
            <div >
                <table id = "example-table" style="width:1080px">
                    <thead>
                        <tr>
                            <th style="padding: 5px;">Id</th>
                            <th style="padding: 5px;">Name</th>
                            <th style="padding: 5px;">Email</th>
                            <th style="padding: 5px;">Postcode</th>
                            <th style="padding: 5px;">Prefecture</th>
                            <th style="padding: 5px;">Address</th>
                            <th style="padding: 5px;">Updated At</th>
                            <th style="padding: 5px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($companies as $company)
                            <tr>
                                <form action="{{ route('companies.destroy', $company->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <!--<button type='submit'>Delete</button>-->
                                <td style="padding: 5px;">{{ $company->id }}</td>
                                <td style="padding: 5px;">{{ $company->name }}</td>
                                <td style="padding: 5px;">{{ $company->email }}</td>
                                <td style="padding: 5px;">{{ $company->postcode }}</td>
                                <td style="padding: 5px;">{{ $prefectures[$company->prefecture_id] }}</td>
                                <td style="padding: 5px;">{{ $company->city.$company->local.$company->street_address }}</td>
                                <td style="padding: 5px;">{{ $company->updated_at->format('Y/m/d') }}</td>
                                <td style="padding: 5px;">
                                    <a href="{{ route('companies.edit', $company->id) }}">Edit</a>


                                </td>

                                </form>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
                @foreach ($companies as $company)
                <script type="text/javascript">
                    let tableData = [id:"{{ $company->id }}", name:"{{ $company->name }}", email:"{{ $company->email }}", postcode:"{{ $company->postcode }}", prefecture:"{{ $prefectures[$company->prefecture_id] }}", street_address:"{{ $company->city.$company->local.$company->street_address }}", updated_at:"{{ $company->updated_at->format('Y/m/d') }}", action:"<a href="{{ route('companies.edit', $company->id) }}">Edit</a>"];

                    tableData.forEach(function(element){
                    console.log(element);
                    });


                    //custom max min header filter
                    var tableData = new Tabulator("#example-table", {

                        data:tableData,
                        height:"311px",
                        layout:"fitColumns",

    ]
                        columns:[
                            {title:"Id", field:"id", width:50, headerFilter:"input"},
                            {title:"Name", field:"name", width:100, headerFilter:"input", sorter:"string"},
                            {title:"Email", field: "email", width:150, headerFilter:"input"},
                            {title:"Postcode", field:"postcode", width:100, headerFilter:"input"},
                            {title:"Prefecture", field:"prefecture",width:100, headerFilter:"select"},
                            {title:"Address", field:"street_address", width:150, headerFilter:"input"},
                            {title:"Updated At", field:"updated_at", width:90, hozAlign:"center", sorter:"date",  headerFilter:"input"},
                            {title: "Action", field:"action"},

                            ],


                    });

                </script>
                @endforeach
            </div>
        </div>
    </div>




@endsection
