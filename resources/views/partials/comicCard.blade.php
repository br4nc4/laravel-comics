<div class="col-2">
    <div class="aspect">
        <a href="#">
            <img src="{{ $comic['thumb'] }}" alt="">
        </a>
    </div> 
    <div class="text-white text-uppercase">{{ $comic['title'] }}</div>
</div>

<style>
    .aspect{
        aspect-ratio: 1/1;
        overflow: hidden;
        margin-bottom: 1rem;
    }
</style>