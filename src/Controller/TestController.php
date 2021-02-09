<?php

declare(strict_types=1);

namespace App\Controller;

use DateTimeImmutable;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class TestController extends AbstractController
{
    /**
     * @Route("/test", name="test")
     */
    public function test(): Response
    {
        return $this->createTestResponse();
    }

    /**
     * @Route("/test_dump", name="test_dump")
     */
    public function testDump(): Response
    {
        dump(new DateTimeImmutable());

        return $this->createTestResponse();
    }

    private function createTestResponse(): Response
    {
        return new Response('<html lang="en"><head><title>test</title></head><body><div>test</div></body></html>');
    }
}
