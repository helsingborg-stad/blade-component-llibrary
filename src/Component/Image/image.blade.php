<!-- image.blade.php -->
<figure id="{{ $id }}" class="{{ $class }}" {!! $attribute !!}>
    @if($src) 
        <img src="{{$src}}" alt="{{$alt}}" class="{{$baseClass}}__image @if($modalId){{$baseClass}}__modal @endif" @if($modalId) data-open="{{$modalId}}" @endif />
        @if($caption)
            <figcaption class="{{$baseClass}}__caption">{{$caption}}</figcaption>
        @endif
    @else
        @if($placeholderText)
            <div class="{{$baseClass}}__placeholder" aria-label="{{$alt}}">{{ $placeholderText }}</div>
        @endif
    @endif
</figure>