<?php get_header(); ?>



<!-- Team Members Section -->
<section class="team-section py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Our Team</h2>

        <?php
        // Custom query for team members
        $team_query = new WP_Query(array(
            'post_type' => 'team_information',
            'posts_per_page' => -1, 
            'post_status' => 'publish',
            'orderby' => 'menu_order',
            'order' => 'ASC'
        ));
        
        if ($team_query->have_posts()) : ?>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <?php while ($team_query->have_posts()) : $team_query->the_post(); ?>
            <div
                class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 flex">
                <?php if (has_post_thumbnail()) : ?>
                <div class="h-64 overflow-hidden">
                    <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover')); ?>
                </div>
                <?php endif; ?>

                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800"><?php the_title(); ?></h3>
                    <p>Email: <?php the_field('email'); ?></p>
                    <p>Phone: <?php the_field('emency_number'); ?></p>
                    <p>Address: <?php the_field('child_name'); ?></p>
                    <p>Address: <?php the_field('child_age'); ?></p>

                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php else : ?>
        <div class="text-center py-12">
            <p class="text-gray-600 text-lg mb-4">No team members found yet.</p>
            <p class="text-gray-500">Add some team members in the WordPress admin!</p>
        </div>
        <?php endif; 
        
        // Reset post data
        wp_reset_postdata();
        ?>
    </div>
</section>

<?php get_footer(); ?>