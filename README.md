Twig extension : type
=====================

## Installation & Requirements

Install with [Composer](https://getcomposer.org):

```shell script
composer require jmf/twig-type
```

## Usage in Twig templates

### get_class() filter

Returns class of provided object.

```html
{% set class = object|get_class %}
```

### get_type() filter

Returns type of provided variable.

```html
{% set type = value|get_type %}
```

### "array" test

Returns true if provided variable is an array.

```html
{% if (value is array) %}
    {# ... #}
{% endif %}
```

### "bool" (boolean) test

Returns true if provided variable is a boolean.

```html
{% if (value is bool) %}
    {# ... #}
{% endif %}
```

### "float" test

Returns true if provided variable is a float.

```html
{% if (value is float) %}
    {# ... #}
{% endif %}
```

### "int" (integer) test

Returns true if provided variable is an integer.

```html
{% if (value is int) %}
    {# ... #}
{% endif %}
```

### "numeric" test

Returns true if provided variable is numeric.

```html
{% if (value is numeric) %}
    {# ... #}
{% endif %}
```

### "object" test

Returns true if provided variable is an object.

```html
{% if (value is object) %}
    {# ... #}
{% endif %}
```

### "scalar" test

Returns true if provided variable is scalar.

```html
{% if (value is scalar) %}
    {# ... #}
{% endif %}
```

### "string" test

Returns true if provided variable is a string.

```html
{% if (value is string) %}
    {# ... #}
{% endif %}
```
