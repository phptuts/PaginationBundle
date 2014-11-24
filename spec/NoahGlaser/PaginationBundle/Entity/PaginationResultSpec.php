<?php

namespace spec\NoahGlaser\PaginationBundle\Entity;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PaginationResultSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('NoahGlaser\PaginationBundle\Entity\PaginationResult');
    }
    
    function it_should_get_total_pages()
    {
        $this->setTotal(233);
        $this->setMaxResults(12);
        $this->getTotalPages()->shouldBeLike(20);
    }
}


