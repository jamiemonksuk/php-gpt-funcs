<?php
namespace AmblePhpGptFuncs\library;

class Run
{
    public function __construct(
        protected string $id,
        protected string $thread_id,
        protected string $status,
        protected $required_action = null,
    ) {}

    public function get_id(): string {
        return $this->id;
    }

    public function is_pending(): bool {
        return in_array( $this->status, [
            "cancelling",
            "in_progress",
            "queued",
        ] );
    }

    public function requires_action() {
        return $this->status == 'requires_action';
    }

    public function get_status(): string {
        return $this->status;
    }

    public function get_required_action() {
        return $this->required_action;
    }

    public function get_thread_id(): string {
        return $this->thread_id;
    }
}
