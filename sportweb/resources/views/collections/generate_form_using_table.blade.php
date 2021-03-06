<tr>
    <td class="text-center">
        <label name="{{$form_element['label_attribute_name']}}">
            {{$form_element['label_content']}}
        </label>
    </td>
    <td>
        <input
            id="{{$form_element['input_attribute_id']}}"
            type="{{$form_element['input_attribute_type']}}"
            name="{{$form_element['input_attribute_name']}}"
            value="{{$form_element['input_attribute_value']}}"
            class="form-control"
            placeholder="{{$form_element['input_attribute_placeholder']}}"
        >
        
        @if ($errors->has($form_element['input_attribute_name']))
            @foreach ($errors->get($form_element['input_attribute_name']) as $error_msg)
                <small class="text-danger">{{$error_msg}}</small><br>
            @endforeach
        @endif

        <small class="text-info" id="{{$form_element['info_attribute_id']}}">
            {{$form_element['info_content']}}
        </small>
    </td>
</tr>
               