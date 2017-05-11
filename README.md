Open file config/app.php and in the $providers array add the service providers for this package.<br />
Dungnv\Helloworld\HelloWorldServiceProvider::class<br />
Add the facade of this package to the $aliases array.<br />
'Dungnv' => Dungnv\Helloworld\Facade\Helloworld::class<br />

