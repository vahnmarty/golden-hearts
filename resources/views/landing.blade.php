<x-guest-layout>

    @include('includes.components.header')

    <!-- Hero section -->
    <div class="relative">
        <div class="absolute inset-x-0 bottom-0 h-screen bg-gray-100"></div>
        <div class="h-screen">
          <div class="relative h-screen shadow-xl sm:overflow-hidden">
            <div class="absolute inset-0">
              <img class="object-cover w-full h-screen" src="img/hero/hero.jpg" alt="People working on laptops">
              <div class="absolute inset-0 bg-gradient-to-r from-gray-500 to-gray-700 mix-blend-multiply"></div>
            </div>
            <div class="relative grid items-center justify-center h-screen grid-cols-1 px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
              <h1 class="mt-16 text-4xl font-bold tracking-tight text-center sm:text-5xl lg:text-6xl">
                <span class="block text-white">The Golden Hearts</span>
                <span class="block text-amber-300">of Iligan City</span>
              </h1>
              <p class="max-w-lg mx-auto mt-6 text-xl text-center text-white sm:max-w-3xl">
                TGHI programs and projects are focused in addressing the inter-linking problems of poverty, conflict, environmental degradation and climate change impact, and poor governance that make communities vulnerable to disaster risks both natural and human-induced
            </p>
              <div class="max-w-sm mx-auto mt-10 sm:flex sm:max-w-none sm:justify-center">
                <div class="space-y-4 sm:mx-auto sm:inline-grid sm:grid-cols-2 sm:gap-5 sm:space-y-0">
                  <a href="#" class="flex items-center justify-center px-4 py-3 text-base font-medium text-white bg-transparent border-2 border-white rounded-md shadow-sm hover:bg-amber-50 hover:text-amber-500 sm:px-8">See More</a>
                  <a href="#" class="flex items-center justify-center px-4 py-3 text-base font-medium text-white border border-transparent rounded-md shadow-sm bg-amber-500 bg-opacity-60 hover:bg-opacity-70 sm:px-8">Register Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <!-- Features -->
    <div class="h-screen px-8 py-32 mx-auto bg-white max-w-7xl">
        <div class="text-center">
            <h5 class="mb-16 text-3xl font-bold text-amber-700">What we do?</h5>
            <h2 class="max-w-lg mx-auto mb-16 text-5xl font-bold text-gray-900">We are in Mission to Help the Helpless</h2>
        </div>
        <div class="grid grid-cols-5">
            <div>
                <div class="flex items-center justify-center w-40 h-40 p-8 mx-auto text-white rounded-full shadow-lg bg-amber-500 shadow-gray-400">
                    <x-heroicon-s-banknotes class="w-16 h-16 text-white"/>  
                </div>
                <div class="py-6">
                    <h3 class="text-xl font-bold text-center uppercase">Mortuary</h3>
                </div>
            </div>
            <div>
                <div class="flex items-center justify-center w-40 h-40 p-8 mx-auto rounded-full shadow-lg bg-amber-700 shadow-gray-400">
                    <x-heroicon-s-sun class="w-16 h-16 text-white"/>
                </div>
                <div class="py-6">
                    <h3 class="text-xl font-bold text-center uppercase">Advocacy</h3>
                </div>
            </div>
            <div>
                <div class="flex items-center justify-center w-40 h-40 p-8 mx-auto rounded-full shadow-lg bg-amber-700 shadow-gray-400">
                    <x-heroicon-s-globe-alt class="w-16 h-16 text-white"/>
                </div>
                <div class="py-6">
                    <h3 class="text-xl font-bold text-center uppercase">Lagsik-Kultura</h3>
                </div>
            </div>
            <div>
                <div class="flex items-center justify-center w-40 h-40 p-8 mx-auto rounded-full shadow-lg bg-amber-700 shadow-gray-400">
                    <x-heroicon-s-star class="w-16 h-16 text-white"/>
                </div>
                <div class="py-6">
                    <h3 class="text-xl font-bold text-center uppercase">Patuman sa Saad</h3>
                </div>
            </div>
            <div>
                <div class="flex items-center justify-center w-40 h-40 p-8 mx-auto rounded-full shadow-lg bg-amber-700 shadow-gray-400">
                    <x-heroicon-s-rocket-launch class="w-16 h-16 text-white"/>
                </div>
                <div class="py-6">
                    <h3 class="text-xl font-bold text-center uppercase">E-Sports</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Mortuary -->
    <div class="relative pt-16 pb-32 overflow-hidden bg-white">
        <div class="mt-24">
          <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-2 lg:gap-24 lg:px-8">
            <div class="max-w-xl px-4 mx-auto sm:px-6 lg:col-start-2 lg:mx-0 lg:max-w-none lg:py-32 lg:px-0">
              <div>
                <div>
                  <span class="flex items-center justify-center w-12 h-12 rounded-md bg-amber-600">
                    <!-- Heroicon name: outline/sparkles -->
                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                    </svg>
                  </span>
                </div>
                <div class="mt-6">
                  <h2 class="text-3xl font-bold tracking-tight text-gray-900">Mortuary Assistance</h2>
                  <p class="mt-4 text-lg text-gray-500">Semper curabitur ullamcorper posuere nunc sed. Ornare iaculis bibendum malesuada faucibus lacinia porttitor. Pulvinar laoreet sagittis viverra duis. In venenatis sem arcu pretium pharetra at. Lectus viverra dui tellus ornare pharetra.</p>
                  <div class="mt-6">
                    <a href="#" class="inline-flex px-4 py-2 text-base font-medium text-white border border-transparent rounded-md shadow-sm bg-amber-600 hover:bg-amber-700">Get started</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-12 sm:mt-16 lg:col-start-1 lg:mt-0">
              <div class="pr-4 -ml-48 sm:pr-6 md:-ml-16 lg:relative lg:m-0 lg:h-full lg:px-0">
                <img class="w-full shadow-xl rounded-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none" src="img/hero/mortuary.jpg" alt="Customer profile user interface">
              </div>
            </div>
          </div>
        </div>
      </div>

      
</x-guest-layout>