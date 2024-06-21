new Vue({
    el: '#content',
    data: {
      requestIsLoading: false,
      isLoading: false,
      currentStep: 1,
      selectedMethod: {},
      paymentMethods: [],
      deposit: {
        amount: 0,
      },
      url: {
        deposit: '',
      },
    },
    mounted() {
      this.paymentMethods = JSON.parse($("#paymentMethod").val());
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
        },

        CopyToClipboard() {
            // alert(index)
            var myInnerHtml = this.selectedMethod.wallet_address
         
            var webhook = myInnerHtml
            document.addEventListener('copy', (e) => {
              e.clipboardData.setData('text/html', webhook)
              e.clipboardData.setData('text/plain', webhook)
              e.preventDefault()
            })
            if (document.execCommand('copy')) {
              this.$notify({
                title: 'Success',
                message: 'Copied',
                type: 'success',
              })
            } else {
              this.$notify.error({
                title: 'Error',
                message: 'Unable to copy Embed link',
              })
              document.body.removeChild(el)
            }
          },
    },
  })
  