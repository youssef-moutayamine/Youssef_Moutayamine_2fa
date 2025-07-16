<x-app-layout>
    <div class="flex min-h-screen items-center justify-center bg-gradient-to-b from-[#7B2FF2] to-[#F357A8] px-2">
        <div class="w-full max-w-md bg-white rounded-3xl shadow-2xl px-8 py-12 sm:px-12 sm:py-14">
            <h2 class="text-2xl font-bold text-[#7B2FF2] mb-4 text-center">Two-Factor Authentication</h2>
            <p class="mb-6 text-gray-600 text-center">Enter the 6-digit code sent to your email.</p>
            @if(session('status'))
                <div class="mb-4 text-green-600 text-center">{{ session('status') }}</div>
            @endif
            <form method="POST" action="{{ route('2fa.verify.post') }}" class="space-y-6">
                @csrf
                <div>
                    <input type="text" name="code" maxlength="6" pattern="[0-9]{6}" required autofocus placeholder="123456" class="block w-full rounded-xl border border-gray-200 bg-white text-lg px-4 py-3 placeholder-gray-400 focus:ring-2 focus:ring-[#7B2FF2] focus:border-[#7B2FF2] transition-all text-center tracking-widest" />
                    @error('code')
                        <div class="text-red-600 mt-2 text-center">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="w-full py-3 text-lg rounded-full bg-gradient-to-r from-[#7B2FF2] to-[#F357A8] text-white font-semibold shadow-lg border-0 hover:from-[#F357A8] hover:to-[#7B2FF2] hover:scale-105 transition-transform duration-150">Verify</button>
            </form>
        </div>
    </div>
</x-app-layout> 