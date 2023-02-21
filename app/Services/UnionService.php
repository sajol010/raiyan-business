<?php

namespace App\Services;

use App\Models\Union;

class UnionService
{
    private mixed $union;
    public function __construct($slug)
    {
        $this->setUnion($slug);
    }

    private function setUnion($slug): void
    {
        $this->union = Union::where('slug', $slug)->first();
    }

    /**
     * @return mixed
     */
    public function getUnion(): mixed{
        return $this->union;
    }

    /**
     * @return int
     */
    public function getId(): int{
        return $this->union->id;
    }

    /**
     * @return string
     */
    public function getUuid(): string{
        return $this->union->uuid;
    }


}
