$(function(){


  

  // let text = '{"Categories" : [' + 
  // '{"cat_id":"1", "name":"Speaker bluetooth Anker", "media":"/img_action/speaker bluetooth/Anker/711jx4SW4DL._AC_SL1500_.jpg"}, ' + 
  // '{"cat_id":"3", "name":"Speaker bluetooth","media":"/img_action/speaker bluetooth/Anker/711jx4SW4DL._AC_SL1500_.jpg"}, ' + 
  // '{"cat_id":"2", "name":"Speaker bluetooth JBL", "media":"/img_action/speaker bluetooth/JBL/714v51b8bpL._AC_SL1500_.jpg"}, ' + 
  // '{"cat_id":"4", "name":"Speaker bluetooth", "media":"/img_action/speaker bluetooth/Anker/711jx4SW4DL._AC_SL1500_.jpg"}]}';

  // const obj = JSON.parse(text);


  $(".submitting").click(function(){
    // document.getElementsByClassName("submitting").innerHTML =
      location.href="action_page.html?";
    
    // let Items = $(".submitting").val();
    // console.log(Items);
    
    //Items="+Items;
  });
  $(".area-a").click(function(){
    location.href="desc.html";
    // location.href="desc.html?Items="+Item_no;
  });

  const imgs = document.querySelectorAll('.img-select a');
  const imgBtns = [...imgs];
  let imgId = 1;

  imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
    });
  });

  function slideImage(){
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
  }

  window.addEventListener('resize', slideImage);
 




});