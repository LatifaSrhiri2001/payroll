<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

</head>

<body class="font-sans antialiased">

    {{-- Navbar --}}
    <x-mary-nav sticky full-width>
        <x-slot:brand>
            <label for="main-drawer" class="lg:hidden mr-3">
                <x-mary-icon name="o-bars-3" class="cursor-pointer" />
            </label>
            <div>Paie</div>
        </x-slot:brand>
        <x-slot:actions>
            <x-mary-button label="Messages" icon="o-envelope" link="###" class="btn-ghost btn-sm" responsive />
            <x-mary-button label="Notifications" icon="o-bell" link="###" class="btn-ghost btn-sm" responsive />
            <x-mary-theme-toggle class="btn btn-circle btn-ghost" />
            {{-- admin profile --}}
            <x-mary-dropdown icon="o-user" class="btn-outline">

                <x-mary-menu-item icon="o-at-symbol" title="{{ $admin->email }}" />
                <x-mary-menu-separator />

                <a href="{{ route('admin.logout') }}">
                    <div class="flex flex-row space-x-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                        </svg>

                        <p>Déconnexion</p>
                    </div>

                </a>
            </x-mary-dropdown>




        </x-slot:actions>
    </x-mary-nav>

    <x-mary-main with-nav full-width>
        <x-slot:sidebar drawer="main-drawer" collapsible class="bg-base-200">





            <x-mary-menu activate-by-route>
                <x-mary-menu-item title="Accueil" icon="o-home" :link="route('admin.dashboard')" />
                <x-mary-menu-item title="Employes" icon="o-users" :link="route('employes.index')" />
                <x-mary-menu-item title="Primes" icon="o-currency-dollar" :link="route('primes.index')" />
                <x-mary-menu-item title="Conges" icon="o-calendar" :link="route('conges.index')" />
                <x-mary-menu-item title="Cotisations" icon="o-calculator" :link="route('cotisations.index')" />



            </x-mary-menu>

        </x-slot:sidebar>

        <x-slot:content>
            @yield('content')
        </x-slot:content>
    </x-mary-main>

    <x-mary-toast />
    {{-- sript dark light mode f --}}
    <script>
        // from flowbite to change themes 
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

</body>

</html>
