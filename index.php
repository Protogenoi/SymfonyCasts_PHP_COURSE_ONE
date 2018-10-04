<?php

$pdo = new PDO('mysql:dbname=air_pup;host=localhost', 'michael', 'AppleMonkey');
$result = $pdo->query('SELECT * FROM pet');
$pets = $result->fetchAll();

require 'lib/functions.php';

//$pets = get_pets();

$pets = array_reverse($pets);

$cleverWelcomeMessage = 'All the love, none of the crap!';
$pupCount = count($pets);

require 'layout/header.php';
?>

<div class="jumbotron">
    <div class="container">

        <h1><?php echo strtoupper(strtolower($cleverWelcomeMessage)); ?></h1>

        <p><?php echo $pupCount; ?> pet friends!</p>

        <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php foreach ($pets as $cutepet) { ?>
            <div class="col-lg-4 pet-list-item">
                <h2><?php echo $cutepet['name']; ?></h2>
                <img src="/images/<?php echo $cutepet['image']; ?>"
                     class="img-rounded"/>

                <blockquote class="pet-details">
                    <span class="label label-info"><?php echo $cutepet['breed']; ?></span>
                    <?php
                    if (!array_key_exists('age', $cutepet)
                        || $cutepet['age'] != ''
                    ) {
                        echo 'Unknown';
                    } elseif ($cutepet['age'] == 'Hidden') {
                        echo '(contact owner for age)';
                    } else {
                        echo 'Unknown';
                    }
                    ?>
                    <?php echo $cutepet['weight']; ?> lbs
                </blockquote>

                <p>
                    <?php echo $cutepet['bio']; ?>
                </p>
            </div>

        <?php } ?>
        <hr>
<?php

require 'layout/footer.php';