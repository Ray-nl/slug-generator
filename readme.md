# Slug generator for Statamic

---

If you have a entry in a collection with the possibilty to have a duplicate slug, then you can call the generateslug. If the slug 'car' allready exists in the products collection it wil return 'car-1'

```
Slug::generateSlug('products', 'car')
```

If you want to customize the seperator add a third parameter that the seperator is.

```
Slug::generateSlug('products', 'car', '.')
```

It returns now "car.1"

As fourth parameter you can add the starting number. 

