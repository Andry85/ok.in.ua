<?php
/**
 * The template for displaying the footer.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EduPress
 */

$ilovewp_logo = get_template_directory_uri() . '/images/ilovewp-logo-white.png';

?>

	<footer class="site-footer" role="contentinfo">
	
		<?php get_sidebar( 'footer' ); ?>
		
		<div class="wrapper wrapper-copy">

			<div class="meter">
				<!-- I.UA counter --><a href="http://www.i.ua/" target="_blank" onclick="this.href='http://i.ua/r.php?219216';" title="Rated by I.UA">
<script type="text/javascript"><!--
iS='http'+(window.location.protocol=='https:'?'s':'')+
'://r.i.ua/s?u219216&p267&n'+Math.random();
iD=document;if(!iD.cookie)iD.cookie="b=b; path=/";if(iD.cookie)iS+='&c1';
iS+='&d'+(screen.colorDepth?screen.colorDepth:screen.pixelDepth)
+"&w"+screen.width+'&h'+screen.height;
iT=iR=iD.referrer.replace(iP=/^[a-z]*:\/\//,'');iH=window.location.href.replace(iP,'');
((iI=iT.indexOf('/'))!=-1)?(iT=iT.substring(0,iI)):(iI=iT.length);
if(iT!=iH.substring(0,iI))iS+='&f'+escape(iR);
iS+='&r'+escape(iH);
iD.write('<img src="'+iS+'" border="0" width="88" height="15" />');
//--></script></a><!-- End of I.UA counter -->
			</div>
			
			<p class="copy-ilovewp"></p>
		</div><!-- .wrapper .wrapper-copy -->
	
	</footer><!-- .site-footer -->

</div><!-- end #container -->

<?php wp_footer(); ?>

</body>
</html>