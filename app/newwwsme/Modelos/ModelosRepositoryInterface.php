<?php
namespace newwwsme\newwwsme\Modelos;

interface ModelosRepositoryInterface
{
    public function latest();
    public function findOrFail($id);
    public function create(array $data);
    public function update($entity, array $data);
    public function delete($entity);
    public function getSortedByDate();
}