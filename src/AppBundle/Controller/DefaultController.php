<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entities\Contact;
use Symfony\Component\Form\Extension\Core\Type as Types;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/boutique", name="boutique")
     */
     public function boutiqueAction(Request $request)
     {
         // replace this example code with whatever you need
         return $this->render('boutique/boutique.html.twig',[
           'room1'=> array(1,2,50),
           'room2' => array(2,4,60),
           'room3' => array(3, 6, 80)

         ]);
     }

     /**
     *@Route("/about", name="about")
     */
     public function aboutAction(Request $request)
     {
       return $this->render('about/about.html.twig');
     }


    /**
    * @Route("/contact", name="contact")
    */

    public function contactAction(Request $request){
      $form = new Contact();
      $form->setName('nom');
      $form->setFirstname('prenom');
      $form->setMail('email');
      $form->setText('message');

      $contact = $this->createFormBuilder($form)
                  ->add('Name',Types\TextType::class, array( 'label'=>'nom') )
                  ->add('Firstname',Types\TextType::class, array('label'=>'prenom'))
                  ->add('Mail', Types\EmailType::class, array('label'=>'mail'))
                  ->add('text',Types\TextareaType::class, array('label'=> 'message'))
                  ->add('submit', Types\SubmitType::class, array('label'=> 'envoyer le message'))
                  ->getForm();


      return $this->render('contact/contact.html.twig',
          array('form' =>$contact->createView(),));
    }



}
