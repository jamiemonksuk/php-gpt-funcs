<?php
namespace Amble\PhpGptFuncs\library;

class Thread
{
    public function __construct(
        protected string $id,
    ) {}

    public function get_id(): string {
        return $this->id;
    }
}
