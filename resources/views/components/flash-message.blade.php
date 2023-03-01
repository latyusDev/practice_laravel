@if(session()->has('message'))
{{-- <div x-data="{show : true } " x-init="{setTimeout(()=>show = false, 3000)}"
    x-show = "show"
 class="fixed top-0  transform bg-laravel text-white px-48 ">
<p>
    {{session('message')}}
</p>
</div> --}}

<div
 class="modal fixed top-0  transform bg-laravel text-white px-48 ">
<p>
    {{session('message')}}
</p>
</div>

@endif
{{-- 
<script>
    const modal = document.querySelector('.modal')
    document.addEventListener('DOMContentLoaded',()=>{
        setTimeout(() => {
            modal.classList.add('d-none')
        }, 3000);
        
    })
</script> --}}
{{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quo soluta facere quisquam rem. Consectetur ad consequuntur repellendus optio sit voluptates nihil laudantium nemo, nesciunt architecto reiciendis amet quas molestiae. --}}