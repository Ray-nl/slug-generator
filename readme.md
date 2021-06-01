# Slug generator for Statamic

---

If you have a product collection and have a product with the slug php already then you can call the generateslug. 

It return "php-1"

```
Slug::generateSlug('products', 'php')
```

If you want to customize the seperator add a third parameter that the seperator is.

```
Slug::generateSlug('products', 'php', '.')
```

It comes now "php.1"
