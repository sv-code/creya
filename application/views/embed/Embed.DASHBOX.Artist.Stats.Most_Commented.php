<div class="dashBox newMembers"> 
	
	<h3>MOST COMMENTED</h3> 
	
	<div style="display:block;">
	
		<? foreach($artist_most_commented_photos as $photo): ?>
			<a class="thumb dashThumb" href="/photo/<?=$photo['PHOTO_ID']?>"><img src="<?=cgraphics_image_photo_url(PHOTO_THUMBNAIL,$photo['PHOTO_ID']);?>" alt="" /></a>
		<? endforeach ?>
	 
	</div>
	
</div> 