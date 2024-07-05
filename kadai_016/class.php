<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>kadai_016</title>
 </head>
 
 <body>
     <p>
         <?php
        //  --------------------------------------------------
        //         Food      
        //  --------------------------------------------------
            // Foodというクラスを作成
            class Food {
            // プロパティを定義する
            private $name;
            private $price;
            // 「show_price」メソッドを定義する
            public function set_price(int $price) {
                $this->price = $price;
            }
            public function show_price() {
                echo $this->price . '<br>';
            }
            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
            }

            // インスタンス化する
            $Food = new Food('potato', 250);
            // インスタンスを出力する
            print_r($Food);
 
            echo "<br/>";
        
        //  --------------------------------------------------
        //         Animal      
        //  --------------------------------------------------
            // Animalというクラスを作成
            class Animal {
            // プロパティを定義する                        
            private $name;
            private $height;
            private $weight;
 
            // 「show_height」メソッドを定義する
            public function set_height(int $height) {
                 $this->height = $height;            
            }
            public function show_height() {
                echo $this->height . '<br>';
            }

            // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
            }
 
            // インスタンス化する
            $Animal = new Animal('dog', 60, 5000);
 
            // インスタンス$userの各プロパティの値を出力する
            print_r($Animal);

            echo "<br/>";

        //  --------------------------------------------------
        //         メソッドにアクセスして実行する      
        //  --------------------------------------------------            
            // Food > price
            $Food->set_price(250);
            $Food->show_price();

            // Animal > height
            $Animal->set_height(60);
            $Animal->show_height();
        
         ?>
     </p>
 </body>
 
 </html>