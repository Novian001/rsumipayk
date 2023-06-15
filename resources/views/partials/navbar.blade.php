{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="mr-auto navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('posts') ? 'active' : '' }}" href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('categories') ? 'active' : '' }}" href="/categories">Categories</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarAuthor" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarAuthor">
                        <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav> --}}

<header class="top-0 left-0 z-10 w-full px-12 bg-background-secondary abosulte">
    <div class="relative flex items-center justify-between">
        <div class="flex items-center justify-center mx-2">
            <div class="mr-2 lg:mr-4">
                <img src="/assets/images/logo.png" alt="logo" class="my-2 w-18 " />
            </div>
            <a href="#" class="font-semibold no-underline hover:text-green-300 text-background-primary text-heading4 lg:mx-auto">RSU Mitra Paramedika</a>
        </div>
        <div class="flex items-center px-4">
            <button id="hamburger" name="hamburger" type="button" class="absolute block right-4 lg:hidden">
                <span class="transition duration-300 ease-in-out origin-top-left hamburger-line"></span>
                <span class="transition duration-300 ease-in-out hamburger-line"></span>
                <span class="transition duration-300 ease-in-out origin-bottom-left hamburger-line"></span>
            </button>
        </div>
        <div class="flex items-center w-1/2">
            <nav id="nav-menu" class="hidden absolute right-4 max-w-[250px] w-full lg:grid lg:right-0 lg:static lg:max-w-full lg:items-center">
                <ul class="items-center block lg:flex lg:my-0 lg:justify-between">
                    <li class="group">
                        <a href="/" class="flex mx-1 my-2 text-gray-500 no-underline lg:my-0 hover:text-primary lg:text-white lg:mr-2 md:mx-4  {{ Request::is('/') ? 'active' : '' }}">Home</a>
                    </li>
                    <li class="group">
                        <a href="#about" class="flex mx-1 my-2 text-gray-500 no-underline lg:my-0 hover:text-primary lg:text-white lg:mr-2 md:mx-4">About</a>
                    </li>
                    <li class="group">
                        <a href="#galeri" class="flex mx-1 my-2 text-gray-500 no-underline lg:my-0 hover:text-primary lg:text-white lg:mr-2 md:mx-4">Galeri</a>
                    </li>
                    <li class="group">
                        <a href="#aduan" class="flex mx-1 my-2 text-gray-500 no-underline lg:my-0 hover:text-primary lg:text-white lg:mr-2 md:mx-4">Aduan</a>
                    </li>
                    <li class="group">
                        <a href="/posts" class="no-underline flex mx-1 my-2 lg:my-0 text-gray-500 hover:text-primary lg:text-white lg:mr-2 md:mx-4 {{ Request::is('posts') ? 'active' : '' }}">Berita&Artikel</a>
                    </li>
                    <li class="group">
                        <a href="#" class="flex mx-1 my-2 text-gray-500 no-underline lg:my-0 hover:text-primary lg:text-white lg:mr-2 md:mx-4">Data Informasi</a>
                    </li>
                    <li class="ml-auto group">
                        @auth
                        <div class="lg:mx-2">
                            <div class="relative inline-block text-left">
                                <a href="/dashboard">
                                    <button type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" id="menu-button" aria-expanded="false" aria-haspopup="true">
                                        {{ auth()->user()->name }}
                                    </button>
                                </a >
                            </div>
                        </div>
                        @else
                        <li class="group">
                            <a class="flex no-underline mx-1 my-2 lg:my-0 items-center text-gray-500 hover:text-primary lg:text-white lg:mr-2 md:mx-4 {{ Request::is('login') ? 'active' : '' }}" href="/login">
                                <button type="button" class="inline-flex items-center justify-center gap-x-1.5 rounded-md bg-button px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                    Login
                                </button>
                            </a>
                        </li>
                        @endauth
                    </li>
                </ul>
            </nav>
        </div>

    </div>
</header>