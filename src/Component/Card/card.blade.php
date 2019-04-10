<div class="c-card">
    @if($image)
    <img class="c-card__image" src="{{$image}}" alt="">
    @endif
    <div class="c-card__body">
        @if($title)
        <h4 class="c-card__title">{{$title}}</h4>
        @endif
        @if($content)
        <p class="c-card__text">{{$content}}</p>
        @endif

        @component_button(['href' => 'http://helsingborg.se/?variant=1', 'label' => "Button one", 'isOutlined' => true, 'isPrimary' => false])

        @component_button(['href' => 'http://helsingborg.se/?variant=2', 'label' => "Button two", 'isOutlined' => true, 'isPrimary' => true])

        @component_button(['href' => 'http://helsingborg.se/?variant=3', 'label' => "Button three", 'isOutlined' => false, 'isPrimary' => true])

        @component_table([
            'list' => [
                ['Hello', 'Hi!', 'Howdy'],
                ['Goodbye', 'Bye', 'See ya!']
            ],
            'headings' => ['Formal', 'Casual', 'Redneck'],
            'showFooter' => true,
            'isSmall' => true
        ])

    </div>
</div>
