# Dependency injection

Dependency injection is a form of *Inversion of control* (IOC). IOC is not only passed with DI.
Great article about IOC from Martin Fowler.

Kinds of DI:
* Setter injection
* Method injection
* Constructor injection

DI make our tests easier. We can inject necessary instances or mocks in places to DI.

# Dependency injection (DI) Container

Described by FIG: PSR-11 Container Interface 

Instead of:
```php
$invoiceService = new InvoiceService(
    new TaxService()
    // ... a lot of dependencies
);
```
Create by:
```php
$invoiceService = $container->get(InvoiceService::class);
```

