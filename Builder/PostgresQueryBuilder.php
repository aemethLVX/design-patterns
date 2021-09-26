<?php

namespace Builder;

class PostgresQueryBuilder extends MySQLQueryBuilder
{
    public function limit(int $start, int $offset): SQLQueryBuilderInterface
    {
        parent::limit($start, $offset);

        $this->query->limit = " LIMIT " . $start . " OFFSET " . $offset;

        return $this;
    }
}
