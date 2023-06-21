<div class="sticky top-0 flex-col w-12 h-screen p-3 bg-white lg:w-64 lg:p-4 dark:bg-slate-900">
    <div class="flex items-center justify-center mb-5">
        <span class="invisible mr-2 text-sm text-slate-500 lg:visible">light</span>
        <input type="checkbox" class="hidden" id="dark-toggle">
        <label for="dark-toggle">
            <div class="flex items-center h-5 p-1 rounded-full cursor-pointer w-9 bg-slate-500">
                <div
                    class="w-4 h-4 duration-300 ease-in-out transform bg-black rounded-full shadow-md toggle-circle">
                </div>
            </div>
        </label>
        <span class="invisible ml-2 text-sm text-slate-500 lg:visible">dark</span>
    </div>
    <a class="flex" href="/dashboard">
        <div class="flex lg:w-full h-12 hover:bg-green-300 dark:hover:bg-green-700 items-center rounded-lg lg:p-2 {{ request()->is('dashboard') ? 'bg-green-300 dark:bg-green-700' : '' }}">
            <i data-feather="home"></i><span class="flex invisible pl-2 text-black dark:text-white lg:visible">Dashboard</span>
        </div>
    </a>
    
    <a class="flex" href="/dashboard/posts">
        <div class="flex lg:w-full h-12 hover:bg-green-300 dark:hover:bg-green-700 items-center rounded-lg lg:p-2 {{ request()->is('dashboard/posts') ? 'bg-green-300 dark:bg-green-700' : '' }}">
            <i data-feather="file-plus"></i><span class="flex invisible pl-2 text-black dark:text-white lg:visible">Post</span>
        </div>
    </a>
    
    <a class="flex" href="/dashboard/settings">
        <div class="flex lg:w-full h-12 hover:bg-green-300 dark:hover:bg-green-700 items-center rounded-lg lg:p-2 {{ request()->is('dashboard/settings') ? 'bg-green-300 dark:bg-green-700' : '' }}">
            <i data-feather="settings"></i><span class="flex invisible pl-2 text-black dark:text-white lg:visible">Settings</span>
        </div>
    </a>
    @can('admin')
    <div class="flex flex-col h-12 my-4 rounded-lg lg:w-full">
        Administrator
        <a class="flex" href="/dashboard/categories">
            <div class="flex lg:w-full h-12 hover:bg-green-300 dark:hover:bg-green-700 items-center rounded-lg lg:p-2 {{ request()->is('dashboard/categories') ? 'bg-green-300 dark:bg-green-700' : '' }}">
                <i data-feather="file-plus"></i><span class="flex invisible pl-2 text-black dark:text-white lg:visible">Category</span>
            </div>
        </a>
        <a class="flex" href="/dashboard/users">
            <div class="flex lg:w-full h-12 hover:bg-green-300 dark:hover:bg-green-700 items-center rounded-lg lg:p-2 {{ request()->is('dashboard/users') ? 'bg-green-300 dark:bg-green-700' : '' }}">
                <i data-feather="users"></i><span class="flex invisible pl-2 text-black dark:text-white lg:visible">Users</span>
            </div>
        </a>
    </div>
    @endcan

</div>