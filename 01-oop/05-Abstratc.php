<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05 - Abstract</title>
    <link rel="stylesheet" href="CSS/master.css">
</head>

<body>
    <nav class="controls">
        <a href="index.html">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path fill="#ffffff" d="M512 256A256 256 0 1 0 0 256a256 256 0 1 0 512 0zM231 127c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-71 71L376 232c13.3 0 24 10.7 24 24s-10.7 24-24 24l-182.1 0 71 71c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L119 273c-9.4-9.4-9.4-24.6 0-33.9L231 127z" />
            </svg>
        </a>
    </nav>
    <main>
        <h1>05 - abstract</h1>
        <section>
            <?php
            abstract class Database
            {
                //Attributes
                protected $host;
                protected $user;
                protected $pass;
                protected $dbname;
                protected $conx;

                //methods
                public function __construct($dbname, $host = 'localhost', $user = 'root', $pass = '')
                {
                    $this->host = $host;
                    $this->user = $user;
                    $this->pass = $pass;
                    $this->dbname = $dbname;
                }
                //Método para conectarse a la base de datos
                public function connect()
                {
                    try {
                        $this->conx = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
                        if ($this->conx) {
                            echo "conexión establecida";
                        }
                    } catch (PDOException $e) {
                        echo "Error: " . $e->getMessage();
                    }
                }
            }

            class Pokemon extends Database
            {
                public function getPokemons()
                {
                    $sql     = "SELECT * FROM pokemons";
                    $stmt    = $this->conx->prepare($sql);
                    $stmt->execute();
                    $results = $stmt->fetchAll(PDO::FETCH_OBJ);
                    return $results;
                }
            }

            //crear una instancia de pokemon  y llamar al método connect
            $db = new Pokemon('adso2613934');
            $db->connect();
            $pokemons = $db->getPokemons();

            if (count($pokemons) > 0) {
                echo "<table>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Name</th>";
                echo "<th>Type</th>";
                echo "<th>Health</th>";
                echo "<th>Image</th>";
                echo "</tr>";

                foreach ($pokemons as $pokemon) {
                    echo "<tr>";
                    echo "<td>" . $pokemon->id . "</td>";
                    echo "<td>" . $pokemon->name . "</td>";
                    echo "<td>" . $pokemon->type . "</td>";
                    echo "<td>" . $pokemon->health . "</td>";
                    echo "<td><img src='img/images/ico-pk.png" . $pokemon->image . "' alt='" . $pokemon->name . "'></td>"; 
                    echo "</tr>";
                }

                echo "</table>";
            } else {
                echo "No pokemons found.";
            }
            ?>
        </section>
    </main>
</body>

</html>