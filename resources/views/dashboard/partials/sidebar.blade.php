<div class="flex-col bg-white w-12 lg:w-64 h-screen p-3 lg:p-4 sticky top-0 dark:bg-slate-900">
    <div class="flex justify-center items-center mb-5">
        <span class="mr-2 text-sm text-slate-500 invisible lg:visible">light</span>
        <input type="checkbox" class="hidden" id="dark-toggle">
        <label for="dark-toggle">
            <div class="flex h-5 w-9 cursor-pointer items-center rounded-full bg-slate-500 p-1">
                <div
                    class="toggle-circle h-4 w-4 rounded-full bg-black shadow-md transform duration-300 ease-in-out">
                </div>
            </div>
        </label>
        <span class="ml-2 text-sm text-slate-500 invisible lg:visible">dark</span>
    </div>
    <a class="flex" href="/dashboard">
        <div class="flex lg:w-full h-12 hover:bg-green-300 dark:hover:bg-green-700 items-center rounded-lg lg:p-2 {{ request()->is('dashboard') ? 'bg-green-300 dark:bg-green-700' : '' }}">
            <i data-feather="home"></i><span class="pl-2 invisible text-black dark:text-white flex lg:visible">Dashboard</span>
        </div>
    </a>
    
    <a class="flex" href="/dashboard/posts">
        <div class="flex lg:w-full h-12 hover:bg-green-300 dark:hover:bg-green-700 items-center rounded-lg lg:p-2 {{ request()->is('dashboard/posts') ? 'bg-green-300 dark:bg-green-700' : '' }}">
            <i data-feather="file-plus"></i><span class="pl-2 invisible text-black dark:text-white flex lg:visible">Post</span>
        </div>
    </a>
    
    <a class="flex" href="/dashboard/settings">
        <div class="flex lg:w-full h-12 hover:bg-green-300 dark:hover:bg-green-700 items-center rounded-lg lg:p-2 {{ request()->is('dashboard/settings') ? 'bg-green-300 dark:bg-green-700' : '' }}">
            <i data-feather="settings"></i><span class="pl-2 invisible text-black dark:text-white flex lg:visible">Settings</span>
        </div>
    </a>
    @can('admin')
    <div class="flex flex-col lg:w-full h-12 rounded-lg my-4">
        Administrator
        <a class="flex" href="/dashboard/categories">
            <div class="flex lg:w-full h-12 hover:bg-green-300 dark:hover:bg-green-700 items-center rounded-lg lg:p-2 {{ request()->is('dashboard/categories') ? 'bg-green-300 dark:bg-green-700' : '' }}">
                <i data-feather="file-plus"></i><span class="pl-2 invisible text-black dark:text-white flex lg:visible">Category</span>
            </div>
        </a>
    </div>
    @endcan

</div>