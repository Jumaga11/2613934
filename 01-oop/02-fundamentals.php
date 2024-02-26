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
        <h1>02-Fundamentals</h1>
        <figure id="runnerFigure">
            <?php
            class Runner
            {
                //atributes
                private $name;
                private $age;
                private $number;
                //methods
                public function __construct($name, $age, $number)
                {
                    $this->name = $name;
                    $this->age = $age;
                    $this->number = $number;
                }
                public function run()
                {
                    echo "🏃‍♂️";
                }
                public function jump()
                {
                    echo "🤸‍♂️";
                }
                public function stop()
                {
                    echo "🧍‍♂️";
                }
            }
            $runner = new Runner('Radamel', 35, 105);
            ?>
        </figure>
    </main>
    <script>
        var runnerFigure = document.getElementById('runnerFigure');
        var emojis = ["🚶🏼","🏃🏼","🤾🏼","🤸🏼","🏃🏼","🧎🏼"];
        var index = 0;

        function changeEmoji() {
            runnerFigure.innerHTML = emojis[index];
            index = (index + 1) % emojis.length;
        }

        setInterval(changeEmoji, 150); // Cambiar emoji cada 2 segundos
    </script>
</body>

</html>
