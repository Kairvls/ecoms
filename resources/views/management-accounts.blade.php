@extends('admindashboard')

@section('content')
    
<div class="p-10">
        <article class="bg-white px-10 shadow-lg">
        <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -mx-4 -my-8">
      <div class="py-8 px-4 lg:w-1/3">
        <div class="h-full flex items-start">
          <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
            <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">Jan</span>
            <span class="font-medium text-lg text-gray-800 title-font leading-none">18</span>
          </div>
          <div class="flex-grow pl-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 mb-1">CATEGORY</h2>
            <h1 class="title-font text-xl font-medium text-gray-900 mb-3">The 400 Blows</h1>
            <p class="leading-relaxed mb-5">Have purchases of P50,000 for a whole month.</p>
            <a class="inline-flex items-center">
              <img alt="blog" src="https://dummyimage.com/103x103" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
              <span class="flex-grow flex flex-col pl-3">
                <span class="title-font font-medium text-gray-900">Jason Reyes</span>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="py-8 px-4 lg:w-1/3">
        <div class="h-full flex items-start">
          <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
            <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">Feb</span>
            <span class="font-medium text-lg text-gray-800 title-font leading-none">1</span>
          </div>
          <div class="flex-grow pl-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 mb-1">CATEGORY</h2>
            <h1 class="title-font text-xl font-medium text-gray-900 mb-3">Shooting Stars</h1>
            <p class="leading-relaxed mb-5">Have purchases of P20,000 for a whole week.</p>
            <a class="inline-flex items-center">
              <img alt="blog" src="https://dummyimage.com/102x102" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
              <span class="flex-grow flex flex-col pl-3">
                <span class="title-font font-medium text-gray-900">Awkford Reigh</span>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="py-8 px-4 lg:w-1/3">
        <div class="h-full flex items-start">
          <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
            <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">Feb</span>
            <span class="font-medium text-lg text-gray-800 title-font leading-none">7</span>
          </div>
          <div class="flex-grow pl-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 mb-1">CATEGORY</h2>
            <h1 class="title-font text-xl font-medium text-gray-900 mb-3">Neptune</h1>
            <p class="leading-relaxed mb-5">Have purchases of P18,000 for a second week.</p>
            <a class="inline-flex items-center">
              <img alt="blog" src="https://dummyimage.com/101x101" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
              <span class="flex-grow flex flex-col pl-3">
                <span class="title-font font-medium text-gray-900">Henry Chua</span>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="text-gray-600 body-font relative">
  <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
    <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
      <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=Ormoc+City+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed" style="filter: greenscale(1) contrast(1.2) opacity(0.4);"></iframe>
      <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
        <div class="lg:w-1/2 px-6">
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
          <p class="mt-1">Brgy. Sto Nino Ormoc City Leyte</p>
        </div>
        <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
          <a class="text-indigo-500 leading-relaxed">jcsuan25@gmail.com</a>
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
          <p class="leading-relaxed">091-0471-228</p>
        </div>
      </div>
    </div>
    <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
      <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
      <p class="leading-relaxed mb-5 text-gray-600">We connect and contact you via using google map to access your exact location</p>
      <div class="relative mb-4">
        <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
        <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
        <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
      </div>
      <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>
      <p class="text-xs text-gray-500 mt-3">Thankyou for cooperating.</p>
    </div>
  </div>
</section>
        </article>
    </div>
@endsection
