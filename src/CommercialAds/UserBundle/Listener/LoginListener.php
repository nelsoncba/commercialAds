<?php
namespace Localofertas\UsersBundle\Listener;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Routing\Router;
use Symfony\Component\HttpFoundation\RedirectResponse;

class LoginListener {

    private $context, $user, $router = null;
    
    public function __construct(SecurityContext $context, Router $router) {
        $this->context = $context;
        $this->router = $router;
    }
    
    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event){
        $token = $event->getAuthenticationToken();
        $this->user = $token->getUser()->getUsuario();
    }
    
    public function onKernelResponse(FilterResponseEvent $event){
        if(null != $this->user){
            if($this->context->isGranted('ROLE_ADVERTISER')){
                $route = $this->router->generate('advertiser_panel');
            }else{
                $route = $this->router->generate('main');
            }
            $event->setResponse(new RedirectResponse($route));
            $event->stopPropagation();
        }
    }
}

?>
