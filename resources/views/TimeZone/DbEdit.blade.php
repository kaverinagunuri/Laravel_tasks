   
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

                <td>
                    <input type="text" value="{{$edit}}" readonly name="Id"/>   
                </td>
                <td>
                    <input type="text"  name="Name"/> 
                </td>
                <td>
                    <input type="text"   name="Offset"/>
                </td>
                <td>
                    <input type="time"  name="Time" />
                </td>
                <th>
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Save</button>
                </th></tr>
        </table>

    </form>  

    @endsection

</section>