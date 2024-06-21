new Vue({
    el: '#content',
    data: {
      requestIsLoading: false,
      isLoading: false,
      currentStep: 1,
      selectedMethod: {},
      paymentMethods: [],
      trade: {
        type: 'FX',
        selectedType: 'FX',
        commodity: 'EURUSD',
        amount:0
      },
      url: {
        trade: '',
      },
    },
    
    mounted() {
    //   this.paymentMethods = JSON.parse($("#paymentMethod").val());
      this.url.trade = $("#processTrade").val();
      
    //   this.selectedMethod = this.paymentMethods[0];

    this.LoadTradeChat()
    },
    // computed: {
       
    //     LoadTradeChat: function () {
    //                 const type = this.trade.type
    //                 const commodity = this.trade.commodity

    //                 new TradingView.widget({
    //         			"autosize": true,
    //         			"symbol": `${type}:${commodity}`,
    //         			"interval": "D",
    //         			"timezone": "Etc/UTC",
    //         			"theme": "light",
    //         			"style": "1",
    //         			"locale": "en",
    //         			"toolbar_bg": "#f1f3f6",
    //         			"enable_publishing": false,
    //         			"allow_symbol_change": true,
    //         			"container_id": "tradingview_337f2"
    //         		});
            	
    //     },
    // },

    methods: {
        LoadTradeChat(){
            const type = this.trade.type
            const commodity = this.trade.commodity

            new TradingView.widget({
                "autosize": true,
                "symbol": `${type}:${commodity}`,
                "interval": "D",
                "timezone": "Etc/UTC",
                "theme": "light",
                "style": "1",
                "locale": "en",
                "toolbar_bg": "#f1f3f6",
                "enable_publishing": false,
                "allow_symbol_change": true,
                "container_id": "tradingview_337f2"
            });
        
        },
        selectTradeType(event){

            const type =   event.target.value
           
            if (type == 'FX') {
                this.trade.type = type
                this.trade.selectedType = type
                this.trade.commodity = 'EURUSD'
                return this.LoadTradeChat()
            }
            if (type == 'BINANCE') {
                this.trade.type = type
                this.trade.selectedType = type
                this.trade.commodity = 'ETHBTC'
                return this.LoadTradeChat()
            }
            if (type == 'GOOG') {
                this.trade.type = ''
                this.trade.commodity = 'GOOGL'
                this.trade.selectedType = type
                return this.LoadTradeChat()
            }
        },

        selectCommodityType(event){

            const type =   event.target.value
        //    alert(type)
           this.trade.commodity = type
           return this.LoadTradeChat()
           
        },

        confirmTrade(type){
            // alert(type)
            if (this.trade.amount == 0) {
                this.$notify({
                    title: 'Error',
                    message: 'Please Enter a valid Amount.',
                    type: 'error',
                })
                return;
            }

            const method = type 
            let formData = new FormData();
            for ( var key in this.trade ) {
                let value = this.trade[key];
                formData.append(key, value);
            }
            formData.append('method', method);
            formData.append('_token', $('input[name=_token]').val());
            this.isLoading = true;
         
            axios.post(this.url.trade, formData)
            .then((response) => {
                var data = response.data
               // console.log(data);
               
                this.isLoading = false;
                this.$notify({
                    title: 'Success',
                    message: 'successfully',
                    type: 'success'
                });
                window.location.replace(data.url);

                // let elements = document.querySelector('#loader')
                // elements.style.display = 'none'
            })
            
            .catch( (error) => {
                let errorMessage = 'oops! Unable to complete request.';
                if(error.response){
                    let messages = [];
                    if(error.response.status == 400){
                        messages = error.response.data.messages;
                    }
                    errorMessage =  error.response.data.message;
                }
                
                this.$notify({
                    title: 'Error',
                    message: errorMessage
                });
               
                
            });
        }
    },
  })
  