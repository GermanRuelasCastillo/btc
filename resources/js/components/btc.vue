<template>
  <section id="home">
        <div class="content">
            <div id="large-header" class="large-header">
                <div id="countdown_dashboard" class="home-main container">
                    <div class="row">
                        <div class="logo">
                            <img src="images/logo.png" alt="logo">
                            <p>El valor del Bitcoin es:</p>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Estados Unidos -->
                        <div class="col-md-4 dash-glob" data-scroll-reveal="enter bottom move 25px, after 0.3s">
                            <div class="dash days_dash">
                                <div class="digit usd" v-html="this.str_usd"><i class="icon-arrow"></i></div>
                                <div class="digit"><img src="images/flags/united-states.png" alt="United States BTC" width="50"></div>
                            </div>
                        </div>

                        <!-- Chile -->
                        <div class="col-md-4 dash-glob" data-scroll-reveal="enter bottom move 25px, after 0.3s">
                            <div class="dash minutes_dash">
                                <div class="digit clp" v-html="this.str_clp"></div>
                                <div class="digit"><img src="images/flags/chile.png" alt="United States BTC" width="50"></div>
                            </div>
                        </div>
                        <!-- Perú -->
                        <div class="col-md-4 dash-glob" data-scroll-reveal="enter bottom move 25px, after 0.3s">
                            <div class="dash seconds_dash">
                                <div class="digit pen" v-html="this.str_pen"></div>
                                <div class="digit"><img src="images/flags/peru.png" alt="United States BTC" width="50"></div>
                            </div>
                        </div>
                    </div> <!-- END ROW -->
                </div> <!-- END COUNTDOWN -->
            </div> <!-- LARGE HEADER -->
        </div> <!-- END CONTENT -->
    </section>
</template>

<script>
export default{
  props:{
    btc: Object
  },
  data: () => ({
    usd: '0',
    clp: '0',
    pen: '0',
    str_usd: '0',
    str_clp: '0',
    str_pen: '0',
    i : 0,
}),
  mounted(){
    console.log(this.btc);
    this.str_usd = '$'+this.btc["USD"];
    this.str_clp = '$'+this.btc["CLP"];
    this.str_pen = 'S/'+this.btc["PEN"];
    setInterval(() => {
        this.getBtc()
    }, 10000);
  },
  methods:
  {
    getBtc(){
        axios.get('/vue').then(response => {
            var percent_usd = 0, percent_pen = 0,percent_clp = 0;
            if(this.i > 0){
                percent_usd = this.percent(response["data"]["btc"]["USD"],this.usd);
                percent_clp = this.percent(response["data"]["btc"]["CLP"],this.clp);
                percent_pen = this.percent(response["data"]["btc"]["PEN"],this.pen);
            }this.i++;
            this.str_usd = ('$'+this.numberWithCommas(response["data"]["btc"]["USD"])+'<span class="percent '+(percent_usd > 0 ? "green" : "red")+'">%'+percent_usd+'</span>');
            this.str_clp = ('$'+this.numberWithCommas(response["data"]["btc"]["CLP"])+'<span class="percent '+(percent_clp > 0 ? "green" : "red")+'">%'+percent_clp+'</span>');
            this.str_pen = ('S/'+this.numberWithCommas(response["data"]["btc"]["PEN"])+'<span class="percent '+(percent_pen > 0 ? "green" : "red")+'">%'+percent_pen+'</span>');
            this.usd = response["data"]["btc"]["USD"];
            this.clp = response["data"]["btc"]["CLP"];
            this.pen = response["data"]["btc"]["PEN"];
        });
    },
    percent(initial,final){
        return (100 * ((final - initial) / initial)).toFixed(2);
    },

    numberWithCommas(x) {
        var parts = x.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        return parts.join(".");
    }

  },
}
</script>
