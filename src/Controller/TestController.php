<?php

declare(strict_types=1);

namespace App\Controller;

use DateTimeImmutable;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class TestController extends AbstractController
{
    private function createTestResponse(): Response
    {
        return Response::create('<html><head><title>test</title></head><body><div>test</div></body></html>');
    }

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
        /** @noinspection ForgottenDebugOutputInspection */
        dump(new DateTimeImmutable());
        return $this->createTestResponse();
    }
}
