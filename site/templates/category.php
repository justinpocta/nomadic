<?php snippet('header') ?>

<?php

$blog = $pages->find('projects');
$tags = tagcloud($blog);

?>
<!-- <div id="container"> -->

<div class="main-intro" id="main-intro-header">
  <div><h2>CAT : Nomadic Schematic, <span style="font-family:Baskerville;font-weight:lighter;font-style:italic;">the design portfolio of <a class="nowrap" href="about.html">Justin Pocta</span></a>.</h2></div>
</div>

<div class="main-nav">
  <a href="" name="start" style="position:absolute;top:0px;"></a>
  
<center>
	<div id="nav-list"><div id="nav-list-box">

		<a href="#bottom" id="nomadic-schematic" class="link-button"><p></p></a>


 <ol id="filters">
 <li data-filter="Web">Web</li>
</ol>

<?php $projects = $pages->find('projects') ?> 
 <?php // $projects = $pages->findBy('projecttype', 'Web') ?>
 <?php foreach($projects as $project): ?> 
 <a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_<?php echo $project->thumb ?><?php echo $project->thumbtype ?>')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>">
<p><?php echo html($project->title()) ?></p>
</a>
                 <?php endforeach ?>

		<!-- End of grid blocks -->
	  </div></div>
	</center>  
	</div>
</div>

<?php snippet('footer') ?>