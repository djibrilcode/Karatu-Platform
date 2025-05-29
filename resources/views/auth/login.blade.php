<!-- resources/views/auth/login.blade.php -->
<x-guest-layout>
    <div class="min-h-screen bg-gray-100 flex items-center justify-center px-4">
        <div class="w-full max-w-sm bg-white shadow-xl rounded-xl p-8">
            <!-- Header -->
            <div class="mb-6 text-center">
                <h1 class="text-2xl font-bold text-gray-900">Connexion à Karatu</h1>
                <p class="text-sm text-gray-500 mt-1">Entrez vos identifiants pour accéder à votre compte</p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Form -->
            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <!-- Email -->
                <div>
                    <x-input-label for="email" :value="__('Adresse Email')" />
                    <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus
                        class="mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Mot de passe')" />
                    <x-text-input id="password" type="password" name="password" required
                        class="mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember me & Forgot password -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember"
                            class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                        <span class="ml-2 text-sm text-gray-600">Se souvenir de moi</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a class="text-sm text-indigo-600 hover:underline" href="{{ route('password.request') }}">
                            Mot de passe oublié ?
                        </a>
                    @endif
                </div>

                <!-- Submit -->
                <div>
                    <x-primary-button class="w-full justify-center bg-indigo-600 hover:bg-indigo-700 focus:ring focus:ring-indigo-300 text-white">
                        Connexion
                    </x-primary-button>
                </div>
            </form>

            <!-- Register -->
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Pas encore de compte ?
                    <a href="{{ route('register') }}" class="text-indigo-600 font-medium hover:underline">
                        Créer un compte
                    </a>
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>
