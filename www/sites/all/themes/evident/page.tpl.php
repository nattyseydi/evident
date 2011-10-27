<header id="header" role="banner" class="clearfix">
	<?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>
	<div id="navigation">
		<?php if ($page['navigation']): ?>
     		 	<?php print render($page['navigation']); ?>
      		<?php endif; ?>
	</div>

</header>	
	
 <div id="main_wrapper">
	<div id="preface_top">
		<?php if ($page['preface_top']): ?>
     		 	<?php print render($page['preface_top']); ?>    
 	 	<?php endif; ?>
	</div>

	 <?php if($page['preface_one'] || $page['preface_two'] || $page['preface_three'] || $page['preface_four']) : ?>
    <div style="clear:both"></div>
    <div id="preface-wrapper" class="in<?php print (bool) $page['preface_one'] + (bool) $page['preface_two'] + (bool) $page['preface_three'] + (bool) $page['preface_four']  ; ?>">
          <?php if($page['preface_one']) : ?>
          <div class="column A">
            <?php print render ($page['preface_one']); ?>
          </div>
          <?php endif; ?>
          <?php if($page['preface_two']) : ?>
          <div class="column B">
            <?php print render ($page['preface_two']); ?>
          </div>
          <?php endif; ?>
          <?php if($page['preface_three']) : ?>
          <div class="column C">
            <?php print render ($page['preface_three']); ?>
          </div>
          <?php endif; ?>
		  <?php if($page['preface_four']) : ?>
          <div class="column D">
            <?php print render ($page['preface_four']); ?>
          </div>
          <?php endif; ?>
         
      <div style="clear:both"></div>
    </div>
    <?php endif; ?>

	<div id="highlighted">
		<?php if ($page['highlighted']): ?>
      			<?php print render($page['highlighted']); ?>
 		 <?php endif; ?>
	</div>

	<div id="content">
		<?php print render($title_prefix); ?>
    <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>
		<?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
		<?php if ($page['content']): ?>
      			<?php print render($page['content']); ?>    
  		<?php endif; ?>
	</div>

	<div id="sidebar_second">
		<?php if ($page['sidebar_second']): ?>
      			<?php print render($page['sidebar_second']); ?>
 	 	<?php endif; ?>
	</div>	

	<div id="bottom_top">
		<?php if ($page['bottom_top']): ?>
      			<?php print render($page['bottom_top']); ?>
 	 	<?php endif; ?>
	</div>
	
	<div id="bottom_one">
		<?php if ($page['bottom_one']): ?>
    			<?php print render($page['bottom_one']); ?>
    		<?php endif; ?>
	</div>

	<div id="bottom_two">
		<?php if ($page['bottom_two']): ?>
    			<?php print render($page['bottom_two']); ?>
    		<?php endif; ?>
	</div>

	<div id="bottom_three"> 
		<?php if ($page['bottom_three']): ?>
   			<?php print render($page['bottom_three']); ?>
   		<?php endif; ?>
	</div>

	<div id="bottom_four">
		<?php if ($page['bottom_four']): ?>
      			<?php print render($page['bottom_four']); ?>
    		<?php endif; ?>
	</div>

	<div id="footer">
		<?php if ($page['footer']): ?>
    			<?php print render($page['footer']); ?>
    		<?php endif; ?>
	</div>
  </div>
