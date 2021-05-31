
<p class="h4 text-center"><?= @$info->room_name; ?></p>

<?php if(!empty($info->images_paths)): ?>
<?php  $roomImages = json_decode($info->images_paths,true); $counter = count($roomImages); ?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <?php for($x=0; $x<=$counter-1; $x++): ?>
      <li data-target="#carouselExampleIndicators" data-slide-to="<?= $x; ?>"  <?=$x==0?"class='active'":null; ?>></li>
      <?php endfor; ?>
    </ol>
    <div class="carousel-inner">
        <?php foreach($roomImages as $key => $item): ?>
      <div class="carousel-item <?= $key==0?"active":null; ?>">
        <img class="d-block w-100" src="{{asset("storage/".$item)}}" alt="First slide">
      </div>
      <?php endforeach; ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <?php endif; ?>