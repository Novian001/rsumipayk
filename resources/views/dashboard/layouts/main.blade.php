<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    @vite('resources/css/app.css')

    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.1/dist/sweetalert2.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }

        trix-toolbar [data-trix-button-group="text-tools"] {
            color: white;
        }
    </style>
</head>

<body>

    @include('dashboard.partials.navbar')
    
    <section class="flex bg-green-100 dark:bg-gray-600">
        <div class="flex flex-1">
            @include('dashboard.partials.sidebar')

            <div class="flex w-full m-4 lg:m-8">
                <div class="flex flex-col w-full p-8 bg-white rounded-md shadow-lg dark:bg-slate-900 ">
                    @yield('container')
                </div>
            </div>
        </div>
    </section>
    <!-- ======= End section1 ======= -->
    <script>
        feather.replace()
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.1/dist/sweetalert2.all.min.js"></script>
</body>

<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>

<script>
    document.addEventListener("trix-file-accept", function (event) {
        event.preventDefault();
    });
    // Dark Mode
    const darkToggle = document.querySelector("#dark-toggle");
    const html = document.querySelector("html");

    darkToggle.addEventListener("click", function () {
        if (darkToggle.checked) {
            html.classList.add("dark");
        } else {
            html.classList.remove("dark");
        }
    });
    
    // Mengubah fungsi dropdownFunction()
    function dropdownFunction(menuId) {
        const dropdownMenu = document.getElementById(menuId);
        dropdownMenu.classList.toggle("hidden");
    }

    // Menambahkan event listener untuk menutup dropdown saat klik di tempat lain
    document.addEventListener("click", function (event) {
        const dropdowns = document.getElementsByClassName("dropdown-content");

        for (let i = 0; i < dropdowns.length; i++) {
        if (!event.target.closest(".dropdown-content") && !event.target.closest(".dropbtn")) {
            dropdowns[i].classList.add("hidden");
        }
        }
    });

    function toggleDropdown() {
        const menuButton = document.getElementById('menu-button');
        const dropdownMenu = document.getElementById('dropdown-menu');

        const expanded = menuButton.getAttribute('aria-expanded') === 'true';
        menuButton.setAttribute('aria-expanded', String(!expanded));
        dropdownMenu.hidden = expanded;
    }

    const menuButton = document.getElementById('menu-button');
    menuButton.addEventListener('click', toggleDropdown);

    function priviewImage(){
        const image = document.querySelector('#image');
        const imagePreview = document.querySelector('#image-preview');

        imagePreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
            imagePreview.src = oFREvent.target.result;
        }
    }
</script>

</html>