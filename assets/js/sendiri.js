$(window).bind("load resize", function()
      {
        if($(this).width() < 768)
        {
          $('div.sidebar-collapse').addClass('collapse')
        }
        else
        {
          $('div.sidebar-collapse').removeClass('collapse')
        }
 });

// jquery untuk dropdown
$(document).ready(function(){
  //menyentuk li tr-tree
  $(".tr-tree").each(function(){
    //menyentuh a href
    var link = $(this).children("a").first();
    //menyentuh submenu a href
    var submenu = $(this).children(".tr-tree-menu").first();
    //untuk mengetahui apakah linya mempunyai kelas active
    var isActive = $(this).hasClass("active")

    //jika benar active
    if (isActive)
    {
      submenu.slideDown(); 
      link.children(".fa-angle-right").first().removeClass("fa-angle-right").addClass("fa-angle-down");
    }

    //jika link di klik
    link.click(function(e)
    {
      e.preventDefault(); //mencegah a href agar tdk lari kehalaman lain
      if(isActive)
      {
        submenu.slideUp();
        isActive=false;
        link.children(".fa-angle-down").first().removeClass("fa-angle-down").addClass("fa-angle-right");

      }else{
        submenu.slideDown();
        isActive=true;
        link.children(".fa-angle-right").first().removeClass("fa-angle-right").addClass("fa-angle-down");
      }
    })
  })
})