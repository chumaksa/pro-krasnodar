<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAQAQAABMLAAATCwAAAAAAAAAAAADjswBp47MAaeOzADzjswAt47MAaeOzAGnjswBm47MAZuOzAG3jswBr47MAa+OzAC0AAAAAAAAAAAAAAAAAAAAA47MAaeOzAGnjswA847MALeOzAGnjswBp47MAZuOzAGbjswBm47MAYeOzAB7jswBA47MAb+OzAAcAAAAAAAAAAOOzAGnjswBp47MAPOOzAC3jswBp47MAaeOzADPjswAz47MAK+OzAA7jswBT47MAcOOzABXjswB/47MABgAAAADjswBp47MAaeOzADzjswAt47MAaeOzAGnjswAz47MAM+OzADvjswBk47MAbeOzABbjswB747MAGeOzAHMAAAAA47MAaeOzAGnjswA847MALeOzAGnjswBp47MAZuOzAGbjswBm47MAZeOzABjjswB/47MAGeOzAHTjswBE47MAMuOzAGnjswBp47MAPOOzAC3jswBp47MAaeOzAGbjswBm47MAVOOzABXjswB747MAF+OzAG/jswBV47MAHuOzAHXjswBp47MAaeOzADzjswAt47MAaeOzAGkAAAAAAAAAAOOzABXjswCA47MAFeOzAGjjswBp47MAD+OzAGPjswBu47MAaeOzAGnjswA847MALeOzAGnjswBpAAAAAAAAAAAAAAAA47MAEeOzAFbjswBr47MAPuOzAC/jswBp47MAbuOzAGrjswBq47MALuOzAD/jswBr47MAVeOzABIAAAAAAAAAAOOzABHjswBV47MAa+OzAD7jswAu47MAauOzAGnjswBv47MAYuOzABPjswBm47MAaOOzABbjswB/47MAE+OzABfjswB847MAFuOzAGfjswBr47MAE+OzAGHjswBt47MAc+OzABzjswBX47MAbuOzABfjswCF47MAHOOzAFnjswBT47MAHOOzAIXjswAW47MAcOOzAFfjswAc47MAc+OzADDjswBO47MAcuOzABnjswB847MAFeOzAGfjswBo47MAZ+OzAGfjswAV47MAfOOzABnjswB047MATeOzADAAAAAA47MAc+OzABjjswCB47MAG+OzAG7jswBm47MAPeOzAD3jswBm47MAbuOzABvjswCA47MAGOOzAHMAAAAAAAAAAOOzAAbjswB847MAGuOzAHLjswBU47MADeOzACrjswAq47MADeOzAFPjswBv47MAGuOzAHzjswAGAAAAAAAAAAAAAAAA47MABuOzAHDjswBM47MAHuOzAGTjswBn47MAZ+OzAGDjswAc47MATeOzAHHjswAGAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA47MAKuOzAHTjswBq47MAaOOzAGjjswBq47MAdOOzADAAAAAAAAAAAAAAAAAAAAAAAA8AAAADAAAAAQAAAAEAAAAAAAAAAP//AwAAAAOAAAABgIghAAAAAAAAAAAAAP//gAEAAIABAADAA4wc8A8AAA==" type="image/x-icon">
    
    <title>Pro-krasnodar</title>
  <script type="module" crossorigin src="/assets/index-a8978f0a.js"></script>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/index-0daf8438.css">
</head>
<body>
<main class="container">
    <h1>Галерея объектов</h1>
    <a class="filter-link" href="#">Фильтр объектов <span class="filter-link__arrow">&#9660;</span></a>
    <div class="filter">
        <fieldset>
            <legend><b>Объекты</b></legend>
            <label for="living">
                Жилые
                <input type="checkbox" name="type" id="living">
            </label>
            <label for="municipal">
                Муниципальные
                <input type="checkbox" name="type" id="municipal">
            </label>
            <label for="commercial">
                Коммерческие
                <input type="checkbox" name="type" id="commercial">
            </label>
        </fieldset>
        <fieldset>
            <legend><b>Города</b></legend>
            <label for="ekaterinburg">
                Екатеринбург
                <input type="checkbox" name="city" id="ekaterinburg">
            </label>
            <label for="omsk">
                Омск
                <input type="checkbox" name="city" id="omsk">
            </label>
            <label for="novosibirsk">
                Новосибирск
                <input type="checkbox" name="city" id="novosibirsk">
            </label>
        </fieldset>
        <div>
            <button id="change" class="button button_primary" type="button">Применить</button>
            <button id="reset" class="button button_outline" type="button">Сбросить</button>
        </div>
    </div>
    <div class="grid">
        <a class="object" href="#" data-type="living" data-city="omsk">
            <img class="object__thumbnail" src="/assets/novosibirsk-8d7d5127.jpg" alt="#">
        </a>
        <a class="object" href="#" data-type="living" data-city="novosibirsk">
            <img class="object__thumbnail" src="/assets/novosibirsk-8d7d5127.jpg" alt="#">
        </a>
        <a class="object" href="#" data-type="municipal" data-city="omsk">
            <img class="object__thumbnail" src="/assets/novosibirsk-8d7d5127.jpg" alt="#">
        </a>
        <a class="object" href="#" data-type="commercial" data-city="ekaterinburg">
            <img class="object__thumbnail" src="/assets/novosibirsk-8d7d5127.jpg" alt="#">
        </a>
        <a class="object" href="#" data-type="living" data-city="omsk">
            <img class="object__thumbnail" src="/assets/novosibirsk-8d7d5127.jpg" alt="#">
        </a>
        <a class="object" href="#" data-type="living" data-city="novosibirsk">
            <img class="object__thumbnail" src="/assets/novosibirsk-8d7d5127.jpg" alt="#">
        </a>
        <a class="object" href="#" data-type="municipal" data-city="omsk">
            <img class="object__thumbnail" src="/assets/novosibirsk-8d7d5127.jpg" alt="#">
        </a>
        <a class="object" href="#" data-type="commercial" data-city="ekaterinburg">
            <img class="object__thumbnail" src="/assets/novosibirsk-8d7d5127.jpg" alt="#">
        </a>
    </div>
</main>

</body>
</html>