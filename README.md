![](./flash.svg)

# Flash messages helper.

______

Flash is a library designed to unify the interface for working with flash messages. It provides functionality for
creating and receiving messages. Flash does not restrict the user in the implementation of this functionality, as well
as the choice of storage for messages.

**To begin work** with Flash create flash generator. You can use base implementation
class [FlashGenerator](https://github.com/mislant/flash/blob/master/src/FlashGenerator.php)

```php
public function someAction()
{
    # here is some business logic
    $flashGenerator = new FlashGenerator(
        SetterInterface::class # your storage setter implementation
    );
    
    # end of business logic
    if ($businessResult) {
        $flashGenerator->success('Everything is Ok');
        return $businessResult;
    }
    $flashGenerator->error('Something goes wrong');
    return $businessResult;
}
```

**To get flashes** use flash getter. You can also use base implementation class [FlashExtractor](https://github.com/mislant/flash/blob/master/src/FlashExtractorInterface.php)

```php
public function showAlerts()
{
    $flashExtractor = new FlashExtractor(
        GetterInterface::class # your getter from storage implementation
    );
    
   # Your render logic
   $messages = $flashExtractor->info();
   foreach ($messages as $message){
       showAlert($message);
   }
}
```