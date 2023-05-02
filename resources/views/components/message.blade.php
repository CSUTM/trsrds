@if (session()->has('message'))
    <div class="bg-primary d-flex justify-content-center">
        <h5 class="text-white" x-data="{ message: '{{ session('message') }}' }" x-text="message" x-init="setTimeout(() => message = false, 3000)" x-show="message"> </h5>
    </div>
@endif

{{-- @if (session()->has('message'))
<?php
//  echo '<script type="text/javascript">', 'closeMessage();', '</script>'; 
 ?>
<div class="pop-message bg-primary d-flex justify-content-center">
    <h5 class="text-white">{{ session('message') }} </h5>
    
</div>
@endif --}}

{{-- <script>function closeMessage(){
    console.log('hello from close message');
    var message = document.querySelector('.pop-message');
    console.log(message);
        setTimeout(() => {
            message.style.display= 'none';
        }, 3000);

}</script> --}}
{{-- <h1>Hello world</h1> --}}
