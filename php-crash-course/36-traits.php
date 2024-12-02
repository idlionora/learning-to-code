<?php 
// trait: a way of adding methods to classes without inheritence

interface Logger {
    public function log(string $message): void;
}

trait Loggable {
    public function log(string $message): void {
        echo "Logging: $message\n";
    }
}
// in other language sometimes called a mixin or a partial
// traits doesn't necessarily have to be used with an interface
// Laravel uses traits a lot

class User implements Logger {
    use Loggable;

    public function __construct(public string $name) {}

    public function save():void {
        $this->log("User {$this->name} saved");
        // logging - recording of events, actions or data points
    }
}

$user = new User("Piotr");
$user->save();

