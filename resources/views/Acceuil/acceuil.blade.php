@extends('welcome')
@section('main')
<div class=" flex flex-row ">
    <div class="flex items-center p-3 mt-10 ml-5 w-96 h-28 bg-green-700 rounded-md shadow-sm">
        <section class="flex justify-center items-center w-14 h-14 ">
            <div viewBox="0 0 15 15" class="w-7 fill-gray-700">
                <img src="{{ asset('svgs/regular/user.svg') }}" height="40" width="40" alt="Logout" class=" ml-0" >

            </div>
        </section>
    
        <section class="block border-l border-gray-300 m-3">
            <div class="pl-3">
                <h1 class="text-white font-bold text-sm">SESSOU Kodjo Betsaleel</h1>
                <h2 class="bg-clip-text text-transparent bg-white text-sm font-semibold">Web
                Developer</h2>
            </div>
        
        </section>
    </div>
    <!--main-->
    <div class="flex items-center p-3 mt-10 ml-5 w-96 h-28 bg-orange-700 rounded-md shadow-sm">
        <section class="flex justify-center items-center w-14 h-14 ">
            <div viewBox="0 0 15 15" class="w-7 fill-gray-700">
                <img src="{{ asset('svgs/solid/road.svg') }}" height="45" width="45" alt="Logout" class=" ml-0" >

            </div>
        </section>
    
        <section class="block border-l border-gray-300 m-3">
            <div class="pl-3">
                <h1 class="text-white font-bold text-lg">Parcours</h1>
                <h2 class="bg-clip-text text-transparent bg-white text-sm font-semibold">Ingénerie
                Des Systèmes Informatique</h2>
            </div>
        
        </section>
    </div>
</div>

@endsection
@section('content')

<div class="flex md:block md:w-1/5 bg-gray-400  0 h-screen flex-col">
    <!-- Sidebar Content for Larger Screens -->
    <div class=" text-white font-serif text-[23px] mt-8 ml-2">Messages</div>
    <div class="mt-12 ml-2 w-11 bg-slate-700">

    </div>
</div>
@endsection