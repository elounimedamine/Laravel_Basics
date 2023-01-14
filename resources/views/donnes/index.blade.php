<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Contenu Page Index</h1>
        <p>Test Index</p>

        <h3>{{ $namevariable }}</h3>
        
        <h3>{{ $agevar }}</h3>

        @foreach($tablesarray as $table)

          <div>
             le nom est : {{ $table }} 
             <hr/>
          </div>

        @endforeach

        
        
    </body>
</html>