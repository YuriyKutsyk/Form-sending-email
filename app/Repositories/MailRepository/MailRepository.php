<?php

namespace App\Repositories\MailRepository;

use App\Models\Mail;
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

//    public function getLastUUID(string $emailFrom): Mail
//    {
//        return $this
//            ->query()
//            ->select('UUID')
//            ->where('email_from', $emailFrom)
//            ->orderByDesc('created_at')
//            ->first();
//    }

    public function getLastDataByFieldEmailFrom(string $emailFrom): Collection
    {
        return $this
            ->query()
            ->where('email_from', $emailFrom)
            ->orderByDesc('created_at')
            ->limit(1)
            ->get();
    }
}
