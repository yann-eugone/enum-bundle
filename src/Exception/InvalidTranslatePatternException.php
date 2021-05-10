<?php

declare(strict_types=1);

namespace Yokai\EnumBundle\Exception;

use InvalidArgumentException;

/**
 * @author Yann Eugoné <eugone.yann@gmail.com>
 */
class InvalidTranslatePatternException extends InvalidArgumentException implements ExceptionInterface
{
    /**
     * @param string $transPattern
     *
     * @return InvalidTranslatePatternException
     */
    public static function placeholderRequired(string $transPattern): self
    {
        return new self(sprintf('Translation pattern "%s" must contain %%s placeholder', $transPattern));
    }
}
