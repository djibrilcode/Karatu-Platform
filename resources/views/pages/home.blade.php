<x-layout>
    <!-- HERO -->
    <section class="bg-indigo-50 p-16 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 mt-0 text-center">
            <div id="hero-carousel" class="relative">
                <!-- Slides -->
                <div class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight transition-opacity duration-1000 opacity-100" data-slide>
                    Apprenez à votre rythme avec <br> la plateforme <span class="text-indigo-600">Karatu.na</span>
                </div>
                <div class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight transition-opacity duration-1000 opacity-0 hidden" data-slide>
                    Développez vos compétences et boostez votre carrière.
                </div>
                <div class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight transition-opacity duration-1000 opacity-0 hidden" data-slide>
                    Rejoignez une communauté d'apprenants passionnés.
                </div>

                <!-- Navigation -->
                <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 flex space-x-2 mt-6">
                    <button class="w-3 h-3 bg-gray-400 rounded-full focus:outline-none" data-carousel-dot></button>
                    <button class="w-3 h-3 bg-gray-400 rounded-full focus:outline-none" data-carousel-dot></button>
                    <button class="w-3 h-3 bg-gray-400 rounded-full focus:outline-none" data-carousel-dot></button>
                </div>
            </div>
            <p class="mt-6 text-lg text-gray-700">Des centaines de cours en ligne pour développer vos compétences et booster votre carrière.</p>
            <div class="mt-8">
                <a href="{{ route('listCours') }}" class="bg-indigo-600 text-white px-6 py-3 rounded-xl text-lg hover:bg-indigo-500 transition">Commencer maintenant</a>
            </div>
        </div>
    </section>

    <!-- À PROPOS -->
    <section class="mt-2 py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
            <img src="{{ asset('images/learning.jpg') }}" alt="Learning" class="rounded-xl">
            <div>
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Une plateforme adaptée à tous les niveaux</h3>
                <p class="text-gray-700 mb-4">Que vous soyez débutant ou professionnel, Karatu-platform vous propose des parcours adaptés à vos besoins. Nos formateurs experts vous accompagnent dans votre apprentissage.</p>
                <ul class="list-disc pl-5 text-gray-700">
                    <li>Cours interactifs et certifiants</li>
                    <li>Accès illimité 24h/24</li>
                    <li>Suivi personnalisé</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- AVANTAGES -->
    <section class="py-20 bg-indigo-600 text-white">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h3 class="text-3xl font-bold mb-10">Pourquoi choisir Karatu-platform ?</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-indigo-700 p-6 rounded-xl shadow-md">
                    <h4 class="text-xl font-semibold mb-2">Accessibilité</h4>
                    <p>Apprenez où que vous soyez, depuis votre ordinateur ou mobile.</p>
                </div>
                <div class="bg-indigo-700 p-6 rounded-xl shadow-md">
                    <h4 class="text-xl font-semibold mb-2">Formateurs qualifiés</h4>
                    <p>Des experts passionnés pour vous guider tout au long de votre parcours.</p>
                </div>
                <div class="bg-indigo-700 p-6 rounded-xl shadow-md">
                    <h4 class="text-xl font-semibold mb-2">Communauté active</h4>
                    <p>Partagez, échangez et progressez avec d'autres apprenants.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- TÉMOIGNAGES -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <h3 class="text-3xl font-bold mb-10 text-gray-800">Ils ont aimé Karatu-platform</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <p class="text-gray-700">"Une plateforme très intuitive et des cours de qualité. J’ai obtenu un emploi grâce à ce que j’ai appris ici."</p>
                    <p class="mt-4 font-semibold text-indigo-600">— Amina, Développeuse web</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <p class="text-gray-700">"J’ai beaucoup progressé en peu de temps. Les vidéos sont claires et bien structurées."</p>
                    <p class="mt-4 font-semibold text-indigo-600">— Idriss, Étudiant</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <p class="text-gray-700">"Les quiz et exercices pratiques sont un vrai plus pour bien retenir."</p>
                    <p class="mt-4 font-semibold text-indigo-600">— Sarah, Manager RH</p>
                </div>
            </div>
        </div>
    </section>
</x-layout>
