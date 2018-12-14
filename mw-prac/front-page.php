<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Front Page Main Image -->
 <div class="top-image-container">
     <img class="main-image" src="<?php echo get_template_directory_uri(); ?>/images/musicStudioBG.jpg">
 </div>
   <div class="MainPageContent">
    <div class="div2">
      <img class="promo2" src="<?php echo get_template_directory_uri(); ?>/images/promo2.png" alt="">
    </div>
    <div class="div3">
      <img class="promo3" src="<?php echo get_template_directory_uri(); ?>/images/promo6.jpg" alt="">
    </div>
    <div class="div4">
      <img class="promo4" src="<?php echo get_template_directory_uri(); ?>/images/specials.jpg" alt="">
    </div>
    <div class="div5">
      <img class="promo5" src="<?php echo get_template_directory_uri(); ?>/images/free-spec.jpg" alt="">
    </div>
    <div class="div6">
      <img class="promo6" src="<?php echo get_template_directory_uri(); ?>/images/casio-special.jpg" alt="">
    </div>
  </div>

<!-- Email Form Section -->
 <form class="emailForm">
  <div class="form-group">
    <h1><label class="updateLabel">Join Our Mailing List</label></h1>
    </br>
    <div class="inputAndBtn">
      <span><button type="submit" class="btn btn-success">Submit</button>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="example@gmail.com"></span>
    </div>
  </div>
</form>


<?php endwhile;  endif;?>

<?php get_footer(); ?>
