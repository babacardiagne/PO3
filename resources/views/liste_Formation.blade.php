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
  <caption class='text-center text-primary h3 text-hover'>Liste des Formations</caption>
  <thead class='table-primary'>
    <tr>
      <th scope="col">N°</th>
      <th scope="col">Formation</th>
      <th scope="col">Débouchés</th>
      <th scope="col">Unités d'Enseignement</th>
      <th scope="col">Condition d'Admission</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($liste as $Formation)
    <tr>
        <td>{{$Formation->id}}</td>
        <td>{{$Formation->Formation}}</td>
        <td>{{$Formation->Débouchés}}</td>
        <td>{{$Formation->Unités}}</td>
        <td>{{$Formation->Condition}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
  </body>
</html> 