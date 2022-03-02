<!-- ficha para el escritorio -->
<a href="{{$link}}">
    <div class="relative bg-white py-6 px-6 rounded-3xl w-64 my-4 shadow-xl">
        <div class="mt-8">
            <p class="text-xl font-semibold my-2">{{$titulo}}</p>
            <div class="flex space-x-2 text-gray-400 text-sm">
                <!-- svg  -->
                <img src="{{ asset($imagen) }}" />
            </div>
            <div class="border-t-2"></div>

            <div class="flex justify-between"> </div>
        </div>
    </div>
</a>