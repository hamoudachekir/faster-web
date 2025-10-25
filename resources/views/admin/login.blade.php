<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Faster</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-[#0000ff] to-[#2BD834] min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md px-4">
        <div class="bg-white rounded-3xl shadow-2xl p-8">
            <!-- Logo -->
            <div class="text-center mb-8">
                <div class="w-20 h-20 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <span class="text-white font-bold text-3xl">F</span>
                </div>
                <h1 class="text-3xl font-bold text-gray-900">Faster Admin</h1>
                <p class="text-gray-600 mt-2">Backoffice d'administration</p>
            </div>

            <!-- Login Form -->
            <form action="{{ route('admin.login.post') }}" method="POST">
                @csrf
                
                <div class="mb-6">
                    <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">
                        Mot de passe administrateur
                    </label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        required
                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-[#2BD834] transition"
                        placeholder="Entrez le mot de passe"
                    >
                    @error('password')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <button 
                    type="submit"
                    class="w-full px-6 py-3 bg-gradient-to-r from-[#2BD834] to-[#22b028] text-white font-bold rounded-xl hover:shadow-xl transition duration-300 transform hover:scale-105"
                >
                    🔐 Se connecter
                </button>
            </form>

            <!-- Info -->
            <div class="mt-6 p-4 bg-blue-50 rounded-xl">
                <p class="text-sm text-gray-600 text-center">
                    <strong>Note:</strong> Mot de passe par défaut: <code class="bg-white px-2 py-1 rounded">admin123</code>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
