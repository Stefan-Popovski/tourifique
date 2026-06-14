<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | {{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300..700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex items-center justify-center px-4 py-10 font-[Inter] overflow-hidden relative"
      style="background: linear-gradient(135deg, #43186a 0%, #6b2fa0 40%, #9b59d0 70%, #c084fc 100%); font-family: 'Inter', sans-serif;">

    {{-- Decorative geometric shapes --}}
    <div class="fixed top-0 left-0 pointer-events-none"
         style="width:280px;height:280px;background:rgba(255,255,255,0.07);clip-path:polygon(50% 0%,0% 100%,100% 100%);transform:translate(-60px,-80px) rotate(-20deg);"></div>
    <div class="fixed bottom-0 right-0 pointer-events-none"
         style="width:220px;height:220px;background:rgba(255,255,255,0.06);clip-path:polygon(50% 0%,100% 50%,50% 100%,0% 50%);transform:translate(40px,60px) rotate(15deg);"></div>
    <div class="fixed pointer-events-none"
         style="top:20%;right:5%;width:140px;height:140px;background:rgba(255,255,255,0.05);clip-path:polygon(50% 0%,0% 100%,100% 100%);transform:rotate(10deg);"></div>
    <div class="fixed rounded-full pointer-events-none"
         style="bottom:25%;left:3%;width:100px;height:100px;background:rgba(255,255,255,0.06);"></div>
    <div class="fixed pointer-events-none"
         style="top:10%;left:30%;width:60px;height:60px;background:rgba(255,246,41,0.08);clip-path:polygon(50% 0%,100% 50%,50% 100%,0% 50%);"></div>

    {{-- Card --}}
    <div class="relative z-10 w-full max-w-sm rounded-3xl p-10 shadow-2xl"
         style="background:rgba(30,10,60,0.75);backdrop-filter:blur(20px);border:1px solid rgba(255,255,255,0.12);">

        {{-- Logo --}}
        <div class="flex flex-col items-center mb-7">
            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg" class="mb-2">
                <polygon points="28,4 52,16 52,40 28,52 4,40 4,16" fill="rgba(255,255,255,0.1)" stroke="rgba(255,255,255,0.3)" stroke-width="1.5"/>
                <polygon points="28,12 44,20 44,36 28,44 12,36 12,20" fill="rgba(255,246,41,0.15)" stroke="#fff629" stroke-width="1.5"/>
                <circle cx="28" cy="28" r="7" fill="#fff629"/>
            </svg>
            <span class="text-xs font-bold tracking-[0.25em] uppercase text-white/70">Tourifique</span>
        </div>

        {{-- Title --}}
        <h1 class="text-3xl font-extrabold text-white text-center mb-7 tracking-tight">SIGN UP</h1>

        {{-- Errors --}}
        @if ($errors->any())
            <div class="mb-5 rounded-xl px-4 py-3 text-center text-sm text-red-300"
                 style="background:rgba(220,38,38,0.2);border:1px solid rgba(220,38,38,0.4);">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            {{-- First Name --}}
            <div class="relative">
                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-white/40 pointer-events-none">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/>
                    </svg>
                </span>
                <input type="text" name="first_name" id="first_name"
                       value="{{ old('first_name') }}"
                       placeholder="First Name"
                       required autofocus autocomplete="given-name"
                       class="w-full rounded-xl pl-11 pr-4 py-3 text-sm text-white placeholder-white/40 outline-none transition duration-200"
                       style="background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.15);"
                       onfocus="this.style.borderColor='#fff629';this.style.boxShadow='0 0 0 3px rgba(255,246,41,0.15)';"
                       onblur="this.style.borderColor='rgba(255,255,255,0.15)';this.style.boxShadow='none';">
            </div>

            {{-- Last Name --}}
            <div class="relative">
                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-white/40 pointer-events-none">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/>
                    </svg>
                </span>
                <input type="text" name="last_name" id="last_name"
                       value="{{ old('last_name') }}"
                       placeholder="Last Name"
                       required autocomplete="family-name"
                       class="w-full rounded-xl pl-11 pr-4 py-3 text-sm text-white placeholder-white/40 outline-none transition duration-200"
                       style="background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.15);"
                       onfocus="this.style.borderColor='#fff629';this.style.boxShadow='0 0 0 3px rgba(255,246,41,0.15)';"
                       onblur="this.style.borderColor='rgba(255,255,255,0.15)';this.style.boxShadow='none';">
            </div>

            {{-- Email --}}
            <div class="relative">
                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-white/40 pointer-events-none">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="2" y="4" width="20" height="16" rx="2"/><path d="m2 7 10 7 10-7"/>
                    </svg>
                </span>
                <input type="email" name="email" id="email"
                       value="{{ old('email') }}"
                       placeholder="Email"
                       required autocomplete="email"
                       class="w-full rounded-xl pl-11 pr-4 py-3 text-sm text-white placeholder-white/40 outline-none transition duration-200"
                       style="background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.15);"
                       onfocus="this.style.borderColor='#fff629';this.style.boxShadow='0 0 0 3px rgba(255,246,41,0.15)';"
                       onblur="this.style.borderColor='rgba(255,255,255,0.15)';this.style.boxShadow='none';">
            </div>

            {{-- Password --}}
            <div class="relative">
                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-white/40 pointer-events-none">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                    </svg>
                </span>
                <input type="password" name="password" id="password"
                       placeholder="Password"
                       required autocomplete="new-password"
                       class="w-full rounded-xl pl-11 pr-4 py-3 text-sm text-white placeholder-white/40 outline-none transition duration-200"
                       style="background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.15);"
                       onfocus="this.style.borderColor='#fff629';this.style.boxShadow='0 0 0 3px rgba(255,246,41,0.15)';"
                       onblur="this.style.borderColor='rgba(255,255,255,0.15)';this.style.boxShadow='none';">
            </div>

            {{-- Confirm Password --}}
            <div class="relative">
                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-white/40 pointer-events-none">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                    </svg>
                </span>
                <input type="password" name="password_confirmation" id="password_confirmation"
                       placeholder="Confirm Password"
                       required autocomplete="new-password"
                       class="w-full rounded-xl pl-11 pr-4 py-3 text-sm text-white placeholder-white/40 outline-none transition duration-200"
                       style="background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.15);"
                       onfocus="this.style.borderColor='#fff629';this.style.boxShadow='0 0 0 3px rgba(255,246,41,0.15)';"
                       onblur="this.style.borderColor='rgba(255,255,255,0.15)';this.style.boxShadow='none';">
            </div>

            {{-- Submit --}}
            <button type="submit"
                    class="w-full rounded-xl py-3 text-sm font-bold tracking-wide transition duration-200 hover:opacity-90 hover:-translate-y-0.5 active:translate-y-0 mt-1"
                    style="background:linear-gradient(90deg,#43186a,#7c3aed);color:white;">
                SIGN UP
            </button>
        </form>


    </div>
</body>
</html>
