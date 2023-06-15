<header class="relative flex flex-col bg-white grow dark:bg-slate-900">
    <div class="relative flex justify-between mx-1 mt-2 mb-4 lg:mx-4">
        <div class="relative flex items-center justify-center">
            <a href="/" class="flex items-center">
                <div class="flex mx-1 rounded-lg lg:mx-2">
                    <img src="../../assets/images/logo.png" alt="logo" class="w-10 lg:w-14">
                </div>
                <h2
                    class="relative text-sm font-semibold leading-4 text-gray-800 lg:font-bold lg:text-4xl lg:leading-6 font-Mulish dark:text-white">
                    RSU Mitra Paramedika
                </h2>
            </a>
        </div>
        <div class="relative flex items-center justify-center">
            <div class="w-8 h-8 mx-1 lg:mx-2 md:w-10 md:h-10 lg:w-14 lg:h-14">
                <img src="../../assets/images/user-f-1.png" alt="alt text" class="w-fit">
            </div>
            <div class="lg:mx-2">
                <div class="relative inline-block text-left">
                    <div>
                        <button type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" id="menu-button" aria-expanded="false" aria-haspopup="true">
                        {{ auth()->user()->name }}
                        <svg class="w-5 h-5 -mr-1 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                        </button>
                    </div>

                    <div class="absolute right-0 z-10 w-56 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" id="dropdown-menu" hidden onclick="dropdownFunction(this)">
                        <div class="py-1" role="none">
                        <a href="#" class="block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-slate-300" role="menuitem" tabindex="-1" id="menu-item-0">Profile</a>
                        <a href="/settings" class="block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-slate-300" role="menuitem" tabindex="-1" id="menu-item-1">Settings</a>
                        <form method="POST" action="/logout" role="none">
                            @csrf
                            <button type="submit" class="block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-slate-300" role="menuitem" tabindex="-1" id="menu-item-3">Logout</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr size="1" class="relative h-px bg-white dark:bg-slate-700 dark:border-none">
</header>