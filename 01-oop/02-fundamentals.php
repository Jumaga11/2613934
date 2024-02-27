<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/master.css">
</head>

<body>
    <main>
        <h1>02- Fundamentals</h1>
        <section>
            <?php

            class Runner
            {
                // Attributes
                public $name;
                public $age;
                public $number;

                // Methods
                public function __construct($name, $age, $number)
                {
                    $this->name   = $name;
                    $this->age    = $age;
                    $this->number = $number;
                }

                public function run()
                {
                    return "<img src='img/run.gif'>";
                }

                public function stop()
                {
                    return "<img src='img/stop.gif'>";
                }

                public function jump()
                {
                    return "<img src='img/jump.gif'>";
                }
            }

            $runner = new Runner('Usain Bolt', 35, 105);

            ?>
            <ul>
                <li>Name: <?= $runner->name ?></li>
                <li>Age: <?= $runner->age ?></li>
                <li>Number: <?= $runner->number ?></li>
            </ul>
            <figure>
                <?php
                /* echo $runner->run();
                echo $runner->jump();
                echo $runner->stop(); */
                ?>
            </figure>
            <form action="" method="post">
                <?php
                $result=" ";
                if (isset($_POST['run'])) {
                    echo "<p id = '$result'>" . $runner->run() . "</p>";
                }
                if (isset($_POST['jump'])) {
                    echo "<p id = '$result'>" . $runner->jump() . "</p>";
                }
                if (isset($_POST['stop'])) {
                    echo "<p id = '$result'>" . $runner->stop() . "</p>";
                }
                ?>
                <button name="run"> Run </button>
                <button name="jump"> Jump </button>
                <button name="stop"> Stop </button>
            </form>
        </section>
    </main>
</body>

</html>