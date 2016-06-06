   
@extends('layouts.app')
@section('content')    
<section>

    <form action="{{URL::route('OnEditTable')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <table id="ViewTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th> Name</th>
                    <th>Offset</th>
                    <th>Time</th>

                </tr>
            </thead>
            <tr>
                @foreach($edit as $value)
                <td>
                    <input type="text" value="{{$value['Id']}}" readonly name="Id"/>   
                </td>
                <td>
                    <input type="text"  name="Name" value="{{$value['Name']}}"/> 
                </td>
                <td>
                    <input type="text"   name="Offset" value="{{$value['Offset']}}"/>
                </td>
                <td>
                    <input type="time"  name="Time" value="{{$value['Time']}}" />
                </td>
                <th>
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Save</button>
                </th>
                @endforeach
            </tr>
        </table>

    </form>  

    @endsection

</section>