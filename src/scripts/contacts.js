$(function() {
  let myMap;
  ymaps.ready(init);

  function init() {
    myMap = new ymaps.Map(
      'map',
      {
        center: [55.773001526365704, 37.67698173826569],
        zoom: 15,
        controls: []
      },
      {
        searchControlProvider: 'yandex#search'
      }
    );

    myMap.controls.add('geolocationControl', {
      float: 'none',
      position: {
        bottom: 330,
        left: 12
      }
    });

    myMap.controls.add('zoomControl', {
      float: 'none',
      size: 'small',
      position: {
        bottom: 250,
        left: 12
      }
    });

    (myPlacemark = new ymaps.Placemark(
      [55.773001526365704, 37.67698173826569],
      {},
      {
        iconLayout: 'default#image',
        iconImageHref: 'images/pin.png',
        iconImageSize: [41, 57],
        iconImageOffset: [-20, -65],
        title: 'Красносельская',
        adress: 'ул. Красносельская, дом 4',
        metro: 'м. Бауманская',
        distance: '500 м.'
      }
    )), (myPlacemark2 = new ymaps.Placemark(
      [55.74463407366644, 37.567831659476795],
      {},
      {
        iconLayout: 'default#image',
        iconImageHref: 'images/pin.png',
        iconImageSize: [41, 57],
        iconImageOffset: [-20, -65],
        title: 'Киевская',
        adress: 'Кутузовский пр-т, д. 5',
        metro: 'м. Киевская',
        hours: 'пн.—пт. 10:30—18:30'
      }
    ))
    });

    myMap.geoObjects.add(myPlacemark).add(myPlacemark2);
  }
});
