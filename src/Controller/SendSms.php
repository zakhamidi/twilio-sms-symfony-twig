<?php

namespace App\Controller;

use App\Entity\Sms;
use App\Repository\SmsRepository;
use Symfony\Component\Mime\Email;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use \Twilio\Rest\Client;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class SendSms extends AbstractController
{
    private $twilio;

    public function __construct(Client $twilio) {
        $this->twilio = $twilio;
    }
    //get all fields or sms by id

    /**
     * send sms with twilio
     * 
     * @Route("/sms/send/twilio", name="send_sms_twilio")
     */
    
    public function sendTwilioSms(Request $request,SerializerInterface $serializer, EntityManagerInterface $em){

        $form=$this->createFormBuilder()
        ->add('number', TextType::class,[ 
            'attr'=>
            [ 'placeholder' =>"+49000000000" ]])
        ->add('text', TextareaType::class,[ 
            'attr'=>
            [ 'placeholder' =>"your text" ]])
        ->add('send', SubmitType::class, ['label' => 'Send SMS'])
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
        // get the number and the text from post request
            $number=$request->get('form')['number'];
            $text=$request->get('form')['text'];
            // dump($username);
            $sender = '+18479062089';
            $pattern = "/^(\+|00)?[0-9]{10,}$/";
            if(preg_match($pattern,$number)){
                $message = $this->twilio->messages->create(
                    $number, // Send text to this number
                    array(
                        'from' => $sender,
                        //'body' => 'Hello from Awesome Massages. A reminder that your massage appointment is for today at ' . $appoint->getDate()->format('H:i') . '. Call ' . $sender . ' for any questions.'
                        'body' => $text
                        )
                );
                $content = 'your sms was sent succesfuly with id : '.$message->sid;
            }
            else{
                $content= 'wrong number';
            }
            
            return $this->render('answer.html.twig',[
                'content'=> $content,
            ]);
        }
        return $this->render('sms.html.twig',[
        'form'=>$form->createView(),
        ]);        
        
     }
}