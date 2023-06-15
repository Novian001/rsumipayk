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

<div class="sm:px-6 w-full">
  <div class="px-4 md:px-10 py-4 md:py-7">
      <div class="flex items-center justify-between">
          <p tabindex="0" class="dark:text-white focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">Categories</p>
          <div class="py-3 px-4 flex items-center text-sm font-medium leading-none text-gray-600 bg-gray-200 hover:bg-gray-300 cursor-pointer rounded">
              <p>Sort By:</p>
              <select aria-label="select" class="focus:text-indigo-600 focus:outline-none bg-transparent ml-1">
                  <option class="text-sm text-indigo-800">Latest</option>
                  <option class="text-sm text-indigo-800">Oldest</option>
                  <option class="text-sm text-indigo-800">Latest</option>
              </select>
          </div>
      </div>
  </div>
  <div class="dark:bg-slate-500 bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10">
      <div class="sm:flex items-center justify-between">
          <div class="flex items-center">
              <a class="rounded-full focus:outline-none focus:ring-2  focus:bg-indigo-50 focus:ring-indigo-800" href=" javascript:void(0)">
                  <div class="py-2 px-8 bg-indigo-100 text-indigo-700 rounded-full">
                      <p>All</p>
                  </div>
              </a>
              <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4 sm:ml-8" href="javascript:void(0)">
                  <div class="py-2 px-8 text-gray-600 hover:text-indigo-700 hover:bg-indigo-100 rounded-full ">
                      <p>Done</p>
                  </div>
              </a>
              <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4 sm:ml-8" href="javascript:void(0)">
                  <div class="py-2 px-8 text-gray-600 hover:text-indigo-700 hover:bg-indigo-100 rounded-full ">
                      <p>Pending</p>
                  </div>
              </a>
          </div>
          <a href="/dashboard/categories/create">
            <button class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
                <p class="text-sm font-medium leading-none text-white">Add Posts</p>
            </button>
          </a>
      </div>
      <div class="mt-7 h-screen overflow-x-auto">
          <table class="w-full whitespace-nowrap">
              <tbody>
                @foreach ($categories as $category)
                  <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">
                    <td class="">
                      <div class="flex items-center pl-5">
                        <p class="text-base font-medium leading-none text-gray-700 mr-2 dark:text-white">{{ $loop->iteration }}</p>
                      </div>
                    </td>
                    <td>
                      <div class="ml-5">
                        <div class="bg-gray-200 rounded-sm w-5 h-5 flex flex-shrink-0 justify-center items-center relative">
                          <input placeholder="checkbox" type="checkbox" class="focus:opacity-100 checkbox opacity-0 absolute cursor-pointer w-full h-full" />
                          <div class="check-icon hidden bg-indigo-700 text-white rounded-sm">
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
                        <p class="text-base font-medium leading-none text-gray-700 mr-2 dark:text-white">{{ $category->name }}</p>
                      </div>
                    </td>
                    <td class="pl-4">
                      <a href="/dashboard/categories/{{ $category->slug }}">
                      <button class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none">View</button></a>
                    </td>
                    <td>
                      <div class="relative px-5 pt-2">
                        <button class="focus:ring-2 rounded-md focus:outline-none" onclick="dropdownFunction(this)" role="button" aria-label="option">
                          <i class="dropbtn w-5 h-5 text-slate-400" data-feather="more-horizontal"></i>
                        </button>
                        <div class="dropdown-content bg-white shadow w-24 absolute z-30 right-0 mr-6 hidden">
                          <div class="flex flex-col">
                            <a href="/dashboard/categories/{{ $category->slug }}/edit" tabindex="0" class="focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-8 cursor-pointer hover:text-white">
                              <p>Edit</p>
                            </a>
                            <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="border-0">
                              @method('delete')
                              @csrf
                              <button tabindex="0" class="focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 cursor-pointer hover:text-white" onclick="return confirm('are you sure?')">Delete</button>
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
