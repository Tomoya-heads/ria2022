<?php $pageName="page-404";?>
<socket_addrinfo_connect class="<?php echo $pageName;?>">
	<div class="<?php echo $pageName;?>__inner">
		<h2 class="<?php echo $pageName;?>__en">404 PAGE NOT FOUND</h2>
		<h3 class="<?php echo $pageName;?>__ja">お探しのページが<br class="sp-only">見つかりませんでした。</h3>
		<figure class="<?php echo $pageName;?>__logo"><img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/common/logo_ria.svg" alt="404"></figure>
		<p class="<?php echo $pageName;?>__txt">ご入力されたURLが間違っているか、ページが削除された可能性があります。<br>
		URLをご確認のうえブラウザの再読み込みボタンを押してもこのページが表示される場合は、<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">トップページ</a>よりページをお探しください。</p>
	</div>
</socket_addrinfo_connect>