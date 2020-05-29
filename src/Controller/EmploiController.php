<?php

namespace App\Controller;

use App\Entity\Affecter;
use App\Entity\Emploi;
use App\Form\MatiereType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormBuilderInterface;

class EmploiController extends AbstractController
{

    /**
     * @Route("/emploi", name="emploi")
     */
    public function emploi(FormBuilderInterface $builder)
    {
        $emp = $this->getDoctrine()->getRepository(Emploi::class);
        $unemp = $emp->find(1);
        $MAt= $this->getDoctrine()->getRepository(Affecter::class);
        $matList= $MAt->findAll();
        $list=array();
        foreach ($matList as  $value) {
            if($value->getGroupe()->getId()== $unemp->getClasse()->getId())
            {
                array_push($list,$value);
             
            }
 
           
        }
 
         $builder->add('states', MatiereType::class, [
           $list
         ]);
        
        
         return $this->render('emploi/index.html.twig', [
             'controller_name' => 'EmploiController','emploi'=>$unemp,'states'=>$builder
         ]);
    }

    /**
     * @Route("/creer/{x}", name="creer")
     */

    public function creer (FormBuilderInterface $builder, $x,Request $req)
    {
        $emp = $this->getDoctrine()->getRepository(Emploi::class);
        $unemp = $emp->find(1);
        $MAt= $this->getDoctrine()->getRepository(Affecter::class);
       $matList= $MAt->findAll();
       $list=array();
       foreach ($matList as  $value) {
           if($value->getGroupe()->getId()== $unemp->getGroupe()->getId())
           {
               array_push($list,$value);
            
           }

          
       }

        $builder->add('states', MatiereType::class, [
          $list
        ]);
       
       
        return $this->render('emploi/index.html.twig', [
            'controller_name' => 'EmploiController','emploi'=>$unemp,'states'=>$builder
        ]);
    }
}
