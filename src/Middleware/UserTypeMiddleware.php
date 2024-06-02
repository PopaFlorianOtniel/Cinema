<?php 

namespace App\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Psr\Http\Server\MiddlewareInterface;
use Laminas\Diactoros\Response\RedirectResponse;

class UserTypeMiddleware implements MiddlewareInterface
{
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $response = $handler->handle($request);

        $identity = $request->getAttribute('identity')->role ?? null;
        $prefix = $request->getAttribute('params')['prefix'] ?? null;
        
        if ($prefix === 'Owner' && $identity !== 'owner') {
            return new RedirectResponse('/');
        }

        if($prefix === 'Customer' && $identity !== 'customer') {
            return new RedirectResponse('/');
        }
    
        return $response;
    }
}
?>