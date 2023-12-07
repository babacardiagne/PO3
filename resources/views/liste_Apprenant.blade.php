<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body class="col-12 bg-light container-fluid">
<table class="table caption-top table-bordered table-hover border-primary text-center">
  <caption class='text-center text-primary h3 text-hover'>Liste des Apprenants</caption>
  <thead class='table-primary'>
    <tr>
      <th scope="col">N°</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th scope="col">Matricule</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($liste as $Apprenant)
    <tr>
        <td>{{$Apprenant->id}}</td>
        <td>{{$Apprenant->NOM}}</td>
        <td>{{$Apprenant->Prenom}}</td>
        <td>{{$Apprenant->Email}}</td>
        <td>{{$Apprenant->Matricule}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
  </body>
</html> 