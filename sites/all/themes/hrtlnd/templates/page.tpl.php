<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36990185-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


<!--
{{{{{{{{{{{{  Heartland Gallery Internet Web Site Designed & Developed by Kenneth M. Piekarsk (http://kmpiekarski.com) in our year of 2013  }}}}}}}}}}}}
-->


<div id="main-container">
	<div id="sidebar-left">
    	<div id="logo"><!--<img src="images/logo.png" />-->
      		<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">Heartland</a>
        </div>
        
		<?php //if ($main_menu): ?>
          <div id="main-nav">
        	<ul>
            	<!--<li><span>Programming</span></li>
            	<li><span>Facilities</span></li>-->
            	<!--<a href="#">-->
            	<li><span style="font-size:12px; padding: 0px;">&#x25BC;</span> <span>Info</span></li>
                <!--</a>-->
            </ul> 
            <?php print theme('links__system_main_menu', array(
              'links' => $main_menu,
              'attributes' => array(
                'id' => 'main-menu-links',
                'class' => array('links', 'clearfix'),
              ),
              'heading' => array(
                'text' => t('Main menu'),
                'level' => 'h2',
                'class' => array('element-invisible'),
              ),
            )); ?>
          </div><!-- /#main-menu -->
        <?php //endif; ?>
            
            
			<?php if ($page['info']): ?>
              <div id="info">
                <?php print render($page['info']); ?>
              </div> <!-- /#info -->
            <?php endif; ?>
        </div> <!-- /#sidebar-left -->
        <div id="content">
            
          <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
          <a id="main-content"></a>
          <?php print render($title_prefix); ?>
          <?php if ($title): ?>
            <h1 class="title" id="page-title">
              <?php //print $title; ?>
            </h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php if ($tabs): ?>
            <div class="tabs">
              <?php print render($tabs); ?>
            </div>
          <?php endif; ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?>
            <ul class="action-links">
              <?php print render($action_links); ?>
            </ul>
          <?php endif; ?>
          	<?php //print_r($node); ?>
          <?php print render($page['content']); ?>
          <?php print $feed_icons; ?>
        
        </div><!--/#content-->
    
</div><!-- /#main-container -->
  <div id="footer">
  
    <?php if ($page['footer']): ?>
      <div id="footer" class="clearfix">
        <?php print render($page['footer']); ?>
      </div> <!-- /#footer -->
    <?php endif; ?>
      
  </div>