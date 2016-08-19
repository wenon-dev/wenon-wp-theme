</div>
	<div class="container" id="footer">
		<div class="container-fluid">
			<p class="footer-title">© 未浓电子杂志</p>
			<div class="footer-infos">
				<p>2015-2016 塘沽一中学生会.信息部</p>
				<p>TGYZ.ITD <span class="glyphicon glyphicon-time" aria-hidden="true" onclick="location.href='easter_egg.html'"></span> Renew</p>
				<p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> tgyzwn@163.com</p>
			</div>
			<div class="footer-contact">
				<a href="aboutus.html" target="_blank">关于我们 </a>
				<a href="contribution.html" target="_blank">征稿启事</a>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>
	</div>
</body>
	<script src="http://cdn.bootcss.com/jQuery.mmenu/5.6.1/js/jquery.mmenu.all.min.js"></script>
	<script>
		$(document).ready(function() { 
			var existAdminBar = document.getElementById("wpadminbar");
			if(existAdminBar) {
				if (document.getElementById("nav")) {
					document.getElementById("nav").className = "navbar-alpha2";
				} else { 
					if (window.screen.width >= 768){ document.getElementById("top").style = "top:32px;"; }
					else {}
				}
			}
		}); 
	</script>
</html>
