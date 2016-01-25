## Notes
Please be explicit and consistent with the following:

- [Naming of Table, Table Column, FKs, etcetera](#naming-convention)
- Use CamelCase for naming of files (Eg. UserComment, UserItem)
- Use four (4) spaces (not tab) for indention
- [Annotate your functions, variables, classes (if necessary)](#code-annotation)
- Place code for defining FK at the bottom part of 'up' function
- Use **singular** instead of **plural** when naming a table, column, file, etcetera. For more details, refer to this [link](http://stackoverflow.com/a/5841297)
- More to come...

### Naming of Table, Table Column, FKs, etcetera <a name="naming-convention"></a>

> In this case we'll use User, Item and Comment models. Remember, this is only an example.

> Since a User has many Item and Item may have many Comments, we will setup the relationship in this manner.

> Given the example below, we've created three tables (user, item, comment) and to define the relationship between  _user_ and _item_ tables, we added 'user_id' in item table as foreign key, same goes for _comment_ table, we also added 'user_id' and 'item_id' as foreign keys. If you notice the naming convention we did in this example, we used the _tableName_\_id for foreign keys which is more clear and and easy to identify which table is associated with which column.

For User table

| Columns       | Type          | Extra |
| ------------- |:-------------:| -----:|
| id (PK)       | int (10)      | AI    |
| name          | varchar (50)  | N/A   |

For Item table

| Columns       | Type          | Extra |
| ------------- |:-------------:| -----:|
| id (PK)       | int (10)      | AI    |
| user_id (FK)  | int (10)      | N/A   |
| name (FK)     | varchar (50)  | N/A   |

For Comment table

| Columns       | Type          | Extra |
| ------------- |:-------------:| -----:|
| id (PK)       | int (10)      | AI    |
| user_id (FK)  | int (10)      | N/A   |
| item_id (FK)  | int (10)      | N/A   |
| content (FK)  | varchar (255) | N/A   |

### Annotate your functions, variables, classes (if necessary) <a name="code-annotation"></a>
```php
/**
 * Example of code annotation (in this case, function)
 * @var string $bar
 * @var array $baz
 * @return bool
 * @throws Exception
 */
public function foo($bar, array $baz) {
  try {
    return true;
  } catch (Exception $e) {
    throw new Exception();
  }
}
```

### How to install assets ###
1. Run 'npm install'.
2. Type 'gulp copy-vendor' to add all vendor files into their respective directories.
3. Done!

### FAQs ###
- Why Font-awesome is not working?
> Open font-awesome.min.css and update each '@font-face src url' to point to correct path.
