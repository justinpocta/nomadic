<?php snippet('header') ?>
<link rel="stylesheet" href="/assets/css/slides.css" />
<script src="/assets/js/vendor/jquery.slides.min.js"></script>
<script src="/assets/js/vendor/arrowpager.js"></script>
<body id="secondary">
<section class="content">

<!-- hero slideshow -->
<div class="large-12 small-12 logo-intro">

  <a class="go-home" href="/">&laquo; back to projects</a>
  <div>
<?php if($page->hasPrev()) { ?><a href="<?php echo $page->prev()->url() ?>" class="button-back" style="left:0;" title="Previous"></a>
<?php } else { ?>
<a href="/" class="button-home-left" title="Home"></a>
<?php }; ?>
  <span style="text-transform:capitalize;">
    <?php echo $page->title ?> - <?php echo h($page->projecttype) ?>
  </span>
<?php if($page->hasNext()) { ?><a href="<?php echo $page->next()->url() ?>" class="button-next" style="right:0;" title="Next"></a><?php } else { ?>
  <a href="/" class="button-home-right" title="Home"></a>
<?php }; ?>
</div>

</div>

<!-- objective -->
<div class="small-12 large-12" style="background-color:rgba(1,71,11,1.0); margin:0 auto; display:block; background-image:url('<?php echo $page->images()->find('bg.jpg')->url() ?>'); background-repeat:no-repeat; <?php echo $page->headercss ?>">

     <!--// GALLERY 1 //-->
     <div class="container slidesPrimary" style="<?php echo $page->headerwidth ?>">
      <div id="slides" style="<?php echo $page->headerheight ?>">
  	    <?php foreach($page->images() as $image) { if(!preg_match('^header-^', $image->filename() )) continue; ?>
        <div style="background-image:url('<?php echo $image->url() ?>'); <?php echo $page->headerheight ?>"></div>
<?php } ?>
      </div>
    </div>

  </div>

<!-- end objective -->

  <article>

<!-- content intro -->
<div class="large-12 small-12" style="padding-top:25px;">

  <div class="large-12 small-12"> <!-- MAIN 1 -->
	<div class="row">
	<div id="detail-main" class="column large-8 small-12"><!--// content 1 - left //-->
		<span class="detail-title">Project Information</span>
		<?php echo kirbytext($page->text()) ?>

		<?php if($page->quote()) {?>
			<div class="quotes"><p><?php echo $page->quote() ?></p></div>
		<?php } else {}; ?>

	</div>
	</div>

  <!--// GALLERY 2 //-->
	<div class="container slidesSecondary">
		  <div id="slides2" style="<?php echo $page->slides2 ?>">
		  <?php foreach($page->images() as $image) { if(!preg_match('^gallery2-^', $image->filename() )) continue; ?>
      <div style="background-image:url('<?php echo $image->url() ?>'); <?php echo $page->slidesheight2 ?>"></div>
      <?php } ?>
      </div>
   </div>

   <!--// GALLERY 3 //-->
   <div class="container slidesSecondary">
      <div id="slides3" style="<?php echo $page->slides3 ?>">
          <?php foreach($page->images() as $image) { if(!preg_match('^gallery3-^', $image->filename() )) continue; ?>
          <div style="background-image:url('<?php echo $image->url() ?>'); <?php echo $page->slidesheight3 ?>"></div>
          <?php } ?>
      </div>
  </div>

  <div id="detail-sidebar" class="column large-4 small-12"><!--// content 2 - right : sidebar //-->
    <div style="float:left"><!-- tags -->

  <?php if($page->weblink()) {?>
            <div style="float:left;padding-bottom:15px;"><?php echo kirbytext($page->weblink()) ?></div>
                    <?php } else {}; ?>

      <span class="detail-title">Tags</span>
      <ul class="keywords-list">
	<?
	  $articleTags = str::split($page->tags());
	  $blog = $pages->find('projects');
	?>
	<? foreach($articleTags as $tag): ?>
	  <li><?= $tag ?></li>
	<? endforeach ?>
      </ul>
    </div><!-- end tags -->
    <div style="float:left;margin-top:10px;width:100%;" class="project-credits">
      <span class="detail-title">Details</span>
	<small>Completed <?php echo h($page->created()) ?></small>

	<?php echo kirbytext($page->credits()) ?>

	<?php if($page->applink()) {?>
                <div style="margin-top:15px"><?php echo kirbytext($page->applink()) ?></div>
        <?php } else {}; ?>

    </div>
  </div>

	</div> <!--// end project info div //-->

  </article>

</section>

  <!-- SlidesJS Required: Link to jQuery -->
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <!-- End SlidesJS Required -->

  <!-- SlidesJS Required: Link to jquery.slides.js // not .min.js anymore -->
  <script src="/assets/js/vendor/jquery.slides.js"></script>
  <!-- End SlidesJS Required -->

  <!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
  <script>
var paginationcheck = <?php echo h($page->paginateslide()) ?>;

$(function() {

    $('#slides3').slidesjs({
        width: 940,
        height: 528,
        navigation: {
          effect: "fade"
        },
        pagination: {
          active: true,
          effect: "fade"
        },
        play: {
          active: true,
          auto: false,
          interval: 8500,
          swap: true,
          pauseOnHover: true,
          restartDelay: 2500
        },
        effect: {
          fade: {
            speed: 400
          }
        }

        });


     $('#slides2').slidesjs({
        width: 940,
        height: 528,
        navigation: {
          effect: "fade"
        },
        pagination: {
          active: true,
          effect: "fade"
        },
        play: {
          active: true,
          auto: false,
          interval: 8500,
          swap: true,
          pauseOnHover: true,
          restartDelay: 2500
        },
        effect: {
          fade: {
            speed: 400
          }
        }

        });

      $('#slides').slidesjs({
        width: 940,
        height: 528,
        navigation: {
          effect: "fade"
        },
        pagination: {
          // active: this.write(paginationcheck);
          active: false,
          effect: "fade"
        },
play: {
active: true,
auto: false,
interval: 8500,
swap: true,
pauseOnHover: true,
restartDelay: 2500
         },
        effect: {
          fade: {
            speed: 1
          }
        }
        });
    });
  </script>
  <!-- End SlidesJS Required -->

<?php snippet('footer') ?>
