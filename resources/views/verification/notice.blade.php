@extends('app')

@section('content')
<div class="w-full h-screen flex flex-col justify-center items-center">
    @if (session('resent'))
    <div class="bg-green-500 p-2 rounded text-white mb-4" role="alert">
        Link verifikasi email baru berhasil dikirim.
    </div>
    @endif
    <div class="parent w-2/5 rounded-lg shadow-md shadow-gray-500">
        <div class="bg-gray-200 p-2">
            <div class="text-header text-center text-gray-800">
                <span class="text-xl font-semibold">Email Verifikasi</span>
            </div>
        </div>
        <div class="bg-gray-50 p-5 text-gray-700">
            <div class="text-main-verification text-center">
                <p>Kami sudah mengirimkan email verifikasi link pada <b>{{ auth()->user()->email }}</b>.</p>
            </div>
            <div class="text-sub mt-2 text-center">
                <p>Jika belum mendapatkan email, Klik tombol dibawah</p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 mt-2 ml-56 animate-bounce">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 5.25l-7.5 7.5-7.5-7.5m15 6l-7.5 7.5-7.5-7.5" />
                  </svg>
            </div>
            <form action="{{ route('verification.resend') }}" method="POST">
                @csrf
                <div class="text-center mt-2">
                    <button type="submit" class="inline py-2.5 px-6 rounded-xl bg-blue-500 hover:bg-blue-400 text-white p-0">
                        Kirim ulang email
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection