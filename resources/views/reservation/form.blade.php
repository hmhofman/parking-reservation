<form id="form-reservation" method="post">
    <!-- fill the form attributes fort a fall-back using html -->
    @if ($reservation && $reservation->id)
    <input type="hidden" name='id' value='{{$reservation->id}}' />
    @endif

    <div class="form-control">
        <label for="reservation-license_plate">license_plate</label>
        <input type="text" name="license_plate" id="reservation-license_plate" value="{{$reservation ? $reservation->license_plate : ''}}" />
    </div>

    <div class="form-control">
        <label for="reservation-parking">Parking</label>
        <select name="parking_id" id="reservation-parking">
            @foreach($parkings as $parking)
            <option 
                value="$parking->id" 
                data-spots="{{$parking->spaces}}"
                @if ($parking->id == $reservation->parking_id) 
                    selected="selected"
                @endif 
            >{{$parking->description}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-control">
        <label for="reservation-arrival">Arrival</label>
        <input type="date" name="arrival-date" id="reservation-arrival" value="{{$reservation ? date('Y-m-d', strtotime($reservation->arrival)) : ''}}" />
        <input type="time" name="arrival-time" id="reservation-arrival-time" value="{{$reservation ? date('H:i', strtotime($reservation->arrival)) : ''}}" />
    </div>
    <div class="form-control">
        <label for="reservation-departure">Departure</label>
        <input type="date" name="departure-date" id="reservation-departure" value="{{$reservation ? date('Y-m-d', strtotime($reservation->departure)) : ''}}" />
        <input type="time" name="departure-time" id="reservation-departure-time" value="{{$reservation ? date('H:i', strtotime($reservation->departure)) : ''}}" />
    </div>
    <div class="form-control">
        <label for="reservation-spot">Spot</label>
        <input type="number" step="1" min="1" max="1" name="spot" id="reservation-spots" value="$reservation ? $reservation->spot : ''" />
    </div>
    <div class="form-control">
        <label for="reservation-paid">Paid</label>
        <checkbox name="paid" id="reservation-paid" 
        @if ($reservation->isPaid)
            checked="checked"
        @endif
        />
    </div>
    <input type="submit" value="submit">
    <input type="button" value="destroy" id="btnRM">
</form>
<script>
    (function() { // This does nothing, nearly limits the scope of variables
        
        const reservation = JSON.parse('{!! $reservation ? json_encode($reservation) : [] !!}');

        function fill() {
            const form = document.querySelector('#form-reservation');
            reservation.license_plate = form.license_plate;
            reservation.parking_id = form.parking_id;
            reservation.arrival = form.arrival;
            reservation.departure = form.departure;
            reservation.spot = form.spot;
            reservation.status = form.status;
        }
        document.querySelector('#reservation-parking').addEventListener('change', (event) => {
            const option = event.target.options[event.target.selectedindex];
            document.querySelector('#reservation-spots').attribute('max', option.data.spots)
        });
        document.querySelector('#form-reservation').onsubmit = () => {
            // instead of using html form, send through API
            fill();
            axios.put(`/api/v1/reservations/${reservation.id}`, reservation).then(() => {
                location.href = `/reservation/${reservation.id}`;
            });
        }
        document.querySelector('#btnRM').onsubmit = () => {
            // fill();
            axios.delete(`/api/v1/reservations/${reservation.id}`, reservation).then(() => {
                location.href = `/reservation/`;
            });
        }
    })();

</script>

