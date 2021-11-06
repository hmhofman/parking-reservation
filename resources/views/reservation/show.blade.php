@extends('layouts.reservation')
<?php
    $reservation->loadMissing('parking');
?>
@section('content')
<table>
        <thead>
            <tr>
            <th>id</th>
                <th>License Plate</th>
                <th>Parking</th>
                <th>Arrival</th>
                <th>Departure</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <!-- <?php // dd($reservation); ?> -->
            <tr>
                <td>{{$reservation->id}}</td>
                <td>{{$reservation->license_plate}}</td>
                <td>{{$reservation->parking->description}}</td>
                <td>{{$reservation->arrival}}</td>
                <td>{{$reservation->departure}}</td>
                <td>{{$reservation->isPaid ? 'Yes' : 'No' }}</td>
            </tr>
        </tbody>
    </table>
    <a href="/reservation/{{$reservation->id}}/edit">Edit</a>
@endsection