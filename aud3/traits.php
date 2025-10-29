<?php
trait Loggable {
    public function log($message) {
        echo "[LOG]: " . $message . PHP_EOL;
    }

}
?>
<?php
class User {
    use Loggable;
    private $name;

    public function __construct($name) {
        $this->name = $name;
        $this->log("User $this->name created.");
    }
}

class Product {
    use Loggable;

    private $productName;

    public function __construct($productName) {
        $this->productName = $productName;
        $this->log("Product $this->productName created.");
    }
}

