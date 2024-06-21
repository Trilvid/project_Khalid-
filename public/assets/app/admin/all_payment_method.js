new Vue({
    el: '#content',
    data: {
      requestIsLoading: false,
      isLoading: false,
      currentStep: 1,
      selectedMethod: {},
      paymentMethods: [],
      allpaymentmethods: [],
     
      url: {
        edit_payment_method: '',
      },
    },
    
    mounted() {
    //   this.paymentMethods = JSON.parse($("#paymentMethod").val());
      this.url.edit_payment_method = $("#editpayment").val();
      
      this.allpaymentmethods = JSON.parse($("#allpaymentmethods").val());

    },
 

    methods: {
     
        editMethod(index){

            // const selectedMethod =  this.allpaymentmethods[index]
            this.selectedMethod = this.allpaymentmethods[index];
           
            // alert(selectedMethod);
        },

        changePaymentDetails(){

            let formData = new FormData();
            for ( var key in this.selectedMethod ) {
                let value = this.selectedMethod[key];
                formData.append(key, value);
            }
            // formData.append('amount', this.deposit.amount);
            formData.append('_token', $('input[name=_token]').val());
            this.isLoading = true;
         
            axios.post(this.url.edit_payment_method, formData)
            .then((response) => {
                // var data = response.data.results
               // console.log(data);
               
                this.isLoading = false;
                this.$notify({
                    title: 'Success',
                    message: 'successfully',
                    type: 'success'
                });
                location.reload();
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
  