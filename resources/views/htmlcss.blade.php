<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="card car-detailed-description">
        <h2 class="car-details-title">BOMBA</h2>
        <p>pes</p>
        </h2>

    </div>


@php
    $slovakia = [
        "ba" => ['petrzalka', 'dubravka'],
        "pp" => ['kezmarok', 'huncovce']
    ];
@endphp
@foreach ($slovakia as $key => $values)
 {{ $key }}: {{ implode(' ', $values) }} <br>
@endforeach


@php
function twoSum($nums, $target) {
    $map = [];
    foreach ($nums as $i => $num) {
        $complement = $target - $num;
        if (array_key_exists($complement, $map)) {
            return [$map[$complement], $i];
        }
        $map[$num] = $i;
    }
    throw new Exception("No two sum solution");
}

$result = twoSum($nums, $target);
@endphp

<p><strong>Input:</strong></p>
<pre>{{ print_r($nums, true) }}</pre>
<p><strong>Target:</strong> {{ $target }}</p>

<p><strong>Result:</strong></p>
<pre>{{ print_r($result, true) }}</pre>




{{-- @php
$slovakia = [
    "ba" => 'Bratislava',
    "ke" => 'Košice',
    "pp" => 'Poprad',
    "tn" => 'Trenčín'
];
@endphp

@foreach ($slovakia as $kluc => $hodnota)
    <ul>{{ $kluc }}: {{ $hodnota }}</ul>
@endforeach --}}


</body>

</html>














