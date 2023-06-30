@extends('layouts.main')

@section('container')
   <!-- Start Hero section -->
  <section id="hero" class="pt-16 pb-40 mb-10 lg:pt-28">
    <div class="relative px-12">
      <span class="absolute -translate-x-1/2 -z-10 top-1/2 lg:left-2/3">
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" width="400" height="400">
          <path fill="#10b981"
            d="M51.2,-35.2C65.8,-22.4,76.8,-1.2,71.5,14C66.2,29.2,44.5,38.2,23.2,48.7C2,59.1,-18.9,70.8,-36,65.9C-53.1,61.1,-66.4,39.6,-68.5,19C-70.5,-1.7,-61.3,-21.6,-48,-34C-34.7,-46.5,-17.3,-51.5,0.5,-51.8C18.3,-52.2,36.5,-47.9,51.2,-35.2Z"
            transform="translate(100 100) scale(1)" />
        </svg>
      </span>
      <div class="flex flex-wrap">
        <div class="w-full px-4 pb-10 lg:w-1/2">
          <h1
            class="text-4xl font-semibold font-poppins md:text-5xl md:whitespace-pre-line hover:text-background-secondary" style="color: #10b981">Rumah Sakit Umum Mitra Paramedika
          </h1>
          <h3 class="font-semibold font-poppins text-heading4 md:text-heading3" style="color: #166534">
            Pendamping di waktu sakit,
            sahabat di waktu sehat
          </h3>
          <!-- <br /> -->
          <div class="flex w-1/2 mt-4">
            <a href="#" class="w-full px-2 py-2 font-semibold text-center no-underline transition duration-300 ease-in-out rounded-full button text-background-secondary bg-button hover:shadow-lg hover:opacity-90">Daftar</a>
            <a href="#" class="w-full px-2 py-2 ml-8 font-semibold text-center no-underline transition duration-300 ease-in-out rounded-full button text-background-secondary bg-button hover:shadow-lg hover:opacity-90">Jadwal</a>
          </div>
          <div class="flex mt-10">
            <!-- Facebook -->
            <a href="https://www.facebook.com/profile.php?id=100063495583080" target="_blank"
              class="flex items-center justify-center mr-3 border rounded w-9 h-9 border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
              <svg role="img" viewBox="0 0 24 24" width="24" class="fill-current" xmlns="http://www.w3.org/2000/svg">
                <title>Facebook</title>
                <path
                  d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
              </svg>
            </a>
            <!-- Youtube -->
            <a href="https://www.youtube.com/@rsumitraparamedika3935" target="_blank"
              class="flex items-center justify-center mr-3 border rounded w-9 h-9 border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
              <svg role="img" viewBox="0 0 24 24" width="24" class="fill-current" xmlns="http://www.w3.org/2000/svg">
                <title>YouTube</title>
                <path
                  d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
              </svg>
            </a>
            <!-- Instagram -->
            <a href="https://www.instagram.com/rsumipayk/" target="_blank"
              class="flex items-center justify-center mr-3 border rounded w-9 h-9 border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
              <svg role="img" viewBox="0 0 24 24" width="24" class="fill-current" xmlns="http://www.w3.org/2000/svg">
                <title>Instagram</title>
                <path
                  d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
              </svg>
            </a>
          </div>
        </div>
        <div class="w-full px-4 pt-10 lg:w-1/2 lg:mt-5">
          <div class="relative">
            <!-- <div class="card"> -->
            <img src="/assets/images/doctor1.jpg" alt="image hero"
              class="absolute max-w-full mx-auto -mt-10 bg-cover rounded shadow -right-5" />
            <!-- </div> -->
            <!-- <div class="card"> -->
            <img src="/assets/images/doctor1.jpg" alt="image hero"
              class="absolute max-w-full mx-auto mt-5 bg-cover rounded" />
            <!-- </div> -->
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <!-- Start About Section -->
  <section id="about" class="pt-20 pb-32">
    <div class="px-12 py-24">
      <div class="w-full px-4 mb-10">
        <div class="max-w-xl mx-auto text-center">
          <h1 class="text-5xl font-semibold font-poppins" style="color: #10b981;">
            Layanan Terbaik
          </h1>
        </div>
      </div>
      <div class="flex mt-4 flex-nowrap">
        <div class="flex flex-col justify-center px-4 mx-1 mb-2 rounded shadow mt-14 lg:w-1/4 card-about"  style="background-color: #3f4531;">
          <h3 class="font-semibold text-center text-heading3" style="color: #10b981;">
            Ramah
          </h3>
          <p class="font-normal text-center font-poppins text-paragraph2" style="color: #10b981;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed alias
            magnam eligendi excepturi et praesentium, quae voluptatem
            voluptates velit, architecto ad earum sunt maxime nobis ipsa.
            Esse, maxime saepe. Similique.
          </p>
        </div>
        <div class="flex flex-col justify-center px-4 mx-1 mt-2 mb-10 rounded shadow lg:w-1/4 card-about"  style="background-color: #3f4531;">
          <h3 class="font-semibold text-center text-heading3" style="color: #10b981;">
            Waktu Terbaik
          </h3>
          <p class="font-normal text-center font-poppins text-paragraph2" style="color: #10b981;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed alias
            magnam eligendi excepturi et praesentium, quae voluptatem
            voluptates velit, architecto ad earum sunt maxime nobis ipsa.
            Esse, maxime saepe. Similique.
          </p>
        </div>
        <div class="flex flex-col justify-center px-4 mx-1 mt-20 -mb-4 rounded shadow lg:w-1/4 card-about"  style="background-color: #3f4531;">
          <h3 class="font-semibold text-center text-heading3" style="color: #10b981;">
            Kualitas Bagus
          </h3>
          <p class="font-normal text-center font-poppins text-paragraph2" style="color: #10b981;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed alias
            magnam eligendi excepturi et praesentium, quae voluptatem
            voluptates velit, architecto ad earum sunt maxime nobis ipsa.
            Esse, maxime saepe. Similique.
          </p>
        </div>
        <div class="flex flex-col justify-center px-4 mx-1 mt-4 mb-2 rounded shadow lg:w-1/4 card-about"  style="background-color: #3f4531;">
          <h3 class="font-semibold text-center text-heading3" style="color: #10b981;">
            Terjamin
          </h3>
          <p class="font-normal text-center font-poppins text-paragraph2" style="color: #10b981;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed alias
            magnam eligendi excepturi et praesentium, quae voluptatem
            voluptates velit, architecto ad earum sunt maxime nobis ipsa.
            Esse, maxime saepe. Similique.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Start Galery Section -->
  <section id="galeri" class="pt-20 pb-32">
    <div class="px-12">
      <div class="w-full px-4 mb-10">
        <div class="max-w-xl text-start">
          <a href="/galeri {{ Request::is('galeri') ? 'active' : '' }}">
            <h1 class="text-5xl font-semibold no-underline font-poppins text-background-secondary">
              Galeri
            </h1>
          </a>
          <h4 class="text-2xl fontsemibold font-poppins text-background-secondary">
            Are you in there?
          </h4>
        </div>
        <br />
        <!-- SnapWidget -->
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-f18d6b4c-5002-4610-a08b-b0a416559eb5"></div>
      </div>
    </div>
  </section>
  <!-- End Galery Section -->

  <!-- Start Aduan Section -->
  <section class="pt-20 pb-32" id="aduan">
    <div class="w-full mx-auto">
      <div class="flex max-w-xl mx-auto text-center">
        <h1 class="flex-wrap px-12 font-semibold text-heading1 text-background-secondary">
          Layanan Aduan
        </h1>
      </div>
      <div class="bg-white text-gray-700 w-3/5 min-h-[15rem] overflow-hidden rounded-lg shadow-lg mx-auto mt-5 card-aduan">
        <div class="flex flex-wrap mt-0">
          <div class="max-w-xl mx-auto lg:w-1/2">
            <img src="../assets/images/dr.geldion.jpg" alt="aduan" />
          </div>
          <div class="max-w-xl mx-auto lg:w-1/2 lg:my-auto lg:px-2">
            <form action="" method="post">
              <div class="relative mt-5">
                <input type="text" name="email"
                  class="w-full h-10 text-gray-900 placeholder-transparent border-b-2 border-gray-300 peer focus:outline-none focus:border-primary"
                  id="email" autocomplete="off" placeholder="Email address" />
                <label for="email"
                  class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                  Email address
                </label>
              </div>
              <div class="relative mt-5">
                <input type="text" name="name"
                  class="w-full h-10 text-gray-900 placeholder-transparent border-b-2 border-gray-300 peer focus:outline-none focus:border-primary"
                  id="name" placeholder="Masukkan Nama" />
                <label for="name"
                  class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                  Nama
                </label>
              </div>
              <div class="relative mt-5">
                <input type="text" name="aduan"
                  class="w-full h-10 text-gray-900 placeholder-transparent border-b-2 border-gray-300 resize-y peer focus:outline-none focus:border-primary"
                  id="aduan" placeholder="Masukkan Aduan" />
                <label for="aduan"
                  class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                  Aduan
                </label>
              </div>
              <div class="my-5">
                <button type="button" name="submit" class="p-3 rounded bg-button" value="submit">
                  Submit
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Aduan Section -->

  <!-- Start Map Section -->
  <section id="map" class="pt-20 pb-32">
    <div class="w-full px-12">
      <div class="w-full text-center">
        <h1 class="font-semibold text-heading1 text-background-secondary">
          Lokasi
        </h1>
      </div>
      <div class="w-full overflow-hidden text-gray-700 bg-white rounded-lg shadow-lg h-1/2 card-map">
        <div class="mapouter">
          <div class="gmap_canvas">
            <iframe width="100%" height="590" id="gmap_canvas"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.7123548451877!2d110.44627285049306!3d-7.713981794412264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5a5e301fcdfb%3A0xaa8bc699d3f127b2!2sRumah%20Sakit%20Umum%20Mitra%20Paramedika!5e0!3m2!1sen!2sid!4v1676867278544!5m2!1sen!2sid"
              frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
              href="https://putlocker-is.org"></a><br />
            <style>
              .mapouter {
                position: relative;
                text-align: right;
                height: 590px;
                width: 100%;
              }
            </style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
            <style>
              .gmap_canvas {
                overflow: hidden;
                background: none !important;
                height: 590px;
                width: 100%;
              }
            </style>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Map Section -->
@endsection