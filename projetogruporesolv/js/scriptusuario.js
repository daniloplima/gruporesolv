function editUsuario(id){
   console.log(".data-" + id)
   $(".data-" +id).removeClass("data-visible")
   $(".data-" +id).addClass("data-invisible")
    
   $("#user-" +id).removeClass("edit-input-invisible")
   $("#user-" +id).addClass("edit-input-visible")
    
   $("#email-" +id).removeClass("edit-input-invisible")
   $("#email-" +id).addClass("edit-input-visible")
    
   $("#password-" +id).removeClass("edit-input-invisible")
   $("#password-" +id).addClass("edit-input-visible")
    
   $("#btnatt-" +id).removeClass("edit-btn-invisible")
   $("#btnatt-" +id).addClass("edit-input-visible")
}

function editHotel(id){
   console.log(".data-" + id)
   $(".data-" +id).removeClass("data-visible")
   $(".data-" +id).addClass("data-invisible")
    
   $("#hotel-" +id).removeClass("edit-input-invisible")
   $("#hotel-" +id).addClass("edit-input-visible")
    
   $("#numero-" +id).removeClass("edit-input-invisible")
   $("#numero-" +id).addClass("edit-input-visible")
    
   $("#rua-" +id).removeClass("edit-input-invisible")
   $("#rua-" +id).addClass("edit-input-visible")
    
   $("#cidade-" +id).removeClass("edit-input-invisible")
   $("#cidade-" +id).addClass("edit-input-visible")
   
   $("#estado-" +id).removeClass("edit-input-invisible")
   $("#estado-" +id).addClass("edit-input-visible")
    
   $("#btnatt-" +id).removeClass("edit-btn-invisible")
   $("#btnatt-" +id).addClass("edit-input-visible")
}