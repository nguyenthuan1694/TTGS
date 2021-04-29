<?php
namespace App\Repositories\Introduce;

interface IntroduceRepositoryInterface
{
    public function getIntroduceWidthPagination();

    public function deleteIntroduce($id);

    public function trashedIntroduce();

    public function restoreIntroduce($id);

    public function onlyTrashedIntroduce($id);

}