<form>
    @if ($parking && $parking->id)
    <input type="hidden" name='id' value='{{parking->id}}' />
    @endif
    <div class="form-control">
        <label for="parking-description">Description</label>
        <input type="text" name="descritpion" id="parking-description" value="{{$parking ? $parking->description : ''}}" />
    </div>
    <div class="form-control">
        <label for="parking-spaces">Spaces</label>
        <input type="number" steps='1' name="spaces" id="parking-spaces" value="{{$parking ? $parking->spaces : ''}}" />
    </div>
</form>