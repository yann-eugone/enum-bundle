<?php

declare(strict_types=1);

namespace Yokai\EnumBundle\Tests\Integration\App\Model;

use Yokai\EnumBundle\Validator\Constraints\Enum;
use Yokai\EnumBundle\Tests\Integration\App\Enum\PullRequestStatusEnum;
use Yokai\EnumBundle\Tests\Integration\App\Enum\PullRequestLabelEnum;

final class PullRequest
{
    /**
     * @var Status
     *
     * @Enum(PullRequestStatusEnum::class)
     */
    public $status;

    /**
     * @var string[]
     *
     * @Enum(PullRequestLabelEnum::class, multiple=true)
     */
    public $labels;
}
