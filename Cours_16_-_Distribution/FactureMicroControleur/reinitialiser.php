<?php
  session_start();
  session_destroy();
  session_start();

  $facture = [
    [ 'description' => 'steak haché',
      'prixUnitaire' => 6.00,
      'quantite' => 1
    ],
    [ 'description' => '6 pains hamburger',
      'prixUnitaire' => 4.00,
      'quantite' => 1
    ],
    [ 'description' => 'dentifrice',
      'prixUnitaire' => 3.40,
      'quantite' => 3
    ],
    [ 'description' => 'moutarde',
      'prixUnitaire' => 3.50,
      'quantite' => 1
    ],
    [ 'description' => 'oignons',
      'prixUnitaire' => 1.10,
      'quantite' => 4
    ],
    [ 'description' => 'pommes de terre',
      'prixUnitaire' => 0.30,
      'quantite' => 6
    ],
    [ 'description' => 'ketchup',
      'prixUnitaire' => 7.25,
      'quantite' => 2
    ]
  ];

  $_SESSION['facture'] = $facture;

  header("Location: facture.php");
?>