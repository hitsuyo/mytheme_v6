<?php



function create_posttype() {

    register_post_type( 'movies',

    // CPT Options

        array(

            'labels' => array(

                'name' => __( 'Movies' ),

                'singular_name' => __( 'Movie' )

            ),

           

            'public' => true,

            'has_archive' => true,

            'rewrite' => array('slug' => 'movies'),

        )

    );

}


function custom_post_type() {

 

    // Set UI labels for Custom Post Type

        $labels = array(

            'name'                => _x( 'Movies', 'Post Type General Name', 'mytheme' ),

            'singular_name'       => _x( 'Movie', 'Post Type Singular Name', 'mytheme' ),

            'menu_name'           => __( 'Movies', 'mytheme' ),

            'parent_item_colon'   => __( 'Parent Movie', 'mytheme' ),

            'all_items'           => __( 'All Movies', 'mytheme' ),

            'view_item'           => __( 'View Movie', 'mytheme' ),

            'add_new_item'        => __( 'Add New Movie', 'twentythirteen' ),

            'add_new'             => __( 'Add New', 'mytheme' ),

            'edit_item'           => __( 'Edit Movie', 'mytheme' ),

            'update_item'         => __( 'Update Movie', 'mytheme' ),

            'search_items'        => __( 'Search Movie', 'mytheme' ),

            'not_found'           => __( 'Not Found', 'mytheme' ),

            'not_found_in_trash'  => __( 'Not found in Trash', 'mytheme' ),

        );

         

    // Set other options for Custom Post Type

         

        $args = array(

            'label'               => __( 'movies',  'mytheme' ),

            'description'         => __( 'Movie news and reviews',  'mytheme' ),

            'labels'              => $labels,

            // Features this CPT supports in Post Editor

            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),

            // You can associate this CPT with a taxonomy or custom taxonomy. 

            /* A hierarchical CPT is like Pages and can have

            * Parent and child items. A non-hierarchical CPT

            * is like Posts.

            */ 

            'hierarchical'        => false,

            'public'              => true,

            'show_ui'             => true,

            'show_in_menu'        => true,

            'show_in_nav_menus'   => true,

            'show_in_admin_bar'   => true,

            'menu_position'       => 5,

            'can_export'          => true,

            'has_archive'         => true,  //important

            'exclude_from_search' => false,

            'publicly_queryable'  => true,

            'capability_type'     => 'page',

        );

         

        // Registering your Custom Post Type

        register_post_type( 'movies', $args );

     

}


function myPost_custom_init() {

    $args = array(

      'public' => true,

      'label'  => 'My_Posts',

      'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),

     'taxonomies'  => array( 'taximailinh' ),

      'has_archive' => true,

      'publicly_queryable' => true,

      'rewrite' => array('slug' => 'myposts'),

      'register_meta_box_cb' => 'theme_slug_custom_meta_box',

    );

    register_post_type( 'my_post', $args );

}

function chinhsach_custom_init() {

    $args = array(

      'public' => true,

      'label'  => 'Chính sách',

      'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),

    //   'taxonomies' => array( 'post_tag','themes_categories'),

      'has_archive' => true,

      'publicly_queryable' => true,

      'rewrite' => array('slug' => 'chinhsachs'),

      'register_meta_box_cb' => 'theme_slug_custom_meta_box',

    );

    register_post_type( 'chinhsach', $args );

}



function shoe_custom_init() {

    $args = array(

      'public' => true,

      'label'  => 'Shoes',

      'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),

      'has_archive' => false,

      'publicly_queryable' => true,

      'rewrite' => array('slug' => 'shoes'),

      'capability_type' => 'post',

      'show_in_menu'       => false // show in admin option sidebar

    );

    register_post_type( 'shoe', $args );

    flush_rewrite_rules();

}





function codex_book_init() {

	$labels = array(

		'name'               => _x( 'Books', 'post type general name', 'your-plugin-textdomain' ),

		'singular_name'      => _x( 'Book', 'post type singular name', 'your-plugin-textdomain' ),

		'menu_name'          => _x( 'Books', 'admin menu', 'your-plugin-textdomain' ),

		'name_admin_bar'     => _x( 'Book', 'add new on admin bar', 'your-plugin-textdomain' ),

		'add_new'            => _x( 'Add New', 'book', 'your-plugin-textdomain' ),

		'add_new_item'       => __( 'Add New Book', 'your-plugin-textdomain' ),

		'new_item'           => __( 'New Book', 'your-plugin-textdomain' ),

		'edit_item'          => __( 'Edit Book', 'your-plugin-textdomain' ),

		'view_item'          => __( 'View Book', 'your-plugin-textdomain' ),

		'all_items'          => __( 'All Books', 'your-plugin-textdomain' ),

		'search_items'       => __( 'Search Books', 'your-plugin-textdomain' ),

		'parent_item_colon'  => __( 'Parent Books:', 'your-plugin-textdomain' ),

		'not_found'          => __( 'No books found.', 'your-plugin-textdomain' ),

		'not_found_in_trash' => __( 'No books found in Trash.', 'your-plugin-textdomain' )

	);



	$args = array(

		'labels'             => $labels,

                'description'        => __( 'Description.', 'your-plugin-textdomain' ),

		'public'             => true,

		'publicly_queryable' => true,

		'show_ui'            => true,

		'show_in_menu'       => true,

		'query_var'          => true,

		'rewrite'            => array( 'slug' => 'book' ),

		'capability_type'    => 'post',

		'has_archive'        => true,

		'hierarchical'       => false,

		'menu_position'       => 5,

		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )

	);



	register_post_type( 'book', $args );

}


// add_action( 'init', 'theme_prefix_cpt_init' );


// function theme_prefix_rewrite_flush() {

//     flush_rewrite_rules();

// }

// add_action( 'after_switch_theme', 'theme_prefix_rewrite_flush' );


//Meta Box

//Ajax
/*------------- Ajax*/
function more_post_ajax(){
    // $offset = $_POST["offset"];
    // $ppp = $_POST["ppp"];
    header("Content-Type: text/html");

	// static $offset;
	// $offset = $offset; // check how many post appeared
	$posts_per_page = $ppp;
	$args = array('post_type' => 'my_post', 'post_status' => 'publish', 'posts_per_page' => wp_count_posts('my_post')->publish, 'offset' => 3 );

	$the_query = new WP_Query( $args );
?>
	<div class="no-container my_post_lastest-more" style="">
		<div class="row">
			<div class="col s12">
	<?php
				// The Loop
				if ( $the_query->have_posts() ) {
					echo '<ul class="list-my_post-more" id="list-my_post-ID-more">';
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						echo '<li class="col s12 m6 l4 item-post-more" style="">';
							echo the_post_thumbnail('thumbnail');

							echo '<div class="title-post-lastest-more"><a style="color: black; font-family: Arial, Helvetica, sans-serif; width: 68%; " href="'.get_the_permalink($post->ID).'">' . get_the_title() . '</a></div>';
						echo '</li>';
                    }
					echo '</ul>';
					// endwhile;
					/* Restore original Post Data */
					wp_reset_postdata();
					
				} else {
					// no posts found
				}
	?>
			</div>
    	</div>

		<style>
			.post-title {height: 100%;}
			.post-title img {width: 100%; height: auto; }

			ul.list-my_post-more li img {width: 70%; height: auto;}

			.item-post-more img{margin-left:16.5%;}
			.item-post-more img:hover {
				opacity: 0.7;
				filter: brightness(40%);
				/* transform: scale(1.1); low speed */
				-webkit-transition: 0.2s; /*For Safari 3.1 to 6.0 */
				transition: 0.2s;
				
				overflow: hidden;
				/* transition: transform 0.35s; */
				/* webkit-transition: -webkit-transform 0.35s; */
			}

			.title-post-lastest-more {margin-left:16.5%;  width: 68%; 
				/* position: absolute;  */
				/* overflow: hidden;  */
				/* white-space: nowrap; */
				/* word-wrap: break-word; */
			}
		</style>
	</div>

<?php
    
	exit;
}

add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax'); 
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');


function add_custom_taxonomies() {
//     $args = array( 
//         'hierarchical' => true,
//         'label' => 'Awesome Taxonomy',
//     );
//     register_taxonomy( 'awesome_taxonomy', array( 'my_post', 'page', 'awesome' ), $args );



    // （カテゴリーのような）階層化したカスタム分類を新たに追加
    $labels = array(
        'name'              => _x( 'Genres', 'taxonomy general name' ),
        'singular_name'     => _x( 'Genre', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Genres' ),
        'all_items'         => __( 'All Genres' ),
        'parent_item'       => __( 'Parent Genre' ),
        'parent_item_colon' => __( 'Parent Genre:' ),
        'edit_item'         => __( 'Edit Genre' ),
        'update_item'       => __( 'Update Genre' ),
        'add_new_item'      => __( 'Add New Genre' ),
        'new_item_name'     => __( 'New Genre Name' ),
        'menu_name'         => __( 'Genre' ),
    );

    $args = array(
        'hierarchical'      => true,
        // 'labels'            => $labels,
        'label'            => 'Taxanomy 1',
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'taxanomy_1' ),
    );

    register_taxonomy( 'taxanomy_1', array( 'my_post' ), $args );

  }

//   ajax filter

add_action('wp_ajax_filter_posts_by_category', 'ajax_filter_posts_by_category');
add_action('wp_ajax_nopriv_filter_posts_by_category', 'ajax_filter_posts_by_category');   
    
function ajax_filter_posts_by_category_demo(){
    

    // $terms = isset($_POST['cat_slug']) && !empty($_POST['cat_slug']) ? $_POST['cat_slug'] : 'all';
    // $paged = $_POST['paged'];
    // $posts = $_POST['posts'];

    $terms = 'taximailinh';
    
    $wp_query = null;
    $wp_query = new WP_Query();
    
    if($terms != 'all'){
      $args = array(
                      'post_type' => 'my_post',
                    //   'showposts'=>$posts,
                    //   'paged'=>$paged,
                      'tax_query' => array(
                          array(
                              'taxonomy' => 'awesome_taxonomy',
                              'field'    => 'slug',
                              'terms'    => $term
                          )
                      ),
                                          'order'=>'asc',
                                          'orderby'=>'title',
                  );
    }
    else{
        $args = array(
                      'post_type' => 'my_post',
                    //   'showposts'=>$posts,
                                //   'paged'=>$paged,
                        'order'=>'asc',
                        'orderby'=>'title',
                    
                  );
    }
    
      
    $wp_query->query($args);
 
    $counter = 1;
    while ($wp_query->have_posts()) : $wp_query->the_post();
      global $post;
     // var_dump($post);
?>   
     <?php echo $post->post_title;  ?>
<?php
 
    endwhile;
}

