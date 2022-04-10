<?php


namespace App\Repositories\Dashboard\Section;


use App\Repositories\BaseRepositoryInterface;

interface SectionRepositoryInterface extends BaseRepositoryInterface
{
    public function getTypes(): array;
}
