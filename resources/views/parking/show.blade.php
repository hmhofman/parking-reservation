@extends('layouts.parking')

@section('content')
<table>
        <thead>
            <tr>
                <th>id</th>
                <th>description</th>
                <!-- <th>location</th> -->
                <th>spaces</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$parking->id}}</td>
                <td>{{$parking->description}}</td>
                <td>{{$parking->spaces}}</td>
            </tr>
        </tbody>
    </table>

@endsection