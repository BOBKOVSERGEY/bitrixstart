<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
  <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

  <style>
    .my-hint {
      display: inline-block;
      padding: 5px;
      height: 35px;
      position: relative;
      left: -10px;
      width: 195px;
      font-size: 11px;
      line-height: 17px;
      color: #333333;
      text-align: center;
      vertical-align: middle;
      background-color: #faefb6;
      border: 1px solid #CDB7B5;
      border-radius: 20px;
      font-family: Arial;
    }
    #banner header {
      z-index: 1;
    }
  </style>
  <script>
    ymaps.ready(init);

    function init () {
      var myMap = new ymaps.Map("banner", {
          center: [55.76, 37.64],
          zoom: 10
        }, {
          searchControlProvider: 'yandex#search'
        }),
        // Создание макета содержимого хинта.
        // Макет создается через фабрику макетов с помощью текстового шаблона.
        HintLayout = ymaps.templateLayoutFactory.createClass( "<div class='my-hint'>" +
          "<b>{{ properties.object }}</b><br />" +
          "{{ properties.address }}" +
          "</div>", {
            // Определяем метод getShape, который
            // будет возвращать размеры макета хинта.
            // Это необходимо для того, чтобы хинт автоматически
            // сдвигал позицию при выходе за пределы карты.
            getShape: function () {
              var el = this.getElement(),
                result = null;
              if (el) {
                var firstChild = el.firstChild;
                result = new ymaps.shape.Rectangle(
                  new ymaps.geometry.pixel.Rectangle([
                    [0, 0],
                    [firstChild.offsetWidth, firstChild.offsetHeight]
                  ])
                );
              }
              return result;
            }
          }
        );

      var myPlacemark = new ymaps.Placemark([55.764286, 37.581408], {
        address: "Москва, ул. Зоологическая, 13, стр. 2",
        object: "Центр современного искусства"
      }, {
        hintLayout: HintLayout
      });

      myMap.geoObjects.add(myPlacemark);
    }

  </script>
  <!-- Banner -->
  <section id="banner">
    <header>
      <h2>Адрес: <em>A responsive site template freebie by <a href="http://html5up.net">HTML5 UP</a></em></h2>
      <a href="#" class="button">Написать сообщение</a>
    </header>
  </section>

  <!-- Posts -->
  <section class="wrapper style1">
    <div class="container">
      <div class="row">
        <section class="6u 12u(narrower)">
          <div class="box post">
              <h3>Контакты</h3>
              <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
          </div>
        </section>
        <section class="6u 12u(narrower)">
          <div class="box post">
              <h3>ООО МАГАЗИН</h3>
              <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
          </div>
        </section>
      </div>
    </div>
  </section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");?>