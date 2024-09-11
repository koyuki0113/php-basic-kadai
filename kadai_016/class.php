<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎15章課題</title>
</head>
<body>
    <p>
        <?php
        class Food {
            // プロパティ
            private $name;
            private $price;

            public function __construct(string $namae, int $pri){
                $this ->name = $namae;
                $this ->price = $pri;
            }

            public function show_price(){
                echo $this->price;
            }
        }
        class Animal {
            private $name;
            private $height;
            private $weight;

        public function __construct(string $namae, int $hei, int $wei){
            $this ->name = $namae;
            $this ->height = $hei;
            $this ->weight = $wei;
        }

        public function show_height(){
            echo $this->height;
        }
    }

    // インスタンス化
    $potato =new Food('potato', 250);
    $cat = new Animal('cat', 30, 500);

    print_r($potato);
    echo '<br>';
    print_r($cat);
    echo '<br>';

    $potato->show_price();
    echo '<br>';
    $cat->show_height();
        ?>
</p>
</body>
</html>