<?php 

// interfaces guarantee certain methods are implemented in classes
// interface is generic description, then we can have more specific requirement (how to achieve the desc) with abstract class
interface PaymentProcessor {
    public function processPayment(float | int $amount): bool;
    public function refundPayment(float | int $amount): bool;
}
// we either emplement all the methods from the interface in this stripe processor class or we mark it as abstract
// abstract class: class that contains at least 1 abstract (not implemented method)
// huge implication: you can't create an instance of such class
// the point of abstract class: you may want to implement common functionality (across of all your payment processors)
// class that has at least 1 abstract method must be abstract
// the opposite of abstract class in concrete class
// not implemented interface method is automatically abstract

// why we need an interfaces at all if we have abstract class?
// abstract class PaymentProcessor {
//     abstract public function processPayment(float $amount): bool;
//     abstract public function refundPayment(float $amount): bool;
// }
// classes can only extend 1 single class

abstract class OnlinePaymentProcessor implements PaymentProcessor {
    public function __construct(
        protected readonly string $apiKey
        // readonly cannot be modified after it's initialized
        // use readoly when passing credentials, keys, or anything shouldn't change to an object
    ) {}

    abstract protected function validateApiKey(): bool;
    abstract protected function executePayment(float | int $amount): bool;
    abstract protected function executeRefund(float | int $amount): bool;

    public function processPayment(float | int $amount): bool {
        if (!$this->validateApiKey()) {
            throw new Exception("Invalid API key");
        }
        return $this->executePayment($amount);
    }   

    public function refundPayment(float | int $amount): bool {
        if (!$this->validateApiKey()) {
            throw new Exception("Invalid API key");
        }
        return $this->executeRefund($amount);
    }
}
// final classes can't be extended

final class StripeProcessor extends OnlinePaymentProcessor {
    protected function validateApiKey(): bool {
        return strpos($this->apiKey, 'sk_') === 0;
    }

    protected function executePayment(float | int $amount): bool
    {
        echo "Processing Stripe payment of $amount\n";
        return true;
    }

    protected function executeRefund(float | int $amount): bool
    {
        echo "Processing Stripe refund of $amount\n";
        return true;
    }
}

// class StripeProcessorV2 extends StripeProcessor {

// }
// avoid Deep Inheritance Hierarchy in favor of composition
// endlessly extending a base class to add more and more functionality, this can really end up creating a mess
// stop people creating mess by adding final for class
// methods can be final too. class with final method can be extended but cannot be overriden

// every new class adds mental overhead. composition helps reuse existing code

class PayPalProcesssor extends OnlinePaymentProcessor {
    protected function validateApiKey(): bool {
        return strlen($this->apiKey) === 32;
    }

    protected function executePayment(float | int $amount): bool
    {
        echo "Processing PayPal payment of $amount\n";
        return true;
    }

    protected function executeRefund(float | int $amount): bool
    {
        echo "Processing PayPal refund of $amount\n";
        return true;
    }
}

class CashPaymentProcessor implements PaymentProcessor {
    public function processPayment(float | int $amount): bool {
        echo "Cash payment ...";
        return true;
    }
    public function refundPayment(float | int $amount): bool {
        echo "Cash refund ...";
        return true;
    }
}

class OrderProcessor
{
    public function __construct(private PaymentProcessor $paymentProcessor) {}
    // runtime polymorphism

    public function processOrder(float | int $amount, string | array $items): void 
    {
        if (is_array($items)) {
            $itemsList = implode(', ', $items);
        } else {
            $itemsList = $items;
        }        

        echo "Processing order for items: $itemsList\n";

        if ($this->paymentProcessor->processPayment($amount)) {
            echo "Order processed successfully\n";
        } else {
            echo "Order processing failed\n";
        }
    }

    public function refundOrder(float | int $amount): void {
        // ...
        if ($this->paymentProcessor->processPayment($amount)) {
            echo "Order refunded successfully\n";
        } else {
            echo "Order refund failed\n";
        }
    }
}
// a lot of software developers prefer composition over inheritance
// passing classes around that can have some specific functionality is prefered to extending base classes to to add more functionality to the base class
// if objects being passed around implement interfaces, you've got much more benefits like loose coupling
// loose coupling: the OrderProcessor isn't really tightly coupled with any specific payment implimentation
// composition allows easier testing to unit test by providing mocks for this specific interface than creating or using some actual implementation

$stripeProcessor = new StripeProcessor("sk_test_123456");
$paypalProcessor = new PayPalProcesssor("valid_paypal_api_key_32charslong");
$cashProcessor = new CashPaymentProcessor();

$stripeOrder = new OrderProcessor($stripeProcessor);
$paypalOrder = new OrderProcessor($paypalProcessor);
$cashOrder = new OrderProcessor($cashProcessor);

$stripeOrder->processOrder(100.00, "Book");
$paypalOrder->processOrder(150.00, ["Book", "Movie"]);
$cashOrder->processOrder(50.00, ["Apple", "Orange"]);

$stripeOrder->refundOrder(25.00);
$paypalOrder->refundOrder(50.00);
$cashOrder->refundOrder(10.00);

