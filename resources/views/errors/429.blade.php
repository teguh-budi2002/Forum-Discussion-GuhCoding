@extends('app')
@section('content')
<div class="w-full h-screen flex justify-center items-center bg-gray-100">
    <div class="wrapper md:w-2/3 w-full h-auto md:mt-16 mt-28 mb:mb-0 mb-10 md:px-0 px-4">
        <div class="p-2 pb-4 bg-white outline outline-2 outline-gray-300 rounded space-y-4">
            <div class="image-error">
                <img src="{{ asset('/img/429-error.webp') }}" class="w-96 h-64 mx-auto"
                    alt="https://www.freepik.com/free-photo/yellow-triangle-warning-sign-symbol-danger-caution-risk-traffic-icon-background-3d-rendering_22405841.htm#query=403&position=25&from_view=search">
            </div>
            <div class="text-error text-center text-gray-700 space-y-3">
                <p class="text-7xl">429</p>
                <p class="text-3xl">Too Many Attempt Request</p>
                <p class="text-xl">Tunggu 1 Menit dan Refresh Halaman</p>
            </div>
            <div class="mt-5 text-center">
                <div class="text-xl" id="timer"></div>
            </div>
        </div>
    </div>
</div>
<script>
    // Set the date we're counting down to
    var setoneminutetime = new Date();
    setoneminutetime.setTime(Date.now() + 1 * 60 * 1000); // Add 1 minutes to current timestamp
    var countDownDate = new Date(setoneminutetime).getTime();
    //set interval for the actual countdown
    var x = setInterval(function () {
        var now = new Date().getTime();
        //end time minus the current time
        var distance = countDownDate - now;
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        //show countdown  in div demo
        document.getElementById("timer").innerHTML = seconds + "S";
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("timer").innerHTML = "REFRESH"
            location.reload()
        }
    }, 1000);
</script>
@endsection
