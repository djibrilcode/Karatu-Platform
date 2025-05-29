            <header class="flex justify-between items-center border-b bg-white shadow px-6 py-4">
                <button id="toggleSidebar" class="text-indigo-800 ">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="flex items-center space-x-4">
                    <input type="text" placeholder="Rechercher..." class="border px-2 py-1 rounded">
                    <i class="fas fa-bell text-gray-600"></i>
                    <button @click="open = !open"
                    class="relative w-10 h-10 flex items-center justify-center rounded-full bg-gray-900 border-white text-white text-xl font-bold focus:outline-none">
                    {{ $initials }}
                    <span class="absolute top-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full"></span>
                </button>
                </div>
            </header>
