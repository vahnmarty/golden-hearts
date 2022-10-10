<x-guest-layout>

<div class="bg-white">
  <header>
    <div class="relative bg-white">
      <div class="flex items-center justify-between px-4 py-6 mx-auto max-w-7xl sm:px-6 md:justify-start md:space-x-10 lg:px-8">
        <div class="flex justify-start lg:w-0 lg:flex-1">
          <a href="#">
            <span class="sr-only">Your Company</span>
            <img class="w-auto h-8 sm:h-10" src="https://tailwindui.com/img/logos/mark.svg?from-color=gold&from-shade=600&to-color=amber&to-shade=600&toShade=600" alt="">
          </a>
        </div>
        <div class="-my-2 -mr-2 md:hidden">
          <button type="button" class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-amber-500" aria-expanded="false">
            <span class="sr-only">Open menu</span>
            <!-- Heroicon name: outline/bars-3 -->
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>
        </div>
        <nav class="hidden space-x-10 md:flex">

        </nav>
        <div class="items-center justify-end hidden md:flex md:flex-1 lg:w-0">
          <a href="#" class="text-base font-medium text-gray-500 whitespace-nowrap hover:text-gray-900">Sign in</a>
          <a href="#" class="inline-flex items-center justify-center px-4 py-2 ml-8 text-base font-medium text-white border border-transparent rounded-md shadow-sm whitespace-nowrap bg-gradient-to-r from-yellow-600 to-amber-600 bg-origin-border hover:from-yellow-700 hover:to-amber-700">Sign up</a>
        </div>
      </div>

      <!--
        Mobile menu, show/hide based on mobile menu state.

        Entering: "duration-200 ease-out"
          From: "opacity-0 scale-95"
          To: "opacity-100 scale-100"
        Leaving: "duration-100 ease-in"
          From: "opacity-100 scale-100"
          To: "opacity-0 scale-95"
      -->
      <div class="absolute inset-x-0 top-0 z-30 p-2 transition origin-top-right transform md:hidden">
        <div class="bg-white divide-y-2 rounded-lg shadow-lg divide-gray-50 ring-1 ring-black ring-opacity-5">
          <div class="px-5 pt-5 pb-6">
            <div class="flex items-center justify-between">
              <div>
                <img class="w-auto h-8" src="https://tailwindui.com/img/logos/mark.svg?from-color=purple&from-shade=600&to-color=indigo&to-shade=600&toShade=600" alt="Your Company">
              </div>
              <div class="-mr-2">
                <button type="button" class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-amber-500">
                  <span class="sr-only">Close menu</span>
                  <!-- Heroicon name: outline/x-mark -->
                  <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>
            <div class="mt-6">
              <nav class="grid grid-cols-1 gap-7">
                <a href="#" class="flex items-center p-3 -m-3 rounded-lg hover:bg-gray-50">
                  <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white rounded-md bg-gradient-to-r from-yellow-600 to-amber-600">
                    <!-- Heroicon name: outline/inbox -->
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H6.911a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661z" />
                    </svg>
                  </div>
                  <div class="ml-4 text-base font-medium text-gray-900">Inbox</div>
                </a>

                <a href="#" class="flex items-center p-3 -m-3 rounded-lg hover:bg-gray-50">
                  <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white rounded-md bg-gradient-to-r from-yellow-600 to-amber-600">
                    <!-- Heroicon name: outline/chat-bubble-bottom-center-text -->
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                    </svg>
                  </div>
                  <div class="ml-4 text-base font-medium text-gray-900">Messaging</div>
                </a>

                <a href="#" class="flex items-center p-3 -m-3 rounded-lg hover:bg-gray-50">
                  <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white rounded-md bg-gradient-to-r from-yellow-600 to-amber-600">
                    <!-- Heroicon name: outline/chat-bubble-left-right -->
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                    </svg>
                  </div>
                  <div class="ml-4 text-base font-medium text-gray-900">Live Chat</div>
                </a>

                <a href="#" class="flex items-center p-3 -m-3 rounded-lg hover:bg-gray-50">
                  <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white rounded-md bg-gradient-to-r from-yellow-600 to-amber-600">
                    <!-- Heroicon name: outline/question-mark-circle -->
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                    </svg>
                  </div>
                  <div class="ml-4 text-base font-medium text-gray-900">Knowledge Base</div>
                </a>
              </nav>
            </div>
          </div>
          <div class="px-5 py-6">
            <div class="grid grid-cols-2 gap-4">
              <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Pricing</a>
              <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Partners</a>
              <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Company</a>
            </div>
            <div class="mt-6">
              <a href="#" class="flex items-center justify-center w-full px-4 py-2 text-base font-medium text-white border border-transparent rounded-md shadow-sm bg-gradient-to-r from-yellow-600 to-amber-600 bg-origin-border hover:from-yellow-700 hover:to-amber-700">Sign up</a>
              <p class="mt-6 text-base font-medium text-center text-gray-500">
                Existing customer?
                <a href="#" class="text-gray-900">Sign in</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main>
    <!-- Hero section -->
    <div class="relative">
      <div class="absolute inset-x-0 bottom-0 bg-gray-100 h-1/2"></div>
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="relative shadow-xl sm:overflow-hidden sm:rounded-2xl">
          <div class="absolute inset-0">
            <img class="object-cover w-full h-full" src="img/hero/papaioannou-kostas-tysecUm5HJA-unsplash.jpg" alt="People working on laptops">
            <div class="absolute inset-0 bg-gradient-to-r from-red-100 to-red-700 mix-blend-multiply"></div>
          </div>
          <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
            <h1 class="text-4xl font-bold tracking-tight text-center sm:text-5xl lg:text-6xl">
              <span class="block text-white">The Golden Hearts</span>
              <span class="block text-amber-300">of Iligan City</span>
            </h1>
            <p class="max-w-lg mx-auto mt-6 text-xl text-center text-white sm:max-w-3xl">
               Helping the beautiful people of the city, providing them instant financial assistance & burial services with a hassle-free process.</p>
            <div class="max-w-sm mx-auto mt-10 sm:flex sm:max-w-none sm:justify-center">
              <div class="space-y-4 sm:mx-auto sm:inline-grid sm:grid-cols-2 sm:gap-5 sm:space-y-0">
                <a href="#" class="flex items-center justify-center px-4 py-3 text-base font-medium bg-white border border-transparent rounded-md shadow-sm text-amber-700 hover:bg-amber-50 sm:px-8">See More</a>
                <a href="#" class="flex items-center justify-center px-4 py-3 text-base font-medium text-white border border-transparent rounded-md shadow-sm bg-amber-500 bg-opacity-60 hover:bg-opacity-70 sm:px-8">Register Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Logo Cloud -->

    <section class="bg-gray-100">
      <div class="px-4 py-16 mx-auto max-w-7xl sm:px-6 lg:px-8">

        <h2 class="mb-16 text-6xl font-bold text-center text-gray-900">The 3-Step Process</h2>
        <div class="grid grid-cols-3 gap-8">
            <div class="px-8 text-center">
              
              <div class="flex items-center justify-center w-48 h-48 p-8 mx-auto text-white rounded-full shadow-lg bg-amber-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-24 h-24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                </svg>
              </div>
              <h4 class="mt-4 text-lg font-bold uppercase">Registration</h4>
              <p>Complete your personal information & emergency contact details</p>
              
            </div>
            <div class="px-8 text-center">
              
              <div class="flex items-center justify-center w-48 h-48 p-8 mx-auto text-white rounded-full shadow-lg bg-amber-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-24 h-24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                </svg>
                
              </div>
              <h4 class="mt-4 text-lg font-bold uppercase">Payment</h4>
              <p>Pay the Registration Fee & Contribution Fee</p>
              
            </div>

            <div class="px-8 text-center">
              
              <div class="flex items-center justify-center w-48 h-48 p-8 mx-auto text-white rounded-full shadow-lg bg-amber-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-24 h-24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                </svg>
                
                
              </div>
              <h4 class="mt-4 text-lg font-bold uppercase">Approval</h4>
              <p>Get approved to the review board.</p>
              
            </div>
        </div>
      </div>
    </section>

    <!-- Alternating Feature Sections -->
    <div class="relative pt-16 pb-32 overflow-hidden">
      <div aria-hidden="true" class="absolute inset-x-0 top-0 h-48 bg-gradient-to-b from-gray-100"></div>
      <div class="relative">
        <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-2 lg:gap-24 lg:px-8">
          <div class="max-w-xl px-4 mx-auto sm:px-6 lg:mx-0 lg:max-w-none lg:py-16 lg:px-0">
            <div>
              <div>
                <span class="flex items-center justify-center w-12 h-12 rounded-md bg-gradient-to-r from-yellow-600 to-amber-600">
                  <!-- Heroicon name: outline/inbox -->
                  <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H6.911a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661z" />
                  </svg>
                </span>
              </div>
              <div class="mt-6">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900">Stay on top of customer support</h2>
                <p class="mt-4 text-lg text-gray-500">Semper curabitur ullamcorper posuere nunc sed. Ornare iaculis bibendum malesuada faucibus lacinia porttitor. Pulvinar laoreet sagittis viverra duis. In venenatis sem arcu pretium pharetra at. Lectus viverra dui tellus ornare pharetra.</p>
                <div class="mt-6">
                  <a href="#" class="inline-flex px-4 py-2 text-base font-medium text-white border border-transparent rounded-md shadow-sm bg-gradient-to-r from-yellow-600 to-amber-600 bg-origin-border hover:from-yellow-700 hover:to-amber-700">Get started</a>
                </div>
              </div>
            </div>
            <div class="pt-6 mt-8 border-t border-gray-200">
              <blockquote>
                <div>
                  <p class="text-base text-gray-500">&ldquo;Cras velit quis eros eget rhoncus lacus ultrices sed diam. Sit orci risus aenean curabitur donec aliquet. Mi venenatis in euismod ut.&rdquo;</p>
                </div>
                <footer class="mt-3">
                  <div class="flex items-center space-x-3">
                    <div class="flex-shrink-0">
                      <img class="w-6 h-6 rounded-full" src="https://images.unsplash.com/photo-1509783236416-c9ad59bae472?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                    </div>
                    <div class="text-base font-medium text-gray-700">Marcia Hill, Digital Marketing Manager</div>
                  </div>
                </footer>
              </blockquote>
            </div>
          </div>
          <div class="mt-12 sm:mt-16 lg:mt-0">
            <div class="pl-4 -mr-48 sm:pl-6 md:-mr-16 lg:relative lg:m-0 lg:h-full lg:px-0">
              <img class="w-full shadow-xl rounded-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none" src="https://tailwindui.com/img/component-images/inbox-app-screenshot-1.jpg" alt="Inbox user interface">
            </div>
          </div>
        </div>
      </div>
      <div class="mt-24">
        <div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-2 lg:gap-24 lg:px-8">
          <div class="max-w-xl px-4 mx-auto sm:px-6 lg:col-start-2 lg:mx-0 lg:max-w-none lg:py-32 lg:px-0">
            <div>
              <div>
                <span class="flex items-center justify-center w-12 h-12 rounded-md bg-gradient-to-r from-yellow-600 to-amber-600">
                  <!-- Heroicon name: outline/sparkles -->
                  <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                  </svg>
                </span>
              </div>
              <div class="mt-6">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900">Better understand your customers</h2>
                <p class="mt-4 text-lg text-gray-500">Semper curabitur ullamcorper posuere nunc sed. Ornare iaculis bibendum malesuada faucibus lacinia porttitor. Pulvinar laoreet sagittis viverra duis. In venenatis sem arcu pretium pharetra at. Lectus viverra dui tellus ornare pharetra.</p>
                <div class="mt-6">
                  <a href="#" class="inline-flex px-4 py-2 text-base font-medium text-white border border-transparent rounded-md shadow-sm bg-gradient-to-r from-yellow-600 to-amber-600 bg-origin-border hover:from-yellow-700 hover:to-amber-700">Get started</a>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-12 sm:mt-16 lg:col-start-1 lg:mt-0">
            <div class="pr-4 -ml-48 sm:pr-6 md:-ml-16 lg:relative lg:m-0 lg:h-full lg:px-0">
              <img class="w-full shadow-xl rounded-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none" src="https://tailwindui.com/img/component-images/inbox-app-screenshot-2.jpg" alt="Customer profile user interface">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-gray-100">
      <div class="pt-12 sm:pt-16 lg:pt-20">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl lg:text-5xl">Simple no-tricks pricing</h2>
            <p class="mt-4 text-xl text-gray-600">If you're not satisfied, contact us within the first 14 days and we'll send you a full refund.</p>
          </div>
        </div>
      </div>
      <div class="pb-16 mt-8 bg-white sm:mt-12 sm:pb-20 lg:pb-28">
        <div class="relative">
          <div class="absolute inset-0 bg-gray-100 h-1/2"></div>
          <div class="relative px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="max-w-lg mx-auto overflow-hidden rounded-lg shadow-lg lg:flex lg:max-w-none">
              <div class="flex-1 px-6 py-8 bg-white lg:p-12">
                <h3 class="text-2xl font-bold text-gray-900 sm:text-3xl sm:tracking-tight">Lifetime Membership</h3>
                <p class="mt-6 text-base text-gray-500">Lorem ipsum dolor sit amet consect etur adipisicing elit. Itaque amet indis perferendis blanditiis repellendus etur quidem assumenda.</p>
                <div class="mt-8">
                  <div class="flex items-center">
                    <h4 class="flex-shrink-0 pr-4 text-base font-semibold text-indigo-600 bg-white">What's included</h4>
                    <div class="flex-1 border-t-2 border-gray-200"></div>
                  </div>
                  <ul role="list" class="mt-8 space-y-5 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:gap-y-5 lg:space-y-0">
                    <li class="flex items-start lg:col-span-1">
                      <div class="flex-shrink-0">
                        <!-- Heroicon name: mini/check-circle -->
                        <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                        </svg>
                      </div>
                      <p class="ml-3 text-sm text-gray-700">Instant cash assistance</p>
                    </li>
    
                    <li class="flex items-start lg:col-span-1">
                      <div class="flex-shrink-0">
                        <!-- Heroicon name: mini/check-circle -->
                        <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                        </svg>
                      </div>
                      <p class="ml-3 text-sm text-gray-700">SMS and Notifications</p>
                    </li>
    
                    <li class="flex items-start lg:col-span-1">
                      <div class="flex-shrink-0">
                        <!-- Heroicon name: mini/check-circle -->
                        <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                        </svg>
                      </div>
                      <p class="ml-3 text-sm text-gray-700">Delivered door-to-door</p>
                    </li>
    
                    <li class="flex items-start lg:col-span-1">
                      <div class="flex-shrink-0">
                        <!-- Heroicon name: mini/check-circle -->
                        <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                        </svg>
                      </div>
                      <p class="ml-3 text-sm text-gray-700">Online platform</p>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="px-6 py-8 text-center bg-gray-50 lg:flex lg:flex-shrink-0 lg:flex-col lg:justify-center lg:p-12">
                <p class="text-lg font-medium leading-6 text-gray-900">Pay once, own it forever</p>
                <div class="flex items-center justify-center mt-4 text-5xl font-bold tracking-tight text-gray-900">
                  <span>₱300</span>
                  <span class="ml-3 text-xl font-medium tracking-normal text-gray-500">PHP</span>
                </div>
                <p class="mt-4 text-sm">
                  <a href="#" class="font-medium text-gray-500 underline">Learn about our membership policy</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <!-- Stats section -->
    <div class="relative bg-gray-900">
      <div class="absolute inset-x-0 bottom-0 h-80 xl:top-0 xl:h-full">
        <div class="w-full h-full xl:grid xl:grid-cols-2">
          <div class="h-full xl:relative xl:col-start-2">
            <img class="object-cover w-full h-full opacity-25 xl:absolute xl:inset-0" src="https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2830&q=80&sat=-100" alt="People working on laptops">
            <div aria-hidden="true" class="absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-gray-900 xl:inset-y-0 xl:left-0 xl:h-full xl:w-32 xl:bg-gradient-to-r"></div>
          </div>
        </div>
      </div>
      <div class="max-w-4xl px-4 mx-auto sm:px-6 lg:max-w-7xl lg:px-8 xl:grid xl:grid-flow-col-dense xl:grid-cols-2 xl:gap-x-8">
        <div class="relative pt-12 pb-64 sm:pt-24 sm:pb-64 xl:col-start-1 xl:pb-24">
          <h2 class="text-base font-semibold">
            <span class="text-transparent bg-gradient-to-r from-yellow-300 to-amber-300 bg-clip-text">Valuable Metrics</span>
          </h2>
          <p class="mt-3 text-3xl font-bold tracking-tight text-white">Get actionable data that will help grow your business</p>
          <p class="mt-5 text-lg text-gray-300">Rhoncus sagittis risus arcu erat lectus bibendum. Ut in adipiscing quis in viverra tristique sem. Ornare feugiat viverra eleifend fusce orci in quis amet. Sit in et vitae tortor, massa. Dapibus laoreet amet lacus nibh integer quis. Eu vulputate diam sit tellus quis at.</p>
          <div class="grid grid-cols-1 mt-12 gap-y-12 gap-x-6 sm:grid-cols-2">
            <p>
              <span class="block text-2xl font-bold text-white">3K+</span>
              <span class="block mt-1 text-base text-gray-300"><span class="font-medium text-white">Members</span></span>
            </p>

            <p>
              <span class="block text-2xl font-bold text-white">44</span>
              <span class="block mt-1 text-base text-gray-300"><span class="font-medium text-white">Barangays</span> for instant support</span>
            </p>

            <p>
              <span class="block text-2xl font-bold text-white">87k+</span>
              <span class="block mt-1 text-base text-gray-300"><span class="font-medium text-white">Cash Assistance</span> released.</span>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-white">
      <div class="max-w-4xl px-4 py-16 mx-auto sm:px-6 sm:py-24 lg:flex lg:max-w-7xl lg:items-center lg:justify-between lg:px-8">
        <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-4xl">
          <span class="block">Ready to get started?</span>
          <span class="block pb-1 -mb-1 text-transparent bg-gradient-to-r from-yellow-600 to-amber-600 bg-clip-text">Get in touch now.</span>
        </h2>
        <div class="mt-6 space-y-4 sm:flex sm:space-y-0 sm:space-x-5">
          <a href="#" class="flex items-center justify-center px-4 py-3 text-base font-medium text-white border border-transparent rounded-md shadow-sm bg-gradient-to-r from-yellow-600 to-amber-600 bg-origin-border hover:from-yellow-700 hover:to-amber-700">Learn more</a>
          <a href="#" class="flex items-center justify-center px-4 py-3 text-base font-medium border border-transparent rounded-md shadow-sm text-amber-800 bg-amber-50 hover:bg-amber-100">Get started</a>
        </div>
      </div>
    </div>
  </main>

  <footer class="bg-gray-100" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:py-16 lg:px-8">
      <div class="xl:grid xl:grid-cols-3 xl:gap-8">
        <div class="space-y-8 xl:col-span-1">
          <img class="h-10" src="https://tailwindui.com/img/logos/mark.svg?color=gray&shade=300" alt="Company name">
          <p class="text-base text-gray-500">Making the world a better place through constructing elegant hierarchies.</p>
        </div>
        <div class="grid grid-cols-2 gap-8 mt-12 xl:col-span-2 xl:mt-0">
          <div class="md:grid md:grid-cols-2 md:gap-8">
            <div>
              <h3 class="text-base font-medium text-gray-900">Solutions</h3>
              <ul role="list" class="mt-4 space-y-4">
                <li>
                  <a href="#" class="text-base text-gray-500 hover:text-gray-900">Marketing</a>
                </li>
  
                <li>
                  <a href="#" class="text-base text-gray-500 hover:text-gray-900">Analytics</a>
                </li>
  
                <li>
                  <a href="#" class="text-base text-gray-500 hover:text-gray-900">Commerce</a>
                </li>
  
                <li>
                  <a href="#" class="text-base text-gray-500 hover:text-gray-900">Insights</a>
                </li>
              </ul>
            </div>
            <div class="mt-12 md:mt-0">
              <h3 class="text-base font-medium text-gray-900">Support</h3>
              <ul role="list" class="mt-4 space-y-4">
                <li>
                  <a href="{{ url('pricing') }}" class="text-base text-gray-500 hover:text-gray-900">Pricing</a>
                </li>

                <li>
                  <a href="{{ url('faq') }}" class="text-base text-gray-500 hover:text-gray-900">FAQ</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="md:grid md:grid-cols-2 md:gap-8">
            <div>
              <h3 class="text-base font-medium text-gray-900">Company</h3>
              <ul role="list" class="mt-4 space-y-4">
                <li>
                  <a href="{{ url('about') }}" class="text-base text-gray-500 hover:text-gray-900">About</a>
                </li>

                <li>
                  <a href="{{ url('contact') }}" class="text-base text-gray-500 hover:text-gray-900">Contact Us</a>
                </li>
                
                <li>
                  <a href="{{ url('press') }}" class="text-base text-gray-500 hover:text-gray-900">Press</a>
                </li>

                <li>
                  <a href="{{ url('partners') }}" class="text-base text-gray-500 hover:text-gray-900">Partners</a>
                </li>
              </ul>
            </div>
            <div class="mt-12 md:mt-0">
              <h3 class="text-base font-medium text-gray-900">Legal</h3>
              <ul role="list" class="mt-4 space-y-4">
                <li>
                  <a href="{{ url('privacy') }}" class="text-base text-gray-500 hover:text-gray-900">Privacy</a>
                </li>

                <li>
                  <a href="{{ url('terms') }}" class="text-base text-gray-500 hover:text-gray-900">Terms</a>
                </li>

                <li>
                  <a href="{{ url('sec') }}" class="text-base text-gray-500 hover:text-gray-900">Security and Exchange Comission (SEC)</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="pt-8 mt-12 border-t border-gray-200">
        <p class="text-base text-gray-400 xl:text-center">&copy; {{ date('Y') }} {{ config('app.name') }} All rights reserved.</p>
      </div>
    </div>
  </footer>
  
</div>

  
</x-guest-layout>