# Readme

## Calculator
This is a challenge proposed by Igor Wiedler. I wanted to do a postfix calculator to calculate something like this:


## How to Calculate

### Mathematical operations


```
Example: 1 + (4 * 5)
   +
  / \
 1   *
    / \
   4   5

The result should be 21

Step 1: 4 * 5 = 20
  +
 / \
1   20

Step 2: 20 + 1 = 21
```
The code:

```php
<?php
$node = new BinaryNode(
  '+',
  new ValueNode(1),
  new BinaryNode(
    '*',
    new ValueNode(5),
    new ValueNode(4)
  )
);
var_dump($node->calculate());
#int(21)
```

### Logical operations
Some operations are supported

```
Example: 1 < 2
   <
  / \
 1   2

Output: true
```

The Code:
```php
<?php
$node = new BinaryNode(
  '<',
  new ValueNode(1),
  new ValueNode(2)
);
var_dump($node->calculate());
#bool(true)
```

### Conditional Operations
This is for when you want to calculate something only if some requirement is fullfilled

```
IF 1 < 2 THEN
     +
    / \
   7   *
      / \
     2   4
ELSE
  PRINT "INVALID"
ENDIF

```
The code

```php
<?php
$node = new IfNode(
  // if
  new BinaryNode(
    '<',
    new ValueNode(1),
    new ValueNode(2)
  ),
  // then
  new BinaryNode(
    '+',
    new ValueNode(7),
    new BinaryNode(
      '*',
      new ValueNode(2),
      new ValueNode(4)
    )
  ),
  // else
  new ValueNode('Invalid!')
);
var_dump($node->calculate());
#int(15)
```

## TODO
* Unit Tests
* A postfix parser. As you can see the calculations are made one by one and creating the objects to do it.
