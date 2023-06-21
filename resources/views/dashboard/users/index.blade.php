@extends('dashboard.layouts.main')

@section('container')

<div class="w-full sm:px-6">
  <div class="px-4 py-4 md:px-10 md:py-7">
      <div class="flex items-center justify-between">
        <p tabindex="0" class="text-base font-bold leading-normal text-gray-800 dark:text-white focus:outline-none sm:text-lg md:text-xl lg:text-2xl">Users</p>
        <div class="relative">
            <button type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" id="menu-button-1" aria-expanded="false" aria-haspopup="true" onclick="dropdownFunction('dropdown-menu-1')">
                Sort By :
                <svg class="w-5 h-5 -mr-1 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                </svg>
            </button>

            <div class="absolute right-0 z-10 hidden w-56 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button-1" tabindex="-1" id="dropdown-menu-1">
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
  <div class="px-4 py-4 bg-white dark:bg-slate-500 md:py-7 md:px-8 xl:px-10">
      <div class="items-center justify-between sm:flex">
          <div class="flex items-center">
              <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800" href=" javascript:void(0)">
                  <div class="px-8 py-2 text-indigo-700 bg-indigo-100 rounded-full">
                      <p>All</p>
                  </div>
              </a>
              <a class="ml-4 rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 sm:ml-8" href="javascript:void(0)">
                  <div class="px-8 py-2 text-gray-600 rounded-full hover:text-indigo-700 hover:bg-indigo-100 ">
                      <p>Done</p>
                  </div>
              </a>
              <a class="ml-4 rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 sm:ml-8" href="javascript:void(0)">
                  <div class="px-8 py-2 text-gray-600 rounded-full hover:text-indigo-700 hover:bg-indigo-100 ">
                      <p>Pending</p>
                  </div>
              </a>
          </div>
          <a href="/dashboard/users/create">
            <button class="inline-flex items-start justify-start px-6 py-3 mt-4 bg-indigo-700 rounded focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 sm:mt-0 hover:bg-indigo-600 focus:outline-none">
                <p class="text-sm font-medium leading-none text-white">Add Posts</p>
            </button>
          </a>
      </div>
      <div class="h-screen overflow-x-auto mt-7">
          <table class="w-full whitespace-nowrap">
              <tbody>
                @foreach ($users as $user)
                  <tr tabindex="0" class="h-16 border border-gray-100 rounded focus:outline-none">
                    <td class="">
                      <div class="flex items-center pl-5">
                        <p class="mr-2 text-base font-medium leading-none text-gray-700 dark:text-white">{{ $loop->iteration }}</p>
                      </div>
                    </td>
                    <td>
                      <div class="ml-5">
                        <div class="relative flex items-center justify-center flex-shrink-0 w-5 h-5 bg-gray-200 rounded-sm">
                          <input placeholder="checkbox" type="checkbox" class="absolute w-full h-full opacity-0 cursor-pointer focus:opacity-100 checkbox" />
                          <div class="hidden text-white bg-indigo-700 rounded-sm check-icon">
                            <svg class="icon icon-tabler icon-tabler-check" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z"></path>
                              <path d="M5 12l5 5l10 -10"></path>
                            </svg>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="">
                      <div class="flex items-center pl-5">
                        <p class="mr-2 text-base font-medium leading-none text-gray-700 dark:text-white">{{ $user->name }}</p>
                      </div>
                    </td>
                    <td class="pl-4">
                      <a href="/dashboard/users/{{ $user->username }}">
                      <button class="px-5 py-3 text-sm leading-none text-gray-600 bg-gray-100 rounded focus:ring-2 focus:ring-offset-2 focus:ring-red-300 hover:bg-gray-200 focus:outline-none">View</button></a>
                    </td>
                    <td>
                      <div class="relative px-5 pt-2">
                        <button class="rounded-md focus:ring-2 focus:outline-none" onclick="dropdownFunction(this)" role="button" aria-label="option">
                          <i class="w-5 h-5 dropbtn text-slate-400" data-feather="more-horizontal"></i>
                        </button>
                        <div class="absolute right-0 z-30 hidden w-24 mr-6 bg-white shadow dropdown-content">
                          <div class="flex flex-col">
                            <a href="/dashboard/users/{{ $user->username }}/edit" tabindex="0" class="w-full px-8 py-4 text-xs cursor-pointer focus:outline-none focus:text-indigo-600 hover:bg-indigo-700 hover:text-white">
                              <p>Edit</p>
                            </a>
                            <form action="/dashboard/users/{{ $user->username }}" method="POST" class="border-0">
                              @method('delete')
                              @csrf
                              <button tabindex="0" class="w-full py-4 text-xs cursor-pointer focus:outline-none focus:text-indigo-600 hover:bg-indigo-700 hover:text-white" onclick="return confirm('are you sure?')">Delete</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
          </table>
      </div>
  </div>


@endsection