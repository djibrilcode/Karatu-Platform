        <aside class="bg-white border-r-2 flex flex-col fixed top-16 left-0 w-64 h-[calc(100vh-4rem)] overflow-y-auto">
            <div class="flex flex-col mt-6 ml-4 space-y-4">
                <a href="{{ route('enseignant.dashboard') }}"
                class="block px-4 py-2 text-gray-700 rounded-lg hover:bg-indigo-100 hover:text-indigo-600 transition
                {{ request()->routeIs('dashboards.enseignant') ? 'bg-indigo-100 text-indigo-600' : '' }}">
                <i class="fas fa-tachometer-alt mr-2"></i> dashboard
             </a>
                <a href="{{ route('course.index') }}"
                   class="block px-4 py-2 text-gray-700 rounded-lg hover:bg-indigo-100 hover:text-indigo-600 transition
                   {{ request()->routeIs('course.index') ? 'bg-indigo-100 text-indigo-600' : '' }}">
                    <i class="fas fa-book mr-2"></i> Cours
                </a>
                <a href="{{ route('lesson.index') }}"
                   class="block px-4 py-2 text-gray-700 rounded-lg hover:bg-indigo-100 hover:text-indigo-600 transition
                   {{ request()->routeIs('lesson.index') ? 'bg-indigo-100 text-indigo-600' : '' }}">
                    <i class="fas fa-play-circle mr-2"></i> Leçons
                </a>
                <a href="{{ route('quizz.index') }}"
                   class="block px-4 py-2 text-gray-700 rounded-lg hover:bg-indigo-100 hover:text-indigo-600 transition
                   {{ request()->routeIs('quizz.index') ? 'bg-indigo-100 text-indigo-600' : '' }}">
                    <i class="fas fa-question-circle mr-2"></i> Quizzs
                </a>
                <a href="{{ route('enrollment.index') }}"
                   class="block px-4 py-2 text-gray-700 rounded-lg hover:bg-indigo-100 hover:text-indigo-600 transition
                   {{ request()->routeIs('enrollment.index') ? 'bg-indigo-100 text-indigo-600' : '' }}">
                    <i class="fas fa-users mr-2"></i> Étudiants
                </a>
            </div>

            {{-- Bouton de déconnexion en bas --}}
            <form method="POST" action="{{ route('logout') }}" class="mt-auto px-4 mb-4">
                @csrf
                <button type="submit"
                    class="w-full text-left px-4 py-2 text-red-600 hover:bg-red-100 rounded-lg transition">
                    <i class="fas fa-sign-out-alt mr-2"></i> Déconnexion
                </button>
            </form>
        </aside>
