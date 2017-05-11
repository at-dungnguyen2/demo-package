Open file composer.json and add the following line in "psr-4":<br/>
"Dungnv&#92;&#92;Helloworld&#92;&#92;": "vendor/dungnv/helloworld/src"<br/>
In the $providers array add the service providers for this package.<br />
Dungnv\Helloworld\HelloWorldServiceProvider::class<br />
Add the facade of this package to the $aliases array.<br />
'Dungnv' => Dungnv\Helloworld\Facade\Helloworld::class<br />

