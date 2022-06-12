{% for card in cards %}
<div class="card">
    <div class="img-base">
        <img src="{{BASE}}public/IMG/img{{card.cdg_id}}.png" alt="Imagem demonstração" title="Imagem demonstração">
    </div>
    <div class="text-base">
        <p>{{card.txt_titulo}}</p>
        <input class="image-description" type="hidden" value='{{card.txt_descricao}}'>
    </div>
    <hr id="division-bar" />
    <div id="socialmedia-base">
        <div id="tweet">
            <button id="btn-tweet">Tweetar</button>
            <div class="numbers">59</div>
        </div>
        <div id="like">
            <button id="btn-like"><i class="fa-solid fa-thumbs-up"></i>Curtir</button>
            <div class="numbers">12</div>
        </div>
    </div>
</div>
{% endfor %}

