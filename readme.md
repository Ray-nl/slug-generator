# Slug generator for Statamic

---

If you have a product collection and have a product with the slug php already then you can call the generateslug. 

It return "car-1"

```
Slug::generateSlug('products', 'car')
```

If you want to customize the seperator add a third parameter that the seperator is.

```
Slug::generateSlug('products', 'car', '.')
```

It comes now "car.1"
