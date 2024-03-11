<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portail Consultation de notes de l'Esag-Nde</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="h-full w-full overflow-hidden">
    <div class="container  max-w-screen w-screen">
        <div class="flex flex-col md:flex-row h-screen w-screen">
            <div class="md:w-1/5 h-screen left-0 shadow-2xl" id="sidebar">
                <!-- Sidebar Content -->
                <img src="{{ asset('img/Esag-logo.png') }}" height="250" width="250" alt="Menu">
                <div class="flex flex-col mt-12">
                    <div
                        class="flex flex-row justify-between items-center cursor-pointer h-10 hover:bg-gradient-to-r from-blue-600 to-blue-900">
                        <div class="basis-1/6 h-10 w-2 my-4  pt-3 pl-2">
                            <img src="{{ asset('svgs/solid/house.svg') }}" height="12" width="12" alt="Home">
                        </div>
                        <div class="basis-5/6 h-10 w-2 my-4 ml-1 pt-1">
                            <a href="acceuil">
                                <span class="text-[13px] ml-0 text-black-200 font-bold mt-10">Accueil</span>
                            </a>
                        </div>

                    </div>
                    <div class="">
                        <div class="flex flex-row justify-between items-center cursor-pointer h-10 mt-1  hover:bg-gradient-to-r from-blue-600 to-blue-900"
                            onclick="toggleSubMenu()">
                            <div class="basis-1/6 h-8 w-8 my-4  pt-3 pl-2">
                                <img src="{{ asset('svgs/solid/user.svg') }}" height="12" width="12"
                                    alt="Chatbox">

                            </div>
                            <div class="basis-4/6 h-8 w-10 my-4 ml-1 pt-1 items-center">
                                <a class=" cursor-pointer">
                                    <span class="text-[13px] text-black-200 font-bold ml-0 mt-10">Données
                                        Personnelles</span>
                                </a>
                            </div>
                            <div class="basis-1/6 h-8 w-auto my-4 ml-1 pt-1">
                                <span class="text-sm" id="arrow">
                                    <img src="{{ asset('svgs/solid/chevron-down.svg') }}" height="8" width="8"
                                        alt="Logout" class="ml-4 mt-2">
                                </span>
                            </div>
                        </div>
                        <div class="text-left text-sm mt-1 hidden ml-1 flex-col" id="submenu">
                            <div
                                class="flex  cursor-pointer pl-8 hover:bg-gradient-to-r from-blue-600 to-blue-900 rounded-md items-start">
                                <img src="{{ asset('svgs/solid/circle-info.svg') }}" height="10" width="10"
                                    alt="Dropdown1" class="w-4 h-4 ml-8">
                                <a href="/information">
                                    <span class="ml-4 text-[13px] text-black-200 font-bold">Information</span>
                                </a>
                            </div>
                            <div
                                class="flex  cursor-pointer pl-8 hover:bg-gradient-to-r from-blue-600 to-blue-900 rounded-md mt-1 items-start ">
                                <img src="{{ asset('svgs/solid/camera.svg') }}" height="10" width="10"
                                    alt="Dropdown1" class="w-4 h-4 ml-8">
                                <a href="/photo">
                                    <span class="ml-4 text-[13px] text-black-200 font-bold">Photo</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex flex-row justify-between items-center cursor-pointer h-10 mt-1  hover:bg-gradient-to-r from-blue-600 to-blue-900">
                        <div class="basis-1/6 h-8 w-8 my-4  pt-3 pl-2">
                            <img src="{{ asset('svgs/solid/bookmark.svg') }}" height="10" width="10"
                                alt="Bookmark">
                        </div>
                        <div class="basis-5/6 h-8 w-10 my-4 ml-1 pt-1 items-center">
                            <a href="/emplois_du_temps" class=" cursor-pointer">
                                <span class="text-[13px] ml-0 text-black-200 font-bold mt-10">Emplois du Temps</span>
                            </a>
                        </div>
                    </div>

                    <div class="flex flex-row justify-between items-center h-10 mt-1 cursor-pointer  hover:bg-gradient-to-r from-blue-600 to-blue-900"
                        onclick="toggleSubMenu1()">
                        <div class="basis-1/6 h-8 w-8 my-4  pt-3 pl-2">
                            <img src="{{ asset('svgs/solid/cube.svg') }}" height="12" width="12" alt="Chatbox">
                        </div>
                        <div class="basis-4/6 h-8 w-10 my-4 ml-1 pt-1 items-center">
                            <a class=" cursor-pointer">
                                <span class="text-[13px] ml-0 text-black-250 font-bold mt-10">Mes Modules</span>
                            </a>
                        </div>
                        <div class="basis-1/6 h-8 w-auto my-4 ml-1 pt-1">
                            <span class="text-sm" id="arrow1">
                                <img src="{{ asset('svgs/solid/chevron-down.svg') }}" height="8" width="8"
                                    alt="Logout" class="ml-4 mt-2">
                            </span>
                        </div>
                    </div>
                    <div class="text-left text-sm mt-1 hidden ml-1 flex-col" id="submenu1">
                        <div
                            class="flex  cursor-pointer pl-8 hover:bg-gradient-to-r from-blue-600 to-blue-900 rounded-md items-start">
                            <img src="{{ asset('svgs/solid/users.svg') }}" height="15" width="15"
                                alt="Dropdown1" class="w-4 h-4 ml-8">
                            <a href="/tronc_commun">
                                <span class="ml-4 text-[13px] text-black-200 font-bold">Tronc Commun </span>
                            </a>
                        </div>
                        <div
                            class="flex  cursor-pointer pl-8 hover:bg-gradient-to-r from-blue-600 to-blue-900 rounded-md mt-1 items-start ">
                            <img src="{{ asset('svgs/solid/person-chalkboard.svg') }}" height="25" width="25"
                                alt="Dropdown1" class="w-4 h-4 ml-8">
                            <a href="/Spécialité">
                                <span class="ml-4 text-[13px] text-black-200 font-bold">Spécialité</span>
                            </a>
                        </div>
                    </div>

                    <div
                        class="flex flex-row justify-between items-center h-10 mt-1 cursor-pointer hover:bg-gradient-to-r from-blue-600 to-blue-900">
                        <div class="basis-1/6 h-8 w-8 my-4   pt-3 pl-2">
                            <img src="{{ asset('svgs/solid/file-lines.svg') }}" height="12" width="12"
                                alt="Logout">
                        </div>
                        <div class="basis-5/6 h-8 w-10 my-4 ml-1 pt-1">
                            <a href="/notes">
                                <span class="text-[13px] ml-0 text-black-200 font-bold mt-10">Notes</span>
                            </a>
                        </div>

                    </div>
                    <div
                        class="flex flex-row justify-between items-center h-10 mt-1 cursor-pointer  hover:bg-gradient-to-r from-blue-600 to-blue-900">
                        <div class="basis-1/6 h-8 w-8 my-4   pt-3 pl-2">
                            <img src="{{ asset('svgs/solid/graduation-cap.svg') }}" height="15" width="15"
                                alt="Logout">
                        </div>
                        <div class="basis-5/6 h-8 w-10 my-4 ml-1 pt-1">
                            <a href="cursus">
                                <span class="text-[13px] ml-0 text-black-200 font-bold mt-10">Cursus</span>
                            </a>
                        </div>

                    </div>
                </div>


            </div>
            <div class="w-full h-screen">
                <div class="bg-gradient-to-r from-blue-900 to-indigo-600 h-16 flex justify-between"
                    id="header-content">
                    <!-- Header Content -->
                    <div class="w-12 my-2 ml-2 mr-2 items-center pt-2 pl-2 border-collapse bg-slate-400"
                        onclick="toggleSidebar()">
                        <img src="{{ asset('svgs/solid/bars.svg') }}" height="22" width="22" alt="Menu">
                    </div>
                    <div class="basis-4/6 my-2 items-center pt-2">
                        <h1 class="text-[20px] ml-4 text-white font-serif">Site de Consultation de Notes de l'Esag-Nde
                        </h1>
                    </div>
                    <div class="basis-2/6 ml-2 my-2 items-center pt-1  flex flex-row">
                        <div class="ml-2 w-72 mr-1">
                            <h2 id="Student-name" class="ml-4 text-white font-serif">
                                SESSOU Kodjo Betsaleel
                            </h2>
                        </div>
                        <div class="pl-4 w-32 flex flex-row">
                            <img src="{{ asset('svgs/regular/circle-user.svg') }}" height="40" width="40"
                                alt="Logout" class=" ml-0">
                            <img src="{{ asset('svgs/solid/chevron-down.svg') }}" height="20" width="20"
                                alt="Logout" class=" ml-4">
                        </div>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-4/5  h-screen bg-gradient-to-r from-gray-200 to-gray-300" id="main-content">
                        <!-- Main Content -->
                        @yield('main')
                    </div>
                    @yield('content')
                   
                </div>
            </div>
        </div>
    </div>


    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById("sidebar");
            const headerContent = document.getElementById("header-content");

            sidebar.classList.toggle("hidden");
            headerContent.classList.toggle("w-screen");
        }
    </script>

    <script>
        function toggleSubMenu() {
            document.getElementById("submenu").classList.toggle("hidden");
            document.getElementById("arrow").classList.toggle("rotate-0");
        }

        function toggleSubMenu1() {
            document.getElementById("submenu1").classList.toggle("hidden");
            document.getElementById("arrow1").classList.toggle("rotate-0");
        }
    </script>

</body>

</html>
