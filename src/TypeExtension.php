<?php

namespace Jmf\Twig\Extension\Type;

use Override;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigTest;

class TypeExtension extends AbstractExtension
{
    public final const string PREFIX_DEFAULT = '';

    public function __construct(
        private readonly string $functionPrefix = self::PREFIX_DEFAULT,
    ) {
    }

    #[Override]
    public function getFilters(): iterable
    {
        return [
            new TwigFilter(
                "{$this->functionPrefix}get_class",
                get_class(...),
            ),
            new TwigFilter(
                "{$this->functionPrefix}get_type",
                gettype(...),
            ),
        ];
    }

    #[Override]
    public function getTests(): iterable
    {
        return [
            new TwigTest(
                'array',
                is_array(...),
            ),
            new TwigTest(
                'bool',
                is_bool(...),
            ),
            new TwigTest(
                'float',
                is_float(...),
            ),
            new TwigTest(
                'int',
                is_int(...),
            ),
            new TwigTest(
                'numeric',
                is_numeric(...),
            ),
            new TwigTest(
                'object',
                is_object(...),
            ),
            new TwigTest(
                'scalar',
                is_scalar(...),
            ),
            new TwigTest(
                'string',
                is_string(...),
            ),
        ];
    }
}
