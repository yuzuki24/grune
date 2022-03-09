@extends('companies.layout')

@section('content')
<h1>Companies</h1>
<div style="display:flex; justify-content:center;">
    <div style="width:1080px;">
        <div style="display:flex; justify-content:end;">
            <a href="{{ route('companies.create') }}">{{ __('新規作成') }}</a>
        </div>
        <table style="width:1080px">
            <thead>
                <tr>
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
                        <td style="padding: 5px;">{{ $company->name }}</td>
                        <td style="padding: 5px;">{{ $company->email }}</td>
                        <td style="padding: 5px;">{{ $company->postcode }}</td>
                        <td style="padding: 5px;">{{ $prefectures[$company->prefecture_id] }}</td>
                        <td style="padding: 5px;">{{ $company->city.$company->local.$company->street_address }}</td>
                        <td style="padding: 5px;">{{ $company->updated_at->format('Y/m/d') }}</td>
                        <td style="padding: 5px;">
                            <a href="{{ route('companies.edit', $company->id) }}">Edit</a>
                            <form action="{{ route('companies.destroy', $company->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type='submit'>Delete</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
{{-- <script>
    //custom max min header filter
var minMaxFilterEditor = function(cell, onRendered, success, cancel, editorParams){

var end;

var container = document.createElement("span");

//create and style inputs
var start = document.createElement("input");
start.setAttribute("type", "number");
start.setAttribute("placeholder", "Min");
start.setAttribute("min", 0);
start.setAttribute("max", 100);
start.style.padding = "4px";
start.style.width = "50%";
start.style.boxSizing = "border-box";

start.value = cell.getValue();

function buildValues(){
    success({
        start:start.value,
        end:end.value,
    });
}

function keypress(e){
    if(e.keyCode == 13){
        buildValues();
    }

    if(e.keyCode == 27){
        cancel();
    }
}

end = start.cloneNode();
end.setAttribute("placeholder", "Max");

start.addEventListener("change", buildValues);
start.addEventListener("blur", buildValues);
start.addEventListener("keydown", keypress);

end.addEventListener("change", buildValues);
end.addEventListener("blur", buildValues);
end.addEventListener("keydown", keypress);


container.appendChild(start);
container.appendChild(end);

return container;
}

//custom max min filter function
function minMaxFilterFunction(headerValue, rowValue, rowData, filterParams){
//headerValue - the value of the header filter element
//rowValue - the value of the column in this row
//rowData - the data for the row being filtered
//filterParams - params object passed to the headerFilterFuncParams property

    if(rowValue){
        if(headerValue.start != ""){
            if(headerValue.end != ""){
                return rowValue >= headerValue.start && rowValue <= headerValue.end;
            }else{
                return rowValue >= headerValue.start;
            }
        }else{
            if(headerValue.end != ""){
                return rowValue <= headerValue.end;
            }
        }
    }

return true; //must return a boolean, true if it passes the filter.
}


var table = new Tabulator("#example-table", {
height:"311px",
layout:"fitColumns",
columns:[
    {title:"Name", field:"name", width:150, headerFilter:"input"},
    {title:"Email", field:"progress", width:150, formatter:"progress", sorter:"number", headerFilter:minMaxFilterEditor, headerFilterFunc:minMaxFilterFunction, headerFilterLiveFilter:false},
    {title:"Postcode", field:"gender", editor:"select", editorParams:{values:{"male":"Male", "female":"Female"}}, headerFilter:true, headerFilterParams:{values:{"male":"Male", "female":"Female", "":""}}},
    {title:"Prefecture", field:"rating", editor:"star", hozAlign:"center", width:100, headerFilter:"number", headerFilterPlaceholder:"at least...", headerFilterFunc:">="},
    {title:"Address", field:"col", editor:"input", headerFilter:"select", headerFilterParams:{values:true}},
    {title:"Updated At", field:"dob", hozAlign:"center", sorter:"date",  headerFilter:"input"},
    {title:"Action", field:"car", hozAlign:"center", formatter:"tickCross",  headerFilter:"tickCross",  headerFilterParams:{"tristate":true},headerFilterEmptyCheck:function(value){return value === null}},
],
});
</script> --}}
<div id = "example-table"></div>
@endsection
