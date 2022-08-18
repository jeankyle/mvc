<?php
/*
 * This file is part of the Abc package.
 *
 * This source code is for educational purposes only.
 * It is not recommended using it in production as it is.
 */


namespace Abc\Utility;

class Paginator
{
    protected float $totalPages;
    protected int $page;
    protected float $offset;

    public function __construct(int $totalRecords, int $recordsPerPage, int $page)
    {
        // Make sure the page number is within a valid range from 1 to the total number of pages
        $this->totalPages = ceil($totalRecords / $recordsPerPage);
        $data = [
            'options' => [
                'default' => 1,
                'min_range' => 1,
                'max_range' => $this->totalPages
            ]
        ];
        $this->page = filter_var($page, FILTER_VALIDATE_INT, $data);
        // Calculate the starting record based on the page and number of records per page
        $this->offset = $recordsPerPage * ($this->page - 1);
    }

    /**
     * Get the starting record within the SQL Query
     */
    public function getOffset() : int
    {
        return (int)$this->offset;
    }

    /**
     * Gte the current page
     */
    public function getPage() : int
    {
        return (int)$this->page;
    }

    /**
     * Get the total number of pages
     */
    public function getTotalPages() : int
    {
        return (int)$this->totalPages;
    }


}