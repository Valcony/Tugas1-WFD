@extends('template')
@section('content')
    <div class="w-full h-auto py-15">
        <div class="justify-items-center items-center text-center">
            <h2 class="font-primary text-3xl">LATEST</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ovHoY8UBIu8?si=A6zd8cXRuwRa7pWG"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="py-10"></iframe>
            <p class="font-secondary">Stray Kids "Walkin On Water" M/V</p>
        </div>
        <div class="mx-20 my-20">
            <h2 class="font-primary text-3xl">Other Releases</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mt-5">
                <div class="text-center">
                    <a href="https://www.youtube.com/watch?v=h21pp5-k9SA" target="_blank">
                        <img src="https://i.ytimg.com/vi/h21pp5-k9SA/hqdefault.jpg?sqp=-oaymwEnCNACELwBSFryq4qpAxkIARUAAIhCGAHYAQHiAQoIGBACGAY4AUAB&rs=AOn4CLDjHGuSaPi0ZplC9GGM2qXjnKUf8w"
                            alt="Stray Kids 『GIANT』 Music Video"
                            class="w-full rounded-lg cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105 hover:drop-shadow-md">
                    </a>
                    <p class="font-secondary mt-2">Stray Kids 『GIANT』 Music Video</p>
                </div>
                <div class="text-center">
                    <a href="https://www.youtube.com/watch?v=0P0aQreFs8w" target="_blank">
                        <img src="https://i.ytimg.com/vi/0P0aQreFs8w/hq720.jpg"
                            alt="Stray Kids 'Chk Chk Boom' M/V"
                            class="w-full rounded-lg cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105 hover:drop-shadow-md">
                    </a>
                    <p class="font-secondary mt-2">Stray Kids "Chk Chk Boom" M/V</p>
                </div>
                <div class="text-center">
                    <a href="https://www.youtube.com/watch?v=dBDkYofMUs4" target="_blank">
                        <img src="https://i.ytimg.com/vi/dBDkYofMUs4/hq720.jpg"
                            alt="Stray Kids '락 (樂) (LALALALA)' M/V"
                            class="w-full rounded-lg cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105 hover:drop-shadow-md">
                    </a>
                    <p class="font-secondary mt-2">Stray Kids "락 (樂) (LALALALA)" M/V</p>
                </div>
            </div>
        </div>
    </div>
@endsection
