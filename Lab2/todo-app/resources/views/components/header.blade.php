@props([
    'isActive' => ''
])

<header class="w-3/4 flex flex-col items-center mx-auto">
    <div
        class="w-full h-28 flex items-center justify-center pb-5 m-auto bg-gradient-to-br from-black to-violet-800 rounded-b-3xl shadow-2xl">
        <img class="w-16 h-16 fill-white " src="{{ Storage::url('/images/logo.svg')}}" alt="logo">
        <h1 class="text-3xl text-green-400">
            <span class="hidden md:inline-block">To-Do App</span> "ilushka228"
        </h1>
    </div>
    <nav
        class="-m-6 flex justify-center items-center w-3/4 h-16 bg-white/30 backdrop-blur-md border border-black/10 rounded-3xl p-10 ">
        <ul class="flex gap-10">
            <li>
                <a href="{{ route('home') }}" @class([
    'menu-link',
    'text-green-700 border-transparent' => $isActive === 'home',
])>
                    <svg class="h-6 md:h-7 m-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="size-6 ">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    <span class=" hidden sm:inline-block">Home</span> </a>
            </li>
            <li>
                <a @class([
    "menu-link"
    ,
    "text-green-700  border-transparent" => $isActive === "list",
])
                    href=" {{route('task.index')}}">
                    <svg class="h-6 md:h-7 m-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>
                    <span class="hidden sm:inline-block">List of tasks</span></a>
            </li>
            <li>
                <a @class([
    "menu-link"
    ,
    "text-green-700  border-transparent" => $isActive === "home",
])
                    href="{{route('task.create')}}">
                    <svg class="h-6 md:h-7 m-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                    </svg>
                    <span class="hidden sm:inline-block">Make a task</span></a>
            </li>
            <li>
                <a @class([
    "menu-link"
    ,
    "text-green-700  border-transparent" => $isActive === "about",
])
                    href="{{route('home.about')}}">
                    <svg class="h-6 md:h-7 m-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                    </svg>

                    <span class="hidden sm:inline-block">About us</span></a>
            </li>
        </ul>
    </nav>
</header>