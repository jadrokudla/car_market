
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div>

        <div class="card">
            <h1>faking</h1>
        </div>


        {{-- @php
        $x = ("03004" > 500) && (-500 <= 500) && true.false;
        var_dump($x);
        @endphp --}}

        {{-- @php
        echo "<br/>";
        $x = 5;
        echo $x;
        echo "<br />";
        echo $x+++$x++;
        echo "<br />";
        echo $x;
        echo "<br />";
        echo $x---$x--;
        echo "<br />";
        echo $x
        @endphp --}}


        {{-- @php
            function scitaj($a,$b) {
                return $a + $b;
            }

            $vysledok = scitaj(5,10);
            echo "sucet je:". $vysledok;
        @endphp --}}

        {{-- @php
            $meno = "Marek1233";
            function pozdrav() {
                return "vitaj na stranke: ";
            }

           echo pozdrav().$meno;
        @endphp --}}

        {{-- @php
           function pozdrav(){
            echo "cauko1";
           }

           $pozdravenie = pozdrav();
           echo $pozdravenie. " Marek";
        @endphp --}}

        {{-- @if(true)
    <p>Write some text</p>
    @endif

    @for ($i = 0; $i < 10; $i++)
        <p>{{ $i  }}</p>
    @endfor --}}

    {{-- @foreach([1,2,3,4,5] as $n)

    <p>{{$n}}</p>
    @continue($n < 4)
    @endforeach --}}



    {{-- @foreach ($hobbies as $h)
        @foreach ($hobbies as $h)
        {{ $loop->parent->depth}}
            {{ $loop->depth }}

        @endforeach
    @endforeach
     --}}

     {{-- <div @class([ 'my-css-class1', 'georgia' => $country === 'ge', ]) @style(['color: blue', 'font-weight: bold', 'font-size: 2rem', 'background-color: green' => $country === 'ge'])>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit cumque nemo aperiam iure qui blanditiis ullam necessitatibus optio, dolor excepturi atque recusandae veniam minima facere minus dolorum numquam enim. Vitae?
     </div> --}}

     {{-- @include('shar.button', ['color' => 'yellow', 'text' => 'submit']) --}}

    {{-- @php
        $cars = [1, 2, 3, 4, 5];
    @endphp --}}
    {{-- @php

    @endphp
    @empty($records)
     empty
    @endempty --}}





    @php



function sayCustomHello($name)
{
echo "Hello, $name!";
};

sayCustomHello(1);




    @endphp







    {{-- <div>
        Dummy page
    </div> --}}
    <x-dummy-check>
        <p style="color: orange">text yellow</p>
        <p style="color: yellow">text yellow</p>
        <x-slot:def>
        <li style="color:aqua">Aqua farba</li>
        </x-slot:def>
        <x-slot:xyz>
            <p style="color: red">Text pre xyz</p>
        </x-slot:xyz>
        <x-slot:abc>
            <p style="color: green">Text pre abc</p>
        </x-slot:abc>

    </x-dummy-check>
    <x-dummy-alert>
       <p style="color: purple"> toto je uspesna sprava!</p>
    </x-dummy-alert>




    @php
        $collection = collect([1, 2, 3, 3, 2, 1 ]);

    $collection->each(function($item) {
        echo $item;
    });
    echo "<br>";
    @endphp

    @php
        function mojaFunkcia() {
        echo "Ahoj1, svet!";
    }

    $callable = 'mojaFunkcia';
    call_user_func($callable)
    @endphp





    <!DOCTYPE html>
    <html>
    <head>
        <style>
            body {
                background: grey;
                display: grid;
                place-items: center;
                height: 95vh;
                margin: 0;
            }
            .container {
                width: 60px;
                height: 60px;
                transform-origin: center bottom;
                animation: flicker 3s 200ms infinite ease-in-out alternate;
            }
            .flame {
                bottom: 0;
                position: absolute;
                border-bottom-right-radius: 50%;
                border-bottom-left-radius: 50%;
                border-top-left-radius: 50%;
                transform: rotate(-45deg) scale(1.5, 1.5);
            }
            .yellow {
                left: 15px;
                width: 30px;
                height: 30px;
                background: gold;
                box-shadow: 0px 0px 9px 4px gold;
            }
            .orange {
                left: 10px;
                width: 40px;
                height: 40px;
                background: orange;
                box-shadow: 0px 0px 9px 4px orange;
            }
            .red {
                left: 5px;
                width: 50px;
                height: 50px;
                background: orangered;
                box-shadow: 0px 0px 5px 4px orangered;
            }
            .white {
                left: 15px;
                bottom: -4px;
                width: 30px;
                height: 30px;
                background: white;
                box-shadow: 0px 0px 9px 4px white;
            }
            .circle {
                border-radius: 50%;
                position: absolute;
            }
            .blue {
                width: 10px;
                height: 10px;
                left: 25px;
                bottom: -25px;
                background: slateblue;
            }
            .black {
                width: 40px;
                height: 40px;
                left: 10px;
                bottom: -60px;
                background: black;
                box-shadow: 0px 0px 15px 10px black;
            }
            @keyframes flicker {
                0% { transform: rotate(-1deg); }
                20% { transform: rotate(1deg); }
                40% { transform: rotate(-1deg); }
                60% { transform: rotate(1deg) scaleY(1.04); }
                80% { transform: rotate(-2deg) scaleY(0.92); }
                100% { transform: rotate(1deg); }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="flame red"></div>
            <div class="flame orange"></div>
            <div class="flame yellow"></div>
            <div class="flame white"></div>
            <div class="circle blue"></div>
            <div class="circle black"></div>
        </div>
    </body>
    </html>


</body>
</html>




