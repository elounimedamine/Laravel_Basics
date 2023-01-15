<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ajout d'une catégorie</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">Ajout d'une catégorie</h1>
            <hr />
            <!--dans l'action on ajout le chemin de la page AddCategory avec la méthode POST-->
            <form action="/category/add" method="POST">
                <!--ajouter "@csrf" pour sécuriser le formulaire contre l'erreur 419 | PAGE EXPIRED-->
                @csrf
                <div class="form-group">
                    <label for=""> Nom du catégorie : </label>
                    <input type="text" name="nom" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for=""> Description de la catégorie : </label>
                    <textarea name="description" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>

        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>