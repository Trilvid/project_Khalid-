new Vue({
    el: '#content',
    data: {
      requestIsLoading: false,
      isLoading: false,
      currentStep: 1,
      selectedMethod: {},
      allTradings: [],
      trade: {
        status: 'Lose',
      },
      url: {
        deposit: '',
        trade_action:'',
      },
      id: '',
    },
    mounted() {
      this.allTradings = JSON.parse($("#allTrading").val());
      this.url.trade_action = $("#tradeAction").val();
      
    },

    methods: {
     
        selectedUser(index){
            this.id =  this.allTradings[index].id
        },

        tradeAction(){
           
            let formData = new FormData();
            for ( var key in this.trade ) {
                let value = this.trade[key];
                formData.append(key, value);
            }
            formData.append('id', this.id);
            formData.append('_token', $('input[name=_token]').val());
            this.isLoading = true;
         
            axios.post(this.url.trade_action, formData)
            .then((response) => {
                // var data = response.data.results
               // console.log(data);
               
                this.isLoading = false;
                this.$notify({
                    title: 'Success',
                    message: 'successfully',
                    type: 'success'
                });
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
  