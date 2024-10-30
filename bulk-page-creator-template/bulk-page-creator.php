<?php
/*
 * Plugin Name: Bulk Page Creator Template
 * Description: A reusable plugin to create multiple pages in bulk with custom titles. Edit the $page_titles array to specify your pages.
 * Version: 1.0
 * Author: MeezaanD
 */

// Function to create pages in bulk
function create_bulk_pages() {
    // Edit this array with the titles of the pages you want to create
    $page_titles = [
        'Sample Page 1', 'Sample Page 2', 'Sample Page 3'
        // Add more page titles here
    ];

    foreach ($page_titles as $title) {
        // Check if the page already exists to avoid duplicates
        if (!get_page_by_title($title)) {
            // Create the page
            wp_insert_post([
                'post_title'   => $title,
                'post_content' => 'This is placeholder content for ' . $title,
                'post_status'  => 'publish',
                'post_type'    => 'page',
            ]);
        }
    }
}

// Hook to run the function once when the plugin is activated
function bulk_page_creator_activation() {
    create_bulk_pages();
}
register_activation_hook(__FILE__, 'bulk_page_creator_activation');
