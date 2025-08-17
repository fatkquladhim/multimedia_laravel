
<div class="min-h-screen bg-gradient-to-br from-blue-600 via-blue-500 to-blue-300 flex flex-col min-h-screen">
    <div class="flex flex-1 flex-col items-center justify-center">
        <main class="w-full max-w-xs sm:max-w-sm md:max-w-md p-2 sm:p-0" style="transform:scale(0.95);">
            <div class="flex justify-center mb-8">
                <div>
                    <img src="{{ asset('assets/imgs/rev-removebg-preview.png') }}" style="max-width:80px;">
                </div>
            </div>
            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf
                @if(session('error'))
                    <p class="text-red-500 text-center">{{ session('error') }}</p>
                @endif
                <div class="relative">
                    <input type="text" name="username" id="username" placeholder="Username" class="glass-input w-full pl-4 pr-4 py-4 rounded-full text-white placeholder-blue-100 focus:outline-none transition-all duration-200" required />
                </div>
                <div class="relative">
                    <input type="email" name="email" id="email" placeholder="Email" class="glass-input w-full pl-4 pr-4 py-4 rounded-full text-white placeholder-blue-100 focus:outline-none transition-all duration-200" required />
                </div>
                <div class="relative">
                    <input type="password" name="password" id="password" placeholder="Password" class="glass-input w-full pl-4 pr-4 py-4 rounded-full text-white placeholder-blue-100 focus:outline-none transition-all duration-200" required />
                </div>
                <div class="relative">
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Konfirmasi Password" class="glass-input w-full pl-4 pr-4 py-4 rounded-full text-white placeholder-blue-100 focus:outline-none transition-all duration-200" required />
                </div>
                <button type="submit" class="login-btn w-full py-2 font-semibold rounded-full focus:outline-none glass-header px-6 py-4 text-white relative z-10">REGISTER</button>
            </form>
        </main>
    </div>
    <footer class="flex flex-col items-center justify-center mt-8 mb-4">
        <p class="text-white font-bold text-lg">Powered by <span class="text-blue-800">Media Tech Annur2Almurtadlo</span></p>
    </footer>
</div>
<script src="https://cdn.tailwindcss.com"></script>
<style>
    .glass-input {
        background: rgba(59, 130, 246, 0.2);
        border: 1px solid rgba(147, 197, 253, 0.3);
        backdrop-filter: blur(10px);
    }
    .glass-input:focus {
        background: rgba(59, 130, 246, 0.3);
        border-color: rgba(147, 197, 253, 0.5);
        box-shadow: 0 0 0 2px rgba(147, 197, 253, 0.3);
    }
    .login-btn {
        background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }
    .login-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }
    .glass-header {
        background: linear-gradient(135deg, rgba(30, 58, 138, 0.9) 0%, rgba(59, 130, 246, 0.9) 100%);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        position: relative;
        overflow: hidden;
    }
    .glass-header::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
        animation: shimmer 3s infinite;
    }
    @keyframes shimmer {
        0% {transform: translateX(-100%) translateY(-100%) rotate(45deg);}
        100% {transform: translateX(100%) translateY(100%) rotate(45deg);}
    }
</style>
@endsection
