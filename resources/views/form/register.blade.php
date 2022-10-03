@extends('app')
@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/reg-style.css') }}">
@endpush
<div class="w-full h-full flex justify-center">
    <div class="w-full ml-2 px-2 md:w-2/4">
        <div class="horizontal-scroll-wrapper pt-24 pb-10">
            <div class="text-gray-600 font-xl font-semibold text-center mr-2">
                <p class="mb-4">Daftarkan diri anda pada forum GuhCoding.com</p>
            </div>
            @if (Session::has('error'))
            <div class="session-error mt-2 mr-2">
                <div
                    class="bg-red-500 flex items-center justify-between w-full text-center font-semibold text-white p-2 rounded-full">
                    <span class="ml-3">{{ Session::get('error') }}</span>
                    <span class="cursor-pointer text-xl mr-3"
                        onclick="this.parentElement.style.display='none';">&times;</span>
                </div>
            </div>
            @elseif (Session::has('success'))
            <div class="session-success mt-2 mr-2">
                <div
                    class="bg-green-500 flex items-center justify-between w-full text-center font-semibold text-white p-2 rounded-full">
                    <span class="ml-3">{{ Session::get('success') }}</span>
                    <span class="cursor-pointer text-xl mr-3"
                        onclick="this.parentElement.style.display='none';">&times;</span>
                </div>
            </div>
            @endif
            <div class="mt-7 mb-10 mr-2 bg-gray-50 shadow-md shadow-gray-500 rounded-lg p-4">
                <form action="{{ Route('send.regis') }}" id="formRegistation" method="post">
                    @csrf
                    <div class="space-y-5" id="form-reg">
                        <reg-component></reg-component>
                    </div>
                    <div class="mt-5 text-center">
                        <button type="submit" id="buttonSubmit"
                        class="w-52 font-semibold text-blue-500 hover:text-white py-2.5 rounded-full border-b-4 border-b-blue-700 outline outline-2 outline-blue-500 hover:bg-blue-500 transition duration-300">REGISTER</button>
                    </div>
                    <div class="pageLoader mt-5 hidden text-center" id="pageLoader">
                        <button type="button"
                            class="w-52 font-semibold bg-blue-200 text-blue-500 hover:text-white py-2.5 rounded-full border-b-4 border-b-blue-700 outline outline-2 outline-blue-500 hover:bg-blue-500 transition duration-300">
                            <svg class="inline mr-2 w-6 h-6 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                                viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                    fill="currentColor" />
                                <path
                                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                    fill="currentFill" />
                            </svg>
                            Processing...</button>
                    </div>
                    <div class="mt-3 flex justify-center items-center space-x-3">
                        <hr class="w-96 border border-gray-300">
                        <p class="font-semibold text-gray-600">OR</p>
                        <hr class="w-96 border border-gray-300">
                    </div>
                    <div class="text-center uppercase mb-4 mt-5">
                        <a href="{{ route('login.fb') }}" class="mt-28 py-2.5 px-8 bg-blue-500 hover:bg-blue-400 text-white rounded">
                            <span>Facebook</span>
                        </a>
                    </div>
                    <div class="mt-5 text-center">
                        <p class="text-sm">Already have account?<a class="text-teal-500 ml-2"
                                href="/auth/login">Login!</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $("#buttonSubmit").on("click", function() {
          $(this).hide();
          $("#pageLoader").show();
          $("#pageLoader").attr("disabled", true);
          });
        });
</script>
@endsection
