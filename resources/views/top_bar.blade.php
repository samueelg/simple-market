<div class="w-full bg-white shadow-md px-4 py-2 flex items-center justify-between">
  <!-- Logo -->
  <div class="text-2xl font-bold text-blue-600">
    MarketPlace
  </div>

  <!-- Search Bar -->
  <div class="flex-1 max-w-lg mx-4">
    <input
      type="text"
      placeholder="Buscar produtos..."
      class="w-full px-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500"
    />
  </div>

  <!-- Icons -->
  <div class="flex items-center space-x-4">
    <!-- Notifications -->
    <button class="relative">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none"
        viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 
          6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C8.67 
          6.165 8 7.388 8 8.75v5.408c0 .538-.214 1.055-.595 
          1.437L6 17h5m4 0v1a3 3 0 11-6 0v-1m6 0H9" />
      </svg>
      <span
        class="absolute top-0 right-0 bg-red-500 text-white rounded-full w-4 h-4 text-xs flex items-center justify-center">
        3
      </span>
    </button>

    <!-- Cart -->
    <button class="relative">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none"
        viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 
          7M7 13l-2 5h13m-9 0a1 1 0 100 2 1 1 0 
          000-2zm6 0a1 1 0 100 2 1 1 0 000-2z" />
      </svg>
      <span
        class="absolute top-0 right-0 bg-red-500 text-white rounded-full w-4 h-4 text-xs flex items-center justify-center">
        2
      </span>
    </button>

    <!-- User Avatar -->
    <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center text-gray-600 font-semibold">
      U
    </div>
  </div>
</div>
