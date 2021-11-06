<form>
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
    <script>
        document.querySelector('#reservation-parking').addEventListener('change', (event) => {
            const option = event.target.options[event.target.selectedindex];
            document.querySelector('#reservation-spots').attribute('max', option.data.spots)
        });
    </script>
</form>