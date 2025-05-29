<x-layout>

    <section class="bg-white py-20 px-6 lg:px-24">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
          <div>
            <h1 class="text-4xl font-bold text-gray-800 mb-6">Bienvenue sur <span class="text-indigo-600">Karatu Platform</span></h1>
            <p class="text-gray-600 text-lg mb-4 leading-relaxed">
              Karatu est une plateforme de formation moderne conçue pour transformer l'apprentissage en ligne. Notre objectif est de fournir des cours accessibles, interactifs et de haute qualité.
            </p>
            <p class="text-gray-600 text-lg mb-6">
              Nous accompagnons chaque apprenant dans son parcours grâce à des contenus structurés, des formateurs passionnés et une interface intuitive.
            </p>
            <a href="/cours" class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-xl text-sm font-semibold hover:bg-indigo-700 transition">Voir les cours</a>
          </div>
          <div>
            <img src="{{ asset('images/learning.jpg') }}" class="w-full rounded-2xl shadow-lg">
          </div>
        </div>
      </section>


</x-layout>
