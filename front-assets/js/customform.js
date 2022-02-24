	$(document).ready(function(){	    
	   $(".astroModalPopup").on('click', function(event){
          var astroId = $(this).children('input.astroId').val();
		  var audioprice = $(this).children('input.astroAudioPrice').val();
		  var vendorprice = $(this).children('input.astroVendorPrice').val();
		  var walletbalance = $(this).children('input.walletbalance').val();
		  var videoprice = 1.6*audioprice;
		  $("#myModal").modal('show');
		  $("#popuastroid").val(astroId);
		  $("#popupaudioprice").val(audioprice);
		  $("#popvendorprice").val(vendorprice);
		  $("#popwalletbalance").val(walletbalance);
  });
  $("#call_type").change(function(){
      var call_type = $('#call_type').val();
      var call_duration = $('#call_duration').val();
      if(call_duration==""){
          $('#call_type').val('');
          $('.errorcallduration').css('display','block');
          $('.errorcallduration').css('color','red');
          $('.errorcallduration').text('Please select the call duration');
          return false;
      }
      $('.errorcallduration').css('display','none');
          $('.errorcallduration').text('');
         var astroid = $("#popuastroid").val();
		 var audioprice =  $("#popupaudioprice").val();
		 var vendorprice =  $("#popvendorprice").val();
		 var walletbalance =  $("#popwalletbalance").val();
		 var audiocallprice = (call_duration * audioprice);
		 var videocallprice = (1.6 * audiocallprice);
          if(call_type=="Audio"){
              $('.msgcalltype').css('display','none');
              $('#call_price1').val(audiocallprice);
               $('#btnnext').removeClass('disabledhref');
          } else if(call_type=="Video"){
              $('.msgcalltype').css('display','block');
          $('.msgcalltype').css('color','red');
          $('.msgcalltype').text('You must have a good wifi connection for uninterrupted Video call');
              $('#call_price1').val(videocallprice);
               $('#btnnext').removeClass('disabledhref');
          }
          
});
$("#call_duration").click(function(){
      $('.errorcallduration').css('display','none');
          $('.errorcallduration').text('');
           $('#call_price1').val('');
});
$("#call_duration").keyup(function(){
    var call_type = $('#call_type').val();
    var call_duration = $('#call_duration').val();
    var astroid = $("#popuastroid").val();
		 var audioprice =  $("#popupaudioprice").val();
		 var audiocallprice = (call_duration * audioprice);
		 var videocallprice = (1.6 * audiocallprice);
          if(call_type=="Audio"){
              $('#call_price1').val(audiocallprice);
               $('#btnnext').removeClass('disabledhref');
          } else if(call_type=="Video"){
              $('#call_price1').val(videocallprice);
               $('#btnnext').removeClass('disabledhref');
          }
          
});
$("#btnnext").click(function(){
      $("#myModal").modal('hide');
      $("#myModal1").modal('show');
});
$("#proceedtopay").click(function(){
      $("#myModal1").modal('hide');
      $("#myModal2").modal('show');
      var call_type = $('#call_type').val();
      var call_duration = $('#call_duration').val();
      var astroid = $("#popuastroid").val();
      var callprice =  $('#call_price1').val();
      var birthdate = $('#birthdate').val();
      var birthtime = $("#birthtime").val();
      var birthlocation =  $('#birthlocation').val();
      var vendorprice =  $("#popvendorprice").val();
	  var walletbalance =  $("#popwalletbalance").val();
	  
	  $('#without_gst_amount').text(callprice);
     var gst_amount = Math.round(((callprice / 100) * 18).toFixed(3));
       $('#gst_amount').text(gst_amount);
       var invoice_amount = parseInt(callprice) + parseInt(gst_amount);
       $('#invoice_amount').text(invoice_amount);
       
	  $('#call_duration_test').val(call_duration);
      $('#vendor_price_test').val(vendorprice);
      $('#call_price1_test').val('Rs.'+callprice);
      $('#call_price_test').val(invoice_amount);
      $('#without_gst_test').val(callprice);
      $('#gst_price_test').val(gst_amount);
      $('#without_gst_test').val(callprice);
      $('#astrologer_id').val(astroid);
      $('#call_type_test').val(call_type);
      
      $('#calltime').val(call_duration);
      $('#calltypes').val(call_type);
      $('#vendor_price').val(vendorprice);
      $('#call_price').val(callprice);
      $('#call_price1').val(invoice_amount);
      $('#without_gst').val(callprice);
      $('#gst_price').val(gst_amount);
      $('#astologyid').val(astroid);
      $('#birth_date').val(birthdate);
      $('#birth_time').val(birthtime);
      $('#birth_location').val(birthlocation);
});


$(".common_selector").click(function()
    {
        var astroLang = "";
        var astroexp = "";
        var astroRating = "";
        var astroprice = "";
        var astroExpertise = "";
        $('#astroVendorDetail').html('<div id="loading" style="" ></div>');
        $('.astrolanguage:checked').each(function(){
            if(astroLang == "")
            astroLang += $(this).val();
            else
            astroLang += ","+$(this).val();
        });
         $('.astroexpe:checked').each(function(){
            if(astroexp == "")
            astroexp += $(this).val();
            else
            astroexp += ","+$(this).val();
        });
        $('.astroexpertise:checked').each(function(){
            if(astroExpertise == "")
            astroExpertise += $(this).val();
            else
            astroExpertise += ","+$(this).val();
        });
         $('.astroPrice:checked').each(function(){
            if(astroprice == "")
            astroprice += $(this).val();
            else
            astroprice += ","+$(this).val();
        });
        console.log('vivek'+astroLang);
        $.ajax({
            url: "<?=base_url()?>front/astroVendorFilter",
            method:"POST",
            data:{astroLang: astroLang, astroexp: astroexp, astroRating: astroRating, astroprice: astroprice, astroExpertise: astroExpertise},
            success:function(data){
                if(data!='')
                $('#astroVendorDetail').html(data);
                else
                var nodata = "No results found. Please choose another one!"
                $('#astroVendorDetail').html(nodata);
            }
        });
    });
    

    $('#SearchAstrologer').on('keyup paste', function () {
        var searchName = $("#SearchAstrologer").val();
        console.log(prevLength+' : '+searchName.length+' : '+sessionStatusRequest);
        if (searchName.length >= 0 && !ajaxRequestMade && searchName.length != prevLength) {
            prevLength = searchName.length;
            ajaxRequestMade = true;
            sessionStatusRequest = $.ajax({
                url: '<?=base_url()?>front/astroVendorFilter',
                type: 'POST',
                async: false,
                data: {
                    searchName: searchName
                },
                beforeSend: function () {
                    console.log('bbb : '+sessionStatusRequest);
                    if (sessionStatusRequest != null)
                        sessionStatusRequest.abort();
                },
                success: function (data) {
                    ajaxRequestMade = false;
                    if(data!='')
                $('#astroVendorDetail').html(data);
                },
                error: function () {}
            });
        }        
    });
    
    
    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $("#birthlocation").on('keyup paste', function () {
        var birthlocation = $("#birthlocation").val();
        var autocomplete_loader = $('.autocomplete-loader');
        var suggestcity = $('.suggestcity');
        var suggest_result_city = $('.suggest-result-city');
        if (birthlocation.length >= 1) {
            autocomplete_loader.show();
            $.ajax
                    ({
                        url: "<?=base_url()?>front/citydata",
                        data: {
                            "cityname": birthlocation
                        },
                        type: 'post',
                        dataType: "html",
                        success: function (result, textStatus, request)
                        {
                            var content = '';
                            if (result.length >= 3) {
                                suggest_result_city.empty();
                                result = JSON.parse(result);

                                $.each(result, function (i, row) {
                                    content += "<li><a href=\"javascript:\" data-resource-id=\"" + row.id + "\" data-airport=\"" + row.id + "\">" + row.name + "</a></li>";
                                });
                                suggest_result_city.append(content);
                                suggestcity.show();
                            } else {
                                suggest_result_city.empty();
                                content += "<li style=\"padding: 0 1em;\">No results found</li>";
                                suggest_result_city.append(content);
                                suggestcity.show();
                            }
                            autocomplete_loader.hide();
                        }
                    });
        } else {
            autocomplete_loader.hide();
            suggestcity.hide();
        }
    });

    $(document).on('click', 'ul.suggest-result-city a', function () {
        var $this = $(this);
        var form = $this.closest('form');
        console.log($(this).text())
        $('input.citysearchval').val($(this).text());
        $('.suggestcity').hide();

    });
    
    $('#birthdate').datepicker({ dateFormat: 'dd-mm-yy' }).val();

});
function call() {
var wallet_balence =  $("#popwalletbalance").val();
var callprice =  $('#call_price1').val();
var gst_amount = Math.round(((callprice / 100) * 18).toFixed(3));
var invoice_amount = parseInt(callprice) + parseInt(gst_amount);
var service_price = invoice_amount;

// alert(service_price);

// alert(wallet_balence);

if (wallet_balence - 1 < service_price - 1) {

document.getElementById('balance').innerHTML = "Insufficient Balance. Please Add Money";

$("#add_mony").show();

// window.location.href = "<?php echo base_url()?>front/wallet";

return false;

} else {

document.getElementById("myform").submit();

}

}
function pay_with_bank() {

document.getElementById("myform1").submit();

}
function promo(coupon) {
        var real_price = $('#real_price').val();
	  $.ajax({

            url: "<?php echo base_url('front/ajax_get_coupon')?>",

            type: 'POST',

              dataType: "json",

            data: {'coupon':coupon},

            success: function(response) {

              if(response.status == 1){
      
              	   var coupon = Math.round((($('#call_price1').val() / 100) * response.coupon[0].discount_parcent).toFixed(3));
              	     
              	     $('#coupon_error').html('Your Discount Amount Is '+ coupon);
              	       total_coupon_dis = $('#call_price').val() - coupon;
                  $('#call_price').val(total_coupon_dis); 
                $('#call_price_test').val(total_coupon_dis);
                $('#invoice_amount').html(total_coupon_dis);
                $('#coupon_code').val(response.coupon[0].coupan_code);
                $('#coupon_discount').val(response.coupon[0].discount_parcent);
              }else{

                    $('#coupon_code').val('0');
                    $('#coupon_discount').val('0');
                    $('#call_price').val(real_price); 
                    $('#call_price_test').val(real_price);
                    $('#invoice_amount').html(real_price);
                    $('#coupon_error').html('Invalide Coupon');
              }

            }            

        });
}
function DDMMYYYY(value, event) {
  let newValue = value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');

  const dayOrMonth = (index) => index % 2 === 1 && index < 4;

  // on delete key.  
  if (!event.data) {
    return value;
  }

  return newValue.split('').map((v, i) => dayOrMonth(i) ? v + '-' : v).join('');;
}
