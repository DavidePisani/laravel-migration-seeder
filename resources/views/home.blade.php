<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista viaggi per classe 66 "con l'accompagnamento di un insegnante a scelta" (tutto gratis)</h1>

    <div class="travels">
        @foreach ($travels as $travel)
        <div class="travel">
            <div>Destinazione : {{$travel-> destinazione}}</div>
            <div>Trasporto : {{$travel-> trasporto}}</div>
            <div>Tipo di alloggio : {{$travel-> tipo_di_alloggio}}</div>
            <div>Descrizione alloggio : {{$travel-> descrizione_alloggio}}</div>
            <div>Data Partenza : {{$travel-> data_partenza}}</div>
            <div>Data Rientro : {{$travel-> data_rientro}}</div>
        </div>
        <br>
        @endforeach
        
    </div>
</body>
</html>