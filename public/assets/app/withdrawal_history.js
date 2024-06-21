new Vue({
    el: '#content',
    data: {
      requestIsLoading: false,
      isLoading: false,
      currentStep: 1,
      selectedMethod: {},
      userWithdrawals: [],
      deposit: {
        amount: 0,
      },
      url: {
        deposit: '',
      },
    },
    mounted() {
      this.userWithdrawals = JSON.parse($("#userWithdrawal").val());
      this.url.deposit = $("#processFunding").val();
      
      this.selectedMethod = this.paymentMethods[0];
    },

    methods: {
        selectMethod(index){
            this.selectedMethod = this.paymentMethods[index];
            console.log(this.paymentMethods[index])
        },

        nextStep(){
            if (this.deposit.amount == 0) {
                this.$notify({
                    title: 'Error',
                    message: 'Please Enter a valid Amount.',
                    type: 'error',
                })
                return;
            }
            this.currentStep += 1;
        },

        confirmPayment(){
            //  alert('dfgdfg');
            //  return;
            let formData = new FormData();
            for ( var key in this.selectedMethod ) {
                let value = this.selectedMethod[key];
                formData.append(key, value);
            }
            formData.append('amount', this.deposit.amount);
            formData.append('_token', $('input[name=_token]').val());
            this.isLoading = true;
         
            axios.post(this.url.deposit, formData)
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
  