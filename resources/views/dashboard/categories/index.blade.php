@extends('dashboard.layouts.main')

@section('container')

@if(session()->has('success'))
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-right',
        iconColor: 'white',
        customClass: {
          popup: 'colored-toast'
        },
        showConfirmButton: false,
        timer: 2500,
        timerProgressBar: true
      });

      Toast.fire({
        icon: 'success',
        title: '{{ session('success') }}'
      });
    });
  </script>
@endif

<div class="w-full sm:px-6">
  <div class="px-4 py-4 md:px-10 md:py-7">
      <div class="flex items-center justify-between">
          <p tabindex="0" class="text-base font-bold leading-normal text-gray-800 dark:text-white focus:outline-none sm:text-lg md:text-xl lg:text-2xl">Categories</p>
          <div class="flex items-center px-4 py-3 text-sm font-medium leading-none text-gray-600 bg-gray-200 rounded cursor-pointer hover:bg-gray-300">
              <p>Sort By:</p>
              <select aria-label="select" class="ml-1 bg-transparent focus:text-indigo-600 focus:outline-none">
                  <option class="text-sm text-indigo-800">Latest</option>
                  <option class="text-sm text-indigo-800">Oldest</option>
                  <option class="text-sm text-indigo-800">Latest</option>
              </select>
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
          <a href="/dashboard/categories/create">
            <button class="inline-flex items-start justify-start px-6 py-3 mt-4 bg-indigo-700 rounded focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 sm:mt-0 hover:bg-indigo-600 focus:outline-none">
                <p class="text-sm font-medium leading-none text-white">Add Categories</p>
            </button>
          </a>
      </div>
      <div class="h-screen overflow-x-auto mt-7">
          <table class="w-full whitespace-nowrap">
              <tbody>
                @foreach ($categories as $category)
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
                        <p class="mr-2 text-base font-medium leading-none text-gray-700 dark:text-white">{{ $category->name }}</p>
                      </div>
                    </td>
                    <td class="pl-4">
                      <a href="/dashboard/categories/{{ $category->slug }}">
                      <button class="px-5 py-3 text-sm leading-none text-gray-600 bg-gray-100 rounded focus:ring-2 focus:ring-offset-2 focus:ring-red-300 hover:bg-gray-200 focus:outline-none">View</button></a>
                    </td>
                    <td>
                      <div class="relative px-5 pt-2">
                        <button class="rounded-md focus:ring-2 focus:outline-none" onclick="dropdownFunction(this)" role="button" aria-label="option">
                          <i class="w-5 h-5 dropbtn text-slate-400" data-feather="more-horizontal"></i>
                        </button>
                        <div class="absolute right-0 z-30 hidden w-24 mr-6 bg-white shadow dropdown-content">
                          <div class="flex flex-col">
                            <a href="/dashboard/categories/{{ $category->slug }}/edit" tabindex="0" class="w-full px-8 py-4 text-xs cursor-pointer focus:outline-none focus:text-indigo-600 hover:bg-indigo-700 hover:text-white">
                              <p>Edit</p>
                            </a>
                            <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="border-0">
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
</div>

@endsection
