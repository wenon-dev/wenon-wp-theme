<?php
	add_theme_support( "post-thumbnails" );  // 开启文章缩略图
	function wenon_get_archive_category() {
		$category = get_the_category();   //默认获取当前分类ID
		echo $category[0]->cat_name;    //使用$categories->cat_name不能获得正确值,应该$categories[0]->cat_name才能正确工作。
	}
	function wenon_category_title( $before = '', $after = '' ) { //过滤分类目录前缀
		$raw_title = get_the_archive_title();
		$title = str_replace( "分类：" , "" , $raw_title );
		echo $before.$title.$after;
	}
	function wenon_archive_description( $type = '',$before = '', $after = '' ) {
		$raw_description = get_the_archive_description();//获取分类描述
		if ( $raw_description ) {
			$des_array = explode( '|' , $raw_description );
			$description = array_shift( $des_array );
			if ( $type == 'description') {
				echo $before . $description . $after;
			} elseif ( $type == 'info' ) {
				foreach( $des_array as $info_array) {
					$info_array = str_replace( '#!' , '<span class="label label-info">' , $info_array );
					$info_array = str_replace( '!#' , '</span>' , $info_array );
					echo $before . $info_array . $after;
				} 
			}
		}
	}
	function wenon_category_image() {
		$image_url = z_taxonomy_image_url($cat->term_id);
		$none_image_url = "http://testing.wenon.org/wp-content/uploads/2016/08/default_cat_cover.png";
		if ( $image_url != "" ) {
			echo $image_url;
		} else {
			echo $none_image_url;
		}
	}
?>