    ymaps.ready(init);
    var myMap,
        myPlacemark;

    function init(){     
        myMap = new ymaps.Map ("map", {
            center: [55.770669, 37.662874],
            zoom: 14
        });

        myPlacemark = new ymaps.Placemark([55.770669, 37.662874], { content: 'Школа политики и бизнеса', balloonContent: 'Школа политики и бизнеса' });
    	myMap.geoObjects.add(myPlacemark);
    }