$(document).ready(function(){
    var nav = document.querySelector('.menu');
    var mob =  document.createElement('DIV');
    nav.appendChild(mob);
    $(mob).addClass('mob_start');
    $('.mob_start').on('click', function () {
        if($('.menu').hasClass('mob_active')){
            $('.menu').removeClass('mob_active');
            $('.nav__li').removeClass('li-mob');  
            $('.nav__li--production').removeClass('li-production');
            $('.frame').removeClass('frame-mob');
        }else{
            $('.menu').addClass('mob_active');
        }                           
    });
    $('.nav__li--production').on('click', function () {
      $('.nav__li').addClass('li-mob');  
      $('.nav__li--production').addClass('li-production');
      $('.frame').addClass('frame-mob');
    });
    $('.catalog-show').on('click', function () {
        if($('.left-category').hasClass('left-category--active')){
            $('.left-category').removeClass('left-category--active');
        }else{
            $('.left-category').addClass('left-category--active');
        }                           
    });
    $('.slider').slick({
        autoplay: true,
        speed: 1200,
        slidesToShow: 1
    });
    $('.cat-ul').slick({
        autoplay: true,
        speed: 1200,
        slidesToShow: 8,
        responsive: [
            {
              breakpoint: 990,
              settings: {
                slidesToShow: 6,
                slidesToScroll: 1,
                infinite: true,
                arrows:true,
              }
            },
            {
              breakpoint: 800,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true,
                arrows:true,
              }
            },
            {
              breakpoint: 500,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                arrows:true,
              }
            }
        ] 
    });
    $('.client-carousel').slick({
        autoplay: true,
        speed: 1200,
        arrows:false,
        slidesToShow: 4,
        slidesToScroll: 1,
        easing: 'easeInOutBack',
        responsive: [
            {
              breakpoint: 990,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                arrows:false,
              }
            }
        ]       
    });                
   $('.product-des').lightTabs(); 
});   
  (function($){  
               
    jQuery.fn.lightTabs = function(options){
        
        var createTabs = function(){
            tabs = this;
            i = 0;
            
            showPage = function(i){
                $('.info-tabs').children("div").hide();
                $('.info-tabs').children("div").eq(i).show();
                $('.tabs').children("div").removeClass("tabs__item--active");
                $('.tabs').children("div").eq(i).addClass("tabs__item--active");
            }
            
            showPage(0);                
            
            $('.tabs').children("div").each(function(index, element){
                $(element).attr("data-page", i);
                i++;                        
            });
            
            $('.tabs').children("div").click(function(){
                showPage(parseInt($(this).attr("data-page")));
            });             
        };      
        return this.each(createTabs);
    };
})(jQuery); 

    /*begin korzina*/
$(document).ready(function(){

        
      $('.add').on('click', function (){
             var vprodBot = $('.prod-bot__numbers');
             var data = $(this).parent(vprodBot).children('.kolvo');             
             var kolvo = data.val();
             if($(this).hasClass('add--plus')){                        
                    data.val(parseInt(kolvo) + 1);       
             }
             else{
                if(kolvo > 0) {
                    data.val(parseInt(kolvo) - 1);
                }
             }
      });        
        
      var korzinamini = document.getElementById('korzina_content'); 
      var d = document,
      itemBox = d.querySelectorAll('.product-mini');
      var cartData = getCartData();
        if(cartData !== null){            
            var gSumma = 0;
            var gKolvo = 0;
            for (var key in cartData) {   
                gSumma += parseInt(cartData[key][3]); 
                gKolvo +=  parseInt(cartData[key][2]);                
            }
            var korzContent = gKolvo + " товаров" + " " + gSumma + " KZT";
            korzinamini.innerHTML = korzContent;            
            $('.korzina-bot').addClass('korzina-bot--active');
            $('.kpop-info__text').text(korzContent);
            if($('.korzina__text').hasClass('korz')){
                openCart();
            }
                        
        }        
        function addEvent(elem, type, handler){
          if(elem.addEventListener){
            elem.addEventListener(type, handler, false);
          } else {
            elem.attachEvent('on'+type, function(){ handler.call( elem ); });
          }
          return false;
        }
        function getCartData(){
            return JSON.parse(localStorage.getItem('cart'));    
        }
        function setCartData(o){
            localStorage.setItem('cart', JSON.stringify(o));
            return false;
        }
        // function showBot(){

        // }


        function addToCart(){
            // блокируем кнопку на время операции с корзиной
            var cartData = getCartData() || {}, // получаем данные корзины или создаём новый объект, если данных еще нет
            prodBot = this.parentNode,
            parentBox = prodBot.parentNode,                              // родительский элемент кнопки &quot;Добавить в корзину&quot;
            itemId = this.getAttribute('data-id'), // ID товара
            itemTitle = parentBox.querySelector('.mini-info__heading').innerHTML, // название товара
            itemPrice = prodBot.querySelector('.price').innerHTML, // стоимость товара                                    
            chislo =  $(this).parent().children().children('.kolvo').val(),
            data = parseInt(chislo);
            var general = parseInt(itemPrice) * data;                                                 
            if(cartData.hasOwnProperty(itemId)){ // если такой товар уже в корзине, то добавляем +1 к его количеству                
                cartData[itemId][2] = parseInt(data);
                cartData[itemId][3] = cartData[itemId][1] * cartData[itemId][2];        
                } else { // если товара в корзине еще нет, то добавляем в объект
                    cartData[itemId] = [itemTitle, itemPrice, data, general, itemId];                              
                }            

        // Обновляем данные в LocalStorage
        if(!setCartData(cartData)){ 
            var gSumma = 0;
            var gKolvo = 0
            for (var key in cartData) {   
                gSumma += parseInt(cartData[key][3]); 
                gKolvo +=  parseInt(cartData[key][2]);
            }
            

            var korzContent = gKolvo + " товаров" + " " + gSumma + " KZT";
            korzinamini.innerHTML = korzContent;
            $('.korzina-bot').addClass('korzina-bot--active');
            $('.kpop-info__text').text(korzContent);                                        

        }
        return false;
   }

    

    for(var i = 0; i < itemBox.length; i++){
        addEvent(itemBox[i].querySelector('.prod-bot__zakas'), 'click', addToCart);
    }


        function addinToCart(elem){
            // блокируем кнопку на время операции с корзиной
            var cartData = getCartData() || {},          
            itemId = $('.product-zakas__add').attr("data-id"), // ID товара
            itemTitle = $('.product-des__heading').text(),
            itemPrice = $('.product-zakas__price').children().text();
            chislo =  $('.kolvo').val(),
            data = parseInt(chislo);
            var general = parseInt(itemPrice) * data;                                                 
            if(cartData.hasOwnProperty(itemId)){ // если такой товар уже в корзине, то добавляем +1 к его количеству                
                cartData[itemId][2] = parseInt(data);
                cartData[itemId][3] = cartData[itemId][1] * cartData[itemId][2];        
                } else { // если товара в корзине еще нет, то добавляем в объект
                    cartData[itemId] = [itemTitle, itemPrice, data, general, itemId];                              
                }            

        // Обновляем данные в LocalStorage
        if(!setCartData(cartData)){ 
            var gSumma = 0;
            var gKolvo = 0
            for (var key in cartData) {   
                gSumma += parseInt(cartData[key][3]); 
                gKolvo +=  parseInt(cartData[key][2]);
            }
            

            var korzContent = gKolvo + " товаров" + " " + gSumma + " KZT";
            korzinamini.innerHTML = korzContent;
            $('.korzina-bot').addClass('korzina-bot--active');
            $('.kpop-info__text').text(korzContent);                                        

        }
        return false;
   }



    /*Добавление клика в продукте*/
       $('.product-zakas__add').on('click', function (){
        addinToCart();
    }); 


    /*Таблика из массива*/
    function openCart(e){
        var korzFull = document.getElementById('korzFull');
         // вытаскиваем все данные корзины
        var totalItems = '';
        var m = 0;                
        // если что-то в корзине уже есть, начинаем формировать данные для вывода        
        totalItems = '<table cellspacing="0" class="shopping_list"><tr><th>№</th> <th>Наименование</th><th>Цена</th><th>Кол-во</th><th>Сумма</th> <th>Удалить</th></tr>';            
            for(var items in cartData){
                totalItems += '<tr>';                                                
                m = m + 1;                                                             
                totalItems += '<td>' + m + '</td>';                                      
                totalItems += '<td>' + cartData[items][0] + '</td>';
                totalItems += '<td class="price">' + cartData[items][1] + ' KZT'  + '</td>'; 
                totalItems += '<td class="c">' + '<span class="addin addin--minus">' + '- ' + '</span>' + '<span class="tov-kolvo">' + cartData[items][2]  + '</span>' + '<span class="addin addin--plus">' + '+ ' + '</span>' +  '</td>';                                                 
                totalItems += '<td class="gsum">' + cartData[items][3] + ' KZT' + '</td>'; 
                totalItems += '<td>' + '<span class="del">' + 'Х' + '</span>' + '</td>'; 
                totalItems += '<td class="hidden-td">' + cartData[items][4]  + '</td>'; 
                totalItems += '</tr>';                                 
            }
            totalItems += '<tr>' + '<td class="td-full">' + 'Итого: '  + gSumma + ' KZT' + '</td>' + '</tr>';
            totalItems += '<table>';
            korzFull.innerHTML = totalItems;
        
        return false;
    }
    $('.addin').on('click', function (){             
       
       var data = $(this).parent().children('.tov-kolvo'); 
       var dataText = data.text();                                                                                          
       if($(this).hasClass('addin--plus')){                        
              dataText =  parseInt(dataText) + 1;      
       }
       else{
          if(dataText > 1) {
              dataText =  parseInt(dataText) - 1;
          }
       }       
       data.text(dataText);
       var id = $(this).parent().parent().children('.hidden-td').text();
       var gsum = $(this).parent().parent().children('.gsum');             
       var price = $(this).parent().parent().children('.price').text();                      
       var general;
       general = parseInt(dataText) * parseInt(price);
       generalText = general + ' KZT';
       gsum.text(generalText); 
       cartData[id][2] = dataText;
       cartData[id][3] = general;
       var fullSum = $('.td-full');       
       if(!setCartData(cartData)){ 
            var gSumma = 0;
            var gKolvo = 0
            for (var key in cartData) {   
                gSumma += parseInt(cartData[key][3]); 
                gKolvo +=  parseInt(cartData[key][2]);                
                
            }
            gText = 'Итого: ' + gSumma + ' KZT';
            fullSum.text(gText);
            var korzContent = gKolvo + " товаров" + " " + gSumma + " KZT";
            korzinamini.innerHTML = korzContent;                
        }
        

    });

    $('.del').on('click', function (){                             
        var delpar =  this.parentNode;
        var delparpar =  delpar.parentNode;
        var specificId =  delparpar.querySelector('.hidden-td').innerHTML;        
        delete cartData[specificId];
        setCartData(cartData);
        isEmpty(cartData);
        var gSumma = 0;
            var gKolvo = 0;
            for (var key in cartData) {   
                gSumma += parseInt(cartData[key][3]); 
                gKolvo +=  parseInt(cartData[key][2]);                
            }
            var korzContent = gKolvo + " товаров" + " " + gSumma + " KZT";
            korzinamini.innerHTML = korzContent;
        $(this).parent().parent().css("display","none");

    });
    function isEmpty(obj) {
      for (var key in obj) {
        return(false);
      }       
      localStorage.removeItem('cart');
      location.reload(true);     
    } 
}); 
    /*end korzina*/
