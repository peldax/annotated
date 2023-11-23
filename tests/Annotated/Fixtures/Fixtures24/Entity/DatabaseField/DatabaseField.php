<?php

declare(strict_types=1);

namespace Cycle\Annotated\Tests\Fixtures\Fixtures24\Entity\DatabaseField;

use Cycle\Annotated\Annotation\Column;
use Cycle\Annotated\Annotation\Entity;
use Cycle\Annotated\Annotation\ForeignKey;

/**
 * @Entity(
 *     role="from",
 *     table="from",
 *     foreignKeys={
 *         @ForeignKey(target="target", outerKey="outer_key", innerKey="inner_key")
 *     }
 * )
 */
class DatabaseField
{
    /**
     * @Column(type="primary")
     */
    public int $id;

    /**
     * @Column(type="integer", name="inner_key")
     */
    public int $innerKey;
}
