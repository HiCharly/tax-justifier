<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} - Gestion des Déplacements Professionnels</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 dark:bg-gray-900">
    <!-- Navigation -->
    <nav class="bg-white dark:bg-gray-800 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <h1 class="text-2xl font-bold text-gray-900 dark:text-white flex items-center">
                            <flux:icon name="document-currency-euro" class="w-8 h-8 mr-2 text-blue-600" />
                            {{ config('app.name') }}
                        </h1>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('filament.app.auth.login') }}" class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                        Connexion
                    </a>
                    <a href="{{ route('filament.app.auth.register') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium">
                        S'inscrire
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-gray-800 dark:to-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="py-12 sm:py-16 lg:py-20">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                    <!-- Content -->
                    <div class="text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white sm:text-5xl lg:text-6xl">
                            <span class="block">Justifiez vos</span>
                            <span class="block text-blue-600">déplacements professionnels</span>
                        </h1>
                        <p class="mt-6 text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto lg:mx-0">
                            Simplifiez la gestion de vos trajets domicile-travail et optimisez vos déclarations fiscales. 
                            Enregistrez, calculez et justifiez vos frais de transport en quelques clics.
                        </p>
                        <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                            <a href="{{ route('filament.app.auth.register') }}" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transition-colors duration-200">
                                Commencer gratuitement
                            </a>
                            <a href="#features" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-200 dark:bg-blue-900 dark:text-blue-100 dark:hover:bg-blue-800 transition-colors duration-200">
                                Découvrir les fonctionnalités
                            </a>
                        </div>
                    </div>
                    
                    <!-- Visual -->
                    <div class="relative">
                        <div class="bg-gradient-to-r from-blue-500 to-indigo-600 rounded-2xl p-8 shadow-2xl">
                            <div class="text-white text-center">
                                <div class="flex justify-center mb-6">
                                    <flux:icon name="document-currency-euro" class="w-16 h-16 text-white" />
                                </div>
                                <h3 class="text-2xl font-bold mb-2">Gestion Simplifiée</h3>
                                <p class="text-blue-100 mb-6">de vos trajets professionnels</p>
                                <div class="grid grid-cols-2 gap-4 text-sm">
                                    <div class="bg-white/20 rounded-lg p-3">
                                        <div class="text-2xl mb-1">📍</div>
                                        <div class="font-semibold">Adresses</div>
                                    </div>
                                    <div class="bg-white/20 rounded-lg p-3">
                                        <div class="text-2xl mb-1">📅</div>
                                        <div class="font-semibold">Trajets</div>
                                    </div>
                                    <div class="bg-white/20 rounded-lg p-3">
                                        <div class="text-2xl mb-1">🚗</div>
                                        <div class="font-semibold">Véhicules</div>
                                    </div>
                                    <div class="bg-white/20 rounded-lg p-3">
                                        <div class="text-2xl mb-1">📊</div>
                                        <div class="font-semibold">Rapports</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div id="features" class="py-12 bg-white dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-blue-600 font-semibold tracking-wide uppercase">Fonctionnalités</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                    Tout ce dont vous avez besoin
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 dark:text-gray-300 lg:mx-auto">
                    Une solution complète pour gérer vos déplacements professionnels et optimiser vos déclarations fiscales.
                </p>
            </div>

            <div class="mt-10">
                <div class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                    <!-- Feature 1 -->
                    <div class="relative">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                            📍
                        </div>
                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900 dark:text-white">Gestion des Adresses</p>
                        <p class="mt-2 ml-16 text-base text-gray-500 dark:text-gray-300">
                            Enregistrez vos adresses domicile et travail pour calculer automatiquement les distances et durées de trajet.
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="relative">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                            🚗
                        </div>
                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900 dark:text-white">Gestion des Véhicules</p>
                        <p class="mt-2 ml-16 text-base text-gray-500 dark:text-gray-300">
                            Ajoutez vos véhicules personnels et professionnels pour un suivi précis de vos déplacements.
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="relative">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                            📅
                        </div>
                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900 dark:text-white">Suivi des Trajets</p>
                        <p class="mt-2 ml-16 text-base text-gray-500 dark:text-gray-300">
                            Enregistrez facilement vos trajets professionnels avec date, véhicule utilisé et adresses.
                        </p>
                    </div>

                    <!-- Feature 4 -->
                    <div class="relative">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                            📊
                        </div>
                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900 dark:text-white">Rapports Fiscaux</p>
                        <p class="mt-2 ml-16 text-base text-gray-500 dark:text-gray-300">
                            Générez automatiquement des rapports détaillés pour vos déclarations d'impôts et justificatifs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Benefits Section -->
    <div class="bg-gray-50 dark:bg-gray-900 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-blue-600 font-semibold tracking-wide uppercase">Avantages</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                    Pourquoi choisir {{ config('app.name') }} ?
                </p>
            </div>

            <div class="mt-10">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="pt-6">
                        <div class="flow-root bg-white dark:bg-gray-800 rounded-lg px-6 pb-8 shadow">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-blue-500 rounded-md shadow-lg">
                                        <span class="text-2xl">⏰</span>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 dark:text-white tracking-tight">Gain de Temps</h3>
                                <p class="mt-5 text-base text-gray-500 dark:text-gray-300">
                                    Plus besoin de calculer manuellement vos distances et frais. Automatisez vos justificatifs en quelques clics.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <div class="flow-root bg-white dark:bg-gray-800 rounded-lg px-6 pb-8 shadow">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-blue-500 rounded-md shadow-lg">
                                        <span class="text-2xl">💰</span>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 dark:text-white tracking-tight">Optimisation Fiscale</h3>
                                <p class="mt-5 text-base text-gray-500 dark:text-gray-300">
                                    Maximisez vos déductions fiscales en justifiant précisément tous vos déplacements professionnels.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <div class="flow-root bg-white dark:bg-gray-800 rounded-lg px-6 pb-8 shadow">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-blue-500 rounded-md shadow-lg">
                                        <span class="text-2xl">📱</span>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 dark:text-white tracking-tight">Interface Simple</h3>
                                <p class="mt-5 text-base text-gray-500 dark:text-gray-300">
                                    Interface intuitive et moderne, accessible depuis n'importe quel appareil. Simple d'utilisation.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-blue-700">
        <div class="max-w-3xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                <span class="block">Prêt à optimiser vos déclarations ?</span>
                <span class="block">Commencez dès aujourd'hui.</span>
            </h2>
            <a href="{{ route('filament.app.auth.register') }}" class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-blue-600 bg-white hover:bg-blue-50 sm:w-auto">
                Créer un compte gratuit
            </a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white dark:bg-gray-800">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
            <div class="flex justify-center space-x-6 md:order-2">
                <a href="https://github.com/HiCharly/tax-justifier" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-gray-500 transition-colors duration-200">
                    <span class="sr-only">GitHub</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
            <div class="mt-8 md:mt-0 md:order-1">
                <p class="text-center text-base text-gray-400">
                    &copy; {{ date('Y') }} {{ config('app.name') }}. Tous droits réservés.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>
