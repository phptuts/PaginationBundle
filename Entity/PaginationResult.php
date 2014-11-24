<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoahGlaser\PaginationBundle\Entity;

/**
 * Description of PaginationResult
 *
 * @author student
 */
class PaginationResult 
{
   
    private $page;    
    private $total;
    private $results;
    private $maxResults;
    
    
    public function getPage()
    {
        return $this->page;
    }
    
    public function setPage($page)
    {
        $this->page = $page;
        
        return $this;
    }
    
    public function getTotal()
    {
        return $this->total;
    }
    
    public function setTotal($total)
    {
        $this->total = $total;
        
        return $total;
    }
    
    public function getResults()
    {
        return $this->results;
    }
    
    public function setResults($results = array())
    {
        $this->results = $results;
        
        return $this;
    }
    
    public function getMaxResults()
    {
        return $this->maxResults;
    }
    
    public function setMaxResults($maxResults)
    {
        $this->maxResults = $maxResults;
        
        return $this;
    }
    
    public function getTotalPages()
    {
        $pages = $this->total / $this->maxResults;        
        return ceil($pages);
    }
    
   
}
