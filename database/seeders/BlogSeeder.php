<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::insert([
            [
                'user_id' => 1,
                'title' => "WordPress Full AMP Compatible Theme Will Be Printed",
                'description' => "I want a simple WP theme to be printed completely AMP compatible. In other words, the AMP version will be opened directly on all devices and all the features and SEO settings of the AMP will be made...",
                'created_at' => now(),
            ],
            [
                'user_id' => 1,
                'title' => "Laravel Full AMP Compatible Theme Will Be Printed",
                'description' => "I want a simple Laravel theme to be printed completely AMP compatible. In other words, the AMP version will be opened directly on all devices and all the features and SEO settings of the AMP will be made...",
                'created_at' => now(),
            ],
            [
                'user_id' => 2,
                'title' => "React Single Page Application for eCommerce",
                'description' => "Developing a lightweight React SPA optimized for eCommerce. The app will be SEO-friendly and feature dynamic routing.",
                'created_at' => now(),
            ],
            [
                'user_id' => 3,
                'title' => "Building a Progressive Web App (PWA) with Vue.js",
                'description' => "A Vue.js-based PWA with offline support and a seamless user experience. Perfect for modern web applications.",
                'created_at' => now(),
            ],
            [
                'user_id' => 1,
                'title' => "Developing a Minimalist Portfolio Website",
                'description' => "A clean, fast, and responsive portfolio website designed to showcase creative work effectively.",
                'created_at' => now(),
            ],
            [
                'user_id' => 2,
                'title' => "Creating a Node.js API for Mobile Apps",
                'description' => "A highly scalable and secure REST API built with Node.js to power modern mobile applications.",
                'created_at' => now(),
            ],
            [
                'user_id' => 2,
                'title' => "Optimizing WordPress for SEO and Speed",
                'description' => "Tweaking a WordPress site to load faster and rank higher in search engines. Includes caching and schema setup.",
                'created_at' => now(),
            ],
            [
                'user_id' => 3,
                'title' => "Custom Shopify Theme Development",
                'description' => "Designing and developing a custom theme for Shopify that is user-friendly and visually appealing.",
                'created_at' => now(),
            ],
            [
                'user_id' => 3,
                'title' => "Building a Blog Platform with Django",
                'description' => "A full-featured blog platform with user authentication, comments, and SEO enhancements built with Django.",
                'created_at' => now(),
            ],
            [
                'user_id' => 2,
                'title' => "Full Stack Social Media App",
                'description' => "Developing a social media application with user profiles, posts, likes, and real-time messaging features.",
                'created_at' => now(),
            ],
            [
                'user_id' => 1,
                'title' => "Creating a Bootstrap-based Landing Page",
                'description' => "A responsive landing page using Bootstrap. Ideal for marketing campaigns and product launches.",
                'created_at' => now(),
            ],
            [
                'user_id' => 3,
                'title' => "Building a Multi-Vendor Marketplace with Magento",
                'description' => "A Magento-based platform for multi-vendor eCommerce. Features include vendor dashboards and product management.",
                'created_at' => now(),
            ]
        ]);
    }
}
