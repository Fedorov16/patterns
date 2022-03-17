<?php

declare(strict_types=1);

namespace App\Pattern\Behavioral\State;

class Document
{
    private string $status = 'draft';

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function publish(): self
    {
        match ($this->status) {
            'draft' => $this->setStatus('moderation'),
            'moderation' => $this->setStatus('waitApproved'),
            'waitApproved' => $this->setStatus('published'),
            'published' => $this->setStatus('draft'),
        };
        dump($this->status);

        return $this;
    }

    public function publish2(string $role): self
    {
        match ($this->status) {
            'draft' => $this->isAdmin($role) ?  $this->setStatus('published') : $this->setStatus('moderation'),
            'moderation' => $this->isPolicy($role) ? $this->setStatus('published') : $this->setStatus('waitApproved'),
            'waitApproved' => $this->setStatus('published'),
            'published' => $this->isAdmin($role) ? $this->setStatus('draft') : $this->setStatus('published'),
        };
        dump($this->status);

        return $this;
    }

    private function isAdmin($role): bool
    {
        return $role === 'admin';
    }

    private function isPolicy(string $role): bool
    {
        return $role === 'policy';
    }
}
