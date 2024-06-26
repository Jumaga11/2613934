<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/master.css">
</head>

<body>
    <nav class="controls">
        <a href="../index.html">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
            </svg>
        </a>
    </nav>
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
                $result = " ";
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