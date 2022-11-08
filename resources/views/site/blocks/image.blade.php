@php
$align = $block->input('variable_image_alignment');
$variable_size = $block->input('variable_size');
$image_size = $block->input('image_size');
$image_border = $block->input('image_border');
$border_color = $block->input('border_color');
@endphp

<figure class="{{ $align }}  ">
    <img class="{{ $variable_size }} {{ $image_size }} {{ $image_border }} {{ $border_color}}" src="{!!$block->image('variable_image', 'default')!!}" />
</figure>