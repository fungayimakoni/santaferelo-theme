<?php
/*
Template Name: Archive Old Posts
*/

// Security check
if (!current_user_can('manage_options')) {
    wp_die(__('You do not have sufficient permissions to access this page.'));
}

// Define post types
$post_types = [
    'insights-news',
    'blog',
    'event',
    'white-paper',
    'mobility-survey',
    'survey',
    'mobility-webinar'
];

// Process on form submission
if (isset($_POST['process_posts'])) {
    
    $args = [
        'post_type' => $post_types,
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'date_query' => [
            'before' => '2022-01-01',
            'inclusive' => false
        ]
    ];
    
    $posts = get_posts($args);
    $results = [];
    
    foreach ($posts as $post) {
        // Update post status to draft
        wp_update_post([
            'ID' => $post->ID,
            'post_status' => 'draft'
        ]);
        
        // Store result data
        $results[] = [
            'id' => $post->ID,
            'title' => $post->post_title,
            'date' => $post->post_date,
            'type' => $post->post_type,
            'permalink' => get_the_permalink($post->ID)
        ];
    }
    
    // Save to CSV
    $csv_filename = 'archived_posts_' . date('Y-m-d_H-i-s') . '.csv';
    $csv_filepath = WP_CONTENT_DIR . '/' . $csv_filename;
    
    $fp = fopen($csv_filepath, 'w');
    fputcsv($fp, ['ID', 'Title', 'Date', 'Post Type', 'Permalink']);
    
    foreach ($results as $row) {
        fputcsv($fp, [$row['id'], $row['title'], $row['date'], $row['type'], $row['permalink']]);
    }
    
    fclose($fp);
    
    $csv_url = content_url($csv_filename);
    $processed_count = count($results);
}
?>

<div class="wrap">
    <h1>Archive Old Posts</h1>
    
    <?php if (isset($processed_count)): ?>
        <div class="notice notice-success">
            <p><?php echo $processed_count; ?> posts archived successfully!</p>
            <p><a href="<?php echo $csv_url; ?>" target="_blank">Download CSV Report</a></p>
        </div>
    <?php endif; ?>
    
    <form method="post">
        <p>This will change all published posts from 2021 and earlier to draft status for the following post types:</p>
        <ul>
            <?php foreach ($post_types as $type): ?>
                <li><?php echo esc_html($type); ?></li>
            <?php endforeach; ?>
        </ul>
        <p><strong>Warning:</strong> This action cannot be undone. Please backup your database before proceeding.</p>
        <input type="submit" name="process_posts" value="Process Posts" class="button button-primary" />
    </form>
    
    <?php if (!empty($results)): ?>
        <h2>Archived Posts</h2>
        <table class="widefat">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Post Type</th>
                    <th>Permalink</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $item): ?>
                    <tr>
                        <td><?php echo esc_html($item['id']); ?></td>
                        <td><?php echo esc_html($item['title']); ?></td>
                        <td><?php echo esc_html($item['date']); ?></td>
                        <td><?php echo esc_html($item['type']); ?></td>
                        <td><a href="<?php echo esc_url($item['permalink']); ?>" target="_blank"><?php echo esc_html($item['permalink']); ?></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>