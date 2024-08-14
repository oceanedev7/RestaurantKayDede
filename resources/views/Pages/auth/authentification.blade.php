<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion et Inscription</title>
    @vite('resources/css/app.css') <!-- Assurez-vous d'avoir Tailwind chargé -->
</head>
<body class="bg-gray-100">

    <div class="flex justify-center items-center min-h-screen">
        <div class="flex flex-col md:flex-row md:space-x-10 space-y-6 md:space-y-0">
            <!-- Formulaire de connexion -->
            <div class="bg-white p-8 rounded-lg shadow-lg w-full md:w-1/2">
                <h2 class="text-2xl font-bold mb-6 text-center">Se connecter</h2>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Adresse e-mail</label>
                        <input type="email" name="email" id="email" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                        <input type="password" name="password" id="password" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>
                    <div class="mb-4 flex justify-between">
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="remember" class="form-checkbox">
                            <span class="ml-2 text-sm text-gray-600">Se souvenir de moi</span>
                        </label>
                        <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:underline">Mot de passe oublié ?</a>
                    </div>
                    <button type="submit" class="w-full bg-indigo-500 text-white p-3 rounded-lg hover:bg-indigo-600">Se connecter</button>
                </form>
            </div>

            <!-- Formulaire d'inscription -->
            <div class="bg-white p-8 rounded-lg shadow-lg w-full md:w-1/2">
                <h2 class="text-2xl font-bold mb-6 text-center">S'inscrire</h2>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nom complet</label>
                        <input type="text" name="name" id="name" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Adresse e-mail</label>
                        <input type="email" name="email" id="email" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                        <input type="password" name="password" id="password" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmez le mot de passe</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>
                    <button type="submit" class="w-full bg-indigo-500 text-white p-3 rounded-lg hover:bg-indigo-600">S'inscrire</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
