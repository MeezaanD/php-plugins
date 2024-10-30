# Bulk Page Creator Template

**Version**: 1.0  
**Author**: Meezaan D  
**Description**: This WordPress plugin allows you to bulk-create multiple pages with custom titles. Simply edit the page titles in the plugin file, zip the folder, and upload it to your WordPress site. This plugin is helpful for users who need to create a set of predefined pages quickly.

## Features
- Bulk-create pages in WordPress with customizable titles.
- Each page is only created once upon activation to prevent duplicates.
- Easily customizable for different page needs.

---

## Getting Started

### Step 1: Download or Clone the Plugin Template
1. Download or clone this repository to your local machine.
2. Open the downloaded folder.

### Step 2: Edit the Plugin to Add Your Page Titles
1. Open the file `bulk-page-creator.php` in a code editor.
2. Locate the following section in the code:
   ```php
   $page_titles = [
       'Sample Page 1', 'Sample Page 2', 'Sample Page 3'
       // Add more page titles here
   ];
