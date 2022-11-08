@php 
@endphp

<section>
    <figure class="">

        <br>
        <input type="text" value="{!! $block->input('name') !!}"  class="form-control" placeholder="Name" aria-label="" aria-describedby="basic-addon1"></input>
        <br>
        <input type="text" value="{!! $block->input('email') !!}"  class="form-control" placeholder="Email" aria-label="" aria-describedby="basic-addon1"></input>
        <br>
        <input type="text" value="{!! $block->input('phone') !!}"  class="form-control" placeholder="Phone-number" aria-label="" aria-describedby="basic-addon1"></input>
        <br>
        <textarea type="text" value="{!! $block->input('message') !!}"  class="form-control" placeholder="Message" aria-label="" aria-describedby="basic-addon1"></textarea>
    </figure>
</section>