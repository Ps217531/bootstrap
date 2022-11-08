@php
    $align = $block->input('variable_image_alignment');
    $image_size = $block->input('image_size');
    $variable_size = $block->input('variable_size');

$image_border = $block->input('image_border');
$border_color = $block->input('border_color');

    $padding = $block->input('padding_text');
    $margin = $block->input('margin_text');
    $text_align = $block->input('text_alignment');
    $size = $block->input('variable_size');
    $heading = $block->input('heading-text');
    $color = $block->input('color-text');
    $background = $block->input('background-text');
    $width = $block->input('width-text');
    $decoration = $block->input('decoration-text');
    $fontstyle = $block->input('font-style-text');
    $transform = $block->input('transform-text');
    $overflow = $block->input('overflow-text');
@endphp

<section>
    <figure class="{{$align}}">
        <img class="{{$image_size}} {{ $variable_size }} {{ $image_border }} {{ $border_color }} " src="{!!$block->image('variable_image', 'default')!!}"/>
              
    </figure>
 </section>

<section>
    <figure class=" {{ $text_align }} {{ $size}} {{ $heading }} {{ $color }} {{ $width }} {{ $background }} {{ $fontstyle }} {{  $decoration }} {{  $transform }} {{  $overflow }} {{ $padding }}">

    <p class=" ">{!!$block->input('paragraph')!!}</p>

</figure>

</section>


