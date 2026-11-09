<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$samochody = [
    ['marka' => 'BMW',        'model' => '320d',     'rok' => 2018, 'cena' => 85000,  'przebieg' => 120000, 'paliwo' => 'diesel',  'moc' => 190],
    ['marka' => 'Audi',       'model' => 'A4',       'rok' => 2020, 'cena' => 110000, 'przebieg' => 80000,  'paliwo' => 'benzyna', 'moc' => 150],
    ['marka' => 'Toyota',     'model' => 'Corolla',  'rok' => 2022, 'cena' => 95000,  'przebieg' => 35000,  'paliwo' => 'hybryda', 'moc' => 122],
    ['marka' => 'Volkswagen', 'model' => 'Golf',     'rok' => 2015, 'cena' => 37000,  'przebieg' => 185000, 'paliwo' => 'diesel',  'moc' => 105],
    ['marka' => 'Skoda',      'model' => 'Octavia',  'rok' => 2019, 'cena' => 62000,  'przebieg' => 140000, 'paliwo' => 'diesel',  'moc' => 150],
    ['marka' => 'Ford',       'model' => 'Focus',    'rok' => 2017, 'cena' => 34000,  'przebieg' => 160000, 'paliwo' => 'benzyna', 'moc' => 125],
    ['marka' => 'Opel',       'model' => 'Astra',    'rok' => 2014, 'cena' => 24000,  'przebieg' => 195000, 'paliwo' => 'benzyna', 'moc' => 115],
    ['marka' => 'Mercedes',   'model' => 'C220',     'rok' => 2021, 'cena' => 145000, 'przebieg' => 60000,  'paliwo' => 'diesel',  'moc' => 194],
    ['marka' => 'Renault',    'model' => 'Clio',     'rok' => 2016, 'cena' => 28000,  'przebieg' => 98000,  'paliwo' => 'benzyna', 'moc' => 90],
    ['marka' => 'Peugeot',    'model' => '308',      'rok' => 2018, 'cena' => 41000,  'przebieg' => 110000, 'paliwo' => 'diesel',  'moc' => 130],
    ['marka' => 'Honda',      'model' => 'Civic',    'rok' => 2023, 'cena' => 118000, 'przebieg' => 15000,  'paliwo' => 'benzyna', 'moc' => 182],
    ['marka' => 'Mazda',      'model' => '6',        'rok' => 2019, 'cena' => 72000,  'przebieg' => 90000,  'paliwo' => 'benzyna', 'moc' => 165],
    ['marka' => 'Kia',        'model' => 'Ceed',     'rok' => 2020, 'cena' => 58000,  'przebieg' => 75000,  'paliwo' => 'benzyna', 'moc' => 120],
    ['marka' => 'Hyundai',    'model' => 'i30',      'rok' => 2021, 'cena' => 64000,  'przebieg' => 52000,  'paliwo' => 'benzyna', 'moc' => 120],
    ['marka' => 'Fiat',       'model' => 'Panda',    'rok' => 2012, 'cena' => 14000,  'przebieg' => 170000, 'paliwo' => 'benzyna', 'moc' => 69],
    ['marka' => 'Volvo',      'model' => 'V60',      'rok' => 2017, 'cena' => 69000,  'przebieg' => 155000, 'paliwo' => 'diesel',  'moc' => 190],
    ['marka' => 'Tesla',      'model' => 'Model 3',  'rok' => 2022, 'cena' => 159000, 'przebieg' => 40000,  'paliwo' => 'elektryczny', 'moc' => 283],
    ['marka' => 'Seat',       'model' => 'Leon',     'rok' => 2019, 'cena' => 55000,  'przebieg' => 99000,  'paliwo' => 'benzyna', 'moc' => 115],
    ['marka' => 'Nissan',     'model' => 'Qashqai',  'rok' => 2018, 'cena' => 66000,  'przebieg' => 105000, 'paliwo' => 'diesel',  'moc' => 130],
    ['marka' => 'Citroen',    'model' => 'C3',       'rok' => 2024, 'cena' => 59000,  'przebieg' => 8000,   'paliwo' => 'benzyna', 'moc' => 83],
    ['marka' => 'Suzuki',     'model' => 'Swift',    'rok' => 2008, 'cena' => 9000,   'przebieg' => 210000, 'paliwo' => 'benzyna', 'moc' => 92],
    ['marka' => 'Porsche',    'model' => 'Macan',    'rok' => 2020, 'cena' => 230000, 'przebieg' => 70000,  'paliwo' => 'benzyna', 'moc' => 252],
];

// funkcje
function obliczWiek($rokProdukcji)
{
    return (int)date('Y') - $rokProdukcji;
}

function kategoriaWieku($wiek)
{
    if ($wiek <= 3) {
        return 'samochód prawie nowy';
    } elseif ($wiek <= 7) {
        return 'samochód kilkuletni';
    } elseif ($wiek <= 15) {
        return 'samochód używany';
    } else {
        return 'samochód zabytkowy lub starszy';
    }
}

function wyszukajSamochody($samochody, $maksymalnaCena)
{
    echo "Samochody do $maksymalnaCena zł:<br>";
    $znaleziono = false;

    foreach ($samochody as $auto) {
        if ($auto['cena'] <= $maksymalnaCena) {
            echo "  - {$auto['marka']} {$auto['model']} ({$auto['rok']}) - {$auto['cena']} zł<br>";
            $znaleziono = true;
        }
    }

    if (!$znaleziono) {
        echo "  Nie znaleziono żadnego samochodu.<br>";
    }
}

function najdrozszySamochod($samochody)
{
    $najdrozszy = $samochody[0];
    foreach ($samochody as $auto) {
        if ($auto['cena'] > $najdrozszy['cena']) {
            $najdrozszy = $auto;
        }
    }
    return $najdrozszy;
}

function najtanszySamochod($samochody)
{
    $najtanszy = $samochody[0];
    foreach ($samochody as $auto) {
        if ($auto['cena'] < $najtanszy['cena']) {
            $najtanszy = $auto;
        }
    }
    return $najtanszy;
}

function obliczSredniaCene($samochody)
{
    $suma = 0;
    foreach ($samochody as $auto) {
        $suma += $auto['cena'];
    }
    return $suma / count($samochody);
}

$n = count($samochody);

for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($samochody[$j]['cena'] > $samochody[$j + 1]['cena']) {
            $temp = $samochody[$j];
            $samochody[$j] = $samochody[$j + 1];
            $samochody[$j + 1] = $temp;
        }
    }
}

echo "================================<br>";
echo "       KOMIS SAMOCHODOWY<br>";
echo "================================<br><br>";

$liczbaAut = count($samochody);
$licznik = 0;

foreach ($samochody as $auto) {
    $licznik++;
    $wiek = obliczWiek($auto['rok']);
    $kategoria = kategoriaWieku($wiek);

    echo "{$auto['marka']} {$auto['model']}<br>";
    echo "Rok produkcji: {$auto['rok']}<br>";
    echo "Cena: {$auto['cena']} zł<br>";
    echo "Przebieg: {$auto['przebieg']} km<br>";
    echo "Paliwo: {$auto['paliwo']}<br>";
    echo "Moc: {$auto['moc']} KM<br>";
    echo "Wiek: $wiek lat<br>";
    echo "Kategoria: $kategoria<br>";

    if ($licznik < $liczbaAut) {
        echo "<br>--------------------------------<br><br>";
    }
}

echo "<br>================================<br>";
echo "       WYSZUKIWANIE<br>";
echo "================================<br><br>";

wyszukajSamochody($samochody, 40000);
echo "<br>";
wyszukajSamochody($samochody, 5000); 

// statystyki
$liczbaDiesel = 0;
$liczbaPo2020 = 0;
$liczbaPrzebiegPoniżej = 0;

foreach ($samochody as $auto) {
    if (strtolower($auto['paliwo']) === 'diesel') {
        $liczbaDiesel++;
    }
    if ($auto['rok'] > 2020) {
        $liczbaPo2020++;
    }
    if ($auto['przebieg'] < 100000) {
        $liczbaPrzebiegPoniżej++;
    }
}

$najdrozszy = najdrozszySamochod($samochody);
$najtanszy = najtanszySamochod($samochody);
$srednia = round(obliczSredniaCene($samochody));

echo "<br>================================<br>";
echo "        STATYSTYKI<br>";
echo "================================<br><br>";

echo "Liczba samochodów: " . count($samochody) . "<br>";
echo "Średnia cena: $srednia zł<br>";
echo "Najdroższy: {$najdrozszy['marka']} {$najdrozszy['model']}<br>";
echo "Najtańszy: {$najtanszy['marka']} {$najtanszy['model']}<br>";
echo "Samochody diesel: $liczbaDiesel<br>";
echo "Samochody po 2020 roku: $liczbaPo2020<br>";
echo "Przebieg poniżej 100000 km: $liczbaPrzebiegPoniżej<br>";
echo "================================<br>";
?>
</body>
</html>