<!-- field.blade.php -->
<div id="{{ $id }}" class="{{$class}} c-field__{{$type}}">

    @if($icon)
        @icon($icon)
        @endicon
    @endif

    <input id="input_{{ $id }}"
           value="{{$value}}"
           {!! $attribute !!}
           @if($required)
               required
               data-required="1"
           @endif
           placeholder="{{$label}}"
    />
    <label class="c-field__text--label" for="input_{{ $id }}">{{$label}}</label>
    <div id="error_input_{{ $id }}_message" class="c-field__input-invalid-message">
        @icon([
            'icon' => 'error',
            'size' => 'sm'
        ])
        @endicon
        <span class="errorText"></span>
    </div>
</div>
