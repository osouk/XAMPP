<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>vuokraamo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <div class="container">
    <div class="row">
        <h3>Asiakasteidot</h3>
    </div>
    <div class="row">
        <p>
            <a href="Lisaa_asiakas.php" class="btn btn-succes">Lisää</a>
        </p>
        <table class="table tavle-striped">
            <thead>
                <tr>
                <th>#</th>
                <th>Etunimi</th>
                <th>Sukunimi</th>
                <th>Sähköposti</th>
                <th>Toiminnot</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //luodaan yhteys tietokantaan ja haetaan asiakastietoja
                require_once 'database.php';
                $sql = "SELECT * FROM asiakas";
                $result = $pdo->query($sql);

                while($row = $result->fetch());
                ?>
                <tr>
                    <td><?php echo $row['asiakasID']; ?> </td>
                    <td><?php echo $row['etunimi']; ?> </td>
                    <td><?php echo $row['sukunimi']; ?> </td>
                    <td><?php echo $row['sähköposti']; ?> </td>
                    <td>Lisää toiminnot poista, katso ja päivitä </td>
                </tr>

                <?php endwhile; ?>
            </tbody>           
        </table>
        
    </div>
  </div>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>