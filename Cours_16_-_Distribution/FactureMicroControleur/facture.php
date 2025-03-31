<?php
session_start();
$facture = [];

if(isset($_SESSION['facture'])) {
    $facture = $_SESSION['facture'];
}

$grandTotal = 0;
foreach($facture as $itemFacture) {
    $grandTotal += $itemFacture['quantite'] *
                   $itemFacture['prixUnitaire'];
}
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>420-W24-SF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="navbar navbar-light bg-dark mb-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <span class="badge text-bg-info text-light">420-W24-SF</span>
                    <h1 class="text-light">Programmation Web II</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
          <h1>Facture <a href="reinitialiser.php" class="btn btn-warning">réinitialiser</a></h1>
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Description</th>
                <th>Prix unitaire</th>
                <th>Quantité</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
<?php
    foreach($facture as $position => $itemFacture)
    {
        $total = $itemFacture['prixUnitaire'] * $itemFacture['quantite'];
?>
              <tr>
                <td>
                  <a class="btn btn-xs btn-danger" href="supprimer.php?position=<?= $position ?>">X</a>
                  <?= $itemFacture['description'] ?>
                </td>
                <td><?= '$' . sprintf('%01.2f', $itemFacture['prixUnitaire']) ?></td>
                <td><?= $itemFacture['quantite'] ?></td>
                <td><?= '$' . sprintf('%01.2f', $total) ?></td>
              </tr>
<?php
    }
?>
            </tbody>
          </table>
          <h3>Grand total: <span class="text-primary">
              <?= '$' . sprintf('%01.2f', $grandTotal) ?>
          </span></h3>
        </div>
      </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

