<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04- Inheritance</title>
    <link rel="stylesheet" href="css/master.css">
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
        <h1>04- Inheritance</h1>
        <section>
            <div class="pokemon-container">
                <?php
                class Pokemon
                {
                    // Attributes
                    protected $name;
                    protected $type;
                    protected $healt;
                    protected $image;

                    // Methods
                    public function __construct($name, $type, $healt, $image)
                    {
                        $this->name  = $name;
                        $this->type  = $type;
                        $this->healt = $healt;
                        $this->image = $image;
                    }
                    public function attack()
                    {
                        return "Attack";
                    }
                    public function defense()
                    {
                        return  "Defense";
                    }
                    public function show()
                    {
                        return "<div class='pokemon-card'> <img src='" . $this->image . "' alt='" . $this->name . "'>" . "<div class='pokemon-info neon-text'>" . $this->name . " | " . $this->type . " | " . $this->healt . "</div></div>";
                    }
                }
                class Evolve extends Pokemon
                {
                    public function levelUp($name, $type, $healt, $image)
                    {
                        $this->name  = $name;
                        $this->type  = $type;
                        $this->healt = $healt;
                        $this->image = $image;
                    }
                }
                $pk = new Evolve('Vegueta Saiyajin', 'Galick', 150, 'img/charmander.png');
                echo '<div class="pokemon">';
                echo $pk->show();
                echo $pk->attack();
                echo $pk->defense();
                echo '</div>';
                $pk->levelUp('Vegueta Saiyajin dios', 'Big Bang', 250, 'img/charmeleon.png');
                echo '<div class="pokemon">';
                echo $pk->show();
                echo $pk->attack();
                echo $pk->defense();
                echo '</div>';
                $pk->levelUp('Vegueta blue', 'Resplandor final', 450, 'img/charizard.png');
                echo '<div class="pokemon">';
                echo $pk->show();
                echo $pk->attack();
                echo $pk->defense();
                echo '</div>';
                ?>
            </div>
            <h2>Evolve your Pokemon</h2>
        </section>
    </main>
</body>

</html>
