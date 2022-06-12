<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Raphael Muniz Varela">
	<meta name="description" content="Site teste - RGB Comunicação">
    <link rel="icon" href="{{BASE}}public/IMG/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="stylesheet" href="{{BASE}}public/CSS/fonts.css">
    <link rel="stylesheet" href="{{BASE}}public/CSS/reset.css">
    <link rel="stylesheet" href="{{BASE}}public/CSS/style.css">
    <link rel="stylesheet" href="{{BASE}}public/CSS/header.css">
    <link rel="stylesheet" href="{{BASE}}public/CSS/cards.css">
    <link rel="stylesheet" href="{{BASE}}public/CSS/modalScreen.css">
    <link rel="stylesheet" href="{{BASE}}public/CSS/footer.css">
    <link rel="stylesheet" href="{{BASE}}public/CSS/copyright.css">
    <link rel="stylesheet" href="{{BASE}}public/CSS/keyFrames.css">
    <link rel="stylesheet" href="{{BASE}}public/CSS/medias.css">
    <title>{% block title %}{% endblock %}</title>
</head>
<body>
    <div id="page-base">
        {% block header %}{% endblock %}
        <section id="cards-base">
            {% block message %}{% endblock %}
            {% block card %}{% endblock %}
        </section>
        <hr id="division-bar"/>
        {% block footer %}{% endblock %}
        <img id="shadow" src="{{BASE}}public/IMG/sombra.png">
        {% block copyright %}{% endblock %}
    </div>
    {% block modalScreen %}{% endblock %}
<script src="{{BASE}}public/JS/script.js"></script>
</body>
</html>