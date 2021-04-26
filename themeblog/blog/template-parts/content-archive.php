<div class="row">
    <div class="col mb-5">
            <div class="card" style="width: 350px;">
                <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h5>
                  <p class="card-text"><?php the_excerpt(); ?></p>
                  <p class="post__meta">
                Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
                par <?php the_author(); ?> • <?php comments_number(); ?>
            </p>

                  <a href="<?php the_permalink(); ?>" class="btn btn-primary"> lire la suite</a>
                </div>
          </div>
    </div>


</div>