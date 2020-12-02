

$(()=>{
   $(".image-thumbs img").on("mouseenter",function(e){
      let src = $(this).attr("src");
      $(".image-main img").attr("src",src);
   })
})
