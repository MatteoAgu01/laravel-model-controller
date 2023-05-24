<div class="card d-flex  bg-dark m-5">
	<div>
		<img src="{{ $film['image'] }}">
	</div>
	<div>
		<h6 class="text-white text-uppercase">{{ $film['title']}}</h6>
		<p class="text-secondary text-uppercase"> {{$film['original_title']}}</p>
	</div>
</div>



<style lang="scss" scoped>
img{
width: 100%;
height: calc(100vh / 2);
}



</style>