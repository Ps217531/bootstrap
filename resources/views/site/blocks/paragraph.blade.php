@php
    $align = $block->input('variable_image_alignment');
    $size = $block->input('variable_size');
    $heading = $block->input('heading-text');
    $color = $block->input('color-text');
    $background = $block->input('background-text');
    $width = $block->input('width-text');
    $decoration = $block->input('decoration-text');
    $fontstyle = $block->input('font-style-text');
    $transform = $block->input('transform-text');
    $overflow = $block->input('overflow-text');
    $padding = $block->input('padding-text');
@endphp



<section>
   <figure class=" {{ $align }} {{ $size}} {{ $heading }} {{ $color }} {{ $background }} {{ $width }} {{ $fontstyle }} {{  $decoration }} {{  $transform }} {{  $overflow }} {{ $padding }}">

    <p>{!!$block->input('paragraph')!!}</p>


</figure>

</section>



