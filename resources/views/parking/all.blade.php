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
            @foreach($parkings as $parking)
            <tr>
                <td>{{$parking->id}}</td>
                <td>{{$parking->description}}</td>
                <td>{{$parking->spaces}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection

@section('pageTitle')
    Available parkings
@endsection
