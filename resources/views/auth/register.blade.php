<x-guest-layout>
    <div class="min-h-screen bg-gray-50 flex items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-6 bg-white p-10 shadow-xl rounded-2xl">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900">Créer un compte</h2>
                <p class="mt-2 text-sm text-gray-600">Inscris-toi pour accéder à nos formations en ligne.</p>
            </div>

            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <!-- Nom complet -->
                <div>
                    <x-input-label for="name" :value="__('Nom complet')" />
                    <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                        class="w-full mt-1 block border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Adresse email -->
                <div>
                    <x-input-label for="email" :value="__('Adresse Email')" />
                    <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username"
                        class="w-full mt-1 block border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Mot de passe -->
                <div>
                    <x-input-label for="password" :value="__('Mot de passe')" />
                    <x-text-input id="password" type="password" name="password" required autocomplete="new-password"
                        class="w-full mt-1 block border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirmation mot de passe -->
                <div>
                    <x-input-label for="password_confirmation" :value="__('Confirmer le mot de passe')" />
                    <x-text-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                        class="w-full mt-1 block border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Rôle -->
                <div>
                    <x-input-label for="role" :value="__('Rôle')" />
                    <select id="role" name="role"
                        class="w-full mt-1 block border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="etudiant">Étudiant</option>
                        <option value="enseignant">Enseignant</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>

                <!-- Bouton + redirection -->
                <div class="flex items-center justify-between">
                    <a href="{{ route('login') }}" class="text-sm text-indigo-600 hover:underline">
                        {{ __('Déjà inscrit ? Connecte-toi') }}
                    </a>

                    <x-primary-button class="ml-3 bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-300">
                        {{ __('S’inscrire') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
