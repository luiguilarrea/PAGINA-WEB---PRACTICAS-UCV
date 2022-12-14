<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div>
        <x-jet-application-logo class="block h-12 w-auto" />
    </div>

    <div class="mt-8 text-2xl">
        Bienvenido a MULTISERVICIOS LYR SAC!
    </div>

    <div class="mt-6 text-gray-500">
        MULTISERVICIOS es el nuevo servicio de entrega (courier) de MULTISERVICIOS que nació pensado como una solución a la coyuntura del COVID-19 y aún, luego del fin de la cuarentena, sigue dentro de nuestro servicios básicos.
        Reafirmando nuestro compromiso y responsabilidad de mantener Lima conectada y a buen resguardo, MULTISERVICIOS busca atender las necesidades  de nuestros usuarios y acercarles la ciudad hasta la comodidad de sus hogares.
        Con este nuevo servicio podrás trasladar objetos o paquetes pequeños de un lugar a otro en solo minutos y a precios convenientes.

    </div>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
    @foreach ( $texts as $text)    
        <div class="p-6">
            <div class="flex items-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="https://laravel.com/docs">{{ $text->name }}</a></div>
            </div>

            <div class="ml-12">
                <div class="mt-2 text-sm text-gray-500">
                    {{-- Laravel has wonderful documentation covering every aspect of the framework. Whether you're new to the framework or have previous experience, we recommend reading all of the documentation from beginning to end. --}}
                    <form action="/">
                        
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
                        <textarea id="mision" name="mision-text" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment...">
                            {{ $text->text }}
                        </textarea>
                        <button style="padding: 4px 10px; background-color: rgba(0, 0, 255, 0.781); border-radius: 13%; margin: 5px; color: white">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    
</div>
