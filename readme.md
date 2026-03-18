## Assignment 2: Custom WordPress Theme

### WordPress Theme Structure & Architecture
WordPress Theme Structure & Architecture

A WordPress theme is made up of different PHP files that control how the website looks and works. Each file has a specific job, like showing the header, footer, or posts. The main files I used include style.css, functions.php, header.php, footer.php, index.php, and single.php.

The style.css file contains the theme information and all the styling for the site. The functions.php file is used to set up features like menus, images, and loading styles. The header.php and footer.php files handle the top and bottom parts of every page.

All of these files work together to build the full website. WordPress automatically loads the correct template file depending on what page is being viewed, like a blog post or a regular page.

### The Loop & Template Tags

The Loop is how WordPress displays posts from the database. It checks if there are posts using have_posts(), and if there are, it loops through them one by one. Inside the loop, the_post() sets up the data for each post so it can be displayed.

I used several template tags inside the Loop to show content. For example, the_title() displays the post title, and the_content() shows the full post content. I also used the_excerpt() to show a short preview of posts and the_date() to display when the post was published.

Template tags make it easy to pull information from WordPress without writing complex code. They help keep the theme simple and organized while still showing dynamic content.

---

## Rubric

| Criteria                                       | Pts | Description                                                                                                                                                                                                                                                                                                           |
| ---------------------------------------------- | --- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Repository Link Submission                     | 2   | Submit the public GitHub repository link for this assignment. It should be something like https://github.com/username/sp26-413-homework-2. The repo must contain only your theme folder and readme.md — not a full WordPress installation also include screenshots showing the theme working with post and page live. |
| Document: Theme Structure & Architecture       | 2   | In your readme.md, explain the WordPress theme file structure — what files are required, what each one does, and how they relate to one another. Use any combination of markdown techniques. Should be more than 3 sentences.                                                                                         |
| Document: The Loop & Template Tags             | 2   | In your readme.md, explain how The Loop works and describe at least 3 template tags you used and what they output. Use any combination of markdown techniques. Should be more than 3 sentences.                                                                                                                       |
| Theme Setup & functions.php                    | 4   | The theme must activate in the WordPress admin without errors. functions.php must properly enqueue the stylesheet (no hardcoded <link> tags in header.php), enable theme support for title-tag, post-thumbnails, and custom-logo, and register a navigation menu — all using correct WordPress hooks.                 |
| Template Files: header, footer, index, single  | 6   | All four core template files must be present and functional. header.php and footer.php must call wp_head() and wp_footer() respectively. index.php must implement a complete Loop with title, date, excerpt, and featured image. single.php must display full post content with a proper heading hierarchy.           |
| Additional Template: page.php or archive.php   | 2   | Create one additional template that implements its own Loop appropriate to the page type. Must use semantically correct HTML structure.                                                                                                                                                                               |
| Visual Design — Editorial Research & Execution | 2   | The theme must demonstrate research-informed visual design appropriate for a news publication. Graded on: typographic hierarchy, intentional use of whitespace and color, and a structured layout that goes beyond browser defaults. CSS must be original.                                                            |
