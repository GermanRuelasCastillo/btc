
var usd = 0;
var clp = 0;
var pen = 0;
var i = 0;

setInterval(function()
{
    $.ajax({
      type:"get",
      url:"/",
      success:function(data){
        var percent_usd = 0, percent_pen = 0,percent_clp = 0;
          if(i > 0){
            percent_usd = percent(data["btc"]["USD"],usd);
            percent_clp = percent(data["btc"]["CLP"],clp);
            percent_pen = percent(data["btc"]["PEN"],pen);
          } i++;
          $('.usd').html('$'+numberWithCommas(data["btc"]["USD"])+'<span class="percent '+(percent_usd > 0 ? "green" : "red")+'">%'+percent_usd+'</span>');
          $('.clp').html('$'+numberWithCommas(data["btc"]["CLP"])+'<span class="percent '+(percent_clp > 0 ? "green" : "red")+'">%'+percent_clp+'</span>');
          $('.pen').html('S/'+numberWithCommas(data["btc"]["PEN"])+'<span class="percent '+(percent_pen > 0 ? "green" : "red")+'">%'+percent_pen+'</span>');
          usd = data["btc"]["USD"];
          clp = data["btc"]["CLP"];
          pen = data["btc"]["PEN"];
      }
    });
}, 10000);


function percent(initial,final){
    return (100 * ((final - initial) / initial)).toFixed(2);
}

function numberWithCommas(x) {
    var parts = x.toString().split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return parts.join(".");
}
