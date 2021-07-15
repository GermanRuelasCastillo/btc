
setInterval(function()
{
    $.ajax({
      type:"get",
      url:"/",
      success:function(data){
          $('.usd').html('$'+numberWithCommas(data["btc"]["USD"]));
          $('.clp').html('$'+numberWithCommas(data["btc"]["CLP"]));
          $('.pen').html('S/'+numberWithCommas(data["btc"]["PEN"]));
      }
    });
}, 10000)


function numberWithCommas(x) {
    var parts = x.toString().split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return parts.join(".");
}
