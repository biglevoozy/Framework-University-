@extends('layouts.app')

@section('isActive', 'home')

@section('title', 'Home')

@section('content')


<div class="w-3/4 pt-20 pb-2 flex flex-col items-center m-auto">
    <h2 id="typed-text" class="text-2xl md:text-4xl text-center"></h2>
    <p class="text-2xl text-center mt-16">It's your space for writing tasks for your group!<br>
        Be better and more productive.</p>
    </p>

    <div class="w-2/3 pt-10 mb-4 flex flex-col items-center">
        <h1 class="text-2xl text-center pb-2">Last recent task:</h1>
        <x-task :task="$task" />
    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.1.0/typed.umd.js"
    integrity="sha512-+2pW8xXU/rNr7VS+H62aqapfRpqFwnSQh9ap6THjsm41AxgA0MhFRtfrABS+Lx2KHJn82UOrnBKhjZOXpom2LQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>

<script>
    let type = new Typed('#typed-text', {
        strings: ['We glad that you chose us!', 'We are here only for your productivity!', 'Be ready to shake the world with your power!'],
        typeSpeed: 200,
        loop: true,
        showCursor: false
    })
</script>

@endsection