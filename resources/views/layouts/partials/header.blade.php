
<nav class="bg-lime-700">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        </div>
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
          <div class="hidden sm:block sm:ml-6">
            <div class="flex space-x-4">
              <a href="{{ route('home') }}" class="text-gray-100 hover:bg-lime-800 hover:text-white px-3 py-2 rounded-md text-base font-medium">Home</a>
  
              <a href="{{ route('teams.index') }}" class="text-gray-100 hover:bg-lime-800 hover:text-white px-3 py-2 rounded-md text-base  font-medium">Equips</a>
  
              <a href="{{ route('stadia.index') }}" class="text-gray-100 hover:bg-lime-800 hover:text-white px-3 py-2 rounded-md text-base  font-medium">Estadis</a>
  
              <a href="{{ route('players.index') }}" class="text-gray-100 hover:bg-lime-800 hover:text-white px-3 py-2 rounded-md text-base  font-medium">Jugadors</a>

              <a href="{{ route('games.index') }}" class="text-gray-100 hover:bg-lime-800 hover:text-white px-3 py-2 rounded-md text-base  font-medium">Partits</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sm:hidden" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1">
  
        <a href="{{ route('home') }}" class="text-gray-100 hover:bg-lime-800 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>
  
        <a href="{{ route('teams.index') }}" class="text-gray-100 hover:bg-lime-800 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Equips</a>
  
        <a href="{{ route('stadia.index') }}" class="text-gray-100 hover:bg-lime-800 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Estadis</a>
  
        <a href="{{ route('players.index') }}" class="text-gray-100 hover:bg-lime-800 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Jugadors</a>

        <a href="{{ route('games.index') }}" class="text-gray-100 hover:bg-lime-800 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Partits</a>
      </div>
    </div>
  </nav>
  