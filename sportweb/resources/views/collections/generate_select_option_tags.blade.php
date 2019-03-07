@foreach ($options as $option_num => $option_val)
    @if ($option_num === $property)
        <option selected value={{$option_num}}>{{$option_val}}</option>
    @endif
    @if ($option_num !== $property)
        <option value={{$option_num}}>{{$option_val}}</option>
    @endif
@endforeach
