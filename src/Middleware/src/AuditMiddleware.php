<?php


use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class AuditMiddleware implements MiddlewareInterface
{
    private AuditService $auditService;

    public function __construct(AuditService $auditService)
    {
        $this->auditService = $auditService;
    }

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): \Psr\Http\Message\ResponseInterface
    {
        $this->auditService->preAuditRequest($request);

        $response = $handler->handle($request);

        $this->auditService->postAuditRequest($request);

        return $response;
    }
}