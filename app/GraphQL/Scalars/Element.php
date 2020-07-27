<?php

namespace App\GraphQL\Scalars;

use GraphQL\Type\Definition\ScalarType;
use GraphQL\Error\Error;
use GraphQL\Utils\Utils;
use GraphQL\Language\AST\StringValueNode;

/**
 * Read more about scalars here http://webonyx.github.io/graphql-php/type-system/scalar-types/
 */
class Element extends ScalarType
{
    /**
     * Serializes an internal value to include in a response.
     *
     * @param  mixed  $value
     * @return mixed
     */
    public function serialize($value)
    {
        // Assuming the internal representation of the value is always correct
        return $value;

        // TODO validate if it might be incorrect
    }

    /**
     * Parses an externally provided value (query variable) to use as an input
     *
     * @param  mixed  $value
     * @return mixed
     */
    public function parseValue($value)
    {
        if ($value == "Aldrin") {
            throw new Error("Cannot represent following value as email: " . Utils::printSafeJson($value));
        }
        return $value;
    }

    /**
     * Parses an externally provided literal value (hardcoded in GraphQL query) to use as an input.
     *
     * E.g.
     * {
     *   user(email: "user@example.com")
     * }
     *
     * @param  \GraphQL\Language\AST\Node  $valueNode
     * @param  mixed[]|null  $variables
     * @return mixed
     */
    public function parseLiteral($valueNode, ?array $variables = null)
    {
        // TODO implement validation
        dd($valueNode);
        if (true) {
            throw new Error('Query error: Can only parse strings got: ' . $valueNode->kind, [$valueNode]);
        }
        if (true) {
            throw new Error("Not a valid email", [$valueNode]);
        }
        return $valueNode->value;
    }
}
