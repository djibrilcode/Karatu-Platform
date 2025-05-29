<x-layout>
    <section class="bg-gray-50 py-20 px-6 lg:px-24">
        <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-xl p-10">
          <h2 class="text-indigo-600 text-3xl font-bold  mb-6 text-center">Contactez-nous</h2>
          <p class="text-gray-600 mb-8">Des questions, remarques ou suggestions ? Remplis le formulaire ci-dessous, notre équipe te répondra rapidement.</p>

          <form class="space-y-6">
            <div>
              <label class="block text-gray-700 font-semibold mb-1">Nom</label>
              <input type="text" class="w-full border border-gray-300 rounded-xl px-4 py-3  focus:ring-indigo-500" placeholder="Votre nom complet">
            </div>
            <div>
              <label class="block text-gray-700 font-semibold mb-1">Email</label>
              <input type="email" class="w-full border border-gray-300 rounded-xl px-4 py-3  focus:ring-indigo-500" placeholder="adresse@email.com">
            </div>
            <div>
              <label class="block text-gray-700 font-semibold mb-1">Message</label>
              <textarea rows="5" class="w-full border border-gray-300 rounded-xl px-4 py-3  focus:ring-indigo-500" placeholder="Votre message..."></textarea>
            </div>
            <button type="submit" class="bg-indigo-600 text-white px-6 py-3 rounded-xl font-semibold hover:bg-indigo-700 transition">Envoyer</button>
          </form>
        </div>
      </section>

</x-layout>
