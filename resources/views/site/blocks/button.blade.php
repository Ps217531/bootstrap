@php
$align = $block->input('alignment');
$size = $block->input('size');
$color = $block->input('color');
$outline = $block->input('outline');


$width = $block->input('width');
@endphp

<section class="{{$width}}">
    <figure class="{{$align}}">
<input class="{{$color}} {{$outline}} {{$size}}" type="button" value="{!!$block->input('text')!!}">
</input>
    </figure>
</section>