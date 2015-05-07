<?php

namespace CommercialAds\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use CommercialAds\UserBundle\Entity\User;
use CommercialAds\UserBundle\Form\Frontend\UserType;
use CommercialAds\UserBundle\Form\Frontend\ResetPasswordType;
use CommercialAds\UserBundle\Form\Frontend\ResetPassDefaultType;
use CommercialAds\UserBundle\Form\Model\ChangePassword;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class DefaultController extends Controller
{

    public function loginAction()
    {   if(false == $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')){
        $request = $this->getRequest();
        $sesion = $request->getSession();
        
        $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR, $sesion->get(SecurityContext::AUTHENTICATION_ERROR));
       
        return $this->render('CommercialAdsUserBundle:Default:login-box.html.twig', array('last_username' => $sesion->get(SecurityContext::LAST_USERNAME),
                                                                                                 'error' => $error));
        }else return $this->redirect($this->generateUrl('main'));
    }
    
    public function registerAction(){
        
       if(false == $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')){
        $peticion = $this->getRequest();
        
        $user = new User();
        $user->setEnabled(false);
        
        $form = $this->createForm(new UserType(), $user);
        $form->handleRequest($peticion);
        if($form->isValid()){
            $user->setSalt(md5(time()));
            $encoder = $this->get('security.encoder_factory')->getEncoder($user);
            
            $passwordMail = $user->getPassword();
            $passwordEncoded = $encoder->encodePassword($user->getPassword(),
                                                        $user->getSalt());
            $user->setPassword($passwordEncoded);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            
            /*send confirmation mail*/
            
            $message = \Swift_Message::newInstance()
                        ->setSubject('Confirmación de registro.')
                        ->setFrom('noreply@localofertas.com')
                        ->setTo($user->getEmail())
                        ->setBody($this->renderView('CommercialAdsUserBundle:emails:registerEmail.html.twig', array('token' => $user->getSalt(),
                                                                                                                       'user'=>$user->getUser(),
                                                                                                                       'email' => $user->getEmail(),
                                                                                                                       'password' => $passwordMail)), 'text/html');
            $this->get('mailer')->send($message);
            
            
            $this->get('session')->getFlashBag()->add('infoRegis','Para completar registro debe ingresar a su correo y activar su cuenta.');
                    
            return $this->render('CommercialAdsUserBundle:Default:registration-box.html.twig', array('formulario' => $form->createView(), 'error'=>null));
        }
        return $this->render('CommercialAdsUserBundle:Default:registration-box.html.twig', array('formulario' => $form->createView()));
    
        }else return $this->redirect($this->generateUrl('main'));
    }
    
    public function confirmRegistrationAction($token){
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('CommercialAdsUserBundle:User')->findOneBySalt($token);
        
        if($user && $user->getEnabled()== false){
            $user->setEnabled(true);
            $em->persist($user);
            $em->flush();
            
            //loguear a user
            $token = new UsernamePasswordToken($user, null, 'users', $user->getRoles());
            $this->container->get('security.context')->setToken($token);
            
            if($user->getRoles() == array('ROLE_ADVERTISER')){
                $this->get('session')->getFlashBag()->add('infoRegis','Felicitaciones, se ha registrado de manera correcta.');
                return $this->redirect($this->generateUrl('advertiser_register'));
            }else
                return $this->redirect($this->generateUrl('main'));
        //throw $this->createNotFoundException('El user SI existe '.$sesion->get(SecurityContext::LAST_USERNAME));
        }else{
            throw $this->createNotFoundException('Error: este Token ya no es válido o el user no existe.');
        }
    }
    
    public function emailResetPassAction(){
        $email = $this->getRequest()->get('email');
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('CommercialAdsUserBundle:User')->findOneByEmail($email);
        
        if($user){
                $message = \Swift_Message::newInstance()
                            ->setSubject('Reseteo de contraseña.')
                            ->setFrom('noreply@localofertas.com')
                            ->setTo($email)
                            ->setBody($this->renderView('CommercialAdsUserBundle:emails:resetPassword.html.twig', array('token' => $user->getSalt(),'user'=>$user->getUser())), 'text/html');
                $this->get('mailer')->send($message);

                $this->get('session')->getFlashBag()->add('info','Te hemos enviado un correo con instrucciones para resetear tu contraseña.');
            //else{
//                $this->get('session')->getFlashBag()->add('cuenta-inactiva','La cuenta está inactiva, si no recibió correo de activación haga click ');           
//            }
        }else{
            $this->get('session')->getFlashBag()->add('error','DEMO MSJ: El email ingresado no se corresponde con un user registrado.');
        }
        
        return $this->redirect($this->generateUrl('user_login'));
    }
    
    public function resetPasswordAction($token){
        $request = $this->getRequest();
        $user = null;
                
        $em = $this->getDoctrine()->getManager();
        
        if(!$user)
          $user = $em->getRepository('CommercialAdsUserBundle:User')->findOneBySalt($token);
        
        if($user){
        $formulario = $this->createForm(new ResetPasswordType, $user);
        $formulario->handleRequest($request);

        if($request->getMethod() == 'POST'){
            
            $user->setSalt(md5(time()));
            $encoder = $this->get('security.encoder_factory')->getEncoder($user);
            
            $newPassword = $user->getPassword();

            $passwordEncoded = $encoder->encodePassword($user->getPassword(),
                                                        $user->getSalt());
            
            $user->setPassword($passwordEncoded);
            
            $em->persist($user);
            $em->flush();
            return $this->redirect($this->generateUrl('user_login'));
            /*send confirmation mail*/
            $message = \Swift_Message::newInstance()
                        ->setSubject('Confirmación de cambio de contraseña.')
                        ->setFrom('noreply@localofertas.com')
                        ->setTo($user->getEmail())
                        ->setBody($this->renderView('CommercialAdsUserBundle:emails:confirmarPassword.html.twig', array(
                                                                                                                       'user'=>$user->getUsuario(),
                                                                                                                       'email' => $user->getEmail(),
                                                                                                                       'newPassword' => $newPassword)), 'text/html');
            $this->get('mailer')->send($message);
            
            $this->get('session')->getFlashBag()->add('info','Su contraseña se ha modificado exitosamente, recibirá un correo con la confirmación.');

        }
        }else{
          throw $this->createNotFoundException('Los parametros no coinciden, vuelva a reenviar el email de solicitud para resetear contraseña.');            
        }
        
        return $this->render('CommercialAdsUserBundle:Default:reset-password.html.twig', array('formulario'=>$formulario->createView(), 'error' => null, 'token'=>$token, 'action'=>null));
    }
    
    public function resetPassDefaultAction(){
        $request = $this->getRequest();
        $user = $this->getUser();
        $error = null;
        
        $changePassword = new ChangePassword();
        $formulario = $this->createForm(new ResetPassDefaultType, $changePassword);
        
        $formulario->handleRequest($request);
        $oldPassword = $formulario->get('oldPassword');
        if($oldPassword->isValid()){
            if($oldPassword->getData() == $formulario->get('password')->getData())
                $formulario->get('oldPassword')->addError (new \Symfony\Component\Form\FormError('La contraseña nueva es igual a la actual.'));
            else{
                
            $user->setSalt(md5(time()));
//            $encoder = $this->get('security.encoder_factory')->getEncoder($user);
            
//            $passwordEncoded = $encoder->encodePassword($changePassword->getPassword(),
//                                                        $user->getSalt());
            
//            $user->setPassword($passwordEncoded);
//            
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($user);
//            $em->flush();
               if($user->getRoles() == array('ROLE_ADVERTISER')){
                    $this->get('session')->getFlashBag()->add('infoRegis','DEMO MSJ: Su contraseña se ha actualizado correctamente.');
                    return $this->redirect($this->generateUrl('advertiser_panel'));
                }
            }
        }
        return $this->render('CommercialAdsUserBundle:Default:reset-password.html.twig', array('formulario'=>$formulario->createView(),'error' => $error, 'action'=>'insidePass'));
    }
    
    public function registrationConfirmationAction(){
        $email = $this->getRequest()->get('email');
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('CommercialAdsUserBundle:Users')->findOneByEmail($email);
       
        if($user){
            $subjet = 'Confirmación de registro';
            $emailTemplate = 'CommercialAdsUserBundle:emails:confirmRegister.html.twig';
            $to = $email;
            $params = array('token'=>$user->getSalt(),'user'=>$user->getUser(), );
            $isSend = $this->sendEmail($subjet, $to, $emailTemplate, $params);

            if($isSend == true)
                $flashbag = $this->get('session')->getFlashBag();
                $flashbag->clear('cuenta-inactiva');
                $this->get('session')->getFlashBag()->add('infoRegis','DEMO MSJ: Para completar tu registro debes ingresar a tu correo y activar tu cuenta.');
        }else{
            throw $this->createNotFoundException('Error: este Token ya no es válido o el user no existe.');            
        }
        
        return $this->redirect($this->generateUrl('user_login'));
    }    
    
    public function profileAction(){
        
    }
    
    public function loginBoxAction()
    {
        $peticion = $this->getRequest();
        $sesion = $peticion->getSession();
        
        $error = $peticion->attributes->get(SecurityContext::AUTHENTICATION_ERROR, $sesion->get(SecurityContext::AUTHENTICATION_ERROR));
                
        return $this->render('CommercialAdsUserBundle:Default:login.html.twig', array('last_username' => $sesion->get(SecurityContext::LAST_USERNAME),
                                                                                         'error' => $error));
    }
    
    public function securityCheckAction()
    {
        return new \Symfony\Component\HttpFoundation\RedirectResponse($this->generateUrl('advertiser_homepage'));
    }

    public function logoutAction()
    {
        // The security layer will intercept this request
    }
    
    private function sendEmail($subjet, $to, $emailTemplate, $params){
       $message = \Swift_Message::newInstance()
                        ->setSubject($subjet)
                        ->setFrom('noreply@localofertas.com')
                        ->setTo($to)
                        ->setBody($this->renderView($emailTemplate, $params), 'text/html');
       $this->get('mailer')->send($message);
            
       return true;
   }
}