<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="px-4 sm:px-6 lg:px-8" style="padding:0 50px;padding-top:20px;padding-bottom:20px">
        <div class="flex justify-between h-full w-full">
            <div class="flex">
                <!-- Logo -->
                <div>
                <!-- class="shrink-0 flex items-center" -->
                    <a href="{{ route('dashboard') }}">
                    <img src="{{ asset('img/logo-header.png') }}" alt="logo" width="90" height="90" style="padding-left:10px">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('JobsVietNam') }}
                    </x-nav-link>
                </div>
            </div>
    

			<div class="row" style="width: 1200px;">
				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
					    <div class="navbar-header">
					     	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
					      	</button>
					      	<!-- <a class="navbar-brand" href="https://vnexpress.net/">DEMO WEB</a> -->
					    </div>
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					     	<ul class="nav navbar-nav">
					     		<li>
					     			<a href="">Home</a>
					     		</li>
					     	</ul>
					     	<ul class="nav navbar-nav">
					     		<li>
					     			<a href="">Jobs</a>
					     		</li>
					     	</ul>
					     	<ul class="nav navbar-nav">
					     		<li>
					     			<a href="">About Us</a>
					     		</li>
					     	</ul>
                            <ul class="nav navbar-nav">
					     		<li>
					     			<a href="">Blog</a>
					     		</li>
					     	</ul>
                             <ul class="nav navbar-nav">
					     		<li>
					     			<a href="">Contact</a>
					     		</li>
					     	</ul>
					    </div>
					</div>
				</nav>
			</div>
		

            <!-- Settings Dropdown -->
            <div class="sm:flex sm:items-center sm:ml-6 text-2xl w-[200px]" 
            style="font-size:25px"> 
            <!-- class="hidden sm:flex sm:items-center sm:ml-6" -->
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div style="font-size:22px">{{ Auth::user()->name }}</div>
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
