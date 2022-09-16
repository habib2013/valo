
function toastr(title,iconType,t_type){
return `
<div class="alert alert-${t_type} border-2 d-flex align-items-center" role="alert">
  <div class="bg-${t_type} me-3 icon-item"><span class="fas fa-${iconType}-circle text-white fs-3"></span></div>
  <p class="mb-0 flex-1">${title}</p><button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
`;
  
}


function LoginUser()
{
   console.log('touched ...');
   $("#login_button").removeAttr("disabled");
//    $(".show_hide").hide();
      //  $(".show_toastr").html(toastr('Hello here','check','danger'))


    var token    = $("input[name=_token]").val();
    var email    = $("input[name=email]").val();
    var password = $("input[name=password]").val();
    var data = {
        _token:token,
        email:email,
        password:password
    };
    // Ajax Post
    $.ajax({
        type: "post",
        url: "/loginuser",
        data: data,
        cache: false,
        beforeSend:function(){
          $("#login_button").attr("disabled", "disabled");
                $("#login_button").html('Proccessing . . <i class="fas fa-spinner fa-spin text-white"></i>')

        },

        success: function (data)
        {
            console.log('login request sent !');
            if(data.status == 'success'){
                $(".show_toastr").html(toastr(data.message,'check','success'))

            

                $("#login_button").removeAttr("disabled");
                $("#login_button").html('Redirecting to dashboard');
                window.location.href = '/home';

            }
            else {
                $(".show_toastr").html(toastr(data.message,'times','danger'))
    
                $("#login_button").removeAttr("disabled");
                $("#login_button").html('LOGIN');

            }

            $("#login_button").removeAttr("disabled");
                $("#login_button").html('LOGIN');

        },

        error: function (data){

    

        }
    });
    return false;
}



function RegisterUser()
{
   console.log('touched ...');
   $("#login_button").removeAttr("disabled");
//    $(".show_hide").hide();
      //  $(".show_toastr").html(toastr('Hello here','check','danger'))


    var token    = $("input[name=_token]").val();
    var name    = $("input[name=name]").val();
    var email    = $("input[name=email]").val();
    var password = $("input[name=password]").val();
   // var password_confirmation = $("input[name=password_confirmation]").val();
    var user_type = $("select[name=user_type]").val();
    
    var data = {
        _token:token,
        email,
        name,
        password,
        user_type
    };
    // Ajax Postxx
    $.ajax({
        type: "post",
        url: "/registeruser",
        data: data,
        cache: false,
        beforeSend:function(){
          $("#login_button").attr("disabled", "disabled");
                $("#login_button").html('Proccessing . . <i class="fas fa-spinner fa-spin text-white"></i>')

        },

        success: function (data)
        {
            console.log('login request sent  !',data);
            if(data.status == 'success'){
                $(".show_toastr").html(toastr(data.message,'check','success'))
                $("#login_button").removeAttr("disabled");
                // $("#login_button").html('Registeration Successful');
                $("#login_button").html('Redirecting to Login');
                window.location.href = '/login';
          
            }
            else {
                $(".show_toastr").html(toastr(data.message,'times','danger'))
    
                $("#login_button").removeAttr("disabled");
                $("#login_button").html('Registeration Failed');

            }

            $("#login_button").removeAttr("disabled");
                $("#login_button").html('Register');

        },

        error: function (data){

    

        }
    });
    return false;
}



