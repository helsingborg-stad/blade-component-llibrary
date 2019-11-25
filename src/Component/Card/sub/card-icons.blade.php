@foreach ($icons as $indexKey => $icon)
    @button([
        'isIconButton' =>  true,
        'icon' => [
            'name' => $icon["name"],
            'color' => $icon["color"],
            'size' => $icon["size"],
        ],
        'classList' => $icon["classList"],
        'background' => false
    ])
    @endbutton
@endforeach