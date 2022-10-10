
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
                // $("#login_button").html('Redirecting to Login');
                // window.location.href = '/login';
                var delayInMilliseconds = 2000; //1 second
                $("#login_button").html('Redirecting to Login');
                setTimeout(function() {
               
                    window.location.href = '/login';
                }, delayInMilliseconds);
            }
            else {
                $(".show_toastr").html(toastr(data.message,'times','danger'))
    
                $("#login_button").removeAttr("disabled");
                $("#login_button").html('Registeration Failed');

            }

            $("#login_button").removeAttr("disabled");
                $("#login_button").html('Redirecting to Login');

        },

        error: function (data){

    

        }
    });
    return false;
}


function updateInformation()
{
   console.log('touched ...');
   $("#login_button").removeAttr("disabled");
//    $(".show_hide").hide();
      //  $(".show_toastr").html(toastr('Hello here','check','danger'))


    var token    = $("input[name=_token]").val();
    var permanent_address    = $("input[name=permanent_address]").val();
    var state    = $("input[name=state]").val();
    var local_government = $("input[name=local_government]").val();
    var bvn    = $("input[name=bvn]").val();
    var title    = $("input[name=title]").val();
    var dob = $("input[name=dob]").val();
    var fullname = $("input[name=fullname]").val();
    var email = $("input[name=email]").val();
    var phone = $("input[name=phone]").val();
    var alternate_number = $("input[name=alternate_number]").val();
    var gender = $("input[name=gender]").val();

    


    
    var data = {
        _token:token,
        permanent_address,
        state,
        local_government,
        bvn,
        title,
        dob,
        fullname,
        email,
        phone,
        alternate_number,
        gender

    };
    // Ajax Postxx
    $.ajax({
        type: "post",
        url: "/updatecontact",
        data: data,
        cache: false,
        beforeSend:function(){
          $("#update_contact").attr("disabled", "disabled");
          $(".spinner-border-sm").addClass('spinner-border');
          
                // $(".spinner-border-sm").html('Updating Informa')

        },

        success: function (data)
        {
            console.log('login request sent  !',data);
            if(data.status == 'success'){
                $(".show_toastr").html(toastr(data.message,'check','success'))
                $("#update_contact").removeAttr("disabled");
                // $("#login_button").html('Registeration Successful');
          
                $(".spinner-border-sm").removeClass('spinner-border');
                var delayInMilliseconds = 2000; //1 second

setTimeout(function() {
 
}, delayInMilliseconds);


          
            }
            else {
                $(".show_toastr").html(toastr(data.message,'times','danger'))
    
                $("#update_contact").removeAttr("disabled");
                $("#update_contact").html('Update Failed');

            }

            $("#login_button").removeAttr("disabled");
                $("#login_button").html('Register');

        },

        error: function (data){

    

        }
    });
    return false;
}



function fetchBvnData(){
    if ($('#bvn').val().length < 11 || $('#bvn').val() == '') {
        $("#verify_bvn").attr("disabled", "disabled");
        $("#verify_bvn").html('Looking up BVN  . . <i class="fas fa-spinner fa-spin text-white"></i>')
  
    }
  
  if($('#bvn').val().length == 11){
  
  console.log('key up count');
  var token    = $("input[name=_token]").val();
  var userbvn    = $("input[name=bvn]").val();
  
  var data = {
  _token:token,
  userbvn:userbvn,
  
  };
  $.ajax({
  type: "post",
  url: "/verify_bvn",
  data: data,
  cache: false,
  beforeSend:function(){
  
  $("#login_button").attr("disabled", "disabled");
        $("#login_button").html('loading BVN data . . <i class="fas fa-spinner fa-spin text-white"></i>')
  
  },
  success: function(data){
  // const bvnStats = document.getElementById('bvnStatus');
  // bvnStats.style.display = 'block';
  
  document.getElementById('bvn').disabled = true;
  //document.getElementById('bvn_name').disabled = true;
  
    $("#verify_bvn").removeAttr("disabled");
        $("#verify_bvn").html('BVN Fetched')
  
    console.log('data fetched',data);
    document.getElementById("title").setAttribute('value',data.data.Title);
    document.getElementById("fullname").setAttribute('value',data.data.Full_Name);
    document.getElementById("dob").setAttribute('value',data.data.DOB);
    document.getElementById("email").setAttribute('value',data.data.Email);
    document.getElementById("gender").setAttribute('value',data.data.Gender);
  
    document.getElementById("permanent_address").setAttribute('value',data.data.Address_line_1);
    document.getElementById("state").setAttribute('value',data.data.State_of_residence);
    document.getElementById("local_government").setAttribute('value',data.data.Lga_of_residence);
    
    document.getElementById("phone").setAttribute('value',data.data.Phone);
    document.getElementById("alternate_number").setAttribute('value',data.data.Alternative_phone);
  
  },
  error: function(data){
  
    $("#verify_bvn").removeAttr("disabled");
        $("#verify_bvn").html('Verify BVN . . <i class="fas fa-spinner fa-spin text-white"></i>')
  
   const errs =  jQuery.parseJSON(data.responseText);
          console.log(' error data',errs.data);
    swal({
  title: 'error',
  text: errs.data,
  type: "warning",
  dangerMode: true,
  showCancelButton: false,
  dangerMode: false,
  confirmButtonColor: '#db4b1f',
  confirmButtonText: 'ERROR!',
  }
  );
  
  }
  
  });
  }
  
  }


 function payWithPaystack(){

  var handler = PaystackPop.setup({ 
    key: 'pk_test_4fb3d99d8b287d2c740edabc2513ccec4a6636d7', //put your public key here
    email: email, //put your customer's email here
    amount: parseInt(amount), //amount the customer is supposed to pay
    metadata: {
        custom_fields: [
            {
                display_name: firstname,
                variable_name: lastname,
               // value: phone //customer's mobile number
            }
        ]
    },
    callback: function (response) {
       
        console.log(response.reference);
    
        // $.ajax({
        //     type: 'POST',
        //     url: "/payForProductWithCard",
        //     data: {_token: token,
        //         reference:response.reference,email,
        //         amount,firstname,lastname,id,planId
      
        //     },
        //     dataType: 'JSON',
        //     success: function (data) {   
        //     if(data.status == "success")
        //     {
        //       swal({
        //         title: "Plan Created",
        //         text: "You have successfully added a new plan",
        //         type: "success",
        //         showCancelButton: false,
        //         dangerMode: false,
        //          cancelButtonClass: '#4FE870',
        //         confirmButtonColor: '#4FE870',
        //         confirmButtonText: 'OKAY!',
        //     },
        //     function(){
            
        //         window.location.href ='/home';
            
        //     }
        //     );

        //       //  window.location.href ='/success';
    
        //     }
        //     else {
             
        //       swal({
        //         title: data.status,
        //         text: data.message,
        //         type: "error",
        //         dangerMode: true,
        //         showCancelButton: false,
        //         dangerMode: false,
        //         confirmButtonText: 'ERROR!',
        //     }
        //     );

        //     }
        
        
        //     }
        // });
        


    },
    onClose: function () {
        //when the user close the payment modal
        alert('Transaction cancelled');
    }
});
handler.openIframe();
 } 

  



