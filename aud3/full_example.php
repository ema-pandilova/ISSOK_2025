<?php

// Enum for Coffee Types
enum CoffeeType: string {
    case ESPRESSO = 'espresso';
    case LATTE = 'latte';
    case AMERICANO = 'americano';
}

enum TeaType: string {
    case BLACK = 'black';
    case GREEN = 'green';
}

// Trait for discount
trait Discountable {
    public function applyDiscount(float $amount): void {
        $this->price -= $amount;
    }
}

// Abstract Beverage class
abstract class Beverage {
    protected string $name;
    protected float $price;

    public function __construct(string $name, float $price) {
        $this->name = $name;
        $this->price = $price;
    }

    abstract public function calculateTotalPrice(int $quantity): float;
}

// Coffee class
class Coffee extends Beverage {
    use Discountable;

    private CoffeeType $type;

    public function __construct(string $name, float $price, CoffeeType $type) {
        parent::__construct($name, $price);
        $this->type = $type;
    }

    public function calculateTotalPrice(int $quantity): float {
        return $this->price * $quantity;
    }
}

// Tea class
class Tea extends Beverage {
    use Discountable;

    private TeaType $teaType;

    public function __construct(string $name, float $price, TeaType $teaType) {
        parent::__construct($name, $price);
        $this->teaType = $teaType;
    }

    public function calculateTotalPrice(int $quantity): float {
        return $this->price * $quantity;
    }
}

// Order class
class Order {
    /** @var array<Beverage> $items */
    private array $items = [];

    public function addItem(Beverage $beverage, int $quantity): void {
        $this->items[] = ['beverage' => $beverage, 'quantity' => $quantity];
    }

    public function calculateOrderTotal(): float {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['beverage']->calculateTotalPrice($item['quantity']);
        }
        return $total;
    }
}

// Usage
$coffee = new Coffee("Espresso", 140.0, CoffeeType::ESPRESSO);
$tea = new Tea("Green Tea", 100.0, TeaType::GREEN);
$coffee->applyDiscount(20.0);  // Apply a discount

$order = new Order();
$order->addItem($coffee, 2);  // 2 espresso
$order->addItem($tea, 1);     // 1 green tea

echo "Total order amount: " . $order->calculateOrderTotal() . " MKD";