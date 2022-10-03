@extends('app')
@section('content')
<style>
    .spiner1 {
        background-color: rgb(27, 216, 27);
        width: 20px;
        height: 20px;
        border-radius: 50%;
        animation-direction: alternate;
        animation: bounce1 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) 0s infinite;
    }

    .spiner2 {
        background-color: rgb(67, 67, 212);
        width: 20px;
        height: 20px;
        border-radius: 50%;
        animation-direction: alternate;
        animation: bounce2 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) 0.2s infinite;
    }

    .spiner3 {
        background-color: rgb(219, 56, 56);
        width: 20px;
        height: 20px;
        border-radius: 50%;
        animation-direction: alternate;
        animation: bounce3 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) 0.4s infinite;
    }

    @keyframes bounce1 {
        0% {
            transform: translateY(0%);
        }

        20% {
            transform: translateY(-50%);
            opacity: 0.5;
        }

        50% {
            background-color: rgb(219, 56, 56);
        }

        80% {
            transform: translateY(0%);
        }

        100% {
            transform: translateY(5%);
            opacity: 1;
        }
    }

    @keyframes bounce2 {
        0% {
            transform: translateY(0%);
        }

        20% {
            transform: translateY(-50%);
            opacity: 0.5;
        }

        50% {
            background-color: rgb(27, 216, 27);
        }

        80% {
            transform: translateY(0%);
        }

        100% {
            transform: translateY(5%);
            opacity: 1;
        }
    }

    @keyframes bounce3 {
        0% {
            transform: translateY(0%);
        }

        20% {
            transform: translateY(-50%);
            opacity: 0.5;
        }

        50% {
            background-color: rgb(67, 67, 212);
        }

        80% {
            transform: translateY(0%);
        }

        100% {
            transform: translateY(5%);
            opacity: 1;
        }
    }

</style>
<div class="w-full h-full flex justify-center items-center">
    <div
        class="w-full mx-2 h-auto md:w-3/4 md:mx-0 md:h-auto bg-white shadow-md shadow-gray-500 mt-28 mb-10 rounded-lg p-2">
        <form action="{{ route('question.send') }}" id="formPost" method="post">
            @csrf
            <div id="question">
                <question-component></question-component>
            </div>
            <div class="form-group mt-4">
                <textarea name="description" id="editor"></textarea>
            </div>
            <div class="mt-5 mb-5 text-center">
                <button type="submit" id="buttonPost"
                    class="py-3.5 px-12 font-semibold text-blue-500 hover:text-white rounded-full outline outline-2 outline-blue-500 hover:bg-blue-500 transition duration-300">Buat
                    Postingan</button>
            </div>
            <div class="spiner-group mt-5 mb-5 hidden">
                <div class="flex justify-center">
                    <div
                        class="wrapper-ball flex items-center space-x-1 py-3.5 px-16 rounded-full bg-blue-100 outline outline-2 outline-blue-500">
                        <div class="spiner1"></div>
                        <div class="spiner2"></div>
                        <div class="spiner3"></div>
                    </div>
                </div>
            </div>
        </form>
        @if ($errors->any())
        <div class="bg-red-300 text-red-700 w-2/4 mx-auto p-2 rounded-md">
            <ul>
                @foreach ($errors->all() as $err)
                <li class="text-center">{{ $err }}</li>
                <hr class="border border-red-500 mt-2 mb-2">
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
@push('js-stack')
    <script src="{{ asset('/js/question.js') }}"></script>
@endpush
@endsection
