<?php  
/*
Template Name: Producto 3 columnas
*/
 ?>
 <?php get_header(); ?>


<?php if( have_rows('head') ): ?>
<?php while( have_rows('head') ): the_row();
$img = get_sub_field('img');
?>
  <section class="headerIn" style=" background: url('<?php echo $img; ?>') center;">
  <?php if( have_rows('headTitle') ): ?>
  <?php while( have_rows('headTitle') ): the_row();
  $language = '_eng';
  $title = get_sub_field('title'.$language);
  ?>
    <h1 class="wow fadeInDown"><?php echo $title; ?></h1>
  <?php endwhile; else: ?>
  <?php endif; ?> 

  <?php if( have_rows('headSubTitle') ): ?>
  <?php while( have_rows('headSubTitle') ): the_row();
  $language = '_eng';
  $subtitle = get_sub_field('subtitle'.$language);
  ?>
  <h2 class="wow fadeInDown"><?php echo $subtitle; ?></h2>
  <?php endwhile; else: ?>
   <?php endif; ?>
  </section> 
<?php endwhile; else: ?>
<?php endif; ?>

<section class="description wow fadeInDown">
  <?php if( have_rows('description') ): ?>
  <?php while( have_rows('description') ): the_row();
  ?>
    <article>
     <?php if( have_rows('descript') ): ?>
      <?php while( have_rows('descript') ): the_row();
      ?>
           <?php if( have_rows('titles') ): ?>
            <?php while( have_rows('titles') ): the_row();
            $language = '_eng';
            $title = get_sub_field('title'.$language);
            ?>
          <h3><?php echo $title; ?></h3>
          <?php endwhile; else: ?>
          <?php endif; ?>

          <?php if( have_rows('content') ): ?>
            <?php while( have_rows('content') ): the_row();
            $language = '';
            $text = get_sub_field('text'.$language);
            ?>
              <aside class="large"><?php echo $text; ?></aside>
           <?php endwhile; else: ?>
          <?php endif; ?> 
      </article>
    <?php endwhile; else: ?>
    <?php endif; ?>
    <article>
      <h3>VENTAJAS</h3>
      <ul>
        <li>Lorem ipsum <strong>dolor sit amet, consectetuer</strong> adipiscing elit adipiscing elit. 
        </li>
          <li>Lorem ipsum <strong>dolor sit amet, consectetuer</strong> adipiscing elit adipiscing elit. 
        </li>


      </ul>
      <ul>
           <li>Lorem ipsum <strong>dolor sit amet, consectetuer</strong> adipiscing elit adipiscing elit. 
        </li>
          <li>Lorem ipsum <strong>dolor sit amet, consectetuer</strong> adipiscing elit adipiscing elit. 
      </li>
   
      </ul>
    </article>
 <?php endwhile; else: ?>
<?php endif; ?>   
</section>




<section class="product3columns">
   <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s6 waves-light waves-effect" data-filter="1"><a class="active" href="#test1">MS</a></li>
        <li class="tab  col s6 waves-light waves-effect" data-filter="2"><a  href="#test2">CHOI II</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12 contentProduct">
      <div class="container">
        <div class="row">
            <div class="cd-tab-filter">
              <ul class="cd-filters ">
                <li class="placeholder"> 
                  <a data-type="all" href="#0">TODOS</a>
                </li> 
                <li class="filteractive simplefilter-1" data-filter="all"><a class="selected" href="#0" data-type="all">TODOS</a></li>
                <li class="filter" data-filter="1"><a href="#0" data-type="color-1">CABINAS</a></li>
                <li class="filter" data-filter="2"><a href="#0" data-type="color-2">PLAFONES</a></li>
                <li class="filter" data-filter="3"><a href="#0" data-type="color-3">BOTONERAS</a></li>
                <li class="filter" data-filter="3"><a href="#0" data-type="color-3">PUERTAS</a></li>
                <li class="filter" data-filter="3"><a href="#0" data-type="color-3">PISOS</a></li>
                <li class="filter" data-filter="3"><a href="#0" data-type="color-3">PASAMANOS</a></li>
              </ul> 
            </div>
        </div>
  
        <div class="row contentProduct3columns">
            <div class="filtr-container filtr-container-1 row">
                <div class=" filtr-item" data-category="1, 5" data-sort="Busy streets">
                    <img class="img-responsive" src="<?php bloginfo('template_url')?>/assets/images/producto.jpg" alt="sample image">
                     <span>K008 car<strong>| MS</strong></span>
  
                </div>
                <div class=" filtr-item" data-category="2, 5" data-sort="Luminous night">
                  
                    <img class="img-responsive" src="<?php bloginfo('template_url')?>/assets/images/producto.jpg"  alt="sample image">
                   <span>K008 car<strong>| MS</strong></span>
    
                </div>
                <div class="filtr-item" data-category="1, 4" data-sort="City wonders">
                    <img class="img-responsive" src="<?php bloginfo('template_url')?>/assets/images/producto.jpg"  alt="sample image">
                 <span>K008 car<strong>| MS</strong></span>
                  
  
                </div>
                <div class="filtr-item" data-category="3" data-sort="In production">
                    <img class="img-responsive" src="<?php bloginfo('template_url')?>/assets/images/producto.jpg"  alt="sample image">
                 <span>K008 car<strong>| MS</strong></span>
                  
  
                </div>
                <div class="filtr-item" data-category="3, 4" data-sort="Industrial site">
                  
                    <img class="img-responsive" src="<?php bloginfo('template_url')?>/assets/images/producto.jpg"  alt="sample image">
                 <span>K008 car<strong>| MS</strong></span>
    
                </div>
                <div class="filtr-item" data-category="2, 4" data-sort="Peaceful lake">
                    <img class="img-responsive" src="<?php bloginfo('template_url')?>/assets/images/producto.jpg"  alt="sample image">
                 <span>K008 car<strong>| MS</strong></span>
                  
  
                </div>
            </div>
        </div>
    </div>
          <div class="btns">
            <button>   <i class="flaticon-symbol"></i>FICHA TÉCNICA</button><button>
            <i class="flaticon-mail"></i>CONTÁCTANOS</button>
          </div>  
    </div>
    <div id="test2" class="col s12">
      <div class="container">
        <!-- Filter Controls - Simple Mode -->
        <div class="row">
            <div class="cd-tab-filter">
              <ul class="cd-filters ">
                <li class="placeholder"> 
                  <a data-type="all" href="#0">TODOS</a>
                </li> 
                <li class="filteractive simplefilter-2" data-filter="all"><a class="selected" href="#0" data-type="all">TODOS</a></li>
                <li class="filter" data-filter="1"><a href="#0" data-type="color-1">CABINAS</a></li>
                <li class="filter" data-filter="2"><a href="#0" data-type="color-2">PLAFONES</a></li>
                <li class="filter" data-filter="3"><a href="#0" data-type="color-3">BOTONERAS</a></li>
                <li class="filter" data-filter="3"><a href="#0" data-type="color-3">PUERTAS</a></li>
                <li class="filter" data-filter="3"><a href="#0" data-type="color-3">PISOS</a></li>
                <li class="filter" data-filter="3"><a href="#0" data-type="color-3">PASAMANOS</a></li>
              </ul> 
            </div>
        </div>
        <div class="row contentProduct3columns">
            <div class="filtr-container filtr-container-2 row">
                <div class=" filtr-item" data-category="1, 5" data-sort="Busy streets">
                    <img class="img-responsive" src="<?php bloginfo('template_url')?>/assets/images/producto.jpg" alt="sample image">
                     <span>K008 car<strong>| MS</strong></span>
  
                </div>
                <div class=" filtr-item" data-category="2, 5" data-sort="Luminous night">
                  
                    <img class="img-responsive" src="<?php bloginfo('template_url')?>/assets/images/producto.jpg"  alt="sample image">
                   <span>K008 car<strong>| MS</strong></span>
    
                </div>
                <div class="filtr-item" data-category="1, 4" data-sort="City wonders">
                    <img class="img-responsive" src="<?php bloginfo('template_url')?>/assets/images/producto.jpg"  alt="sample image">
                 <span>K008 car<strong>| MS</strong></span>
                  
  
                </div>
                <div class="filtr-item" data-category="3" data-sort="In production">
                    <img class="img-responsive" src="<?php bloginfo('template_url')?>/assets/images/producto.jpg"  alt="sample image">
                 <span>K008 car<strong>| MS</strong></span>
                  
  
                </div>
                <div class="filtr-item" data-category="3, 4" data-sort="Industrial site">
                  
                    <img class="img-responsive" src="<?php bloginfo('template_url')?>/assets/images/producto.jpg"  alt="sample image">
                 <span>K008 car<strong>| MS</strong></span>
    
                </div>
                <div class="filtr-item" data-category="2, 4" data-sort="Peaceful lake">
                    <img class="img-responsive" src="<?php bloginfo('template_url')?>/assets/images/producto.jpg"  alt="sample image">
                 <span>K008 car<strong>| MS</strong></span>
                  
  
                </div>
            </div>
        </div>
    </div>
    </div>
  </div>        
</section>
<?php get_footer(); ?>