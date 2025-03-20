<x-app-layout>


    <main>

        <!-- New Cars -->
        <section>
            <h1 class="text-center">My Favourite cars</h1>
            <div class="cotainer">
                <div class="car-items-listing">
            @foreach($cars as $car)
        <x-car-item :$car :isInWatchlist="true"/>
            @endforeach
            </div>
        </section>
        <!--/ New Cars -->
      </main>



    </x-app-layout>



