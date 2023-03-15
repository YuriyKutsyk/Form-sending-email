<?php

namespace App\Repositories\MailRepository;

use App\Models\Mail;
use App\Repositories\Base\BaseRepository;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class MailRepository
{
    protected function query(): Builder
    {
        return Mail::query();
    }

    public function create(array $attributes = []): Mail
    {
        return $this->query()->create($attributes);
    }

    public function getLastUUID(): Mail
    {
        return $this
            ->query()
            ->select('UUID')
            ->orderByDesc('UUID')
            ->first();
    }

    public function getLastEmailSent(): Collection
    {
        return $this
            ->query()
            ->orderByDesc('created_at')
            ->limit(1)
            ->get();
    }
}
