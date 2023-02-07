<?php

//1author widget 
class Footer_contact_Widget extends WP_Widget {
	public function __construct() {
		parent::__construct(
			'Footer_contact_Widget',  // Base ID
			__('Footer contact widget','startup')   // Name
		);
		add_action( 'widgets_init', function() {
			register_widget( 'Footer_contact_Widget' );
		});
	}

	public $args = array(
		
		'before_widget' => '<div class="widget-wrap">',
		'after_widget'  => '</div></div>',
	);

	public function widget( $args, $instance ) {
		//get the ACF field
		$widget_id= 'widget_' .$args['widget_id'];
        $con_addres=get_field('con_addres', $widget_id);
        $email_adress=get_field('email_adress', $widget_id);
        $phone_number=get_field('phone_number', $widget_id);
        $footer_socials=get_field('footer_socials', $widget_id);
        

		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		
        ?>
        
        <div class="d-flex mb-2">
            <i class="fas fa-home text-primary me-2 mt-1"></i>
            <p class="mb-0"><?php echo $con_addres;?></p>
        </div>
        <div class="d-flex mb-2">
            <i class="far fa-envelope text-primary me-2 mt-1"></i>
            <p class="mb-0"><?php echo $email_adress;?></p>
        </div>
        <div class="d-flex mb-2">
            <i class="fas fa-phone-alt text-primary me-2 mt-1"></i>
            <p class="mb-0"><?php echo $phone_number;?></p>
        </div>
        <div class="d-flex mt-4">
            <?php 
           foreach( $footer_socials as  $footer){
            ?>
            <a class="btn btn-primary btn-square me-2" href="<?php echo $footer['link'];?>"><i class="<?php echo $footer['icons'];?> fw-normal"></i></a>
            <?php
           }
            ?>
           
        </div>
        <?php

		echo $args['after_widget'];
	}

	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'startup' );
		
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'startup' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance          = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		
		return $instance;
	}
}
$contact_widget = new Footer_contact_Widget();




/// search ooptions or form

class Search_contact_Widget extends WP_Widget {
	public function __construct() {
		parent::__construct(
			'Search_contact_Widget',  // Base ID
			__('search for post widget','startup')   // Name
		);
		add_action( 'widgets_init', function() {
			register_widget( 'Search_contact_Widget' );
		});
	}

	public $args = array(
		
		'before_widget' => '<div class="widget-wrap">',
		'after_widget'  => '</div></div>',
	);

	public function widget( $args, $instance ) {
		//get the ACF field
		$widget_id= 'widget_' .$args['widget_id'];
        
        

		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		
        ?>
        
			<div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
				<form action="<?php echo esc_url( home_url('/') ); ?>" method="GET" >
					<div class="input-group">
						<input type="search" class="form-control p-3" value="<?php echo get_search_query() ?>" name="s" placeholder="Keyword">
						<button type="submit" class="btn btn-primary px-4"><i class="fa fa-search"></i></button>
					</div>
				</form>
			</div>
           
        <?php

		echo $args['after_widget'];
	}

	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'startup' );
		
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'startup' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance          = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		
		return $instance;
	}
}
$search_widget = new Search_contact_Widget();




// category widget settings
 
class Category_Widget extends WP_Widget {
	public function __construct() {
		parent::__construct(
			'Category_Widget',  // Base ID
			__('Category widget','startup')   // Name
		);
		add_action( 'widgets_init', function() {
			register_widget( 'Category_Widget' );
		});
	}

	public $args = array(
		
		'before_widget' => '<div class="widget-wrap">',
		'after_widget'  => '</div></div>',
	);

	public function widget( $args, $instance ) {
		//get the ACF field
		$widget_id= 'widget_' .$args['widget_id'];
        
        

		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		
        ?>
        
			<div class="link-animated d-flex flex-column justify-content-start">
					<?php 
					$cates=get_categories();
					foreach($cates as $cat){
						?>
						<a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="<?php echo get_category_link($cat->term_id);?>"><i class="fa fa-arrow-right me-2"></i> <?php echo $cat->name;?></a>
						<?php

					}
					
					?>

			</div>
		
        <?php

		echo $args['after_widget'];
	}

	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'startup' );
		
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'startup' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance          = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		
		return $instance;
	}
}
$cate_widget = new Category_Widget();




// recent post  settings
 
class Recent_Category_Widget extends WP_Widget {
	public function __construct() {
		parent::__construct(
			'Recent_Category_Widget',  // Base ID
			__('Recent Post widget','startup')   // Name
		);
		add_action( 'widgets_init', function() {
			register_widget( 'Recent_Category_Widget' );
		});
	}

	public $args = array(
		
		'before_widget' => '<div class="widget-wrap">',
		'after_widget'  => '</div></div>',
	);

	public function widget( $args, $instance ) {
		//get the ACF field
		$widget_id= 'widget_' .$args['widget_id'];
        
        

		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		
        ?>
        
		<div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
			<?php 
			$arg=array(
				'post_type' => 'post',
				"posts_per_page"=>5
			);
			$query= new Wp_Query($arg);
			while($query->have_posts()){
				$query->the_post();
				?>
				<div class="d-flex rounded overflow-hidden mb-3">
				<img class="img-fluid" src="<?php the_post_thumbnail_url();?>" style="width: 100px; height: 100px; object-fit: cover;" alt="">
				<a href="<?php the_permalink();?>" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0"><?php the_title();?>
				</a>
			</div>
				<?php
			}
			?>
               
		</div>
		
        <?php

		echo $args['after_widget'];
	}

	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'startup' );
		
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'startup' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance          = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		
		return $instance;
	}
}
$recent_widget = new Recent_Category_Widget();



//tage  settings
 
class Tags_Widget extends WP_Widget {
	public function __construct() {
		parent::__construct(
			'Tags_Widget',  // Base ID
			__('Tags widget','startup')   // Name
		);
		add_action( 'widgets_init', function() {
			register_widget( 'Tags_Widget' );
		});
	}

	public $args = array(
		
		'before_widget' => '<div class="widget-wrap">',
		'after_widget'  => '</div></div>',
	);

	public function widget( $args, $instance ) {
		//get the ACF field
		$widget_id= 'widget_' .$args['widget_id'];
        
        

		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		
        ?>
        
		<div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
			
			<div class="d-flex flex-wrap m-n1">
			<?php 
			$tags = get_tags();
			foreach($tags as $tag){
				?>
				<a href="<?php echo get_tag_link( $tag->term_id );?>" class="btn btn-light m-1"><?php echo $tag->name;?></a>
				<?php
			}
			
			?>
				
			</div>
		</div>
		
        <?php

		echo $args['after_widget'];
	}

	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'startup' );
		
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'startup' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance          = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		
		return $instance;
	}
}
$tags_widget = new Tags_Widget();



//palen text
 
class Plain_Widget extends WP_Widget {
	public function __construct() {
		parent::__construct(
			'Plain_Widget',  // Base ID
			__('plane text','startup')   // Name
		);
		add_action( 'widgets_init', function() {
			register_widget( 'Plain_Widget' );
		});
	}

	public $args = array(
		
		'before_widget' => '<div class="widget-wrap">',
		'after_widget'  => '</div></div>',
	);

	public function widget( $args, $instance ) {
		//get the ACF field
		$widget_id= 'widget_' .$args['widget_id'];
		$plain_text= get_field('plain_text',$widget_id);
		$btn_link= get_field('btn_link',$widget_id);
        
        

		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		
        ?>
        
		<div class="wow slideInUp" data-wow-delay="0.1s">
		
		<div class="bg-light text-center" style="padding: 30px;">
			<p><?php echo $plain_text;?></p>
			<a href="<?php echo $btn_link;?>" class="btn btn-primary py-2 px-4">Read More</a>
		</div>
	</div>
		
        <?php

		echo $args['after_widget'];
	}

	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'startup' );
		
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'startup' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance          = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		
		return $instance;
	}
}
$plane_widget = new Plain_Widget();




// header social widget
class header_social_Widget extends WP_Widget {
	public function __construct() {
		parent::__construct(
			'header_social_Widget',  // Base ID
			__('Header social media','startup')   // Name
		);
		add_action( 'widgets_init', function() {
			register_widget( 'header_social_Widget' );
		});
	}

	public $args = array(
		
		'before_widget' => '<div class="widget-wrap">',
		'after_widget'  => '</div></div>',
	);

	public function widget( $args, $instance ) {
		//get the ACF field
		$widget_id= 'widget_' .$args['widget_id'];
		$social_medias= get_field('social_media',$widget_id);
		
        
        

		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		
        ?>
        
		<div class="d-inline-flex align-items-center" style="height: 45px;">
			<?php 
			foreach($social_medias as $media){
				?>
				<a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="<?php echo $media['icon_link'];?>"><i class="<?php echo $media['icons'];?> fw-normal"></i></a>
				<?php
			}
			?>
        </div>
		
        <?php

		echo $args['after_widget'];
	}

	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'startup' );
		
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'startup' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance          = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		
		return $instance;
	}
}
$header_so_widget = new header_social_Widget();