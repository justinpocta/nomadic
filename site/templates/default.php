<?php snippet('header') ?>
<?php
$blog = $pages->find('projects');
$tags = tagcloud($blog);
?>

<div class="main-intro" id="main-intro-header">
  <div class="tk-jubilat"><h2><a href="/" style="color:#FFF;font-weight:lighter;text-decoration:none">Nomadic Schematic</a>, <span style="font-weight:lighter;">the design portfolio of <a class="nowrap" href="projects/about">Justin Pocta</span></a>.</h2></div>
</div>

<div class="main-nav">

<center>
	<div id="nav-list"><div id="nav-list-box">

		<a href="/projects/about" id="nomadic-schematic" class="link-button"><p></p></a>

	 <?php if(param('tag')) {

		 $projects = $pages->find('projects')
                                                        ->children()
                                                        ->visible()
                                                        ->filterBy('tags', param('tags'), ',');
                } else {

                $projects = $pages->find('projects')
                                                        ->children()
                                                        ->visible();

	} ?>

		<?php foreach($projects as $project): ?>

<?php if ($project->projecttype=='app') { ?>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_<?php echo $project->thumb ?><?php echo $project->thumbtype ?>')" title="App: <?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="<?php echo $project->title ?>" data-options="disable-for-touch:true"><p><?php echo html($project->title()) ?></p></a>
<?php } elseif ($project->projecttype=='web') { ?>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_<?php echo $project->thumb ?><?php echo $project->thumbtype ?>')" title="Website: <?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="<?php echo $project->title ?>" data-tooltip="<?php echo $project->title ?>" data-options="disable-for-touch:true"><p><?php echo html($project->title()) ?></p></a>
<?php } elseif ($project->projecttype=='print') { ?>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_<?php echo $project->thumb ?><?php echo $project->thumbtype ?>')" title="Print: <?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="<?php echo $project->title ?>" data-tooltip="<?php echo $project->title ?>" data-options="disable-for-touch:true"><p><?php echo html($project->title()) ?></p></a>
<?php } elseif ($project->projecttype=='brand') { ?>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_villages.png')" title="Brand: The Villages" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="The Villages" data-options="disable-for-touch:true"><p>The Villages</p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_purus.png')" title="Brand: Purus" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="Purus" data-options="disable-for-touch:true"><p>Purus</p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_stash.png')" title="Brand: Stash Furniture" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="Stash Furniture" data-options="disable-for-touch:true"><p>Stash Furniture</p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_hebron.png')" title="Brand: Hebron Station" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="Hebron Station" data-options="disable-for-touch:true"><p>Hebron Station</p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_lakeofstars.png')" title="Brand: Lake of Stars" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="Lake of Stars" data-options="disable-for-touch:true"><p>Lake of Stars</p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_rei.png')" title="Brand: REI" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="REI" data-options="disable-for-touch:true"><p>REI</p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_sandbox.png')" title="Brand: Sandbox" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="Sandbox" data-options="disable-for-touch:true"><p>Sandbox</p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_midtown.png')" title="Brand: Midtown" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="Midtown" data-options="disable-for-touch:true"><p>Midtown</p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_dogpoint.png')" title="Brand: Dog Point" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="Brand: Dog Point" data-options="disable-for-touch:true"><p>Dog Point</p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_cameronbreen.png')" title="Brand: Cameron Breen" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="Cameron Breen" data-options="disable-for-touch:true"><p>Cameron Breen</p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_kroger.png')" title="Brand: Kroger" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="Kroger" data-options="disable-for-touch:true"><p>Kroger</p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_c3.png')" title="Brand: Culture Club" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="Culture Club" data-options="disable-for-touch:true"><p>Culture Club</p></a>
<?php } elseif ($project->projecttype=='illustration') { ?>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_<?php echo $project->thumb ?><?php echo $project->thumbtype ?>')" title="Illustration: <?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="<?php echo $project->title ?>" data-tooltip="<?php echo $project->title ?>" data-options="disable-for-touch:true"><p><?php echo html($project->title()) ?></p></a>
<?php } else { ?>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_<?php echo $project->thumb ?><?php echo $project->thumbtype ?>')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="<?php echo $project->title ?>" data-options="disable-for-touch:true"><p><?php echo html($project->title()) ?></p></a>
  <?php }
endforeach ?>

<!--//
<a href="/apps" style="background-image:url('/assets/img/thumb-Category_button-app_white.png')" title="Apps" class="link-button button-category" data-tooltip="<?php echo $project->title ?>"><p>Apps</p></a>
<a href="/websites" style="background-image:url('/assets/img/thumb-Category_button-web_white.png')" title="Websites" class="link-button button-category" data-tooltip="<?php echo $project->title ?>"><p>Websites</p></a>
<a href="/brand" style="background-image:url('/assets/img/thumb-Category_button-brand_white.png')" title="Brand" class="link-button button-category" data-tooltip="<?php echo $project->title ?>"><p>Brand</p></a>
<a href="/print" style="background-image:url('/assets/img/thumb-Category_button-print_white.png')" title="Print" class="link-button button-category" data-tooltip="<?php echo $project->title ?>"><p>Print</p></a>
<a href="/illustration" style="background-image:url('/assets/img/thumb-Category_button-illustration_white.png')" title="Illustration" class="link-button button-category" data-tooltip="<?php echo $project->title ?>"><p>Illustration</p></a>
//-->
<a href="/projects/about" style="background-image:url('/assets/img/button-info_white.png')" title="About Justin" class="info-cat" id="button-info" data-tooltip="About Justin" data-options="disable-for-touch:true"><p>Info</p></a>

		<!-- End of grid blocks -->
	  </div></div>
	</center>
	</div>
</div>

<?php snippet('footer') ?>
