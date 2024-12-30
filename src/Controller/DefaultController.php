<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        return $this->render('about.html.twig', [
            'controller_name' => 'DefaultController',
        ]);

    }

    #[Route('/courses', name: 'courses')]
    public function courses(): Response
    {
        return $this->render('courses.html.twig', [
            'controller_name' => 'DefaultController',
        ]);

    }
    #[Route('/gallery', name: 'gallery')]
    public function gallery(): Response
    {
        $galleryImages = [
            'assets/img/gallery/gallery1.png',
            'assets/img/gallery/gallery2.png',
            'assets/img/gallery/gallery3.png',
        // Add more images as needed
        ];
        return $this->render('gallery.html.twig', [
            'gallery_images' => $galleryImages,
        ]);

    }

    #[Route('/pricing', name: 'pricing')] public function pricing(): Response
    {
        // Example data, replace with your actual logic
        $pricingPlans = [
            ['duration' => '1 Month',
                'price' => '10',
                'details' => 'Basic Plan',
                'features' => ['Access to gym', '1 Personal Training Session', 'Group Classes']
            ],
            [
                'duration' => '6 Months',
                'price' => '50',
                'details' => 'Standard Plan',
                'features' => ['Access to gym', '5 Personal Training Sessions', 'Group Classes', 'Nutrition Plan']
            ],
            [
                'duration' => '12 Months',
                'price' => '90',
                'details' => 'Premium Plan',
                'features' => ['Access to gym', '10 Personal Training Sessions', 'Group Classes', 'Nutrition Plan', 'Massage Therapy']
            ]
        ];

        return $this->render('pricing.html.twig', [
            'pricing_plans' => $pricingPlans,
        ]);
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('contact.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    #[Route('/blog', name: 'blog')]
    public function blog(): Response
    {
        // Example data, replace with your actual logic
        $blogPosts = [
            ['title' => 'First Blog Post', 'content' => 'This is the content of the first blog post.'],
            ['title' => 'Second Blog Post', 'content' => 'This is the content of the second blog post.'],

        ];
        return $this->render('blog.html.twig', [
            'blog_posts' => $blogPosts,
        ]);
    }
    #[Route('/blog_details', name: 'blog_details')]
    public function blog_details(): Response
    {
        return $this->render('blog_details.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    #[Route('/elements', name: 'elements')]
    public function elements(): Response
    {
        return $this->render('elements.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    #[Route('/services', name: 'services')]
    public function services(): Response
    {
        return $this->render('services.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}