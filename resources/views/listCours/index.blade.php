<x-layout>
    <section id="courses" class="bg-white py-4 px-6 lg:px-20">
        <div class="text-left mb-10">
            <h2 class="text-3xl font-bold text-gray-800">Nos Cours</h2>
        </div>

        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
            <!-- Cours statiques -->
            <div class="group bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition duration-300 cursor-pointer">
                <!-- Image -->
                <a href="#">
                    <img src="{{ asset('images/programmation.jpg') }}" alt="Cours 1" class="w-full h-36 object-cover">
                </a>

                <!-- Contenu -->
                <div class="p-4">
                    <h3 class="text-md font-semibold text-gray-900 mb-1 truncate">Introduction à la programmation</h3>
                    <p class="text-xs text-gray-500 mb-2">Par John Doe</p>
                    <div class="flex items-center text-sm text-yellow-400 mb-2">
                        @for ($i = 1; $i <= 5; $i++)
                            <i class="fas fa-star"></i>
                        @endfor
                        <span class="text-gray-600 ml-2 text-xs">(150 avis)</span>
                    </div>
                    <div class="text-gray-900 font-bold text-sm mb-1">49.99 €</div>
                    <span class="inline-block bg-yellow-200 text-yellow-800 text-xs font-medium px-2 py-0.5 rounded">Best-seller</span>
                </div>
            </div>

            <div class="group bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition duration-300 cursor-pointer">
                <a href="#">
                    <img src="{{ asset('images/javascript.png') }}" alt="Cours 2" class="w-full h-36 object-cover">
                </a>
                <div class="p-4">
                    <h3 class="text-md font-semibold text-gray-900 mb-1 truncate">Développement Web Avancé</h3>
                    <p class="text-xs text-gray-500 mb-2">Par Jane Smith</p>
                    <div class="flex items-center text-sm text-yellow-400 mb-2">
                        @for ($i = 1; $i <= 4; $i++)
                            <i class="fas fa-star"></i>
                        @endfor
                        <i class="fas fa-star-o"></i>
                        <span class="text-gray-600 ml-2 text-xs">(85 avis)</span>
                    </div>
                    <div class="text-gray-900 font-bold text-sm mb-1">79.99 €</div>
                </div>
            </div>

            <div class="group bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition duration-300 cursor-pointer">
                <a href="#">
                    <img src="{{ asset('images/marketing.jpg') }}" alt="Cours 3" class="w-full h-36 object-cover">
                </a>
                <div class="p-4">
                    <h3 class="text-md font-semibold text-gray-900 mb-1 truncate">Python pour les débutants</h3>
                    <p class="text-xs text-gray-500 mb-2">Par Alice Johnson</p>
                    <div class="flex items-center text-sm text-yellow-400 mb-2">
                        @for ($i = 1; $i <= 5; $i++)
                            <i class="fas fa-star"></i>
                        @endfor
                        <span class="text-gray-600 ml-2 text-xs">(200 avis)</span>
                    </div>
                    <div class="text-gray-900 font-bold text-sm mb-1">59.99 €</div>
                </div>
            </div>

            <div class="group bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition duration-300 cursor-pointer">
                <a href="#">
                    <img src="{{ asset('images/datascience.jpg') }}" alt="Cours 4" class="w-full h-36 object-cover">
                </a>
                <div class="p-4">
                    <h3 class="text-md font-semibold text-gray-900 mb-1 truncate">Introduction à la Data Science</h3>
                    <p class="text-xs text-gray-500 mb-2">Par Michael Brown</p>
                    <div class="flex items-center text-sm text-yellow-400 mb-2">
                        @for ($i = 1; $i <= 4; $i++)
                            <i class="fas fa-star"></i>
                        @endfor
                        <i class="fas fa-star-o"></i>
                        <span class="text-gray-600 ml-2 text-xs">(120 avis)</span>
                    </div>
                    <div class="text-gray-900 font-bold text-sm mb-1">89.99 €</div>
                </div>
            </div>

            <!-- Boucle foreach pour les cours dynamiques -->
            @foreach ($courses as $course)
                <div class="group bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition duration-300 cursor-pointer">
                    <a href="{{ route('course.show', $course->id) }}">
                        <img src="{{ asset('images/'.$course->image_url) }}" alt="{{ $course->title }}" class="w-full h-36 object-cover">
                    </a>
                    <div class="p-4">
                        <h3 class="text-md font-semibold text-gray-900 mb-1 truncate">{{ $course->title }}</h3>
                        <p class="text-xs text-gray-500 mb-2">Par {{ $course->user->name ?? 'Instructeur inconnu' }}</p>
                        <div class="flex items-center text-sm text-yellow-400 mb-2">
                            @php $rating = round($course->rating ?? 4); @endphp
                            @for ($i = 1; $i <= 5; $i++)
                                <i class="fas fa-star{{ $i <= $rating ? '' : '-o' }}"></i>
                            @endfor
                            <span class="text-gray-600 ml-2 text-xs">({{ $course->reviews ?? 120 }} avis)</span>
                        </div>
                        <div class="text-gray-900 font-bold text-sm mb-1">{{ $course->price }} €</div>
                        @if ($course->is_best_seller)
                            <span class="inline-block bg-yellow-200 text-yellow-800 text-xs font-medium px-2 py-0.5 rounded">Best-seller</span>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</x-layout>
